-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 01:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiseller`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `type` varchar(155) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `thumbnail`, `type`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Hotel', 'hotel', '1682506461.jpg', 'service', NULL, '2023-04-18 04:15:18', '2023-04-26 05:24:21'),
(8, 'Education', 'education', '1682419184.jpg', 'product', NULL, '2023-04-25 05:09:44', '2023-04-26 05:23:56'),
(9, 'Automobile', 'automobile', '1682572727.jpg', 'service', NULL, '2023-04-26 23:48:47', '2023-04-26 23:48:47'),
(10, 'Home Decor', 'homedecor', '1682572756.jpg', 'product', NULL, '2023-04-26 23:49:16', '2023-04-26 23:49:16'),
(11, 'Restaurants', 'restaurants', '1682572793.jpg', 'service', NULL, '2023-04-26 23:49:53', '2023-04-26 23:49:53'),
(12, 'Rent & Hire', 'rent_hire', '1682572836.jpg', 'service', NULL, '2023-04-26 23:50:36', '2023-04-26 23:50:36'),
(13, 'Hospitals', 'hospitals', '1682572872.jpg', 'service', NULL, '2023-04-26 23:51:12', '2023-04-26 23:51:12'),
(14, 'Contractors', 'contractors', '1682572898.jpg', 'service', NULL, '2023-04-26 23:51:38', '2023-04-26 23:51:38'),
(15, 'Pet Shops', 'pet_shops', '1682572926.jfif', 'product', NULL, '2023-04-26 23:52:06', '2023-04-26 23:52:06'),
(16, 'PG/Hostels', 'pg_hostels', '1682572962.jpg', 'service', NULL, '2023-04-26 23:52:42', '2023-04-26 23:52:42'),
(17, 'Estate Agents', 'estate_agents', '1682573001.jpg', 'service', NULL, '2023-04-26 23:53:21', '2023-04-26 23:53:21'),
(18, 'Dentists', 'dentists', '1682573252.jfif', 'service', NULL, '2023-04-26 23:57:32', '2023-04-26 23:57:32'),
(19, 'GYM', 'GYM', '1682573398.jpg', 'product', NULL, '2023-04-26 23:59:58', '2023-04-26 23:59:58'),
(20, 'Consultants', 'consultants', '1682573449.jpg', 'service', NULL, '2023-04-27 00:00:49', '2023-04-27 00:00:49'),
(21, 'Event Organisers', 'event_organisers', '1682573631.jpg', 'service', NULL, '2023-04-27 00:03:51', '2023-04-27 00:03:51'),
(22, 'Driving Schools', 'driving_schools', '1682573672.jpg', 'service', NULL, '2023-04-27 00:04:32', '2023-04-27 00:04:32'),
(23, 'Packers And Movers', 'packers_movers', '1682573709.jpg', 'product', NULL, '2023-04-27 00:05:09', '2023-04-27 00:05:09'),
(24, 'Courier Service', 'courier_service', '1682573754.jpg', 'product', NULL, '2023-04-27 00:05:54', '2023-04-27 00:05:54'),
(25, 'Travel', 'travel', '1682573786.jpg', 'product', NULL, '2023-04-27 00:06:26', '2023-04-27 00:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `full_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `mobile`, `full_address`, `email`, `state`, `city`, `pincode`, `dob`, `password`, `created_at`, `updated_at`) VALUES
(1, 'kalyani', '7381643308', 'admin@admin.com', 'kalyani@digitalrath.info', 'odisha', 'bbsr', '751018', '2023-05-03', NULL, '2023-05-03 04:36:07', '2023-05-03 04:36:07'),
(2, 'kalyani', '7381643308', 'admin@admin.com', 'kalyani@digitalrath.info', 'odisha', 'bbsr', '751018', '2023-05-03', NULL, '2023-05-03 04:36:29', '2023-05-03 04:36:29'),
(3, 'kalyani', '7381643308', 'bbsr', 'kalyani@digitalrath.info', 'odisha', 'bbsr', '751018', '2023-05-03', NULL, '2023-05-03 05:07:42', '2023-05-03 05:07:42'),
(4, 'kalyani', '7381643308', 'bbsr', 'kalyani@digitalrath.info', 'odisha', 'bbsr', '751018', '2023-05-03', NULL, '2023-05-03 05:10:34', '2023-05-03 05:10:34'),
(5, 'Arnav Shan', '7381643308', 'bbsr', 'testkalyani40@gmail.com', 'odisha', 'bb', '751018', '2006-02-04', NULL, '2023-05-03 23:07:28', '2023-05-03 23:07:28'),
(6, 'Arnav Shan', '7381643308', 'bbsr', 'testkalyani40@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-04', NULL, '2023-05-03 23:21:36', '2023-05-03 23:21:36'),
(7, 'Arnav Shan', '07381643308', 'bbsr', 'tikikalyani91@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-04', NULL, '2023-05-04 00:58:04', '2023-05-04 00:58:04'),
(8, 'Arnav Shan', '7381643308', 'bbsr', 'tikikalyani91@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-04', NULL, '2023-05-04 01:05:49', '2023-05-04 01:05:49'),
(9, 'Arnav Shan', '7381643308', 'bbsr', 'tikikalyani91@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-04', NULL, '2023-05-04 01:21:11', '2023-05-04 01:21:11'),
(10, 'kalyani Priyadarsini', '7381643308', 'admin@admin.com', 'tikikalyani91@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-05', NULL, '2023-05-05 04:10:35', '2023-05-05 04:10:35'),
(11, 'Arnav Shan', '7381643308', 'bbsr', 'tikikalyani91@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-05', NULL, '2023-05-05 04:14:38', '2023-05-05 04:14:38'),
(12, 'Deepika priyadarsini', '7381643308', 'bbsr', 'testkalyani40@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-05', NULL, '2023-05-05 04:31:14', '2023-05-05 04:31:14'),
(13, 'Arnav Shan', '7381643308', 'bbsr', 'testkalyani40@gmail.com', 'odisha', 'bbsr', '751018', '2023-05-05', NULL, '2023-05-05 05:02:14', '2023-05-05 05:02:14'),
(14, 'kalyani Priyadarsini', '7381643308', 'bbsr', 'kalyani@digitalrath.info', 'odisha', 'bbsr', '751018', '2023-05-05', NULL, '2023-05-05 06:17:54', '2023-05-05 06:17:54');

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
(4, '2021_03_22_031922_create_admins_table', 1),
(6, '2023_03_03_053053_create_user_data_table', 1),
(7, '2023_04_07_105405_create_sellerinfos_table', 1),
(8, '2023_04_10_102752_create_categories_table', 1),
(9, '2023_04_18_091248_create_permission_tables', 1),
(10, '2021_06_09_053026_create_products_table', 2),
(11, '2023_04_22_071132_create_services_table', 3),
(12, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(13, '2023_05_03_091228_create_customers_table', 4),
(14, '2023_05_05_093454_create_verification_codes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'Role access', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(6, 'Role edit', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(7, 'Role create', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(8, 'Role delete', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(9, 'User access', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(10, 'User edit', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(11, 'User create', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(12, 'User delete', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(13, 'Permission access', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(14, 'Permission edit', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(15, 'Permission create', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(16, 'Permission delete', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(17, 'Add Seller', 'web', '2023-04-19 03:40:20', '2023-04-19 03:40:20'),
(18, 'Seller Edit', 'web', '2023-04-19 03:44:37', '2023-04-19 03:44:37'),
(19, 'Seller Access', 'web', '2023-04-19 23:05:29', '2023-04-19 23:05:29'),
(20, 'Service access', 'web', '2023-04-27 00:09:03', '2023-04-27 00:09:03'),
(21, 'Product access', 'web', '2023-04-27 00:09:29', '2023-04-27 00:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `specification` text NOT NULL,
  `packaging_type` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `packagingsize` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `special_feature` text NOT NULL,
  `brand` varchar(255) NOT NULL,
  `country_origin` text NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `order_quantity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-approved,0-pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `type`, `seller_name`, `product_title`, `product_description`, `specification`, `packaging_type`, `color`, `packagingsize`, `image`, `special_feature`, `brand`, `country_origin`, `expiry_date`, `order_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 24, 'product', '3', 'demo', '<p>demo</p>', 'demo', 'demo', 'demo', 'xl', '1682404276.jpg', 'dsd', 'vcv', 'dsd', '2023-04-25', '5', 0, '2023-04-25 01:01:16', '2023-04-29 07:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(2, 'staff', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(3, 'seller', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(4, 'customer', 'web', '2023-04-18 04:14:13', '2023-04-18 04:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sellerinfos`
--

CREATE TABLE `sellerinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `opening_time` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `year_drp_down` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `business_hr` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `closing_time` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellerinfos`
--

INSERT INTO `sellerinfos` (`id`, `company_name`, `seller_name`, `full_address`, `phone`, `email`, `longitude`, `password`, `opening_time`, `pan_no`, `year_drp_down`, `latitude`, `business_hr`, `gst_no`, `closing_time`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Xyz', 'kalyani', '', '7381643308', 'kalyani@digitalrath.info', '', '', '', 'cfqpp2197gh', '2016-02-26', '', '', '1223232', '', '1682508044.jpg', '2023-04-26 05:50:44', '2023-04-26 05:50:44'),
(2, 'Apollo', 'chinmin', '', '7381643308', 'chinmin@gmail.com', '', '', '', 'ffdfdfdf', '2023-04-01', '', '', '1233', '', '1682578832.jpg', '2023-04-27 01:30:32', '2023-04-27 01:30:32'),
(3, 'demoxyz', 'demo1', '', '7381643308', 'demo1@gmail.com', '', '', '', 'dfdfd343434', '2023-04-29', '', '', '1212121', '', '1682751885.jpg', '2023-04-29 01:34:45', '2023-04-29 01:34:45'),
(4, 'dsds', 'dsds', '', 'dsd', 'kalyani@digitalrath.info', '', '', '', 'sdsdsds', '2023-04-29', '', '', '1212121', '', '1682764738.jpg', '2023-04-29 05:08:58', '2023-04-29 05:08:58'),
(5, 'dsds', 'dsds', '', 'dsd', 'kalyani@digitalrath.info', '', '', '', 'sdsdsds', '2023-04-29', '', '', '1212121', '', '1682770771.jpg', '2023-04-29 06:49:32', '2023-04-29 06:49:32'),
(6, 'dsds', 'dsds', '', 'dsd', 'kalyani@digitalrath.info', '', '', '', 'sdsdsds', '2023-04-29', '', '', '1212121', '', '1682770797.jpg', '2023-04-29 06:49:57', '2023-04-29 06:49:57'),
(7, 'dfdfdf', 'fdfdfd', '', '7381643308', 'kalyani@digitalrath.info', '', '', '', 'dfdfd343434', '2023-05-01', '', '', '1212121', '', '1682936613.jpg', '2023-05-01 04:53:33', '2023-05-01 04:53:33'),
(8, 'demo01-05-23', 'kalya333', '', '7381643308', 'klnpriyadarsini@gmail.com', '', '', '', 'dfdfd343434', '2023-05-01', '', '', '1212121', '', '1682937037.jpg', '2023-05-01 05:00:37', '2023-05-01 05:00:37'),
(9, 'xyz', 'demo user333', '', '7381643308', 'kpriyadarsini330@gmail.com', '', '', '', '32323232', '2023-05-02', '', '', '1212121', '', '1683006684.jpg', '2023-05-02 00:21:24', '2023-05-02 00:21:24'),
(10, 'demo2-05-23', 'demo02-05-23', '', '7381643308', 'admin@admin.com', '', '', '', '32323232', '2023-05-02', '', '', '1212121', '', '1683008741.jfif', '2023-05-02 00:55:41', '2023-05-02 00:55:41'),
(11, 'dem02-05-23', 'demo02-05-23', '', '7381643308', 'demo02@gmail.com', '', '', '', '32323232', '2023-05-02', '', '', '1212121', '', '1683008771.jfif', '2023-05-02 00:56:11', '2023-05-02 00:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_whatsapp` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `special_feature` text NOT NULL,
  `service_highlight` varchar(255) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0-rejected,1-approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `type`, `seller_name`, `address`, `phone`, `is_whatsapp`, `price`, `unit`, `features`, `payment_mode`, `special_feature`, `service_highlight`, `from_date`, `to_date`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, 'service', '32', 'tp road ,bbsr', '7381643308', 1, 345.00, 'per kg', 'fdfd', 'online', '', 'dsdsd', '2023-05-01', '2023-05-28', 'dsd', 'dsds', 0, '2023-05-01 05:26:27', '2023-05-06 04:13:10');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `mobile`, `address`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$8SPa2GJDBY2U5x7KZIp/suKvsUTBxN7dzLCHLZ6jci3A.Yd3.Leki', NULL, NULL, NULL, '', '', 'admin', 1, NULL, '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(2, 'staff22', 'staff@staff.com', NULL, '$2y$10$rx30/olYexiaGjz92Mnh6OW/RhBxfHpzvKEKmEIFFED/yiS5dNn0S', NULL, NULL, NULL, '', '', '', 0, NULL, '2023-04-18 04:14:13', '2023-04-19 05:18:52'),
(3, 'seller', 'seller@seller.com', NULL, '$2y$10$IPUhuXJ32UTZTrvhZMJAEeIonxGIiwCZM0DlMypx3BQNcEhk0wxVK', NULL, NULL, NULL, '', '', '', 0, NULL, '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(4, 'user', 'customer@customer.com', NULL, '$2y$10$1PNp27YGZ.nNMB.lyI5EVe7f1XQfAJQtBVxAnSHXlanjzhhcfWnpi', NULL, NULL, NULL, '', '', '', 0, NULL, '2023-04-18 04:14:13', '2023-04-18 04:14:13'),
(32, 'kalyani Priyadarsini', 'kalyani@digitalrath.info', NULL, '$2y$10$MXqS05XfFUxaThr/PkRB/.x/0HI2cWGO7yn9/HRa2kLdn5W.alw7G', NULL, NULL, NULL, '7381643308', '', 'customer', 0, NULL, '2023-05-05 06:17:54', '2023-05-05 06:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_type` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `year_drp_down` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verification_codes`
--

INSERT INTO `verification_codes` (`id`, `user_id`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 29, '190668', '2023-05-05 04:14:57', '2023-05-05 04:14:50', '2023-05-05 04:14:57'),
(2, 29, '664783', '2023-05-05 04:24:52', '2023-05-05 04:24:46', '2023-05-05 04:24:52'),
(3, 29, '690820', '2023-05-05 04:31:29', '2023-05-05 04:31:23', '2023-05-05 04:31:29'),
(4, 31, '259989', '2023-05-05 05:02:40', '2023-05-05 05:02:35', '2023-05-05 05:02:40'),
(5, 32, '738243', '2023-05-05 06:18:16', '2023-05-05 06:18:09', '2023-05-05 06:18:16');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `categories_thumbnail_unique` (`thumbnail`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sellerinfos`
--
ALTER TABLE `sellerinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellerinfos`
--
ALTER TABLE `sellerinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
