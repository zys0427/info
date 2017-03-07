<?php

/**
 * 电商 商品详情
 * ============================================================================
 * * 版权所有 2012-2014 西安网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.xaphp.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: pangbin $
 * $Id: goods.php 17217 2014-05-12 06:29:08Z pangbin $
*/

define('IN_HHS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

$goods_id = isset($_REQUEST['id'])  ? intval($_REQUEST['id']) : 0;

/*------------------------------------------------------ */
//-- 改变属性、数量时重新计算商品价格
/*------------------------------------------------------ */

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'price')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '', 'qty' => 1);

    $attr_id    = isset($_REQUEST['attr']) ? explode(',', $_REQUEST['attr']) : array();
    $number     = (isset($_REQUEST['number'])) ? intval($_REQUEST['number']) : 1;
	
	

    if ($goods_id == 0)
    {
        $res['err_msg'] = $_LANG['err_change_attr'];
        $res['err_no']  = 1;
		die($json->encode($res));
    }
    else
    {
		$limit_buy_bumber = $db->getOne("select limit_buy_bumber from ".$hhs->table('goods')." where goods_id='$goods_id'");
        if ($number == 0)
        {
            $res['qty'] = $number = 1;
        }
        else
        {
            $res['qty'] = $number;
        }
		if($number>$limit_buy_bumber&&$limit_buy_bumber>0)
		{
			
      	   $res['err_msg'] = '购买数量不可大于限购数量';
           $shop_price  = get_final_price($goods_id, $number, true, $attr_id);
           $res['result'] = price_format($shop_price * $number);
		   $res['number'] = $limit_buy_bumber;
		   die($json->encode($res)); 
		}
		else
		{
			$shop_price  = get_final_price($goods_id, $number, true, $attr_id);
			$res['result'] = price_format($shop_price * $number);
			die($json->encode($res)); 
		}
    }
	

  
}


/*------------------------------------------------------ */
//-- 商品购买记录ajax处理
/*------------------------------------------------------ */

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'gotopage')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '');

    $goods_id   = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $page    = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;

    if (!empty($goods_id))
    {
        $need_cache = $GLOBALS['smarty']->caching;
        $need_compile = $GLOBALS['smarty']->force_compile;

        $GLOBALS['smarty']->caching = false;
        $GLOBALS['smarty']->force_compile = true;

        /* 商品购买记录 */
        $sql = 'SELECT u.user_name, og.goods_number, oi.add_time, IF(oi.order_status IN (2, 3, 4), 0, 1) AS order_status ' .
               'FROM ' . $hhs->table('order_info') . ' AS oi LEFT JOIN ' . $hhs->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $hhs->table('order_goods') . ' AS og ' .
               'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $goods_id . ' ORDER BY oi.add_time DESC LIMIT ' . (($page > 1) ? ($page-1) : 0) * 5 . ',5';
        $bought_notes = $db->getAll($sql);

        foreach ($bought_notes as $key => $val)
        {
            $bought_notes[$key]['add_time'] = local_date("Y-m-d G:i:s", $val['add_time']);
        }

        $sql = 'SELECT count(*) ' .
               'FROM ' . $hhs->table('order_info') . ' AS oi LEFT JOIN ' . $hhs->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $hhs->table('order_goods') . ' AS og ' .
               'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $goods_id;
        $count = $db->getOne($sql);


        /* 商品购买记录分页样式 */
        $pager = array();
        $pager['page']         = $page;
        $pager['size']         = $size = 5;
        $pager['record_count'] = $count;
        $pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
        $pager['page_first']   = "javascript:gotoBuyPage(1,$goods_id)";
        $pager['page_prev']    = $page > 1 ? "javascript:gotoBuyPage(" .($page-1). ",$goods_id)" : 'javascript:;';
        $pager['page_next']    = $page < $page_count ? 'javascript:gotoBuyPage(' .($page + 1) . ",$goods_id)" : 'javascript:;';
        $pager['page_last']    = $page < $page_count ? 'javascript:gotoBuyPage(' .$page_count. ",$goods_id)"  : 'javascript:;';

        $smarty->assign('notes', $bought_notes);
        $smarty->assign('pager', $pager);


        $res['result'] = $GLOBALS['smarty']->fetch('library/bought_notes.lbi');

        $GLOBALS['smarty']->caching = $need_cache;
        $GLOBALS['smarty']->force_compile = $need_compile;
    }

    die($json->encode($res));
}else if(!empty($_REQUEST['act']) && $_REQUEST['act'] =='save_location'){
    
	include_once('includes/cls_json.php');
	$json = new JSON();
	$result = array('error' => 0,'message'=>'', 'content' => '');
	
	$lat=$_REQUEST['lat'];
	$lng=$_REQUEST['lng'];
	$xaphp_sopenid=$_SESSION['xaphp_sopenid'];
	$sql="update ".$hhs->table('users')." set lat='$lat',lng='$lng' where openid='$xaphp_sopenid' ";
	$db->query($sql);
	//setcookie("lat",$lat);
	//setcookie("lng",$lng);
	die($json->encode($result));
	
}


/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

$cache_id = $goods_id . '-' . $_SESSION['user_rank'].'-'.$_CFG['lang'];
$cache_id = sprintf('%X', crc32($cache_id));
if (!$smarty->is_cached('good_info.dwt', $cache_id))
{
    $smarty->assign('image_width',  $_CFG['image_width']);
    $smarty->assign('image_height', $_CFG['image_height']);

    $smarty->assign('id',           $goods_id);
    $smarty->assign('type',         0);
    $smarty->assign('cfg',          $_CFG);
    $smarty->assign('promotion',       get_promotion_info($goods_id));//促销信息
    $smarty->assign('promotion_info', get_promotion_info());

    /* 获得商品的信息 */
    $goods = get_goods_info($goods_id);
    $smarty->assign('d_team_num', $goods['team_num']-1);
    if ($goods === false)
    {
        /* 如果没有找到任何记录则跳回到首页 */
        hhs_header("Location: ./\n");
        exit;
    }
    else
    {
        if ($goods['brand_id'] > 0)
        {
            $goods['goods_brand_url'] = build_uri('brand', array('bid'=>$goods['brand_id']), $goods['goods_brand']);
        }

        $shop_price   = $goods['shop_price'];


        $goods['goods_style_name'] = add_style($goods['goods_name'], $goods['goods_name_style']);

        /* 购买该商品可以得到多少钱的优惠劵 */
        if ($goods['bonus_type_id'] > 0)
        {
            $time = gmtime();
            $sql = "SELECT type_money FROM " . $hhs->table('bonus_type') .
                    " WHERE type_id = '$goods[bonus_type_id]' " .
                    " AND send_type = '" . SEND_BY_GOODS . "' " .
                    " AND send_start_date <= '$time'" .
                    " AND send_end_date >= '$time'";
            $goods['bonus_money'] = floatval($db->getOne($sql));
            if ($goods['bonus_money'] > 0)
            {
                $goods['bonus_money'] = price_format($goods['bonus_money']);
            }
        }

        $smarty->assign('goods',              $goods);
        $smarty->assign('goods_id',           $goods['goods_id']);
        $smarty->assign('promote_end_time',   $goods['gmt_end_time']);
        $smarty->assign('categories',         get_categories_tree($goods['cat_id']));  // 分类树

        /* meta */
        $smarty->assign('keywords',           htmlspecialchars($goods['keywords']));
        $smarty->assign('description',        htmlspecialchars($goods['goods_brief']));


        $catlist = array();
        foreach(get_parent_cats($goods['cat_id']) as $k=>$v)
        {
            $catlist[] = $v['cat_id'];
        }

        assign_template('c', $catlist);


        $position = assign_ur_here($goods['cat_id'], $goods['goods_name']);

        /* current position */
        $smarty->assign('page_title',          $position['title']);                    // 页面标题
        $smarty->assign('ur_here',             $position['ur_here']);                  // 当前位置

        $properties = get_goods_properties($goods_id);  // 获得商品的规格和属性

        $smarty->assign('properties',          $properties['pro']);                              // 商品属性
        $smarty->assign('specification',       $properties['spe']);                              // 商品规格



    }
}



$smarty->assign('now_time',  gmtime());           // 当前系统时间

$sql="select * from ".$hhs->table('users')." where user_id=".$_SESSION['user_id'];
$user_info=$db->getRow($sql);
//$appid=$weixin_config_rows['appid'];
//$secret= $weixin_config_rows['appsecret'];
$timestamp=time();
$smarty->assign('timestamp', $timestamp );
$smarty->assign('appid', $appid);

$class_weixin=new class_weixin($appid,$appsecret);
$signature=$class_weixin->getSignature($timestamp);
$smarty->assign('signature', $signature);

//$smarty->assign('jssdk', jssdk($appid,$secret,$timestamp));
$smarty->assign('imgUrl','http://' . $_SERVER['HTTP_HOST'].'/'.$goods['goods_thumb'] );
$smarty->assign('title', $goods['goods_name']);
$smarty->assign('desc', mb_substr($_CFG['goods_share_dec'], 0,30,'utf-8')  );
$smarty->assign('team_sign', $_GET[team_sign]);

/*
if(($pos=strrpos($_SERVER[REQUEST_URI], "from"))!==false){
	$uri=substr($_SERVER[REQUEST_URI],0,$pos-1);
}else{
    $uri=$_SERVER[REQUEST_URI];
}*/

$link="http://" . $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];

$smarty->assign('link', $link );
$smarty->assign('link2', urlencode($link) );


$smarty->display('good_info.dwt',      $cache_id);





?>
