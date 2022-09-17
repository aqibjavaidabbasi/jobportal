-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 11:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel9_jportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `email`, `phone`, `type`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'EGA', 'ar@gmail.com', '03432244556', 'IT', 'xderfc', NULL, NULL, '2022-09-09 17:55:15'),
(7, 'nested', 'nested@gmail.com', '+923435533487', 'cs', 'rwp', NULL, '2022-09-09 18:03:09', '2022-09-09 18:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `company_scholarship`
--

CREATE TABLE `company_scholarship` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inclusions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_scholarship`
--

INSERT INTO `company_scholarship` (`id`, `title`, `name`, `field`, `description`, `NOS`, `tg`, `inclusions`, `eligibility`, `instructions`, `deadline`, `joining_date`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'csd', 'IT', 'The University of Sydney International Scholarship, funded by the University of Sydney, provides a year', '33', 'International students', 'For 2022 awards, the scholarship was valued at $35,629 per annum. The scholarship assists with tuition fees and living costs.', 'You Must:\r\n• be a commencing or enrolled international student\r\n• have an outstanding record of academic achievement and research potential', 'Commencing students should select the check box to be considered for research scholarships when completing the admission application for your postgraduate research degree. A separate application is', '20/9/2022', '01/10/2022', 'xyz', NULL, '2022-09-15 15:54:36', '2022-09-15 16:44:40'),
(5, 'css', 'jk', 'CA', 'cdkk dcdq dcdc', '44', 'International students', 'wcdc cdcdc f fc', 'dde rfr cdcd cdcd', 'xsx k kks ceed', '20/9/2022', '01/10/2022', 'mskd kkc ede', NULL, '2022-09-16 15:40:23', '2022-09-16 15:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_portal`
--

CREATE TABLE `job_portal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_portal`
--

INSERT INTO `job_portal` (`id`, `company`, `location`, `title`, `category`, `jobd`, `qf`, `jobt`, `gender`, `vacancy`, `salary`, `ad`, `joind`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'zeeon', 'islamabad', 'Php developer', 'prog.', 'lorum ipsum', 'ipsum lorum', 'Full-Time', 'Male', 2, 25000, '26/8/2022', '01/09/2022', NULL, '2022-08-21 12:04:46', '2022-09-01 19:36:40'),
(6, 'caliber', 'saddar', 'ddr', 'ddd', 'ddd', 'cvv', 'Full-Time', 'Male', 1, 20000, '27/8/2022', '01/09/2022', NULL, '2022-08-21 15:02:16', '2022-08-27 18:14:42');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_08_20_145448_change_status_typeusers_table', 2),
(11, '2022_08_20_204621_create_job_portal_table', 3),
(13, '2022_09_09_185733_create_company_info_table', 4),
(14, '2022_09_13_222210_create_company_scholarship_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saad@gmail.com', '$2y$10$IpCZhVptgBzUB6l6hyt0/ePd1ysmLReKoAgA782oObwr0ybOz./JW', '2022-08-20 18:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'saad ali', 'saad@gmail.com', 'User', NULL, '$2y$10$IOkVzklxeZwC0Qi66YU.AeHt8cWg9bVxXlotd7PoAf06iNvCyk5mG', NULL, '2022-08-19 16:24:55', '2022-08-22 16:54:36'),
(10, 'mirza', 'mirzashafique23@gmail.com', 'Admin', NULL, '$2y$10$pbvyb5EeodUfETSbGrlRO.pEDp4/Ysrn7NgxVmEncwAbcHMZ4Nz8m', NULL, '2022-08-20 18:17:51', '2022-09-12 17:01:13'),
(53, 'usman', 'abdul3@gmail.com', 'Admin', NULL, '$2y$10$8TcE9fk0wzD.ZODRxwO6ru0kb7dMrdDNuz7uFE.fg4Lenp.0Qtbpi', NULL, '2022-09-12 18:38:12', '2022-09-12 18:38:12'),
(54, 'karim', 'abdul@gmail.com', 'Admin', NULL, '$2y$10$.5ZK5TNNEfaG4Vs2tGw93OaVB./pAx85ENZ16MeoxcSwxPx2O9esC', NULL, '2022-09-12 18:40:43', '2022-09-12 18:40:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_info_email_unique` (`email`);

--
-- Indexes for table `company_scholarship`
--
ALTER TABLE `company_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_portal`
--
ALTER TABLE `job_portal`
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
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company_scholarship`
--
ALTER TABLE `company_scholarship`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_portal`
--
ALTER TABLE `job_portal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
