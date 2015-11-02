-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 05:52 PM
-- Server version: 5.5.44-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `imp_links`
--

CREATE TABLE IF NOT EXISTS `imp_links` (
  `id` int(25) NOT NULL,
  `title` varchar(40) NOT NULL,
  `link` text NOT NULL,
  `description` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imp_links`
--

INSERT INTO `imp_links` (`id`, `title`, `link`, `description`, `time`) VALUES
(15, 'Asterisk GUI', 'http://www.voip-info.org/wiki/view/Asterisk+GUI', 'It has all Asterisk GUI details', '2015-10-19 10:03:00'),
(16, 'Nagios with Whats App', 'http://www.unixmen.com/send-nagios-alert-notification-using-whatsapp/', 'Sending nagios notifications using whats app. ', '2015-10-19 10:04:35'),
(17, 'Setup Apache Hadoop', 'http://www.unixmen.com/setup-apache-hadoop-centos/', 'Setting up apache hadoop in centos ', '2015-10-19 10:05:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imp_links`
--
ALTER TABLE `imp_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imp_links`
--
ALTER TABLE `imp_links`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
