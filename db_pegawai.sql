-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `no` int(5) NOT NULL,
  `nip` varchar(10) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`no`, `nip`, `nama_pegawai`, `alamat`, `jabatan`, `tgl_masuk`, `divisi`) VALUES
(6, '20090152', 'aliando', 'tegal', 'kayawan', '2019-06-01', 'karyawan'),
(9, '20090127', 'apip', 'curug', 'IT', '2022-01-07', 'umum'),
(14, '20090121', 'zakki', 'bedug', 'IT', '2022-05-04', 'staff'),
(15, '16712873', 'yanto', 'banjaran', 'IT', '2022-05-06', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `no` int(5) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `level` enum('admin','user','superuser') DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`no`, `nip`, `nama_pegawai`, `level`, `password`) VALUES
(1, '20090151', 'muhammad affan', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'affan', 'affan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
