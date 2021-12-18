-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 08:20 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `roll no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `parents no` varchar(12) NOT NULL,
  `standard` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll no`, `name`, `city`, `parents no`, `standard`, `image`) VALUES
(8, 9, 'Vinesh', 'Dombivli', '204456657', '10', '3.jpg.jpeg'),
(11, 5, 'Bhavya', 'badalapur', '45878565', '10', '1.jpg.jpeg'),
(13, 3, 'vinesh b', 'Ambernath', '20125466', '10', '2.jpg.jpeg'),
(14, 9, 'sujeet', 'badalapur', '45878565', '10', '3.jpg.jpeg'),
(15, 4, 'Bhavya', 'Mumbai', '22222333', '10', 'Capture.JPG'),
(16, 13, 'rupesh', 'kalyan', '4547878', '10', 'company about.jpg'),
(17, 14, 'ravi', 'kalyan', '7789988', '10', '3.jpg.jpeg'),
(18, 15, 'rani', 'kolhapur', '5665545', '10', '2.jpg.jpeg'),
(19, 16, 'prati', 'SSSS', '5555566', '10', '2.jpg.jpeg'),
(20, 0, 'jggffd', 'hhhhhh', '124578', '10', 'Capture.JPG'),
(21, 17, 'bvcxsdf', 'fgghhhh', '45789652', '10', '2.jpg.jpeg'),
(22, 18, 'ffgghjj', 'gghhjjj', '78965412', '10', 'company about.jpg'),
(23, 19, 'bghtyu', 'mjhgyt', '456987123', '10', 'Capture.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
