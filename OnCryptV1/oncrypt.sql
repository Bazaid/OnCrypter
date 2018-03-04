-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2014 at 02:40 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oncrypt`
--
CREATE DATABASE IF NOT EXISTS `oncrypt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oncrypt`;

-- --------------------------------------------------------

--
-- Table structure for table `crypts`
--

CREATE TABLE IF NOT EXISTS `crypts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cryptname` varchar(100) NOT NULL,
  `cryptfile` varchar(100) NOT NULL,
  `cryptType` varchar(100) NOT NULL,
  `addedsize` varchar(100) NOT NULL,
  `dotnet` varchar(100) NOT NULL,
  `ratio` varchar(100) NOT NULL,
  `ratioscan` varchar(100) NOT NULL,
  `addtional` varchar(100) NOT NULL,
  `accountType` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crypts`
--

INSERT INTO `crypts` (`id`, `cryptname`, `cryptfile`, `cryptType`, `addedsize`, `dotnet`, `ratio`, `ratioscan`, `addtional`, `accountType`) VALUES
(1, 'TrialCrypt', 'TrialCrypt.exe', 'RunPE (VB.NET)', '20 kb', 'YES', '1\\35', 'http://www.metascan-online.com', 'This crypt will be deleted in two weeks', 'Trial'),
(2, 'Test', 'test.exe', 'SomeType', '44 kb', 'NO', '4/35', 'http://www.google.com', 'ahhaha', 'Trial');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `hash` text NOT NULL,
  `ratio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `name`, `type`, `date`, `hash`, `ratio`) VALUES
(2, 3, 'puQGIprocexp.exe', 'SomeType', '2014-07-05 07:05:26', '7fa34e22a8649aa4eea11f2d3f4d70d8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `used` varchar(100) NOT NULL,
  `accountType` varchar(100) NOT NULL,
  `hwid` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `expires` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`, `date`, `used`, `accountType`, `hwid`, `ip`, `expires`, `total`, `status`) VALUES
(1, 'unCoder', '81dc9bdb52d04dc20036dbd8313ed055', 'uncodersc', '0000-00-00 00:00:00', '1', 'Trial', 'etwymip49k44', '127.0.0.1', '0000-00-00 00:00:00', 1, 'notworking'),
(2, 'test', 'pass', 'emal', '0000-00-00 00:00:00', 'used', 'Trial', '380ufpr', '127', '2014-07-23 00:00:00', 5, 'working'),
(3, 'ir', '202cb962ac59075b964b07152d234b70', '123', '2014-07-05 00:00:00', '1', 'Trial', ' ', '::1', '2014-07-06 05:59:02', 1, 'working'),
(4, 'haha', '81dc9bdb52d04dc20036dbd8313ed055', 'test@gmail.com', '2014-07-05 00:00:00', '0', 'Basic', ' ', '::1', '2014-07-06 22:03:09', 5, 'notworking'),
(5, 'hob', '827ccb0eea8a706c4c34a16891f84e7b', 'ee@gmail.com', '2014-07-05 00:00:00', '0', 'Hacker', ' ', '::1', '2014-07-06 22:05:40', 0, 'notworking'),
(6, 'fuck', 'c20ad4d76fe97759aa27a0c99bff6710', 'h@gmail.com', '2014-07-05 00:00:00', '0', 'FUD', ' ', '::1', '2014-07-06 22:08:07', 15, 'notworking'),
(7, 'testt', '202cb962ac59075b964b07152d234b70', 'ee@gmail.com', '2014-07-05 00:00:00', '0', '', ' ', '::1', '2014-07-06 23:43:29', 0, 'notworking'),
(8, 'ksa', '202cb962ac59075b964b07152d234b70', '22@gmail.com', '2014-07-07 00:54:25', '0', 'Trial', ' ', '::1', '2014-07-06 00:54:25', 1, 'closed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
