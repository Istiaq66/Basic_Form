-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 07:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stama`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `university` varchar(255) NOT NULL,
  `subj` varchar(255) NOT NULL,
  `semster` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `device` varchar(10) NOT NULL,
  `Gproject` varchar(10) NOT NULL,
  `classtime` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `rnd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Fname`, `Lname`, `gender`, `university`, `subj`, `semster`, `phone`, `package`, `device`, `Gproject`, `classtime`, `project`, `rnd`) VALUES
(14, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - B , (Android+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Learning & Earning,Freelancer to Entrepreneur', 'Robotics'),
(15, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - B , (Android+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Apps Monetization, Management and Marketing', 'Robotics'),
(16, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - A,(Android+Flutter+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'LICT (Android,java,web),Mobile Apps & Games', 'BlockChain,Robotics'),
(17, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - A,(Android+Flutter+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'LICT (Android,java,web),Mobile Apps & Games', 'BlockChain,Robotics'),
(18, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - A,(Android+Flutter+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Learning & Earning', 'Machine Learning'),
(19, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - A,(Android+Flutter+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Learning & Earning', 'Machine Learning'),
(20, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', '', '', '', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'LICT (Android,java,web)', 'IoT'),
(21, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', '', '', '', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'LICT (Android,java,web)', 'IoT'),
(22, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', '', '', '', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'LICT (Android,java,web)', 'IoT'),
(23, 'Istiaq', 'Ahmed', '', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - B , (Android+Monetization) Visit link to know details', 'No', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Mobile Apps & Games,Apps Monetization, Management and Marketing', 'IoT,Mobile Apps'),
(24, 'Istiaq', 'Ahmed', 'Male', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - B , (Android+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'Apps Monetization, Management and Marketing', 'BlockChain,Robotics'),
(25, 'Istiaq', 'Ahmed', 'Female', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', 'Package - B , (Android+Monetization) Visit link to know details', 'Yes', 'Yes', 'Saturday 10 AM -1PM,Saturday 10 AM -1PM', 'UI/UX', 'Machine Learning'),
(26, 'Istiaq', 'Ahmed', 'Male', 'IIUC', 'CSE', '3rd Year & 6th semster', '+8801879237935', '', 'Yes', 'Yes', 'Saturday 10 AM -1PM', 'Freelancer to Entrepreneur', 'Mobile Apps');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
