-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 06:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikmlapan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban1` varchar(50) NOT NULL,
  `jawaban2` varchar(50) NOT NULL,
  `jawaban3` varchar(50) NOT NULL,
  `jawaban4` varchar(50) NOT NULL,
  `id_soalj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `id_soalj`) VALUES
(220, 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 247),
(221, 'Sangat Lama(3-4 Bulan)', 'Lama(1-2 Bulan)', 'Cepat(Kurang Lebih 30 Hari)', 'Sangat Cepat (Kurang dari 20 Hari)', 248),
(222, 'Cuek', 'Cukup', 'Baik', 'Sangat Baik', 249),
(223, 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 250),
(224, 'Sulit', 'Cukup', 'mudah', 'Sangat Mudah', 251),
(228, 'Kurang tepat', 'Cukup', 'Tepat', 'Sangat Tepat', 255),
(229, 'Kurang Cepat dan Akurat', 'Cukup Cepat dan Akurat', 'Cepat dan Akurat', 'Sangat Cepat dan Akurat', 256),
(231, 'Tidak Sopan dan Ramah', 'Kurang Sopan dan Ramah', 'Sopan dan Ramah', 'Sangat Sopan dan Ramah', 258),
(232, 'Tidak Rapih	', 'Kurang Rapih	', 'Rapih', 'Sangat Rapih	', 259),
(233, 'Tidak Tanggap	', 'Kurang Tanggap', 'Tanggap', 'Sangat Tanggap', 260),
(236, 'Tidak Puas(Warna,dan Peletakan berantakan)', 'Kurang Puas(Warna ,dan Peletakan cukup berantakan)', 'Puas(Warna ,dan Peletakan cukup yang Sesuai)', 'Sangat Puas(Warna ,dan Peletakan cukup Sangat Bagu', 263),
(237, 'Tidak Mudah(Sering Salah pilih isi Polling)', 'Cukup Mudah(masih perlu pembiasaan)', 'Mudah(peletakan Menu Tampilan mudah dihafal)', 'Sangat Mudah(semua tampilan mudah digunakan)', 264),
(239, 'Tidak Stabil(Halaman sistem tidak tampil)', 'Kurang Stabil(Halaman Sistem terlalu lambat)', 'Stabil(Halaman sistem cukup responsif)', 'Sangat Stabil(Halaman Sistem Sangat Responsif)', 266),
(240, 'Tidak Membantu(Tidak ada Panduan sistem)', 'Kurang Membantu(Panduan hanya bagian di dalam kate', 'Membantu(Halaman awal ada tata caranya)', 'Sangat Membantu(setiap halaman ada penjelasan)', 267),
(243, 'Tidak Cepat(sekitar 30 menit)', 'Kurang Cepat(sekitar 10 menit)', 'Cepat(Kurang Lebih 5 menit)', 'Sangat Cepat(kurang dari 1 menit)', 270),
(245, 'Sangat Lama(3-4 Bulan)', 'Lama(1-2 Bulan)', 'Cepat(Kurang Lebih 30 Hari)', 'Sangat Cepat (Kurang dari 20 Hari)', 272);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE `jawaban_user` (
  `id_jawaban_user` int(11) NOT NULL,
  `jawaban1` int(1) NOT NULL,
  `jawaban2` int(1) NOT NULL,
  `jawaban3` int(1) NOT NULL,
  `jawaban4` int(1) NOT NULL,
  `jawaban5` int(1) NOT NULL,
  `jawaban6` int(1) NOT NULL,
  `jawaban7` int(1) NOT NULL,
  `jawaban8` int(1) NOT NULL,
  `id_respondenj` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_user`
--

INSERT INTO `jawaban_user` (`id_jawaban_user`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `id_respondenj`, `komentar`) VALUES
(40, 3, 2, 3, 3, 3, 3, 3, 3, 45, '123w'),
(42, 3, 3, 0, 3, 4, 3, 3, 3, 47, 'semangat buat sistemnya biar lebih ditingkatkan'),
(43, 1, 3, 3, 4, 4, 4, 4, 3, 48, ''),
(44, 4, 4, 4, 4, 4, 3, 3, 3, 50, 'sas'),
(45, 2, 2, 3, 3, 3, 3, 3, 3, 48, ''),
(48, 3, 3, 3, 4, 3, 3, 4, 3, 53, 'baguskan lagi tampilannya'),
(50, 2, 2, 2, 2, 3, 0, 0, 0, 55, 'blabla'),
(51, 1, 1, 1, 1, 4, 0, 0, 0, 56, ''),
(52, 3, 3, 4, 3, 3, 0, 0, 0, 57, ''),
(53, 4, 4, 4, 4, 4, 0, 0, 0, 59, 'blalala');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `persyaratan` text NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `persyaratan`, `status`) VALUES
(159, 'Pelayanan dalam pengajuan Surat Pengawasan', 'Pada Penilaian Pelayanan alur dalam pengajuan surat pengawasan untuk sebagai bahan evaluasi agar perusahaan dapat lebih dipermudah dalam pengurusan berdasarkan hasil survey polling ', 1),
(160, 'Pelayanan Permohonan Trayek Dishub Prov.Riau', 'Penilaian izin kepada Instansi untuk menyediakan pelayanan angkutan penumpang umum pada suatu atau beberapa trayek tertentu. <br> DIHARAPKAN MENGISI DENGAN BENAR DAN JUJUR </br>', 1),
(161, 'Kepuasan tampilan Sistem Polling', 'Penilaian Tampilan menu sistem polling agar dapat memperbaiki atau meningkatkan tampilian berdasarkan masukan masukan Anda', 1),
(163, 'Kualitas Pelayanan Surat Izin Berusaha', 'penilaian terhadap kualitas pelayanan surat izin berusaha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id_responden` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `id_kategoriResponden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id_responden`, `tanggal`, `perusahaan`, `nama`, `nip`, `umur`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `id_kategoriResponden`) VALUES
(41, '2000-10-26', '', 'surya', '12123456642323', 21, 1, 'SMA kebawah', 'Manajer', 151),
(45, '2022-05-13', '', 'SURYA fahmi', '1212123313', 22, 1, 'D3-D4', 'Manajer', 160),
(47, '1980-06-23', '', 'sayaku', '121212111667', 30, 1, 'SMA Sederajat', 'Manajer', 161),
(48, '1980-10-28', '', 'andi', '114532345', 30, 1, 'D3-D4', 'Manajer', 160),
(49, '2001-06-12', '', 'pak karya', '112234421', 21, 1, 'SMA Sederajat', 'Manajer', 159),
(50, '2022-05-24', 'PT.Rahayu Jasa Pratama', 'Galih', '11124543733', 30, 1, 'D3-D4', 'Manajer', 159),
(53, '2022-03-23', 'PT.Karya Utama', 'doni salma', '11299632123286', 27, 1, 'S1', 'Manajer', 159),
(55, '2000-09-18', 'PT.Karya Utama', 'sadasdsadsa', '11132323', 21, 1, 'SMA Sederajat', 'Manajer', 160),
(56, '2022-05-26', 'PT.Karya Utama', 'sadsadasdsaxx', '11245522', 21, 1, 'SMA Sederajat', 'HRD', 160),
(57, '2022-05-30', 'PT.Rahayu Jasa Pratama', 'Supratno', '123245239875', 34, 1, 'D3-D4', 'Manajer', 159),
(58, '2022-05-31', 'PT.Karya Utama', 'sdsdsasayau', '11124678322', 27, 1, 'D3-D4', 'HRD', 160),
(59, '2022-06-06', 'PT.Rahayu Jasa Pratama', 'srya', '12345', 26, 1, 'S1', 'Manajer', 159);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `id_kategoriS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `id_kategoriS`) VALUES
(247, 'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas yang memberikan pelayanan?', 159),
(248, 'Bagaimana Durasi Pengurusan Surat Pengawasan?', 159),
(249, 'Bagaimana pendapat saudara tentang kesopanan dan keramahan panitia dalam memberikan pelayanan terhadap Anda Bimbingan Teknis Dalam Pengurusan Surat Pengawasan?', 159),
(250, 'Bagaimana pendapat saudara tentang kualitas tindakan administratif yang diberikan oleh unit pelayanan?', 159),
(251, 'Bagaimana pendapat Anda tentang kelengkapan media penanganan Berkas yang ada dalam Pengajuan Surat Pengawasan?', 159),
(255, 'Ketepatan dalam melaksanakan pembuatan permohonan', 160),
(256, 'Apakah Pegawai memberikan pelayanan dengan cepat dan akurat', 160),
(258, 'Bagaimana pendapat anda tentang kesopanan dan keramahan Pegawai dalam melayani Anda?', 160),
(259, 'Bagaimana pendapat anda tentang kerapihan Pegawai dalam berpenampilan?', 160),
(260, 'Bagaimana menurut anda apakah Pegawai kami melayani Anda dengan tanggap dan cepat?', 160),
(263, 'Tampilan menu aplikasi', 161),
(264, 'Kemudahan penggunaan Sistem', 161),
(266, 'Kestabilan Sistem	', 161),
(267, 'Kemampuan Sistem dalam membantu user	', 161),
(270, 'Kecepatan dalam mengakses Sistem Poling', 161),
(272, 'Durasi Pengurusan Surat Izin Berusaha', 163);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Surya Aditya', 'surya@gmail.com', 'admin', 'admin', 'admin'),
(2, 'PT.Karya Utama', 'karya@gmail.com', 'karya', 'karya', 'perusahaan'),
(3, 'PT.Rahayu Jasa Pratama', 'rahayujasa@gmail.com', 'rahayu', 'rahayu', 'perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal` (`id_soalj`);

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id_jawaban_user`),
  ADD KEY `id_respondedj` (`id_respondenj`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id_responden`),
  ADD UNIQUE KEY `id_responden` (`id_responden`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_kategori` (`id_kategoriS`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id_jawaban_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id_responden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_soalj`) REFERENCES `soal` (`id_soal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD CONSTRAINT `jawaban_user_ibfk_1` FOREIGN KEY (`id_respondenj`) REFERENCES `responden` (`id_responden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`id_kategoriS`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
