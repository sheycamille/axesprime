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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mt5_details`
--

LOCK TABLES `mt5_details` WRITE;
/*!40000 ALTER TABLE `mt5_details` DISABLE KEYS */;
INSERT INTO `mt5_details` VALUES (1,2,'488576235407','BavjCIMFGuoBwkN','investor_BavjCIMFGuoBwkN','phone_BavjCIMFGuoBwkN','live','0','0',NULL,'500','AxesPrimeLtd-Live',NULL,NULL,'active',NULL,NULL,'2022-01-17 07:11:17','2022-01-17 13:04:55'),(2,3,'488576235650','zPxMyuFrYYU9CZF','investor_zPxMyuFrYYU9CZF','phone_zPxMyuFrYYU9CZF','live','0','0',NULL,'500','AxesPrimeLtd-Live',NULL,NULL,'active',NULL,NULL,'2022-01-17 13:14:28','2022-01-18 11:10:13'),(3,3,'8807186','Y0Ve_Dy0vdEq5z9','investor_Y0Ve_Dy0vdEq5z9','phone_Y0Ve_Dy0vdEq5z9','demo','100000',NULL,NULL,'500','AxesPrimeLtd-Demo',NULL,NULL,'active',NULL,NULL,'2022-01-19 07:23:50','2022-01-19 07:23:50'),(4,2,'8807191','KGWJB-rCvMh8OmZ','investor_KGWJB-rCvMh8OmZ','phone_KGWJB-rCvMh8OmZ','demo','100000',NULL,NULL,'500','AxesPrimeLtd-Demo',NULL,NULL,'active',NULL,NULL,'2022-01-19 07:40:24','2022-01-19 07:40:24');
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
INSERT INTO `sessions` VALUES ('BJTpJ4tMiaGLvwTxqEvK6bMRjba4a65oMv2OuNHl',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36','ZXlKcGRpSTZJbkZsTVVoU2NWRkpjbGhxYWxoRmVqUmxTVEZtVlhjOVBTSXNJblpoYkhWbElqb2lRVmRRYTFOV05GTkJZbUZTWlRGbE5qWnBVVVZtU2pGak16bHZkR2RuUTA5R05Wb3dkVFZzYUdkWVdHOWlibFpQUlhkcldFUXhla3BaV2xWMVVHaHFSWHBxTUZneVkySjZiVmhGTW1waU0zUkZlR0p3TldWU0t6UnhPVUZYZGpSUlVta3haV0ZJT0hoMlVHNTBaR1Z5YkVScE1sUkthVTB4YnpGUmJsSXhTbGRHTWtaVk9URlZiRkZ5ZDNSU1kwMVpaV1JuY25acmQyWlhXV1pLUlhOMFR6RmtUMlJrUVdzMlZrWkRTRXBpY0dWeFl6VjRTblZ4VTNSdVRDdFVOMDFJWVhnckt6TkhaM2RTV0hsaVUyUkJhbVJ1ZFRabEsxRlJWVGhxYVc5cVZHSmhNR28xTDJKc04yOU1SRTFGYzNrM1lsZEZRM1o0Unl0cEsxVm1jbFp3VWxWT05VSnpTMjlHV1ZOalRHNVdTeXMyVDBSYVdEVnJXRGxhUmtOa1JEbHpRemtyTm5Rd2NqWnFWbkJ4VEVjdk1qUXdibEZQTUVzdmRXWTRNRmREUjA5U1JFTkxZM1l6Umt4U2VXeHZiV3N6YkVkWU0yeFpjWEJUTTFGSFRFZFpWMmRUUlRZeVpqSm5ibEp2UFNJc0ltMWhZeUk2SW1aaVl6VTNNV0ZrTkdVd05ETXhabVl5T1RSa01XTmhPREpsT1dSaFkyTmtaRFZqTURKbVpXVXlNemcwWTJGak1USmtNVFUyTlROaFlXSTNNV1l6TnpjaUxDSjBZV2NpT2lJaWZRPT0=',1641721497),('cBwLoxkRixpBcTwBsUZZXkIG6MigMJ6Hhj2s0K0Q',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJaTlYTDJ4TE5tbFFURXd3ZVRCMVFXSnBkbEZvWjBFOVBTSXNJblpoYkhWbElqb2lZVWREU2xSMWJGcGxkVmRaVDJZMUwxVnhUVk5WTDNKUk9HcFZZVVU1TWxRMVkwdzBjbXBaU1hWc1RWSkphM3BtZGtKSmRYWkRMMW8yUWxoVlpsaExXRGcxTjBWbGQwMW5ja2xVWkM5WEwzSkdhRXg1TDB0QmVtNUZTM0VyZFVRd1JFSk5SRU54UWpKUVZFVlZVbFF5VGpVeEsyODVXRXAyVkVwemNubzNiVVJXZEN0dmNVaFhlbGRFTm5oTEwzSkNVazlsZVVwRFUySkdiVUpvV0hCRFMzTnRaRkpITTBOcWQyWlNaRVZrYjI5NVowNHpSRzF4WW01dGR6TnlLM2x5ZGtOWk1reGFOMnc0Ym14T2R6SlZRalZKVW5aeGFrVkRiRlJCTVdOQlFtOTZOSFpVTkZoak0xSm9UV2xuUkVkT1JtMHZWRTk2WmxSMFpYcEJaMFk1V2tOMU9XZHdZbVp4V25sMEwzSXlOakZGTURCbVEybDNRbXc0TlZwUVVqazJaMEpXUzIxc2IwSkRhVU5oYlhSR2FVb3JZbkY1UkZCRlZIQnBhblp6VWt3dmVsRjFRazF3UkRaNlZtczRRVmxqYldNeWRsQmxPRGxqUTA5SVdqSlJZa0pVVWtsdFpUa3lVV1ZMYzJWdlZpdHVXakZVZUUxb2RESXdlbXRtZUZWV0lpd2liV0ZqSWpvaVltWTJNV1l5WTJNd1lqVTVOV05sTTJKalpqQmtOekUwWVdJNU5UWmxOVFl3TnpRMVlUTTBZekF5TUdRd1ltUXpZemxtWkRjeU16VTFNRGhqWmpFeE9DSXNJblJoWnlJNklpSjk=',1642171173),('Dl8Do0oHbeioFMqtUGuZAGkBwZHboqGXOuUaZvzC',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJbEJYUkRORlZGSXJhSFp0VUcxNFdrbzFlSEpLVEhjOVBTSXNJblpoYkhWbElqb2lVVWRDT1VkaVVsZ3pjRTVtTlVSRmVVcFBaV0ZxTkVFdmNVRk1ibEp2UWxwRGVYbzVjM1IxZDJsVFdtaHZhbGQzVjI1ek0xcFlPVWxrY1dobmMwUjViMXBqUmpSVU9YRldaRlZ3TjJVMk9GcHRVMjlET1ZCUVIycE9OVzFzZURKcU9XWTNTbUZSTHpKaFozTmtSMjVqT1RoWU5sbHNRM1JMTDB4V2JteFFRbmxVTlRSblVtVjFPVWRvYVZoUVZsbDJjMlJWT0ZKTVpFNUpkVGhVZERFdlZsSmljWGxFY21kNWFHSlpSa3hzTjNKUGNFOXlURlZuU2tvelZHVXdTSFZuY0hCTFYwbEdUMEpHYjBoeU56QXhjbXN5VkdsVVYwaFhUME5QVWtkNlFTOTZVa1ExTlZKelRDOWtNMUZNZVhFMlFsVXpkRk5hU0VRMVExTmpZM0ZJY1RKcmFIWXZiVzlLWTFwcFZUbHdjRFYzV0RsMFFXbEZabXBWVVdkc2FGTjRObTFXWWtjMmJYZG9OWEpZYTBwdFRqVkRaV2xEYTFseVpVdFpRa1JWWjJoclMzaHVWMGN3T0ZkM04xRjFNVWhEVVRCYU5GZExORmxpTjB0YVMxZFhTMVpSU1d4Uk9XMU5lSEZuTkV4cWRtNTZVR2QwTkZwVGFFSnJWbkJNUkdaemVUTllUVGxpWW01aFZVdGxOMWxOTDFCUWFYYzVVbGs0YTNsVlZEZEZVSGhoYjJsVEwxSnRPR05OTVZsd1kweFRSSEZPZVROR2NHWmpPR2xwV2pnd1lqWkhNRTF4UVVwVVdrdGthRlJOVVRCVVNXVnJibGhOTTB0elZsQldWV2N4T0ZSMmRFWllXbko1ZDJNclpsaEJXRTFGVEdGTGFGZHVOakJEYlUweVpHODVRVE55WlZGcUt6ZEVZV3d2VWtKSWJGWXlRV3QyVFhjMGVrdEZZbXBVWTBKVVUySm1UQzlPUzFGV1NraEhlbEpRWTNCaVF6VmxTVWxHWnpVM1NHVjJZMlpNZVhocFpYZHhaMVZWZVdob1luQjBOakpwVlhZeVlWTllaa1UyTTJGQ09VRkNUbkpLUTFwWk5EMGlMQ0p0WVdNaU9pSTJZekF3WkdWbU1tVmlPREUyWVRjMk1HUmxaalE0TURObU5UY3lOV0ZoWlRGbVptSXdPRFExTUdZelpUazBOVEJtTmprM1pEWm1OR0V5TjJKaFpXUTFJaXdpZEdGbklqb2lJbjA9',1642173859),('fPuiM4veB4lpd8uL8Uwi2eSSqU9zj7K5msu7CJZF',2,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJa0Y1U0dvclYwZHhLelJhTWtOaVRURmlka3gxUVhjOVBTSXNJblpoYkhWbElqb2lhR3RRUWpjemNsQkVia1JJSzBaMmQyWnhVa3h4ZUVoQ1UwSkhhbGhVWlc0NWJITlRaVTVTVm5Gbk5WbElVemRtYWtwaFRYcHdabm8zUWl0TUsxVXZjVk5YZFVWVGMxRllURmszWldkVWRWVkxWa2h3YjNKMFpsTnRTR2RGWjJOQmMzVmxSR3RxV205U1JEUjVVMVExZW5KS1NFMWxXalp0T1RJM1MzTkVMMm8zUVZGSmMyeFNhVWx2UTNkcU0yd3lWMHhhUTFCNGNFbzVjMnBsZUhSbFdqWlJZMEo0UVhsWGFUTk9jVmhxWW5jemExVlFkVmRMVFhKQ2QyZDBWRFpGY2s5alIwVnFTRFpJVlVaQmJtTlNlV3gzS3l0VGRFOHdPWEZpYzNkdlp6YzVlbWg0UVZSUVVVTm5kelJ3Ympaa2FFdENLM2RhTHpWb2JIRkpPV2MzVG5abU1rbFBZMUU1Tm1oaFYwOXVTQzl1YlUwclZrVjVTVmxsUjBZeWRYSklhMmhLYnpoemNYUkVSSE55VEVOeVoyVXZWa28yTVVGNmFuQlRTVlJQZUZKelIwNVliMVY1ZVdwQ1MzTmpVeXRPT0Zac05FTnhhWFpTSzJ4QmFFSjRZVTlsY25aTGVHOUVVMGxRY1dkdWVsaEtOWGRRZFhwR09ETnZRamxHZGtFek1HcHFTVXh4U1RKc2RYaGFWSGhEWlhKTU5EQkdaMnhRSzNOSmVFYzJSVVJqZW1oVU9WRXdhMWwyUkdoR1FUUkdVazVCWVdoU2ExQjNWR1ZNUjBGTk5tWlBWMDEwVUVrclpXaDRhMGR4VGtaVk1WZElkWEp2U1VKQk1Xc3JOWFpqYkhkek15dGxlSGxaWVU1bWNHaDFlR3R3U0hSTmJWZ3phVEJzWWs1elEyZEZWMUJ1TDFsU2EyMXhNR2RzVWpWa2NUTXdla2hSUTB0SVVVWnFORzAzV25sV2MxTXlZMXBHVmt0VE1qbHNjVmh1WTNSeGFtVjZaelZGUlVFd1NUTjNMekZ1ZW5CUGVuVlZNbVYwYUd4SFFtRXdiRkEyVEhGMWNXaG5SMVYzYnpFMk1USm5SWFJoZEVkUE9EZDFjRmx5VVUxcFkwWkhNRGszWW05Q2VsQjZUU0lzSW0xaFl5STZJbUppT1RkaFpUZzRaREpqWTJSaE9Ua3hZalkxTnprNE5EYzNOREF3WVRKa05EVmhOakppWkRsbFpqQTVOV1EwTWpsaE9XWmtPV05sTkRrNU0ySXpPR0lpTENKMFlXY2lPaUlpZlE9PQ==',1642584758),('oXkVgTlgTHhhT6LOzqZ48yZaaQYCCfWyzKzISUVu',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36','ZXlKcGRpSTZJalZDZEdsUFZHRkVUV1UwV1dFMUwyRXlVMFl2U0hjOVBTSXNJblpoYkhWbElqb2lkMkpqUVZVMk4wNTROV3QxT0VZNFUzaDBaME5qTVhkRGQyWlpLME5KTlhKaGJrbERORXhvZUZOelYzaHlOVTkwZUZVNGIwZGFXVTQ1TUhRMU1GWjFTM05JWWxJek0xcFpVV2htTlUxMGVYUk9TV3Q2U25vM2NEVXpOM0ppVmpodlZVdDFWekZaUVdwMVlVUjFkV3R6WTJ4b1JqVnNNbXRpTkhCRFYxSkVZVEZxVG01MFZHWTVhVFZ0ZGpkTWVXYzJVVlZtVlZGbFVUUkdSM1Y1TjFkeGRYTkVVM295ZEM5MlQzQmtZVEZ5YVdGcVV6RTNVMmhJWlM5dlIwaHlVWFZ3Vms0eVJXNXVTbUpxVkZjNE1tcERXbWRHTVdoaU9YRjZWVUl6Y1dkSGQxTlBkSFpIUmpGSlJURnFaa3RGWWpoM2JqaEhVMUZEU25sRWFVdENSbTVGTkV0VmMyRlJkMDVrUm5Zd055dDRUMkZXT0V4WlFVbHdNSFpVTDFWRVRITjBlRkYwTDBRdmJrNW1OazQ0V0ZWbFZtcHhWMWxuVVRCdUt6QTJVemR1ZFVsRmNsSmhiWEJEVTB4YWVteHlaM05qS3pOM09FVlhZbGxVU0RSaVlUTnplakppYTJoMlIxcHlOV0ozYldWUVFrNWpiVGcxVFhCaWNERmtUM2RrVVZsMmJuUTBjVkJrVkhGWmQxSnZka2xhU2xodll6WTJMMVpZV2pWTWIyUjFXRTh3YlVSU1pUSkdRVTFTU0VodU1WWnFVM0pUUm1OMWRHSkJSblJQZFZadFlWTnlUa1JHV1dFemJ6SXhaM0ZuU0hKQ2FGZDRTVlZ5Wm14MmJ6bFhUU3RQYUdVNFFqRktTa3dyUld4VlQzWXZObll3VDBkS1ZIaEpkbWhWU25adlJXNGlMQ0p0WVdNaU9pSmpNamMyWlRJMllqWmpNR0l4WWpJeVpEUTRabVV5TWpobU5qVmlZVGN4TmprMVkyUTBNVGcyWkRnek9UWmpPVFEzTVRsak16STBOR1l4Tnpjd1pUZzRJaXdpZEdGbklqb2lJbjA9',1642172628);
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'files_key','IkLwW','2022-01-14 14:02:42','2022-01-14 14:02:42'),(2,'contact_email','support@axeprogroup.com','2022-01-18 08:24:16','2022-01-18 08:24:16'),(3,'deposit_email','deposits@@axeprogroup.com','2022-01-18 08:24:16','2022-01-18 08:24:16'),(4,'withdrawal_email','withdrawals@axeprogroup.com','2022-01-18 08:24:16','2022-01-18 08:24:16'),(5,'verification_email','verifications@axeprogroup.com','2022-01-18 08:24:16','2022-01-18 08:24:16'),(6,'currency','$','2022-01-18 08:24:16','2022-01-18 08:24:16'),(7,'s_currency','USD','2022-01-18 08:24:16','2022-01-18 08:24:16'),(8,'location','Local','2022-01-18 08:24:16','2022-01-18 08:24:16'),(9,'trade_mode','yes','2022-01-18 08:24:16','2022-01-18 08:24:16'),(10,'googlet','no','2022-01-18 08:24:16','2022-01-18 08:24:16'),(11,'enable_kyc','yes','2022-01-18 08:24:16','2022-01-18 08:25:43'),(12,'weekend_trade','no','2022-01-18 08:24:16','2022-01-18 08:24:16'),(13,'enable_withdrawal','yes','2022-01-18 08:24:16','2022-01-18 08:24:16'),(14,'enable_annoc','yes','2022-01-18 08:24:16','2022-01-18 08:24:16'),(15,'logo','vzZGStaxepro-group-logo.png','2022-01-18 10:10:09','2022-01-18 10:10:09'),(16,'favicon','vzZGStfavicon.png','2022-01-18 10:10:09','2022-01-18 10:10:09'),(17,'site_name','AxePro Group','2022-01-18 10:10:09','2022-01-18 10:10:09'),(18,'description','AxePro offers CFDs on currency pairs and five other asset classes. Start trading forex online with the world’s best forex broker.','2022-01-18 10:10:09','2022-01-18 10:10:09'),(19,'keywords','forex, exchange, broker, crypto, trading, indices, shares, stocks, bonds, cryptocurrencies, futures, energies','2022-01-18 10:10:09','2022-01-18 10:10:09'),(20,'site_title','AxePro Group','2022-01-18 10:10:09','2022-01-18 10:10:09'),(21,'site_address','https://axeprogroup.com','2022-01-18 10:10:09','2022-01-18 10:10:09'),(22,'btc_address','bc1q4ykq86ucyxw964rw98qgnp3648l9zv4hgvejdl','2022-01-18 10:21:45','2022-01-18 10:21:45'),(23,'bch_address','qzkmrz9lvdkxa7df3djwnfrmjm264svjavylr2qja4','2022-01-18 10:21:45','2022-01-18 10:21:45'),(24,'ltc_address','La1WJ99FM2S5EeacfW1neH2VJyh6Fy9s5f','2022-01-18 10:21:45','2022-01-18 10:21:45'),(25,'eth_address','0xCA3326bFB32ED753732DC68F12D41F55Bd4d3DfF','2022-01-18 10:21:45','2022-01-18 10:21:45'),(26,'xrp_address','rwYkuin73NEtquqkfU9CF9k12WaZRMfSWu','2022-01-18 10:21:45','2022-01-18 10:21:45'),(27,'usdt_address','0xCA3326bFB32ED753732DC68F12D41F55Bd4d3DfF','2022-01-18 10:21:45','2022-01-18 10:21:45'),(28,'bnb_address','bnb1yh79rystcqnt6q05uquwzr308lg0w2dvk38tdt','2022-01-18 10:21:45','2022-01-18 10:21:45');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wdmethods`
--

LOCK TABLES `wdmethods` WRITE;
/*!40000 ALTER TABLE `wdmethods` DISABLE KEYS */;
INSERT INTO `wdmethods` VALUES (1,'PayPal','paypal','paypal',100,1000,'0','0','1hr','deposit','enabled','2022-01-18 10:18:14','2022-01-18 10:18:14');
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

-- Dump completed on 2022-01-19 18:52:23
