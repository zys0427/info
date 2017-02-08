<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_admin_log`;");
E_C("CREATE TABLE `hhs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1607 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_admin_log` values('1453','1445541309','1','添加优惠劵类型: 购物优惠券','116.2.167.97');");
E_D("replace into `hhs_admin_log` values('1603','1448139920','1','编辑商品: 海南圣女果','61.138.84.209');");
E_D("replace into `hhs_admin_log` values('1602','1448138318','1','编辑商品: 越南红心火龙果','113.132.25.175');");
E_D("replace into `hhs_admin_log` values('1601','1448086915','1','编辑支付方式: 支付宝','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1600','1448083611','1','编辑支付方式: 支付宝','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1599','1448071217','1','安装支付方式: 支付宝','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1598','1448057688','1','编辑商品: 越南红心火龙果','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1597','1448057553','1','回收商品: 珠光冰白','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1596','1448057519','1','回收商品: 撒啊发呆','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1594','1448053798','1','编辑商品类型: 进口干果','113.0.213.101');");
E_D("replace into `hhs_admin_log` values('1595','1448057517','1','回收商品: 胡 哈哈','124.114.84.234');");
E_D("replace into `hhs_admin_log` values('1593','1447881163','1','删除用户优惠劵: 15','61.138.84.151');");
E_D("replace into `hhs_admin_log` values('1592','1447881077','1','添加用户优惠劵: 1000223246','61.138.84.151');");
E_D("replace into `hhs_admin_log` values('1590','1447867049','1','编辑商店设置: ','219.144.173.255');");
E_D("replace into `hhs_admin_log` values('1591','1447881064','1','编辑优惠劵类型: 关注发红包','61.138.84.151');");
E_D("replace into `hhs_admin_log` values('1589','1447835455','1','编辑商品: 越南红心火龙果','113.141.146.155');");
E_D("replace into `hhs_admin_log` values('1588','1447817788','1','编辑商店设置: ','117.32.157.135');");
E_D("replace into `hhs_admin_log` values('1587','1447817203','1','编辑商店设置: ','117.32.157.135');");
E_D("replace into `hhs_admin_log` values('1586','1447816776','1','编辑商品: 越南红心火龙果','117.32.157.135');");
E_D("replace into `hhs_admin_log` values('1585','1447696642','1','添加商品: 胡 哈哈','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1584','1447696552','1','添加商品分类: 呜呜呜呜呜呜','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1583','1447695720','1','回收商品: 火火火','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1582','1447695684','1','编辑商品: 火火火','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1581','1447695659','1','添加商品: 火火火','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1580','1447695554','1','编辑商品: 撒啊发呆','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1579','1447693474','1','添加商品分类: www','123.96.37.210');");
E_D("replace into `hhs_admin_log` values('1578','1447635824','1','编辑商店设置: ','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1576','1447634892','1','编辑商品: 珠光冰白','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1577','1447635673','1','编辑商店设置: ','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1575','1447634406','1','编辑商店设置: ','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1573','1447607555','1','编辑属性: 规格','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1574','1447633550','1','编辑商品: 撒啊发呆','117.22.189.115');");
E_D("replace into `hhs_admin_log` values('1604','1448400456','1','编辑支付方式: 支付宝','0.0.0.0');");
E_D("replace into `hhs_admin_log` values('1605','1448400472','1','编辑支付方式: 微信支付','0.0.0.0');");
E_D("replace into `hhs_admin_log` values('1606','1448400493','1','编辑权限管理: admin','0.0.0.0');");

require("../../inc/footer.php");
?>