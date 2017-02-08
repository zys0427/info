<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_meicheng_log`;");
E_C("CREATE TABLE `hhs_meicheng_log` (
  `mid` int(10) NOT NULL AUTO_INCREMENT,
  `user_str` text,
  `posttime` int(10) DEFAULT '0',
  `chk` tinyint(1) DEFAULT '0',
  `reg_n` int(10) DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_meicheng_log` values('1',',65,66,67,68,69,70,71,72,73,74','1439101497','1','11');");
E_D("replace into `hhs_meicheng_log` values('2',',37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136','1439102324','3','101');");
E_D("replace into `hhs_meicheng_log` values('3',',137,138,139,140,141,142,143,144,145,146','1439102401','3','11');");

require("../../inc/footer.php");
?>