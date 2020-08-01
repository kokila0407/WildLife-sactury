-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 06:27 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanc`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `a_id` int(10) NOT NULL,
  `a_sp` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `a_feed` varchar(20) NOT NULL,
  `a_cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`a_id`, `a_sp`, `type`, `a_feed`, `a_cost`) VALUES
(2, 'pegion', 'herbivore', 'seeds', 100),
(3, 'human', 'herbivore', 'non veg', 70),
(4, 'tiger', 'herbivore', 'seeds', 500),
(5, 'panther', 'carnivore', 'flesh', 600),
(6, 'giraffe', 'herbivore', 'nelgiri tree', 700),
(7, 'bear', 'carnivore', 'flesh', 600);

--
-- Triggers `animal`
--
DELIMITER $$
CREATE TRIGGER `feedcost` BEFORE INSERT ON `animal` FOR EACH ROW BEGIN
IF NEW.a_FEED='flesh' THEN
SET NEW.a_cost=600;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin123'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_occ` varchar(20) NOT NULL,
  `s_sal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `s_occ`, `s_sal`) VALUES
(1, 'gunashree', 'security', 15000),
(2, 'bhavani', 'manager', 40000),
(3, 'prabha', 'vet', 10000),
(4, 'sahana', 'manager', 15000),
(6, 'karthik', 'keeper', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `t_id` int(10) NOT NULL,
  `t_fare` int(20) NOT NULL,
  `t_donate` int(20) NOT NULL,
  `t_guide` varchar(20) NOT NULL,
  `g_fare` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`t_id`, `t_fare`, `t_donate`, `t_guide`, `g_fare`) VALUES
(1, 300, 200, 'John', 0),
(2, 300, 200, 'Gordon', 0),
(3, 300, 200, 'John', 0),
(4, 5000, 6000000, 'Joseph', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
