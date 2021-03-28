-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2021 at 01:03 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dubuddy_medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` bigint(50) NOT NULL,
  `heading` text NOT NULL,
  `sub_heading` text NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `heading`, `sub_heading`, `image`, `link`, `sort_order`) VALUES
(1, 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk) ', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)\r\n\r\nPre-injection - Skin Cleansing Swabs\r\n100 per box\r\n70% Isopropyl Alcohol\r\nApprox Size of Swabs: 3x3cm', 'uploads/1616319283_41UC0vv2ZjL._AC_.jpg', 'https://dubuddy.in/medical/index', 1),
(2, 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted\r\n\r\nDermastrip Hypo-Allergenic Washproof Plasters\r\n7 Types (Sizes) of Plasters Included in a divider tray\r\nBox of 100\r\nIndividually wrapped and Sterile', 'uploads/1616319295_download.jpeg', 'https://dubuddy.in/medical/index', 1),
(3, 'Ezy-Aid Box 24 Zinc Oxide Premium Tape', 'Ezy-Aid Box 24 Zinc Oxide Premium Tape\r\n\r\nEzy-Aid Premium Zinc Oxide Tape\r\nManufactured with High Quality Materials to provide with a fantastic Combination of Extreme Strength yet Easy to Tear\r\nLatex Free. Ideal for use in Sporting Activities or to Secure Dressings / Medical Applications\r\nBox Pack of 24 -- Size: 1.25cm x 10Meters each roll\r\nSuper Saver Bulk Pack', 'uploads/1616319214_41YPo1ePWsL._AC_.jpg', 'https://dubuddy.in/medical/index', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` text,
  `price` text,
  `dis` text,
  `status` int(11) DEFAULT NULL,
  `id` bigint(50) NOT NULL,
  `code` bigint(50) NOT NULL,
  `new` bigint(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `short_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `price`, `dis`, `status`, `id`, `code`, `new`, `time_stamp`, `short_des`) VALUES
('Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', '5', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted\r\n\r\n\r\nDermastrip Hypo-Allergenic Washproof Plasters\r\n7 Types (Sizes) of Plasters Included in a divider tray\r\nBox of 100\r\nIndividually wrapped and Sterile', 2, 21, 345667097, 1, '2021-03-21 10:08:25', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted'),
('Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)', '4', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)\r\n\r\nPre-injection - Skin Cleansing Swabs\r\n100 per box\r\n70% Isopropyl Alcohol\r\nApprox Size of Swabs: 3x3cm', 2, 22, 119117, 1, '2021-03-21 10:10:10', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)'),
('1234567', '123456', '1234567sad', 0, 23, 123456, 0, '2021-03-21 10:10:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` bigint(50) NOT NULL,
  `p_id` bigint(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `p_id`, `img`) VALUES
(12, 21, 'https://dubuddy.in/medical/admin/uploads/download.1616321281.jpeg'),
(13, 22, 'https://dubuddy.in/medical/admin/uploads/41UC0vv2ZjL._AC_.1616321410.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` bigint(50) NOT NULL,
  `name` text,
  `email` text,
  `subject` text,
  `msg` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(18, 'dfsd', 'sdvsd@13', 'sgs', 'zvhkdbvidcu'),
(19, 'dfsd', 'sdvsd@13', 'sgs', 'zvhkdbvidcu'),
(20, 'tuftujgjc', 'cggjcgj', 'rysrydtuj', 'vgcgjfyfkhkhgu'),
(24, 'yadciydoavl', 'piyushpokhriyal07@gmail.com', 'jd bsvjljlzsdb', 'dvn js vjls vljsdlj '),
(28, 'cdzczd', 'dvzvjlzfjl@36', 'yifvifo', 'dhkv bhozdvbozbfol'),
(31, 'cdzczd', 'dvzvjlzfjl@36', 'yifvifo', 'dhkv bhozdvbozbfol'),
(37, 'gggfg', 'esf@4335', 'asgthj', 'gtjtucgjjhvhk'),
(38, 'gggfg', 'esf@4335', 'asgthj', 'gtjtucgjjhvhk'),
(40, 'gggfg', 'esf@4335', 'asgthj', 'gtjtucgjjhvhk'),
(43, 'Pancham', 'panchamsheoran@gmail.com', 'Login problem ', 'test message'),
(44, 'Test', 'test@gmail.com', 'query', 'test message'),
(45, 'Hi', 'hi@xyz', 'please call H', 'please call H'),
(46, 'Hi', 'hi@xyz.com', 'please call H', 'please call H'),
(47, 'XYZ', 'xyz@gmail.com', 'quite for face mask', 'Hi -sds');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(50) NOT NULL,
  `icon` text,
  `preview` text,
  `platform` text,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `preview`, `platform`, `link`) VALUES
(8, 'hiyo', 'wrtxrycuv', 'yuouuuo', 'thereyo'),
(9, 'hi', 'zteeey', 'yuo', 'there');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(50) NOT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'qwertyui'),
(3, 'rahul'),
(4, 'gggggggggggggg'),
(6, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text,
  `id` bigint(20) NOT NULL,
  `email` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `email`, `password`) VALUES
('admin', 1, 'admin@123', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE `web_config` (
  `id` bigint(50) NOT NULL,
  `email` text,
  `phn` bigint(20) DEFAULT NULL,
  `address` text,
  `location` text,
  `logo` text,
  `message` text NOT NULL,
  `ab_line1` text NOT NULL,
  `ab_line2` text NOT NULL,
  `ab_line3` text NOT NULL,
  `ab_line4` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `email`, `phn`, `address`, `location`, `logo`, `message`, `ab_line1`, `ab_line2`, `ab_line3`, `ab_line4`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'contact@int-trade', 356789234, 'int-trade', 'lojxdjsjlm4y25', 'https://dubuddy.in/medical/admin/uploads/1614707339_400dpiLogo.png', 'We are reputed Supplier to GP Clinics, Carehomes and NHS Trusts.', 'Reputed Supplier to GP Clinics, Carehomes and NHS Trusts ', 'Reliable Supplier of Premium range of Incontinence Bed Pads & Mobility Consumables ', 'A Wide range of PPE Medical Grade Masks, Shoe Covers, Disposable Aprons, Mob Caps & Gloves', ' All products are manufactured in ISO 9001 & ISO 13485 Certified facilities', 'www.facebook', 'as', 'wsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_config`
--
ALTER TABLE `web_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_config`
--
ALTER TABLE `web_config`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
