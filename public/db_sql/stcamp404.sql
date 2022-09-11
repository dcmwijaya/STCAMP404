-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2022 pada 03.03
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stcamp404`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_01_103906_create_siswa_table', 1),
(6, '2022_09_10_002925_create_pelatihan_table', 1),
(7, '2022_09_10_031445_create_siswa_table', 2),
(8, '2022_09_12_024026_create_password_resets_table', 3),
(9, '2022_09_12_025510_create_password_resets_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, '20220101@stcamp404.ac.id', '$2y$10$cP39Mza60ZPKzwBQInOGDeryxJNBZn65KJndjpiPHG6Z059SuwjTe', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_item` int(10) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_pelatihan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_item`, `nama_pelatihan`, `waktu_pelatihan`, `created_at`, `updated_at`) VALUES
(1, 'Bootstrap 5', '2022-10-02', NULL, NULL),
(2, 'Git', '2022-10-20', NULL, NULL),
(3, 'Laravel 8', '2022-11-12', NULL, NULL),
(4, 'Codeigniter 4', '2022-12-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `pelatihan`, `created_at`, `updated_at`) VALUES
(1, 20220101, 'Jaya Mangunati', 'Bootstrap 5', '2022-09-11 14:45:46', '2022-09-11 14:47:23'),
(2, 20220101, 'Jaya Mangunati', 'Laravel 8', '2022-09-11 14:45:57', '2022-09-11 14:45:57'),
(3, 20220101, 'Jaya Mangunati', 'Codeigniter 4', '2022-09-11 14:46:35', '2022-09-11 14:46:35'),
(4, 20220102, 'Jadiyan Marto', 'Codeigniter 4', '2022-09-11 14:47:00', '2022-09-11 15:02:39'),
(5, 20220102, 'Jadiyan Marto', 'Git', '2022-09-11 14:48:40', '2022-09-11 14:48:40'),
(6, 20220102, 'Jadiyan Marto', 'Bootstrap 5', '2022-09-11 14:48:47', '2022-09-11 15:03:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `siswa_id`, `name`, `role`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Anastasya Geralda', 'admin', 'admin@stcamp404.ac.id', 'asset\\img\\profile\\admin.jpg', '$2y$10$sTFrUMwJgFADRIhmbqHJBe5Mqog2KAGDYJB9hqLjmohcmg5tcr7tO', NULL, NULL, NULL),
(2, 20220101, 'Jaya Mangunati', 'siswa', '20220101@stcamp404.ac.id', 'asset\\img\\profile\\siswa.jpg', '$2y$10$27FeEhw9YVfZa3QyFrtl6OGFcxiu/6bTdNn5DUYWA4TxULmJosNJa', NULL, NULL, NULL),
(4, 20220102, 'Jadiyan Marto', 'siswa', '20220102@stcamp404.ac.id', 'asset\\img\\profile\\default.jpg', '$2y$10$JjMoe9xh6nwaAHU4RmyqUOZVzSoxJJAF622jTvZlKDlWHxoA7FLFa', NULL, NULL, NULL),
(5, 20220103, 'Chondro Aminoto', 'siswa', '20220103@stcamp404.ac.id', 'asset\\img\\profile\\default.jpg', '$2y$10$CPySEc5iR6htOJoMQUCdL.MJ56OPXpWanH95AKjVuxk5DslH7aJi.', NULL, NULL, NULL),
(6, 20220104, 'Gatot Subroto', 'siswa', '20220104@stcamp404.ac.id', 'asset\\img\\profile\\default.jpg', '$2y$10$bVgjoiU5Jl3afVjEBtDWtuA7a01jVTZQ4qT2cGKsRhtyPeFt80XlG', NULL, NULL, NULL),
(7, 20220105, 'Jihan Minarti', 'siswa', '20220105@stcamp404.ac.id', 'asset\\img\\profile\\default.jpg', '$2y$10$Q2Twy2fd0gtl66MFg6icC.x1WPRnj5WwBXlIJCXRawxrZZ70hKOMO', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
