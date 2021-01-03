-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 11:14 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bln` int(10) NOT NULL,
  `nama_bln` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bln`, `nama_bln`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_cat` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_bln` int(10) NOT NULL,
  `id_hri` int(10) NOT NULL,
  `id_tgl` int(10) NOT NULL,
  `isi_cat` longtext NOT NULL,
  `status_cat` enum('Menunggu','Dikonfirmasi','Ditolak') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_cat`, `id_user`, `id_bln`, `id_hri`, `id_tgl`, `isi_cat`, `status_cat`) VALUES
(71, 8, 12, 3, 16, 'test', 'Menunggu'),
(72, 10, 12, 4, 17, 'izin gak masuk bu', 'Menunggu'),
(67, 11, 12, 5, 4, 'ini edo lagi nyoba', 'Dikonfirmasi'),
(68, 11, 12, 5, 4, 'ini edo 2', 'Dikonfirmasi'),
(69, 8, 12, 5, 4, 'firdan', 'Dikonfirmasi'),
(70, 8, 12, 7, 6, 'izin test ini fird', 'Menunggu'),
(66, 11, 12, 5, 4, 'aaaaaaaaaaaaaa', 'Dikonfirmasi'),
(65, 11, 12, 5, 4, 'aaaaaaaaaa', 'Dikonfirmasi'),
(64, 8, 12, 5, 4, 'sss', 'Dikonfirmasi'),
(41, 2, 1, 7, 17, 'Testing 2nd Migrations To MySQLi', ''),
(45, 4, 1, 2, 19, 'Senin bersihin Ram trus install ulang', ''),
(46, 5, 2, 5, 19, 'Hemmm tes aja deh :D Hahaha :*', 'Dikonfirmasi'),
(47, 3, 2, 5, 19, 'Terimakasih Untuk hari ini :D\\r\\nTerimakasih atas semua kebaikan ini :D', 'Menunggu'),
(48, 3, 2, 5, 19, 'Tes fix Bug :D\r\nSemangaaatt :D \'\'\" <- tesss', 'Menunggu'),
(49, 3, 11, 3, 25, 'kemaren lupa izin gk masuk', 'Dikonfirmasi'),
(50, 3, 11, 5, 27, 'test', 'Menunggu'),
(51, 4, 11, 5, 27, 'izin kmaren gk masuk pak', 'Dikonfirmasi'),
(52, 2, 11, 5, 27, 'maaf telat masuk', 'Menunggu'),
(53, 8, 11, 5, 27, 'maaf telat 15 menit masuk bu', 'Dikonfirmasi'),
(54, 9, 11, 7, 29, 'test', 'Dikonfirmasi'),
(55, 9, 11, 7, 29, 'izin lagi', 'Dikonfirmasi'),
(56, 8, 11, 7, 29, 'maaf telat banget', ''),
(57, 8, 12, 2, 1, 'maaf bu hari ini tidak bisa masuk', 'Dikonfirmasi'),
(58, 12, 12, 2, 1, 'maaf tidak bisa masuk hari ini', 'Dikonfirmasi'),
(59, 8, 12, 5, 4, 'test', 'Dikonfirmasi'),
(63, 11, 12, 5, 4, 'ini edo', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id_absen` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `id_bln` int(10) NOT NULL,
  `id_hri` int(10) NOT NULL,
  `id_tgl` int(10) NOT NULL,
  `jam_msk` varchar(50) NOT NULL,
  `st_jam_msk` enum('Menunggu','Dikonfirmasi','Ditolak') NOT NULL,
  `jam_klr` varchar(50) NOT NULL,
  `st_jam_klr` enum('Belum Absen','Menunggu','Dikonfirmasi','Ditolak') NOT NULL,
  `jam_izin` varchar(20) NOT NULL,
  `st_jam_izin` varchar(50) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id_absen`, `id_user`, `id_bln`, `id_hri`, `id_tgl`, `jam_msk`, `st_jam_msk`, `jam_klr`, `st_jam_klr`, `jam_izin`, `st_jam_izin`, `kode_kelas`, `keterangan`) VALUES
(194, '10', 12, 5, 18, '15.02 WIB', 'Dikonfirmasi', '15.02 WIB', 'Dikonfirmasi', '', '', 'PPW B', 'Absen'),
(193, '8', 12, 5, 18, '15.02 WIB', 'Dikonfirmasi', '15.02 WIB', 'Dikonfirmasi', '', '', 'PPW B', 'Absen'),
(190, '8', 12, 4, 17, '20.26 WIB', 'Dikonfirmasi', '20.26 WIB', 'Dikonfirmasi', '', '', 'RPL B', 'Absen'),
(191, '17', 12, 4, 17, '20.27 WIB', 'Dikonfirmasi', '20.27 WIB', 'Dikonfirmasi', '', '', 'RPL B', 'Absen'),
(192, '16', 12, 4, 17, '20.27 WIB', 'Dikonfirmasi', '20.27 WIB', 'Dikonfirmasi', '', '', 'RPL B', 'Absen'),
(189, '10', 12, 4, 17, '20.26 WIB', 'Dikonfirmasi', '20.26 WIB', 'Dikonfirmasi', '20.26 WIB', 'Dikonfirmasi', 'RPL B', 'Izin'),
(188, '11', 12, 4, 17, '20.26 WIB', 'Dikonfirmasi', '20.26 WIB', 'Dikonfirmasi', '', '', 'RPL B', 'Absen'),
(195, '11', 12, 5, 18, '15.06 WIB', 'Dikonfirmasi', '15.06 WIB', 'Dikonfirmasi', '', '', 'PPW B', 'Absen');

-- --------------------------------------------------------

--
-- Table structure for table `detail_admin`
--

CREATE TABLE `detail_admin` (
  `id_user` int(4) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `alamat_adm` varchar(150) NOT NULL,
  `jk_adm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_admin`
--

INSERT INTO `detail_admin` (`id_user`, `nama_adm`, `alamat_adm`, `jk_adm`) VALUES
(14, 'Daffa Aditya Rahman', 'jalan Bintaro Permai 3', 'L'),
(15, 'dani', 'Jalan pasuruan disana No 9', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pb`
--

CREATE TABLE `detail_pb` (
  `id_user` int(10) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `alamat_dsn` varchar(150) NOT NULL,
  `jk_dsn` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pb`
--

INSERT INTO `detail_pb` (`id_user`, `name_user`, `alamat_dsn`, `jk_dsn`) VALUES
(7, 'daffa aditya', 'jalan swadaya', 'L'),
(13, 'Siti Ummi Masruroh', 'jalan pamulang No78', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_user` int(10) NOT NULL,
  `nis_user` varchar(100) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `sklh_user` varchar(255) NOT NULL,
  `jk_user` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id_user`, `nis_user`, `name_user`, `sklh_user`, `jk_user`) VALUES
(10, '1119091000035', 'Muhammad Syahrul Majid', 'Jalan pasuruan disana No 9', 'L'),
(8, '1119091000045', 'Firdan Mildani', 'Jalan sukabimu maju, No 15', 'L'),
(11, '1119091000041', 'Ravi Edho Nugraha', 'jalan subur banget No99', 'L'),
(16, '11190910000042', 'Fajar Mukhlis', 'jalan subur banget No99', 'L'),
(17, '11190910000035', 'Muhammad Hugo', 'jalan pamulang No7821', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id_hri` int(10) NOT NULL,
  `nama_hri` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hri`, `nama_hri`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum\'at'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(4) NOT NULL,
  `kode_kls` varchar(15) NOT NULL,
  `id_mk` varchar(5) NOT NULL,
  `nama_kls` varchar(70) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `jadwal_hari` varchar(30) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kode_kls`, `id_mk`, `nama_kls`, `ruangan`, `jadwal_hari`, `jam`) VALUES
('2', 'ADS B', '1', 'Analisis dan Desain Sistem - B', 'Zoom', 'Monday', '13.00'),
('4', 'RPL B', '2', 'Rekayasa Perangkat Lunak-B', 'Zoom', 'Thursday', '07:30'),
('5', 'PPW B', '6', 'Pemrograman WEB-B', 'Zoom', 'Friday', '08:30');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_mk` int(4) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `nama_mk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_mk`, `kode_mk`, `nama_mk`) VALUES
(1, 'inf121', 'Analisis dan Desain Sistem'),
(2, 'inf122', 'Rekayasa Perangkat Lunak'),
(6, 'inf123', 'Pemrograman WEB');

-- --------------------------------------------------------

--
-- Table structure for table `referensi_kls`
--

CREATE TABLE `referensi_kls` (
  `id_rkls` int(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `lvl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referensi_kls`
--

INSERT INTO `referensi_kls` (`id_rkls`, `id_kelas`, `id_user`, `lvl`) VALUES
(5, '2', '13', 'pb'),
(13, '4', '13', 'pb'),
(14, '5', '7', 'pb'),
(18, '2', '10', 'sw'),
(19, '2', '8', 'sw'),
(20, '2', '11', 'sw'),
(21, '2', '16', 'sw'),
(22, '2', '17', 'sw'),
(23, '4', '10', 'sw'),
(24, '4', '8', 'sw'),
(25, '4', '11', 'sw'),
(26, '4', '16', 'sw'),
(27, '4', '17', 'sw'),
(28, '5', '10', 'sw'),
(29, '5', '8', 'sw'),
(30, '5', '11', 'sw'),
(31, '5', '16', 'sw'),
(32, '5', '17', 'sw');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `id_tgl` int(10) NOT NULL,
  `nama_tgl` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal`
--

INSERT INTO `tanggal` (`id_tgl`, `nama_tgl`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `level_user` enum('sw','pb','adm') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `pwd_user`, `level_user`) VALUES
(13, 'umi@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'pb'),
(11, 'edoedo@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sw'),
(7, 'dafdit07@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'pb'),
(14, 'daffadit@yahoo.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'adm'),
(10, 'majid@yahoo.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sw'),
(8, 'firdmild@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sw'),
(15, 'A@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'adm'),
(16, 'fajar@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sw'),
(17, 'h@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'sw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bln`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `detail_admin`
--
ALTER TABLE `detail_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `detail_pb`
--
ALTER TABLE `detail_pb`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_user`,`nis_user`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hri`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `referensi_kls`
--
ALTER TABLE `referensi_kls`
  ADD PRIMARY KEY (`id_rkls`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id_tgl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_mk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `referensi_kls`
--
ALTER TABLE `referensi_kls`
  MODIFY `id_rkls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id_tgl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
