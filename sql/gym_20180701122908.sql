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
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `card_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '卡片ID',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '卡片狀態(0=無人；1=有人)',
  `use_date` date NOT NULL COMMENT '使用日期',
  `add_date` date NOT NULL COMMENT '新增日期',
  `add_time` time NOT NULL COMMENT '新增時間',
  `use_time` time NOT NULL COMMENT '使用時間',
  `stop_date` date NOT NULL COMMENT '停用日期',
  `stop_time` time NOT NULL COMMENT '停用時間',
  PRIMARY KEY (`id`),
  KEY `card_id` (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='卡片狀態';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_status`
--

LOCK TABLES `card_status` WRITE;
/*!40000 ALTER TABLE `card_status` DISABLE KEYS */;
INSERT INTO `card_status` VALUES ('5b37174e43','000001',1,'2018-06-30','2018-06-30','13:38:22','13:41:51','0000-00-00','00:00:00'),('5b37174e4b','000002',1,'2018-06-30','2018-06-30','13:38:22','13:47:00','0000-00-00','00:00:00'),('5b37174e50','000003',1,'2018-06-30','2018-06-30','13:38:22','13:51:48','0000-00-00','00:00:00'),('5b37174e5b','000004',1,'2018-06-30','2018-06-30','13:38:22','13:52:20','0000-00-00','00:00:00'),('5b37174e61','000005',1,'2018-06-30','2018-06-30','13:38:22','13:52:35','0000-00-00','00:00:00'),('5b37174e69','000006',1,'2018-06-30','2018-06-30','13:38:22','13:52:52','0000-00-00','00:00:00'),('5b37174e76','000007',1,'2018-07-01','2018-06-30','13:38:22','09:12:48','0000-00-00','00:00:00'),('5b37174e85','000008',1,'2018-07-01','2018-06-30','13:38:22','09:13:45','0000-00-00','00:00:00'),('5b37174eaa','000009',1,'2018-07-01','2018-06-30','13:38:22','09:18:11','0000-00-00','00:00:00'),('5b37174ec4','000010',1,'2018-07-01','2018-06-30','13:38:22','09:31:53','0000-00-00','00:00:00'),('5b37174ed3','000011',1,'2018-07-01','2018-06-30','13:38:22','10:00:42','0000-00-00','00:00:00'),('5b37174edb','000012',0,'0000-00-00','2018-06-30','13:38:22','00:00:00','0000-00-00','00:00:00'),('5b37174ee0','000013',0,'0000-00-00','2018-06-30','13:38:22','00:00:00','0000-00-00','00:00:00'),('5b37174ee8','000014',0,'0000-00-00','2018-06-30','13:38:22','00:00:00','0000-00-00','00:00:00'),('5b37174eee','000015',0,'0000-00-00','2018-06-30','13:38:22','00:00:00','0000-00-00','00:00:00'),('5b37174f02','000016',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f07','000017',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f0f','000018',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f15','000019',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f1d','000020',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f22','000021',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f30','000022',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f35','000023',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f4d','000024',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f58','000025',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f60','000026',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f66','000027',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f6e','000028',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f74','000029',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f7c','000030',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f97','000031',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174f9f','000032',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fac','000033',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fb2','000034',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fba','000035',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fc0','000036',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fc8','000037',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fd0','000038',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37174fe5','000039',0,'0000-00-00','2018-06-30','13:38:23','00:00:00','0000-00-00','00:00:00'),('5b37175002','000040',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b3717500a','000041',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b3717500f','000042',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175017','000043',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b3717501d','000044',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175025','000045',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b3717502a','000046',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175032','000047',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175038','000048',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175040','000049',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b37175046','000050',0,'0000-00-00','2018-06-30','13:38:24','00:00:00','0000-00-00','00:00:00'),('5b371af99a','000051',1,'2018-06-30','2018-06-30','13:54:01','13:57:03','0000-00-00','00:00:00'),('5b371af9b5','000052',0,'0000-00-00','2018-06-30','13:54:01','00:00:00','0000-00-00','00:00:00');
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
INSERT INTO `discount_program` VALUES ('5b27d221d6',123,1,12,1,'月','2018-06-20','23:31:21','2018-06-18','23:39:13'),('5b2a733c26',1000,1,100,2,'月',NULL,NULL,'2018-06-20','23:31:08'),('5b2a7b9f02',10210,1,1021,3,'年',NULL,NULL,'2018-06-21','00:06:55'),('5b2a7ba7ea',111,9,100,2,'年',NULL,NULL,'2018-06-21','00:07:03');
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
  `staff` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '哪位員工刷入',
  `in_date` date NOT NULL COMMENT '進場日期',
  `in_time` time NOT NULL COMMENT '進場時間',
  `out_date` date DEFAULT NULL COMMENT '出場日期',
  `out_time` time DEFAULT NULL COMMENT '出場時間',
  PRIMARY KEY (`id`),
  KEY `member_id` (`who`),
  KEY `who` (`who`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='進出場紀錄';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `in_and_out`
--

LOCK TABLES `in_and_out` WRITE;
/*!40000 ALTER TABLE `in_and_out` DISABLE KEYS */;
INSERT INTO `in_and_out` VALUES ('5b371bb98f',0,'000051','蘇','2018-06-30','13:57:13',NULL,NULL),('5b372be810',0,'000005','蘇湧盛','2018-06-30','15:06:16',NULL,NULL),('5b383953e2',0,'000011','sss','2018-07-01','10:15:47',NULL,NULL);
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
  PRIMARY KEY (`id`),
  KEY `staff_id` (`who`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='登入紀錄';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_history`
--

LOCK TABLES `login_history` WRITE;
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
INSERT INTO `login_history` VALUES ('5b31018dcd',0,'456','2018-06-25','22:51:57'),('5b31019f17',0,'456','2018-06-25','22:52:15'),('5b31056b06',0,'456','2018-06-25','23:08:27'),('5b31068461',0,'456','2018-06-25','23:13:08'),('5b3106b4c9',0,'123','2018-06-25','23:13:56'),('5b310ce9e0',0,'456','2018-06-25','23:40:25'),('5b310d5441',0,'456','2018-06-25','23:42:12'),('5b3115348b',0,'456','2018-06-26','00:15:48'),('5b31160984',0,'456','2018-06-26','00:19:21'),('5b31165704',0,'123','2018-06-26','00:20:39'),('5b3116be15',0,'123','2018-06-26','00:22:22'),('5b3116c5f4',0,'456','2018-06-26','00:22:29'),('5b31177177',0,'123','2018-06-26','00:25:21'),('5b32540e4e',0,'456','2018-06-26','22:56:14'),('5b325442be',0,'1230','2018-06-26','22:57:06'),('5b326935e8',0,'1230','2018-06-27','00:26:29'),('5b338f29d8',0,'1230','2018-06-27','21:20:41'),('5b359f9544',0,'123','2018-06-29','10:55:17'),('5b35bf4fa8',0,'123','2018-06-29','13:10:39'),('5b36d567a4',0,'123','2018-06-30','08:57:11'),('5b36e49a2c',0,'123','2018-06-30','10:02:02'),('5b37236c83',0,'90218104','2018-06-30','14:30:04'),('5b372388d8',0,'123','2018-06-30','14:30:32'),('5b372581ea',0,'90218104','2018-06-30','14:38:57'),('5b3725974e',0,'123','2018-06-30','14:39:19'),('5b3729ea47',0,'90218104','2018-06-30','14:57:46'),('5b372e0881',0,'123','2018-06-30','15:15:20'),('5b3730aed4',0,'123','2018-06-30','15:26:38'),('5b3730cd69',0,'1230','2018-06-30','15:27:09'),('5b3730f89c',0,'1230','2018-06-30','15:27:52'),('5b37311125',0,'123','2018-06-30','15:28:17'),('5b37313d85',0,'90218104','2018-06-30','15:29:01'),('5b37341b7c',0,'123','2018-06-30','15:41:15'),('5b373bbdb6',0,'T124065760','2018-06-30','16:13:49'),('5b373e5f02',0,'123','2018-06-30','16:25:03'),('5b373f8714',0,'123','2018-06-30','16:29:59'),('5b373fa6b3',0,'90218104','2018-06-30','16:30:30'),('5b374047db',0,'123','2018-06-30','16:33:11'),('5b374076ba',0,'123','2018-06-30','16:33:58'),('5b374086a9',0,'90218104','2018-06-30','16:34:14'),('5b38242ba2',0,'123','2018-07-01','08:45:31'),('5b38297d3e',0,'456','2018-07-01','09:08:13'),('5b382ae703',0,'90218104','2018-07-01','09:14:15'),('5b382ba93c',0,'90218104','2018-07-01','09:17:29'),('5b382bbddf',0,'456','2018-07-01','09:17:49'),('5b382f3d1b',0,'90218104','2018-07-01','09:32:45'),('5b382f5923',0,'456','2018-07-01','09:33:13'),('5b382f8cc1',0,'456','2018-07-01','09:34:04'),('5b3833f574',0,'90218104','2018-07-01','09:52:53'),('5b38341131',0,'456','2018-07-01','09:53:21'),('5b3834e951',0,'90218104','2018-07-01','09:56:57'),('5b38359d88',0,'123','2018-07-01','09:59:57'),('5b3835a489',0,'456','2018-07-01','10:00:04'),('5b3835dd79',0,'90218104','2018-07-01','10:01:01'),('5b38368d48',0,'456','2018-07-01','10:03:57'),('5b38394d16',0,'456','2018-07-01','10:15:41'),('5b383a51c4',0,'90218104','2018-07-01','10:20:01'),('5b383c4636',0,'90218104','2018-07-01','10:28:22'),('5b383e6a47',0,'456','2018-07-01','10:37:30'),('5b3840b2a6',0,'90218104','2018-07-01','10:47:14'),('5b3840f868',0,'456','2018-07-01','10:48:24'),('5b3841074b',0,'90218104','2018-07-01','10:48:39'),('5b3842bf2f',0,'90218104','2018-07-01','10:55:59'),('5b3842d348',0,'123','2018-07-01','10:56:19'),('5b3842e28b',0,'456','2018-07-01','10:56:34'),('5b3847e9ba',0,'123','2018-07-01','11:18:01'),('5b385598df',0,'456','2018-07-01','12:16:24'),('5b3855b4dc',0,'90218104','2018-07-01','12:16:52'),('5b38560d1c',0,'90218104','2018-07-01','12:18:21'),('5b3857b6d0',0,'90218104','2018-07-01','12:25:26'),('5b3858604d',0,'123','2018-07-01','12:28:16'),('5b385867a1',0,'456','2018-07-01','12:28:23');
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
  `birthday` date DEFAULT '0000-00-00' COMMENT '生日',
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '手機',
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '信箱',
  `address` text COLLATE utf8_unicode_ci COMMENT '地址',
  `emergency_contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急聯絡人',
  `emergency_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急聯絡人手機',
  `start_contract` date DEFAULT NULL COMMENT '合約開始日',
  `end_contract` date DEFAULT NULL COMMENT '合約結束日',
  `number` int(5) DEFAULT NULL COMMENT '會籍數字(1-9)',
  `categorys` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '會籍類型(年、月)',
  `who` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '哪位員工處理(連結staff job_code)',
  `note` longtext COLLATE utf8_unicode_ci COMMENT '備註',
  `join_date` date DEFAULT NULL COMMENT '加入日期',
  `join_time` time DEFAULT NULL COMMENT '加入時間',
  `up_date` date DEFAULT NULL COMMENT '更新日期',
  `up_time` time DEFAULT NULL COMMENT '更新時間',
  PRIMARY KEY (`card_id`),
  KEY `staff_id2` (`who`),
  CONSTRAINT `card_id` FOREIGN KEY (`card_id`) REFERENCES `card_status` (`card_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='會員';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('000011','20180701100041.jpg','蘇湧','T464556445','2018-07-01','(89) 48-977-897','','1212','asd','(12) 31-231-231','2018-07-01','2018-07-31',1,'月','90218104','','2018-07-01','10:00:41','2018-07-01','10:31:44');
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
  `job_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '職編',
  `staff_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
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
  PRIMARY KEY (`id`,`job_code`),
  KEY `name` (`staff_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='員工';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('5b27c96eda','90218104','蘇','96c96f3cadc4c4012a02ebb06431bfda75739779','1994-09-15','(09) 06-405-019',99,'1','','','2018-07-01','09:02:20','2018-06-18','23:02:06'),('5b2a665a85','123','蘇永勝','40bd001563085fc35165329ea1ff5c5ecbdbbeef','1994-09-15','(09) 06-405-019',0,'屏東市大洲里65號','蘇','(09) 06-405-019','2018-06-30','15:28:04','2018-06-20','22:36:10'),('5b382b8dee','456','sss','51eac6b471a284d3341d8c0c63d0f1a286262a18','2044-04-04','(45) 65-644-564',1,'assdasda','abc','(09) 06-405-019','2018-07-01','09:57:05','2018-07-01','09:17:01');
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

-- Dump completed on 2018-07-01 12:29:13
