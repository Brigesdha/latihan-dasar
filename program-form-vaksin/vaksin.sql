-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 10:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `id` int(11) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(100) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(100) NOT NULL,
  `jenis_vaksin` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rt` int(10) NOT NULL,
  `rw` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vaksin`
--

INSERT INTO `data_vaksin` (`id`, `nik`, `nama`, `tgl_lahir`, `umur`, `jenis_kelamin`, `alamat`, `email`, `no_hp`, `jenis_vaksin`, `pekerjaan`, `kategori`, `kecamatan`, `kelurahan`, `rt`, `rw`) VALUES
(1, 19471409, 'Adi Nugraha', '2003-01-15', 18, 'Laki-laki', 'Tangerang', 'Adi@gmail.com', 913918411, 'Sinovac', 'BUMN', 'Pedagang', 'Cibodas', 'Cimone', 6, 5),
(2, 91731273, 'Farid Nugraha Wijaya', '2003-04-07', 18, 'Laki-laki', 'Tangerang', 'farid@gmail.com', 193818301, 'AstraZaneca', 'Wiraswasta', 'Masyarakat Umum', 'Benda', 'Cimone', 1, 1),
(4, 29791721, 'Rose Jasmine', '2003-08-30', 18, 'Perempuan', 'Tangerang', 'rose@gmail.com', 924719571, 'Moderna', 'Pelajar/Mahasiswa', 'Masyarakat Umum', 'Cibodas', 'Cimone', 3, 2),
(5, 2147483647, 'Jhon Doe', '2003-09-28', 18, 'Laki-laki', 'Tangerang', 'Jhon@gmail.com', 940194714, 'AstraZaneca', 'BUMN', 'Masyarakat Umum', 'Neglasari', 'Cimone', 6, 1),
(6, 2147483647, 'Jane Doe', '2003-05-05', 18, 'Perempuan', 'Tangerang', 'jane@gmail.com', 923141413, 'Pfizer', 'Pelajar/Mahasiswa', 'Masyarakat Umum', 'Benda', 'Jurumudi', 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
