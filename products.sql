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
-- Database: `registration`
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
  `location` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `products` (`prod_id`,`brand`, `price`, `quantity`, `description`, `color`, `gender`,`location`)VALUES 
(1, 'alange','$10995','100','A Lange and Sonhne Saxonia Silver Dial 18k Rose Gold','rose','male','..\\images\\lange\\a1.jpg'),
(2, 'alange','$20995','100','A Lange and Sonhne Saxonia Moon Phase Silver Dial','black','male','..\\images\\lange\\a2.jpg'),
(3, 'alange','$23995','100','A Lange and Sonhne Saxonia 1 18k Rose Gold','rose','male','..\\images\\lange\\a3.jpg'),
(4, 'alange','$33995','100','A Lange and Sonhne Saxonia Time Zone Silver Dial 18k Rose Gold','rose','male','..\\images\\lange\\a4.jpg'),
(5, 'alange','$21490','100','A Lange and Sonhne Saxonia 1850 up','black','male','..\\images\\lange\\a5.jpg'),
(6, 'alange','$32650','100','A Lange and Sonhne Saxonia Annual Calendar','black','male','..\\images\\lange\\a6.jpg'),
(7, 'alange','$28650','100','A Lange and Sonhne Grand Silver Dial 1','black','male','..\\images\\lange\\a7.jpg'),
(8, 'alange','$22650','100','A Lange and Sonhne Daytime Silver Dial','black','male','..\\images\\lange\\a8.jpg'),
(9, 'alange','$28990','100','A Lange and Sonhne Time Silver Dial','black','male','..\\images\\lange\\a9.jpg'),
(10, 'alange','$27995','100','A Lange and Sonhne Grand Launch 18k','black','male','..\\images\\lange\\a10.jpg'),
(11, 'baume','$1495','100','Baume and Mercier Hamptom Milleis Silver Dial','silver','male','..\\images\\baume\\a1.jpg'),
(12, 'baume','$1990','100','Baume and Mercier Brown Dial Chronograph','brown','male','..\\images\\baume\\a2.jpg'),
(13, 'baume','$1395','100','Baume and Mercier Capeland Automatic','brown','male','..\\images\\baume\\a3.jpg'),
(14, 'baume','$1895','100','Baume and Mercier Blue Dial Chronograph','blue','male','..\\images\\baume\\a4.jpg'),
(15, 'baume','$1395','100','Baume and Mercier Cliffton Dial Time','black','male','..\\images\\baume\\a5.jpg'),
(16, 'baume','$3395','100','Baume and Mercier Cliffton Brown Dial','brown','male','..\\images\\baume\\a6.jpg'),
(17, 'baume','$1800','100','Baume and Mercier Chronograph Black Dial','black','male','..\\images\\baume\\a7.jpg'),
(18, 'baume','$2290','100','Baume and Mercier Hamptopm Brown Dial Time','brown','male','..\\images\\baume\\a8.jpg'),
(19, 'baume','$1650','100','Baume and Mercier Alligator Leather','black','male','..\\images\\baume\\a9.jpg'),
(20, 'baume','$2290','100','Baume and Mercier Silver Dial Brown','brown','male','..\\images\\baume\\a10.jpg'),
(21, 'breguet','$16495','100','Breguet Classique Silver Dial White Gold','silver','male','..\\images\\breguet\\a1.jpg'),
(22, 'breguet','$17995','100','Breguet Classique White Dial Leather','silver','male','..\\images\\breguet\\a2.jpg'),
(23, 'breguet','$14995','100','Breguet Classique Marine Gold Dial','gold','male','..\\images\\breguet\\a3.jpg'),
(24, 'breguet','$17950','100','Breguet Tradition Automatic Skeleton 18k Dial Rose Gold','rose','male','..\\images\\breguet\\a4.jpg'),
(25, 'breguet','$17990','100','Breguet Tradition Skeleton 18l Dial Rose Gold','rose','male','..\\images\\breguet\\a5.jpg'),
(26, 'breguet','$17495','100','Breguet Silver Dial Black Leather','silver','male','..\\images\\breguet\\a6.jpg'),
(27, 'breguet','$18995','100','Breguet Automatic Black Leather','black','male','..\\images\\breguet\\a7.jpg'),
(28, 'breguet','$18995','100','Breguet Classique Marine Silver Dial 18k','silver','male','..\\images\\breguet\\a8.jpg'),
(29, 'breguet','$28995','100','Breguet Classique Marine Silver Dial 20k','silver','male','..\\images\\breguet\\a9.jpg'),
(30, 'chopard','$4495','100','Chopard Power Control GTS Chrono','black','male','..\\images\\chopard\\a1.jpg'),
(31, 'chopard','$3791','100','Chopard Titanium Steel','black','male','..\\images\\chopard\\a2.jpg'),
(32, 'chopard','$6271','100','Chopard Grand Prix de Monaco','silver','male','..\\images\\chopard\\a3.jpg'),
(33, 'chopard','$4771','100','Chopard Imperlale Black Leather','silver','male','..\\images\\chopard\\a4.jpg'),
(34, 'chopard','$3680','100','Chopard Mille Miglia Silver Titanium','silver','male','..\\images\\chopard\\a5.jpg'),
(35, 'chopard','$4582','100','Chopard Mille Miglia Silver Steel','silver','male','..\\images\\chopard\\a6.jpg'),
(36, 'chopard','$4683','100','Chopard Superfast Chronograph Black Dial','black','male','..\\images\\chopard\\a7.jpg'),
(37, 'chopard','$3698','100','Chopard White Dial Brown Leather','brown','male','..\\images\\chopard\\a8.jpg'),
(38, 'chopard','$5595','100','Chopard Silver Dial Black Rubber','black','male','..\\images\\chopard\\a9.jpg'),
(39, 'chopard','$4250','100','Chopard Mille Miglia GTS Chrono','silver','male','..\\images\\chopard\\a10.jpg'),
(40, 'elliot','$695','100','Elliot Brown Men Canford 202-002-B40','black','male','..\\images\\elliot\\a1.jpg'),
(41, 'elliot','$780','100','Elliot Brown Men Canford 202-004-N01','black','male','..\\images\\elliot\\a2.jpg'),
(42, 'elliot','$1095','100','Elliot Brown Men Canford 202-005-L02','black','male','..\\images\\elliot\\a3.jpg'),
(43, 'elliot','$495','100','Elliot Brown Men Canford 202-006-B07','black','male','..\\images\\elliot\\a4.jpg'),
(44, 'elliot','$595','100','Elliot Brown Men Canford 202-005-L02','black','male','..\\images\\elliot\\a5.jpg'),
(45, 'elliot','$600','100','Elliot Brown Bloxworth 929-001-N11','black','male','..\\images\\elliot\\a6.jpg'),
(46, 'elliot','$525','100','Elliot Brown Bloxworth 929-012-L18','black','male','..\\images\\elliot\\a7.jpg'),
(47, 'elliot','$665','100','Elliot Brown Bloxworth 929-002-B03','black','male','..\\images\\elliot\\a8.jpg'),
(48, 'elliot','$705','100','Elliot Brown Bloxworth 929-007-B01','black','male','..\\images\\elliot\\a9.jpg'),
(49, 'elliot','$525','100','Elliot Brown Bloxworth 929-008-C01','black','male','..\\images\\elliot\\a10.jpg'),
(50, 'hugo','$350','100','Hugo Boss Blackened Stainless Steel','black','male','..\\images\\hugo\\a1.jpg'),
(51, 'hugo','$325','100','Hugo Boss Aviator Casual Sport','black','male','..\\images\\hugo\\a2.jpg'),
(52, 'hugo','$375','100','Hugo Boss Rafale Competitor Sport','silver','male','..\\images\\hugo\\a3.jpg'),
(53, 'hugo','$495','100','Hugo Boss Aviator Casual Sport','black','male','..\\images\\hugo\\a4.jpg'),
(54, 'hugo','$295','100','Hugo Boss Pilot Vintage','silver','male','..\\images\\hugo\\a5.jpg'),
(55, 'hugo','$695','100','Hugo Boss Italian Leather Swiss','black','male','..\\images\\hugo\\a6.jpg'),
(56, 'hugo','$295','100','Hugo Boss Stainless Steel Watch','silver','male','..\\images\\hugo\\a7.jpg'),
(57, 'hugo','$345','100','Hugo Boss Tacymeter Leather Strap','black','male','..\\images\\hugo\\a8.jpg'),
(58, 'hugo','325','100','Hugo Boss Aviator Leather Strap','blue','male','..\\images\\hugo\\a9.jpg'),
(59, 'hugo','$4495','100','Hugo Boss Commander Stainless Steel','silver','male','..\\images\\hugo\\a10.jpg'),
(60, 'montblanc','$5650','100','Montblanc Heritage Chronometrie Chronograph Automatic','black','male','..\\images\\mont\\a1.jpg'),
(61, 'montblanc','$4495','100','Montblanc Heritage Chronometrie Chronograph Automatic','black','male','..\\images\\mont\\a2.jpg'),
(62, 'montblanc','$4150','100','Montblanc Heritage Automatic Silver Dial','silver','male','..\\images\\mont\\a3.jpg'),
(63, 'montblanc','$2675','100','Montblanc Time Walker','silver','male','..\\images\\mont\\a4.jpg'),
(64, 'montblanc','$1849','100','Montblanc 1585 Black Dial','brown','male','..\\images\\mont\\a5.jpg'),
(65, 'montblanc','$1175','100','Montblanc Traditional Black Dial','silver','male','..\\images\\mont\\a6.jpg'),
(66, 'montblanc','$1995','100','Montblanc Rose Gold Brown Dial','brown','male','..\\images\\mont\\a7.jpg'),
(67, 'montblanc','$1995','100','Montblanc Star Traditional Twin Moonphase','black','male','..\\images\\mont\\a8.jpg'),
(68, 'montblanc','$2795','100','Montblanc Heritage Chronometrie Automatic','black','male','..\\images\\mont\\a9.jpg'),
(69, 'montblanc','$5995','100','Montblanc Star Dial 18 Carat Rose Gold','rose','male','..\\images\\mont\\a10.jpg'),
(70, 'patek','$42495','100','Patek Philippe Aquanut Automatic','brown','male','..\\images\\patek\\a1.jpg'),
(71, 'patek','$78895','100','Patek Philippe Granf Complication Silver Dial','brown','male','..\\images\\patek\\a2.jpg'),
(72, 'patek','$62995','100','Patek Philippe Compilation Ivory','brown','male','..\\images\\patek\\a3.jpg'),
(73, 'patek','$59990','100','Patek Philippe Complication Chronograph','black','male','..\\images\\patek\\a4.jpg'),
(74, 'patek','$37995','100','Patek Philippe Complication World Time','brown','male','..\\images\\patek\\a5.jpg'),
(75, 'patek','$37995','100','Patek Philippe Complication 18k White Gold World Time','black','male','..\\images\\patek\\a6.jpg'),
(76, 'patek','$37495','100','Patek Philippe Complication White Gold Grey Dial','black','male','..\\images\\patek\\a7.jpg'),
(77, 'patek','$19495','100','Patek Philippe Calatrava Silver Dial','brown','male','..\\images\\patek\\a8.jpg'),
(78, 'patek','$27495','100','Patek Philippe Calatrava Mechanical Ivory','brown','male','..\\images\\patek.\\a9.jpg'),
(79, 'patek','$184495','100','Patek Philippe Calatrava Automatic Black Dial','black','male','..\\images\\patek\\a10.jpg'),
(80, 'rado','$799','100','Rado Coupole Classic Automatic','black','male','..\\images\\rado\\a1.jpg'),
(81, 'rado','$995','100','Rado Centrix Automatic','brown','male','..\\images\\rado\\a2.jpg'),
(82, 'rado','$1095','100','Rado Centrix Day-Date','black','male','..\\images\\rado\\a3.jpg'),
(83, 'rado','$1098','100','Rado Centrix Open Heart','white','male','..\\images\\rado\\a4.jpg'),
(84, 'rado','$599','100','Rado Centrix Quartz','silver','male','..\\images\\rado\\a5.jpg'),
(85, 'rado','$1195','100','Rado Centrix Black Chronograph','black','male','..\\images\\rado\\a6.jpg'),
(86, 'rado','$799','100','Rado Coupole Classic Automatic Black Dial','black','male','..\\images\\rado\\a12.jpg'),
(87, 'rado','$675','100','Rado Centrix Quart Two-Tone','white','male','..\\images\\rado\\a8.jpg'),
(88, 'rado','$1099','100','Rado Open Heart Gold','white','male','..\\images\\rado\\a9.jpg'),
(89, 'rado','$895','100','Rado Jubilee Classic White Dial','white','male','..\\images\\rado\\a10.jpg'),
(90, 'versace','$699','100','Versace V-Race','black','male','..\\images\\versace\\a1.jpg'),
(91, 'versace','$595','100','Versace V-Race Dial','silver','male','..\\images\\versace\\a2.jpg'),
(92, 'versace','$595','100','Versace V-Race Diver Blue Dial','blue','male','..\\images\\versace\\a3.jpg'),
(93, 'versace','$349','100','Versace Hellenylum Black Dial','silver','male','..\\images\\versace\\a4.jpg'),
(94, 'versace','$349','100','Versace Hellenylum Brown Dial','brown','male','..\\images\\versace\\a5.jpg'),
(95, 'versace','$699','100','Versace Black Dial','brown','male','..\\images\\versace\\a6.jpg'),
(96, 'versace','$999','100','Versace V-Race 18k White Gold Blue Dial','blue','male','..\\images\\versace\\a7.jpg'),
(97, 'versace','$999','100','Versace V-Race 18k White Black Dial','black','male','..\\images\\versace\\a8.jpg'),
(100, 'audemars','$23995','100','Jules Audemars Diamond Wind Rose','gold','woman','..\\images\\aude\\a1.jpg'),
(101, 'audemars','$15995','100','Jules Audemars Diamond Manual','black','woman','..\\images\\aude\\a2.jpg'),
(102, 'audemars','$23995','100','Jules Audemars Diamond Manual Winding','blue','woman','..\\images\\aude\\a3.jpg'),
(104, 'audemars','$23995','100','Jules Audemars Diamond Manual Winding','blue','woman','..\\images\\aude\\a3.jpg'),
(105, 'audemars','$38995','100','Jules Audemars Royal Oak Automatic Black Dial','gold','woman','..\\images\\aude\\a11.jpg'),
(106, 'audemars','$38995','100','Jules Audemars Royal Oak Automatic Blue Dial','gold','woman','..\\images\\aude\\a12.jpg'),
(107, 'audemars','$38995','100','Jules Audemars Royal Oak Automatic Silver Dial','gold','woman','..\\images\\aude\\a13.jpg'),
(108, 'audemars','$10895','100','Jules Audemars Small Seconds Silver','brown','woman','..\\images\\aude\\a5.jpg'),
(109, 'audemars','$10895','100','Jules Audemars Royal Oak White Gold 18k','gold','woman','..\\images\\aude\\a15.jpg'),
(110, 'breitling','$2891','100','Breitling Galactic 32 Steel','white','woman','..\\images\\breitling\\a1.jpg'),
(111, 'breitling','$21495','100','Breitling Star Liner Diamond Rose','gold','woman','..\\images\\breitling\\a2.jpg'),
(112, 'breitling','$4495','100','Breitling Star Liner Ladies','silver','woman','..\\images\\breitling\\a3.jpg'),
(113, 'breitling','$5695','100','Breitling Galactic 32 Black','silver','woman','..\\images\\breitling\\a4.jpg'),
(114, 'breitling','$7795','100','Breitling Galactic 36 Automatic','silver','woman','..\\images\\breitling\\a5.jpg'),
(115, 'breitling','$5735','100','Breitling Galactic 30 Silver Sierra','silver','woman','..\\images\\breitling\\a6.jpg'),
(116, 'breitling','$4828','100','Breitling Galactic 30 Mother of Pearl','silver','woman','..\\images\\breitling\\a7.jpg'),
(117, 'breitling','$6495','100','Breitling Galactic 30 Diamond Blue Dial','silver','woman','..\\images\\breitling\\a8.jpg'),
(118, 'breitling','$8495','100','Breitling Galactic 30 Black Dial Diamond Steel','black','woman','..\\images\\breitling\\a9.jpg'),
(119, 'bvlgari','$7495','100','Bvlgari Lvcea Automatic','silver','woman','..\\images\\bv\\a10.jpg'),
(120, 'bvlgari','$3395','100','Bvlgari White Lacquered','black','woman','..\\images\\bv\\a2.jpg'),
(121, 'bvlgari','$17995','100','Bvlgari Surpenti Tubogas','gold','woman','..\\images\\bv\\a11.jpg'),
(122, 'bvlgari','$5495','100','Bvlgari Brown Lacquered','brown','woman','..\\images\\bv\\a5.jpg'),
(123, 'bvlgari','$4095','100','Bvlgari White Lacquered Dial','white','woman','..\\images\\bv\\a4.jpg'),
(124, 'bvlgari','$2765','100','Bvlgari Mother of Pearl Dial','black','woman','..\\images\\bv\\a1.jpg'),
(125, 'bvlgari','$5895','100','Bvlgari Serpentti Tubogas 18k White Gold','gold','woman','..\\images\\bv\\a9.jpg'),
(126, 'bvlgari','$5895','100','Bvlgari Serpentti Diamond Silver','silver','woman','..\\images\\bv\\a8.jpg'),
(127, 'bvlgari','$5150','100','Bvlgari Serpentti Tubogas Silver Opaline','silver','woman','..\\images\\bv\\a12.jpg'),
(128, 'cartier','$13495','100','Cartier Balloon Blue','gold','woman','..\\images\\cartier\\a1.jpg'),
(129, 'cartier','$11395','100','Cartier Balloon Gold Automatic 18k gold','gold','woman','..\\images\\cartier\\a2.jpg'),
(130, 'cartier','$11395','100','Cartier Balloon Blue Automatic 18k gold','gold','woman','..\\images\\cartier\\a3.jpg'),
(131, 'cartier','$4995','100','Cartier Balloon Silver Diamond','silver','woman','..\\images\\cartier\\a4.jpg'),
(132, 'cartier','$5995','100','Cartier Balloon Automatic Silver Diamond','silver','woman','..\\images\\cartier\\a5.jpg'),
(133, 'cartier','$8395','100','Cartier Balloon Blue De Silver','silver','woman','..\\images\\cartier\\a6.jpg'),
(134, 'cartier','$3895','100','Cartier Balloon Blue Silver Dial Stainless','silver','woman','..\\images\\cartier\\a7.jpg'),
(135, 'cartier','$3995','100','Cartier Balloon Blue Silver Dial Steel White','silver','woman','..\\images\\cartier\\a8.jpg'),
(136, 'cartier','$6155','100','Cartier Cle de Automatic','silver','woman','..\\images\\cartier\\a9.jpg'),
(137, 'channel','$13495','100','Channel Mother of Pearl','gold','woman','..\\images\\channel\\a1.jpg'),
(138, 'channel','$3895','100','Channel White Dial Ceramic Automatic','white','woman','..\\images\\channel\\a2.jpg'),
(139, 'channel','$5095','100','Channel Quartz Ladies','white','woman','..\\images\\channel\\a4.jpg'),
(140, 'channel','$5699','100','Channel White Ceramic Diamond Quartz','white','woman','..\\images\\channel\\a3.jpg'),
(141, 'channel','$3712','100','Channel Titanium Ceramic','silver','woman','..\\images\\channel\\a5.jpg'),
(142, 'channel','$3712','100','Channel Diamonds Black Ceramic','black','woman','..\\images\\channel\\a6.jpg'),
(143, 'channel','$3712','100','Channel White Ceramic midsize','white','woman','..\\images\\channel\\a7.jpg'),
(144, 'graff','$750000','100','Floral Tourbillion Blue Mother Of Pearl',' black','woman','..\\images\\graff\\a1.png'),
(145, 'graff','$750000','100','Floral Tourbillion Pink Mother Of Pearl','black','woman','..\\images\\graff\\a2.png'),
(146, 'graff','$750000','100','Floral Tourbillion Purple Mother Of Pearl','black','woman','..\\images\\graff\\a3.png'),
(147, 'graff','$125000','100','Master Graff Galaxy','black','woman','..\\images\\graff\\a4.png'),
(148, 'graff','$125000','100','Master Graff Middle East','black','woman','..\\images\\graff\\a5.png'),
(149, 'graff','$105000','100','Minute Repeater','black','woman','..\\images\\graff\\a6.png'),
(150, 'graff','$105000','100','Minute Repeater Diamond','black','woman','..\\images\\graff\\a7.png'),
(151, 'graff','$133000','100','Minute Repeater Silver','black','woman','..\\images\\graff\\a8.png'),
(152, 'gucci','$1495','100','Gucci Automatic Chronograph Women','silver','woman','..\\images\\gucci\\a1.jpg'),
(153, 'gucci','$895','100','Gucci Black Dial','black','silver','..\\images\\gucci\\a2.jpg'),
(154, 'gucci','$1995','100','Gucci Cliffton Automatic','gold','woman','..\\images\\gucci\\a3.jpg'),
(155, 'gucci','$2665','100','Gucci Silver Dial Brown','brown','woman','..\\images\\gucci\\a4.jpg'),
(156, 'gucci','$1395','100','Gucci Chronograph Brown Dial','black','woman','..\\images\\gucci\\a5.jpg'),
(157, 'gucci','$1333','100','Gucci Automatic Chronograph','silver','woman','..\\images\\gucci\\a6.jpg'),
(158, 'gucci','$1395','100','Gucci Capeland Chronograph','silver','woman','..\\images\\gucci\\a7.jpg'),
(159, 'gucci','$3250','100','Gucci Capeland Chronograph Flyback','silver','woman','..\\images\\gucci\\a8.jpg'),
(160, 'gucci','$1495','100','Gucci World Timer Silver','silver','woman','..\\images\\gucci\\a9.jpg'),
(161, 'omega','$1495','100','Omega Tera Silver','silver','woman','..\\images\\omega\\a1.jpg'),
(162, 'omega','$2495','100','Omega Brushed Steel','silver','woman','..\\images\\omega\\a2.jpg'),
(163, 'omega','$1005','100','Omega Diamond Graff','silver','woman','..\\images\\omega\\a3.jpg'),
(164, 'omega','$1595','100','Omega Constellation Dial Silver','silver','woman','..\\images\\omega\\a4.jpg'),
(165, 'omega','$1570','100','Omega De Vilee','silver','woman','..\\images\\omega\\a5.jpg'),
(166, 'omega','$1775','100','Omega Silver Sapphire','silver','woman','..\\images\\omega\\a6.jpg'),
(167, 'omega','$2795','100','Omega Champagne Dial','silver','woman','..\\images\\omega\\a7.jpg'),
(168, 'omega','$2495','100','Omega Ville Prestige','silver','woman','..\\images\\omega\\a8.jpg'),
(169, 'omega','$1495','100','Omega James Bond Seamaster','silver','woman','..\\images\\omega\\a9.jpg'),
(170, 'rolex','$10495','100','Rolex Datejust Mother of Pearl Diamond','rose','woman','..\\images\\rolex\\a1.jpg'),
(171, 'rolex','$9095','100','Rolex Datejust 31 Silver Dial','silver','woman','..\\images\\rolex\\a2.jpg'),
(172, 'rolex','$7995','100','Rolex Yacht Plaster Diamond','silver','woman','..\\images\\rolex\\a3.jpg'),
(173, 'rolex','$7095','100','Rolex Lady Oyster Perpetual','silver','woman','..\\images\\rolex\\a4.jpg'),
(174, 'rolex','$9249','100','Rolex Lady Datejust 26 Rose Gold 18k','gold','woman','..\\images\\rolex\\a5.jpg'),
(175, 'rolex','$8975','100','Rolex Datejust Automatic Stainless','silver','woman','..\\images\\rolex\\a6.jpg'),
(176, 'rolex','$5995','100','Rolex Datejust Pink Dial','rose','woman','..\\images\\rolex\\a7.jpg'),
(177, 'rolex','$24495','100','Rolex Champagne Dial Automatic','gold','woman','..\\images\\rolex\\a8.jpg'),
(178, 'rolex','$30556','100','Rolex Datejust White Gold Diamond','gold','woman','..\\images\\rolex\\a9.jpg'),
(179, 'rolex','$5667','100','Rolex Datejust Silver Dial','silver','woman','..\\images\\rolex\\a10.jpg');



















/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
