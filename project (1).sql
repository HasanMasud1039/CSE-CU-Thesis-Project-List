-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2020 at 03:25 PM
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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Serial` int(5) NOT NULL,
  `ID` int(8) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Thesis_or_Project_Title` varchar(200) NOT NULL,
  `Supervisor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Serial`, `ID`, `Student_Name`, `Thesis_or_Project_Title`, `Supervisor`) VALUES
(1, 14701083, 'Sazzadur Rahman', 'N/A', 'MRUF'),
(2, 15701001, 'AA Zubair Choton', 'N/A', 'NS'),
(3, 15701007, 'Nusrat Anne', 'ECG', 'AR'),
(4, 15701010, 'Thoky', 'N/A', 'AHMSH'),
(5, 15701011, 'Tawshin', 'N/A', 'RPDN'),
(6, 15701015, 'AA Noman', 'N/A', 'FIA'),
(7, 15701016, 'Abu Zafar', 'N/A', 'RK'),
(8, 15701021, 'Nazmul Hoque', 'N/A', 'FJ'),
(9, 15701023, 'Ahsan Ullah Rasel', 'Attendence System', 'RM'),
(10, 15701024, 'Md Deder Hossain', 'Leaf Disease Detection', 'OSI'),
(11, 15701027, 'Md Mizanur Rahman', 'Smart Poultry', 'MSC'),
(12, 15701031, 'Mohammad Newaj Jamil', 'Industry Evolution', 'MSH'),
(13, 15701035, 'Azman Amin Zaman', 'Markov Chain', 'MHS'),
(14, 15701037, 'Md Gias Uddin', 'N/A', 'MAA'),
(15, 15701038, 'Shahina Akter', 'N/A', 'NKC'),
(16, 15701039, 'Hasan Masud', 'IoT Based LPG Gas Lickage Detection & Measurement System', 'MSC'),
(17, 15701041, 'Ibrahim Onu', 'N/A', 'ANC'),
(18, 15701052, 'Tagar Chowdhury', 'N/A', 'MKI'),
(19, 15701060, 'Imtiaz Faruk', 'N/A', 'KAZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Serial` (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
