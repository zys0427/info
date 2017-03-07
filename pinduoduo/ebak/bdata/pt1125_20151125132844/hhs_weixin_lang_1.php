<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_weixin_lang`;");
E_C("CREATE TABLE `hhs_weixin_lang` (
  `lang_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(64) NOT NULL,
  `lang_value` text NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_weixin_lang` values('1','regmsg','欢迎关注软件体验拼好货商城，软件专注电商软件开发，开发经验六年载，对三百多家电商企业提供产品服务。拼好货商城又是公司团队开发的一大创新性产品，公司会不断总结，不断和电商企业探讨，精心制作，不端更新，助中小企业赢得商机！咨询电话：029-87888753 13891864749\r\n   \r\n进入 <a href=\"http://pt.hostadmin.com.cn/\">官方商城</a>');");

require("../../inc/footer.php");
?>