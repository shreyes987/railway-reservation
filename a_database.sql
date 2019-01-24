-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 07:46 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `after`
--

CREATE TABLE IF NOT EXISTS `after` (
  `id` int(128) NOT NULL,
  `passno` int(128) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `berth` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after`
--

INSERT INTO `after` (`id`, `passno`, `name`, `age`, `gender`, `berth`, `username`) VALUES
(1, 1, 'ss', 21, 'Female', 'lower', 'max');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `trainno` int(30) NOT NULL,
  `trainname` varchar(100) NOT NULL,
  `type` varchar(4) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `ticketavailable` int(100) NOT NULL,
  `dep` time NOT NULL,
  `arrival` time NOT NULL,
  `cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`trainno`, `trainname`, `type`, `source`, `destination`, `ticketavailable`, `dep`, `arrival`, `cost`) VALUES
(11007, 'Deccan express', 'EXP', 'Mumbai', 'Pune', 71, '07:00:00', '11:05:00', 100),
(11008, 'Udhyan express', 'EXP', 'Mumbai', 'Pune', -71, '08:05:00', '11:40:00', 120),
(11009, 'Indrayani express', 'SF', 'Mumbai', 'Pune', 98, '08:30:00', '12:15:00', 170),
(11010, 'Sinhagad express', 'EXP', 'Mumbai', 'Pune', 43, '11:00:00', '02:30:00', 90),
(11011, 'Pragati express', 'EXP', 'Mumbai', 'Pune', 96, '03:00:00', '06:00:00', 100),
(11012, 'Gujrat express', 'EXP', 'Mumbai', 'Ahmedabad', 100, '04:00:00', '11:50:00', 600),
(11013, 'Saurashtra express', 'EXP', 'Mumbai', 'Ahmedabad', 99, '05:00:00', '12:50:00', 500),
(11014, 'Karnavati express', 'EXP', 'Mumbai', 'Ahmedabad', 100, '06:00:00', '13:50:00', 550),
(11015, 'Sayaji Nagari express', 'EXP', 'Mumbai', 'Ahmedabad', 100, '07:00:00', '14:50:00', 510),
(11016, 'Nagercoil express', 'SF', 'Mumbai', 'Ahmedabad', 89, '08:00:00', '15:50:00', 300),
(11017, 'Deccan express', 'EXP', 'Pune', 'Mumbai', 117, '09:00:00', '12:00:00', 100),
(11018, 'Udhyan express', 'EXP', 'Pune', 'Mumbai', 96, '10:00:00', '13:00:00', 130),
(11019, 'Indrayani express', 'SF', 'Pune', 'Mumbai', 100, '11:00:00', '14:00:00', 150),
(11020, 'Sinhagad express', 'EXP', 'Pune', 'Mumbai', 100, '12:00:00', '15:00:00', 125),
(11021, 'Pragati express', 'EXP', 'Pune', 'Mumbai', 100, '13:00:00', '16:00:00', 140),
(11022, 'Gujrat express', 'EXP', 'Ahmedabad', 'Mumbai', 100, '14:00:00', '21:00:00', 500),
(11023, 'Saurashtra express', 'EXP', 'Ahmedabad', 'Mumbai', 100, '15:00:00', '22:00:00', 550),
(11024, 'Karnavati express', 'EXP', 'Ahmedabad', 'Mumbai', 100, '16:00:00', '23:00:00', 499),
(11025, 'Sayaji Nagari express', 'EXP', 'Ahmedabad', 'Mumbai', 100, '17:00:00', '00:00:00', 500),
(11026, 'Bikaner expp', 'SF', 'Ahmedabad', 'Mumbai', 122, '03:00:00', '10:00:00', 450),
(11027, 'Ahimsa expp', 'EXP', 'Ahmedabad', 'Pune', 111, '16:23:00', '22:37:00', 520),
(11028, 'Duronto express', 'SF', 'Ahmedabad', 'Pune', 70, '20:11:00', '05:00:00', 555),
(11029, 'Ahimsa expp', 'EXP', 'Pune', 'Ahmedabad', 109, '12:25:00', '18:37:00', 559),
(11030, 'Duronto express', 'SF', 'Pune', 'Ahmedabad', 70, '08:11:00', '15:00:00', 600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `phonenumber` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `date`, `phonenumber`) VALUES
(17, 'shreyas222', 'ebc8102d30a6ee283dcad94c40463cc4', 'basutkar.sk@gmail.com', '2015-09-29', '9196191428');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `after`
--
ALTER TABLE `after`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`trainno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `after`
--
ALTER TABLE `after`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
