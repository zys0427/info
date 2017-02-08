<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_back_order`;");
E_C("CREATE TABLE `hhs_back_order` (
  `back_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `return_time` int(10) unsigned DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`back_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_back_order` values('5','20150731160828896','2015073198238','277','ddd','1438301300','5',NULL,'17','admin','的的333','856','1','5','66','633','','','','','15566666666','','','等待所有商品备齐后再发','0.00','0.00','1438301328','0','0','1438304343','0');");
E_D("replace into `hhs_back_order` values('6','20150803194417126','2015080324976','349','aaa','1438572335','5',NULL,'144','admin','我','得','1','4','56','551','','','','','15698521333','','','等待所有商品备齐后再发','0.00','0.00','1438573470','0','0','1438573709','0');");
E_D("replace into `hhs_back_order` values('7','20150806110411570','2015080659007','3','12306','1438801423','12',NULL,'16','admin','薏米','古龙葫芦','1','6','82','762','','','','','15100000000','','','等待所有商品备齐后再发','0.00','0.00','1438801489','0','0','1438824920','0');");
E_D("replace into `hhs_back_order` values('8','20150807105975130','2015080796318','15','11111','1438887546','2',NULL,'17','admin','我','的的','1','2','52','504','','','','','15699999999','','','等待所有商品备齐后再发','0.00','0.00','1438887567','0','0','1438887621','0');");
E_D("replace into `hhs_back_order` values('9','20150807111619064','2015080707476','16','aaaa','1438888117','2','圆通速递','17','admin','我','的的','1','2','52','504','','','','','15699999999','','','等待所有商品备齐后再发','0.00','0.00','1438888578','0','0','1438888612','0');");

require("../../inc/footer.php");
?>