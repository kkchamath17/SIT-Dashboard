SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(22) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(6) NOT NULL,
  `product_price` int(22) NOT NULL,
  `product_cat` varchar(22) NOT NULL,
  `product_details` varchar(22) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `sales_stats`;
CREATE TABLE `sales_stats` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `sales` int(22) NOT NULL,
  `month` varchar(25) NOT NULL,
  `pending_orders` int(55) NOT NULL,
  `revenue` int(55) NOT NULL,
  `Vistors` int(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sales_stats` (`id`, `sales`, `month`, `pending_orders`, `revenue`, `Vistors`) VALUES
(1,	1312,	'Mar',	132,	126,	356);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;