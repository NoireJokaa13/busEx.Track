-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 03:24 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a158034`
--

-- --------------------------------------------------------

--
-- Table structure for table `bet_report`
--

CREATE TABLE IF NOT EXISTS `bet_report` (
  `PB_id` int(11) NOT NULL,
  `tiket_no` varchar(25) NOT NULL,
  `last_location` varchar(255) NOT NULL,
  `speed` varchar(25) NOT NULL,
  `distance` varchar(25) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `current_time_report` varchar(25) NOT NULL,
  `points` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bet_report`
--

INSERT INTO `bet_report` (`PB_id`, `tiket_no`, `last_location`, `speed`, `distance`, `duration`, `arrival_time`, `current_time_report`, `points`) VALUES
(1, 'ABC111', '2.9473938340109576,101.75210029936758', '1.251', '250 km', '3 hours 22 mins', '12:25 AM', '21:03:48', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(2, 'ABC111', '2.950642736715923,101.75179485517624', '1.303', '250 km', '3 hours 22 mins', '12:25 AM', '21:04:00', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(3, 'ABC111', '2.9220989,101.7554113', '0', '257 km', '3 hours 32 mins', '12:36 AM', '21:04:27', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(4, 'ABC111', '2.9506462558580613,101.75179498099068', '1.336', '257 km', '3 hours 32 mins', '12:36 AM', '21:04:33', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(5, 'ABC111', '2.9473938340109576,101.75210029936758', '1.251', '257 km', '3 hours 32 mins', '12:36 AM', '21:04:48', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(6, 'ABC111', '2.950642736715923,101.75179485517624', '1.303', '250 km', '3 hours 22 mins', '12:26 AM', '21:05:00', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(7, 'ABC111', '2.9220989,101.7554113', '0', '250 km', '3 hours 22 mins', '12:26 AM', '21:05:07', 'cgzXoneeRACoA}BQ[IQCQAW?a@'),
(8, 'ABC111', '2.950639257824078,101.75180395282123', '0.297', '250 km', '3 hours 22 mins', '12:26 AM', '21:05:12', 'cgzXoneeRACoA}BQ[IQCQAW?a@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bet_report`
--
ALTER TABLE `bet_report`
  ADD PRIMARY KEY (`PB_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bet_report`
--
ALTER TABLE `bet_report`
  MODIFY `PB_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
