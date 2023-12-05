-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para restpage
CREATE DATABASE IF NOT EXISTS `restpage` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `restpage`;

-- Volcando estructura para tabla restpage.tb_categoryes
CREATE TABLE IF NOT EXISTS `tb_categoryes` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `nm_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_categoryes: ~2 rows (aproximadamente)
DELETE FROM `tb_categoryes`;
INSERT INTO `tb_categoryes` (`id_category`, `nm_category`) VALUES
	(1, 'entry/salads'),
	(2, 'strong dishes');

-- Volcando estructura para tabla restpage.tb_dishes
CREATE TABLE IF NOT EXISTS `tb_dishes` (
  `id_dish` int NOT NULL AUTO_INCREMENT,
  `nm_dish` varchar(50) NOT NULL,
  `img_dish` varchar(50) NOT NULL,
  `id_category` int NOT NULL,
  `id_qty` int NOT NULL,
  `description_dish` text NOT NULL,
  `ft_dish` tinyint NOT NULL DEFAULT '0',
  `price_dish` decimal(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id_dish`),
  KEY `id_qty` (`id_qty`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `tb_categoryes` (`id_category`),
  CONSTRAINT `id_qty` FOREIGN KEY (`id_qty`) REFERENCES `tb_person_qty` (`id_qty`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_dishes: ~11 rows (aproximadamente)
DELETE FROM `tb_dishes`;
INSERT INTO `tb_dishes` (`id_dish`, `nm_dish`, `img_dish`, `id_category`, `id_qty`, `description_dish`, `ft_dish`, `price_dish`) VALUES
	(39, 'Ratatouille', './imgs./image-ratatouille.jpg', 1, 1, ' This ratatouille recipe is my version of the terrific French vegetable stew made with fresh tomatoes and lots of summer vegetables. It\'s very versatile side dish and makes a delicious vegetarian main dish, too.', 0, 16.10),
	(40, 'Galette des Rois', './imgs./image-galette-des-rois.jpg', 1, 1, ' Galette de Rois is a popular French puff pastry cake that celebrates the holiday of Epiphany (January 6th) the day when the Three Kings visited the Baby Jesus. As part of French tradition, a bean or small china fève (favor) is hidden in the cake. The person who finds the fève in his or her slice becomes king or queen for the day!', 0, 6.90),
	(41, 'French Apple Cake', './imgs./image-french-apple-cake.jpg', 1, 1, ' This French apple cake is incredibly delicious. France is famous for its fabulously fancy pastries and baked goods, so you might get some skeptic looks when you tell them that this is your favorite apple cake – but trust me – this simple, rustic, easy to make cake is absolutely amazing.', 0, 36.30),
	(42, 'Apple Tarte Tatin', './imgs./image-apple-tarte-tatin.jpg', 1, 1, ' A tarte tatin just uses just pastry dough, butter, apples, and sugar to create magic! You can use puff pastry if you prefer. No matter how yours comes out, you\'ll enjoy it!', 0, 51.00),
	(43, 'Provencal White Beans', './imgs./image-provencal-white-beans.jpg', 1, 1, ' This Provencal-style white bean side dish pairs very well with a roasted leg of lamb and is often served with lamb in Greece.', 0, 15.00),
	(44, 'Sole Meuniere', './imgs./image-sole-meuniere.jpg', 1, 1, ' Sole meuniere is a classic French dish where sol filets are cooked and served in a rich, buttery sauce. It also has the benefit of being super fast and easy. You can replace the sole, which can be tough to find, with cod, whiting or any other white flaky fish. ', 0, 38.20),
	(45, 'Pain au Chocolat (Chocolate Croissants)', './imgs./image-pain-au-chocolat.jpg', 1, 1, ' This pain au chocolat recipe makes light, flaky French croissants filled with delicious chocolate. They do require a little effort but a bread machine makes the process a lot easier. Your entire family will love these! ', 0, 64.70),
	(46, 'Salmon en Croûte', './imgs./image-salmon-en-croûte.jpg', 1, 1, ' Salmon en croûte is a deliciously tender salmon fillet wrapped in crispy puff pastry with a spinach and mushroom filling. I like to serve it with a thin lemon-mustard sauce and a side of rice or asparagus for an impressive French-inspired meal.', 0, 32.60),
	(47, 'Meat Pie', './imgs./image-meat-pie.jpg', 1, 1, ' This meat pie is delicious! I got it from my husband\'s mother. She is French so I believe this is a French meat pie recipe. Beef, pork, and potato are all nicely spiced and baked together. It\'s yummy and pretty easy to make too! It\'s best served fresh, but you can also make it ahead and freeze or refrigerate it. Serve the pie by itself or with a beef gravy.', 0, 10.50),
	(48, 'Sauce Vierge', './imgs./image-sauce-vierge.jpg', 1, 1, ' This sauce is French inspired and traditionally served over delicate white fish or seafood, but it\'s equally good over pork tenderloin, chicken, and even steamed veggies. Its taste is fresh, light, and pure, and it\'s so very simple to make.', 0, 2.80),
	(49, 'Beans and Greens Tartine', './imgs./image-beans-and-greens-tartine.jpg', 1, 1, ' Bacon-y beans and garlicky greens are combined in this delicious French open-faced sandwich called a tartine.', 0, 65.60);

-- Volcando estructura para tabla restpage.tb_orders
CREATE TABLE IF NOT EXISTS `tb_orders` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `id_dish` int NOT NULL,
  `date_order` datetime NOT NULL,
  `qty_dish` int NOT NULL,
  PRIMARY KEY (`id_order`),
  KEY `id_dish` (`id_dish`),
  CONSTRAINT `id_dish` FOREIGN KEY (`id_dish`) REFERENCES `tb_dishes` (`id_dish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_orders: ~0 rows (aproximadamente)
DELETE FROM `tb_orders`;

-- Volcando estructura para tabla restpage.tb_order_type
CREATE TABLE IF NOT EXISTS `tb_order_type` (
  `id_order_type` int NOT NULL AUTO_INCREMENT,
  `nm_order_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_order_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_order_type: ~0 rows (aproximadamente)
DELETE FROM `tb_order_type`;

-- Volcando estructura para tabla restpage.tb_person_qty
CREATE TABLE IF NOT EXISTS `tb_person_qty` (
  `id_qty` int NOT NULL AUTO_INCREMENT,
  `nm_person_qty` varchar(50) NOT NULL,
  PRIMARY KEY (`id_qty`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_person_qty: ~3 rows (aproximadamente)
DELETE FROM `tb_person_qty`;
INSERT INTO `tb_person_qty` (`id_qty`, `nm_person_qty`) VALUES
	(1, 'individual'),
	(2, 'couples'),
	(3, 'familiar');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
