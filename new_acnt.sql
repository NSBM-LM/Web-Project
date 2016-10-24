-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 06:30 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_acnt`
--

CREATE TABLE `new_acnt` (
  `userName` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `reTypePassword` varchar(30) NOT NULL,
  `eMail` varchar(30) NOT NULL,
  `indexNumber` char(20) NOT NULL,
  `nameInitials` varchar(50) DEFAULT NULL,
  `batch` varchar(4) DEFAULT NULL,
  `faculty` varchar(25) DEFAULT NULL,
  `cityTown` varchar(12) DEFAULT NULL,
  `country` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_acnt`
--

INSERT INTO `new_acnt` (`userName`, `password`, `reTypePassword`, `eMail`, `indexNumber`, `nameInitials`, `batch`, `faculty`, `cityTown`, `country`) VALUES
('udara maduranga', 'lifebuoy', 'lifebuoy', 'udaraml.50@gmail.com', 'bsc-ugc-se-16.1-004', 'K L Udara Maduranga Liyanage', '16.1', 'com', 'colombo', 'LK'),
('bhanuka', 'asdfghjkl', 'asdfghjkl', 'bhanuka@gmail.com', 'bsc-ugc-se-16.1-006', 'K L Udara Madaranga Liyanage', '16.1', 'com', 'piliyandala', 'LK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_acnt`
--
ALTER TABLE `new_acnt`
  ADD PRIMARY KEY (`indexNumber`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `eMail` (`eMail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
