<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_share_pay_info`;");
E_C("CREATE TABLE `hhs_share_pay_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `order_id` int(11) DEFAULT NULL,
  `is_paid` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_share_pay_info` values('1','','undefined','0.02','16','0','1439429797',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('2','null','刷我滴卡，包你满足','0.10','17','0','1439431649',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('3','null','刷我滴卡，包你满足','0.05','41','0','1439433254',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('4','null','刷我滴卡，包你满足','0.05','41','0','1439433254',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('5','null','刷我滴卡，包你满足','0.05','41','0','1439433254',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('6','null','刷我滴卡，包你满足','0.05','41','0','1439433500',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('7','null','刷我滴卡，包你满足','0.02','43','0','1439433729',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('8','null','刷我滴卡，包你满足','0.02','17','0','1439437999',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('9','null','刷我滴卡，包你满足','0.10','16','0','1439489192',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('10','null','刷我滴卡，包你满足','0.05','41','0','1439490136',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('11','null','刷我滴卡，包你满足','0.01','16','0','1439491212',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('12','null','刷我滴卡，包你满足','0.01','16','0','1439491213',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('13','null','刷我滴卡，包你满足','0.02','41','0','1439495281',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('14','','刷我滴卡，包你满足','0.02','41','0','1439507465',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('15','','刷我滴卡，包你满足','0.01','43','0','1439513686',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('16','','刷我滴卡，包你满足','0.01','155','0','1439524791',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('17','','刷我滴卡，包你满足','0.01','155','0','1439524793',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('18','','刷我滴卡，包你满足','9.90','174','0','1439620062',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('19','','刷我滴卡，包你满足','9.90','174','0','1439620063',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('20','','刷我滴卡，包你满足','0.01','151','0','1439769508',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('21','','刷我滴卡，包你满足','0.01','151','0','1439770369',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('22','','刷我滴卡，包你满足','0.02','151','0','1439770539',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('23','','刷我滴卡，包你满足','0.02','151','0','1439770750',NULL,'0');");
E_D("replace into `hhs_share_pay_info` values('24','','刷我滴卡，包你满足','0.02','151','0','1439771273','0','0');");
E_D("replace into `hhs_share_pay_info` values('25','','刷我滴卡，包你满足','0.02','151','0','1439771644','0','0');");
E_D("replace into `hhs_share_pay_info` values('26','','刷我滴卡，包你满足','0.02','151','0','1439771957','502','1');");
E_D("replace into `hhs_share_pay_info` values('28','','刷我滴卡，包你满足','0.01','151','0','1439773326','498','1');");
E_D("replace into `hhs_share_pay_info` values('29','','刷我滴卡，包你满足','0.01','149','0','1439773989','504','0');");
E_D("replace into `hhs_share_pay_info` values('30','','刷我滴卡，包你满足','0.01','151','0','1439777264','509','1');");
E_D("replace into `hhs_share_pay_info` values('31','','刷我滴卡，包你满足','0.01','151','0','1439778186','510','1');");
E_D("replace into `hhs_share_pay_info` values('32','','刷我滴卡，包你满足','0.01','151','0','1439779046','511','1');");
E_D("replace into `hhs_share_pay_info` values('33','','刷我滴卡，包你满足','0.02','151','0','1439779265','512','1');");
E_D("replace into `hhs_share_pay_info` values('34','','刷我滴卡，包你满足','0.02','151','0','1439779911','513','1');");
E_D("replace into `hhs_share_pay_info` values('35','','刷我滴卡，包你满足','0.01','151','0','1439780072','514','1');");
E_D("replace into `hhs_share_pay_info` values('36','','刷我滴卡，包你满足','0.01','151','0','1439783689','517','0');");
E_D("replace into `hhs_share_pay_info` values('37','','刷我滴卡，包你满足','0.01','151','0','1439784280','519','1');");
E_D("replace into `hhs_share_pay_info` values('38','','刷我滴卡，包你满足','0.01','151','0','1439785304','520','1');");
E_D("replace into `hhs_share_pay_info` values('39','','刷我滴卡，包你满足','60.00','189','0','1440984280','689','0');");
E_D("replace into `hhs_share_pay_info` values('40','','刷我滴卡，包你满足','0.10','150','0','1446071582','947','0');");
E_D("replace into `hhs_share_pay_info` values('41','','刷我滴卡，包你满足','0.10','150','0','1446071676','948','0');");
E_D("replace into `hhs_share_pay_info` values('42','','刷我滴卡，包你满足','0.10','150','0','1446071890','949','1');");
E_D("replace into `hhs_share_pay_info` values('43','','刷我滴卡，包你满足','0.10','150','0','1446072338','951','0');");
E_D("replace into `hhs_share_pay_info` values('44','','刷我滴卡，包你满足','0.10','150','0','1446072514','953','0');");
E_D("replace into `hhs_share_pay_info` values('45','','刷我滴卡，包你满足','0.10','1070','0','1446073201','955','1');");
E_D("replace into `hhs_share_pay_info` values('46','','刷我滴卡，包你满足','0.10','150','0','1446075855','956','0');");
E_D("replace into `hhs_share_pay_info` values('47','','刷我滴卡，包你满足','1.00','150','0','1446075904','957','0');");

require("../../inc/footer.php");
?>