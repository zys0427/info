<?php
define('IN_HHS', true);
define('HHS_ADMIN', true);
if(strpos($_SERVER['HTTP_USER_AGENT'],"MicroMessenger")!==false){
    $ua=1;
}else{
    $ua=2;
}
if($ua==1){
    require(dirname(__FILE__) . '/includes/init.php');
}else{
    require(dirname(__FILE__) . '/includes/init2.php');
}

$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(strpos($agent, 'iphone') || strpos($agent, 'ipad')){
    $phone_type = 2;
}
elseif(strpos($agent, 'android')){
    $phone_type = 1;
}
$smarty->assign('phone_type', $phone_type );


/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
include_once(ROOT_PATH . 'includes/lib_clips.php');
include_once(ROOT_PATH . 'includes/lib_transaction.php');

include_once(ROOT_PATH . 'includes/lib_payment.php');
include_once(ROOT_PATH . 'includes/lib_order.php');

$act = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';
$order_id = isset($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : 0;
$smarty->assign('order_id', $order_id );
/*
$smarty->assign('appid', $appid);
$timestamp=time();
$smarty->assign('timestamp', $timestamp );
$class_weixin=new class_weixin($appid,$appsecret);
$signature=$class_weixin->getSignature($timestamp);
$smarty->assign('signature', $signature);
*/

$order_info=order_info($order_id);
$smarty->assign('order_info', $order_info );
if($ua==1){//微信上打开
    //将openid记录下
    echo"<a href='test.php'>aaaaaa</a>";
}else{//其他浏览器上打开
    $_SESSION['xaphp_sopenid']="asdasdsaasdasdf";
    echo"=====";
}







?>