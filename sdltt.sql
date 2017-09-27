-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Sep 2017 pada 06.40
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdltt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `penulis`, `isi`, `gambar`, `tgl`) VALUES
(1, 'Teks Lorem Ipsum', 'ilham', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3>Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', 'file_1502077071.png', '03 Agustus 2017'),
(2, 'Teks Lorem Ipsum 2', 'Arif', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3>Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', 'file_1502077099.png', '03 Agustus 2017'),
(3, 'Lorem Ipsum 3', 'rtyuiop', '<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3>Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', 'file_1502090815.jpg', '06 Agustus 2017'),
(6, 'Lorem Ipsum 4', 'Ilham', '<h2>Lorem Ipsum: usage</h2>\r\n\r\n<p><strong>Lorem ipsum</strong>&nbsp;is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It&#39;s also called placeholder (or filler) text. It&#39;s a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it&#39;s not genuine, correct, or comprehensible Latin anymore. While&nbsp;<strong>lorem ipsum</strong>&#39;s still resembles classical Latin, it actually has no meaning whatsoever. As Cicero&#39;s text doesn&#39;t contain the letters K, W, or Z, alien to latin, these, and others are often inserted randomly to mimic the typographic appearence of European languages, as are digraphs not to be found in the original.</p>\r\n\r\n<p><img alt="diagonal layout based on Lorem Ipsum" src="data:image/x-png;base64,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" style="height:120px; width:190px" title="diagonal layout based on Lorem Ipsum" /></p>\r\n\r\n<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that&#39;s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied from a newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.&nbsp;<strong>Lorem ipsum</strong>&nbsp;and its many variants have been employed since the early 1960ies, and quite likely since the sixteenth century.</p>\r\n', 'file_1502090769.jpg', '07 Agustus 2017'),
(7, 'Lorem Ipsum 5', 'ilham', '<h3 style="text-align:justify">The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p style="text-align:justify">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3 style="text-align:justify">Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p style="text-align:justify">&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3 style="text-align:justify">1914 translation by H. Rackham</h3>\r\n\r\n<p style="text-align:justify">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3 style="text-align:justify">Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p style="text-align:justify">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', 'file_1502085166.jpg', '07 Agustus 2017'),
(8, 'Lorem Ipsum 6', 'ilham', '<p>ertyu yuiop[ tyuiop[] uiop[]</p>\r\n', 'file_1502087051.jpg', '07 Agustus 2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gimage`
--

CREATE TABLE IF NOT EXISTS `gimage` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gimage`
--

INSERT INTO `gimage` (`id`, `judul`, `deskripsi`, `img`, `tanggal`) VALUES
(1, 'Test 1', 'Test Foto 1', 'file_1506400163.jpg', 'Selasa, 26 September 2017, 11:30'),
(2, 'Test 2', 'Test Foto 2', 'file_1506400180.jpg', 'Selasa, 26 September 2017, 11:29'),
(3, 'Test Foto 3', 'Test Foto 3', 'file_1506400228.jpg', 'Selasa, 26 September 2017, 11:30'),
(4, 'Test Foto 4', 'Test Foto 4', 'file_1506400244.jpg', 'Selasa, 26 September 2017, 11:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gvideo`
--

CREATE TABLE IF NOT EXISTS `gvideo` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gvideo`
--

INSERT INTO `gvideo` (`id`, `judul`, `link`, `deskripsi`) VALUES
(1, 'video 1', 'https://www.youtube-nocookie.com/embed/_X_sR8vfrjo', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(2, 'video 2', 'https://www.youtube-nocookie.com/embed/-5B6EwkWXxE', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(3, 'video 3', 'https://www.youtube-nocookie.com/embed/ctHIlOQr6jM', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(4, 'video 4', 'https://www.youtube-nocookie.com/embed/ma19gfUrZl0', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(5, 'video 5', 'https://www.youtube-nocookie.com/embed/VkctE1SSk_A', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(6, 'video 6', 'https://www.youtube.com/embed/LbN44FfAMIs', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(7, 'video 7', 'https://www.youtube.com/embed/XyQlFkUr5pw', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(8, 'video 8', 'https://www.youtube.com/embed/q_3d6lKdPtY', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(9, 'video 9', 'https://www.youtube.com/embed/Xp4-WecU3Po', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(10, 'video 10', 'https://www.youtube.com/embed/8V1D23xEZTo', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.'),
(11, 'video 11', 'https://www.youtube.com/embed/hGiA9ITTPlU', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL,
  `nm_kls` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nm_kls`, `jml`) VALUES
(1, 'Kelas 1', 20),
(2, 'Kelas 2', 21),
(3, 'Kelas 3', 22),
(4, 'Kelas 4', 23),
(8, 'Kelas 5', 24),
(9, 'Kelas 6', 25);

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
(1, 'struktur_organisasi', '<center><p><img alt="" src="/sids/assets/ckeditor/kcfinder/upload/images/Desert.jpg" style="height:576px; width:768px" /></p></center>\r\n'),
(2, 'tenaga_pendidik', '<div class="center" style="text-align:center">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">\r\n<div class="center" style="text-align:justify"><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</div>\r\n</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n\r\n<div class="center" style="text-align:justify">&nbsp;</div>\r\n</div>\r\n'),
(3, 'visi_misi', '<h2><strong>VISI</strong></h2>\r\n\r\n<ol>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n	<li><span style="font-size:18px">Aaaaaaaaaa aaaaaaaaaa a &nbsp;aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaa</span></li>\r\n</ol>\r\n\r\n<h2><strong>MISI</strong></h2>\r\n\r\n<ol>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n	<li><span style="font-size:16px">Bbbbbbbb bbbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbb b bbbbbbbbbbbbbbb bbbbbbbbbbb</span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, 'bantuan', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks &nbsp; dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE IF NOT EXISTS `kritik` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kritik` varchar(255) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`id`, `nama`, `alamat`, `kritik`, `status`) VALUES
(1, 'ilham', 'Malang', 'test kritik', '2'),
(2, 'arif', 'Malang', 'test kritik', '1'),
(3, 'oieruwoi', 'oiewurowuqoiu', 'oeiwurowuoiw', '1'),
(4, 'sooafd', 'soduoaiduoa', 'saaiudyiuaydui', '1'),
(5, 'ertyuio', 'ertyuio', 'ertyuiop', '2'),
(6, '12345678', '12345678', '12345678', '1'),
(7, 'wertyuiop', 'rtyuiop[', 'rtyuiop[]', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidik`
--

CREATE TABLE IF NOT EXISTS `pendidik` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidik`
--

INSERT INTO `pendidik` (`id`, `kode`, `nama`, `jk`, `jabatan`, `foto`) VALUES
(3, 'G003', 'Andre', 'Laki-laki', 'Guru Kelas', 'file_1504833591.JPG'),
(9, 'ertyuiop', 'rtyuiop[', 'tyuiop[', 'tyuiop', 'file_1504834972.jpg'),
(10, 'riquyrui', 'wwqueoqueo', 'eoieuoqieu', 'sueoiqueio', 'file_1504834988.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `jk`, `jml`) VALUES
(1, 'Laki-laki', 100),
(2, 'Perempuan', 130);

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
(1, 'aaaaa', 'file_1502009381.jpg', 'image/jpeg'),
(2, 'bbbb', 'file_1501812203.jpg', 'image/jpeg'),
(3, 'cccccc', 'file_1501812223.jpg', 'image/jpeg'),
(4, 'dddd', 'file_1501812237.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL COMMENT '9=admin, 8=user',
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_by`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(9, 'siswa', 'bcd724d15cde8c47650fda962968f102', 'user', 0),
(11, 'ilham', '0ac05b7981fd5e0d6d0e5b4b78e49917', 'admin', 0);

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
(1, 'video', 'https://www.youtube.com/embed/8iGrAmLq0d4'),
(2, 'streaming', 'https://www.youtube.com/embed/sBikujSDWj0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gimage`
--
ALTER TABLE `gimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gvideo`
--
ALTER TABLE `gvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidik`
--
ALTER TABLE `pendidik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gimage`
--
ALTER TABLE `gimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gvideo`
--
ALTER TABLE `gvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pendidik`
--
ALTER TABLE `pendidik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
