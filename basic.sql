-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2019 at 06:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(2) NOT NULL,
  `nm_kategori` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deskripsi`) VALUES
(1, 'matematika', ''),
(2, 'b_indo', ''),
(3, 'b_ingg', '');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(7) NOT NULL,
  `id_kategori` int(3) NOT NULL COMMENT 'foreignkey',
  `judul` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `headline` text COLLATE utf8_unicode_ci NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `id_pengirim` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_kategori`, `judul`, `headline`, `isi`, `id_pengirim`, `tanggal`) VALUES
(3, 3, 'ggggg', 'gjgjhhffsvgsfhfsfd', 'fgstraesgchfhvnfgbs', '1', '2016-10-08 17:12:16'),
(4, 2, 'Tutorial Belajar MySQL', 'Pengertian Hak Akses GRANT OPTION', 'Ada kalanya seorang user MySQL ingin mengalihkan hak akses yang ia miliki ke user lainnya.\r\n\r\nMisalkan mahasiswa ilkom sudah dirasa terlalu banyak, sehingga user ilkom_admin1 membutuhkan admin baru untuk membantunya. User ilkom_admin1 bisa saja mengalihkan hak akses yang dimilikinya (tanpa mengapus hak akses sendiri) ke user ilkom_admin2.\r\n\r\nKemampuan untuk memberikan hak akses inilah yang disebut dengan hak GRANT OPTION. Tetapi syarat untuk seorang user dapat mengalihkan hak aksesnya adalah sewaktu pembuatan user asal, user root harus memberikan hak GRANT OPTION.\r\n\r\n\r\nGRANT OPTION adalah perintah yang dituliskan jika kita mengizinkan user tersebut bisa memberikan hak akses kepada user lainnya.\r\nnama_database adalah nama database yang ingin diberikan hak akses. Jika kita mengizinkan user tersebut dapat mengakses semua database yang ada, nama_database bisa ditulis dengan tanda bintang (*).\r\nnama_tabel adalah nama tabel yang ingin diberikan hak akses. Jika kita mengizinkan user dapat menggunakan semua tabel, nama_tabel bisa ditulis dengan tanda bintang (*).\r\nnama_user adalah nama dari user yang akan diberikan hak akses.\r\nlokasi_user adalah alamat IP dari user yang ingin diberikan hak akses.\r\n\r\nSebagai contoh latihan, saya akan membuat user ilkom_admin1 dengan hak GRANT OPTION, lalu memberikan akses tersebut ke user ilkom_admin2.\r\n\r\nUntuk langkah awal, saya akan masuk sebagai root dan membuat user ilkom_admin1 dengak hak akses query SELECT pada tabel mahasiswa_ilkom, lalu memberikan hak akses GRANT OPTION untuk user ilkom_admin1. Berikut query yang digunakan:', '2', '2016-10-08 17:18:54'),
(5, 1, 'Tutorial Belajar', 'Pengertian Hak Akses GRANT OPTION\r\n', '\r\nAda kalanya seorang user MySQL ingin mengalihkan hak akses yang ia miliki ke user lainnya.\r\n\r\nMisalkan mahasiswa ilkom sudah dirasa terlalu banyak, sehingga user ilkom_admin1 membutuhkan admin baru untuk membantunya. User ilkom_admin1 bisa saja mengalihkan hak akses yang dimilikinya (tanpa mengapus hak akses sendiri) ke user ilkom_admin2.\r\n\r\nKemampuan untuk memberikan hak akses inilah yang disebut dengan hak GRANT OPTION. Tetapi syarat untuk seorang user dapat mengalihkan hak aksesnya adalah sewaktu pembuatan user asal, user root harus memberikan hak GRANT OPTION.', '2', '2016-10-08 18:59:17'),
(6, 2, 'Tutorial Belajar MySQL', 'tutorial menampilkan tabel dengan query SELEC', 'Menampilkan data dari sebuah tabel merupakan hal paling sering kita lakukan dalam menangani database. Pembuatan tabel MySQL hanya perlu di lakukan sekali di awal implementasi, namun input data (INSERT) dan menampilkannya kembali (SELECT) dalam format yang diinginkan merupakan rutinitas selama database masih digunakan.', '3', '2016-10-13 19:40:45'),
(8, 3, 'Tutorial Belajar', 'Menjalankan Perintah (query) MySQL', 'Setiap perintah, atau sering juga disebut â€œqueryâ€ didalam MySQL harus diakhiri dengan tanda titik koma â€œ;â€ dan akan dieksekusi setelah tombol Enter ditekan. Selama query MySQL belum diakhiri dengan â€œ;â€ maka itu dianggap masih dalam satu perintah.\r\n\r\nKetika kita menjalankan sebuah perintah MySQL (query), query tersebut akan dikirim dari MySQL Client ke MySQL Server untuk di proses, setelah proses selesai, hasilnya akan dikirim kembali ke MySQL Client.\r\n\r\nAgar lebih mudah memahami query MySQL, kita akan langsung praktek beberapa query sederhana. Silahkan jalankan MySQL Server dan masuk sebagai user root dari MySQL Client (tutorialnya telah kita bahas pada Tutorial Belajar MySQL: Cara Menjalankan MySQL Server, dan Tutorial Belajar MySQL: Cara Menjalankan MySQL Client).', '3', '2016-10-18 11:05:48'),
(9, 2, 'Memunculkan Menu Setelah DiSroll', 'Membuat Sticky Menu', 'Membuat Sticky Menu - Pada tutorial terdahulu saya menjelaskan Cara Membuat Widget Melayang di Blog (Sticky Widget), saat ini saya akan berbagi bagaimana membuat Sticky Menu.\r\n\r\nDengan membuat sticky menu, tentunya akan memudahkan pengunjung mengeksplor blog sobat tanpa harus naik turun scroll. Sticky Menu ini awalnya akan terlihat normal, tetapi akan melayang (fixed) ketika mouse discroll ke bawah.', '1', '2016-10-18 11:09:49'),
(11, 1, 'Header', 'Lorem ipsum dolor sit amet', '123456789 Lorem ipsum dolor sit amet. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nLorem ipsum dolor sit amet. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nLorem ipsum dolor sit amet. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nLorem ipsum dolor sit amet. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur.\r\n\r\nLorem ipsum dolor sit amet. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.\r\n\r\nNemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet, consectetur, adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem.\r\n\r\nUt enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur. ', '3', '2016-10-18 11:12:02'),
(12, 2, 'paijo', 'paijo', 'paijo', '1', '2016-10-20 21:06:27'),
(13, 1, 'loh', 'loh', 'loh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh lohloh loh loh loh loh loh loh loh loh loh loh loh', '2', '2016-10-27 21:15:53'),
(14, 2, 'Menentukan unsur-unsur paragraf, ide pokok, kalimat utama, kalimat penjelas', 'Menentukan unsur-unsur paragraf, ide pokok, kalimat utama, kalimat penjelas', 'untuk materi kali ini kita akan membahas mengenai unsur-unsur paragraf, ide pokok, kalimat utama, dan kalimat penjelas. Paragraf merupakan sekelompok kalimat yang saling berhubungan dan bersama-sama membentuk suatu kesatuan pokok pembahasan. Paragraf terdiri dari beberapa kalimat yang kalimat-kalimat tersebut saling berelasi mengusung sebuah gagasan tetentu.\r\n\r\nSecara umum paragraf dibentuk oleh dua unsur, yaitu gagasan utama dan beberapa gagasan penjelas. Gagasan utama merupakan gagasan yang menjadi dasar pengembangan suatau paragraf. Gagasan utama mencerminkan masalah yang di bahas di dalam sebuah paragraf. Dan biasanya gagasan utama mengandung kesimpulan paragraf yang bersifat umum. Gagasan utama tersebut umumnya terdapat dalam kalimat utama. Sedangkan gagasan penjelas merupakan gagasan yang berfungsi sebagai pendukung gagasan utama.\r\n\r\nUntuk lebih mudah memahami materi ini, mari kita buat sebuah contoh. Perhatikan sebuah paragraf di bawah ini : \r\n\r\n1) Bernyanyi dapat menjadi obat bagi orang yang sedih. 2) Orang yang bernyanyi dengan riang gembira  biasanya melupakan hal-hal yang membebaninya secara psikologis. 3) Perasan bahagia akan timbul kala seseorang bernyanyi dengan tanpa beban pikiran yang mengganggunya. 4) Sebagai gantinya, timbul rasa optimis dan semangat hidup.\r\n\r\nMari kita bedah kalimat di atas !\r\n\r\nMenurut anda kalimat nomor berapa yang merupakan ide pokok paragraf itu ?\r\n\r\nKalau jawaban anda adala nomor satu, 100 untuk anda. Mengapa jawabannya adalah nomor satu ??\r\nperhatikan baik-baik kalimat nomor satu, kalimat tersebut mencerminkan suatu permasalahan yang di bahas di dalam paragraf tersebut. Kalimat nomor satu juga bersifat umum. Jadi, ide pokok paragraf di atas adalah kalimat nomor satu.\r\n\r\nUntuk kalimat nomor 2, 3, dan 4, merupakan kalimat penjelas dari kalimat utama yang terdapat pada paragraf tersebut. Kalimat-kalimat tersebut mendukung kalimat utama. Ingat, kalimat penjelas adalah kalimat yang mendukung gagasan utama. Sehingga secara otomatis kalimat nomor 2, 3, 4, adalah kalimat penjelas.', '2', '2016-11-16 13:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengirim` int(3) NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengirim`, `username`, `password`, `email`) VALUES
(1, 'aku', 'qwertyui', ''),
(2, 'root', '12345678', ''),
(3, 'baru', 'baru123', ''),
(4, 'coba', 'coba', 'coba'),
(5, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengirim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengirim` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
