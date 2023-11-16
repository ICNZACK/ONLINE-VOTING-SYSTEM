-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 04:29 PM
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
  `Sno` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Voter_id` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `votes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cadidate`
--

INSERT INTO `cadidate` (`Sno`, `Name`, `Voter_id`, `number`, `Email`, `password`, `photo`, `role`, `votes`) VALUES
(1, 'BOOKS', 'BOOK200', 7896541232, 'books@gmail.com', '300', 'pexels-wallace-chuck-3696663.jpg', 2, 0),
(2, 'SUNRISE', 'SUN500', 78965841260, 'sunrise@gmail.com', '500', 'pexels-pixabay-36744.jpg', 2, 0),
(3, 'FLOWERS', 'FLOWER800', 8981281066, 'flowers@gmail.com', '123', 'pexels-valeria-boltneva-74512.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sno` int(12) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `Sno` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Voter_id` varchar(15) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`Sno`, `Name`, `Voter_id`, `number`, `Email`, `password`, `photo`, `role`, `status`) VALUES
(1, 'Goutam', 'ABCD123', 7854219632, 'abc@gmail.com', '123', 'github-logo-1618427178074.jpg', 1, '0'),
(2, 'Sujoy Das', 'XYZ155', 7896541230, 'sujoy@gmail.com', '700', 'feludasketch_thumb[1].jpg', 1, '0'),
(3, 'Sourav Ghosh', 'ABCD798011', 4569871230, 'sou@gmail.com', '100', 'vector-mail-icon.jpg', 1, '0'),
(4, 'Sourav Ghosh', 'ABCD7980', 4569871230, 'sou@gmail.com', '100', 'vector-mail-icon.jpg', 1, '0'),
(6, 'Abhijeet', 'ABHI100', 7896541238, 'abhi@gmail.com', '800', '7545eekfne.jpeg', 1, '0'),
(8, 'Thunder', 'THUN100', 1020304050, 'thun@gmail.com', '300', 'Find the best global talent_.jpeg', 1, '0'),
(10, 'Dip', 'ABCD', 789658421, 'dip@gmai.com', '123', 'vector-mail-icon.jpg', 1, '0'),
(11, 'Rinki ', 'RIN100', 7458963214, 'rin@gmail.com', '500', 'FLIMTI.jpeg', 1, '0'),
(12, 'Sumon', 'SU100', 337896523, 'S@gmail.com', '200', 'github-logo-1618427178074.jpg', 1, '0'),
(16, 'Sourav Ghosh', 'SOURAV7980', 7980110360, 'sourav@gmail.com', '600', '20230327_130627.jpg', 1, '0'),
(19, 'Sourav', 'SOURAV123', 7980110350, 'sourav123@gmail.com', '123', '20230327_130627.jpg', 1, '0'),
(20, 'Rahul Sharma', 'RAHUL100', 785496321, 'rahul@gmail.com', '100', 'pexels-pixabay-39866.jpg', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadidate`
--
ALTER TABLE `cadidate`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Voter_id` (`Voter_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`Sno`),
  ADD UNIQUE KEY `Voter_id` (`Voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadidate`
--
ALTER TABLE `cadidate`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sno` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
