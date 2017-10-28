-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.0
-- Generation Time: Oct 08, 2017 at 05:19 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gwapo`
--

-- --------------------------------------------------------

--
--
CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `products` (`prod_id`,`brand`, `price`, `quantity`, `description`, `color`, `gender`)
VALUES (1, 'alange','$52650','100','Datograph Up and Downblack','black','male'),
VALUES (2, 'baume','$1495','100','Automatic Chronograph','black','male'),
VALUES (3, 'breguet','$1495','100','Automatic Chronograph','black','male'),
VALUES (4, 'chopard','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (4, 'elliot','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (5, 'hugo','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (6, 'montblanc','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (7, 'patek','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (8, 'patek','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (9, 'rado','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (10, 'rolex','$4495','100','Mille Miglia GTS Chrono','black','male'),
VALUES (11, 'audemars','$38995','100','Royal Oak Automatic Blue Women','black','woman'),
VALUES (12, 'baume','$1495','100','Silver Diamond','black','woman'),
VALUES (13, 'breguet','$17495','100','Classic Dial Automatic','black','woman'),
VALUES (14, 'bvlgari','$17495','100','White Dial Stainless Steel','black','woman')
VALUES (15, 'chopard','$1495','100','Automatic Chronograph Women','black','woman'),
VALUES (16, 'graff','$75000000','100','Floral Tourbillion Blue Mother Of Pearl','black','woman'),
VALUES (17, 'gucci','$1495','100','Automatic Chronograph Women','black','woman'),
VALUES (18, 'omega','$1495','100','Automatic Chronograph Women','black','woman'),
VALUES (19, 'cartier','$1495','100','Integral','black','woman'),
VALUES (20, 'rolex','$1495','100','Automatic Chronograph Women','black','woman'),



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
