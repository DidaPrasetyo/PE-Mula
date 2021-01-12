-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 08:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemula`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_pesanan`
--

CREATE TABLE `detil_pesanan` (
  `id` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info_user`
--

CREATE TABLE `info_user` (
  `id_detuser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_user`
--

INSERT INTO `info_user` (`id_detuser`, `nama`, `email`, `telp`, `alamat`, `id_user`) VALUES
(1, 'Admin', 'admin@pemula.com', '081081081081', 'Jawa Tengah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `keterangan`) VALUES
(1, 'Exhaust Fan', ''),
(2, 'Cooling Pad', ''),
(3, 'Frame', ''),
(4, 'Nipple', ''),
(5, 'Pressure Regulator', ''),
(6, 'Panel Listrik', ''),
(7, 'Climate Control', ''),
(8, 'Pully', ''),
(9, 'Brooding', ''),
(10, 'Feeding', ''),
(11, 'Drinking', '');

-- --------------------------------------------------------

--
-- Table structure for table `keb_udara`
--

CREATE TABLE `keb_udara` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keb_udara`
--

INSERT INTO `keb_udara` (`id`, `nama`, `nilai`) VALUES
(1, 'Hubbard', 8),
(2, 'Cobb', 6),
(3, 'ISA Brown', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `no_penawaran` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `tbobot` int(11) NOT NULL,
  `tpadat` int(11) NOT NULL,
  `id_tipe_kandang` int(11) NOT NULL,
  `id_keb_udara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `id_kategori`, `harga`, `keterangan`, `image`) VALUES
(15, 'EXH.FAN EC52\" MUNTERS/1,5HP', 1, NULL, '', ''),
(16, 'TEMPTRON 304', 7, NULL, '', ''),
(17, 'TEMPTRON 304D', 7, NULL, '', ''),
(18, 'TEMPTRON 607AC', 7, NULL, '', ''),
(19, 'EXH.FAN EOS 31\" PERICOLI', 1, NULL, '', ''),
(20, 'EXH.FAN EOS 42\" PERICOLI', 1, NULL, '', ''),
(21, 'EXH.FAN EOS 53\" PERICOLI', 1, NULL, '', ''),
(22, 'EXH.FAN HYPERMAX 54\" VALCO', 1, NULL, '', ''),
(23, 'EXH.FAN BUTTERFLY CONE 50\" AGRIN/1,5 HP', 1, NULL, '', ''),
(24, 'CONTROLLER R-TRON 313 + SENSOR', 7, NULL, '', ''),
(25, 'CONTROLLER R-TRON 612 + SENSOR', 7, NULL, '', ''),
(26, 'CLIMATE CONTROLLER MUNTERS PLATINUM PRO', 7, NULL, '', ''),
(27, 'EXH.FAN EHS 50\" AGRIN/1.5 HP', 1, NULL, '', ''),
(28, 'EXH.FAN EOC 53\" PERICOLI', 1, NULL, '', ''),
(29, 'C.P AGRIN, 1500X600X150MM, 15/45 UNCOATED W/ WDP', 2, NULL, '', ''),
(30, 'C.P AGRIN, 1500X600X150MM, 15/45 COATED W/ WDP', 2, NULL, '', ''),
(31, 'C.P MUNTERS, 1500X600X150MM, 15/45 UNCOATED W/ WDP', 2, NULL, '', ''),
(32, 'C.P MUNTERS, 1500X600X150MM, 15/45 COATED W/ WDP', 2, NULL, '', ''),
(33, 'C.P MUNTERS, 1800X600X150MM, 15/45 UNCOATED W/ WDP', 2, NULL, '', ''),
(34, 'C.P MUNTERS, 1800X600X150MM, 15/45 COATED W/ WDP', 2, NULL, '', ''),
(35, 'C.P KUUL,1500X600X150MM,15/45 COATED W/ WDP', 2, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk_fan`
--

CREATE TABLE `produk_fan` (
  `id` int(11) NOT NULL,
  `tipe_kandang` int(11) NOT NULL DEFAULT '0',
  `pa` int(11) NOT NULL DEFAULT '0',
  `CFM` int(11) NOT NULL DEFAULT '0',
  `m3/h` int(11) NOT NULL DEFAULT '0',
  `RPM` int(11) NOT NULL DEFAULT '0',
  `Efficiency` int(11) NOT NULL DEFAULT '0',
  `Dimensi` int(11) NOT NULL DEFAULT '0',
  `id_produk` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk_fan`
--

INSERT INTO `produk_fan` (`id`, `tipe_kandang`, `pa`, `CFM`, `m3/h`, `RPM`, `Efficiency`, `Dimensi`, `id_produk`) VALUES
(1, 1, 25, 24541, 41695, 439, 18, 0, 15),
(2, 2, 37, 21844, 37113, 439, 15, 0, 15),
(3, 3, 50, 19691, 33455, 439, 14, 0, 15),
(4, 1, 25, 22600, 38400, 431, 14, 0, 23),
(5, 2, 37, 21400, 36400, 431, 13, 0, 23),
(6, 3, 50, 20900, 35400, 431, 12, 0, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_kandang`
--

CREATE TABLE `tipe_kandang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_pa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipe_kandang`
--

INSERT INTO `tipe_kandang` (`id`, `nama`, `nilai_pa`) VALUES
(1, 'Postal', 25),
(2, 'Slat', 37),
(3, 'Cages', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$nh2wAT4PmZPOXEBPoBoMq.iohw2z20147.L2itEDzD/SWEkD9s/GC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detil_pesanan`
--
ALTER TABLE `detil_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_user`
--
ALTER TABLE `info_user`
  ADD PRIMARY KEY (`id_detuser`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keb_udara`
--
ALTER TABLE `keb_udara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- Indexes for table `produk_fan`
--
ALTER TABLE `produk_fan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Fan` (`id_produk`);

--
-- Indexes for table `tipe_kandang`
--
ALTER TABLE `tipe_kandang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detil_pesanan`
--
ALTER TABLE `detil_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_user`
--
ALTER TABLE `info_user`
  MODIFY `id_detuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `keb_udara`
--
ALTER TABLE `keb_udara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produk_fan`
--
ALTER TABLE `produk_fan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tipe_kandang`
--
ALTER TABLE `tipe_kandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk_fan`
--
ALTER TABLE `produk_fan`
  ADD CONSTRAINT `FK_Fan` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
