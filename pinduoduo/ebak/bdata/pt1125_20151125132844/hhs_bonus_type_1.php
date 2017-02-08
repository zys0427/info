<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_bonus_type`;");
E_C("CREATE TABLE `hhs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `is_share` int(11) DEFAULT '0' COMMENT '是否是好友券',
  `number` int(11) DEFAULT '0' COMMENT '分享优惠券的数量',
  `only_first` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否仅限团长使用',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_bonus_type` values('25','关注发红包','5.00','3','0.00','0.00','1446537600','1449129600','1446537600','1449129600','0.00','0','0','0');");
E_D("replace into `hhs_bonus_type` values('26','按用户发','1.00','0','0.00','0.00','1446969600','1449561600','1446969600','1449561600','12.00','0','0','0');");
E_D("replace into `hhs_bonus_type` values('9','按商品发放','1.20','1','0.00','0.00','1446451200','1449043200','1446451200','1482307200','0.10','0','0','0');");

require("../../inc/footer.php");
?>