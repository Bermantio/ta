-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2022 pada 10.47
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

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
  `jumlah_donasi` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data untuk tabel `datausers`
--

INSERT INTO `datausers` (`id`, `image`, `kode_user`, `name_user`, `jenis_kelamin`, `alamat`, `status`, `email`, `created_at`, `updated_at`) VALUES
(1, 'vJmn9eP4rYFlbopapn4tFcyHp3tIqZibLT6augqz.jpg', '23211', 'Meilinia', 'perempuan', 'mijen', 'menunggu pembayaran', 'nikennn@gmail.com', '2022-07-20 19:09:10', '2022-07-20 19:09:10');

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
(6, '2021_11_13_063058_create_tb_kategori_table', 4),
(76, '2021_11_07_074710_create_tb_jenissewa_table', 5),
(77, '2021_11_12_032617_create_tb_karyawan_table', 5),
(88, '2014_10_12_000000_create_users_table', 6),
(89, '2014_10_12_100000_create_password_resets_table', 6),
(90, '2019_08_19_000000_create_failed_jobs_table', 6),
(91, '2022_07_04_063129_create_datamustahiks_table', 6),
(92, '2022_07_05_062123_create_datalazismus_table', 6),
(93, '2022_07_05_100114_create_datalaporans_table', 6),
(94, '2022_07_06_163442_create_datamuzakkis_table', 6),
(95, '2022_07_11_044740_create_datausers_table', 6),
(96, '2022_07_12_092422_create_datatunais_table', 6),
(97, '2022_07_12_214304_create_datanontunais_table', 6),
(98, '2022_07_16_053844_create_dataprograms_table', 6),
(99, '2022_07_16_071553_create_datapenyalurans_table', 6);

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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meilinianiken', 'meilinia@gmail.com', NULL, '$2y$10$165vSxOIEW3Max2lPnrxmOQo0mXIjbAhavAOONXOk7I7/qrWiGXb2', NULL, '2022-07-20 01:55:56', '2022-07-20 01:55:56');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
