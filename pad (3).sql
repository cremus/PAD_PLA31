-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 18, 2018 at 12:26 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pad`
--
CREATE DATABASE IF NOT EXISTS `pad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pad`;

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `sensorId` int(20) NOT NULL,
  `sensorCoord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`sensorId`, `sensorCoord`) VALUES
(1, '4.907,52.366');

-- --------------------------------------------------------

--
-- Table structure for table `sensorintel`
--

CREATE TABLE `sensorintel` (
  `id` int(20) NOT NULL,
  `decibel` int(20) NOT NULL,
  `timeTaken` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `sensorId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensorintel`
--

INSERT INTO `sensorintel` (`id`, `decibel`, `timeTaken`, `sensorId`) VALUES
(3, 45, '2018-03-17 23:51:26.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` int(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `create_time`) VALUES
(2, 'dominiks316@gmail.com', '$2a$10$yo3Q.sNBEtvwwSwIkB1VXezflSVxx1a5pabXIu8uRA01t/.gtYl4e', '2018-03-10 01:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`sensorId`);

--
-- Indexes for table `sensorintel`
--
ALTER TABLE `sensorintel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sensorId` (`sensorId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `sensorId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sensorintel`
--
ALTER TABLE `sensorintel`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `username` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sensorintel`
--
ALTER TABLE `sensorintel`
  ADD CONSTRAINT `sensorId` FOREIGN KEY (`sensorId`) REFERENCES `sensor` (`sensorId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
