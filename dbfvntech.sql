-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 10:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `review_user`
--

CREATE TABLE `review_user` (
  `nama_review` varchar(200) NOT NULL,
  `isi_review` text NOT NULL,
  `id_review` int(3) NOT NULL,
  `image_review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_user`
--

INSERT INTO `review_user` (`nama_review`, `isi_review`, `id_review`, `image_review`) VALUES
('buaya muara', 'aku takut kamu dirumah sendirian, aku kerumah kamu sekarang ya', 1, 'accessories1.jpg'),
('buaya betina keras', 'ahh itu cuman temen kelas aku doang kok sayang tadi aku minta tolong doang', 2, 'accessories2.jpg'),
('Burung Perkutut', 'cit cittt cuitt cuitt cuittt uhwuwu icikwirrr asleblebeb.', 3, 'accessories6.jpg'),
('buaya cupu', 'aku pengen ketemu kamu tapi aku malu ga bisa bahagiain kamu', 5, 'AP11.jpg'),
('buaya betina umumnya', 'gatau kenapa aku bisa sesayangan ini sama kamu', 7, 'asus.png'),
('Exca Aja', 'Barang barang yg dijual disini harganya ga masuk akallll, murah bangett dompet ibuku sampe tipiss lagi xixixi', 8, 'apple.png'),
('Fandy Metal', 'password hp saya lupa, hpnya saya buang mbak mbaknya saya beli .', 9, 'xiaomi.png');

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
('A023', 'headset KW', 'acs', 25000, 44, 'best_2.png', '', '', 'sekali pake mledak', 'headset'),
('A030', 'Silicon Case i Phone 7 Re', 'acs', 27000, 39, 'CSAPSE.jpg', '', '', 'gampang sobek ga worth', 'case i phone'),
('H001', 'Samsung A51 Crush', 'hp', 4700000, 25, 'AP11.jpg', 'gadget1.jpg', 'gadget2.jpg', 'mantap banget. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus commodi quasi earum eos facere inventore tenetur amet ab, cumque culpa vitae sed maxime dolores quas ullam accusamus nostrum saepe rerum.', ''),
('H003', 'Apple i Phone 11 128 GB', 'hp', 16599000, 22, 'apple.png', '', '', 'barangnya mantap betul tapi boong', 'i phone'),
('H004', 'Asus ROG 2 128 GB', 'hp', 7249999, 22, 'asus.png', '', '', 'barangnya mantap betul tapi boong', 'rog'),
('H005', 'Xiaomi Note 8 128 Gb', 'hp', 2800000, 22, 'xiaomi.png', '', '', 'barangnya mantap juga tapi ini beneran gak deng gatau', 'xiaomi'),
('H009', 'Samsung S20 Ultra 128 Gb', 'hp', 15000000, 33, 'S20.jpg', '', '', 'wawawawa ak suka skali', 'samsung '),
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
  `gender` enum('Pria','Wanita') DEFAULT NULL,
  `pict` text NOT NULL DEFAULT 'user/assets/images/profile-default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `HP`, `tanggal`, `gender`, `pict`) VALUES
('excaandita', 'neymar11', 'Exca Muchlis Andita', 'bisutarjo.bi@gmail.com', '081227834282', '2000-05-31', 'Pria', ''),
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
-- Indexes for table `review_user`
--
ALTER TABLE `review_user`
  ADD PRIMARY KEY (`id_review`);

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
