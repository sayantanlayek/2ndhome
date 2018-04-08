-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:39 PM
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
  `sub_category_desc` text NOT NULL,
  `sub_category_price` float NOT NULL,
  `main_category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_catagory`
--

INSERT INTO `tbl_sub_catagory` (`sub_category_id`, `sub_category_name`, `sub_category_desc`, `sub_category_price`, `main_category`) VALUES
(1, 'Paneer Channa Samosa', 'A pastry stuffed with cottage cheese, chick peas & potatoes with a flavor of\r\nfine Indian herbs.', 10, 1),
(2, 'Vegetable Samosa', 'A special dough pastry stuffed with potatoes and peas with five spice flavors.', 7, 1),
(3, 'Samosa Chaat', 'stuffed pastry served in a gravy of chickpeas and garnished with three home-\r\nmade chutneys.', 8, 1),
(4, 'Hara Bara VegetableKabab', 'Pan- fried assorted garden fresh vegetables minced together with chef’s spe-\r\ncial herbs', 11, 1),
(5, 'Mixed Vegetable Pakora', 'Crispy light fritters made of season garden green vegetables in a chickpea batter.', 21, 2),
(6, 'PaneerPakora', 'Golden, crispy, cottage cheese patty deep fried in a special chickpea batter.', 20, 2),
(7, 'Chef’s special Chili pakora', 'Spicy fritters made of hot chili and chef’s special spices.', 25, 2),
(8, 'Onion Bhajji', 'Sliced onions dipped in spicy batter and deep-fried', 30, 2),
(9, 'Gobi Manchurian', 'Crispy cauliflower chunks with Manchurian sauce with bell peppers, onions,\r\nand a touch of garlic.', 40, 3),
(10, 'Paneer Corn Chili Manchurian', 'Cottage cheese and corn in a Manchurian sauce with bell peppers, onions,\r\nIndian spice, and garlic.', 50, 3),
(11, 'Keema Samosa', 'A stuffed pastry filled with mildly spiced minced lamb and garden peas.', 20, 4),
(12, 'Chicken Lollypops', 'Chicken tenders deep fried with fine herb batter tossed in a tangy sauce.', 100, 4),
(13, 'Chili Chicken', 'Cubes of chicken pan sautéed with onions, bell peppers, and green chillies.', 120, 4),
(14, 'Coconut Soup', 'A rich soup consisting of vegetable stock, fine herbs, and fresh coconut milk.', 60, 5),
(15, 'Tomato Soup', 'Tangy medley of garden fresh tomatoes with a touch of garlic and cilantro.', 70, 5),
(16, 'Mulligatawny soup', 'India’s national soup made of delicately spiced lentils garnished with rice and\r\nchicken.', 100, 5),
(17, 'Chicken Soup', 'Soup made of chicken stock infused with Indian flavors.', 120, 5),
(18, 'Garden Fresh Green Salad', 'A tossed salad made of romaine lettuce, tomatoes, cucumbers, and onion.', 70, 6),
(19, 'Chef Special Salad', 'Marinated Chicken Tikka with lettuce, onion, and tomato tossed in homemade\r\nIndian dressing.', 80, 6),
(20, 'Deeya’s Special Salad', 'Fresh garden greens with chickpeas and diced potatoes.', 70, 6),
(21, 'Deeya’s Special Salad', 'Fresh garden greens with chickpeas and diced potatoes.', 70, 6),
(22, 'Tandoori Chicken', 'Chicken marinated in yogurt with a colorful spice blend, baked and grilled\r\nthen served with season greens.', 300, 7),
(23, 'Chicken TikkaChicken Tikka', 'Boneless chicken breast pieces roasted and marinated with aromatic spices.', 250, 7),
(24, 'Chicken Hariyali', 'Chicken marinated in hung yogurt with mint, cilantro, and Indian herbs,\r\ncooked in a clay oven.', 220, 7),
(25, 'Chicken Hariyali', 'Chicken marinated in hung yogurt with mint, cilantro, and Indian herbs,\r\ncooked in a clay oven.', 220, 7),
(26, 'Chicken MalaiKabab', 'Chicken breast marinated with fresh garlic and chef’s special sauce, cooked\r\nin clay oven.', 250, 7),
(27, 'Tandoori Fish Tikka', 'Fish gently marinated with herbs and spices, served on a sizzler.', 340, 7),
(28, 'Butter Chicken', 'An authentic Punjabi dish consisting of tandoori prepared chicken, softly sim-\r\nmered in a smooth tomato based gravy.', 270, 8),
(29, 'Chicken Tikka Masala', '2ndHome''s specialty, marinated, tandoori boneless chicken roasted in clay oven\r\nand cooked with flavorful spices and herbs.', 400, 8),
(30, 'Chicken Curry', 'Boneless chicken in an onion based curry with Indian spices.', 300, 8),
(31, 'Shrimp Pappas', 'Marinated shrimp in ginger and garlic paste sauteed with South Indian tadka\r\ncooked ina tomato sauce with a touch of coconut.', 550, 9),
(32, 'Shrimp Kabab Masala', 'Tandoori prepared shrimp cooked in a creamy tomato based curry.', 550, 9),
(33, 'MalaiKofta', 'Croquettes of ground garden fresh vegetables and cottage cheese stuffed\r\nwith nuts and raisins in a creamy gravy.', 200, 10),
(34, 'Punjabi Channa Masala', 'Traditional North Indian dish comprised of chick peas in a flavorful curry.', 150, 10),
(35, 'Kashmiri Dum Aloo', 'A yogurt based gravy with potatoes, nuts, cottage cheese, and a medley of\r\nfine Indian herbs.', 180, 10),
(36, 'Dal Tadka', 'Cooked yellow lentils infused with cumin seeds, aromatic spices, and cilantro\r\ngarnishing.', 130, 10),
(37, 'Aloo Gobi Masala', 'Fresh cauliflower chunks with potato prepared with turmeric and traditional spices.', 150, 10),
(38, 'Coconut Rice', 'Long- grained with Basmati rice prepared with fresh coconut and Indian spices.', 120, 11),
(39, 'Lemon Rice', 'Long-grained Basmati rice with Indian tadka and zesty lemon flavor.', 160, 11),
(40, 'Jeera Rice', 'Long- grained Basmati rice cooked with a pinch of cumin seeds to enhance\r\nthe flavor.', 70, 11),
(41, 'Chicken Biryani', 'Basmati rice prepared with chicken, prepared Hyderabadi style.', 220, 11),
(42, 'Lamb Biryani', 'Basmati rice prepared with boneless lamb using aromatic spices, mint, and\r\nsaffron.', 300, 11),
(43, 'Egg Biryani', 'Basmati rice prepared with South Indian spices and egg.', 150, 11),
(44, 'Chicken Soup', 'Soup made of chicken stock infused with Indian flavors.', 60, 12),
(45, 'Paneer Wrap', 'Homemade fresh Indian wrap with cottage cheese and infused with Indian\r\nherbs.', 50, 12),
(46, 'Chicken Kathi Roll', 'Easy to eat flavorful chicken stuffed in chef’s special wrap.', 60, 12),
(47, 'Drinks', 'A hot chai tea brew consisting of tea leaves and milk.', 10, 13),
(48, 'Masala Chai', 'A hot chai tea brew consisting of tea leaves, herbs, and spices, with milk.', 13, 13),
(49, 'Lassi', 'Yogart Lassi', 30, 13),
(50, 'Soft Drinks', 'All kind of soft drinks', 15, 13),
(51, 'Rasmalai', 'Homemade cottage cheese dumplings soaked in sweetened milk and gar-\r\nnished with pistachio.', 30, 14),
(52, 'Mango Kulfi', 'A frozen dessert prepared with seasoned sweet milk with mango pulp.', 40, 14),
(53, 'PistaKulfi', 'A frozen dessert prepared with seasoned sweet milk with pistachio pieces.', 35, 14),
(54, 'Almond Kulfi', 'A frozen dessert prepared with seasoned sweet milk with almond pieces.', 50, 14);

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
 ADD PRIMARY KEY (`sub_category_id`), ADD KEY `main_category` (`main_category`);

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
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_catagory`
--
ALTER TABLE `tbl_sub_catagory`
MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
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
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sub_catagory`
--
ALTER TABLE `tbl_sub_catagory`
ADD CONSTRAINT `subcategory` FOREIGN KEY (`main_category`) REFERENCES `tbl_catagory` (`category_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
