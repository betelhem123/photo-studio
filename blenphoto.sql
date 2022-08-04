-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 08:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blenphoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeetbl`
--

CREATE TABLE `employeetbl` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `phoneNo_user` int(11) NOT NULL,
  `adress` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeetbl`
--

INSERT INTO `employeetbl` (`fname`, `lname`, `email_user`, `phoneNo_user`, `adress`, `id`) VALUES
('rahel', '  alemu', 'rahel@gmail.com', 9832837, 'gulele, addis abeba', 3),
('yonatan', '  biruk', 'yoni@yahoo.com', 9875239, 'yeka , addis abeba', 4),
('matiyas', '  wendwosen', 'mati@gmail.com', 97259375, 'gerji, addis abeba', 5),
('fitsum', '  sileshi', 'fitse@yahoo.com', 98646446, 'bole, addis abeba', 6);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `u_fname` varchar(33) NOT NULL,
  `u_lname` varchar(33) NOT NULL,
  `user_email` text NOT NULL,
  `user_phoneNo` int(11) NOT NULL,
  `event_type` varchar(33) NOT NULL,
  `event_time` varchar(55) NOT NULL,
  `user_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `u_fname`, `u_lname`, `user_email`, `user_phoneNo`, `event_type`, `event_time`, `user_message`) VALUES
(1, 'Beruk', 'Berhanu', 'biruk@gmail..com', 0, 'birth day', 'halfday', 'the event will be an outdoor event'),
(2, 'alemitu', ' asefa', 'alemitu@gmail.com', 923456790, 'wedding', 'fullday', 'make it awesome!'),
(3, 'Bruk', ' sada', 'rediet@yahoo.com', 123456789, 'weqwe', 'hourly', 'ill be waiting for your call'),
(4, 'yohannes', ' sileshi', 'yohannes@gmail.com', 91140011, 'wedding', 'hourly', 'it will be a huge event so can you bring alteast 5 cameras?'),
(5, 'betty', ' biruk', '', 96386585, 'casual', 'halfday', ''),
(6, 'Naomi', ' Besufekad', 'naomi@google.com', 91217252, 'sweet 14 birthday', 'nighttime', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(33) NOT NULL,
  `l_name` varchar(33) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `f_name`, `l_name`, `email`, `password`) VALUES
(2, 'Beruk', 'Berhanu', 'Beruk@belen.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Betelhem', 'Biruk', 'Betelem@belen.com', '25d55ad283aa400af464c76d713c07ad'),
(6, 'Nathan', 'Imam', 'nati@belen.com', '25d55ad283aa400af464c76d713c07ad'),
(8, 'Rediet', 'Bekele', 'rediet@belen.com', '25d55ad283aa400af464c76d713c07ad'),
(9, 'Yohannes', 'Sileshi', 'jo@belen.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeetbl`
--
ALTER TABLE `employeetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeetbl`
--
ALTER TABLE `employeetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
