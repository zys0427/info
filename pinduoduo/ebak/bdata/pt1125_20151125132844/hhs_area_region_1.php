<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_area_region`;");
E_C("CREATE TABLE `hhs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `hhs_area_region` values('8','1');");
E_D("replace into `hhs_area_region` values('17','2');");
E_D("replace into `hhs_area_region` values('17','3');");
E_D("replace into `hhs_area_region` values('17','4');");
E_D("replace into `hhs_area_region` values('17','5');");
E_D("replace into `hhs_area_region` values('17','6');");
E_D("replace into `hhs_area_region` values('17','7');");
E_D("replace into `hhs_area_region` values('17','8');");
E_D("replace into `hhs_area_region` values('17','9');");
E_D("replace into `hhs_area_region` values('17','10');");
E_D("replace into `hhs_area_region` values('17','11');");
E_D("replace into `hhs_area_region` values('20','1');");

require("../../inc/footer.php");
?>