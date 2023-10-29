/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.5.62 : Database - shopping
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shopping` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `shopping`;

/*Table structure for table `cards` */

DROP TABLE IF EXISTS `cards`;

CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_cvv` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_expires` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`),
  CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cards` */

/*Table structure for table `cashbox` */

DROP TABLE IF EXISTS `cashbox`;

CREATE TABLE `cashbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cashbox` */

/*Table structure for table `clothes_types` */

DROP TABLE IF EXISTS `clothes_types`;

CREATE TABLE `clothes_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clothes_types` */

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` text COLLATE utf8mb4_unicode_ci,
  `sex` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `mail` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `img_main` text COLLATE utf8mb4_unicode_ci,
  `img_second` text COLLATE utf8mb4_unicode_ci,
  `rating` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sex` int(11) DEFAULT NULL,
  `for_kids` int(11) DEFAULT NULL,
  `item_count` int(11) DEFAULT NULL,
  `item_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_type` (`item_type`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_type`) REFERENCES `clothes_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `items` */

insert  into `items`(`id`,`name`,`description`,`img_main`,`img_second`,`rating`,`price`,`sex`,`for_kids`,`item_count`,`item_type`) values 
(1,'Classic Spring','asgdasdasd','assets/images/men-01.jpg','assets/images/men-01.jpg',5,120,0,0,50,NULL),
(2,'Air Force 1 X','asgdasdasd','assets/images/men-02.jpg','assets/images/men-02.jpg',4,90,0,0,100,NULL),
(3,'Love Nana 20','asdasdaoksdpoakdopakdpkaodkpaksposakdkasd','assets/images/men-03.jpg','assets/images/men-03.jpg',5,150,0,0,50,NULL),
(4,'Classic Spring','asgdasdasd','assets/images/men-01.jpg','assets/images/men-01.jpg',3,120,0,0,50,NULL),
(9,'New Green Jacket','asgdasdasd','assets/images/women-01.jpg','assets/images/women-01.jpg',4,75,1,0,50,NULL),
(10,'Classic Dress','asgdasdasd','assets/images/women-02.jpg','assets/images/women-02.jpg',3,45,1,0,50,NULL),
(11,'Spring Collection','asgdasdasd','assets/images/women-03.jpg','assets/images/women-03.jpg',4,130,1,0,50,NULL),
(12,'Classic Spring','asgdasdasd','assets/images/women-01.jpg','assets/images/women-01.jpg',4,120,1,0,50,NULL),
(13,'School Collection','asgdasdasd','assets/images/kid-01.jpg','assets/images/kid-01.jpg',4,80,1,1,50,NULL),
(14,'Summer Cap','asgdasdasd','assets/images/kid-02.jpg','assets/images/kid-02.jpg',4,12,1,1,50,NULL),
(15,'Classic Kid','asgdasdasd','assets/images/kid-03.jpg','assets/images/kid-03.jpg',5,30,0,1,50,NULL),
(16,'Classic Spring','asgdasdasd','assets/images/kid-01.jpg','assets/images/kid-01.jpg',5,120,1,1,50,NULL);

/*Table structure for table `order_content` */

DROP TABLE IF EXISTS `order_content`;

CREATE TABLE `order_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_count` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `order_content` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `client_id` (`client_id`),
  KEY `payment_method` (`payment_method`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_content` (`id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `customers` (`id`),
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_method`) REFERENCES `cashbox` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `orders` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
