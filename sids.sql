-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jul 2017 pada 03.56
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sids`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat`
--

CREATE TABLE IF NOT EXISTS `jenis_surat` (
  `id` int(11) NOT NULL,
  `kd_surat` varchar(255) NOT NULL,
  `nm_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1=hadir,2=keluar,3=tdk hadir',
  `last_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `jenis`, `isi`) VALUES
(1, 'jajaran_perangkat', '<center><p><img alt="" src="/sids/assets/ckeditor/kcfinder/upload/images/Desert.jpg" style="height:576px; width:768px" /></p></center>\r\n\r\n<p>Test jajaran perangkat desa</p>\r\n'),
(2, 'sejarah', '<div class="center">&nbsp;</div>\r\n\r\n<p><img alt="" src="/sids/assets/ckeditor/kcfinder/upload/images/fbi-virus.jpg" style="float:left; height:267px; width:400px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; test konten sejarah ini dapat tersimpan di database</p>\r\n\r\n<p style="margin-left:40px; text-align:justify"><strong>&nbsp; &nbsp;Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan &nbsp; huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n'),
(3, 'visi_misi', '<p><img alt="" src="/sids/assets/ckeditor/kcfinder/upload/images/a%20cool%20system.JPG" style="height:200px; width:300px" /></p>\r\n\r\n<p>test visi misi</p>\r\n'),
(4, 'bpd', '<p>test konten bpd</p>\r\n'),
(5, 'lpmd', '<p>test konten lpmd</p>\r\n'),
(6, 'pkk', '<p>test konten pkk</p>\r\n'),
(7, 'karangtaruna', '<p>test konten karangtaruna</p>\r\n'),
(8, 'bantuan', '<p>konten bentuan</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE IF NOT EXISTS `lapor` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nm_gbr` varchar(255) NOT NULL,
  `tipe_gbr` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `nik`, `nama`, `alamat`, `keterangan`, `nm_gbr`, `tipe_gbr`) VALUES
(18, 'rtyui', 'tyuio', 'yuiop', 'tyuio', 'file_1501146723.jpg', 'image/jpeg'),
(19, 'rtyuio', 'tyuiop', 'yuiop', 'uiop', 'file_1501146788.jpg', 'image/jpeg'),
(20, 'yuiop', 'tyuio', 'yuio', 'tyui', 'file_1501146826.jpg', 'image/jpeg'),
(21, 'y678908u9i0', '67890', '7y', 'yuiop', 'file_1501146961.jpg', 'image/jpeg'),
(22, '6789', '6789', '6789', '6789', 'file_1501146982.jpg', 'image/jpeg'),
(23, 'rtyui', 'tyuio', 'tyuio', 'tyui', 'file_1501147023.jpg', 'image/jpeg'),
(24, '890900', 'ouoiu', 'uoiuio', 'uoiu', 'file_1501147059.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `id` int(11) NOT NULL,
  `nm_pk` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nm_pk`, `jml`) VALUES
(1, 'Pns', 330),
(2, 'Petani', 2135),
(3, 'Pedagang', 300),
(4, 'Pengusaha', 223),
(6, 'Lain-lain', 432);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
  `id` int(11) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `jk`, `jml`) VALUES
(1, 'Laki-laki', 1245),
(2, 'Perempuan', 501);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id` int(11) NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `lampiran1` varchar(255) NOT NULL,
  `lampiran2` varchar(255) NOT NULL,
  `lampiran3` varchar(255) NOT NULL,
  `lampiran4` varchar(255) NOT NULL,
  `lampiran5` varchar(255) NOT NULL,
  `lampiran6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide_image`
--

CREATE TABLE IF NOT EXISTS `slide_image` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL COMMENT '9=admin, 8=user',
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `jabatan`, `level`, `created_by`) VALUES
(6, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'bendahara', 'admin', 0),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kepdes', 'admin', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `jenis`, `link`) VALUES
(1, 'video', 'https://www.youtube.com/videos'),
(2, 'streaming', 'https://www.youtube.com/streamings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_image`
--
ALTER TABLE `slide_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide_image`
--
ALTER TABLE `slide_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
