-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2022 pada 06.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalaporans`
--

CREATE TABLE `datalaporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_kantor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalazismus`
--

CREATE TABLE `datalazismus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kantor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kantor` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pimpinan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamustahiks`
--

CREATE TABLE `datamustahiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamuzakkis`
--

CREATE TABLE `datamuzakkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_dibuat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datanontunais`
--

CREATE TABLE `datanontunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenyalurans`
--

CREATE TABLE `datapenyalurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penyaluran` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mustahik` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_donasi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapenyalurans`
--

INSERT INTO `datapenyalurans` (`id`, `kode_transaksi`, `tanggal_penyaluran`, `name_program`, `nama_mustahik`, `jenis_kelamin`, `alamat`, `profesi`, `jumlah_donasi`, `created_at`, `updated_at`) VALUES
(5, '123', '2022-07-10', 'a', 'a', 'perempuan', 'a', 'b', '123', '2022-07-29 22:13:16', '2022-07-29 22:13:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataprograms`
--

CREATE TABLE `dataprograms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatunais`
--

CREATE TABLE `datatunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datausers`
--

CREATE TABLE `datausers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(4, '2022_07_04_063129_create_datamustahiks_table', 1),
(5, '2022_07_05_062123_create_datalazismus_table', 1),
(6, '2022_07_05_100114_create_datalaporans_table', 1),
(7, '2022_07_06_163442_create_datamuzakkis_table', 1),
(8, '2022_07_11_044740_create_datausers_table', 1),
(9, '2022_07_12_092422_create_datatunais_table', 1),
(10, '2022_07_12_214304_create_datanontunais_table', 1),
(11, '2022_07_16_053844_create_dataprograms_table', 1),
(12, '2022_07_16_071553_create_datapenyalurans_table', 1),
(13, '2022_07_20_084625_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Ber', 'bermantio@yahoo.com', NULL, '$2y$10$S5iuOtELWKYLSu2.2S0Wgu7swUAXCcQ6iygxvW/pEpGvsh2Cdq1mO', NULL, '2022-07-29 15:31:54', '2022-07-29 15:31:54'),
(10, 'Pendayagunaan', 'Ber', 'bermantio@gmail.com', NULL, '$2y$10$hsqPGkm.6GJ0Ong59zjRGewWodiyFkobpwYQumPezuvkad8hW4Pte', NULL, '2022-07-29 23:02:43', '2022-07-29 23:02:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datalaporans`
--
ALTER TABLE `datalaporans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datalazismus`
--
ALTER TABLE `datalazismus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datamustahiks`
--
ALTER TABLE `datamustahiks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datamuzakkis`
--
ALTER TABLE `datamuzakkis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datanontunais`
--
ALTER TABLE `datanontunais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapenyalurans`
--
ALTER TABLE `datapenyalurans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataprograms`
--
ALTER TABLE `dataprograms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datatunais`
--
ALTER TABLE `datatunais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datausers`
--
ALTER TABLE `datausers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datalaporans`
--
ALTER TABLE `datalaporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datalazismus`
--
ALTER TABLE `datalazismus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datamustahiks`
--
ALTER TABLE `datamustahiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datamuzakkis`
--
ALTER TABLE `datamuzakkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datanontunais`
--
ALTER TABLE `datanontunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datapenyalurans`
--
ALTER TABLE `datapenyalurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dataprograms`
--
ALTER TABLE `dataprograms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datatunais`
--
ALTER TABLE `datatunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datausers`
--
ALTER TABLE `datausers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
