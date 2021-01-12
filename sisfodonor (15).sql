-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 02:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfodonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_donor`
--

CREATE TABLE `daftar_donor` (
  `no_daftar` varchar(20) NOT NULL,
  `nama_kgt` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `usia` int(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `donor_terakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_donor`
--

INSERT INTO `daftar_donor` (`no_daftar`, `nama_kgt`, `nama`, `no_ktp`, `tempatlahir`, `tanggallahir`, `usia`, `jenis_kelamin`, `alamat`, `no_telp`, `donor_terakhir`) VALUES
('PD06012020001', 'Donor Darah', 'Funny Tampubolonn', 3312233333412435, 'Sumatera Utara', '1999-05-17', 20, 'Perempuan', 'Cijerokaso', '+6289765434671', '2019-07-04'),
('PD06012020002', 'Donor Darah', 'Indriyani Syafitri', 3312233333419878, 'Kalimantan ', '1999-04-26', 20, 'Perempuan', 'Cimahi', '+6289765412345', '2019-07-04'),
('PD06012020003', 'Donor Darah', 'Magdalena Hutapea', 3312233333419956, 'Sumatera Utara', '2000-01-06', 20, 'Perempuan', 'Sariasih ', '+6289765489771', '2019-07-04'),
('PD06012020004', 'Donor Darah', 'Yudha Andira', 3312233667612345, 'Bandung', '1999-07-07', 20, 'Laki-laki', 'Cimahi', '+6289765654321', '2019-07-04'),
('PD06012020005', 'Donor Darah', 'Fabiyan Alhakim', 3312233309876545, 'Jakarta', '1998-09-09', 20, 'Laki-laki', 'Cimahi', '+6289646734529', '2019-04-04'),
('PD06012020006', 'Donor Sehat', 'Indriyani Syafitri', 3312233333412345, 'Bandung', '1999-04-26', 20, 'Perempuan', 'Cimahi', '+6283862345778', '2019-04-04'),
('PD22012020007', 'Donor Sehat', 'Ucok', 3312233333412095, 'Bandung', '1999-02-03', 20, 'Laki-laki', 'Jalan Sariasih No 146', '+6287656775465', '2020-01-02'),
('PD28012020008', 'Donor Sejati', 'Rara', 3312233333412355, 'Banyumas', '1999-12-26', 19, 'Perempuan', 'Jalan Sariasih No 147', '+6289765434690', '2020-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `no` int(11) NOT NULL,
  `nama_kgt` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`no`, `nama_kgt`, `tempat`, `alamat`, `tanggal`, `waktu`) VALUES
(2, 'Donor Sejati', 'Politeknik Pos Indonesia', 'Jalan Sariasih No 54 Sarijadi, Bandung', '2018-07-05', '08.00-11.00'),
(3, 'Donor Darah Untuk Masyarakat', 'Auditorium Politeknik Pos Indonesia', 'Jl.Terusan Sariasih No.54 Sarijadi', '2019-01-03', '07.00-12.00'),
(4, 'Donor Darah Sehat', 'Lap.Parkir Politeknik Pos Indonesia', 'Jalan Sariasih No 54 Sarijadi, Bandung', '2019-04-04', '13.00-18.00'),
(5, 'Donor Sehat', 'Auditorium Politeknik Pos Indonesia', 'Jalan Sariasih No 54', '2019-07-04', '10.00-12.00'),
(6, 'Donor Darah', 'Auditorium Politeknik Pos Indonesia', 'Jalan Sariasih Bandung', '2020-01-02', '10.00-12.00');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `no` int(11) NOT NULL,
  `nama_kgt` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `no_pendaftar` varchar(20) NOT NULL,
  `hb` varchar(10) NOT NULL,
  `bb` varchar(10) NOT NULL,
  `tekanan_darah` varchar(10) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`no`, `nama_kgt`, `nama_petugas`, `tanggal`, `no_pendaftar`, `hb`, `bb`, `tekanan_darah`, `golongan_darah`, `status`, `keterangan`) VALUES
(2, 'Donor Darah', 'Rara Az Zahra', '2020-01-02', 'PD06012020001', '12,5', '46', '80/100', 'O', 'Diterima', ''),
(3, 'Donor Darah', 'Farah Faizah', '2020-01-02', 'PD06012020002', '8', '48', '80/120', 'A', 'Ditolak', 'HB terlalu rendah'),
(4, 'Donor Darah', 'Farah Faizah', '2020-01-02', 'PD06012020003', '12,5', '48', '80/120', 'AB', 'Diterima', NULL),
(5, 'Donor Darah', 'Farah Faizah', '2020-01-02', 'PD06012020004', '12,5', '62', '80/120', 'B', 'Diterima', ''),
(6, 'Donor Darah', 'Farah Faizah', '2020-01-02', 'PD06012020005', '12,5', '62', '80/120', 'A', 'Diterima', ''),
(7, 'Donor Sehat', 'Farah Faizah', '2020-01-08', 'PD06012020006', '12,5', '48', '80/120', 'O', 'Diterima', 'Donor Darah'),
(9, 'Donor Sehat', 'Farah Faizah', '2020-01-08', 'PD06012020005', '12,5', '48', '80/100', 'A', 'Diterima', 'Mencukupi'),
(14, 'Donor Sejati', 'Farah Faizah', '2020-01-02', 'PD22012020007', '12,5', '46', '80/120', 'B', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `no` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`no`, `nama`, `tempatlahir`, `tanggallahir`, `jenis_kelamin`, `alamat`, `tugas`) VALUES
('PTG001', 'Farah Faizah', 'Jakarta', '1999-10-09', 'Perempuan', 'Jalan Sariasih No. 151, Sarijadi, Kota Bandung', 'Petugas Pengecek'),
('PTG002', 'Rara Az Zahra', 'Bandung', '1998-08-08', 'Perempuan', 'Jalan Sariasih II No 176, Sarijadi, Bandung', 'Petugas Pengecek');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','dokter','pmi') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `id_session`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin123@gmail.com', 'admin', ''),
(2, 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 'dokter1@gmail.com', 'dokter', ''),
(3, 'pmi', '995f0d99ad310ee6ba78be2ce2e84e3f', 'pmi1@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_donor`
--
ALTER TABLE `daftar_donor`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
