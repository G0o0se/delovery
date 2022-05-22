CREATE DATABASE  IF NOT EXISTS `delovery` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `delovery`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: delovery
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cookTime` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (76,'Паста','pasta','pasta.jpg',40),(79,'Супи','soup','2022-05-22-00-49-37soup.jpg',30),(80,'Піца','pizza','2022-05-22-00-50-16pizza.jpg',40),(81,'Гриль меню','grillmenu','2022-05-22-00-50-55grillmenu.jpg',70),(82,'Салат','salad','2022-05-22-00-52-10salad.jpg',30),(83,'Десерти','dessert','2022-05-22-00-52-43dessert.jpg',40);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (44,'Карбонара','Карбонара',260,'2022-05-22-00-42-57carbonara.jpg','Паста'),(45,'Помодоро','Помодоро',250,'2022-05-22-15-25-15pomodoro.jpg','Паста'),(46,'Польпетте','Польпетте',270,'2022-05-22-15-25-56polpette.jpg','Паста'),(47,'Паста з лангустином','Паста з лангустином',350,'2022-05-22-15-26-33langoustine.jpg','Паста'),(48,'Фрутті','Паста з морепродуктами',350,'2022-05-22-15-27-36frutti.jpg','Паста'),(49,'Болоньезе','Болоньезе',360,'2022-05-22-15-28-04bolognese.jpg','Паста'),(50,'Вегетаріанський рамен','Рамен без м\'яса',240,'2022-05-22-15-29-20veganramen.jpg','Супи'),(51,'Рамен','Рамен з куркою',330,'2022-05-22-15-29-38ramenchicken.jpg','Супи'),(52,'Рамен ','Рамен зі свининою',220,'2022-05-22-15-31-07pork.jpg','Супи'),(53,'Вегетаріанська піца','Піца з руколою         ',220,'2022-05-22-15-37-32rucola.jpg','Піца'),(54,'Піца з ковбасками','Піца з ковбасками',250,'2022-05-22-15-43-34reine.jpg','Піца'),(55,'Гостра піца','Піца з перцем',250,'2022-05-22-15-44-47piccante.jpg','Піца'),(56,'Наполетана','Піца з м\'ясом',230,'2022-05-22-15-45-17napoletana.jpg','Піца'),(57,'Маргарита','Маргарита',230,'2022-05-22-15-46-11margherita.jpg','Піца'),(58,'Формагі','Піца з сиром',230,'2022-05-22-15-47-45formaggi.jpg','Піца'),(59,'Молтен','Пряний шоколадний кекс',80,'2022-05-22-15-50-28molten.jpg','Десерти'),(60,'Чіп','Десерт з шоколадом',60,'2022-05-22-15-52-21chip.jpg','Десерти'),(61,'Чізкейк','Чізкейк',60,'2022-05-22-15-53-27cheesecake.jpg','Десерти'),(62,'Курка \"Маргарита\"','Курка з фасолью ',260,'2022-05-22-16-10-42margaritachicken.jpg','Гриль меню'),(63,'Курка з манго','Курка з манго ',330,'2022-05-22-16-11-38mangochicken.jpg','Гриль меню '),(64,'Курка з овочами','Курка з овочами на грилі',240,'2022-05-22-16-12-58grillchicken.jpg','Гриль меню'),(65,'Цезар','Цезар',180,'2022-05-22-16-15-36caesar.jpg','Салат'),(66,'Аспараго','Салат з курки, овочей та яєць',250,'2022-05-22-16-17-03asparago.jpg','Салат'),(67,'Капрезе','Помідори та сир \"Фета\"',130,'2022-05-22-16-20-56caprese.jpg','Салат'),(68,'Літній салат','Салат з помідорів, руколи, моцарели та кедровиз горішків',220,'2022-05-22-16-55-34estiva.jpg','Салат'),(69,'Парміджано','Салат з баклажанів, моцарели та пармезана',450,'2022-05-22-16-58-10parmigiano.jpg','Салат'),(70,'Стейк \"Sirloin\"','Стейк з яловичини та овощей',450,'2022-05-22-17-00-33sirloin.jpg','Гриль меню');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (17,'2022-05-22 00:41:13','Відкриття ресторану','Відкриття ресторану','2022-05-22-00-41-13salmon.jpg'),(18,'2022-05-22 00:55:20','Нове меню з 20 травня','Нове меню з 20 травня','2022-05-22-00-55-20caprese.jpg'),(19,'2022-05-22 00:56:29','Новітня страви кожного тижня','Ми подаємо традиційну піцу, а також нашу власну фірмову піцу, яка є делікатно приправленою сумішшю м\'яса, сиру та базиліку. Наше меню змінюється в залежності від сезону. У нас також є відмінна карта вин та вибір пива у барі. Ресторан знаходиться за 5 хвилин ходьби від поля для гольфу.','2022-05-22-00-56-29pizza.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `amount` int DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `payment` varchar(45) DEFAULT NULL,
  `delivery` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (75,19,1110,'Готується','2022-05-22 17:00:50','Готівка','Михайлівський провулок 10/2'),(76,20,500,'Замовленно','2022-05-22 17:08:02','Готівка','Замовивіз');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_goods`
--

DROP TABLE IF EXISTS `orders_has_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_has_goods` (
  `orders_id` int NOT NULL,
  `goods_id` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`orders_id`,`goods_id`),
  KEY `fk_orders_has_goods_goods1_idx` (`goods_id`),
  KEY `fk_orders_has_goods_orders_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_goods_goods1` FOREIGN KEY (`goods_id`) REFERENCES `goods` (`id`),
  CONSTRAINT `fk_orders_has_goods_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_goods`
--

LOCK TABLES `orders_has_goods` WRITE;
/*!40000 ALTER TABLE `orders_has_goods` DISABLE KEYS */;
INSERT INTO `orders_has_goods` VALUES (75,51,1),(75,62,3),(76,66,2);
/*!40000 ALTER TABLE `orders_has_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `surname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_admin` int NOT NULL,
  `phone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'Admin','Admin','admin@gmail.com','admin',1,'+380993210210','Михайлівський провулок 10/2'),(20,'Delivery','Delivery','delivery@gmail.com','delivery',2,'+380993210210','Михайлівський провулок 10/2'),(21,'Денис','Горбенко','b0tt0miezz@gmail.com','096dsh',0,'+380970065747','Миру 19, кв 10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'delovery'
--

--
-- Dumping routines for database 'delovery'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 16:15:23
