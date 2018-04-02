
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
DROP TABLE IF EXISTS `jos_rsform_submission_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jos_rsform_submission_values` (
  `SubmissionValueId` int(11) NOT NULL AUTO_INCREMENT,
  `FormId` int(11) NOT NULL,
  `SubmissionId` int(11) NOT NULL DEFAULT '0',
  `FieldName` text NOT NULL,
  `FieldValue` text NOT NULL,
  PRIMARY KEY (`SubmissionValueId`),
  KEY `FormId` (`FormId`),
  KEY `SubmissionId` (`SubmissionId`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `jos_rsform_submission_values` WRITE;
/*!40000 ALTER TABLE `jos_rsform_submission_values` DISABLE KEYS */;
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (9,3,2,'name','Luis Vazquez Gomez Bello');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (10,3,2,'email','luis.vazquezbello@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (11,3,2,'phone','5516875476');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (12,3,2,'company','CAD');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (13,3,2,'message','Hello guys, how can I become a member and then camp with this year?');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (14,3,2,'interests','Theme camp');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (15,3,2,'submit','submit');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (16,3,2,'formId','3');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (50,3,9,'name','Julian Cooper');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (51,3,9,'email','juliancooper.online@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (52,3,9,'phone','800-256-5246');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (53,3,9,'message','Do you wish you could increase your online leads? We have helped a lot of businesses thrive in this market and we can help you! Simply hit reply and I’ll share with you the cost and the benefits.');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (54,3,9,'formId','3');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (55,3,10,'name','Sebastian');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (56,3,10,'email','sebastianmuro@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (57,3,10,'phone','1122358830');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (58,3,10,'message','Dear all, \r\n\r\nMy name is Sebastian, I\'m a filmmaker from Argentina. With two of my best friends are planning to go to Burning Man this year to our celebrate the 30th birthday and a life of friendship.\r\n\r\nWe´ve already bought our tickets but we are looking foward to be part of a Camp. Coming from so far (and for the first time) it would be very helpful for us not to feel alone with the organization.\r\n\r\nWe read so much about the Camps and we would love to be part of one and yours looks like something special. Would like to know if you are accepting new members (and first timers) in your Camp? \r\n\r\nThanks for your time,\r\n\r\nbest,');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (59,3,10,'formId','3');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (60,7,11,'First Name','sandor');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (61,7,11,'Last Name','stockfleth');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (62,7,11,'contact_phone','7074994179');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (63,7,11,'email','sanmannor@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (64,7,11,'attending_burningman','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (65,7,11,'vehicle','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (66,7,11,'vehicle_towing_capacity','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (67,7,11,'vehicle_seats_available','4');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (68,7,11,'early_arrival','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (69,7,11,'departure_time','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (70,7,11,'previously_attended','No');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (71,7,11,'low_income_tickets','No');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (72,7,11,'hometown','bayside');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (73,7,11,'formId','7');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (109,8,15,'fname','Jack');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (108,8,14,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (107,8,14,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (106,8,14,'zipcode','94118');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (105,8,14,'state','CA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (104,8,14,'city','San Francisco');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (103,8,14,'country','United States of America (USA)');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (102,8,14,'address_2','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (101,8,14,'address_1','3018 Geary Blvd');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (100,8,14,'email','thea.s.sutton@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (99,8,14,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (98,8,14,'lname','Sutton');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (97,8,14,'fname','Thea');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (110,8,15,'lname','Boger');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (111,8,15,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (112,8,15,'email','john.h.boger@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (113,8,15,'address_1','3018 Geary Blvd');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (114,8,15,'address_2','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (115,8,15,'country','United States of America (USA)');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (116,8,15,'city','San Francisco');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (117,8,15,'state','CA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (118,8,15,'zipcode','94118');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (119,8,15,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (120,8,15,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (121,8,16,'fname','Tamsin');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (122,8,16,'lname','Woolley-Barker');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (123,8,16,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (124,8,16,'email','bioinspireme@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (125,8,16,'address_1','4017 Del Mar Avenue');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (126,8,16,'address_2','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (127,8,16,'country','United States of America (USA)');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (128,8,16,'city','San Diego');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (129,8,16,'state','CA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (130,8,16,'zipcode','92107');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (131,8,16,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (132,8,16,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (133,8,17,'fname','Michael');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (134,8,17,'lname','Roesslein');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (135,8,17,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (136,8,17,'email','mike.roesslein@gmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (137,8,17,'address_1','5029 W. Point Loma Blvd. ');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (138,8,17,'address_2','Unit A');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (139,8,17,'country','United States of America (USA)');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (140,8,17,'city','San Diego');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (141,8,17,'state','CA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (142,8,17,'zipcode','92107');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (143,8,17,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (144,8,17,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (145,8,18,'fname','Carissa');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (146,8,18,'lname','Morrison ');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (147,8,18,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (148,8,18,'email','yougoglencoco_@hotmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (149,8,18,'address_1','PO BOX 1246');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (150,8,18,'address_2','4th Ave');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (151,8,18,'country','Canada');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (152,8,18,'city','Squamish');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (153,8,18,'state','BC');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (154,8,18,'zipcode','V8B0A8 ');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (155,8,18,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (156,8,18,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (157,3,19,'name','Carissa');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (158,3,19,'email','yougoglencoco_@hotmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (159,3,19,'phone','2508161818');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (160,3,19,'message','Just wanted to touch base that I would love to join you guys again. \r\nI am planning on applying for the Low Income ticket program but would still contribute to camp dues and would love to help out energetically and creatively when needed :)\r\nMuch love!');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (161,3,19,'formId','3');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (162,8,20,'fname','SPIRIDON');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (163,8,20,'lname','TRYFONOPOULOS');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (164,8,20,'attending','Yes');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (165,8,20,'email','psypunkst@hotmail.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (166,8,20,'cell_phone','312 722 4632');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (167,8,20,'address_1','2299 JAY STREET');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (168,8,20,'address_2','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (169,8,20,'country','United States of America (USA)');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (170,8,20,'city','ARCATA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (171,8,20,'state','CALIFORNIA');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (172,8,20,'zipcode','95521');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (173,8,20,'Submit','');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (174,8,20,'formId','8');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (175,3,21,'name','Bob Kelley');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (176,3,21,'email','dell_kelley@yahoo.com');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (177,3,21,'phone','7023266559');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (178,3,21,'message','Hi, I tried to sign up for the page before the meetup yesterday. I think the page threw an error and I didn\'t get any email\r\n\r\nThanks\r\nBobby');
INSERT INTO `jos_rsform_submission_values` (`SubmissionValueId`, `FormId`, `SubmissionId`, `FieldName`, `FieldValue`) VALUES (179,3,21,'formId','3');
/*!40000 ALTER TABLE `jos_rsform_submission_values` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

