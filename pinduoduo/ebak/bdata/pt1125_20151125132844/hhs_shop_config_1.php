<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_shop_config`;");
E_C("CREATE TABLE `hhs_shop_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=924 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_shop_config` values('1','0','shop_info','group','','','','1');");
E_D("replace into `hhs_shop_config` values('914','912','index_share_dec','text','','','这个商品帅呆了，大家一起来拼单吧，赶紧行动吧！GOGOGOGO！','1');");
E_D("replace into `hhs_shop_config` values('101','1','shop_name','text','','','昊海拼团','1');");
E_D("replace into `hhs_shop_config` values('102','1','shop_title','text','','','昊海拼团  11-1【测试-网站演示专用】','1');");
E_D("replace into `hhs_shop_config` values('103','1','shop_desc','text','','','昊海拼团，优质水果新鲜直供，大家一起来玩吧！!','1');");
E_D("replace into `hhs_shop_config` values('104','1','shop_keywords','text','','','一聚就惠','1');");
E_D("replace into `hhs_shop_config` values('913','912','index_share_title','text','','','这个商品帅呆了，大家一起来拼单吧，赶紧行动吧！GOGOGOGO！','1');");
E_D("replace into `hhs_shop_config` values('912','0','share_info','group','','','','1');");
E_D("replace into `hhs_shop_config` values('911','6','default_shipping_id','hidden','','','25','1');");
E_D("replace into `hhs_shop_config` values('108','1','shop_address','text','','','西安市金色城市','1');");
E_D("replace into `hhs_shop_config` values('116','1','shop_closed','select','0,1','','0','1');");
E_D("replace into `hhs_shop_config` values('117','1','close_comment','textarea','','','','1');");
E_D("replace into `hhs_shop_config` values('107','1','shop_city','manual','','','311','1');");
E_D("replace into `hhs_shop_config` values('105','1','shop_country','manual','','','1','1');");
E_D("replace into `hhs_shop_config` values('106','1','shop_province','manual','','','24','1');");
E_D("replace into `hhs_shop_config` values('122','1','shop_reg_closed','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('201','2','lang','manual','','','zh_cn','1');");
E_D("replace into `hhs_shop_config` values('202','2','icp_number','text','','','','1');");
E_D("replace into `hhs_shop_config` values('203','2','icp_file','file','','../cert/','','1');");
E_D("replace into `hhs_shop_config` values('204','2','watermark','file','','../images/','','1');");
E_D("replace into `hhs_shop_config` values('205','2','watermark_place','select','0,1,2,3,4,5','','1','1');");
E_D("replace into `hhs_shop_config` values('206','2','watermark_alpha','text','','','65','1');");
E_D("replace into `hhs_shop_config` values('207','1','use_storage','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('208','2','market_price_rate','text','','','1.2','1');");
E_D("replace into `hhs_shop_config` values('209','2','rewrite','select','0,1,2','','0','1');");
E_D("replace into `hhs_shop_config` values('210','2','integral_name','text','','','积分','1');");
E_D("replace into `hhs_shop_config` values('211','2','integral_scale','text','','','1','1');");
E_D("replace into `hhs_shop_config` values('212','2','integral_percent','text','','','1','1');");
E_D("replace into `hhs_shop_config` values('213','2','sn_prefix','text','','','HHS','1');");
E_D("replace into `hhs_shop_config` values('214','2','comment_check','select','0,1','','1','1');");
E_D("replace into `hhs_shop_config` values('215','2','no_picture','file','','../images/','','1');");
E_D("replace into `hhs_shop_config` values('218','2','stats_code','textarea','','','','1');");
E_D("replace into `hhs_shop_config` values('219','2','cache_time','text','','','3600','1');");
E_D("replace into `hhs_shop_config` values('220','2','register_points','text','','','0','1');");
E_D("replace into `hhs_shop_config` values('221','2','enable_gzip','select','0,1','','0','1');");
E_D("replace into `hhs_shop_config` values('222','2','top10_time','select','0,1,2,3,4','','0','1');");
E_D("replace into `hhs_shop_config` values('223','2','timezone','options','-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12','','8','1');");
E_D("replace into `hhs_shop_config` values('224','2','upload_size_limit','options','-1,0,64,128,256,512,1024,2048,4096','','64','1');");
E_D("replace into `hhs_shop_config` values('226','2','cron_method','select','0,1','','0','1');");
E_D("replace into `hhs_shop_config` values('227','2','comment_factor','select','0,1,2,3','','3','1');");
E_D("replace into `hhs_shop_config` values('228','2','enable_order_check','select','0,1','','1','1');");
E_D("replace into `hhs_shop_config` values('229','2','default_storage','text','','','10000','1');");
E_D("replace into `hhs_shop_config` values('230','2','bgcolor','text','','','#FFFFFF','1');");
E_D("replace into `hhs_shop_config` values('231','2','visit_stats','select','on,off','','off','1');");
E_D("replace into `hhs_shop_config` values('232','2','send_mail_on','select','on,off','','off','1');");
E_D("replace into `hhs_shop_config` values('233','2','auto_generate_gallery','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('234','2','retain_original_img','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('235','2','member_email_validate','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('236','2','message_board','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('239','2','certificate_id','hidden','','','105075','1');");
E_D("replace into `hhs_shop_config` values('240','2','token','hidden','','','b999d01e372f57fb6922163eea2096071d7c8d81b728bac27e11116d03028ecf','1');");
E_D("replace into `hhs_shop_config` values('241','2','certi','hidden','','','http://service.xaphp.cn/openapi/api.php','1');");
E_D("replace into `hhs_shop_config` values('242','2','send_verify_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('243','2','ent_id','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('244','2','ent_ac','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('245','2','ent_sign','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('246','2','ent_email','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('301','3','date_format','hidden','','','Y-m-d','1');");
E_D("replace into `hhs_shop_config` values('302','3','time_format','text','','','Y-m-d H:i:s','1');");
E_D("replace into `hhs_shop_config` values('303','3','currency_format','text','','','%s','1');");
E_D("replace into `hhs_shop_config` values('304','1','thumb_width','text','','','200','1');");
E_D("replace into `hhs_shop_config` values('305','1','thumb_height','text','','','200','1');");
E_D("replace into `hhs_shop_config` values('306','1','image_width','text','','','600','1');");
E_D("replace into `hhs_shop_config` values('307','1','image_height','text','','','400','1');");
E_D("replace into `hhs_shop_config` values('312','3','top_number','text','','','10','1');");
E_D("replace into `hhs_shop_config` values('313','3','history_number','text','','','5','1');");
E_D("replace into `hhs_shop_config` values('314','3','comments_number','text','','','5','1');");
E_D("replace into `hhs_shop_config` values('315','3','bought_goods','text','','','3','1');");
E_D("replace into `hhs_shop_config` values('316','3','article_number','text','','','8','1');");
E_D("replace into `hhs_shop_config` values('317','1','goods_name_length','text','','','7','1');");
E_D("replace into `hhs_shop_config` values('318','3','price_format','select','0,1,2,3,4,5','','0','1');");
E_D("replace into `hhs_shop_config` values('319','3','page_size','text','','','10','1');");
E_D("replace into `hhs_shop_config` values('320','3','sort_order_type','select','0,1,2','','0','1');");
E_D("replace into `hhs_shop_config` values('321','3','sort_order_method','select','0,1','','0','1');");
E_D("replace into `hhs_shop_config` values('322','3','show_order_type','select','0,1,2','','1','1');");
E_D("replace into `hhs_shop_config` values('323','3','attr_related_number','text','','','5','1');");
E_D("replace into `hhs_shop_config` values('324','3','goods_gallery_number','text','','','5','1');");
E_D("replace into `hhs_shop_config` values('325','3','article_title_length','text','','','16','1');");
E_D("replace into `hhs_shop_config` values('326','3','name_of_region_1','text','','','省','1');");
E_D("replace into `hhs_shop_config` values('327','3','name_of_region_2','text','','','市','1');");
E_D("replace into `hhs_shop_config` values('328','3','name_of_region_3','text','','','区县','1');");
E_D("replace into `hhs_shop_config` values('329','3','name_of_region_4','text','','','乡镇','1');");
E_D("replace into `hhs_shop_config` values('330','3','search_keywords','text','','','玛卡,枸杞,隐形眼镜,蜂蜜,美瞳,减肥','0');");
E_D("replace into `hhs_shop_config` values('332','3','related_goods_number','text','','','4','1');");
E_D("replace into `hhs_shop_config` values('333','3','help_open','select','0,1','','1','1');");
E_D("replace into `hhs_shop_config` values('334','3','article_page_size','text','','','10','1');");
E_D("replace into `hhs_shop_config` values('335','3','page_style','select','0,1','','1','1');");
E_D("replace into `hhs_shop_config` values('336','3','recommend_order','select','0,1','','0','1');");
E_D("replace into `hhs_shop_config` values('337','3','index_ad','hidden','','','sys','1');");
E_D("replace into `hhs_shop_config` values('401','4','can_invoice','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('402','4','use_integral','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('403','4','use_bonus','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('404','4','use_surplus','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('405','4','use_how_oos','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('406','4','send_confirm_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('407','4','send_ship_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('408','4','send_cancel_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('409','4','send_invalid_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('410','4','order_pay_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('411','4','order_unpay_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('412','4','order_ship_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('413','4','order_receive_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('414','4','order_unship_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('415','4','order_return_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('416','4','order_invalid_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('417','4','order_cancel_note','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('418','4','invoice_content','textarea','','','','1');");
E_D("replace into `hhs_shop_config` values('419','4','anonymous_buy','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('420','4','min_goods_amount','text','','','0','1');");
E_D("replace into `hhs_shop_config` values('422','4','invoice_type','manual','','','a:2:{s:4:\"type\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:0:\"\";}s:4:\"rate\";a:3:{i:0;d:1;i:1;d:1.5;i:2;d:0;}}','1');");
E_D("replace into `hhs_shop_config` values('423','1','stock_dec_time','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('425','4','send_service_email','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('427','4','show_attr_in_cart','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('501','5','smtp_host','text','','','smtp.exmail.qq.com','1');");
E_D("replace into `hhs_shop_config` values('502','5','smtp_port','text','','','25','1');");
E_D("replace into `hhs_shop_config` values('503','5','smtp_user','text','','','test@xaphp.cn','1');");
E_D("replace into `hhs_shop_config` values('504','5','smtp_pass','password','','','a54321','1');");
E_D("replace into `hhs_shop_config` values('505','5','smtp_mail','text','','','test@xaphp.cn','1');");
E_D("replace into `hhs_shop_config` values('506','5','mail_charset','select','UTF8,GB2312,BIG5','','UTF8','1');");
E_D("replace into `hhs_shop_config` values('507','5','mail_service','select','0,1','','1','0');");
E_D("replace into `hhs_shop_config` values('508','5','smtp_ssl','select','0,1','','0','0');");
E_D("replace into `hhs_shop_config` values('601','6','integrate_code','hidden','','','hhshop','1');");
E_D("replace into `hhs_shop_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('603','6','hash_code','hidden','','','729f65277bf97087405486c9dffafa90','1');");
E_D("replace into `hhs_shop_config` values('604','6','template','hidden','','','haohaios','1');");
E_D("replace into `hhs_shop_config` values('605','6','install_date','hidden','','','1414479442','1');");
E_D("replace into `hhs_shop_config` values('606','6','hhs_version','hidden','','','v2.7.3','1');");
E_D("replace into `hhs_shop_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}','1');");
E_D("replace into `hhs_shop_config` values('617','6','captcha','hidden','','','36','1');");
E_D("replace into `hhs_shop_config` values('618','6','captcha_width','hidden','','','60','1');");
E_D("replace into `hhs_shop_config` values('619','6','captcha_height','hidden','','','20','1');");
E_D("replace into `hhs_shop_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `hhs_shop_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `hhs_shop_config` values('622','6','flash_theme','hidden','','','dynfocus','1');");
E_D("replace into `hhs_shop_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `hhs_shop_config` values('701','7','show_goodssn','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('702','7','show_brand','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('703','7','show_goodsweight','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('704','7','show_goodsnumber','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('705','7','show_addtime','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('706','7','goodsattr_style','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('707','7','show_marketprice','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('801','8','sms_shop_mobile','text','','','18291829249','1');");
E_D("replace into `hhs_shop_config` values('802','8','sms_order_placed','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('803','8','sms_order_payed','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('804','8','sms_order_shipped','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('901','9','wap_config','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('902','9','wap_logo','file','','../images/','','1');");
E_D("replace into `hhs_shop_config` values('903','2','message_check','select','1,0','','1','1');");
E_D("replace into `hhs_shop_config` values('909','8','sms_signin','select','1,0','','0','1');");
E_D("replace into `hhs_shop_config` values('908','8','sms_password','password','','','a12345678','0');");
E_D("replace into `hhs_shop_config` values('907','8','sms_name','text','','','admin','0');");
E_D("replace into `hhs_shop_config` values('115','1','service_phone','text','','','029-87888753','1');");
E_D("replace into `hhs_shop_config` values('915','912','goods_share_title','text','','','商品不错，大家来拼单吧','1');");
E_D("replace into `hhs_shop_config` values('916','912','goods_share_dec','text','','','品质不错，大家来尝试一下吧','1');");
E_D("replace into `hhs_shop_config` values('917','912','group_share_dec','text','','','优质商品，大家一起玩吧','1');");
E_D("replace into `hhs_shop_config` values('918','912','group_share_ads','text','','','优质商品，大家一起玩吧','1');");
E_D("replace into `hhs_shop_config` values('919','1','group_purchase','text','','','15','1');");
E_D("replace into `hhs_shop_config` values('920','1','team_suc_time','text','','','2','1');");
E_D("replace into `hhs_shop_config` values('921','1','affirm_received_time','text','','','3','1');");
E_D("replace into `hhs_shop_config` values('922','1','subscribe_url','text','','','http://mp.weixin.qq.com/s?__biz=MzA5NTQwNTk4MQ==&mid=400757678&idx=1&sn=fda95ee24c46e45adc72a09483266f90','1');");
E_D("replace into `hhs_shop_config` values('923','1','qr_code','file','','../images/','../images/qrcode_for_gh_ec5ff306ffd5_258.jpg','1');");

require("../../inc/footer.php");
?>