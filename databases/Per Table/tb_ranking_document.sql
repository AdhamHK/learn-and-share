-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2017 at 05:01 AM
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
(1, 0.0202027, 'NOMOR 1 TAHUN 2006.pdf'),
(2, 0.0202027, 'NOMOR 16 TAHUN 2004.pdf'),
(3, 5448.25, 'NOMOR 28 TAHUN 1999.pdf'),
(4, 8181.51, 'NOMOR 31 TAHUN 1999.pdf'),
(5, 0.0202027, 'NOMOR 7 TAHUN 2006.pdf'),
(6, 0.0202027, 'PERPU Nomor 50 Tahun 1960 (PERPU Nomor 50 Tahun 1960).pdf'),
(7, 166.401, 'UU 19 Tahun 2016.pdf'),
(8, 89.8044, 'UU Nomor 1 Tahun 2013 - Lembaga Keuangan Mikro.pdf'),
(9, 546.976, 'UU Nomor 12 Tahun 2012 - Pendidikan Tinggi.pdf'),
(10, 122.501, 'UU Nomor 16 Tahun 2012 - Industri Pertahanan.pdf'),
(11, 427.867, 'UU Nomor 17 Tahun 2012 - Perkoperasian.pdf'),
(12, 291.245, 'UU Nomor 17 Tahun 2013 - Organisasi Kemasyarakatan.pdf'),
(13, 502.461, 'UU Nomor 18 Tahun 2012  - Pangan.pdf'),
(14, 9513.22, 'UU Nomor 18 Tahun 2013 - Pencegahan dan Pemberantasan Perusakan Hutan.pdf'),
(15, 4170.02, 'UU Nomor 18 Tahun 2014 - Kesehatan Jiwa.pdf'),
(16, 6700.46, 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf'),
(17, 175.354, 'UU Nomor 2 Tahun 2012 - Pengadaan Tanah.pdf'),
(18, 9233.29, 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf'),
(19, 10447.9, 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf'),
(20, 6224.13, 'UU Nomor 20 Tahun 2013 - Pendidikan Kedokteran.pdf'),
(21, 4774.82, 'UU Nomor 20 Tahun 2014 - Standardisasi dan Penilaian Kesesuaian.pdf'),
(22, 4672.5, 'UU Nomor 20 Tahun 2016 - Merek dan Indikasi Geografis.pdf'),
(23, 6055.17, 'UU Nomor 21 Tahun 2013 - Keantariksaan.pdf'),
(24, 106.046, 'UU Nomor 22 Tahun 2014 - Pemilihan Gubernur Bupati dan Walikota dengan Rahmat Tuhan Yang Maha Esa.pdf'),
(25, 439.255, 'UU Nomor 23 Tahun 2014 - Pemerintah Daerah.pdf'),
(26, 16366.6, 'UU Nomor 24 Tahun 2011 - BPJS.pdf'),
(27, 11914.2, 'UU Nomor 25 Tahun 2014 - Hukum Disiplin Militer.pdf'),
(28, 12053.4, 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf'),
(29, 5405, 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf'),
(30, 16884.3, 'UU Nomor 29 Tahun 2014 - Pencarian dan Pertolongan.pdf'),
(31, 12490.8, 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf'),
(32, 24535.1, 'UU Nomor 30 Tahun 2014 - Administrasi Pemerintah.pdf'),
(33, 10434.4, 'UU Nomor 31 Tahun 2014 - Perlindungan Saksi dan Korban.pdf'),
(34, 25999.1, 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF'),
(35, 17068.7, 'UU Nomor 32 Tahun 2014 - Kelautan.pdf'),
(36, 9347.76, 'UU Nomor 33 Tahun 2014 - Jaminan Produk Halal.pdf'),
(37, 13348.8, 'UU Nomor 34 Tahun 2014 - Pengelolaan Keuangan Haji.pdf'),
(38, 5569.13, 'UU Nomor 37 Tahun 2014 - Konservasi Tanah dan Air.pdf'),
(39, 9350.49, 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf'),
(40, 5371.65, 'UU Nomor 40 Tahun 2004 - SJSN.pdf'),
(41, 41.6141, 'UU Nomor 40 Tahun 2014 - Perasuransian.pdf'),
(42, 12883.3, 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf'),
(43, 30634.7, 'UU Nomor 6 Tahun 2014 - Desa.PDF'),
(44, 8745.4, 'UU Nomor 6 Tahun 2017 - Arsitek.pdf'),
(45, 8527.75, 'UU Nomor 7 Tahun 2016 - Perlindungan dan Pemberdayaan Nelayan Pembudi Daya Ikan dan Petambak Garam.pdf'),
(46, 5954.08, 'UU Nomor 8 Tahun 2016 - Penyandang Disabilitas.pdf'),
(47, 5258.09, 'UU Nomor 9 Tahun 2013 - Pencegahan dan Pemberantasan Tindak Pidana Pendanaan Terorisme.pdf'),
(48, 3076.35, 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf'),
(49, 0.0202027, 'UU_13_2003 - Tentang Ketenagakerjaan.pdf');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
