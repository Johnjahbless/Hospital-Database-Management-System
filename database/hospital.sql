-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 10:44 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'johnkolo@gmail.com', '565600');

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE `appt` (
  `ano` int(11) NOT NULL,
  `adoctor` int(11) NOT NULL,
  `apatient` int(11) NOT NULL,
  `atime` time NOT NULL,
  `ashow` varchar(1) NOT NULL DEFAULT 'Y',
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appt`
--

INSERT INTO `appt` (`ano`, `adoctor`, `apatient`, `atime`, `ashow`, `adate`) VALUES
(9, 6, 5, '00:00:00', 'Y', '2017-12-04'),
(10, 1, 5, '00:00:00', 'N', '2017-05-12'),
(11, 4, 7, '00:00:00', 'Y', '2017-12-04'),
(12, 1, 5, '00:00:00', 'Y', '2017-03-06'),
(13, 6, 5, '00:02:45', 'Y', '2017-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `diagno`
--

CREATE TABLE `diagno` (
  `ano` int(11) NOT NULL,
  `adoctor` int(11) NOT NULL,
  `apatient` int(11) NOT NULL,
  `adiagnosis` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Patient diagnosis',
  `adischarge` text NOT NULL COMMENT 'discharge summary',
  `anote` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Discharge, Dead or Alive',
  `adate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ashow` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagno`
--

INSERT INTO `diagno` (`ano`, `adoctor`, `apatient`, `adiagnosis`, `adischarge`, `anote`, `adate`, `ashow`) VALUES
(9, 6, 5, '', '', '', '2017-12-04 08:00:00', 'N'),
(10, 1, 5, '', '', '', '2017-05-12 07:00:00', 'Y'),
(11, 4, 7, '', '', '', '2017-12-04 08:00:00', 'Y'),
(12, 1, 5, '', '', '', '2017-03-06 08:00:00', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE `doct` (
  `dno` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dspec` varchar(30) NOT NULL,
  `dshow` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`dno`, `dname`, `dspec`, `dshow`) VALUES
(1, 'Dr. testing1', 'heart', 'Y'),
(2, 'Dr. Testing2', 'brain', 'Y'),
(3, 'Dr. Testing3', 'Kidneyy', 'Y'),
(4, 'xyzzzz', 'Headee', 'Y'),
(5, 'bbb', 'dljf', 'Y'),
(6, 'ddd', 'cvcvcv', 'Y'),
(7, 'dfadaf', 'dfafdf', 'N'),
(8, 'adfd', 'fdfdfd', 'Y'),
(9, 'john', 'dental', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pno` mediumint(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `paddr` varchar(30) NOT NULL,
  `pcity` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'patient residence city or town',
  `pstate` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'patient residence state',
  `psex` varchar(1) NOT NULL,
  `pphone` bigint(15) NOT NULL COMMENT 'Patient phone Number',
  `pshow` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pno`, `pname`, `paddr`, `pcity`, `pstate`, `psex`, `pphone`, `pshow`) VALUES
(1, 'mr Testing1', 'here is my home', '', '', 'm', 0, 'Y'),
(2, 'mr Testing1', 'i am here', '', '', 'f', 0, 'Y'),
(3, 'abhi', 'Delhi', '', '', 'M', 566788, 'N'),
(4, 'aaaa1', 'Noida1', '', '', 'm', 7039001367, 'Y'),
(5, 'adfdf', 'dfd', '', '', 'f', 0, 'Y'),
(6, 'john', 'mkw', '', '', 'f', 0, 'Y'),
(7, 'mary', 'minna', '', '', 'F', 7039001367, 'Y'),
(8, 'hjkk', 'fdgh', '', '', 'f', 9887666, 'Y'),
(9, 'hhhf', 'ffggg', 'minna', 'bida', 'f', 7039001367, 'N'),
(10, 'mary', 'minna', '', '', 'f', 7039001367, 'Y'),
(11, 'kolo', 'bida', 'bida', 'niger', 'm', 7039001367, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `sno` int(11) NOT NULL,
  `stime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appt`
--
ALTER TABLE `appt`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `diagno`
--
ALTER TABLE `diagno`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `appt`
--
ALTER TABLE `appt`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `diagno`
--
ALTER TABLE `diagno`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `doct`
--
ALTER TABLE `doct`
  MODIFY `dno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pno` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
