-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2017 at 04:45 AM
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
(1, 39.4959, 'NOMOR 28 TAHUN 1999.pdf'),
(2, 45.2362, 'NOMOR 31 TAHUN 1999.pdf'),
(3, 4.01789, 'UU 19 Tahun 2016 - TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK.pdf'),
(4, 5.43496, 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf'),
(5, 4.42336, 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf'),
(6, 47.0344, 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf'),
(7, 2.46294, 'UU Nomor 20 Tahun 2013 - Pendidikan Kedokteran.pdf'),
(8, 8.20981, 'UU Nomor 20 Tahun 2016 - Merek dan Indikasi Geografis.pdf'),
(9, 4.40381, 'UU Nomor 21 Tahun 2013 - Keantariksaan.pdf'),
(10, 114.517, 'UU Nomor 24 Tahun 2011 - BPJS.pdf'),
(11, 0.733969, 'UU Nomor 25 Tahun 2014 - Hukum Disiplin Militer.pdf'),
(12, 320.496, 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf'),
(13, 40.2299, 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf'),
(14, 0.733969, 'UU Nomor 29 Tahun 2014 - Pencarian dan Pertolongan.pdf'),
(15, 65.9999, 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf'),
(16, 0.733969, 'UU Nomor 30 Tahun 2014 - Administrasi Pemerintah.pdf'),
(17, 0.733969, 'UU Nomor 31 Tahun 2014 - Perlindungan Saksi dan Korban.pdf'),
(18, 136.739, 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF'),
(19, 0.733969, 'UU Nomor 32 Tahun 2014 - Kelautan.pdf'),
(20, 0.733969, 'UU Nomor 33 Tahun 2014 - Jaminan Produk Halal.pdf'),
(21, 0.733969, 'UU Nomor 34 Tahun 2014 - Pengelolaan Keuangan Haji.pdf'),
(22, 51.4129, 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf'),
(23, 27.631, 'UU Nomor 40 Tahun 2004 - SJSN.pdf'),
(24, 119.95, 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf'),
(25, 164.794, 'UU Nomor 6 Tahun 2014 - Desa.PDF'),
(26, 68.4131, 'UU Nomor 6 Tahun 2017 - Arsitek.pdf'),
(27, 1.64196, 'UU Nomor 7 Tahun 2016 - Perlindungan dan Pemberdayaan Nelayan Pembudi Daya Ikan dan Petambak Garam.pdf'),
(28, 9.03079, 'UU Nomor 8 Tahun 2016 - Penyandang Disabilitas.pdf'),
(29, 4.40381, 'UU Nomor 9 Tahun 2013 - Pencegahan dan Pemberantasan Tindak Pidana Pendanaan Terorisme.pdf'),
(30, 28.4375, 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf'),
(31, 39.4728, 'UU_Nomor_10_Tahun_2016.pdf');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
