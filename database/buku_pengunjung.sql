-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2019 pada 07.41
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
-- Database: `buku_pengunjung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama_karyawan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_telepon` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama_karyawan`, `jenis_kelamin`, `alamat`, `no_telepon`) VALUES
(2, '120947018927', 'abcdefg', 'Perempuan', '2hasa', '8027140127'),
(3, '9825193', 'ioahfa', 'Perempuan', 'lawDNHADKL', '897412510257');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `untuk` varchar(255) DEFAULT NULL,
  `kritik_saran` text,
  `waktu_feedback` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nik`, `untuk`, `kritik_saran`, `waktu_feedback`) VALUES
(1, '.120947018927.', 'ARD', 'iohasdinaskf', '2019-10-24 09:18:51'),
(2, '.120947018927.', 'GA', 'ouhfowelfn klnhgnlw', '2019-10-24 09:19:03'),
(4, '.120947018927.', 'ARD', ';aijdanfioanfanf', '2019-10-25 07:47:23'),
(6, '.9825193.', 'GA', 'oajnsidfaofuafa', '2019-10-25 07:47:51'),
(7, '.120947018927.', 'IT', 'iaohfoanhfiaf', '2019-10-28 07:43:02'),
(8, '.9825193.', 'GA', 'sad;l asdc', '2019-10-29 06:22:01'),
(10, '.120947018927.', 'ARD', 'asd', '2019-10-30 04:08:12'),
(11, '.120947018927.', 'ARD', 'asd', '2019-10-30 06:14:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'ADMIN'),
(2, 'ARD'),
(3, 'GA'),
(4, 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pegawai`
--

CREATE TABLE `user_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_pegawai`
--

INSERT INTO `user_pegawai` (`id_pegawai`, `nama_pegawai`, `username`, `password`, `id_level`) VALUES
(1, 'raihan1', 'raihan1', 'raihan1', 1),
(2, 'fazel', 'ardard1', 'ardard1', 2),
(3, 'defa', 'gagaga1', 'gagaga1', 3),
(4, 'dimas', 'ititit1', 'ititit1', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `nama_karyawan` (`nama_karyawan`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nama_pegawai` (`nama_pegawai`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_pegawai`
--
ALTER TABLE `user_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD CONSTRAINT `user_pegawai_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
