-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 10:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu', 'Sepatu Merk Al Star', 'Pakaian Pria', 300000, 15, 'sepatu.jpg'),
(2, 'Kamera', ' DSLR Original Murah ', 'Elektronik', 6000000, 4, 'kamera.jpg'),
(3, 'HP Samsung ', 'Samsung Ori Mahal', 'Elektronik', 10000000, 5, 'hp.jpg'),
(4, 'Laptop', 'Laptop ROG Gamming', 'Elektronik', 25000000, 3, 'laptop.jpg'),
(6, 'Gamis pakistan', 'Gamis pria pakistan', 'Pakaian Pria', 150000, 5, '1.jpg'),
(8, 'Gamis pakistan', 'Gamis pria pakistan', 'Pakaian Pria', 120000, 5, '3.jpg'),
(10, 'Gamis pakistan', 'Gamis pria pakistan', 'Pakaian Pria', 120000, 5, '2.jpg'),
(11, 'Gamis pakistan', 'Gamis pria pakistan', 'Pakaian Pria', 150000, 10, '4.jpg'),
(12, 'Gamis Cewek', 'Orangnya gak dijual', 'Pakaian Wanita', 120000, 14, '1af41eb6c836873627f0d9048c344bda.jpg'),
(13, 'Gamis Cewek lembut', 'Orangnya gak dijual', 'Pakaian Wanita', 120000, 10, 'Gamis_Muslim_Set_Jilbab_Kekinian_Murah_Gamis_Cewek_Terbaru_O.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(7, 'Bagas', 'Desa Trangsan, RT 001, RW 002, Kel/Desa Trangsan, Kec. Bendosari, Kab. Sukoharjo', '2020-10-21 08:57:40', '2020-10-22 08:57:40'),
(8, 'Yuan', 'Desa Trangsan, RT 001, RW 002, Kel/Desa Trangsan, Kec. Bendosari, Kab. Sukoharjo', '2020-10-22 16:22:57', '2020-10-23 16:22:57'),
(9, 'Bagus', '', '2020-10-23 08:37:25', '2020-10-24 08:37:25'),
(10, 'nfgh', '', '2020-10-23 08:45:22', '2020-10-24 08:45:22'),
(11, 'gh', '', '2020-10-23 08:46:28', '2020-10-24 08:46:28'),
(12, 'bas', '', '2020-10-23 14:26:26', '2020-10-24 14:26:26'),
(13, 'rd', '', '2020-10-23 15:11:41', '2020-10-24 15:11:41'),
(14, 'd', '', '2020-10-23 15:12:07', '2020-10-24 15:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(60) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(12, 7, 2, 'Kamera', 1, 6000000, ''),
(13, 7, 1, 'Sepatu', 1, 300000, ''),
(14, 8, 3, 'HP Samsung ', 1, 10000000, ''),
(15, 9, 12, 'Gamis Cewek', 1, 120000, ''),
(16, 10, 2, 'Kamera', 1, 6000000, ''),
(17, 11, 1, 'Sepatu', 3, 300000, ''),
(18, 12, 1, 'Sepatu', 1, 300000, ''),
(19, 13, 1, 'Sepatu', 6, 300000, ''),
(20, 14, 1, 'Sepatu', 1, 300000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'iqbal', 'iqbal', 'iqbal', 2),
(3, 'bagas', 'bagas', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
