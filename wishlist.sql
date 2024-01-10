-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 12:48 PM
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
-- Database: `wishlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `uname`, `email`, `password`, `profilepicture`, `location`, `displayname`, `created_at`, `updated_at`) VALUES
(1, 'jacky', 'jacky@gmial.com', '1234', '1234', 'pretoria', 'jak', '2023-11-17 14:27:05', '2023-11-17 14:27:05'),
(2, 'sa', 'sad', 'sa', 'sas', 'asas', 'sas', '2023-11-26 05:28:49', '2023-11-26 05:28:49');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(255) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `itemimage` varchar(255) NOT NULL,
  `itemsite` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `client`, `iname`, `price`, `itemimage`, `itemsite`, `description`, `created_at`, `updated_at`) VALUES
(1, 'tyt', 'ttyt', 5000.56, 'asda', 'asda', 'asd', '2023-11-16 15:29:30', '2023-11-16 15:29:58'),
(2, 'jacky', 'jak', 2122.55, 'img4', 'site.com', 'dasd', '2023-11-17 14:27:40', '2023-11-17 14:29:48'),
(3, 'uiui', 'iphonex', 12000.99, 'iphone img', 'apple.com', 'ipphone ten', '2023-11-17 16:39:13', NULL),
(5, 'yuy', 'rr', 10.00, 's', 's', 's', '2023-11-17 15:01:33', '2023-11-17 15:01:33'),
(6, 's', 's', 2.00, 's', 's', 's', '2023-11-17 15:06:46', '2023-11-17 15:06:46'),
(8, 'lee', 'vii', 7.00, 'seven', '7', '7', '2023-11-17 15:15:13', '2023-11-17 15:15:13'),
(10, 'lee', 'sony xperia', 8.47, 'sony', 'sony.com', 'latest model', '2023-11-17 16:48:40', '2023-11-17 16:48:40'),
(25, 'Paballo', 'keyboard', 3000.00, '1700946913_logitech-g815-lightsync-rgb-mechanical-keyboard-tactile-switch-600px-v2.jpg', 'https://www.evetech.co.za/logitech-g815-lightsync-rgb-mechanical-keyboard-tactile-switch/best-deal/9908.aspx', 'keybaord', '2023-11-25 19:15:13', '2023-11-25 19:15:13'),
(26, 't2', 'Teamgroup TM8FPW002T0C101', 2000.99, '1700979457_teamgroup_mp44_1__1.jpg', 'https://www.wootware.co.za/teamgroup-tm8fpw002t0c101-mp44-2tb-pcie-4-0-x4-nvme-m-2-2280-solid-state-drive.html', 'SSD', '2023-11-26 04:17:37', '2023-11-26 04:17:37'),
(27, 'thabiso', 'Cooler Master MH630', 780.00, '1701057164_cooler-master-cm110-gaming-mouse.jpg', 'https://www.coolermaster.com/us/en-us/catalog/peripheral/mice/mm710/', 'innovation', '2023-11-26 05:26:28', '2023-11-27 01:52:44'),
(29, 'thabiso', 'ASUS 90MP01Q0', 1200.50, '1701058958_asus-ra05-tuf-gaming-k3rdus01.jpg', 'https://www.wootware.co.za/asus-90mp01q0-bkua00-tuf-gaming-k3-rgb-mechanical-wired-gaming-keyboard.html', 'RGB Illuminated Mechanical Gaming Keyboard', '2023-11-27 02:22:38', '2023-11-27 02:22:38'),
(33, 'thabiso', 'Sennheiser HD 559', 1200.99, '1701423392_sennheiser-hd-559-bk-01.jpg', 'https://www.wootware.co.za/sennheiser-hd-559-ergonomic-around-ear-wired-headset.html', 'dope headsets', '2023-12-01 07:34:34', '2023-12-01 07:36:32');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_144708_create_items_table', 1),
(6, '2023_11_15_144718_create_clients_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2023_11_16_170404_create_clients_table', 2),
(9, '2023_11_16_170412_create_items_table', 2),
(10, '2023_11_16_172209_create_clients_table', 3),
(11, '2023_11_16_172214_create_items_table', 3);

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
(1, 'thabiso', 'thabz@gmail.com', NULL, '$2y$12$6.l7g2atxgOcELCTaKviz.N78uMYA2HpuywZwVBUpr245ianUVA3W', NULL, '2023-11-15 13:24:03', '2023-11-15 13:24:03'),
(2, 'thabiso', 'thabz2@gmail.com', NULL, '$2y$12$A7Y5dwWZe9EkYmNhP3fx9uCCqGZu/NffJZrmfG3UemUCzNlBEORKu', NULL, '2023-11-16 14:57:02', '2023-11-16 14:57:02'),
(3, 't2', 't2@gmail.com', NULL, '$2y$12$.CdhmJEfkqcHNPsURk1XE.KLGh1I/AEk0rz3GSsToEHlaoCO6zk42', NULL, '2023-11-17 01:22:41', '2023-11-17 01:22:41'),
(4, 'lee', 'lee@gmail.com', NULL, '$2y$12$9kHZz0LzY02XsIF7hpaphOnC9LEbXxp.5D3ManyPuSkDUnIbn1jeO', NULL, '2023-11-17 15:14:25', '2023-11-17 15:14:25'),
(5, 'Paballo', 'paballokgotle@gmail.com', NULL, '$2y$12$JcWfkCoLP7D3UJK.j4Xdu.a7kJasIalGRD7tqVK4VrUACXSyTVFvm', NULL, '2023-11-25 19:06:13', '2023-11-25 19:06:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
