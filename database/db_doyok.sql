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
INSERT INTO `tbl_user` VALUES ('U0001','Suci Sukawana','Suci','$2y$10$zauDGyzb7bnf7ZilY/tCT.1V/uQYP4jLWZkcg4jVEzqIg9rFk5grO','081234567125','sucisukawana@gmail.com','Screenshot_1610.png',NULL,'pelapor','51030022812970006','');
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

-- Dump completed on 2015-10-24 19:20:49
