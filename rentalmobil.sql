-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 12:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE `t_kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kategori`
--

INSERT INTO `t_kategori` (`idkategori`, `kategori`) VALUES
(13, 'LCGC'),
(14, 'VAN'),
(15, 'SEDAN'),
(16, 'MPV'),
(17, 'SUV');

-- --------------------------------------------------------

--
-- Table structure for table `t_mobil`
--

CREATE TABLE `t_mobil` (
  `idmobil` int(15) NOT NULL,
  `merk_mobil` varchar(200) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `tahun_mobil` char(100) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `harga_sewa` int(15) NOT NULL,
  `stok` int(15) NOT NULL,
  `no_plat` varchar(35) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `no_bpkb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_mobil`
--

INSERT INTO `t_mobil` (`idmobil`, `merk_mobil`, `nama_mobil`, `idkategori`, `tahun_mobil`, `kapasitas`, `harga_sewa`, `stok`, `no_plat`, `warna`, `gambar`, `no_bpkb`) VALUES
(4, 'Toyota', 'KIJANG INNOVA', 16, '2018', 8, 900000, 2, 'B 1819 BR', 'ABU - ABU', '3fefc4bf5a17b5595135d2781cd9a256.jpeg', '3432424T'),
(5, 'Toyota', 'Yaris', 15, '2017', 5, 850000, 3, 'W 9090 NBB', 'Merah', 'e1225df8a3d52e9805f23790005b2b91.jpg', '7239827RD'),
(6, 'Toyota', 'Rush', 17, '2010', 8, 750000, 2, 'B 6272 GR', 'Putih', '87a3a1dbb10db339907a8c05c551a9e9.jpg', '2173861P'),
(7, 'Nissan', 'Grand Livina', 13, '2006', 7, 500000, 1, 'B 1262 PKA', 'HITAM', 'd7024f27a4a7a8cb5a0de2c766f674cc.jpg', '6735173T'),
(8, 'TOYOTA', 'AVANZA', 13, '2012', 8, 450000, 2, 'B 5236 TY', 'SILVER', '73a8e9bfe062c6a2d093434f15fcbe22.jpeg', '562563KB'),
(9, 'BMW', 'BMW E30', 15, '1990', 5, 1200000, 1, 'B 1565 BPG', 'ABU-ABU', 'dbf030063974f5b359ba607da979c160.jpg', '615376PK'),
(10, 'HONDA', 'CRV', 17, '2018', 6, 950000, 2, 'B 1580 TN', 'HITAM', 'e204f6cc419d33777c46d402706b35f0.jpg', '782763KP'),
(11, 'DAIHATSU', 'XENIA', 13, '2006', 8, 350000, 3, 'BN 1670 TR', 'ABU-ABU', '8fb154559e8402f5f830fc36c757d819.jpg', '721736TG'),
(12, 'HONDA', 'CITY', 15, '2014', 5, 650000, 1, 'W 7193 UJ', 'HIJAU TOSCA', 'e5ed2cccb5beeee5e47bf703622651fa.jpg', '3231231BP'),
(13, 'Honda', 'Jazz', 15, '2019', 5, 850000, 2, 'B 1537 FUI ', 'SILVER', 'b259a52dd3087ced617e13d9e4a01190.jpg', '321763JY');

-- --------------------------------------------------------

--
-- Table structure for table `t_peminjaman`
--

CREATE TABLE `t_peminjaman` (
  `idpinjam` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `idpetugas` int(11) NOT NULL,
  `idmobil` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_peminjaman`
--

INSERT INTO `t_peminjaman` (`idpinjam`, `idpengguna`, `idpetugas`, `idmobil`, `jumlah`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(30, 3, 4, 2, 10, '2023-12-26', '2023-12-26', 1),
(31, 3, 4, 2, 0, '2023-12-26', NULL, 0),
(32, 8, 4, 4, 1, '2023-12-15', '2023-12-27', 1),
(33, 8, 4, 5, 1, '2023-12-20', '2023-12-27', 1),
(34, 8, 4, 6, 2, '2023-12-28', '2023-12-27', 1),
(35, 8, 4, 7, 1, '2023-12-21', '2023-12-27', 1),
(36, 8, 4, 10, 1, '2023-12-01', '2023-12-27', 1),
(37, 8, 4, 6, 1, '2023-12-16', '2023-12-27', 1),
(38, 8, 4, 9, 1, '2023-12-14', '2023-12-27', 1),
(39, 8, 4, 12, 1, '2023-12-09', '2023-12-27', 1),
(40, 8, 4, 7, 1, '2023-12-11', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('Admin','Petugas','User') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengguna`
--

INSERT INTO `t_pengguna` (`idpengguna`, `nama`, `username`, `email`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'Admin', 'aktif'),
(3, 'okkyboy', 'okkyboy', 'okkyfirman16@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'User', 'aktif'),
(4, 'petugas 1', 'petugas1', 'petugas@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'Petugas', 'aktif'),
(8, 'User 1', 'user', 'user@gmail.com', '$2y$10$bN3X6m9frOTmCHpj161rgeMiiUTCSFRdfnU25vbi6.skAiHZ3GyR2', 'User', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `t_mobil`
--
ALTER TABLE `t_mobil`
  ADD PRIMARY KEY (`idmobil`);

--
-- Indexes for table `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `f_idanggota` (`idpengguna`);

--
-- Indexes for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_mobil`
--
ALTER TABLE `t_mobil`
  MODIFY `idmobil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  MODIFY `idpinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
