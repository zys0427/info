<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_keywords`;");
E_C("CREATE TABLE `hhs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `hhs_keywords` values('2009-04-21','HHShop','诺基亚','1');");
E_D("replace into `hhs_keywords` values('2009-04-27','HHShop','智能手机','1');");
E_D("replace into `hhs_keywords` values('2009-05-04','HHShop','斤','1');");
E_D("replace into `hhs_keywords` values('2009-05-10','HHShop','诺基亚','1');");
E_D("replace into `hhs_keywords` values('2009-05-11','HHShop','智能手机','1');");
E_D("replace into `hhs_keywords` values('2009-05-11','HHShop','诺基亚','1');");
E_D("replace into `hhs_keywords` values('2009-05-12','HHShop','三星','1');");
E_D("replace into `hhs_keywords` values('2009-05-12','HHShop','智能手机','1');");
E_D("replace into `hhs_keywords` values('2009-05-12','HHShop','p806','1');");
E_D("replace into `hhs_keywords` values('2009-05-12','HHShop','诺基亚','1');");
E_D("replace into `hhs_keywords` values('2009-05-12','HHShop','夏新','1');");
E_D("replace into `hhs_keywords` values('2009-05-18','HHShop','52','2');");
E_D("replace into `hhs_keywords` values('2009-05-22','HHShop','p','1');");
E_D("replace into `hhs_keywords` values('2014-11-01','HHShop','aa','1');");
E_D("replace into `hhs_keywords` values('2014-11-01','HHShop','的','1');");
E_D("replace into `hhs_keywords` values('2014-11-01','HHShop','飞利浦','1');");
E_D("replace into `hhs_keywords` values('2014-12-02','hhshop','诺基亚N58','3');");
E_D("replace into `hhs_keywords` values('2014-12-02','hhshop','诺基亚N85','1');");
E_D("replace into `hhs_keywords` values('2014-12-04','hhshop','诺基亚N85','2');");
E_D("replace into `hhs_keywords` values('2015-01-06','hhshop','诺基亚N85','1');");
E_D("replace into `hhs_keywords` values('2015-01-08','hhshop','玛卡','1');");
E_D("replace into `hhs_keywords` values('2015-05-05','hhshop','三星SGH-F258','1');");
E_D("replace into `hhs_keywords` values('2015-07-02','hhshop','7','2');");
E_D("replace into `hhs_keywords` values('2015-07-07','hhshop','诺基亚','6');");

require("../../inc/footer.php");
?>