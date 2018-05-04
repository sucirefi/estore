-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 09:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `barang_kode` varchar(50) DEFAULT NULL,
  `barang_nama` varchar(250) DEFAULT NULL,
  `barang_entri` date DEFAULT NULL,
  `barang_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `barang_kode`, `barang_nama`, `barang_entri`, `barang_harga`) VALUES
(1, 'br0001', 'Televisi', '2018-04-26', 900000),
(2, 'br0002', 'Kulkas', '2018-04-26', 1100000),
(3, 'br0003', 'Lemari', '2018-04-30', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nama` varchar(250) DEFAULT NULL,
  `pegawai_jk` char(1) DEFAULT NULL,
  `pegawai_tmp_lahir` varchar(50) DEFAULT NULL,
  `pegawai_tgl_lahir` date DEFAULT NULL,
  `pegawai_alamat` varchar(250) DEFAULT NULL,
  `pegawai_notel` char(15) DEFAULT NULL,
  `pegawai_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_jk`, `pegawai_tmp_lahir`, `pegawai_tgl_lahir`, `pegawai_alamat`, `pegawai_notel`, `pegawai_foto`) VALUES
(1, 'Jony Steven', 'L', 'subang', '2000-01-01', 'Jakarta', '08976383939', 'bell.png'),
(2, 'Suci Refianto', 'L', 'Subang', '2001-10-08', 'Kalijati - Subang', '08973627272', 'manad.png'),
(7, 'Dadi Mulyadi', 'L', 'Subang', '2001-05-12', 'Subang', '08976467889', 'locked64.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_kode_user` varchar(50) DEFAULT NULL,
  `transaksi_pembeli` varchar(100) DEFAULT NULL,
  `transaksi_entri` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_kode_user`, `transaksi_pembeli`, `transaksi_entri`) VALUES
(1, 'us0001', 'Pembeli', '2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_brg`
--

CREATE TABLE `transaksi_brg` (
  `transaksi_brg_id` int(11) NOT NULL,
  `transaksi_brg_transaksi_id` int(11) DEFAULT NULL,
  `transaksi_kodebar` varchar(50) DEFAULT NULL,
  `transaksi_total` int(11) DEFAULT NULL,
  `transaksi_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_brg`
--

INSERT INTO `transaksi_brg` (`transaksi_brg_id`, `transaksi_brg_transaksi_id`, `transaksi_kodebar`, `transaksi_total`, `transaksi_status`) VALUES
(9, 1, 'br0001', 3300000, 'Garansi'),
(10, 1, 'br0002', 3300000, 'Tidak Garansi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_kode` varchar(100) DEFAULT NULL,
  `user_pegawai_id` int(11) DEFAULT NULL,
  `user_username` varchar(100) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_kode`, `user_pegawai_id`, `user_username`, `user_password`, `user_level`) VALUES
(1, 'us0001', 1, 'jony33', 'jony', 'admin'),
(2, 'us0002', 2, 'suci55', 'suci', 'admin'),
(4, 'us0003', 7, 'daddy69', 'dadi', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `transaksi_brg`
--
ALTER TABLE `transaksi_brg`
  ADD PRIMARY KEY (`transaksi_brg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi_brg`
--
ALTER TABLE `transaksi_brg`
  MODIFY `transaksi_brg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
