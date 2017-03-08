<?php

if (!defined('IN_HHS'))
{
    die('Hacking attempt');
}

error_reporting(E_ALL);

if (__FILE__ == '')
{
    die('Fatal error code: 0');
}

/* 取得当前hhshop所在的根目录 */
define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));


/* 初始化设置 */
@ini_set('memory_limit',          '64M');
@ini_set('session.cache_expire',  180);
@ini_set('session.use_trans_sid', 0);
@ini_set('session.use_cookies',   1);
@ini_set('session.auto_start',    0);
@ini_set('display_errors',        1);

if (DIRECTORY_SEPARATOR == '\\')
{
    @ini_set('include_path', '.;' . ROOT_PATH);
}
else
{
    @ini_set('include_path', '.:' . ROOT_PATH);
}

require(ROOT_PATH . 'data/config.php');

if (defined('DEBUG_MODE') == false)
{
    define('DEBUG_MODE', 0);
}

if (PHP_VERSION >= '5.1' && !empty($timezone))
{
    date_default_timezone_set($timezone);
}

$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
if ('/' == substr($php_self, -1))
{
    $php_self .= 'index.php';
}
define('PHP_SELF', $php_self);

require(ROOT_PATH . 'includes/inc_constant.php');
require(ROOT_PATH . 'includes/cls_hhshop.php');
require(ROOT_PATH . 'includes/cls_error.php');
require(ROOT_PATH . 'includes/lib_time.php');
require(ROOT_PATH . 'includes/lib_base.php');
require(ROOT_PATH . 'includes/lib_common.php');
require(ROOT_PATH . 'includes/lib_main.php');
require(ROOT_PATH . 'includes/lib_insert.php');
require(ROOT_PATH . 'includes/lib_goods.php');
require(ROOT_PATH . 'includes/lib_article.php');
require(ROOT_PATH . 'includes/lib_wxf.php');

/* 对用户传入的变量进行转义操作。*/
if (!get_magic_quotes_gpc())
{
    if (!empty($_GET))
    {
        $_GET  = addslashes_deep($_GET);
    }
    if (!empty($_POST))
    {
        $_POST = addslashes_deep($_POST);
    }

    $_COOKIE   = addslashes_deep($_COOKIE);
    $_REQUEST  = addslashes_deep($_REQUEST);
}

/* 创建 电商 对象 */
$hhs = new HHS($db_name, $prefix);
define('DATA_DIR', $hhs->data_dir());
define('IMAGE_DIR', $hhs->image_dir());

/* 初始化数据库类 */
require(ROOT_PATH . 'includes/cls_mysql.php');
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);
$db->set_disable_cache_tables(array($hhs->table('sessions'), $hhs->table('sessions_data'), $hhs->table('cart')));
$db_host = $db_user = $db_pass = $db_name = NULL;

/* 创建错误处理对象 */
$err = new hhs_error('message.dwt');

/* 载入系统参数 */
$_CFG = load_config();

/* 载入语言文件 */
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/common.php');

if ($_CFG['shop_closed'] == 1)
{
    /* 商店关闭了，输出关闭的消息 */
    header('Content-type: text/html; charset='.EC_CHARSET);

    die('<div style="margin: 150px; text-align: center; font-size: 14px"><p>' . $_LANG['shop_closed'] . '</p><p>' . $_CFG['close_comment'] . '</p></div>');
}

if (is_spider())
{
    /* 如果是蜘蛛的访问，那么默认为访客方式，并且不记录到日志中 */
    if (!defined('INIT_NO_USERS'))
    {
        define('INIT_NO_USERS', true);
        /* 整合UC后，如果是蜘蛛访问，初始化UC需要的常量 */
        if($_CFG['integrate_code'] == 'ucenter')
        {
             $user = & init_users();
        }
    }
    $_SESSION = array();
    $_SESSION['user_id']     = 0;
    $_SESSION['user_name']   = '';
    $_SESSION['email']       = '';
    $_SESSION['user_rank']   = 0;
    $_SESSION['discount']    = 1.00;
}

if (!defined('INIT_NO_USERS'))
{
    /* 初始化session */
    include(ROOT_PATH . 'includes/cls_session.php');

    $sess = new cls_session($db, $hhs->table('sessions'), $hhs->table('sessions_data'));

    define('SESS_ID', $sess->get_session_id());
}
if(isset($_SERVER['PHP_SELF']))
{
    $_SERVER['PHP_SELF']=htmlspecialchars($_SERVER['PHP_SELF']);
}
if (!defined('INIT_NO_SMARTY'))
{
    header('Cache-control: private');
    header('Content-type: text/html; charset='.EC_CHARSET);

    /* 创建 Smarty 对象。*/
    require(ROOT_PATH . 'includes/cls_template.php');
    $smarty = new cls_template;

    $smarty->cache_lifetime = $_CFG['cache_time'];
    $smarty->template_dir   = ROOT_PATH . 'themes/' . $_CFG['template'];
    $smarty->cache_dir      = ROOT_PATH . 'temp/caches';
    $smarty->compile_dir    = ROOT_PATH . 'temp/compiled';

    if ((DEBUG_MODE & 2) == 2)
    {
        $smarty->direct_output = true;
        $smarty->force_compile = true;
    }
    else
    {
        $smarty->direct_output = false;
        $smarty->force_compile = false;
    }

    $smarty->assign('lang', $_LANG);
    $smarty->assign('hhs_charset', EC_CHARSET);
	$smarty->assign('hhs_css_path', 'themes/' . $_CFG['template'].'/css');
	$smarty->assign('hhs_img_path', 'themes/' . $_CFG['template'].'/images');

}

if (!defined('INIT_NO_USERS'))
{
    /* 会员信息 */
    $user =& init_users();

    if (!isset($_SESSION['user_id']))
    {
        /* 获取投放站点的名称 */
        $site_name = isset($_GET['from'])   ? htmlspecialchars($_GET['from']) : addslashes($_LANG['self_site']);
        $from_ad   = !empty($_GET['ad_id']) ? intval($_GET['ad_id']) : 0;

        $_SESSION['from_ad'] = $from_ad; // 用户点击的广告ID
        $_SESSION['referer'] = stripslashes($site_name); // 用户来源

        unset($site_name);

        if (!defined('INGORE_VISIT_STATS'))
        {
            visit_stats();
        }
    }

    if (empty($_SESSION['user_id']))
    {
        if ($user->get_cookie())
        {
            /* 如果会员已经登录并且还没有获得会员的帐户余额、积分以及优惠券 */
            if ($_SESSION['user_id'] > 0)
            {
                update_user_info();
            }
        }
        else
        {
            $_SESSION['user_id']     = 0;
            $_SESSION['user_name']   = '';
            $_SESSION['email']       = '';
            $_SESSION['user_rank']   = 0;
            $_SESSION['discount']    = 1.00;
            if (!isset($_SESSION['login_fail']))
            {
                $_SESSION['login_fail'] = 0;
            }
        }
    } 

    /* 设置推荐会员 */
    if (isset($_GET['u']))
    {
        set_affiliate();
    }

    /* session 不存在，检查cookie */
    if (!empty($_COOKIE['HHS']['user_id']) && !empty($_COOKIE['HHS']['password']))
    {
        // 找到了cookie, 验证cookie信息
        $sql = 'SELECT user_id, user_name, password ' .
                ' FROM ' .$hhs->table('users') .
                " WHERE user_id = '" . intval($_COOKIE['HHS']['user_id']) . "' AND password = '" .$_COOKIE['HHS']['password']. "'";

        $row = $db->GetRow($sql);

        if (!$row)
        {
            // 没有找到这个记录
           $time = time() - 3600;
           setcookie("HHS[user_id]",  '', $time, '/');
           setcookie("HHS[password]", '', $time, '/');
        }
        else
        {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            update_user_info();
        }
    }

    if (isset($smarty))
    {
        $smarty->assign('hhs_session', $_SESSION);
    }
}

if ((DEBUG_MODE & 1) == 1)
{
    error_reporting(E_ALL);
}
else
{
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
}
if ((DEBUG_MODE & 4) == 4)
{
    include(ROOT_PATH . 'includes/lib.debug.php');
}

/* 判断是否支持 Gzip 模式 */
if (!defined('INIT_NO_SMARTY') && gzip_enabled())
{
    ob_start('ob_gzhandler');
}
else
{
    ob_start();
}

$smarty->assign('shop_name', $_CFG['shop_name'] );
$smarty->assign('HTTP_HOST', $_SERVER['HTTP_HOST'] );
$weixin_config_rows = $db->getRow("select * from ".$hhs->table('weixin_config')."");
$appid = $weixin_config_rows['appid'];
$appsecret =$weixin_config_rows['appsecret'];
include(ROOT_PATH . 'wxpay/class_weixin.php');

setcookie("appid",$appid);
setcookie("appsecret",$appsecret);
/**/


if(isset($_GET['code'])){
    $back_openid_arr=get_openid($appid,$appsecret,$_GET['code']);
    
    $_SESSION['xaphp_sopenid']=$back_openid_arr['openid'];
    $_SESSION['A_token']=$back_openid_arr['access_token'];
    $pattern1 = '/[\?]code=[^&]*/i';
    $pattern2 = "/&code=[^&]*/i";
    //echo $_SERVER['REQUEST_URI'];exit();
    $uri=preg_replace($pattern1, '', $_SERVER['REQUEST_URI']);
    $uri=preg_replace($pattern2, '', $uri);
    $url="http://" . $_SERVER['HTTP_HOST'] .$uri;
    
    header("location:".$url.""); 
    exit(); 
}
//if(isset($_GET['ii'])&&$_GET['ii'] =='lii'){
    $_SESSION['xaphp_sopenid']='onSWAuOcOaSJgGidvKTJoj6u0rCc';
//}

/*调试微网站暂时关闭*/

if(empty($_SESSION['xaphp_sopenid']))
{
    $state=urlencode($_SERVER['REQUEST_URI']);
    
	$redirect_uri="http://" . $_SERVER['HTTP_HOST'] . "/wxpay/wx_oauth.php";  //http://vshop.xakc.net/ " . $_SERVER['SERVER_NAME'] . "  " . $_SERVER['HTTP_HOST'] . "
	
	$redirect_uri=urlencode($redirect_uri);
	
	$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=".$state."#wechat_redirect";
	header("location:".$url."");
	exit;
}

//$_COOKIE['xaphp_sopenid']='onSWAuOcOaSJgGidvKTJoj6u0rCc';
if(!empty($_SESSION['xaphp_sopenid'])){
    
	require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
	$sql="select * from ".$hhs->table('users')." where openid='".trim($_SESSION['xaphp_sopenid'])."'";
	$rs=$db->getRow($sql);

	//根据全局token获取用户信息
	if(!empty($_SESSION['A_token'])){
        //echo $_SESSION['A_token'];
	    define("ACCESS_TOKEN",$_SESSION['A_token']);//
	    $userinfo_back_arr=getUserInfo($_SESSION['xaphp_sopenid']);
	    //var_dump($userinfo_back_arr);exit();
	    //获取头像
	    $headimgurl=$userinfo_back_arr["headimgurl"];
	}
	//单单为了获取是否关注
	$weixin=new class_weixin($appid,$appsecret);
	$access_token = $weixin->getAccessToken();
	if(!empty($access_token)){
	    $userinfo_back_arr2=getUserInfo($_SESSION['xaphp_sopenid'],2);
	    $userinfo_back_arr['subscribe']=$userinfo_back_arr2["subscribe"];
	    $smarty->assign("subscribe" , $userinfo_back_arr['subscribe']);
	}    
	    
	    //  if(grabImage($headimgurl,$face))
	        //		  {
	        //  new resizeimage($face,"300","300","0",$face);
	        //  echo $face."dddddddd";exit;
	        //			  $db->query("update cool_crm set small_pic='".$face."' where wx_openid='".$_SESSION["openid_".$weixin_id]."' and weixin_id='".$weixin_id."'");
	        //			 // file_get_contents("http://cd.coolfull.net/api/set_face.php?face=".$face."&openid=".$_SESSION["openid_".$weixin_id]."");
	        //		  }
	//}
	
	
	if(empty($rs)){
		include_once(ROOT_PATH . 'includes/lib_passport.php');
		$ychar="0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
		$list=explode(",",$ychar);
		$password='';
		for($i=0;$i<6;$i++){
			$randnum=rand(0,35);
			$password.=$list[$randnum];
		}
		$sql="select user_id from ".$hhs->table('users')." order by user_id desc limit 1";
		$user_id=$db->getOne($sql)+1;
		$username = 'wx'.$user_id.mt_rand(0,100);
		$email    = '';
		$other['msn'] = '';
		$other['qq'] = '';
		$other['office_phone'] = '';
		$other['home_phone'] = '';
		$other['mobile_phone'] = '';
		$other['openid'] = $_SESSION['xaphp_sopenid'];
		
		//&& is_username($userinfo_back_arr['nickname'])
		if($userinfo_back_arr['nickname']!=''  && !preg_match('/\'\/^\\s*$|^c:\\\\con\\\\con$|[%,\\*\\"\\s\\t\\<\\>\\&\'\\\\]/', $userinfo_back_arr['nickname'])  ){
			/*
			echo"<script>";
			echo"alert('请先关注公众号');";
			echo"</script>";exit();*/
			//echo $userinfo_back_arr['nickname'];exit();
			$other['uname']=$userinfo_back_arr['nickname'];
		} 
		else
		{
			$other['uname'] =$username;
		}
		
		if (register($username, $password, $email, $other) !== false)
		//if (register($username, $password, $email, $other) !== false)
		{	
			$parent_id=get_affiliate();
			///echo $parent_id."dddd111";exit;
			$sql="update ".$hhs->table('users')." set parent_id=".$parent_id." where user_id=".$_SESSION['user_id'];
			$db->query($sql);
			$str="";
			if(!empty($userinfo_back_arr)){
			    if(!empty($headimgurl) ){
			        $str.=" headimgurl='".$headimgurl."' ,";
			    }
			    if(isset($userinfo_back_arr['subscribe'])){
			        $str.=" is_subscribe=".$userinfo_back_arr['subscribe']." ,";
			    }

			    if($str!=''){
			    	$str=substr($str,0,-1);
			    	$sql="update ".$hhs->table('users')." set ".$str." where user_id=".$_SESSION['user_id'];
			    	$db->query($sql);
			    }
			    
			}

			
		}else{
			$aa='';
			foreach ($err->_message AS $msg)
            {
                $aa .= htmlspecialchars($msg) ;
            }
            echo $aa;exit();
		}
	}else{	
	    //若是用户名和头像发生变化，修改
	   //&& is_username($userinfo_back_arr['nickname'])
	   $str="";
	   if(!empty($userinfo_back_arr)){
	       if($userinfo_back_arr['nickname']!=''&&$userinfo_back_arr['nickname']!=$rs['uname']  && !preg_match('/\'\/^\\s*$|^c:\\\\con\\\\con$|[%,\\*\\"\\s\\t\\<\\>\\&\'\\\\]/', $userinfo_back_arr['nickname'])  ){
	           $str.=" uname='".$userinfo_back_arr['nickname']."' ,";
	       }
	       if($headimgurl!=''&& $headimgurl!=$rs['headimgurl']){
	           $str.=" headimgurl='".$headimgurl."' ,";
	       }
	       if(isset($userinfo_back_arr['subscribe'])){
	           $str.=" is_subscribe=".$userinfo_back_arr['subscribe']." ,";
	       }
	       if($str!=''){
	           $str=substr($str,0,-1);
	           $sql="update ".$hhs->table('users')." set ".$str." where user_id=".$rs['user_id'];
	           $db->query($sql);
	       }
	       
	   }

		if($_SESSION['user_id']!=$rs['user_id']){
		    $_SESSION['user_id']   = $rs['user_id'];
		    $_SESSION['user_name'] = $rs['user_name'];
		    update_user_info();
		    recalculate_price();
		}
		
	}

}
 //$user->set_session("山峰");
 //$user->set_cookie("山峰", null);
?>
