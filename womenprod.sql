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
CREATE TABLE IF NOT EXISTS `audewomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `baumewomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `breguetwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `bvlgariwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `chopardwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `graffwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `gucciwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `omegawomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `rolexwomen` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(50) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
