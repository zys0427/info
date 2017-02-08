<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_send_bonus_type`;");
E_C("CREATE TABLE `hhs_send_bonus_type` (
  `send_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '发放者id',
  `add_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态1 开启 0 关 3 已发完',
  `type_id` int(11) NOT NULL COMMENT '优惠券类型',
  `send_order_id` int(11) DEFAULT '0' COMMENT '订单id',
  `send_number` int(11) DEFAULT '0' COMMENT '发送的数量',
  PRIMARY KEY (`send_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_send_bonus_type` values('1','17','1437714149','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('2','17','1437714305','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('3','17','1437715485','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('4','17','1437715977','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('5','17','1437718893','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('6','17','1437719251','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('7','17','1437719506','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('8','17','1437720138','1','7','0','0');");
E_D("replace into `hhs_send_bonus_type` values('9','17','1437766123','1','7','229','2');");
E_D("replace into `hhs_send_bonus_type` values('10','17','1437766221','1','7','228','2');");
E_D("replace into `hhs_send_bonus_type` values('11','17','1437766387','1','7','230','2');");
E_D("replace into `hhs_send_bonus_type` values('12','17','1437766539','1','7','231','2');");
E_D("replace into `hhs_send_bonus_type` values('13','17','1437766629','1','7','232','2');");
E_D("replace into `hhs_send_bonus_type` values('15','98','1437983960','1','7','243','2');");
E_D("replace into `hhs_send_bonus_type` values('16','17','1438022183','1','7','253','2');");
E_D("replace into `hhs_send_bonus_type` values('17','17','1438297557','1','7','266','2');");
E_D("replace into `hhs_send_bonus_type` values('18','23','1438299151','1','7','273','2');");
E_D("replace into `hhs_send_bonus_type` values('19','23','1438300253','1','7','274','2');");
E_D("replace into `hhs_send_bonus_type` values('20','23','1438300647','1','7','275','2');");
E_D("replace into `hhs_send_bonus_type` values('21','24','1438300889','1','7','255','2');");
E_D("replace into `hhs_send_bonus_type` values('22','17','1438301360','1','7','277','2');");
E_D("replace into `hhs_send_bonus_type` values('23','17','1438302915','1','7','280','2');");
E_D("replace into `hhs_send_bonus_type` values('24','17','1438303101','1','7','281','2');");
E_D("replace into `hhs_send_bonus_type` values('25','23','1438303373','1','7','282','2');");
E_D("replace into `hhs_send_bonus_type` values('26','23','1438307076','1','7','284','2');");
E_D("replace into `hhs_send_bonus_type` values('27','19','1438397624','1','7','82','2');");
E_D("replace into `hhs_send_bonus_type` values('28','23','1438545670','1','7','336','2');");
E_D("replace into `hhs_send_bonus_type` values('29','23','1438563801','1','7','343','2');");
E_D("replace into `hhs_send_bonus_type` values('30','23','1438564250','1','7','345','2');");
E_D("replace into `hhs_send_bonus_type` values('31','16','1438803322','1','7','4','2');");
E_D("replace into `hhs_send_bonus_type` values('32','16','1438803830','1','7','5','2');");
E_D("replace into `hhs_send_bonus_type` values('33','203','1439780914','1','7','515','2');");

require("../../inc/footer.php");
?>