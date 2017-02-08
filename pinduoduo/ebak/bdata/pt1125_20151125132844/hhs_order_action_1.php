<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_order_action`;");
E_C("CREATE TABLE `hhs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=948 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_order_action` values('1','3','admin','1','3','2','0','','1438801468');");
E_D("replace into `hhs_order_action` values('2','3','admin','5','5','2','0','','1438801489');");
E_D("replace into `hhs_order_action` values('3','3','admin','1','1','2','1','','1438801502');");
E_D("replace into `hhs_order_action` values('4','3','买家','5','2','2','0','','1438802380');");
E_D("replace into `hhs_order_action` values('5','4','admin','5','5','2','0','','1438803280');");
E_D("replace into `hhs_order_action` values('6','4','admin','1','1','2','1','','1438803296');");
E_D("replace into `hhs_order_action` values('7','4','买家','5','2','2','0','','1438803322');");
E_D("replace into `hhs_order_action` values('8','5','admin','5','5','2','0','','1438803702');");
E_D("replace into `hhs_order_action` values('9','5','admin','1','1','2','1','','1438803715');");
E_D("replace into `hhs_order_action` values('10','5','买家','5','2','2','0','','1438803830');");
E_D("replace into `hhs_order_action` values('11','7','买家','1','0','2','0','','1438804558');");
E_D("replace into `hhs_order_action` values('12','7','admin','4','0','3','0','','1438805768');");
E_D("replace into `hhs_order_action` values('13','8','买家','1','0','2','0','','1438809661');");
E_D("replace into `hhs_order_action` values('14','1','admin','5','5','2','0','','1438811725');");
E_D("replace into `hhs_order_action` values('15','1','admin','1','1','2','1','','1438811777');");
E_D("replace into `hhs_order_action` values('16','9','buyer','2','0','0','0','用户取消','1438814722');");
E_D("replace into `hhs_order_action` values('17','3','admin','4','0','0','0','峰v','1438824920');");
E_D("replace into `hhs_order_action` values('18','13','买家','1','0','2','0','','1438830351');");
E_D("replace into `hhs_order_action` values('19','14','admin','1','0','2','0','dd','1438887355');");
E_D("replace into `hhs_order_action` values('20','15','admin','5','5','2','0','d','1438887567');");
E_D("replace into `hhs_order_action` values('21','15','admin','1','1','2','1','d','1438887603');");
E_D("replace into `hhs_order_action` values('22','15','admin','4','0','0','0','s','1438887621');");
E_D("replace into `hhs_order_action` values('23','16','admin','5','5','2','0','dd','1438888578');");
E_D("replace into `hhs_order_action` values('24','16','admin','1','1','2','1','dd','1438888594');");
E_D("replace into `hhs_order_action` values('25','16','admin','4','0','0','0','sss','1438888612');");
E_D("replace into `hhs_order_action` values('26','17','admin','1','0','2','0','dd','1438888685');");
E_D("replace into `hhs_order_action` values('27','10','admin','1','3','2','0','','1438888969');");
E_D("replace into `hhs_order_action` values('28','19','admin','1','0','2','0','aaa','1438889289');");
E_D("replace into `hhs_order_action` values('29','20','admin','1','0','2','0','dd','1438889409');");
E_D("replace into `hhs_order_action` values('30','21','买家','1','0','2','0','','1438897639');");
E_D("replace into `hhs_order_action` values('947','1163','买家','1','0','2','0','','1448339660');");
E_D("replace into `hhs_order_action` values('946','1161','买家','1','0','2','0','','1448339400');");
E_D("replace into `hhs_order_action` values('945','1160','买家','1','0','2','0','','1448339249');");
E_D("replace into `hhs_order_action` values('944','1159','买家','1','0','2','0','','1448338676');");
E_D("replace into `hhs_order_action` values('943','1158','买家','1','0','2','0','','1448338242');");
E_D("replace into `hhs_order_action` values('942','1156','买家','1','0','2','0','','1448335463');");
E_D("replace into `hhs_order_action` values('941','1155','买家','1','0','2','0','','1448335334');");
E_D("replace into `hhs_order_action` values('940','1153','买家','1','0','2','0','','1448334260');");
E_D("replace into `hhs_order_action` values('939','1152','买家','1','0','2','0','','1448333574');");
E_D("replace into `hhs_order_action` values('938','1151','买家','1','0','2','0','','1448322741');");
E_D("replace into `hhs_order_action` values('937','1150','买家','1','0','2','0','','1448322267');");
E_D("replace into `hhs_order_action` values('936','1149','买家','1','0','2','0','','1448322189');");
E_D("replace into `hhs_order_action` values('935','1148','买家','1','0','2','0','','1448322069');");
E_D("replace into `hhs_order_action` values('934','1147','买家','1','0','2','0','','1448321123');");
E_D("replace into `hhs_order_action` values('933','1146','买家','1','0','2','0','','1448320754');");
E_D("replace into `hhs_order_action` values('932','1145','买家','1','0','2','0','','1448320100');");
E_D("replace into `hhs_order_action` values('931','1135','买家','1','0','2','0','','1448320033');");
E_D("replace into `hhs_order_action` values('930','1134','买家','1','0','2','0','','1448319888');");
E_D("replace into `hhs_order_action` values('929','1133','买家','1','0','2','0','','1448319634');");
E_D("replace into `hhs_order_action` values('928','1144','买家','1','0','2','0','','1448319419');");
E_D("replace into `hhs_order_action` values('927','1143','买家','1','0','2','0','','1448319111');");
E_D("replace into `hhs_order_action` values('926','1142','买家','1','0','2','0','','1448318806');");
E_D("replace into `hhs_order_action` values('925','1141','买家','1','0','2','0','','1448318454');");
E_D("replace into `hhs_order_action` values('924','1139','买家','1','0','2','0','','1448317639');");
E_D("replace into `hhs_order_action` values('923','1137','买家','1','0','2','0','','1448317381');");
E_D("replace into `hhs_order_action` values('922','1140','买家','1','0','2','0','','1448317296');");
E_D("replace into `hhs_order_action` values('921','1138','买家','1','0','2','0','','1448317215');");
E_D("replace into `hhs_order_action` values('920','1136','买家','1','0','2','0','','1448317070');");
E_D("replace into `hhs_order_action` values('919','1044','admin','5','2','2','0','','1448314985');");
E_D("replace into `hhs_order_action` values('918','1131','买家','1','0','2','0','','1448252811');");
E_D("replace into `hhs_order_action` values('917','1132','买家','1','0','2','0','','1448252800');");
E_D("replace into `hhs_order_action` values('916','1129','买家','1','0','2','0','','1448250710');");
E_D("replace into `hhs_order_action` values('915','1127','买家','1','0','2','0','','1448244261');");
E_D("replace into `hhs_order_action` values('914','1124','买家','1','0','2','0','','1448237000');");
E_D("replace into `hhs_order_action` values('913','1116','买家','1','0','2','0','','1448231015');");
E_D("replace into `hhs_order_action` values('912','1115','买家','1','0','2','0','','1448230962');");
E_D("replace into `hhs_order_action` values('911','1112','买家','1','0','2','0','','1448166829');");
E_D("replace into `hhs_order_action` values('910','1107','买家','1','0','2','0','','1448138344');");
E_D("replace into `hhs_order_action` values('909','1106','买家','1','0','2','0','','1448136385');");
E_D("replace into `hhs_order_action` values('908','1105','买家','1','0','2','0','','1448136243');");
E_D("replace into `hhs_order_action` values('907','1103','买家','1','0','2','0','','1448094770');");
E_D("replace into `hhs_order_action` values('906','1083','admin','4','0','3','0','','1448074056');");
E_D("replace into `hhs_order_action` values('905','1083','买家','1','0','2','0','','1448070316');");
E_D("replace into `hhs_order_action` values('904','1082','买家','1','0','2','0','','1448070160');");
E_D("replace into `hhs_order_action` values('903','1074','admin','4','0','3','0','','1448069983');");
E_D("replace into `hhs_order_action` values('902','1075','admin','4','0','3','0','','1448069968');");
E_D("replace into `hhs_order_action` values('901','1077','admin','4','0','3','0','','1448069953');");
E_D("replace into `hhs_order_action` values('900','1079','admin','4','0','3','0','','1448069942');");
E_D("replace into `hhs_order_action` values('899','1081','admin','4','0','3','0','','1448069930');");
E_D("replace into `hhs_order_action` values('898','1081','买家','1','0','2','0','','1448069382');");
E_D("replace into `hhs_order_action` values('897','1080','买家','1','0','2','0','','1448069335');");
E_D("replace into `hhs_order_action` values('896','1079','买家','1','0','2','0','','1448068975');");
E_D("replace into `hhs_order_action` values('895','1078','买家','1','0','2','0','','1448068883');");
E_D("replace into `hhs_order_action` values('894','1077','买家','1','0','2','0','','1448068352');");
E_D("replace into `hhs_order_action` values('893','1076','买家','1','0','2','0','','1448068297');");
E_D("replace into `hhs_order_action` values('892','1075','买家','1','0','2','0','','1448067930');");
E_D("replace into `hhs_order_action` values('891','1074','买家','1','0','2','0','','1448067393');");
E_D("replace into `hhs_order_action` values('890','1069','admin','4','0','3','0','感觉','1448067332');");
E_D("replace into `hhs_order_action` values('889','1071','admin','4','0','3','0','谷丰','1448067318');");
E_D("replace into `hhs_order_action` values('888','1073','买家','1','0','2','0','','1448067193');");
E_D("replace into `hhs_order_action` values('887','1072','买家','1','0','2','0','','1448066984');");
E_D("replace into `hhs_order_action` values('886','1071','买家','1','0','2','0','','1448066667');");
E_D("replace into `hhs_order_action` values('885','1070','买家','1','0','2','0','','1448066437');");
E_D("replace into `hhs_order_action` values('884','1069','买家','1','0','2','0','','1448066219');");
E_D("replace into `hhs_order_action` values('883','1068','买家','1','0','2','0','','1448066135');");
E_D("replace into `hhs_order_action` values('882','1067','买家','1','0','2','0','','1448062801');");
E_D("replace into `hhs_order_action` values('881','1066','买家','1','0','2','0','','1448061623');");
E_D("replace into `hhs_order_action` values('880','1065','买家','1','0','2','0','','1448061590');");
E_D("replace into `hhs_order_action` values('879','1064','买家','1','0','2','0','','1448061434');");
E_D("replace into `hhs_order_action` values('878','1063','买家','1','0','2','0','','1448061267');");
E_D("replace into `hhs_order_action` values('877','1062','买家','1','0','2','0','','1448061232');");
E_D("replace into `hhs_order_action` values('876','1061','买家','1','0','2','0','','1448061064');");
E_D("replace into `hhs_order_action` values('875','1060','买家','1','0','2','0','','1448061034');");
E_D("replace into `hhs_order_action` values('874','1059','买家','1','0','2','0','','1448060916');");
E_D("replace into `hhs_order_action` values('873','1058','买家','1','0','2','0','','1448060890');");
E_D("replace into `hhs_order_action` values('872','1057','买家','1','0','2','0','','1448060774');");
E_D("replace into `hhs_order_action` values('871','1056','买家','1','0','2','0','','1448060731');");
E_D("replace into `hhs_order_action` values('870','1055','买家','1','0','2','0','','1448060589');");
E_D("replace into `hhs_order_action` values('869','1054','买家','1','0','2','0','','1448060560');");
E_D("replace into `hhs_order_action` values('868','1053','买家','1','0','2','0','','1448060447');");
E_D("replace into `hhs_order_action` values('867','1052','买家','1','0','2','0','','1448060414');");
E_D("replace into `hhs_order_action` values('866','1051','买家','1','0','2','0','','1448059805');");
E_D("replace into `hhs_order_action` values('865','1050','买家','1','0','2','0','','1448059469');");
E_D("replace into `hhs_order_action` values('864','1049','买家','1','0','2','0','','1448059360');");
E_D("replace into `hhs_order_action` values('863','1048','买家','1','0','2','0','','1448058041');");
E_D("replace into `hhs_order_action` values('862','1047','买家','1','0','2','0','','1448057775');");
E_D("replace into `hhs_order_action` values('861','1046','买家','1','0','2','0','','1448057704');");
E_D("replace into `hhs_order_action` values('860','1045','买家','1','0','2','0','','1448057638');");
E_D("replace into `hhs_order_action` values('859','1044','admin','1','1','2','1','批量处理','1448054743');");
E_D("replace into `hhs_order_action` values('858','1044','admin','5','5','2','0','批量修改订单','1448054743');");
E_D("replace into `hhs_order_action` values('857','1044','买家','1','0','2','0','','1447991443');");
E_D("replace into `hhs_order_action` values('856','1043','买家','1','0','2','0','','1447895750');");
E_D("replace into `hhs_order_action` values('855','1042','买家','1','0','2','0','','1447885476');");
E_D("replace into `hhs_order_action` values('854','1041','买家','1','0','2','0','','1447884241');");
E_D("replace into `hhs_order_action` values('853','1039','admin','4','0','3','0','','1447879936');");
E_D("replace into `hhs_order_action` values('852','1039','买家','1','0','2','0','','1447879882');");
E_D("replace into `hhs_order_action` values('851','1038','买家','1','0','2','0','','1447875859');");
E_D("replace into `hhs_order_action` values('850','1033','买家','1','0','2','0','','1447810760');");
E_D("replace into `hhs_order_action` values('849','1032','买家','1','0','2','0','','1447805547');");
E_D("replace into `hhs_order_action` values('848','1028','admin','5','5','2','0','','1447803282');");
E_D("replace into `hhs_order_action` values('847','686','admin','1','0','0','0','','1447803167');");
E_D("replace into `hhs_order_action` values('846','1030','买家','1','0','2','0','','1447797434');");
E_D("replace into `hhs_order_action` values('845','1029','买家','1','0','2','0','','1447796931');");
E_D("replace into `hhs_order_action` values('844','1028','买家','1','0','2','0','','1447796826');");
E_D("replace into `hhs_order_action` values('843','1027','买家','1','0','2','0','','1447795540');");
E_D("replace into `hhs_order_action` values('842','1026','买家','1','0','2','0','','1447739123');");
E_D("replace into `hhs_order_action` values('841','1025','买家','1','0','2','0','','1447737004');");

require("../../inc/footer.php");
?>