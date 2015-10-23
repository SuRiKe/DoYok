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
-- Table structure for table `tbl_aps`
--

DROP TABLE IF EXISTS `tbl_aps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_aps` (
  `id_aps` char(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nisn` char(15) NOT NULL,
  `nama_ortu_wali` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `id_daerah` char(5) DEFAULT NULL,
  `id_kebutuhan` char(5) DEFAULT NULL,
  `id_user` char(5) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `diskripsi` text,
  PRIMARY KEY (`id_aps`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_aps`
--

LOCK TABLES `tbl_aps` WRITE;
/*!40000 ALTER TABLE `tbl_aps` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_aps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_d_aps`
--

DROP TABLE IF EXISTS `tbl_d_aps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_d_aps` (
  `id_d_aps` char(5) NOT NULL,
  `id_aps` char(5) NOT NULL,
  `id_user` char(5) NOT NULL,
  `donasi` double NOT NULL,
  PRIMARY KEY (`id_d_aps`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_d_aps`
--

LOCK TABLES `tbl_d_aps` WRITE;
/*!40000 ALTER TABLE `tbl_d_aps` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_d_aps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_d_kms`
--

DROP TABLE IF EXISTS `tbl_d_kms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_d_kms` (
  `id_d_kms` char(5) NOT NULL,
  `id_kms` char(5) NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `donasi` double NOT NULL,
  PRIMARY KEY (`id_d_kms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_d_kms`
--

LOCK TABLES `tbl_d_kms` WRITE;
/*!40000 ALTER TABLE `tbl_d_kms` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_d_kms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_d_sekolah`
--

DROP TABLE IF EXISTS `tbl_d_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_d_sekolah` (
  `id_d_sekolah` char(5) NOT NULL,
  `id_sekolah` char(5) NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `donasi` double NOT NULL,
  PRIMARY KEY (`id_d_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_d_sekolah`
--

LOCK TABLES `tbl_d_sekolah` WRITE;
/*!40000 ALTER TABLE `tbl_d_sekolah` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_d_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `tbl_daerah` VALUES ('D0001','Bali'),('D0002','DKI Jakarta');
/*!40000 ALTER TABLE `tbl_daerah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_donasi`
--

DROP TABLE IF EXISTS `tbl_donasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_donasi` (
  `id_donasi` char(5) NOT NULL DEFAULT '',
  `keperluan` double DEFAULT NULL,
  `terkumpul` double DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `valid` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donasi`
--

LOCK TABLES `tbl_donasi` WRITE;
/*!40000 ALTER TABLE `tbl_donasi` DISABLE KEYS */;
INSERT INTO `tbl_donasi` VALUES ('K0001',50000000,0,0,1),('K0002',50000000,0,0,1),('K0003',50000000,0,0,1);
/*!40000 ALTER TABLE `tbl_donasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kebutuhan`
--

DROP TABLE IF EXISTS `tbl_kebutuhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kebutuhan` (
  `id_kebutuhan` char(5) NOT NULL,
  `kebutuhan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kebutuhan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kebutuhan`
--

LOCK TABLES `tbl_kebutuhan` WRITE;
/*!40000 ALTER TABLE `tbl_kebutuhan` DISABLE KEYS */;
INSERT INTO `tbl_kebutuhan` VALUES ('B0001','Renovasi Rumah'),('B0002','Biaya Sekolah'),('B0003','Renovasi Sekolah');
/*!40000 ALTER TABLE `tbl_kebutuhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kms`
--

DROP TABLE IF EXISTS `tbl_kms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kms` (
  `id_kms` char(5) NOT NULL,
  `kepala_keluarga` varchar(35) NOT NULL,
  `jumlah_anggota_keluarga` int(2) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `no_kk` char(35) NOT NULL,
  `id_daerah` char(5) NOT NULL,
  `id_pekerjaan` char(5) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `id_kebutuhan` char(5) DEFAULT NULL,
  `diskripsi` text,
  PRIMARY KEY (`id_kms`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kms`
--

LOCK TABLES `tbl_kms` WRITE;
/*!40000 ALTER TABLE `tbl_kms` DISABLE KEYS */;
INSERT INTO `tbl_kms` VALUES ('K0001','Saitama',1,'Screenshot_1610.png','s012391230','D0002','P0001','Apartemen Lapuk','U0002','B0001','Apartemen tempat ia tinggal, baru saja dihancurkan, jadi dia sangat memerlukkan bantuan kita, mari ulurkan tangan anda untuk membantu Saitama, sang super hero ini.'),('K0002','Rich man',3,'11043239_874691655910439_1245374625428047305_n.jpg','asdasd213123','D0002','P0001','Atas Tanah Bawah Langit','U0002','B0001','Rumahnya Kebakar :v'),('K0003','MadDog',2,'Screenshot_1606.png','asd2342343','D0001','P0002','Gak Ada','U0002','B0001','Beliin Gue Rumah');
/*!40000 ALTER TABLE `tbl_kms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pekerjaan`
--

DROP TABLE IF EXISTS `tbl_pekerjaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` char(5) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pekerjaan`
--

LOCK TABLES `tbl_pekerjaan` WRITE;
/*!40000 ALTER TABLE `tbl_pekerjaan` DISABLE KEYS */;
INSERT INTO `tbl_pekerjaan` VALUES ('P0001','Buruh'),('P0002','Petani');
/*!40000 ALTER TABLE `tbl_pekerjaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sekolah`
--

DROP TABLE IF EXISTS `tbl_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sekolah` (
  `id_sekolah` char(5) NOT NULL,
  `nama_sekolah` varchar(35) NOT NULL,
  `NPSN` char(50) NOT NULL,
  `id_kebutuhan` char(5) DEFAULT NULL,
  `id_daerah` char(5) DEFAULT NULL,
  `alamat` text NOT NULL,
  `id_user` char(5) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `diskripsi` text,
  PRIMARY KEY (`id_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sekolah`
--

LOCK TABLES `tbl_sekolah` WRITE;
/*!40000 ALTER TABLE `tbl_sekolah` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sekolah` ENABLE KEYS */;
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
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES ('U0001','Kancrink','kancrink','$2y$10$1PKEvfbWsLF/vkQfd2uawOsycpX.7XdOg.9xF0UM53J4OBkA.6Tqy','123456789012','kancrink@gmail.com','Screenshot_1616.png','D0002'),('U0002','Keramas Wiguna','keramas','$2y$10$lE9NZbCkdVp7MwelWMSrHOr4GMi7.Z9RSHsngXu0QdAIcAUVLLWU.','085237382986','keramaswiguna@gmail.com','gugure.png','D0001'),('U0003','Wiguna','Wiguna','$2y$10$r0.Rd5oD.s6hmoSdLEqCBunpBi2p44yp6GL57.hqGPU12hmmDlVdu','09812371239','wiguna@gmail.com','Yuko_rante.png','D0001');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view_user`
--

DROP TABLE IF EXISTS `view_user`;
/*!50001 DROP VIEW IF EXISTS `view_user`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_user` AS SELECT 
 1 AS `id_user`,
 1 AS `nama`,
 1 AS `username`,
 1 AS `password`,
 1 AS `no_hp`,
 1 AS `email`,
 1 AS `foto`,
 1 AS `id_daerah`,
 1 AS `daerah`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_user`
--

/*!50001 DROP VIEW IF EXISTS `view_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`maskera`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_user` AS select `tbl_user`.`id_user` AS `id_user`,`tbl_user`.`nama` AS `nama`,`tbl_user`.`username` AS `username`,`tbl_user`.`password` AS `password`,`tbl_user`.`no_hp` AS `no_hp`,`tbl_user`.`email` AS `email`,`tbl_user`.`foto` AS `foto`,`tbl_user`.`id_daerah` AS `id_daerah`,`tbl_daerah`.`daerah` AS `daerah` from (`tbl_user` join `tbl_daerah` on((`tbl_user`.`id_daerah` = `tbl_daerah`.`id_daerah`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-23 23:36:09
