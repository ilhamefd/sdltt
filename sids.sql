-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2017 pada 09.03
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `kd_surat`, `nm_surat`) VALUES
(1, '001', 'Surat Keterangan Nikah'),
(2, '002', 'Surat Keterangan Hewan'),
(3, '003', 'Surat Keterangan E KTP'),
(4, '004', 'Surat Keterangan Hilang'),
(5, '005', 'Surat Keterangan Usaha'),
(6, '006', 'Surat Keterangan Waris dan Kuasa Waris'),
(7, '007', 'Surat Pernyataan Belum Pernah Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL COMMENT '1=hadir,2=keluar,3=tdk hadir',
  `last_update` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `jabatan`, `status`, `last_update`) VALUES
(1, 'Kepala', '1', 'Rabu, 02 Agustus 2017, 12:40'),
(2, 'Sekretaris', '2', 'Rabu, 02 Agustus 2017, 22:29'),
(3, 'Bendahara', '2', 'Rabu, 02 Agustus 2017, 22:29'),
(4, 'Kaur1', '3', 'Rabu, 02 Agustus 2017, 22:29'),
(5, 'Kaur2', '2', 'Rabu, 02 Agustus 2017, 22:29');

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
(1, 'jajaran_perangkat', '<center><p><img alt="" src="/sids/assets/ckeditor/kcfinder/upload/images/Desert.jpg" style="height:576px; width:768px" /></p></center>\r\n'),
(2, 'sejarah', '<div class="center" style="text-align:center">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n</div>\r\n'),
(3, 'visi_misi', '<h2><strong>VISI</strong></h2>\r\n\r\n<ol>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n</ol>\r\n\r\n<h2><strong>MISI</strong></h2>\r\n\r\n<ol>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, 'bpd', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(5, 'lpmd', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(6, 'pkk', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(7, 'karangtaruna', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, 'bantuan', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

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
  `tipe_gbr` varchar(255) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `nik`, `nama`, `alamat`, `keterangan`, `nm_gbr`, `tipe_gbr`, `status`) VALUES
(18, 'rtyui', 'tyuio', 'yuiop', 'tyuio', 'file_1501146723.jpg', 'image/jpeg', '2'),
(19, 'rtyuio', 'tyuiop', 'yuiop', 'uiop', 'file_1501146788.jpg', 'image/jpeg', '2'),
(20, 'yuiop', 'tyuio', 'yuio', 'tyui', 'file_1501146826.jpg', 'image/jpeg', '2'),
(21, 'y678908u9i0', '67890', '7y', 'yuiop', 'file_1501146961.jpg', 'image/jpeg', '2'),
(22, '6789', '6789', '6789', '6789', 'file_1501146982.jpg', 'image/jpeg', '2'),
(23, 'rtyui', 'tyuio', 'tyuio', 'tyui', 'file_1501147023.jpg', 'image/jpeg', '1'),
(24, '890900', 'ouoiu', 'uoiuio', 'uoiu', 'file_1501147059.jpg', 'image/jpeg', '2'),
(25, '67890', 'tyuio', 'tyuio', 'yuio', 'file_1501208592.jpg', 'image/jpeg', '2'),
(26, '6789', 'tyuio', 'ghjkl', 'ghjkl', 'file_1501208816.jpg', 'image/jpeg', '1'),
(27, 'rtyuio', 'tyuiop', 'tyuiop[', 'tyuiop', 'file_1501209168.jpg', 'image/jpeg', '2'),
(28, '9789', 'yuio', 'yuiop[', 'uiop[', 'file_1501209343.jpg', 'image/jpeg', '1'),
(29, '567890RTYUIOP', 'gyuiop', 'yuiop[', 'yuiop[', 'file_1501224192.jpg', 'image/jpeg', '1'),
(30, 'ty7890', 'tyuiop', 'yuiop', 'uiop', 'file_1501224258.jpg', 'image/jpeg', '1'),
(31, 'yuio', 'yuiop', 'yuiop', 'yuiop', 'file_1501224367.jpg', 'image/jpeg', '1'),
(32, '6788', '678', '678', '678', 'file_1501225609.jpg', 'image/jpeg', '1'),
(33, '979', '9789', '798789', '8', 'file_1501226156.jpg', 'image/jpeg', '1'),
(34, '789', '789', '789', '789', 'file_1501227292.jpg', 'image/jpeg', '1'),
(35, 'uiyiyi', 'iuyi', 'uyiu', 'iuyi', 'file_1501227445.jpg', 'image/jpeg', '1'),
(36, 'tyuioiop', 'yuio', 'uiop', 'uiop', 'file_1501491135.jpg', 'image/jpeg', '2'),
(37, '67890-', '67890', '7890', '7890', 'file_1501566067.jpg', 'image/jpeg', '1'),
(38, '67890', 'tyuio', 'yuio', 'yuiop', 'file_1501566144.jpg', 'image/jpeg', '2'),
(39, '1234567890', 'ilham', 'malang', 'sdjlakd aslkjlkasjda lasjdlkasjd alkjsdlkajd aldskjladj lkjdlkasjd asldkjlkad lakjdlkajd lkjdlka lskjdlka  lassjdlkasjd ', 'file_1501639955.jpg', 'image/jpeg', '1'),
(40, '4567890`567', 'ilham effendi', 'treg', 'tyuiop[', 'file_1501655525.jpg', 'image/jpeg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `id` int(11) NOT NULL,
  `nm_pk` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nm_pk`, `jml`) VALUES
(1, 'Pns', 330),
(2, 'Petani', 2135),
(3, 'Pedagang', 300),
(4, 'Pengusaha', 223),
(7, 'Lain-lain', 321);

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
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `keperluan` text NOT NULL,
  `lampiran1` varchar(255) NOT NULL,
  `lampiran2` varchar(255) NOT NULL,
  `lampiran3` varchar(255) NOT NULL,
  `lampiran4` varchar(255) NOT NULL,
  `lampiran5` varchar(255) NOT NULL,
  `lampiran6` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `nik`, `nama`, `nohp`, `jenis`, `keperluan`, `lampiran1`, `lampiran2`, `lampiran3`, `lampiran4`, `lampiran5`, `lampiran6`, `tgl`, `status`) VALUES
(6, '6755757', 'uiyiyi', '098098980', '005', 'rtyuio yuiop[ tyuiop[ yuiop', 'file_1501655725.jpg', '', '', '', '', '', '02 Agustus 2017, 13:35', '1'),
(7, '509485', 'oiuoiiuio', '09876543', '006', 'doiuonif oiwefunoiwu ofeunwf ', 'file_1501655814.jpg', '', '', '', '', '', '02 Agustus 2017, 13:36', '2'),
(8, '4567890', 'retyuiop', 'rtyuiop', '005', 'fghjkl', 'file_1501657086.jpg', '', '', '', '', '', '02 Agustus 2017, 13:58', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide_image`
--

CREATE TABLE IF NOT EXISTS `slide_image` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nm_gbr` varchar(255) NOT NULL,
  `tipe_gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `slide_image`
--

INSERT INTO `slide_image` (`id`, `judul`, `nm_gbr`, `tipe_gbr`) VALUES
(1, 'aaaaa', 'file_1501141950.jpg', 'jpg'),
(2, 'bbbb', 'file_1501141950.jpg', 'jpg'),
(3, 'cccccc', 'dskhkajdh.jpg', 'jpg'),
(4, 'dddd', 'jhriqr.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_jabatan` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL COMMENT '9=admin, 8=user',
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_jabatan`, `level`, `created_by`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kepala', 'admin', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
