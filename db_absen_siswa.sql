# Host: localhost  (Version: 5.5.5-10.1.10-MariaDB)
# Date: 2018-10-29 14:31:21
# Generator: MySQL-Front 5.3  (Build 4.205)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "absen"
#

DROP TABLE IF EXISTS `absen`;
CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) DEFAULT NULL,
  `tgl_absen` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

#
# Data for table "absen"
#

/*!40000 ALTER TABLE `absen` DISABLE KEYS */;
INSERT INTO `absen` VALUES (1,'1516.10.002','2018-10-15','05:40:20','00:00:00','Tepat Waktu','Hadir','2018/2019'),(2,'1516.10.001','2018-10-15','05:57:52','00:00:00','Tepat Waktu','Izin','2018/2019'),(3,'1516.10.003','2018-10-15','06:01:28','00:00:00','Tepat Waktu','Hadir','2018/2019'),(4,'1516.10.004','2018-10-15','06:02:27','00:00:00','Tepat Waktu','Sakit','2018/2019'),(5,'1516.10.001','2018-10-16','08:08:42','00:00:00','Terlambat','Sakit','2018/2019'),(6,'1516.10.003','2018-10-16','09:15:12','00:00:00','Terlambat','Hadir','2018/2019'),(7,'1516.10.006','2018-10-16','09:16:41','00:00:00','Terlambat','Hadir','2018/2019'),(8,'1516.10.007','2018-10-16','09:17:22','00:00:00','Terlambat','Alfa','2018/2019'),(9,'1516.10.002','2018-10-16','09:26:13','00:00:00','Terlambat','Hadir','2018/2019'),(10,'1516.10.010 ','2018-10-16','09:52:24','00:00:00','Terlambat','Hadir','2018/2019'),(11,'1516.10.007','2018-10-17','17:16:24','00:00:00','Terlambat','Hadir','2018/2019'),(12,'1516.10.007','2018-10-18','08:41:18','00:00:00','Terlambat','Hadir','2018/2019'),(13,'1516.10.008','2018-10-18','08:46:04','00:00:00','Terlambat','Hadir','2018/2019'),(14,'1516.10.009','2018-10-18','08:47:51','00:00:00','Terlambat','Hadir','2018/2019'),(15,'1516.10.011','2018-10-18','08:49:42','00:00:00','Terlambat','Hadir','2018/2019'),(16,'1516.10.012','2018-10-18','08:51:14','00:00:00','Terlambat','Hadir','2018/2019'),(17,'1516.10.013','2018-10-18','08:52:05','00:00:00','Terlambat','Hadir','2018/2019'),(18,'1516.10.001','2018-10-18','09:02:28','00:00:00','Terlambat','Hadir','2018/2019'),(19,'1516.10.003','2018-10-18','09:20:40','00:00:00','Terlambat','Hadir','2018/2019'),(20,'1516.10.004','2018-10-18','09:26:27','00:00:00','Terlambat','Sakit','2018/2019'),(21,'1516.10.005','2018-10-18','09:34:45','00:00:00','Terlambat','Hadir','2018/2019'),(22,'1516.10.001','2018-10-22','11:26:01','00:00:00','Terlambat','Sakit','2018/2019'),(23,'1516.10.003','2018-10-22','11:35:18','00:00:00','Terlambat','Sakit','2018/2019'),(24,'1516.10.001','2018-10-23','09:23:35','00:00:00','Terlambat','Hadir','2018/2019'),(25,'1516.10.007','2018-10-24','08:55:25','00:00:00','Terlambat','Izin','2018/2019'),(26,'1516.10.007','2018-10-25','07:55:05','00:00:00','Terlambat','Alfa','2018/2019'),(27,'1516.10.003','2018-10-25','08:16:26','00:00:00','Terlambat','Sakit','2018/2019'),(28,'','0000-00-00','00:00:00','00:00:00','','',''),(29,'','0000-00-00','00:00:00','00:00:00','','',''),(30,'','0000-00-00','00:00:00','00:00:00','','',''),(31,'1516.10.001','2018-10-26','02:09:04','00:00:00','Tepat Waktu','Hadir','2018/2019'),(32,'1516.10.002','2018-10-26','02:09:13','00:00:00','Tepat Waktu','Hadir','2018/2019');
/*!40000 ALTER TABLE `absen` ENABLE KEYS */;

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (1,'XII',1),(2,'XA',1),(3,'XB',1);
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

#
# Structure for table "login"
#

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "login"
#

/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('Admin','123','Admin',NULL),('Kelas XI B','123','Wali kelas',NULL),('kelas xia','123','Wali kelas',NULL),('Kelas XII','123','Wali kelas',1),('kelasxa','123','Wali kelas',2),('kelasxb','123','Wali kelas',3),('SD','123','Sekolah',NULL),('smkiutama','utama','Sekolah',NULL);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

#
# Structure for table "sekolah"
#

DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `foto` blob,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "sekolah"
#

INSERT INTO `sekolah` VALUES (1,'SMKI Utama','02123212982','Gandul Raya',X'4C6F676F5F534D4B495F5574616D612E6A7067','SMKI Utama'),(2,'SDN Limo 01','123123','BB',X'494D475F393536322E4A5047','SD');

#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL DEFAULT '',
  `nama_siswa` varchar(50) DEFAULT NULL,
  `no_tlp` decimal(10,0) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text,
  `foto` blob,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `id_kelas` int(10) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "siswa"
#

/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES ('1516.10.001','Nanang Bahtiyar',898787665,'nanang@gmail.com','Jl. Gandul Raya 09/09',X'','Laki-laki',1),('1516.10.002','Putri Sania',890986787,'snaptr@gmail.com','Jl. Margonda Raya No. 29',X'494D475F393537312E4A5047','Perempuan',3),('1516.10.003','Damam Habibi Julia',8988657,'habibiainun@gmail.com','Jl. Raya 009/009',X'494D475F393538362E4A5047','Laki-laki',2),('1516.10.004','Nadia Dwi Andini',898987876,'ndyda@dah.com','Jl. Pendowo No. 2',X'494D475F393536362E4A5047','Perempuan',2),('1516.10.005','Mia Sitti Yusrina',898767546,'miaysrn@gmail.com','Jl. Cinere Raya No. 10',X'494D475F393536302E4A5047','Perempuan',3),('1516.10.006','Nurhayati Helpiyana',89867678,'nunutinaja@gmail.com','Jl. Limo Raya N0. 05',X'494D475F393537322E4A5047','Perempuan',1),('1516.10.007','Reza Fahlevi',89876876,'rejajombs@gmail.com','Jl. Jaeran No. 01',X'494D475F393537352E4A5047','Laki-laki',1),('1516.10.008','Hizianatul Bhtyrmhwa',89867868,'bhtyr20@mhwa.com','Jl. Gandul Raya No. 09',X'494D475F393538342E4A5047','Perempuan',3),('1516.10.009','Amel ihya',21020398,'ameliaajah@deh.oncom','Jl. Gandul PLN P3B',X'494D475F393535322E4A5047','Perempuan',2),('1516.10.010','Mibtah Sadel',210982034,'saridelimibt@gmail.com','Jl. Gandul No. 02',X'494D475F393536312E4A5047','Perempuan',1),('1516.10.011','M Donay',8989898978,'mdonayaja@gmail.com','Jl. Naman IskanDar No. 20',X'494D475F393538382E4A5047','Laki-laki',2),('1516.10.012','Demo Susanto',89898976,'dsusanto@gmail.com','Jl. Keadilan',X'494D475F393535352E4A5047','Laki-laki',2),('1516.10.013','M Sahrul Hermawan',898989898,'msahroel@gmail.com','Jl. Gandul Raya No. 28',X'494D475F393539312E4A5047','Laki-laki',3);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
