-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2019 pada 03.44
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `kode_alternatif` varchar(10) NOT NULL,
  `nip_alternatif` varchar(100) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `email_alternatif` varchar(100) NOT NULL,
  `telepon_alternatif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`kode_alternatif`, `nip_alternatif`, `nama_alternatif`, `email_alternatif`, `telepon_alternatif`) VALUES
('A1', '35', 'Arta', 'arta@gmail.com', '098423432'),
('A2', '40', 'Adam', 'adam@gmail.com', '089324234'),
('A3', '23', 'Basuki', 'basuki@gmail.com', '0897898989'),
('K4', '60', 'Faisah', 'faisah@gmail.com', '085344107997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_histori`
--

CREATE TABLE `tbl_histori` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `kode_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kode_kriteria`, `nama_kriteria`) VALUES
('K1', 'Kemampuan Numerik'),
('K2', 'Kemampuan Akuntansi'),
('K3', 'Kemampuan Bekerja Dalam Tekanan'),
('K4', 'Kemampuan Analitik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_relasi`
--

CREATE TABLE `tbl_relasi` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(10) DEFAULT NULL,
  `kode_kriteria` varchar(10) DEFAULT NULL,
  `nilai_bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`kode_alternatif`);

--
-- Indeks untuk tabel `tbl_histori`
--
ALTER TABLE `tbl_histori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_alternatif` (`kode_alternatif`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`);

--
-- Indeks untuk tabel `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_alternatif` (`kode_alternatif`),
  ADD KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_histori`
--
ALTER TABLE `tbl_histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_histori`
--
ALTER TABLE `tbl_histori`
  ADD CONSTRAINT `tbl_histori_ibfk_1` FOREIGN KEY (`kode_alternatif`) REFERENCES `tbl_alternatif` (`kode_alternatif`);

--
-- Ketidakleluasaan untuk tabel `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  ADD CONSTRAINT `tbl_relasi_ibfk_1` FOREIGN KEY (`kode_alternatif`) REFERENCES `tbl_alternatif` (`kode_alternatif`),
  ADD CONSTRAINT `tbl_relasi_ibfk_2` FOREIGN KEY (`kode_kriteria`) REFERENCES `tbl_kriteria` (`kode_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
