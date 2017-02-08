<?php

/**
 * ECSHOP 支付响应页面
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: respond.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_HHS', true);
require(dirname(__FILE__) . '/../includes/init2.php');
require(ROOT_PATH . 'includes/lib_payment.php');
require(ROOT_PATH . 'includes/lib_order.php');
/* 支付方式代码 */
$pay_code = 'alipay';

/* 判断是否启用 */
$sql = "SELECT COUNT(*) FROM " . $hhs->table('payment') . " WHERE pay_code = '$pay_code' AND enabled = 1";
if ($db->getOne($sql) == 0)
{
    die("未找到对应的支付方式");
}
else
{
    $plugin_file = ROOT_PATH .'includes/modules/payment/' . $pay_code . '.php';
    /* 检查插件文件是否存在，如果存在则验证支付是否成功，否则则返回失败信息 */
    if (file_exists($plugin_file))
    {
        /* 根据支付方式代码创建支付类的对象并调用其响应操作方法 */
        include_once($plugin_file);
        $payment = new $pay_code();
        if(@$payment->respond()){
            //pay_team_action();
            $msg='pay_success';
        }else{
            $msg='pay_fail';
        }
    }
    else
    {
        die("未找到对应的支付方式");
    }
}

//die("您已经付款成功，请关闭浏览器回到微信");

?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title><?php echo $_CFG['shop_name'] ;?></title>
</head>
<body >
<style>
body { margin:10px; padding:0; font-family:"Helvetica Neue",Helvetica,Arial,"Microsoft YaHei","微软雅黑",STXihei,"华文细黑",serif }
.tips { background:url(pay_tip.jpg) no-repeat; padding-left:110px; }
.tips h3 { font-size:18px; color:red; line-height:24px; }
.tips p { font-size:16px; color:#333; line-height:16px; }
.desc { margin:20px 0; background:#f6f6f6; padding:10px; font-size:16px; line-height:24px; color:#333; border-radius:5px; }
</style>
<div class="tips">
    <h3>亲，您已经支付成功了</h3>
    <p>网站名称：<?php echo $_CFG['shop_name'] ;?></p>
    <p>订单号码：<?php echo trim(substr($_REQUEST['out_trade_no'],0,13)); ?></p>
</div>
<div class="desc">亲，现在请关闭浏览器回到微信,点击[已完成支付]，或进入[用户中心]-[我的团]，找到这个付款成功的团，分享给您的好友们，让好友们来参团把！</p>
</body>
</html>