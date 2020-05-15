-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2020 at 02:36 PM
-- Server version: 5.7.14-log
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project3`
--

CREATE TABLE `project3` (
  `Serial` int(4) NOT NULL,
  `ID` int(8) NOT NULL,
  `Student_Name` varchar(66) NOT NULL,
  `Thesis_or_Project_Title` varchar(666) NOT NULL,
  `Supervisor` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project3`
--

INSERT INTO `project3` (`Serial`, `ID`, `Student_Name`, `Thesis_or_Project_Title`, `Supervisor`) VALUES
(2, 15701024, 'Md Deder Hossain', 'CV', 'MKI'),
(1, 15701039, 'Hasan Masud', 'Image Processing', 'FJ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project3`
--
ALTER TABLE `project3`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
