<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_attr`;");
E_C("CREATE TABLE `hhs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=284 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_attr` values('254','48','211','250g','0');");
E_D("replace into `hhs_goods_attr` values('255','53','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('256','53','212','500g/袋','6');");
E_D("replace into `hhs_goods_attr` values('257','53','212','250g/袋','2');");
E_D("replace into `hhs_goods_attr` values('266','56','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('274','61','212','asdf','sdf');");
E_D("replace into `hhs_goods_attr` values('264','55','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('261','54','212','230g/袋','');");
E_D("replace into `hhs_goods_attr` values('262','54','212','250g/袋','2');");
E_D("replace into `hhs_goods_attr` values('263','54','212','500g/袋','6');");
E_D("replace into `hhs_goods_attr` values('268','57','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('270','58','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('272','59','212','500g/罐','');");
E_D("replace into `hhs_goods_attr` values('275','79','213','黑色','128');");
E_D("replace into `hhs_goods_attr` values('277','82','212','10个装','10');");
E_D("replace into `hhs_goods_attr` values('278','82','212','20个装','20');");
E_D("replace into `hhs_goods_attr` values('279','82','212','30个装','30');");
E_D("replace into `hhs_goods_attr` values('280','86','212','规格1','');");
E_D("replace into `hhs_goods_attr` values('281','86','212','规格2','');");

require("../../inc/footer.php");
?>