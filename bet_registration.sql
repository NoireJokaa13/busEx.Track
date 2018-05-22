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
-- Table structure for table `bet_registration`
--

CREATE TABLE IF NOT EXISTS `bet_registration` (
  `ticket_no` varchar(15) NOT NULL,
  `ticket_from` varchar(255) NOT NULL,
  `ticket_destination` varchar(20) NOT NULL,
  `ticket_date` date NOT NULL,
  `ticket_time` time NOT NULL,
  `ticket_bus_detail` varchar(50) NOT NULL,
  `plat_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bet_registration`
--

INSERT INTO `bet_registration` (`ticket_no`, `ticket_from`, `ticket_destination`, `ticket_date`, `ticket_time`, `ticket_bus_detail`, `plat_no`) VALUES
('', '', '', '0000-00-00', '00:00:00', '', ''),
('ABC111', 'UKM', 'Lumut', '2018-05-08', '15:00:00', 'Rapid', 'GHH2222'),
('ABC12', 'UKM', 'HKL', '2018-04-05', '19:00:00', 'ARWANA', 'BGV123'),
('ABCD123', 'FFFF', 'AAAA', '2018-04-05', '19:00:00', 'ARWANA', 'BGV123'),
('ABCD1323', 'FFFF', 'AAAA', '2018-04-05', '19:00:00', 'ARWANA', 'BGV123'),
('BBB111', 'Manjung', 'TBS', '2018-03-23', '20:30:00', 'Arwana', 'FGH1123'),
('bbbb', 'bbbbj', 'nnnij', '0000-00-00', '09:45:00', 'ghgh', 'hhhsu22'),
('Hhh', 'hshshs', 'bzhshe', '2005-07-18', '10:47:00', 'jjjr', 'ier222'),
('tbs0', 'ukm', 'hkl', '0000-00-00', '11:00:00', 'Arwana', 'ABC1110'),
('TBS111', 'TBs', 'Lumut', '2018-05-07', '13:00:00', 'Persatuan', 'HKL1111'),
('TBS123', 'TBS', 'Manjung', '0000-00-00', '13:00:00', 'Transional', 'ABC1234'),
('TBS170600005985', 'TBS', 'MANJUNG', '2017-06-17', '11:30:00', 'ARWANA EXPRESS', 'AGB1234'),
('TBS180200260155', 'TBS', 'MANJUNG', '2018-02-22', '17:00:00', 'KESATUAN EKSPRESS', ''),
('TBS180300295764', 'TBS', 'MANJUNG', '2018-03-30', '13:30:00', 'ARWANA EXPRESS', ''),
('TBS180400006097', 'TBS', 'MACHANG', '2018-05-08', '09:30:00', 'EKSPRES MUTIARA', ''),
('ttytb', 'nfjkfkf', 'ssshhshs', '0000-00-00', '09:41:00', 'Ggg', 'hhhh33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bet_registration`
--
ALTER TABLE `bet_registration`
  ADD PRIMARY KEY (`ticket_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
