-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2015 at 02:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `_forms`
--

CREATE TABLE IF NOT EXISTS `_forms` (
`form_id` int(11) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_description` text,
  `form_schema_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_schema`
--

CREATE TABLE IF NOT EXISTS `_schema` (
`field_id` int(11) NOT NULL,
  `field_title` varchar(255) DEFAULT NULL,
  `field_schema_title` varchar(255) DEFAULT NULL,
  `field_hint` varchar(255) DEFAULT NULL,
  `field_type` varchar(255) DEFAULT NULL,
  `field_extra` text,
  `field_required` tinyint(1) DEFAULT NULL,
  `form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_forms`
--
ALTER TABLE `_forms`
 ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `_schema`
--
ALTER TABLE `_schema`
 ADD PRIMARY KEY (`field_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_forms`
--
ALTER TABLE `_forms`
MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_schema`
--
ALTER TABLE `_schema`
MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
