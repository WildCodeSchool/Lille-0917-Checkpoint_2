CREATE DATABASE  IF NOT EXISTS `checkpoint2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `checkpoint2`;
-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: checkpoint2
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `channel`
--

DROP TABLE IF EXISTS `channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `channel`
--

LOCK TABLES `channel` WRITE;
/*!40000 ALTER TABLE `channel` DISABLE KEYS */;
INSERT INTO `channel` VALUES (1,'TF1',1),(2,'France 2',2),(3,'France 3',3),(4,'Canal+',4),(5,'France 5',5),(6,'M6',6);
/*!40000 ALTER TABLE `channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `audience` int(11) DEFAULT NULL,
  `start` datetime NOT NULL,
  `duration` varchar(45) NOT NULL,
  `channel_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`channel_id`),
  KEY `fk_program_channel_idx` (`channel_id`),
  CONSTRAINT `fk_program_channel` FOREIGN KEY (`channel_id`) REFERENCES `channel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program`
--

LOCK TABLES `program` WRITE;
/*!40000 ALTER TABLE `program` DISABLE KEYS */;
INSERT INTO `program` VALUES (17,'JT','Journal TV 13h',NULL,'2017-10-27 13:00:00','60',1),(18,'JT','Journal télévisé de JP Pernault',10000,'2017-10-26 13:00:00','60',1),(19,'Koh-Lanta','Episode 9',NULL,'2017-10-27 21:00:00','135',1),(20,'Bleu Catacombes','Le commissaire Rousseau et son adjointe, la profileuse Mariella De Luca, mènent l’enquête sur une tête retrouvée dans les catacombes de Paris.',NULL,'2017-10-27 21:00:00','105',2),(21,'Envoyé spécial','Le monde secret des arbres',15000,'2017-10-26 20:55:00','135',2),(25,'L\'aile ou la cuisse','Charles Duchemin est un critique gastronomique redouté. ',8965,'2017-10-26 20:50:00','135',3),(26,'300 choeurs chantent les grands airs lyriques','Sous le chapiteau de l’Académie Fratellini, de grandes voix de la variété française se réunissent pour offrir des versions inédites de célèbres airs lyriques.',NULL,'2017-10-27 21:00:00','145',3),(27,'1245','Un super reportage sur la WCS',100000,'2017-10-26 12:45:00','20',6),(28,'Recherche appartement ou maison','Au sommaire : *Marine et Ana-Luiza* Stéphane Plaza recherche dans le Xe arrondissement un appartement correspondant aux critères de ce couple de trentenaires.',NULL,'2017-10-27 21:00:00','150',6),(30,'Billions','Saison 1 Episode 5',2564,'2017-10-26 20:55:00','45',4),(31,'La maison france 5','L\'animateur poursuite sa découverte du Sud-Ouest. ',NULL,'2017-10-27 20:50:00','115',5),(32,'Contact','Un homme meurt devant une église en plein jour, le torse recouvert d\'étranges tatouages. ',5896,'2017-10-26 21:00:00','55',1),(33,'Chasseurs d\'appart\'',' Trois agents immobiliers doivent trouver des biens à des clients dans des secteurs qu\'ils ne connaissent pas forcément.',8456,'2017-10-26 18:45:00','50',6);
/*!40000 ALTER TABLE `program` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25  7:57:40
