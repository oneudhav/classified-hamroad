-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 07:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `feed` text NOT NULL,
  `tyme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feed`, `tyme`) VALUES
(4, 'udhav basnet', 'keshav@sabaikoad.com', '		      \r\n		    hello', '2019-05-04 23:10:02'),
(5, 'angel maden', 'angelmaden33@gmail.com', '		      \r\n		    hy hamroad', '2019-05-05 04:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `item_cats`
--

CREATE TABLE `item_cats` (
  `id` int(1) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_cats`
--

INSERT INTO `item_cats` (`id`, `category`) VALUES
(1, 'Automobile'),
(2, 'Phone & Tablet'),
(3, 'Electronics'),
(4, 'Services'),
(5, 'Hobbies, art & sport'),
(6, 'Fashion'),
(7, 'Real Estate'),
(8, 'Job');

-- --------------------------------------------------------

--
-- Table structure for table `item_sub_cats`
--

CREATE TABLE `item_sub_cats` (
  `cat_id` int(1) DEFAULT NULL,
  `sub_category` varchar(33) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_sub_cats`
--

INSERT INTO `item_sub_cats` (`cat_id`, `sub_category`) VALUES
(1, 'Car'),
(1, 'Car and Motorcycle Accessories'),
(1, 'Commercial and Trucks'),
(1, 'Motorcycles'),
(2, 'Mobile phone'),
(2, 'Phone and Tablet Accessories'),
(2, 'Tablet'),
(3, 'Laptop and Desktop Computer'),
(3, 'Computer accessories'),
(3, 'Camera and Accessories'),
(3, 'Console and Video games'),
(3, 'TV, Audio and Video'),
(4, 'Automobile services'),
(4, 'Building services'),
(4, 'Educational services'),
(4, 'Laundary and Cleaning services'),
(4, 'Computer and IT services'),
(4, 'DJ and Entertaining services'),
(4, 'Health services'),
(4, 'Legal services'),
(4, 'Manufacturing services'),
(4, 'Photographic and Video services'),
(4, 'Recruitment services'),
(4, 'Travel agent and tour '),
(4, 'Classes and course'),
(4, 'Other services'),
(5, 'Books'),
(5, 'Games'),
(5, 'CDs and DVDs'),
(5, 'Art and Craft'),
(5, 'Sporting equipment & Fitness'),
(5, 'Musicals'),
(6, 'Clothing'),
(6, 'Shoes'),
(6, 'Bags'),
(6, 'Jewelry & Watches'),
(6, 'fashion accessories'),
(6, 'Others'),
(7, 'Land & Plot for sale'),
(7, 'House, Apartment & Lodge for rent'),
(7, 'House, Apartment & Lodge for sale'),
(7, 'Office, Shop & Commercial'),
(7, 'Vacational or Temporal rents'),
(8, 'Accounting & Financial job'),
(8, 'Advertising & Marketing job'),
(8, 'Art & Entertainment'),
(8, 'Administrative & Clerical job'),
(8, 'computing & IT jobs'),
(8, 'Construction & Building jobs'),
(8, 'Skilled trade jobs'),
(8, 'Drivers jobs'),
(8, 'Engineering jobs'),
(8, 'Gardening & Lanscaping jobs'),
(8, 'Health & Nursing jobs'),
(8, 'Hotels jobs'),
(8, 'House Keeping & Cleaning jobs'),
(8, 'Internship'),
(8, 'Legal jobs'),
(8, 'Manufacturing jobs'),
(8, 'Retail jobs'),
(8, 'Office jobs'),
(8, 'Part-time jobs'),
(8, 'Restaurant & Bar jobs'),
(8, 'Security jobs'),
(8, 'Teaching jobs'),
(8, 'Travel & Tourism jobs'),
(8, 'Other jobs'),
(NULL, NULL),
(2, 'Phone and Tablet Accessories'),
(3, 'Laptop and Desktop Computer'),
(3, 'Camera and Accessories'),
(3, 'Console and Video games'),
(3, 'TV, Audio and Video'),
(4, 'Laundary and Cleaning services'),
(4, 'DJ and Entertaining services'),
(4, 'Photographic and Video services'),
(4, 'Travel agent and tour '),
(4, 'Classes and course'),
(5, 'CDs and DVDs'),
(5, 'Art and Craft'),
(1, 'nepal');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `profile_pix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `user`, `password`, `phone`, `email`, `state`, `profile_pix`) VALUES
(27, 'Emma Curry', 'admin', '821106231dd2ca41d2714a4f986ec0ad', '5184065664', 'udhav_b@yahoo.com', '', ''),
(28, 'Udhav Basnet', 'basnet', '25f9e794323b453885f5181f1b624d0b', '9848216599', 'udhavb32@gmail.com', '10', ''),
(29, 'angel', 'angel', '821106231dd2ca41d2714a4f986ec0ad', '984216599', 'udhavb32@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` varchar(255) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `ads_id` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `content` text NOT NULL,
  `user` varchar(50) NOT NULL,
  `senttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `ads_id`, `title`, `email`, `phone`, `content`, `user`, `senttime`) VALUES
(1, '128QrJ5mHJB36uZHYskxfobbnKwMTd', 'Jhakas', 'admin@sabaikoad.com', '', 'dfdf', 'admin', '2019-04-30 06:18:29'),
(2, 'dXIhDBurxMfa9TTGi5on36E3YbcvxM', 'Hello World', 'udhavb32@gmail.com', '', 'I need this product', 'basnet', '2019-05-02 07:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(50) NOT NULL,
  `req_id` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `town` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `request_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(50) NOT NULL,
  `ads_id` varchar(55) NOT NULL,
  `user` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prize` int(20) NOT NULL,
  `negotiable` varchar(20) NOT NULL,
  `item_pix` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `post_date` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `ads_id`, `user`, `title`, `description`, `prize`, `negotiable`, `item_pix`, `name`, `phone`, `state`, `post_date`, `category`, `sub_category`) VALUES
(0, 'eOIS1d0G7RTrmUjSF5vNmwh7Q56Dhv', 'basnet', 'Udhav', 'Hello', 2000, 'Not negotiable', 'img/eOIS1d0G7RTrmUjSF5vNmwh7Q56Dhv', 'Udhav Basnet', 2147483647, '', '0000-00-00', '3', 'Laptop and Desktop Computer'),
(0, 'WXB7a6DjtVLLUcW39TjV3MWpDOWou3', 'basnet', 'Udhav', 'Hello', 2000, 'Not negotiable', 'img/WXB7a6DjtVLLUcW39TjV3MWpDOWou3', 'Udhav Basnet', 2147483647, '', '0000-00-00', '3', 'Laptop and Desktop Computer');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(4) NOT NULL,
  `state` varchar(20) DEFAULT NULL,
  `s_id` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `s_id`) VALUES
(1, 'Province  No 1', 1),
(4, 'Gandaki Pradesh', 4),
(3, 'Province  No 3', 3),
(2, 'Province No 2', 2),
(10, 'Province No. 5', 10),
(25, 'Karnali Pradesh', 25),
(27, 'Sudurpachimanchal Pa', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
