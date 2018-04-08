-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secondhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagory`
--

CREATE TABLE IF NOT EXISTS `tbl_catagory` (
`category_id` int(11) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catagory`
--

INSERT INTO `tbl_catagory` (`category_id`, `catagory_name`) VALUES
(1, 'Vegetarian Appetizers'),
(2, 'Choice Of Pakoras'),
(3, 'Choice of Manchurian'),
(4, 'Non-vegetarian appetizers'),
(5, 'Soup of the Day'),
(6, 'Our Salad Bar'),
(7, 'Kabab-E-Bahar'),
(8, 'Chicken Specialties'),
(9, 'Seafood Specialties'),
(10, 'Vegetarian Specialties'),
(11, 'Rice / Biryani'),
(12, 'Kids Corner'),
(13, 'Drinks'),
(14, 'Desserts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
 ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
