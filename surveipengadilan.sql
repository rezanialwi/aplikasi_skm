-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 07:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surveipengadilan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
  `id_bagian` int(10) NOT NULL,
  `nama_bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
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
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`pengguna_id` int(5) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','user') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'Pengadilan Negeri Banjarmasin', 'pn_bjm@yahoo.com', 'admin', 'd4e3e9390b0843aec8b6cdd428254bb8', 'admin', 1),
(2, 'staff', '', 'staff', '1253208465b1efa876f982d8a9e73eef', 'user', 1),
(3, 'Staff Hukum', 'hukumpnbjm@yahoo.com', 'hukum', 'a97db6eb42f4f856871b04531bd29601', 'admin', 1),
(4, 'Staff Pidana', 'pidanabjm@gmail.com', 'pidana', '8022e0077417912a7f74829c64eb1ffc', 'user', 1),
(5, 'Staff Perdata', '', 'perdata', 'fd9b9520a01ba65f0afb0d6620436ea0', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE IF NOT EXISTS `responden` (
`id_responden` int(20) NOT NULL,
  `id_bagian` int(10) NOT NULL,
  `nama_responden` varchar(50) NOT NULL,
  `umur_responden` varchar(3) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan_responden` varchar(30) NOT NULL,
  `pendidikan_responden` varchar(30) NOT NULL,
  `saran` text NOT NULL,
  `tingkat_kepuasan` varchar(25) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id_responden`, `id_bagian`, `nama_responden`, `umur_responden`, `jenis_kelamin`, `pekerjaan_responden`, `pendidikan_responden`, `saran`, `tingkat_kepuasan`, `tanggal`) VALUES
(35, 2, 'Daffal togar', '20', 'Laki-laki', 'PNS/TNI/POLRI', 'SD/Sederajat', 'Alhamdulillah', 'Tidak puas', '2020-12-02'),
(36, 2, 'Risandi', '20', 'Laki-laki', 'PNS/TNI/POLRI', 'SMP/Sederajat', 'Alhamdulillah', 'Tidak puas', '2020-11-24'),
(37, 1, 'Jaelani', '30', 'Laki-laki', 'Pegawai/Swasta', 'SD/Sederajat', 'Bisa jua diperbaiki sistemnya kalo', 'Sangat puas', '2020-11-24'),
(38, 6, 'Aldo Cristian', '21', 'Laki-laki', 'Pegawai/Swasta', 'SMP/Sederajat', 'Alhamdulillah aman ja sih', 'Cukup puas', '2020-12-16'),
(39, 5, 'Fajar Normiyanto', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMP/Sederajat', 'Sidang sedikit terlambat', 'Cukup puas', '2020-12-16'),
(49, 3, 'Fadli Ramadhan', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMA/Sederajat', 'Alhamdulillah aman', 'Sangat puas', '2020-12-16'),
(50, 4, 'Faisal Toni', '21', 'Laki-laki', 'Wiraswasta/Usahawan', 'D3', 'Alhamdulillah', 'Sangat puas', '2020-12-01'),
(52, 6, 'Robbit Ribiyyun', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', '', 'Sangat puas', '2020-12-16'),
(53, 1, 'Rezani', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Pelayanan Bagus                               \r\n                                ', 'Sangat Puas', '2020-12-16'),
(54, 5, 'Stefanus', '20', 'Laki-laki', 'Lain-lain', 'D3', 'Terimkasih untuk layanan anda                               \r\n                                ', 'Cukup Puas', '2020-11-24'),
(55, 5, 'Sesi', '20', 'Perempuan', 'Pelajar/Mahasiswa', 'S1', 'Bisa diperbaiki lagi sistemnya                               \r\n                                ', 'Tidak Puas', '2020-12-19'),
(56, 3, 'Rino', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMA/Sederajat', ' Bisa lah                              \r\n                                ', 'Sangat Puas', '2020-12-16'),
(57, 3, 'Agus', '20', 'Laki-laki', 'Pegawai/Swasta', 'SMA/Sederajat', ' Bisa lah                              \r\n                                ', 'Sangat Puas', '2020-12-16'),
(58, 4, 'Syahreza', '20', 'Laki-laki', 'Pegawai/Swasta', 'D3', 'Sidang tepat waktu      ', 'Sangat puas', '2020-12-01'),
(59, 2, 'Zakir', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'D3', 'ss                               \r\n                                ', 'Tidak Puas', '2020-12-02'),
(64, 1, 'Iqbal', '21', 'Laki-laki', 'Wiraswasta/Usahawan', 'SD/Sederajat', 'tes                               \r\n                                ', 'Sangat Puas', '2020-12-16'),
(65, 1, 'Alphi', '22', 'Laki-laki', 'PNS/TNI/POLRI', 'SMP/Sederajat', '                           \r\n                                ', 'Sangat Puas', '2020-12-16'),
(79, 5, 'Dewi', '31', 'Perempuan', 'PNS/TNI/POLRI', 'S1', 'Alhamdulillah pelayanan sangat baik                               \r\n                                ', 'Sangat Puas', '2020-12-02'),
(80, 2, 'Andre', '28', 'Laki-laki', 'Pegawai/Swasta', 'S1', 'Pelayanannya sangat bagus                                                               ', 'Sangat puas', '2020-12-09'),
(81, 1, 'Agus Setiadi', '30', 'Laki-laki', 'Pegawai/Swasta', 'S1', 'Pelayanan Sangat Bagus                               \r\n                                ', 'Cukup Puas', '2020-12-18'),
(82, 3, 'Gusti Abdurahman', '21', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Untuk permohonan informasi bisa lebih cepat', 'Cukup Puas', '2020-12-19'),
(83, 1, 'Firja Ananda', '20', 'Laki-laki', 'Pelajar/Mahasiswa', 'SMA/Sederajat', 'Pelayanan PTSP sangat bagus dan baik                               \r\n                                ', 'Sangat Puas', '2020-12-19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_hukum`
--
CREATE TABLE IF NOT EXISTS `view_hukum` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_perdata`
--
CREATE TABLE IF NOT EXISTS `view_perdata` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_phi`
--
CREATE TABLE IF NOT EXISTS `view_phi` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pidana`
--
CREATE TABLE IF NOT EXISTS `view_pidana` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_tipikor`
--
CREATE TABLE IF NOT EXISTS `view_tipikor` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_umum`
--
CREATE TABLE IF NOT EXISTS `view_umum` (
`id_responden` int(20)
,`nama_bagian` varchar(20)
,`nama_responden` varchar(50)
,`umur_responden` varchar(3)
,`jenis_kelamin` varchar(10)
,`pekerjaan_responden` varchar(30)
,`pendidikan_responden` varchar(30)
,`saran` text
,`tingkat_kepuasan` varchar(25)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Structure for view `view_hukum`
--
DROP TABLE IF EXISTS `view_hukum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hukum` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 2);

-- --------------------------------------------------------

--
-- Structure for view `view_perdata`
--
DROP TABLE IF EXISTS `view_perdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_perdata` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 4);

-- --------------------------------------------------------

--
-- Structure for view `view_phi`
--
DROP TABLE IF EXISTS `view_phi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_phi` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 6);

-- --------------------------------------------------------

--
-- Structure for view `view_pidana`
--
DROP TABLE IF EXISTS `view_pidana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pidana` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 1);

-- --------------------------------------------------------

--
-- Structure for view `view_tipikor`
--
DROP TABLE IF EXISTS `view_tipikor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_tipikor` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 5);

-- --------------------------------------------------------

--
-- Structure for view `view_umum`
--
DROP TABLE IF EXISTS `view_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_umum` AS select `responden`.`id_responden` AS `id_responden`,`bagian`.`nama_bagian` AS `nama_bagian`,`responden`.`nama_responden` AS `nama_responden`,`responden`.`umur_responden` AS `umur_responden`,`responden`.`jenis_kelamin` AS `jenis_kelamin`,`responden`.`pekerjaan_responden` AS `pekerjaan_responden`,`responden`.`pendidikan_responden` AS `pendidikan_responden`,`responden`.`saran` AS `saran`,`responden`.`tingkat_kepuasan` AS `tingkat_kepuasan`,`responden`.`tanggal` AS `tanggal` from (`responden` join `bagian` on((`responden`.`id_bagian` = `bagian`.`id_bagian`))) where (`responden`.`id_bagian` = 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
 ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
 ADD PRIMARY KEY (`id_responden`), ADD KEY `id_bagian` (`id_bagian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `pengguna_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
MODIFY `id_responden` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `responden`
--
ALTER TABLE `responden`
ADD CONSTRAINT `responden_ibfk_1` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
