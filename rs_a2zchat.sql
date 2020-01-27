-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2020 at 10:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_a2zchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `rs_group`
--

CREATE TABLE `rs_group` (
  `gid` int(11) NOT NULL,
  `guid` int(11) NOT NULL,
  `gnum` int(11) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gcreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rs_msg`
--

CREATE TABLE `rs_msg` (
  `mid` int(11) NOT NULL,
  `muid` int(11) NOT NULL,
  `mmsg` varchar(250) NOT NULL,
  `mgnum` int(11) NOT NULL,
  `mcreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rs_group`
--
ALTER TABLE `rs_group`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `rs_msg`
--
ALTER TABLE `rs_msg`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rs_group`
--
ALTER TABLE `rs_group`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rs_msg`
--
ALTER TABLE `rs_msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
