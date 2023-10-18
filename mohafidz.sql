-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 02:11 AM
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

--
-- Dumping data for table `hafalan`
--

INSERT INTO `hafalan` (`id_santri`, `id_hafalan`, `jenis`, `tanggal`, `surat`, `ayat_awal`, `ayat_akhir`, `keterangan_s`, `murojaah`, `keterangan_m`) VALUES
(35, 17, '4 Surat', '2023-10-27', 'Ar-Rahman', 34, 78, 'sadas', 'asda', 'asdas'),
(35, 18, '4 Surat', '2023-10-11', 'Al-Waaqi\'ah', 11, 96, 'adas', 'asda', 'asda'),
(35, 19, '4 Surat', '2023-10-10', 'Al-Mulk', 27, 30, 'asdas', 'dasda', 'dasd'),
(35, 20, 'Juz 30', '2023-10-15', 'An-Naba', 11, 22, 'asda', 'asda', 'asdasd'),
(35, 21, 'Juz 30', '2023-10-24', 'An-Nazi\'at', 11, 22, 'asda', 'asda', 'sasdas');

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
('master', 'master', 'master');

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
(34, 'Makima', 'makima', '$2y$10$pvELB4tBSMSaOYq/cC1MDuKI4H6yiyAOCeciQuJ2FsydSvDO90DCC', 'Ustadzah', '1696058666_2a85b8906b5ab8e659dd.jpg');

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
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `nama`, `alamat`, `wali`, `tanggal_lahir`, `kelas`, `foto`, `input_oleh`, `tgl_input`) VALUES
(35, 'test', 'alamat=', 'wali=', '2023-10-27', 'saiki=', '1697365936_7309246d7bc6e459eb7d.jpg', 34, '2023-10-15');

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
  MODIFY `id_hafalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
