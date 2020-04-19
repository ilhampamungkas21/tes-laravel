-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 07:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `nama`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'instagram newwwwwwwwwwwww', 'instagram@instagram.com', 'ig.png', 'instaram.co.id', '2020-04-16 17:13:53', '2020-04-19 11:33:45'),
(6, 'Facebok', 'facebok@facebok.com', '480px-Facebook_logo_(square).png', 'facebok.id', '2020-04-19 12:29:19', '2020-04-19 12:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nama`, `email`, `company_id`, `created_at`, `updated_at`) VALUES
(14, 'Anto new2', 'Anto@gmail.commmvv', 1, '2020-04-17 14:08:48', '2020-04-17 14:59:52'),
(16, 'Anto new', 'Anto@gmail.comm', 1, '2020-04-17 14:36:24', '2020-04-17 14:36:24'),
(17, 'Nabila Puspasari', 'alika.purnawati@yahoo.co.id', 1, NULL, NULL),
(18, 'Queen Yolanda', 'warji82@gmail.com', 1, NULL, NULL),
(20, 'Cahyo Uwais S.E.I', 'teddy35@lestari.net', 1, NULL, NULL),
(21, 'Diah Qori Winarsih', 'spradipta@melani.co', 1, NULL, NULL),
(22, 'Ilsa Zelaya Astuti', 'najib.wibisono@mandasari.com', 1, NULL, NULL),
(23, 'Tantri Laksita', 'dhartati@maryati.desa.id', 1, NULL, NULL),
(24, 'Wani Susanti S.H.', 'adikara.hastuti@gmail.co.id', 1, NULL, NULL),
(25, 'Kayun Firmansyah', 'bakda.purwanti@palastri.mil.id', 1, NULL, NULL),
(26, 'Uli Andriani S.Gz', 'bakiono.melani@haryanti.net', 1, NULL, NULL),
(37, 'Alika Wani Nurdiyanti', 'zutami@aryani.ac.id', 6, NULL, NULL),
(38, 'Karja Budiman', 'koktaviani@lestari.go.id', 6, NULL, NULL),
(39, 'Ellis Maria Purwanti S.Kom', 'gantar.anggriawan@gmail.co.id', 6, NULL, NULL),
(40, 'Ghaliyati Wulan Farida S.Ked', 'adikara.saefullah@yahoo.co.id', 6, NULL, NULL),
(41, 'Rachel Mardhiyah', 'gadriansyah@gmail.com', 6, NULL, NULL),
(42, 'Warta Lazuardi', 'fsihombing@rahmawati.mil.id', 6, NULL, NULL),
(43, 'Marsito Wadi Nainggolan S.H.', 'ridwan22@nainggolan.biz', 6, NULL, NULL),
(44, 'Silvia Wastuti', 'mdamanik@yahoo.com', 6, NULL, NULL),
(45, 'Joko Winarno', 'andriani.farah@budiman.biz', 6, NULL, NULL),
(46, 'Novi Riyanti', 'ypratiwi@gmail.com', 6, NULL, NULL),
(47, 'Cici Shania Lestari', 'aryani.fathonah@gmail.co.id', 6, NULL, NULL),
(48, 'Bella Kuswandari S.IP', 'irwan.santoso@gmail.com', 6, NULL, NULL),
(49, 'Karen Titin Handayani', 'ewinarsih@yahoo.com', 6, NULL, NULL),
(50, 'Humaira Puspasari S.Kom', 'iriana36@gmail.com', 6, NULL, NULL),
(51, 'Gilang Mitra Tampubolon M.Kom.', 'ramadan.taufan@iswahyudi.co.id', 6, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_04_16_071030_create_employees_table', 3);

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
(4, 'administrator', 'admin@transisi.id', NULL, '$2y$10$huAtLpEWRtx3vwyXlHdbpO7Ky06aweZgYeAluBsUA8pmEbWtWsyVK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
