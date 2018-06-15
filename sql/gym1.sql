-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        10.1.32-MariaDB - mariadb.org binary distribution
-- 伺服器操作系統:                      Win32
-- HeidiSQL 版本:                  9.5.0.5278
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 傾印 gym 的資料庫結構
CREATE DATABASE IF NOT EXISTS `gym` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `gym`;

-- 傾印  表格 gym.card_status 結構
CREATE TABLE IF NOT EXISTS `card_status` (
  `card_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '卡片ID',
  `status` int(2) NOT NULL COMMENT '卡片狀態(0=無人；1=有人)',
  `use_date` date NOT NULL COMMENT '使用日期',
  `use_time` time NOT NULL COMMENT '使用時間',
  `stop_date` date NOT NULL COMMENT '停用日期',
  `stop_time` time NOT NULL COMMENT '停用時間',
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='卡片狀態';

-- 正在傾印表格  gym.card_status 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `card_status` DISABLE KEYS */;
INSERT INTO `card_status` (`card_id`, `status`, `use_date`, `use_time`, `stop_date`, `stop_time`) VALUES
	('90218104', 1, '2018-06-01', '00:00:23', '0000-00-00', '00:00:00');
/*!40000 ALTER TABLE `card_status` ENABLE KEYS */;

-- 傾印  表格 gym.discount_program 結構
CREATE TABLE IF NOT EXISTS `discount_program` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `price` int(10) unsigned NOT NULL COMMENT '原價',
  `discount` int(10) unsigned DEFAULT NULL COMMENT '折扣(範圍1-9折)',
  `discount_price` int(10) unsigned DEFAULT NULL COMMENT '折扣後價位',
  `types` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '類型(年、月)',
  `up_date` date DEFAULT NULL COMMENT '更改日期',
  `up_time` time DEFAULT NULL COMMENT '更改時間',
  `join_date` date DEFAULT NULL COMMENT '加入日期',
  `join_time` time DEFAULT NULL COMMENT '加入時間',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='優惠方案';

-- 正在傾印表格  gym.discount_program 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `discount_program` DISABLE KEYS */;
/*!40000 ALTER TABLE `discount_program` ENABLE KEYS */;

-- 傾印  表格 gym.in_and_out 結構
CREATE TABLE IF NOT EXISTS `in_and_out` (
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

-- 正在傾印表格  gym.in_and_out 的資料：~19 rows (大約)
/*!40000 ALTER TABLE `in_and_out` DISABLE KEYS */;
INSERT INTO `in_and_out` (`id`, `types`, `who`, `in_date`, `in_time`, `out_date`, `out_time`) VALUES
	('5b234f54af', 0, '90218104', '2018-06-15', '13:32:04', NULL, NULL),
	('5b234f5bd5', 0, '90218104', '2018-06-15', '13:32:11', NULL, NULL),
	('5b234f89a7', 0, '90218104', '2018-06-15', '13:32:57', NULL, NULL),
	('5b2350423c', 0, '90218104', '2018-06-15', '13:36:02', NULL, NULL),
	('5b2350a1d5', 0, '90218104', '2018-06-15', '13:37:37', NULL, NULL),
	('5b2350a452', 0, '90218104', '2018-06-15', '13:37:40', NULL, NULL),
	('5b23518a99', 0, '90218104', '2018-06-15', '13:41:30', NULL, NULL),
	('5b23518cd0', 0, '90218104', '2018-06-15', '13:41:32', NULL, NULL),
	('5b235190ef', 0, '90218104', '2018-06-15', '13:41:36', NULL, NULL),
	('5b2351a9a1', 0, '90218104', '2018-06-15', '13:42:01', NULL, NULL),
	('5b2351b61e', 0, '90218104', '2018-06-15', '13:42:14', NULL, NULL),
	('5b235220e7', 0, '90218104', '2018-06-15', '13:44:00', NULL, NULL),
	('5b235748c8', 0, '90218104', '2018-06-15', '14:06:00', NULL, NULL),
	('5b235b53a9', 0, '90218104', '2018-06-15', '14:23:15', NULL, NULL),
	('5b235b8883', 0, '90218104', '2018-06-15', '14:24:08', NULL, NULL),
	('5b235baca2', 0, '90218104', '2018-06-15', '14:24:44', NULL, NULL),
	('5b235bb097', 0, '90218104', '2018-06-15', '14:24:48', NULL, NULL),
	('5b235bbb02', 0, '90218104', '2018-06-15', '14:24:59', NULL, NULL),
	('5b235bd267', 0, '90218104', '2018-06-15', '14:25:22', NULL, NULL),
	('5b235c4802', 0, '90218104', '2018-06-15', '14:27:20', NULL, NULL),
	('5b235cf7e9', 0, '90218104', '2018-06-15', '14:30:15', NULL, NULL),
	('5b235d02a3', 0, '90218104', '2018-06-15', '14:30:26', NULL, NULL),
	('5b235d5386', 0, '90218104', '2018-06-15', '14:31:47', NULL, NULL),
	('5b235db862', 0, '90218104', '2018-06-15', '14:33:28', NULL, NULL),
	('5b235e040e', 0, '90218104', '2018-06-15', '14:34:44', NULL, NULL),
	('5b235e05b1', 0, '90218104', '2018-06-15', '14:34:45', NULL, NULL),
	('5b236038a7', 0, '90218104', '2018-06-15', '14:44:08', NULL, NULL);
/*!40000 ALTER TABLE `in_and_out` ENABLE KEYS */;

-- 傾印  表格 gym.login_history 結構
CREATE TABLE IF NOT EXISTS `login_history` (
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

-- 正在傾印表格  gym.login_history 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `login_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_history` ENABLE KEYS */;

-- 傾印  表格 gym.member 結構
CREATE TABLE IF NOT EXISTS `member` (
  `card_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '卡片ID',
  `pics` longtext COLLATE utf8_unicode_ci COMMENT '照片',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `identity_card` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '身分證',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `phone` int(10) DEFAULT NULL COMMENT '手機',
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '信箱',
  `address` text COLLATE utf8_unicode_ci COMMENT '地址',
  `emergency_contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急聯絡人',
  `emergency_phone` int(10) NOT NULL COMMENT '緊急聯絡人手機',
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

-- 正在傾印表格  gym.member 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` (`card_id`, `pics`, `name`, `identity_card`, `birthday`, `phone`, `email`, `address`, `emergency_contact`, `emergency_phone`, `start_contract`, `end_contract`, `categorys`, `who`, `note`, `join_date`, `join_time`, `up_date`, `up_time`) VALUES
	('90218104', 'http://w9.loxa.edu.tw/a923528/pictures/doraemon/ada5.gif', '蘇', 'T123456123', '2018-06-15', 906451236, NULL, NULL, '你', 445522136, '2018-06-15', '2018-06-23', '3年', '123', NULL, '2018-06-15', '10:44:36', NULL, NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;

-- 傾印  表格 gym.staff 結構
CREATE TABLE IF NOT EXISTS `staff` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id',
  `job_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '職編',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `phone` int(10) NOT NULL COMMENT '手機',
  `identity` int(5) NOT NULL COMMENT '身分(0=boss、1=staff、3=admin)',
  `up_date` date NOT NULL COMMENT '更改日期',
  `up_time` time NOT NULL COMMENT '更改時間',
  `join_date` date NOT NULL COMMENT '加入日期',
  `join_time` time NOT NULL COMMENT '加入時間',
  PRIMARY KEY (`id`,`job_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='員工';

-- 正在傾印表格  gym.staff 的資料：~0 rows (大約)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` (`id`, `job_code`, `name`, `password`, `phone`, `identity`, `up_date`, `up_time`, `join_date`, `join_time`) VALUES
	('123', '456', 'nj ', '', 0, 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
