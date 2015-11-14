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
  `no_rek_tujuan` char(20) DEFAULT NULL,
  `bukti_pembayaran` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donasi`
--

LOCK TABLES `tbl_donasi` WRITE;
/*!40000 ALTER TABLE `tbl_donasi` DISABLE KEYS */;
INSERT INTO `tbl_donasi` VALUES ('D0001','U0001','R0001','0000-00-00',5000000,NULL,NULL),('D0002','U0001','R0001','0000-00-00',16000000,NULL,NULL),('D0003','U0001','R0001','0000-00-00',16000000,NULL,NULL),('D0004','U0001','R0001','0000-00-00',1,NULL,NULL),('D0005','U0001','R0001','0000-00-00',20000,NULL,NULL),('D0006','U0001','R0001','0000-00-00',40000,NULL,NULL),('D0007','U0001','R0001','0000-00-00',40000,NULL,NULL);
/*!40000 ALTER TABLE `tbl_donasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_donasi_detail`
--

DROP TABLE IF EXISTS `tbl_donasi_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_donasi_detail` (
  `id_donasi` char(5) NOT NULL,
  `id_keperluan` char(5) NOT NULL,
  `jumlah` int(4) DEFAULT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donasi_detail`
--

LOCK TABLES `tbl_donasi_detail` WRITE;
/*!40000 ALTER TABLE `tbl_donasi_detail` DISABLE KEYS */;
INSERT INTO `tbl_donasi_detail` VALUES ('','L0001',2,40000);
/*!40000 ALTER TABLE `tbl_donasi_detail` ENABLE KEYS */;
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
INSERT INTO `tbl_kabkota` VALUES ('K0001','Denpasar');
/*!40000 ALTER TABLE `tbl_kabkota` ENABLE KEYS */;
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
INSERT INTO `tbl_keperluan` VALUES ('L0001','Semen',100,'Sak','R0001',20000,2000000),('L0002','Pasir',2,'Truck','R0001',2000000,4000000);
/*!40000 ALTER TABLE `tbl_keperluan` ENABLE KEYS */;
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
INSERT INTO `tbl_provinsi` VALUES ('P0001','Bali');
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
  `nama` varchar(35) NOT NULL,
  `jumlah_anggota_keluarga` int(2) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `no_kk` char(35) NOT NULL,
  `id_provinsi` char(5) DEFAULT NULL,
  `alamat` text,
  `diskripsi` text NOT NULL,
  `luas_tanah` int(1) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `valid` tinyint(1) DEFAULT '0',
  `nama_rt` varchar(35) NOT NULL,
  `nama_kades` varchar(35) NOT NULL,
  `no_hp_rt` char(12) NOT NULL,
  `no_hp_kades` char(12) NOT NULL,
  `id_kota` char(5) DEFAULT NULL,
  `id_user` char(5) NOT NULL,
  `tgl_lapor` date NOT NULL DEFAULT '0000-00-00',
  `dana_diperlukkan` double NOT NULL,
  `dana_terkumpul` double NOT NULL,
  PRIMARY KEY (`id_rumah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rumah`
--

LOCK TABLES `tbl_rumah` WRITE;
/*!40000 ALTER TABLE `tbl_rumah` DISABLE KEYS */;
INSERT INTO `tbl_rumah` VALUES ('R0001','Putu Sabar',3,'rumah runtuh.jpg','0937482929','P0001','JL Kamboja no 12','Pak Putu Sabar, memerlukkan bantuan untuk bedah rumah, karena rumahnya sudah hancur ditelan badai',1,1,1,'Putu Sudana','Made Suandika','089098367287','089656345367','K0001','U0001','2015-11-01',20000000,37100001);
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
INSERT INTO `tbl_user` VALUES ('U0001','Keramas Wiguna','keramas','$2y$10$i4uen023b1oUhoGgMRUu4Oq6NLmjlkjHNuFWz4bKG5e3qmeb3TQlK','','keramaswiguna@gmail.com','',NULL,NULL,NULL,'1','c7b9fdb01f74d02d97f6ab2bc836b211'),('U0002','','','$2y$10$v6OzxMOud3WnERfjhPr/c.SFZwv.5Ge4B9l3hH3ZvWoucvMUfMaD6','','sucisukawana@gmail.com','',NULL,NULL,NULL,'0','f2f0e62c22dc09c28f5884440421c374');
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

-- Dump completed on 2015-11-14 22:29:43
