-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 02:15 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_pengunjung`
--

CREATE TABLE `absen_pengunjung` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `tanggal` date NOT NULL,
  `jam_datang` varchar(30) NOT NULL,
  `jam_keluar` varchar(30) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_pengunjung`
--

INSERT INTO `absen_pengunjung` (`id`, `nama`, `jenis_kelamin`, `tanggal`, `jam_datang`, `jam_keluar`, `catatan`) VALUES
(1, 'Mukhammad Badrut Tamam', 'L', '2021-02-08', '09:00', '11:45', 'HMMM'),
(2, 'Jihadt Akbar', 'L', '2021-02-08', '09:00', '11:45', 'OKE'),
(3, 'M Bermantio S', 'L', '2021-02-08', '09:00', '11:45', 'Mantab'),
(4, 'Annisa R', 'P', '2021-02-08', '09:00', '11:45', 'Ruangannya Nyaman, AC nya Sejuk'),
(5, 'M Bermantio S', 'L', '2021-02-09', '08:45', '11:00', 'Saya ke perpustakaan untuk meminjam buku');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `kode_jk` varchar(5) NOT NULL,
  `keterangan_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `kode_jk`, `keterangan_jk`) VALUES
(1, 'P', 'Perempuan'),
(2, 'L', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `akses_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses_id`) VALUES
(1, 'admin', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_pengunjung`
--
ALTER TABLE `absen_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_pengunjung`
--
ALTER TABLE `absen_pengunjung`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
