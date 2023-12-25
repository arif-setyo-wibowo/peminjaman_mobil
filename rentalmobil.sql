-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Des 2023 pada 12.25
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
-- Struktur dari tabel `t_detailpeminjaman`
--

CREATE TABLE `t_detailpeminjaman` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `idmobil` int(11) NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(13, 'Motor'),
(14, 'Mobil'),
(15, 'Rumah'),
(16, 'Kostum'),
(17, 'Kamera');

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
  `no_plat` int(15) NOT NULL,
  `warna` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `no_bpkb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_mobil`
--

INSERT INTO `t_mobil` (`idmobil`, `merk_mobil`, `nama_mobil`, `idkategori`, `tahun_mobil`, `kapasitas`, `harga_sewa`, `stok`, `no_plat`, `warna`, `gambar`, `no_bpkb`) VALUES
(1, 'honda', '', 1, 'tahun 1968', 5, 200, 3, 15, 'hitam', '3.jpg', 'B 3203');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_peminjaman`
--

CREATE TABLE `t_peminjaman` (
  `id` int(11) NOT NULL,
  `idkostumer` int(11) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `idmobil` int(11) NOT NULL,
  `tgl_awal` int(11) NOT NULL,
  `tgl_selesai` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'admin', 'admin', 'admin@gmail.com', '$2a$12$CvivzKSr7XMeipjWrgT8W.deurrcrjkYgqCm0cRR5qYh/spE2WnGu', 'Admin', 'aktif'),
(3, 'okkyboy', 'okkyboy', 'okkyfirman16@gmail.com', '$2y$10$wKfjKGi3TtdaHM74o4Efj.W9IFbKnpJ9cvGrN.uPaegF.myPqpES.', 'User', 'aktif'),
(4, 'petugas', 'petugas1', 'petugas@gmail.com', '$2y$10$5PnCbyNKIpTbqaA.goVf1.jWnqkF9ToSPlDsTOVqQ3ZwMpT8wWrmC', 'Petugas', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_detailpeminjaman`
--
ALTER TABLE `t_detailpeminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_idpeminjaman` (`id_peminjaman`),
  ADD KEY `f_iddetailbuku` (`idmobil`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_idanggota` (`idkostumer`);

--
-- Indeks untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_detailpeminjaman`
--
ALTER TABLE `t_detailpeminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `t_mobil`
--
ALTER TABLE `t_mobil`
  MODIFY `idmobil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
