-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `aid` int(11) NOT NULL,
  `aname` varchar(256) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `addharno` varchar(12) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `workfrom` date DEFAULT NULL,
  `workstill` varchar(10) DEFAULT NULL,
  `alevel` int(11) NOT NULL DEFAULT 3,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `authoritycomplaint`
--

CREATE TABLE `authoritycomplaint` (
  `aid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `authoritytree`
--

CREATE TABLE `authoritytree` (
  `aid` int(11) NOT NULL,
  `parentaid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `authoritywards`
--

CREATE TABLE `authoritywards` (
  `aid` int(11) NOT NULL,
  `wid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaintdetailstatus`
--

CREATE TABLE `complaintdetailstatus` (
  `alevel` int(11) NOT NULL,
  `cdid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaintnavigation`
--

CREATE TABLE `complaintnavigation` (
  `cdid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `childAid` int(11) DEFAULT NULL,
  `forwardedDate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `cid` int(11) NOT NULL,
  `ctype` varchar(50) DEFAULT NULL,
  `daystocomplete` int(11) NOT NULL DEFAULT 7
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`cid`, `ctype`, `daystocomplete`) VALUES
(1, 'Sanitation', 4),
(2, 'Sanitation', 4),
(3, 'Sanitation', 4),
(4, 'Sanitation', 4),
(5, 'Sanitation', 4),
(6, 'Sanitation', 4),
(7, 'Sanitation', 4),
(8, 'Sanitation', 4),
(9, 'Sanitation', 4),
(10, 'Sanitation', 4);

-- --------------------------------------------------------

--
-- Table structure for table `complaintsdetail`
--

CREATE TABLE `complaintsdetail` (
  `cdid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `details` varchar(256) DEFAULT NULL,
  `registereddate` date NOT NULL,
  `tobeCompleted` int(10) NOT NULL DEFAULT 7,
  `astatus` varchar(20) NOT NULL DEFAULT 'Registered',
  `aDateofUpdate` date DEFAULT NULL,
  `uack` int(10) DEFAULT NULL,
  `ackDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` int(255) DEFAULT NULL,
  `addharno` int(12) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `wid` int(11) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `wardaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`wid`, `ward`, `wardaddress`) VALUES
(1, '6', 'shivam nagar'),
(2, 'Ward 1', 'Rajiv nagar'),
(3, 'Ward 10', 'shivam nagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complaintsdetail`
--
ALTER TABLE `complaintsdetail`
  ADD PRIMARY KEY (`cdid`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaintsdetail`
--
ALTER TABLE `complaintsdetail`
  MODIFY `cdid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
