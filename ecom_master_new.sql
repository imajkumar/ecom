-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 02:44 PM
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
-- Database: `ecom_master`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_07_18_054430_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'viewPost', 'web', '2020-07-18 03:01:01', '2020-07-18 03:01:01'),
(2, 'addPost', 'web', '2020-07-18 03:01:01', '2020-07-18 03:01:01'),
(3, 'editPost', 'web', '2020-07-18 03:01:01', '2020-07-18 03:01:01'),
(4, 'deletePost', 'web', '2020-07-18 03:01:01', '2020-07-18 03:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-07-18 03:01:13', '2020-07-18 03:01:13'),
(2, 'Sales', 'web', '2020-07-18 03:01:13', '2020-07-18 03:01:13'),
(3, 'User', 'web', '2020-07-18 03:01:13', '2020-07-18 03:01:13');

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
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addresses`
--

CREATE TABLE `tbl_addresses` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address_user_id` int(10) NOT NULL DEFAULT 0,
  `f_name` varchar(120) NOT NULL,
  `l_name` varchar(120) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `street_address` text NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `gst_number` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `default_address` tinyint(1) NOT NULL DEFAULT 0,
  `check_page` int(11) NOT NULL DEFAULT 0 COMMENT '0=>profile wizard page, 1=>other'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addresses`
--

INSERT INTO `tbl_addresses` (`id`, `customer_id`, `address_user_id`, `f_name`, `l_name`, `company_name`, `street_address`, `country`, `state`, `city`, `postal_code`, `gst_number`, `phone`, `default_address`, `check_page`) VALUES
(1, 13, 0, 'Gfyweg yuuwey', 'fgdsfg yurweu', 'company name', 'vfsdf ydgyuad', 'India', 'up', 'gywegyr', 43345, NULL, '8432432423432', 0, 0),
(2, 13, 0, 'Sdfuyty yuuey', 'fgeuuy yfet', 'dgsyuf', 'ffyusdf yuyuer', 'India', 'up', 'fyetyrew', 546657, NULL, '5568776667', 1, 0),
(3, 13, 0, 'neeraj', 'verma', 'testt', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, '8433534543', 0, 0),
(8, 16, 9, 'neerajw1', 'verma', 'testtw', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, '8433534543', 0, 0),
(9, 16, 9, 'Juyiyu867', 'kluiui', 'hgfh', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, '8433534543', 1, 0),
(10, 17, 10, 'dftgry', 'ytry', 'testt', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, NULL, 0, 0),
(11, 18, 11, 'fghh', 'yttyuyt', 'fghgfh', 'fghfgh', 'India', 'up', 'ftyhtryt', 654656, NULL, NULL, 0, 0),
(12, 19, 16, 'jhgjhttryhtgh', 'jghj', 'testt', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, NULL, 0, 0),
(13, 20, 12, 'jhgjhttryhtghjkh', 'jghj', 'testt', 'dfjdngjk', 'India', 'up', 'Delhi', 2324424, NULL, NULL, 0, 0),
(14, 21, 17, 'ghfhhrtfdg', 'rtyrty', 'dgg', 'dfjdngjk', 'India', 'up', 'Dumka', 2324424, NULL, NULL, 0, 0),
(15, 22, 19, 'fnameee', 'lnamemmmmm', 'testt', 'addressssssss', 'India', 'up', 'Delhi', 2324424, 'gdfgertnnnnn', NULL, 0, 0),
(23, 23, 21, 'Gyryrtyd3', 'ghfghrt3', NULL, 'fgrte3', 'Pakistan', 'bihar', 'dfgthtr3', 534543, '546fgh3', NULL, 1, 0),
(37, 22, 19, 'hfghfgh2', 'hgfghgj2', NULL, 'gdfghfh2', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
(48, 23, 21, 'Yhrtyd', 'fhfh', NULL, 'tyhrtyty', 'India', 'up', 'dsfgdg', 43534564, NULL, NULL, 0, 0),
(49, 23, 21, 'gfdgh', 'tytry', NULL, 'rtytu', 'India', 'up', 'utyutyu', 565756, NULL, NULL, 0, 0),
(50, 24, 22, 'fghfgh', 'rtyrty', NULL, 'rtyrty', 'India', 'up', 'tyrty', 64646, 'ghgh5654654', NULL, 0, 0),
(51, 25, 24, 'dfgfdg', 'dfgdf', NULL, 'dfgfdg', 'India', 'up', 'gdfgdfg', 534, '3423423dfg', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute`
--

CREATE TABLE `tbl_attribute` (
  `id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `table_name` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attribute`
--

INSERT INTO `tbl_attribute` (`id`, `attr_name`, `table_name`) VALUES
(1, 'Color', 'tbl_color'),
(2, 'Size', 'tbl_size'),
(3, 'Weight', 'tbl_weight'),
(4, 'Quality', 'tbl_quality'),
(5, 'Dozen', 'tbl_dozen\r\n'),
(15, 'Packing', 'tbl_packing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attributes`
--

CREATE TABLE `tbl_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name_lable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `is_unique` tinyint(1) NOT NULL DEFAULT 0,
  `value_per_locale` tinyint(1) DEFAULT 0,
  `value_per_channel` tinyint(1) DEFAULT 0,
  `is_filterable` tinyint(1) DEFAULT 0,
  `is_configurable` tinyint(1) DEFAULT 0,
  `is_user_defined` tinyint(1) DEFAULT 1,
  `is_visible_on_front` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `swatch_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_in_flat` tinyint(1) DEFAULT 1,
  `is_comparable` tinyint(1) NOT NULL DEFAULT 0,
  `input_validation` tinyint(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_attributes`
--

INSERT INTO `tbl_attributes` (`id`, `attribute_code`, `admin_name_lable`, `type`, `validation`, `position`, `is_required`, `is_unique`, `value_per_locale`, `value_per_channel`, `is_filterable`, `is_configurable`, `is_user_defined`, `is_visible_on_front`, `created_at`, `updated_at`, `swatch_type`, `use_in_flat`, `is_comparable`, `input_validation`) VALUES
(1, 'color', 'color', 'select', NULL, NULL, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, 1, 1, NULL),
(4, 'size', 'Size', 'select', NULL, NULL, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute_families`
--

CREATE TABLE `tbl_attribute_families` (
  `id` int(10) NOT NULL,
  `code` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attribute_families`
--

INSERT INTO `tbl_attribute_families` (`id`, `code`, `name`, `status`) VALUES
(1, 'Default', 'Default', 1),
(2, 'test1', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute_families_group`
--

CREATE TABLE `tbl_attribute_families_group` (
  `id` int(10) NOT NULL,
  `attribute_id` int(10) NOT NULL,
  `attribute_family_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attribute_families_group`
--

INSERT INTO `tbl_attribute_families_group` (`id`, `attribute_id`, `attribute_family_id`) VALUES
(8, 1, 2),
(9, 4, 2),
(19, 1, 1),
(20, 4, 1),
(21, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute_options`
--

CREATE TABLE `tbl_attribute_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_option_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_attribute_options`
--

INSERT INTO `tbl_attribute_options` (`id`, `attribute_option_name`, `sort_order`, `attribute_id`) VALUES
(14, 'S', NULL, 4),
(15, 'L', NULL, 4),
(50, 'Red', NULL, 1),
(51, 'Green', NULL, 1),
(52, 'Yello', NULL, 1),
(53, 'black', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `banner` varchar(120) NOT NULL,
  `size` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `banner`, `size`, `created_at`, `created_by`) VALUES
(1, 'banner_slider_2_cover.jpg07251003.jpg', '28', '2020-07-25 10:10:03', '1'),
(2, 'banner_slider_1_cover.jpg07255017', '28', '2020-07-25 10:50:17', '1'),
(3, 'banner_07252049slider_1_product.png', '28', '2020-07-25 10:58:30', '1'),
(7, 'banner_07250038slider_1_product.png', '16', '2020-07-25 12:00:38', '1'),
(8, 'banner_07265659slider_3_product.png', '9', '2020-07-26 15:56:21', '1'),
(13, 'banner_07260243slider_product_2.png', '4', '2020-07-26 16:02:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_size`
--

CREATE TABLE `tbl_banner_size` (
  `id` int(11) NOT NULL,
  `banner_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner_size`
--

INSERT INTO `tbl_banner_size` (`id`, `banner_size`) VALUES
(1, '320x200'),
(2, '320x240'),
(3, '640x480'),
(4, '800x480'),
(5, '1024x600'),
(6, '1024x768'),
(7, '1280x800'),
(8, '1440x900'),
(9, '1920x1200'),
(10, '2560x1600'),
(11, '300×250'),
(12, '250×250'),
(13, '240×400'),
(14, '336×280'),
(15, '180×150'),
(16, '720×300'),
(17, '468×60'),
(18, '234×60'),
(19, '88×31'),
(20, '120×90'),
(21, '120×60'),
(22, '120×240'),
(23, '125×125'),
(24, '728×90'),
(25, '160×600'),
(26, '120×600'),
(27, '300×600'),
(28, '1920×1920');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(121) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brand_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `name`, `description`, `brand_img`, `created_at`, `updated_at`) VALUES
(1, 'apple4', 'wdwdwfg yusuas4', 'brand_07270310slider_2_product.png', '2020-07-27 07:20:23', '2020-07-27 07:20:23'),
(3, 'test', 'assdf', 'brand_07273845slider_product_2.png', '2020-07-27 07:38:45', '2020-07-27 07:38:45'),
(4, 'Milton', 'Mil', 'brand_07270237slider_product_2.png', '2020-07-27 14:02:37', '2020-07-27 14:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businesses`
--

CREATE TABLE `tbl_businesses` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `busines_user_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `business_country` varchar(191) DEFAULT NULL,
  `business_state` varchar(191) DEFAULT NULL,
  `business_city` varchar(191) DEFAULT NULL,
  `business_postal_code` int(10) DEFAULT NULL,
  `parent_code` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_businesses`
--

INSERT INTO `tbl_businesses` (`id`, `customer_id`, `busines_user_id`, `store_name`, `business_country`, `business_state`, `business_city`, `business_postal_code`, `parent_code`, `created_at`, `updated_at`) VALUES
(1, 22, 19, 'gdfggstone', 'India', 'up', 'dgdfg', 53453453, NULL, '2020-09-15 11:03:50', '2020-09-15 11:03:50'),
(2, 23, 21, 'tryrt3', 'Pakistan', 'bihar', 'hfgrty3', 5435343, '20200917A51C', '2020-09-16 03:55:30', '2020-09-16 03:55:30'),
(3, 24, 22, 'dfgfhrt', 'India', 'up', 'gfhfgh', 565465, '2020091612F1', '2020-09-16 12:45:42', '2020-09-16 12:45:42'),
(4, 25, 24, 'gdfgdfg', NULL, NULL, NULL, NULL, '202009170979', '2020-09-17 10:35:11', '2020-09-17 10:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`attr_id`, `attr_name`, `is_active`) VALUES
(1, 'red', 1),
(2, '', 1),
(3, 'Green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `customer_type` int(11) DEFAULT NULL COMMENT '1=>delar, 2=>Wholesale,3=>Distibuter',
  `cutomer_fname` varchar(120) DEFAULT NULL,
  `cutomer_lname` varchar(120) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `profile_pic` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 =>pending, 1 => approved,\r\n2 => rejected,\r\n3 => updated',
  `remark` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `user_id`, `customer_type`, `cutomer_fname`, `cutomer_lname`, `email`, `gender`, `dob`, `phone`, `profile_pic`, `status`, `remark`, `created_at`, `updated_at`) VALUES
(13, 0, 1, 'Neeraj', 'verma', 'admin@admin.com', 'Male', '27-08-2020', '8218526743', NULL, 0, NULL, '2020-08-27 13:48:28', '2020-08-27 13:48:28'),
(14, 0, 1, 'Neeraj2', 'verma2', 'admin1@admin.com', 'Male', '27-08-2020', '8218526743', NULL, 0, NULL, '2020-08-27 13:49:19', '2020-08-27 13:49:19'),
(15, 0, 1, 'vdshgfv', 'dfehfv', 'admin@admin.com', 'Male', '2020-08-29', '8433534543', NULL, 0, NULL, '2020-08-29 11:20:58', '2020-08-29 11:20:58'),
(16, 9, 1, 'neerajw1', 'verma', 'gfdghftry@tret.com', 'Male', '2020-08-29', '8218526734', 'profile_09125106user_11.jpg', 0, NULL, '2020-09-10 09:32:33', '2020-09-10 09:32:33'),
(17, 10, 1, 'dftgry', 'ytry', 'admin@admin.com', 'Male', '2020-08-29', '8218526749', 'profile_09111748user_3.jpg', 0, NULL, '2020-09-11 11:17:02', '2020-09-11 11:17:02'),
(18, 11, 1, 'fghh', 'yttyuyt', 'admin@admin.com', 'Male', '2020-09-12', '7703886088', 'profile_09124047user_3.jpg', 0, NULL, '2020-09-12 11:39:56', '2020-09-12 11:39:56'),
(19, 16, 1, 'jhgjhttryhtgh', 'jghj', 'fddgg@fergre.com', 'Male', '2020-08-29', '8433534543', NULL, 1, '', '2020-09-14 07:19:42', '2020-09-14 07:19:42'),
(20, 12, 1, 'jhgjhttryhtghjkh', 'jghj', 'dfsf@dfg.com', 'Male', '2020-08-29', '4654654656', NULL, 1, '', '2020-09-14 10:52:26', '2020-09-14 10:52:26'),
(21, 17, 1, 'ghfhhrtfdg', 'rtyrty', 'test@test.com', 'Male', '2020-08-29', '8218526790', NULL, 1, '', '2020-09-15 04:25:10', '2020-09-15 04:25:10'),
(22, 19, 1, 'fnameee', 'lnamemmmmm', 'test1@test.com', 'Male', '2020-08-29', '8218526781', NULL, 2, 'reject docs', '2020-09-15 04:58:00', '2020-09-15 04:58:00'),
(23, 21, 2, 'gyryrty1', 'ghfghrt3', 'dasd@gd.com', NULL, NULL, '8218526730', 'profile_09172101user_13.jpg', 1, '', '2020-09-16 03:55:30', '2020-09-16 03:55:30'),
(24, 22, 2, 'dfgdfg', 'hgfhfg', 'try@fgdfg.com', NULL, NULL, '8218526700', NULL, 1, '', '2020-09-16 12:45:42', '2020-09-16 12:45:42'),
(25, 24, 2, 'sdgdfgg', 'dgdfg', 'fgg@gdferr.com', NULL, NULL, '8218526722', 'profile_09170820user_13.jpg', 1, '', '2020-09-17 10:33:10', '2020-09-17 10:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_documents`
--

CREATE TABLE `tbl_customer_documents` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_docs_user_id` int(11) NOT NULL,
  `gst_certificate` varchar(255) DEFAULT NULL,
  `shop_establishment_license` varchar(255) DEFAULT NULL,
  `msme_udyog_adhar` varchar(255) DEFAULT NULL,
  `FSSAI_certificate` varchar(255) DEFAULT NULL,
  `Trade_certificate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer_documents`
--

INSERT INTO `tbl_customer_documents` (`id`, `customer_id`, `customer_docs_user_id`, `gst_certificate`, `shop_establishment_license`, `msme_udyog_adhar`, `FSSAI_certificate`, `Trade_certificate`, `created_at`, `updated_at`) VALUES
(1, 23, 21, 'GST_09171811user_12.jpg', 'Shop_license_09162828user_7.jpg', 'Udyog_adhar_09162828user_8.jpg', 'FSSAI_certificate_09162828user_9.jpg', 'Trade_certificate_09162828user_10.jpg', '2020-09-16 06:10:28', '2020-09-16 06:10:28'),
(2, 24, 22, 'GST_09164542user_1.jpg', 'Shop_license_09164542user_2.jpg', 'Udyog_adhar_09164542user_3.jpg', 'FSSAI_certificate_09164542user_4.jpg', 'Trade_certificate_09164542user_5.jpg', '2020-09-16 12:45:42', '2020-09-16 12:45:42'),
(3, 25, 24, NULL, NULL, NULL, NULL, NULL, '2020-09-17 10:35:11', '2020-09-17 10:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dozen`
--

CREATE TABLE `tbl_dozen` (
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dozen`
--

INSERT INTO `tbl_dozen` (`attr_id`, `attr_name`, `is_active`) VALUES
(1, 'red', 1),
(2, '', 1),
(3, 'Green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(121) DEFAULT NULL,
  `g_details` varchar(191) DEFAULT NULL,
  `grp_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type_id` int(11) NOT NULL DEFAULT 0,
  `alias` varchar(191) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`g_id`, `g_name`, `g_details`, `grp_id`, `status`, `type_id`, `alias`, `created_by`, `updated_by`, `created_at`, `update_at`) VALUES
(1, 'Customer', 'customer', 0, 1, 1, '1', 1, NULL, '2020-07-18 21:45:32', NULL),
(2, 'Customer Delhi', 'Customenr Delhi', 1, 1, 1, '1', 1, NULL, '2020-07-18 21:50:51', NULL),
(3, 'Customer Bihar', 'Customer Bihar', 1, 1, 1, '1', 1, NULL, '2020-07-18 21:51:48', NULL),
(4, 'Patna', 'Patna', 3, 1, 1, '1', 1, NULL, '2020-07-18 21:54:18', NULL),
(5, 'Gaya', 'Gaya', 3, 1, 1, '1', 1, NULL, '2020-07-18 21:54:53', NULL),
(6, 'New Ashok Nagar', 'New Ashok Nagar', 2, 1, 1, 'New Ashok Nagar', 1, NULL, '2020-07-18 21:57:36', NULL),
(7, 'Laxmi Nagar', 'Laxmi Nagar', 2, 1, 1, 'Laxmi Nagar', 1, NULL, '2020-07-18 21:58:05', NULL),
(8, 'STEEL', 'STEEL', 0, 1, 1, 'STEEL', 1, NULL, '2020-07-18 22:00:33', NULL),
(9, 'COOKWARE', 'COOKWARE', 8, 1, 1, 'COOKWARE', 1, NULL, '2020-07-18 22:01:49', NULL),
(10, 'PRESSURE COOKER', 'PRESSURE COOKER', 9, 1, 1, 'PRESSURE COOKER', 1, NULL, '2020-07-18 22:02:20', NULL),
(11, 'TOP-BHOGNA', 'TOP-BHOGNA', 9, 1, 1, 'TOP-BHOGNA', 1, NULL, '2020-07-18 22:03:17', NULL),
(12, 'ALUMINIUM', 'ALUMINIUM', 0, 1, 1, 'ALUMINIUM', 1, NULL, '2020-07-18 23:27:30', NULL),
(13, 'COOKWARE', 'COOKWARE', 12, 1, 1, 'COOKWARE', 1, NULL, '2020-07-18 23:28:02', NULL),
(14, 'TOP-BHOGNA', 'TOP-BHOGNA', 13, 1, 1, 'TOP-BHOGNA', 1, NULL, '2020-07-18 23:29:11', NULL),
(15, 'Mobile', NULL, 0, 1, 1, NULL, 1, NULL, '2020-07-19 10:44:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_attribute`
--

CREATE TABLE `tbl_group_attribute` (
  `id` int(11) NOT NULL,
  `g_id` varchar(121) DEFAULT NULL,
  `attr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group_attribute`
--

INSERT INTO `tbl_group_attribute` (`id`, `g_id`, `attr_id`) VALUES
(1, '9', 1),
(2, '9', 3),
(3, '9', 4),
(4, '15', 1),
(5, '15', 1),
(6, '15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `item_id` int(11) NOT NULL,
  `attribute_family_id` int(10) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `item_name` varchar(121) NOT NULL,
  `item_sku` varchar(25) NOT NULL,
  `description` text DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `item_group_id` int(11) DEFAULT 0,
  `open_qty` int(11) NOT NULL DEFAULT 0,
  `min_qty` int(11) DEFAULT NULL,
  `back_qty` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`item_id`, `attribute_family_id`, `brand_id`, `group_id`, `item_name`, `item_sku`, `description`, `sale_price`, `regular_price`, `item_group_id`, `open_qty`, `min_qty`, `back_qty`, `status`) VALUES
(45, NULL, 0, 15, 'Apple', '', NULL, NULL, NULL, 0, 5, 2, 0, 1),
(46, NULL, 4, 15, 'Samsung12', 'ghgyff', 'hgjguy', 400, 500, 0, 2, 4, 0, 1),
(47, NULL, 0, 15, 'samsung j7', '', NULL, NULL, NULL, 0, 2, 2, 0, 1),
(48, NULL, 0, 15, 'Nokia', '', NULL, NULL, NULL, 0, 2, 2, 0, 1),
(49, NULL, 0, 15, 'Sony', '', NULL, NULL, NULL, 0, 4, 3, 0, 1),
(50, NULL, 0, 15, 'Htc phone', '', NULL, NULL, NULL, 0, 3, 1, 0, 1),
(51, NULL, 0, 15, 'Blackberry', '', NULL, NULL, NULL, 0, 2, 2, 0, 1),
(52, NULL, 0, 15, 'Test', '', NULL, NULL, NULL, 0, 4, 1, 0, 1),
(53, NULL, 1, 15, 'applei6', '', 'applei6applei', 100, 500, 0, 4, 12, 0, 1),
(54, NULL, 1, 15, 'apple2', '', 'apple2', 100, 200, 0, 4, 2, 0, 1),
(55, NULL, 1, 15, 'apple8', '', NULL, 500, 500, 0, 2, 3, 0, 1),
(56, NULL, 1, 15, 'apple8', '', NULL, 500, 500, 0, 2, 3, 0, 1),
(57, NULL, 1, 15, 'apple8', '', NULL, 500, 500, 0, 2, 3, 0, 1),
(58, NULL, 1, 15, 'apple9', 'hsdfdfgyd', 'hdsjfg', 300, 500, 0, 3, 4, 0, 1),
(59, NULL, 1, 15, 'Apple10', 'sdjhfjhf', NULL, NULL, NULL, 0, 23, 23, 0, 1),
(60, NULL, 1, 1, 'cgchgfgh', '', NULL, NULL, NULL, 0, 4, 2, 0, 1),
(61, NULL, 1, 1, 'test', '', NULL, 100, 500, 0, 4, 1, 0, 1),
(69, NULL, 1, 1, 'dsfggyfgdy', 'gdydgfh', 'vv', 300, 343, 0, 2, 3, 0, 1),
(70, NULL, 1, 1, 'Hoking', 'h6hhhhu', NULL, 5657, 5656, 0, 7, 66, 0, 1),
(71, NULL, 1, 15, 'gcfyjguehhk', 'gguy', 'jkk', 45, 4343, 0, 2, 34, 0, 1),
(72, NULL, NULL, NULL, 'charger', 'jjj77', NULL, NULL, NULL, 0, 0, NULL, 0, 1),
(73, 1, NULL, NULL, 'testwithattr', '4234', NULL, NULL, NULL, 0, 0, NULL, 0, 1),
(74, 1, 3, NULL, 'gdtryws', '5665', 'cdssd', 100, 200, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_attributes`
--

CREATE TABLE `tbl_item_attributes` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `attr_code` varchar(50) NOT NULL,
  `attr_option` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_attributes`
--

INSERT INTO `tbl_item_attributes` (`id`, `item_id`, `attr_code`, `attr_option`) VALUES
(30, 74, 'color', 50),
(31, 74, 'color', 51),
(32, 74, 'color', 52),
(33, 74, 'size', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_gallery`
--

CREATE TABLE `tbl_item_gallery` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `img_name` varchar(191) NOT NULL,
  `default` int(11) NOT NULL DEFAULT 0,
  `alt_tag` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_gallery`
--

INSERT INTO `tbl_item_gallery` (`id`, `item_id`, `img_name`, `default`, `alt_tag`, `is_active`, `created_at`, `updated_at`, `created_by`, `update_by`) VALUES
(17, 45, '528e7a6553cf5a26a0506d3dea944a08d969bc5e.png', 1, 'brand-apple.png', 1, '2020-07-22 12:14:20', NULL, 1, NULL),
(18, 46, '6129da6a16c3ffd49f45562c6e0e48697159fa12.png', 1, 'brand-samsung.png', 1, '2020-07-22 12:30:43', NULL, 1, NULL),
(19, 47, '4c6a0c7446fff30dfd4720dcb4e43c9bec7971a0.png', 1, 'brand-samsung.png', 1, '2020-07-22 13:00:14', NULL, 1, NULL),
(20, 48, 'cd7f0ff98220a15458d2733ae5259b1ada106fd9.png', 1, 'brand-nokia.png', 1, '2020-07-22 13:08:19', NULL, 1, NULL),
(21, 49, 'f6c625a5e3a2daa977cd21aa8b4c7bf913d79c43.png', 1, 'brand-sony.png', 1, '2020-07-22 13:18:30', NULL, 1, NULL),
(22, 51, '19e41e53491b5d481acdc7d3b5fa4c153d33f6c0.png', 1, 'brand-blackberry.png', 1, '2020-07-22 14:14:52', NULL, 1, NULL),
(23, 50, '391f55dbc4d4f8fcc83e0c94d0b756904d6d4cb1.png', 1, 'brand-htc.png', 1, '2020-07-22 14:15:42', NULL, 1, NULL),
(24, 50, '318baa1f634f11e999b3854ea58bc2890858ee8b.png', 0, 'brand-samsung.png', 1, '2020-07-22 15:31:50', NULL, 1, NULL),
(25, 50, 'c1626f203e968b720fef77e86c6c9486053f348f.png', 0, 'brand-sony.png', 1, '2020-07-22 15:31:50', NULL, 1, NULL),
(26, 52, 'brand_microsoft.png_0.png', 1, 'brand-microsoft.png', 1, '2020-07-22 19:07:38', NULL, 1, NULL),
(36, 45, 'brand_samsung.png_0.png', 1, 'brand-samsung.png', 1, '2020-07-23 16:31:34', NULL, 1, NULL),
(37, 53, 'slider_3_product.png_0.png', 1, 'slider-3-product.png', 1, '2020-07-27 13:54:58', NULL, 1, NULL),
(38, 53, 'slider_3_product.png_0.png', 0, 'slider-3-product.png', 1, '2020-07-27 13:55:43', NULL, 1, NULL),
(39, 54, 'slider_3_product.png_0.png', 1, 'slider-3-product.png', 1, '2020-07-27 19:02:17', NULL, 1, NULL),
(40, 55, 'slider_3_product.png_0.png', 1, 'slider-3-product.png', 1, '2020-07-27 19:55:44', NULL, 1, NULL),
(41, 56, 'slider_3_product.png_0.png', 1, 'slider-3-product.png', 1, '2020-07-27 19:59:13', NULL, 1, NULL),
(42, 55, 'slider_1_product.png_0.png', 0, 'slider-1-product.png', 1, '2020-07-27 20:00:03', NULL, 1, NULL),
(43, 57, 'slider_1_product.png_0.png', 1, 'slider-1-product.png', 1, '2020-07-27 20:00:26', NULL, 1, NULL),
(44, 56, 'slider_product_2.png_0.png', 0, 'slider-product-2.png', 1, '2020-07-27 20:00:40', NULL, 1, NULL),
(45, 56, 'slider_2_product.png_0.png', 0, 'slider-2-product.png', 1, '2020-07-27 20:01:10', NULL, 1, NULL),
(46, 61, 'banner_07250038slider_1_product.png_0.png', 1, 'banner_07250038slider_1_product.png', 1, '2020-08-24 20:16:12', NULL, 1, NULL),
(47, 69, 'banner_07250038slider_1_product.png_0.png', 1, 'banner_07250038slider_1_product.png', 1, '2020-08-26 18:34:03', NULL, 1, NULL),
(48, 45, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-08-26 19:17:28', NULL, 1, NULL),
(49, 58, 'banner_07250038slider_1_product.png_0.png_0.png', 1, 'banner_07250038slider_1_product.png_0.png', 1, '2020-08-26 20:21:03', NULL, 1, NULL),
(50, 58, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-08-26 20:21:03', NULL, 1, NULL),
(51, 60, 'banner_07265659slider_3_product.png_0.png', 1, 'banner_07265659slider_3_product.png', 1, '2020-08-26 20:23:49', NULL, 1, NULL),
(52, 59, 'banner_07265659slider_3_product.png_0.png', 1, 'banner_07265659slider_3_product.png', 1, '2020-08-26 20:45:04', NULL, 1, NULL),
(53, 70, 'banner_07250038slider_1_product.png_0.png', 1, 'banner_07250038slider_1_product.png', 1, '2020-08-26 21:02:28', NULL, 1, NULL),
(54, 70, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-08-26 21:04:28', NULL, 1, NULL),
(55, 71, 'banner_07250038slider_1_product.png_0.png', 1, 'banner_07250038slider_1_product.png', 1, '2020-08-27 14:08:58', NULL, 1, NULL),
(56, 71, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-08-31 19:20:51', NULL, 1, NULL),
(57, 74, 'banner_07265659slider_3_product.png_0.png', 1, 'banner_07265659slider_3_product.png', 1, '2020-09-05 12:35:21', NULL, 1, NULL),
(58, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:36:28', NULL, 1, NULL),
(59, 73, 'banner_07250038slider_1_product.png_0.png', 1, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:37:17', NULL, 1, NULL),
(60, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:47:18', NULL, 1, NULL),
(61, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:47:42', NULL, 1, NULL),
(62, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:51:45', NULL, 1, NULL),
(63, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:53:57', NULL, 1, NULL),
(64, 74, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-05 12:55:22', NULL, 1, NULL),
(65, 72, 'brand_07270310slider_2_product.png_0.png', 1, 'brand_07270310slider_2_product.png', 1, '2020-09-07 10:54:03', NULL, 1, NULL),
(66, 72, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-07 10:58:20', NULL, 1, NULL),
(67, 72, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-07 10:59:09', NULL, 1, NULL),
(68, 72, 'banner_07250038slider_1_product.png_0.png', 0, 'banner_07250038slider_1_product.png', 1, '2020-09-07 11:06:40', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_groups`
--

CREATE TABLE `tbl_item_groups` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_groups`
--

INSERT INTO `tbl_item_groups` (`id`, `item_id`, `g_id`) VALUES
(11, 71, 12),
(12, 71, 13),
(13, 71, 14),
(14, 71, 15),
(15, 74, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packing`
--

CREATE TABLE `tbl_packing` (
  `id` int(10) UNSIGNED NOT NULL,
  `attr_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quality`
--

CREATE TABLE `tbl_quality` (
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quality`
--

INSERT INTO `tbl_quality` (`attr_id`, `attr_name`, `is_active`) VALUES
(1, 'red', 1),
(2, '', 1),
(3, 'Green', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_size`
--

INSERT INTO `tbl_size` (`attr_id`, `attr_name`, `is_active`) VALUES
(1, 'red', 1),
(2, '', 1),
(3, '5l', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_category`
--

CREATE TABLE `tbl_tax_category` (
  `tax_category_id` int(11) NOT NULL,
  `tax_name` varchar(121) DEFAULT NULL,
  `tax_details` text DEFAULT NULL,
  `tax_pecentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `team_user_id` int(11) NOT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `team_mobile` varchar(15) DEFAULT NULL,
  `team_email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`id`, `customer_id`, `team_user_id`, `team_name`, `team_mobile`, `team_email`, `created_at`, `update_at`) VALUES
(43, 22, 19, 'team name', '78640674354', 'dfgdg@fgdfg.com', '2020-09-16 07:36:20', '2020-09-16 07:36:20'),
(44, 22, 19, 'team name2', '534555765752', 'sdfer@gdfg.com2', '2020-09-16 07:36:20', '2020-09-16 07:36:20'),
(89, 24, 22, 'fghfgh', '5465465', 'gfhfgh@fhfgh.com', '2020-09-16 12:47:11', '2020-09-16 12:47:11'),
(90, 24, 22, 'hfgjhgj', '67657687', 'fghgjghj@fdgfgy.com', '2020-09-16 12:47:11', '2020-09-16 12:47:11'),
(93, 23, 21, 'team name', '343543', 'f@wrtet.tert', '2020-09-17 06:48:20', '2020-09-17 06:48:20'),
(94, 23, 21, 'rtert', '343435345', 'gtterter@fgrty.com', '2020-09-17 06:48:21', '2020-09-17 06:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_units_measurement`
--

CREATE TABLE `tbl_units_measurement` (
  `um_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weight`
--

CREATE TABLE `tbl_weight` (
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(121) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_weight`
--

INSERT INTO `tbl_weight` (`attr_id`, `attr_name`, `is_active`) VALUES
(1, 'red', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '1=>admin, 0=>customer',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` int(10) NOT NULL DEFAULT 0 COMMENT '1=>for profile done,0=>for profile not complete',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `mobile`, `otp`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', NULL, 123456, NULL, '$2y$10$8nHTBdpd7qC5E1TvDEvlLuK3Q724NwBSjVAL1jl95JIi1OCwd2xhq', 1, NULL, '2020-07-18 03:01:58', '2020-09-14 01:00:46'),
(9, 0, 'neerajw1 verma', NULL, '8218526734', 123456, NULL, NULL, 0, NULL, '2020-09-09 01:57:58', '2020-09-14 07:21:49'),
(10, 0, NULL, NULL, '8218526749', 123456, NULL, NULL, 1, NULL, '2020-09-11 05:36:03', '2020-09-11 05:47:03'),
(11, 0, NULL, NULL, '7703886088', 123456, NULL, NULL, 1, NULL, '2020-09-12 06:07:51', '2020-09-12 06:09:57'),
(12, 0, NULL, 'dfsf@dfg.com', '4654654656', 123456, NULL, NULL, 1, NULL, '2020-09-13 23:06:29', '2020-09-15 00:32:16'),
(13, 0, NULL, 'gdgfg@ger.com', NULL, 123456, NULL, NULL, 0, NULL, '2020-09-14 00:55:19', '2020-09-14 00:55:19'),
(14, 0, NULL, 'ffdg@dsff.com', NULL, 123456, NULL, NULL, 0, NULL, '2020-09-14 00:56:56', '2020-09-14 00:56:56'),
(15, 0, NULL, 'nghjghj@dfgfdg.com', NULL, 123456, NULL, NULL, 0, NULL, '2020-09-14 01:01:01', '2020-09-14 01:01:01'),
(16, 0, 'jhgjhttryhtgh jghj', 'fddgg@fergre.com', '8433534543', 123456, NULL, NULL, 1, NULL, '2020-09-14 01:11:14', '2020-09-14 22:41:00'),
(17, 0, 'ghfhhrtfdg rtyrty', 'test@test.com', '8218526790', 123456, NULL, NULL, 1, NULL, '2020-09-14 22:46:10', '2020-09-14 23:20:16'),
(18, 0, NULL, NULL, '8218526780', 123456, NULL, NULL, 0, NULL, '2020-09-14 23:26:16', '2020-09-14 23:26:16'),
(19, 0, 'fnameee lnamemmmmm', 'test1@test.com', '8218526781', 123456, NULL, NULL, 0, NULL, '2020-09-14 23:26:26', '2020-09-16 02:06:20'),
(20, 0, NULL, 'demo@demo.com', NULL, 123456, NULL, NULL, 0, NULL, '2020-09-15 01:24:43', '2020-09-15 01:24:43'),
(21, 0, 'Gyryrtyd3 ghfghrt3', 'dasd@gd.com', '8218526730', 123456, NULL, NULL, 1, NULL, '2020-09-15 22:17:40', '2020-09-17 03:54:43'),
(22, 0, 'fghfgh rtyrty', 'try@fgdfg.com', '8218526700', 123456, NULL, NULL, 1, NULL, '2020-09-16 07:13:39', '2020-09-16 07:17:12'),
(23, 0, NULL, NULL, '8218526712', 123456, NULL, NULL, 0, NULL, '2020-09-16 07:20:14', '2020-09-16 07:20:14'),
(24, 0, 'dfgfdg dfgdf', 'fgg@gdferr.com', '8218526722', 123456, NULL, NULL, 1, NULL, '2020-09-17 05:01:52', '2020-09-17 05:35:07');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tbl_addresses`
--
ALTER TABLE `tbl_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attribute`
--
ALTER TABLE `tbl_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attributes`
--
ALTER TABLE `tbl_attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_code_unique` (`attribute_code`);

--
-- Indexes for table `tbl_attribute_families`
--
ALTER TABLE `tbl_attribute_families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attribute_families_group`
--
ALTER TABLE `tbl_attribute_families_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attribute_options`
--
ALTER TABLE `tbl_attribute_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_options_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner_size`
--
ALTER TABLE `tbl_banner_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_businesses`
--
ALTER TABLE `tbl_businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_documents`
--
ALTER TABLE `tbl_customer_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dozen`
--
ALTER TABLE `tbl_dozen`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_group_attribute`
--
ALTER TABLE `tbl_group_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_item_attributes`
--
ALTER TABLE `tbl_item_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_gallery`
--
ALTER TABLE `tbl_item_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_groups`
--
ALTER TABLE `tbl_item_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packing`
--
ALTER TABLE `tbl_packing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`attr_id`);

--
-- Indexes for table `tbl_tax_category`
--
ALTER TABLE `tbl_tax_category`
  ADD PRIMARY KEY (`tax_category_id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_weight`
--
ALTER TABLE `tbl_weight`
  ADD PRIMARY KEY (`attr_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addresses`
--
ALTER TABLE `tbl_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_attribute`
--
ALTER TABLE `tbl_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_attributes`
--
ALTER TABLE `tbl_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_attribute_families`
--
ALTER TABLE `tbl_attribute_families`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_attribute_families_group`
--
ALTER TABLE `tbl_attribute_families_group`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_attribute_options`
--
ALTER TABLE `tbl_attribute_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_banner_size`
--
ALTER TABLE `tbl_banner_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_businesses`
--
ALTER TABLE `tbl_businesses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_customer_documents`
--
ALTER TABLE `tbl_customer_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dozen`
--
ALTER TABLE `tbl_dozen`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_group_attribute`
--
ALTER TABLE `tbl_group_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_item_attributes`
--
ALTER TABLE `tbl_item_attributes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_item_gallery`
--
ALTER TABLE `tbl_item_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_item_groups`
--
ALTER TABLE `tbl_item_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_packing`
--
ALTER TABLE `tbl_packing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quality`
--
ALTER TABLE `tbl_quality`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tax_category`
--
ALTER TABLE `tbl_tax_category`
  MODIFY `tax_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_weight`
--
ALTER TABLE `tbl_weight`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
