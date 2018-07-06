-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 01:54 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
(1, 'lpkia', 'Teknik Informatika', 'A'),
(2, 'lpkia', 'Sistem Informatika', 'A'),
(3, 'Politeknik Komputer LPKIA', 'Teknik Informatika', 'B'),
(4, 'STIE Inaba', 'Manajemen S1', 'B');

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
(33, 'yuzakki', '150613044', 'Politeknik Komputer LPKIA', 'Muhammad Yuzakki Trisgianto', 'Teknik Informatika', '3IF-01', '081910780267', '0fe311eba0c1ac03b94b2b7ff08d202f.jpg', '@muhammadyuzakki', 'Muhammad Yuzakki Trisgianto', '', 'mahasiswa', 'tidak bekerja'),
(34, 'alsa', '150613009', 'STIE Inaba', 'Alsa Gunadi', 'Manajemen', '3MNJ-01', '081927364517', 'Android.png', '', '', '', 'alumni', 'bekerja'),
(35, 'fahmi', '150613021', 'Politeknik Komputer LPKIA', 'Fahmi Muhammad Sofyan', 'Manajemen Informatika', '3IF-02', '08976416537', 'Android.png', '', '', '', 'alumni', 'bekerja'),
(36, 'Asep', '150613013', 'Institut Teknologi Bandung', 'Asep Kustiana', 'Teknik Metalurgi', '3IF-05', '081425267337', 'M50_Black_1.png', '  ', '  ', '  ', 'mahasiswa', 'tidak bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id`, `fakultas`, `nama_kampus`) VALUES
(1, 'Manajemen Informatika', 'lpkia'),
(2, 'Administrasi Bisnis', 'lpkia'),
(3, 'Manajemen Informatika', '<br /><b>Notice</b>:  Undefined variable: result in <b>C:xampphtdocsandingkampususersadminfakultas.php</b> on line <b>226</b><br />'),
(4, 'Manajemen', '<br /><b>Notice</b>:  Undefined variable: result in <b>C:xampphtdocsandingkampususersadminfakultas.php</b> on line <b>226</b><br />');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawab_kampus`
--

CREATE TABLE `tbl_jawab_kampus` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
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
(43, 'Politeknik Komputer LPKIA', 'Jl. Soekarno-Hatta No. 456 40266', 'LPKIA.png', 'Lulusannya Mudah Bekerja dan Bersertifikasi Internasional', '0227564283', 'sekretariat@lpkia.ac.id', '7564282', '@lpkia_official', 'LPKIA', '@JY_LPKIA', 'lpkia.ac.id'),
(44, 'STIE Inaba', 'Jl. Soekarno-Hatta No. 448 40266', 'Logo-Inaba.png', 'Menjadi Sekolah Tinggi Ilmu Ekonomi yang unggul pada bidang Akuntansi dan Manajemen serta Kewirausahaan.', '02227563919', 'humasinaba448@gmail.com', '', '@humas_inaba', 'Humasinaba', '@humasINABA', 'inaba.ac.id'),
(45, 'Institut Teknologi Bandung', 'Jl. Ganesha No. 10 40132', 'Logo_Institut_Teknologi_Bandung.png', 'Kemajuan dalam keselarasan', '0222530689', 'info@sbm-itb.ac.id', '0222508519', '@itb1920', 'institutteknologibandung', '@itbofficial', 'itb.ac.id'),
(46, 'Universitas Padjadjaran', 'Jln. Raya Bandung-Sumedang Km. 21 Jatinangor, Kab. Sumedang, 45363', '888px-Logo_Unpad_Transparent.png', 'Universitas Padjadjaran RESPECT (Responsibility, Excellence, Scientific rigor, Professionalism, Encouragement, Creativity, Trust)', '02284288888', 'humas@unpad.ac.id', '022 842 88898', '@universitaspadjadjaran', 'unpad', '@unpad', 'unpad.ac.id'),
(47, 'Universitas Pasundan', 'Jl. Lengkong Besar No. 68 40251', 'LOGO UNPAS.png', 'Pengkuh Agamana, Luhung Elmuna, Jembar Budayana', '0224205945', 'humas@unpas.ac.id', '4262226', '@infounpas', 'universitaspasundan', '@unpas_bandung', 'unpas.ac.id'),
(48, 'Universitas Katolik Parahyangan', 'Jl. Ciumbuleuit No.94, Bandung, Jawa Barat, Indonesia 40141 ', 'Univ Katholik Parahlayang.png', '', '0222032655', 'humas@unpar.ac.id', '0222031110 ', '@unparofficial', 'unparofficial', '@unparofficial', 'unpar.ac.id'),
(49, 'Politeknik Negeri Bandung', 'Jl. Gegerkalong Hilir, Ds. Ciwaruga Kotak Pos 1234 Bandung 40012', '250117060345-polban.png', 'Assuring Your Future', '0222013789', 'polban@polban.ac.id', '0222013889', '@politekniknegeribandung', 'polban', '@polban_news', 'www.polban.ac.id'),
(50, 'Universitas Pendidikan Indonesia', 'Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat', 'Logo Universitas Pendidikan Indonesia (UPI).png', 'A Leading and Outstanding University (Universitas Pelopor dan Unggul)', '0222013163', 'layanan-tik@upi.edu', '0222013651', '@infoupibandung', 'https://web.facebook.com/Universitas-Pendidikan-Indonesia-319224464854897/?ref=br_rs', '@infoupibandung', 'www.upi.edu'),
(51, 'Institut Teknologi Nasional', 'Jl. PKH. Mustopha No. 23, Neglasari, Cibeunying Kaler, Kota Bandung, Jawa Barat 40124', 'institut teknologi nasional bandung.png', 'Menggali Potensi, Membina Prestasi', '0227272215', 'humas@itenas.ac.id', '0227202892', '@itenas.official', 'Itenas.bandung', '@itenascom', 'itenas.ac.id'),
(52, 'Politeknik Piksi Ganesha', 'Jl. Jendral Gatot Subroto 301, Maleer, Batununggal, Kota Bandung, Jawa Barat 40274', 'logo politeknik piksi ganesha bandung.png', 'Menciptakan SDM yang unggul, terampil, dan mudah bekerja.', '02287340030', 'piksionline@yahoo.com', '02287340086', '@piksi_ganesha', 'ppgresmi', '@piksi_indonesia', 'piksi-ganesha-online.ac.id'),
(53, 'Telkom University', 'Jl. Telekomunikasi No. 01, Terusan Buah Batu, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40257', 'Logo_Tel-U.svg.png', 'Creating the Future', '0227564108', 'info@telkomuniversity.ac.id', '', '@telkomuniversity', 'telkomuniversity', '@teluniversity', 'telkomuniversity.ac.id'),
(54, 'Universitas Langlangbuana', 'Jl. Karapitan No.116, Cikawao, Lengkong, Cikawao, Lengkong, Kota Bandung, Jawa Barat 40261', 'Logo Universitas Langlangbuana Bandung png 300 dpi.png', '', '0224218084', 'info@unla.ac.id', '0224237144', '', '', '', 'http://www.unla.ac.id/'),
(55, 'STMIK LIKMI', 'Jl. Ir. H.Djuanda No.96, Lebakgede, Coblong, Kota Bandung, Jawa Barat 40132', 'login.jpg', '', '0222502121', '', '', '', '', '', 'http://www.likmi.ac.id'),
(56, 'Institut Seni Budaya Indonesia Bandung', 'Jl. Buah Batu No.212, Cijagra, Lengkong, Kota Bandung, Jawa Barat 40265', 'LOGO-ISBI-VECTOR-v1.png', '', '', '', '', '', '', '', 'http://www.isbi.ac.id/'),
(57, 'Universitas Islam Bandung', 'Jl. Tamansari No. 20, 40116 Bandung', 'Logo_UNISBA_2018.png', '', '', '', '', '', '', '', 'www.unisba.ac.id'),
(58, 'Universitas Islam Negeri Sunan Gunung Djati Bandung', 'Jl. A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614', 'UIN BANDUNG LOGO 1.png', '', '', '', '', '', '', '', 'www.uinsgd.ac.id'),
(59, 'Universitas Kebangsaan', 'Jl. Terusan Halimun No.37, Lkr. Sel., Lengkong, Kota Bandung, Jawa Barat 40263', 'Logo_universitas_kebangsaan_(universitaskebangsaan.ac.id).png', '', '', '', '', '', '', '', 'www.universitaskebangsaan.ac.id'),
(60, 'Universitas Informatika dan Bisnis Indonesia (UNIBI)', 'Jl Soekarno-Hatta No. 643, Sukapura, Kiaracondong, Kota Bandung, Jawa Barat 40614', '041046.png', '', '0227320841', '', '', '', '', '', 'www.unibi.ac.id/'),
(61, 'Universitas Jendral Achmad Yani', 'Kamus 1   : Jl. Terusan Jenderal Sudirman Cimahi    Kampus 2 : Jl. Terusan Jenderal Gatot Subroto Bandung', 'LOGO_UNJANI.png', '', '226610223', '', '022-6610223', '', '', '', 'pmb.unjani.ac.id'),
(62, 'Universitas Sangga Buana', 'Jl. PHH Mustofa (Suci) No.68', 'universitas sangga buana.png', '', '087823328506', '', '', '', '', '', 'sanggabuana.ac.id');

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
(30, 43, 'yuzakki', '80', '80', '80', '100', '60 ', '100'),
(31, 44, 'alsa', '60', '80', '100', '80', '80 ', '80'),
(32, 43, 'fahmi', '60', '80', '80', '100', '80 ', '80');

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
('alsa', 'alsagunadi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('Asep', 'AsepKustiana@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('fahmi', '150613021fahmi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Verifikasi', 'user'),
('yuzakki', 'muhammadyuzakki@gmail.com', '7604668480b7a804d8c42387045a5cf3', 'Verifikasi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanya_kampus`
--

CREATE TABLE `tbl_tanya_kampus` (
  `id` int(11) NOT NULL,
  `email_penanya` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'alsa', 'Alsa Gunadi', 'STIE Inaba', '<p>Mantap Jiwa. Mata kuliah yang diajarkan dengan dunia kerja yang saya jalani sesuai dan berguna bagi diri saya juga kepentingan perusahaan.</p>\r\n'),
(10, 'fahmi', 'Fahmi Muhammad Sofyan', 'Politeknik Komputer LPKIA', '<p>Kampus ini memberikan banyak pengalaman yang tak bisa dilupakan. Karena itu, saya sangat merekomendasikan pada kalian untuk kuliah di kampus kami, Kampus Bersih LPKIA.</p>\r\n');

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
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id`, `username`, `nama_kampus`, `tanggal`, `judul`, `ulasan`, `tag`) VALUES
(1, 'yuzakki', 'Politeknik Komputer LPKIA', '2018-07-07', 'Kebersihan Kampus LPKIA', '<p>Kampus LPKIA bersih, saya sangat senang dan nyaman belajar disini.</p>\r\n', '#kebersihan #lpkia'),
(2, 'alsa', 'STIE Inaba', '2018-07-07', 'Pengalaman Belajar di STIE Inaba', '<p>Selama saya belajar disini, saya memiliki banyak relasi dan juga ilmu yang baru dan bermanfaat di dunia kerja.</p>\r\n', '#pengalaman #relasi #duniakerja #stieinaba'),
(3, 'fahmi', 'Politeknik Komputer LPKIA', '2018-07-07', 'Manfaat PMM', '<p>Dengan PMM, banyak sekali bantuan yang diberikan dalam memenuhi kebutuhan saya. Terima kasih PMM.</p>\r\n', '#PMM #lpkia');

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
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jawab_kampus`
--
ALTER TABLE `tbl_jawab_kampus`
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
-- Indexes for table `tbl_tanya_kampus`
--
ALTER TABLE `tbl_tanya_kampus`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jawab_kampus`
--
ALTER TABLE `tbl_jawab_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_tanya_kampus`
--
ALTER TABLE `tbl_tanya_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
