-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2020 at 12:00 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorys`
--

DROP TABLE IF EXISTS `tbl_categorys`;
CREATE TABLE IF NOT EXISTS `tbl_categorys` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  `cat_status` int(11) NOT NULL DEFAULT '0',
  `cat_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categorys`
--

INSERT INTO `tbl_categorys` (`cat_id`, `cat_name`, `cat_status`, `cat_timestamp`) VALUES
(1, 'HOSPITALITY', 0, '2020-08-13 03:19:12'),
(2, 'RESIDENTIAL', 0, '2020-08-13 03:20:24'),
(4, 'COMMERCIAL', 0, '2020-08-13 03:40:33'),
(5, 'INSTITUTIONAL', 0, '2020-08-13 03:55:50'),
(6, 'INTERIORS', 0, '2020-08-13 03:56:02'),
(7, 'MASTER PLANNING', 0, '2020-08-13 03:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) DEFAULT NULL,
  `password` varchar(400) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

DROP TABLE IF EXISTS `tbl_projects`;
CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_id` int(11) DEFAULT NULL,
  `p_name` varchar(500) DEFAULT NULL,
  `p_caption` text,
  `p_status` int(11) DEFAULT '0',
  `p_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`p_id`, `ca_id`, `p_name`, `p_caption`, `p_status`, `p_timestamp`) VALUES
(1, 2, 'Ajil', 'Good man', 0, '2020-08-13 15:27:34'),
(2, 2, 'Appu', 'Good man', 0, '2020-08-13 15:42:05'),
(3, 5, 'Amal Sunny', 'Good man', 0, '2020-08-13 15:55:21'),
(4, 6, 'Bed Room', 'Good', 0, '2020-08-13 16:05:07'),
(6, 1, 'sssss', 'ssss', 0, '2020-08-15 06:10:57'),
(7, 6, 'sdfgfe', 'sdfgvcx', 0, '2020-08-15 06:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_image`
--

DROP TABLE IF EXISTS `tbl_project_image`;
CREATE TABLE IF NOT EXISTS `tbl_project_image` (
  `pi_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_id` int(11) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`pi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_image`
--

INSERT INTO `tbl_project_image` (`pi_id`, `pr_id`, `image`) VALUES
(43, 3, '159747223202_slider.jpg'),
(25, 1, '1597472070pic1.jpg'),
(26, 2, '1597472089pic2.jpg'),
(42, 3, '1597472232__dream_apartment___bedroom_1_by_flowermuncher-d3kq2e2.jpg'),
(27, 3, '1597472105pic3.jpg'),
(40, 4, '1597472213skyExt_0202-CROP-1600x760_-_Copy.jpg'),
(41, 4, '1597472213Stylish-Scandinavian-apartment-in-black-and-white-with-a-touch-of-gray.jpg'),
(28, 4, '1597472122pic4.jpg'),
(37, 6, '1597472193minimalist-living-room-decor.png'),
(38, 4, '1597472213NY-15.jpg'),
(39, 4, '1597472213redd7_-_Copy.jpg'),
(36, 6, '1597472193maxresdefault.jpg'),
(29, 6, '1597472143pic7.jpg'),
(33, 7, '15974721786150383615_c0e69c19b3.jpg'),
(34, 6, '1597472193Interior-Design-Mansion-R16-On-Fabulous-Design-Style-with-Interior-Design-Mansion.jpg'),
(35, 6, '1597472193luxury-apartments-in-baltimore-maryland.jpg'),
(30, 7, '1597472156pic10.jpg'),
(31, 7, '159747217812_Living_Room_tpes6k.jpg'),
(32, 7, '1597472178365-Bond_Living-Room-3.jpg'),
(44, 3, '15974722322.jpg'),
(45, 2, '1597472250CONCRETE-CONCEPT-Apt-KASIA-ORWAT-1-600x401.jpg'),
(46, 2, '1597472250images_(1).jpg'),
(47, 2, '1597472250images_(2).jpg'),
(48, 2, '1597472250images.jpg'),
(49, 2, '1597472250p2-1000x759.jpg'),
(50, 1, '15974722738b2190f808dcc2da_9431-w500-h400-b0-p0--.jpg'),
(51, 1, '1597472273868f9452-4438-41d4-aa9d-e9356fa73cc4_1.324fec1b3f4b377beb00d4ed1090c869.jpeg'),
(52, 1, '1597472273br_rm_abbott1~Abbott-Hazelnut-5-Pc-Queen-Panel-Bedroom.jpeg_.jpg'),
(53, 1, '1597472273latest-bed-designs-2016_good-bedroom-ideas_latest-bed-designs-for-bedroom_bedroom-furnishing-ideas.jpg'),
(54, 1, '1597472273paint-colors-beautiful-earth-for-small-brightfull-creative-blue-earth-color-paint-ideas-l-65fc364880f2b5a1.jpg'),
(55, 1, '1597472273pinturas-de-quarto-de-casal-verde.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
