-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 09:57 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(20) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `motor` varchar(36) NOT NULL,
  `lokasi_jemput` varchar(36) NOT NULL,
  `nomorhandphone` varchar(36) NOT NULL,
  `tglsewa` date NOT NULL,
  `tglkembali` date NOT NULL,
  `kode_booking` varchar(20) NOT NULL,
  `plat_motor` varchar(8) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Lunas',
  `bukti_bayar` varchar(36) DEFAULT NULL,
  `bank` varchar(36) NOT NULL,
  `harga` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `nama`, `motor`, `lokasi_jemput`, `nomorhandphone`, `tglsewa`, `tglkembali`, `kode_booking`, `plat_motor`, `status`, `bukti_bayar`, `bank`, `harga`) VALUES
(20, 'Natanael', 'Supra X Racing', 'Bekasi', '081259188983', '2020-11-30', '2020-11-30', 'eNqHMElj', '123 BC 2', 'Ulangi Pembayaran', '1606715891_bc2d8de9bf638c60e472.jpg', 'Bank BCA', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
