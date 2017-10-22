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
-- Table structure for table `tb_term_frequency`
--

CREATE TABLE `tb_term_frequency` (
  `Id` int(11) NOT NULL,
  `Term` varchar(150) NOT NULL,
  `Korpus_id` varchar(150) NOT NULL,
  `Frekuensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_term_frequency`
--

INSERT INTO `tb_term_frequency` (`Id`, `Term`, `Korpus_id`, `Frekuensi`) VALUES
(1, 'di', 'NOMOR 28 TAHUN 1999.pdf', 22),
(2, 'di', 'NOMOR 31 TAHUN 1999.pdf', 34),
(3, 'di', 'UU 19 Tahun 2016 - TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK.pdf', 4),
(4, 'di', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 3),
(5, 'di', 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf', 4),
(6, 'di', 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf', 26),
(7, 'di', 'UU Nomor 20 Tahun 2013 - Pendidikan Kedokteran.pdf', 3),
(8, 'di', 'UU Nomor 20 Tahun 2016 - Merek dan Indikasi Geografis.pdf', 10),
(9, 'di', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 32),
(10, 'di', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 24),
(11, 'di', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 22),
(12, 'di', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 24),
(13, 'di', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 105),
(14, 'di', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 26),
(15, 'di', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 13),
(16, 'di', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 64),
(17, 'di', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 88),
(18, 'di', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 20),
(19, 'di', 'UU Nomor 7 Tahun 2016 - Perlindungan dan Pemberdayaan Nelayan Pembudi Daya Ikan dan Petambak Garam.pdf', 2),
(20, 'di', 'UU Nomor 8 Tahun 2016 - Penyandang Disabilitas.pdf', 11),
(21, 'di', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 2),
(22, 'di', 'UU_Nomor_10_Tahun_2016.pdf', 31),
(23, 'indonesia', 'NOMOR 28 TAHUN 1999.pdf', 18),
(24, 'indonesia', 'NOMOR 31 TAHUN 1999.pdf', 18),
(25, 'indonesia', 'UU 19 Tahun 2016 - TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK.pdf', 1),
(26, 'indonesia', 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf', 35),
(27, 'indonesia', 'UU Nomor 21 Tahun 2013 - Keantariksaan.pdf', 6),
(28, 'indonesia', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 96),
(29, 'indonesia', 'UU Nomor 25 Tahun 2014 - Hukum Disiplin Militer.pdf', 1),
(30, 'indonesia', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 7),
(31, 'indonesia', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 19),
(32, 'indonesia', 'UU Nomor 29 Tahun 2014 - Pencarian dan Pertolongan.pdf', 1),
(33, 'indonesia', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 46),
(34, 'indonesia', 'UU Nomor 30 Tahun 2014 - Administrasi Pemerintah.pdf', 1),
(35, 'indonesia', 'UU Nomor 31 Tahun 2014 - Perlindungan Saksi dan Korban.pdf', 1),
(36, 'indonesia', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 21),
(37, 'indonesia', 'UU Nomor 32 Tahun 2014 - Kelautan.pdf', 1),
(38, 'indonesia', 'UU Nomor 33 Tahun 2014 - Jaminan Produk Halal.pdf', 1),
(39, 'indonesia', 'UU Nomor 34 Tahun 2014 - Pengelolaan Keuangan Haji.pdf', 1),
(40, 'indonesia', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 22),
(41, 'indonesia', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 20),
(42, 'indonesia', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 67),
(43, 'indonesia', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 86),
(44, 'indonesia', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 46),
(45, 'indonesia', 'UU Nomor 9 Tahun 2013 - Pencegahan dan Pemberantasan Tindak Pidana Pendanaan Terorisme.pdf', 6),
(46, 'indonesia', 'UU_Nomor_10_Tahun_2016.pdf', 16),
(47, 'pangan', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 3),
(48, 'pangan', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 1),
(49, 'perban', 'NOMOR 28 TAHUN 1999.pdf', 2),
(50, 'perban', 'NOMOR 31 TAHUN 1999.pdf', 1),
(51, 'perban', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 1),
(52, 'perban', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 1),
(53, 'perban', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 2),
(54, 'perban', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 3),
(55, 'perban', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 2),
(56, 'perban', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 14),
(57, 'tata', 'NOMOR 28 TAHUN 1999.pdf', 4),
(58, 'tata', 'NOMOR 31 TAHUN 1999.pdf', 2),
(59, 'tata', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 1),
(60, 'tata', 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf', 1),
(61, 'tata', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 14),
(62, 'tata', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 251),
(63, 'tata', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 4),
(64, 'tata', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 11),
(65, 'tata', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 26),
(66, 'tata', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 9),
(67, 'tata', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 2),
(68, 'tata', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 16),
(69, 'tata', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 23),
(70, 'tata', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 16),
(71, 'tata', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 1),
(72, 'tata', 'UU_Nomor_10_Tahun_2016.pdf', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_term_frequency`
--
ALTER TABLE `tb_term_frequency`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_term_frequency`
--
ALTER TABLE `tb_term_frequency`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
