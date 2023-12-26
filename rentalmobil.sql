-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 26 Des 2023 pada 06.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`idkategori`, `kategori`) VALUES
(13, 'Toyota'),
(14, 'Honda'),
(15, 'BMW'),
(16, 'Audi'),
(17, 'Nissan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mobil`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_mobil`
--

INSERT INTO `t_mobil` (`idmobil`, `merk_mobil`, `nama_mobil`, `idkategori`, `tahun_mobil`, `kapasitas`, `harga_sewa`, `stok`, `no_plat`, `warna`, `gambar`, `no_bpkb`) VALUES
(2, 'Avanza', 'Tes Mobilas', 14, '1986', 9, 600000, 19, 'W 9090 NBB', 'Putih', '6589a66b77cd6_8132211b7508b73d591392ef4b183578.png', '0897182676123'),
(3, 'Avanza', 'Mobilkuh', 15, '1987', 9, 90000, 17, 'W 6969 NNN', 'Putih', '7d235a743ce2e3eac2e16e110f8fe536.png', '0897182676123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_peminjaman`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_peminjaman`
--

INSERT INTO `t_peminjaman` (`idpinjam`, `idpengguna`, `idpetugas`, `idmobil`, `jumlah`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(30, 3, 4, 2, 10, '2023-12-26', '2023-12-26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('Admin','Petugas','User') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_pengguna`
--

INSERT INTO `t_pengguna` (`idpengguna`, `nama`, `username`, `email`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'Admin', 'aktif'),
(3, 'okkyboy', 'okkyboy', 'okkyfirman16@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'User', 'aktif'),
(4, 'petugasasdjhjasdas', 'petugas1', 'petugas@gmail.com', '$2a$12$Pfpy258NiidKtHOf0Sb0GO2i8xjlyomcvbZBUTh3Ek6XnCnsLJufe', 'Petugas', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `t_mobil`
--
ALTER TABLE `t_mobil`
  ADD PRIMARY KEY (`idmobil`);

--
-- Indeks untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `f_idanggota` (`idpengguna`);

--
-- Indeks untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_mobil`
--
ALTER TABLE `t_mobil`
  MODIFY `idmobil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  MODIFY `idpinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
