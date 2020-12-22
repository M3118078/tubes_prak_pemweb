-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 05:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfvntech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(25) NOT NULL,
  `password_admin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`) VALUES
('fandy_irianto', 'seringai123');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` char(3) NOT NULL,
  `jenis_barang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
('acs', 'Accessories'),
('hp', 'Handphone'),
('lpt', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tambahitem`
--

CREATE TABLE `tambahitem` (
  `id_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL,
  `harga_barang` int(20) NOT NULL,
  `stock` int(3) NOT NULL,
  `image_barang_1` varchar(100) NOT NULL,
  `image_barang_2` varchar(250) NOT NULL,
  `image_barang_3` varchar(250) NOT NULL,
  `desc_barang` text NOT NULL,
  `kata_kunci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambahitem`
--

INSERT INTO `tambahitem` (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `stock`, `image_barang_1`, `image_barang_2`, `image_barang_3`, `desc_barang`, `kata_kunci`) VALUES
('H001', 'Samsung A51 Crush', 'hp', 4700000, 25, 'AP11.jpg', 'gadget1.jpg', 'gadget2.jpg', 'mantap banget. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus commodi quasi earum eos facere inventore tenetur amet ab, cumque culpa vitae sed maxime dolores quas ullam accusamus nostrum saepe rerum.', ''),
('LT001', 'Vivobook A412FL', 'lpt', 14000000, 10, 'laptop1.jpg', '', '', 'Processor : Core i7 8th gen\r\nRam : 8 Gb 2 slot\r\nGraphic card : NVIDIA Geforce MX250\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `HP` varchar(13) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gender` enum('Pria','Wanita','','') DEFAULT NULL,
  `pict` text NOT NULL DEFAULT 'user/assets/images/profile-default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `HP`, `tanggal`, `gender`, `pict`) VALUES
('Fandy Irianto', 'sekepalniat', 'Fandy Ahmad Irianto', 'fandy@gmail.com', NULL, NULL, NULL, 'user/assets/images/profile-default.png'),
('Pioboy', '212', 'Ferdian Proambodho', 'mail@gmail.com', '082334952928', '2001-02-06', 'Pria', 'user/images-profile/whiteScreen.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tambahitem`
--
ALTER TABLE `tambahitem`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `keyid_jenisbarang` (`jenis_barang`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tambahitem`
--
ALTER TABLE `tambahitem`
  ADD CONSTRAINT `tambahitem_ibfk_1` FOREIGN KEY (`jenis_barang`) REFERENCES `jenis_barang` (`id_jenis`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
