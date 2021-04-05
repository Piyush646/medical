-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2021 at 04:45 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `caty` text,
  `cat_logo` text,
  `cat_img` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `caty`, `cat_logo`, `cat_img`) VALUES
(1, 'Face Masks', 'icon_masks.png', 'masks.jpg'),
(2, 'Shoe Covers', 'icon_shoes.png', 'shoes.png'),
(3, 'Mob Caps', 'icon_mob.png', 'mob.png'),
(4, 'Incontinence', 'icon_incon.png', 'incontinence.png'),
(5, 'Gloves', 'icon_gloves.png', 'gloves.png'),
(6, 'Oral Swaps', 'icon_oral.png', 'oral.png'),
(7, 'First-Aid Accessories', NULL, NULL),
(8, 'Disinfectant', NULL, NULL),
(9, 'Alcohol Free Sanitizers', NULL, NULL),
(10, 'Bed Bath', NULL, NULL);

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
  `short_des` text NOT NULL,
  `category` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `price`, `dis`, `status`, `id`, `code`, `new`, `time_stamp`, `short_des`, `category`) VALUES
('Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', '5', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted\r\n\r\n\r\nDermastrip Hypo-Allergenic Washproof Plasters\r\n7 Types (Sizes) of Plasters Included in a divider tray\r\nBox of 100\r\nIndividually wrapped and Sterile', 1, 21, 345667097, 0, '2021-03-31 20:36:34', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', '7'),
('Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)', '4', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)\r\n\r\nPre-injection - Skin Cleansing Swabs\r\n100 per box\r\n70% Isopropyl Alcohol\r\nApprox Size of Swabs: 3x3cm', 1, 22, 119117, 0, '2021-03-31 20:36:36', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)', '7'),
('1234567', '123456', '1234567sad', 0, 23, 123456, 0, '2021-03-21 10:10:23', '', NULL),
('Face Masks', '100', 'Well Ventilated Face masks', 1, 24, 101, 0, '2021-03-30 14:18:03', 'Contact for more details', '1'),
('Oral Swaps', '10', 'Good product can invest your money', 1, 25, 102, 0, '2021-03-30 14:18:15', 'These are used for swapping your tongue and teeth!', '6'),
('Covers Of Shoes', '2', 'Contact For More details', 1, 26, 103, 0, '2021-03-30 14:18:17', 'These covers will protect your foot from harmful viruses', '2'),
('Ezy-Aid Box 24 Zinc Oxide Premium Tape', '16.77', 'Ezy-Aid Premium Zinc Oxide Tape\r\nManufactured with High Quality Materials to provide with a fantastic Combination of Extreme Strength yet Easy to Tear\r\nLatex Free. Ideal for use in Sporting Activities or to Secure Dressings / Medical Applications\r\nBox Pack of 24 -- Size: 1.25cm x 10Meters each roll\r\nSuper Saver Bulk Pack', 1, 27, 345667098, 0, '2021-04-01 22:44:03', 'Ezy-Aid Box 24 Zinc Oxide Premium Tape', '7'),
('Ezy-Aid Conforming Bandage', '2.99', 'Premium Quality Ezy-Aid Conforming Bandages\r\nExtremely High stretch, lightweight bandage for holding dressings in place\r\nFray Resistant\r\n3 Sizes Available: 5cm x 4.5M, 7.5cm x 4.5M, 10cm x 4.5M\r\nIndividually Wrapped Rolls. Pack of 12', 1, 28, 345667099, 0, '2021-04-01 22:57:30', '12pk Ezy-Aid Conforming Bandage 5cm, 7.5cm, 10cm - Premium Quality (5cm x 4.5Meters (12pk))', '7'),
('Ezy-Aid Cohesive Bandage - Blue', '14.55', 'Ezy-Aid Cohesive Bandage, Blue, 5 cm x 4.5 m, Pack of 24\r\nContains latex\r\nNon woven material\r\nGrips to itself and not skin\r\nNon adhesive\r\nIndividually wrapped', 1, 29, 345668001, 0, '2021-04-01 23:00:50', 'Ezy-Aid Cohesive Bandage, Blue, 5 cm x 4.5 m, Pack of 24', '7'),
('HSE Compliant - Travel & Workplace First Aid Kit ', '7.90', 'British HSE (Health, Safety & Environment) Approved First Aid Kit\r\nFully stocked to comply with regulations for upto 10 persons\r\nMinimum Expiry of contents - 2 years\r\nCE Certified\r\nPerfect for Workplaces, Travel and Home - HSE Compliant ensuring you pass Inspections', 1, 30, 345668002, 0, '2021-04-01 23:08:09', 'British HSE (Health, Safety & Environment) Approved First Aid Kit\r\nFully stocked to comply with regulations for upto 10 persons\r\nMinimum Expiry of contents - 2 years\r\nCE Certified\r\nPerfect for Workplaces, Travel and Home - HSE Compliant ensuring you pass Inspections', '7'),
('Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs - 70% Alcohol wipes', '3.67', 'Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs, 70% Alcohol wipes\r\n\r\nBrand Name - Ezy-Aid\r\nEan - 5060383113822\r\nIncluded Components - Swab\r\nItem Weight - 40.8 grams\r\nNumber of Items - 100\r\nPart Number - BTR121014-5', 1, 31, 345668003, 0, '2021-04-01 23:22:35', 'Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs, 70% Alcohol wipes\r\n\r\nBrand Name - Ezy-Aid\r\nEan - 5060383113822\r\nIncluded Components - Swab\r\nItem Weight - 40.8 grams\r\nNumber of Items - 100\r\nPart Number - BTR121014-5', '7'),
('Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  ', '7.69', 'Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  \r\nSuperior Quality Crepe Bandage from Ezy-Aid - Medical Grade Product, Hence no compromise on Quality. \r\n12 Rolls Pack, Each Roll 7.5cm x 4.5Meters. \r\nEach Roll Contains 2 Clamps. CE Certified Suitable for Sprains & Strains and Light Support. \r\nIndividually Wrapped Rolls. Washable in Warm Soapy Water', 1, 32, 345668004, 0, '2021-04-01 23:27:14', 'Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  \r\nSuperior Quality Crepe Bandage from Ezy-Aid - Medical Grade Product, Hence no compromise on Quality. \r\n12 Rolls Pack, Each Roll 7.5cm x 4.5Meters. \r\nEach Roll Contains 2 Clamps. CE Certified Suitable for Sprains & Strains and Light Support. \r\nIndividually Wrapped Rolls. Washable in Warm Soapy Water', '7'),
('Nilaqua Antibacterial Floor Cleaner Concentrate, - Alcohol Free - 5 Litre', '17.99', 'Nilaqua Antibacterial Floor Cleaner Concentrate, - Alcohol Free - 5 Litre\r\n\r\nMade in the UK\r\nTested to EN1276\r\nDilution Rate of 1:100\r\nContains Buffering Agent\r\nNon Tainting', 1, 33, 345668005, 0, '2021-04-02 07:06:37', 'Made in the UK\r\nTested to EN1276\r\nDilution Rate of 1:100\r\nContains Buffering Agent\r\nNon Tainting', '8'),
('Nilaqua Medical Grade Bactericidal Surface Spray - 500 ml', '3.84', 'Nilaqua Medical Grade Bactericidal Surface Spray, 500 ml\r\n\r\nAlcohol free, non flammable, tested food safe & Halal compliant\r\nSkin safe & non tainting, ideal for all surfaces\r\nKills up to 99.9999% of bacteria in 30 seconds & leaves surfaces bacteria free for up to 30 days!\r\nKills MRSA and E Coli, Norovirus and NDM1, C-diff, Salmonella & more\r\nUsed daily within the NHS - highly cost effective with incredible test data', 1, 34, 345668006, 0, '2021-04-02 07:10:38', 'Nilaqua Medical Grade Bactericidal Surface Spray, 500 ml\r\n\r\nAlcohol free, non flammable, tested food safe & Halal compliant\r\nSkin safe & non tainting, ideal for all surfaces\r\nKills up to 99.9999% of bacteria in 30 seconds & leaves surfaces bacteria free for up to 30 days!\r\nKills MRSA and E Coli, Norovirus and NDM1, C-diff, Salmonella & more\r\nUsed daily within the NHS - highly cost effective with incredible test data', '8'),
('Nilaqua Alcohol Free Sanitiser 200ml clear', '4.88', 'Nilaqua Alcohol Free Sanitiser 200ml, clear\r\n\r\nUsed daily in the NHS\r\nKills up to 99.9999% of germs in 30 seconds. Effectively kills salmonella found in dog faeces and c-diff the fecal bug\r\nAlcohol Free and kind to all skin types\r\nProvides up to 6 hour protection\r\nKills more resilient germs such as MRSA, C-Diff and Norovirus', 1, 35, 345668007, 0, '2021-04-02 07:14:05', 'Nilaqua Alcohol Free Sanitiser 200ml, clear\r\n\r\nUsed daily in the NHS\r\nKills up to 99.9999% of germs in 30 seconds. Effectively kills salmonella found in dog faeces and c-diff the fecal bug\r\nAlcohol Free and kind to all skin types\r\nProvides up to 6 hour protection\r\nKills more resilient germs such as MRSA, C-Diff and Norovirus', '9'),
('Nilaqua 500 ml No Rinse Towel Off Dry Shampoo', '9.14', 'Nilaqua 500 ml No Rinse Towel Off Dry Shampoo\r\n\r\nBrand	Nilaqua\r\nHair type	Normal\r\nLiquid volume	16.91 Fluid Ounces\r\nItem weight	0.4 Pounds\r\nItem dimensions L x W x H	7 x 7 x 19 centimetres', 1, 36, 345668009, 0, '2021-04-02 07:16:36', 'Nilaqua 500 ml No Rinse Towel Off Dry Shampoo\r\n\r\nBrand	Nilaqua\r\nHair type	Normal\r\nLiquid volume	16.91 Fluid Ounces\r\nItem weight	0.4 Pounds\r\nItem dimensions L x W x H	7 x 7 x 19 centimetres', '10'),
('Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam', '9.06', 'Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam\r\n\r\nBrand	Nilaqua\r\nFormat	Foam\r\nItem weight	595 Grams\r\nItem dimensions L x W x H	7 x 7 x 22 centimetres\r\nIs mould resistant', 1, 37, 345668010, 0, '2021-04-02 07:19:43', 'Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam\r\n\r\nBrand	Nilaqua\r\nFormat	Foam\r\nItem weight	595 Grams\r\nItem dimensions L x W x H	7 x 7 x 22 centimetres\r\nIs mould resistant', '10');

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
(12, 21, '1616321281.jpeg'),
(13, 22, '41UC0vv2ZjL._AC_.1616321410.jpg'),
(14, 24, 'masks.jpg'),
(15, 25, 'oral.1617033535.png'),
(16, 26, 'shoes.1617042534.png'),
(17, 27, '41YPo1ePWsL._AC_ (1).1617317043.jpg'),
(18, 28, '61PSfN1gRPL._AC_SL1000_.1617317850.jpg'),
(19, 29, '61dL3dCFxHL._AC_SL1200_.1617318050.jpg'),
(20, 30, '51pwjbOYeVL._AC_.1617318489.jpg'),
(21, 31, '71lw0TiY7hL._SL1500_.1617319355.jpg'),
(22, 32, '61ENNCY+7JL._AC_SL1000_.1617319634.jpg'),
(23, 33, '91Cfj-oJPpL._AC_SL1500_.1617347197.jpg'),
(24, 34, '51ZAmdoGnML._AC_SL1000_.1617347438.jpg'),
(25, 35, '71JY8jgUIvL._AC_SL1500_.1617347611.jpg'),
(26, 36, '71VMuc64g7L._AC_SL1500_.1617347796.jpg'),
(27, 37, '71IxwHMCDAL._AC_SL1500_.1617347983.jpg');

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
(1, 'contact@int-trade', 356789234, 'int-trade', 'lojxdjsjlm4y25', '1617112241_1617112044_1614707339_400dpiLogo.png', 'We are reputed Supplier to GP Clinics, Carehomes and NHS Trusts.', 'Reputed Supplier to GP Clinics, Carehomes and NHS Trusts ', 'Reliable Supplier of Premium range of Incontinence Bed Pads & Mobility Consumables ', 'A Wide range of PPE Medical Grade Masks, Shoe Covers, Disposable Aprons, Mob Caps & Gloves', ' All products are manufactured in ISO 9001 & ISO 13485 Certified facilities', 'www.facebook', 'as', 'wsds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
