-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2020 pada 15.11
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpi_ku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gabungan`
--

CREATE TABLE `tbl_gabungan` (
  `id` int(25) NOT NULL,
  `nik` int(100) NOT NULL,
  `id_kpi` int(25) NOT NULL,
  `id_sop` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kpi`
--

CREATE TABLE `tbl_kpi` (
  `id` int(25) NOT NULL,
  `judul_kpi` varchar(250) NOT NULL,
  `batas_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kpi`
--

INSERT INTO `tbl_kpi` (`id`, `judul_kpi`, `batas_tanggal`) VALUES
(1, 'INstalasi Listrik Rumah', '2020-11-18'),
(2, '111', '2020-11-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sop`
--

CREATE TABLE `tbl_sop` (
  `id` int(25) NOT NULL,
  `sop` varchar(350) NOT NULL,
  `selesai` varchar(25) NOT NULL,
  `belum_selesai` varchar(25) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sop`
--

INSERT INTO `tbl_sop` (`id`, `sop`, `selesai`, `belum_selesai`, `file`) VALUES
(1, 'Menyediakan Perlengkapan', '1', '', 'ada'),
(2, 'Menyediakan Man Power', '', '1', ''),
(15, '222', '', '', ''),
(16, '33', '', '', ''),
(17, '44', '', '', ''),
(18, '111', '1', '1', '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nik` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass2` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nik`, `username`, `pass`, `pass2`, `level`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(2, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'c81e728d9d4c2f636f067f89cc14862c', 'user'),
(3, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'user'),
(12345, 'admin', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gabungan`
--
ALTER TABLE `tbl_gabungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_kpi` (`id_kpi`),
  ADD KEY `id_sop` (`id_sop`);

--
-- Indeks untuk tabel `tbl_kpi`
--
ALTER TABLE `tbl_kpi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gabungan`
--
ALTER TABLE `tbl_gabungan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kpi`
--
ALTER TABLE `tbl_kpi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_sop`
--
ALTER TABLE `tbl_sop`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `nik` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
