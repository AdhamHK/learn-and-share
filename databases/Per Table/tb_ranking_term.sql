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
-- Table structure for table `tb_ranking_term`
--

CREATE TABLE `tb_ranking_term` (
  `Id` int(11) NOT NULL,
  `Term` varchar(150) NOT NULL,
  `Korpus_id` varchar(150) NOT NULL,
  `Ranking` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ranking_term`
--

INSERT INTO `tb_ranking_term` (`Id`, `Term`, `Korpus_id`, `Ranking`) VALUES
(1, 'di', 'NOMOR 28 TAHUN 1999.pdf', 18.0616),
(2, 'di', 'NOMOR 31 TAHUN 1999.pdf', 27.9133),
(3, 'di', 'UU 19 Tahun 2016 - TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK.pdf', 3.28392),
(4, 'di', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 2.46294),
(5, 'di', 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf', 3.28392),
(6, 'di', 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf', 21.3455),
(7, 'di', 'UU Nomor 20 Tahun 2013 - Pendidikan Kedokteran.pdf', 2.46294),
(8, 'di', 'UU Nomor 20 Tahun 2016 - Merek dan Indikasi Geografis.pdf', 8.20981),
(9, 'di', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 26.2714),
(10, 'di', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 19.7035),
(11, 'di', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 18.0616),
(12, 'di', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 19.7035),
(13, 'di', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 86.203),
(14, 'di', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 21.3455),
(15, 'di', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 10.6727),
(16, 'di', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 52.5428),
(17, 'di', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 72.2463),
(18, 'di', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 16.4196),
(19, 'di', 'UU Nomor 7 Tahun 2016 - Perlindungan dan Pemberdayaan Nelayan Pembudi Daya Ikan dan Petambak Garam.pdf', 1.64196),
(20, 'di', 'UU Nomor 8 Tahun 2016 - Penyandang Disabilitas.pdf', 9.03079),
(21, 'di', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 1.64196),
(22, 'di', 'UU_Nomor_10_Tahun_2016.pdf', 25.4504),
(23, 'indonesia', 'NOMOR 28 TAHUN 1999.pdf', 13.2114),
(24, 'indonesia', 'NOMOR 31 TAHUN 1999.pdf', 13.2114),
(25, 'indonesia', 'UU 19 Tahun 2016 - TENTANG INFORMASI DAN TRANSAKSI ELEKTRONIK.pdf', 0.733969),
(26, 'indonesia', 'UU Nomor 20 Tahun 2003 - Sistem Pendidikan Nasional.pdf', 25.6889),
(27, 'indonesia', 'UU Nomor 21 Tahun 2013 - Keantariksaan.pdf', 4.40381),
(28, 'indonesia', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 70.461),
(29, 'indonesia', 'UU Nomor 25 Tahun 2014 - Hukum Disiplin Militer.pdf', 0.733969),
(30, 'indonesia', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 5.13778),
(31, 'indonesia', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 13.9454),
(32, 'indonesia', 'UU Nomor 29 Tahun 2014 - Pencarian dan Pertolongan.pdf', 0.733969),
(33, 'indonesia', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 33.7626),
(34, 'indonesia', 'UU Nomor 30 Tahun 2014 - Administrasi Pemerintah.pdf', 0.733969),
(35, 'indonesia', 'UU Nomor 31 Tahun 2014 - Perlindungan Saksi dan Korban.pdf', 0.733969),
(36, 'indonesia', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 15.4134),
(37, 'indonesia', 'UU Nomor 32 Tahun 2014 - Kelautan.pdf', 0.733969),
(38, 'indonesia', 'UU Nomor 33 Tahun 2014 - Jaminan Produk Halal.pdf', 0.733969),
(39, 'indonesia', 'UU Nomor 34 Tahun 2014 - Pengelolaan Keuangan Haji.pdf', 0.733969),
(40, 'indonesia', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 16.1473),
(41, 'indonesia', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 14.6794),
(42, 'indonesia', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 49.1759),
(43, 'indonesia', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 63.1213),
(44, 'indonesia', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 33.7626),
(45, 'indonesia', 'UU Nomor 9 Tahun 2013 - Pencegahan dan Pemberantasan Tindak Pidana Pendanaan Terorisme.pdf', 4.40381),
(46, 'indonesia', 'UU_Nomor_10_Tahun_2016.pdf', 11.7435),
(47, 'pangan', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 9.65663),
(48, 'pangan', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 3.21888),
(49, 'perban', 'NOMOR 28 TAHUN 1999.pdf', 3.66516),
(50, 'perban', 'NOMOR 31 TAHUN 1999.pdf', 1.83258),
(51, 'perban', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 1.83258),
(52, 'perban', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 1.83258),
(53, 'perban', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 3.66516),
(54, 'perban', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 5.49774),
(55, 'perban', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 3.66516),
(56, 'perban', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 25.6561),
(57, 'tata', 'NOMOR 28 TAHUN 1999.pdf', 4.55774),
(58, 'tata', 'NOMOR 31 TAHUN 1999.pdf', 2.27887),
(59, 'tata', 'UU Nomor 19 Tahun 2013 - Perlindungan dan Pemberdayaan Petani.pdf', 1.13943),
(60, 'tata', 'UU Nomor 2 Tahun 2017 - Jasa Konstruksi.pdf', 1.13943),
(61, 'tata', 'UU Nomor 24 Tahun 2011 - BPJS.pdf', 15.9521),
(62, 'tata', 'UU Nomor 26 Tahun 2007 - Tentang Penataan Ruang.pdf', 285.998),
(63, 'tata', 'UU Nomor 28 Tahun 1999 - Penyelengaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme.pdf', 4.55774),
(64, 'tata', 'UU Nomor 3 Tahun 2017 - Sistem Perbukuan.pdf', 12.5338),
(65, 'tata', 'UU Nomor 32 Tahun 1997 - Perdagangan Berjangka Komoditi.PDF', 29.6253),
(66, 'tata', 'UU Nomor 4 Tahun 2016 - Tabungan Perumahan Rakyat.pdf', 10.2549),
(67, 'tata', 'UU Nomor 40 Tahun 2004 - SJSN.pdf', 2.27887),
(68, 'tata', 'UU Nomor 5 Tahun 2017 - Pemajuan Kebudayaan.pdf', 18.2309),
(69, 'tata', 'UU Nomor 6 Tahun 2014 - Desa.PDF', 26.207),
(70, 'tata', 'UU Nomor 6 Tahun 2017 - Arsitek.pdf', 18.2309),
(71, 'tata', 'UU Nomor 9 Tahun 2016 - Pencegahan dan Penanganan Krisis Sitem Keuangan.pdf', 1.13943),
(72, 'tata', 'UU_Nomor_10_Tahun_2016.pdf', 2.27887);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ranking_term`
--
ALTER TABLE `tb_ranking_term`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ranking_term`
--
ALTER TABLE `tb_ranking_term`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
