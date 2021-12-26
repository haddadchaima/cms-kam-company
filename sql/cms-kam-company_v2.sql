-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2021 at 01:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-kam-company`
--

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

DROP TABLE IF EXISTS `components`;
CREATE TABLE IF NOT EXISTS `components` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_html` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_css` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_js` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `class`, `code_html`, `code_css`, `code_js`, `created_at`, `updated_at`) VALUES
(179, NULL, '<ul>  <li><a href=\"#\">Home</a></li>  <li><a href=\"#\">News</a></li>  <li><a href=\"#\">Contact</a></li>  <li><a href=\"#\">About</a></li></ul>', 'ul {  list-style-type: none;  margin: 0;  padding: 0;}', NULL, '2021-03-16 11:22:51', '2021-03-16 11:22:51'),
(177, NULL, '<button class=\"btn-2\">Click here</button>', '.btn-2{background-color: blue;color:#fff;border-radius: 25px;border: 1px solid blue;}', NULL, '2021-03-10 07:48:50', '2021-03-10 07:48:50'),
(178, NULL, '<button>click herre !!!</button>', 'button{color:red}', NULL, '2021-03-16 09:05:52', '2021-03-16 09:05:52'),
(176, NULL, '', '', NULL, '2021-03-10 06:50:11', '2021-03-10 06:50:11'),
(175, NULL, '<p>loading .. </p>', '', NULL, '2021-03-09 14:37:29', '2021-03-09 14:37:29'),
(173, NULL, '<h1>hello<h1>', '', NULL, '2021-03-09 14:24:10', '2021-03-09 14:24:10'),
(174, NULL, '<input type=\"checkbox\" class=\"chk\"><label>  <span class=\"custom-checkbox\"></span> checkbox</label>', '.chk{box-shadow: 0 0 0 3px hotpink;}', NULL, '2021-03-09 14:29:50', '2021-03-09 14:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_media` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_media` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_media` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `md5_media` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name_media`, `size_media`, `type_media`, `md5_media`, `created_at`, `updated_at`) VALUES
(96, 'public/9vMjRcdWCyr6xgitoaRdWvau2rNTGGQeDv5xOEKg.jpg', '205895', 'image/jpeg', 'b6cc4e162077a9db65dda2c435f395fd', '2021-03-16 09:03:37', '2021-03-16 09:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_08_000000_create_components_table', 1),
(4, '2021_03_10_095740_create_media_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` int(100) NOT NULL,
  `dashboard` int(50) NOT NULL,
  `month_number` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=389 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `role`, `birthday`, `gender`, `firstname`, `lastname`, `image`, `country`, `city`, `tel`, `mobile`, `address`, `postcode`, `email`, `email_verified_at`, `password`, `remember_token`, `block_description`, `year`, `header`, `sidebar`, `body`, `languages`, `dashboard`, `month_number`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '2020-12-11', '1', 'Aymen  bbb', 'Aboudi', '1613319007.png', '4', 'Tunisie', '20174595', '20174595', '49 rue ubn zaj soukra', 2087, 'admin@gmail.com', '2020-12-22 12:23:48', '$2y$10$X4JiiW.HWjcyIlVoNkl9Pu6ahk/N8BuNQeuKU4ar0LXQkJEEN501K', NULL, 'Description', '2020', 'bg-secondary header-text-light', 'bg-light sidebar-text-dark', 'bg-light-b body-text-light', 10, 1, '012020', '2021-02-16 08:22:15', '2021-02-16 08:22:15'),
(2, '1', '0', '2020-12-30', '1', 'Aymen User', 'User', '1608634110.png', '4', 'Ariana', '0', '0', '0', 0, 'user@gmail.com', '2020-12-22 12:23:48', '$2y$10$QcaXOsV/TNDNVYSy62vzZ.ZkWz/gyJRL7RtYrOtOuSGgcOUTgVKrm', NULL, 'Description', '2020', '', '', '', 0, 0, '122020', '2021-02-09 15:20:22', '2021-02-09 15:20:22'),
(361, '1', '0', '2020-12-25', '1', 'Test', 'User', '1608737842.png', '4', 'Tunisie', '20174595', '20174595', '30 Rue de l\'artisanat', 2087222, 'user22@gmail.com', '2020-12-23 13:39:37', '$2y$10$N3S671W8poNcJpq86Zm6.e5DeHrfnuFIKSC85yGVg2oVFeNsBaqSe', NULL, 'Description', '2020', '', '', '', 0, 0, '122020', '2021-02-09 15:20:25', '2021-02-09 15:20:25'),
(362, '1', '0', '2020-12-26', '1', 'test 2', 'Aboudi', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '4', '0', '0', '0', '0', 0, 'aymenaboudi40000000000000@gmail.com', '2020-12-25 09:39:31', '$2y$10$RHom.Lw0VUjmcEV3V4RgounI/7b7EvT.echmmKmU1a65CaH8KX02m', NULL, 'Description', '2020', '', '', '', 0, 0, '122020', '2021-02-09 15:20:27', '2021-02-09 15:20:27'),
(372, '1', '0', '2020-12-24', '1', 'new test', 'user', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', '0', '0', '0', '0', 0, 'aymenaboudi88@gmail.com', '2020-12-28 08:54:43', '123456', NULL, 'Description', '2020', '', '', '', 0, 0, '122020', '2021-02-09 15:20:30', '2021-02-09 15:20:30'),
(373, '1', '0', '2020-12-31', '1', 't1', 't2', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', '0', '0', '0', '0', 0, 'aymenaboudi40000@gmail.com', '2020-12-28 09:47:27', '123456', NULL, 'Description', '2020', '', '', '', 0, 0, '122020', '2021-02-09 15:20:32', '2021-02-09 15:20:32'),
(383, '1', '0', '2021-01-17', '1', 'Hello', 'test', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', '0', '0', '0', '0', 0, 'hello@gmail.com', '2021-01-16 13:09:10', '123456', NULL, 'Description', '2021', '', '', '', 0, 0, '012021', '2021-02-09 15:20:34', '2021-02-09 15:20:34'),
(380, '1', '1', '2021-01-17', '1', 'AYMEN', 'ABOUDI', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', 'Ariana', '20174595', '20174595', '49 RUE SOKRA, 49 RUE SOKRA2', 2037, 'aymenaboudi4@gmail.com', '2021-01-16 11:46:30', '123456789', NULL, 'Description', '2021', '', '', '', 0, 0, '012021', '2021-02-09 15:20:37', '2021-02-09 15:20:37'),
(385, '1', '1', '2021-01-03', '1', 'hello', 'test', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', 'Ariana', '20174595', '20174595', '49 RUE SOKRA, 49 RUE SOKRA2', 2037, 'admin22@gmail.com', '2021-01-16 14:03:47', '$2y$10$WSgJGKeLSPhBM7AHF5FS.OAQtiAmJPYuPvLytkjdzM8K8ZK.WSxce', NULL, 'Description', '2021', '', '', '', 0, 0, '012021', '2021-02-09 15:20:39', '2021-02-09 15:20:39'),
(386, '1', '1', '2021-01-08', '1', 'Aymen 99', 'Aboudi 99', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', 'ARIANA', '20174595', '020174595', '49 rue ubn zaj soukra', 2087, 'aymenaboudi77777@gmail.com', '2021-01-19 15:42:47', '$2y$10$dJ8Hq4iXYkfasJGICgl0aOI0I1eltSd8mhsfdbgs/Yqmp3p0sLdn2', NULL, 'Description', '2021', '', '', '', 0, 0, '012021', '2021-02-09 15:20:41', '2021-02-09 15:20:41'),
(387, '1', '3', '2021-01-20', '1', 'Admin', 'View', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '5', 'ARIANA', '20174595', '20174595', '49 rue ubn zaj soukra', 2087, 'admin_view@gmail.com', '2021-01-26 11:19:55', '$2y$10$1rxX.hGIqoMQ/SHNm2pvm.BxSdRvjen4UD.2T4aL/NoK7xbTW9552', NULL, 'Description', '2021', '', '', '', 0, 0, '012021', '2021-02-11 08:46:09', '2021-02-11 07:46:09'),
(388, '1', '1', '2021-02-11', '1', 'admin99', 'TEST', '0c3b3adb1a7530892e55ef36d3be6cb8.png', 'Allemagne', 'ARIANA', '020174595', '20174595', '49 rue ubn zaj soukra', 2087, 'admin_test_view@gmail.com', '2021-02-11 12:10:55', '$2y$10$KNqhXz3uypWzqiwZbQuHNOa1oylse85WdpD7ouJ1yy4iX1dysTvlG', NULL, 'Description', '2021', '0', '0', '0', 11, 0, '022021', '2021-02-11 10:10:55', '2021-02-11 10:10:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
