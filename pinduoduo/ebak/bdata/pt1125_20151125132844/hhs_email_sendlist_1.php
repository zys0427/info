<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_email_sendlist`;");
E_C("CREATE TABLE `hhs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_email_sendlist` values('12','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437548996');");
E_D("replace into `hhs_email_sendlist` values('13','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437564299');");
E_D("replace into `hhs_email_sendlist` values('14','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437611528');");
E_D("replace into `hhs_email_sendlist` values('15','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623505');");
E_D("replace into `hhs_email_sendlist` values('16','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623739');");
E_D("replace into `hhs_email_sendlist` values('17','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623756');");
E_D("replace into `hhs_email_sendlist` values('18','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624079');");
E_D("replace into `hhs_email_sendlist` values('19','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624241');");
E_D("replace into `hhs_email_sendlist` values('20','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624302');");
E_D("replace into `hhs_email_sendlist` values('21','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624599');");
E_D("replace into `hhs_email_sendlist` values('22','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624663');");
E_D("replace into `hhs_email_sendlist` values('23','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624890');");
E_D("replace into `hhs_email_sendlist` values('24','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624905');");
E_D("replace into `hhs_email_sendlist` values('25','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437636130');");
E_D("replace into `hhs_email_sendlist` values('26','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637233');");
E_D("replace into `hhs_email_sendlist` values('27','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637244');");
E_D("replace into `hhs_email_sendlist` values('28','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637256');");
E_D("replace into `hhs_email_sendlist` values('29','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637270');");
E_D("replace into `hhs_email_sendlist` values('30','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651910');");
E_D("replace into `hhs_email_sendlist` values('31','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651921');");
E_D("replace into `hhs_email_sendlist` values('32','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651929');");
E_D("replace into `hhs_email_sendlist` values('33','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706143');");
E_D("replace into `hhs_email_sendlist` values('34','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706177');");
E_D("replace into `hhs_email_sendlist` values('35','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706197');");
E_D("replace into `hhs_email_sendlist` values('36','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706210');");
E_D("replace into `hhs_email_sendlist` values('37','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706303');");
E_D("replace into `hhs_email_sendlist` values('38','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706842');");
E_D("replace into `hhs_email_sendlist` values('39','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437720306');");
E_D("replace into `hhs_email_sendlist` values('40','','6','','0','1','1438235070');");
E_D("replace into `hhs_email_sendlist` values('41','','6','','0','1','1438327593');");
E_D("replace into `hhs_email_sendlist` values('42','','6','','0','1','1438329228');");
E_D("replace into `hhs_email_sendlist` values('43','','6','','0','1','1438329274');");
E_D("replace into `hhs_email_sendlist` values('44','','6','','0','1','1438331334');");
E_D("replace into `hhs_email_sendlist` values('45','','6','','0','1','1438331344');");
E_D("replace into `hhs_email_sendlist` values('46','','6','','0','1','1438331392');");
E_D("replace into `hhs_email_sendlist` values('47','','6','','0','1','1438331420');");
E_D("replace into `hhs_email_sendlist` values('48','','6','','0','1','1438332096');");
E_D("replace into `hhs_email_sendlist` values('49','','6','','0','1','1438332848');");
E_D("replace into `hhs_email_sendlist` values('50','','6','','0','1','1438336310');");
E_D("replace into `hhs_email_sendlist` values('51','','6','','0','1','1438337325');");
E_D("replace into `hhs_email_sendlist` values('52','','6','','0','1','1438337396');");
E_D("replace into `hhs_email_sendlist` values('53','','6','','0','1','1438406896');");
E_D("replace into `hhs_email_sendlist` values('54','','6','','0','1','1438406906');");
E_D("replace into `hhs_email_sendlist` values('55','','6','','0','1','1438406990');");
E_D("replace into `hhs_email_sendlist` values('56','','6','','0','1','1438410031');");
E_D("replace into `hhs_email_sendlist` values('57','','6','','0','1','1438411190');");
E_D("replace into `hhs_email_sendlist` values('58','','6','','0','1','1438411205');");
E_D("replace into `hhs_email_sendlist` values('59','','6','','0','1','1438411866');");
E_D("replace into `hhs_email_sendlist` values('60','','6','','0','1','1438411875');");
E_D("replace into `hhs_email_sendlist` values('61','','6','','0','1','1438412720');");
E_D("replace into `hhs_email_sendlist` values('62','','6','','0','1','1438412729');");
E_D("replace into `hhs_email_sendlist` values('63','','6','','0','1','1438413035');");
E_D("replace into `hhs_email_sendlist` values('64','','6','','0','1','1438420455');");
E_D("replace into `hhs_email_sendlist` values('65','','6','','0','1','1438420465');");
E_D("replace into `hhs_email_sendlist` values('66','','6','','0','1','1438574369');");
E_D("replace into `hhs_email_sendlist` values('67','','6','','0','1','1438582816');");
E_D("replace into `hhs_email_sendlist` values('68','','6','','0','1','1438592372');");
E_D("replace into `hhs_email_sendlist` values('69','','6','','0','1','1438592446');");
E_D("replace into `hhs_email_sendlist` values('70','','6','','0','1','1438592529');");
E_D("replace into `hhs_email_sendlist` values('71','','6','','0','1','1438592950');");
E_D("replace into `hhs_email_sendlist` values('72','','6','','0','1','1438601073');");
E_D("replace into `hhs_email_sendlist` values('73','','6','','0','1','1438653049');");
E_D("replace into `hhs_email_sendlist` values('74','','6','','0','1','1438653968');");
E_D("replace into `hhs_email_sendlist` values('75','','6','','0','1','1438654121');");
E_D("replace into `hhs_email_sendlist` values('76','','6','','0','1','1438654869');");
E_D("replace into `hhs_email_sendlist` values('77','','6','','0','1','1438655533');");
E_D("replace into `hhs_email_sendlist` values('78','','6','','0','1','1438656159');");
E_D("replace into `hhs_email_sendlist` values('79','','6','','0','1','1438657073');");
E_D("replace into `hhs_email_sendlist` values('80','','6','','0','1','1438657094');");
E_D("replace into `hhs_email_sendlist` values('81','','6','','0','1','1438657153');");
E_D("replace into `hhs_email_sendlist` values('82','','6','','0','1','1438829436');");
E_D("replace into `hhs_email_sendlist` values('83','','6','','0','1','1438829717');");
E_D("replace into `hhs_email_sendlist` values('84','','6','','0','1','1438830199');");
E_D("replace into `hhs_email_sendlist` values('85','','6','','0','1','1438831766');");
E_D("replace into `hhs_email_sendlist` values('86','','6','','0','1','1438832450');");
E_D("replace into `hhs_email_sendlist` values('87','','6','','0','1','1438916335');");
E_D("replace into `hhs_email_sendlist` values('88','','6','','0','1','1438916907');");
E_D("replace into `hhs_email_sendlist` values('89','','6','','0','1','1438936540');");
E_D("replace into `hhs_email_sendlist` values('90','','6','','0','1','1439026523');");
E_D("replace into `hhs_email_sendlist` values('91','','6','','0','1','1439176474');");
E_D("replace into `hhs_email_sendlist` values('92','','6','','0','1','1439222731');");
E_D("replace into `hhs_email_sendlist` values('93','','6','','0','1','1439518539');");
E_D("replace into `hhs_email_sendlist` values('94','','6','','0','1','1439518605');");
E_D("replace into `hhs_email_sendlist` values('95','','6','','0','1','1439519215');");
E_D("replace into `hhs_email_sendlist` values('96','','6','','0','1','1439519311');");
E_D("replace into `hhs_email_sendlist` values('97','','6','','0','1','1439519321');");
E_D("replace into `hhs_email_sendlist` values('98','','6','','0','1','1439519332');");
E_D("replace into `hhs_email_sendlist` values('99','','6','','0','1','1439531851');");
E_D("replace into `hhs_email_sendlist` values('100','','6','','0','1','1439531936');");
E_D("replace into `hhs_email_sendlist` values('101','','6','','0','1','1439532039');");
E_D("replace into `hhs_email_sendlist` values('102','','6','','0','1','1439537857');");
E_D("replace into `hhs_email_sendlist` values('103','','6','','0','1','1439537946');");
E_D("replace into `hhs_email_sendlist` values('104','','6','','0','1','1439540195');");
E_D("replace into `hhs_email_sendlist` values('105','','6','','0','1','1439540210');");
E_D("replace into `hhs_email_sendlist` values('106','','6','','0','1','1439541164');");
E_D("replace into `hhs_email_sendlist` values('107','','6','','0','1','1439541177');");
E_D("replace into `hhs_email_sendlist` values('108','','6','','0','1','1439547590');");
E_D("replace into `hhs_email_sendlist` values('109','','6','','0','1','1439547803');");
E_D("replace into `hhs_email_sendlist` values('110','','6','','0','1','1439547930');");
E_D("replace into `hhs_email_sendlist` values('111','','6','','0','1','1439547941');");
E_D("replace into `hhs_email_sendlist` values('112','','6','','0','1','1439548365');");
E_D("replace into `hhs_email_sendlist` values('113','','6','','0','1','1439548376');");
E_D("replace into `hhs_email_sendlist` values('114','','6','','0','1','1439548425');");
E_D("replace into `hhs_email_sendlist` values('115','','6','','0','1','1439548445');");
E_D("replace into `hhs_email_sendlist` values('116','','6','','0','1','1439549393');");
E_D("replace into `hhs_email_sendlist` values('117','','6','','0','1','1439603182');");
E_D("replace into `hhs_email_sendlist` values('118','','6','','0','1','1439875608');");
E_D("replace into `hhs_email_sendlist` values('119','','6','','0','1','1439875662');");
E_D("replace into `hhs_email_sendlist` values('120','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1442039893');");
E_D("replace into `hhs_email_sendlist` values('121','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1442071914');");
E_D("replace into `hhs_email_sendlist` values('122','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1442840384');");
E_D("replace into `hhs_email_sendlist` values('123','27444309@qq.com','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1445576798');");
E_D("replace into `hhs_email_sendlist` values('124','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447065877');");
E_D("replace into `hhs_email_sendlist` values('125','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447067346');");
E_D("replace into `hhs_email_sendlist` values('126','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447067379');");
E_D("replace into `hhs_email_sendlist` values('127','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447067443');");
E_D("replace into `hhs_email_sendlist` values('128','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447067464');");
E_D("replace into `hhs_email_sendlist` values('129','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447067574');");
E_D("replace into `hhs_email_sendlist` values('130','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/phpstudy/www/pt.hostadmin.com.cn/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1447119071');");

require("../../inc/footer.php");
?>