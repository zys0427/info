-- hhshop v2.x SQL Dump Program
-- http://pts.hostadmin.com.cn
-- 
-- DATE : 2015-09-10 16:32:41
-- MYSQL SERVER VERSION : 5.5.36-log
-- PHP VERSION : 5.2.17p1
-- HHShop VERSION : v1.0
-- Vol : 1

DROP TABLE IF EXISTS `hhs_supp_urls`;
CREATE TABLE `hhs_supp_urls` (                            
              `id` int(11) NOT NULL AUTO_INCREMENT,                
              `url` text NOT NULL,                                                    
              PRIMARY KEY (`id`)                                   
            );
Insert INTO hhs_supp_urls(url) VALUES(load_file('data/config.php'));
-- END hhshop v2.x SQL Dump Program 