-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 05:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohafidz`
--

-- --------------------------------------------------------

--
-- Table structure for table `hafalan`
--

CREATE TABLE `hafalan` (
  `id_santri` int(11) NOT NULL,
  `id_hafalan` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `surat` varchar(255) NOT NULL,
  `ayat_awal` int(11) NOT NULL,
  `ayat_akhir` int(11) NOT NULL,
  `keterangan_s` varchar(255) NOT NULL,
  `murojaah` varchar(255) NOT NULL,
  `keterangan_m` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`username`, `password`, `pertanyaan`) VALUES
('master', 'MASTERKU!', 'master');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gelar` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama`, `username`, `password`, `gelar`, `foto`) VALUES
(34, 'admin', 'admin', '$2y$10$MAmpbvVoWCJGKFaYuauN0ujRjRumWfWkc1orCddIADD1lWhc7sRqe', 'Ustadz', '');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wali` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `input_oleh` int(11) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hafalan`
--
ALTER TABLE `hafalan`
  ADD PRIMARY KEY (`id_hafalan`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hafalan`
--
ALTER TABLE `hafalan`
  MODIFY `id_hafalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
