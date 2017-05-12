-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 03:55 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `5-in-1-delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_jual` varchar(30) NOT NULL,
  `harga_beli` varchar(30) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `suplier` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_jual`, `harga_beli`, `stock`, `suplier`, `keterangan`) VALUES
('stock1', 'Anggur', '20.000/kg', '25.000/kg', '3 kg', 'Agen', 'Tersedia'),
('stock2', 'Ikan Kakap', '20.000/kg', '27.000/kg', '10 kg', 'Agen', 'Tersedia'),
('stock3', 'Wartel', '5.000/kg', '8.000/kg', 'Kosong', 'Agen', 'Habis');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `email` varchar(25) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nama` varchar(25) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pemesanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `lokasi_pasar` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
