-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 24, 2021 at 07:01 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `des`, `stock`, `code`, `rate`) VALUES
(1, 'Wiper Blades', 1200, 'Since 1898 Bosch has grown and developed, building up a wealth of experience and expertise that is second to none. Today, from their UK headquarters in Denham, Middlesex, over 2 million parts a year are supplied to garages and workshops across the country.', 250, 'P101', 3),
(2, 'Oil', 800, 'Exclusive formula with special conditioners and UV protectors quickly penetrate the surface for liquid wax protection without haze, hard buffing & discoloring of trim.', 300, 'P102', 4),
(3, 'Speakers', 7500, 'A surface containing mica properly maintains the cone’s superior rigidity and internal loss. The back makes excellent use of light, water-resistant material.', 100, 'T101', 2),
(4, 'Reverse Camera', 1250, 'High-quality 170-degree mini Car rearview camera, which is waterproof, will make parking easier, at reversing you will be able to see objects behind the car, what you can see in the mirror. With the LCD screen you will have eyes in the back as well', 150, 'T102', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
