-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wishpik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verification_token` varchar(255) DEFAULT NULL,
  `is_email_verified` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:not verified,1:verified',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `remember_me` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:not remembered, 1:remembered',
  `user_locked` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:not locked, 1:locked',
  `user_locked_at` timestamp NULL DEFAULT NULL,
  `wrong_attempt` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `email_verification_token`, `is_email_verified`, `email_verified_at`, `password`, `phone_number`, `ip_address`, `remember_me`, `user_locked`, `user_locked_at`, `wrong_attempt`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(1, 'Admin', NULL, 'admin@yopmail.com', NULL, '1', '2021-12-27 05:22:22', '$2y$10$Bmhd4cdXRWWiOgw9FEUuounJ5lH49pDE22Au2tso4xc0A4u.FjdOq', NULL, NULL, '0', '0', NULL, 0, NULL, '2023-09-12 11:23:25', NULL, 1),
(2, 'managers', 'manager', 'manager@bookys.com', NULL, '0', NULL, '$2y$10$CBwsduDgVmWiTDPBwgr8ZupO1rcQx5vYwY1GOX77sjgIl2ezHBC6m', NULL, NULL, '0', '0', NULL, 0, '2022-01-07 07:15:30', '2023-09-07 10:51:23', '2023-09-07 10:51:23', 4),
(3, 'ss', 'dd', 'dd@yopmail.com', NULL, '0', NULL, '$2y$10$s6NqoY3SJhpJ81QAZBPT7O3dvZZEwNGoEaB2IE18tsRG59hcMZR7e', NULL, NULL, '0', '0', NULL, 0, '2023-09-06 13:35:53', '2023-09-07 11:09:21', '2023-09-07 11:09:21', 5),
(4, 'rer', 'ete', 'gttt@yopmail.com', NULL, '0', NULL, '$2y$10$piABXqZvKFhTzoDD4lls8.b6WOFh4H.zZIToB5ZsmFikh3HEHv8nu', NULL, NULL, '0', '0', NULL, 0, '2023-09-07 11:09:15', '2023-09-07 11:09:15', NULL, 5),
(5, 'ttrr', 'trtr', 'trtt@yopmail.com', NULL, '0', NULL, '$2y$10$1GjVrcOOMX854VjNQSDT4.Fzz1lI/q/jFrCF7wRQle4W5vUgQ1Q/W', NULL, NULL, '0', '0', NULL, 0, '2023-09-07 12:06:28', '2023-09-07 12:06:28', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `attribute_name`, `status`, `meta_keyword`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'PCS', 'Active', 'PCS PCS PCS', 'Sales with pieces of eggs in marketing.', NULL, '2023-10-10 10:27:52', '2023-10-10 10:27:52'),
(2, 'Tray', 'Active', 'Tray Tray', 'Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray Tray', NULL, '2023-10-10 10:28:20', '2023-10-10 10:28:20'),
(3, 'Half Tray', 'Active', 'Half Tray', 'Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray Half Tray', NULL, '2023-10-10 10:28:40', '2023-10-10 10:28:40'),
(4, 'Dozen Tray', 'Active', 'Dozen Tray Dozen Tray', 'Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray Dozen Tray', NULL, '2023-10-10 10:29:09', '2023-10-10 10:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `billing_shipping_addresses`
--

CREATE TABLE `billing_shipping_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `billing_first_name` varchar(255) NOT NULL,
  `billing_last_name` varchar(255) NOT NULL,
  `billing_email` varchar(255) NOT NULL,
  `billing_phone_number` varchar(255) NOT NULL,
  `billing_address` text NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_state` varchar(255) NOT NULL,
  `billing_zip_code` varchar(255) NOT NULL,
  `shipping_first_name` varchar(255) NOT NULL,
  `shipping_last_name` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `shipping_phone_number` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) NOT NULL,
  `shipping_zip_code` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `meta_keyword`, `meta_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'Birthday', '112520231640266562237a2ee45.jpg', 'birthday', 'birthday image chekc', 'Active', NULL, '2023-11-25 11:10:26', '2023-11-25 11:10:26'),
(8, 'Diwali', '112520231734036562300b26ff7.jpg', 'diwali', 'diwali image test test test', 'Active', NULL, '2023-11-25 12:04:03', '2023-11-25 12:04:03'),
(9, 'new year', '1125202317393065623152f3494.png', NULL, NULL, 'Active', NULL, '2023-11-25 12:09:31', '2023-11-25 12:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_type` enum('Flat','Percentage') NOT NULL,
  `coupon_amount_and_percentage` double NOT NULL DEFAULT 0,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `coupon_code` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `laravel_jobs`
--

CREATE TABLE `laravel_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_100000_create_password_resets_table', 1),
(42, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(43, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(44, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(45, '2016_06_01_000004_create_oauth_clients_table', 1),
(46, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(47, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(48, '2021_12_23_102532_create_users_table', 1),
(63, '2021_05_31_131442_create_admins_table', 3),
(79, '2021_02_01_121007_create_roles_table', 12),
(80, '2021_03_16_035258_create_permissions_table', 12),
(81, '2021_03_16_070355_create_permission_role_table', 12),
(140, '2022_05_26_095346_create_laravel_jobs_table', 25),
(141, '2022_05_26_100350_create_failed_jobs_table', 25),
(196, '2019_05_03_000001_create_customer_columns', 26),
(197, '2019_05_03_000002_create_subscriptions_table', 26),
(198, '2019_05_03_000003_create_subscription_items_table', 26),
(199, '2023_09_13_151712_create_categories_table', 27),
(216, '2023_09_13_151713_create_sub_categories_table', 28),
(217, '2023_09_17_165359_create_attributes_table', 28),
(218, '2023_09_17_165709_create_products_table', 28),
(219, '2023_09_17_165945_create_product_images_table', 28),
(220, '2023_09_24_144231_create_coupons_table', 28),
(222, '2023_10_05_181146_create_product_price_attribiutes_table', 29),
(246, '2023_10_08_061039_create_payments_table', 30),
(247, '2023_10_08_062916_create_user_addresses_table', 30),
(248, '2023_10_08_063232_create_orders_table', 30),
(249, '2023_10_08_063409_create_product_orders_table', 30),
(250, '2023_10_08_063501_create_billing_shipping_addresses', 30);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'kbJGDUav2OZHnoYYYooKAv43yIUt2syLusRdmQ0b', NULL, 'http://localhost', 1, 0, 0, '2021-12-24 00:58:25', '2021-12-24 00:58:25'),
(2, NULL, 'Laravel Password Grant Client', 'mrojtcKp9DBtgFZw56O5p2SQcF6s6RzLHNfcvCCz', 'users', 'http://localhost', 0, 1, 0, '2021-12-24 00:58:25', '2021-12-24 00:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-12-24 00:58:25', '2021-12-24 00:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_order_id` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_amount_and_percentage` double NOT NULL DEFAULT 0,
  `coupon_type` enum('None','Percentage','Flat') NOT NULL DEFAULT 'None',
  `discount_amount_for_coupon` double NOT NULL DEFAULT 0,
  `shipping_charger` double NOT NULL DEFAULT 0,
  `total_amount` double NOT NULL DEFAULT 0,
  `order_status` enum('Pending','Accepted','Shipped','Completed','Rejected') NOT NULL DEFAULT 'Pending',
  `payment_type` varchar(255) NOT NULL,
  `pay_amount` double NOT NULL DEFAULT 0,
  `payment_received` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `unique_order_id`, `user_id`, `payment_id`, `coupon_code`, `coupon_amount_and_percentage`, `coupon_type`, `discount_amount_for_coupon`, `shipping_charger`, `total_amount`, `order_status`, `payment_type`, `pay_amount`, `payment_received`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '52R6ZWEtVU', 1, 1, NULL, 0, 'None', 0, 0, 108, 'Pending', 'COD', 108, 0, NULL, '2023-10-10 11:28:40', '2023-10-10 11:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_amount_and_percentage` double NOT NULL DEFAULT 0,
  `coupon_type` enum('None','Percentage','Flat') NOT NULL DEFAULT 'None',
  `discount_amount_for_coupon` double NOT NULL DEFAULT 0,
  `shipping_charger` double NOT NULL DEFAULT 0,
  `total_amount` double NOT NULL DEFAULT 0,
  `pay_amount` double NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `order_id`, `transaction_id`, `payment_type`, `coupon_code`, `coupon_amount_and_percentage`, `coupon_type`, `discount_amount_for_coupon`, `shipping_charger`, `total_amount`, `pay_amount`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'xxxxxxx12345', 'COD', NULL, 0, 'None', 0, 0, 108, 108, NULL, '2023-10-10 11:28:40', '2023-10-10 11:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 7, NULL, 'Active', NULL, '2023-12-14 12:09:51', '2023-12-14 12:09:51'),
(15, 8, NULL, 'Active', NULL, '2023-12-14 12:22:28', '2023-12-14 12:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(200) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `is_featured_image` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `category_id`, `product_image`, `is_featured_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 14, 7, '12142023173951657b3de71b7bd.png', 1, NULL, '2023-12-14 12:09:51', '2023-12-14 12:09:51'),
(9, 14, 7, '12142023173951657b3de71c159.png', 0, NULL, '2023-12-14 12:09:51', '2023-12-14 12:09:51'),
(10, 14, 7, '12142023173951657b3de71c9a2.png', 0, NULL, '2023-12-14 12:09:51', '2023-12-14 12:09:51'),
(11, 15, 8, '12142023175228657b40dc1e28d.png', 1, NULL, '2023-12-14 12:22:28', '2023-12-14 12:22:28'),
(12, 15, 8, '12142023175228657b40dc1eeed.png', 0, NULL, '2023-12-14 12:22:28', '2023-12-14 12:22:28'),
(13, 15, 8, '12142023175228657b40dc1fe41.png', 0, NULL, '2023-12-14 12:22:28', '2023-12-14 12:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `product_price` double NOT NULL,
  `sale_price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `category_name` varchar(255) DEFAULT NULL,
  `sub_category_name` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_meta_description` text DEFAULT NULL,
  `product_meta_keyord` varchar(255) DEFAULT NULL,
  `calculated_amount` double NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_price_attributes`
--

CREATE TABLE `product_price_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `product_price` double NOT NULL,
  `sale_price` double NOT NULL,
  `attribute_value` double NOT NULL DEFAULT 0,
  `is_default_show` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('active','incative') NOT NULL DEFAULT 'active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `tag`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super-admin', 'active', NULL, '2021-06-01 07:25:36', '2021-06-01 07:25:36'),
(2, 'Admin', 'admin', 'active', NULL, '2021-06-10 02:16:38', '2021-09-03 04:55:58'),
(3, 'Test', 'test', 'active', NULL, '2021-08-20 05:38:38', '2021-08-20 05:38:38'),
(4, 'Viewer', 'viewer', 'active', NULL, '2021-08-20 05:38:56', '2021-09-03 04:34:23'),
(5, 'Tester', 'tester', 'active', NULL, '2021-09-02 05:53:58', '2021-09-02 05:53:58'),
(6, 'Demo Role', 'demo_role', 'active', NULL, '2021-09-06 00:01:30', '2021-09-06 00:01:30'),
(7, 'EEEE', 'eeee', 'active', NULL, '2023-09-07 11:55:59', '2023-09-07 11:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_status` varchar(255) NOT NULL,
  `stripe_plan` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_plan` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_image` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_type` enum('Employee','Staff') NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `otp_sent_on_email` text DEFAULT NULL,
  `email_sent_at` datetime DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `is_email_verified` int(11) NOT NULL DEFAULT 0,
  `reset_password_token` text DEFAULT NULL,
  `reset_password_mail_sent_at` datetime DEFAULT NULL,
  `ip_address` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `login_with` enum('Normal','Facebook','Google','Apple') DEFAULT NULL,
  `user_locked` varchar(191) DEFAULT NULL,
  `user_locked_at` datetime DEFAULT NULL,
  `wrong_attampt` int(11) NOT NULL DEFAULT 0,
  `last_login_at` datetime DEFAULT NULL,
  `job_alert` varchar(191) DEFAULT NULL,
  `is_online` int(11) NOT NULL DEFAULT 0,
  `location` varchar(191) DEFAULT NULL,
  `latitude` varchar(191) DEFAULT NULL,
  `longitude` varchar(191) DEFAULT NULL,
  `is_block` int(11) NOT NULL DEFAULT 0,
  `language_selected` enum('English','German','French','Spain') NOT NULL DEFAULT 'English',
  `self_reference_code` varchar(191) DEFAULT NULL,
  `use_reference_code` varchar(191) DEFAULT NULL,
  `status_reference_code_used` int(11) NOT NULL DEFAULT 0,
  `refresh_token` longtext DEFAULT NULL,
  `device_type` enum('Android','Ios') DEFAULT NULL,
  `device_token` longtext DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_update_date_time_online` timestamp NULL DEFAULT NULL,
  `otp_verification_is_restricted` int(11) DEFAULT NULL,
  `stripe_id` varchar(255) DEFAULT NULL,
  `card_brand` varchar(255) DEFAULT NULL,
  `card_last_four` varchar(4) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_type`, `full_name`, `email`, `password`, `otp_sent_on_email`, `email_sent_at`, `email_verified_at`, `is_email_verified`, `reset_password_token`, `reset_password_mail_sent_at`, `ip_address`, `remember_token`, `login_with`, `user_locked`, `user_locked_at`, `wrong_attampt`, `last_login_at`, `job_alert`, `is_online`, `location`, `latitude`, `longitude`, `is_block`, `language_selected`, `self_reference_code`, `use_reference_code`, `status_reference_code_used`, `refresh_token`, `device_type`, `device_token`, `deleted_at`, `created_at`, `updated_at`, `last_update_date_time_online`, `otp_verification_is_restricted`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`) VALUES
(1, 'Employee', 'Aman', 'aman@yopmail.com', '$2y$10$Q19FQTpa28/kEonZ2M1XhOPecqAT18uRHTB3ngJ9SN.x0Y9biaKiW', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, 'English', NULL, NULL, 0, NULL, NULL, NULL, NULL, '2023-10-10 11:27:58', '2023-10-10 11:27:58', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `state`, `zip_code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Host', 'Testing', 'aman@yopmail.com', '6467023890', 'California Road', 'Stockholm', 'Maine', '04783', NULL, '2023-10-10 11:28:40', '2023-10-10 11:28:40');

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
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_shipping_addresses`
--
ALTER TABLE `billing_shipping_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_shipping_addresses_payment_id_foreign` (`payment_id`),
  ADD KEY `billing_shipping_addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laravel_jobs`
--
ALTER TABLE `laravel_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laravel_jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

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
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_order_id_foreign` (`order_id`),
  ADD KEY `product_orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `product_price_attributes`
--
ALTER TABLE `product_price_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_plan_unique` (`subscription_id`,`stripe_plan`),
  ADD KEY `subscription_items_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `billing_shipping_addresses`
--
ALTER TABLE `billing_shipping_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laravel_jobs`
--
ALTER TABLE `laravel_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_price_attributes`
--
ALTER TABLE `product_price_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_shipping_addresses`
--
ALTER TABLE `billing_shipping_addresses`
  ADD CONSTRAINT `billing_shipping_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `billing_shipping_addresses_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
