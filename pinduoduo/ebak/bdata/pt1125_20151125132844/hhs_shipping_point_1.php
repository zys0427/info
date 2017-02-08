<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_shipping_point`;");
E_C("CREATE TABLE `hhs_shipping_point` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(300) NOT NULL,
  `shop_name` varchar(300) DEFAULT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `wx_name` varchar(100) NOT NULL,
  `wx_openid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_shipping_point` values('1','24','311','2596','北大街','西安一号店','116.377823','39.936846','1323232','','');");
E_D("replace into `hhs_shipping_point` values('4','24','311','2598','ddd','西安二号店','','','0','','');");

require("../../inc/footer.php");
?>