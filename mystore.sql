-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 02:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'Sidoarjo', '2022-04-19 08:54:30', NULL),
(2, 'Lukita', 'Surabaya', '2022-04-13 08:54:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ANALGESIK NON NARKOTIK', '1.2. ANALGESIK NON NARKOTIK', NULL, NULL),
(2, 'ANTIPIRAI', '1.3. ANTIPIRAI', NULL, NULL),
(3, 'ANESTETIK LOKAL', '2.1 ANESTETIK LOKAL', NULL, NULL),
(4, 'ANTIMIGREN', '7.1 ANTIMIGREN', NULL, NULL),
(5, 'ANTIVERTIGO', '7.2 ANTIVERTIGO', NULL, NULL),
(6, 'IMUNOSUPRESAN', '8.2 IMUNOSUPRESAN', NULL, NULL),
(7, 'SITOTOKSIK', '8.3 SITOTOKSIK', NULL, NULL),
(8, 'DIURETIK', '15.1 DIURETIK', NULL, NULL),
(9, 'OBAT untuk HIPERTROFI PROSTAT', '15.2 OBAT untuk HIPERTROFI PROSTAT', NULL, NULL);

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
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(12,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `faskes1` tinyint(1) DEFAULT 0,
  `faskes2` tinyint(1) DEFAULT 0,
  `faskes3` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `form`, `formula`, `price`, `description`, `category_id`, `faskes1`, `faskes2`, `faskes3`, `created_at`, `updated_at`, `image`) VALUES
(1, 'asam mefenamat', 'kaps 250 mg', '30 kaps/bulan.', 10000.00, 'Ini Obat Keras', 1, 1, 1, 1, NULL, '2022-04-25 18:22:44', 'asammefenamat250mg.jpg'),
(2, 'asam mefenamat', 'tab 500 mg', '30 tab/bulan.', 12000.00, '', 1, 1, 1, 1, NULL, NULL, 'asammefenamat500.jpg'),
(3, 'ibuprofen', 'tab 200 mg', '30 tab/bulan.', 8000.00, '', 1, 1, 1, 1, NULL, NULL, 'ibuprofen200.jpg'),
(4, 'ibuprofen', 'tab 400 mg', '30 tab/bulan.', 9500.00, '', 1, 1, 1, 1, NULL, NULL, 'ibuprofen400.jpg'),
(5, 'asam mefenamat', ' susp 100 mg/5 mL', '1 btl/kasus.', 15000.00, '', 1, 1, 1, 1, NULL, NULL, 'asammefenamat100.jpg'),
(6, 'ketoprofen', ' inj 50 mg/mL', '', 22000.00, 'Untuk nyeri sedang sampai berat pada pasien yang tidak', 1, 1, 1, 1, NULL, NULL, 'ketoprofen50.jpg'),
(7, 'ketoprofen', 'sup 100 mg', '2 sup/hari, maks 3 hari.', 25000.00, 'Untuk nyeri sedang sampai berat pada pasien yang tidak', 1, 1, 1, 1, NULL, NULL, 'ketoprofen100.jpg'),
(8, 'alopurinol', 'tab 100 mg', '30tab/bulan', 17500.00, 'Tidak diberikan pada saat nyeri akut', 2, 1, 1, 1, NULL, NULL, 'alopurinol100.jpg'),
(9, 'alopurinol', 'tab 300 mg', '30tab/bulan', 17500.00, 'Tidak diberikan pada saat nyeri akut', 2, 1, 1, 1, NULL, NULL, 'alopurinol300.jpg'),
(10, 'kolkisin', 'tab 500 mcg', '30tab/bulan', 16500.00, 'Tidak diberikan pada saat nyeri akut', 2, 1, 1, 1, NULL, NULL, 'kolkisin.jpg'),
(11, 'bupivakain', 'inj 0,5%', '', 12250.00, '', 3, 0, 1, 1, NULL, NULL, 'bupivakain.jpg'),
(12, 'lidokain', 'inj 0,5%', '', 12250.00, '', 3, 1, 1, 1, NULL, NULL, 'lidokain05.jpg'),
(13, 'lidokain', 'spray topikal 10%', '', 12250.00, '', 3, 1, 1, 1, NULL, NULL, 'lidokain10.jpg'),
(14, 'propranolol', 'tab 10 mg', '', 25250.00, '', 4, 1, 1, 1, NULL, NULL, 'propanolol.jpg'),
(15, 'betahistin', 'tab 6 mg', 'Untuk vertigo perifer:\n                - BPPV: 1 minggu.\n                - non BPPV: 30 \n                tab/bulan', 25250.00, 'Hanya untuk sindrom \n             meniere atau vertigo perifer.  Untuk sindrom meniere atau\n             vertigo non BPPV hanya di \n             Faskes Tk. 2 dan 3', 5, 1, 1, 1, NULL, NULL, 'betahistin6.jpg'),
(16, 'betahistin', 'tab 24 mg', '90 tab/bulan.n', 35000.00, 'Hanya untuk sindrom \n             meniere atau vertigo perifer.  Untuk sindrom meniere atau\n             vertigo non BPPV hanya di \n             Faskes Tk. 2 dan 3. Hanya untuk sindrom meniere', 5, 0, 1, 1, NULL, NULL, 'betahistin24.jpg'),
(17, 'Abacavir', 'Kaplet 150 mg', '25kaps/bulan', 45000.00, 'Abacavir untuk ibu hamil dan menyusui', 3, 0, 0, 0, '2022-04-25 19:06:11', '2022-04-25 19:06:11', 'abacavir.jpg'),
(18, 'ACE Inhibitor', 'Kaplet 20 mg', '0,2 mg/kgBB', 50000.00, 'ACE inhibitor bekerja dengan cara menghambat enzim dalam tubuh untuk memproduksi hormon angiotensin II, yaitu zat yang dapat menyempitkan pembuluh darah dan meningkatkan kerja jantung. Dengan begitu, dinding pembuluh darah akan melebar dan kerja jantung menjadi lebih ringan.', 1, 1, 0, 1, '2022-04-25 19:13:49', '2022-04-25 19:13:49', 'aceinhibitor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_transaction`
--

CREATE TABLE `medicine_transaction` (
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_transaction`
--

INSERT INTO `medicine_transaction` (`medicine_id`, `transaction_id`, `quantity`, `price`) VALUES
(1, 1, 2, 10000),
(3, 2, 3, 8000),
(8, 1, 1, 17500),
(10, 3, 2, 16500),
(12, 3, 4, 12250),
(14, 3, 2, 25250);

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
(69, '2014_10_12_000000_create_users_table', 1),
(70, '2019_08_19_000000_create_failed_jobs_table', 1),
(71, '2022_02_21_121304_create_products_table', 1),
(72, '2022_02_21_121608_create_categories_table', 1),
(73, '2022_02_21_121907_add_categoryid_column', 1),
(74, '2022_02_21_124109_create_medicines_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `created_at`, `updated_at`, `category_id`, `supplier_id`) VALUES
(1, 'fentanil', 5000, NULL, NULL, 1, 0),
(2, 'kodein', 8000, NULL, NULL, 1, 0),
(3, 'ibuprofen', 4000, NULL, NULL, 2, 0),
(4, 'paracetamol', 2000, NULL, NULL, 2, 0),
(5, 'fentanil', 5000, NULL, NULL, 1, 0),
(6, 'kodein', 8000, NULL, NULL, 1, 0),
(7, 'ibuprofen', 4000, NULL, NULL, 2, 0),
(8, 'paracetamol', 2000, NULL, NULL, 2, 0),
(9, 'OBH Combi', 10000, '2022-04-24 04:40:01', '2022-04-24 04:40:01', 4, 0),
(10, 'Konimex', 8000, '2022-04-24 04:55:18', '2022-04-24 04:55:18', 6, 0),
(11, 'hexos', 9000, '2022-04-24 05:48:02', '2022-04-24 05:48:02', 6, 4),
(12, 'Decolgen', 8000, '2022-04-24 18:46:23', '2022-04-24 18:46:23', 1, 2),
(13, 'Promag', 12000, '2022-04-24 18:47:50', '2022-04-24 18:47:50', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`) VALUES
(1, 'david', 'surabaya,manukan tengah'),
(2, 'ellisa noel', 'benowo,surabaya'),
(3, 'toko abc', 'tangerang'),
(4, 'angel crew', 'kenjeran'),
(5, 'baby angel', 'sidoarjo'),
(7, 'andika', 'bogor'),
(8, 'toko echo', 'malang'),
(10, 'david techshop', 'surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `buyer_id`, `user_id`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2022-04-13 15:57:24', '2022-04-13 08:57:24', NULL),
(2, 2, 6, '2022-04-13 15:57:24', '2022-04-13 08:57:24', NULL),
(3, 1, 6, '2022-04-15 16:01:14', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '9WCO96ATk3', 'uOmLTTaK6i@gmail.com', NULL, '$2y$10$Tjq47kNXfZpO36Evxsi2jO3lqNX.BIEBzGAC0vfggXtVqqoXbQEni', NULL, NULL, NULL),
(2, 'pGZFIgnLtk', 'Jzuu63ljPw@gmail.com', NULL, '$2y$10$XaX7gQIKVn4ZmQmWTSlHsOv2f9m4RgWgEu/iCT5KMcIxhqy5RymCC', NULL, NULL, NULL),
(3, '1Ym5ajoIEm', 'EPmPNxHCbp@gmail.com', NULL, '$2y$10$uW6T9cUEOL.OsY2gplPjROtGXPqq4vTFix7melV.D3idMv16W3Ra.', NULL, NULL, NULL),
(4, 'CIQAoekuS8', 'QKPeJoGG3t@gmail.com', NULL, '$2y$10$oV958Or6RbHKUsZD5X4WWuTiJ.WZ6aTQzg8C8ccfhFqzrV2HnMZu2', NULL, NULL, NULL),
(5, 'ses4yvB6uw', 'lwB0EX0tPY@gmail.com', NULL, '$2y$10$vGBvIj/mp84si.kyzxs0AOZcpb1SZporNBAou1sbdoeZ38VjYxFpC', NULL, NULL, NULL),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$H2yMx/bO7P9/PO1x5QieQe4gpmgrl.oRDAA5toAwynYjQY88BFZPK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_transaction`
--
ALTER TABLE `medicine_transaction`
  ADD PRIMARY KEY (`medicine_id`,`transaction_id`),
  ADD KEY `medicine_transaction_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_supplier_id_foreign` (`supplier_id`) USING BTREE;

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_buyer_id_foreign` (`buyer_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicine_transaction`
--
ALTER TABLE `medicine_transaction`
  ADD CONSTRAINT `medicine_transaction_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`),
  ADD CONSTRAINT `medicine_transaction_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
