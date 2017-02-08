<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_weixin_keywords`;");
E_C("CREATE TABLE `hhs_weixin_keywords` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `pic` varchar(80) NOT NULL,
  `pic_tit` varchar(80) NOT NULL,
  `desc` text NOT NULL,
  `pic_url` varchar(80) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_weixin_keywords` values('90','帮助','help','1','输入【help】查看帮助\r\n输入【cxbd】绑定会员\r\n输入【quit】退出绑定\r\n输入【member】会员中心\r\n输入【new】查看最新商品\r\n输入【hot】查看热卖商品\r\n输入【best】查看推荐商品\r\n输入【promote】特价促销\r\n输入【qiandao】签到送积分\r\n输入【ddcx】查询订单\r\n输入【kdcx】快递查询\r\n输入【jfcx】查询积分、余额','','','','','99','1');");
E_D("replace into `hhs_weixin_keywords` values('91','你好','你好','1','输入【帮助】打开快捷菜单','','','','','11','1');");
E_D("replace into `hhs_weixin_keywords` values('92','您好','您好','1','输入【帮助】打开快捷菜单','','','','','0','1');");
E_D("replace into `hhs_weixin_keywords` values('100','图文消息测试','图文消息','2','','','图文消息的测试标题','','','63','1');");
E_D("replace into `hhs_weixin_keywords` values('105','文本消息测试','文本消息','1','','','','','','54','1');");
E_D("replace into `hhs_weixin_keywords` values('106','我要售后','我要售后','2','','','我要售后','我要售后  帮您解决问题','http://vshop.xakc.net/article.php?id=38','98','1');");

require("../../inc/footer.php");
?>