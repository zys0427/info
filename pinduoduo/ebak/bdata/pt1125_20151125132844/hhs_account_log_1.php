<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_account_log`;");
E_C("CREATE TABLE `hhs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=225 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_account_log` values('201','150','0.00','0.00','0','0','1440959613','订单 2015083158692 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('102','160','0.00','0.00','0','0','1438474181','订单 2015080258990 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('195','203','0.00','0.00','0','0','1439782599','订单 2015081753899 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('208','704','0.00','0.00','0','0','1442877286','订单 2015092211040 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('198','387','0.00','0.00','0','0','1440788399','订单 2015082768227 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('199','387','0.00','0.00','0','0','1440788459','由于退货或未发货操作，退回订单 2015082768227 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('200','387','0.00','0.00','0','0','1440788470','订单 2015082768227 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('194','205','0.00','0.00','0','677','1439782507','','2');");
E_D("replace into `hhs_account_log` values('193','203','0.00','0.00','60','60','1439780872','订单 2015081785991 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('192','203','666.00','0.00','0','0','1439779946','','2');");
E_D("replace into `hhs_account_log` values('191','177','0.00','0.00','0','0','1439779830','订单 2015081577628 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('190','162','0.00','0.00','0','0','1439576457','订单 2015081511754 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('186','166','0.00','0.00','0','0','1439576457','订单 2015081555938 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('187','165','0.00','0.00','0','0','1439576457','订单 2015081521007 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('188','164','0.00','0.00','0','0','1439576457','订单 2015081534220 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('189','163','0.00','0.00','0','0','1439576457','订单 2015081585658 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('202','642','100.00','0.00','0','0','1442041702','','2');");
E_D("replace into `hhs_account_log` values('203','642','0.00','0.00','0','100','1442041841','','2');");
E_D("replace into `hhs_account_log` values('204','657','0.00','0.00','1','1','1442199958','订单 2015091357676 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('205','649','0.00','0.00','1','1','1442199958','订单 2015091371800 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('206','649','0.00','0.00','-1','-1','1442199984','由于退货或未发货操作，退回订单 2015091371800 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('207','657','0.00','0.00','-1','-1','1442199991','由于退货或未发货操作，退回订单 2015091357676 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('209','818','0.00','0.00','0','0','1444757672','订单 2015100936285 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('210','818','0.00','0.00','0','0','1445475854','由于退货或未发货操作，退回订单 2015100936285 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('211','818','0.00','0.00','0','0','1446425959','订单 2015110264725 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('212','746','0.00','0.00','0','0','1446425959','订单 2015102495033 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('213','818','0.00','0.00','0','0','1446425959','订单 2015102344351 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('214','818','0.00','0.00','0','0','1446425959','订单 2015102362730 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('215','941','0.00','0.00','0','0','1446425959','订单 2015102088554 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('216','925','0.00','0.00','0','0','1446533677','订单 2015110325870 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('217','925','0.00','0.00','0','0','1446533978','订单 2015110343672 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('218','925','0.00','0.00','0','0','1446534417','订单 2015110302657 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('219','925','0.00','0.00','0','0','1446534971','订单 2015110325032 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('220','925','0.00','0.00','1','1','1446535314','订单 2015110352524 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('221','925','0.00','0.00','1','1','1446535385','订单 2015110322050 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('222','925','0.00','0.00','1','1','1446676258','订单 2015110598272 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('223','925','0.00','0.00','1','1','1446708843','订单 2015110586103 赠送的积分','99');");
E_D("replace into `hhs_account_log` values('224','1291','0.00','0.00','0','0','1448054744','订单 2015112099419 赠送的积分','99');");

require("../../inc/footer.php");
?>