-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 03:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deccanevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `about_artist` varchar(250) NOT NULL,
  `artist_pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_photo` varchar(500) NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `is_public_private` varchar(250) NOT NULL,
  `venue_name` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `about_event` varchar(250) NOT NULL,
  `about_artist` varchar(250) NOT NULL,
  `artist_photo` varchar(250) NOT NULL,
  `terms_conditions` varchar(250) NOT NULL,
  `event_category` varchar(250) NOT NULL,
  `event_sub_category` varchar(250) NOT NULL,
  `ticket_name` varchar(250) NOT NULL,
  `ticket_price` varchar(250) NOT NULL,
  `is_accept` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_photo`, `event_name`, `is_public_private`, `venue_name`, `start_date`, `end_date`, `start_time`, `end_time`, `about_event`, `about_artist`, `artist_photo`, `terms_conditions`, `event_category`, `event_sub_category`, `ticket_name`, `ticket_price`, `is_accept`) VALUES
(1, '', 'cv', '', 'vf', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'fvf', 'vfv', '', 'ccccc', '2', '3', '', '', 1),
(2, '', 'cv', '', 'vf', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'fvf', 'vfv', '', 'ccccc', '2', '3', '', '', 1),
(3, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(4, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(5, '', 'ff', '', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'sd', 'sdd', '', 'czsd', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(6, '', 'ff', '', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'sd', 'sdd', '', 'czsd', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(7, '', 'xsxsa', '', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'zxz', 'zxz', '', 'zxz', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(8, '', 'zcz', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(9, '', 'zx', '', 'Xscape, Colorado Way, Castleford, United Kingdom', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'zxc', 'xc', '', 'ds', '2', '2', '', '', 1),
(10, '', 'sxds', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(11, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyattsville, MD, United States', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(12, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(13, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(14, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyderabad Information Technology Engineering Consultancy City, Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(15, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'DF Block, Kolkata, West Bengal, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(16, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyderabad Information Technology Engineering Consultancy City, Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(17, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyattsville, MD, United States', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', '3', '3', '', '', 0),
(18, 'Deccan Events - Clubs copy (1).jpg', 'sxds', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'knjj', 'kll', '', 'sd', '3', '3', '', '', 0),
(19, 'Deccan Events - Clubs copy (1).jpg', 'asx', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '10:00:00', '10:00:00', 'x', 'fd', '', 'dsf', 'Select Event Category', 'Select Event sub Category', '', '', 0),
(20, 'Deccan Events - Clubs copy (1).jpg', 'asx', 'public', 'Hylam Colony, Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '10:00:00', '10:00:00', 'x', 'fd', '', 'dsf', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(21, 'Deccan Events - Store Page copy.jpg', 'asx', 'public', 'Hydernagar, Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '10:00:00', '10:00:00', 'x', 'fd', '', 'dsf', 'Select Event Category', 'Select Event sub Category', '', '', 1),
(22, 'Deccan Events - Clubs copy (1).jpg', 'sdsdasd', 'public', 'Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '12:00:00', '12:00:00', 'xasd', 'asd', '', 'ds', '2', '1', '', '', 1),
(23, 'Deccan Events - Clubs copy (1).jpg', 'xcx', 'private', 'Hyderbasthi, Hyderabad, Telangana, India', '0000-00-00', '0000-00-00', '10:00:00', '11:00:00', 'dfs', 'zscsfdz', '', 'zsdcfds', '1', '2', '', '', 1),
(24, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '', '', '', '', 0),
(25, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0', '0', '', '', 0),
(26, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '', '', '', '', 0),
(27, '', '', '', '', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', '', '', '', '', '0', '0', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `ticket_name` varchar(250) NOT NULL,
  `ticket_price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
