<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_type`;");
E_C("CREATE TABLE `hhs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_type` values('10','test','1','主体\r\n参数');");
E_D("replace into `hhs_goods_type` values('11','进口干果','1','');");
E_D("replace into `hhs_goods_type` values('12','胸包','1','');");
E_D("replace into `hhs_goods_type` values('13','test2','1','1');");

require("../../inc/footer.php");
?>