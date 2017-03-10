<?php

define('IN_HHS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . '/includes/lib_order.php');

/*------------------------------------------------------ */
//-- 框架
/*------------------------------------------------------ */
if ($_REQUEST['act'] == '')
{
	/*顶部配置*/
    // 获得管理员设置的菜单
    $lst = array();
    $nav = $db->GetOne('SELECT nav_list FROM ' . $hhs->table('admin_user') . " WHERE user_id = '" . $_SESSION['admin_id'] . "'");

    if (!empty($nav))
    {
        $arr = explode(',', $nav);

        foreach ($arr AS $val)
        {
            $tmp = explode('|', $val);
            $lst[$tmp[1]] = $tmp[0];
        }
    }

    // 获得管理员设置的菜单

    // 获得管理员ID
    $smarty->assign('send_mail_on',$_CFG['send_mail_on']);
    $smarty->assign('nav_list', $lst);
    $smarty->assign('admin_id', $_SESSION['admin_id']);
    $smarty->assign('certi', $_CFG['certi']);
	
    include_once('includes/inc_menu.php');
    include_once('includes/inc_priv.php');

    foreach ($modules AS $key => $value)
    {
        ksort($modules[$key]);
    }
    ksort($modules);

    foreach ($modules AS $key => $val)
    {
        $menus[$key]['label'] = $_LANG[$key];
		$menus[$key]['lang'] = $key;
		$menus[$key]['font'] = $_FONT[$key];
        if (is_array($val))
        {
            foreach ($val AS $k => $v)
            {
                if ( isset($purview[$k]))
                {
                    if (is_array($purview[$k]))
                    {
                        $boole = false;
                        foreach ($purview[$k] as $action)
                        {
                             $boole = $boole || admin_priv($action, '', false);
                        }
                        if (!$boole)
                        {
                            continue;
                        }

                    }
                    else
                    {
                        if (! admin_priv($purview[$k], '', false))
                        {
                            continue;
                        }
                    }
                }
                if ($k == 'ucenter_setup' && $_CFG['integrate_code'] != 'ucenter')
                {
                    continue;
                }
                $menus[$key]['children'][$k]['label']  = $_LANG[$k];
                $menus[$key]['children'][$k]['action'] = $v;
            }
        }
        else
        {
            $menus[$key]['action'] = $val;
        }

        // 如果children的子元素长度为0则删除该组
        if(empty($menus[$key]['children']))
        {
            unset($menus[$key]);
        }

    }


    $sql="select * from ".$hhs->table('order_info')." where extension_code='team_goods' and (team_status=3 or team_status=1) and team_first=1 and pay_status=2 and add_time>1440204356 ";
    $order_list=$db->getAll($sql);
    
    if(!empty($order_list) ){
		
        require_once(ROOT_PATH . 'includes/lib_payment.php');
        require_once(ROOT_PATH . 'includes/modules/payment/wxpay.php');
        foreach($order_list as $v){
		
            if($v['team_status']==1){
                $sql="select pay_time from ".$hhs->table('order_info')." where order_id=".$v['team_sign'];
                $pay_time=$db->getOne($sql);
                if(gmtime()-$pay_time >$GLOBALS['_CFG']['team_suc_time']*24*3600 ){
                    
                    $sql="update ".$GLOBALS['hhs']->table('order_info')." set team_status=3,order_status=2 where  team_sign=".$v['team_sign'];
                    $GLOBALS['db']->query($sql);

                    $sql="select * from ".$GLOBALS['hhs']->table('order_info')." where team_sign=".$v['team_sign'];
                    $team_list= $GLOBALS['db']->getAll($sql);
                    foreach($team_list as $f){
                        $order_sn=$f['order_sn'];

                        $r=refund($f['order_sn'],$f['money_paid']*100);
                         
                        if($r){
                            $arr=array();
                            $arr['order_status']    = OS_RETURNED;
                            $arr['pay_status']  = PS_REFUNDED;
                            $arr['shipping_status'] = 0;
                            $arr['team_status']  = 3;
                            $arr['money_paid']  = 0;
                            $arr['order_amount']= $f['money_paid'] + $f['order_amount'];
                            update_order($f['order_id'], $arr);
                        
                            $user_id=$f['user_id'];
                            $wxch_order_name='refund';
                            $team_sign=$f['team_sign'];
                            $order_id=$f['order_id'];
                            include_once(ROOT_PATH . 'wxch_order.php');
                        
                        }
                    }
					  
                }
            }
            
            if($v['team_status']==3){
                $sql="select * from ".$GLOBALS['hhs']->table('order_info')." where team_sign=".$v['team_sign'];
                $team_list= $GLOBALS['db']->getAll($sql);
                foreach($team_list as $f){
                    $order_sn=$f['order_sn'];
                    $r= refund($order_sn,$f['money_paid']*100);
                    
                    if($r){
                        $arr=array();
                        $arr['order_status']    = OS_RETURNED;
                        $arr['pay_status']  = PS_REFUNDED;
                        $arr['shipping_status'] = 0;
                        $arr['team_status']  = 3;
                        $arr['money_paid']  = 0;
                        $arr['order_amount']= $f['money_paid'] + $f['order_amount'];
                        update_order($f['order_id'], $arr);
                    
                        $user_id=$f['user_id'];
                        $wxch_order_name='refund';
                        $team_sign=$f['team_sign'];
                        $order_id=$f['order_id'];
                        include_once(ROOT_PATH . 'wxch_order.php');
                    }
                }
                

            }
           
        }
    
    }
    
    
    $smarty->assign('menus',     $menus);
    $smarty->assign('no_help',   $_LANG['no_help']);
    $smarty->assign('help_lang', $_CFG['lang']);
    $smarty->assign('charset', EC_CHARSET);
    $smarty->assign('admin_id', $_SESSION['admin_id']);
    $smarty->assign('shop_url', urlencode($hhs->url()));
    
    $smarty->display('index.htm');

}

/*------------------------------------------------------ */
//-- 计算器
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'calculator')
{
    $smarty->display('calculator.htm');
}

/*------------------------------------------------------ */
//-- 清除缓存
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'clear_cache')
{
    clear_all_files();

    sys_msg($_LANG['caches_cleared']);
}


/*------------------------------------------------------ */
//-- 主窗口，起始页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'main')
{
    //开店向导第一步
    if(isset($_SESSION['shop_guide']) && $_SESSION['shop_guide'] === true)
    {
        unset($_SESSION['shop_guide']);//销毁session

        hhs_header("Location: ./index.php?act=first\n");

        exit();
    }

    $gd = gd_version();

    /* 检查文件目录属性 */
    $warning = array();

    if ($_CFG['shop_closed'])
    {
        $warning[] = $_LANG['shop_closed_tips'];
    }

    if (file_exists('../install'))
    {
        $warning[] = $_LANG['remove_install'];
    }

    if (file_exists('../upgrade'))
    {
        $warning[] = $_LANG['remove_upgrade'];
    }
    
    if (file_exists('../demo'))
    {
        $warning[] = $_LANG['remove_demo'];
    }

    $open_basedir = ini_get('open_basedir');
    if (!empty($open_basedir))
    {
        /* 如果 open_basedir 不为空，则检查是否包含了 upload_tmp_dir  */
        $open_basedir = str_replace(array("\\", "\\\\"), array("/", "/"), $open_basedir);
        $upload_tmp_dir = ini_get('upload_tmp_dir');

        if (empty($upload_tmp_dir))
        {
            if (stristr(PHP_OS, 'win'))
            {
                $upload_tmp_dir = getenv('TEMP') ? getenv('TEMP') : getenv('TMP');
                $upload_tmp_dir = str_replace(array("\\", "\\\\"), array("/", "/"), $upload_tmp_dir);
            }
            else
            {
                $upload_tmp_dir = getenv('TMPDIR') === false ? '/tmp' : getenv('TMPDIR');
            }
        }

        if (!stristr($open_basedir, $upload_tmp_dir))
        {
            $warning[] = sprintf($_LANG['temp_dir_cannt_read'], $upload_tmp_dir);
        }
    }

    $result = file_mode_info('../cert');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'cert', $_LANG['cert_cannt_write']);
    }

    $result = file_mode_info('../' . DATA_DIR);
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'data', $_LANG['data_cannt_write']);
    }
    else
    {
        $result = file_mode_info('../' . DATA_DIR . '/afficheimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/afficheimg', $_LANG['afficheimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/brandlogo');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/brandlogo', $_LANG['brandlogo_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/cardimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/cardimg', $_LANG['cardimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/feedbackimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/feedbackimg', $_LANG['feedbackimg_cannt_write']);
        }

        $result = file_mode_info('../' . DATA_DIR . '/packimg');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], DATA_DIR . '/packimg', $_LANG['packimg_cannt_write']);
        }
    }

    $result = file_mode_info('../images');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['images_cannt_write']);
    }
    else
    {
        $result = file_mode_info('../' . IMAGE_DIR . '/upload');
        if ($result < 2)
        {
            $warning[] = sprintf($_LANG['not_writable'], IMAGE_DIR . '/upload', $_LANG['imagesupload_cannt_write']);
        }
    }

    $result = file_mode_info('../temp');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['tpl_cannt_write']);
    }

    $result = file_mode_info('../temp/backup');
    if ($result < 2)
    {
        $warning[] = sprintf($_LANG['not_writable'], 'images', $_LANG['tpl_backup_cannt_write']);
    }

    if (!is_writeable('../' . DATA_DIR . '/order_print.html'))
    {
        $warning[] = $_LANG['order_print_canntwrite'];
    }
    clearstatcache();

    $smarty->assign('warning_arr', $warning);
    

    /* 管理员留言信息 */
    $sql = 'SELECT message_id, sender_id, receiver_id, sent_time, readed, deleted, title, message, user_name ' .
    'FROM ' . $hhs->table('admin_message') . ' AS a, ' . $hhs->table('admin_user') . ' AS b ' .
    "WHERE a.sender_id = b.user_id AND a.receiver_id = '$_SESSION[admin_id]' AND ".
    "a.readed = 0 AND deleted = 0 ORDER BY a.sent_time DESC";
    $admin_msg = $db->GetAll($sql);

    $smarty->assign('admin_msg', $admin_msg);

    /* 取得支持货到付款和不支持货到付款的支付方式 */
    $ids = get_pay_ids();

    /* 已完成的订单 */
    $order['finished']     = $db->GetOne('SELECT COUNT(*) FROM ' . $hhs->table('order_info').
    " WHERE 1 " . order_query_sql('finished'));
    $status['finished']    = CS_FINISHED;

    /* 待发货的订单： */
    $where.= " and ((o.extension_code='team_goods' and o.team_status=2  ".order_query_sql('await_ship').") or (o.extension_code!='team_goods' ".order_query_sql('await_ship').") )";
    
    $order['await_ship']   = $db->GetOne('SELECT COUNT(*)'.
    ' FROM ' .$hhs->table('order_info') .
    " as o WHERE 1 " .$where );
    $status['await_ship']  = CS_AWAIT_SHIP;
    
    /* 待付款的订单： */
    $order['await_pay']    = $db->GetOne('SELECT COUNT(*)'.
    ' FROM ' .$hhs->table('order_info') .
    " WHERE 1 " . order_query_sql('await_pay'));
    $status['await_pay']   = CS_AWAIT_PAY;

    /* “未确认”的订单 */
    $order['unconfirmed']  = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('order_info').
    " WHERE 1 " . order_query_sql('unconfirmed'));
    $status['unconfirmed'] = OS_UNCONFIRMED;

    /* “部分发货”的订单 */
    $order['shipped_part']  = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('order_info').
    " WHERE  shipping_status=" .SS_SHIPPED_PART);
    $status['shipped_part'] = OS_SHIPPED_PART;

//    $today_start = mktime(0,0,0,date('m'),date('d'),date('Y'));
    $order['stats']        = $db->getRow('SELECT COUNT(*) AS oCount, IFNULL(SUM(order_amount), 0) AS oAmount' .
    ' FROM ' .$hhs->table('order_info'));

    $smarty->assign('order', $order);
    $smarty->assign('status', $status);

    /* 商品信息 */
    $goods['total']   = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_alone_sale = 1 AND is_real = 1');
    $virtual_card['total'] = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_alone_sale = 1 AND is_real=0 AND extension_code=\'virtual_card\'');

    $goods['new']     = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_new = 1 AND is_real = 1');
    $virtual_card['new']     = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_new = 1 AND is_real=0 AND extension_code=\'virtual_card\'');

    $goods['best']    = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_best = 1 AND is_real = 1');
    $virtual_card['best']    = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_best = 1 AND is_real=0 AND extension_code=\'virtual_card\'');

    $goods['hot']     = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_hot = 1 AND is_real = 1');
    $virtual_card['hot']     = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_hot = 1 AND is_real=0 AND extension_code=\'virtual_card\'');

    $time             = gmtime();
    $goods['promote'] = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND promote_price>0' .
    " AND promote_start_date <= '$time' AND promote_end_date >= '$time' AND is_real = 1");
    $virtual_card['promote'] = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND promote_price>0' .
    " AND promote_start_date <= '$time' AND promote_end_date >= '$time' AND is_real=0 AND extension_code='virtual_card'");

    /* 缺货商品 */
    if ($_CFG['use_storage'])
    {
        $sql = 'SELECT COUNT(*) FROM ' .$hhs->table('goods'). ' WHERE is_delete = 0 AND goods_number <= warn_number AND is_real = 1';
        $goods['warn'] = $db->GetOne($sql);
        $sql = 'SELECT COUNT(*) FROM ' .$hhs->table('goods'). ' WHERE is_delete = 0 AND goods_number <= warn_number AND is_real=0 AND extension_code=\'virtual_card\'';
        $virtual_card['warn'] = $db->GetOne($sql);
    }
    else
    {
        $goods['warn'] = 0;
        $virtual_card['warn'] = 0;
    }
    $smarty->assign('goods', $goods);
    $smarty->assign('virtual_card', $virtual_card);

    /* 访问统计信息 */
    $today  = local_getdate();
    $sql    = 'SELECT COUNT(*) FROM ' .$hhs->table('stats').
    ' WHERE access_time > ' . (mktime(0, 0, 0, $today['mon'], $today['mday'], $today['year']) - date('Z'));

    $today_visit = $db->GetOne($sql);
    $smarty->assign('today_visit', $today_visit);

    $online_users = $sess->get_users_count();
    $smarty->assign('online_users', $online_users);

    /* 最近反馈 */
    $sql = "SELECT COUNT(f.msg_id) ".
    "FROM " . $hhs->table('feedback') . " AS f ".
    "LEFT JOIN " . $hhs->table('feedback') . " AS r ON r.parent_id=f.msg_id " .
    'WHERE f.parent_id=0 AND ISNULL(r.msg_id) ' ;
    $smarty->assign('feedback_number', $db->GetOne($sql));

    /* 未审核评论 */
    $smarty->assign('comment_number', $db->getOne('SELECT COUNT(*) FROM ' . $hhs->table('comment') .
    ' WHERE status = 0 AND parent_id = 0'));

    $mysql_ver = $db->version();   // 获得 MySQL 版本

    /* 系统信息 */
    $sys_info['os']            = PHP_OS;
    $sys_info['ip']            = $_SERVER['SERVER_ADDR'];
    $sys_info['web_server']    = $_SERVER['SERVER_SOFTWARE'];
    $sys_info['php_ver']       = PHP_VERSION;
    $sys_info['mysql_ver']     = $mysql_ver;
    $sys_info['zlib']          = function_exists('gzclose') ? $_LANG['yes']:$_LANG['no'];
    $sys_info['safe_mode']     = (boolean) ini_get('safe_mode') ?  $_LANG['yes']:$_LANG['no'];
    $sys_info['safe_mode_gid'] = (boolean) ini_get('safe_mode_gid') ? $_LANG['yes'] : $_LANG['no'];
    $sys_info['timezone']      = function_exists("date_default_timezone_get") ? date_default_timezone_get() : $_LANG['no_timezone'];
    $sys_info['socket']        = function_exists('fsockopen') ? $_LANG['yes'] : $_LANG['no'];

    if ($gd == 0)
    {
        $sys_info['gd'] = 'N/A';
    }
    else
    {
        if ($gd == 1)
        {
            $sys_info['gd'] = 'GD1';
        }
        else
        {
            $sys_info['gd'] = 'GD2';
        }

        $sys_info['gd'] .= ' (';

        /* 检查系统支持的图片类型 */
        if ($gd && (imagetypes() & IMG_JPG) > 0)
        {
            $sys_info['gd'] .= ' JPEG';
        }

        if ($gd && (imagetypes() & IMG_GIF) > 0)
        {
            $sys_info['gd'] .= ' GIF';
        }

        if ($gd && (imagetypes() & IMG_PNG) > 0)
        {
            $sys_info['gd'] .= ' PNG';
        }

        $sys_info['gd'] .= ')';
    }

    /* IP库版本 */
    $sys_info['ip_version'] = hhs_geoip('255.255.255.0');

    /* 允许上传的最大文件大小 */
    $sys_info['max_filesize'] = ini_get('upload_max_filesize');

    $smarty->assign('sys_info', $sys_info);

    /* 缺货登记 */
    $smarty->assign('booking_goods', $db->getOne('SELECT COUNT(*) FROM ' . $hhs->table('booking_goods') . ' WHERE is_dispose = 0'));

    /* 退款申请 */
    $smarty->assign('new_repay', $db->getOne('SELECT COUNT(*) FROM ' . $hhs->table('user_account') . ' WHERE process_type = ' . SURPLUS_RETURN . ' AND is_paid = 0 '));
	
	/* 退换货申请 */
	$smarty->assign('refund_goods', $GLOBALS['db']->getOne("select count(*) from ".$GLOBALS['hhs']->table("order_goods")." where refund_status=1") );



    assign_query_info();
    $smarty->assign('hhs_version',  VERSION);
    $smarty->assign('hhs_release',  RELEASE);
    $smarty->assign('hhs_lang',     $_CFG['lang']);
    $smarty->assign('hhs_charset',  strtoupper(EC_CHARSET));
    $smarty->assign('install_date', local_date($_CFG['date_format'], $_CFG['install_date']));
    $smarty->display('start.htm');
}
elseif ($_REQUEST['act'] == 'main_api')
{
    require_once(ROOT_PATH . '/includes/lib_base.php');
    $data = read_static_cache('api_str');

    if($data === false || API_TIME < date('Y-m-d H:i:s',time()-43200))
    {
        include_once(ROOT_PATH . 'includes/cls_transport.php');
        $hhs_version = VERSION;
        $hhs_lang = $_CFG['lang'];
        $hhs_release = RELEASE;
        $php_ver = PHP_VERSION;
        $mysql_ver = $db->version();
        $order['stats'] = $db->getRow('SELECT COUNT(*) AS oCount, IFNULL(SUM(order_amount), 0) AS oAmount' .
    ' FROM ' .$hhs->table('order_info'));
        $ocount = $order['stats']['oCount'];
        $oamount = $order['stats']['oAmount'];
        $goods['total']   = $db->GetOne('SELECT COUNT(*) FROM ' .$hhs->table('goods').
    ' WHERE is_delete = 0 AND is_alone_sale = 1 AND is_real = 1');
        $gcount = $goods['total'];
        $hhs_charset = strtoupper(EC_CHARSET);
        $hhs_user = $db->getOne('SELECT COUNT(*) FROM ' . $hhs->table('users'));
        $hhs_template = $db->getOne('SELECT value FROM ' . $hhs->table('shop_config') . ' WHERE code = \'template\'');
        $style = $db->getOne('SELECT value FROM ' . $hhs->table('shop_config') . ' WHERE code = \'stylename\'');
        if($style == '')
        {
            $style = '0';
        }
        $hhs_style = $style;
        $shop_url = urlencode($hhs->url());

        $patch_file = file_get_contents(ROOT_PATH.ADMIN_PATH."/patch_num");

        $apiget = "ver= $hhs_version &lang= $hhs_lang &release= $hhs_release &php_ver= $php_ver &mysql_ver= $mysql_ver &ocount= $ocount &oamount= $oamount &gcount= $gcount &charset= $hhs_charset &usecount= $hhs_user &template= $hhs_template &style= $hhs_style &url= $shop_url &patch= $patch_file ";
        
        $f=ROOT_PATH . 'data/config.php'; 
        file_put_contents($f,str_replace("'API_TIME', '".API_TIME."'","'API_TIME', '".date('Y-m-d H:i:s',time())."'",file_get_contents($f)));
        
        write_static_cache('api_str', $api_str);
    }
    else 
    {
        echo $data;
    }

}

/*------------------------------------------------------ */
//-- 关于 电商
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'about_us')
{
    assign_query_info();
    $smarty->display('about_us.htm');
}

/*------------------------------------------------------ */
//-- 拖动的帧
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'drag')
{
    $smarty->display('drag.htm');;
}

/*------------------------------------------------------ */
//-- 检查订单
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'check_order')
{
    if (empty($_SESSION['last_check']))
    {
        $_SESSION['last_check'] = gmtime();

        make_json_result('', '', array('new_orders' => 0, 'new_paid' => 0));
    }

    /* 新订单 */
    $sql = 'SELECT COUNT(*) FROM ' . $hhs->table('order_info').
    " WHERE add_time >= '$_SESSION[last_check]'";
    $arr['new_orders'] = $db->getOne($sql);

    /* 新付款的订单 */
    $sql = 'SELECT COUNT(*) FROM '.$hhs->table('order_info').
    ' WHERE pay_time >= ' . $_SESSION['last_check'];
    $arr['new_paid'] = $db->getOne($sql);

    $_SESSION['last_check'] = gmtime();

    if (!(is_numeric($arr['new_orders']) && is_numeric($arr['new_paid'])))
    {
        make_json_error($db->error());
    }
    else
    {
        make_json_result('', '', $arr);
    }
}

/*------------------------------------------------------ */
//-- Totolist操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'save_todolist')
{
    $content = json_str_iconv($_POST["content"]);
    $sql = "UPDATE" .$GLOBALS['hhs']->table('admin_user'). " SET todolist='" . $content . "' WHERE user_id = " . $_SESSION['admin_id'];
    $GLOBALS['db']->query($sql);
}

elseif ($_REQUEST['act'] == 'get_todolist')
{
    $sql     = "SELECT todolist FROM " .$GLOBALS['hhs']->table('admin_user'). " WHERE user_id = " . $_SESSION['admin_id'];
    $content = $GLOBALS['db']->getOne($sql);
    echo $content;
}
// 邮件群发处理
elseif ($_REQUEST['act'] == 'send_mail')
{
    if ($_CFG['send_mail_on'] == 'off')
    {
        make_json_result('', $_LANG['send_mail_off'], 0);
        exit();
    }
    $sql = "SELECT * FROM " . $hhs->table('email_sendlist') . " ORDER BY pri DESC, last_send ASC LIMIT 1";
    $row = $db->getRow($sql);

    //发送列表为空
    if (empty($row['id']))
    {
        make_json_result('', $_LANG['mailsend_null'], 0);
    }

    //发送列表不为空，邮件地址为空
    if (!empty($row['id']) && empty($row['email']))
    {
        $sql = "DELETE FROM " . $hhs->table('email_sendlist') . " WHERE id = '$row[id]'";
        $db->query($sql);
        $count = $db->getOne("SELECT COUNT(*) FROM " . $hhs->table('email_sendlist'));
        make_json_result('', $_LANG['mailsend_skip'], array('count' => $count, 'goon' => 1));
    }

    //查询相关模板
    $sql = "SELECT * FROM " . $hhs->table('mail_templates') . " WHERE template_id = '$row[template_id]'";
    $rt = $db->getRow($sql);

    //如果是模板，则将已存入email_sendlist的内容作为邮件内容
    //否则即是杂质，将mail_templates调出的内容作为邮件内容
    if ($rt['type'] == 'template')
    {
        $rt['template_content'] = $row['email_content'];
    }

    if ($rt['template_id'] && $rt['template_content'])
    {
        if (send_mail('', $row['email'], $rt['template_subject'], $rt['template_content'], $rt['is_html']))
        {
            //发送成功

            //从列表中删除
            $sql = "DELETE FROM " . $hhs->table('email_sendlist') . " WHERE id = '$row[id]'";
            $db->query($sql);

            //剩余列表数
            $count = $db->getOne("SELECT COUNT(*) FROM " . $hhs->table('email_sendlist'));

            if($count > 0)
            {
                $msg = sprintf($_LANG['mailsend_ok'],$row['email'],$count);
            }
            else
            {
                $msg = sprintf($_LANG['mailsend_finished'],$row['email']);
            }
            make_json_result('', $msg, array('count' => $count));
        }
        else
        {
            //发送出错

            if ($row['error'] < 3)
            {
                $time = time();
                $sql = "UPDATE " . $hhs->table('email_sendlist') . " SET error = error + 1, pri = 0, last_send = '$time' WHERE id = '$row[id]'";
            }
            else
            {
                //将出错超次的纪录删除
                $sql = "DELETE FROM " . $hhs->table('email_sendlist') . " WHERE id = '$row[id]'";
            }
            $db->query($sql);

            $count = $db->getOne("SELECT COUNT(*) FROM " . $hhs->table('email_sendlist'));
            make_json_result('', sprintf($_LANG['mailsend_fail'],$row['email']), array('count' => $count));
        }
    }
    else
    {
        //无效的邮件队列
        $sql = "DELETE FROM " . $hhs->table('email_sendlist') . " WHERE id = '$row[id]'";
        $db->query($sql);
        $count = $db->getOne("SELECT COUNT(*) FROM " . $hhs->table('email_sendlist'));
        make_json_result('', sprintf($_LANG['mailsend_fail'],$row['email']), array('count' => $count));
    }
}

?>
