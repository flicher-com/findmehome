-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2017 at 07:48 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmhmz_find`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'm.varunverma@gmail.com', 'admin', '$2y$10$dWVD1m4WTdYw8fL.holfzeoWHAtEO.0GR8JEwAjhU6/UkDPIAIQbu', NULL, '2017-07-31 00:27:13', '2017-07-31 00:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `garden` tinyint(1) NOT NULL,
  `terrace` tinyint(1) NOT NULL,
  `fridge` tinyint(1) NOT NULL,
  `oven` tinyint(1) NOT NULL,
  `microwave` tinyint(1) NOT NULL,
  `washing` tinyint(1) NOT NULL,
  `dryer` tinyint(1) NOT NULL,
  `storage` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `s_pool` tinyint(1) NOT NULL,
  `e_backup` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `property_id`, `internet`, `ac`, `tv`, `garden`, `terrace`, `fridge`, `oven`, `microwave`, `washing`, `dryer`, `storage`, `parking`, `s_pool`, `e_backup`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2017-07-31 00:31:36', '2017-07-31 00:33:34'),
(2, 2, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '2017-07-31 00:40:24', '2017-07-31 00:42:30'),
(3, 3, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, '2017-07-31 00:53:08', '2017-07-31 00:54:02'),
(4, 4, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2017-07-31 00:55:00', '2017-07-31 00:55:47'),
(5, 5, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-31 01:02:20', '2017-07-31 01:03:20'),
(6, 6, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-07-31 01:18:37', '2017-07-31 01:20:18'),
(7, 7, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, '2017-07-31 01:38:50', '2017-07-31 01:45:21'),
(8, 8, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, '2017-07-31 03:37:24', '2017-07-31 03:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrooms`
--

CREATE TABLE `hrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_bedrooms` int(11) NOT NULL,
  `no_bathrooms` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent` bigint(20) NOT NULL,
  `deposit` bigint(20) NOT NULL,
  `min_term` int(11) NOT NULL,
  `available_from` date NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `cooler` tinyint(1) NOT NULL,
  `storage` tinyint(1) NOT NULL,
  `multi_room` tinyint(1) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `idealpeoples`
--

CREATE TABLE `idealpeoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `men` tinyint(1) NOT NULL,
  `women` tinyint(1) NOT NULL,
  `student` tinyint(1) NOT NULL,
  `seniors` tinyint(1) NOT NULL,
  `professionals` tinyint(1) NOT NULL,
  `family` tinyint(1) NOT NULL,
  `couples` tinyint(1) NOT NULL,
  `bachelors` tinyint(1) NOT NULL,
  `min_age` int(11) NOT NULL,
  `max_age` int(11) NOT NULL,
  `first_time` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `idealpeoples`
--

INSERT INTO `idealpeoples` (`id`, `property_id`, `men`, `women`, `student`, `seniors`, `professionals`, `family`, `couples`, `bachelors`, `min_age`, `max_age`, `first_time`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 18, 50, 0, '2017-07-31 00:31:36', '2017-07-31 00:33:53'),
(2, 2, 1, 1, 1, 1, 1, 0, 1, 1, 0, 120, 0, '2017-07-31 00:40:24', '2017-07-31 00:42:36'),
(3, 3, 1, 1, 1, 1, 1, 0, 1, 1, 0, 120, 0, '2017-07-31 00:53:08', '2017-07-31 00:54:07'),
(4, 4, 1, 1, 1, 1, 1, 0, 1, 1, 0, 120, 0, '2017-07-31 00:55:00', '2017-07-31 00:55:51'),
(5, 5, 1, 1, 1, 1, 1, 0, 1, 1, 0, 120, 0, '2017-07-31 01:02:20', '2017-07-31 01:03:25'),
(6, 6, 1, 1, 1, 1, 1, 0, 1, 1, 0, 120, 0, '2017-07-31 01:18:37', '2017-07-31 01:20:46'),
(7, 7, 0, 1, 1, 0, 0, 0, 0, 0, 18, 30, 0, '2017-07-31 01:38:50', '2017-07-31 01:46:19'),
(8, 8, 1, 0, 1, 1, 1, 0, 0, 1, 18, 42, 0, '2017-07-31 03:37:24', '2017-07-31 03:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `livingpeoples`
--

CREATE TABLE `livingpeoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `no_smokers` tinyint(1) NOT NULL,
  `no_alcholic` tinyint(1) NOT NULL,
  `vegans` tinyint(1) NOT NULL,
  `no_commercial` tinyint(1) NOT NULL,
  `no_pets` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `livingpeoples`
--

INSERT INTO `livingpeoples` (`id`, `property_id`, `no_smokers`, `no_alcholic`, `vegans`, `no_commercial`, `no_pets`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 0, 0, '2017-07-31 00:31:36', '2017-07-31 00:33:53'),
(2, 2, 0, 1, 1, 1, 0, '2017-07-31 00:40:24', '2017-07-31 00:42:35'),
(3, 3, 1, 1, 0, 0, 0, '2017-07-31 00:53:08', '2017-07-31 00:54:07'),
(4, 4, 1, 1, 0, 0, 0, '2017-07-31 00:55:00', '2017-07-31 00:55:51'),
(5, 5, 0, 1, 1, 1, 0, '2017-07-31 01:02:20', '2017-07-31 01:03:25'),
(6, 6, 1, 1, 0, 0, 0, '2017-07-31 01:18:37', '2017-07-31 01:20:46'),
(7, 7, 1, 1, 1, 1, 1, '2017-07-31 01:38:50', '2017-07-31 01:46:19'),
(8, 8, 1, 1, 0, 1, 1, '2017-07-31 03:37:24', '2017-07-31 03:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_28_171233_create_socials_table', 1),
('2016_06_27_072013_create_properties_table', 1),
('2016_06_27_074714_create_amenities_table', 1),
('2016_06_27_162914_create_pgs_table', 1),
('2016_06_28_222232_create_hrooms_table', 1),
('2016_06_30_190335_create_propertyphotos_table', 1),
('2016_06_30_190932_create_livingpeoples_table', 1),
('2016_06_30_190943_create_idealpeoples_table', 1),
('2016_07_06_234750_create_shortlists_table', 1),
('2017_03_20_020248_create_admins_table', 1),
('2017_06_22_031853_create_contact_messages_table', 1),
('2017_06_24_022005_create_user_languages_table', 1),
('2017_07_19_191806_create_pg_rooms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pgs`
--

CREATE TABLE `pgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `property_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `available_from` date NOT NULL,
  `min_term` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `food` tinyint(1) NOT NULL,
  `food_price` int(11) NOT NULL,
  `laundry` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pgs`
--

INSERT INTO `pgs` (`id`, `property_id`, `property_name`, `available_from`, `min_term`, `deposit`, `food`, `food_price`, `laundry`, `created_at`, `updated_at`) VALUES
(1, 1, 'Decent', '2017-07-31', 1, 2000, 0, 0, 0, '2017-07-31 00:31:36', '2017-07-31 00:32:18'),
(2, 2, 'Sharma', '2017-07-31', 1, 3000, 0, 0, 0, '2017-07-31 00:40:24', '2017-07-31 00:41:54'),
(3, 3, 'Aleen', '2017-07-31', 1, 0, 0, 0, 0, '2017-07-31 00:53:08', '2017-07-31 00:53:37'),
(4, 4, 'Bansal', '2017-07-31', 1, 3000, 0, 0, 0, '2017-07-31 00:55:00', '2017-07-31 00:55:32'),
(5, 5, 'Baldev', '2017-07-31', 1, 0, 0, 0, 0, '2017-07-31 01:02:20', '2017-07-31 01:03:14'),
(6, 6, 'Saleem', '2017-07-31', 1, 3000, 0, 0, 0, '2017-07-31 01:18:37', '2017-07-31 01:19:04'),
(8, 8, 'GOYAL', '1970-01-01', 1, 500, 0, 0, 0, '2017-07-31 03:37:24', '2017-07-31 03:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `pg_rooms`
--

CREATE TABLE `pg_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `pg_id` int(10) UNSIGNED NOT NULL,
  `no_rooms` int(11) NOT NULL,
  `no_beds` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `area_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `ensuite` int(11) NOT NULL,
  `ac` tinyint(1) NOT NULL,
  `cooler` tinyint(1) NOT NULL,
  `storage` tinyint(1) NOT NULL,
  `furnishing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pg_rooms`
--

INSERT INTO `pg_rooms` (`id`, `pg_id`, `no_rooms`, `no_beds`, `area`, `area_unit`, `rent`, `deposit`, `ensuite`, `ac`, `cooler`, `storage`, `furnishing`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 3, 400, 'ft', 5000, 0, 0, 1, 0, 0, 'full', '2017-07-31 00:32:18', '2017-07-31 00:32:18'),
(2, 2, 3, 1, 300, 'ft', 3000, 0, 0, 0, 1, 0, 'semi', '2017-07-31 00:41:54', '2017-07-31 00:41:54'),
(3, 3, 20, 1, 300, 'ft', 7000, 0, 0, 0, 1, 1, 'full', '2017-07-31 00:53:37', '2017-07-31 00:53:37'),
(4, 4, 30, 1, 200, 'ft', 3000, 0, 0, 0, 0, 1, 'non', '2017-07-31 00:55:32', '2017-07-31 00:55:32'),
(5, 5, 30, 1, 300, 'ft', 9000, 0, 0, 1, 0, 0, 'semi', '2017-07-31 01:03:14', '2017-07-31 01:03:14'),
(6, 6, 30, 1, 300, 'ft', 6000, 0, 0, 0, 1, 0, 'semi', '2017-07-31 01:19:04', '2017-07-31 01:19:04'),
(8, 8, 1, 2, 100, 'ft', 5000, 0, 1, 0, 1, 1, 'full', '2017-07-31 03:39:17', '2017-07-31 03:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `main_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bills_inc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `step_completed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `views_count` bigint(20) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `status`, `type`, `address`, `h_no`, `street_no`, `locality`, `city`, `state`, `zip`, `country`, `lat`, `long`, `description`, `main_pic`, `bills_inc`, `step_completed`, `published`, `views_count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'owner', 'pg', '10958, Haibowal Main Road, Haibowal Kalan, Ludhiana, Punjab, India', '', '', 'Haibowal Kalan', 'Ludhiana', 'Punjab', '141001', 'India', '30.922597954523418', '75.80949081534425', 'PG FOR GIRLS AVAILABLE 4+ SEATER ATTACHED WASHROOM, KITCHEN,COOKING GAS RO WATER,REFERIGERATIR\' T.V. Cooler ALMIRAH,SPACIOUS ROOM, 24 hour water supply HOMELY ATMOSPHERE 3 minutes walking distance from.', 'pg1.PNG', '', '1,2,3,4,5,6', 1, 5, NULL, '2017-07-31 00:31:36', '2017-07-31 02:35:25'),
(2, 1, 'owner', 'pg', '42, Durga Puri Road, Haibowal Kalan, Ludhiana, Punjab, India', '', '', 'Haibowal Kalan', 'Ludhiana', 'Punjab', '141001', 'India', '30.9282862', '75.80871709999997', 'AVAILABLE 4+ SEATER ATTACHED WASHROOM, KITCHEN,COOKING GAS RO WATER,REFERIGERATIR\' T.V. Cooler ALMIRAH,SPACIOUS ROOM, 24 hour water supply HOMELY ATMOSPHERE 3 minutes walking distance from ATAM PARK .PLZ DROP YOUR PHONE NUMBER SO THAT WE CAN CALL YOU IN DETAIL.', 'pg2.PNG', '', '1,2,3,4,5,6', 1, 2, NULL, '2017-07-31 00:40:24', '2017-08-01 01:03:20'),
(3, 1, 'owner', 'pg', '586, Civil Lines, Ludhiana, Punjab, India', '', '', 'Civil Lines', 'Ludhiana', 'Punjab', '141001', 'India', '30.9164455', '75.82897730000002', 'AVAILABLE 4+ SEATER ATTACHED WASHROOM, KITCHEN,COOKING GAS RO WATER,REFERIGERATIR\' T.V. Cooler ALMIRAH,SPACIOUS ROOM, 24 hour water supply HOMELY ATMOSPHERE 3 minutes walking distance from ATAM PARK .PLZ DROP YOUR PHONE NUMBER SO THAT WE CAN CALL YOU IN DETAIL.', 'pg3.PNG', '', '1,2,3,4,5,6', 1, 0, NULL, '2017-07-31 00:53:08', '2017-07-31 00:54:16'),
(4, 1, 'agent', 'pg', '65 tagore nagar ludhiana', '', '', 'Tagore Nagar', 'Ludhiana', 'Punjab', '141001', 'India', '30.908294548720292', '75.82150535449216', 'AVAILABLE 4+ SEATER ATTACHED WASHROOM, KITCHEN,COOKING GAS RO WATER,REFERIGERATIR\' T.V. Cooler ALMIRAH,SPACIOUS ROOM, 24 hour water supply HOMELY ATMOSPHERE 3 minutes walking distance from ATAM PARK .PLZ DROP YOUR PHONE NUMBER SO THAT WE CAN CALL YOU IN DETAIL.', 'pg5.PNG', '', '1,2,3,4,5,6', 1, 5, NULL, '2017-07-31 00:55:00', '2017-08-01 04:41:08'),
(5, 1, 'owner', 'pg', 'Villa in Bhai Randhir Singh Nagar, Ludhiana', '', '', 'BRS Nagar', 'Ludhiana', 'Punjab', '141012', 'India', '30.885960829556947', '75.79840718518062', 'Fully Furnished Executive AC rooms with all modern amenities MALE ;( NO BROKERAGE) At : 315-D, B R S Nagar, Ludhiana INDEPENDENT Room = Rs 8800/- SHARING Basis (one room 2 people) = 4500/- Rooms are immaculately clean, hygienic & cross-ventilated. Well furnished carpeted AC rooms. 24 hrs running hot & cold water.', 'pg6.PNG', '', '1,2,3,4,5,6', 1, 10, NULL, '2017-07-31 01:02:20', '2017-08-01 03:47:21'),
(6, 1, 'agent', 'pg', 'Salem Tabri, Ludhiana, Punjab, India', '', '', 'Salem Tabri', 'Ludhiana', 'Punjab', '', 'India', '30.9352333', '75.83451179999997', 'Fully Furnished Executive AC rooms with all modern amenities MALE ;( NO BROKERAGE) At : 315-D, B R S Nagar, Ludhiana INDEPENDENT Room = Rs 4000/- SHARING Basis (one room 2 people) = 4500/- Rooms are immaculately clean, hygienic & cross-ventilated.', 'pg7.PNG', '', '1,2,3,4,5,6', 1, 10, NULL, '2017-07-31 01:18:37', '2017-07-31 14:05:02'),
(7, 2, 'owner', 'pg', '115,MODEL TOWN ,LUDHIANA', '115', '3', 'Model Gram', 'Ludhiana', 'Punjab', '141001', 'India', '30.883961018342386', '75.84335947619627', 'WE SPECIALLY TAKE CARE OF STUDENTS AND P.G AVAILABLE FOR GIRLS ONLY.\r\nHOME FOOD FACILITY IS AVAILABLE ON DEMAND ONLY. CAMERAS ARE INSTALLED IN OUTSIDE OF HOUSE FOR SECURITY PURPOSES.', 'pg.jpg', '', '1,2,3,4,5,6', 1, 6, '2017-07-31 04:25:04', '2017-07-31 01:38:50', '2017-07-31 04:25:04'),
(8, 3, 'owner', 'pg', '1901,st no.4,maharaj nagar,opposite ansal plaza ,ludhiana,punjab,india', '1901', '4', 'Maharaj Nagar', 'Ludhiana', 'Punjab', '', 'India', '30.89911099999999', '75.81925780000006', 'WE HAVE FULLY FURNISHED P.G ONLY FOR BOYS NEAR TO P.A.U', 'room.jpg', '', '1,2,3,4,5,6', 1, 24, NULL, '2017-07-31 03:37:24', '2017-08-01 21:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `propertyphotos`
--

CREATE TABLE `propertyphotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyphotos`
--

INSERT INTO `propertyphotos` (`id`, `property_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'pg1.PNG', '2017-07-31 00:34:02', '2017-07-31 00:34:02'),
(2, 2, 'pg2.PNG', '2017-07-31 00:42:41', '2017-07-31 00:42:41'),
(3, 3, 'pg3.PNG', '2017-07-31 00:54:13', '2017-07-31 00:54:13'),
(4, 4, 'pg5.PNG', '2017-07-31 00:56:38', '2017-07-31 00:56:38'),
(5, 5, 'pg6.PNG', '2017-07-31 01:04:21', '2017-07-31 01:04:21'),
(6, 6, 'pg7.PNG', '2017-07-31 01:21:05', '2017-07-31 01:21:05'),
(8, 8, 'room.jpg', '2017-07-31 03:43:25', '2017-07-31 03:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `shortlists`
--

CREATE TABLE `shortlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `user_id`, `provider`, `social_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'google', '107722149719462195635', '2017-07-31 00:29:30', '2017-07-31 00:29:30'),
(2, 2, 'google', '103903913218415126413', '2017-07-31 01:33:44', '2017-07-31 01:33:44'),
(3, 3, 'google', '107447382887195351682', '2017-07-31 03:35:08', '2017-07-31 03:35:08'),
(4, 5, 'google', '114092825215957156780', '2017-07-31 22:16:25', '2017-07-31 22:16:25'),
(5, 6, 'google', '110626063267194656057', '2017-08-01 01:27:22', '2017-08-01 01:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smoker` tinyint(1) NOT NULL,
  `veg` tinyint(1) NOT NULL,
  `pets` tinyint(1) NOT NULL,
  `relationship` tinyint(1) NOT NULL,
  `strength` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'assets/images/default-user.png',
  `email_verified` tinyint(1) NOT NULL,
  `email_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_verified` tinyint(1) NOT NULL,
  `phone_token` int(11) NOT NULL,
  `private_no` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_no`, `dob`, `age`, `gender`, `description`, `status`, `activity`, `languages`, `smoker`, `veg`, `pets`, `relationship`, `strength`, `avatar`, `email_verified`, `email_token`, `phone_verified`, `phone_token`, `private_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Varun', 'Verma', 'm.varunverma@gmail.com', NULL, '9779906998', '0000-00-00', 0, '', '', 'professional', '', '3', 0, 0, 0, 0, 40, 'https://lh6.googleusercontent.com/-3Gkf5QCQ3y4/AAAAAAAAAAI/AAAAAAAAAGM/jBnxlQF5r7k/photo.jpg?sz=50', 1, 'obSWVBCnRmEc7lYEJ7TWNFo7UTeabc', 1, 2748, 0, 'qUGOuH4GbkUMeftDMjzTCVVM2sFglWLMqVyCwGGSeEpI4HaUkKpSjRlGvayb', '2017-07-31 00:29:30', '2017-07-31 04:22:34'),
(2, 'Karan', 'Verma', 'karan1248@gmail.com', NULL, '9780524400', '0000-00-00', 0, '', NULL, '', '', '', 0, 0, 0, 0, 0, 'https://lh5.googleusercontent.com/-aT_tiFUDgRY/AAAAAAAAAAI/AAAAAAAAALY/M-0IkIcemA0/photo.jpg?sz=50', 0, 'yAt1dJTR9ar82adZYm3Rst6YxOtUpA', 1, 8032, 0, 'WkmnRxH8zqsqDv05mOqN5F2D9lIYdgb1sqV8JcJPAneV0lcr0GJudDqZX4DZ', '2017-07-31 01:33:44', '2017-07-31 02:04:51'),
(3, 'Deepanshu', 'Goyal', 'deepanshugoyal24@gmail.com', NULL, '9872917148', '0000-00-00', 0, '', NULL, '', '', '', 0, 0, 0, 0, 0, 'https://lh4.googleusercontent.com/-BFJP4ztLktg/AAAAAAAAAAI/AAAAAAAAGRo/Ex3VgJTgvSg/photo.jpg?sz=50', 0, 'cnVvf78TPkMBz9BKmSEN2uTTybiGhR', 1, 2860, 0, 'bGLzfquCgZNPPaFfo9foHaphxOfIBAKvA6Ii37owe1I26nuDHlRgAS7rMDeI', '2017-07-31 03:35:08', '2017-07-31 03:45:44'),
(4, 'SANJEEV', 'KUMAR', 'SKV.VARUN@GMAIL.COM', '$2y$10$scWynq3ECGkHRCMH8eOX3O6hBz8peMmbzzjAZPetJpP95DH2tGPDW', NULL, '0000-00-00', 0, '', 'WANT TO GIVE SHOP ON RENT', 'other', 'FREE LANCER', '3', 1, 1, 0, 0, 80, 'assets/images/default-user.png', 1, 'm3opk4JLG9kBnTayBLvhZe2wTTpyVa', 0, 0, 0, '7dAU6Dw4QzkRngfsEgeqftb7eaugwPvnyHuCZgpoS4mBFOtZJ8vP9p17B0Xk', '2017-07-31 06:22:26', '2017-07-31 06:46:22'),
(5, 'Anand', 'Siddharth', 'anandsiddharth21@gmail.com', NULL, NULL, '1997-08-21', 19, 'male', NULL, '', '', '', 0, 0, 0, 0, 0, 'https://lh6.googleusercontent.com/-JGJA5ZzE10A/AAAAAAAAAAI/AAAAAAAABHI/w9cGeP38BUc/photo.jpg?sz=50', 0, 'Y7tCJtMSZCNjhO3ee5LIcGvDbaFpKy', 0, 0, 0, 'kzx8eFYoJx0rULmmsPzDUBU07jEG4nWlxwqDqgh4nxbc9xvkzPMSPawgTrAO', '2017-07-31 22:16:25', '2017-07-31 22:29:34'),
(6, 'sahil', 'basra', 's.basra09@gmail.com', NULL, NULL, '0000-00-00', 0, '', NULL, '', '', '', 0, 0, 0, 0, 0, 'https://lh3.googleusercontent.com/-2MVBuWztiTA/AAAAAAAAAAI/AAAAAAAACjQ/gxr2ekTsRVo/photo.jpg?sz=50', 0, 'wJRkc8gYH2lzPGpwFcI2mf8lHM2dB2', 0, 0, 0, 'VzRAzMtbDLHy0BbtDfnnAee6alLBueyaI0yai8gFdNPR2rCuwAxH6uDkCbIE', '2017-08-01 01:27:22', '2017-08-01 01:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_languages`
--

CREATE TABLE `user_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_languages`
--

INSERT INTO `user_languages` (`id`, `language`, `created_at`, `updated_at`) VALUES
(1, '汉语', NULL, NULL),
(2, 'Español', NULL, NULL),
(3, 'English', NULL, NULL),
(4, 'العربية', NULL, NULL),
(5, 'हिन्दी', NULL, NULL),
(6, 'Português', NULL, NULL),
(7, 'русский', NULL, NULL),
(8, 'Deutsch', NULL, NULL),
(9, '한국의', NULL, NULL),
(10, 'Français', NULL, NULL),
(11, 'Tiếng việt', NULL, NULL),
(12, 'Polski', NULL, NULL),
(13, 'українська мова', NULL, NULL),
(14, 'Română', NULL, NULL),
(15, 'Norsk', NULL, NULL),
(16, 'Svenska', NULL, NULL),
(17, 'Italiano', NULL, NULL),
(18, 'ελληνικά', NULL, NULL),
(19, 'српски', NULL, NULL),
(20, 'Nederlands', NULL, NULL),
(21, '日本語', NULL, NULL),
(22, 'Català', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amenities_property_id_foreign` (`property_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_messages_user_id_foreign` (`user_id`),
  ADD KEY `contact_messages_property_id_foreign` (`property_id`);

--
-- Indexes for table `hrooms`
--
ALTER TABLE `hrooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hrooms_property_id_foreign` (`property_id`);

--
-- Indexes for table `idealpeoples`
--
ALTER TABLE `idealpeoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idealpeoples_property_id_foreign` (`property_id`);

--
-- Indexes for table `livingpeoples`
--
ALTER TABLE `livingpeoples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livingpeoples_property_id_foreign` (`property_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pgs`
--
ALTER TABLE `pgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pgs_property_id_foreign` (`property_id`);

--
-- Indexes for table `pg_rooms`
--
ALTER TABLE `pg_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pg_rooms_pg_id_foreign` (`pg_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_user_id_foreign` (`user_id`);

--
-- Indexes for table `propertyphotos`
--
ALTER TABLE `propertyphotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyphotos_property_id_foreign` (`property_id`);

--
-- Indexes for table `shortlists`
--
ALTER TABLE `shortlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shortlists_user_id_foreign` (`user_id`),
  ADD KEY `shortlists_property_id_foreign` (`property_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socials_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`);

--
-- Indexes for table `user_languages`
--
ALTER TABLE `user_languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hrooms`
--
ALTER TABLE `hrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `idealpeoples`
--
ALTER TABLE `idealpeoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `livingpeoples`
--
ALTER TABLE `livingpeoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pgs`
--
ALTER TABLE `pgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pg_rooms`
--
ALTER TABLE `pg_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `propertyphotos`
--
ALTER TABLE `propertyphotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shortlists`
--
ALTER TABLE `shortlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_languages`
--
ALTER TABLE `user_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
