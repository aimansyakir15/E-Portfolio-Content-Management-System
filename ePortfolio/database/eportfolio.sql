-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2023 at 09:35 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignmentproject`
--

CREATE TABLE `assignmentproject` (
  `assprojectid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cis`
--

CREATE TABLE `cis` (
  `cisid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cst`
--

CREATE TABLE `cst` (
  `cstid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `examid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mtp`
--

CREATE TABLE `mtp` (
  `mtpid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qst`
--

CREATE TABLE `qst` (
  `qstid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semesterid` int(11) NOT NULL,
  `semesterdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siteidentity`
--

CREATE TABLE `siteidentity` (
  `siteidentityid` int(11) NOT NULL,
  `websitename` varchar(255) NOT NULL,
  `websitedesc` varchar(255) NOT NULL,
  `websitelogo` varchar(255) NOT NULL,
  `websitefavicon` varchar(255) NOT NULL,
  `websitefooter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siteidentity`
--

INSERT INTO `siteidentity` (`siteidentityid`, `websitename`, `websitedesc`, `websitelogo`, `websitefavicon`, `websitefooter`) VALUES
(1, 'Default Name', 'A Website To Visit', 'default.png', 'default.png', 'Welcome To My Website');

-- --------------------------------------------------------

--
-- Table structure for table `sow`
--

CREATE TABLE `sow` (
  `sowid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `subjectcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetableid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `semesterid` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lecturerid` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profilepicture` varchar(255) NOT NULL DEFAULT 'defaultprofilepicture.jpg',
  `usertype` int(11) NOT NULL DEFAULT '0' COMMENT '0 = User,\r\n1 = Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `lecturerid`, `phone`, `password`, `profilepicture`, `usertype`) VALUES
(1, 'admin', 'admin@admin.admin', NULL, '012345678', 'admin', 'defaultprofilepicture.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignmentproject`
--
ALTER TABLE `assignmentproject`
  ADD PRIMARY KEY (`assprojectid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceid`);

--
-- Indexes for table `cis`
--
ALTER TABLE `cis`
  ADD PRIMARY KEY (`cisid`);

--
-- Indexes for table `cst`
--
ALTER TABLE `cst`
  ADD PRIMARY KEY (`cstid`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `mtp`
--
ALTER TABLE `mtp`
  ADD PRIMARY KEY (`mtpid`);

--
-- Indexes for table `qst`
--
ALTER TABLE `qst`
  ADD PRIMARY KEY (`qstid`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semesterid`);

--
-- Indexes for table `siteidentity`
--
ALTER TABLE `siteidentity`
  ADD PRIMARY KEY (`siteidentityid`);

--
-- Indexes for table `sow`
--
ALTER TABLE `sow`
  ADD PRIMARY KEY (`sowid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetableid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignmentproject`
--
ALTER TABLE `assignmentproject`
  MODIFY `assprojectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cis`
--
ALTER TABLE `cis`
  MODIFY `cisid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cst`
--
ALTER TABLE `cst`
  MODIFY `cstid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `examid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtp`
--
ALTER TABLE `mtp`
  MODIFY `mtpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qst`
--
ALTER TABLE `qst`
  MODIFY `qstid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semesterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866402;

--
-- AUTO_INCREMENT for table `siteidentity`
--
ALTER TABLE `siteidentity`
  MODIFY `siteidentityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sow`
--
ALTER TABLE `sow`
  MODIFY `sowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237129;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetableid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=735585;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
