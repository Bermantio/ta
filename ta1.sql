-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2022 pada 21.15
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
-- Database: `ta1`
--

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

--
-- Dumping data untuk tabel `datamustahiks`
--

INSERT INTO `datamustahiks` (`id`, `kode`, `name`, `jenis_kelamin`, `alamat`, `profesi`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'HIK02', 'Yani', 'perempuan', 'Ngaliyan', 'staff', '-', '2022-07-31 02:27:06', '2022-07-31 02:27:06');

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

--
-- Dumping data untuk tabel `datamuzakkis`
--

INSERT INTO `datamuzakkis` (`id`, `image`, `kode_muzakki`, `name_user`, `name_muzakki`, `jenis_kelamin`, `alamat`, `profesi`, `tanggal_dibuat`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'QvrB9ATUCzBfasv5Jl7fjPjpUBIKp8RMqhLQNxs6.jpg', 'MUZ001', 'Reta', 'Mahliyasmita', 'perempuan', 'Bubakan', 'staff', '2022-07-14', '-', '2022-07-31 01:44:21', '2022-07-31 01:44:21'),
(2, 'EG1I1vx31A3UwgEfcIdZIuuJvzVWV3h0AHKkw94k.jpg', 'MUZ002', 'Reta', 'Husein', 'laki-laki', 'Semarang', 'staff', '2022-07-11', '-', '2022-08-01 00:00:30', '2022-08-01 00:00:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datanontunais`
--

CREATE TABLE `datanontunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_zakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_zakki` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berupa` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_program` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datanontunais`
--

INSERT INTO `datanontunais` (`id`, `kode_transaksi`, `kode_zakki`, `name_zakki`, `jenis_kelamin`, `alamat`, `notelepon`, `profesi`, `keterangan`, `berupa`, `image`, `tanggal_transaksi`, `jumlah_transaksi`, `name_program`, `status`, `created_at`, `updated_at`) VALUES
(2, '395', 'MUZ001_Mahliyasmita', 'Mahliyasmit', '', '', '', '', '', '', '', '2022-08-19', '250000', 'Infaq', '-', '2022-07-31 11:51:36', '2022-08-01 00:58:34');

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

INSERT INTO `datapenyalurans` (`id`, `kode_transaksi`, `tanggal_penyaluran`, `name_program`, `name`, `jenis_kelamin`, `alamat`, `profesi`, `jumlah_donasi`, `created_at`, `updated_at`) VALUES
(2, 'PENY001', '2022-08-10', 'Zakat', 'Yani', 'perempuan', 'Bubakan', 'staff', '250000', '2022-07-31 23:56:59', '2022-07-31 23:56:59'),
(3, 'PENY001', '2022-08-10', 'Infaq', 'Yani', 'laki-laki', 'Bubakan', 'staff', '250000', '2022-08-01 02:14:52', '2022-08-01 02:14:52'),
(4, 'PENY002', '2022-08-10', 'Infaq', 'Yani', 'perempuan', 'Bubakan', 'staff', '250000', '2022-08-01 02:15:14', '2022-08-01 02:15:14');

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
(3, 'PRO003', 'Shadaqah Muharram', 'Shadaqah', '2022-07-12', '-', '2022-07-31 01:30:07', '2022-08-01 04:11:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatunais`
--

CREATE TABLE `datatunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `datatunais` (`id`, `kode_transaksi`, `kode_muz`, `name_muz`, `name_program`, `tanggal_transaksi`, `jumlah_transaksi`, `status`, `created_at`, `updated_at`) VALUES
(5, '214', 'MUZ001_Mahliyasmita', 'Mahliyasmita', 'Infaq Masjid Darul Hikmah', '2022-07-25', '250000', '-', '2022-08-03 12:48:56', '2022-08-03 12:48:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datausers`
--

CREATE TABLE `datausers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datausers`
--

INSERT INTO `datausers` (`id`, `image`, `kode_user`, `name_user`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `notelp`, `profesi`, `status`, `created_at`, `updated_at`) VALUES
(6, 'anNe9c06cbx1yrRIKXutydHyC5XlROzRrecfu2Ea.jpg', 'SER001', 'Reta', 'Mareta', 'laki-laki', 'Mijen, SMG', 'reta@gmail.com', '087830238482', 'staff', 'Penghimpun', '2022-07-31 01:23:56', '2022-08-01 01:57:20');

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
(14, '2022_07_16_071553_create_datapenyalurans_table', 2);

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
  `kode_user` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `kode_user`, `image`, `role`, `name`, `jenis_kelamin`, `alamat`, `notelepon`, `profesi`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', 'Admin', 'Ber', '', '', '', '', 'bermantio@yahoo.com', NULL, '$2y$10$S5iuOtELWKYLSu2.2S0Wgu7swUAXCcQ6iygxvW/pEpGvsh2Cdq1mO', NULL, '2022-07-29 15:31:54', '2022-07-29 15:31:54');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datamuzakkis`
--
ALTER TABLE `datamuzakkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datanontunais`
--
ALTER TABLE `datanontunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `datapenyalurans`
--
ALTER TABLE `datapenyalurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dataprograms`
--
ALTER TABLE `dataprograms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `datatunais`
--
ALTER TABLE `datatunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `datausers`
--
ALTER TABLE `datausers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
