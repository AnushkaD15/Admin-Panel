-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 11:52 AM
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
  `aname` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `addharno` varchar(12) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `workfrom` date DEFAULT NULL,
  `workstill` varchar(10) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `alevel` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`aid`, `aname`, `phone`, `address`, `addharno`, `designation`, `workfrom`, `workstill`, `password`, `alevel`) VALUES
(1, 'S P Pote', '9755521222', 'RSP nagar', '467916482763', 'Gram sevak', '0000-00-00', 'no', '123', 3),
(2, 'Anushka', '8542479843', 'rk colony', '878796324354', 'gram sevak', '2022-12-05', 'yes', '123', 3),
(3, 'S K Desai', '8937589324', 'kirti nagar', '987476987123', 'member', '0000-00-00', 'yes', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `authoritycomplaint`
--

CREATE TABLE `authoritycomplaint` (
  `aid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authoritycomplaint`
--

INSERT INTO `authoritycomplaint` (`aid`, `cid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `authoritytree`
--

CREATE TABLE `authoritytree` (
  `aid` int(11) NOT NULL,
  `parentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `authoritywards`
--

CREATE TABLE `authoritywards` (
  `aid` int(11) NOT NULL,
  `wid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authoritywards`
--

INSERT INTO `authoritywards` (`aid`, `wid`) VALUES
(1, 1),
(2, 2),
(3, 3);

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
  `ctype` varchar(30) DEFAULT NULL,
  `daystocomplete` int(11) DEFAULT 7
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`cid`, `ctype`, `daystocomplete`) VALUES
(1, 'water', 2),
(2, 'electricity', 2),
(3, 'medical', 4),
(4, 'education', 6);

-- --------------------------------------------------------

--
-- Table structure for table `complaintsdetail`
--

CREATE TABLE `complaintsdetail` (
  `cdid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `registereddate` date DEFAULT NULL,
  `tobeCompleted` int(10) DEFAULT 7,
  `astatus` varchar(20) DEFAULT 'Registered',
  `aDateofUpdate` date DEFAULT NULL,
  `uack` varchar(10) DEFAULT NULL,
  `ackDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintsdetail`
--

INSERT INTO `complaintsdetail` (`cdid`, `uid`, `cid`, `wid`, `details`, `registereddate`, `tobeCompleted`, `astatus`, `aDateofUpdate`, `uack`, `ackDate`) VALUES
(1, 1, 3, 3, 'no doctor available', '2022-12-08', 21, 'Ongoing', '2022-12-15', 'pending', '2022-12-12'),
(2, 4, 2, 2, 'electricity supply stopped', '2022-12-22', 12, 'Registered', '2022-12-22', 'pending', '2022-12-22'),
(3, 1, 4, 3, 'no teacher available', '2022-10-10', 16, 'Complete', '2022-10-20', 'completed', '2022-10-21'),
(4, 1, 4, 3, 'improper benches', '2022-12-20', 2, 'Registered', '2022-12-21', 'pending', '2022-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `addharno` varchar(12) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`uid`, `uname`, `phone`, `address`, `addharno`, `wid`, `password`) VALUES
(1, 'ad', '9758234315', 'RSP nagar', '123456289703', 3, '123'),
(3, 'anu', '9765691015', 'SP nagar', '624796289703', 3, '123'),
(4, 'ahd', '9764491015', 'SP nagar', '654796289703', 3, '123');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `wid` int(10) NOT NULL,
  `ward` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`wid`, `ward`) VALUES
(1, 'Nehru Ward'),
(2, 'Shastri Ward'),
(3, 'RSP Ward'),
(4, 'Street 2'),
(5, 'mg nagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `authoritycomplaint`
--
ALTER TABLE `authoritycomplaint`
  ADD PRIMARY KEY (`aid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `authoritytree`
--
ALTER TABLE `authoritytree`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `authoritywards`
--
ALTER TABLE `authoritywards`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `wid` (`wid`),
  ADD UNIQUE KEY `wid_2` (`wid`);

--
-- Indexes for table `complaintnavigation`
--
ALTER TABLE `complaintnavigation`
  ADD KEY `cdid` (`cdid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `complaintsdetail`
--
ALTER TABLE `complaintsdetail`
  ADD PRIMARY KEY (`cdid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `wid` (`wid`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `wid` (`wid`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`wid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authoritycomplaint`
--
ALTER TABLE `authoritycomplaint`
  ADD CONSTRAINT `authoritycomplaint_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `complaints` (`cid`);

--
-- Constraints for table `authoritywards`
--
ALTER TABLE `authoritywards`
  ADD CONSTRAINT `authoritywards_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `authority` (`aid`),
  ADD CONSTRAINT `authoritywards_ibfk_2` FOREIGN KEY (`wid`) REFERENCES `wards` (`wid`);

--
-- Constraints for table `complaintnavigation`
--
ALTER TABLE `complaintnavigation`
  ADD CONSTRAINT `complaintnavigation_ibfk_1` FOREIGN KEY (`cdid`) REFERENCES `complaintsdetail` (`cdid`),
  ADD CONSTRAINT `complaintnavigation_ibfk_2` FOREIGN KEY (`aid`) REFERENCES `authority` (`aid`);

--
-- Constraints for table `complaintsdetail`
--
ALTER TABLE `complaintsdetail`
  ADD CONSTRAINT `complaintsdetail_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userss` (`uid`),
  ADD CONSTRAINT `complaintsdetail_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `complaints` (`cid`),
  ADD CONSTRAINT `complaintsdetail_ibfk_3` FOREIGN KEY (`wid`) REFERENCES `wards` (`wid`);

--
-- Constraints for table `userss`
--
ALTER TABLE `userss`
  ADD CONSTRAINT `userss_ibfk_1` FOREIGN KEY (`wid`) REFERENCES `wards` (`wid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
