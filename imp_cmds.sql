-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 08:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `imp_cmds`
--

CREATE TABLE IF NOT EXISTS `imp_cmds` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `command` text NOT NULL,
  `description` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `imp_cmds`
--

INSERT INTO `imp_cmds` (`id`, `title`, `command`, `description`, `time`) VALUES
(8, 'TCP Dump capture packets', 'tcpdump net 192.51.15.0/24', 'for capturing data', '2015-10-17 18:46:34'),
(9, 'TCP Dump capture packets', 'tcpdump net 192.51.15.0/24', 'for capturing data', '2015-10-17 18:46:44'),
(10, 'TCP Dump capture packets', 'tcpdump net 192.51.15.0/24', 'for capturing data', '2015-10-17 18:46:45'),
(11, 'TCP Dump capture packets', 'tcpdump net 192.51.15.0/24', 'for capturing data', '2015-10-17 18:46:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
