-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2019 at 08:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(255) NOT NULL AUTO_INCREMENT,
  `hotel` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_add` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

DROP TABLE IF EXISTS `draft`;
CREATE TABLE IF NOT EXISTS `draft` (
  `book_id` int(255) NOT NULL AUTO_INCREMENT,
  `hotel` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_add` varchar(255) NOT NULL,
  `room` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoteltable`
--

DROP TABLE IF EXISTS `hoteltable`;
CREATE TABLE IF NOT EXISTS `hoteltable` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hotel` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `location` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoteltable`
--

INSERT INTO `hoteltable` (`id`, `hotel`, `phone`, `location`, `address`, `price`) VALUES
(1, 'The Leela Palace', 1139331234, 'New Delhi', 'Diplomatic Enclave, Africa Avenue, Chanakyapuri, New Delhi, Delhi 110023', 15000),
(2, 'Trident', 1242450505, 'Gurgaon', '443, Gurgoan-Delhi Expy, Udyog Vihar Phase V, Sector 19, Gurugram, Haryana 122016', 12000),
(3, 'Radisson', 981606433, 'Shimla', 'Goodwood Estate, Lower Bharari Rd, Shimla, Himachal Pradesh 171001', 11520),
(4, 'Park Hyatt', 1772651010, 'Goa', 'Arossim Beach, Cansaulim, Goa 403712', 8960),
(5, 'Hard Rock', 832674555, 'Goa', '370/14, Near KFC, Porba Vaddo, Calangute, Bardez, Goa 403516', 5291),
(6, 'Sheraton', 1142661122, 'New Delhi', 'District Centre, Saket, New Delhi, Delhi 110017', 12172),
(7, 'The Taj Mahal Palace', 226665336, 'Mumbai', 'Apollo Bandar, Colaba, Mumbai, Maharashtra 400001', 38438),
(8, 'Clarkes Hotel', 1772651010, 'Shimla', 'The Mall Road, Shimla, Himachal Pradesh 171001', 8320),
(9, 'Ginger Hotel', 266666333, 'Mumbai', 'Mahakali Caves Road, Near Holy Spirit Hospital, Andheri East, Mumbai, Maharashtra 400093', 4282),
(10, 'The Hans', 1166150000, 'New Delhi', 'No. 15, Barakhamba Rd, Connaught Place, New Delhi, Delhi 110001', 5049);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('farukh@mail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
