-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 04:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadidate`
--

CREATE TABLE `cadidate` (
  `S.no` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Voter_id` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `votes` int(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `S.no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Voter_id` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `votes` int(100) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`S.no`, `Name`, `Voter_id`, `number`, `Email`, `password`, `photo`, `role`, `votes`, `status`) VALUES
(1, 'Goutam', 'ABCD123', 7854219632, 'abc@gmail.com', '123', 'github-logo-1618427178074.jpg', 1, 0, 0),
(2, 'Sujoy Das', 'XYZ155', 7896541230, 'sujoy@gmail.com', '700', 'feludasketch_thumb[1].jpg', 1, 0, 0),
(3, 'Sourav Ghosh', 'ABCD798011', 4569871230, 'sou@gmail.com', '100', 'vector-mail-icon.jpg', 1, 0, 0),
(4, 'Sourav Ghosh', 'ABCD7980', 4569871230, 'sou@gmail.com', '100', 'vector-mail-icon.jpg', 1, 0, 0),
(6, 'Abhijeet', 'ABHI100', 7896541238, 'abhi@gmail.com', '800', '7545eekfne.jpeg', 1, 0, 0),
(7, 'Sunrise', 'SUN345', 7896541238, 'sun@gmail.com', '500', 'Moood😂😐.jpeg', 2, 0, 0),
(8, 'Thunder', 'THUN100', 1020304050, 'thun@gmail.com', '300', 'Find the best global talent_.jpeg', 1, 0, 0),
(9, 'Snowfall', 'SNOW500', 78541296320, 'snow@gmail.com', '321', 'github-logo-1618427178074.jpg', 2, 0, 0),
(10, 'Dip', 'ABCD', 789658421, 'dip@gmai.com', '123', 'vector-mail-icon.jpg', 1, 0, 0),
(11, 'Rinki ', 'RIN100', 7458963214, 'rin@gmail.com', '500', 'FLIMTI.jpeg', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadidate`
--
ALTER TABLE `cadidate`
  ADD PRIMARY KEY (`S.no`),
  ADD UNIQUE KEY `Voter_id` (`Voter_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`S.no`),
  ADD UNIQUE KEY `Voter_id` (`Voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadidate`
--
ALTER TABLE `cadidate`
  MODIFY `S.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
