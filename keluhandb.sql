-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 02:13 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keluhandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE IF NOT EXISTS `keluhan` (
  `Id_trx` int(11) NOT NULL,
  `NIM` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `nomer_meja` varchar(8) NOT NULL,
  `dosen_pengampu` varchar(50) NOT NULL,
  `Keluhan` varchar(100) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`Id_trx`, `NIM`, `nama`, `ruang`, `nomer_meja`, `dosen_pengampu`, `Keluhan`, `status`) VALUES
(16, 'G.231.15.0080', 'Edi Saiful', 'M.2.3', 'Meja 06', 'Bu Astrid', 'rusak', 'Dalam Proses Pengerjaan'),
(18, 'G.231.15.0065', 'Agus Supriyanto', 'Q.2.1', 'Meja 15', 'Bu Astrid', 'Komputer Mati', 'Sudah Ok');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` text,
  `nama_pengguna` varchar(20) DEFAULT NULL,
  `akses` int(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama_pengguna`, `akses`) VALUES
(1, 'admin', 'basio', 'Agus Supriyanto', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE IF NOT EXISTS `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama_teknisi` varchar(25) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama_teknisi`, `alamat`, `email`, `foto`) VALUES
(1, 'Agus (c)', 'semarang', 'agusC@usm.co.id', ''),
(2, 'Edi', 'Jogja', 'edi.usm.id', ''),
(3, 'Deny', 'Sampangan', 'deni@usm.ac.id', ''),
(4, 'Kirun', 'semarang', 'kirun@usm.ac.id', ''),
(5, 'krisna', 'mangkang', 'krisna@usm.ac.id', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `Id_trx` int(5) NOT NULL,
  `teknisi` varchar(20) NOT NULL,
  `nama_komponen` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_komp` int(5) NOT NULL,
  `total_harga` int(14) DEFAULT NULL,
  `tgl_pengerjaan` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`Id_trx`, `teknisi`, `nama_komponen`, `harga`, `jumlah_komp`, `total_harga`, `tgl_pengerjaan`) VALUES
(23, '1', 'monitor', 300000, 1, NULL, '2017-12-31'),
(24, '1', 'monitor', 700000, 3, NULL, '2017-12-31'),
(25, '3', 'matherboard', 700000000, 1, NULL, '2017-12-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`Id_trx`), ADD KEY `Id_trx` (`Id_trx`), ADD KEY `NIM` (`NIM`), ADD KEY `NIM_2` (`NIM`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_trx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `Id_trx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_trx` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
