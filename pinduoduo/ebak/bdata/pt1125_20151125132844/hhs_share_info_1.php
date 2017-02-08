<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_share_info`;");
E_C("CREATE TABLE `hhs_share_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `link_url` varchar(200) DEFAULT NULL COMMENT '链接字符串',
  `share_type` tinyint(4) DEFAULT '1' COMMENT '1 给好友 2 朋友圈 3 微博 4 qq',
  `share_status` tinyint(4) DEFAULT '1' COMMENT '1 成功 2 取消分享',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=570 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_share_info` values('2','17','http://vshop.xakc.net/share.php?team_sign=236','1','1','1437782364');");
E_D("replace into `hhs_share_info` values('3','17','http://vshop.xakc.net/share.php?team_sign=237','1','1','1437782606');");
E_D("replace into `hhs_share_info` values('4','17','http://vshop.xakc.net/share.php?team_sign=237','1','2','1437782717');");
E_D("replace into `hhs_share_info` values('5','17','http://vshop.xakc.net/share.php?team_sign=238','1','1','1437782841');");
E_D("replace into `hhs_share_info` values('6','20','http://vshop.xakc.net/share.php?team_sign=242','1','1','1437784966');");
E_D("replace into `hhs_share_info` values('7','98','http://vshop.xakc.net/share.php?team_sign=243','1','1','1437935962');");
E_D("replace into `hhs_share_info` values('8','17','http://vshop.xakc.net/share.php?team_sign=151','1','2','1437963489');");
E_D("replace into `hhs_share_info` values('9','17','http://vshop.xakc.net/share.php?team_sign=247','1','1','1437963954');");
E_D("replace into `hhs_share_info` values('10','17','http://vshop.xakc.net/share.php?team_sign=247','1','1','1437964336');");
E_D("replace into `hhs_share_info` values('11','17','http://vshop.xakc.net/share.php?team_sign=252','1','1','1438009592');");
E_D("replace into `hhs_share_info` values('12','17','http://vshop.xakc.net/share.php?team_sign=252','1','2','1438010153');");
E_D("replace into `hhs_share_info` values('13','17','http://vshop.xakc.net/share.php?team_sign=252','1','2','1438010160');");
E_D("replace into `hhs_share_info` values('14','111','http://vshop.xakc.net/share.php?team_sign=254','1','1','1438043056');");
E_D("replace into `hhs_share_info` values('15','24','http://vshop.xakc.net/share.php?team_sign=255','1','1','1438050988');");
E_D("replace into `hhs_share_info` values('16','17','http://vshop.xakc.net/share.php?team_sign=252','1','1','1438055585');");
E_D("replace into `hhs_share_info` values('17','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438056236');");
E_D("replace into `hhs_share_info` values('18','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438056417');");
E_D("replace into `hhs_share_info` values('19','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438104016');");
E_D("replace into `hhs_share_info` values('20','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438106716');");
E_D("replace into `hhs_share_info` values('21','20','http://vshop.xakc.net/share.php?team_sign=259','1','1','1438108653');");
E_D("replace into `hhs_share_info` values('22','19','http://vshop.xakc.net/index.php','1','2','1438109364');");
E_D("replace into `hhs_share_info` values('23','20','http://vshop.xakc.net/share.php?team_sign=261','1','1','1438111540');");
E_D("replace into `hhs_share_info` values('24','20','http://vshop.xakc.net/share.php?team_sign=261','1','1','1438111656');");
E_D("replace into `hhs_share_info` values('25','120','http://vshop.xakc.net/index.php','1','1','1438119455');");
E_D("replace into `hhs_share_info` values('26','17','http://vshop.xakc.net/index.php','1','2','1438121608');");
E_D("replace into `hhs_share_info` values('27','19','http://vshop.xakc.net/index.php','1','1','1438127219');");
E_D("replace into `hhs_share_info` values('28','19','http://vshop.xakc.net/index.php','1','1','1438148009');");
E_D("replace into `hhs_share_info` values('29','19','http://vshop.xakc.net/index.php','1','1','1438286065');");
E_D("replace into `hhs_share_info` values('30','22','http://vshop.xakc.net/share.php?team_sign=286','1','1','1438307547');");
E_D("replace into `hhs_share_info` values('31','19','http://vshop.xakc.net/index.php','1','1','1438364139');");
E_D("replace into `hhs_share_info` values('569','925','http://pt.hostadmin.com.cn/good_info.php?id=86','1','2','1448253308');");
E_D("replace into `hhs_share_info` values('568','1340','http://pt.hostadmin.com.cn/share.php?team_sign=1132','1','1','1448252874');");
E_D("replace into `hhs_share_info` values('567','925','','1','0','1448252817');");
E_D("replace into `hhs_share_info` values('565','925','','1','0','1448252633');");
E_D("replace into `hhs_share_info` values('566','1340','http://pt.hostadmin.com.cn/share.php?team_sign=1132','1','1','1448252815');");
E_D("replace into `hhs_share_info` values('564','1340','http://pt.hostadmin.com.cn/share.php?team_sign=1116','1','1','1448231036');");
E_D("replace into `hhs_share_info` values('563','746','http://pt.hostadmin.com.cn/share.php?team_sign=1112','1','1','1448166866');");
E_D("replace into `hhs_share_info` values('562','925','http://pt.hostadmin.com.cn/share.php?team_sign=1107','1','1','1448138368');");
E_D("replace into `hhs_share_info` values('561','925','http://pt.hostadmin.com.cn/share.php?team_sign=1105','1','1','1448136265');");
E_D("replace into `hhs_share_info` values('560','1323','http://pt.hostadmin.com.cn/index.php','1','1','1448075903');");
E_D("replace into `hhs_share_info` values('559','818','http://pt.hostadmin.com.cn/share.php?team_sign=1082','1','1','1448070177');");
E_D("replace into `hhs_share_info` values('558','818','http://pt.hostadmin.com.cn/share.php?team_sign=1080','1','1','1448069354');");
E_D("replace into `hhs_share_info` values('557','818','http://pt.hostadmin.com.cn/share.php?team_sign=1078','1','1','1448068913');");
E_D("replace into `hhs_share_info` values('556','818','http://pt.hostadmin.com.cn/share.php?team_sign=1076','1','1','1448068316');");
E_D("replace into `hhs_share_info` values('555','818','http://pt.hostadmin.com.cn/share.php?team_sign=1073','1','1','1448067889');");
E_D("replace into `hhs_share_info` values('554','818','http://pt.hostadmin.com.cn/share.php?team_sign=1072','1','1','1448067365');");
E_D("replace into `hhs_share_info` values('553','818','http://pt.hostadmin.com.cn/share.php?team_sign=1070','1','1','1448066580');");
E_D("replace into `hhs_share_info` values('552','818','http://pt.hostadmin.com.cn/share.php?team_sign=1068','1','1','1448066148');");
E_D("replace into `hhs_share_info` values('551','925','http://pt.hostadmin.com.cn/share.php?team_sign=1065','1','1','1448061601');");
E_D("replace into `hhs_share_info` values('550','818','http://pt.hostadmin.com.cn/share.php?team_sign=1062','1','1','1448061243');");
E_D("replace into `hhs_share_info` values('549','925','http://pt.hostadmin.com.cn/share.php?team_sign=1060','1','1','1448061044');");
E_D("replace into `hhs_share_info` values('548','925','http://pt.hostadmin.com.cn/share.php?team_sign=1058','1','1','1448060898');");
E_D("replace into `hhs_share_info` values('547','925','http://pt.hostadmin.com.cn/share.php?team_sign=1056','1','1','1448060743');");
E_D("replace into `hhs_share_info` values('546','925','http://pt.hostadmin.com.cn/share.php?team_sign=1052','1','1','1448060427');");
E_D("replace into `hhs_share_info` values('545','925','http://pt.hostadmin.com.cn/share.php?team_sign=1050','1','1','1448059762');");
E_D("replace into `hhs_share_info` values('544','150','http://pt.hostadmin.com.cn/share.php?team_sign=1048','1','1','1448059103');");
E_D("replace into `hhs_share_info` values('543','925','http://pt.hostadmin.com.cn/share.php?team_sign=1046','1','1','1448057724');");
E_D("replace into `hhs_share_info` values('542','925','http://pt.hostadmin.com.cn/share.php?team_sign=1045','1','2','1448057666');");
E_D("replace into `hhs_share_info` values('541','1305','http://pt.hostadmin.com.cn/index.php','1','1','1447977099');");
E_D("replace into `hhs_share_info` values('540','1295','http://pt.hostadmin.com.cn/','1','1','1447892012');");
E_D("replace into `hhs_share_info` values('539','1295','http://pt.hostadmin.com.cn/goods.php?id=77','1','2','1447891983');");
E_D("replace into `hhs_share_info` values('538','177','http://pt.hostadmin.com.cn/share.php?team_sign=1041','2','1','1447884375');");
E_D("replace into `hhs_share_info` values('537','1287','http://pt.hostadmin.com.cn/index.php','1','1','1447884339');");
E_D("replace into `hhs_share_info` values('536','177','http://pt.hostadmin.com.cn/share.php?team_sign=1041','2','1','1447884276');");
E_D("replace into `hhs_share_info` values('535','1234','http://pt.hostadmin.com.cn/share.php?team_sign=1038','1','1','1447875876');");
E_D("replace into `hhs_share_info` values('534','1277','http://pt.hostadmin.com.cn/share.php?team_sign=1030','1','1','1447797471');");
E_D("replace into `hhs_share_info` values('533','1275','http://pt.hostadmin.com.cn/share.php?team_sign=1027','1','1','1447795560');");
E_D("replace into `hhs_share_info` values('532','1275','http://pt.hostadmin.com.cn/share.php?team_sign=1027','1','1','1447795553');");
E_D("replace into `hhs_share_info` values('531','1194','http://pt.hostadmin.com.cn/share.php?team_sign=1025','1','1','1447737021');");
E_D("replace into `hhs_share_info` values('530','1227','http://pt.hostadmin.com.cn/share.php?team_sign=1016','2','2','1447458075');");
E_D("replace into `hhs_share_info` values('529','925','http://pt.hostadmin.com.cn/share.php?team_sign=1021','1','1','1447432180');");
E_D("replace into `hhs_share_info` values('528','1227','http://pt.hostadmin.com.cn/share.php?team_sign=1016','2','1','1447366228');");
E_D("replace into `hhs_share_info` values('527','1213','http://pt.hostadmin.com.cn/share.php?team_sign=1018','2','2','1447360756');");
E_D("replace into `hhs_share_info` values('526','1213','http://pt.hostadmin.com.cn/share.php?team_sign=1018','1','2','1447360748');");
E_D("replace into `hhs_share_info` values('525','1227','http://pt.hostadmin.com.cn/share.php?team_sign=1016','1','1','1447295937');");
E_D("replace into `hhs_share_info` values('524','1227','http://pt.hostadmin.com.cn/share.php?team_sign=1016','2','2','1447295927');");
E_D("replace into `hhs_share_info` values('523','653','http://pt.hostadmin.com.cn/share.php?team_sign=1012','1','1','1447220029');");
E_D("replace into `hhs_share_info` values('522','653','http://pt.hostadmin.com.cn/index.php','1','1','1447181231');");
E_D("replace into `hhs_share_info` values('521','1216','http://pt.hostadmin.com.cn/goods.php?id=41','1','1','1447141355');");
E_D("replace into `hhs_share_info` values('520','1126','http://pt.hostadmin.com.cn/share.php?team_sign=1010','1','1','1447129826');");
E_D("replace into `hhs_share_info` values('519','150','http://pt.hostadmin.com.cn/share.php?team_sign=1007','1','1','1447097459');");
E_D("replace into `hhs_share_info` values('518','1193','http://pt.hostadmin.com.cn/index.php','1','1','1447025525');");
E_D("replace into `hhs_share_info` values('517','472','http://pt.hostadmin.com.cn/share.php?team_sign=996','1','1','1446789081');");
E_D("replace into `hhs_share_info` values('516','925','http://pt.hostadmin.com.cn/share.php?team_sign=995','1','2','1446767516');");
E_D("replace into `hhs_share_info` values('515','1024','http://pt.hostadmin.com.cn/index.php','4','1','1446752538');");
E_D("replace into `hhs_share_info` values('514','1024','http://pt.hostadmin.com.cn/index.php','1','1','1446751354');");
E_D("replace into `hhs_share_info` values('513','1143','http://pt.hostadmin.com.cn/goods.php?id=81','2','2','1446594328');");

require("../../inc/footer.php");
?>