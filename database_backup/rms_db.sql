-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2022 at 03:54 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

DROP TABLE IF EXISTS `designations`;
CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_level` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `designations_designation_name_unique` (`designation_name`),
  UNIQUE KEY `designations_role_level_unique` (`role_level`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `role_level`) VALUES
(1, 'সহকারী কমিশনার (ভূমি)', 20),
(2, 'অতিরিক্ত জেলা প্রশাসক (রাজস্ব)', 15),
(3, 'এডমিন', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districs`
--

DROP TABLE IF EXISTS `districs`;
CREATE TABLE IF NOT EXISTS `districs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `distric_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districs`
--

INSERT INTO `districs` (`id`, `distric_name`, `division_id`) VALUES
(1, 'সিলেট', 1);

-- --------------------------------------------------------

--
-- Table structure for table `distric_offices`
--

DROP TABLE IF EXISTS `distric_offices`;
CREATE TABLE IF NOT EXISTS `distric_offices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `office_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division_id` int DEFAULT NULL,
  `distric_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `distric_offices`
--

INSERT INTO `distric_offices` (`id`, `office_code`, `office_name`, `office_mobile`, `office_email`, `office_website`, `division_id`, `distric_id`) VALUES
(1, 'dis_1', 'জেলা প্রশাসকের কার্যালয়, সিলেট', '০১৭১৫২৯৭৪০৫', 'dcsylhet@mopa.gov.bd', 'www.sylhet.gov.bd', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisional_offices`
--

DROP TABLE IF EXISTS `divisional_offices`;
CREATE TABLE IF NOT EXISTS `divisional_offices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `office_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `divisional_offices`
--

INSERT INTO `divisional_offices` (`id`, `office_code`, `office_name`, `office_email`, `office_mobile`, `office_website`, `division_id`) VALUES
(1, 'div_1', 'বিভাগীয় কমিশনারের কার্যালয়, সিলেট', 'divcomsylhet@mopa.gov.bd', '০১৭৩০৩৩১০০০', 'www.sylhetdiv.gov.bd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`) VALUES
(1, 'সিলেট');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiscal_years`
--

DROP TABLE IF EXISTS `fiscal_years`;
CREATE TABLE IF NOT EXISTS `fiscal_years` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fiscal_years`
--

INSERT INTO `fiscal_years` (`id`, `name`) VALUES
(1, '২০২১-২০২২');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_12_122758_create_designations_table', 2),
(6, '2022_04_13_143710_create_divisional_offices_table', 3),
(7, '2022_04_14_111749_create_divisions_table', 3),
(8, '2022_04_14_124632_create_districs_table', 4),
(9, '2022_04_14_153035_create_upazilas_table', 5),
(10, '2022_04_15_035828_create_fiscal_years_table', 6),
(11, '2022_04_15_042621_create_months_table', 7),
(12, '2022_04_15_044133_create_divisional_offices_table', 8),
(13, '2022_04_15_055652_create_distric_offices_table', 9),
(14, '2022_04_15_100559_create_upazila_offices_table', 10),
(15, '2022_04_15_111906_create_report_types_table', 11),
(16, '2022_04_16_092050_create_reports_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

DROP TABLE IF EXISTS `months`;
CREATE TABLE IF NOT EXISTS `months` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`) VALUES
(1, 'জানুয়ারি'),
(2, 'ফেব্রুয়ারি'),
(3, 'মার্চ'),
(4, 'এপ্রিল'),
(5, 'মে'),
(6, 'জুন'),
(7, 'জুলাই'),
(8, 'আগস্ট'),
(9, 'সেপ্টেম্বর'),
(10, 'অক্টোবর'),
(11, 'নভেম্বর'),
(13, 'ডিসেম্বর');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `column_one` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_five` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_six` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_seven` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_eight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_nine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_eleven` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_twelve` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_thirteen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_fourteen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_fifteen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_sixteen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `column_seventeen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fiscal_year` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `report_type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `desk` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `column_one`, `column_two`, `column_three`, `column_four`, `column_five`, `column_six`, `column_seven`, `column_eight`, `column_nine`, `column_ten`, `column_eleven`, `column_twelve`, `column_thirteen`, `column_fourteen`, `column_fifteen`, `column_sixteen`, `column_seventeen`, `fiscal_year`, `month`, `report_type`, `status`, `desk`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '727', '20', '7125333', '239581', '747', '7364914', '5', '63871', '10', '15', '219779', '283650', '742', '7301043', NULL, NULL, NULL, '২০২১-২০২২', 'মার্চ', 'রেন্ট সার্টিফিকেট মামলা', 0, 20, 3, '2022-04-16 09:41:16', '2022-04-16 09:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `report_types`
--

DROP TABLE IF EXISTS `report_types`;
CREATE TABLE IF NOT EXISTS `report_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report_types`
--

INSERT INTO `report_types` (`id`, `name`) VALUES
(1, 'রেন্ট সার্টিফিকেট মামলা');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

DROP TABLE IF EXISTS `upazilas`;
CREATE TABLE IF NOT EXISTS `upazilas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `upazila_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division_id` int NOT NULL,
  `distric_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `upazila_name`, `division_id`, `distric_id`) VALUES
(1, 'বালাগঞ্জ', 1, 1),
(2, 'গোয়াইনঘাট', 1, 1),
(3, 'বিশ্বনাথ', 1, 1),
(4, 'কানাইঘাট', 1, 1),
(5, 'জৈন্তাপুর', 1, 1),
(6, 'ফেঞ্চুগঞ্জ', 1, 1),
(7, 'বিয়ানীবাজার', 1, 1),
(8, 'কোম্পানীগঞ্জ', 1, 1),
(9, 'সিলেট সদর', 1, 1),
(10, 'জকিগঞ্জ', 1, 1),
(11, 'দক্ষিন সুরমা', 1, 1),
(12, 'গোলাপগঞ্জ', 1, 1),
(13, 'ওসমানীনগর', 1, 1),
(14, 'সিলেট মহানগর', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upazila_offices`
--

DROP TABLE IF EXISTS `upazila_offices`;
CREATE TABLE IF NOT EXISTS `upazila_offices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `office_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division_id` int DEFAULT NULL,
  `distric_id` int DEFAULT NULL,
  `upazila_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upazila_offices`
--

INSERT INTO `upazila_offices` (`id`, `office_code`, `office_name`, `office_mobile`, `office_email`, `office_website`, `division_id`, `distric_id`, `upazila_id`) VALUES
(1, 'upa_1', 'উপজেলা ভূমি অফিস, বালাগঞ্জ, সিলেট', '০১৭৩০৩৩১০৫৩', 'aclbalaganjsylhet@lrb.gov.bd', 'www.acl.balaganj.sylhet.gov.bd', 1, 1, 1),
(2, 'upa_2', 'সিলেট মহানগর রাজস্ব সার্কেল', '০১৭৩০৩৩১০২৪', 'acl.smrc@gmail.com', 'www.acl-smrc.sylhet.gov.bd', 1, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_bangla` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_english` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nidno` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_level` int NOT NULL,
  `division_id` int DEFAULT NULL,
  `distric_id` int DEFAULT NULL,
  `upazila_id` int DEFAULT NULL,
  `office_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_bangla`, `name_english`, `username`, `email`, `mobile`, `password`, `nidno`, `dob`, `profile`, `signature`, `user_level`, `division_id`, `distric_id`, `upazila_id`, `office_id`, `created_at`, `updated_at`) VALUES
(1, 'বাপ্পন দাস আকাশ', 'Bappon Das Akash', 'bappondas', 'bappondakash@gmail.com', '01303877732', '$2y$10$Lqsx3P3H56u76hz1K.d9BezwdAsEK3eJTTdRVVOCzI6a1znjbmzaa', NULL, NULL, 'assets/images/users/1730243316471551.jpg', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-04-15 23:56:52'),
(2, 'সুমাইয়া ফেরদৌস', 'Sumaiya Ferdous', 'sumaiyaferdous', 'sumaiyaferdous@gmail.com', '০১৭৪৭৫১০৬১৫', '$2y$10$Lqsx3P3H56u76hz1K.d9BezwdAsEK3eJTTdRVVOCzI6a1znjbmzaa', NULL, NULL, 'assets/images/users/1730237398537490.jpg', NULL, 20, 1, 1, 1, 'upa_1', '2022-04-15 22:22:48', '2022-04-15 22:22:48'),
(3, 'পলাশ মন্ডল', 'Palash Mondal', 'palashmondal', 'palashmondal@gmail.com', '01714740613', '$2y$10$Lqsx3P3H56u76hz1K.d9BezwdAsEK3eJTTdRVVOCzI6a1znjbmzaa', NULL, NULL, 'assets/images/users/1730244121559638.jpg', 'assets/images/users/1730245825172367.jpg', 20, 1, 1, 14, 'upa_2', '2022-04-16 00:09:39', '2022-04-16 00:36:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
