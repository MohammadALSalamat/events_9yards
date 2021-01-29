-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2021 at 11:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DataTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

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
-- Table structure for table `front_users`
--

CREATE TABLE `front_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_users`
--

INSERT INTO `front_users` (`id`, `name`, `email`, `password`, `avatar`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad', 'alomda.alslmat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'aaaaaa', 1, 1, '2020-12-28 13:03:11', '2020-12-28 13:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `Author`, `name`, `email`, `description`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad', 'Mohammad', 'alomda.alslmat@gmail.com', '<p>sasadsadsadsad</p>', '0178464650', '1', '2020-12-28 16:24:58', '2020-12-28 16:24:58'),
(3, 'Mohammad', 'aboKaesr', 'alomda.alslmat@gmail.com', '<p>New Iamge</p>', '0567655814', '1', '2021-01-01 15:53:28', '2021-01-01 15:53:28'),
(4, 'Mohammad', 'abo21', 'alomda.alslmat1@gmail.com', '<p>new try</p>', '0178464650', '1', '2021-01-01 15:53:51', '2021-01-01 15:53:51'),
(5, 'Mohammad', 'Mohammad2', 'alomda.alslmat@gmail.com', '<p>new</p>', '0178464650', '1', '2021-01-01 15:54:51', '2021-01-01 15:54:51'),
(6, 'Mohammad', 'Mohammad', 'alomda.alslmat@gmail.com', '<p>dsadas</p>', '0178464650', '1', '2021-01-01 15:58:12', '2021-01-01 15:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_25_090206_create_front_users_table', 2),
(5, '2020_09_30_132159_create_user_postes_table', 3),
(6, '2020_12_28_165339_create_front_users_table', 4),
(7, '2020_12_28_190935_create_information_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `postion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `Description`, `Phone_Number`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `postion`, `created_at`, `updated_at`) VALUES
(1, '1664282.png', 'abo21', '<p><b>Junior Web Developer specializing in front-end and back-end development. I have good</b></p><p><b>knowledge of all stages of the development cycle for dynamic web projects. Well-versed</b></p><p><b>in numerous programming languages including <font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\">{HTML5, PHP,</font></b></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\"><b>JavaScript, JQuery, CSS, Sass, Tailwind, bootstrap, Ajax, MySQL, Oracle, Veu.js, Laravel</b></font></p><p><font color=\"#000000\" style=\"background-color: rgb(255, 255, 255);\"><b>Framework, and python }</b></font></p>', '017-846-4650', '123123212@gmail.com', NULL, 'fcea920f7412b5da7be0cf42b8c93759', NULL, 1, 'superAdmin', NULL, '2021-01-01 15:48:55'),
(2, '306695.png', 'Mohammad', '', '0', 'sys44271@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Admin', '2020-09-20 10:49:41', '2020-09-21 11:42:55'),
(3, '7084131.png', 'abo12', '', '0', 'abusare201@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Markting', '2020-09-20 10:59:29', '2020-09-20 10:59:29'),
(4, 'profile_defult.jpg', 'rami', '', '0', 'sfdsfds@gmail.com', NULL, 'eyJpdiI6IldxbjRadURDQkVibyt0ank0RFpXSnc9PSIsInZhbHVlIjoiR09LNDRqY0RwdWoxQUx5UW9MV2Ixdz09IiwibWFjIjoiNDdlMDJiMTg0ODFiMzE1YjE1NTEzMGQxMjUzNDI1OGI4NTBkMjlkM2U0ZTQzYzNhNDBjNGM0YWVkNjA0MDVkNyJ9', NULL, 1, 'Markting', '2020-09-21 01:35:17', '2020-10-09 08:48:23'),
(6, 'profile_defult.jpg', 'khaled', '', '0', 'sys442711@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, 'Admin', '2020-09-21 01:40:04', '2020-09-21 01:40:04'),
(7, 'profile_defult.jpg', 'Mohammad2', '<p><b>Abo</b></p>', '123-456-7890', 'sys4427221@gmail.com', NULL, 'fcea920f7412b5da7be0cf42b8c93759', NULL, 1, 'Admin', '2020-09-21 17:28:01', '2020-09-21 17:28:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_users`
--
ALTER TABLE `front_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `front_users_email_unique` (`email`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `information_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_users`
--
ALTER TABLE `front_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
