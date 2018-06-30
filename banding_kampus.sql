-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 08:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banding_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_profil`
--

CREATE TABLE `tbl_detail_profil` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `foto_ktm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_profil`
--

INSERT INTO `tbl_detail_profil` (`id`, `username`, `nim`, `nama_lengkap`, `fakultas`, `kelas`, `no_hp`, `foto_ktm`) VALUES
(1, 'jek', '7687', 'test', 'mi', '3IF', '78', 'database.png'),
(2, 'a', '150613035', 'juheri', 'manajeman informastika', '3IF', '98789', 'database.png'),
(3, 'a', '150613035', 'juheri', 'manajeman informastika', '3IF', '98789', 'database.png'),
(4, 'a', '150613035', 'juheri', 'manajeman informastika', '3IF', '98789', 'database.png'),
(5, 'a', '150613035', 'juheri', 'manajeman informastika', '3IF', '98789', 'database.png'),
(6, 'juheri', '657890', 'JUHERI', 'manajeman informastika', '3IF1', '56789', 'database.png'),
(7, 'test', '5467890', 'yugh;j', 'tfghjkl', 'ghjvbkn', '65789', 'Haworthia-attenuata-_2_.jpg'),
(8, 'abc', '15013036', 'juheri', 'manajeman informastika', '3IF1', '76890', 'Haworthia-attenuata-_2_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_survei`
--

CREATE TABLE `tbl_detail_survei` (
  `id` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`) VALUES
(1, 'LPKIA', 'jl. Soekarno Hatta', 'k', 'Lulusannya mudah bekerja'),
(2, 'kampus lain', 'Jl. kampus lain', 'k', 'Kampusnya mahal sekali'),
(3, 'INABA', 'jl. raya', '1', 'Sehat Selalu'),
(4, 'Merdeka', 'JL. 123', 'k', 'Bersama'),
(5, 'ITB', 'jl raya', 'database.png', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  `akreditasi` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_kampus`, `akreditasi`, `dosen`, `jurusan`, `lingkungan`, `prestasi`, `mata_kuliah`, `biaya`) VALUES
(2, 2, '10', '8', '10', '9', '7', '8', '6'),
(3, 3, '7', '8', '9', '10', '9', '8', '7'),
(4, 4, '100', '80', '60', '40', '20', '100', '80'),
(5, 1, '100', '80', '60', '40', '20', '40', '60'),
(6, 5, '100', '100', '100', '100', '100', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pil1` varchar(255) NOT NULL,
  `pil2` varchar(255) NOT NULL,
  `pil3` varchar(255) NOT NULL,
  `pil4` varchar(255) NOT NULL,
  `pil5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `pertanyaan`, `pil1`, `pil2`, `pil3`, `pil4`, `pil5`) VALUES
(1, 'Berapa Akreditasi di Kampus ini?', 'A', 'B', 'C', 'D', 'E'),
(2, 'Dosen di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(3, 'Jurusan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(4, 'Lingkungan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(5, 'Prestasi di kampus ini baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(6, 'Mata Kuliah di kampus ini baik', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Kurang Setuju', 'Sangat tidak Setuju'),
(7, 'Biaya kuliah dikampus ini sangat terjangkau', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Kurang Setuju', 'Sangat tidak Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`username`, `email`, `password`) VALUES
('juheri', 'juheri842@gmail.com', '123'),
('test', 'test@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survei`
--

CREATE TABLE `tbl_survei` (
  `id` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_survei`
--
ALTER TABLE `tbl_detail_survei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_survei`
--
ALTER TABLE `tbl_survei`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_detail_survei`
--
ALTER TABLE `tbl_detail_survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_survei`
--
ALTER TABLE `tbl_survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
