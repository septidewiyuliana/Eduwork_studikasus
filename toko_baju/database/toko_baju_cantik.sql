-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 11:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_baju_cantik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Dress'),
(2, 'Tops'),
(3, 'Bottoms');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` int(11) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` decimal(10,3) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `nama_produk`, `harga`, `stok`, `gambar`, `keterangan`, `id_kategori`) VALUES
(1, 'Cardigan', 256.000, 15, '17.png', 'This new item', 1),
(104, ' Ruffle Cami Dress', 250.000, 25, '3.png', '', 1),
(106, 'Blouse Stripped', 120.000, 27, '13.png', '', 2),
(107, '  V line', 900.000, 18, '15.png', '', 2),
(108, 'Bear Dress & Mock Neck Top Set', 400.000, 40, '7.png', NULL, 1),
(109, ' Vintage High Waist Pleated Skirt', 750.000, 18, '16.png', NULL, 3),
(112, 'Bluey Dress', 567.000, 61, '2.png', 'Pretty Dress', 2),
(113, 'V Blouse', 97.000, 16, '13.png', 'This New for summer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pengguna`, `nama_pengguna`, `no_telp`, `alamat`, `role`, `username`, `password`) VALUES
(1, 'Alice', '081234567893', 'Jl. CAntik No. 1', 'admin', 'admin', '123456'),
(2, 'Eva', '081234567894', 'Jl. Pahlawan No. 2', 'user', 'user1', '1234'),
(3, 'Sophia', '081234567895', 'Semarang', 'user', 'sophia', 'shopi1'),
(4, 'Olivia', '081234567896', 'Jl. Wanita No. 4', 'user', 'olivia', '1234'),
(5, 'Emma', '081234567897', 'Jl. Wanita No. 5', 'user', 'ema', '1234'),
(6, 'Isabella', '081234567898', 'Jl. Wanita No. 6', 'user', 'isabel', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
