-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 07:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wish`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` varchar(255) NOT NULL,
  `admin_auth` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Deactivate, 1: Activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `last_login`, `admin_auth`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@yopmail.com', '$2y$10$/sAdhRu9BZuXr7Ndg058xO3jBodOmcSx9iFWCEQO0ygJ5wzKs.kB2', '2024-04-18 15:24:32', NULL, 1, NULL, '2024-04-18 09:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_image` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Diwali', '0306202407170065e8186c43b4e.jpg', 'Active', '2024-03-05 23:33:07', '2024-03-06 02:17:51', NULL),
(2, 'Lohri', '0306202405201165e7fd0b20bee.jpg', 'Active', '2024-03-05 23:50:11', '2024-03-06 01:14:41', NULL),
(3, 'Holi', '0306202405374565e80129a567d.jpg', 'Active', '2024-03-06 00:07:45', '2024-03-06 00:07:45', NULL),
(4, 'Rakhi', '0306202417383065e8aa16e5280.jpg', 'Active', '2024-03-06 12:08:30', '2024-03-06 12:08:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_verified` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `subscription_start` date DEFAULT NULL COMMENT 'subscription start date',
  `subscription_end` date DEFAULT NULL COMMENT 'subscription end date',
  `payment_id` int(11) DEFAULT NULL COMMENT 'add subscription payment id',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 for inactive and 1 for active',
  `created_by` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `phone_verified`, `password`, `subscription_start`, `subscription_end`, `payment_id`, `status`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'sarb', 'sarb@yopmail.com', '3434243424', NULL, '$2y$10$sDlW3XnNB2hUHDykCTfer.Gqb4e8mREZOOYrOqgGNNaQKP28m5yjK', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:05:46', '2024-04-18 06:05:46'),
(2, 'sarb', 'sarb@yopmail.com', '3423432423', NULL, '$2y$10$lk3VXfLfKujbW7U2l4UqA.R4D24MFp2QAyj.H707PFyq8kPcJJXbG', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:12:39', '2024-04-18 06:12:39'),
(3, 'sar', 'sarb@yopmail.com', '2342424423', NULL, '$2y$10$8hI0NBgq7HjIJWVkdiz8XefgUcWd725Vfz6ApvQsiMGomCJSmUbGy', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:15:04', '2024-04-18 06:15:04'),
(4, 'vif', 'sarb@yopmail.com', '2423434242', NULL, '$2y$10$9/vown98cevX5RXeOAbueOsIL.qrGN2JJwvQXekKUQmnV8gUuUr9q', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:15:44', '2024-04-18 06:15:44'),
(5, 'sarvbb', 'sarb@yopmail.com', '9898989898', NULL, '$2y$10$eS7Q6bSfp0zCUmasuG1JoO5Nq6vJqjfk6xqm2/f75FcT.gEfSSeOS', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:16:41', '2024-04-18 06:16:41'),
(6, 'bijj', 'bin@yopmail.com', '2342424243', NULL, '$2y$10$7M1HgQI2v9.cJ7cDbs8VfOeGAodFrZgHU2omVa7RJrPeeStm4gxLq', NULL, NULL, NULL, 0, NULL, NULL, '2024-04-18 06:18:15', '2024-04-18 06:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fronts`
--

CREATE TABLE `fronts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_02_28_073533_create_customers_table', 1),
(5, '2024_02_28_141823_create_fronts_table', 1),
(6, '2024_02_28_173808_create_admins_table', 1),
(7, '2024_02_29_171231_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@yopmail.com', '$2y$10$U7QH4Yny307ssQbnnesTduGAzp1.0DVCGmnAVl/UYwV9Zt8p17QJO', '2024-03-05 10:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `image_count` int(11) NOT NULL DEFAULT 0,
  `wish_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Deactivate, 1: Activate',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `image_count`, `wish_count`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, 1, NULL, '2024-03-06 09:09:05', '2024-03-07 05:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(50) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `is_featured_image` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Deactivate, 1: Activate',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `category_id`, `product_image`, `is_featured_image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0306202414390565e88009e2058.jpg', 1, 1, NULL, '2024-03-06 09:09:05', '2024-03-07 05:55:37'),
(3, 1, 1, '0306202414390565e88009e4fd7.jpg', 0, 1, NULL, '2024-03-06 09:09:05', '2024-03-07 05:55:37'),
(5, 1, NULL, '0307202411253765e9a4315a6d0.jpg', 0, 1, NULL, '2024-03-07 05:55:37', '2024-03-07 05:55:37'),
(6, 1, NULL, '0307202411253765e9a4315af72.jpg', 0, 1, NULL, '2024-03-07 05:55:37', '2024-03-07 05:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_wishes`
--

CREATE TABLE `product_wishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(50) NOT NULL,
  `product_wish` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Deactivate, 1: Activate',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wishes`
--

INSERT INTO `product_wishes` (`id`, `product_id`, `category_id`, `product_wish`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(13, 1, 1, 'wish1', 1, NULL, '2024-03-07 05:55:37', '2024-03-07 05:55:37'),
(14, 1, 1, 'wish3', 1, NULL, '2024-03-07 05:55:37', '2024-03-07 05:55:37'),
(15, 1, 1, 'new wish', 1, NULL, '2024-03-07 05:55:37', '2024-03-07 05:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@yopmail.com', NULL, '$2y$10$/sAdhRu9BZuXr7Ndg058xO3jBodOmcSx9iFWCEQO0ygJ5wzKs.kB2', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$/sAdhRu9BZuXr7Ndg058xO3jBodOmcSx9iFWCEQO0ygJ5wzKs.kB2', NULL, '2024-03-05 10:08:22', '2024-03-05 10:08:22'),
(3, 'sk must', 'sk@gmail.com', NULL, '$2y$10$jMNLY79.7QdE8vbjS.Bf0u8OXC5PbtIL2QerKSOhQ4gsSq.qqV2Py', NULL, '2024-03-05 10:20:11', '2024-03-05 10:20:11');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fronts`
--
ALTER TABLE `fronts`
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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_wishes`
--
ALTER TABLE `product_wishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fronts`
--
ALTER TABLE `fronts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_wishes`
--
ALTER TABLE `product_wishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
