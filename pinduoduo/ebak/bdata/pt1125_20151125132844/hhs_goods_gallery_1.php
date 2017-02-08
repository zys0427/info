<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_gallery`;");
E_C("CREATE TABLE `hhs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_gallery` values('46','1','images/201507/goods_img/1_P_1436320263055.jpg','','images/201507/thumb_img/1_thumb_P_1436320263096.jpg','images/201507/source_img/1_P_1436320263792.jpg');");
E_D("replace into `hhs_goods_gallery` values('48','39','images/201507/goods_img/39_P_1437605266200.jpg','','images/201507/thumb_img/39_thumb_P_1437605266386.jpg','images/201507/source_img/39_P_1437605266432.jpg');");
E_D("replace into `hhs_goods_gallery` values('60','1','images/201507/goods_img/1_P_1438049105695.jpg','','images/201507/thumb_img/1_thumb_P_1438049105764.jpg','images/201507/source_img/1_P_1438049105088.jpg');");
E_D("replace into `hhs_goods_gallery` values('61','53','images/201508/goods_img/53_P_1438903343020.png','','images/201508/thumb_img/53_thumb_P_1438903343773.jpg','images/201508/source_img/53_P_1438903343218.png');");
E_D("replace into `hhs_goods_gallery` values('62','53','images/201508/goods_img/53_P_1438903343877.png','','images/201508/thumb_img/53_thumb_P_1438903343735.jpg','images/201508/source_img/53_P_1438903343854.png');");
E_D("replace into `hhs_goods_gallery` values('52','40','images/201507/goods_img/40_P_1437605529286.jpg','','images/201507/thumb_img/40_thumb_P_1437605529877.jpg','images/201507/source_img/40_P_1437605529050.jpg');");
E_D("replace into `hhs_goods_gallery` values('53','41','images/201507/goods_img/41_P_1437623437345.jpg','','images/201507/thumb_img/41_thumb_P_1437623437025.jpg','images/201507/source_img/41_P_1437623437180.jpg');");
E_D("replace into `hhs_goods_gallery` values('54','42','images/201507/goods_img/42_P_1437623748747.jpg','','images/201507/thumb_img/42_thumb_P_1437623748674.jpg','images/201507/source_img/42_P_1437623748611.jpg');");
E_D("replace into `hhs_goods_gallery` values('55','43','images/201507/goods_img/43_P_1437623807747.jpg','','images/201507/thumb_img/43_thumb_P_1437623807178.jpg','images/201507/source_img/43_P_1437623807544.jpg');");
E_D("replace into `hhs_goods_gallery` values('56','44','images/201507/goods_img/44_P_1437623942737.jpg','','images/201507/thumb_img/44_thumb_P_1437623942727.jpg','images/201507/source_img/44_P_1437623942379.jpg');");
E_D("replace into `hhs_goods_gallery` values('57','45','images/201507/goods_img/45_P_1437624172368.jpg','','images/201507/thumb_img/45_thumb_P_1437624172288.jpg','images/201507/source_img/45_P_1437624172271.jpg');");
E_D("replace into `hhs_goods_gallery` values('58','46','images/201507/goods_img/46_P_1437624260421.jpg','','images/201507/thumb_img/46_thumb_P_1437624260471.jpg','images/201507/source_img/46_P_1437624260602.jpg');");
E_D("replace into `hhs_goods_gallery` values('59','47','images/201507/goods_img/47_P_1437624459580.jpg','','images/201507/thumb_img/47_thumb_P_1437624459538.jpg','images/201507/source_img/47_P_1437624459361.jpg');");
E_D("replace into `hhs_goods_gallery` values('63','54','images/201508/goods_img/54_P_1438903660809.png','','images/201508/thumb_img/54_thumb_P_1438903660016.jpg','images/201508/source_img/54_P_1438903660878.png');");
E_D("replace into `hhs_goods_gallery` values('64','54','images/201508/goods_img/54_P_1438903660803.png','','images/201508/thumb_img/54_thumb_P_1438903660819.jpg','images/201508/source_img/54_P_1438903660004.png');");
E_D("replace into `hhs_goods_gallery` values('65','55','images/201508/goods_img/55_P_1438905362644.png','','images/201508/thumb_img/55_thumb_P_1438905362478.jpg','images/201508/source_img/55_P_1438905362625.png');");
E_D("replace into `hhs_goods_gallery` values('66','55','images/201508/goods_img/55_P_1438905362168.png','','images/201508/thumb_img/55_thumb_P_1438905362041.jpg','images/201508/source_img/55_P_1438905362116.png');");
E_D("replace into `hhs_goods_gallery` values('67','56','images/201508/goods_img/56_P_1438905669843.png','','images/201508/thumb_img/56_thumb_P_1438905669847.jpg','images/201508/source_img/56_P_1438905669524.png');");
E_D("replace into `hhs_goods_gallery` values('68','57','images/201508/goods_img/57_P_1438905818350.jpg','','images/201508/thumb_img/57_thumb_P_1438905818298.jpg','images/201508/source_img/57_P_1438905818181.jpg');");
E_D("replace into `hhs_goods_gallery` values('69','58','images/201508/goods_img/58_P_1438905970218.jpg','','images/201508/thumb_img/58_thumb_P_1438905970294.jpg','images/201508/source_img/58_P_1438905970640.jpg');");
E_D("replace into `hhs_goods_gallery` values('70','58','images/201508/goods_img/58_P_1438905970910.jpg','','images/201508/thumb_img/58_thumb_P_1438905970466.jpg','images/201508/source_img/58_P_1438905970402.jpg');");
E_D("replace into `hhs_goods_gallery` values('71','58','images/201508/goods_img/58_P_1438905970745.jpg','','images/201508/thumb_img/58_thumb_P_1438905970850.jpg','images/201508/source_img/58_P_1438905970070.jpg');");
E_D("replace into `hhs_goods_gallery` values('72','58','images/201508/goods_img/58_P_1438905970009.jpg','','images/201508/thumb_img/58_thumb_P_1438905970388.jpg','images/201508/source_img/58_P_1438905970412.jpg');");
E_D("replace into `hhs_goods_gallery` values('73','59','images/201508/goods_img/59_P_1438906165341.png','','images/201508/thumb_img/59_thumb_P_1438906165551.jpg','images/201508/source_img/59_P_1438906165946.png');");
E_D("replace into `hhs_goods_gallery` values('74','61','images/201508/goods_img/61_P_1439147105800.png','','images/201508/thumb_img/61_thumb_P_1439147105144.jpg','images/201508/source_img/61_P_1439147105620.png');");
E_D("replace into `hhs_goods_gallery` values('75','62','images/201508/goods_img/62_P_1439149245916.png','','images/201508/thumb_img/62_thumb_P_1439149245046.jpg','images/201508/source_img/62_P_1439149245365.png');");
E_D("replace into `hhs_goods_gallery` values('76','63','images/201508/goods_img/63_P_1439231904220.jpg','','images/201508/thumb_img/63_thumb_P_1439231904398.jpg','images/201508/source_img/63_P_1439231904746.jpg');");
E_D("replace into `hhs_goods_gallery` values('77','63','images/201508/goods_img/63_P_1439231904414.jpg','','images/201508/thumb_img/63_thumb_P_1439231904615.jpg','images/201508/source_img/63_P_1439231904447.jpg');");
E_D("replace into `hhs_goods_gallery` values('78','64','images/201508/goods_img/64_P_1439506708070.png','A','images/201508/thumb_img/64_thumb_P_1439506708720.jpg','images/201508/source_img/64_P_1439506708075.png');");
E_D("replace into `hhs_goods_gallery` values('79','64','images/201508/goods_img/64_P_1439506708595.jpg','B','images/201508/thumb_img/64_thumb_P_1439506708949.jpg','images/201508/source_img/64_P_1439506708677.jpg');");
E_D("replace into `hhs_goods_gallery` values('103','66','images/201509/goods_img/66_P_1442282350515.jpg','','images/201509/thumb_img/66_thumb_P_1442282350773.jpg','images/201509/source_img/66_P_1442282350390.jpg');");
E_D("replace into `hhs_goods_gallery` values('102','66','images/201509/goods_img/66_P_1442282350918.jpg','','images/201509/thumb_img/66_thumb_P_1442282350300.jpg','images/201509/source_img/66_P_1442282350159.jpg');");
E_D("replace into `hhs_goods_gallery` values('100','67','images/201509/goods_img/67_P_1442282080324.jpg','','images/201509/thumb_img/67_thumb_P_1442282080759.jpg','images/201509/source_img/67_P_1442282080655.jpg');");
E_D("replace into `hhs_goods_gallery` values('99','71','images/201509/goods_img/71_P_1442281898677.jpg','','images/201509/thumb_img/71_thumb_P_1442281898645.jpg','images/201509/source_img/71_P_1442281898950.jpg');");
E_D("replace into `hhs_goods_gallery` values('98','71','images/201509/goods_img/71_P_1442281898882.jpg','','images/201509/thumb_img/71_thumb_P_1442281898874.jpg','images/201509/source_img/71_P_1442281898752.jpg');");
E_D("replace into `hhs_goods_gallery` values('97','71','images/201509/goods_img/71_P_1442281898493.jpg','','images/201509/thumb_img/71_thumb_P_1442281898134.jpg','images/201509/source_img/71_P_1442281898598.jpg');");
E_D("replace into `hhs_goods_gallery` values('101','67','images/201509/goods_img/67_P_1442282080748.jpg','','images/201509/thumb_img/67_thumb_P_1442282080355.jpg','images/201509/source_img/67_P_1442282080490.jpg');");
E_D("replace into `hhs_goods_gallery` values('104','66','images/201509/goods_img/66_P_1442282350300.jpg','','images/201509/thumb_img/66_thumb_P_1442282350023.jpg','images/201509/source_img/66_P_1442282350467.jpg');");
E_D("replace into `hhs_goods_gallery` values('107','77','images/201509/goods_img/77_P_1442615798286.jpg','','images/201509/thumb_img/77_thumb_P_1442615798746.jpg','images/201509/source_img/77_P_1442615798979.jpg');");
E_D("replace into `hhs_goods_gallery` values('108','77','images/201509/goods_img/77_P_1442615832607.jpg','','images/201509/thumb_img/77_thumb_P_1442615832307.jpg','images/201509/source_img/77_P_1442615832259.jpg');");
E_D("replace into `hhs_goods_gallery` values('109','79','images/201510/goods_img/79_P_1444183596386.jpg','','images/201510/thumb_img/79_thumb_P_1444183596114.jpg','images/201510/source_img/79_P_1444183596654.jpg');");
E_D("replace into `hhs_goods_gallery` values('110','79','images/201510/goods_img/79_P_1444183596674.jpg','','images/201510/thumb_img/79_thumb_P_1444183596755.jpg','images/201510/source_img/79_P_1444183596193.jpg');");
E_D("replace into `hhs_goods_gallery` values('111','79','images/201510/goods_img/79_P_1444183596771.jpg','','images/201510/thumb_img/79_thumb_P_1444183596936.jpg','images/201510/source_img/79_P_1444183596393.jpg');");
E_D("replace into `hhs_goods_gallery` values('112','82','images/201510/goods_img/82_P_1445307061072.jpg','','images/201510/thumb_img/82_thumb_P_1445307061784.jpg','images/201510/source_img/82_P_1445307061123.jpg');");
E_D("replace into `hhs_goods_gallery` values('113','83','images/201510/goods_img/83_P_1445815667566.jpg','','images/201510/thumb_img/83_thumb_P_1445815667608.jpg','images/201510/source_img/83_P_1445815667038.jpg');");
E_D("replace into `hhs_goods_gallery` values('116','85','images/201511/goods_img/85_P_1446339226652.jpg','','images/201511/thumb_img/85_thumb_P_1446339226690.jpg','images/201511/source_img/85_P_1446339226409.jpg');");
E_D("replace into `hhs_goods_gallery` values('117','85','images/201511/goods_img/85_P_1446339226364.jpg','','images/201511/thumb_img/85_thumb_P_1446339226087.jpg','images/201511/source_img/85_P_1446339226291.jpg');");

require("../../inc/footer.php");
?>