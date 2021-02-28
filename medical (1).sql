-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 06:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` text DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `dis` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `code` bigint(50) NOT NULL,
  `new` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `price`, `dis`, `status`, `id`, `code`, `new`) VALUES
('tryjln', 23450998, 'drzwetxrucgjkhvjbipnni', 2, 21, 345667097, 1),
('aysgfe', 1200000, 'asfgylfs as;ga;gu faus;fg', 2, 22, 119117, 1),
('1234567', 123456, '1234567', 2, 23, 123456, 0);

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
(9, 22, 'http://localhost/medical/admin/uploads/vlcsnap-2021-01-16-01h36m26s617.1614251480.png'),
(10, 21, 'http://localhost/medical/admin/uploads/Screenshot (1).1614252958.png'),
(11, 23, 'http://localhost/medical/admin/uploads/Screenshot (11).1614338993.png');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` bigint(20) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `msg` text DEFAULT NULL
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
(40, 'gggfg', 'esf@4335', 'asgthj', 'gtjtucgjjhvhk');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) NOT NULL,
  `icon` text DEFAULT NULL,
  `preview` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `preview`, `platform`, `link`) VALUES
(8, 'hiyo', 'wrtxrycuv', 'yuouuuo', 'thereyo'),
(9, 'hi', 'zteeey', 'yuo', 'there');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
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
  `email` text DEFAULT NULL,
  `phn` bigint(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `email`, `phn`, `address`, `location`, `logo`, `message`) VALUES
(1, 'yujjhngng@fs', 356789234, 'asdgjvsaygiy13t4453@23', 'lojxdjsjlm4y25', 'http://localhost/medical/admin/uploads/1614231339_vlcsnap-2021-01-16-01h36m26s504.png', 'we are a firm from uk vaagha consultancy.');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
