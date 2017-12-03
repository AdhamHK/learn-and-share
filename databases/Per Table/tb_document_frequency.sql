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
-- Table structure for table `tb_document_frequency`
--

CREATE TABLE `tb_document_frequency` (
  `Id` int(11) NOT NULL,
  `Term` varchar(150) NOT NULL,
  `Df` int(11) NOT NULL,
  `Idf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_document_frequency`
--

INSERT INTO `tb_document_frequency` (`Id`, `Term`, `Df`, `Idf`) VALUES
(1, 'di', 22, 0.820981),
(2, 'indonesia', 24, 0.733969),
(3, 'pangan', 2, 3.21888),
(4, 'perban', 8, 1.83258),
(5, 'tata', 16, 1.13943);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_document_frequency`
--
ALTER TABLE `tb_document_frequency`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Term` (`Term`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_document_frequency`
--
ALTER TABLE `tb_document_frequency`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
