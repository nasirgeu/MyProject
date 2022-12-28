-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 06:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `contactnumber` int(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `query` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contactnumber`, `address`, `subject`, `gender`, `occupation`, `query`) VALUES
('Mohd Nasir', 'mohdnasir4257@gmail.', 2147483647, 'Dehradun', 'Course Registration related Issue', 'Male', 'Student', 'Course Registration related Issue');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `pass`) VALUES
('Mohd Nasir', 'nasir@gmail.com', '123'),
('Nauzhad', 'naushad@gmail.com', '123'),
('Nauzhad1', 'naushad@gmail.com', '123'),
('Ayushman Joshi', 'ayushman@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `contactnumber` int(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `brach` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `contactnumber`, `gender`, `occupation`, `emailid`, `brach`, `course`, `dob`, `address`) VALUES
('Mohd Nasir', 2147483647, 'Male', 'Student', 'mohdnasir4257@gmail.', 'CSE', 'DataScienc', '2022-12-01', 'Dehradun'),
('Ayusman Joshi', 1234567891, 'Male', 'Student', 'ayushman@gmail.com', 'CSE', 'DataScienc', '2022-12-31', 'Dehradun');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
