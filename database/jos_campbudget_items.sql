
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `jos_campbudget_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_campbudget_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `budgetid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `estimated_cost` text,
  `actual_cost` decimal(10,2) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `core` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `estimated_subtotal` decimal(10,2) DEFAULT NULL,
  `actual_subtotal` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_campbudget_items` WRITE;
/*!40000 ALTER TABLE `jos_campbudget_items` DISABLE KEYS */;
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (2,18,1,'CleanWell Botanical Disinfecting Wipes',NULL,'10.98',0.00,1,NULL,3,160,'https://www.amazon.com/CleanWell-Botanical-Disinfecting-Wipes-Lemon/dp/B009V0ZMO4/ref=pd_sim_328_3?_encoding=UTF8&pd_rd_i=B009V0ZMO4&pd_rd_r=D29SPXZXR5M67Y0KGWFP&pd_rd_w=V3nUZ&pd_rd_wg=mP94l&refRID=D29SPXZXR5M67Y0KGWFP&th=1',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (3,18,1,'30 Gallon Garbage Bags',NULL,'16.99',0.00,1,NULL,1,20,'https://www.amazon.com/Husky-HK42WC020B-42-Gallon-Contractor-Clean-Up/dp/B000KKKPF0/ref=sr_1_4?ie=UTF8&qid=1467857553&sr=8-4&keywords=contractor+bags',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (4,18,1,'Bleach',NULL,'10.16',0.00,1,NULL,1,64,'https://www.amazon.com/Clorox-Bleach-Regular-64-oz/dp/B0014D2BKY/ref=sr_1_3_s_it?s=hpc&ie=UTF8&qid=1467857637&sr=1-3&keywords=bleach',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (5,19,1,'Champion Power Equipment 3800 Watt Generator',NULL,'498.99',0.00,2,NULL,1,0,'https://www.amazon.com/Champion-Power-Equipment-76533-Generator/dp/B00VFDJGCE/ref=pd_sbs_86_4?_encoding=UTF8&pd_rd_i=B00VFDJGCE&pd_rd_r=9BT6WQZ6FBGQPGMWZ2R9&pd_rd_w=zUTsA&pd_rd_wg=mZCch&psc=1&refRID=9BT6WQZ6FBGQPGMWZ2R9',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (6,19,1,'ALLPOWERS 100W 18V 12V Bendable SunPower Solar Panel Charger Water/ Shock/ Dust Resistant Solar Charger',NULL,'179.99',0.00,2,NULL,8,0,'https://www.amazon.com/dp/B013E07FNM/ref=wl_it_dp_o_pC_S_ttl?_encoding=UTF8&colid=JI9E0MLPY7SN&coliid=IK1TJ5KODIZNH&psc=1',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (7,19,1,'Vmaxtanks 12V 125ah Battery',NULL,'269.99',0.00,2,NULL,3,0,'https://www.amazon.com/gp/product/B004DR3IIC/ref=oh_aui_search_detailpage?ie=UTF8&psc=1',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (8,17,1,'Gas for Generator',NULL,'3.00',0.00,2,NULL,35,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (9,17,1,'Propane for Stove',NULL,'2.853',0.00,2,NULL,10,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (10,21,1,'24\' Foot Box Truck Rental',NULL,'1500',0.00,3,NULL,1,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (11,17,1,'Trailer Transportation Gas (2 trailers)',NULL,'3',0.00,1,NULL,190,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (12,18,2,'CleanWell Botanical Disinfecting Wipes',NULL,'10.98',0.00,1,1,3,160,'https://www.amazon.com/CleanWell-Botanical-Disinfecting-Wipes-Lemon/dp/B009V0ZMO4/ref=pd_sim_328_3?_encoding=UTF8&pd_rd_i=B009V0ZMO4&pd_rd_r=D29SPXZXR5M67Y0KGWFP&pd_rd_w=V3nUZ&pd_rd_wg=mP94l&refRID=D29SPXZXR5M67Y0KGWFP&th=1',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (13,18,2,'30 Gallon Garbage Bags',NULL,'16.99',0.00,1,1,1,20,'https://www.amazon.com/Husky-HK42WC020B-42-Gallon-Contractor-Clean-Up/dp/B000KKKPF0/ref=sr_1_4?ie=UTF8&qid=1467857553&sr=8-4&keywords=contractor+bags',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (14,18,2,'Bleach',NULL,'10.16',0.00,1,1,1,64,'https://www.amazon.com/Clorox-Bleach-Regular-64-oz/dp/B0014D2BKY/ref=sr_1_3_s_it?s=hpc&ie=UTF8&qid=1467857637&sr=1-3&keywords=bleach',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (15,19,2,'Champion Power Equipment 3800 Watt Generator',NULL,'498.99',0.00,2,NULL,1,0,'https://www.amazon.com/Champion-Power-Equipment-76533-Generator/dp/B00VFDJGCE/ref=pd_sbs_86_4?_encoding=UTF8&pd_rd_i=B00VFDJGCE&pd_rd_r=9BT6WQZ6FBGQPGMWZ2R9&pd_rd_w=zUTsA&pd_rd_wg=mZCch&psc=1&refRID=9BT6WQZ6FBGQPGMWZ2R9',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (16,17,2,'Gas for Generator',NULL,'3.00',0.00,2,NULL,35,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (17,17,2,'Propane for Stove',NULL,'2.853',0.00,2,1,10,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (18,17,2,'Trailer Transportation Gas (2 trailers)',NULL,'3',0.00,1,1,190,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (19,19,2,'10x20 White 10mil Tarp',NULL,'24.19',0.00,2,NULL,1,0,'https://www.amazon.com/Heavy-Duty-White-10-mil-310207/dp/B0010Z0D4W/ref=sr_1_2?ie=UTF8&qid=1467856986&sr=8-2&keywords=10x20+tarp',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (21,19,2,'12v DC 3000W Pure Sine Inverter',NULL,'274.39',0.00,2,NULL,1,0,'https://www.amazon.com/dp/B0131PZ9J2/ref=wl_it_dp_o_pd_nS_ttl?_encoding=UTF8&colid=JI9E0MLPY7SN&coliid=INHH6FX38KDMO',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (22,19,2,'60A 12V24V48V Solar Charging Controller',NULL,'198',0.00,2,NULL,1,0,'https://www.amazon.com/BlueFire-Regulator-Controller-Autoswitch-Charging/dp/B018I71A5K/ref=sr_1_1?s=lawn-garden&ie=UTF8&qid=1493695667&sr=1-1&keywords=solar%2Bcharge%2Bcontroller%2B60A%2B12v&th=1',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (23,21,2,'24\' Foot Box Truck Rental',NULL,'1500',0.00,3,1,1,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (24,19,2,'Double Sided Chalk Sandwhich Board',NULL,'100',0.00,2,NULL,1,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (25,18,2,'Beer',NULL,'350',0.00,2,NULL,1,0,'',0.00,0.00);
INSERT INTO `jos_campbudget_items` (`id`, `category`, `budgetid`, `name`, `description`, `estimated_cost`, `actual_cost`, `type`, `core`, `quantity`, `count`, `link`, `estimated_subtotal`, `actual_subtotal`) VALUES (26,19,2,'Sabrent 60 Watt (12 Amp) 10-Port Family-Sized Desktop USB Rapid Charger.',NULL,'32.99',0.00,2,NULL,1,0,'https://www.amazon.com/Sabrent-Family-Sized-Charger-Technology-AX-TPCS/dp/B00OJ79UK6/ref=sr_1_15?ie=UTF8&qid=1494114945&sr=8-15&keywords=multi+usb+charger',0.00,0.00);
/*!40000 ALTER TABLE `jos_campbudget_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

