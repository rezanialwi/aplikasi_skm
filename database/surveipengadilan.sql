-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2020 pada 05.28
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
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(10) NOT NULL,
  `nama_bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`) VALUES
(1, 'Pidana'),
(2, 'Hukum'),
(3, 'Umum & Keuangan'),
(4, 'Perdata'),
(5, 'Tipikor'),
(6, 'PHI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `responden`
--

CREATE TABLE `responden` (
  `id_responden` int(20) NOT NULL,
  `id_bagian` int(10) NOT NULL,
  `nama_responden` varchar(50) NOT NULL,
  `umur_responden` varchar(3) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan_responden` varchar(30) NOT NULL,
  `pendidikan_responden` varchar(30) NOT NULL,
  `tingkat_kepuasan` varchar(25) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `responden`
--

INSERT INTO `responden` (`id_responden`, `id_bagian`, `nama_responden`, `umur_responden`, `jenis_kelamin`, `pekerjaan_responden`, `pendidikan_responden`, `tingkat_kepuasan`, `waktu_input`) VALUES
(35, 2, 'Daffa', '20', 'Laki-laki', 'PNS/TNI/POLRI', 'SD/Sederajat', 'Tidak puas', '2020-07-29 02:38:43'),
(36, 2, 'Daffa', '20', 'Laki-laki', 'PNS/TNI/POLRI', 'SMP/Sederajat', 'Cukup puas', '2020-07-29 03:20:53'),
(37, 1, 'Daffa', '30', 'Laki-laki', 'Pegawai/Swasta', 'SD/Sederajat', 'Sangat puas', '2020-07-29 03:22:49'),
(38, 6, 'Daffa', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMP/Sederajat', 'Cukup puas', '2020-08-02 12:17:47'),
(39, 5, 'Daffa', '19', 'Laki-laki', 'Wiraswasta/Usahawan', 'SMP/Sederajat', 'Sangat puas', '2020-08-02 12:18:19'),
(40, 1, 'Bowo', '29', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Cukup puas', '2020-08-02 14:43:13'),
(41, 1, 'Daffa', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Sangat puas', '2020-08-02 14:56:51'),
(42, 1, 'A', '17', 'Perempuan', 'PNS/TNI/POLRI', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 00:49:58'),
(43, 1, 'B', '32', 'Laki-laki', 'Wiraswasta/Usahawan', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 00:50:47'),
(44, 1, 'sfs', '32', 'Laki-laki', 'PNS/TNI/POLRI', 'SMP/Sederajat', 'Cukup puas', '2020-08-03 00:52:14'),
(45, 1, 'asgasrg', '32', 'Laki-laki', 'Pegawai/Swasta', 'S2', 'Sangat puas', '2020-08-03 00:52:29'),
(46, 1, 'avvvs', '12', 'Perempuan', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Cukup puas', '2020-08-03 00:52:44'),
(47, 1, 'Daffa', '23', 'Perempuan', 'PNS/TNI/POLRI', 'SD/Sederajat', 'Cukup puas', '2020-08-03 08:52:01'),
(48, 2, 'Daffa', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 08:55:53'),
(49, 3, 'Daffa', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 08:56:20'),
(50, 4, 'Daffa', '20', 'Laki-laki', 'Wiraswasta/Usahawan', 'D3', 'Sangat puas', '2020-08-03 08:56:32'),
(51, 5, 'Daffa', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 08:56:44'),
(52, 6, 'Daffa', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Sangat puas', '2020-08-03 08:56:55');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_hukum`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hukum` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_perdata`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_perdata` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_phi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_phi` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_pidana`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_pidana` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_tipikor`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_tipikor` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_umum`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_umum` (
`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`tingkat_kepuasan` varchar(25)
,`waktu_input` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hukum`
--
DROP TABLE IF EXISTS `view_hukum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hukum`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 2) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_perdata`
--
DROP TABLE IF EXISTS `view_perdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_perdata`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 4) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_phi`
--
DROP TABLE IF EXISTS `view_phi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_phi`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 6) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pidana`
--
DROP TABLE IF EXISTS `view_pidana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pidana`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 1) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_tipikor`
--
DROP TABLE IF EXISTS `view_tipikor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tipikor`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 5) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_umum`
--
DROP TABLE IF EXISTS `view_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_umum`  AS  select `bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`waktu_input` AS `waktu_input` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 3) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id_responden`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `responden`
--
ALTER TABLE `responden`
  MODIFY `id_responden` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `responden`
--
ALTER TABLE `responden`
  ADD CONSTRAINT `responden_ibfk_1` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
