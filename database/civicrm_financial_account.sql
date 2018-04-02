
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
DROP TABLE IF EXISTS `civicrm_financial_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civicrm_financial_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Financial Account Name.',
  `contact_id` int(10) unsigned DEFAULT NULL COMMENT 'FK to Contact ID that is responsible for the funds in this account',
  `financial_account_type_id` int(10) unsigned NOT NULL DEFAULT '3' COMMENT 'pseudo FK into civicrm_option_value.',
  `accounting_code` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional value for mapping monies owed and received to accounting system codes.',
  `account_type_code` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Optional value for mapping account types to accounting system account categories (QuickBooks Account Type Codes for example).',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Financial Type Description.',
  `parent_id` int(10) unsigned DEFAULT NULL COMMENT 'Parent ID in account hierarchy',
  `is_header_account` tinyint(4) DEFAULT '0' COMMENT 'Is this a header account which does not allow transactions to be posted against it directly, but only to its sub-accounts?',
  `is_deductible` tinyint(4) DEFAULT '1' COMMENT 'Is this account tax-deductible?',
  `is_tax` tinyint(4) DEFAULT '0' COMMENT 'Is this account for taxes?',
  `tax_rate` decimal(10,8) DEFAULT NULL COMMENT 'The percentage of the total_amount that is due for this tax.',
  `is_reserved` tinyint(4) DEFAULT NULL COMMENT 'Is this a predefined system object?',
  `is_active` tinyint(4) DEFAULT NULL COMMENT 'Is this property active?',
  `is_default` tinyint(4) DEFAULT NULL COMMENT 'Is this account the default one (or default tax one) for its financial_account_type?',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UI_name` (`name`),
  KEY `FK_civicrm_financial_account_contact_id` (`contact_id`),
  KEY `FK_civicrm_financial_account_parent_id` (`parent_id`),
  CONSTRAINT `FK_civicrm_financial_account_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_civicrm_financial_account_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `civicrm_financial_account` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `civicrm_financial_account` WRITE;
/*!40000 ALTER TABLE `civicrm_financial_account` DISABLE KEYS */;
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (1,'Donation',1,3,'4200','INC','Default account for donations',NULL,0,1,0,NULL,0,1,1);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (2,'Member Dues',1,3,'4400','INC','Default account for membership sales',NULL,0,1,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (3,'Campaign Contribution',1,3,'4100','INC','Sample account for recording payments to a campaign',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (4,'Event Fee',1,3,'4300','INC','Default account for event ticket sales',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (5,'Banking Fees',1,5,'5200','EXP','Payment processor fees and manually recorded banking fees',NULL,0,0,0,NULL,0,1,1);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (6,'Deposit Bank Account',1,1,'1100','BANK','All manually recorded cash and cheques go to this account',NULL,0,0,0,NULL,0,1,1);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (7,'Accounts Receivable',1,1,'1200','AR','Amounts to be received later (eg pay later event revenues)',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (8,'Accounts Payable',1,2,'2200','AP','Amounts to be paid out such as grants and refunds',NULL,0,0,0,NULL,0,1,1);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (9,'Premiums',1,4,'5100','COGS','Account to record cost of premiums provided to payors',NULL,0,0,0,NULL,0,1,1);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (10,'Premiums inventory',1,1,'1375','OCASSET','Account representing value of premiums inventory',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (11,'Discounts',1,3,'4900','INC','Contra-revenue account for amounts discounted from sales',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (12,'Payment Processor Account',1,1,'1150','BANK','Account to record payments into a payment processor merchant account',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (13,'Deferred Revenue - Event Fee',1,2,'2730','OCLIAB','Event revenue to be recognized in future months when the events occur',NULL,0,0,0,NULL,0,1,0);
INSERT INTO `civicrm_financial_account` (`id`, `name`, `contact_id`, `financial_account_type_id`, `accounting_code`, `account_type_code`, `description`, `parent_id`, `is_header_account`, `is_deductible`, `is_tax`, `tax_rate`, `is_reserved`, `is_active`, `is_default`) VALUES (14,'Deferred Revenue - Member Dues',1,2,'2740','OCLIAB','Membership revenue to be recognized in future months',NULL,0,0,0,NULL,0,1,0);
/*!40000 ALTER TABLE `civicrm_financial_account` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

