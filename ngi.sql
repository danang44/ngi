# ************************************************************
# Sequel Ace SQL dump
# Version 3043
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.32)
# Database: ngi
# Generation Time: 2023-10-08 14:45:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artikels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artikels`;

CREATE TABLE `artikels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikellengkap` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `artikels` WRITE;
/*!40000 ALTER TABLE `artikels` DISABLE KEYS */;

INSERT INTO `artikels` (`id`, `judul`, `gambar`, `author`, `tanggal`, `deskripsi`, `artikellengkap`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(10,'Redesigning PIS NGI Apps','1694668769.png','Amanda H','2023-09-15','<p>Lorem ipsum dolor sit amet consectetur.</p>','<p>Kedatangan Muhammad Ramadhan Sananta dan Beckham Putra Nugraha&nbsp;bakal mengubah susunan formasi&nbsp;Timnas Indonesia U-24 yang berlaga pada fase gugur Asian Games 2022 (2023).<br>Sananta dan Beckham baru berangkat menuju Hangzhou pada Senin (25/9) malam bersama Ketua Badan Tim Nasional (BTN) Sumardji.<br><br>Kedatangan pemain Persis Solo dan Persib Bandung diyakini tak akan menjadi pelengkap saja jika mengacu pada permainan Timnas Indonesia U-24 yang kurang optimal saat menjalani laga fase grup.<br><br>Baca artikel CNN Indonesia \"Formasi Timnas Indonesia di Asian Games dengan Sananta dan Beckham\" selengkapnya di sini: <a href=\"https://www.cnnindonesia.com/olahraga/20230925154928-142-1003471/formasi-timnas-indonesia-di-asian-games-dengan-sananta-dan-beckham\">https://www.cnnindonesia.com/olahraga/20230925154928-142-1003471/formasi-timnas-indonesia-di-asian-games-dengan-sananta-dan-beckham</a>.<br><br>Download Apps CNN Indonesia sekarang https://app.cnnindonesia.com/</p>','2023-09-13 20:46:11','2023-09-26 00:30:52','2023-09-26 00:30:52'),
	(13,'Redesigning PIS NGI Apps','1694685578.png','Amanda H','2023-09-14','<p>Lorem ipsum dolor sit amet consectetur.</p>','<p>Secara umum, tujuan pembuatan <a href=\"https://www.bola.com/tag/artikel\"><strong>artikel</strong></a> ialah untuk memengaruhi, mendidik, memberitahu, meyakinkan, serta menghibur pembacanya. Artikel biasanya dipublikasikan di suatu media, seperti buletin, majalah, koran maupun website.</p><p>Untuk bisa menulis artikel yang menarik dan berkualitas memang bukan hal yang mudah. Perlu berlatih dan memiliki wawasan serta pandangan yang luas.</p><p>Selain itu, penting juga membaca contoh-contoh artikel. Ada banyak contoh-contoh artikel yang bisa dibaca dan dipahami.</p>','2023-09-14 02:59:38','2023-09-25 17:54:37',NULL),
	(14,'Redesigning PIS NGI Apps','1695006608.png','Amanda H','2023-09-20','<p>Lorem ipsum dolor sit amet consectetur.</p>','<p>Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia. Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. Tak hanya itu saja, makanan cepat saji memiliki cita rasa yang lezat, ditambah lagi harganya yang terjangkau.</p><p>Makanan cepat saji sudah lama mengundang kontroversi di negara kita karena terungkapnya beberapa dampak buruk yang dimiliki. Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan, seperti lilin yang ada pada mie instan. Tak berhenti di situ, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin.</p>','2023-09-17 20:10:08','2023-09-25 18:29:57',NULL),
	(17,'NGI Menambah Layanan Baru','1695185683.png','Amanda H','2023-09-18','<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate quisquam cumque, distinctio adipisci tenetur blanditiis.</p>','','2023-09-19 21:54:43','2023-09-25 22:06:14','2023-09-25 22:06:14'),
	(18,'NGI Menambah Layanan Baru','1695663009.png','Amanda H','2023-09-29','<p>Lorem ipsum dolor sit amet consectetur.</p>','<p>ndonesia adalah negara dengan iklim tropis yang terdiri dari ribuan pulau. Walaupun daratan Indonesia tak seluas lautannya, hutan di Indonesia sangat banyak, mulai dari ujung Aceh yaitu Sabang hingga Merauke (Papua). Beberapa tahun terakhir kebakaran di Indonesia kerap terjadi, hal itu disebabkan dua faktor yaitu faktor alam dan buatan (manusia).</p><p>Mengenai faktor alam memang tak ada yang dapat disalahkan, tetapi mengenai faktor buatan yaitu manusia itulah hal yang perlu dievaluasi. Kini manusia telah kehilangan kesadarannya hingga mereka melakukan hal-hal yang merugikan banyak pihak di antaranya merugikan lingkungan hidup, contohnya hutan. Hutan adalah habitat dari ribuan spesies makhluk hidup yang saling bergantungan.</p><p>Maka itu, aksi manusia membakar hutan untuk memenuhi maksud dari dalam dirinya sendiri memang perlu diadili. Alasan mereka melakukan pembakaran hutan beragam, mulai ingin membuka lahan tanam baru hingga berdirinya gedung-gedung bertingkat. Namun, hal yang disayangkan yaitu betapa mereka tak memikirkan aneka flora dan fauna yang tinggal di dalam hutan tersebut.</p>','2023-09-21 02:36:47','2023-09-25 18:30:11',NULL),
	(20,'Redesigning PIS Nusantara Mobile App for Reducing Stress Level of a BRT Passangers','1695702917.png','Retails','2023-09-05','<p><strong>Artikel</strong> adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan di media daring maupun cetak (melalui koran, majalah,&nbsp;..</p>','<p><strong>Artikel</strong> adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan di media daring maupun cetak (melalui koran, majalah,&nbsp;..</p>','2023-09-25 21:35:17','2023-09-25 22:02:31','2023-09-25 22:02:31');

/*!40000 ALTER TABLE `artikels` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bankings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bankings`;

CREATE TABLE `bankings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cards`;

CREATE TABLE `cards` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;

INSERT INTO `cards` (`id`, `judul`, `gambar`, `author`, `tanggal`, `deskripsi`, `kontenlengkap`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(2,'NGI Menambah Layanan Baru','1694669348.png','Public Service','2023-09-13','<p>Semarang,&nbsp; Sijiwiji sebuah Grup band Asal Kota Semarang beranggotakan 6 personil</p>','<p>Semarang,&nbsp; Sijiwiji sebuah Grup band Asal Kota Semarang beranggotakan 6 personil yaitu Ersigit Aditya pada vocal, Byan S pada drum, Pisco Dwi pada lead gitar, Setyo A pada bass, Mikko W pada gitar, dan Dandi Dobleh pada kendang kembali meluncurkan lagu dengan judul \"Jogo Kangenku\", Kamis 24 Februari 2022. &nbsp; Sijiwiji yang mengusung genre musik Pop Dangdut modern ini, personilnya merupakan karyawan Badan Layanan Umum Unit Pelaksana Teknis Daerah Trans Semarang.&nbsp; &nbsp; Kepala BLU UPTD Trans Semarang, Hendrix Setiawan mendukung penuh Sijiwiji dalam bermusik. &nbsp; Hendrix mensuport penuh dengan memfasilitasi pembuatan video Jogo Kangenku yang sudah dapat dinikmati penikmat musik melalui YouTube. &nbsp; \"Kami memberikan dukungan penuh karyawan dalam berkarya. Pembuatan video Sijiwiji dilakukan di Terminal Gunungpati, menggunakan armada Feeder 4 dan juga menggunakan talent karyawan Trans Semarang\", sebut Hendrix. &nbsp; &nbsp; Sebelumnya sebanyak 17 Musisi asal Kota Semarang dari berbagai genre telah berkolaborasi dalam sebuah kompilasi bertajuk “Senandung Sudut Halte”.</p>','2023-09-13 21:22:56','2023-09-25 09:30:55',NULL),
	(4,'Redesigning PIS Nusantara Mobile App','1695609677.png','Retails','2023-09-07','<p>Semarang,- Trans Semarang kembali mengoperasionalkan Rute Feeder 1</p>','<p>Semarang,- Trans Semarang kembali mengoperasionalkan Rute Feeder 1 mulai Jumat 25 maret 2022. Hal tersebut diketahui melalui unggahan akun media sosial Trans Semarang @Transsemarang Selasa (22/03)&nbsp; “#SobatTS Rute Feeder 1 kembali hadir melayani masyarakat di Kota Semarang mulai 25 Maret 2022”. Lebih lanjut disebutkan jika rute yang dilalui dibagi menjadi 2 jalur. Feeder 1A menempuh rute : Ngaliyan – Beringin – Gondoriyo – Padaan – Pasar Mijen – Palir – Gondoriyo – Beringin&nbsp; – Ngaliyan , dan Feeder 1B menempuh rute : Ngaliyan – Klampisan – Krapyak –&nbsp; Karangayu&nbsp; – Madukoro – Pamularsih – Suratmo ¬– Krapyak – Klampisan – Ngaliyan. &nbsp; Kepala Badan Layanan Umum Unit Pelaksana Teknis Daerah Trans Semarang, Hendrix Setiawan mengungkapkan jika layanan Feeder 1 akan terkoneksi dengan Koridor 1, Koridor 4, Koridor 5, Koridor 8. &nbsp; Pengadilan.</p>','2023-09-14 03:06:05','2023-09-25 09:31:26',NULL),
	(6,'NGI Berinovasi','1695009275.png','Public Service',NULL,'<p>Redesigning PIS Nusantara Mobile App for Reducing Stress Level of a BRT Passangers</p>',NULL,'2023-09-17 20:54:35','2023-09-25 08:42:36','2023-09-25 08:42:36'),
	(12,'Redesigning PIS Nusantara Mobile App for Reducing Stress Level of a BRT Passangers','1695646909.jpg','Public Service','2023-09-07','<p>Redesigning PIS Nusantara Mobile App for Reducing Stress Level of a BRT Passangers</p>',NULL,'2023-09-20 19:59:46','2023-09-25 06:43:36','2023-09-25 06:43:36'),
	(14,'Redesigning PIS Nusantara Mobile App for Reducing Stress Level of a BRT Passangers','1695570449.png','Public Service','2023-09-05','<p>Trans Semarang melakukan sosialisasi Feeder 3 rute Terminal Penggaron&nbsp;</p>','<p>Semarang, Panjawi Production bekerjasama dengan Trans Semarang merilis Kompilasi Ambyaran Semarang.&nbsp; Kompilasi ini diisi oleh 13 musisi yang terdiri dari grup musik maupun solois asal Semarang dan sekitarnya. Kompilasi Ambyaran Semarang dirilis pada tanggal 18 September di beberapa kanal digital. &nbsp; \"Musisi Kompilasi Ambyaran Semarang ini, terpilih setelah melewati&nbsp; fase seleksi yang selektif dari banyak materi yang dikirimkan pada kami. Akhirnya kami pilih 13 karya.&nbsp; Angka 13 merujuk pada Hari Jadi Trans Semarang yang ke 13 tahun.&nbsp; Kami berafiliasi dengan Trans Semarang untuk menyebarluaskan karya milik kawan - kawan musisi Semarang\", ungkap Syarief Yulian Saputra koordinator Panjawi. &nbsp; Kepala BLU UPTD Trans Semarang, Hendrix Setiawan menyambut baik ide dari Panjawi ini. “Dikarenakan untuk memutar musik ditransportasi&nbsp; diatur terkait hak ciptanya, Kompilasi Ambyaran Semarang ini seperti Simbiosis mutualisme antara Panjawi dengan Trans Semarang.&nbsp; Trans Semarang bisa dipromosikan oleh musisi yang tergabung&nbsp; Panjawi.” tutur Hendrix &nbsp; Beberapa nama pengisi Kompilasi Ambyaran Semarang, adalah musisi yang telah dikenal masyarakat seperti; Sam Kawe,&nbsp; Viko YP, Sandy Petiz, Siji Wiji, Bayu Jeru, Ilham Muiz, Rano Parno, Pujiono Project, Nadia Arova, Mellodika, Kandrick Team, Gogor More dan Soni Teyeng.&nbsp; &nbsp; Tujuan dari Kompilasi ini tak lain untuk lebih nguri - uri budaya dan bahasa Jawa, tidak hanya terkesan mengikuti trend semata. Dan yang unik dari Kompilasi Ambyaran Semarang adalah, karya milik kawan - kawan dari Semarang ini tidak melulu bercorak dangdut saja, ada pop, dan bahkan cita rasa musik rockpun ada di Kompilasi ini. Karena yang menyatukan adalah kecintaan pada budaya dan bahasa jawa, musik hanya merupakan katalis saja. &nbsp; link untuk menikmati karya musisi Panjawi Kompilasi Ambyaran Semarang</p>','2023-09-20 20:06:01','2023-09-25 09:31:47',NULL),
	(18,'Nusantara Global Inovasi eTicketing Solution','1695570602.png','Retails','2023-09-19','<p>Semarang,- Kepala Badan Layanan Umum Unit Pelaksana Teknis Daerah Trans Semarang,&nbsp;</p>','<p>Semarang,- Kepala Badan Layanan Umum Unit Pelaksana Teknis Daerah Trans Semarang, Hendrix Setiawan menyebut semua armada Trans Semarang yang operasional telah melalui Uji kelayakan armada.&nbsp; “Bagian yang dilakukan pengecekan meliputi Ban, Rem, Lampu, Mesin, dan pengecekan Emisi gas buang kendaraan”, sebutnya. &nbsp; Uji KIR merupakan kumpulan rangkaian kegiatan untuk melakukan uji kendaraan bermotor sebagai tanda bahwa kendaraan tersebut layak digunakan secara teknis di jalan raya, khususnya bagi kendaraan yang membawa angkutan penumpang dan barang. &nbsp; Uji Kir ini bertujuan untuk memastikan agar kendaraan masih berfungsi dengan baik. Sangat berbahaya mengabaikan soal uji Kir karena selain sanksi juga membahayakan para pengguna jalan.&nbsp; &nbsp; Trans Semarang saat ini memiliki total 245 armada. Terdiri dari 170 bus dan 75 Feeder. Armada ini terbagi untuk koridor 1 – 8 dan 3 rute Feeder.&nbsp;</p>','2023-09-24 08:20:09','2023-09-25 09:32:00',NULL);

/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table compros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `compros`;

CREATE TABLE `compros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `compros` WRITE;
/*!40000 ALTER TABLE `compros` DISABLE KEYS */;

INSERT INTO `compros` (`id`, `deskripsi`, `nama`, `email`, `whatsapp`, `pdf`, `created_at`, `updated_at`)
VALUES
	(68,NULL,'Ginanjar','ginanjarbayuaji@gmail.com','0895229537879',NULL,'2023-09-22 01:13:14','2023-09-22 01:13:14'),
	(70,NULL,'SyaifulNW','syaifulnurw123@gmail.com','089522953712',NULL,'2023-09-24 08:07:11','2023-09-24 08:07:11'),
	(71,NULL,'Ginanjar','ginanjarbayuaji@gmail.com','0891231425',NULL,'2023-09-24 08:08:02','2023-09-24 08:08:02'),
	(73,NULL,'AWS','syaifulnurw17@gmail.com','0891231425',NULL,'2023-09-24 08:11:14','2023-09-24 08:11:14'),
	(74,NULL,'Trans Jatim','admin@gmail.com','0895229537879',NULL,'2023-09-24 19:47:06','2023-09-24 19:47:06'),
	(79,NULL,'Secret name','syaifulnurw123@gmail.com','0895229537879',NULL,'2023-09-25 23:08:22','2023-09-25 23:08:22'),
	(80,NULL,'Secret name','syaifulnurw123@gmail.com','0895229537879',NULL,'2023-09-25 23:08:26','2023-09-25 23:08:26'),
	(81,NULL,'bayu','bayu@gmail.com','089292828',NULL,'2023-09-25 23:59:07','2023-09-25 23:59:07'),
	(82,NULL,'Danang Achmad','admin@gmail.com','08123123',NULL,'2023-09-26 00:29:29','2023-09-26 00:29:29'),
	(93,NULL,'Ginanjar','ginanjarbayuaji@gmail.com','0891231233',NULL,'2023-10-03 13:17:17','2023-10-03 06:17:17'),
	(94,NULL,'Ginanjar','ginanjarbayuaj@gmail.com','089522953712',NULL,'2023-10-03 13:20:42','2023-10-03 06:20:42'),
	(107,NULL,'Ginanjar','ginanjarbayuaji@gmail.com','089522953712',NULL,'2023-10-05 10:28:14','2023-10-05 03:28:14'),
	(108,NULL,'SyaifulNW','syaifulnurw123@gmail.com','089522953712',NULL,'2023-10-05 10:28:44','2023-10-05 03:28:44'),
	(110,NULL,'Secret name','syaifulnurw123@gmail.com','0895229537879',NULL,'2023-10-05 15:15:04','2023-10-05 08:15:04');

/*!40000 ALTER TABLE `compros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contactuses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contactuses`;

CREATE TABLE `contactuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contactuses` WRITE;
/*!40000 ALTER TABLE `contactuses` DISABLE KEYS */;

INSERT INTO `contactuses` (`id`, `nama`, `email`, `tujuan`, `isi`, `created_at`, `updated_at`)
VALUES
	(2,'qweqweqwe','qweqweqwe@gmail.com','qweqweqe','qweqweqe','2023-09-22 03:17:51','2023-09-22 03:17:51'),
	(3,'ganjar','ginanjarbayuaji@gmail.com','mustopa','agsaehtryjteyjryj','2023-09-22 03:19:17','2023-09-22 03:19:17'),
	(9,'Banner 7','syaifulnurw12@gmail.com','qwdqwd','qwe','2023-09-24 19:34:55','2023-09-24 19:34:55'),
	(11,'Riska SaputriSSS','suadmin@gmail.com','danang','acbc','2023-09-26 00:33:37','2023-09-26 00:33:37');

/*!40000 ALTER TABLE `contactuses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table headers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `headers`;

CREATE TABLE `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;

INSERT INTO `headers` (`id`, `judul`, `subjudul`, `section`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'eTicketing Solution','Lorem ipsum dolor sit amet consectetur. Lectus id vestibulum fermentum sollicitudin amet malesuada. Id vitae amet nisi in id massa arcu arcu.',NULL,'2023-09-13 00:07:31','2023-09-17 20:34:20',NULL),
	(15,'test admin','a','a','2023-10-08 14:35:13','2023-10-08 14:35:18','2023-10-08 21:35:18');

/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_gambar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `images_is_deleted_index` (`is_deleted`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `logo`, `slide`, `fixed_gambar`, `banner`, `created_at`, `updated_at`, `deleted_at`, `is_deleted`)
VALUES
	(19,'1','1695540591.jpg',NULL,NULL,'2023-09-24 00:05:41','2023-09-24 00:29:51',NULL,0),
	(20,'2','1695540549.jpg',NULL,NULL,'2023-09-24 00:06:34','2023-09-24 00:29:09',NULL,0),
	(21,'3','1695540580.jpg',NULL,NULL,'2023-09-24 00:06:44','2023-09-26 00:26:34',NULL,0),
	(22,'utama','1695596013.jpg',NULL,NULL,'2023-09-24 15:53:34','2023-09-24 15:53:34','0000-00-00 00:00:00',0),
	(23,'iuiu','1695596080.png',NULL,NULL,'2023-09-24 15:54:40','2023-09-24 18:04:15','2023-09-24 18:04:15',0),
	(24,'3','1695597004.jpg',NULL,NULL,'2023-09-24 16:10:04','2023-09-24 16:10:04',NULL,0),
	(26,'1','1696775821.HEIC',NULL,NULL,'2023-10-08 14:37:01','2023-10-08 14:37:07','2023-10-08 14:37:07',0);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kategoris
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategoris`;

CREATE TABLE `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kategoris` WRITE;
/*!40000 ALTER TABLE `kategoris` DISABLE KEYS */;

INSERT INTO `kategoris` (`id`, `nama`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,'services','Public Service',NULL,NULL),
	(2,'retails','Retails',NULL,NULL),
	(3,'productifity','Productifity',NULL,NULL),
	(4,'travel','Travel & Tourism',NULL,NULL),
	(5,'banking','Banking',NULL,NULL);

/*!40000 ALTER TABLE `kategoris` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kontaks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kontaks`;

CREATE TABLE `kontaks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kontaks` WRITE;
/*!40000 ALTER TABLE `kontaks` DISABLE KEYS */;

INSERT INTO `kontaks` (`id`, `judul`, `ikon`, `deskripsi`, `link`, `url`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(5,'Telepon & Kontak','1695286532.png','Hubungi kami di hari jam kerja, Senin - Jumat, dari 8 am hingga 5 pm','+62 8924-2489-433','https://wa.me/+6289242489433','2023-09-21 01:54:13','2023-09-21 01:55:32',NULL),
	(6,'Alamat Email','1695286677.png','Perlu bicara dengan kami? Email ke, info@nginovasi.com','info@nginovasi.com','info@nginovasi.com','2023-09-21 01:57:57','2023-09-21 01:57:57',NULL),
	(7,'Visit Our Instagram','1695286741.png','Kunjungi instagram kami untuk mendapat informasi lainnya','@nusantaraglobalinovasi.id','https://www.instagram.com/nusantaraglobalinovasi.id/','2023-09-21 01:59:01','2023-09-21 01:59:01',NULL),
	(8,'a','1696776004.HEIC','a','a','a','2023-10-08 14:40:04','2023-10-08 14:40:08','2023-10-08 14:40:08');

/*!40000 ALTER TABLE `kontaks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table layanans
# ------------------------------------------------------------

DROP TABLE IF EXISTS `layanans`;

CREATE TABLE `layanans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `layanans` WRITE;
/*!40000 ALTER TABLE `layanans` DISABLE KEYS */;

INSERT INTO `layanans` (`id`, `judul`, `icon`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(10,'Integrasi Absensi Staf Operasional','1694510663.png','Sistem monitoring kinerja semua staf operasional pada aplikasi mobile berbasis Android & iOS','2023-09-12 02:24:23','2023-09-12 02:41:57',NULL),
	(11,'Passenger Information System','1694510686.png','Penumpang dapat dengan mudah memperoleh informasi terkait rute BRT, posisi halte dengan, juga jadwal kedatangan bus terdekat.','2023-09-12 02:24:46','2023-09-12 02:24:46',NULL),
	(12,'Fleet Management System','1694510760.png','Sistem monitoring yang memungkinkan pengaturan rute ataupun entitas lain yg terhubung secara real-time serta terintegrasi dengan GPS dan PIS.','2023-09-12 02:26:00','2023-09-12 02:26:00',NULL),
	(13,'Cashless Payment Integration','1694511753.png','Mempermudah pengguna untuk bertransaksi; melakukan pembelian dan pembayaran dengan lebih aman & nyaman.','2023-09-12 02:42:33','2023-09-12 02:42:33',NULL),
	(14,'eTicketing Software','1694511773.png','Lorem ipsum dolor sit consectetur. Lacus es','2023-09-12 02:42:53','2023-09-12 02:42:53',NULL);

/*!40000 ALTER TABLE `layanans` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table logos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `logos`;

CREATE TABLE `logos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;

INSERT INTO `logos` (`id`, `nama`, `logo`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(7,'BCA','1694330849403.BCA.png','2023-09-10 00:27:29','2023-09-14 02:55:02','2023-09-14 02:55:02'),
	(8,'NGI Logo','1694331278883.Logo NGI.png','2023-09-10 00:34:38','2023-09-11 21:39:47','2023-09-11 21:39:47'),
	(10,'KABA','1694420534967.image 69.png','2023-09-11 01:22:14','2023-09-11 01:22:14',NULL),
	(11,'BRI','1694420556722.BRI.png','2023-09-11 01:22:36','2023-09-11 01:22:36',NULL),
	(12,'BNI','1694420569419.BNI.png','2023-09-11 01:22:49','2023-09-11 01:22:49',NULL),
	(13,'GPN','1694420593460.GPN.png','2023-09-11 01:23:13','2023-09-11 01:23:13',NULL),
	(14,'MIFARI','1694421692579.image 70.png','2023-09-11 01:41:32','2023-09-11 01:41:32',NULL),
	(15,'PTEN','1694421729893.image 71.png','2023-09-11 01:42:09','2023-09-11 01:42:09',NULL),
	(16,'MANDIRI','1694421760203.Mandiri.png','2023-09-11 01:42:40','2023-09-11 01:42:40',NULL),
	(17,'RSCM','1694421835391.image 65.png','2023-09-11 01:43:55','2023-09-11 01:43:55',NULL),
	(18,'BANK JATENG','1694421861212.image 64.png','2023-09-11 01:44:21','2023-09-11 01:44:21',NULL),
	(20,'Bank Jatim','1694428068549.image 66.png','2023-09-11 03:27:48','2023-09-21 19:38:09',NULL),
	(21,'NGI Logo','1694494105957.NGI Logotype.png','2023-09-11 21:48:25','2023-09-12 20:34:44','2023-09-12 20:34:44'),
	(22,'Banner','1694501892413.TNGLogo-TNG.png','2023-09-11 23:58:12','2023-09-12 19:28:03','2023-09-12 19:28:03'),
	(23,'BCA','1694685376522.BCA.png','2023-09-14 02:56:16','2023-09-21 19:35:51','2023-09-21 19:35:51'),
	(24,'BCA','1695350268805.logo-11.png','2023-09-21 19:37:48','2023-09-21 19:37:48',NULL),
	(25,'a','1696775844266.IMG_6011.HEIC','2023-10-08 14:37:24','2023-10-08 14:37:27','2023-10-08 14:37:27');

/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(8,'2023_09_04_082248_add_deleted_at_to_artikels_table',3),
	(9,'2023_09_05_032234_add_is_deleted_to_artikels_table',4),
	(13,'2023_09_06_024644_create_links_table',6),
	(16,'2023_09_07_085033_add_is_deleted_to_artikels_table',9),
	(17,'2023_09_07_091243_add_is_deleted_to_sliders_table',10),
	(18,'2023_09_08_023316_add_is_deleted_to_thumbnails__table',11),
	(19,'2023_09_04_082248_add_is_deleted_to_artikels_table',12),
	(25,'2014_10_12_000000_create_users_table',13),
	(26,'2014_10_12_100000_create_password_resets_table',13),
	(27,'2019_08_19_000000_create_failed_jobs_table',13),
	(28,'2019_12_14_000001_create_personal_access_tokens_table',13),
	(29,'2023_09_01_030658_create_artikels_table',14),
	(30,'2023_09_08_075125_add_is_deleted_to_artikels_table',14),
	(31,'2023_09_09_091841_create_images_table',14),
	(32,'2023_09_09_134514_remove_banner_column_from_images_table',15),
	(33,'2023_09_09_135101_create_logos_table',16),
	(34,'2023_09_10_121115_create_layanans_table',17),
	(35,'2023_09_11_072913_add_is_deleted_to_layanan_table',18),
	(36,'2023_09_11_074011_add_delete_at_to_layanan_table',19),
	(37,'2023_09_12_040722_add_delete_at_to_images_table',20),
	(38,'2023_09_12_042433_add_delete_at_to_logos_table',21),
	(39,'2023_09_12_045801_add_delete_at_to_artikels_table',22),
	(40,'2023_09_13_040709_create_card_table',23),
	(41,'2023_09_13_053550_create_headers_table',24),
	(42,'2023_09_13_080217_create_cards_table',25),
	(43,'2023_09_13_084606_create_artikels_table',26),
	(44,'2023_09_18_042040_create_kontaks_table',27),
	(46,'2023_09_18_081241_create_videos_table',28),
	(47,'2023_09_19_045644_add_deleted_at_to_cards_table',29),
	(48,'2023_09_19_051019_add_delete_at_to_artikels_table',30),
	(49,'2023_09_19_051240_add_delete_at_to_layanans_table',31),
	(50,'2023_09_19_051500_add_deleted_at_to_kontaks_table',32),
	(51,'2023_09_20_031852_create_compros_table',33),
	(52,'2023_09_20_074210_create_subheaders_table',34),
	(53,'2023_09_21_084315_add_url_to_kontaks_table',35),
	(54,'2023_09_22_094608_create_contactuses_table',36),
	(55,'2023_09_24_230507_add_is_deleted_to_images',37),
	(56,'2023_09_25_132601_add_kontenlengkap_to_cards',38),
	(57,'2023_09_25_170450_add_artikellengkap_to_artikels',39),
	(79,'2023_10_03_124324_add_section_to_headers_table',40),
	(80,'2023_10_02_103125_add_header_to_videos_table',41),
	(81,'2023_10_02_103407_add_subheader_to_videos_table',42);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('syaifulnurw123@gmail.com','$2y$10$PGaPXSQM59968XOo0MVOI.2oRK6lLTTgpdr1aBa0nQviAnIo8cWXm','2023-09-25 22:55:01'),
	('syaifulnurw123@gmail.com','$2y$10$PGaPXSQM59968XOo0MVOI.2oRK6lLTTgpdr1aBa0nQviAnIo8cWXm','2023-09-25 22:55:01');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table productifities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productifities`;

CREATE TABLE `productifities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `productifities` WRITE;
/*!40000 ALTER TABLE `productifities` DISABLE KEYS */;

INSERT INTO `productifities` (`id`, `judul`, `gambar`, `kategori`, `tanggal`, `deskripsi`, `kontenlengkap`, `created_at`, `updated_at`)
VALUES
	(1,'NGI Productifity','1696222970.jpg','Productifity','2023-10-02','<p>asdad</p>',NULL,'2023-10-02 05:02:50','2023-10-02 05:02:50');

/*!40000 ALTER TABLE `productifities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table retails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `retails`;

CREATE TABLE `retails` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `retails` WRITE;
/*!40000 ALTER TABLE `retails` DISABLE KEYS */;

INSERT INTO `retails` (`id`, `judul`, `gambar`, `kategori`, `tanggal`, `deskripsi`, `kontenlengkap`, `created_at`, `updated_at`)
VALUES
	(1,'Nusantara Global Inovasi','1696205858.jpg','Retails','2023-10-12','<p>adad</p>',NULL,'2023-10-02 00:17:38','2023-10-02 00:17:38');

/*!40000 ALTER TABLE `retails` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `judul`, `gambar`, `kategori`, `tanggal`, `deskripsi`, `kontenlengkap`, `created_at`, `updated_at`)
VALUES
	(2,'NGI Menambah Layanan Baru','1696173921.jpg','Public Service','2023-10-24','<p>adad</p>',NULL,'2023-10-01 15:25:21','2023-10-01 15:25:21');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table subheaders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subheaders`;

CREATE TABLE `subheaders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `subheaders` WRITE;
/*!40000 ALTER TABLE `subheaders` DISABLE KEYS */;

INSERT INTO `subheaders` (`id`, `judul`, `subjudul`, `created_at`, `updated_at`)
VALUES
	(1,'BRT Nusantara System & Ticketing Management for Mass Transportation Integrated Solution.','Lorem ipsum dolor sit amet consectetur. Tempor vulputate nec dictum volutpat adipiscing consectetur aliquam congue vitae. Felis in ultrices quis et est quis rutrum.','2023-09-20 01:21:40','2023-09-20 01:21:40');

/*!40000 ALTER TABLE `subheaders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table travel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `travel`;

CREATE TABLE `travel` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenlengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `travel` WRITE;
/*!40000 ALTER TABLE `travel` DISABLE KEYS */;

INSERT INTO `travel` (`id`, `judul`, `gambar`, `kategori`, `tanggal`, `deskripsi`, `kontenlengkap`, `created_at`, `updated_at`)
VALUES
	(1,'Redesigning PIS Nusantara Mobile App','1696204226.png','Travel','2023-10-15','<p>ada</p>',NULL,'2023-10-01 23:50:26','2023-10-01 23:50:26');

/*!40000 ALTER TABLE `travel` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'syaifulnw','syaifulnurw123@gmail.com',NULL,'$2y$10$n8UlbzEYM8GVGGtSqu4wSuCRr6iQCMlt45i.4GusbAgs11mB5thWm','LXjWfyex5Z4DPbE7QUHlZqbMxv8yilJpynNi8kGJ2dVbbhZBczV5UtddTqqi','2023-09-08 02:17:00','2023-09-08 02:17:00'),
	(2,'ginanjar','syaifulnurw12@gmail.com',NULL,'$2y$10$DCBumfonqUDemqYUmPV2R.sSgxHDPmHlLri9R8RLVMwU1X0JdKwyS',NULL,'2023-09-25 09:03:25','2023-09-25 09:03:25');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subheader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`id`, `header`, `subheader`, `nama`, `video`, `created_at`, `updated_at`)
VALUES
	(1,NULL,NULL,'ngi','https://www.youtube.com/embed/8fOzoEP2I_E?si=A1bD3H1NAYhAmkBQ','2023-09-18 02:13:56','2023-09-18 02:13:56');

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
