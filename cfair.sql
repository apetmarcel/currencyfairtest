
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2015 at 12:38 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `trade_messages`
--

CREATE TABLE IF NOT EXISTS `trade_messages` (
  `trade_messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `currencyFrom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `currencyTo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `amountSell` float NOT NULL,
  `amountBuy` float NOT NULL,
  `rate` float NOT NULL,
  `timePlaced` datetime NOT NULL,
  `originatingCountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createddate` datetime NOT NULL,
  `version` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`trade_messages_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `trade_messages`
--

INSERT INTO `trade_messages` (`trade_messages_id`, `userId`, `currencyFrom`, `currencyTo`, `amountSell`, `amountBuy`, `rate`, `timePlaced`, `originatingCountry`, `createddate`, `version`) VALUES
(2, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:02:04', 'FR', '2015-08-17 22:02:03', '2015-08-17 22:02:03'),
(3, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:03:26', 'FR', '2015-08-17 22:03:25', '2015-08-17 22:03:25'),
(4, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:07:17', 'FR', '2015-08-17 22:07:16', '2015-08-17 22:07:16'),
(5, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:07:19', 'FR', '2015-08-17 22:07:17', '2015-08-17 22:07:17'),
(6, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:22:03', 'FR', '2015-08-17 22:22:02', '2015-08-17 22:22:02'),
(7, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:23:15', 'FR', '2015-08-17 22:23:15', '2015-08-17 22:23:15'),
(8, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:25:27', 'FR', '2015-08-17 22:25:26', '2015-08-17 22:25:26'),
(9, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:25:38', 'FR', '2015-08-17 22:25:37', '2015-08-17 22:25:37'),
(10, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:25:51', 'FR', '2015-08-17 22:25:50', '2015-08-17 22:25:50'),
(11, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:01', 'FR', '2015-08-17 22:26:00', '2015-08-17 22:26:00'),
(12, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:12', 'FR', '2015-08-17 22:26:11', '2015-08-17 22:26:11'),
(13, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:13', 'FR', '2015-08-17 22:26:12', '2015-08-17 22:26:12'),
(14, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:14', 'FR', '2015-08-17 22:26:12', '2015-08-17 22:26:12'),
(15, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:14', 'FR', '2015-08-17 22:26:13', '2015-08-17 22:26:13'),
(16, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:15', 'FR', '2015-08-17 22:26:14', '2015-08-17 22:26:14'),
(17, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:16', 'FR', '2015-08-17 22:26:15', '2015-08-17 22:26:15'),
(18, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:17', 'FR', '2015-08-17 22:26:16', '2015-08-17 22:26:16'),
(19, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:33', 'FR', '2015-08-17 22:26:32', '2015-08-17 22:26:32'),
(20, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:39', 'FR', '2015-08-17 22:26:37', '2015-08-17 22:26:37'),
(21, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:50', 'FR', '2015-08-17 22:26:49', '2015-08-17 22:26:49'),
(22, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:51', 'FR', '2015-08-17 22:26:50', '2015-08-17 22:26:50'),
(23, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:52', 'FR', '2015-08-17 22:26:51', '2015-08-17 22:26:51'),
(24, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:53', 'FR', '2015-08-17 22:26:52', '2015-08-17 22:26:52'),
(25, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:54', 'FR', '2015-08-17 22:26:53', '2015-08-17 22:26:53'),
(26, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:54', 'FR', '2015-08-17 22:26:53', '2015-08-17 22:26:53'),
(27, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:55', 'FR', '2015-08-17 22:26:54', '2015-08-17 22:26:54'),
(28, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:56', 'FR', '2015-08-17 22:26:55', '2015-08-17 22:26:55'),
(29, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:57', 'FR', '2015-08-17 22:26:56', '2015-08-17 22:26:56'),
(30, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:26:58', 'FR', '2015-08-17 22:26:57', '2015-08-17 22:26:57'),
(31, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:27:02', 'FR', '2015-08-17 22:27:02', '2015-08-17 22:27:02'),
(32, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:28:18', 'FR', '2015-08-17 22:28:18', '2015-08-17 22:28:18'),
(33, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:28:41', 'FR', '2015-08-17 22:28:40', '2015-08-17 22:28:40'),
(34, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-17 23:29:14', 'FR', '2015-08-17 22:29:13', '2015-08-17 22:29:13'),
(35, 134256, 'EUR', 'GBP', 1000, 74710, 7471, '2015-07-17 23:29:51', 'FR', '2015-08-17 22:29:50', '2015-08-17 22:29:50'),
(36, 134256, 'USD', 'GBP', 1000, 74710, 7471, '2015-07-17 23:30:40', 'FR', '2015-08-17 22:30:39', '2015-08-17 22:30:39'),
(37, 134256, 'USD', 'GBP', 1000, 74710, 7471, '2015-07-17 23:30:42', 'FR', '2015-08-17 22:30:41', '2015-08-17 22:30:41'),
(38, 134256, 'USD', 'GBP', 1000, 74710, 7471, '2015-07-18 01:25:24', 'FR', '2015-08-18 00:25:23', '2015-08-18 00:25:23'),
(39, 134256, 'USD', 'GBP', 1000, 74710, 7471, '2015-07-18 01:25:35', 'FR', '2015-08-18 00:25:34', '2015-08-18 00:25:34'),
(40, 134256, 'USD', 'GBP', 1000, 74710, 7471, '2015-07-18 01:29:03', 'FR', '2015-08-18 00:29:02', '2015-08-18 00:29:02'),
(41, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-18 01:36:09', 'FR', '2015-08-18 00:36:08', '2015-08-18 00:36:08'),
(42, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-18 01:36:11', 'FR', '2015-08-18 00:36:10', '2015-08-18 00:36:10'),
(43, 134256, 'GBP', 'EUR', 1000, 74710, 7471, '2015-07-18 01:36:18', 'FR', '2015-08-18 00:36:24', '2015-08-18 00:36:24');

--
-- Triggers `trade_messages`
--
DROP TRIGGER IF EXISTS `transactions_counters`;
DELIMITER //
CREATE TRIGGER `transactions_counters` AFTER INSERT ON `trade_messages`
 FOR EACH ROW BEGIN
 
    update transactions_counter
    SET total_persecond = `total_persecond`+1
,time = now()

	where transactions_counter_id = 1
;
    
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_counter`
--

CREATE TABLE IF NOT EXISTS `transactions_counter` (
  `transactions_counter_id` int(11) NOT NULL AUTO_INCREMENT,
  `total_persecond` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transactions_counter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transactions_counter`
--

INSERT INTO `transactions_counter` (`transactions_counter_id`, `total_persecond`, `time`) VALUES
(1, 1, '2015-08-18 00:36:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
