-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 06:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('feni', '202cb962ac59075b964b07152d234b70', 2),
('guru1', '202cb962ac59075b964b07152d234b70', 2),
('guru2', '202cb962ac59075b964b07152d234b70', 2),
('guru3', '202cb962ac59075b964b07152d234b70', 2),
('kelas 7', '202cb962ac59075b964b07152d234b70', 3),
('kelas 8', '202cb962ac59075b964b07152d234b70', 3),
('kelas 9', '202cb962ac59075b964b07152d234b70', 3),
('Naldo', '202cb962ac59075b964b07152d234b70', 1),
('Wildis', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `gambar`) VALUES
(1, 'image/a9.jpeg'),
(2, 'image/image1.png'),
(3, 'image/image2.png'),
(4, 'image/image3.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `username` varchar(20) NOT NULL,
  `nip` char(10) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`username`, `nip`, `nama_guru`, `no_hp`, `jenkel`, `agama`) VALUES
('guru1', '2112', 'fdssdf', '2222', 'Laki-Laki', 'Islam'),
('guru1', '276736', 'sabda', '3261631', 'Laki-Laki', 'Islam'),
('guru1', '3562', 'sbajh', '4732643', 'Laki-Laki', 'Islam'),
('guru1', '48475347', 'hbdhdsbh', '2838', 'Laki-Laki', 'Kristen'),
('guru1', '73463264', 'ashbdjh', '73645734', 'Laki-Laki', 'Islam'),
('guru3', '7465736457', 'Naldo', '88484884', 'Laki-Laki', 'Katolik'),
('guru1', '87346', 'jasbdjh', '635473', 'Laki-Laki', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul`, `deskripsi`, `tempat`, `tanggal`, `gambar`) VALUES
(2, 'Olahraga', 'kegiata Futsal', 'Lapangan Mekon', '2024-11-12', 'image/3.jpg'),
(3, 'Memperkuat Spiritualitas dan Kebersamaan', 'Setiap Jumat pagi, Smp Agape Indah mengadakan ibadah rutin yang diikuti oleh seluruh siswa dan staf. Kegiatan ini bertujuan untuk memperkuat spiritualitas dan membangun rasa kebersamaan di antara seluruh warga sekolah.\\r\\n\\r\\nIbadah dimulai dengan pujian dan penyembahan yang dipimpin oleh tim musik sekolah. Suasana penuh khidmat ini membuat siswa merasa lebih dekat dengan nilai-nilai spiritual yang diajarkan. Setelah itu, seorang pembicara diundang untuk memberikan renungan yang inspiratif.\\r\\n\\r\\nKepala Sekolah, [Nama Kepala Sekolah], menyampaikan pentingnya ibadah sebagai sarana untuk menumbuhkan karakter positif dan kepedulian terhadap sesama. \\\"Melalui ibadah, kita tidak hanya berdoa, tetapi juga belajar untuk saling mendukung dan menghargai satu sama lain,\\\" ujarnya.\\r\\n\\r\\nSiswa-siswa juga diberi kesempatan untuk berbagi pengalaman pribadi tentang bagaimana ibadah mempengaruhi kehidupan mereka. Banyak yang mengungkapkan bahwa kegiatan ini membantu mereka lebih fokus dalam belajar dan menghadapi tantangan sehari-hari.\\r\\n\\r\\nSetelah ibadah, siswa diajak untuk berpartisipasi dalam kegiatan sosial, seperti penggalangan dana untuk anak-anak kurang mampu. Kegiatan ini tidak hanya mendidik siswa tentang kepedulian sosial, tetapi juga memperkuat rasa solidaritas di antara mereka.\\r\\n\\r\\nDengan adanya ibadah rutin ini, diharapkan siswa dapat tumbuh menjadi individu yang tidak hanya cerdas secara akademis, tetapi juga memiliki jiwa yang baik dan peduli terhadap lingkungan sekitar.', 'kelas 7 a', '2024-11-20', 'image/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(7, '7'),
(8, '8'),
(9, '9');

-- --------------------------------------------------------

--
-- Table structure for table `kutipan`
--

CREATE TABLE `kutipan` (
  `id_kutipan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kutipan`
--

INSERT INTO `kutipan` (`id_kutipan`, `judul`, `deskripsi`) VALUES
(5, 'SIMFONI KEHIDUPAN ', '\"Hidup ini bukanlah sekedar jalan untuk ditempuh menuju ke suatu tujuan; tapi merupakan benih yang harus bertumbuh, berbunga dan berbuah lebat agar dinikmati banyak orang. Itulah tujuan hidup sesungguhnya yang harus diupayakan pencapaiannya. Amin\"');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kode_mata_pelajaran` varchar(50) NOT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kode_mata_pelajaran`, `nama_matapelajaran`) VALUES
('1', 'Matematika'),
('2', 'Pendidikan Agama dan Budi Pekerti'),
('3', 'Pendidikan Pancasila dan Kewarganegaraan'),
('4', 'Bahasa Indonesia'),
('5', 'Ilmu Pengetahuan Alam'),
('6', 'Ilmu Pengetahuan Sosial'),
('7', 'Bahasa Inggris'),
('8', 'Penjaskes');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `username` varchar(255) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `jenkel` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`username`, `nisn`, `nama_murid`, `kota`, `jenkel`, `agama`, `id_kelas`) VALUES
('kelas 7', '1344', 'Jesika', '', 'Laki-Laki', 'Kristen', 7),
('kelas 8', '23456', 'sdfg', '12345fj', 'Laki-Laki', 'Kristen', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `dekripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `dekripsi`, `tanggal`, `status`) VALUES
(5, 'Kegiatan Pramuka', 'Bagi siswa yang akan mengikuti kegiatan diharapkan ', '2024-11-12', 'Nonaktif'),
(7, 'Pengumuman Liburan Semester', 'Liburan semester genap akan dimulai pada tanggal 20 Desember 2024 dan berakhir pada tanggal 10 Januari 2025. Selama periode ini, kegiatan belajar mengajar akan dihentikan, dan semua siswa diharapkan untuk memanfaatkan waktu liburan untuk belajar mandiri.', '2024-12-10', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `renungan`
--

CREATE TABLE `renungan` (
  `id_renungan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ayat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renungan`
--

INSERT INTO `renungan` (`id_renungan`, `judul`, `ayat`, `tanggal`, `isi`) VALUES
(5, 'Kekuatan Doa', 'Yakobus 5:15', '2024-11-12', 'Di tengah kesibukan hidup sehari-hari, kita sering kali lupa akan pentingnya doa. Doa bukan hanya sebuah rutinitas, tetapi sebuah kebutuhan spiritual yang menghubungkan kita dengan Tuhan. Ketika kita berdoa, kita tidak hanya memohon kepada Tuhan, tetapi juga membuka hati kita untuk mendengarkan suara-Nya.\r\n\r\nDalam Yakobus 5:15, kita diingatkan akan kekuatan doa. Doa yang penuh iman dapat menyelamatkan dan mengubah situasi yang tampaknya mustahil. Ini menunjukkan betapa besar kekuatan Tuhan dan betapa pentingnya kita untuk bersandar kepada-Nya dalam setiap aspek hidup kita.'),
(6, 'Mengasihi dan Menolong Sesama', 'Markus 12:31', '2024-11-06', 'Suatu hari, Yesus sedang mengajar orang banyak tentang cara hidup yang benar. Dia berkata kepada mereka bahwa Tuhan ingin kita mengasihi sesama seperti kita mengasihi diri sendiri. Ini artinya, kita harus berbuat baik kepada orang lain, menolong teman yang kesulitan, dan berusaha membuat orang lain bahagia.\r\n\r\nBayangkan ketika ada teman yang kesulitan mengerjakan tugas atau merasa sedih, kita bisa menjadi teman yang baik dengan mendengarkan, memberi semangat, atau menawarkan bantuan. Dengan cara ini, kita menunjukkan kasih yang Tuhan inginkan dari kita.'),
(7, 'Kasih Tanpa Batas', 'Yohanes 3:16', '2024-11-07', 'Karena begitu besar kasih Allah akan dunia ini, sehingga Ia telah mengaruniakan Anak-Nya yang tunggal, supaya setiap orang yang percaya kepada-Nya tidak binasa, melainkan beroleh hidup yang kekal.\" Kasih Allah tak terbatas dan penuh pengorbanan. Mari kita renungkan betapa berharganya kasih itu bagi kita, dan bagaimana kita bisa menyalurkan kasih itu kepada orang lain.'),
(8, 'Bersandar pada Tuhan', 'Amsal 3:5-6', '2024-11-08', 'Percayalah kepada TUHAN dengan segenap hatimu, dan janganlah bersandar kepada pengertianmu sendiri. Akuilah Dia dalam segala lakumu, maka Ia akan meluruskan jalanmu.\" Mengandalkan Tuhan berarti percaya penuh pada kehendak-Nya, bahkan saat jalan tampak sulit. Renungkan hari ini, apakah kita sudah benar-benar berserah kepada-Nya?'),
(9, 'Damai di Tengah Badai', 'Mazmur 46:2-3', '2024-11-09', 'Allah itu bagi kita tempat perlindungan dan kekuatan, sebagai penolong dalam kesesakan sangat terbukti.\" Ketika badai kehidupan melanda, ingatlah bahwa Tuhan adalah perlindungan kita. Kita tidak perlu takut atau gentar, karena Dia selalu bersama kita, siap memberikan kekuatan dan kedamaian di saat sulit.'),
(10, 'Bersyukur dalam Segala Hal', '1 Tesalonika 5:18', '2024-11-13', 'Mengucap syukurlah dalam segala hal, sebab itulah yang dikehendaki Allah di dalam Kristus Yesus bagi kamu.\" Bersyukur adalah bentuk pengakuan akan kebaikan Tuhan, meskipun keadaan tidak selalu ideal. Dengan bersyukur, kita mengundang berkat Tuhan dan menjaga hati kita tetap penuh damai. Amin');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `gambar`) VALUES
(1, 'image/struktur organisassi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `kode_mata_pelajaran` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` enum('sedang berlangsung',' berakhir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`kode_mata_pelajaran`, `username`, `id_kelas`, `id_tugas`, `nama_tugas`, `deskripsi`, `tanggal_selesai`, `status`) VALUES
('1', 'guru1', 8, 673624, 'Individu', 'Buatlah pemfaktoran ', '2024-11-26', ''),
('1', 'feni', 7, 673625, 'Tugas Individu', 'Buatlah --------', '2024-12-02', 'sedang berlangsung'),
('1', 'guru1', 8, 673626, 'Tugas Individu', 'Buatlah -', '2024-12-02', 'sedang berlangsung');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `url_vidio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `judul`, `url_vidio`) VALUES
(6, 'Minggu Observasi Kampus Mengajar 5 SMP Kristen Agape Indah Kupang ', 'https://www.youtube.com/watch?v=jPT3lbSENL8'),
(7, 'Menyalakan Pijar Pendidikan Yang Menyenangkan didalam Kelas merdeka', 'https://www.youtube.com/watch?v=UMpYqRji0HE'),
(8, 'KEGIATAN SELAMA MINGGU KEDUA PENUGASAN SMP KRISTEN AGAPE INDAH', 'https://www.youtube.com/watch?v=P_-kNpDFHvY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `guru_fkakun_1` (`username`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kutipan`
--
ALTER TABLE `kutipan`
  ADD PRIMARY KEY (`id_kutipan`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`kode_mata_pelajaran`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `murid_fkkelas_1` (`id_kelas`),
  ADD KEY `murid_fkakun_1` (`username`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renungan`
--
ALTER TABLE `renungan`
  ADD PRIMARY KEY (`id_renungan`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `tugas_fkkelas_1` (`id_kelas`),
  ADD KEY `tugas_fkakun_1` (`username`),
  ADD KEY `tugas_fkmapel_1` (`kode_mata_pelajaran`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kutipan`
--
ALTER TABLE `kutipan`
  MODIFY `id_kutipan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `renungan`
--
ALTER TABLE `renungan`
  MODIFY `id_renungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=673627;

--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_fkakun_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_fkakun_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `murid_fkkelas_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_fkakun_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `tugas_fkkelas_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `tugas_fkmapel_1` FOREIGN KEY (`kode_mata_pelajaran`) REFERENCES `mata_pelajaran` (`kode_mata_pelajaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
