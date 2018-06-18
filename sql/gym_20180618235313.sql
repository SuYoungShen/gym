-- MySQL dump 10.16  Distrib 10.1.32-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: gym
-- ------------------------------------------------------
-- Server version	10.1.32-MariaDB

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

--
-- Current Database: `gym`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `gym` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `gym`;

--
-- Table structure for table `card_status`
--

DROP TABLE IF EXISTS `card_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `card_status` (
  `card_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '卡片ID',
  `status` int(2) NOT NULL COMMENT '卡片狀態(0=無人；1=有人)',
  `use_date` date NOT NULL COMMENT '使用日期',
  `use_time` time NOT NULL COMMENT '使用時間',
  `stop_date` date NOT NULL COMMENT '停用日期',
  `stop_time` time NOT NULL COMMENT '停用時間',
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='卡片狀態';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_status`
--

LOCK TABLES `card_status` WRITE;
/*!40000 ALTER TABLE `card_status` DISABLE KEYS */;
INSERT INTO `card_status` VALUES ('90218104',1,'2018-06-01','00:00:23','0000-00-00','00:00:00');
/*!40000 ALTER TABLE `card_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount_program`
--

DROP TABLE IF EXISTS `discount_program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount_program` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `price` int(10) unsigned NOT NULL COMMENT '原價',
  `discount` int(10) unsigned NOT NULL COMMENT '折扣(範圍1-9折)',
  `discount_price` int(10) unsigned NOT NULL COMMENT '折扣後價位',
  `number` int(5) NOT NULL COMMENT '會籍數字(1-9)',
  `types` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '類型(年、月)',
  `up_date` date DEFAULT NULL COMMENT '更改日期',
  `up_time` time DEFAULT NULL COMMENT '更改時間',
  `join_date` date NOT NULL COMMENT '加入日期',
  `join_time` time NOT NULL COMMENT '加入時間',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='優惠方案';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount_program`
--

LOCK TABLES `discount_program` WRITE;
/*!40000 ALTER TABLE `discount_program` DISABLE KEYS */;
INSERT INTO `discount_program` VALUES ('5b27b64a3a',1000,2,200,1,'年','2018-06-18','23:22:23','2018-06-18','21:40:26'),('5b27d221d6',123,1,12,2,'月',NULL,NULL,'2018-06-18','23:39:13');
/*!40000 ALTER TABLE `discount_program` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `in_and_out`
--

DROP TABLE IF EXISTS `in_and_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `in_and_out` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `types` int(2) unsigned NOT NULL COMMENT '進出場(0=進場;1=出場)',
  `who` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '誰進出場(連member card_id)',
  `in_date` date NOT NULL COMMENT '進場日期',
  `in_time` time NOT NULL COMMENT '進場時間',
  `out_date` date DEFAULT NULL COMMENT '出場日期',
  `out_time` time DEFAULT NULL COMMENT '出場時間',
  PRIMARY KEY (`id`),
  KEY `member_id` (`who`),
  KEY `who` (`who`),
  CONSTRAINT `member_id` FOREIGN KEY (`who`) REFERENCES `member` (`card_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='進出場紀錄';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `in_and_out`
--

LOCK TABLES `in_and_out` WRITE;
/*!40000 ALTER TABLE `in_and_out` DISABLE KEYS */;
INSERT INTO `in_and_out` VALUES ('5b23ead8ad',0,'90218104','2018-06-16','00:35:36',NULL,NULL),('5b23eb439b',1,'90218104','2018-06-16','00:37:23','2018-06-16','00:37:47'),('5b23eb64af',0,'90218104','2018-06-16','00:37:56',NULL,NULL),('5b23eb8730',0,'90218104','2018-06-16','00:38:31',NULL,NULL),('5b24745307',0,'90218104','2018-06-16','10:22:11',NULL,NULL),('5b2475a4bc',0,'90218104','2018-06-16','10:27:48',NULL,NULL),('5b2475dcad',1,'90218104','2018-06-16','10:28:44','2018-06-16','10:28:53'),('5b27742630',1,'90218104','2018-06-18','16:58:14','2018-06-18','16:58:34');
/*!40000 ALTER TABLE `in_and_out` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_history`
--

DROP TABLE IF EXISTS `login_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_history` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `web` int(2) NOT NULL COMMENT '網頁(0=前台;1=後台)',
  `who` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '誰登入(連接staff id)',
  `sign_in_date` date DEFAULT NULL COMMENT '登入日期',
  `sign_in_time` time DEFAULT NULL COMMENT '登入時間',
  `sign_out_date` date DEFAULT NULL COMMENT '登出日期',
  `sign_out_time` time DEFAULT NULL COMMENT '登出時間',
  PRIMARY KEY (`id`),
  KEY `staff_id` (`who`),
  CONSTRAINT `staff_id` FOREIGN KEY (`who`) REFERENCES `staff` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='登入紀錄';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_history`
--

LOCK TABLES `login_history` WRITE;
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
INSERT INTO `login_history` VALUES ('12012452\r\n',0,'123','2018-06-18','20:52:21',NULL,NULL);
/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `card_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '卡片ID',
  `pics` longtext COLLATE utf8_unicode_ci COMMENT '照片',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `identity_card` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '身分證',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '手機',
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '信箱',
  `address` text COLLATE utf8_unicode_ci COMMENT '地址',
  `emergency_contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急聯絡人',
  `emergency_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急聯絡人手機',
  `start_contract` date DEFAULT NULL COMMENT '合約開始日',
  `end_contract` date DEFAULT NULL COMMENT '合約結束日',
  `categorys` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '會籍類型(年、月)',
  `who` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '哪位員工處理(連結staff id)',
  `note` longtext COLLATE utf8_unicode_ci COMMENT '備註',
  `join_date` date DEFAULT NULL COMMENT '加入日期',
  `join_time` time DEFAULT NULL COMMENT '加入時間',
  `up_date` date DEFAULT NULL COMMENT '更新日期',
  `up_time` time DEFAULT NULL COMMENT '更新時間',
  PRIMARY KEY (`card_id`),
  KEY `staff_id2` (`who`),
  CONSTRAINT `card_id` FOREIGN KEY (`card_id`) REFERENCES `card_status` (`card_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `staff_ids` FOREIGN KEY (`who`) REFERENCES `staff` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='會員';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('90218104','http://w9.loxa.edu.tw/a923528/pictures/doraemon/ada5.gif','蘇','T123456123','2018-06-15','(09) 06-405-019',NULL,NULL,'你','445522136','2018-06-15','2018-06-23','3年','123',NULL,'2018-06-15','10:44:36',NULL,NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `job_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '職編',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `birthday` date NOT NULL COMMENT '生日',
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '手機',
  `identity` int(5) NOT NULL COMMENT '身分(0=boss、1=staff、99=admin)',
  `address` text COLLATE utf8_unicode_ci COMMENT '地址',
  `emergency_contact` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '緊急聯絡人',
  `emergency_phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '聯絡人電話',
  `up_date` date DEFAULT NULL COMMENT '更改日期',
  `up_time` time DEFAULT NULL COMMENT '更改時間',
  `join_date` date NOT NULL COMMENT '加入日期',
  `join_time` time NOT NULL COMMENT '加入時間',
  PRIMARY KEY (`id`,`job_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='員工';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('123','456','nj ','','0000-00-00','0',0,'','','','0000-00-00','00:00:00','0000-00-00','00:00:00'),('5b27c96eda','112123','蘇','54327551c2e8f7a915cd','1994-09-15','(09) 06-405-019',99,NULL,'','',NULL,NULL,'2018-06-18','23:02:06'),('5b27c9af98','123123','蘇','77dd6695008ac9849a37','1994-09-15','(09) 06-405-011',1,'屏東市大洲里65號','永盛','','2018-06-18','23:49:15','2018-06-18','23:03:11');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-18 23:53:18
