-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 05:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_08_21_113520_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tasjone@gmail.com', '$2y$10$XikVk1qsDTOTiDrz.b0Zo.ceseSQkBgMKZaare6TWLEtfIbgfbuuO', '2020-08-22 16:37:06'),
('sohagjone@gmail.com', '$2y$10$ves6TiFvp82QvMRIs.1lRuGDazWnDSHlmxutVKhLJMjOyLygUYocy', '2020-08-24 13:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_price`, `created_at`, `updated_at`) VALUES
(19, 'Orange', '15982971291598030200orange.jpg', '15', '2020-08-24 13:25:29', '2020-08-24 13:25:29'),
(20, 'Carron', '15982971521598073745carrot.png', '25', '2020-08-24 13:25:52', '2020-08-24 13:25:52'),
(21, 'Jackfruit', '15982971751598073713jackfruit.jpg', '27', '2020-08-24 13:26:15', '2020-08-24 13:26:15'),
(22, 'Grape', '15982971841598074235grape.jpg', '52', '2020-08-24 13:26:24', '2020-08-24 13:26:24'),
(23, 'Kiwi', '15982972191598073759dragon.jpg', '45', '2020-08-24 13:26:59', '2020-08-24 13:26:59'),
(24, 'Banana', '15982972501598074203banana.jpg', '56', '2020-08-24 13:27:30', '2020-08-24 13:27:30'),
(25, 'Garlic', '15982972631598074275garlic.jpg', '85', '2020-08-24 13:27:43', '2020-08-24 13:27:43'),
(26, 'Onion', '15982972741598073686onion.jpg', '45', '2020-08-24 13:27:54', '2020-08-24 13:27:54'),
(27, 'Mango', '15982972961598074586mango.jpg', '72', '2020-08-24 13:28:16', '2020-08-24 13:28:16'),
(28, 'Potato', '159829731615981278871598074360potato.jpg', '12', '2020-08-24 13:28:36', '2020-08-24 13:28:36'),
(29, 'Dragon', '15982973301598074421kiwi.jpg', '43', '2020-08-24 13:28:50', '2020-08-24 13:28:50'),
(30, 'Pineapple', '15982973741598074670pineapple.jpg', '19', '2020-08-24 13:29:34', '2020-08-24 13:29:34'),
(31, 'Coconut', '159829739815981278541598074292coconut.jpg', '70', '2020-08-24 13:29:58', '2020-08-24 13:29:58'),
(32, 'Strawbarry', '159829742015981278711598074336strawberry.jpg', '96', '2020-08-24 13:30:20', '2020-08-24 13:30:20'),
(33, 'Tomato', '15982974521598073650tomato.jpg', '35', '2020-08-24 13:30:52', '2020-08-24 13:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun Sohag', 'sohagjone@gmail.com', '2020-08-22 19:48:50', 'bablujone1', 'bablujone1', '2020-08-22 18:00:00', '2020-08-22 18:00:00'),
(2, 'Md Al Mamun Sohag', 'tasjone@gmail.com', NULL, '$2y$10$gY/wfDSuEWB.jsnDjjAzAuye.1SimSdLYyleXQyXMTX6yASrQMgqC', NULL, '2020-08-22 15:24:15', '2020-08-22 15:24:15'),
(3, 'Jannatul Al Oredhi', 'oredhi@email.com', NULL, '$2y$10$YPeEPbPAIuFadJJnwz7s0uLNB1W.Z2Y002ZOB9atpsWn5rFDoLqSe', NULL, '2020-08-22 16:43:24', '2020-08-22 16:43:24'),
(4, 'Fatema Khatun', 'alpona@email.com', NULL, '$2y$10$UdheDDlRhO10wC8LUiY86.O32QhOCaPqRuh1hD9sQ1aJaABPALmVW', NULL, '2020-08-22 16:45:33', '2020-08-22 16:45:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
