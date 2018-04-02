
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
DROP TABLE IF EXISTS `jos_rsform_component_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_component_types` (
  `ComponentTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `ComponentTypeName` text NOT NULL,
  PRIMARY KEY (`ComponentTypeId`)
) ENGINE=MyISAM AUTO_INCREMENT=501 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_component_types` WRITE;
/*!40000 ALTER TABLE `jos_rsform_component_types` DISABLE KEYS */;
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (1,'textBox');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (2,'textArea');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (3,'selectList');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (4,'checkboxGroup');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (5,'radioGroup');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (6,'calendar');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (7,'button');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (8,'captcha');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (9,'fileUpload');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (10,'freeText');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (11,'hidden');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (12,'imageButton');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (13,'submitButton');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (14,'password');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (15,'ticket');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (21,'singleProduct');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (22,'multipleProducts');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (23,'total');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (24,'recaptcha');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (27,'choosePayment');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (28,'donationProduct');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (41,'pageBreak');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (211,'birthDay');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (212,'gmaps');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (499,'offlinePayment');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (500,'paypal');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (411,'jQueryCalendar');
INSERT INTO `jos_rsform_component_types` (`ComponentTypeId`, `ComponentTypeName`) VALUES (355,'rangeSlider');
/*!40000 ALTER TABLE `jos_rsform_component_types` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

