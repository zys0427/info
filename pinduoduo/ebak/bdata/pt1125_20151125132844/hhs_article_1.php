<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_article`;");
E_C("CREATE TABLE `hhs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_article` values('36','14','关于我们','关于我们关于我们dddddddddddddddddddddddddfff','','','','0','1','1438381334','','0','','');");
E_D("replace into `hhs_article` values('38','14','我的售后','非常抱歉给您造成不便，您可以在“拼团”微信公众号内回复您的问题，客服童鞋会尽快解决您的问题的哦~\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n如何联系我们？1<span class=\"tn-Powered-by-XIUMI\" style=\"color:#0070C0;line-height:1.4;font-size:1em;\"><span class=\"tn-Powered-by-XIUMI\" style=\"font-size:1em;font-family:inherit;font-weight:bolder;text-decoration:inherit;color:#F96E57;\">进入“拼好货商城”微信公众号点击左下方图标</span></span><img src=\"http://mmbiz.qpic.cn/mmbiz/1ovNnynCUfLqkjEuicsiayjCYb1118QGftdUSupqQ61nu43cD5IGj5bpZibhmJeeeA9dJZBsSvchfic4GMsn1Fjn1A/640?wx_fmt=png&amp;wxfrom=5&amp;wx_lazy=1\" class=\"tn-Powered-by-XIUMI\" style=\"width:670px ! important;height:auto ! important;\" width=\"100%\" />2<span class=\"tn-Powered-by-XIUMI\" style=\"color:#0070C0;line-height:1.4;font-size:1em;\"><span class=\"tn-Powered-by-XIUMI\" style=\"font-size:1em;font-family:inherit;font-weight:bolder;text-decoration:inherit;color:#F96E57;\">在对话框内输入您的问题稍后就会有客服同学帮您处理</span></span><img src=\"http://mmbiz.qpic.cn/mmbiz/1ovNnynCUfLqkjEuicsiayjCYb1118QGft14KRUZAvPZgbKhfg7aXjkbDodib4AaIic29a6mjzHro6RFGcEcEbwx0Q/640?wx_fmt=png&amp;wxfrom=5&amp;wx_lazy=1\" class=\"tn-Powered-by-XIUMI\" style=\"width:670px ! important;height:auto ! important;\" width=\"100%\" />\r\n<p>\r\n	我们承诺坏果包赔，请您放心！感谢您对我们的支持和谅解，谢谢！\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<strong><span style=\"background-color:#FFC000;\">客服工作时间：</span></strong>\r\n</p>\r\n<p>\r\n	<strong><span style=\"background-color:#FFC000;\">周一到周日，8：00-24:00</span></strong>\r\n</p>','','','','0','1','1439519434','','0','','');");

require("../../inc/footer.php");
?>