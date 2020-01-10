-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2020 at 09:18 AM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$BAn1YjcjnW1z.pRr.oFiKOzRSjatBKmjKob26LFhiLclKyjt1YPSC', 0, NULL, '2020-01-06 11:30:05', '2020-01-06 11:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_editor` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `is_editor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'customer@gmail.com', '$2y$10$w2e2J04Z0M4a2weXr26zheKOew1YnngFd58mjMUlbpj/pwj2CeuSq', 0, NULL, '2020-01-06 11:30:29', '2020-01-06 11:30:29');

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27, '2020_01_06_041134_create_table_numbers_table', 2),
(28, '2014_10_12_000000_create_users_table', 3),
(29, '2014_10_12_100000_create_password_resets_table', 3),
(30, '2019_08_19_000000_create_failed_jobs_table', 3),
(31, '2019_12_26_084109_create_table_admins', 3),
(32, '2019_12_26_084337_create_table_customers', 3),
(33, '2019_12_28_045144_create_pizzas_table', 3),
(34, '2020_01_01_115612_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_no` bigint(20) NOT NULL,
  `size` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `pizza_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `table_no`, `size`, `number`, `total_price`, `pizza_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'small', 2, 9000, 2, '2020-01-06 11:38:24', '2020-01-06 11:38:24'),
(2, 4, 'small', 3, 13500, 3, '2020-01-06 11:38:43', '2020-01-06 11:38:43'),
(3, 10, 'small', 3, 10500, 5, '2020-01-06 11:38:58', '2020-01-06 11:38:58'),
(4, 1, 'medium', 2, 9000, 1, '2020-01-06 11:39:30', '2020-01-06 11:39:30'),
(5, 3, 'large', 4, 18000, 3, '2020-01-06 11:39:45', '2020-01-06 11:39:45'),
(6, 5, 'small', 5, 17500, 5, '2020-01-06 11:40:06', '2020-01-06 11:40:06'),
(7, 2, 'medium', 2, 9000, 2, '2020-01-07 08:42:22', '2020-01-07 08:42:22'),
(8, 1, 'small', 2, 9000, 2, '2020-01-08 10:55:44', '2020-01-08 10:55:44'),
(9, 1, 'small', 2, 9000, 3, '2020-01-08 11:20:18', '2020-01-08 11:20:18'),
(10, 1, 'small', 2, 9000, 3, '2020-01-08 11:21:05', '2020-01-08 11:21:05'),
(19, 1, 'small', 1, 4500, 3, '2020-01-08 21:58:53', '2020-01-08 21:58:53'),
(20, 1, 'small', 1, 4500, 3, '2020-01-08 22:05:52', '2020-01-08 22:05:52'),
(21, 1, 'small', 2, 9000, 3, '2020-01-08 22:07:00', '2020-01-08 22:07:00'),
(22, 1, 'small', 1, 4500, 2, '2020-01-08 22:08:34', '2020-01-08 22:08:34'),
(23, 1, 'small', 2, 9000, 3, '2020-01-08 22:16:00', '2020-01-08 22:16:00'),
(24, 1, 'small', 2, 9000, 2, '2020-01-08 22:17:20', '2020-01-08 22:17:20'),
(25, 1, 'small', 2, 9000, 2, '2020-01-08 22:48:23', '2020-01-08 22:48:23'),
(26, 1, 'small', 2, 9000, 2, '2020-01-09 00:02:06', '2020-01-09 00:02:06'),
(27, 1, 'large', 2, 9000, 1, '2020-01-09 00:07:05', '2020-01-09 00:07:05');

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
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pizza_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pizza_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `pizza_name`, `pizza_image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Bacon Super Delight', 'uploads/rlXxATAbmVvnoY4Kmlg2RMSTEv3PimyxOzw3z137.jpeg', 4500, '2020-01-06 11:31:50', '2020-01-06 11:31:50'),
(2, 'BBQ Chicken Deluxe', 'uploads/AKuwNLC1e36QHUSQA1eLxVJXB6SfX87Vyi5cOyON.jpeg', 4500, '2020-01-06 11:32:11', '2020-01-06 11:32:11'),
(3, 'BBQ Pork Deluxe', 'uploads/xodEKxa6JXbv656UDtL9Ubhg8BvIazBKHRF4vKuS.jpeg', 4500, '2020-01-06 11:32:28', '2020-01-06 11:32:28'),
(4, 'Chicken Trio', 'uploads/TEDf5EBcELQ8HxdQYfJQ9HY97gs2QpML9xn0Cq3J.jpeg', 3500, '2020-01-06 11:32:52', '2020-01-06 11:32:52'),
(5, 'Ham & Mushroom', 'uploads/q3KiBEhqI9iAQRUCETYuLelEAqtnv7ZOeU8lQxl8.jpeg', 3500, '2020-01-06 11:33:45', '2020-01-06 11:33:46'),
(6, 'Hawaiian', 'uploads/wahnddVDL0ayTNGOLpWoILhM7joNevAeS9han629.jpeg', 4500, '2020-01-06 11:34:03', '2020-01-06 11:34:03'),
(7, 'Italian Sausage', 'uploads/uaGJv7rCGNECvqyRp2CTOH2rCB7y4YosTYbop3ay.jpeg', 4500, '2020-01-06 11:34:29', '2020-01-06 11:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `table_numbers`
--

CREATE TABLE `table_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tabel_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_numbers`
--
ALTER TABLE `table_numbers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `table_numbers`
--
ALTER TABLE `table_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
