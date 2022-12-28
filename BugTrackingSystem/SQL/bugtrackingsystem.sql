-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 08:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugtrackingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbug`
--

CREATE TABLE `addbug` (
  `s_no` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `project` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `assign` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `duedate` date NOT NULL,
  `time` char(50) NOT NULL,
  `descriptions` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbug`
--

INSERT INTO `addbug` (`s_no`, `title`, `project`, `type`, `assign`, `status`, `startdate`, `duedate`, `time`, `descriptions`) VALUES
(6, 'Management', 'Student Management System', 'New Functionality', 'Mohd Nasir', 'Solve', '2021-12-31', '2021-12-31', '12 Hours', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `addproject`
--

CREATE TABLE `addproject` (
  `s_no` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `frontend` varchar(100) NOT NULL,
  `backend` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `descriptions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproject`
--

INSERT INTO `addproject` (`s_no`, `title`, `type`, `manager`, `frontend`, `backend`, `client_name`, `descriptions`) VALUES
(11, 'Student Management System', 'Maintenance', 'Arunima Gupta', 'HTML,CSS', 'PHP', 'Nasir', 'End Term\r\n'),
(13, 'Management', 'Web Dev', 'Naushad Zakir', 'HTML', 'PHP', 'Nasir', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `s_no` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `level` char(100) NOT NULL,
  `username` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  `mobile` char(100) NOT NULL,
  `email` char(100) NOT NULL,
  `dob` date NOT NULL,
  `address` char(100) NOT NULL,
  `city` char(100) NOT NULL,
  `state` char(100) NOT NULL,
  `country` char(100) NOT NULL,
  `image` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`s_no`, `name`, `level`, `username`, `password`, `mobile`, `email`, `dob`, `address`, `city`, `state`, `country`, `image`) VALUES
(6, 'Arunima Gupta', 'Expert', 'arunima2002', 'arunima@123', '9756410081', 'arunima@gmail.com', '2003-05-17', 'Graphic ERa', 'Dehradun', 'Uttrakhand', 'India', 'nasir');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `s_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`s_no`, `name`, `email`, `phone`, `address`, `gender`, `message`) VALUES
(1, 'Mohd Nasir', 'mohdnasir4257@gmail.com', 992783616, 'Dehradun', 'Male', 'No'),
(6, 'Arunima Gupta', 'arunima@gmail.com', 967512, 'Dehradun Uttrakhand', 'Female', 'Html Css php and sql'),
(7, 'Naushad Zakir Ansari', 'Naushad@gmail.com', 12345, 'Dehradun Uttrakhand', 'Male', 'DSA With C Language'),
(9, 'Karunesh Gupta', 'Gupta@gmail.com', 2147483647, 'Majra Dehradun Uttrakhand', 'Male', 'I want to purchase this project'),
(10, 'Mohd Nasir', 'nasir@gmail.com', 9927, 'Dehradun', 'Male', 'Nothing'),
(11, 'Ayushman', 'ayushman@gmail.com', 918937736, 'Dehradun', 'Male', 'Issue'),
(12, 'hjfgjfgeh', 'bhdfdj@gmail.com', 2534236, 'ndhv', 'Male', 'bshfh');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `username`, `password`) VALUES
(1, 'Mohd Nasir', 'mohdnasir7078', 'nasir@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbug`
--
ALTER TABLE `addbug`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `addproject`
--
ALTER TABLE `addproject`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbug`
--
ALTER TABLE `addbug`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `addproject`
--
ALTER TABLE `addproject`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
