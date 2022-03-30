-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domybiding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user type',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` double DEFAULT NULL,
  `about_yourself` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` double NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activities_and_Interests` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_public` int(11) NOT NULL DEFAULT 0 COMMENT '0=hide,1=show',
  `dob` date DEFAULT NULL,
  `dob_public` int(11) NOT NULL DEFAULT 0 COMMENT '0=hide,1=show',
  `Details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Statistics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=inactive,1=active',
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_postcode_unique` (`postcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `phone_number`, `about_yourself`, `country`, `city`, `state`, `postcode`, `address`, `Activities_and_Interests`, `website_url`, `gender`, `gender_public`, `dob`, `dob_public`, `Details`, `Statistics`, `status`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Jane Wintheiser', NULL, 'brekke.verda@example.net', '2022-03-24 00:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 8452108684, 'Suscipit mollitia veritatis reiciendis optio nihil. Quaerat distinctio mollitia ut est sit neque qui. Facere dolores qui sit quibusdam quo nulla et. Et sint corrupti aut.', 'Rwanda', 'Mireya Parkway', NULL, 4369633278, '277 Justine Port Suite 200\nNew Laurettamouth, PA 29304', 'Autem enim vel quam. Quasi corrupti est quis minus velit aspernatur provident. Maxime voluptas consequatur amet aperiam sunt ipsum ex qui.', NULL, 'male', 0, '2012-03-02', 0, 'Veniam accusamus sapiente molestiae omnis odit. Velit aut nam ut sequi assumenda odit iste voluptate.', NULL, 0, 'd518ea8c7161ca4903f31d2dd9fa6ec8.png', '2022-03-24 00:00:34', '2022-03-24 00:00:34'),
(2, 'Isac Sauer', NULL, 'trudie53@example.org', '2022-03-24 00:00:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2921343319, 'Eligendi voluptates est aut non sapiente reiciendis aliquid. Culpa laboriosam in quia provident fuga consequuntur. Fugiat accusamus id perspiciatis ut. Pariatur aperiam quibusdam temporibus ullam est.', 'Kyrgyz Republic', 'Daryl Vista', NULL, 5120401560, '980 Jaylon Forks\nPowlowskiland, WI 57991', 'Qui sint quam ad. Excepturi ut dolor laudantium omnis excepturi voluptatem. Ipsum deserunt distinctio qui sit.', NULL, 'female', 0, '1993-05-02', 0, 'Doloremque ut cumque deleniti facilis dolorem. Nesciunt nihil ad blanditiis voluptatibus assumenda. Ipsum praesentium pariatur vel dolore.', NULL, 0, '9e96f1fdce58032e95167660a94aafb3.png', '2022-03-24 00:00:34', '2022-03-24 00:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_category_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum_images_allowed` int(11) DEFAULT NULL,
  `post_validity_interval_in_days` int(11) DEFAULT NULL,
  `category_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_category_id`, `category_name`, `maximum_images_allowed`, `post_validity_interval_in_days`, `category_slug_en`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, NULL, 'free personal', 11, NULL, 'free-personal', NULL, '2022-03-28 06:25:52', '2022-03-28 07:34:43'),
(2, NULL, 'Buy and sell', 10, NULL, 'buy-and-sell', NULL, '2022-03-28 06:40:24', '2022-03-28 07:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_banners`
--

CREATE TABLE IF NOT EXISTS `front_banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_banners`
--

INSERT INTO `front_banners` (`id`, `banner`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'upload/banner/1728524524443014.jpg', NULL, '2022-03-28 01:07:24', '2022-03-28 01:07:24'),
(2, 'upload/banner/1728525608353479.jpg', '2022-03-28 02:26:25', '2022-03-28 01:24:38', '2022-03-28 02:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_17_053806_create_admins_table', 1),
(6, '2022_03_25_112251_create_sitelogos_table', 2),
(7, '2022_03_25_130205_create_front_banners_table', 3),
(8, '2022_03_28_094245_create_categories_table', 4),
(9, '2022_03_28_123526_create_sub_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sitelogos`
--

CREATE TABLE IF NOT EXISTS `sitelogos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitelogos`
--

INSERT INTO `sitelogos` (`id`, `admin_id`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 'upload/sitelogo/1728274678612453.png', NULL, '2022-03-25 06:55:15', '2022-03-25 06:56:12'),
(5, 1, 'upload/sitelogo/1728530654497999.png', '2022-03-28 02:44:55', '2022-03-28 02:44:50', '2022-03-28 02:44:55'),
(6, 1, 'upload/sitelogo/1728530710331766.png', '2022-03-28 02:45:46', '2022-03-28 02:45:43', '2022-03-28 02:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user type',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` double DEFAULT NULL,
  `about_yourself` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` double NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activities_and_Interests` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_public` int(11) NOT NULL DEFAULT 0 COMMENT '0=hide,1=show',
  `dob` date DEFAULT NULL,
  `dob_public` int(11) NOT NULL DEFAULT 0 COMMENT '0=hide,1=show',
  `Details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Statistics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=inactive,1=active',
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_postcode_unique` (`postcode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `email_verified_at`, `password`, `phone_number`, `about_yourself`, `country`, `city`, `state`, `postcode`, `address`, `Activities_and_Interests`, `website_url`, `gender`, `gender_public`, `dob`, `dob_public`, `Details`, `Statistics`, `status`, `profile_photo_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Dexter Kihn', NULL, 'ashly63@example.org', '2022-03-24 00:00:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 3109160422, 'Vel debitis ex aliquam enim saepe. Occaecati provident at consequatur possimus inventore r', 'Pakistan', 'Brendon Parkway', NULL, 2706788827, '5424 D\'Amore Fall\r\nThaddeuschester, SC 60867', 'Dolorum iusto autem et est et qui et. Laudantium et rem accusantium quia eaque vel a', NULL, 'female', 0, '2012-05-17', 0, 'Aut pariatur sed asperiores reiciendis optio. Reprehenderit iusto praesentium unde autem a corrupti omnis culpa. Laboriosam dolorem voluptatem et.', NULL, 0, 'upload/users_profile/1728251759113761.jpg', 'nzG86kSijjgElxvJMwdR3JOLADi1Do3bA3TWYxZC8fS5Iov000cTqpOAY8gf', '2022-03-24 00:00:54', '2022-03-25 00:51:55'),
(3, 'Marcia Muller', NULL, 'jaleel98@example.net', '2022-03-24 00:00:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2809264196, 'Fugiat nam veritatis expedita et eaque. Ea qui consectetur fugiat molestias deleniti et id. Aperiam', 'Saint Pierre and Miquelon', 'Audie Lodge', NULL, 6589614896, '44387 Christop Inlet Suite 441\r\nMertzburgh, ID 00319-9151', 'Praesentium quis accusantium qui ut praesentium ut. Aut placeat eum iure reiciendis.', NULL, 'female', 1, '2004-03-18', 0, 'Officiis alias eveniet dolorem fuga. Molestiae autem nobis reprehenderit adipisci impedit. Modi deleniti perferendis labore mollitia facilis dolor in.', NULL, 0, 'upload/users_profile/1728249641503600.png', 'TjCUhl0F44', '2022-03-24 00:00:54', '2022-03-25 00:18:15'),
(5, 'Gerda Schulist', NULL, 'mariane18@example.org', '2022-03-24 00:00:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 4620784639, 'Dolore consequuntur sed rem porro. Vero nam incidunt earum delectus.', 'Ghana', 'Osinski Roads', NULL, 489286070, '4402 Gutmann Ranch Suite 112\r\nNorth Reanna,', 'Explicabo quas ut veniam fugit dolore. Omnis a distinctio pariatur.', NULL, 'female', 1, '1992-12-04', 0, 'Nobis iusto dolorem sunt eos. Commodi aperiam ut sint totam ut. Ullam nesciunt reiciendis modi. Eos odio facilis et tempora. Sunt quam quibusdam eaque eum quas id.', NULL, 0, 'upload/users_profile/1728249621013724.png', 'KIMGD2M0sb', '2022-03-24 00:00:54', '2022-03-25 00:17:56'),
(6, 'Bryana Glover', NULL, 'francesco.rau@example.org', '2022-03-24 08:00:38', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 7892967455, 'Quis beatae ut illum et et est. Eum id et nam molestiae. Vel perspiciatis maxime veritatis quia et. Tempore eveniet consequatur eos nostrum.', 'Solomon Islands', 'Gottlieb Cliffs', NULL, 674450531, '71969 Mayert Shoal\r\nVictormouth,', 'Et dolore et quidem quis esse rerum. Sed corporis voluptatem autem est nesciunt eligendi quae. Eaque inventore recusandae velit facilis corrupti numquam nisi.', NULL, 'female', 0, '2012-10-10', 0, 'Voluptatibus amet itaque reiciendis repudiandae officia omnis. Voluptatibus blanditiis ut sed molestias eveniet est vero. Error saepe qui debitis voluptates.', NULL, 0, 'upload/users_profile/1728251295882031.jpg', 'fkwbWMlMHM', '2022-03-24 08:00:43', '2022-03-25 00:44:33'),
(9, 'Merl Casper', NULL, 'heaney.manley@example.net', '2022-03-24 08:00:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 2456138235, 'Sit numquam nihil autem non explicabo. Corporis aperiam natus et quisquam aut a aliquid. Adipisci maxime explicabo ipsam error hic in consectetur. Necessitatibus pariatur sit itaque voluptatem fugit.', 'South Georgia and the South Sandwich Islands', 'Senger Ramp', NULL, 5182985939, '45821 Isobel Ramp Apt. 817\r\nNew Verdie, FL 97091', 'Maxime enim voluptate labore. Exercitationem ad saepe autem tenetur quod sit.', NULL, 'male', 0, '2000-02-03', 0, 'Quod ipsum earum quia est dolor. Ut dolor quod architecto natus dolorem ipsum numquam. Culpa illum ipsum nemo veritatis.', NULL, 0, 'upload/users_profile/1728250015453985.png', '00X3yOv6b4', '2022-03-24 08:00:43', '2022-03-28 01:09:07'),
(10, 'Leanna Lueilwitz', NULL, 'katharina.adams@example.com', '2022-03-24 08:00:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 9401616660, 'Eum ducimus rerum sed nobis ipsam reprehenderit est. Quae sapiente perspiciatis eius dolores illo inventore. Omnis quia consectetur necessitatibus consequatur unde.', 'American Samoa', 'Nikki Gateway', NULL, 2089466043, '5675 Marvin Lane Apt. 311\r\nSouth Theodorefort, AK 06927', 'Deleniti et ut numquam repellat accusamus et qui ad. Non praesentium magni illo exercitationem et tempore in. Et architecto aliquid pariatur at in aut. Quis ut occaecati molestias.', NULL, 'male', 0, '2012-08-24', 0, 'Laborum reiciendis exercitationem ea ut beatae qui. Fugit at animi nesciunt est quae porro tempore. Perferendis aut corporis rerum voluptatibus.', NULL, 0, 'upload/users_profile/1728249629432682.png', 'wTG0Y5gSf0', '2022-03-24 08:00:43', '2022-03-25 00:18:04'),
(12, 'Dr. Garett Mitchell IV', NULL, 'miller45@example.org', '2022-03-24 08:00:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 6735613953, 'Delectus dolores fugit et earum dicta nostrum. Nam ab distinctio in quam. Nostrum est velit consequuntur tenetur et omnis molestiae.', 'Guatemala', 'Walter Loop', NULL, 778337235, '331 Hollie Mountain Apt. 950\r\nPort Don, MA 51819-7435', 'Eveniet et quibusdam error consequatur ipsa. Eius sint qui sed iusto consectetur eveniet quidem ab. Cum iste beatae non quas aperiam odio ab.', NULL, 'female', 0, '1993-03-20', 0, 'Quam non aut impedit qui error aliquam ipsa. Repellat sunt quisquam dolores sit sed maxime. Illo illum officia laboriosam consectetur animi fuga quasi.', NULL, 0, 'upload/users_profile/1728250044143731.png', 'W3m7XXOWqm', '2022-03-24 08:00:43', '2022-03-25 00:24:39'),
(13, 'Dr. Antone Hayes II', NULL, 'hgoodwin@example.org', '2022-03-24 08:00:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 7756331632, 'Odio accusamus ducimus corporis voluptatem possimus nesciunt. In fuga in qui autem ad voluptatibus in. Sunt dolorem eum asperiores rerum culpa. Minima laborum accusantium voluptatem quis pariatur culpa et.', 'United States Minor Outlying Islands', 'Kylie Isle', NULL, 9890354298, '31586 Reynolds Harbors\r\nAlyssonfort, AK 56529', 'Quia sequi non qui nulla et et voluptatem. Adipisci blanditiis omnis excepturi architecto et iure.', NULL, 'female', 0, '2006-04-29', 0, 'Amet odit ipsa ipsam illum. Rerum sed et qui nulla earum aspernatur ipsam consequatur. Itaque molestias numquam quia distinctio odio.', NULL, 0, 'upload/users_profile/1728251406674203.jpg', 'stv64q2W24', '2022-03-24 08:00:43', '2022-03-28 01:18:17'),
(16, 'john', NULL, 'john@hotmail.com', NULL, '$2y$10$P45bRCyQJvkRxj3WM1zhFO8oC32cpNnyj8ajmVirL6JjzSRt34H6C', 984548878, NULL, 'USA', NULL, NULL, 78787, 'Adarsh nagar', NULL, NULL, 'male', 0, '2022-03-08', 0, NULL, NULL, 0, 'upload/users_profile/1728257534741355.png', NULL, '2022-03-25 02:17:29', '2022-03-25 02:23:43'),
(17, 'Aric', NULL, 'Aric@gmail.com', NULL, '$2y$10$9gQ3mGq4AwG5I5XaUsm.WOCUYQT3bhkPsQponmCh1lmwUtYcK6I8a', 7878845, NULL, 'USA', NULL, NULL, 787897, 'japan', NULL, NULL, 'male', 0, '2022-03-17', 0, NULL, NULL, 0, 'upload/users_profile/1728265282965635.jpg', NULL, '2022-03-25 02:37:39', '2022-03-28 01:08:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
