-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2024 at 08:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_karyawan_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `absen_id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sd` decimal(3,1) DEFAULT NULL,
  `pc` decimal(3,1) DEFAULT NULL,
  `dt` decimal(3,1) DEFAULT NULL,
  `i` decimal(3,1) DEFAULT NULL,
  `s` decimal(3,1) DEFAULT NULL,
  `a` decimal(4,1) DEFAULT NULL,
  `total_bobot` decimal(6,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`absen_id`, `sd`, `pc`, `dt`, `i`, `s`, `a`, `total_bobot`) VALUES
('ABS01', 0.5, 0.5, 1.5, 1.0, 1.5, 25.0, 30.0);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `karyawan_id` varchar(100) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `jabatan_karyawan` varchar(255) NOT NULL,
  `jk_karyawan` varchar(10) NOT NULL,
  `tlp_karyawan` varchar(30) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `profile` varchar(100) NOT NULL,
  `sd` int NOT NULL DEFAULT '0',
  `pc` int NOT NULL DEFAULT '0',
  `dt` int NOT NULL DEFAULT '0',
  `i` int NOT NULL DEFAULT '0',
  `s` int NOT NULL DEFAULT '0',
  `a` int NOT NULL DEFAULT '0',
  `point_absen` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `kj` int NOT NULL DEFAULT '0',
  `ks` int NOT NULL DEFAULT '0',
  `tj` int NOT NULL DEFAULT '0',
  `siplin` int NOT NULL DEFAULT '0',
  `ktlt` int NOT NULL DEFAULT '0',
  `vector_s` decimal(8,2) NOT NULL,
  `vector_v` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `nama_karyawan`, `jabatan_karyawan`, `jk_karyawan`, `tlp_karyawan`, `alamat_karyawan`, `profile`, `sd`, `pc`, `dt`, `i`, `s`, `a`, `point_absen`, `kj`, `ks`, `tj`, `siplin`, `ktlt`, `vector_s`, `vector_v`) VALUES
('KAR50', 'Test Add', 'Naek Haji', 'Laki-Laki', '0812812328312', 'Jl. Raya Condet Jakarta Timur', 'c7.PNG', 0, 1, 2, 0, 0, 0, '80', 80, 12, 12, 12, 12, 14.42, 0.19),
('KAR94', 'Test Add Satu', 'Naek Haji', 'Perempuan', '0812818818181', 'Jalan RAya condeasdad sad aw dasd asd', '904962182_IMG_image_save.png', 1, 1, 2, 0, 1, 0, '70', 70, 62, 60, 60, 60, 61.16, 0.81);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `kriteria_id` varchar(100) NOT NULL,
  `kj` int NOT NULL,
  `ks` int NOT NULL,
  `tj` int NOT NULL,
  `siplin` int NOT NULL,
  `ktlt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kriteria_id`, `kj`, `ks`, `tj`, `siplin`, `ktlt`) VALUES
('KRI01', 15, 20, 30, 40, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` varchar(50) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama_pengguna`, `username`, `password`, `profile`) VALUES
('PE01', 'Nama Satu', 'admin', '123456', 'c9.PNG'),
('PENG68', 'Test User Edit', 'Mekaniktest', '123123123', 'business-trip_5218982.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
