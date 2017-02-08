<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_delivery_goods`;");
E_C("CREATE TABLE `hhs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_delivery_goods` values('1','1','13','0',NULL,'诺基亚5320 XpressMusic','诺基亚','HHS000013','1','','0','3',NULL);");
E_D("replace into `hhs_delivery_goods` values('2','1','14','0',NULL,'诺基亚5800XM','诺基亚','HHS000014','1','','0','1',NULL);");
E_D("replace into `hhs_delivery_goods` values('3','2','24','0',NULL,'P806','联想','HHS000024','1','','0','3',NULL);");
E_D("replace into `hhs_delivery_goods` values('4','2','9','0',NULL,'诺基亚E66','诺基亚','HHS000009','1','','0','1',NULL);");
E_D("replace into `hhs_delivery_goods` values('5','3','24','0',NULL,'P806','联想','HHS000024','1','','0','1',NULL);");
E_D("replace into `hhs_delivery_goods` values('6','3','8','0',NULL,'飞利浦9@9v','飞利浦','HHS000008','1','','0','3',NULL);");
E_D("replace into `hhs_delivery_goods` values('7','4','12','0',NULL,'摩托罗拉A810','摩托罗拉','HHS000012','1','','0','2',NULL);");
E_D("replace into `hhs_delivery_goods` values('8','5','24','0',NULL,'P806','联想','HHS000024','1','','0','1',NULL);");
E_D("replace into `hhs_delivery_goods` values('9','10','1','0','','越南进口澳芒2个59元包邮  水果店每个至少40元','','HHS000000','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('10','40','48','0','','test测试','','HHS000048','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('11','41','48','0','','test测试','','HHS000048','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('12','42','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('13','43','1','0','','越南进口澳芒2个59元','','HHS000000','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('14','44','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('15','45','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('16','46','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('17','47','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('18','72','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('19','75','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('20','76','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('21','77','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('22','80','41','0','','果干','','HHS000041','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('23','81','45','0','','抹茶','','HHS000045','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('24','82','1','0','','越南进口澳芒2个59元','','HHS000000','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('25','83','45','0','','抹茶','','HHS000045','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('26','84','45','0','','抹茶','','HHS000045','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('27','85','45','0','','抹茶','','HHS000045','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('28','86','46','0','','鸭脖','','HHS000046','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('29','87','1','0','','越南进口澳芒2个59元','','HHS000000','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('30','88','1','0','','越南进口澳芒2个59元','','HHS000000','1',NULL,'0','1','');");
E_D("replace into `hhs_delivery_goods` values('113','172','82','0','','生态高山红富士','','MD-02','1',NULL,'0','1','规格:20个装[20] \n');");

require("../../inc/footer.php");
?>