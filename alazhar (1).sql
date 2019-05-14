-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 05:29 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alazhar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(100) NOT NULL,
  `berita_judul_en` varchar(100) NOT NULL,
  `berita_konten_en` varchar(2000) NOT NULL,
  `berita_kat` int(11) NOT NULL,
  `berita_konten` varchar(2000) NOT NULL,
  `berita_img` varchar(50) NOT NULL,
  `berita_timestamp` varchar(20) NOT NULL,
  `berita_view` int(11) NOT NULL,
  `berita_author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`berita_id`, `berita_judul`, `berita_judul_en`, `berita_konten_en`, `berita_kat`, `berita_konten`, `berita_img`, `berita_timestamp`, `berita_view`, `berita_author`) VALUES
(37, 'Pelajaran Bahasa Inggris', 'English', '<p>en</p>', 2, '<p>id</p>', 'img1554658341.png', '1554658341', 0, 'dendi'),
(38, 'as', 'as', '<p>as</p>', 6, '<p>as</p>', 'img1554658686.png', '1554658686', 0, 'dendi'),
(39, 'Mengapa memilih SMPIA 13?', 'Why Choose SMPIA 13?', '<p class="MsoNormal"><font face="Maiandra GD, sans-serif"><span style="font-weight: bolder;"><span style="font-size: 24px;">The REAL School</span></span></font></p><ol><li><font face="Maiandra GD, sans-serif">Project Based Islamic Educational Approach.</font></li><li><font face="Maiandra GD, sans-serif">Integrated Islamic Values, Science, Technology and Arts in Learning Process. </font></li><li><font face="Maiandra GD, sans-serif">Conducting Cambridge Check Point Examination.</font></li><li><font face="Maiandra GD, sans-serif">Blended Curriculums of Al Azhar, National and Cambridge.</font></li><li><font face="Maiandra GD, sans-serif">Highly Dedicated and Smart Teachers.</font></li><li><font face="Maiandra GD, sans-serif">Safe Campus Environment.</font></li><li><font face="Maiandra GD, sans-serif">Small and Personalized Classroom.</font></li><li><font face="Maiandra GD, sans-serif">Responsive Communication.</font></li><li><font face="Maiandra GD, sans-serif">Hospitable and Excellent Services.</font></li></ol>', 4, '<div><span style="font-size: 24px; font-weight: bolder; font-family: "Maiandra GD", sans-serif;">The REAL School</span><br></div><ol><li><font face="Maiandra GD, sans-serif">Project Based Islamic Educational Approach.</font></li><li><font face="Maiandra GD, sans-serif">Integrated Islamic Values, Science, Technology and Arts in Learning Process. </font></li><li><font face="Maiandra GD, sans-serif">Conducting Cambridge Check Point Examination.</font></li><li><font face="Maiandra GD, sans-serif">Blended Curriculums of Al Azhar, National and Cambridge.</font></li><li><font face="Maiandra GD, sans-serif">Highly Dedicated and Smart Teachers.</font></li><li><font face="Maiandra GD, sans-serif">Safe Campus Environment.</font></li><li><font face="Maiandra GD, sans-serif">Small and Personalized Classroom.</font></li><li><font face="Maiandra GD, sans-serif">Responsive Communication.</font></li><li><font face="Maiandra GD, sans-serif">Hospitable and Excellent Services.</font></li></ol>', 'img1554734909.jpg', '1554734909', 0, 'Administrator'),
(40, 'Evaluating Students Competence Through Mid Term Te', 'Evaluating Students Competence Through Mid Term Test  ', '<p>Exams are a great way to reinforce and evaluate students'' understanding of the course content and main ideas. As the realization of the academic programs 2018 - 2019, SMP Islam Al Azhar 13 Surabaya has conducted midterm examination for the even semester on 11 – 15 March 2019. The subjects of this examination were Religion, Arabic, Maths, Science, Social, Civics, Bahasa Indonesia, English meanwhile ICT, Music and PE were done by practical examination.</p><p>This activity aims to measure and evaluate the ability of students in learning during the middle of the semester. The results of the student''s work in this exam will be shared by the homeroom teacher and also the subject teachers after examination and question analysis. According to the Chairperson of the PTS Committee, Ms. Ferina Widya, S.Pd., that as the report to parents, the school will share the Even Semester Middle Learning Report (PTS Report) on Saturday, March 30, 2019.</p>', 4, '<p>Exams are a great way to reinforce and evaluate students'' understanding of the course content and main ideas. As the realization of the academic programs 2018 - 2019, SMP Islam Al Azhar 13 Surabaya has conducted midterm examination for the even semester on 11 – 15 March 2019. The subjects of this examination were Religion, Arabic, Maths, Science, Social, Civics, Bahasa Indonesia, English meanwhile ICT, Music and PE were done by practical examination. </p><p>This activity aims to measure and evaluate the ability of students in learning during the middle of the semester. The results of the student''s work in this exam will be shared by the homeroom teacher and also the subject teachers after examination and question analysis. According to the Chairperson of the PTS Committee, Ms. Ferina Widya, S.Pd., that as the report to parents, the school will share the Even Semester Middle Learning Report (PTS Report) on Saturday, March 30, 2019.<br></p>', 'img1554734921.jpg', '1554734921', 0, 'Administrator'),
(41, 'Diklat Penguatan Kepala Sekolah SPK', 'Diklat Penguatan Kepala Sekolah SPK', '<p>Pada tanggal 4 – 11 Maret 2019. Kepala SMP Islam Al Azhar 13 Surabaya berkesempatan mengikuti kegiatan Pendidikan dan Latihan Penguatan Kepala Sekolah SPK se Jawa Timur yang diselenggarakan di IPH School Surabaya. Diklat ini diselenggarakan atas kerjasama antara Assosiasi Sekolah SPK Jawa Timur (ASKAJATI) dan Lembaga Pengembangan dan Pemberdayaan Kepala Sekolah (LPPKS) dan diikuti oleh 42 sekolah yang telah mendapatkan ijin penyelenggaraan Satuan Pendidikan Kerjasama (SPK) oleh Kemdikbud Republik Indonesia.</p><p>Perlu diketahui bahwa sesuai Peraturan Menteri Pendidikan dan Kebudayaaan RI No. 31 tahun 2014, Satuan Pendidikan Kerja Sama (SPK) adalah adalah satuan pendidikan yang diselenggarakan atau dikelola atas dasar kerja sama antara Lembaga Pendidiakn Asing (LPA) yang terakreditasi/diakui di negaranya dengan Lembaga Pendidikan Indonesia (LPI) pada jalur formal atau non formal yang sesuai dengan ketentuan perundang-undangan. Diantara sekolah sekolah SPK yang mengikuti diklat tersebut, SMP Islam Al Azhar 13 Surabaya merupakan satu satu lembaga pendidikan Islam yang sudah mengantongi SPK pada saat ini.</p><p>Diklat atau Sertifikasi Kepala Sekolah SPK tersebut bertujuan untuk meningkatkan kompetensi kepala sekolah yang sejalan dengan Permendiknas No. 13 Tahun 2007 tentang Standar Kepala Sekolah/Madrasah, yang mengamanatkan bahwa kepala sekolah merupakan pimpinan tertinggi di sekolah wajib memiliki lima dimensi kompetensi, yaitu dimensi kompetensi kepribadian, manajerial, kewirausahaan, supervisi, dan sosial. Kegiatan diklat dibuka oleh Ketua Badan Akreditasi Nasional Sekolah/Madrasah (BAN S/M) Dr. Toni Toharudin dilanjutkan dengan pemaparan 13 materi penguatan kompetensi kepala sekolah dan pengetahuan terkait program pengembangan sekolah berdasarkan 8 Standar Nasional Pendidikan pola 71 JP oleh Master Trainer LPPKS antara lain Drs. Arju Rahmanto, S.Ag., M.Ag. dan Dr. Abu Bakar. Peserta diklat mengikuti kegiatan diklat ini dengan aktif dan antusias. Di akhir kegiat', 5, '<p>Pada tanggal 4 – 11 Maret 2019. Kepala SMP Islam Al Azhar 13 Surabaya berkesempatan mengikuti kegiatan Pendidikan dan Latihan Penguatan Kepala Sekolah SPK se Jawa Timur yang diselenggarakan di IPH School Surabaya. Diklat ini diselenggarakan atas kerjasama antara Assosiasi Sekolah SPK Jawa Timur (ASKAJATI) dan Lembaga Pengembangan dan Pemberdayaan Kepala Sekolah (LPPKS) dan diikuti oleh 42 sekolah yang telah mendapatkan ijin penyelenggaraan Satuan Pendidikan Kerjasama (SPK) oleh Kemdikbud Republik Indonesia. </p><p>Perlu diketahui bahwa sesuai Peraturan Menteri Pendidikan dan Kebudayaaan RI No. 31 tahun 2014, Satuan Pendidikan Kerja Sama (SPK) adalah adalah satuan pendidikan yang diselenggarakan atau dikelola atas dasar kerja sama antara Lembaga Pendidiakn Asing (LPA) yang terakreditasi/diakui di negaranya dengan Lembaga Pendidikan Indonesia (LPI) pada jalur formal atau non formal yang sesuai dengan ketentuan perundang-undangan. Diantara sekolah sekolah SPK yang mengikuti diklat tersebut, SMP Islam Al Azhar 13 Surabaya merupakan satu satu lembaga pendidikan Islam yang sudah mengantongi SPK pada saat ini. </p><p>Diklat atau Sertifikasi Kepala Sekolah SPK tersebut bertujuan untuk meningkatkan kompetensi kepala sekolah yang sejalan dengan Permendiknas No. 13 Tahun 2007 tentang Standar Kepala Sekolah/Madrasah, yang mengamanatkan bahwa kepala sekolah merupakan pimpinan tertinggi di sekolah wajib memiliki lima dimensi kompetensi, yaitu dimensi kompetensi kepribadian, manajerial, kewirausahaan, supervisi, dan sosial. Kegiatan diklat dibuka oleh Ketua Badan Akreditasi Nasional Sekolah/Madrasah (BAN S/M) Dr. Toni Toharudin dilanjutkan dengan pemaparan 13 materi penguatan kompetensi kepala sekolah dan pengetahuan terkait program pengembangan sekolah berdasarkan 8 Standar Nasional Pendidikan pola 71 JP oleh Master Trainer LPPKS antara lain Drs. Arju Rahmanto, S.Ag., M.Ag. dan Dr. Abu Bakar. Peserta diklat mengikuti kegiatan diklat ini dengan aktif dan antusias. Di akhir kegi', 'img1554734936.jpg', '1554734936', 0, 'Administrator'),
(42, 'Juara 2 Surabaya Archery Competition', '2nd Place in Surabaya Archery Competition', '<p>Ananda Nashwa Farenza, murid SMP Islam Al Azhar 13 Surabaya, berhasil meraih juara 2 pada kategori putri SMP Pada ajang&nbsp;Surabaya Archery Competition pada tanggal 4 Maret 2019<br></p>', 1, '<p>Ananda Nashwa Farenza, murid SMP Islam Al Azhar 13 Surabaya, berhasil meraih juara 2 pada kategori putri SMP Pada ajang&nbsp;Surabaya Archery Competition pada tanggal 4 Maret 2019</p>', 'img1554742369.jpeg', '1554742369', 0, 'Administrator'),
(43, 'Workshop on Designing Project based curriculum ', 'Workshop on Designing Project based curriculum ', '<p>Workshop on Designing&nbsp;Project based&nbsp;curriculum for teachers SMP Islam Al Azhar Surabaya on March 22 and 23, 2019 at Alana Hotel<br></p><div><img src="http://localhost/smp/uploads/post/WhatsApp_Image_2019-04-08_at_23_49_371.jpeg" style="width: 50%;"><br></div>', 5, '<p>Workshop on Designing Project based curriculum for teachers SMP Islam Al Azhar Surabaya on March 22 and 23, 2019 at Alana Hotel<br></p><p><img src="http://localhost/smp/uploads/post/WhatsApp_Image_2019-04-08_at_23_49_37.jpeg" style="width: 50%;"></p><p><br></p><p><br></p>', 'img1554742639.jpeg', '1554742639', 0, 'Administrator'),
(44, 'Rapat Internal Sekolah', 'Internal meeting', '<p>Tanggal : 10 April 2019</p><p>Jam : 07.00 - 10.00</p>', 6, '<p>Tanggal : 10 April 2019</p><p>Jam : 07.00 - 10.00</p>', 'img1554743593.jpeg', '1554743593', 0, 'desi'),
(45, 'Cobakk', 'Physics', '<p>as<br></p>', 2, '<p>as</p>', 'img1554744024.jpg', '1554744024', 0, 'desi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bg`
--

CREATE TABLE `tb_bg` (
  `bg_id` int(11) NOT NULL,
  `bg_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bg`
--

INSERT INTO `tb_bg` (`bg_id`, `bg_img`) VALUES
(1, 'img1554734829.jpg'),
(2, 'img1554734836.jpg'),
(3, 'img1554744574.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `fasilitas_nama` varchar(100) NOT NULL,
  `fasilitas_img` varchar(100) NOT NULL,
  `fasilitas_deskripsi` varchar(100) NOT NULL,
  `fasilitas_nama_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`fasilitas_id`, `fasilitas_nama`, `fasilitas_img`, `fasilitas_deskripsi`, `fasilitas_nama_en`) VALUES
(1, 'Lab Kimia', 'fasil1554741967.JPG', '', 'Chemistry Laboratory'),
(2, 'Musholla Sekolah', 'fasil1554742676.jpeg', '', 'School Mosque'),
(3, 'Lab Komputer', 'fasil1554742798.jpg', '', 'Computer Studio');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `gal_id` int(11) NOT NULL,
  `gal_caption` varchar(100) NOT NULL,
  `gal_img` varchar(100) NOT NULL,
  `gal_timestamp` varchar(100) NOT NULL,
  `gal_caption_en` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`gal_id`, `gal_caption`, `gal_img`, `gal_timestamp`, `gal_caption_en`) VALUES
(1, 'Ruang Kelas', 'gallery01554741882.jpg', '1554741882', ''),
(2, 'Kegiatan Siswa', 'gallery01554741898.jpg', '1554741898', ''),
(3, 'Kegiatan Siswa', 'gallery11554741898.jpg', '1554741898', ''),
(4, 'Kegiatan Siswa', 'gallery21554741898.jpg', '1554741898', ''),
(5, 'Kunjungan SMPIA 11 Serang Ke SMPIA 13 ', 'gallery01554742070.jpeg', '1554742070', ''),
(6, 'Kunjungan SMPIA 11 Serang Ke SMPIA 13	', 'gallery01554742122.jpeg', '1554742122', ''),
(7, 'Kunjungan SMPIA 11 Serang Ke SMPIA 13	', 'gallery11554742122.jpeg', '1554742122', ''),
(8, 'Kunjungan SMPIA 11 Serang Ke SMPIA 13	', 'gallery21554742122.jpeg', '1554742122', ''),
(9, 'Kunjungan SMPIA 11 Serang Ke SMPIA 13	', 'gallery31554742122.jpeg', '1554742122', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gp`
--

CREATE TABLE `tb_gp` (
  `gp_id` int(11) NOT NULL,
  `gp_nama` varchar(100) NOT NULL,
  `gp_type` varchar(3) NOT NULL,
  `gp_guru` varchar(100) NOT NULL,
  `gp_tahun` varchar(20) NOT NULL,
  `gp_tahun2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gp`
--

INSERT INTO `tb_gp` (`gp_id`, `gp_nama`, `gp_type`, `gp_guru`, `gp_tahun`, `gp_tahun2`) VALUES
(4, 'Pelatihan', 'nf', 'dendi', '2012', ''),
(5, 'Seminar', 'nf', 'dendi', '2011', ''),
(8, 'SDN 8 Mimbaan', 'f', 'dendi', '2004', '2010'),
(14, 'SMPN 1 Situbondo', 'f', 'dendi', '2010', '2012'),
(15, 'SMAN 1 Situbondo', 'f', 'dendi', '2012', '2015'),
(19, 'Seminar Keguruan', 'nf', 'dendi', '2017', ''),
(20, 'SDN 1 Mimbaan', 'f', 'adhim', '2006', '2010'),
(21, 'SMPN 1 Situbondo', 'f', 'adhim', '2010', '2012'),
(22, 'SMAN 1 Situbondo', 'f', 'adhim', '2012', '2015'),
(23, 'Pelatihan Guru Guru', 'nf', 'adhim', '2018', ''),
(24, 'Pelatihan Pengajar', 'nf', 'adhim', '2017', ''),
(25, 'SDN 1 Asembagus', 'f', 'fian', '2003', '2009'),
(26, 'SMPN 1 Asembagus', 'f', 'fian', '2009', '2011'),
(27, 'SMAN 1 Situbondo', 'f', 'fian', '2011', '2014'),
(28, 'TK PKK PAMOTAN ', 'f', 'ali_mustofa', '2000', '2002'),
(29, 'SDN Pamotan 1', 'f', 'ali_mustofa', '2002', '2008'),
(30, 'SMPN 1 SAMBENG', 'f', 'ali_mustofa', '2008', '2011'),
(31, 'SMAN 1 Lamongan', 'f', 'ali_mustofa', '2011', '2014'),
(32, 'S1 PEND. SENDRATASIK UNESA ', 'f', 'ali_mustofa', '2014', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nama` varchar(100) NOT NULL,
  `guru_img` varchar(20) NOT NULL,
  `guru_account` varchar(50) NOT NULL,
  `guru_alamat` varchar(50) NOT NULL,
  `guru_yb` varchar(20) NOT NULL,
  `guru_jabatan` int(11) NOT NULL,
  `guru_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`guru_id`, `guru_nama`, `guru_img`, `guru_account`, `guru_alamat`, `guru_yb`, `guru_jabatan`, `guru_email`) VALUES
(1, 'Agung Yuliana, S. Pd', 'guru1554743252.jpg', 'agung_yuliana', '', '', 1, ''),
(3, 'Desi Suryani, S. Pd', 'guru1554743278.jpg', 'desi', '', '', 1, ''),
(4, 'Ali Mustofa, S. Pd', 'guru1554735245.jpg', 'ali_mustofa', 'Ds. Pamotan Kec. Sambeng Kab. Lamongan ', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru_artikel`
--

CREATE TABLE `tb_guru_artikel` (
  `ga_id` int(11) NOT NULL,
  `ga_judul` varchar(50) NOT NULL,
  `ga_konten` varchar(2000) NOT NULL,
  `ga_img` int(20) NOT NULL,
  `ga_timestamp` varchar(20) NOT NULL,
  `ga_view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru_jabatan`
--

CREATE TABLE `tb_guru_jabatan` (
  `gj_id` int(11) NOT NULL,
  `gj_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru_jabatan`
--

INSERT INTO `tb_guru_jabatan` (`gj_id`, `gj_nama`) VALUES
(2, 'Director'),
(1, 'Guru'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_berita`
--

CREATE TABLE `tb_kat_berita` (
  `kb_id` int(11) NOT NULL,
  `kb_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kat_berita`
--

INSERT INTO `tb_kat_berita` (`kb_id`, `kb_name`) VALUES
(1, 'Prestasi'),
(2, 'Artikel'),
(4, 'Berita'),
(5, 'Event'),
(6, 'Pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `pendaftar_id` int(11) NOT NULL,
  `pendaftar_tahun` varchar(10) NOT NULL,
  `pendaftar_jumlah` int(11) NOT NULL,
  `pendaftar_diterima` int(11) NOT NULL,
  `pendaftar_current` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`pendaftar_id`, `pendaftar_tahun`, `pendaftar_jumlah`, `pendaftar_diterima`, `pendaftar_current`) VALUES
(17, '2019', 200, 100, 900);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_full_name`, `user_password`, `user_level`) VALUES
(1, 'admin', 'Administrator', 'admin1234', 1),
(2, 'agung_yuliana', '', 'agung_yuliana', 2),
(4, 'desi', '', 'desi', 2),
(5, 'ali_mustofa', '', 'ali_mustofa', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_bg`
--
ALTER TABLE `tb_bg`
  ADD PRIMARY KEY (`bg_id`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `tb_gp`
--
ALTER TABLE `tb_gp`
  ADD PRIMARY KEY (`gp_id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`guru_id`),
  ADD UNIQUE KEY `guru_account` (`guru_account`);

--
-- Indexes for table `tb_guru_artikel`
--
ALTER TABLE `tb_guru_artikel`
  ADD PRIMARY KEY (`ga_id`);

--
-- Indexes for table `tb_guru_jabatan`
--
ALTER TABLE `tb_guru_jabatan`
  ADD PRIMARY KEY (`gj_id`),
  ADD UNIQUE KEY `gac_username` (`gj_nama`);

--
-- Indexes for table `tb_kat_berita`
--
ALTER TABLE `tb_kat_berita`
  ADD PRIMARY KEY (`kb_id`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`pendaftar_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_bg`
--
ALTER TABLE `tb_bg`
  MODIFY `bg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_gp`
--
ALTER TABLE `tb_gp`
  MODIFY `gp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_guru_artikel`
--
ALTER TABLE `tb_guru_artikel`
  MODIFY `ga_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_guru_jabatan`
--
ALTER TABLE `tb_guru_jabatan`
  MODIFY `gj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kat_berita`
--
ALTER TABLE `tb_kat_berita`
  MODIFY `kb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `pendaftar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
