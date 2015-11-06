-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: db_doyok
-- ------------------------------------------------------
-- Server version	5.6.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_daerah`
--

DROP TABLE IF EXISTS `tbl_daerah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_daerah` (
  `id_daerah` char(5) NOT NULL,
  `daerah` varchar(25) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_daerah`
--

LOCK TABLES `tbl_daerah` WRITE;
/*!40000 ALTER TABLE `tbl_daerah` DISABLE KEYS */;
INSERT INTO `tbl_daerah` VALUES ('D0001','Bali'),('D0002','DKI Jakarta'),('D0003','Semarang');
/*!40000 ALTER TABLE `tbl_daerah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_design`
--

DROP TABLE IF EXISTS `tbl_design`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_design` (
  `id_design` char(5) NOT NULL,
  `design` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_design`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_design`
--

LOCK TABLES `tbl_design` WRITE;
/*!40000 ALTER TABLE `tbl_design` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_design` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_donasi`
--

DROP TABLE IF EXISTS `tbl_donasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_donasi` (
  `id_donasi` char(5) NOT NULL,
  `jumlah` double DEFAULT NULL,
  `id_user` char(5) DEFAULT NULL,
  `id_kms` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donasi`
--

LOCK TABLES `tbl_donasi` WRITE;
/*!40000 ALTER TABLE `tbl_donasi` DISABLE KEYS */;
INSERT INTO `tbl_donasi` VALUES ('D0001',20000000,'U0002','K0002'),('D0002',200000000,'U0003','K0001'),('D0003',50000000,'U0005','K0002'),('D0004',1000000,'U0001','K0001'),('D0005',1000000,'U0005','K0002'),('D0006',200000000,'U0006','K0004'),('D0007',30000,'U0006','K0004'),('D0008',80000,'U0001','K0001'),('D0009',12392,'U0001','K0002'),('D0010',1000,'U0001','K0001'),('D0011',1234567,'U0001','K0006'),('D0012',500000000000,'U0007','K0006');
/*!40000 ALTER TABLE `tbl_donasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kms`
--

DROP TABLE IF EXISTS `tbl_kms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kms` (
  `id_kms` char(5) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `jumlah_anggota_keluarga` int(2) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `no_kk` char(35) NOT NULL,
  `id_daerah` char(5) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `diskripsi` text,
  `luas_tanah` char(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `dana` double DEFAULT NULL,
  `terkumpul` double DEFAULT NULL,
  `id_design` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_kms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kms`
--

LOCK TABLES `tbl_kms` WRITE;
/*!40000 ALTER TABLE `tbl_kms` DISABLE KEYS */;
INSERT INTO `tbl_kms` VALUES ('K0001','Pak A',4,'Arti Mimpi Rumah Ambruk Roboh.jpg','123123123324324','D0001','Atas Tanah Bawah Langit','U0002','Ayam Enak Sedap Dimakan, Ayam Enak Sedap di Makan..','1',1,500000000,201081000,NULL),('K0002','Pak B',3,'wonoginten.jpg','123345123345','D0002','Atas ','U0002','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2',1,500000000,71012392,NULL),('K0003','Pak C',3,'ILUSTRASI-FROM-GOOGLE-OMAH-AMBRUK1.jpg','73458737345','D0003','Atas Tanah Bawah Langit','U0002','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1',1,500000000,0,NULL),('K0004','Pak D',3,'wonoginten.jpg','324234','D0002','Atas Tanah Bawah Langit','U0002','asdasdasd','1',1,500000000,200030000,NULL),('K0005','Pak E',3,'Arti Mimpi Rumah Ambruk Roboh.jpg','7878766744543442342','D0002','JL. Khayalan No 100','U0006','Lorem Ipsum Dolor','2',1,500000000,0,NULL),('K0006','rani',10,'rumah runtuh.jpg','123567890','D0001','Jalan menuju kemenangan','U0001','Rumah yang butuh direnofasi yang bertanggung jawab adalah : IGN Lala.\r\n','1',1,500000000,500001234567,NULL);
/*!40000 ALTER TABLE `tbl_kms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kontraktor`
--

DROP TABLE IF EXISTS `tbl_kontraktor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kontraktor` (
  `id_kontraktor` char(5) NOT NULL,
  `nama_kontraktor` varchar(35) DEFAULT NULL,
  `telp_kontraktor` char(12) DEFAULT NULL,
  `id_daerah` char(5) DEFAULT NULL,
  `alamat` text,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kontraktor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kontraktor`
--

LOCK TABLES `tbl_kontraktor` WRITE;
/*!40000 ALTER TABLE `tbl_kontraktor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_kontraktor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id_user` char(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `id_daerah` char(5) DEFAULT NULL,
  `tingkat` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES ('U0001','Suci Sukawana','Suci','$2y$10$zauDGyzb7bnf7ZilY/tCT.1V/uQYP4jLWZkcg4jVEzqIg9rFk5grO','081234567125','sucisukawana@gmail.com','Screenshot_1610.png',NULL,'pelapor','51030022812970006',''),('U0002','Keramas Wiguna','keramas','$2y$10$3b6AbMDIfXKrR8GKaXaSgO/Zt8hTBSNgyT0f4RL/GAu0fvNbOVTje','085237382986','keramaswiguna@gmail.com','qweasdadead3.jpg',NULL,'pelapor','1234567890098765',''),('U0003','Rizal Nasrulloh','rizal','$2y$10$/20Si1jYI7Q9SVOOQe8I1.TySazwoDKDwtnfk1/DS28gHpt5FBChe','08512345678','rizalaja@emailan.com','thumb.png',NULL,'donatur','12375126123123123',''),('U0004','josua','josua','$2y$10$7Br.psQUsjHiAlwvy6kjNOP3hv6k5rTgdmfpMlStxDPOA0vZQ/gbq','092834092348','josua@gmai.com','logo1.png',NULL,'donatur','435345345',''),('U0005','akjl','akjl','$2y$10$Iy0F8f.MTOdQrKP7NMEL/Ow1MSQCx/fW7nT2NWVDq2Ir2lpnzUgNC','281903812093','akjl@gamil.com','qweasdadead3.jpg',NULL,'donatur','12389012832398409',''),('U0006','suriken','suriken','$2y$10$V62UzNl7AeOGlmnUScGVy.kfMhDg6PqCX1dOPWdctMAA0DXVH77/i','808976343434','suriken@ayam.com','logo1.jpg',NULL,'pelapor','24242286776546543',''),('U0007','Redy','Ry','$2y$10$rchDpVfUTbkzJdXOY4KNTeJHs.2AbNB0IcycNICFApsFFRx.LB0KS','089657053460','nekoyukihime@gmail.com','linux-kernel-map.jpg',NULL,'donatur','980816260012','');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-05 17:56:22
