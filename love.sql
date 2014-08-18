-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-08-18 15:53:50
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mylove`
--

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE IF NOT EXISTS `love` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `me` text NOT NULL,
  `you` text NOT NULL,
  `date` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `love`
--

INSERT INTO `love` (`id`, `me`, `you`, `date`) VALUES
(1, '18630653824', '18007318639', '21:51:06'),
(2, '18007318639', '18630653824', '21:51:40'),
(3, '18811437730', '18811437405', '00:00:00'),
(4, '18811437405', '18811437730', '00:00:00'),
(5, '18210854168', '18630653824', '00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
