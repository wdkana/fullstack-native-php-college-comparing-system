-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2018 at 11:36 AM
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
-- Table structure for table `tbl_akreditasi`
--

CREATE TABLE `tbl_akreditasi` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `akreditasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akreditasi`
--

INSERT INTO `tbl_akreditasi` (`id`, `nama_kampus`, `fakultas`, `akreditasi`) VALUES
(1, 'lpkia', 'teknik informatika', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_profil`
--

CREATE TABLE `tbl_detail_profil` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `asal_kampus` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `foto_ktm` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `status_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_profil`
--

INSERT INTO `tbl_detail_profil` (`id`, `username`, `nim`, `asal_kampus`, `nama_lengkap`, `fakultas`, `kelas`, `no_hp`, `foto_ktm`, `instagram`, `facebook`, `twitter`, `status`, `status_kerja`) VALUES
(24, 'alsa gunadi', '123', 'lpkia', 'alsa gunadi', 'informatika', 'asd', '321798471', 'IMG_20100101_073902.jpg', 'Instagram', 'facebook', 'twitter', 'alumni', 'tidak bekerja'),
(26, 'juheri', '768907', 'lpkia', 'juheri weh', 'informatika', '3IF1', '7689', 'IMG_20100101_073902.jpg', 'ig', 'fb', 'twitter', 'alumni', 'bekerja'),
(27, 'jek', '7898867', 'inaba', 'jek weh', 'informatika', '3IF1', '09878675899', 'Haworthia-attenuata-_2_.jpg', 'ig', 'fb', 'tw', 'alumni', 'bekerja'),
(28, 'asep', '986756890', 'lpkia', 'asep kustiana', 'informatika', '3if', '0879867', 'IMG_20100101_073902.jpg', 'ig', 'fb', 'tw', 'alumni', 'tidak bekerja'),
(29, 'naon', '654678997867', 'inaba', 'saha weh', 'teknik', 'kcjvh.k', '5678987875', 'database.png', 'ig', 'fb', 'tw', 'mahasiswa', 'tidak bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`, `no_hp`, `email`, `fax`, `instagram`, `facebook`, `twitter`, `website`) VALUES
(30, 'LPKIA', 'jl soekarno hatta', 'lpkia.jpeg', 'kampus bersih', '986789', 'lpkia@mail.com', 'fax', 'instagram', 'facebook', 'twitter', 'lpkia.ac.id'),
(31, 'INABA', 'jl soekarno hatta', 'inaba.png', 'kvhlshl', '8678', 'mail@mail.com', 'oihloj;', 'vkbl;j', 'vhkjbln;', 'vhkbjkl', 'inaba.ac.id'),
(41, 'ITB', 'dimana weh', 'itb.png', 'jhkjl', '68789', 'mail@mail.com', 'hghjkl', 'jhkl', 'jhk', 'jhk', 'www.itb.ac.id'),
(42, 'Telkom University', 'jl bojongsoang', '3.-Logo-Telkom-University-Konfigurasi-Memusat.png', 'kampus terbaik', '7890867', 'mail@mail.com', 'fax', 'ig', 'fb', 'tw', 'telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
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

INSERT INTO `tbl_nilai` (`id`, `id_kampus`, `username`, `dosen`, `jurusan`, `lingkungan`, `prestasi`, `mata_kuliah`, `biaya`) VALUES
(27, 30, 'alsa', '100', '80', '60', '40', '20 ', '100'),
(28, 31, 'naon', '100', '80', '60', '60', '40 ', '80');

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
(2, 'Dosen di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(3, 'Jurusan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(4, 'Lingkungan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(5, 'Prestasi di kampus ini baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(6, 'Mata Kuliah di kampus ini baik', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Tidak Setuju', 'Sangat tidak Setuju'),
(7, 'Biaya kuliah dikampus ini sangat terjangkau', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Tidak Setuju', 'Sangat tidak Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`username`, `email`, `password`, `status`, `hak_akses`) VALUES
('admin', 'kikikiller28@yahoo.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'admin'),
('alsa gunadi', 'alsagunadi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('asep', 'asepkustiana7@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('jek', 'jek@mail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('juheri', 'juheri842@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Verifikasi', 'user'),
('naon', 'eblog47@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `username`, `nama_lengkap`, `nama_kampus`, `testimoni`) VALUES
(7, 'alsa gunadi', 'alsa gunadi', 'lpkia', '<p>kesan kesannya mantap sekali</p>\r\n'),
(8, 'juheri', 'juheri weh', 'lpkia', '<p>mantap sekali bung!!!!!!!</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
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
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
