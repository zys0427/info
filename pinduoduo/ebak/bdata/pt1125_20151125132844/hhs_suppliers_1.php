<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_suppliers`;");
E_C("CREATE TABLE `hhs_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `suppliers_name` varchar(255) DEFAULT NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_suppliers` values('6','广东供货商','广东供货商','1');");
E_D("replace into `hhs_suppliers` values('5','上海供货商','上海供货商','1');");
E_D("replace into `hhs_suppliers` values('4','北京供货商','北京供货商','1');");

require("../../inc/footer.php");
?>