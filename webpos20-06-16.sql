-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 07:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryID` int(11) NOT NULL,
  `countryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryID`, `countryName`) VALUES
(1, 'GHANA'),
(2, 'UNITED KINGDOM');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `personID` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  `hiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `personID`, `jobtitle`, `dateAdded`, `userID`, `hiredDate`) VALUES
(5, 1, 'Managing Director', '2016-06-20 15:35:38', 1, '2016-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `sexid` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`sexid`, `sex`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `jobtitles`
--

CREATE TABLE `jobtitles` (
  `jobtitleID` int(11) NOT NULL,
  `jobtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtitles`
--

INSERT INTO `jobtitles` (`jobtitleID`, `jobtitle`) VALUES
(1, 'Managing Director'),
(2, 'Sales Person');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personID` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`personID`, `title`, `firstName`, `surname`, `othername`, `Gender`, `DOB`, `dateAdded`, `userID`) VALUES
(1, 'Mr', 'Prosper', 'Yeng', '', 'Male', '1991-06-29', '2016-05-29 22:16:06', 1),
(5, 'ms', 'elen', 'yeng', '', 'f', '2008-06-07', '2016-06-12 05:40:43', 1),
(6, 'ms', 'elen', 'yeng', '', 'f', '2008-06-07', '2016-06-12 06:04:42', 1),
(9, 'mr', 'pro', 'yeng', 'kand', 'm', '1977-09-27', '2016-06-12 20:22:21', 1),
(10, 'Mr.', 'Kanda', 'Yeng', '', 'Male', '2016-06-22', '2016-06-17 20:07:25', 1),
(11, 'Mr.', 'Kanda', 'Yeng', '', 'Male', '2016-06-22', '2016-06-17 20:08:24', 1),
(12, 'Mr.', 'Kanda', 'Yeng', '', 'Male', '2016-06-22', '2016-06-17 20:08:39', 1),
(13, 'Choose Tit', 'nn', 'vb', '', 'Choose Gen', '2016-06-18', '2016-06-17 21:36:37', 1),
(14, 'Mr.', 'Pros', 'Yeng', '', 'Male', '2016-06-14', '2016-06-18 04:43:01', 1),
(15, 'Mr.', 'Pros', 'Yeng', '', 'Male', '2016-06-14', '2016-06-18 05:33:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personaddress`
--

CREATE TABLE `personaddress` (
  `addressID` int(11) NOT NULL,
  `personID` int(11) NOT NULL,
  `addressline1` varchar(100) NOT NULL,
  `addressline2` varchar(100) DEFAULT NULL,
  `postBox` varchar(20) NOT NULL,
  `town` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaddress`
--

INSERT INTO `personaddress` (`addressID`, `personID`, `addressline1`, `addressline2`, `postBox`, `town`, `region`, `country`, `userID`) VALUES
(1, 1, 'DRAPE IT SOLUTIONS', '16 JIRAPA TIZZA ROOT', '34', 'JIRAPA', 'UPPER WEST', 'GHANA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personphoto`
--

CREATE TABLE `personphoto` (
  `photoID` int(11) NOT NULL,
  `targetfile` blob NOT NULL,
  `personID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personphoto`
--

INSERT INTO `personphoto` (`photoID`, `targetfile`, `personID`, `userID`) VALUES
(1, 0x68682e6a7067, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `regionID` int(11) NOT NULL,
  `regionName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`regionID`, `regionName`) VALUES
(2, 'BRONG-AHAFO'),
(1, 'UPPER WEST');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `titleID` int(11) NOT NULL,
  `titleName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`titleID`, `titleName`) VALUES
(1, 'Mr.'),
(2, 'Ms.'),
(3, 'Dr.');

-- --------------------------------------------------------

--
-- Table structure for table `webpos_user`
--

CREATE TABLE `webpos_user` (
  `userID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `typeAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `userStatus` tinyint(1) DEFAULT '0',
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpos_user`
--

INSERT INTO `webpos_user` (`userID`, `employeeID`, `userName`, `password`, `typeAdmin`, `userStatus`, `dateAdded`) VALUES
(1, 1, 'maluu', 'pass', 1, 1, '2016-06-20 16:46:08'),
(2, 5, 'kanda', 'pass', 0, 0, '2016-06-20 17:08:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryID`),
  ADD UNIQUE KEY `countryName` (`countryName`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD UNIQUE KEY `personID` (`personID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`sexid`);

--
-- Indexes for table `jobtitles`
--
ALTER TABLE `jobtitles`
  ADD PRIMARY KEY (`jobtitleID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personID`);

--
-- Indexes for table `personaddress`
--
ALTER TABLE `personaddress`
  ADD PRIMARY KEY (`addressID`),
  ADD UNIQUE KEY `personID` (`personID`);

--
-- Indexes for table `personphoto`
--
ALTER TABLE `personphoto`
  ADD PRIMARY KEY (`photoID`),
  ADD UNIQUE KEY `personID` (`personID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regionID`),
  ADD UNIQUE KEY `regionName` (`regionName`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`titleID`);

--
-- Indexes for table `webpos_user`
--
ALTER TABLE `webpos_user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `employeeID` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `sexid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobtitles`
--
ALTER TABLE `jobtitles`
  MODIFY `jobtitleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `personaddress`
--
ALTER TABLE `personaddress`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `personphoto`
--
ALTER TABLE `personphoto`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `regionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `titleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `webpos_user`
--
ALTER TABLE `webpos_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
