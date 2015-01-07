-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2015 at 06:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_classname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_age` int(3) DEFAULT NULL,
  `per_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'avatar_default.png',
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`per_id`, `per_name`, `per_classname`, `per_age`, `per_avatar`) VALUES
(4, '5545', '11144444', 555, 'avatar_default.png'),
(5, '5555555555555', '1111555555555', 2147483647, 'avatar_default.png'),
(6, '4545454', '111', 454454545, 'avatar_default.png'),
(7, '111111', '1111', 111, 'avatar_default.png'),
(11, '545544545', '222222', 45454545, 'avatar_default.png'),
(14, '222555', '2225555', 22255, 'avatar_default.png'),
(16, '45454554', '454545', 544555, 'avatar_default.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
