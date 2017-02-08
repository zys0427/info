<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_payment`;");
E_C("CREATE TABLE `hhs_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_payment` values('1','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','0','0','1');");
E_D("replace into `hhs_payment` values('2','bank','银行汇款/转帐','0','银行名称\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。','0','a:0:{}','0','0','0');");
E_D("replace into `hhs_payment` values('3','cod','货到付款','0','开通城市：×××\n货到付款区域：×××','0','a:0:{}','0','1','0');");
E_D("replace into `hhs_payment` values('4','wxpay','微信支付','0','本支付适用于新版本微信支付。','0','a:6:{i:0;a:3:{s:4:\"name\";s:12:\"wxpay_app_id\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1111\";}i:1;a:3:{s:4:\"name\";s:16:\"wxpay_app_secret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1111\";}i:2;a:3:{s:4:\"name\";s:11:\"wxpay_mchid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:3:\"111\";}i:3;a:3:{s:4:\"name\";s:9:\"wxpay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1111\";}i:4;a:3:{s:4:\"name\";s:9:\"notifyurl\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:52:\"http://pt.hostadmin.com.cn/wxpay/demo/notify_url.php\";}i:5;a:3:{s:4:\"name\";s:10:\"successurl\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:62:\"http://pt.hostadmin.com.cn/user.php?act=order_detail&order_id=\";}}','1','0','1');");
E_D("replace into `hhs_payment` values('5','alipay','支付宝','0','','0','a:3:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:12:\"1111@163.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1111\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1111\";}}','1','0','1');");

require("../../inc/footer.php");
?>