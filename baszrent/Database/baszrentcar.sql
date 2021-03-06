-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baszrentcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `no_ktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`no_ktp`, `nama`, `email`, `username`, `password`, `level`) VALUES
('0099', 'QWERTY', 'qwe@gmail.com', 'admin', 'qwe', 'pemilik'),
('0099087', 'asdfghjkl', 'asd@gmail.com', 'asd', '123', 'customer'),
('0099088', 'qwe', 'qwe@gmail.com', 'qwe', '321', 'customer'),
('11111111', 'fgh', 'aa@gmail.com', 'aa', 'aaa', 'customer'),
('3123459876', 'ADMIN', 'admin@gmail.com', 'admin', '123', 'pemilik');

-- --------------------------------------------------------

--
-- Table structure for table `historydatamobilyangdihapus`
--

CREATE TABLE `historydatamobilyangdihapus` (
  `id_historymobil` int(4) NOT NULL,
  `id_mobil` int(4) NOT NULL,
  `tgl_hapus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(4) NOT NULL,
  `nama_mobil` varchar(20) NOT NULL,
  `harga` int(8) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `Penumpang` varchar(7) NOT NULL,
  `Bagasi` varchar(15) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `harga`, `warna`, `plat_nomor`, `status`, `deskripsi`, `Penumpang`, `Bagasi`, `photo`) VALUES
(1, 'Toyota Avanza', 123, 'Putih', 'B6546GGG', 'Tersedia', ' qqq', '5', '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(4) NOT NULL,
  `id_pemesanan` int(4) NOT NULL,
  `total_harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(4) NOT NULL,
  `id_supir` int(4) NOT NULL,
  `id_mobil` int(4) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `tanggal_pemesanan` int(10) NOT NULL,
  `tanggal_kembali` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_rental`
--

CREATE TABLE `pemilik_rental` (
  `no_ktp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `level` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `level`, `username`, `password`) VALUES
(1, 'customer', 'bapidz', '123'),
(2, 'pemilik', 'albapit', '321');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(4) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `no_ktp`, `pesan`, `rating`) VALUES
(3, '0099087', 'mantap', 'satu'),
(4, '0099088', 'good', 'lima'),
(5, '0099', 'sip', 'dua'),
(6, '0099', 'aa', 'dua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `historydatamobilyangdihapus`
--
ALTER TABLE `historydatamobilyangdihapus`
  ADD PRIMARY KEY (`id_historymobil`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemilik_rental`
--
ALTER TABLE `pemilik_rental`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historydatamobilyangdihapus`
--
ALTER TABLE `historydatamobilyangdihapus`
  MODIFY `id_historymobil` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
