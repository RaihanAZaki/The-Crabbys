-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 03:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_crabbys`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `order_id`, `table_id`, `first_name`, `last_name`, `phone`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'Raihan', 'Zaki', '087771773888', '2024-07-11 06:54:08', '2024-07-11 06:54:08'),
(4, 2, 1, 'Rehang', 'Keren', '085946533495', '2024-07-11 07:04:41', '2024-07-11 07:04:41'),
(5, 3, 3, 'Raihan', 'Zaki', '087771773888', '2024-07-11 08:04:21', '2024-07-11 08:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Kepiting', 'kepiting', 'categories/01J277FKVHHBZTYF3PJJTWBMVY.png', 1, '2024-07-07 11:28:05', '2024-07-07 11:32:14'),
(2, 'Udang', 'udang', 'categories/01J277K9TBZW857KM3D1DDHBDE.png', 1, '2024-07-07 11:33:40', '2024-07-07 11:34:15'),
(3, 'Sauce', 'saus', NULL, 1, '2024-07-07 12:04:04', '2024-07-07 12:18:06'),
(4, 'Beverages', 'beverages', 'categories/01J27AQJAJ4M9KTW1ZHKZ891WD.png', 1, '2024-07-07 12:27:03', '2024-07-07 12:29:01'),
(5, 'Fruit Juice', 'fruit-juice', 'categories/01J27ASSMYP8Q5QNBQMBF2VBBN.png', 1, '2024-07-07 12:30:14', '2024-07-07 12:30:14'),
(6, 'Side Dish', 'side-dish', NULL, 1, '2024-07-07 12:35:16', '2024-07-07 12:35:16'),
(7, 'The Crabbys Package', 'the-crabbys-package', NULL, 1, '2024-07-07 12:36:44', '2024-07-07 12:36:44'),
(8, 'Others', 'others', NULL, 1, '2024-07-07 12:36:58', '2024-07-07 12:36:58'),
(9, 'UFO - Hot Bowl', 'ufo-hot-bowl', NULL, 1, '2024-07-07 12:37:14', '2024-07-07 12:37:14');

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
-- Table structure for table `mejas`
--

CREATE TABLE `mejas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mejas`
--

INSERT INTO `mejas` (`id`, `name`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Saung K1', 'saung-k1', 1, '2024-07-11 06:40:37', '2024-07-11 06:40:37'),
(2, 'Saung K2', 'saung-k2', 1, '2024-07-11 06:46:06', '2024-07-11 06:46:06'),
(3, 'Saung K3', 'saung-k3', 1, '2024-07-11 08:02:58', '2024-07-11 08:02:58');

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
(1, '2024_07_07_164547_create_tables_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(13, '2019_08_19_000000_create_failed_jobs_table', 2),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(15, '2024_07_07_162547_create_orders_table', 2),
(16, '2024_07_07_162633_create_categories_table', 2),
(17, '2024_07_07_162639_create_products_table', 2),
(18, '2024_07_07_163634_create_order_items_table', 2),
(19, '2024_07_07_164439_create_addresses_table', 2),
(22, '2024_07_11_132437_create_mejas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` enum('new','processing','completed','canceled') NOT NULL DEFAULT 'new',
  `currency` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `grand_total`, `payment_method`, `payment_status`, `status`, `currency`, `notes`, `created_at`, `updated_at`) VALUES
(1, 2, 38000.00, 'tunai', 'paid', 'completed', 'IDR', 'Makan', '2024-07-08 09:00:06', '2024-07-11 07:17:16'),
(2, 3, 800000.00, 'debit', 'failed', 'new', 'IDR', 'Makan2', '2024-07-08 09:03:52', '2024-07-11 07:15:51'),
(3, 2, 80000.00, 'tunai', 'pending', 'completed', 'IDR', 'Makanann', '2024-07-11 08:03:42', '2024-07-11 08:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_amount` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `unit_amount`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 3, 6000.00, 18000.00, '2024-07-08 09:00:06', '2024-07-08 09:00:06'),
(2, 1, 7, 5, 4000.00, 20000.00, '2024-07-08 09:00:06', '2024-07-08 09:00:06'),
(3, 2, 8, 100, 6000.00, 600000.00, '2024-07-08 09:03:52', '2024-07-08 09:03:52'),
(4, 2, 7, 50, 4000.00, 200000.00, '2024-07-08 09:03:52', '2024-07-08 09:03:52'),
(5, 3, 7, 5, 4000.00, 20000.00, '2024-07-11 08:03:42', '2024-07-11 08:03:42'),
(6, 3, 8, 10, 6000.00, 60000.00, '2024-07-11 08:03:42', '2024-07-11 08:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `description` longtext DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `images`, `description`, `price`, `is_active`, `in_stock`, `created_at`, `updated_at`) VALUES
(1, 3, 'The Crabbys Secret Sauce', 'the-crabbys-secret-sauce', '[]', 'Imagine Padang Sauce Meet Sweet & Sour Sauce', 5000.00, 1, 1, '2024-07-07 12:06:11', '2024-07-07 12:06:11'),
(2, 3, 'Black Magic', 'black-magic', '[]', 'Black Pepper Sauce', 5000.00, 1, 1, '2024-07-07 12:06:42', '2024-07-07 12:06:42'),
(3, 3, 'Garlic Holic', 'garlic-holic', '[]', 'Goreng Bawang Putih', 5000.00, 1, 1, '2024-07-07 12:07:08', '2024-07-07 12:07:08'),
(4, 3, 'Korean Spicy Sauce', 'korean-spicy-saus', '[]', 'Sauce Korean Spicy Hanya Untuk Kepiting Saja. Lobster, Kerang, dan Jagung Silahkan Pilih Sauce Yang Tersedia', 5000.00, 1, 1, '2024-07-07 12:16:07', '2024-07-07 12:17:40'),
(5, 3, 'Caramelized Butter', 'caramelized-butter', '[]', 'Sauce Korean Spicy Hanya Untuk Kepiting Saja. Lobster, Kerang, dan Jagung Silahkan Pilih Sauce Yang Tersedia', 5000.00, 1, 1, '2024-07-07 12:16:48', '2024-07-07 12:17:54'),
(6, 3, 'Oyster Sauce', 'oyster-sauce', '[]', 'Tiram Sauce', 5000.00, 1, 1, '2024-07-07 12:17:10', '2024-07-07 12:17:10'),
(7, 4, 'Teh', 'teh', '[\"products\\/01J27AXEX541011TXQF1RA1HZS.png\"]', 'Teh Panas', 4000.00, 1, 1, '2024-07-07 12:32:14', '2024-07-07 12:32:14'),
(8, 4, 'Es Teh', 'es-teh', '[\"products\\/01J27B1K1S7Q03AK4HZRTKB79K.jpg\"]', 'Es Teh', 6000.00, 1, 1, '2024-07-07 12:34:29', '2024-07-07 12:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$HRbwxGWtp6tVdrPSb4i8i.wU09TpAGsAN/M/C62UOTO.74qNDf6ES', 'cFBXyEjruNNKsqm2VNz0rgpTKINXErkclQcvkHffT2jFiwu9wCI12VebaLgS', '2024-07-07 10:35:30', '2024-07-07 10:35:30'),
(2, 'raihan', 'rhnashil@gmail.com', NULL, '123456', NULL, '2024-07-07 11:00:14', '2024-07-07 11:00:14'),
(3, 'rkael', 'rkael238@gmail.com', '2024-07-07 11:03:41', '123456', NULL, '2024-07-07 11:04:03', '2024-07-07 11:04:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`),
  ADD KEY `addresses_table_id_foreign` (`table_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mejas`
--
ALTER TABLE `mejas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mejas`
--
ALTER TABLE `mejas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `mejas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
