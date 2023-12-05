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
  `nm_dish_fr` varchar(50) NOT NULL,
  `img_dish` varchar(50) NOT NULL,
  `id_category` int NOT NULL,
  `id_qty` int NOT NULL,
  `description_dish` text NOT NULL,
  `description_dish_fr` text NOT NULL,
  `ft_dish` tinyint NOT NULL DEFAULT '0',
  `price_dish` decimal(20,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id_dish`),
  KEY `id_qty` (`id_qty`),
  KEY `id_category` (`id_category`),
  CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `tb_categoryes` (`id_category`),
  CONSTRAINT `id_qty` FOREIGN KEY (`id_qty`) REFERENCES `tb_person_qty` (`id_qty`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla restpage.tb_dishes: ~39 rows (aproximadamente)
DELETE FROM `tb_dishes`;
INSERT INTO `tb_dishes` (`id_dish`, `nm_dish`, `nm_dish_fr`, `img_dish`, `id_category`, `id_qty`, `description_dish`, `description_dish_fr`, `ft_dish`, `price_dish`) VALUES
	(39, 'Ratatouille', '', './imgs./image-ratatouille.jpg', 1, 1, ' This ratatouille recipe is my version of the terrific French vegetable stew made with fresh tomatoes and lots of summer vegetables. It\'s very versatile side dish and makes a delicious vegetarian main dish, too.', '', 0, 16.10),
	(40, 'Galette des Rois', '', './imgs./image-galette-des-rois.jpg', 1, 1, ' Galette de Rois is a popular French puff pastry cake that celebrates the holiday of Epiphany (January 6th) the day when the Three Kings visited the Baby Jesus. As part of French tradition, a bean or small china fève (favor) is hidden in the cake. The person who finds the fève in his or her slice becomes king or queen for the day!', '', 0, 6.90),
	(41, 'French Apple Cake', '', './imgs./image-french-apple-cake.jpg', 1, 1, ' This French apple cake is incredibly delicious. France is famous for its fabulously fancy pastries and baked goods, so you might get some skeptic looks when you tell them that this is your favorite apple cake – but trust me – this simple, rustic, easy to make cake is absolutely amazing.', '', 0, 36.30),
	(42, 'Apple Tarte Tatin', '', './imgs./image-apple-tarte-tatin.jpg', 1, 1, ' A tarte tatin just uses just pastry dough, butter, apples, and sugar to create magic! You can use puff pastry if you prefer. No matter how yours comes out, you\'ll enjoy it!', '', 0, 51.00),
	(43, 'Provencal White Beans', '', './imgs./image-provencal-white-beans.jpg', 1, 1, ' This Provencal-style white bean side dish pairs very well with a roasted leg of lamb and is often served with lamb in Greece.', '', 0, 15.00),
	(44, 'Sole Meuniere', '', './imgs./image-sole-meuniere.jpg', 1, 1, ' Sole meuniere is a classic French dish where sol filets are cooked and served in a rich, buttery sauce. It also has the benefit of being super fast and easy. You can replace the sole, which can be tough to find, with cod, whiting or any other white flaky fish. ', '', 0, 38.20),
	(45, 'Pain au Chocolat (Chocolate Croissants)', '', './imgs./image-pain-au-chocolat.jpg', 1, 1, ' This pain au chocolat recipe makes light, flaky French croissants filled with delicious chocolate. They do require a little effort but a bread machine makes the process a lot easier. Your entire family will love these! ', '', 0, 64.70),
	(46, 'Salmon en Croûte', '', './imgs./image-salmon-en-croûte.jpg', 1, 1, ' Salmon en croûte is a deliciously tender salmon fillet wrapped in crispy puff pastry with a spinach and mushroom filling. I like to serve it with a thin lemon-mustard sauce and a side of rice or asparagus for an impressive French-inspired meal.', '', 0, 32.60),
	(47, 'Meat Pie', '', './imgs./image-meat-pie.jpg', 1, 1, ' This meat pie is delicious! I got it from my husband\'s mother. She is French so I believe this is a French meat pie recipe. Beef, pork, and potato are all nicely spiced and baked together. It\'s yummy and pretty easy to make too! It\'s best served fresh, but you can also make it ahead and freeze or refrigerate it. Serve the pie by itself or with a beef gravy.', '', 0, 10.50),
	(48, 'Sauce Vierge', '', './imgs./image-sauce-vierge.jpg', 1, 1, ' This sauce is French inspired and traditionally served over delicate white fish or seafood, but it\'s equally good over pork tenderloin, chicken, and even steamed veggies. Its taste is fresh, light, and pure, and it\'s so very simple to make.', '', 0, 2.80),
	(49, 'Beans and Greens Tartine', '', './imgs./image-beans-and-greens-tartine.jpg', 1, 1, ' Bacon-y beans and garlicky greens are combined in this delicious French open-faced sandwich called a tartine.', '', 0, 65.60),
	(50, 'Sazerac Cocktail', '', './imgs./image-sazerac-cocktail.jpg', 1, 1, ' There\'s a lot to love about this classic whiskey and bitters beverage. The official drink of New Orleans, the Sazerac is every bit as aromatic and flavorful as most anything else from down on the bayou.', '', 0, 47.40),
	(51, 'Stout and Ale', '', './imgs./image-stout-and-ale.jpg', 1, 1, ' This "black and tan" beer cocktail recipe is a St. Patrick\'s Day staple at our house. Don\'t be fooled by the simple ingredients... The trick is getting them to layer just right. The key is to pour the stout slowly. Enjoy!', '', 0, 37.50),
	(52, 'Rich Almond Milk Eggnog', '', './imgs./image-rich-almond-milk-eggnog.jpg', 1, 1, ' This rich almond milk eggnog is dairy-free, and suitable for anyone who is lactose intolerant or just prefers plant-based milks. Its richness comes from the addition of a duck egg, and it has a thinner texture than commercial eggnog. ', '', 0, 28.70),
	(53, 'Aperol Sour', '', './imgs./image-aperol-sour.jpg', 1, 1, ' This Aperol sour is a twist on a whiskey sour that uses Aperol and gin instead of whiskey, resulting in a citrusy, herbal cocktail. Chill your glass in the freezer while preparing the cocktail.', '', 0, 10.00),
	(55, 'Mulled Cranberry Juice', '', './imgs./image-mulled-cranberry-juice.jpg', 1, 1, ' Serve this mulled cranberry juice at your next gathering—this lovely treat will put your guests in a holiday mood. If you like, you may leave out the sugar and add some orange liqueur, like Cointreau, for the grown-up party crowd.', '', 0, 58.50),
	(56, 'Sugar Cookie Martini', '', './imgs./image-sugar-cookie-martini.jpg', 1, 1, ' This sugar cookie martini is like your favorite holiday sugar cookie in a cocktail, with just the cookie flavor you are hoping for. Not only is it festive, it\'s easy, too, with just a few ingredients.', '', 0, 29.90),
	(57, 'Salted Caramel Apple Shots', '', './imgs./image-salted-caramel-apple-shots.jpg', 1, 1, ' Salted caramel apple shots capture the flavors of fall in a glass. They are delightfully sweet and boozy. Taking a little bite of apple at the end adds the nostalgic flavor of a carnival caramel apple. ', '', 0, 62.50),
	(58, 'Grinch Punch', '', './imgs./image-grinch-punch.jpg', 1, 1, ' This festive green Grinch punch is a wonderful, awful idea for a holiday party! It\'s so easy to make and your guests will enjoy it so much that your heart might just grow three sizes that day.', '', 0, 3.20),
	(59, 'Korean Banana Milk', '', './imgs./image-korean-banana-milk.jpg', 1, 1, ' I have had a hard time finding Korean Banana Milk so I decided to make my own. This turned out delicious and so much less expensive.', '', 0, 23.20),
	(60, 'Sazerac Cocktail', '', './imgs./image-sazerac-cocktail.jpg', 1, 1, ' There\'s a lot to love about this classic whiskey and bitters beverage. The official drink of New Orleans, the Sazerac is every bit as aromatic and flavorful as most anything else from down on the bayou.', '', 0, 34.30),
	(61, 'Stout and Ale', '', './imgs./image-stout-and-ale.jpg', 1, 1, ' This "black and tan" beer cocktail recipe is a St. Patrick\'s Day staple at our house. Don\'t be fooled by the simple ingredients... The trick is getting them to layer just right. The key is to pour the stout slowly. Enjoy!', '', 0, 62.40),
	(62, 'Rich Almond Milk Eggnog', '', './imgs./image-rich-almond-milk-eggnog.jpg', 1, 1, ' This rich almond milk eggnog is dairy-free, and suitable for anyone who is lactose intolerant or just prefers plant-based milks. Its richness comes from the addition of a duck egg, and it has a thinner texture than commercial eggnog. ', '', 0, 16.70),
	(64, 'Crema di Limoncello (Cream of Limoncello)', '', './imgs./image-crema-di-limoncello-(cream-of-limonc', 1, 1, ' What is crema di limoncello? Cream of limoncello is the perfect answer to the question “what do you do when life gives you lemons?” You make limoncello! And this creamy, lemony version is the perfect end to a delicious meal. I’ve always brought some back from our trips to Italy, but now I make my own at home.', '', 0, 48.30),
	(65, 'Mulled Cranberry Juice', '', './imgs./image-mulled-cranberry-juice.jpg', 1, 1, ' Serve this mulled cranberry juice at your next gathering—this lovely treat will put your guests in a holiday mood. If you like, you may leave out the sugar and add some orange liqueur, like Cointreau, for the grown-up party crowd.', '', 0, 22.20),
	(66, 'Sugar Cookie Martini', '', './imgs./image-sugar-cookie-martini.jpg', 1, 1, ' This sugar cookie martini is like your favorite holiday sugar cookie in a cocktail, with just the cookie flavor you are hoping for. Not only is it festive, it\'s easy, too, with just a few ingredients.', '', 0, 28.00),
	(67, 'Salted Caramel Apple Shots', '', './imgs./image-salted-caramel-apple-shots.jpg', 1, 1, ' Salted caramel apple shots capture the flavors of fall in a glass. They are delightfully sweet and boozy. Taking a little bite of apple at the end adds the nostalgic flavor of a carnival caramel apple. ', '', 0, 29.50),
	(68, 'Grinch Punch', '', './imgs./image-grinch-punch.jpg', 1, 1, ' This festive green Grinch punch is a wonderful, awful idea for a holiday party! It\'s so easy to make and your guests will enjoy it so much that your heart might just grow three sizes that day.', '', 0, 24.30),
	(69, 'Korean Banana Milk', '', './imgs./image-korean-banana-milk.jpg', 1, 1, ' I have had a hard time finding Korean Banana Milk so I decided to make my own. This turned out delicious and so much less expensive.', '', 0, 26.70),
	(70, 'Sazerac Cocktail', '', './imgs./image-sazerac-cocktail.jpg', 1, 1, ' There\'s a lot to love about this classic whiskey and bitters beverage. The official drink of New Orleans, the Sazerac is every bit as aromatic and flavorful as most anything else from down on the bayou.', '', 0, 62.80),
	(71, 'Stout and Ale', '', './imgs./image-stout-and-ale.jpg', 1, 1, ' This "black and tan" beer cocktail recipe is a St. Patrick\'s Day staple at our house. Don\'t be fooled by the simple ingredients... The trick is getting them to layer just right. The key is to pour the stout slowly. Enjoy!', '', 0, 65.30),
	(72, 'Rich Almond Milk Eggnog', '', './imgs./image-rich-almond-milk-eggnog.jpg', 1, 1, ' This rich almond milk eggnog is dairy-free, and suitable for anyone who is lactose intolerant or just prefers plant-based milks. Its richness comes from the addition of a duck egg, and it has a thinner texture than commercial eggnog. ', '', 0, 26.60),
	(73, 'Aperol Sour', '', './imgs./image-aperol-sour.jpg', 1, 1, ' This Aperol sour is a twist on a whiskey sour that uses Aperol and gin instead of whiskey, resulting in a citrusy, herbal cocktail. Chill your glass in the freezer while preparing the cocktail.', '', 0, 42.30),
	(74, 'Crema di Limoncello (Cream of Limoncello)', '', './imgs./image-crema-di-limoncello.jpg', 1, 1, ' What is crema di limoncello? Cream of limoncello is the perfect answer to the question “what do you do when life gives you lemons?” You make limoncello! And this creamy, lemony version is the perfect end to a delicious meal. I’ve always brought some back from our trips to Italy, but now I make my own at home.', '', 0, 61.00),
	(75, 'Mulled Cranberry Juice', '', './imgs./image-mulled-cranberry-juice.jpg', 1, 1, ' Serve this mulled cranberry juice at your next gathering—this lovely treat will put your guests in a holiday mood. If you like, you may leave out the sugar and add some orange liqueur, like Cointreau, for the grown-up party crowd.', '', 0, 34.10),
	(76, 'Sugar Cookie Martini', '', './imgs./image-sugar-cookie-martini.jpg', 1, 1, ' This sugar cookie martini is like your favorite holiday sugar cookie in a cocktail, with just the cookie flavor you are hoping for. Not only is it festive, it\'s easy, too, with just a few ingredients.', '', 0, 42.80),
	(77, 'Salted Caramel Apple Shots', '', './imgs./image-salted-caramel-apple-shots.jpg', 1, 1, ' Salted caramel apple shots capture the flavors of fall in a glass. They are delightfully sweet and boozy. Taking a little bite of apple at the end adds the nostalgic flavor of a carnival caramel apple. ', '', 0, 41.40),
	(78, 'Grinch Punch', '', './imgs./image-grinch-punch.jpg', 1, 1, ' This festive green Grinch punch is a wonderful, awful idea for a holiday party! It\'s so easy to make and your guests will enjoy it so much that your heart might just grow three sizes that day.', '', 0, 65.50),
	(79, 'Korean Banana Milk', '', './imgs./image-korean-banana-milk.jpg', 1, 1, ' I have had a hard time finding Korean Banana Milk so I decided to make my own. This turned out delicious and so much less expensive.', '', 0, 16.60);

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

-- Volcando datos para la tabla restpage.tb_person_qty: ~2 rows (aproximadamente)
DELETE FROM `tb_person_qty`;
INSERT INTO `tb_person_qty` (`id_qty`, `nm_person_qty`) VALUES
	(1, 'individual'),
	(2, 'couples'),
	(3, 'familiar');

-- Volcando estructura para tabla restpage.tb_test
CREATE TABLE IF NOT EXISTS `tb_test` (
  `id_test` int NOT NULL AUTO_INCREMENT,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla restpage.tb_test: ~4 rows (aproximadamente)
DELETE FROM `tb_test`;
INSERT INTO `tb_test` (`id_test`, `description`) VALUES
	(1, 'value_to_insert'),
	(2, 'ÃŠl sÃ­la erin lÃ» e-govaned vÃ®n.'),
	(3, 'Beyaz DaÄŸ Ulusal OrmanÄ±'),
	(4, 'AteÅŸ Vadisi Eyalet ParkÄ±');

-- Volcando estructura para tabla restpage.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `usr` text NOT NULL,
  `pwd` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla restpage.tb_users: ~3 rows (aproximadamente)
DELETE FROM `tb_users`;
INSERT INTO `tb_users` (`id_user`, `fullname`, `usr`, `pwd`, `email`) VALUES
	(1, 'test10', 'test10', '$2y$12$aUCdsRLfkBjMB.wxkF5tru/9gHt.gqTPCwiAiyLIfwqtVXeYXz2iu', 'test@test.co'),
	(2, 'deinner', 'deinno', '$2y$12$tmQFFwazMJc9nRN2JhgKDepCeH2Rj2sekq1YJg4pyZiMwy3o3lP7G', 'asd@asd'),
	(6, 'asd', 'asd', 'asd', 'asd'),
	(7, 'ass', 'ass', '$2y$12$VNYIoYqnNkt.6sBxPeCTNeBNx46SKC9xtVeTRWVh7Bnn2uPOz8LM6', 'ass');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
