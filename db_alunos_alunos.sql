CREATE DATABASE  IF NOT EXISTS `db_alunos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_alunos`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: db_alunos
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alunos` (
  `idalunos` int NOT NULL AUTO_INCREMENT,
  `matricula` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  PRIMARY KEY (`idalunos`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (1,'001','Alexandre','fortaleza'),(2,'002','Erika','fortaleza'),(3,'003','Davi','fortaleza'),(4,'004','XeroVerde','fortaleza'),(5,'005','Elias','fortaleza'),(6,'006','Adriely','fortaleza'),(7,'007','Mario','fortaleza'),(8,'008','Elvis','fortaleza'),(9,'009','Alicia','fortaleza'),(10,'010','Italo','fortaleza'),(11,'011','Talyson','fortaleza'),(12,'012','Camila','fortaleza'),(13,'013','Guilherme','fortaleza'),(14,'014','Saor','fortaleza'),(15,'015','Nathan','fortaleza'),(16,'016','Carlos','fortaleza'),(17,'017','Ciro','fortaleza'),(18,'018','Diene','fortaleza'),(19,'019','Sergio','fortaleza'),(20,'020','Neville','fortaleza'),(21,'021','Samuel','fortaleza'),(22,'022','Bruno','fortaleza'),(23,'023','Mateus','fortaleza'),(24,'024','Marcelo','fortaleza'),(46,'026','lora','Fortaleza'),(47,'1231','allan','adfadfadf'),(48,'1244134','lorao dc','Fortaleza');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-14 11:02:47
