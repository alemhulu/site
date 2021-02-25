-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 09:18 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storage`
--
CREATE DATABASE IF NOT EXISTS `storage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `storage`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

REPLACE INTO `courses` (`id`, `name`, `grade_id`, `created_at`, `updated_at`) VALUES
(1, 'Biology', 3, '2020-10-09 11:38:19', '2020-10-09 11:38:19'),
(2, 'Chemistry', 3, '2020-10-12 05:53:23', '2020-10-12 05:53:23'),
(5, 'Economics', 3, '2020-10-12 09:06:41', '2020-10-12 09:06:41'),
(8, 'Chemistry', NULL, '2020-10-19 08:47:33', '2020-10-19 08:47:33'),
(12, 'General Business', 3, '2020-10-21 08:53:52', '2020-10-21 08:53:52'),
(13, 'ICT', 3, '2020-10-21 08:55:04', '2020-10-21 08:55:04'),
(14, 'Mathematics', 3, '2020-10-21 10:44:47', '2020-10-21 10:44:47'),
(15, 'Biology', NULL, '2020-10-22 06:52:51', '2020-10-22 06:52:51'),
(16, 'ICT', NULL, '2020-10-22 06:55:44', '2020-10-22 06:55:44'),
(17, 'English', 5, '2020-10-31 12:07:04', '2020-10-31 12:07:04'),
(20, 'Biology', 5, '2020-11-11 08:51:36', '2020-11-11 08:51:36'),
(21, 'Mathematics', 5, '2020-11-11 09:02:11', '2020-11-11 09:02:11'),
(22, 'Chemistry', 5, '2020-11-11 09:10:07', '2020-11-11 09:10:07'),
(23, 'Php', NULL, '2020-12-22 20:13:57', '2020-12-22 20:13:57'),
(24, 'JavaScript', NULL, '2020-12-22 20:14:33', '2020-12-22 20:14:33'),
(25, 'Python', NULL, '2020-12-22 20:17:25', '2020-12-22 20:17:25'),
(26, 'Blood measurement', NULL, '2020-12-22 20:23:34', '2020-12-22 20:23:34'),
(27, 'Blood measurement', NULL, '2020-12-22 20:23:38', '2020-12-22 20:23:38'),
(28, 'Business', 7, '2020-12-24 13:13:19', '2020-12-24 13:13:19'),
(29, 'Laravel', NULL, '2021-02-07 11:52:51', '2021-02-07 11:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

REPLACE INTO `grades` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 9, '2020-10-09 11:37:36', '2020-10-09 11:37:36'),
(2, 10, '2020-10-09 11:37:42', '2020-10-09 11:37:42'),
(3, 11, '2020-10-09 11:37:45', '2020-10-09 11:37:45'),
(5, 12, '2020-10-09 11:37:54', '2020-10-09 11:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

REPLACE INTO `media` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Audio', '2020-10-09 11:41:15', '2020-10-09 11:41:15'),
(2, 'Document', '2020-10-09 11:41:20', '2020-10-09 11:41:20'),
(3, 'Video', '2020-10-09 11:41:26', '2020-10-09 11:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_28_162609_create_sessions_table', 1),
(7, '2020_09_30_140054_create_grades_table', 1),
(8, '2020_09_30_140129_create_courses_table', 1),
(9, '2020_09_30_140142_create_units_table', 1),
(10, '2020_09_30_140155_create_subunits_table', 1),
(11, '2020_09_30_140209_create_media_table', 1),
(12, '2020_09_30_140219_create_types_table', 1),
(13, '2020_09_30_141812_create_resources_table', 1),
(14, '2019_11_05_194946_create_posts_table', 2),
(15, '2019_11_05_213109_add_new_test_column_table', 2),
(16, '2019_11_05_220037_drop_new_column', 2),
(17, '2020_05_19_103751_create_roles_table', 2),
(18, '2020_05_19_193413_create_permissions_table', 3),
(19, '2020_06_20_010403_create_add_publish_post_collumn_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

REPLACE INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@moe.gov.et', '$2y$10$wyPd0Fne3qW8tYZd84AtV.IQICDuIyEUMd2N3lkYdasjBnHWer6PC', '2020-10-20 09:35:38'),
('abigail.asheber@moe.gov.et', '$2y$10$pzESiUJeEOXSAJZjsqeHL.wN9WTK9ap.cU16Cjk2bvyBnyRwfLJY.', '2020-10-26 10:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

REPLACE INTO `permissions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'create', 'create', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(9, '                    index', '--------------------index', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(10, '                    show', '--------------------show', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(11, '                    edit', '--------------------edit', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(12, '                    update', '--------------------update', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(13, '                    destroy', '--------------------destroy', '2020-12-22 05:02:02', '2020-12-22 05:02:02'),
(21, 'destroy', 'destroy', '2020-12-22 05:03:32', '2020-12-22 05:03:32'),
(29, 'store', 'store', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(30, '                    index', '--------------------index', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(31, '                    create', '--------------------create', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(32, '                    store', '--------------------store', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(33, '                    edit', '--------------------edit', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(34, '                    update', '--------------------update', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(35, '                    show', '--------------------show', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(36, 'post', 'post', '2021-01-22 08:41:25', '2021-01-22 08:41:25'),
(37, 'post', 'post', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(38, 'delete', 'delete', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(39, 'edit', 'edit', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(40, 'update', 'update', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(41, 'show', 'show', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(42, 'index', 'index', '2021-01-22 08:43:14', '2021-01-22 08:43:14'),
(43, 'index', 'index', '2021-01-22 08:44:04', '2021-01-22 08:44:04'),
(44, '                    create', '--------------------create', '2021-01-22 08:44:04', '2021-01-22 08:44:04'),
(45, '                    store', '--------------------store', '2021-01-22 08:44:04', '2021-01-22 08:44:04'),
(46, 'show', 'show', '2021-01-22 08:44:04', '2021-01-22 08:44:04'),
(47, 'edit', 'edit', '2021-01-22 08:44:04', '2021-01-22 08:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `published` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

REPLACE INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `content`, `image_url`, `userId`, `published`) VALUES
(1, '2020-12-22 13:25:23', '2020-12-22 13:25:23', 'Addis Ababa', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>', 'thumb2_1608654323.PNG', 1, 0),
(2, '2020-12-22 14:06:57', '2020-12-22 14:06:57', 'Addis Ababa', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>', 'thumb3_1608656817.jpg', 26, 0),
(3, '2020-12-22 14:07:33', '2020-12-22 14:07:33', 'Thanks Giving', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>', 'thumb1_1608656853.PNG', 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resource_id` int(11) UNSIGNED DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `chA` varchar(255) DEFAULT NULL,
  `chB` varchar(255) DEFAULT NULL,
  `chC` varchar(255) DEFAULT NULL,
  `chD` varchar(255) DEFAULT NULL,
  `ans` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

REPLACE INTO `quiz` (`id`, `resource_id`, `question`, `chA`, `chB`, `chC`, `chD`, `ans`, `description`, `time`) VALUES
(1, 44, 'What is 10 * 4?', '12', '40', '16', '50', 'B', 'Refer to basic multiplication', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resource_id` int(11) UNSIGNED DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `chA` varchar(255) DEFAULT NULL,
  `chB` varchar(255) DEFAULT NULL,
  `chC` varchar(255) DEFAULT NULL,
  `chD` varchar(255) DEFAULT NULL,
  `ans` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzes`
--

REPLACE INTO `quizzes` (`id`, `resource_id`, `question`, `chA`, `chB`, `chC`, `chD`, `ans`, `description`, `time`, `created_at`, `updated_at`) VALUES
(9, 50, 'The 34.5 is a float number?', 'TRUE', 'FALSE', 'null', 'null', 'A', 'Any number with dot together is a float number.', 1, '2021-01-27 04:11:02', '2021-01-27 04:11:02'),
(10, 50, 'what is 554 * 0 ?', '554', '5540', '0', '555', 'C', 'Any number multiply by 0 is zero.', 1, '2021-01-27 04:12:35', '2021-01-27 04:12:35'),
(11, 51, 'Organic chemistry is the study of compounds containing', 'carbon', 'sulphur', 'sodium', 'hydrogen', 'A', 'carbon Organic chemistry is the study of compounds containing', 0, '2021-02-04 14:22:43', '2021-02-04 14:22:43'),
(12, 51, 'The aliphatic hydrocarbons are', 'alkenes', 'alkanes', 'alkynes', 'all of the above', 'D', 'The aliphatic hydrocarbons are alkenes, alkanes & alkynes.', 0, '2021-02-04 14:24:12', '2021-02-04 14:24:12'),
(13, 51, 'Alkynes must contain at least', 'two triple bonds', 'one double bond', 'two single bonds', 'one triple bond', 'D', 'Alkynes must contain at least one triple bond', 0, '2021-02-04 14:25:24', '2021-02-04 14:25:24'),
(14, 51, 'When hydrocarbons combust completely the product(s) formed is/are', 'carbon dioxide', 'carbon', 'carbon monoxide and water', 'none of the above', 'D', 'When hydrocarbons combust completely the product(s) formed is/are', 0, '2021-02-04 14:26:35', '2021-02-04 14:26:35'),
(15, 51, 'Carbohydrates are compounds containing', 'carbon and hydrogen', 'carbon, hydrogen, oxygen', 'carbon and oxygen', 'hydrogen', 'B', 'Carbohydrates are compounds containing carbon, hydrogen, oxygen', 0, '2021-02-04 14:28:03', '2021-02-04 14:28:03'),
(16, 68, 'What is the uncertainty factor for a burette?', '±0.001', '±0.1', '±0.01', '±1', 'C', 'What is the uncertainty factor for a burette ±0.01.', 0, '2021-02-04 15:04:08', '2021-02-04 15:04:08'),
(17, 68, 'What is the formula for benzene?', 'C6H6', 'C4H4', 'C5H5', 'none of the above', 'A', 'C6H6 is the formula for benzene', 0, '2021-02-04 15:05:20', '2021-02-04 15:05:20'),
(18, 68, 'What type of alcohol can be oxidized in order to form a Ketone?', 'butanol', '2-methyl-2-propanol', 'alcohols cannot be oxidized to form ketones', '2-butanol', 'A', 'Butanol is type of alcohol can be oxidized in order to form a Ketone.', 0, '2021-02-04 15:06:42', '2021-02-04 15:06:42'),
(19, 68, 'How many stages are needed for oxidizing an alcohol to form an acid?', '1 stage', '3 stages', '5 stages', 'none of the above', 'D', '2 stages are needed for oxidizing an alcohol to form an acid.', 0, '2021-02-04 15:08:07', '2021-02-04 15:08:07'),
(20, 68, 'Name the compound Cu2O using the traditional method. (2 is a subscript)', 'dicopper oxide', 'cupric oxide', 'cuprous oxide', 'copper I oxide', 'C', 'Cuprous oxide compound Cu2O using the traditional method. (2 is a subscript)', 0, '2021-02-04 15:09:31', '2021-02-04 15:09:31'),
(21, 68, 'Which of the following is NOT part of the cell theory?', 'All living things are made up of cells', 'Cells are the smallest working units of all living things', 'All cells come from pre-existing cells through cell division', 'All cells are made of organelles', 'D', 'All cells are made of organelles', 0, '2021-02-04 15:23:59', '2021-02-04 15:23:59'),
(22, 68, 'Which type of cell does NOT have structures surrounded by membranes?', 'Plant', 'Eukaryotic', 'Prokaryotic', 'Animal', 'C', 'Prokaryotic', 0, '2021-02-04 15:24:48', '2021-02-04 15:24:48'),
(23, 68, 'Which organelle makes proteins?', 'Mitochondria', 'Golgi body', 'Lysosomes', 'Ribosomes', 'A', 'Mitochondria', 0, '2021-02-04 15:26:56', '2021-02-04 15:26:56'),
(24, 68, 'What organelles are only found in plant cells?', 'Chloroplast, cell wall', 'Nucleus, cell wall', 'Cytoplasm, cell membrane', 'Chloplast, centrioles', 'A', 'Chloroplast, cell wall', 0, '2021-02-04 15:28:19', '2021-02-04 15:28:19'),
(25, 68, 'The _____ has a master set of instructions that determine what each cell will become, how it will function, and how long it will live.', 'Nucleus', 'Cytoplasm', 'Cell membrane', 'Nucleolus', 'A', 'Nucleus', 0, '2021-02-04 15:29:00', '2021-02-04 15:29:00'),
(26, 47, 'HIV is a/an _________, AIDS is a/an _________.', 'accident, not an accident', 'virus, disease', 'accident, not an accident', 'vaccine, disorder', 'B', 'virus, disease', 0, '2021-02-04 15:34:38', '2021-02-04 15:34:38'),
(27, 47, 'Which one of these methods can HIV/AIDS NOT be spread?', 'oral sex', 'sexual intercourse', 'vector infection (bugs, insects, mosquitoes, etc.)', 'pregnancy', 'C', 'vector infection (bugs, insects, mosquitoes, etc.)', 0, '2021-02-04 15:35:41', '2021-02-04 15:35:41'),
(28, 47, 'AIDS/HIV can be prevented by...', 'doing injected drugs', 'a latex condom', 'all contraceptives', 'having sex', 'B', 'a latex condom', 0, '2021-02-04 15:36:29', '2021-02-04 15:36:29'),
(29, 47, 'How many children die of AIDS everyday?', '1,400', '10,500', '5', '3,200', 'A', '1,400', 0, '2021-02-04 15:37:07', '2021-02-04 15:37:07'),
(30, 47, 'AIDS/HIV can happen to...', 'teenage women', 'sexually active people', 'young people', 'anyone', 'D', 'anyone', 0, '2021-02-04 15:37:53', '2021-02-04 15:37:53'),
(31, 47, 'What can pregnant or lactating women do to save their children from catching HIV/AIDS?', 'Take AZT during pregnancy.', 'Caesarian Section.', 'You can\'t get AIDS/HIV from pregnancy.', 'Have an abortion.', 'A', 'Take AZT during pregnancy.', 0, '2021-02-04 15:38:36', '2021-02-04 15:38:36'),
(32, 47, 'How many people die of AIDS every minute?', '4', '5', '3', '8', 'B', '5', 0, '2021-02-04 15:39:12', '2021-02-04 15:39:12'),
(33, 47, '________ are three times more vulnerable to IV infection than _________.', 'Women, men', 'Men, women', 'Children, adults', 'Adults, teenagers', 'A', 'Women, men', 0, '2021-02-04 15:39:55', '2021-02-04 15:39:55'),
(34, 47, 'Stigma and Discrimination makes people with HIV/AIDS...', 'angry', 'become more active.', 'stronger', 'lose hope and hide away.', 'D', 'lose hope and hide away.', 0, '2021-02-04 15:40:43', '2021-02-04 15:40:43'),
(35, 47, 'Physical barriers are...', 'good, we must have barriers to protect ourselves.', 'wrong, we are bad people to fear getting infected.', 'normal, but we must think of them and their suffering.', 'none of the above.', 'C', 'normal, but we must think of them and their suffering.', 0, '2021-02-04 15:42:47', '2021-02-04 15:42:47'),
(36, 66, 'If 2 parallel planes are cut by a 3rd plane, then the lines of intersection are parallel', 'theorem 3-1', 'theorem 3-3', 'theorem 3-2', 'postulate 11', 'A', 'theorem 3-1', 0, '2021-02-04 15:58:35', '2021-02-04 15:58:35'),
(37, 66, '2 lines parallel to a 3rd line are parallel to each other', 'postulate 10', 'theoremm3-9', '2 lines parallel to a 3rd line are parallel to each other', 'theorem 3-6', 'C', '2 lines parallel to a 3rd line are parallel to each other', 0, '2021-02-04 15:59:13', '2021-02-04 15:59:13'),
(38, 66, 'Through a point outside a line, there is exactly one perpendicular to the given line', 'theorem 3-7', 'theorem 3-9', 'theorem 3-8', 'theorem 3-11', 'B', 'theorem 3-9', 0, '2021-02-04 15:59:51', '2021-02-04 15:59:51'),
(39, 66, 'If 2 lines are cut by a transversal and same-side interior angles are supplementary, then the lines are parallel', 'theorem 3-9', 'theorem 3-8', 'theorem 3-6', 'postulate 12', 'D', 'postulate 12', 0, '2021-02-04 16:00:35', '2021-02-04 16:00:35'),
(40, 66, 'A line and a plane are parallel', 'they lie on the same plane', 'coplanar', 'If they do not intersect', 'are collinear', 'C', 'If they do not intersect', 0, '2021-02-04 16:01:16', '2021-02-04 16:01:16'),
(41, 67, 'During which metabolic stage is glucose broken down to pyruvate?', 'Glycolysis', 'The citric acid cycle', 'The electron transport chain', 'Oxidative phosphorylation', 'A', 'Glycolysis', 0, '2021-02-04 16:06:35', '2021-02-04 16:06:35'),
(42, 67, 'What molecule is Essential for aerobic respiration to take place?', 'Nitrogen', 'Oxygen', 'Ethanol', 'Carbohydrates', 'B', 'Oxygen', 0, '2021-02-04 16:07:13', '2021-02-04 16:07:13'),
(43, 67, 'Which of the following molecules contains three phosphate groups?', 'AMP', 'ADP', 'APP', 'ATP', 'D', 'ATP', 0, '2021-02-04 16:07:54', '2021-02-04 16:07:54'),
(44, 67, 'Which of the following is not a coenzyme?', 'CoA', 'FAD', 'ATP', 'NAD', 'C', 'ATP', 0, '2021-02-04 16:08:33', '2021-02-04 16:08:33'),
(45, 65, 'Which of the following statements about living cells is false?', 'Most are microscopic', 'They are found in all animals but not in all plants.', 'They are the smallest basic units that can carry out all of the functions that we normally define as life.', 'all of the above.', 'B', 'All living things, including plants are made up of cells.  However, comparatively simple things such as viruses do not have most of the components of cells nor are they technically living in the same sense as plants and animals', 0, '2021-02-04 16:16:02', '2021-02-04 16:16:02'),
(46, 65, 'Chromosomes are found in _____________________ of cells.', 'the nucleus', 'the cytoplasm', 'both the nucleus and the cytoplasm', 'none of the above.', 'A', 'However, keep in mind that the chromosomes only become visible when a cell begins to divide.', 0, '2021-02-04 16:17:23', '2021-02-04 16:17:23'),
(47, 65, 'Which of the following statements is true about the chromosomes of different plant and animal species?', 'They may differ in number, but are the same shape and size.', 'They may differ in the shape and size, but normally have the same number.', 'They may differ in number, shape, and size.', 'none of the above.', 'C', 'This fact provides a useful tool for biologists in distinguishing between species.  For instance, humans have 46 chromosomes, while chimpanzees have 48.  This number difference is one indication that we are not the same species.', 0, '2021-02-04 16:18:00', '2021-02-04 16:18:00'),
(48, 65, 'Which of the following statements is true about cells?', 'The nucleus is within the cell membrane which is surrounded by the nuclear membrane.', 'The nucleus is within the nuclear membrane which is surrounded by the cytoplasm.', 'The cytoplasm is within the nuclear membrane.', 'all of the above.', 'B', 'The nuclear membrane acts as a selectively permeable barrier.  That is to say, it allows some important substances to cross over while keeping the contents of the nucleus from spilling out into the cytoplasm.', 0, '2021-02-04 16:19:48', '2021-02-04 16:19:48'),
(49, 65, 'A karyotype is a:', 'general term for any type of chromosome', 'type of abnormal chromosome that is associated with Down\'s syndrome', 'picture of an individual\'s chromosomes arranged in a standardized way', 'all of the above.', 'C', 'Karyotypes allow us to quickly see if an individual has any gross chromosomal abnormalities.  For instance, this technique can be used to identify the genetically inherited condition known as Down`s syndrome.', 0, '2021-02-04 16:20:19', '2021-02-04 16:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnailLocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileLocation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` int(10) UNSIGNED DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `subunit_id` int(10) UNSIGNED DEFAULT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `media_id` int(10) UNSIGNED NOT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(10) UNSIGNED DEFAULT 0,
  `download` int(10) UNSIGNED DEFAULT 0,
  `view` int(10) UNSIGNED DEFAULT 0,
  `like` int(10) UNSIGNED DEFAULT 0,
  `deslike` int(10) UNSIGNED DEFAULT 0,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT 0,
  `link` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

REPLACE INTO `resources` (`id`, `user_id`, `fileName`, `description`, `tag`, `thumbnailLocation`, `fileLocation`, `grade_id`, `course_id`, `unit_id`, `subunit_id`, `type_id`, `media_id`, `format`, `size`, `download`, `view`, `like`, `deslike`, `comment`, `created_at`, `updated_at`, `published`, `link`) VALUES
(37, 7, NULL, 'Biology Grade 11 and 12 Syllabus.', 'Grade 11', '/storage/Biology - Syllabus - Grade 11.JPG', '/storage/Biology - Syllabus - Grade 11.pdf', 3, 1, NULL, NULL, 1, 2, NULL, NULL, 23, 33, 12, 0, '0', '2020-10-21 08:50:34', '2021-02-11 12:03:07', 1, 0),
(38, 7, NULL, 'Chemistry Syllabus', 'Grade 11, Chemistry', '/storage/thumbnails/Chemistry - Syllabus - Grade 11.JPG', '/storage/Chemistry - Syllabus - Grade 11.pdf', 3, 2, NULL, NULL, 1, 2, NULL, NULL, 18, 87, 10, 0, '0', '2020-10-21 08:53:07', '2021-02-11 06:36:57', 1, 0),
(39, 7, NULL, 'Business - Syllabus Grade 11', 'General Business', '/storage/thumbnails/General Business - Syllabus Grade 11.JPG', '/storage/General Business - Syllabus Grade 11.pdf', 3, 12, NULL, NULL, 1, 2, NULL, NULL, 39, 66, 5, 0, '0', '2020-10-21 08:54:31', '2021-02-09 11:54:00', 1, 0),
(41, 7, NULL, 'Text Book', 'Grade 11', '/storage/thumbnails/ebook.png', '/storage/Chemistry G-11.pdf', 3, 2, NULL, NULL, 2, 2, NULL, NULL, 14, 92, 4, 1, NULL, '2020-10-21 08:59:03', '2021-02-14 12:53:00', 1, 0),
(42, 7, NULL, 'TextBook', 'Economics', '/storage/thumbnails/Economics G-11.JPG', '/storage/Economics G-11.pdf', 3, 5, NULL, NULL, 2, 2, NULL, NULL, 19, 108, 26, 2, '2', '2020-10-21 09:01:18', '2021-02-09 07:29:42', 1, 0),
(43, 1, NULL, 'Labster Biology Virtual Labs', 'Biology', '/storage/thumbnails/Biology Thumbnail.jpg', '/storage/Labster Biology Virtual Labs.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 102, 56, 2, 0, '0', '2020-10-21 10:33:42', '2021-02-09 07:32:16', 1, 0),
(44, 1, NULL, 'Learn Science Smarter – Acids and Bases – Labster', 'Acid and Base', '/storage/thumbnails/Acid and Base.jpg', '/storage/Learn Science Smarter – Acids and Bases – Labster.mp4', NULL, 8, NULL, NULL, 6, 3, NULL, NULL, 13, 86, 6, 0, '0', '2020-10-21 10:35:05', '2020-11-11 11:45:41', 1, 0),
(45, 1, NULL, 'Learn Science Smarter – Regeneration Biology – Labster', 'Biology', '/storage/thumbnails/Regeneration Biology.jpg', '/storage/Learn Science Smarter – Regeneration Biology – Labster.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 26, 65, 0, 0, '25', '2020-10-21 10:36:09', '2020-11-13 05:55:01', 1, 0),
(46, 1, NULL, 'Labster Organic Chemistry Simulations', 'Biology', '/storage/thumbnails/Regeneration Biology.jpg', '/storage/Labster Organic Chemistry Simulations.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 26, 45, 24, 1, '20', '2020-10-21 10:37:34', '2020-11-12 06:21:53', 1, 0),
(47, 1, NULL, 'Biology-Unit 1-Lesson 23Biology and HIV_AIDS', 'Biology', '/storage/thumbnails/biology.jpg', '/storage/GD 11 biology -Unit 1-Lesson 23Biology and HIV_AIDS.mp4', 3, 1, 1, 1, 4, 3, NULL, NULL, 14, 56, 126, 1, '22', '2020-10-21 10:40:41', '2020-12-29 09:09:50', 1, 0),
(48, 1, NULL, 'Biology -Unit 4-Lesson 20other structure of cell', 'Biology', '/storage/thumbnails/biology.jpg', '/storage/GD 11 biology -Unit 4-Lesson 20other structure of cell.mp4', 3, 1, 7, 7, 4, 3, NULL, NULL, 5, 75, 2, 0, '0', '2020-10-21 10:44:05', '2020-11-09 13:03:54', 1, 0),
(49, 7, NULL, 'Ethiopia  GD 11- Math-Unit 11-Lesson 1 BasicMathematical Concepts in Business', 'Mathematics', '/storage/thumbnails/Mathematics.jpg', '/storage/Ethiopia  GD 11- Math-Unit 11-Lesson 1 BasicMathematical Concepts in Business.mp4', 3, 14, 8, 8, 4, 3, NULL, NULL, 17, 66, 45, 5, '25', '2020-10-21 10:46:51', '2020-11-11 07:39:59', 1, 0),
(50, 7, NULL, 'GD 11-Math-Unit 7-Lesson 5 Operationon Complex Numbers Part 2', 'Mathematics', '/storage/thumbnails/Mathematics.jpg', '/storage/GD 11- Math-Unit 7-Lesson 5 Operationon Complex Numbers Part 2.mp4', 3, 14, 9, 9, 4, 3, NULL, NULL, 7, 86, 1, 1, '20', '2020-10-21 10:49:17', '2020-11-10 13:15:59', 1, 0),
(51, 7, NULL, 'GD 12 chemistry -Unit 4-Lesson 1_Oxidation and Reduction', 'Chemistry', '/storage/thumbnails/chemistry.jpg', '/storage/GD 12 chemistry -Unit 4-Lesson 1_Oxidation and Reduction.mp4', 3, 2, 10, 10, 4, 3, NULL, NULL, 29, 72, 2, 2, '30', '2020-10-21 10:51:27', '2020-11-11 09:17:48', 1, 0),
(52, 7, NULL, 'STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume', 'stempower', '/storage/thumbnails/STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume.jpg', '/storage/STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 5, 55, 14, 2, '3', '2020-10-21 11:25:39', '2020-10-21 11:25:39', 1, 1),
(53, 7, NULL, 'STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder', 'Stempower', '/storage/thumbnails/STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder.jpg', '/storage/STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 12, 42, 14, 2, '12', '2020-10-21 11:30:23', '2020-11-11 05:27:00', 1, 1),
(54, 7, NULL, 'STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians', 'StemPower', '/storage/thumbnails/STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians.jpg', '/storage/STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 21, 45, 2, 0, '20', '2020-10-21 11:33:13', '2020-11-11 05:33:09', 1, 1),
(55, 7, NULL, 'STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS', 'StemPower', 'storage/thumbnails/STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS.jpg', 'storage/STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS.mp4', NULL, 15, NULL, NULL, 7, 3, NULL, NULL, 15, 62, 10, 1, '11', '2020-10-21 11:35:07', '2020-11-12 08:41:12', 1, 1),
(56, 7, NULL, 'STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder', 'StemPower', '/storage/thumbnails/STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder.jpg', '/storage/STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder.mp4', NULL, 15, NULL, NULL, 7, 3, NULL, NULL, 115, 85, 111, 1, '103', '2020-10-21 11:37:58', '2020-12-24 10:10:30', 1, 1),
(57, 1, NULL, 'Grade 11', 'General Business', '/storage/thumbnails/General Busines_G11.JPG', '/storage/General Busines_G11.pdf', 3, 12, NULL, NULL, 2, 2, NULL, NULL, 70, 209, 3, 0, NULL, '2020-10-22 05:26:50', '2021-02-11 09:14:02', 1, 0),
(65, 7, NULL, '[Grade 12 Revision] Cell Biology', 'Biology', '/storage/thumbnails/cell biology.JPG', '/storage/[Grade 12 Revision] Cell Biology.mp4', 5, 20, 13, NULL, 4, 3, NULL, 0, 5, 105, 3, 0, NULL, '2020-11-11 08:57:48', '2020-12-28 06:10:50', 1, 0),
(66, 7, NULL, '[Grade 12 Revision] Coordinate Geometry', 'Geometry', '/storage/thumbnails/coordinate geometry.JPG', '/storage/[Grade 12 Revision] Coordinate Geometry.mp4', 5, 21, NULL, NULL, 4, 3, NULL, 0, 11, 93, 0, 0, NULL, '2020-11-11 09:03:02', '2021-02-11 06:09:05', 1, 0),
(67, 7, NULL, '[Grade 12 Revision] Energy transformation  and cellular respiration', 'Grade 12', '/storage/thumbnails/Energy transformation and cellular.JPG', '/storage/[Grade 12 Revision] Energy transformation  and cellular respiration.mp4', 5, 20, NULL, NULL, 4, 3, NULL, 0, 9, 75, 4, 0, NULL, '2020-11-11 09:08:28', '2021-02-11 06:09:59', 1, 0),
(68, 7, NULL, '[GRADE-12 REVISION] Discovery of nucleus', 'Nucleus', '/storage/thumbnails/Discovery of Nucleus.JPG', '/storage/[GRADE-12 REVISION] Discovery of nucleus.mp4', 5, 22, NULL, NULL, 4, 3, NULL, 0, 7, 65, 2, 2, NULL, '2020-11-11 09:11:24', '2021-02-11 06:09:52', 1, 0),
(69, 1, NULL, 'Syllabus - Grade 11', 'Grade 11 ', '/storage/thumbnails/ICT - Syllabus - Grade 11.JPG', '/storage/ICT - Syllabus - Grade 11.pdf', 3, 13, NULL, NULL, 1, 2, NULL, 0, 2, 75, 5, 0, NULL, '2020-11-11 09:14:34', '2021-02-01 09:24:23', 1, 0),
(70, 25, NULL, 'Grade 11 Text Book', 'ICT', '/storage/thumbnails/ICT_G11.JPG', '/storage/ICT_G11.pdf', 3, 13, NULL, NULL, 2, 2, NULL, 0, 3, 233, 1, 0, NULL, '2020-11-11 09:16:39', '2021-02-14 12:54:41', 1, 0),
(71, 26, NULL, 'PHP Front To Back', NULL, '/storage/thumbnails/phpimage.jpg', '/storage/PHP Front To Back', NULL, 23, NULL, NULL, 8, 3, NULL, 0, 0, 35, 0, 0, NULL, '2020-12-22 20:14:08', '2020-12-22 20:14:08', 1, 1),
(72, 25, NULL, 'JavaScript Crash Course For Beginners', NULL, '/storage/thumbnails/javaScript.png', '/storage/JavaScript Crash Course For Beginners', NULL, 24, NULL, NULL, 8, 3, NULL, 0, 0, 42, 0, 0, NULL, '2020-12-22 20:16:34', '2020-12-22 20:16:34', 1, 1),
(73, 25, NULL, 'Python Crash Course For Beginners', NULL, '/storage/thumbnails/python.jpg', '/storage/Python Crash Course For Beginners', NULL, 25, NULL, NULL, 8, 3, NULL, 0, 0, 24, 0, 0, NULL, '2020-12-22 20:18:20', '2020-12-22 20:18:20', 1, 1),
(84, 1, NULL, 'Laravel Crash Course 2020', NULL, '/storage/thumbnails/laravel.png', '/storage/Laravel Crash Course 2020', NULL, 29, NULL, NULL, 8, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-09 11:29:38', '2021-02-09 11:29:38', 1, 1),
(85, 1, NULL, 'Central Nervous System', NULL, '/storage/thumbnails/human anatomy/nerve.PNG', '/storage/human anatomy/3D Medical Animation - Central Nervous System.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:14:04', '2021-02-12 08:14:04', 1, 1),
(86, 1, NULL, '5 most important organs in the Human body', NULL, '/storage/thumbnails/human anatomy/organ.PNG', '/storage/human anatomy/5 most important organs in the Human body - Human Anatomy - Kenhub.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:15:28', '2021-02-12 08:15:28', 1, 1),
(87, 1, NULL, 'Abdominal organs', NULL, '/storage/thumbnails/human anatomy/abdominal.PNG', '/storage/human anatomy/Abdominal organs (plastic anatomy).mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:07:33', '2021-02-12 08:16:10', 1, 1),
(88, 1, NULL, 'Cell Structure', NULL, '/storage/thumbnails/human anatomy/cell.PNG', '/storage/human anatomy/Biology- Cell Structure I Nucleus Medical Media.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:07:34', '2021-02-12 08:17:33', 1, 1),
(89, 1, NULL, 'Biology of the Kidneys and Urinary Tract', NULL, '/storage/thumbnails/human anatomy/kidney.PNG', '/storage/human anatomy/Biology of the Kidneys and Urinary Tract - Merck Manual Consumer Version.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:07:35', '2021-02-12 08:18:26', 1, 1),
(90, 1, NULL, 'Human Reproduction', NULL, '/storage/thumbnails/human anatomy/reproductive.PNG', '/storage/human anatomy/CBSE Class 12 Biology, Human Reproduction – 1, Male Reproductive System.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:19:52', '2021-02-12 08:19:52', 1, 1),
(91, 1, NULL, 'central nervous system', NULL, '/storage/thumbnails/human anatomy/nerve2.PNG', '/storage/human anatomy/central nervous system -- 3d Video-- 3d animation -- Biology topic.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:21:20', '2021-02-12 08:21:20', 1, 1),
(92, 1, NULL, 'Digestion in Human Beings', NULL, '/storage/thumbnails/human anatomy/digestion.png', '/storage/human anatomy/Digestion in Human Beings 3D CBSE Class 7 Science (www.iDaaLearning.com).mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:22:20', '2021-02-12 08:22:20', 1, 1),
(93, 1, NULL, 'DNA replication', NULL, '/storage/thumbnails/human anatomy/dna.PNG', '/storage/human anatomy/DNA replication - 3D.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:23:00', '2021-02-12 08:23:00', 1, 1),
(94, 1, NULL, 'Female fertility', NULL, '/storage/thumbnails/human anatomy/female.jpg', '/storage/human anatomy/Female fertility animation.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:24:06', '2021-02-12 08:24:06', 1, 1),
(95, 1, NULL, 'Fertilization', NULL, '/storage/thumbnails/human anatomy/Fertilization.jpg', '/storage/human anatomy/Fertilization.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:25:01', '2021-02-12 08:25:01', 1, 1),
(96, 1, NULL, 'Glomerular Filtration', NULL, '/storage/thumbnails/human anatomy/glomenural.PNG', '/storage/human anatomy/Glomerular Filtration -- 3D Video -- Education.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:25:50', '2021-02-12 08:25:50', 1, 1),
(97, 1, NULL, 'How does Endocrine System works', NULL, '/storage/thumbnails/human anatomy/endocrine.PNG', '/storage/human anatomy/How does Endocrine System works - Made easy - Animation.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:27:04', '2021-02-12 08:27:04', 1, 1),
(98, 1, NULL, 'How does human circulatory system work', NULL, '/storage/thumbnails/human anatomy/respiratory.PNG', '/storage/human anatomy/How does human circulatory system work – 3D animation – in English.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:42:34', '2021-02-12 08:42:34', 1, 0),
(99, 1, NULL, 'How does the Stomach Function', NULL, '/storage/thumbnails/human anatomy/stomach.PNG', '/storage/human anatomy/How does the Stomach Function-.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:43:44', '2021-02-12 08:43:44', 1, 1),
(100, 1, NULL, 'How the ear works', NULL, '/storage/thumbnails/human anatomy/ear.png', '/storage/human anatomy/How the ear works.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:44:30', '2021-02-12 08:44:30', 1, 1),
(101, 1, NULL, 'Human Circulatory System', NULL, '/storage/thumbnails/human anatomy/circulatory.PNG', '/storage/human anatomy/Human Circulatory System.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:07:36', '2021-02-12 08:45:18', 1, 1),
(102, 1, NULL, 'Human Organ Systems', NULL, '/storage/thumbnails/human anatomy/organ.PNG', '/storage/human anatomy/Human Organ Systems  Part 1 - 3D Animation - 11 major organ systems of the human body Explained.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:46:41', '2021-02-12 08:46:41', 1, 1),
(103, 1, NULL, 'Human Skeleton and Types of Joints', NULL, '/storage/thumbnails/human anatomy/sckeleton.jpg', '/storage/human anatomy/Human Skeleton and Types of Joints - Biology Video - Iken Edu.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:47:30', '2021-02-12 08:47:30', 1, 1),
(104, 1, NULL, 'human urinary system', NULL, '/storage/thumbnails/human anatomy/urinary.PNG', '/storage/human anatomy/human urinary system.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:48:45', '2021-02-12 08:48:45', 1, 1),
(105, 1, NULL, 'Introduction to Female Reproductive Anatomy', NULL, '/storage/thumbnails/human anatomy/female2.PNG', '/storage/human anatomy/Introduction to Female Reproductive Anatomy - 3D Anatomy Tutorial.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 1, 0, 0, NULL, '2021-02-12 08:49:50', '2021-02-12 09:11:28', 1, 1),
(106, 1, NULL, 'Journey of Sound to the Brain', NULL, '/storage/thumbnails/human anatomy/sound.PNG', '/storage/human anatomy/Journey of Sound to the Brain.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:51:05', '2021-02-12 08:51:05', 1, 1),
(107, 1, NULL, 'Overview of the Respiratory System', NULL, '/storage/thumbnails/human anatomy/respiratory2.jpg', '/storage/human anatomy/Overview of the Respiratory System, Animation.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:54:05', '2021-02-12 08:54:05', 1, 1),
(108, 1, NULL, 'Respiratory System', NULL, '/storage/thumbnails/human anatomy/respiratory3.PNG', '/storage/human anatomy/STD 07 _ Science - Respiratory System.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 08:55:16', '2021-02-12 08:55:16', 1, 1),
(109, 1, NULL, 'Nephron Structure and functions', NULL, '/storage/thumbnails/human anatomy/nephron.PNG', '/storage/human anatomy/STD 10 (Science) - Nephron Structure and functions.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 10:58:21', '2021-02-12 10:58:21', 1, 1),
(110, 1, NULL, 'Teeth Structure for kids in science body parts', NULL, '/storage/thumbnails/human anatomy/teath.jpg', '/storage/human anatomy/Teeth Structure for kids in science body parts - 3D.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 10:59:41', '2021-02-12 10:59:41', 1, 1),
(111, 1, NULL, 'THE  MALE REPRODUCTIVE SYSTEM OF HUMAN', NULL, '/storage/thumbnails/human anatomy/male.PNG', '/storage/human anatomy/THE  MALE REPRODUCTIVE SYSTEM OF HUMAN.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:00:58', '2021-02-12 11:00:58', 1, 1),
(112, 1, NULL, 'The Central Nervous System', NULL, '/storage/thumbnails/human anatomy/nerve3.jpg', '/storage/human anatomy/The Central Nervous System- Introduction - iKen - iKen Edu - iKen App.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:02:01', '2021-02-12 11:02:01', 1, 1),
(113, 1, NULL, 'The Endocrine System and Hormones', NULL, '/storage/thumbnails/human anatomy/endocrine2.PNG', '/storage/human anatomy/The Endocrine System and Hormones - Merck Manual Consumer Version.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:02:39', '2021-02-12 11:02:39', 1, 1),
(114, 1, NULL, 'The Endocrine System', NULL, '/storage/thumbnails/human anatomy/endocrine4.PNG', '/storage/human anatomy/The Endocrine System, Overview, Animation.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:03:15', '2021-02-12 11:03:15', 1, 1),
(115, 1, NULL, 'The Heart and Circulatory System', NULL, '/storage/thumbnails/human anatomy/heart.PNG', '/storage/human anatomy/The Heart and Circulatory System - How They Work.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 1, 0, 0, NULL, '2021-02-12 11:04:09', '2021-02-12 14:08:37', 1, 1),
(116, 1, NULL, 'The Human Eye', NULL, '/storage/thumbnails/human anatomy/eye.PNG', '/storage/human anatomy/The Human Eye.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:04:45', '2021-02-12 11:04:45', 1, 1),
(117, 1, NULL, 'The Lymphatic System Overview', NULL, '/storage/thumbnails/human anatomy/lymphatic.PNG', '/storage/human anatomy/The Lymphatic System Overview, Animation.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2021-02-12 11:05:38', '2021-02-12 11:05:38', 1, 1),
(118, 1, NULL, 'The Menstrual Cycle', NULL, '/storage/thumbnails/human anatomy/menstrual.PNG', '/storage/human anatomy/The Menstrual Cycle.mp4', NULL, 15, NULL, NULL, 9, 3, NULL, 0, 0, 1, 0, 0, NULL, '2021-02-12 11:07:32', '2021-02-12 19:54:30', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resourcestags`
--

DROP TABLE IF EXISTS `resourcestags`;
CREATE TABLE `resourcestags` (
  `resource_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

REPLACE INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2020-12-22 14:55:20', '2020-12-22 14:55:20'),
(2, 'manager', 'manager', '2020-12-22 13:50:17', '2020-12-22 13:50:17'),
(3, 'content editor', 'content-editor', '2020-12-22 13:54:05', '2020-12-22 13:54:05'),
(4, 'user', 'user', '2020-12-22 13:54:49', '2020-12-22 13:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

DROP TABLE IF EXISTS `roles_permissions`;
CREATE TABLE `roles_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

REPLACE INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(3, 47);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F2lT3Zt58Mq4HGMglzvA4bquBSpTeVrA1lJTOYYI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT1Jwb1NoOURTNTZ3QnNIVllyV3FJdnRCRDRMU1NrZjFiMFIwYm1QWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9maWxlLW1hbmFnZXIvZm0tYnV0dG9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDhKaXl2YVNiZnBPaS5raU9BdTVGRHVRZ0VYZ1RlNGFITTdVcXM4Wmx0SjZIdFB6YnZWSWdtIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ4Sml5dmFTYmZwT2kua2lPQXU1RkR1UWdFWGdUZTRhSE03VXFzOFpsdEo2SHRQemJ2VklnbSI7fQ==', 1603379391),
('x1akMllp1vRtH3oUxgEw2ZPWVLFeduKx8mkgXVmQ', NULL, '172.20.19.159', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHNMZlVVam5UUWVPVWVPWVVqdmdQQ0lIS0lwR1BlQzlBVFpxdzZPaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xNzIuMjAuMTkuMTU5OjgwMDAiO319', 1603381157);

-- --------------------------------------------------------

--
-- Table structure for table `subunits`
--

DROP TABLE IF EXISTS `subunits`;
CREATE TABLE `subunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` double(8,2) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subunits`
--

REPLACE INTO `subunits` (`id`, `name`, `title`, `unit_id`, `created_at`, `updated_at`) VALUES
(1, 2.30, 'Biology and HIV', 1, '2020-10-09 12:48:43', '2020-10-09 12:48:43'),
(7, 4.30, 'Parts of the cell and their functions', 7, '2020-10-21 10:43:55', '2020-10-21 10:43:55'),
(8, 1.10, 'Basic Mathematical Concepts in Business', 8, '2020-10-21 10:45:59', '2020-10-21 10:45:59'),
(9, 7.20, 'Operation Complex Numbers', 9, '2020-10-21 10:48:27', '2020-10-21 10:48:27'),
(10, 4.10, 'Oxidation and Reduction', 10, '2020-10-21 10:50:35', '2020-10-21 10:50:35'),
(12, 1.10, 'Adverb', 14, '2020-12-24 13:13:52', '2020-12-24 13:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `tags_resources`
--

DROP TABLE IF EXISTS `tags_resources`;
CREATE TABLE `tags_resources` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

REPLACE INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Syllabus', '2020-10-03 11:39:50', '2020-10-09 11:39:50'),
(2, 'Text Book', '2020-10-01 11:40:02', '2020-10-09 11:40:02'),
(3, 'Reference Book', '2020-10-09 11:40:08', '2020-10-09 11:40:08'),
(4, 'Lecture Video', '2020-10-02 11:40:14', '2020-10-09 11:40:14'),
(6, 'Simulated Laboratory', '2020-10-05 11:40:43', '2020-10-09 11:40:43'),
(7, 'Stem Power', '2020-10-06 11:40:57', '2020-10-09 11:40:57'),
(8, 'Software programming', '2020-12-07 20:13:24', '2020-12-22 20:13:24'),
(9, 'Human Anatomy', '2020-10-04 08:05:38', '2020-12-22 20:19:17'),
(10, 'Business', '2020-12-24 13:14:07', '2020-12-24 13:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

REPLACE INTO `units` (`id`, `name`, `title`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introduction', 1, '2020-10-09 12:47:04', '2020-10-09 12:47:04'),
(7, 4, 'Cell Biology', 1, '2020-10-21 10:43:04', '2020-10-21 10:43:04'),
(8, 7, 'Basics', 14, '2020-10-21 10:45:37', '2020-10-21 10:45:37'),
(9, 7, 'Operation', 14, '2020-10-21 10:47:58', '2020-10-21 10:47:58'),
(10, 4, 'Chemical Kinetics', 2, '2020-10-21 10:50:05', '2020-10-21 10:50:05'),
(13, 1, 'Cell Biology', 20, '2020-11-11 08:52:26', '2020-11-11 08:52:26'),
(14, 1, 'Addis Ababa', 28, '2020-12-24 13:13:33', '2020-12-24 13:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` int(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `woreda` int(255) DEFAULT NULL,
  `kebele` int(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

REPLACE INTO `users` (`id`, `firstname`, `lastname`, `institute`, `email`, `profession`, `school`, `grade`, `age`, `gender`, `phone`, `region`, `zone`, `woreda`, `kebele`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', 'we', 'test@moe.gov.et', 'a', 'bole', 3, 4, 'male', '0912345676', 'Addis Ababa', 'arada', 3, 2, NULL, '$2y$10$nS8Kczp3JgyE6PmLgt5t5u6tmmsYFKe4Y1tUdi9qboz/fyUkXMk.6', NULL, NULL, 'Pd58XZUYrU5G4GPAnVMn7R67qmF0xrZraeS2JKTqot4ntzxdFAq7jvZDxzit', NULL, 'profile-photos/ivl12Z0tkfSq3dykBSBYu5kWUm65rWaP3CK4oHJA.jpeg', '2020-10-09 11:37:21', '2021-01-22 08:45:20'),
(6, 'Yadu', 'Guluma', NULL, 'yadu@moe.gov.et', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ku1HGi85cKu9WJmeiNP0tOpQ011qULJq5fUDbmJUzBIVyx1tFFVHu', NULL, NULL, NULL, NULL, 'profile-photos/OCuz7hhH456eKahRyqI0fUo97XsgBPW5sK9qYlDR.jpeg', '2020-10-26 07:31:49', '2020-12-22 13:53:28'),
(7, 'Abigail ', 'Asheber', NULL, 'abigail.asheber@moe.gov.et', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$PXQo1hn1Ii.yXPTOOJfTjuwh55OzZ8IXmUJ6ixUDyJF.92maANDYW', NULL, NULL, NULL, NULL, 'profile-photos/OCuz7hhH456eKahRyqI0fUo97XsgBPW5sK9qYlDR.jpeg', '2020-10-26 07:33:21', '2020-10-26 07:33:21'),
(25, 'Alemhulu', 'Awekelgne', 'MoE', 'test3@moe.gov.et', 'Developer', 'Bolo High School', 12, 20, 'Male', '0911629897', 'Addis Ababa', 'Bole', 2, 5, NULL, '$2y$10$Y2KJmaVz8K.xYaPEgUz0Ge4RjX4n7WenpJ.nE9ildmh7XxWHb89v2', NULL, NULL, NULL, NULL, 'profile-photos/DwxhpqR6uLuhJVESyqkwcaNVu0rKcCN0595wZSiz.jpeg', '2020-12-03 10:52:07', '2020-12-22 13:55:48'),
(26, 'Yordi', 'Ayalew', NULL, 'test2@moe.gov.et', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nisUcF10.qa28UnwoCuk/e/XH9Y0zY9bsb8mj4paC3SWoop5WdMbm', NULL, NULL, NULL, NULL, 'profile-photos/OCuz7hhH456eKahRyqI0fUo97XsgBPW5sK9qYlDR.jpeg', '2020-12-22 14:05:08', '2021-01-22 11:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

DROP TABLE IF EXISTS `users_permissions`;
CREATE TABLE `users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_permissions`
--

REPLACE INTO `users_permissions` (`user_id`, `permission_id`) VALUES
(25, 34),
(25, 35),
(25, 36),
(25, 37),
(6, 37),
(6, 38),
(6, 39),
(6, 40),
(6, 41),
(6, 42),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(26, 43),
(26, 44),
(26, 45),
(26, 46),
(26, 47);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

REPLACE INTO `users_roles` (`user_id`, `role_id`) VALUES
(25, 4),
(6, 2),
(1, 1),
(26, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subunits`
--
ALTER TABLE `subunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_resources`
--
ALTER TABLE `tags_resources`
  ADD KEY `tags_resources_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_name_unique` (`name`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subunits`
--
ALTER TABLE `subunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tags_resources`
--
ALTER TABLE `tags_resources`
  ADD CONSTRAINT `tags_resources_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
