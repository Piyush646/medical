-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 11:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `caty` text DEFAULT NULL,
  `cat_logo` text DEFAULT NULL,
  `cat_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `caty`, `cat_logo`, `cat_img`) VALUES
(1, 'Face Masks', 'icon_masks.png', 'masks.png'),
(2, 'Shoe Covers', 'icon_shoes.png', 'shoes.png'),
(3, 'Mob Caps', 'icon_mob.png', 'mob.png'),
(4, 'Incontinence', 'icon_incon.png', 'incontinence.png'),
(5, 'Gloves', 'icon_gloves.png', 'gloves.png'),
(6, 'Oral Swaps', 'icon_oral.png', 'oral.png'),
(7, 'Bed Bath', 'bed_logo.jpeg', 'bedbath.png'),
(8, 'Disinfectant', 'disinfectant_logo.jpeg', 'disinfectant.png'),
(9, 'Alcohol Free Sanitizers', 'sanitizer_logo.jpeg', 'sanitizer.png'),
(10, 'First-Aid Accessories', 'first_logo.jpeg', 'first_aid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_pages`
--

CREATE TABLE `dynamic_pages` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_pages`
--

INSERT INTO `dynamic_pages` (`id`, `title`, `content`) VALUES
(5, 'Token Number 5', '<h1>Token No 5</h1>\r\n\r\n<ul>\r\n	<li>This is token number 5</li>\r\n	<li>five number</li>\r\n	<li>number 5</li>\r\n</ul>\r\n'),
(6, 'My First Post', '<h1>content list</h1>\r\n\r\n<ul>\r\n	<li>Hellow there how</li>\r\n	<li>are you</li>\r\n</ul>\r\n'),
(7, 'Testing', '<h1>How are you</h1>\r\n\r\n<ul>\r\n	<li>This is going to be tested</li>\r\n	<li>ok clear hai</li>\r\n\r\n</ul>\r\n<p class=\"text-center\">Thank You</p>\r\n');

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
  `name` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `dis` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id` bigint(50) NOT NULL,
  `sort_order` varchar(10) NOT NULL,
  `code` bigint(50) NOT NULL,
  `new` bigint(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `short_des` text NOT NULL,
  `category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `price`, `dis`, `status`, `id`, `sort_order`, `code`, `new`, `time_stamp`, `short_des`, `category`) VALUES
('Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', '5', '<ul>\r\n	<li>Dermastrip Washproof Plasters - Pack of 100-7 Sizes</li>\r\n	<li>Assorted Dermastrip Hypo-Allergenic Washproof Plasters</li>\r\n	<li>7 Types (Sizes) of Plasters Included in a divider tray Box of 100 Individually wrapped and Sterile</li>\r\n</ul>\r\n', 1, 21, '1', 345667097, 1, '2021-04-29 09:21:40', 'Dermastrip Washproof Plasters - Pack of 100-7 Sizes Assorted', '10'),
('Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)', '4', '<p>Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk) Pre-injection - Skin Cleansing Swabs 100 per box 70% Isopropyl Alcohol Approx Size of Swabs: 3x3cm</p>\r\n', 1, 22, '2', 119117, 1, '2021-04-29 09:30:34', 'Ezy-Aid 70% Isopropyl Alcohol Pre-Injection Swabs (100pk)', '10'),
('Ezy-Aid Box 24 Zinc Oxide Premium Tape', '16.77', 'Ezy-Aid Premium Zinc Oxide Tape\r\nManufactured with High Quality Materials to provide with a fantastic Combination of Extreme Strength yet Easy to Tear\r\nLatex Free. Ideal for use in Sporting Activities or to Secure Dressings / Medical Applications\r\nBox Pack of 24 -- Size: 1.25cm x 10Meters each roll\r\nSuper Saver Bulk Pack', 1, 27, '', 345667098, 1, '2021-04-02 19:19:58', 'Ezy-Aid Box 24 Zinc Oxide Premium Tape', '10'),
('Ezy-Aid Conforming Bandage', '2.99', '<ul>\r\n	<li>Premium Quality Ezy-Aid Conforming Bandages</li>\r\n	<li>Extremely High stretch, lightweight bandage for holding dressings in place Fray Resistant</li>\r\n	<li>3 Sizes Available:\r\n	<ul>\r\n		<li>5cm x 4.5M,</li>\r\n		<li>7.5cm x 4.5M,</li>\r\n		<li>10cm x 4.5M</li>\r\n	</ul>\r\n	</li>\r\n	<li>Individually Wrapped Rolls. Pack of 12</li>\r\n</ul>\r\n', 1, 28, '', 345667099, 1, '2021-04-02 19:20:02', '12pk Ezy-Aid Conforming Bandage 5cm, 7.5cm, 10cm - Premium Quality (5cm x 4.5Meters (12pk))', '10'),
('Ezy-Aid Cohesive Bandage - Blue', '14.55', 'Ezy-Aid Cohesive Bandage, Blue, 5 cm x 4.5 m, Pack of 24\r\nContains latex\r\nNon woven material\r\nGrips to itself and not skin\r\nNon adhesive\r\nIndividually wrapped', 1, 29, '', 345668001, 1, '2021-04-02 19:20:05', 'Ezy-Aid Cohesive Bandage, Blue, 5 cm x 4.5 m, Pack of 24', '10'),
('HSE Compliant - Travel & Workplace First Aid Kit ', '7.90', 'British HSE (Health, Safety & Environment) Approved First Aid Kit\r\nFully stocked to comply with regulations for upto 10 persons\r\nMinimum Expiry of contents - 2 years\r\nCE Certified\r\nPerfect for Workplaces, Travel and Home - HSE Compliant ensuring you pass Inspections', 1, 30, '', 345668002, 1, '2021-04-02 19:20:08', 'British HSE (Health, Safety & Environment) Approved First Aid Kit\r\nFully stocked to comply with regulations for upto 10 persons\r\nMinimum Expiry of contents - 2 years\r\nCE Certified\r\nPerfect for Workplaces, Travel and Home - HSE Compliant ensuring you pass Inspections', '10'),
('Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs - 70% Alcohol wipes', '3.67', 'Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs, 70% Alcohol wipes\r\n\r\nBrand Name - Ezy-Aid\r\nEan - 5060383113822\r\nIncluded Components - Swab\r\nItem Weight - 40.8 grams\r\nNumber of Items - 100\r\nPart Number - BTR121014-5', 1, 31, '', 345668003, 1, '2021-04-02 19:20:11', 'Ezy-Aid 100 Pre Injection Alcohol Skin Cleansing wipes Swabs, 70% Alcohol wipes\r\n\r\nBrand Name - Ezy-Aid\r\nEan - 5060383113822\r\nIncluded Components - Swab\r\nItem Weight - 40.8 grams\r\nNumber of Items - 100\r\nPart Number - BTR121014-5', '10'),
('Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  ', '7.69', 'Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  \r\nSuperior Quality Crepe Bandage from Ezy-Aid - Medical Grade Product, Hence no compromise on Quality. \r\n12 Rolls Pack, Each Roll 7.5cm x 4.5Meters. \r\nEach Roll Contains 2 Clamps. CE Certified Suitable for Sprains & Strains and Light Support. \r\nIndividually Wrapped Rolls. Washable in Warm Soapy Water', 1, 32, '', 345668004, 1, '2021-04-02 19:20:14', 'Ezy-Aid Crepe Bandage 7.5cm x 4.5M - Premium Quality - Pack of 12  \r\nSuperior Quality Crepe Bandage from Ezy-Aid - Medical Grade Product, Hence no compromise on Quality. \r\n12 Rolls Pack, Each Roll 7.5cm x 4.5Meters. \r\nEach Roll Contains 2 Clamps. CE Certified Suitable for Sprains & Strains and Light Support. \r\nIndividually Wrapped Rolls. Washable in Warm Soapy Water', '10'),
('Nilaqua Antibacterial Floor Cleaner Concentrate, - Alcohol Free - 5 Litre', '17.99', '<p>Nilaqua Antibacterial Floor Cleaner Concentrate, - Alcohol Free - 5 Litre&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Made in the UK</li>\r\n	<li>Tested to EN1276</li>\r\n	<li>Dilution Rate of 1:100</li>\r\n	<li>Contains Buffering Agent</li>\r\n	<li>Non Tainting</li>\r\n	<li>Scent - Lemon</li>\r\n	<li>Surface recommendation - Floor</li>\r\n</ul>\r\n', 1, 33, '', 345668005, 1, '2021-04-03 01:29:02', 'Made in the UK\r\nTested to EN1276\r\nDilution Rate of 1:100\r\nContains Buffering Agent\r\nNon Tainting', '8'),
('Nilaqua Medical Grade Bactericidal Surface Spray - 500 ml', '3.84', '<ul>\r\n	<li>Alcohol free, non flammable, tested food safe &amp; Halal compliant</li>\r\n	<li>Skin safe &amp; non tainting, ideal for all surfaces</li>\r\n	<li>Kills up to 99.9999% of bacteria in 30 seconds &amp; leaves surfaces bacteria free for up to 30 days!</li>\r\n	<li>Kills MRSA and E Coli, Norovirus and NDM1, C-diff, Salmonella &amp; more</li>\r\n	<li>Used daily within the NHS - highly cost effective with incredible test data</li>\r\n</ul>\r\n', 1, 34, '', 345668006, 1, '2021-04-03 15:31:05', 'Nilaqua Medical Grade Bactericidal Surface Spray, 500 ml\r\n\r\nAlcohol free, non flammable, tested food safe & Halal compliant\r\nSkin safe & non tainting, ideal for all surfaces\r\nKills up to 99.9999% of bacteria in 30 seconds & leaves surfaces bacteria free for up to 30 days!\r\nKills MRSA and E Coli, Norovirus and NDM1, C-diff, Salmonella & more\r\nUsed daily within the NHS - highly cost effective with incredible test data', '8'),
('Nilaqua Alcohol Free Sanitiser 200ml clear', '4.88', 'Nilaqua Alcohol Free Sanitiser 200ml, clear\r\n\r\nUsed daily in the NHS\r\nKills up to 99.9999% of germs in 30 seconds. Effectively kills salmonella found in dog faeces and c-diff the fecal bug\r\nAlcohol Free and kind to all skin types\r\nProvides up to 6 hour protection\r\nKills more resilient germs such as MRSA, C-Diff and Norovirus', 1, 35, '', 345668007, 1, '2021-04-02 13:03:40', 'Nilaqua Alcohol Free Sanitiser 200ml, clear\r\n\r\nUsed daily in the NHS\r\nKills up to 99.9999% of germs in 30 seconds. Effectively kills salmonella found in dog faeces and c-diff the fecal bug\r\nAlcohol Free and kind to all skin types\r\nProvides up to 6 hour protection\r\nKills more resilient germs such as MRSA, C-Diff and Norovirus', '9'),
('Nilaqua 500 ml No Rinse Towel Off Dry Shampoo', '9.14', 'Nilaqua 500 ml No Rinse Towel Off Dry Shampoo\r\n\r\nBrand	Nilaqua\r\nHair type	Normal\r\nLiquid volume	16.91 Fluid Ounces\r\nItem weight	0.4 Pounds\r\nItem dimensions L x W x H	7 x 7 x 19 centimetres', 1, 36, '', 345668009, 1, '2021-04-02 19:20:24', 'Nilaqua 500 ml No Rinse Towel Off Dry Shampoo\r\n\r\nBrand	Nilaqua\r\nHair type	Normal\r\nLiquid volume	16.91 Fluid Ounces\r\nItem weight	0.4 Pounds\r\nItem dimensions L x W x H	7 x 7 x 19 centimetres', '7'),
('Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam', '9.06', 'Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam\r\n\r\nBrand	Nilaqua\r\nFormat	Foam\r\nItem weight	595 Grams\r\nItem dimensions L x W x H	7 x 7 x 22 centimetres\r\nIs mould resistant', 1, 37, '', 345668010, 1, '2021-04-02 19:20:28', 'Nilaqua 500 ml No Rinse Waterless Body Wash & Skin Cleansing Foam\r\n\r\nBrand	Nilaqua\r\nFormat	Foam\r\nItem weight	595 Grams\r\nItem dimensions L x W x H	7 x 7 x 22 centimetres\r\nIs mould resistant', '7'),
('Omnitex FFP2 Face Masks', '2.99', '<p>Omnitex premium FFP2 face masks. EN149 Compliant and CE Certified. Individually Wrapped. Each Box Contains 20 masks + 5 Mask extenders.</p>\r\n\r\n<ul>\r\n	<li>Meets FFP2 European Regulation Standards EN149:2001+A1:2009, CE Certified</li>\r\n	<li>5 Layers of high density filtration</li>\r\n	<li>White Colour</li>\r\n	<li>With Ear Loops and Integrated Nose Bridge</li>\r\n	<li>Box Contains 20 Masks (Individually Wrapped) and 5 Mask Extenders for a more comfortable fit</li>\r\n	<li>Fluid Resistant, Hypoallergenic</li>\r\n	<li>High Level Filtration of atleast 98.37% (requirement is atleast 94%). Comfortable Breathing - Inhalation Resistance is 1.9 mbar (requirement is not more than 2.4 mbar resistance)</li>\r\n	<li>In Collaboration with world renowned A&amp;Z Med, Turkey.</li>\r\n</ul>\r\n', 1, 38, '', 345668014, 0, '2021-04-10 03:54:14', '  ', '1'),
('Face Masks - Type IIR with Ear Loops', '2.99', '<p>Omnitex premium IIR face masks with ear loops, with meltblown filter - minimum 98% Bacterial filtration and fluid resistant at 120mmhg. EN14683:2019 Compliant.</p>\r\n\r\n<ul>\r\n	<li>Omnitex Premium IIR Face masks with Ear Loops</li>\r\n	<li>Boxed in 50s</li>\r\n	<li>Type IIR with meltblown filter - minimum 98% bacterial filtration. Fluid resistant at 120mmhg</li>\r\n	<li>Latex free, Nickel Free, Cadmium Free, Fibreglass Free</li>\r\n	<li>3Ply Premium Mask construction</li>\r\n</ul>\r\n', 1, 39, '', 345668013, 0, '2021-04-10 03:55:16', '  ', '1'),
('Face Masks - Type IIR with Tie Backs', '2.99', '<p>Premium non toxic materials makes it comfortable to breath without compromising on quality. The ties are approx 38cm each and made from spunbond polypropylene. 3 ply non-woven fabric, Fluid resistant with meltblown filter provides minimum 98% filtration efficiency. The conformable nose bridge ensures a snug fit. Latex free. 50 masks per box. EN14683:2019 Compliant.</p>\r\n\r\n<ul>\r\n	<li>Omnitex Premium IIR face masks with ties</li>\r\n	<li>3Ply Premium mask construction with four ties (2 on each side). Length of each tie is approx 38cm</li>\r\n	<li>Type IIR with meltblown filter - minimum 98% bacterial filtration. Fluid resistant at 120mmhg. Integrated nose bridge</li>\r\n	<li>Latex free, nickel free, cadmium free, fibreglass free</li>\r\n	<li>1x box of 50</li>\r\n</ul>\r\n', 1, 40, '', 345668015, 0, '2021-04-10 03:56:03', '  ', '1'),
('Face Masks - Type II with Ear Loops', '2.99', '<p>Omnitex premium 3Ply type II Medical Grade face masks. Boxed in 50s. Blue colour. 3Ply construction. Meltblown filter 98% minimum Bacterial filtration. EN14683 Compliant</p>\r\n\r\n<ul>\r\n	<li>Omnitex Premium 3Ply dispsoable surgical face masks with Ear loops - British brand, British quality</li>\r\n	<li>Type II standard with meltblown filter - at least 98% bacterial filtration</li>\r\n	<li>Latex free, nickel free, cadmium free, fibreglass free</li>\r\n	<li>3Ply mask - three layers of medical specification Thickness, CE certified</li>\r\n	<li>1 box of 50</li>\r\n</ul>\r\n', 1, 41, '', 345668016, 0, '2021-04-10 03:56:46', '   ', '1'),
('Face Masks - Kids Type IIR with Ear Loops', '2.99', '<p>Premium non toxic materials makes it comfortable to breath without compromising on quality. The comfortable nose bridge ensures a snug fit. Latex free. 98% filtration efficiency and splash resistant. EN14683 Compliant.</p>\r\n\r\n<ul>\r\n	<li>Omnitex Premium disposable kids face masks with Ear loops</li>\r\n	<li>3Ply Premium mask construction with integrated nose bridge. Soft and comfortable for kids to wear. Dimensions of Main Body of the mask (Excluding loops) is: 14.5cm x 9.5cm</li>\r\n	<li>Non toxic child safe Animal print. Non irrirating, latex free, nickel free, cadmium free, fibreglass free materials</li>\r\n	<li>Premium air permeable materials allows for comfortable breathing without compromising on safety and quality. Minimum 98% bacterial filtration &amp; splash resistant</li>\r\n	<li>Box of 10</li>\r\n</ul>\r\n', 1, 42, '', 345668017, 0, '2021-04-10 03:57:25', ' ', '1'),
('Omnitex PINK for Breast Cancer - Type IIR Face Masks', '2.99', '<p>Omnitex premium PINK IIR face masks with ear loops, with meltblown filter - minimum 98% Bacterial filtration and fluid resistant at 120mmhg. EN14683:2019 Compliant.</p>\r\n\r\n<ul>\r\n	<li>Omnitex PINK Premium IIR Face masks with Ear Loops</li>\r\n	<li>In Partnership with&nbsp;<strong>Breast Cancer Charity</strong>&nbsp;- Pink Ribbon Foundation (Reg No. 1080839) :&nbsp;<strong>10% Donated</strong></li>\r\n	<li>Boxed in 50s</li>\r\n	<li>Type IIR with meltblown filter - minimum 98% bacterial filtration. Fluid resistant at 120mmhg</li>\r\n	<li>Latex free, Nickel Free, Cadmium Free, Fibreglass Free</li>\r\n	<li>3Ply Premium Mask construction</li>\r\n</ul>\r\n', 1, 43, '', 345668018, 0, '2021-04-10 03:57:58', '  ', '1'),
('Omnitex METAL FREE Type IIR Face Masks - for Safe use in MRI / Xray', '2.99', '<p>Omnitex premium Metal Free type IIR face masks with ear loops, with meltblown filter - minimum 98% Bacterial filtration and fluid resistant at 120mmhg. EN14683:2019 Compliant.</p>\r\n\r\n<ul>\r\n	<li>Omnitex Metal Free Premium IIR Face masks with Ear Loops</li>\r\n	<li>Tested Independently by UK NHS Clinician (MRI Safety Expert) for safe use in MRI and X-ray departments.</li>\r\n	<li>White Colour</li>\r\n	<li>Boxed in 50s</li>\r\n	<li>Type IIR with meltblown filter - minimum 98% bacterial filtration. Fluid resistant at 120mmhg</li>\r\n	<li>Latex free, Nickel Free, Cadmium Free, Fibreglass Free</li>\r\n	<li>3Ply Premium Mask construction</li>\r\n</ul>\r\n', 1, 44, '', 345668019, 0, '2021-04-10 03:58:38', '  ', '1'),
('Clinell Universal Cleaning and Disinfectant Wipes for Surfaces - Pack of 200 Thick Wipes ', '6.21', '<p>Clinell Universal Cleaning and Disinfectant Wipes for Surfaces - Pack of 200 Thick Wipes</p>\r\n\r\n<ul>\r\n	<li>Multi Purpose Wipes, Kills 99.99% of Germs, Effective in 10 Seconds</li>\r\n	<li>MULTI-PURPOSE - Clinell&#39;s Universal Wipes clean and disinfect all surfaces in a single step, replacing the need for different types of wipes and surface cleaners</li>\r\n	<li>DERMATOLOGICALLY TESTED - Contains aloe vera and moisturisers; Safe on all washable surfaces, can be used without gloves and and non bleaching</li>\r\n	<li>EFFECTIVE IN 10 SECONDS - Clinell&#39;s disinfectant wipes are fast and effective, proven to kill bacteria in 10 seconds in dirty conditions and are effective against most viruses within one minute</li>\r\n	<li>KILLS AT LEAST 99.99 PERCENT - Clinell&#39;s cleaning extra thick wipes are effective against virus and bacteria from 30 seconds</li>\r\n	<li>PREMIUM PACKAGING - Clinell&#39;s disinfecting wipes are dispensed one at a time, with a moisture lock lid, so the next wipe does not dry out which commonly occurs with pack dispensers</li>\r\n	<li>DESIGNED BY DOCTORS - Trusted by healthcare professionals and the NHS</li>\r\n</ul>\r\n', 1, 45, '', 345668020, 0, '2021-04-03 00:46:48', '', '8'),
('Premium Shoe Covers', '2.99', '<ul>\r\n	<li>Omnitex Premium Quality Shoe Covers (Pack of 100)</li>\r\n	<li>3.5g CPE Material, Lightly Embossed for Added Grip</li>\r\n	<li>Ideal for Medium to Heavy use</li>\r\n	<li>Fits upto Shoes/Boot Size 11cm (39cm Long) with Elasticated Ankle</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>\r\n', 1, 46, '', 345668026, 0, '2021-04-10 04:02:13', ' ', '2'),
('Blue Mob caps', '2.99', '<ul>\r\n	<li>Omnitex Premium Blue Mob Caps - supplied in Packs of 100</li>\r\n	<li>High Quality Non Woven Material for a superior fit and user comfort</li>\r\n	<li>Secure fit - Double Elastic</li>\r\n	<li>Ideal for Food Production, Catering, Beauty, Tanning Salons, Healthcare facilities, Home, Factories And Other Applications</li>\r\n	<li>Universal Size, expanding to approx. 100cm</li>\r\n</ul>\r\n', 1, 47, '', 345668021, 0, '2021-04-10 04:03:28', ' ', '3'),
('White Mob caps', '2.99', '<ul>\r\n	<li>Omnitex Premium White Mob Caps - supplied in Packs of 100</li>\r\n	<li>High Quality Non Woven Material for a superior fit and user comfort</li>\r\n	<li>Secure fit - Double Elastic</li>\r\n	<li>Ideal for Food Production, Catering, Beauty, Tanning Salons, Healthcare facilities, Home, Factories And Other Applications</li>\r\n	<li>Universal Size, expanding to approx. 100cm</li>\r\n</ul>\r\n', 1, 48, '', 345668025, 0, '2021-04-10 04:03:50', '  ', '3'),
('Premium Disposable Bed Incontinence Sheets 60x90cm', '7.69', '<ul>\r\n	<li>High Quality Disposable Incontinence Bed Pads with absorption capacity of 1400ml</li>\r\n	<li>Soft Top Layer offers greater comfort to the user</li>\r\n	<li>SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>\r\n	<li>60x90 cm : Ideal size for placement on Bed. For convenience packed in Individual Packs of 25</li>\r\n</ul>\r\n', 1, 49, '', 345668022, 0, '2021-04-10 04:10:32', '  ', '4'),
('Ultra Disposable Bed Incontinence Sheets 60x90cm', '2.99', '<ul>\r\n	<li>Superior Quality Disposable Incontinence Bed / Chair Pads with absorption capacity of 2000ml</li>\r\n	<li>Soft Top Layer offers greater comfort to the user</li>\r\n	<li>SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>\r\n	<li>60x90 cm: Ideal size for placement on Chair or Bed. For convenience packed in Individual Packs of 25</li>\r\n</ul>\r\n', 1, 50, '', 345668023, 0, '2021-04-10 04:11:17', '  ', '4'),
('Premium Disposable Chair Incontinence Sheets 40x60cm', '7.69', '<ul>\r\n	<li>High Quality Disposable Incontinence Bed / Chair Pads with absorption capacity of 600ml</li>\r\n	<li>Soft Top Layer offers greater comfort to the user</li>\r\n	<li>SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>\r\n	<li>40 x 60cm: Ideal size for placement on Chair or Bed. For convenience packed in Individual Packs of 25</li>\r\n</ul>\r\n', 1, 51, '', 345668024, 0, '2021-04-10 04:12:03', ' ', '4'),
('Ultra Disposable Chair Incontinence Sheets 40x60cm', '2.99', '<ul>\r\n	<li>Superior Quality Disposable Incontinence Bed / Chair Pads with absorption capacity of 800ml</li>\r\n	<li>Soft Top Layer offers greater comfort to the user</li>\r\n	<li>SAP embedded absorption Layer : Increases capacity and retains fluids longer</li>\r\n	<li>40x60 cm: Ideal size for placement on Chair or Bed. For convenience packed in Individual Packs of 25</li>\r\n</ul>\r\n', 1, 52, '', 345668027, 0, '2021-04-10 04:12:43', ' ', '4'),
('Reusable / Washable Incontinence Bed Pads with Tucks', '2.99', '<ul>\r\n	<li>Premium Washable / Reusable Incontinence Bed Pad</li>\r\n	<li>3 Litres (3000ml) absorption capacity</li>\r\n	<li>90x90cm Bed Pad size + Tucks for added security</li>\r\n	<li>Soft Top Layer reduces risk of Bed Sores.</li>\r\n</ul>\r\n', 1, 53, '', 345668028, 0, '2021-04-10 04:13:28', ' ', '4'),
('Reusable / Washable Incontinence Bed Pads without Tucks', '2.99', '<ul>\r\n	<li>Premium Washable / Reusable Incontinence Bed Pad</li>\r\n	<li>3 Litres (3000ml) absorption capacity</li>\r\n	<li>85x90cm Bed Pad size</li>\r\n	<li>Soft Top Layer reduces risk of Bed Sores.</li>\r\n</ul>\r\n', 1, 54, '', 345668029, 0, '2021-04-10 04:14:16', ' ', '4'),
('Blue Nitrile Gloves', '2.99', '<p>Nitrile gloves are stronger and possess greater chemical resistance than both latex and vinyl gloves. They are generally recommended for use in areas that may involve higher levels of stress on exam gloves or areas that deal with harsh chemicals or liquid immersion.</p>\r\n\r\n<p>Omnitex Nitrile Blue Gloves are Powder Free, Box of 200.</p>\r\n\r\n<p>Excellent tactile sensitivity, Chemical resistance, Finger Tips Textured, Innovative packaging reduces waste.</p>\r\n\r\n<p>Latex Free</p>\r\n\r\n<p>CE Marked</p>\r\n\r\n<p>Superior Quality : Conform to AQL 1.5, CE Class 1 Medical grade standard, Tested and Passed According to EN 455-1, -2, -3, -4 and EN 420, EN388 -2EN 374 -2, -3.</p>\r\n', 1, 55, '', 345668030, 0, '2021-04-10 04:16:09', ' ', '5'),
('Black Nitrile Gloves', '2.99', '<p>Nitrile gloves are stronger and possess greater chemical resistance than both latex and vinyl gloves. They are generally recommended for use in areas that may involve higher levels of stress on exam gloves or areas that deal with harsh chemicals or liquid immersion.</p>\r\n\r\n<p>Omnitex Nitrile Black Gloves, Powder Free<br />\r\nBox of 200<br />\r\nExcellent tactile sensitivity, Chemical resistance, Finger Tips Textured<br />\r\nInnovative packaging reduces waste<br />\r\nLatex Free<br />\r\nCE Marked</p>\r\n\r\n<p>Superior Quality : Conform to AQL 1.5, CE Class 1 Medical grade standard, Tested and Passed According to EN 455-1, -2, -3, -4 and EN 420, EN388 -2EN 374 -2, -3.</p>\r\n', 1, 56, '', 345668031, 0, '2021-04-10 04:16:32', ' ', '5'),
('Cotton Dermatology Gloves', '2.99', '<ul>\r\n	<li>Dermatological cotton gloves for dry Skin</li>\r\n	<li>These soft and comfortable pure cotton gloves protect the damaged skin on your hands</li>\r\n	<li>Ideal for use at night after applying creams or emollients</li>\r\n	<li>100% cotton</li>\r\n</ul>\r\n', 1, 57, '', 345668032, 0, '2021-04-10 04:16:59', ' ', '5'),
('Pink Oral Swabs', '2.99', '<ul>\r\n	<li>Foam Oral / Cleansing Swab - Pink Colour</li>\r\n	<li>Can be used for cleaning or taking saliva samples and oral hygiene procedures</li>\r\n	<li>Not harmful to mouthwash</li>\r\n	<li>Can also be used to clean dirt and grime from difficult to reach places, e.g. keyboards etc.</li>\r\n	<li>250 pieces per pack - Single use only - Not to be reused</li>\r\n</ul>\r\n', 1, 58, '', 345668033, 0, '2021-04-10 04:05:39', ' ', '6'),
('Green Oral Swabs', '2.99', '<ul>\r\n	<li>Foam Oral / Cleansing Swab - Green Colour</li>\r\n	<li>Can be used for cleaning or taking saliva samples and oral hygiene procedures</li>\r\n	<li>Not harmful to mouthwash</li>\r\n	<li>Can also be used to clean dirt and grime from difficult to reach places, e.g. keyboards etc.</li>\r\n	<li>250 pieces per pack - Single use only - Not to be reused</li>\r\n</ul>\r\n', 1, 59, '', 345668034, 0, '2021-04-10 04:06:47', '  ', '6');

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
(27, 37, '71IxwHMCDAL._AC_SL1500_.1617347983.jpg'),
(28, 24, 'IIR-Amz-dec20.1617391651.jpeg'),
(36, 45, '81sO859M7PL._SX522_.1617410808.jpg'),
(53, 38, 'FFP2-box-mask1-1.1618026854.jpg'),
(54, 39, '41UC0vv2ZjL._AC_.1618026916.jpg'),
(55, 40, '51MoTBKGEnL._AC_SX679_.1618026963.jpg'),
(56, 41, 'II-2021-amz.1618027006.jpg'),
(57, 42, 'Main-Amz-dec20-1.1618027045.jpg'),
(58, 43, 'Pink-Amz-main.1618027078.jpg'),
(59, 44, 'Metal-Free-box-Barbie.1618027118.jpg'),
(60, 46, 'shoe-covers.1618027333.png'),
(61, 47, '61DW8y2932L._AC_UX679_.1618027408.jpg'),
(62, 48, '71JWDGM2aML._AC_SL1500_.1618027430.jpg'),
(63, 58, '61gUYLt2zlL._AC_SL1000_.1618027539.jpg'),
(64, 59, '51zjHS11-TL._AC_.1618027607.jpg'),
(65, 49, '51zjHS11-TL._AC_.1618027832.jpg'),
(66, 50, 'DIA6090-Dec20-Amz.1618027877.jpg'),
(67, 51, 'Silver-amaz4060.1618027923.jpg'),
(68, 52, '41Zec6Guz0L._AC_-1.1618027963.jpg'),
(69, 53, '51s-Laf49IL._AC_.1618028008.jpg'),
(70, 54, 'NTWP-main.1618028056.jpg'),
(71, 55, '51s-Laf49IL._AC_.1618028169.jpg'),
(72, 56, '61i8XVTQhtL._AC_SL1000_.1618028192.jpg'),
(73, 57, '71OVmsqh1bL._AC_SL1500_.1618028219.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` bigint(50) NOT NULL,
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
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` bigint(50) NOT NULL,
  `email` text DEFAULT NULL
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
  `message` text NOT NULL,
  `ab_line1` text NOT NULL,
  `ab_line2` text NOT NULL,
  `ab_line3` text NOT NULL,
  `ab_line4` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `vat` varchar(50) NOT NULL,
  `registration_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `email`, `phn`, `address`, `location`, `logo`, `message`, `ab_line1`, `ab_line2`, `ab_line3`, `ab_line4`, `facebook`, `twitter`, `instagram`, `vat`, `registration_number`) VALUES
(1, 'contact@int-trade.co.uk', 356789234, 'int-trade', 'lojxdjsjlm4y25', '1617112241_1617112044_1614707339_400dpiLogo.png', 'Int-Trade Global Ltd, a London based Healthcare consumables supplier is a preferred supplier to the NHS, GPs and Care Homes. Our Experience and Expertise ensures fully compliant, genuine and effective products are supplied in a timely fashion. As a well established supplier, you are guaranteed effective and genuine products that meet Industry Standards. \r\n\r\nFor Sales please contact on contact@int-trade.co.uk or drop inquiry at Contact-Us page.', 'Reputed Supplier to GP Clinics, Carehomes and NHS Trusts ', 'Reliable Supplier of Premium range of Incontinence Bed Pads & Mobility Consumables ', 'A Wide range of PPE Medical Grade Masks, Shoe Covers, Disposable Aprons, Mob Caps & Gloves', ' All products are manufactured in ISO 9001 & ISO 13485 Certified facilities', 'www.facebook', 'as', 'wsds', 'VATID28042021', 'RGN28042021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
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
-- AUTO_INCREMENT for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

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
