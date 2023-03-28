-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 10:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_kelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `orangtua_siswa`
--

CREATE TABLE `orangtua_siswa` (
  `ID_OTSiswa` int(5) NOT NULL,
  `Nama_Ayah` varchar(255) NOT NULL,
  `Nama_Ibu` varchar(255) NOT NULL,
  `Ijazah_SD` varchar(255) NOT NULL,
  `Akte_Kelahiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil_admin`
--

CREATE TABLE `profil_admin` (
  `ID_Admin` int(5) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil_siswa`
--

CREATE TABLE `profil_siswa` (
  `ID_Profil` int(5) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tempat_Lahir` varchar(255) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Koordinat` varchar(255) NOT NULL,
  `Pass_Foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_siswa`
--

CREATE TABLE `status_siswa` (
  `ID_StatusSiswa` int(5) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `username_admin`
--

CREATE TABLE `username_admin` (
  `ID_Admin` int(5) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username_admin`
--

INSERT INTO `username_admin` (`ID_Admin`, `Username`, `Password`) VALUES
(1, 'admin', '$2y$10$xt00GDtNmqCJLNYC9NiltujKAF1yU5AAUSkSIKL46r3oiSSKp6qFS');

-- --------------------------------------------------------

--
-- Table structure for table `username_siswa`
--

CREATE TABLE `username_siswa` (
  `ID_Siswa` int(5) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL DEFAULT current_timestamp(),
  `alamat` varchar(100) NOT NULL,
  `jarak` float NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username_siswa`
--

INSERT INTO `username_siswa` (`ID_Siswa`, `Username`, `nama`, `Password`, `tempatLahir`, `tanggalLahir`, `alamat`, `jarak`, `foto`, `status`) VALUES
(1, 'siswa', 'siswa', '$2y$10$J/lTQJLhdwmmhHImmD38ceNIu/92tA4ZTCGNzYErl2c6z/zaTNaTm', 'Jambi', '2007-03-14', 'Jakarta', 1.68, 'test', 'Belum Terdaftar'),
(2, 'michael.harry@tadika.com', 'Michael Harry Setiawan', '$2y$10$/Qlw2/XqtOlUFsKLP2oN8.IVmgdRARyUkZbC28mi9bmc7IwUuRfMK', 'Jakarta', '2023-03-28', 'Tangerang', 1.89335, '309554641_838001837333181_4714657499967804429_n.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `username_siswa`
--
ALTER TABLE `username_siswa`
  ADD PRIMARY KEY (`ID_Siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `username_siswa`
--
ALTER TABLE `username_siswa`
  MODIFY `ID_Siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
