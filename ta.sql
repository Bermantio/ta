-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2022 pada 08.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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

--
-- Dumping data untuk tabel `datamustahiks`
--

INSERT INTO `datamustahiks` (`id`, `kode`, `name`, `jenis_kelamin`, `alamat`, `profesi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'HIK02', 'Yani', 'perempuan', 'Ngaliyan', 'staff', '-', '2022-07-31 02:27:06', '2022-07-31 02:27:06'),
(2, 'HIK001', 'Putri', 'Perempuan', 'Cileungsi', 'staff', '-', '2022-08-17 08:01:35', '2022-08-17 08:01:35'),
(3, 'HIK003', 'Diahayu', 'Perempuan', 'Pekalongan', 'staff', '-', '2022-08-17 10:25:08', '2022-08-17 10:25:08'),
(4, 'HIK004', 'Aldo Sir', 'Laki-Laki', 'Semarang', 'staff', '-', '2022-08-21 22:51:48', '2022-08-21 22:52:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datamuzakkis`
--

CREATE TABLE `datamuzakkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_muzakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datamuzakkis`
--

INSERT INTO `datamuzakkis` (`id`, `kode_muzakki`, `name_muzakki`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'MUZ001', 'Mahliyasmita', 'Bubakan', '2022-07-31 01:44:21', '2022-07-31 01:44:21'),
(2, 'MUZ002', 'Husein', 'Semarang', '2022-08-01 00:00:30', '2022-08-01 00:00:30'),
(17, 'MUZ005', 'Ayu', 'Semarang', '2022-08-21 22:21:36', '2022-08-21 22:21:36'),
(18, 'MUZ003', 'Ayu Saras', 'Semarang', '2022-08-21 22:53:45', '2022-08-21 22:57:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datanontunais`
--

CREATE TABLE `datanontunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_zakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berupa` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datanontunais`
--

INSERT INTO `datanontunais` (`id`, `tanggal_transaksi`, `name_zakki`, `alamat`, `notelepon`, `profesi`, `name_program`, `keterangan`, `berupa`, `jumlah_transaksi`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, '02/08/2022', 'nunik', 'semarang', '087633899132', 'staff', 'infaq', 'nama asli', 'uang', '30000', 'UyvyUYhhfiszOF7YoCDYjUVgsOfoKEPXGSTjnrsD.jpg', 'Menunggu Konfirmasi', '2022-08-21 17:25:10', '2022-08-21 20:18:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenyalurans`
--

CREATE TABLE `datapenyalurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penyaluran` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_donasi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapenyalurans`
--

INSERT INTO `datapenyalurans` (`id`, `kode_transaksi`, `tanggal_penyaluran`, `name_program`, `name`, `jumlah_donasi`, `created_at`, `updated_at`) VALUES
(9, 'PENY001', '2022-08-11', 'Infaq Masjid Darul Hikmah', 'Putri', '200000', '2022-08-21 00:05:38', '2022-08-21 00:05:38'),
(10, 'PENY002', '2022-08-12', 'Shadaqah Muharram', 'Diahayu', '250000', '2022-08-21 00:06:34', '2022-08-21 00:11:52'),
(11, '003', '19/08/2022', 'zakat fitrah', 'wulan', '30000', '2022-08-21 00:50:21', '2022-08-21 00:50:21'),
(12, 'PENY004', '25/05/2022', 'infaq masjid darul hikmah', 'pujarahayu', '100000', '2022-08-21 06:21:39', '2022-08-21 06:21:39'),
(17, 'PENY008', '2022-08-11', 'Infaq Masjid Al-Ikhlas', 'Diahayu', '250000', '2022-08-21 22:50:59', '2022-08-21 22:50:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataprograms`
--

CREATE TABLE `dataprograms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dataprograms`
--

INSERT INTO `dataprograms` (`id`, `kode_program`, `name_program`, `jenis_program`, `tanggal_program`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'PRO001', 'Zakat Fitrah', 'Zakat', '2022-06-29', '-', '2022-07-31 01:29:29', '2022-08-01 04:10:32'),
(2, 'PRO002', 'Infaq Masjid Darul Hikmah', 'Infaq', '2022-06-30', '-', '2022-07-31 01:29:48', '2022-08-01 04:11:45'),
(8, 'PRO004', 'Infaq Masjid Al-Ikhlas', 'Infaq', '2022-08-03', 'Pembangunan Masjid', '2022-08-21 22:49:34', '2022-08-21 22:50:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatunais`
--

CREATE TABLE `datatunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_muz` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_muz` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datatunais`
--

INSERT INTO `datatunais` (`id`, `kode_muz`, `name_muz`, `name_program`, `tanggal_transaksi`, `jumlah_transaksi`, `status`, `created_at`, `updated_at`) VALUES
(5, 'MUZ001_Mahliyasmita', 'Mahliyasmita', 'Infaq Masjid Darul Hikmah', '2022-07-25', '250000', '-', '2022-08-03 12:48:56', '2022-08-03 12:48:56'),
(6, 'MUZ002_Husein', 'Husein', 'Shadaqah Muharram', '2022-08-09', '250000', '-', '2022-08-21 02:30:37', '2022-08-21 02:30:37'),
(13, 'MUZ005_Ayu', 'Ayu', 'Infaq Masjid Darul Hikmah', '2022-08-11', '250000', 'LUNAS', '2022-08-21 22:24:36', '2022-08-21 22:43:17'),
(14, 'MUZ003_Ayu Saras', 'Ayu Saras', 'Infaq Masjid Al-Ikhlas', '2022-08-11', '50000', 'LUNAS', '2022-08-21 22:58:34', '2022-08-21 22:58:56');

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
(14, '2022_07_16_071553_create_datapenyalurans_table', 2),
(15, '2022_08_20_024705_create_nontunais_table', 3),
(16, '2022_08_20_095745_create_personal_access_tokens_table', 4),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nontunais`
--

CREATE TABLE `nontunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggaltransaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_zakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berupa` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nontunais`
--

INSERT INTO `nontunais` (`id`, `tanggaltransaksi`, `name_zakki`, `alamat`, `profesi`, `name_program`, `keterangan`, `berupa`, `jumlah_transaksi`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '20/08/2022', 'niken', 'semarang', 'staff', 'sedekah', 'nama asli', 'uang', '25000', '', 'lunas', NULL, NULL),
(2, '21/08/2022', 'wulan', 'kuncen', 'staff', 'infaq', 'nama asli', 'uang', '30000', 'fewbTpIB9iI2z3omYTfl04BkPS02uuhpbOb2mGmX.jpg', 'menunggu konfirmasi', '2022-08-19 22:51:12', '2022-08-19 22:51:12'),
(4, '19/08/2022', 'affan', 'mijen', 'staff', 'zakat', 'nama asli', 'uang', '50000', 'aqXxP9N0aVf1DWcRbyWdkahV0fFBR0czNc2SCDo3.jpg', 'Menunggu konfirmasi', '2022-08-19 23:16:25', '2022-08-20 01:08:52');

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(4, 'App\\Models\\User', 1, 'Bermantio', '8aca78e5cb7782dfce64a693a28245187cc288109e103d7112c459bde5ef03c7', '[\"*\"]', '2022-08-21 23:05:18', '2022-08-21 15:42:47', '2022-08-21 23:05:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Penghimpun',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `alamat` char(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `notelepon` char(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `profesi` char(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
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

INSERT INTO `users` (`id`, `image`, `role`, `name`, `jenis_kelamin`, `alamat`, `notelepon`, `profesi`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'EI9S1CiqT12gMSSO9MIf22cpKaMNfNKcJEMNXGZ9.jpg', 'Admin', 'Bermantio', 'Laki-Laki', 'pek', '085877274284', 'staff', 'bermantio@yahoo.com', NULL, '$2y$10$bqIVwiJ6zGDxNKOR4C1EH.cjsKadeRe/WsslM85rcVlLA7jJUQiOi', NULL, '2022-07-29 15:31:54', '2022-08-21 21:27:49'),
(20, 'B4Ys181auORFg5L23upCDrLj7PYxgcdBgvrNLluk.jpg', 'Penghimpun', 'meilinianiken', 'Perempuan', 'Semarang', '085467883325', 'staff', 'meilinianikenpuspa@gmail.com', NULL, '$2y$10$r5/3epvte4x0ja1NMXp5POdVMtQFD69RNTMZQ8tXzfFKv5l4hAH1C', NULL, '2022-08-15 00:46:28', '2022-08-15 10:35:03'),
(21, 'iegoC2y58DplZr1kEZc7TMIRkphpYduEcfTgUzXv.jpg', 'Pendayagunaan', 'Wulandari', 'Perempuan', 'Semarang', '087353338362', 'staff', 'wulandarip@gmail.com', NULL, '$2y$10$y4Bf3MuP6iJDmQ.g/f688.bckxrrf7E6MNStWYyJ6OtJO2ewvPd.6', NULL, '2022-08-15 11:09:30', '2022-08-15 11:13:15'),
(25, '8g4JWpXDJ8kf10UVSXVviGyfR9SgeAni8wKVbCAu.jpg', 'Supervisor', 'Adelina', 'Perempuan', 'Semarang', '085467883243', 'staff', 'adelinaas@gmail.com', NULL, '$2y$10$.n2vAkJ2ncFpe.fTrxTnVOymxAM6jbOk2yNldRH33M0HJ/4JfiPX6', NULL, '2022-08-17 19:03:48', '2022-08-21 00:19:46'),
(27, 'ogqkY3X8fGT8LgmmLZvjr4i6lYWMpkbdLObHMO2u.jpg', 'Muzakki', 'Ayu Saras', 'Perempuan', 'Semarang', '087834729284', 'staff', 'ayusaraswati@gmail.com', NULL, '$2y$10$zK5JOZ8AnLvIYKuo2MrGfuLJt6IQDaMqfsw5Ee5ZCsv.ElT6r0tSm', NULL, '2022-08-21 22:44:19', '2022-08-21 22:45:07');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `nontunais`
--
ALTER TABLE `nontunais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `datalazismus`
--
ALTER TABLE `datalazismus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datamustahiks`
--
ALTER TABLE `datamustahiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `datamuzakkis`
--
ALTER TABLE `datamuzakkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `datanontunais`
--
ALTER TABLE `datanontunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `datapenyalurans`
--
ALTER TABLE `datapenyalurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `dataprograms`
--
ALTER TABLE `dataprograms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `datatunais`
--
ALTER TABLE `datatunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `nontunais`
--
ALTER TABLE `nontunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
