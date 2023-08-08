-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 06:13 PM
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
(123, 'a1', '2000', 'wew', 'osm'),
(1, 'sketch 1', '1500', 'upload/download.jpg', '1234'),
(2, 'sketch 3', '1500', 'upload/ac3.jpg', 'Osm Looking'),
(6, 'sketch 4', '1500', 'upload/ac3.jpg', 'Looking Good');

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
(1, 'sketch 1', '2000', 'upload/canvas.jpeg', 'good'),
(1, 'sketch 2', '2000', 'upload/canvas5.jpg', 'Good Looking'),
(6, 'sketch 4', '2000', 'upload/canvas4.jpg', 'Good'),
(4, 'sketch 7', '4000', 'upload/canvas2.jpg', 'look osm'),
(4, 'image', '3000', 'upload/canvas.jpeg', 'fabulous work');

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
(1, 'image', '3000', 'upload/n3.jpg', 'good'),
(2, 'sketch 4', '3000', 'upload/n1.jpg', 'good');

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
(1, 'sketch 1', '2000', 'upload/Portrait-Pencil-Sketch-The-Smoking-Woman (1).jpg', 'Osm Detailing'),
(2, 'Eye Sketch', '1500', 'upload/eye.jpg', 'Proper, Real Like eyes'),
(3, 'M. S. Dhoni Sketch', '2000', 'upload/dhoni.jpg', 'plain Sketch'),
(4, 'Eye Sketch 2', '5000', 'upload/eye1.jpg', 'Real Like Eyes '),
(5, 'Pen Sketch', '1000', 'upload/930d5cc3be09a6a9cd824db0265e03db.jpg', 'Looking real'),
(3, 'sanket', '100', 'upload/Portrait-Pencil-Sketch-The-Smoking-Woman (1).jpg', 'osm'),
(6, 'image', '1234', 'upload/dhoni.jpg', 'qwe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
