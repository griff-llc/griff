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
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `neighborhood` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `for_sale` mediumtext,
  `potential_listings` mediumtext,
  `for_rent` mediumtext,
  `recently_sold` tinyint(4) DEFAULT NULL,
  `open_houses` tinyint(4) DEFAULT NULL,
  `pending_under` tinyint(4) DEFAULT NULL,
  `max_price` int(11) DEFAULT NULL,
  `min_price` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `home_types` mediumtext,
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `property` */

insert  into `property`(`id`,`user_id`,`property_name`,`description`,`latitude`,`longitude`,`address`,`neighborhood`,`city`,`zipcode`,`for_sale`,`potential_listings`,`for_rent`,`recently_sold`,`open_houses`,`pending_under`,`max_price`,`min_price`,`beds`,`home_types`,`baths`,`square_feet_min`,`square_feet_max`,`lot_size`,`year_built_min`,`year_built_max`,`max_hoa`,`days_on_zillow`,`Keywords`) values (9,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',1,1,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(10,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',1,1,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(11,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',1,1,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(12,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',1,1,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(13,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',NULL,NULL,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(14,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',NULL,NULL,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(15,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',NULL,NULL,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL),(16,3,'all houese','this is for all houses','40.73082279999999','-73.99733200000003','Washington Square Park, New York, NY, USA',NULL,NULL,NULL,'{\"by_agent\":1,\"by_owner\":1,\"new_construction\":1,\"foreclosures\":1,\"coming_soon\":1}','{\"foreclosed\":1,\"pre_foreclosure\":1,\"make_me_move\":1}','{\"for_rent\":0,\"recently_sold\":0,\"open_houses\":0,\"pending_under\":0}',NULL,NULL,NULL,NULL,NULL,0,'{\"houses\":0,\"apartments\":0,\"condos\":0,\"townhomes\":0,\"manufactured\":0,\"lots_land\":0}',0,NULL,NULL,0,NULL,NULL,0,0,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`,`flag`,`type`,`join_date`) values (1,'ming','mingming424224@gmail.com','d41d8cd98f00b204e9800998ecf8427e',NULL,NULL,NULL),(2,'ming ming','mingming@gmail.com','7b63d1cafe15e5edab88a8e81de794b5',NULL,NULL,NULL),(3,'demo','demo@demo.com','fe01ce2a7fbac8fafaed7c982a04e229',NULL,NULL,'2019-04-16 19:08:32'),(4,'mingming424224@gmail.com','ming ming','7b63d1cafe15e5edab88a8e81de794b5',NULL,NULL,'2019-04-24 01:51:02'),(5,'ri bin','ri@hotmail.com','7b63d1cafe15e5edab88a8e81de794b5',NULL,NULL,'2019-04-24 01:52:56');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
