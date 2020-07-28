-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2020 pada 08.14
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveipengadilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `respon` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `tanggal`, `respon`) VALUES
(25, '2020-07-20', 8),
(26, '2020-07-20', 8),
(27, '2020-07-20', 8),
(28, '2020-07-20', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gen`
--

CREATE TABLE `gen` (
  `id` int(11) NOT NULL,
  `gender` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gen`
--

INSERT INTO `gen` (`id`, `gender`) VALUES
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 5),
(10, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `umur`
--

CREATE TABLE `umur` (
  `id` int(15) NOT NULL,
  `nilaiumur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gen`
--
ALTER TABLE `gen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `umur`
--
ALTER TABLE `umur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `gen`
--
ALTER TABLE `gen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `umur`
--
ALTER TABLE `umur`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
