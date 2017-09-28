-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 07:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ranking_document`
--

CREATE TABLE `tb_ranking_document` (
  `Id` int(11) NOT NULL,
  `Ranking` float NOT NULL,
  `Document_Id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ranking_document`
--

INSERT INTO `tb_ranking_document` (`Id`, `Ranking`, `Document_Id`) VALUES
(1, 121.11, 'UU 19 Tahun 2016.pdf'),
(2, 12384.4, 'UU Nomor 24 Tahun 2011 - BPJS.pdf'),
(3, 10625.6, 'UU Nomor 32 Tahun 2014 - Kelautan.pdf'),
(4, 5714.04, 'UU Nomor 33 Tahun 2014 - Jaminan Produk Halal.pdf'),
(5, 8342.18, 'UU Nomor 34 Tahun 2014 - Pengelolaan Keuangan Haji.pdf'),
(6, 3800.54, 'UU Nomor 37 Tahun 2014 - Konservasi Tanah dan Air.pdf'),
(7, 3780.73, 'UU Nomor 40 Tahun 2004 - SJSN.pdf'),
(8, 48.4993, 'UU Nomor 40 Tahun 2014 - Perasuransian.pdf'),
(9, 22962.4, 'UU Nomor 6 Tahun 2014 - Desa.PDF'),
(10, 6764.19, 'UU Nomor 6 Tahun 2017 - Arsitek.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ranking_document`
--
ALTER TABLE `tb_ranking_document`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ranking_document`
--
ALTER TABLE `tb_ranking_document`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
