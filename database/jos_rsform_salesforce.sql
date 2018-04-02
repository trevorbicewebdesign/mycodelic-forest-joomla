
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
DROP TABLE IF EXISTS `jos_rsform_salesforce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_salesforce` (
  `form_id` int(11) NOT NULL,
  `slsf_lead_source` varchar(255) NOT NULL,
  `slsf_first_name` varchar(255) NOT NULL,
  `slsf_last_name` varchar(255) NOT NULL,
  `slsf_title` varchar(255) NOT NULL,
  `slsf_company` varchar(255) NOT NULL,
  `slsf_email` varchar(255) NOT NULL,
  `slsf_phone` varchar(255) NOT NULL,
  `slsf_street` varchar(255) NOT NULL,
  `slsf_city` varchar(255) NOT NULL,
  `slsf_state` varchar(255) NOT NULL,
  `slsf_zip` varchar(255) NOT NULL,
  `slsf_country` varchar(255) NOT NULL,
  `slsf_debug` tinyint(1) NOT NULL,
  `slsf_oid` varchar(20) NOT NULL,
  `slsf_debugEmail` varchar(255) NOT NULL,
  `slsf_industry` varchar(255) NOT NULL,
  `slsf_description` text NOT NULL,
  `slsf_mobile` varchar(255) NOT NULL,
  `slsf_fax` varchar(255) NOT NULL,
  `slsf_website` varchar(255) NOT NULL,
  `slsf_salutation` varchar(255) NOT NULL,
  `slsf_revenue` varchar(255) NOT NULL,
  `slsf_employees` varchar(255) NOT NULL,
  `slsf_custom_fields` text NOT NULL,
  `slsf_campaign_id` varchar(255) NOT NULL,
  `slsf_donotcall` varchar(255) NOT NULL,
  `slsf_emailoptout` varchar(255) NOT NULL,
  `slsf_faxoptout` varchar(255) NOT NULL,
  `slsf_published` tinyint(1) NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_salesforce` WRITE;
/*!40000 ALTER TABLE `jos_rsform_salesforce` DISABLE KEYS */;
/*!40000 ALTER TABLE `jos_rsform_salesforce` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

