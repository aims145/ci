-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2015 at 06:35 PM
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
-- Table structure for table `server_list`
--

CREATE TABLE IF NOT EXISTS `server_list` (
  `id` int(10) NOT NULL,
  `server_name` varchar(20) NOT NULL,
  `server_ip` varchar(20) NOT NULL,
  `OS` varchar(150) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `HDD` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `Remark` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_list`
--

INSERT INTO `server_list` (`id`, `server_name`, `server_ip`, `OS`, `RAM`, `HDD`, `CPU`, `Remark`) VALUES
(11, 'cvlive.in', '10.222.1.242', 'CentOS release 5.6 (Final)', '3.5GB', '160GB', '2', 'cvlive server'),
(12, 'team.capitalvia.in', '10.222.1.217', 'CentOS release 5.10 (Final)', '4GB', '250GB', '2', 'Team capitalvia'),
(13, 'cvevents.in', '10.222.1.78', 'CentOS release 6.5 (Final)', '4GB', '250GB', '4', 'Wordpress Photoevents'),
(14, 'cvmarketing.in', '10.222.1.77', 'CentOS release 5.5 (Final)', '4GB', '250GB', '2', 'cvmarketing.in'),
(15, 'CapitalVia.com', '10.222.1.19', 'CentOS release 5.10 (Final)', '4GB', '160GB', '2', 'CapitalVia.com Dev Server'),
(16, 'support.capitalvia.c', '10.222.1.20', 'CentOS release 6.6 (Final)', '2GB', '250GB', '4', 'Support CV'),
(17, 'Android_App', '183.182.85.139', 'CentOS release 6.5 (Final)', '2GB', '250GB', '4', 'Android_App'),
(18, 'Datawarehouse Dev', '10.222.1.13', 'CentOS Linux release 7.1.1503 (Core)', '8GB', '250GB', '4', 'Datawarehouse Dev'),
(19, 'CRM Dev', '10.222.1.12', 'CentOS release 6.5 (Final)', '8GB', '250GB', '4', 'Testing Server'),
(20, 'cvteam.in', '10.222.1.124', 'CentOS release 6.5 (Final)', '32GB', '600GB', '8', 'cvteam.in (Primary Dev) + Datawarehouse'),
(21, 'CRM Database Master', '10.222.1.218', 'CentOS Linux release 7.1.1503 (Core)', '48GB', '900GB', '24', 'CRM Database Master'),
(22, 'CRM Web Server', '10.222.1.201', 'CentOS Linux release 7.1.1503 (Core)', '10GB', '600GB', '8', 'CRM Web Server'),
(23, 'CRM Database Slave', '10.222.1.140', 'CentOS release 6.7 (Final)', '6GB', '600GB', '4', 'CRM Database Slave'),
(24, 'CV Monitor', '10.222.1.141', 'CentOS release 6.6 (Final)', '4GB', '250GB', '2', 'CV Monitor Nagios'),
(25, 'chat server ', '10.222.1.145', '', '', '', '', 'chat server '),
(26, 'Trade Twits', '10.222.1.149', '', '', '', '', 'Trade Twits'),
(27, 'cv_proposal', '10.222.1.10', '', '', '', '', 'cv_proposal'),
(28, 'Gitlab ', '10.222.1.32', '', '', '', '', 'Gitlab '),
(29, 'Sendy App', '10.222.1.17', '', '', '', '', 'Sendy App'),
(30, 'Localhost', '10.222.10.160', '', '', '', '', 'amrit System'),
(31, 'Rapp', '10.222.1.40', '', '', '', '', 'New Research App Server'),
(32, 'MarketLive365', '54.169.6.5', '', '', '', '', 'MarketLive365 AWS Instance t2 medium'),
(33, 'secure.capitalvia.co', '52.74.149.33', '', '', '', '', 'capitalvia payment gateways');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `server_list`
--
ALTER TABLE `server_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `server_list`
--
ALTER TABLE `server_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
