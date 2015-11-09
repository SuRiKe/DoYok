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
-- Table structure for table `tbl_dana`
--

DROP TABLE IF EXISTS `tbl_dana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dana` (
  `id_dana` char(5) NOT NULL,
  `dana_diperlukan` double DEFAULT NULL,
  `dana_terkumpul` double DEFAULT NULL,
  `id_rumah` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_dana`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dana`
--

LOCK TABLES `tbl_dana` WRITE;
/*!40000 ALTER TABLE `tbl_dana` DISABLE KEYS */;
INSERT INTO `tbl_dana` VALUES ('D0001',20000000,0,'R0001'),('D0002',25000000,0,'R0002');
/*!40000 ALTER TABLE `tbl_dana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_donasi`
--

DROP TABLE IF EXISTS `tbl_donasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_donasi` (
  `id_donasi` char(5) NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `id_rumah` char(5) DEFAULT NULL,
  `tgl_donasi` date DEFAULT '0000-00-00',
  `jumlah_donasi` double DEFAULT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donasi`
--

LOCK TABLES `tbl_donasi` WRITE;
/*!40000 ALTER TABLE `tbl_donasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_donasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kabkota`
--

DROP TABLE IF EXISTS `tbl_kabkota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kabkota` (
  `id_kota` char(5) NOT NULL DEFAULT '',
  `kabkota` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kabkota`
--

LOCK TABLES `tbl_kabkota` WRITE;
/*!40000 ALTER TABLE `tbl_kabkota` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_kabkota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kelamin`
--

DROP TABLE IF EXISTS `tbl_kelamin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kelamin` (
  `id_kelamin` char(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kelamin`
--

LOCK TABLES `tbl_kelamin` WRITE;
/*!40000 ALTER TABLE `tbl_kelamin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_kelamin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_keperluan`
--

DROP TABLE IF EXISTS `tbl_keperluan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_keperluan` (
  `id_keperluan` char(5) NOT NULL,
  `keperluan` varchar(35) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(35) NOT NULL,
  `id_rumah` char(5) NOT NULL,
  `harga_satuan` double NOT NULL,
  `total_harga` double NOT NULL,
  PRIMARY KEY (`id_keperluan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_keperluan`
--

LOCK TABLES `tbl_keperluan` WRITE;
/*!40000 ALTER TABLE `tbl_keperluan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_keperluan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_lapor`
--

DROP TABLE IF EXISTS `tbl_lapor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_lapor` (
  `id_lapor` char(5) NOT NULL,
  `id_rumah` char(5) NOT NULL,
  `id_user` char(5) NOT NULL,
  `tgl_lapor` date NOT NULL,
  PRIMARY KEY (`id_lapor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_lapor`
--

LOCK TABLES `tbl_lapor` WRITE;
/*!40000 ALTER TABLE `tbl_lapor` DISABLE KEYS */;
INSERT INTO `tbl_lapor` VALUES ('L0001','R0001','U0001','2014-12-23'),('L0002','R0002','U0001','2014-12-25');
/*!40000 ALTER TABLE `tbl_lapor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_provinsi`
--

DROP TABLE IF EXISTS `tbl_provinsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_provinsi` (
  `id_provinsi` char(5) NOT NULL DEFAULT '',
  `provinsi` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_provinsi`
--

LOCK TABLES `tbl_provinsi` WRITE;
/*!40000 ALTER TABLE `tbl_provinsi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_provinsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rumah`
--

DROP TABLE IF EXISTS `tbl_rumah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_rumah` (
  `id_rumah` char(5) NOT NULL DEFAULT '',
  `nama` varchar(35) DEFAULT NULL,
  `jumlah_anggota_keluarga` int(2) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `no_kk` char(35) NOT NULL,
  `id_provinsi` char(5) DEFAULT NULL,
  `alamat` text NOT NULL,
  `diskripsi` text,
  `luas_tanah` char(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `valid` tinyint(1) DEFAULT '0',
  `nama_rt` varchar(35) NOT NULL,
  `nama_kades` varchar(35) NOT NULL,
  `no_hp_rt` char(12) NOT NULL,
  `no_hp_kades` char(12) NOT NULL,
  `id_kota` char(5) DEFAULT NULL,
  PRIMARY KEY (`id_rumah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rumah`
--

LOCK TABLES `tbl_rumah` WRITE;
/*!40000 ALTER TABLE `tbl_rumah` DISABLE KEYS */;
INSERT INTO `tbl_rumah` VALUES ('R0001','Made Biasa',3,'rumah runtuh.jpg','1234567890','P0001','JL.Kanan Kiri no. 20','Rumah keluarga pak Made Biasa ini memerlukan donasi untuk memperbaiki rumahnya.','1',0,1,'Wayan Suardana','Putu Locong','085123847382','081984738293','K0002'),('R0002','Putu Adnyana',2,'rumah runtuh.jpg','1234567890','P0001','JL Khayalan Semata no.30','Rumah pak Putu ini, sudah hancur sekian 5 tahun yg lalu, jadi dia sangat membutuhkan bantuan','3',0,1,'Wayan Hanahana','Putu Subagia','087829182918','081928389232','K0001');
/*!40000 ALTER TABLE `tbl_rumah` ENABLE KEYS */;
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
  `id_kelamin` char(1) DEFAULT NULL,
  `id_provinsi` char(5) DEFAULT NULL,
  `id_kota` char(5) DEFAULT NULL,
  `alamat` text,
  `aktiv` enum('0','1') DEFAULT '0',
  `aktivasi` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES ('U0001','Keramas Wiguna','keramas','$2y$10$i4uen023b1oUhoGgMRUu4Oq6NLmjlkjHNuFWz4bKG5e3qmeb3TQlK','','keramaswiguna@gmail.com','',NULL,NULL,NULL,NULL,'1','c7b9fdb01f74d02d97f6ab2bc836b211');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `activation` varchar(300) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `activation` (`activation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'keramaswiguna@yahoo.co.id','f9b1cd9622e5d48774d666ed3627446d','d1e21baa8ff25669e6e7cb26524a0d0b','0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-09 15:58:41
