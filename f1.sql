-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2025 at 04:32 PM
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
-- Database: `f1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancerdiagnoses`
--

CREATE TABLE `cancerdiagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` bigint(20) UNSIGNED NOT NULL,
  `multiple_sites` varchar(255) DEFAULT NULL,
  `primary_site_number` varchar(255) DEFAULT NULL,
  `cancer_sites` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cancer_sites`)),
  `cancer_site_other` varchar(255) DEFAULT NULL,
  `laterality` varchar(255) DEFAULT NULL,
  `icd_10` varchar(255) DEFAULT NULL,
  `histologic_diagnosis` varchar(255) DEFAULT NULL,
  `clinical_stage` varchar(255) DEFAULT NULL,
  `t_stage` varchar(255) DEFAULT NULL,
  `n_stage` varchar(255) DEFAULT NULL,
  `m_stage` varchar(255) DEFAULT NULL,
  `s_stage` varchar(255) DEFAULT NULL,
  `other_staging` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`other_staging`)),
  `other_remarks` varchar(255) DEFAULT NULL,
  `cancer_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancerdiagnoses`
--

INSERT INTO `cancerdiagnoses` (`id`, `created_at`, `updated_at`, `code`, `multiple_sites`, `primary_site_number`, `cancer_sites`, `cancer_site_other`, `laterality`, `icd_10`, `histologic_diagnosis`, `clinical_stage`, `t_stage`, `n_stage`, `m_stage`, `s_stage`, `other_staging`, `other_remarks`, `cancer_status`) VALUES
(1, '2025-09-21 16:51:12', '2025-09-21 16:51:12', 1, 'yes', '3', '[\"Adrenal\",\"Skin\"]', 'test', 'Left', 'c50', 'test', 'Stage 0', 'Test', 'Test', 'Test', 'Test', '[\"FIGO Staging System (International Federation of Gynecology and Obstetrics)\",\"Breslow Thickness and Clark Level (for Skin Cancer)\",\"Biomarker\\/Hormone Receptor Status\"]', 'test', 'Old case, completed 1st treatment, now recurrent');

-- --------------------------------------------------------

--
-- Table structure for table `demographicprofiles`
--

CREATE TABLE `demographicprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `patient_first_encounter` varchar(255) NOT NULL,
  `patient_health_facility_id` varchar(255) NOT NULL,
  `philhealth_id` varchar(255) NOT NULL,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`name`)),
  `married_maiden_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `permanent` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`permanent`)),
  `current` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`current`)),
  `same_as_address` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `relative` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`relative`)),
  `relative_phone_number` varchar(255) NOT NULL,
  `relative_email` varchar(255) DEFAULT NULL,
  `highest_education` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `number_of_years_in_occupation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demographicprofiles`
--

INSERT INTO `demographicprofiles` (`id`, `created_at`, `updated_at`, `patient_first_encounter`, `patient_health_facility_id`, `philhealth_id`, `name`, `married_maiden_name`, `date_of_birth`, `sex`, `civil_status`, `nationality`, `permanent`, `current`, `same_as_address`, `mobile_number`, `email_address`, `relative`, `relative_phone_number`, `relative_email`, `highest_education`, `occupation`, `number_of_years_in_occupation`, `status`) VALUES
(1, '2025-09-21 16:49:33', '2025-09-21 16:51:24', '2025-09-22', '24234234234234', '42342342342343', '{\"firstname\":\"Laegan\",\"middlename\":\"Sasoy\",\"lastname\":\"Pangantihon\",\"suffix\":\"N\\/A\"}', NULL, '2025-09-22', 'male', 'Single', 'filipino', '{\"province\":\"Negros Occidental\",\"city\":\"City of Bacolod\",\"barangay\":\"Barangay 18 (Pob.)\",\"sitio\":\"test\"}', '{\"province\":\"Negros Occidental\",\"city\":\"City of Bacolod\",\"barangay\":\"Barangay 18 (Pob.)\",\"sitio\":\"test\"}', 'on', '09947622663', 'laegan863@gmail.com', '{\"province\":\"Negros Occidental\",\"city\":\"City of Bacolod\",\"barangay\":\"Barangay 18 (Pob.)\",\"sitio\":\"test\"}', '09947622663', NULL, 'Secondary', 'Armed Forces Occupations', '1', '1');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
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
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(113, '0001_01_01_000001_create_cache_table', 1),
(114, '0001_01_01_000002_create_jobs_table', 1),
(115, '2025_09_10_235821_create_demographicprofiles_table', 1),
(116, '2025_09_12_030125_create_riskfactors_table', 1),
(117, '2025_09_15_004508_create_cancerdiagnoses_table', 1),
(118, '2025_09_15_045230_create_treatments_table', 1),
(119, '0001_01_01_000000_create_users_table', 2);

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
-- Table structure for table `riskfactors`
--

CREATE TABLE `riskfactors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` bigint(20) UNSIGNED NOT NULL,
  `tobacco_use` varchar(255) DEFAULT NULL,
  `second_hand_smoke` varchar(255) DEFAULT NULL,
  `alcohol_use` varchar(255) DEFAULT NULL,
  `physical_activity` varchar(255) DEFAULT NULL,
  `healtydiet` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`healtydiet`)),
  `occupational_exposure` varchar(255) NOT NULL,
  `occupation_specify` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`occupation_specify`)),
  `occupation_specify_others` varchar(255) DEFAULT NULL,
  `air_pollution` varchar(255) DEFAULT NULL,
  `family_history` varchar(255) DEFAULT NULL,
  `cancer_sites` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cancer_sites`)),
  `cancer_sites_other` varchar(255) DEFAULT NULL,
  `cancer_sites_other_value` varchar(255) DEFAULT NULL,
  `infections` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`infections`)),
  `infections_others` varchar(255) DEFAULT NULL,
  `infections_other_content` varchar(255) DEFAULT NULL,
  `comorbidities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`comorbidities`)),
  `comorbidities_others` varchar(255) DEFAULT NULL,
  `comorbidities_others_content` varchar(255) DEFAULT NULL,
  `has_cancer` varchar(255) DEFAULT NULL,
  `patient_diagnosed_w_cancer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`patient_diagnosed_w_cancer`)),
  `other_significant_medical_history` text DEFAULT NULL,
  `sexual_orientation` varchar(255) DEFAULT NULL,
  `sexual_orientation_other` varchar(255) DEFAULT NULL,
  `sexual_partners` varchar(255) DEFAULT NULL,
  `age_first_intercourse` varchar(255) DEFAULT NULL,
  `contraceptives_use` varchar(255) DEFAULT NULL,
  `contraceptive_types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`contraceptive_types`)),
  `contraceptive_types_other` varchar(255) DEFAULT NULL,
  `cancer_screening` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cancer_screening`)),
  `cancer_screening_other` varchar(255) DEFAULT NULL,
  `vaccine_hpv` varchar(255) DEFAULT NULL,
  `vaccine_hepb` varchar(255) DEFAULT NULL,
  `other_vaccines` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riskfactors`
--

INSERT INTO `riskfactors` (`id`, `created_at`, `updated_at`, `code`, `tobacco_use`, `second_hand_smoke`, `alcohol_use`, `physical_activity`, `healtydiet`, `occupational_exposure`, `occupation_specify`, `occupation_specify_others`, `air_pollution`, `family_history`, `cancer_sites`, `cancer_sites_other`, `cancer_sites_other_value`, `infections`, `infections_others`, `infections_other_content`, `comorbidities`, `comorbidities_others`, `comorbidities_others_content`, `has_cancer`, `patient_diagnosed_w_cancer`, `other_significant_medical_history`, `sexual_orientation`, `sexual_orientation_other`, `sexual_partners`, `age_first_intercourse`, `contraceptives_use`, `contraceptive_types`, `contraceptive_types_other`, `cancer_screening`, `cancer_screening_other`, `vaccine_hpv`, `vaccine_hepb`, `other_vaccines`) VALUES
(1, '2025-09-21 16:50:36', '2025-09-21 16:50:36', 1, 'Current Smoker', 'Yes', 'With current harmful use of alcohol', 'Usually Inactive', '{\"fatmeat\":\"low\",\"vegetables\":\"high\",\"sodium_salt\":\"low\",\"sugar\":\"moderate\"}', 'no', NULL, NULL, 'yes', 'no', NULL, NULL, NULL, '[\"Hepatitis B\",\"Hepatitis C\",\"Hepatitis D\"]', 'yes', 'test', '[\"Cardiovascular disease\",\"Chronic respiratory disease\"]', 'yes', 'test', 'no', NULL, 'None', 'Heterosexual', NULL, '1', '1', 'No', NULL, NULL, '[\"Clinical Breast Examination\",\"VIA\",\"FOBT\"]', 'test', 'Fully Vaccinated', 'Yes, fully vaccinated', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a4W79H9SraAd00B4HN4vcpEklnYJrVV5VRqhn3Fw', 17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoienJmTkVhNXJ2dHFJdVlZTjZxZ1dwWUxKNXBpWUNIMDY3NEJvRFZTSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTc7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO319', 1758525969),
('mJT2SeSCNxbaVu5zw9PkJfSth9Bgmcrd3Zi9vCbB', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSmVpcGFROTBCVW1RVlhuUTdTellReWNueTM5MXhHZVVTcE9oalM0QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZW1vZ3JhcGhpYy1wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTM7fQ==', 1758528181);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` bigint(20) UNSIGNED NOT NULL,
  `date_of_diagnosis` date DEFAULT NULL,
  `team_approach` varchar(255) DEFAULT NULL,
  `disciplines` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`disciplines`)),
  `discipline_other` varchar(255) DEFAULT NULL,
  `surgery` varchar(255) DEFAULT NULL,
  `surgery_goal` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`surgery_goal`)),
  `anticancer_drug` varchar(255) DEFAULT NULL,
  `drug_purpose` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`drug_purpose`)),
  `drug_types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`drug_types`)),
  `drug_types_others` varchar(255) DEFAULT NULL,
  `first_line_drug` varchar(255) DEFAULT NULL,
  `first_drug_regimen` varchar(255) DEFAULT NULL,
  `first_cycles` int(11) DEFAULT NULL,
  `first_treatment_goal` varchar(255) DEFAULT NULL,
  `first_time` varchar(255) DEFAULT NULL,
  `second_line_drug` varchar(255) DEFAULT NULL,
  `second_drug_regimen` varchar(255) DEFAULT NULL,
  `second_cycles` int(11) DEFAULT NULL,
  `second_treatment_goal` varchar(255) DEFAULT NULL,
  `second_time` varchar(255) DEFAULT NULL,
  `third_line_drug` varchar(255) DEFAULT NULL,
  `third_drug_regimen` varchar(255) DEFAULT NULL,
  `third_cycles` int(11) DEFAULT NULL,
  `third_treatment_goal` varchar(255) DEFAULT NULL,
  `third_time` varchar(255) DEFAULT NULL,
  `other_subsequent_line_drug` varchar(255) DEFAULT NULL,
  `indicate_line` varchar(255) DEFAULT NULL,
  `other_subsequent_drug_regimen` varchar(255) DEFAULT NULL,
  `other_subsequent_cycles` int(11) DEFAULT NULL,
  `other_subsequent_treatment_goal` varchar(255) DEFAULT NULL,
  `other_subsequent_time` varchar(255) DEFAULT NULL,
  `radiotherapy` varchar(255) DEFAULT NULL,
  `radiotherapy_types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`radiotherapy_types`)),
  `radiotherapy_types_others` varchar(255) DEFAULT NULL,
  `radiotherapy_sequence` varchar(255) DEFAULT NULL,
  `radiotherapy_goal` varchar(255) DEFAULT NULL,
  `theranostics` varchar(255) DEFAULT NULL,
  `theranostics_types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`theranostics_types`)),
  `theranostics_types_others` varchar(255) DEFAULT NULL,
  `theranostics_goal` varchar(255) DEFAULT NULL,
  `other_therapies` varchar(255) DEFAULT NULL,
  `other_therapies_types` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`other_therapies_types`)),
  `other_therapies_other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`id`, `created_at`, `updated_at`, `code`, `date_of_diagnosis`, `team_approach`, `disciplines`, `discipline_other`, `surgery`, `surgery_goal`, `anticancer_drug`, `drug_purpose`, `drug_types`, `drug_types_others`, `first_line_drug`, `first_drug_regimen`, `first_cycles`, `first_treatment_goal`, `first_time`, `second_line_drug`, `second_drug_regimen`, `second_cycles`, `second_treatment_goal`, `second_time`, `third_line_drug`, `third_drug_regimen`, `third_cycles`, `third_treatment_goal`, `third_time`, `other_subsequent_line_drug`, `indicate_line`, `other_subsequent_drug_regimen`, `other_subsequent_cycles`, `other_subsequent_treatment_goal`, `other_subsequent_time`, `radiotherapy`, `radiotherapy_types`, `radiotherapy_types_others`, `radiotherapy_sequence`, `radiotherapy_goal`, `theranostics`, `theranostics_types`, `theranostics_types_others`, `theranostics_goal`, `other_therapies`, `other_therapies_types`, `other_therapies_other`) VALUES
(1, '2025-09-21 16:51:24', '2025-09-21 16:51:24', 1, '2025-09-22', 'No', NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, NULL, 'No', NULL, NULL, NULL, 'No', NULL, NULL);

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
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Administrator', 'clmmrh@admin.com', '2025-09-22 06:34:10', '$2y$12$Jeu3o27SiSFl1uGoi3cqG.spGV4ePUfdj.GuYf6w6iXacThCf5AWK', 'admin', 'R3ANm1IoYe', '2025-09-22 06:34:11', '2025-09-22 06:34:11'),
(17, 'Laegan Sasoy Pangantihon', 'laegan863@gmail.com', NULL, '$2y$12$/zlAn8rzq4UPK3K1foZRGOztz2fWHn.0NoXTVGrdAUbeqtQmtjlba', 'user', NULL, '2025-09-22 07:23:40', '2025-09-22 07:23:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cancerdiagnoses`
--
ALTER TABLE `cancerdiagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cancerdiagnoses_code_foreign` (`code`);

--
-- Indexes for table `demographicprofiles`
--
ALTER TABLE `demographicprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `riskfactors`
--
ALTER TABLE `riskfactors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riskfactors_code_foreign` (`code`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `treatments_code_foreign` (`code`);

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
-- AUTO_INCREMENT for table `cancerdiagnoses`
--
ALTER TABLE `cancerdiagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demographicprofiles`
--
ALTER TABLE `demographicprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `riskfactors`
--
ALTER TABLE `riskfactors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancerdiagnoses`
--
ALTER TABLE `cancerdiagnoses`
  ADD CONSTRAINT `cancerdiagnoses_code_foreign` FOREIGN KEY (`code`) REFERENCES `demographicprofiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riskfactors`
--
ALTER TABLE `riskfactors`
  ADD CONSTRAINT `riskfactors_code_foreign` FOREIGN KEY (`code`) REFERENCES `demographicprofiles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `treatments`
--
ALTER TABLE `treatments`
  ADD CONSTRAINT `treatments_code_foreign` FOREIGN KEY (`code`) REFERENCES `demographicprofiles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
