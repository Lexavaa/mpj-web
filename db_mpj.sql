-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpj`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `event_joined` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `foto_acara` varchar(255) NOT NULL,
  `hightlight_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khodims`
--

CREATE TABLE `khodims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khodims`
--

INSERT INTO `khodims` (`id`, `kode`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin1702', 'ADMIN', NULL, NULL),
(2, 'Usr1', 'USER', NULL, NULL);

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
(1, '2001_01_25_145641_create_regionals_table', 1),
(2, '2001_01_26_173124_create_khodims_table', 1),
(3, '2002_01_26_225213_create_users_table', 1),
(4, '2003_01_26_225214_create_events_table', 1),
(5, '2003_02_07_123536_create_profiles_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `regionals_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pesantren` varchar(255) DEFAULT NULL,
  `nama_pengasuh` varchar(255) DEFAULT NULL,
  `alamat_lengkap` varchar(255) DEFAULT NULL,
  `jumlah_kru` int(11) DEFAULT NULL,
  `nama_pendaftar` varchar(255) DEFAULT NULL,
  `jabatan_pendaftar` varchar(255) DEFAULT NULL,
  `nomor_wa` varchar(255) DEFAULT NULL,
  `nama_media` varchar(255) DEFAULT NULL,
  `nomor_telegram` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `link_tiktok` varchar(255) DEFAULT NULL,
  `link_youtube` varchar(255) DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_website` varchar(255) DEFAULT NULL,
  `link_map` varchar(255) DEFAULT NULL,
  `logo_ponpes` varchar(255) DEFAULT NULL,
  `logo_media` varchar(255) DEFAULT NULL,
  `foto_gedung` varchar(255) DEFAULT NULL,
  `foto_pengasuh` varchar(255) DEFAULT NULL,
  `foto_kegiatan` varchar(255) DEFAULT NULL,
  `sejarah_pesantren` varchar(500) DEFAULT NULL,
  `quote_pengasuh` varchar(255) DEFAULT NULL,
  `link_audio_dawuh` varchar(255) DEFAULT NULL,
  `jumlah_santri` varchar(255) DEFAULT NULL,
  `foto_kru` varchar(255) DEFAULT NULL,
  `alamat_kru` varchar(255) DEFAULT NULL,
  `nomor_wa_kru` varchar(255) DEFAULT NULL,
  `email_kru` varchar(255) DEFAULT NULL,
  `jabatan_kru` varchar(255) DEFAULT NULL,
  `keahlian_kru` varchar(255) DEFAULT NULL,
  `status_kru` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `users_id`, `regionals_id`, `nama_pesantren`, `nama_pengasuh`, `alamat_lengkap`, `jumlah_kru`, `nama_pendaftar`, `jabatan_pendaftar`, `nomor_wa`, `nama_media`, `nomor_telegram`, `instagram`, `tiktok`, `youtube`, `facebook`, `twitter`, `website`, `link_tiktok`, `link_youtube`, `link_instagram`, `link_facebook`, `link_twitter`, `link_website`, `link_map`, `logo_ponpes`, `logo_media`, `foto_gedung`, `foto_pengasuh`, `foto_kegiatan`, `sejarah_pesantren`, `quote_pengasuh`, `link_audio_dawuh`, `jumlah_santri`, `foto_kru`, `alamat_kru`, `nomor_wa_kru`, `email_kru`, `jabatan_kru`, `keahlian_kru`, `status_kru`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PPSQ Asy-Syadzili 1', 'Abuya Agus H. Abdul Mun\'im Syadzili', 'Jl. Sumber Pasir No.99A, Sumberpasir, Kec. Pakis, Kabupaten Malang, Jawa Timur 65154', 121, 'Daffa', 'OPOSISI YAZID', '082141331105', 'SantripasirCreativeMedia', '3232323', 'santripasir', 'ppsqasysyadzili1', 'ppsq asysyadzili 1', 'ppsq asy-syadzili 1', 'ppsq', 'ppsqasy-syadzili1.co.id', 'eeeeeeee', 'eeeeeeee', 'eeeeeeee', 'eeeeeeee', 'eeee', 'eeee', 'eeeeeeee', 'logo-pesantren/lz8IVvbpvM0RmrNHbh03NSmW0WWObwillDK0Ygqn.jpg', 'logo-media/QFA6b4zY0UAFzxER7X0bUjBWL19HAO2WG0iYAx6q.jpg', 'foto-gedung/VG3vqFMN7vaboB029ea4baPRyKJmTpWvGe2mHJxa.jpg', 'foto-pengasuh/TXdpsKGOppGu1U3XYeWjV6pHZ40kXg12lLI7DxEk.png', 'foto-kegiatan/MOgAZxg8opJ1ay8UWzfkNcPgHUxfkf5RAFCEcVc8.png', 'Ihwal pendirian PPSQ Asy-Syadzili Pakis, kabupaten Malang, diawali Setelah Haji Marzuqi sang mertua memberikan sepetak lahan disekitar daerah Sumberpasir, yang kemudian oleh Yai Syadzili didirikan sebuah pesantren dengan nama Pondok Pesantren Tarbiyah Tahfidzul Quran (PPTQ) sebelum kemudian berganti nama menjadi PPSQ Asy-Syadzili.', 'Rugilah Orang Yang Ditakdirkan Bertemu Ramadhan, Tapi Tidak Ada Yang Berubah Dari Orang Itu', 'eeeeeeee', '1300', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 22:54:41', '2023-02-14 23:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `regionals`
--

CREATE TABLE `regionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regionals`
--

INSERT INTO `regionals` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'MALANG', NULL, NULL),
(2, 'SURABAYA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `khodims_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `khodims_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tigerforceid@gmail.com', '$2y$10$tnekQ611zu/C2lPJ.ouX6uSeG8kDuaiXg6wa.89Q4A79eG0KLilUa', 2, NULL, NULL, '2023-02-14 22:54:41', '2023-02-14 22:54:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_users_id_foreign` (`users_id`);

--
-- Indexes for table `khodims`
--
ALTER TABLE `khodims`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_users_id_foreign` (`users_id`),
  ADD KEY `profiles_regionals_id_foreign` (`regionals_id`);

--
-- Indexes for table `regionals`
--
ALTER TABLE `regionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_khodims_id_foreign` (`khodims_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khodims`
--
ALTER TABLE `khodims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regionals`
--
ALTER TABLE `regionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_regionals_id_foreign` FOREIGN KEY (`regionals_id`) REFERENCES `regionals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profiles_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_khodims_id_foreign` FOREIGN KEY (`khodims_id`) REFERENCES `khodims` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
