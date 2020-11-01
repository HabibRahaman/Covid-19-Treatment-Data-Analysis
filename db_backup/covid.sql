-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2020 at 06:01 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `thumb` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `details`, `thumb`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangla Test Post', 'bangla-test-post', '<p>Bangla Test Post</p>', '254-2549847_404-png-download-404-not-found-transparent-png_1599117579.png', 1, '2020-09-03 00:34:28', '2020-09-03 01:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `test_status` int(11) NOT NULL DEFAULT '0',
  `ventilation` int(11) NOT NULL DEFAULT '0',
  `icu` int(11) NOT NULL DEFAULT '0',
  `health_condition` int(11) NOT NULL DEFAULT '1',
  `entry_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `type` int(11) DEFAULT NULL,
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `slug`, `details`, `type`, `risk_level`, `status`, `created_at`, `updated_at`) VALUES
(1, 'COVID-19', 'covid-19', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n</div>', 1, 2, 1, '2020-08-26 23:33:54', '2020-08-30 23:53:00'),
(2, 'Flu', 'flu', NULL, 1, 2, 1, '2020-08-31 00:42:00', '2020-08-31 00:42:00'),
(3, 'Pessure', 'pessure', '<p>Pessure</p>', 3, 2, 1, '2020-09-11 00:16:24', '2020-09-11 00:16:24'),
(4, 'Diabestiecs', 'diabestiecs', '<p>Diabestiecs</p>', 3, 3, 1, '2020-09-11 00:16:42', '2020-09-11 00:16:42'),
(5, 'Fever', 'fever', '<p>Fever</p>', 4, 1, 1, '2020-09-11 00:17:09', '2020-09-11 00:17:09'),
(6, 'Tanchil', 'tanchil', '<p>Tanchil</p>', 4, 1, 1, '2020-09-11 00:17:27', '2020-09-11 00:17:27'),
(7, 'Pleg', 'pleg', '<p>Pleg</p>', 1, 3, 1, '2020-09-11 00:17:50', '2020-09-11 00:17:50'),
(8, 'Cough', 'cough', '<p>Cough</p>', 4, 1, 1, '2020-09-11 00:18:10', '2020-09-11 00:18:10'),
(9, 'Ebola', 'ebola', '<p>Ebola</p>', 1, 3, 1, '2020-09-11 00:19:04', '2020-09-11 00:19:04'),
(10, 'Diariya', 'diariya', '<p>Diariya</p>', 4, 2, 1, '2020-09-11 00:19:43', '2020-09-11 00:19:43'),
(11, 'Asthema', 'asthema', '<p>Asthema</p>', 3, 2, 1, '2020-09-11 00:20:06', '2020-09-11 00:20:06'),
(12, 'Dengu', 'dengu', '<p>Dengu</p>', 1, 3, 1, '2020-09-11 00:21:11', '2020-09-11 00:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `disease_health_care`
--

CREATE TABLE `disease_health_care` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `health_care_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_health_care`
--

INSERT INTO `disease_health_care` (`disease_id`, `health_care_id`) VALUES
(2, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `disease_medical_condition`
--

CREATE TABLE `disease_medical_condition` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `medical_condition_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_medical_condition`
--

INSERT INTO `disease_medical_condition` (`disease_id`, `medical_condition_id`) VALUES
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptom`
--

CREATE TABLE `disease_symptom` (
  `disease_id` int(10) UNSIGNED NOT NULL,
  `symptom_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disease_symptom`
--

INSERT INTO `disease_symptom` (`disease_id`, `symptom_id`) VALUES
(1, 2),
(1, 3),
(2, 3),
(2, 2),
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `health_cares`
--

CREATE TABLE `health_cares` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `type` int(11) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_cares`
--

INSERT INTO `health_cares` (`id`, `name`, `slug`, `details`, `type`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ice Therapy', 'ice-therapy', '<p>Ice Therapy</p>', 1, 3, 1, '2020-09-02 01:21:14', '2020-09-02 01:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `medical_conditions`
--

CREATE TABLE `medical_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `instructions` text,
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_conditions`
--

INSERT INTO `medical_conditions` (`id`, `name`, `slug`, `details`, `instructions`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(3, 'High Pressure', 'high-pressure', '<p>High Pressure</p>', '<p>High Pressure</p>', 3, 1, 1, '2020-09-02 00:10:33', '2020-09-02 00:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `group` tinyint(1) NOT NULL DEFAULT '0',
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `group_id`, `name`, `slug`, `details`, `group`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Paracetamol', 'paracetamol', '<p>Paracetamol</p>', 1, 1, 1, 1, '2020-09-01 01:24:12', '2020-09-01 01:24:12'),
(2, 1, 'Napa', 'napa', NULL, 0, 1, 1, 1, '2020-09-01 01:32:00', '2020-09-01 01:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_02_161249_create_permission_tables', 1),
(5, '2020_06_06_085257_create_customers_table', 1),
(6, '2020_08_26_063024_create_diseases_table', 2),
(7, '2020_08_27_064946_create_symptoms_table', 3),
(8, '2020_08_31_060609_create_disease_symptom_table', 4),
(10, '2020_09_01_054152_create_medicines_table', 5),
(11, '2020_09_01_070400_create_symptom_medicine_table', 5),
(12, '2020_09_02_051028_create_medical_conditions_table', 6),
(13, '2020_09_02_055014_create_disease_medical_condition_table', 7),
(14, '2020_09_02_064004_create_health_cares_table', 8),
(15, '2020_09_02_071619_create_disease_health_care_table', 9),
(16, '2020_09_03_060952_create_blogs_table', 10),
(18, '2020_09_06_060846_create_patients_table', 11),
(19, '2020_11_01_135914_create_tests_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `medical_test` int(11) NOT NULL DEFAULT '0',
  `ventilation` int(11) NOT NULL DEFAULT '0',
  `icu` int(11) NOT NULL DEFAULT '0',
  `health_condition` int(11) NOT NULL DEFAULT '1',
  `entry_type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Roles', 'web', '2020-08-25 23:46:33', '2020-08-25 23:46:33'),
(2, 'Users', 'web', '2020-08-25 23:46:33', '2020-08-25 23:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2020-08-25 23:46:33', '2020-08-25 23:46:33'),
(2, 'Reviewer', 'web', '2020-09-13 01:19:51', '2020-09-13 01:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `details` text,
  `priority` int(11) NOT NULL DEFAULT '0',
  `risk_level` int(11) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `name`, `slug`, `details`, `priority`, `risk_level`, `show`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fevar', 'fevar', '<div>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n</div>', 3, 1, 1, 1, '2020-08-27 01:20:30', '2020-08-30 23:57:46'),
(2, 'Body Pain', 'body-pain', NULL, 3, 2, 1, 1, '2020-08-31 00:40:24', '2020-08-31 00:40:24'),
(3, 'Cough', 'cough', NULL, 3, 2, 1, 1, '2020-08-31 00:42:33', '2020-08-31 00:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `symptom_medicine`
--

CREATE TABLE `symptom_medicine` (
  `symptom_id` int(10) UNSIGNED NOT NULL,
  `medicine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptom_medicine`
--

INSERT INTO `symptom_medicine` (`symptom_id`, `medicine_id`) VALUES
(2, 1),
(1, 1),
(2, 2),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `department` varchar(191) DEFAULT NULL,
  `organization` varchar(191) DEFAULT NULL,
  `higher_degree` varchar(191) DEFAULT NULL,
  `academy` varchar(191) DEFAULT NULL,
  `specialty` text,
  `profile` text,
  `photo` text,
  `phone` varchar(191) DEFAULT NULL,
  `address` text,
  `city` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `dob`, `designation`, `department`, `organization`, `higher_degree`, `academy`, `specialty`, `profile`, `photo`, `phone`, `address`, `city`, `country`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@mail.com', NULL, '$2y$10$4qpPjESW.dsoCzsr4BTDxeqE0IrZoAAqy4mqCf8PAKxepDCe7FfcS', 1, '1994-11-18', 'Developer', 'Web', 'IT', 'BSC in Engineering', 'CUB', 'Programming', 'Will Say Something', 'Profile_1599980667.png', '01740473189', 'Chilmari', 'Kurigram', 'Bangladesh', 'TQo126y6IVljJEDNBiGfs5HCx0E6Uy5nJWmypAZezGRpflQuHYmmhrPMvNGJ', 1, '2020-08-25 23:46:33', '2020-09-13 01:04:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_name_unique` (`name`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `diseases_name_unique` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `disease_health_care`
--
ALTER TABLE `disease_health_care`
  ADD KEY `disease_health_care_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_health_care_health_care_id_foreign` (`health_care_id`);

--
-- Indexes for table `disease_medical_condition`
--
ALTER TABLE `disease_medical_condition`
  ADD KEY `disease_medical_condition_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_medical_condition_medical_condition_id_foreign` (`medical_condition_id`);

--
-- Indexes for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD KEY `disease_symptom_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_symptom_symptom_id_foreign` (`symptom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_cares`
--
ALTER TABLE `health_cares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `health_cares_name_unique` (`name`),
  ADD UNIQUE KEY `health_cares_slug_unique` (`slug`);

--
-- Indexes for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medical_conditions_name_unique` (`name`),
  ADD UNIQUE KEY `medical_conditions_slug_unique` (`slug`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicines_name_unique` (`name`),
  ADD UNIQUE KEY `medicines_slug_unique` (`slug`);

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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `symptoms_name_unique` (`name`),
  ADD UNIQUE KEY `symptoms_slug_unique` (`slug`);

--
-- Indexes for table `symptom_medicine`
--
ALTER TABLE `symptom_medicine`
  ADD KEY `symptom_medicine_symptom_id_foreign` (`symptom_id`),
  ADD KEY `symptom_medicine_medicine_id_foreign` (`medicine_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `health_cares`
--
ALTER TABLE `health_cares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_conditions`
--
ALTER TABLE `medical_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_health_care`
--
ALTER TABLE `disease_health_care`
  ADD CONSTRAINT `disease_health_care_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_health_care_health_care_id_foreign` FOREIGN KEY (`health_care_id`) REFERENCES `health_cares` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `disease_medical_condition`
--
ALTER TABLE `disease_medical_condition`
  ADD CONSTRAINT `disease_medical_condition_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_medical_condition_medical_condition_id_foreign` FOREIGN KEY (`medical_condition_id`) REFERENCES `medical_conditions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD CONSTRAINT `disease_symptom_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_symptom_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `symptom_medicine`
--
ALTER TABLE `symptom_medicine`
  ADD CONSTRAINT `symptom_medicine_medicine_id_foreign` FOREIGN KEY (`medicine_id`) REFERENCES `medicines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `symptom_medicine_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
