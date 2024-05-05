/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - utspemweb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`utspemweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `utspemweb`;

/*Table structure for table `m_book` */

DROP TABLE IF EXISTS `m_book`;

CREATE TABLE `m_book` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_desc` text DEFAULT NULL,
  `isbn` varchar(15) DEFAULT NULL,
  `writer` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `m_book` */

insert  into `m_book`(`id_book`,`id_category`,`book_name`,`book_desc`,`isbn`,`writer`,`publisher`,`pages`,`published_date`,`created_at`,`updated_at`,`active`) values 
(1,1,'Winter in Tokyo','Tetangga baruku, Nishimura Kazuto, datang ke Tokyo untuk mencari suasana baru. Itulah katanya, tapi menurutku alasannya lebih dari itu. Dia orang yang baik, menyenangkan, dan bisa diandalkan. Perlahan-lahan—mungkin sejak Malam Natal itu—aku mulai memandangnya dengan cara yang berbeda. Dan sejak itu pula rasanya sulit membayangkan hidup tanpa dia. – Keiko tentang Kazuto\r\n\r\nSejak awal aku sudah merasa ada sesuatu yang menarik dari Ishida Keiko. Segalanya terasa menyenangkan bila dia ada. Segalanya terasa baik bila dia ada. Saat ini di dalam hatinya masih ada seseorang yang ditunggunya. Cinta pertamanya. Kuharap dia bisa berhenti memikirkan orang itu dan mulai melihatku. Karena hidup tanpa dirinya sama sekali bukan hidup. – Kazuto tentang Keiko\r\n\r\nMereka pertama kali bertemu di awal musim dingin di Tokyo. Selama sebulan bersama, perasaan baru pun mulai terbentuk. Lalu segalanya berubah ketika suatu hari salah seorang dari mereka terbangun dan sama sekali tidak mengingat semua yang terjadi selama sebulan terakhir, termasuk orang yang tadinya sudah menjadi bagian penting dalam hidupnya.','9786020655680','Ilana Tan','Gramedia Pustaka Utama',313,NULL,'2024-05-02 20:31:58','2024-05-02 20:31:58','1'),
(2,1,'Fantasteen Scary: Daruma-san','Aturan pemanggilan: (1) keramas sambil menutup mata, (2) di dalam bathtub, dan (3) lakukan pada tengah malam. Jika hantunya muncul, kamu harus bermain petak umpet bersamanya. Aturan permainan: (1) bersembunyi sebisa mungkin, (2) teriakkan, \"Tomare!\" setiap hantunya muncul, lalu bersembunyi lagi, dan (3) akhiri permainan pada tengah malam berikutnya sambil mengatakan, \"Kitta!\" Aturan yang perlu diperhatikan: (1) jauhi ruangan gelap, (2) jauhi ruangan dengan banyak air di dalamnya, dan (3) jangan beri tahu siapa pun bahwa kamu sedang bermain petak umpet bersama hantu. Konsekuensinya sederhana: jika kamu gagal, Daruma-san akan menghantuimu seumur hidup. Sekarang, beranikah kamu bermain petak umpet bersama hantu? Jika iya, ini adalah buku yang tepat untukmu. Namun ingat, jangan sampai orang lain tahu!','9786024207311','Fida Aifiya','Mizan Publishing',168,'2019-01-03','2024-05-05 14:28:49','2024-05-05 14:28:49','1'),
(3,1,'Fantasteen: House of Lavender','Keluarga Finnigan tiba-tiba saja menghilang entah kemana! Hampir semua penghuni dari Pollycarpus Street tidak mengetahui kemana mereka pergi. Bahkan, penghuni Pollycarpus Street tersebut juga tidak bisa menemukan jejak kepergian Keluarga Finnigan! Tanpa mengetahui masalah apa yang menimpa Keluarga Finnigan tersebut, Alaric beserta dengan Dad dan Gail yang baru saja ditinggalkan oleh Mom akhirnya menempati rumah tua yang ditinggalkan oleh Keluarga Finnigan tersebut.\r\n\r\nBeberapa hari menempati rumah tua tersebut, Alaric merasa jika ada sesuatu yang tidak wajar yang terus saja mengganggu pikirannya. Tidak hanya itu saja, hampir setiap malam juga Alaric selalu mendengar suara-suara gaduh yang entah berasal dari mana!Misteri rumah tua peninggalan Keluarga Finnigan yang menghilang tersebut harus segera diselesaikan, kecuali jika Alaric ingin terus-menerus dihantui dengan mimpi buruk!\r\n\r\nDi sisi lain, Gail yang tidak tahu apapun tersebut tiba-tiba saja dihadapkan dengan maut. Benarkan hanya Alaric yang bisa menyelamatkan Gail? Keping-keping cerita yang mengarah pada jawaban misteri rumah tua tersebut harus segera berakhir sebelum nyawa-nyawa orang yang tidak berdosa melayang!','9786024204815','Faishal D. P.','Mizan Publishing',165,NULL,'2024-05-05 14:31:44','2024-05-05 14:31:44','1'),
(4,1,'Fantasteen: Beautiful Stranger','Thariq berdiri, lalu menyimpan tangannya di pinggang. Selama beberapa detik, dia menatap Khanza dengan kelopak mata menyempit. Khanza tidak tahu apa yang ada di kepala Thariq ketika menatapnya begitu. Khanza membalas tatapan curiga Thariq dengan sorot mata penuh penentangan.\r\n\r\nTiga detik. Thariq masih menancapkan mata curiga kepada Khanza. Empat detik. Lima detik, Thariq tidak berkedip. Enam detik, matanya justru kian melebar. Tujuh detik, Khanza mulai merasakan keanehan. Delapan detik, angin hangat menyapu tengkuk Khanza. Sembilan detik, daun gugur beterbangan di balik jendela.\r\n\r\nSepuluh detik, terdengar gemerencing kunci dan langkah berat petugas kebersihan dari koridor. Thariq berkedip seolah Khanza baru saja meniupkan debu menembus lensa kacamatanya.\r\n\r\nThariq adalah teman yang aneh. Tiba-tiba dia muncul dan tanpa diminta menawarkan keseruan. Hanya lima nomor kontak di HP Thariq: 1. Rumah, 2. Pemadam kebakaran, 3. Ambulans, 4. Polisi lokal, 5. Khanza. Ada lebih dari tujuh miliar jumlah penduduk Bumi, tapi mengapa di sana cuma ada nama Khanza?','9786024201265','Fida Aifiya','Mizan Publishing',184,NULL,'2024-05-05 14:33:07','2024-05-05 14:33:07','1'),
(5,1,'Fantasteen Scary: Jangan Bercermin Malam Ini','Tidak ada perasaan yang lebih mengerikan daripada rasa takut, ketakutan menerima perlakuan buruk yang berulang. Diejek, di-bully, dijahili dan yang lebih parah dari itu semua adalah dianggap tak ada. Karena itulah Achiell bersedia pindah ke satu-satunya sekolah umum berasrama di kotanya. Benar saja, di sekolah baru, Achiell mengalami perlakuan berbeda. Berteman dengan siswa populer, menjadi bahan perbincangan satu sekolah, juga mendapat senyuman manis dari gadis cantik penuh misteri.\r\nHingga suatu pagi, Al, teman satu kamar Achiell tiba-tiba menghilang. Tidak hanya teman satu kamar, semua teman di sekolahnya kemudian menjauhi Achiell. Mereka menuduh Achiell penyebab hilangnya Al dan beberapa siswa di sekolah. Achiell tidak terima dituduh tanpa alasan. Bahkan ketika Achiell tiba-tiba harus percaya mitos hantu cermin demi mengungkap kehilangan itu, dia akan melakukannya. Yang tidak dia sadari selalu ada pengorbanan besar demi pertemanan dan kepercayaan.','9786024201562','Nurlailan Syahara','Mizan Publishing',156,NULL,'2024-05-05 14:35:11','2024-05-05 14:35:11','1'),
(6,1,'Fantasteen Ghost Dormitory in Nagasaki','Ada perang hantu di asrama putra! \r\nSayaka yang berada di asrama putri mendapat kabar itu dari penjaga asrama tak kasat mata, yang ternyata adalah pemilik asrama Tenno-Takeda. Rupanya perang tersebut mengakibatkan salah satu siswa meninggal bunuh diri. Sayaka yang berada di lokasi kejadian shock dengan kejadian itu. Perang hantu itu harus segera dihentikan, jika tidak, maka akan memakan korban lagi. Yang membuat Sayaka tidak kalah kaget adalah bahwa hanya dia yang bisa menghentikan peperangan itu. Sayaka tidak mengerti apa hubungan perang hantu dengannya. Sebanyak apa pun Sayaka bertanya tentang perang hantu, dia harus menyelesaikannya. Mampukah Sayaka menghentikan perang hantu di asrama putra?','9786024206581','Fida Husna','Mizan Publishing',146,'2018-10-09','2024-05-05 14:37:21','2024-05-05 14:37:21','1'),
(7,1,'Fantasteen: Last Puzzle','Ini adalah kisah yang berasal dari perjanjian. Dari rasa benci pada dunia, menuju persahabatan manis yang tak terlupakan. Afri mendapati dirinya lelah oleh semua penderitaan dalam hidupnya. Dia bersedia melakukan perjanjian dengan penyihir agar hidupnya lebih baik. Dan, apa kata penyihir?\r\n\r\nPermintaannya dikabulkan.\r\n\r\nDengan catatan: sesuatu yang berharga dari hidup Afri akan direbut olehnya. Akan dirampas dan diambil begitu saja pada waktunya. Afri berpikir, ambil saja. Toh dia sudah menderita sejak awal. Toh dia tidak memiliki apa-apa. Maka detik itu juga, hidupnya berangsur-angsur membaik.\r\n\r\nAfri memiliki teman, Afri tidak ditindas lagi, senyum Afri mengembang lebih sering, dan dia mendapatkan sahabat paling baik sedunia. Namun suatu hari, satu hal berharga itu benar-benar direbut darinya. Sesuatu yang tak pernah Afri sadari sebagai miliknya yang paling berharga.','9786022427803','Lyha Rachmadini','Mizan Publishing',156,'2015-09-15','2024-05-05 14:40:12','2024-05-05 14:40:12','1'),
(8,1,'Fantasteen: Bloody Orchid','Teror yang menimpa penghuni Orchidaceae Academy seperti tidak akan pernah berakhir. Anggrek yang tumbuh pesat dalam waktu singkat serta sulur-sulur akar berbentuk ular yang mampu menarik tubuh mereka dan melenyapkannya tanpa jejak menjadi salah satu teror yang terus terjadi. Para korban teror tidak memiliki kesempatan memperingatkan temannya. Tidak ada yang pernah tahu kenapa teror ini menyerang mereka. Seluruh penghuni asrama sibuk memikirkan cara agar lepas dari teror yang banyak menelan korban.\r\n\r\n \r\n\r\nSementara itu, Douglas dan Renanthera kehilangan keberanian mengungkap penyebab dan pelaku teror yang menimpa teman-temannya. Semakin hari suara auman misterius pertanda teror akan terjadi terdengar jelas dari balik gedung tua, namun lagi-lagi siapa yang akan peduli. Harus ada yang menghentikan teror ini, sebelum semua penghuni benar-benar lenyap.','9786024204587','Lalu A. Mubarok','Mizan Publishing',144,'2017-08-09','2024-05-05 14:41:57','2024-05-05 14:41:57','1'),
(9,1,'The Traveling Cat Chronicles','Aku adalah seekor kucing.\r\nDia adalah seorang pemuda penyuka kucing.\r\n“Kau selalu tidur di sini?”\r\nKenapa mau protes?\r\n“Manisnya ....”\r\nMemang. Banyak yang bilang begitu.\r\n“Boleh ku sentuh ?”\r\nMaaf saja, tidak boleh.\r\n\r\nKukira dia hanya akan jadi satu dari sekian banyak orang yang cuma lewat dalam kehidupanku sebagai kucing liar. Akan tetapi, dia menyelamatkan nyawaku. Sebagai gantinya, aku biarkan dia memeliharaku, karena aku ini kucing yang manis.\r\n\r\nSetelah lima tahun kami bersama, Satoru harus mencari orang untuk mengadopsiku karena satu dan lain hal. Maka, kami berdua pun memulai sebuah perjalanan panjang mengendarai mobil wagon perak kesukaanku ke berbagai penjuru negeri untuk menemui teman-teman lama Satoru. Akan tetapi, ada satu hal yang Satoru sembunyikan dariku...\r\n\r\nThe Traveling Cat Chronicles adalah salah satu novel karya Arikawa Hiro dengan tema dan alur cerita tidak biasa dan berhasil diterjemahkan dan terkenal di berbagai negara selain Jepang. Novel ini mengisahkan persahabatan antara seekor kucing bernama Nana dan pemiliknya bernama Satoru. Lewat narasi yang diceritakan melalui sudut pandang seekor kucing, ikuti petualangan Satoru dan Nana berkeliling Jepang!','9786025385858','Arikawa Hiro','Haru',364,'2019-05-17','2024-05-05 14:43:30','2024-05-05 14:43:30','1'),
(10,1,'世界から猫が消えたなら','僕は生きるために、\r\n消すことを決めた。\r\n\r\n今日もし突然、\r\nチョコレートが消えたなら\r\n電話が消えたなら\r\n映画が消えたなら\r\n時計が消えたなら\r\n猫が消えたら\r\nそして\r\n僕が消えたなら\r\n\r\n世界はどう変化し、人は何を得て、何を失うのか\r\n30歳郵便配達員。余命あとわずか。\r\n陽気な悪魔が僕の周りにあるものと引き換えに1日の命を与える。\r\n僕と猫と陽気な悪魔の摩訶不思議な7日間がはじまった―――\r\n\r\n消してみることで、価値が生まれる。\r\n失うことで、大切さが分かる。\r\n感動的、人生哲学エンタテインメント。','9784838725021','川村元気','マガジンハウス',221,'2012-10-25','2024-05-05 14:48:08','2024-05-05 14:48:11','1');

/*Table structure for table `m_category` */

DROP TABLE IF EXISTS `m_category`;

CREATE TABLE `m_category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `m_category` */

insert  into `m_category`(`id_category`,`category_name`,`created_at`,`updated_at`,`active`) values 
(1,'Novel','2024-05-02 20:43:39','2024-05-02 20:43:39','1'),
(2,'Comic/Manga','2024-05-02 20:56:58','2024-05-02 20:56:58','1');

/*Table structure for table `m_user` */

DROP TABLE IF EXISTS `m_user`;

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `m_user` */

insert  into `m_user`(`id_user`,`username`,`password`,`name`,`created_at`,`updated_at`,`active`) values 
(1,'ichiya','ciya','Ichiya Amagi','2024-05-01 13:18:20','2024-05-01 13:18:20','1');

/*Table structure for table `tb_review` */

DROP TABLE IF EXISTS `tb_review`;

CREATE TABLE `tb_review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `rating` enum('1','2','3','4','5') DEFAULT NULL,
  `review` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_review` */

insert  into `tb_review`(`id_review`,`id_user`,`id_book`,`user_name`,`book_name`,`rating`,`review`,`created_at`,`updated_at`,`active`) values 
(1,1,1,'Amagi Ichiya','Winter In Tokyo','4','Emotion roller-coaster, but have some unnecessary twists.','2024-05-05 15:01:29',NULL,'1'),
(11,NULL,10,'Amagi Ichiya','世界から猫が消えたなら','5','AAAAAAAAAAAAAAAAAAAAAAAA','2024-05-05 11:56:35','2024-05-05 12:16:46','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
