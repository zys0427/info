<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_user_bonus`;");
E_C("CREATE TABLE `hhs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `send_user_id` int(11) DEFAULT '0' COMMENT '发放人的user_id',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_act` int(11) NOT NULL DEFAULT '0' COMMENT '是否激活，好友券需要激活使用',
  `send_order_id` int(11) DEFAULT '0' COMMENT '下那个订单时发的优惠券',
  `send_id` int(11) DEFAULT '0' COMMENT '分享的链接id',
  `is_attention_send` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=333 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_user_bonus` values('298','9','0','925','0','1446537901','985','0','0','984','0','1');");
E_D("replace into `hhs_user_bonus` values('297','9','0','925','0','1446535358','984','0','0','983','0','1');");
E_D("replace into `hhs_user_bonus` values('301','25','1000023716','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('302','25','1000036280','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('303','25','1000040980','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('304','25','1000051691','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('305','25','1000064103','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('306','25','1000077603','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('307','25','1000085420','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('308','25','1000093683','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('309','9','0','925','0','1447835478','1034','0','0','988','0','1');");
E_D("replace into `hhs_user_bonus` values('310','9','0','925','0','1447836549','1035','0','0','993','0','1');");
E_D("replace into `hhs_user_bonus` values('311','25','1000095428','0','0','0','0','0','0','0','0','1');");
E_D("replace into `hhs_user_bonus` values('321','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('322','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('323','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('324','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('325','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('326','26','0','925','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('327','26','0','150','0','0','0','1','0','0','0','0');");
E_D("replace into `hhs_user_bonus` values('332','25','1000223246','0','0','0','0','0','0','0','0','1');");

require("../../inc/footer.php");
?>