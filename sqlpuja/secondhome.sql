-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 04:31 PM
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
  `catagory_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
`order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_detils` text NOT NULL,
  `order_status` enum('Pending','Done') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_catagory`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_catagory` (
`sub_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_price` float NOT NULL,
  `main_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

CREATE TABLE IF NOT EXISTS `tbl_tax` (
`tax_id` int(11) NOT NULL,
  `tax_per` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_image` varchar(150) NOT NULL DEFAULT 'person.png',
  `user_email_auth` enum('yes','no') NOT NULL DEFAULT 'yes',
  `user_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `user_role` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_address`, `user_password`, `user_image`, `user_email_auth`, `user_status`, `user_role`) VALUES
(1, 'admin', 'admin@home.com', '1234567890', 'ranchi', '827ccb0eea8a706c4c34a16891f84e7b', 'person.png', 'yes', 'active', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_sub_catagory`
--
ALTER TABLE `tbl_sub_catagory`
 ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
 ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catagory`
--
ALTER TABLE `tbl_catagory`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_catagory`
--
ALTER TABLE `tbl_sub_catagory`
MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
