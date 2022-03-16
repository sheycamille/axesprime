-- MySQL dump 10.13  Distrib 8.0.27, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: axepro
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `account_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'STP',
  `trading_platforms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'MT5, iOs, Andriod',
  `account_manager` tinyint(1) DEFAULT '1',
  `min_trade_size` double DEFAULT NULL,
  `max_trade_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swaps` tinyint(1) DEFAULT '1',
  `fx_commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_fx_pairs` int DEFAULT '71',
  `num_commodities_pairs` int DEFAULT '12',
  `num_indices_pairs` int DEFAULT '5',
  `min_deposit` double DEFAULT NULL,
  `max_leverage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typical_spread` double DEFAULT NULL,
  `execution_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requotes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'None',
  `available_instruments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'FX, Indices, Commodities, Metals, Crypto, Actions',
  `educational_material` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account_types`
--

LOCK TABLES `account_types` WRITE;
/*!40000 ALTER TABLE `account_types` DISABLE KEYS */;
INSERT INTO `account_types` VALUES (1,'Beginner',NULL,1,'250','STP','MT5, iOs, Andriod',1,0.01,'5',1,'No',71,5,12,250,'1:500',1,'Market Execution','None','FX, Indices, Commodities, Metals, Crypto, Actions',1,NULL,NULL),(2,'Intermediate',NULL,1,'20k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'3.50USD/EUR per 100,000',71,5,12,20000,'1:300',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(3,'Advanced',NULL,1,'50k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(4,'Islamic',NULL,0,'50k','STP','MT5, iOs, Andriod',1,0.1,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(5,'VIP',NULL,1,'100k','STP','MT5, iOs, Andriod',1,0.1,'Unlimited',1,'2.50USD/EUR per 100,000',71,5,12,100000,'1:100',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(6,'Beginner',NULL,1,'250','STP','MT5, iOs, Andriod',1,0.01,'5',1,'No',71,5,12,250,'1:500',1,'Market Execution','None','FX, Indices, Commodities, Metals, Crypto, Actions',1,NULL,NULL),(7,'Intermediate',NULL,1,'20k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'3.50USD/EUR per 100,000',71,5,12,20000,'1:300',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(8,'Advanced',NULL,1,'50k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(9,'Islamic',NULL,0,'50k','STP','MT5, iOs, Andriod',1,0.1,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(10,'VIP',NULL,1,'100k','STP','MT5, iOs, Andriod',1,0.1,'Unlimited',1,'2.50USD/EUR per 100,000',71,5,12,100000,'1:100',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(11,'Beginner',NULL,1,'250','STP','MT5, iOs, Andriod',1,0.01,'5',1,'No',71,5,12,250,'1:500',1,'Market Execution','None','FX, Indices, Commodities, Metals, Crypto, Actions',1,NULL,NULL),(12,'Intermediate',NULL,1,'20k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'3.50USD/EUR per 100,000',71,5,12,20000,'1:300',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(13,'Advanced',NULL,1,'50k','STP','MT5, iOs, Andriod',1,0.01,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(14,'Islamic',NULL,0,'50k','STP','MT5, iOs, Andriod',1,0.1,'40',1,'No',71,5,12,50000,'1:300',0.7,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL),(15,'VIP',NULL,1,'100k','STP','MT5, iOs, Andriod',1,0.1,'Unlimited',1,'2.50USD/EUR per 100,000',71,5,12,100000,'1:100',0.1,'Market Execution','None','FX, Indices, Commodities, Metals',1,NULL,NULL);
/*!40000 ALTER TABLE `account_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (11,'Admin','AxePro','admin@axeprogroup.com',NULL,'$2y$10$CdqdIJIdJl1YHdsL767ZTeG8HyofOfwzUZY0zES3R0dJM53OuMDxW','+237679286569','dark',NULL,'active','active','Super Admin','2022-01-14 14:21:04','2022-01-14 14:21:04');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assets`
--

LOCK TABLES `assets` WRITE;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deposits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int DEFAULT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` int DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_03_09_142220_create_sessions_table',1),(7,'2021_03_10_082445_create_admins_table',1),(9,'2021_03_10_082715_create_assets_table',1),(10,'2021_03_10_082817_create_contents_table',1),(11,'2021_03_10_083324_create_deposits_table',1),(12,'2021_03_10_083400_create_faqs_table',1),(13,'2021_03_10_083510_create_images_table',1),(14,'2021_03_10_083627_create_notifications_table',1),(15,'2021_03_10_083850_create_settings_table',1),(16,'2021_03_10_083936_create_testimonies_table',1),(17,'2021_03_10_084009_create_tp_transactions_table',1),(18,'2021_03_10_084031_create_upgrades_table',1),(19,'2021_03_10_084120_create_userlogs_table',1),(20,'2021_03_10_084235_create_wdmethods_table',1),(21,'2021_03_10_084300_create_withdrawals_table',1),(22,'2021_06_09_115647_update_users_table_add_token_2fa',1),(23,'2021_06_10_114721_update_users_add_address_document',1),(24,'2021_06_10_114721_update_users_add_address_fields',1),(25,'2021_06_14_150633_create_account_type_table',1),(26,'2021_06_15_101609_create_mt5_details_table',1),(27,'2021_06_15_104758_update_users_add_account_type',1),(28,'2021_06_21_180735_update_wdmethods_add_exchange_symbol',1),(29,'2021_06_21_180735_update_wdmethods_add_setting_key',1),(30,'2021_06_27_151047_update_mt5_detials_add_bonus',1),(31,'2021_06_28_081221_update_deposits_add_account_id',1),(32,'2021_06_28_214111_update_withdrawals_add_account_id',1),(33,'2021_08_16_070742_update_users_add_uploaded_and_verified_dates',1),(34,'2021_08_30_094105_update_users_add_paypal_email',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mt5_details`
--

DROP TABLE IF EXISTS `mt5_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mt5_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int DEFAULT NULL,
  `login` longtext COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investor_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'usd',
  `leverage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mt5_details`
--

LOCK TABLES `mt5_details` WRITE;
/*!40000 ALTER TABLE `mt5_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `mt5_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('BJTpJ4tMiaGLvwTxqEvK6bMRjba4a65oMv2OuNHl',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36','ZXlKcGRpSTZJbkZsTVVoU2NWRkpjbGhxYWxoRmVqUmxTVEZtVlhjOVBTSXNJblpoYkhWbElqb2lRVmRRYTFOV05GTkJZbUZTWlRGbE5qWnBVVVZtU2pGak16bHZkR2RuUTA5R05Wb3dkVFZzYUdkWVdHOWlibFpQUlhkcldFUXhla3BaV2xWMVVHaHFSWHBxTUZneVkySjZiVmhGTW1waU0zUkZlR0p3TldWU0t6UnhPVUZYZGpSUlVta3haV0ZJT0hoMlVHNTBaR1Z5YkVScE1sUkthVTB4YnpGUmJsSXhTbGRHTWtaVk9URlZiRkZ5ZDNSU1kwMVpaV1JuY25acmQyWlhXV1pLUlhOMFR6RmtUMlJrUVdzMlZrWkRTRXBpY0dWeFl6VjRTblZ4VTNSdVRDdFVOMDFJWVhnckt6TkhaM2RTV0hsaVUyUkJhbVJ1ZFRabEsxRlJWVGhxYVc5cVZHSmhNR28xTDJKc04yOU1SRTFGYzNrM1lsZEZRM1o0Unl0cEsxVm1jbFp3VWxWT05VSnpTMjlHV1ZOalRHNVdTeXMyVDBSYVdEVnJXRGxhUmtOa1JEbHpRemtyTm5Rd2NqWnFWbkJ4VEVjdk1qUXdibEZQTUVzdmRXWTRNRmREUjA5U1JFTkxZM1l6Umt4U2VXeHZiV3N6YkVkWU0yeFpjWEJUTTFGSFRFZFpWMmRUUlRZeVpqSm5ibEp2UFNJc0ltMWhZeUk2SW1aaVl6VTNNV0ZrTkdVd05ETXhabVl5T1RSa01XTmhPREpsT1dSaFkyTmtaRFZqTURKbVpXVXlNemcwWTJGak1USmtNVFUyTlROaFlXSTNNV1l6TnpjaUxDSjBZV2NpT2lJaWZRPT0=',1641721497),('cBwLoxkRixpBcTwBsUZZXkIG6MigMJ6Hhj2s0K0Q',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJaTlYTDJ4TE5tbFFURXd3ZVRCMVFXSnBkbEZvWjBFOVBTSXNJblpoYkhWbElqb2lZVWREU2xSMWJGcGxkVmRaVDJZMUwxVnhUVk5WTDNKUk9HcFZZVVU1TWxRMVkwdzBjbXBaU1hWc1RWSkphM3BtZGtKSmRYWkRMMW8yUWxoVlpsaExXRGcxTjBWbGQwMW5ja2xVWkM5WEwzSkdhRXg1TDB0QmVtNUZTM0VyZFVRd1JFSk5SRU54UWpKUVZFVlZVbFF5VGpVeEsyODVXRXAyVkVwemNubzNiVVJXZEN0dmNVaFhlbGRFTm5oTEwzSkNVazlsZVVwRFUySkdiVUpvV0hCRFMzTnRaRkpITTBOcWQyWlNaRVZrYjI5NVowNHpSRzF4WW01dGR6TnlLM2x5ZGtOWk1reGFOMnc0Ym14T2R6SlZRalZKVW5aeGFrVkRiRlJCTVdOQlFtOTZOSFpVTkZoak0xSm9UV2xuUkVkT1JtMHZWRTk2WmxSMFpYcEJaMFk1V2tOMU9XZHdZbVp4V25sMEwzSXlOakZGTURCbVEybDNRbXc0TlZwUVVqazJaMEpXUzIxc2IwSkRhVU5oYlhSR2FVb3JZbkY1UkZCRlZIQnBhblp6VWt3dmVsRjFRazF3UkRaNlZtczRRVmxqYldNeWRsQmxPRGxqUTA5SVdqSlJZa0pVVWtsdFpUa3lVV1ZMYzJWdlZpdHVXakZVZUUxb2RESXdlbXRtZUZWV0lpd2liV0ZqSWpvaVltWTJNV1l5WTJNd1lqVTVOV05sTTJKalpqQmtOekUwWVdJNU5UWmxOVFl3TnpRMVlUTTBZekF5TUdRd1ltUXpZemxtWkRjeU16VTFNRGhqWmpFeE9DSXNJblJoWnlJNklpSjk=',1642171173),('Dl8Do0oHbeioFMqtUGuZAGkBwZHboqGXOuUaZvzC',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJbEJYUkRORlZGSXJhSFp0VUcxNFdrbzFlSEpLVEhjOVBTSXNJblpoYkhWbElqb2lVVWRDT1VkaVVsZ3pjRTVtTlVSRmVVcFBaV0ZxTkVFdmNVRk1ibEp2UWxwRGVYbzVjM1IxZDJsVFdtaHZhbGQzVjI1ek0xcFlPVWxrY1dobmMwUjViMXBqUmpSVU9YRldaRlZ3TjJVMk9GcHRVMjlET1ZCUVIycE9OVzFzZURKcU9XWTNTbUZSTHpKaFozTmtSMjVqT1RoWU5sbHNRM1JMTDB4V2JteFFRbmxVTlRSblVtVjFPVWRvYVZoUVZsbDJjMlJWT0ZKTVpFNUpkVGhVZERFdlZsSmljWGxFY21kNWFHSlpSa3hzTjNKUGNFOXlURlZuU2tvelZHVXdTSFZuY0hCTFYwbEdUMEpHYjBoeU56QXhjbXN5VkdsVVYwaFhUME5QVWtkNlFTOTZVa1ExTlZKelRDOWtNMUZNZVhFMlFsVXpkRk5hU0VRMVExTmpZM0ZJY1RKcmFIWXZiVzlLWTFwcFZUbHdjRFYzV0RsMFFXbEZabXBWVVdkc2FGTjRObTFXWWtjMmJYZG9OWEpZYTBwdFRqVkRaV2xEYTFseVpVdFpRa1JWWjJoclMzaHVWMGN3T0ZkM04xRjFNVWhEVVRCYU5GZExORmxpTjB0YVMxZFhTMVpSU1d4Uk9XMU5lSEZuTkV4cWRtNTZVR2QwTkZwVGFFSnJWbkJNUkdaemVUTllUVGxpWW01aFZVdGxOMWxOTDFCUWFYYzVVbGs0YTNsVlZEZEZVSGhoYjJsVEwxSnRPR05OTVZsd1kweFRSSEZPZVROR2NHWmpPR2xwV2pnd1lqWkhNRTF4UVVwVVdrdGthRlJOVVRCVVNXVnJibGhOTTB0elZsQldWV2N4T0ZSMmRFWllXbko1ZDJNclpsaEJXRTFGVEdGTGFGZHVOakJEYlUweVpHODVRVE55WlZGcUt6ZEVZV3d2VWtKSWJGWXlRV3QyVFhjMGVrdEZZbXBVWTBKVVUySm1UQzlPUzFGV1NraEhlbEpRWTNCaVF6VmxTVWxHWnpVM1NHVjJZMlpNZVhocFpYZHhaMVZWZVdob1luQjBOakpwVlhZeVlWTllaa1UyTTJGQ09VRkNUbkpLUTFwWk5EMGlMQ0p0WVdNaU9pSTJZekF3WkdWbU1tVmlPREUyWVRjMk1HUmxaalE0TURObU5UY3lOV0ZoWlRGbVptSXdPRFExTUdZelpUazBOVEJtTmprM1pEWm1OR0V5TjJKaFpXUTFJaXdpZEdGbklqb2lJbjA9',1642173859),('Gsz40N83irhYYipRwrGUZ0aDjzuMEzgFNBJlKV99',2,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJa2hWY25WbGNscGhUblkzWms5NVRFSllaRzF4WjFFOVBTSXNJblpoYkhWbElqb2laR05WUjB4WU5uTlphMEZuYVRWcE5uQk5hVkpFV1M5UFZqRk5PR1Z3Y20xR1NYaGhVbUpLTm1SNk9YRjBZbGRQU2tGb2RERkNSMWhwUkdSS1NtZHdTbEJ4UjBWYVVsWlBSR3R4Y2xCamRqRTNNR1kyTTNKb2NHZzVLMVYwTld4MFVscDVkRXB0WjBKbmMzWjVNMUp5TTIxSVNDczBOVEpQUzJNNUszQjZLMnBNWlZabldVcFhiMlkxV1c1dlZVNXRWWEZFUld4ek4zUndVakpVZFhoMU0xbFJPV1pxU1ZSdGRFSjZRVzl3YjJsUE9HcHNRVmRrSzBFeFpubFpRV2hxWVc5cFZtMHlNVkZJVm5GaVdsbDBjWFZEVm1zeWVYRjBibmhGWWxwRVMwczRaRUZwYTFSdkwyOW1aMDVTU0RkRk5YRTRTMHhXUjNoeFozcEtaVmhSYVhReE1tUlBZamxwZGpKVFYyaEtWVGs0VERsT1UwRnpVbWg1Wmt0T2JXRjNiRWhtVHlzNU9WUnplakJ5UjBOVVRrNHljV1ZLUjNkbVUwVTNaWEZuU2tzMVdYUjNVRzFFVVdwRlExbHlUVUk1UldJd1ptOU5RVkpQVm1GTmJDczNiVmRZYjBoaWVISkJVbU5KVVVkWVRFeHRjbk5WVDBGblNtbENPVXBpWVVoSWFVRk1WR0pKVkUxR1ZsSldRV2xsVmt4VVZtaDNXbEpSVlcxalF6Rk5aV05ST1hncmVWVldNV1V3WTNkVFlTOXFUbk13Ukhjd09IcEZPVEJoWXpjMFVETlNWRmxXV21oc05EbFplak5HWnk5SlIzQTRWM1JyYTJvdlRqRnpjbE5XY2xoalMweExUREl5YVRWTllrdE9NRkZYSzJKVFRFeFFhRU4wUzJWS015dFVTbkZKWTFSVlJ6VkpSMnRDZEZOcmMyRnlVbFZVV1RkSGVEWXhVekYwWkZkQ1RqUjFVWGRaV2tOYVJ6VmpjRVpuUW1GNWVtZG9SbUpGWlVwcU1WRnRTM3BhZWtaeVNEZ3ZZbkJzUVd0clpIVnJPVU4xYm5sQ1FtTlJjbVJUT1ZGNVdVcG5ORlZ3V0U1MlVrMUNkMEoyZWtsSFJIUjRRM2t6VVZkUE5EaEdVRmxzZVVWVWFrRnVUVXBsWTNaNlIwNUhLM0JDYmtwblYyVkZWSGg1WWpWTVFuVlViMmxDVTFGUFJVUTFlbFZTTTBOaWRVOW1NMXAySzBKaE5YRTJlVlFpTENKdFlXTWlPaUppWkdabVpHSmhaREJsTVdRNVpqTTNNelZoTnpSa1pUTmtNakl3TURjNE5tRTBNRFV6WlRNME1EUm1NV1ptWm1FMk1HTTNPV1JtT0RNeU4yWXhNMkUwSWl3aWRHRm5Jam9pSW4wPQ==',1642177360),('oXkVgTlgTHhhT6LOzqZ48yZaaQYCCfWyzKzISUVu',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJalZDZEdsUFZHRkVUV1UwV1dFMUwyRXlVMFl2U0hjOVBTSXNJblpoYkhWbElqb2lkMkpqUVZVMk4wNTROV3QxT0VZNFUzaDBaME5qTVhkRGQyWlpLME5KTlhKaGJrbERORXhvZUZOelYzaHlOVTkwZUZVNGIwZGFXVTQ1TUhRMU1GWjFTM05JWWxJek0xcFpVV2htTlUxMGVYUk9TV3Q2U25vM2NEVXpOM0ppVmpodlZVdDFWekZaUVdwMVlVUjFkV3R6WTJ4b1JqVnNNbXRpTkhCRFYxSkVZVEZxVG01MFZHWTVhVFZ0ZGpkTWVXYzJVVlZtVlZGbFVUUkdSM1Y1TjFkeGRYTkVVM295ZEM5MlQzQmtZVEZ5YVdGcVV6RTNVMmhJWlM5dlIwaHlVWFZ3Vms0eVJXNXVTbUpxVkZjNE1tcERXbWRHTVdoaU9YRjZWVUl6Y1dkSGQxTlBkSFpIUmpGSlJURnFaa3RGWWpoM2JqaEhVMUZEU25sRWFVdENSbTVGTkV0VmMyRlJkMDVrUm5Zd055dDRUMkZXT0V4WlFVbHdNSFpVTDFWRVRITjBlRkYwTDBRdmJrNW1OazQ0V0ZWbFZtcHhWMWxuVVRCdUt6QTJVemR1ZFVsRmNsSmhiWEJEVTB4YWVteHlaM05qS3pOM09FVlhZbGxVU0RSaVlUTnplakppYTJoMlIxcHlOV0ozYldWUVFrNWpiVGcxVFhCaWNERmtUM2RrVVZsMmJuUTBjVkJrVkhGWmQxSnZka2xhU2xodll6WTJMMVpZV2pWTWIyUjFXRTh3YlVSU1pUSkdRVTFTU0VodU1WWnFVM0pUUm1OMWRHSkJSblJQZFZadFlWTnlUa1JHV1dFemJ6SXhaM0ZuU0hKQ2FGZDRTVlZ5Wm14MmJ6bFhUU3RQYUdVNFFqRktTa3dyUld4VlQzWXZObll3VDBkS1ZIaEpkbWhWU25adlJXNGlMQ0p0WVdNaU9pSmpNamMyWlRJMllqWmpNR0l4WWpJeVpEUTRabVV5TWpobU5qVmlZVGN4TmprMVkyUTBNVGcyWkRnek9UWmpPVFEzTVRsak16STBOR1l4Tnpjd1pUZzRJaXdpZEdGbklqb2lJbjA9',1642172628);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'files_key','IkLwW','2022-01-14 14:02:42','2022-01-14 14:02:42');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonies`
--

DROP TABLE IF EXISTS `testimonies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ref_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_is_said` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonies`
--

LOCK TABLES `testimonies` WRITE;
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tp_transactions`
--

DROP TABLE IF EXISTS `tp_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tp_transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_transactions`
--

LOCK TABLES `tp_transactions` WRITE;
/*!40000 ALTER TABLE `tp_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `tp_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upgrades`
--

DROP TABLE IF EXISTS `upgrades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `upgrades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user` int DEFAULT NULL,
  `times` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upgrades`
--

LOCK TABLES `upgrades` WRITE;
/*!40000 ALTER TABLE `upgrades` DISABLE KEYS */;
/*!40000 ALTER TABLE `upgrades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userlogs`
--

DROP TABLE IF EXISTS `userlogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userlogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user` int DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userlogs`
--

LOCK TABLES `userlogs` WRITE;
/*!40000 ALTER TABLE `userlogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `userlogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `token_2fa` text COLLATE utf8mb4_unicode_ci,
  `token_2fa_expiry` text COLLATE utf8mb4_unicode_ci,
  `dob` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `town` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `zip_code` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_style` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dark',
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acnt_type_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ltc_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bch_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnb_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usdt_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xrp_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interac` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_bal` int NOT NULL DEFAULT '0',
  `bonus` int NOT NULL DEFAULT '0',
  `ref_bonus` int NOT NULL DEFAULT '0',
  `signup_bonus` int DEFAULT NULL,
  `auto_trade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_released` int NOT NULL DEFAULT '0',
  `ref_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_document` text COLLATE utf8mb4_unicode_ci,
  `docs_verified_date` date DEFAULT NULL,
  `docs_uploaded_date` date DEFAULT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_verify` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blocked',
  `trade_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act_session` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'John','support@axeprogroup.com','2022-01-14 14:21:04','$2y$10$QHtScE3U497PUDHJ1X41B.NuFuPgs7JxkrhI2b9GBpM2az4PBJEAS','1',NULL,NULL,NULL,NULL,NULL,'Makepe','Douala','Littoral',NULL,'Cameroon',NULL,'dark',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,0,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'active',NULL,NULL,NULL,NULL,NULL,'2022-01-14 14:21:04','2022-01-14 14:21:04'),(3,'Wadinga Leonard','wadingal37@gmail.com','2022-01-14 14:21:04','$2y$10$3CphmH3/EUv.taWKShyeKus69Rnk6EuCKjH03KTIts3V63NGYPMJi','1',NULL,NULL,NULL,NULL,NULL,'Molyko','Buea','SW','0283','Afganistan','+2372392039','dark',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'active',NULL,NULL,NULL,NULL,NULL,'2022-01-14 14:25:45','2022-01-14 14:25:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wdmethods`
--

DROP TABLE IF EXISTS `wdmethods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wdmethods` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` bigint DEFAULT NULL,
  `maximum` bigint DEFAULT NULL,
  `charges_fixed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charges_percentage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wdmethods`
--

LOCK TABLES `wdmethods` WRITE;
/*!40000 ALTER TABLE `wdmethods` DISABLE KEYS */;
/*!40000 ALTER TABLE `wdmethods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `withdrawals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `txn_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` int DEFAULT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_deduct` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdrawals`
--

LOCK TABLES `withdrawals` WRITE;
/*!40000 ALTER TABLE `withdrawals` DISABLE KEYS */;
/*!40000 ALTER TABLE `withdrawals` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-14 17:34:45
