-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2017 pada 16.06
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_jual` varchar(50) NOT NULL,
  `jumlah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_jual`, `jumlah`) VALUES
('1', 'Fresh Bananas', '$10.00', '30kg'),
('119', 'fresh cauliflower', '$5.00', '25kg'),
('12', 'fresh brinjal bharta', '$2.00', '36kg'),
('1234', 'fresh sweet lime', '$6.00', '44kg'),
('134', 'fresh spinach', '$2.00', '28kg'),
('135', 'fresh mango dasheri', '$5.00', '40kg'),
('18', 'fresh apple red', '$6.00', '50kg'),
('3', 'fresh broccoli', '$4.00', '55kg'),
('5', 'fresh basket onion', '$5.00', '27kg'),
('6', 'fresh muskmelon', '$4.00', '33kg'),
('7', 'fresh mushroom', '$11.00', '60kg'),
('9', 'fresh strawberry', '$7.00', '64kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
