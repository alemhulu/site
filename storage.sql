-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 07:52 AM
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
(28, 'Business', 7, '2020-12-24 13:13:19', '2020-12-24 13:13:19');

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
(3, 'Video', '2020-10-09 11:41:26', '2020-10-09 11:41:26'),
(4, 'Health', '2020-12-22 20:18:56', '2020-12-22 20:18:56');

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
(8, 66, 'dfsdf', 'TRUE', 'FALSE', NULL, NULL, 'False', 'dfsd', 0, '2021-01-27 03:51:21', '2021-01-27 03:51:21');

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
(37, 7, NULL, 'Biology Grade 11 and 12 Syllabus.', 'Grade 11', '/storage/Biology - Syllabus - Grade 11.JPG', '/storage/Biology - Syllabus - Grade 11.pdf', 3, 1, NULL, NULL, 1, 2, NULL, NULL, 23, 32, 0, 0, '0', '2020-10-21 08:50:34', '2020-12-23 17:18:47', 1, 0),
(38, 7, NULL, 'Chemistry Syllabus', 'Grade 11, Chemistry', '/storage/thumbnails/Chemistry - Syllabus - Grade 11.JPG', '/storage/Chemistry - Syllabus - Grade 11.pdf', 3, 2, NULL, NULL, 1, 2, NULL, NULL, 18, 85, 0, 0, '0', '2020-10-21 08:53:07', '2020-12-23 17:19:32', 1, 0),
(39, 7, NULL, 'Business - Syllabus Grade 11', 'General Business', '/storage/thumbnails/General Business - Syllabus Grade 11.JPG', '/storage/General Business - Syllabus Grade 11.pdf', 3, 12, NULL, NULL, 1, 2, NULL, NULL, 37, 63, 0, 0, '0', '2020-10-21 08:54:31', '2021-01-10 12:42:14', 1, 0),
(41, 7, NULL, 'Text Book', 'Grade 11', '/storage/thumbnails/ebook.png', '/storage/Chemistry G-11.pdf', 3, 2, NULL, NULL, 2, 2, NULL, NULL, 14, 70, 4, 1, NULL, '2020-10-21 08:59:03', '2021-01-10 12:32:42', 1, 0),
(42, 7, NULL, 'TextBook', 'Economics', '/storage/thumbnails/Economics G-11.JPG', '/storage/Economics G-11.pdf', 3, 5, NULL, NULL, 2, 2, NULL, NULL, 17, 91, 25, 2, '2', '2020-10-21 09:01:18', '2021-01-10 12:32:06', 1, 0),
(43, 1, NULL, 'Labster Biology Virtual Labs', 'Biology', '/storage/thumbnails/Biology Thumbnail.jpg', '/storage/Labster Biology Virtual Labs.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 102, 10, 2, 0, '0', '2020-10-21 10:33:42', '2020-12-24 08:15:20', 1, 0),
(44, 1, NULL, 'Learn Science Smarter – Acids and Bases – Labster', 'Acid and Base', '/storage/thumbnails/Acid and Base.jpg', '/storage/Learn Science Smarter – Acids and Bases – Labster.mp4', NULL, 8, NULL, NULL, 6, 3, NULL, NULL, 13, 21, 0, 0, '0', '2020-10-21 10:35:05', '2020-11-11 11:45:41', 1, 0),
(45, 1, NULL, 'Learn Science Smarter – Regeneration Biology – Labster', 'Biology', '/storage/thumbnails/Regeneration Biology.jpg', '/storage/Learn Science Smarter – Regeneration Biology – Labster.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 26, 20, 0, 0, '25', '2020-10-21 10:36:09', '2020-11-13 05:55:01', 1, 0),
(46, 1, NULL, 'Labster Organic Chemistry Simulations', 'Biology', '/storage/thumbnails/Regeneration Biology.jpg', '/storage/Labster Organic Chemistry Simulations.mp4', NULL, 15, NULL, NULL, 6, 3, NULL, NULL, 26, 27, 24, 1, '20', '2020-10-21 10:37:34', '2020-11-12 06:21:53', 1, 0),
(47, 1, NULL, 'Biology-Unit 1-Lesson 23Biology and HIV_AIDS', 'Biology', '/storage/thumbnails/biology.jpg', '/storage/GD 11 biology -Unit 1-Lesson 23Biology and HIV_AIDS.mp4', 3, 1, 1, 1, 4, 3, NULL, NULL, 14, 8, 126, 1, '22', '2020-10-21 10:40:41', '2020-12-29 09:09:50', 1, 0),
(48, 1, NULL, 'Biology -Unit 4-Lesson 20other structure of cell', 'Biology', '/storage/thumbnails/biology.jpg', '/storage/GD 11 biology -Unit 4-Lesson 20other structure of cell.mp4', 3, 1, 7, 7, 4, 3, NULL, NULL, 5, 11, 2, 0, '0', '2020-10-21 10:44:05', '2020-11-09 13:03:54', 1, 0),
(49, 7, NULL, 'Ethiopia  GD 11- Math-Unit 11-Lesson 1 BasicMathematical Concepts in Business', 'Mathematics', '/storage/thumbnails/Mathematics.jpg', '/storage/Ethiopia  GD 11- Math-Unit 11-Lesson 1 BasicMathematical Concepts in Business.mp4', 3, 14, 8, 8, 4, 3, NULL, NULL, 17, 13, 45, 5, '25', '2020-10-21 10:46:51', '2020-11-11 07:39:59', 1, 0),
(50, 7, NULL, 'GD 11-Math-Unit 7-Lesson 5 Operationon Complex Numbers Part 2', 'Mathematics', '/storage/thumbnails/Mathematics.jpg', '/storage/GD 11- Math-Unit 7-Lesson 5 Operationon Complex Numbers Part 2.mp4', 3, 14, 9, 9, 4, 3, NULL, NULL, 7, 30, 1, 1, '20', '2020-10-21 10:49:17', '2020-11-10 13:15:59', 1, 0),
(51, 7, NULL, 'GD 12 chemistry -Unit 4-Lesson 1_Oxidation and Reduction', 'Chemistry', '/storage/thumbnails/chemistry.jpg', '/storage/GD 12 chemistry -Unit 4-Lesson 1_Oxidation and Reduction.mp4', 3, 2, 10, 10, 4, 3, NULL, NULL, 29, 41, 2, 2, '30', '2020-10-21 10:51:27', '2020-11-11 09:17:48', 1, 0),
(52, 7, NULL, 'STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume', 'stempower', '/storage/thumbnails/STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume.jpg', '/storage/STEMpower Ethiopia, Episode 61- Rahmet Mohamed- Former STEM Center student innovating perfume.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 5, 0, 14, 2, '3', '2020-10-21 11:25:39', '2020-10-21 11:25:39', 1, 1),
(53, 7, NULL, 'STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder', 'Stempower', '/storage/thumbnails/STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder.jpg', '/storage/STEMpower Ethiopia, Episode 62_ Impacts of STEM education in Gonder.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 12, 8, 14, 2, '12', '2020-10-21 11:30:23', '2020-11-11 05:27:00', 1, 1),
(54, 7, NULL, 'STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians', 'StemPower', '/storage/thumbnails/STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians.jpg', '/storage/STEMpower Ethiopia, Episode 63_ Amazing Life Easing innovations by Young Ethiopians.mp4', NULL, 16, NULL, NULL, 7, 3, NULL, NULL, 21, 8, 2, 0, '20', '2020-10-21 11:33:13', '2020-11-11 05:33:09', 1, 1),
(55, 7, NULL, 'STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS', 'StemPower', 'storage/thumbnails/STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS.jpg', 'storage/STEMpower Ethiopia, Episode 64_ 3D Animation projects by STEMpower students at EAS.mp4', NULL, 15, NULL, NULL, 7, 3, NULL, NULL, 15, 20, 10, 1, '11', '2020-10-21 11:35:07', '2020-11-12 08:41:12', 1, 1),
(56, 7, NULL, 'STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder', 'StemPower', '/storage/thumbnails/STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder.jpg', '/storage/STEMpower Ethiopia, Episode 65_ Hamza Hamid_ The Game Changer STEM Center Student from Gonder.mp4', NULL, 15, NULL, NULL, 7, 3, NULL, NULL, 115, 12, 111, 1, '103', '2020-10-21 11:37:58', '2020-12-24 10:10:30', 1, 1),
(57, 1, NULL, 'Grade 11', 'General Business', '/storage/thumbnails/General Busines_G11.JPG', '/storage/General Busines_G11.pdf', 3, 12, NULL, NULL, 2, 2, NULL, NULL, 67, 172, 3, 0, NULL, '2020-10-22 05:26:50', '2021-01-22 05:30:05', 1, 0),
(65, 7, NULL, '[Grade 12 Revision] Cell Biology', 'Biology', '/storage/thumbnails/cell biology.JPG', '/storage/[Grade 12 Revision] Cell Biology.mp4', 5, 20, 13, NULL, 4, 3, NULL, 0, 5, 5, 0, 0, NULL, '2020-11-11 08:57:48', '2020-12-28 06:10:50', 1, 0),
(66, 7, NULL, '[Grade 12 Revision] Coordinate Geometry', 'Geometry', '/storage/thumbnails/coordinate geometry.JPG', '/storage/[Grade 12 Revision] Coordinate Geometry.mp4', 5, 21, NULL, NULL, 4, 3, NULL, 0, 10, 12, 0, 0, NULL, '2020-11-11 09:03:02', '2020-12-24 10:18:09', 1, 0),
(67, 7, NULL, '[Grade 12 Revision] Energy transformation  and cellular respiration', 'Grade 12', '/storage/thumbnails/Energy transformation and cellular.JPG', '/storage/[Grade 12 Revision] Energy transformation  and cellular respiration.mp4', 5, 20, NULL, NULL, 4, 3, NULL, 0, 8, 7, 4, 0, NULL, '2020-11-11 09:08:28', '2020-12-29 04:36:24', 1, 0),
(68, 7, NULL, '[GRADE-12 REVISION] Discovery of nucleus', 'Nucleus', '/storage/thumbnails/Discovery of Nucleus.JPG', '/storage/[GRADE-12 REVISION] Discovery of nucleus.mp4', 5, 22, NULL, NULL, 4, 3, NULL, 0, 5, 7, 2, 2, NULL, '2020-11-11 09:11:24', '2021-01-21 05:17:00', 1, 0),
(69, 1, NULL, 'Syllabus - Grade 11', 'Grade 11 ', '/storage/thumbnails/ICT - Syllabus - Grade 11.JPG', '/storage/ICT - Syllabus - Grade 11.pdf', 3, 13, NULL, NULL, 1, 2, NULL, 0, 2, 54, 0, 0, NULL, '2020-11-11 09:14:34', '2020-12-23 17:19:16', 1, 0),
(70, 25, NULL, 'Grade 11 Text Book', 'ICT', '/storage/thumbnails/ICT_G11.JPG', '/storage/ICT_G11.pdf', 3, 13, NULL, NULL, 2, 2, NULL, 0, 1, 204, 1, 0, NULL, '2020-11-11 09:16:39', '2021-01-21 07:54:01', 1, 0),
(71, 26, NULL, 'PHP Front To Back', NULL, '/storage/thumbnails/phpimage.jpg', '/storage/PHP Front To Back', NULL, 23, NULL, NULL, 8, 3, NULL, 0, 0, 0, 0, 0, NULL, '2020-12-22 20:14:08', '2020-12-22 20:14:08', 1, 1),
(72, 25, NULL, 'JavaScript Crash Course For Beginners', NULL, '/storage/thumbnails/javaScript.png', '/storage/JavaScript Crash Course For Beginners', NULL, 24, NULL, NULL, 8, 3, NULL, 0, 0, 0, 0, 0, NULL, '2020-12-22 20:16:34', '2020-12-22 20:16:34', 1, 1),
(73, 25, NULL, 'Python Crash Course For Beginners', NULL, '/storage/thumbnails/python.jpg', '/storage/Python Crash Course For Beginners', NULL, 25, NULL, NULL, 8, 3, NULL, 0, 0, 0, 0, 0, NULL, '2020-12-22 20:18:20', '2020-12-22 20:18:20', 1, 1),
(74, 26, NULL, 'Blood pressure measurement', NULL, '/storage/thumbnails/blood.jpg', '/storage/Blood pressure measurement', NULL, 26, NULL, NULL, 9, 3, NULL, 0, 0, 0, 0, 0, NULL, '2020-12-22 20:24:16', '2020-12-22 20:24:16', 1, 1);

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
(1, 'Syllabus', '2020-10-09 11:39:50', '2020-10-09 11:39:50'),
(2, 'Text Book', '2020-10-07 11:40:02', '2020-10-09 11:40:02'),
(3, 'Reference Book', '2020-10-09 11:40:08', '2020-10-09 11:40:08'),
(4, 'Lecture Video', '2020-10-08 11:40:14', '2020-10-09 11:40:14'),
(6, 'Simulated Laboratory', '2020-10-09 11:40:43', '2020-10-09 11:40:43'),
(7, 'Stem Power', '2020-10-09 11:40:57', '2020-10-09 11:40:57'),
(8, 'Software programming', '2020-12-22 20:13:24', '2020-12-22 20:13:24'),
(9, 'Health', '2020-12-22 20:19:17', '2020-12-22 20:19:17'),
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
(1, 'Admin', 'User', 'we', 'test@moe.gov.et', 'a', 'bole', 3, 4, 'male', '0912345676', 'Addis Ababa', 'arada', 3, 2, NULL, '$2y$10$nS8Kczp3JgyE6PmLgt5t5u6tmmsYFKe4Y1tUdi9qboz/fyUkXMk.6', NULL, NULL, '1RenCZ0DXO2ThH81JnNoEb90gdwbzk8MLl9YvNMihKdzyvqraOCddJWqFpGr', NULL, 'profile-photos/ivl12Z0tkfSq3dykBSBYu5kWUm65rWaP3CK4oHJA.jpeg', '2020-10-09 11:37:21', '2021-01-22 08:45:20'),
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
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
