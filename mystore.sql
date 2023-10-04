-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:30 PM
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
(18, 'ACE Inhibitor', 'Kaplet 20 mg', '0,2 mg/kgBB', 50000.00, 'ACE inhibitor bekerja dengan cara menghambat enzim dalam tubuh untuk memproduksi hormon angiotensin II, yaitu zat yang dapat menyempitkan pembuluh darah dan meningkatkan kerja jantung. Dengan begitu, dinding pembuluh darah akan melebar dan kerja jantung menjadi lebih ringan.', 1, 1, 0, 1, '2022-04-25 19:13:49', '2022-04-25 19:13:49', 'aceinhibitor.jpg'),
(19, 'oksaliplatin', '50mg', 'serb inj 50 mg', 56000.00, 'Untuk terapi ajuvan kanker kolorektal stadium III.', 7, 0, 0, 1, '2022-06-22 10:07:56', '2022-06-22 10:07:56', 'oksaliplatin.jpg'),
(20, 'oktreotid LAR', '20mg', '-', 78500.00, 'Untuk akromegali atau tumor karsinoid.', 7, 0, 0, 1, '2022-06-22 10:12:29', '2022-06-22 10:12:29', 'oktreotid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_transaction`
--

CREATE TABLE `medicine_transaction` (
  `medicine_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_transaction`
--

INSERT INTO `medicine_transaction` (`medicine_id`, `transaction_id`, `quantity`, `price`, `subtotal`) VALUES
(1, 1, 2, 10000, NULL),
(1, 31, 1, NULL, 10000),
(1, 43, 1, 10000, 10000),
(1, 46, 1, 10000, 10000),
(1, 50, 1, 10000, 10000),
(2, 31, 1, NULL, 12000),
(2, 43, 1, 12000, 12000),
(2, 44, 1, 12000, 12000),
(3, 2, 3, 8000, NULL),
(3, 32, 2, NULL, 8000),
(3, 43, 1, 8000, 8000),
(3, 44, 2, 8000, 16000),
(3, 50, 1, 8000, 8000),
(4, 44, 1, 9500, 9500),
(4, 51, 1, 9500, 9500),
(5, 45, 1, 15000, 15000),
(6, 45, 1, 22000, 22000),
(6, 50, 1, 22000, 22000),
(7, 30, 1, NULL, 25000),
(7, 51, 1, 25000, 25000),
(8, 1, 1, 17500, NULL),
(8, 30, 1, NULL, 17500),
(8, 51, 1, 17500, 17500),
(10, 3, 2, 16500, NULL),
(10, 30, 2, NULL, 16500),
(10, 49, 1, 16500, 16500),
(12, 3, 4, 12250, NULL),
(12, 49, 1, 12250, 12250),
(14, 3, 2, 25250, NULL),
(15, 49, 1, 25250, 25250),
(15, 51, 1, 25250, 25250),
(18, 30, 2, NULL, 50000),
(20, 51, 1, 78500, 78500);

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
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `created_at`, `updated_at`, `category_id`, `supplier_id`, `foto`) VALUES
(1, 'fentanil', 5000, NULL, '2022-05-30 05:28:48', 1, 1, '1653913728_fentanil.png'),
(2, 'kodein', 8000, NULL, '2022-05-30 05:29:24', 1, 0, '1653913764_kodein.png'),
(3, 'ibuprofen', 4000, NULL, '2022-05-30 05:30:03', 2, 0, '1653913803_ibuprofen.png'),
(4, 'paracetamol', 2000, NULL, '2022-05-30 05:30:45', 2, 0, '1653913845_paracetamol.jpg'),
(5, 'fentanil', 5000, NULL, '2022-05-30 05:31:23', 1, 0, '1653913883_fentanil.png'),
(6, 'kodein', 8000, NULL, '2022-05-30 05:32:11', 1, 0, '1653913931_kodein.png'),
(7, 'ibuprofen', 4000, NULL, '2022-05-30 05:32:19', 2, 0, '1653913939_ibuprofen.png'),
(8, 'paracetamol', 2000, NULL, '2022-05-30 05:32:31', 2, 0, '1653913951_paracetamol.jpg'),
(9, 'OBH Combi', 10000, '2022-04-24 04:40:01', '2022-05-30 05:32:58', 4, 0, '1653913978_obhcombi.jpg'),
(10, 'Konimex', 8000, '2022-04-24 04:55:18', '2022-05-30 05:33:28', 6, 0, '1653914008_konimex.png'),
(11, 'hexos', 9000, '2022-04-24 05:48:02', '2022-05-30 05:33:54', 6, 4, '1653914034_hexos.jpg'),
(12, 'Decolgen', 8000, '2022-04-24 18:46:23', '2022-05-30 05:34:20', 1, 2, '1653914060_decolgen.jpg'),
(13, 'Promag', 12000, '2022-04-24 18:47:50', '2022-05-30 05:34:52', 7, 3, '1653914092_promag.jpg'),
(16, 'Acarbose', 50000, '2022-05-25 05:36:39', '2022-05-25 05:36:39', 2, 17, '1653482199_acarbose.png'),
(19, 'Vitamin D', 20000, '2022-05-29 05:52:23', '2022-05-29 05:52:23', 3, 5, '1653828743_vitamind.png');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `logo`) VALUES
(1, 'david', 'surabaya,manukan tengah', NULL),
(2, 'ellisa noel', 'benowo,surabaya', NULL),
(3, 'toko abc', 'tangerang', NULL),
(4, 'angel crew', 'kenjeran', NULL),
(5, 'baby angel', 'sidoarjo', NULL),
(7, 'andika', 'bogor', NULL),
(8, 'toko echo', 'malang', NULL),
(10, 'david techshop', 'surabaya', NULL),
(12, 'Sari Roti', 'benowo', '1653483228_sariroti.png'),
(16, 'amaya water', 'bratang', '1653275337_1653275091_amaya.png'),
(17, 'kimia farmasi', 'ngagel', '1653275637_kimiafarmasi.png');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `buyer_id`, `user_id`, `transaction_date`, `created_at`, `updated_at`, `total`) VALUES
(1, 1, 6, '2022-04-13 15:57:24', '2022-04-13 08:57:24', NULL, NULL),
(2, 2, 6, '2022-04-13 15:57:24', '2022-04-13 08:57:24', NULL, NULL),
(3, 1, 6, '2022-04-15 16:01:14', NULL, NULL, NULL),
(30, 1, 10, '2022-06-03 02:10:20', '2022-06-02 19:10:20', '2022-06-02 19:10:20', 175500),
(31, 1, 10, '2022-06-13 03:04:08', '2022-06-12 20:04:08', '2022-06-12 20:04:08', 22000),
(32, 1, 10, '2022-06-14 08:54:06', '2022-06-14 01:54:34', '2022-06-14 01:54:34', 16000),
(43, 1, 10, '2022-06-20 10:48:06', '2022-06-20 03:48:24', '2022-06-20 03:48:24', 30000),
(44, 1, 10, '2022-06-20 10:54:06', '2022-06-20 03:54:36', '2022-06-20 03:54:36', 37500),
(45, 1, 10, '2022-06-20 10:56:06', '2022-06-20 03:56:46', '2022-06-20 03:56:46', 37000),
(46, 1, 10, '2022-06-20 11:07:06', '2022-06-20 04:07:30', '2022-06-20 04:07:31', 10000),
(49, 1, 10, '2022-06-20 11:09:06', '2022-06-20 04:09:52', '2022-06-20 04:09:52', 54000),
(50, 1, 11, '2022-06-22 17:25:06', '2022-06-22 10:25:17', '2022-06-22 10:25:17', 40000),
(51, 1, 12, '2022-06-22 17:26:06', '2022-06-22 10:26:21', '2022-06-22 10:26:21', 155750);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `sebagai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `sebagai`) VALUES
(1, '9WCO96ATk3', 'uOmLTTaK6i@gmail.com', NULL, '$2y$10$Tjq47kNXfZpO36Evxsi2jO3lqNX.BIEBzGAC0vfggXtVqqoXbQEni', NULL, NULL, NULL, NULL),
(2, 'pGZFIgnLtk', 'Jzuu63ljPw@gmail.com', NULL, '$2y$10$XaX7gQIKVn4ZmQmWTSlHsOv2f9m4RgWgEu/iCT5KMcIxhqy5RymCC', NULL, NULL, NULL, NULL),
(3, '1Ym5ajoIEm', 'EPmPNxHCbp@gmail.com', NULL, '$2y$10$uW6T9cUEOL.OsY2gplPjROtGXPqq4vTFix7melV.D3idMv16W3Ra.', NULL, NULL, NULL, NULL),
(4, 'CIQAoekuS8', 'QKPeJoGG3t@gmail.com', NULL, '$2y$10$oV958Or6RbHKUsZD5X4WWuTiJ.WZ6aTQzg8C8ccfhFqzrV2HnMZu2', NULL, NULL, NULL, NULL),
(5, 'ses4yvB6uw', 'lwB0EX0tPY@gmail.com', NULL, '$2y$10$vGBvIj/mp84si.kyzxs0AOZcpb1SZporNBAou1sbdoeZ38VjYxFpC', NULL, NULL, NULL, NULL),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$H2yMx/bO7P9/PO1x5QieQe4gpmgrl.oRDAA5toAwynYjQY88BFZPK', NULL, NULL, NULL, NULL),
(7, 'David Pratama', 'david@gmail.com', NULL, '$2y$10$Pw17.TheRrBX45.X1nOCI.Q0HNWyVtzLcQH.v0nM5FKeTy/SgHICO', NULL, '2022-05-23 06:52:12', '2022-05-23 06:52:12', NULL),
(8, 'admin', 'admin2@gmail.com', NULL, '$2y$10$v5Iq57KM6B2SP2orFL1Mt.4XRMLbjF9EcXQVPWqaW4KHVuTvRtfx6', NULL, '2022-05-23 18:31:40', '2022-05-23 18:31:40', 'owner'),
(9, 'pegawai1', 'pegawai1@gmail.com', NULL, '$2y$10$3DilazbAs3fVQ86ESEKpzepnV0AC36JAoQ.AauAqeLr91ovIfKRM6', NULL, '2022-05-23 18:32:34', '2022-05-23 18:32:34', 'pegawai'),
(10, 'Ellisa Noel', 'ellisanoel@gmail.com', NULL, '$2y$10$pEqqUcWq0lahZduvw3usi.ECpu5J1RgGZcIP6yIS5WJragRF/G/Du', NULL, '2022-05-30 04:37:36', '2022-05-30 04:37:36', 'member'),
(11, 'Olin', 'olin@gmail.com', NULL, '$2y$10$5U/V7EbgRhZOUThN0LrytumKBKQqB7NI5NJNnQRFvDIHp/c3bSg0G', NULL, '2022-06-22 10:24:33', '2022-06-22 10:24:33', 'member'),
(12, 'handika', 'handika@gmail.com', NULL, '$2y$10$r1Ia6vl5ZhYPN4BWpjY8neF1iw4sU5s.Q1cSikfV5FwqmcjkGHOk6', NULL, '2022-06-22 10:25:48', '2022-06-22 10:25:48', 'member'),
(13, 'rahmat karunia', 'rahmat@gmail.com', NULL, '$2y$10$gkJ3ilLi0ZC/fw3wcHVMIeJsujLx75JBcq9RsgDYlWV8ZCT/J6HmC', NULL, '2022-06-22 10:28:29', '2022-06-22 10:28:29', 'member'),
(14, 'angel tamariska', 'angel123@gmail.com', NULL, '$2y$10$XKLc3yjQWry71Dr4BdhbfOlRPC8WWiynxaEMpmAs5dDs/D0wrpufu', NULL, '2022-06-22 10:28:57', '2022-06-22 10:28:57', 'member');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
