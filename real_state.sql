/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.38-MariaDB : Database - real_state
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`real_state` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `real_state`;

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `property_name` varchar(255) DEFAULT NULL,
  `description` text,
  `address` varchar(512) DEFAULT NULL,
  `neighborhood` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `for_sale` varchar(255) DEFAULT NULL,
  `potential_listings` varchar(255) DEFAULT NULL,
  `for_rent` tinyint(4) DEFAULT NULL,
  `recently_sold` tinyint(4) DEFAULT NULL,
  `open_houses` tinyint(4) DEFAULT NULL,
  `pending_under` tinyint(4) DEFAULT NULL,
  `max_price` int(11) DEFAULT NULL,
  `min_price` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `home_types` varchar(255) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `square_feet_min` int(11) DEFAULT NULL,
  `square_feet_max` int(11) DEFAULT NULL,
  `lot_size` int(11) DEFAULT NULL,
  `year_built_min` int(11) DEFAULT NULL,
  `year_built_max` int(11) DEFAULT NULL,
  `max_hoa` int(11) DEFAULT NULL,
  `days_on_zillow` int(11) DEFAULT NULL,
  `Keywords` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `property` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `flag` tinyint(4) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `join_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`,`flag`,`type`,`join_date`) values (1,'ming','mingming424224@gmail.com','7b63d1cafe15e5edab88a8e81de794b5',NULL,NULL,NULL),(2,'ming ming','mingming@gmail.com','7b63d1cafe15e5edab88a8e81de794b5',NULL,NULL,NULL),(3,'demo','demo@demo.com','fe01ce2a7fbac8fafaed7c982a04e229',NULL,NULL,'2019-04-16 19:08:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
