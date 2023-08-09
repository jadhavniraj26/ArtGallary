-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 07:45 PM
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
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `acrylic`
--

CREATE TABLE `acrylic` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `feature` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acrylic`
--

INSERT INTO `acrylic` (`id`, `name`, `price`, `photo`, `feature`) VALUES
(1, 'Sketch 1', '2000', 'upload/ac1.jpg', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `canvas`
--

CREATE TABLE `canvas` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `feature` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `canvas`
--

INSERT INTO `canvas` (`id`, `name`, `price`, `photo`, `feature`) VALUES
(4, 'sketch 4', '2000', 'upload/canvas3.jpg', 'Nice and good');

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `feature` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`id`, `name`, `price`, `photo`, `feature`) VALUES
(0, 'sketch 2', '2300', 'upload/n2.jpg', 'looks Good');

-- --------------------------------------------------------

--
-- Table structure for table `pencil`
--

CREATE TABLE `pencil` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `feature` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pencil`
--

INSERT INTO `pencil` (`id`, `name`, `price`, `photo`, `feature`) VALUES
(1, 'M.S. Dhoni Sketch', '2000', 'upload/dhoni.jpg', 'Looking Osm'),
(2, 'Sketch 2', '1500', 'upload/eye1.jpg', 'Eye Sketch , Look like a real...'),
(3, 'Sketch 3', '1000', 'upload/930d5cc3be09a6a9cd824db0265e03db.jpg', 'Looking Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acrylic`
--
ALTER TABLE `acrylic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canvas`
--
ALTER TABLE `canvas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pencil`
--
ALTER TABLE `pencil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acrylic`
--
ALTER TABLE `acrylic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `canvas`
--
ALTER TABLE `canvas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pencil`
--
ALTER TABLE `pencil`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
