<?php
define('IN_HHS', true);
require(dirname(__FILE__) . '/includes/init.php');

$user_id = $_SESSION['user_id'];

$user_rows = $db->getRow("select uname,openid from ".$hhs->table('users')." where user_id='$user_id'");

$sql = $db->query("update ".$hhs->table('shipping_point')." set wx_name='$user_rows[uname]',wx_openid='$user_rows[openid]' where id='$_REQUEST[id]'");

if($sql)
{
	show_message('绑定成功','返回首页', './', 'warning');
}
else
{
	show_message('绑定失败','返回首页', './', 'warning');
}
?>