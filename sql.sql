-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2022 at 09:17 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `turno2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocked_dates`
--

CREATE TABLE `blocked_dates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocked_dates`
--

INSERT INTO `blocked_dates` (`id`, `name`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fecha bloqueada', '2021-06-21', '2021-06-15 03:41:08', '2021-06-15 03:41:08', NULL),
(2, 'asd', '2021-09-15', '2021-06-15 03:41:24', '2021-08-01 20:14:10', NULL),
(3, 'Fecha bloqueada', '2021-08-18', '2021-06-15 03:41:08', '2021-08-01 20:13:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentCategory` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parentCategory`, `created_at`, `updated_at`, `deleted_at`, `image`) VALUES
(1, 'Dentista', NULL, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(2, 'Ortodoncista', 1, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(3, 'Cirujano', 1, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(4, 'Belleza', NULL, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(5, 'Estilista', 4, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(6, 'Barbero(a)', 4, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(7, 'Uñas', 4, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(8, 'Bienestar', NULL, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(9, 'Fisioterapia', 8, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(10, 'Spa', 8, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(11, 'Masajes', 8, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(12, 'Modificación Corporal', NULL, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(13, 'Tatuajes', 12, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL),
(14, 'Perforaciones', 12, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `establishments`
--

CREATE TABLE `establishments` (
  `id` int(10) UNSIGNED NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stepping` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_ext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_int` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holidays_extra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holidays_official` tinyint(1) NOT NULL DEFAULT '1',
  `help_tooltip` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `establishments`
--

INSERT INTO `establishments` (`id`, `enabled`, `category_id`, `subcategory_id`, `name`, `logo`, `stepping`, `street`, `num_ext`, `num_int`, `postal_code`, `zone`, `city`, `state`, `country`, `latitude`, `longitude`, `email`, `phone`, `holidays_extra`, `holidays_official`, `help_tooltip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2,3', 'Dentista prueba', 'establishments/establishment_1.png', 15, 'Cirrus', '402', '17', '76236', 'Real Solare', 'El marqués', 'Querétaro', 'México', '20.588416', '-100.275784', 'dentista@mail.com', '1234567890', '', 1, 0, '2021-04-01 04:03:18', '2021-04-01 04:03:18', NULL),
(2, 1, 12, '14,13', 'Tattoo Center', 'establishments/establishment_2.png', 30, 'Jesús Yuren', '216', NULL, '76121', 'Conquistadores', 'Santiago de Querétaro', 'Querétaro', 'Mexico', '20.6259819', '-100.416845', 'tatto@center.com', '2414325347', NULL, 0, 1, '2021-04-04 02:57:44', '2021-08-01 20:42:40', NULL),
(6, 1, 8, '11', 'otro', 'establishments/establishment_6.png', 30, 'Cirrus', '400', NULL, '76246', '4', 'El Marqués', 'Querétaro', 'México', '20.5884078', '-100.275696', 'otro@otro.com', '1234567890', NULL, 1, 1, '2021-07-15 05:30:19', '2021-07-15 05:30:19', NULL),
(8, 1, 12, '13,14', 'uno', 'establishments/establishment_8.png', 10, 'Cerro de las Campanas', '307A', NULL, '76121', 'Las Americas', 'Santiago de Querétaro', 'Querétaro', 'Mexico', '20.624045480886426', '-100.41561204940082', 'este@mail.com', '1234567890', NULL, 1, 1, '2022-01-25 23:09:19', '2022-01-25 23:09:19', NULL),
(9, 1, 1, '2,3', 'Unooo nombre', 'establishments/establishment_9.png', 5, 'Jesús Yuren', '216', NULL, '76121', 'Conquistadores', 'Santiago de Querétaro', 'Querétaro', 'Mexico', '20.6259783', '-100.416845', 'correo@maill.com', '0987654321', NULL, 1, 1, '2022-01-25 23:21:30', '2022-01-25 23:21:30', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_help_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `help_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `status_help_id`, `user_id`, `help_type`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 9, 'AGRADECIMIENTO', 'Esta es una prueba', '2021-06-08 22:42:17', '2021-06-08 22:42:17', NULL),
(2, 1, 9, 'AGRADECIMIENTO', 'Esta es una prueba', '2021-06-08 22:43:43', '2021-06-08 22:43:43', NULL),
(3, 1, 9, 'DUDAS', 'Esta es una prueba', '2021-06-08 22:47:07', '2021-06-08 22:47:07', NULL),
(4, 1, 9, 'DUDAS', 'Esta es una prueba', '2021-06-08 22:47:27', '2021-06-08 22:47:27', NULL),
(5, 1, 9, 'DUDAS', 'Esta es una prueba', '2021-06-08 22:47:59', '2021-06-08 22:47:59', NULL),
(6, 1, 9, 'RECOMENDACION', 'ncjcjc', '2021-06-08 22:55:31', '2021-06-08 22:55:31', NULL);

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_01_20_213721_create_permission_tables', 1),
(10, '2021_01_25_192906_create_categories_table', 1),
(11, '2021_01_25_195207_create_establishments_table', 1),
(12, '2021_01_25_195335_create_resources_table', 1),
(13, '2021_01_27_002346_create_sessions_table', 1),
(14, '2021_01_27_020015_create_schedules_table', 1),
(15, '2021_01_27_021739_create_relation_resource_sessions_table', 1),
(16, '2021_01_27_022120_create_status_turnos_table', 1),
(17, '2021_01_27_175252_add_fields_to_users', 1),
(18, '2021_02_01_192520_create_prospects_table', 1),
(19, '2021_03_31_181545_add_color_to_session', 1),
(20, '2021_03_31_182959_create_turnos_table', 1),
(21, '2021_03_31_184057_add_color_to_sessions', 1),
(22, '2021_03_31_185155_create_blocked_dates_table', 1),
(24, '2021_06_07_232932_create_helps_table', 2),
(25, '2021_07_14_184226_add_img_to_categories_table', 3);

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

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 9),
(4, 'App\\Models\\User', 10),
(5, 'App\\Models\\User', 11),
(5, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 13),
(5, 'App\\Models\\User', 14),
(5, 'App\\Models\\User', 15),
(5, 'App\\Models\\User', 16),
(5, 'App\\Models\\User', 17),
(5, 'App\\Models\\User', 18),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 20),
(5, 'App\\Models\\User', 21),
(5, 'App\\Models\\User', 22),
(5, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 25),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 27),
(5, 'App\\Models\\User', 28),
(5, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 30),
(5, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(5, 'App\\Models\\User', 33),
(5, 'App\\Models\\User', 34),
(5, 'App\\Models\\User', 35),
(5, 'App\\Models\\User', 36),
(5, 'App\\Models\\User', 37),
(5, 'App\\Models\\User', 38),
(5, 'App\\Models\\User', 39),
(4, 'App\\Models\\User', 40),
(4, 'App\\Models\\User', 41),
(5, 'App\\Models\\User', 42),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 44),
(5, 'App\\Models\\User', 45),
(2, 'App\\Models\\User', 46),
(2, 'App\\Models\\User', 47),
(3, 'App\\Models\\User', 48),
(2, 'App\\Models\\User', 50),
(2, 'App\\Models\\User', 51),
(2, 'App\\Models\\User', 52),
(2, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(5, 'App\\Models\\User', 57);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0846415fc2af5cfe810aba3b2956ea23bf4629c21a5c3847df02613baae53a6f9dd944df10e0a9d7', 9, 1, 'authToken', '[]', 0, '2021-07-29 20:58:21', '2021-07-29 20:58:21', '2022-07-29 15:58:21'),
('0dc3eeeb3e4e171257094e426c37c054dd01fc58da409812731d7c3579e632be6cc5e820766c553d', 9, 1, 'authToken', '[]', 0, '2021-06-29 05:15:54', '2021-06-29 05:15:54', '2022-06-29 00:15:54'),
('0fb2bda15281a776da46653ded761e9d8b29ad30b2163e18fd34a50601a0b8143daa303c05fbafd1', 48, 1, 'authToken', '[]', 0, '2021-07-15 05:15:08', '2021-07-15 05:15:08', '2022-07-15 00:15:08'),
('1345379c75870b40c38f85f16d35082a64195b4f9ea4db8f69c2247912955a9dfc2e758108fafdd1', 9, 1, 'authToken', '[]', 0, '2021-07-29 20:57:45', '2021-07-29 20:57:45', '2022-07-29 15:57:45'),
('13b74e04632d5c475c4dfe78105a4bb0680451ba45a0f14eec552c9285594b5a23da7877878a3af4', 9, 1, 'authToken', '[]', 0, '2021-06-24 04:00:17', '2021-06-24 04:00:17', '2022-06-23 23:00:17'),
('177510d95ab96e52dfdf385df3b59a03e446570df0a620bcee30787e59b7a927ce8d4564d9fbea3a', 54, 1, 'authToken', '[]', 0, '2022-01-31 23:20:59', '2022-01-31 23:20:59', '2023-01-31 17:20:59'),
('18663cf146931cdae79d9d5c3c1c70a7a75cda63befa3f5050cbd46c8673db72bad45e16bdab27f1', 9, 1, 'authToken', '[]', 0, '2021-04-23 04:10:13', '2021-04-23 04:10:13', '2022-04-22 23:10:13'),
('1e35843b7385c28c9f0384ad36481b3a711d0bf1a3862c8eb90155b618656e68020ac4e71ca299bc', 9, 1, 'authToken', '[]', 0, '2021-04-04 02:00:58', '2021-04-04 02:00:58', '2022-04-03 20:00:58'),
('1ec1f0e0539a45a338e4cbe61cc34fcd9d57a272c3e0844eabe93302e92a238e210e0924a724aa35', 54, 1, 'authToken', '[]', 0, '2022-04-07 18:52:39', '2022-04-07 18:52:39', '2023-04-07 13:52:39'),
('2259a88f8e503f287acfa28063b9e51c170415af0d6a940bfb077815e77ef67a87564913e4442d23', 48, 1, 'authToken', '[]', 0, '2021-07-15 21:56:06', '2021-07-15 21:56:06', '2022-07-15 16:56:06'),
('235243e6baeb53f794f9f141c2d38afedbcf601aa337e948f4b10041ed84a8785f7fa2b479880b82', 9, 1, 'authToken', '[]', 0, '2021-07-31 18:33:10', '2021-07-31 18:33:10', '2022-07-31 13:33:10'),
('275c24ce76f9174f4c19a2e71d111eaa18a61d858fa02a1bd5aefaa0b0557039c67f4a42557adf40', 48, 1, 'authToken', '[]', 0, '2021-07-15 01:48:07', '2021-07-15 01:48:07', '2022-07-14 20:48:07'),
('2a39312841f7b6bb311dfd6980e938489be6a78bc48cc6a4cce519d9dea7cb75b87fd220142abef4', 54, 1, 'authToken', '[]', 0, '2022-01-31 20:35:20', '2022-01-31 20:35:20', '2023-01-31 14:35:20'),
('2e09484b7c11b96afad88d358effec4f7fb077f60a9067a031aa037a759270cc8f5f4bc5dbf24dbb', 9, 1, 'authToken', '[]', 0, '2021-04-04 06:00:01', '2021-04-04 06:00:01', '2022-04-04 00:00:01'),
('2f75294054abe339330709065678fc90bb32005177b2ab611f388da3d3efda78fc4e4f914620d93c', 9, 1, 'authToken', '[]', 0, '2021-07-31 18:35:58', '2021-07-31 18:35:58', '2022-07-31 13:35:58'),
('2fdbd144cf21ee51917b54a9048b0a352734a23c0c1cf50e7847ace527e92e2de9f5ee7c8c7f87c7', 9, 1, 'authToken', '[]', 0, '2021-06-28 03:36:29', '2021-06-28 03:36:29', '2022-06-27 22:36:29'),
('32143649d346b27d95b9604e239b861d2def94e03c9b02bc806493c5b1cb80f736b93dd28468f1f9', 9, 1, 'authToken', '[]', 0, '2021-07-15 21:53:43', '2021-07-15 21:53:43', '2022-07-15 16:53:43'),
('44fa63e9da8c426591e5a296711052c658a3aa7b68a941f78107da8f96fc4e6b91e2a2d39e42a463', 9, 1, 'authToken', '[]', 0, '2021-05-01 22:47:40', '2021-05-01 22:47:40', '2022-05-01 17:47:40'),
('451f89309f950f8e9e6bc9ade87de1b14eb0aa4eeb2615a7adb9a81273351c2f5f3407e3d10aee3d', 54, 1, 'authToken', '[]', 0, '2022-01-28 22:19:40', '2022-01-28 22:19:40', '2023-01-28 16:19:40'),
('4c7af1d86f23e9a68caf605b95519c845964bb1e18a9e67971b57f0367e00be04fe8cf1fe910ae43', 9, 1, 'authToken', '[]', 0, '2021-04-04 05:58:11', '2021-04-04 05:58:11', '2022-04-03 23:58:11'),
('50d247d82d91997376f82afb4ba8e63e61e40fb3f0aec0377f98d77843ed413c4e973d077e8a4041', 54, 1, 'authToken', '[]', 0, '2022-01-31 20:26:29', '2022-01-31 20:26:29', '2023-01-31 14:26:29'),
('569d37acb1a96f26eed45d5092a47ffb2d79843ce0f943db2a151eccd943531772a620c37da9f186', 9, 1, 'authToken', '[]', 0, '2021-04-04 03:13:25', '2021-04-04 03:13:25', '2022-04-03 21:13:25'),
('574872634511182a874ae8e0494877024cc1bdeebf961e5f183465d48231bffba3c1420107e41857', 9, 1, 'authToken', '[]', 0, '2021-06-28 03:34:04', '2021-06-28 03:34:04', '2022-06-27 22:34:04'),
('63a2cc3226662e77d8b4a4f37ae900188c2de7069509611d6408cdfddded97788592076e234375ad', 48, 1, 'authToken', '[]', 0, '2021-07-15 05:02:00', '2021-07-15 05:02:00', '2022-07-15 00:02:00'),
('64130c45598c90bc4504b8b9c0ec00bd4eb8fcaab861be2c7a5a83fe30cc865b436f636e83164a15', 54, 1, 'authToken', '[]', 0, '2022-01-23 20:54:06', '2022-01-23 20:54:06', '2023-01-23 14:54:06'),
('661471e52bca2294f2438fb9428c2178009ab832c1329adbb60fd3346ecde7e446ea991ca92825d9', 54, 1, 'authToken', '[]', 0, '2022-03-15 22:32:51', '2022-03-15 22:32:51', '2023-03-15 16:32:51'),
('692795c1cd75f0f697339bfe3b03336ce66c3a2551b1701c38971380dda6d31825764d1d22e35186', 48, 1, 'authToken', '[]', 0, '2021-07-15 05:01:45', '2021-07-15 05:01:45', '2022-07-15 00:01:45'),
('6c6fc9de9b30160dd3c45cf1f041d53df18a9eaa799f111a1333b52b682ca7e538be93deef0da892', 9, 1, 'authToken', '[]', 0, '2021-06-16 00:43:37', '2021-06-16 00:43:37', '2022-06-15 19:43:37'),
('6f27d0ceba99176943156dfc5659ee911f302f086286d3c82acad1ef2eb1f6add6271b0a7f8e4105', 9, 1, 'authToken', '[]', 0, '2021-07-15 21:55:24', '2021-07-15 21:55:24', '2022-07-15 16:55:24'),
('73423fecbfc1f4983bb46ee142bab3a72cb2c6eac4468eeefc4d75f2a6a447a261ddca59cfd80dd7', 9, 1, 'authToken', '[]', 0, '2021-08-01 18:07:43', '2021-08-01 18:07:43', '2022-08-01 13:07:43'),
('7578f823a18b363a3f80d5a44ee1ad07630ce1590ed53ccd47ae54c341af70d582728a7f6ec58b42', 54, 1, 'authToken', '[]', 0, '2022-01-31 22:56:35', '2022-01-31 22:56:35', '2023-01-31 16:56:35'),
('769ead9a5eaa264da11382c4a28a89387c8faa59c814f7c24c55ccb2d35874ab5a41912fdfd3ad88', 54, 1, 'authToken', '[]', 0, '2022-03-15 22:31:01', '2022-03-15 22:31:01', '2023-03-15 16:31:01'),
('7eea87af95b6d7a402c2c53d45fa852637af02a2a62c959c32519afc71f74df083f25d3490ca58ed', 48, 1, 'authToken', '[]', 0, '2021-07-15 02:01:05', '2021-07-15 02:01:05', '2022-07-14 21:01:05'),
('80b9a7e50fe5b8585971bd3277aa364b4d990d60f47ffce0b89d8a14f521edc1d44a47a6296c8ff6', 9, 1, 'authToken', '[]', 0, '2022-04-11 21:32:30', '2022-04-11 21:32:30', '2023-04-11 16:32:30'),
('838fa24914de437953a4e26f43ec8aaf47f586dd3fb2a2b9e07663260e06e7035864e3a96cc95dcd', 9, 1, 'authToken', '[]', 0, '2021-07-15 00:06:09', '2021-07-15 00:06:09', '2022-07-14 19:06:09'),
('9785bc1353cc2042e459c4d2571c083f491f786a4431fd3cc14345b3d13fe235f3be7e6ab3165823', 48, 1, 'authToken', '[]', 0, '2021-07-15 01:44:07', '2021-07-15 01:44:07', '2022-07-14 20:44:07'),
('9899650732c15eb4982a05e42b2c161521ee9007a408170ba9c5933d6d970f55f0fc84f637bbd6d3', 9, 1, 'authToken', '[]', 0, '2021-07-31 18:36:18', '2021-07-31 18:36:18', '2022-07-31 13:36:18'),
('9a171ace9823252965207a1c87958c2a75cb5bdb42537eb9db3f5dc6b57bfc1a0455c05d7590177a', 54, 1, 'authToken', '[]', 0, '2022-01-28 18:59:00', '2022-01-28 18:59:00', '2023-01-28 12:59:00'),
('9bbbf2bbbee1644bf6fe60bacfedcc7d33e41a1bd3dc61f66fbfd09a603c77768e418128a93176ea', 54, 1, 'authToken', '[]', 0, '2022-03-15 22:38:05', '2022-03-15 22:38:05', '2023-03-15 16:38:05'),
('a03916c3027fbefcacca68d4145faa90fed33dff5b138b7cf99cc2ee2fef20f3d2e46c37d6edb0cf', 54, 1, 'authToken', '[]', 0, '2022-01-31 20:06:25', '2022-01-31 20:06:25', '2023-01-31 14:06:25'),
('a425bb2fd63aada06f9d2e911bea9a23e5b2d2eb523117dd077eeb7909fe27789ede5b158c994b4a', 9, 1, 'authToken', '[]', 0, '2021-04-04 03:05:43', '2021-04-04 03:05:43', '2022-04-03 21:05:43'),
('a88418cb26d9b9dab7410572b7078582941106a6e37e45970da9e16ee00f4c485ef265d107cb2b33', 9, 1, 'authToken', '[]', 0, '2021-07-29 20:55:03', '2021-07-29 20:55:03', '2022-07-29 15:55:03'),
('abf46e8f4788bb879c81274d43908c7da35ac9deddf3c47b3fae87ff0d08c2b3626700a25ddc89f3', 54, 1, 'authToken', '[]', 0, '2022-01-21 20:14:58', '2022-01-21 20:14:58', '2023-01-21 14:14:58'),
('b025489ba87fa59cf6357c6ae40f5ef7aaf482df633cb4f5762010de2cc193e1eac3091712b1b00d', 9, 1, 'authToken', '[]', 0, '2021-06-28 23:20:20', '2021-06-28 23:20:20', '2022-06-28 18:20:20'),
('b0c7619286bafa36076d60c53351e4f683a05e98397bf9c0d58be11cab496d3161d07105e4bbbfe0', 9, 1, 'authToken', '[]', 0, '2021-06-28 03:37:27', '2021-06-28 03:37:27', '2022-06-27 22:37:27'),
('b29af54797a81359c5684387e45b54c354602b8faecdd6088502642f60efe96f1c76313ece535080', 54, 1, 'authToken', '[]', 0, '2022-01-25 23:14:11', '2022-01-25 23:14:11', '2023-01-25 17:14:11'),
('b5be1895efed82734de652c441f34bfd48d843c486ff41608c627482a7672e86f41f3e8d25234ad2', 9, 1, 'authToken', '[]', 0, '2021-06-04 06:30:53', '2021-06-04 06:30:53', '2022-06-04 01:30:53'),
('b79a374c6bae7de4060b6fbee0a2c35c74377d561d2c2518293b73a22945011730ccd930f94e5d75', 9, 1, 'authToken', '[]', 0, '2021-04-15 23:09:20', '2021-04-15 23:09:20', '2022-04-15 18:09:20'),
('b9f57c8d07e9c8240bf37cde8442622f92e850269705ae2b0520e980ea29b2ebd5b79b887d3a2797', 48, 1, 'authToken', '[]', 0, '2021-07-15 05:07:52', '2021-07-15 05:07:52', '2022-07-15 00:07:52'),
('c29a83f65c07fbb850261ca0c69bf244c2cd538b9414797aa518b967165e50ed42ae3238ceac12d4', 9, 1, 'authToken', '[]', 0, '2022-04-12 21:09:11', '2022-04-12 21:09:11', '2023-04-12 16:09:11'),
('c2b7571eb61f2ff21717a12b31519686269be0a9693283be8517d1fe18ac59ff191770a5b2d16ad3', 9, 1, 'authToken', '[]', 0, '2021-05-13 00:42:01', '2021-05-13 00:42:01', '2022-05-12 19:42:01'),
('c2ca3a85aae3872f6a5eb61a879f70c62eb5f142ddd627a0ce56a5bc16bdaa44fb6b50f4e11d76b9', 9, 1, 'authToken', '[]', 0, '2021-06-08 21:00:04', '2021-06-08 21:00:04', '2022-06-08 16:00:04'),
('c6a20ae414216e6d4155edc0e48bdd7d4b4a6e989398d15eb3a573adc2939082e3b31a4442419573', 9, 1, 'authToken', '[]', 0, '2022-03-15 22:26:48', '2022-03-15 22:26:48', '2023-03-15 16:26:48'),
('cb334992194a883bc62a08f836a57adf6d2a2ef2023d2a2649bcd54b4b4dc25570e87d7b531a3180', 9, 1, 'authToken', '[]', 0, '2021-06-28 03:37:48', '2021-06-28 03:37:48', '2022-06-27 22:37:48'),
('cb4be02cb84a779515ce4051c6234165c6cadbbb4371c242967d59e827ec8911ceea8714fc6d24ae', 9, 1, 'authToken', '[]', 0, '2021-06-25 23:20:11', '2021-06-25 23:20:11', '2022-06-25 18:20:11'),
('ccc569e8595414f46b5cb2e7c7ac00e7f30d14ccd2f8b44ad09f298303180c33c5735f161b526d61', 9, 1, 'authToken', '[]', 0, '2021-06-10 22:20:04', '2021-06-10 22:20:04', '2022-06-10 17:20:04'),
('d4db065478bf2a3e731c41e85d7ee1f3c38897055bd50afac18c42fec5e39d63244da09283d7da4a', 9, 1, 'authToken', '[]', 0, '2021-06-18 07:01:21', '2021-06-18 07:01:21', '2022-06-18 02:01:21'),
('db641677d491c13f1b3d1506ced194e2e83b1663c5167590efc8ba68f0a2ad94702603566ccd14d8', 54, 1, 'authToken', '[]', 0, '2022-03-15 22:37:35', '2022-03-15 22:37:35', '2023-03-15 16:37:35'),
('dd8e120a251f808b4ddc7ed4cb45c81e6bd32d5c5b3a4eb4afac342a12822cb18367b03a1948059c', 9, 1, 'authToken', '[]', 0, '2021-06-19 07:42:10', '2021-06-19 07:42:10', '2022-06-19 02:42:10'),
('dfa9af144cb51d1a08e78a1aed386de76fc175bb8827aa90517e3f31abe36f92cc2fc65d6e65e3a7', 54, 1, 'authToken', '[]', 0, '2022-03-24 18:36:18', '2022-03-24 18:36:18', '2023-03-24 12:36:18'),
('e8b2dd0085e294a2c2f3fcf2fa4efc11ccaa3f06ac4ca1b3164cd2caf7de68a575193579d3b85180', 54, 1, 'authToken', '[]', 0, '2022-01-25 22:51:09', '2022-01-25 22:51:09', '2023-01-25 16:51:09'),
('f0d63b5b742c71f824a7aec6b5ba8157b9c0db20f40a1c69d981379f9dac0004d2f120e01cd25662', 48, 1, 'authToken', '[]', 0, '2021-07-15 01:54:17', '2021-07-15 01:54:17', '2022-07-14 20:54:17'),
('f6dd7c920700692575a74d16102566ab4c97c6c1a35dfac42f5cd560e9be8c813b4861209ecd15a3', 54, 1, 'authToken', '[]', 0, '2022-03-15 22:38:34', '2022-03-15 22:38:34', '2023-03-15 16:38:34'),
('fa84ec354e808a5831da1b23fffb59b725abd1685e4dbd89788d2650abc00862f435aab34846f603', 9, 1, 'authToken', '[]', 0, '2021-04-04 03:49:51', '2021-04-04 03:49:51', '2022-04-03 21:49:51'),
('fc024d35b46eb89994a1c6d5f30545fb6f209b47fa7e7f24a53d5d60b2caf61f9afb53bc2c077109', 54, 1, 'authToken', '[]', 0, '2022-01-25 23:20:40', '2022-01-25 23:20:40', '2023-01-25 17:20:40'),
('ff7ae93374ec903f69815c64193d85b2df7fb1b5fe4bfb5f7a99f6d905ff575946a93d275528034b', 9, 1, 'authToken', '[]', 0, '2021-07-29 20:52:28', '2021-07-29 20:52:28', '2022-07-29 15:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Turno Personal Access Client', 'sNgRMcQzBqVMh8doxaQFoPFePSnlZNRQEMYOQQ6b', NULL, 'http://localhost', 1, 0, 0, '2021-04-04 02:00:51', '2021-04-04 02:00:51'),
(2, NULL, 'Turno Password Grant Client', 'fXTGZZtcIKKADdrGEKOqUvc0WfIj8UhSV8lpPbRZ', 'users', 'http://localhost', 0, 1, 0, '2021-04-04 02:00:51', '2021-04-04 02:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-04 02:00:51', '2021-04-04 02:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('franco@admin.com', '$2y$10$nfn8QTdtHWUo1qEKC1hvwOVtoaoRONZQOhmZU6QFSiOtc113KzSl.', '2021-06-03 04:42:08'),
('aldouli6@gmail.com', '$2y$10$VweM4PD.ca6K6U8EpkNoqu1xQ5AxAp9KsCkj.KBZyOVm1XJcq4EmW', '2021-06-04 01:19:56');

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

-- --------------------------------------------------------

--
-- Table structure for table `prospects`
--

CREATE TABLE `prospects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_wa` tinyint(1) NOT NULL DEFAULT '0',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_fb` tinyint(1) NOT NULL DEFAULT '0',
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_ig` tinyint(1) NOT NULL DEFAULT '0',
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prospects`
--

INSERT INTO `prospects` (`id`, `name`, `owner`, `image`, `latitude`, `longitude`, `address`, `phone`, `sent_wa`, `facebook`, `sent_fb`, `instagram`, `sent_ig`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uno', 'dos', 'prospects/prospect_1.png', '20.5907259', '-100.285221', 'Avenida Epigmenio González 29, , , Querétaro , México', '1234567890', 0, NULL, 0, NULL, 0, 'no', '2021-06-18 15:49:22', '2021-06-18 07:49:22', NULL),
(3, 'sally', 'bxbd', 'prospects/prospect_3.png', '20.5884696', '-100.275748', 'Cirrus 400, 4, , Querétaro 76246, México', '1231234560', 0, NULL, 0, NULL, 0, NULL, '2021-06-17 07:52:00', '2021-06-18 07:52:00', NULL),
(4, 'dos', 'tres', 'prospects/prospect_4.png', '20.5884765', '-100.27573', 'Cirrus 400, 4, , Querétaro 76246, México', '6435961470', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 07:56:10', '2021-06-18 07:56:10', NULL),
(5, 'un dhd', 'ya f ya c', 'prospects/prospect_5.png', '20.588463', '-100.275674', 'Cirrus 400, 4, , Querétaro 76246, México', '1234561471', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:19:41', '2021-06-18 23:19:41', NULL),
(6, 'un dhdh', 'ya f ya cv', 'prospects/prospect_6.png', '20.588463', '-100.275674', 'Cirrus 400, 4, , Querétaro 76246, México', '1234561472', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:20:55', '2021-06-18 23:20:55', NULL),
(7, 'ido', 'HH', 'prospects/prospect_7.png', '20.5884699', '-100.275708', 'Cirrus 400, 4, , Querétaro 76246, México', '4561237890', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:23:54', '2021-06-18 23:23:54', NULL),
(8, 'idovb', 'HHvb', 'prospects/prospect_8.png', '20.5884699', '-100.275708', 'Cirrus 400, 4, , Querétaro 76246, México', '4561237893', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:25:07', '2021-06-18 23:25:07', NULL),
(9, 'idovbhh', 'HHvbjj', 'prospects/prospect_9.png', '20.5884699', '-100.275708', 'Cirrus 400, 4, , Querétaro 76246, México', '4561237896', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:28:50', '2021-06-18 23:28:50', NULL),
(10, 'idovbhhgggg', 'HHvbjjff', 'prospects/prospect_10.png', '20.5884699', '-100.275708', 'Cirrus 400, 4, , Querétaro 76246, México', '4561237895', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:29:45', '2021-06-18 23:29:45', NULL),
(11, 'idovbhhgggggg', 'HHvbjjffbb', 'prospects/prospect_11.png', '20.5884699', '-100.275708', 'Cirrus 400, 4, , Querétaro 76246, México', '4561237895', 0, NULL, 0, NULL, 0, NULL, '2021-06-18 23:35:17', '2021-06-18 23:35:17', NULL),
(15, 'idoss', NULL, 'prospects/prospect_15.png', '20.5884649', '-100.275755', 'Cirrus 400, 4, , Querétaro 76246, México', '96976969968', 0, NULL, 0, NULL, 0, NULL, '2021-06-28 22:08:47', '2021-06-28 22:08:47', NULL),
(16, 'idosss', NULL, 'prospects/prospect_16.png', '20.5884435', '-100.275713', 'Cirrus 400, 4, , Querétaro 76246, México', '1234567892', 0, NULL, 0, NULL, 0, NULL, '2021-06-28 23:58:15', '2021-06-28 23:58:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relation_resource_sessions`
--

CREATE TABLE `relation_resource_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relation_resource_sessions`
--

INSERT INTO `relation_resource_sessions` (`id`, `resource_id`, `session_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(2, 1, 2, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(3, 1, 3, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(4, 2, 2, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(5, 2, 3, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(6, 3, 4, '2021-04-10 20:18:06', '2021-04-10 20:18:06', NULL),
(7, 3, 5, '2021-04-10 20:18:06', '2021-04-10 20:18:06', NULL),
(8, 4, 4, '2021-04-13 00:52:17', '2021-04-13 00:52:17', NULL),
(9, 4, 5, '2021-04-13 00:52:17', '2021-04-13 00:52:17', NULL),
(10, 4, 6, '2021-04-13 00:52:17', '2021-04-13 00:52:17', NULL),
(11, 5, 8, '2021-07-15 08:03:58', '2021-07-15 08:03:58', NULL),
(12, 5, 7, '2021-07-15 22:21:20', '2021-07-15 22:21:20', NULL),
(13, 6, 9, '2022-03-13 21:36:10', '2022-03-13 21:49:02', '2022-03-13 21:49:02'),
(14, 6, 11, '2022-03-13 21:36:10', '2022-03-13 21:36:10', NULL),
(15, 6, 9, '2022-03-21 21:38:56', '2022-03-21 21:38:56', NULL),
(16, 7, 11, '2022-03-22 00:49:42', '2022-03-22 00:49:42', NULL),
(17, 7, 12, '2022-03-22 00:49:42', '2022-03-22 00:49:42', NULL),
(18, 7, 13, '2022-03-22 00:49:42', '2022-03-22 00:49:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `establishment_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectable` tinyint(1) NOT NULL DEFAULT '1',
  `order_alpha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'asc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `enabled`, `establishment_id`, `name`, `selectable`, `order_alpha`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Sillon 1', 1, 'asc', '2021-04-01 04:03:19', '2021-05-16 08:12:05', NULL),
(2, 1, 1, 'Sillón 2', 1, 'asc', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(3, 0, 2, 'Recurso 1', 1, '1', '2021-04-10 20:18:06', '2021-04-23 03:41:21', NULL),
(4, 1, 2, 'Recurso 2', 1, '1', '2021-04-10 20:18:06', '2021-04-13 00:49:22', NULL),
(5, 1, 6, 'El nombre', 1, '1', '2021-07-15 08:03:58', '2021-07-15 22:21:20', NULL),
(6, 1, 9, 'Recurso 1', 1, '0', '2022-03-13 21:36:10', '2022-03-21 21:39:02', NULL),
(7, 1, 9, 'rec 2', 1, '0', '2022-03-22 00:49:42', '2022-03-28 17:33:18', NULL);

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
(1, 'super_admin', 'web', '2021-04-01 04:03:18', '2021-04-01 04:03:18'),
(2, 'preadmin', 'web', '2021-04-01 04:03:18', '2021-04-01 04:03:18'),
(3, 'admin', 'web', '2021-04-01 04:03:18', '2021-04-01 04:03:18'),
(4, 'user', 'web', '2021-04-01 04:03:18', '2021-04-01 04:03:18'),
(5, 'client', 'web', '2021-04-01 04:03:18', '2021-04-01 04:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `resource_id` int(10) UNSIGNED NOT NULL,
  `start_hour` time NOT NULL,
  `end_hour` time NOT NULL,
  `sunday` tinyint(1) NOT NULL DEFAULT '0',
  `monday` tinyint(1) NOT NULL DEFAULT '0',
  `tuesday` tinyint(1) NOT NULL DEFAULT '0',
  `wednesday` tinyint(1) NOT NULL DEFAULT '0',
  `thrusday` tinyint(1) NOT NULL DEFAULT '0',
  `friday` tinyint(1) NOT NULL DEFAULT '0',
  `saturday` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `enabled`, `resource_id`, `start_hour`, `end_hour`, `sunday`, `monday`, `tuesday`, `wednesday`, `thrusday`, `friday`, `saturday`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '10:30:00', '22:30:00', 0, 1, 1, 1, 0, 0, 0, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(2, 1, 1, '08:30:00', '14:30:00', 0, 0, 0, 0, 1, 1, 1, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(3, 1, 1, '16:00:00', '21:00:00', 0, 0, 0, 0, 1, 1, 1, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(4, 1, 2, '10:30:00', '22:30:00', 1, 0, 1, 0, 1, 0, 0, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(5, 1, 2, '08:30:00', '14:30:00', 0, 1, 0, 1, 0, 1, 1, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(6, 1, 2, '16:00:00', '21:00:00', 0, 1, 0, 1, 0, 1, 1, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(7, 1, 4, '10:30:00', '22:30:00', 1, 1, 1, 0, 1, 0, 0, '2021-04-01 04:03:19', '2021-04-13 01:16:50', NULL),
(8, 1, 5, '08:00:00', '20:00:00', 0, 1, 1, 1, 0, 0, 0, '2021-07-15 22:36:43', '2021-07-15 22:36:43', NULL),
(9, 1, 6, '09:00:00', '15:30:00', 0, 1, 1, 1, 1, 1, 0, '2022-03-15 23:18:32', '2022-03-25 20:06:56', NULL),
(10, 1, 6, '17:00:00', '18:00:00', 0, 1, 1, 1, 1, 1, 0, '2022-03-25 20:06:01', '2022-03-25 20:06:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `establishment_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `max_days_schedule` int(11) NOT NULL,
  `max_hours_schedule` int(11) NOT NULL,
  `max_minutes_schedule` int(11) NOT NULL,
  `min_days_schedule` int(11) NOT NULL,
  `min_hours_schedule` int(11) NOT NULL,
  `min_minutes_schedule` int(11) NOT NULL,
  `standby_time` time NOT NULL,
  `time_btwn_session` time NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `enabled`, `establishment_id`, `name`, `duration`, `cost`, `max_days_schedule`, `max_hours_schedule`, `max_minutes_schedule`, `min_days_schedule`, `min_hours_schedule`, `min_minutes_schedule`, `standby_time`, `time_btwn_session`, `end_date`, `created_at`, `updated_at`, `deleted_at`, `color`) VALUES
(1, 1, 1, 'Resina', '00:30', 350.00, 0, 0, 0, 0, 0, 0, '00:15:00', '00:00:00', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL, '#FF33EC'),
(2, 1, 1, 'Ajuste Brackets', '00:15', 300.00, 2, 0, 0, 0, 1, 15, '00:00:00', '00:00:00', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL, '#4133FF'),
(3, 1, 1, 'Extracción Molar', '01:00', 300.00, 5, 0, 0, 0, 1, 15, '00:15:00', '00:15:00', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL, '#027802'),
(4, 1, 2, 'Session 1', '00:45', 350.00, 0, 0, 0, 0, 0, 0, '00:15:00', '00:00:00', NULL, '2021-04-10 19:57:23', '2021-04-10 20:03:02', NULL, 'VERDE'),
(5, 1, 2, 'Session 2', '00:45', 350.00, 0, 0, 0, 0, 1, 0, '00:15:00', '00:00:00', NULL, '2021-04-10 19:57:23', '2021-05-10 21:59:57', NULL, 'VIOLETA'),
(6, 1, 2, 'Session 3', '00:30', 350.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', NULL, '2021-04-10 19:57:23', '2021-05-09 04:40:29', NULL, 'AZUL'),
(7, 1, 6, 'Sesion 1', '01:00', 36.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', NULL, '2021-07-15 06:50:35', '2021-07-15 22:20:36', NULL, 'ROJONARANJA'),
(8, 1, 6, 'Sesion 2', '01:00', 23.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', NULL, '2021-07-15 07:28:46', '2021-07-15 22:21:44', NULL, 'GRISOSCURO'),
(9, 1, 9, 'unohffd', '00:35', 0.91, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', '2022-03-26', '2022-03-10 19:49:14', '2022-03-21 21:38:34', NULL, 'VERDEAMARILLO'),
(10, 0, 9, 'cbb', '00:00', 66.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', NULL, '2022-03-10 20:10:53', '2022-03-10 20:33:21', '2022-03-10 20:33:21', 'VERDEAMARILLO'),
(11, 1, 9, 'dos', '00:30', 147.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', '2022-04-18', '2022-03-13 18:42:52', '2022-04-03 17:53:29', NULL, 'ROJONARANJA'),
(12, 1, 9, 'recc 2', '00:20', 20.00, 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', NULL, '2022-03-22 00:46:15', '2022-03-22 00:46:15', NULL, 'ROJOVIOLETA'),
(13, 1, 9, 'ses 2', '00:20', 20.00, 0, 0, 0, 0, 0, 0, '00:05:00', '00:10:00', NULL, '2022-03-22 00:47:55', '2022-03-28 17:32:59', NULL, 'AMARILLONARANJA');

-- --------------------------------------------------------

--
-- Table structure for table `status_turnos`
--

CREATE TABLE `status_turnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_turnos`
--

INSERT INTO `status_turnos` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'solicitado', 'Cuando se crean los turnos entran como solicitados', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(2, 'rechazado', 'Cuando el establecimiento rechaza la solicitud del cliente, y agrega comentarios', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(3, 'agendado', 'Cuando el establecimiento autorize el turno, cambia a pendiente (puede ser autorizado automaticamente)', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(4, 'confirmado', 'El Cliente confirma que asistirá, antes de la fecha de cancelación', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(5, 'cancelado', 'El Cliente cancela el turno, antes de la fecha de cancelación, agrega comentarios, o razones', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(6, 'atendiendo', 'Cuando el cliente llega al establecimiento, el cliente confirma que llegó, el establecimiento confirma que llegó, con que el establecimiento confirme es suficiente, puede ser en automatico al llegar la hora', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(7, 'atendido', 'Cuando el establecimiento finaliza el servicio, agrega comentarios', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL),
(8, 'calificado', 'Cuando el califica el servicio, agrega comentarios', '2021-04-01 04:03:19', '2021-04-01 04:03:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `turnos`
--

CREATE TABLE `turnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establishment_id` int(10) UNSIGNED NOT NULL,
  `resource_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED NOT NULL,
  `status_turno_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `turnos`
--

INSERT INTO `turnos` (`id`, `user_id`, `email`, `phone`, `establishment_id`, `resource_id`, `session_id`, `status_turno_id`, `date`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 'ucornejo@nextdata.com.mx', '4531318574', 1, 1, 1, 3, '2021-04-21', '00:00:00', '00:00:00', '2021-04-22 02:25:28', '2021-04-22 02:25:28', NULL),
(2, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 5, 3, '2021-04-21', '20:00:00', '21:00:00', '2021-04-22 02:53:23', '2021-04-22 02:53:23', NULL),
(3, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 5, 5, '2021-04-22', '19:15:00', '20:15:00', '2021-04-22 02:55:14', '2021-05-10 04:57:07', NULL),
(4, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 5, 3, '2021-04-22', '19:00:00', '20:00:00', '2021-04-23 03:41:37', '2021-04-23 03:41:37', NULL),
(5, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 5, 3, '2021-04-25', '17:45:00', '18:45:00', '2021-04-23 04:11:43', '2021-04-23 04:11:43', NULL),
(6, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 4, 3, '2021-04-26', '21:45:00', '22:45:00', '2021-04-27 05:03:06', '2021-04-27 05:03:06', NULL),
(7, 13, 're@h.com', '45454545454', 2, 4, 5, 3, '2021-04-26', '20:30:00', '21:30:00', '2021-04-27 05:03:36', '2021-04-27 05:03:36', NULL),
(8, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 5, 3, '2021-06-08', '13:00:00', '14:00:00', '2021-05-01 22:40:36', '2021-06-16 01:37:51', NULL),
(9, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 6, 3, '2021-05-04', '10:30:00', '11:30:00', '2021-05-01 22:40:55', '2021-05-01 22:40:55', NULL),
(10, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 5, 3, '2021-04-21', '20:00:00', '21:00:00', '2021-05-01 22:58:20', '2021-05-01 22:58:20', NULL),
(11, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 6, 5, '2021-05-11', '10:30:00', '11:30:00', '2021-05-07 01:02:44', '2021-05-11 06:12:16', NULL),
(12, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 4, 7, '2021-05-11', '11:00:00', '12:00:00', '2021-05-07 01:17:50', '2021-05-13 22:13:21', NULL),
(13, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 5, 3, '2021-05-11', '11:30:00', '12:30:00', '2021-05-07 02:47:24', '2021-05-11 06:17:13', NULL),
(14, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 4, 4, '2021-05-11', '11:00:00', '11:30:00', '2021-05-07 03:44:33', '2021-05-11 06:14:47', NULL),
(15, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 5, 3, '2021-05-13', '10:30:00', '11:30:00', '2021-05-07 03:48:49', '2021-05-10 04:59:35', NULL),
(16, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 6, 1, '2021-05-13', '11:30:00', '12:00:00', '2021-05-09 04:41:58', '2021-05-10 05:01:00', NULL),
(17, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 4, 3, '2021-05-11', '18:45:00', '19:45:00', '2021-05-12 04:13:58', '2021-05-13 22:12:12', NULL),
(18, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 5, 3, '2021-06-17', '15:00:00', '16:00:00', '2021-06-17 04:17:17', '2021-06-17 04:17:17', NULL),
(19, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 4, 5, '2021-06-21', '16:00:00', '17:00:00', '2021-06-17 04:17:38', '2021-06-17 04:17:55', NULL),
(20, 13, 're@h.com', '45454545454', 2, 4, 4, 3, '2021-06-21', '15:00:00', '16:00:00', '2021-06-17 04:18:32', '2021-06-17 04:18:32', NULL),
(21, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 5, 5, '2021-07-29', '10:30:00', '11:30:00', '2021-06-24 04:00:44', '2021-06-24 04:17:16', NULL),
(22, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 5, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:02:04', '2021-06-24 04:15:20', NULL),
(23, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 5, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:02:43', '2021-06-24 04:17:09', NULL),
(24, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 5, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:04:11', '2021-06-24 04:25:48', NULL),
(25, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:04:42', '2021-06-24 04:04:42', NULL),
(26, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:05:20', '2021-06-24 04:05:20', NULL),
(27, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-31', '11:45:00', '12:15:00', '2021-06-24 04:06:58', '2021-06-24 04:06:58', NULL),
(28, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-31', '11:45:00', '12:15:00', '2021-06-24 04:07:21', '2021-06-24 04:07:21', NULL),
(29, 9, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-31', '11:45:00', '12:15:00', '2021-06-24 04:07:48', '2021-06-24 04:16:32', NULL),
(30, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 3, '2022-03-31', '13:30:00', '14:30:00', '2021-06-24 04:20:16', '2021-06-24 04:25:55', NULL),
(31, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:20:40', '2021-06-24 04:20:40', NULL),
(32, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:21:24', '2021-06-24 04:21:24', NULL),
(33, 6, 'cliente1@gmail.com', '66666666666', 2, 4, 5, 3, '2021-07-29', '13:30:00', '14:30:00', '2021-06-24 04:21:36', '2021-06-24 04:21:36', NULL),
(34, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 5, '2021-07-29', '11:45:00', '12:15:00', '2021-06-24 04:22:15', '2021-06-24 04:22:59', NULL),
(35, 11, 'cliente2@gmail.com', '4564564564', 2, 4, 6, 3, '2021-07-29', '11:45:00', '12:15:00', '2021-06-28 22:14:56', '2021-06-28 22:14:56', NULL),
(36, 6, 'cliente1@gmail.com', '66666666666', 6, 5, 8, 3, '2021-07-19', '08:00:00', '09:00:00', '2021-07-15 22:37:19', '2021-07-15 22:37:19', NULL),
(37, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 5, 3, '2021-09-16', '16:00:00', '17:00:00', '2021-08-01 18:35:18', '2021-08-01 18:35:18', NULL),
(38, 12, 'cliente3@gmail.com', '1231231231', 2, 4, 6, 3, '2021-08-24', '16:00:00', '16:30:00', '2021-08-01 18:35:45', '2021-08-01 18:35:45', NULL),
(39, 12, 'cliente3@gmail.com', '1231231231', 9, 6, 11, 3, '2022-04-04', '17:15:00', '17:45:00', '2022-04-04 22:06:12', '2022-04-04 22:06:12', NULL),
(40, 12, 'cliente3@gmail.com', '1231231231', 9, 6, 11, 6, '2022-04-05', '13:40:00', '14:10:00', '2022-04-05 16:46:02', '2022-04-05 19:48:34', NULL),
(41, 12, 'cliente3@gmail.com', '1231231231', 9, 6, 11, 7, '2022-04-05', '14:10:00', '14:40:00', '2022-04-05 17:38:21', '2022-04-05 18:08:51', NULL),
(42, 11, 'cliente2@gmail.com', '4564564564', 9, 6, 11, 7, '2022-04-05', '14:10:00', '14:40:00', '2022-04-05 18:09:15', '2022-04-05 18:11:52', NULL),
(43, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 7, '2022-04-05', '17:10:00', '17:40:00', '2022-04-05 18:13:37', '2022-04-05 19:49:36', NULL),
(46, 11, 'cliente2@gmail.com', '4564564564', 9, 6, 11, 3, '2022-04-07', '14:00:00', '14:30:00', '2022-04-07 19:01:14', '2022-04-07 19:01:14', NULL),
(47, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 3, '2022-04-07', '17:30:00', '18:00:00', '2022-04-07 19:09:27', '2022-04-07 22:04:51', NULL),
(48, 12, 'cliente3@gmail.com', '1231231231', 9, 6, 11, 3, '2022-04-08', '10:25:00', '10:55:00', '2022-04-07 21:42:12', '2022-04-07 21:42:12', NULL),
(49, 11, 'cliente2@gmail.com', '4564564564', 9, 6, 11, 5, '2022-04-11', '13:30:00', '14:00:00', '2022-04-11 18:25:20', '2022-04-11 19:44:19', NULL),
(50, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 7, '2022-04-11', '14:35:00', '15:05:00', '2022-04-11 18:25:47', '2022-04-11 19:53:49', NULL),
(51, 13, 're@h.com', '45454545454', 9, 6, 11, 5, '2022-04-11', '14:00:00', '14:30:00', '2022-04-11 18:27:01', '2022-04-11 19:48:39', NULL),
(52, 11, 'cliente2@gmail.com', '4564564564', 9, 6, 11, 5, '2022-04-12', '11:10:00', '11:40:00', '2022-04-11 18:33:01', '2022-04-12 21:04:36', NULL),
(53, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 5, '2022-04-11', '17:00:00', '17:30:00', '2022-04-11 19:15:26', '2022-04-11 19:54:37', NULL),
(54, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 3, '2022-04-11', '17:30:00', '18:00:00', '2022-04-11 19:33:54', '2022-04-11 19:33:54', NULL),
(55, 6, 'cliente1@gmail.com', '66666666666', 9, 6, 11, 3, '2022-04-11', '14:50:00', '15:20:00', '2022-04-11 19:54:57', '2022-04-11 19:56:47', NULL);

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
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `establishment_id` int(10) UNSIGNED DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ref_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` date DEFAULT NULL,
  `phone_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` tinyint(1) NOT NULL DEFAULT '0',
  `privacy_notice` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `enabled`, `establishment_id`, `api_token`, `user_name`, `ref_code`, `lastname`, `imagen`, `phone`, `registration_date`, `phone_verification`, `terms`, `privacy_notice`) VALUES
(1, 'Super', 'admin@gmail.com', '2021-04-01 04:03:18', '$2y$10$uUhYOXsmsHCtT63nIYj65.ldM.bGtA0oibzLV0qIFZJKLo1snIErK', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, NULL, NULL, 'superadmin', NULL, 'Admin', NULL, '1111111111', NULL, NULL, 1, 1),
(2, 'Pre', 'preadmin@gmail.com', '2021-04-01 04:03:19', '$2y$10$Mvf7LjIE7UCKdFbiSuBoXO/G3P99uhKp3RmS/nhL/.79RKJQN7An6', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, NULL, NULL, 'preadmin', NULL, 'Admin', NULL, '2222222222', NULL, NULL, 1, 1),
(3, 'Admin', 'adminadmin@gmail.com', '2021-04-01 04:03:19', '$2y$10$ps5smkx5cypSqjs5mcnq6esDkprxp6zTnZQsr7UyoBJ/D4Q9OdXAG', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, 1, NULL, 'adminadmin', 'franco_esca', 'Admin', NULL, '3333333333', NULL, NULL, 1, 1),
(4, 'User', 'user1@gmail.com', '2021-04-01 04:03:19', '$2y$10$Uvql.X3/FPtZO2kBOfBqd.uDMljGk29DqgV.fTzWWFC7ty5.jgFBK', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, 1, NULL, 'useruno', NULL, 'Uno', NULL, '44444444444', NULL, NULL, 1, 1),
(5, 'User', 'user2@gmail.com', '2021-04-01 04:03:19', '$2y$10$YdUvYf5INElDfq49uCRYlOipvbXyobBEJWAu9e.fVDFSFP2pUA.Fu', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, 1, NULL, 'userdos', NULL, 'Dos', NULL, '5555555555', NULL, NULL, 1, 1),
(6, 'prueba', 'cliente1@gmail.com', '2021-04-01 04:03:19', '$2y$10$aBS06BGZKF0pzocxoOhFB.FfoXvDIU3xcRD2IYvgT5TpTNuczBevW', NULL, '2021-04-01 04:03:19', '2021-04-01 04:03:19', 1, NULL, NULL, 'cliente1', NULL, 'Uno', NULL, '66666666666', NULL, NULL, 1, 1),
(9, 'Franco', 'franco@admin.com', '2021-04-03 19:57:35', '$2y$10$cDwKITwbbLMusZ6g9Ar2hOjoFfhd5p2Z6zGYQ3dNwmhbAe/ZKZ2Fq', NULL, '2021-04-04 01:57:11', '2022-04-13 18:05:48', 1, 2, 'c3rO7AF5Q6SVtwF2PFVrIC:APA91bES3Lz3zfZQK6A7vWch6L8QQhKwsb2HVLSxIymKCHIO7tKQweobDhCkiYgEuvNTPqnpAdUHDCQydGxURJTWRFhqq9pI71oMbkNwbXViM4oA6PaIPS4VZ26WNCbyo5is-Cpq3P8U', 'admin', NULL, 'Escamilla', 'users/user_9.png', '+527777777777', NULL, NULL, 1, 1),
(10, 'Paco', 'paco@maya.com', NULL, '$2y$10$BRq842Swp8saGB0MwHU6/usi9JJOdv8zUm2Ls4r/Mm99gWTxLOp3.', NULL, '2021-04-04 03:34:31', '2021-04-04 03:34:31', 1, 2, NULL, 'paco_may', '', 'Maya', 'users/user.png', '9876545678', NULL, NULL, 1, 1),
(11, 'Cliente', 'cliente2@gmail.com', NULL, '$2y$10$Ufj0oxEfokFHQMSzPEXRTeVJGCRVzlUYuEdp7WrNMLTDpqiDsnXg2', NULL, '2021-04-16 02:22:37', '2021-04-16 02:22:37', 1, NULL, NULL, 'cliente264564', NULL, 'Dos', 'users/user.png', '4564564564', NULL, NULL, 1, 1),
(12, 'Cliente', 'cliente3@gmail.com', NULL, '$2y$10$3F2A3XsH1ZCRJFnfB7lgUuuWqhU097ol12vzhExI7vWBq1u/UW/bO', NULL, '2021-04-16 02:33:30', '2021-04-16 02:33:30', 1, NULL, NULL, 'cliente31231', 'ADMIN', 'Tres', 'users/user.png', '1231231231', NULL, NULL, 1, 1),
(13, 'uno', 're@h.com', NULL, '$2y$10$5mBzmAtqny9A/jCemNv8D.XaOwdx6IkuIDDEnCXFlKUrRQn9tPsaa', NULL, '2021-04-16 02:34:54', '2021-04-16 02:34:54', 1, NULL, NULL, 're5454', 'PREADMIN', 'dos', 'users/user.png', '45454545454', NULL, NULL, 1, 1),
(39, 'Aldo', 'aldouli6@gmail.com', NULL, '$2y$10$CajwcF77T9eHe/GhI0WgreoAKnPibFeZGjpm9IaW7cukjcZo1ooIK', '7OOiHaThAmERar9t3nBbhck8MmYLpwkTSXK50SsM94inwL69pxwOcI8oAccG', '2021-06-03 04:13:30', '2021-06-03 06:27:56', 1, 2, NULL, 'aldouli6', 'franco_esca', 'Cornejo', 'users/user.png', '4531318574', NULL, NULL, 1, 1),
(40, 'Intento', 'intento1@admin.com', NULL, '$2y$10$1DNpDhlmx6IkItgbTQkPGOmBtMOfR6Fj1.YcggfnLrTY9.zy5bZaS', NULL, '2021-06-09 05:40:50', '2021-06-09 05:40:50', 1, 2, NULL, 'intento1', NULL, 'uno', 'users/user.png', '12345697890', NULL, NULL, 1, 1),
(41, 'intento', 'intento2@admin.com', NULL, '$2y$10$mpgtDoSyRKNPVHSAc1/GiOXS25Rtm24kgDfN3arIDScV454USVcVC', NULL, '2021-06-09 05:44:27', '2021-06-09 05:44:27', 1, 2, NULL, 'intento2', 'FRANCO_ESCA', 'dos', 'users/user.png', '9998686868', NULL, NULL, 1, 1),
(42, 'Intento', 'intento3@admin.com', NULL, '$2y$10$Go.KH.iQ6guO/enImgaNf.NNAm4PPENJ3R1T1XQb8qVLivPSZPJ/.', NULL, '2021-06-09 05:48:38', '2021-06-09 05:48:38', 1, NULL, NULL, 'intento36565', 'FRANCO_ESCA', 'tres', 'users/user.png', '9898656565', NULL, NULL, 1, 1),
(43, 'Intento', 'intento31@admin.com', NULL, '$2y$10$ofCJ.vOxuS3AP90secLksO0cZtW22ItoDKtlFJKm515y2SfVEN0pG', NULL, '2021-06-09 05:50:23', '2021-06-09 05:50:23', 1, NULL, NULL, 'intento16565', 'FRANCO_ESCA', 'tres', 'users/user.png', '9898656515', NULL, NULL, 1, 1),
(44, 'Intento', 'intent31@admin.com', NULL, '$2y$10$7G/47I6oOfsC95K4oHA3m.g.ps4cVlGl.0UH8bplMCR5KgHF.dyCi', NULL, '2021-06-09 05:51:21', '2021-06-09 05:51:21', 1, 2, NULL, 'inteto16565', 'FRANCO_ESCA', 'tres', 'users/user.png', '9898256515', NULL, NULL, 1, 1),
(45, 'puto', 'puto@tu.com', NULL, '$2y$10$rSRxioBFl.wfjYacBeImaenyErL48cwpm9oQB6Lv9nE4lZZIXDdCi', NULL, '2021-06-09 05:52:35', '2021-06-09 05:52:35', 1, 2, NULL, 'puto1230', 'FRANCO_ESCA', 'tu', 'users/user.png', '1231231230', NULL, NULL, 1, 1),
(48, 'uno', 'iscaldoulises@gmail.com', '2021-07-15 01:44:03', '$2y$10$N3NSsIDPfS/gpcTfKTIvTuuK419oYsX/wzGixO5.jA09Wg/ybD9cm', NULL, '2021-07-15 01:42:12', '2021-07-15 05:30:19', 1, 6, NULL, 'trees', NULL, 'dos', 'users/user.png', '+521234567890', NULL, NULL, 1, 1),
(49, 'El nombre', 'admin@admin.com', NULL, '$2y$10$qxMGdxrKPaTE2Y08Y.PqXutj8JzywH5eOQH1p78p7dgXrUS3VB55a', NULL, '2021-07-29 21:24:24', '2021-07-29 21:24:24', 1, NULL, NULL, 'nombre', NULL, NULL, NULL, '1234567890', NULL, NULL, 1, 1),
(50, 'El nombre', 'admin2@admin.com', NULL, '$2y$10$eP2dUhmQgNyQmT7y2PvpMuCEs5MbXX9h52Ad/BBMA6dDluSqTGxXy', NULL, '2021-07-29 21:24:51', '2021-07-29 21:24:51', 1, NULL, NULL, 'nombre2', NULL, NULL, NULL, '1234567892', NULL, NULL, 1, 1),
(51, 'uno', 'a@e.com', NULL, '$2y$10$CQry1iMqn/N/Rc0HnJcgh.XCeANd9aoKMc2Vqu1Yeoxgk/Xqb8nqS', NULL, '2022-01-21 19:34:30', '2022-01-21 19:34:30', 1, NULL, NULL, 'ttres', NULL, 'dos', 'users/user.png', '1234567899', NULL, NULL, 1, 1),
(52, 'unooo', '1@3.coww', NULL, '$2y$10$gEiIN8XiTT1n2WPzJAnGDOdLiqGCZ.qA4W5kPN1SO7S9cOzYbhOkW', NULL, '2022-01-21 19:44:18', '2022-01-21 19:44:18', 1, NULL, NULL, 'trreeso13', NULL, 'dooos', 'users/user.png', '0987654325', NULL, NULL, 1, 1),
(53, 'uno', 'a@e.come', NULL, '$2y$10$IgiIkNcz1LzecbsDQyCH7.YqcmADNGaqlUyUSImx0twii4l2DqT2G', NULL, '2022-01-21 19:44:47', '2022-01-21 19:44:47', 1, NULL, NULL, 'ttrese', NULL, 'dos', 'users/user.png', '1234567891', NULL, NULL, 1, 1),
(54, 'dos', 'cua@mail.com', '2022-01-21 20:14:39', '$2y$10$wc/LneyUhT0dsrCg5e/08.9VN70zPlEjHBwnxjp2o5zqYiidyNA/u', NULL, '2022-01-21 19:48:10', '2022-04-12 21:04:22', 1, 9, 'cgmftqntTh6y9XcgTQTpW-:APA91bFDMKTTjYtahBafASfaWpcAOAN0uOZZyPUqxx3IMCEpm2hgWioe1VUWl1rE22EgTHWFiybTuEI_J2nwOIp1wspucp8PEkn8_VHW0o53vR4rV1t3hND5r8SQCXpIM1KKYfyxPsTs', 'cuatro', NULL, 'ttres', 'users/user.png', '9879879870', NULL, NULL, 1, 1),
(55, 'juan', 'asdasd2@2.co', NULL, '$2y$10$giRb.szw/0FWzcKDiD43xu4JhBNjtnm3JZOe2DHjhYk5Lj3OWKwoK', NULL, '2022-01-31 22:00:14', '2022-02-04 00:44:39', 1, 9, NULL, 'sdasd', 'CUATRO', 'asasdadd', 'users/user.png', '0987654322', NULL, NULL, 1, 1),
(56, 'jhkbkj', 'jkbljn@dfsds.com', NULL, '$2y$10$LA4YGPKGIzU9kuI3z43hNedbqEg0dNZcDDfjzqIEjOBf1wP7Ix85i', NULL, '2022-03-22 20:57:05', '2022-03-22 20:57:05', 0, 9, NULL, 'jkbljn8765', 'CUATRO', 'kjbljnll', 'users/user.png', '8768768765', NULL, NULL, 1, 1),
(57, 'ulises', 'ulises@velez.com', NULL, '$2y$10$Ft6Uf4TvGx8957wvbmPPx.uQuELyPso3ek6YJITSI30693ZuWMyFy', NULL, '2022-03-22 20:59:03', '2022-03-22 20:59:03', 1, 9, NULL, 'ulises9876', 'CUATRO', 'velez', 'users/user.png', '9879879876', NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `establishments`
--
ALTER TABLE `establishments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `establishments_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helps_status_help_id_foreign` (`status_help_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `prospects`
--
ALTER TABLE `prospects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prospects_name_unique` (`name`);

--
-- Indexes for table `relation_resource_sessions`
--
ALTER TABLE `relation_resource_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation_resource_sessions_resource_id_foreign` (`resource_id`),
  ADD KEY `relation_resource_sessions_session_id_foreign` (`session_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resources_establishment_id_foreign` (`establishment_id`);

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
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_resource_id_foreign` (`resource_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_establishment_id_foreign` (`establishment_id`);

--
-- Indexes for table `status_turnos`
--
ALTER TABLE `status_turnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turnos_establishment_id_foreign` (`establishment_id`),
  ADD KEY `turnos_resource_id_foreign` (`resource_id`),
  ADD KEY `turnos_session_id_foreign` (`session_id`),
  ADD KEY `turnos_status_turno_id_foreign` (`status_turno_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`),
  ADD KEY `users_establishment_id_foreign` (`establishment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `establishments`
--
ALTER TABLE `establishments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prospects`
--
ALTER TABLE `prospects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `relation_resource_sessions`
--
ALTER TABLE `relation_resource_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status_turnos`
--
ALTER TABLE `status_turnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `establishments`
--
ALTER TABLE `establishments`
  ADD CONSTRAINT `establishments_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `helps`
--
ALTER TABLE `helps`
  ADD CONSTRAINT `helps_status_help_id_foreign` FOREIGN KEY (`status_help_id`) REFERENCES `status_turnos` (`id`);

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
-- Constraints for table `relation_resource_sessions`
--
ALTER TABLE `relation_resource_sessions`
  ADD CONSTRAINT `relation_resource_sessions_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`),
  ADD CONSTRAINT `relation_resource_sessions_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_establishment_id_foreign` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_establishment_id_foreign` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`);

--
-- Constraints for table `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `turnos_establishment_id_foreign` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`),
  ADD CONSTRAINT `turnos_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`),
  ADD CONSTRAINT `turnos_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`),
  ADD CONSTRAINT `turnos_status_turno_id_foreign` FOREIGN KEY (`status_turno_id`) REFERENCES `status_turnos` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_establishment_id_foreign` FOREIGN KEY (`establishment_id`) REFERENCES `establishments` (`id`);
