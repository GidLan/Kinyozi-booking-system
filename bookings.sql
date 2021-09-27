-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 09:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinyozi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `Name` varchar(150) NOT NULL,
  `Phone_number` int(50) NOT NULL,
  `check-in` date NOT NULL,
  `Status` int(50) DEFAULT 0,
  `Barber` varchar(255) DEFAULT NULL,
  `Type-of-shave` text DEFAULT NULL,
  `Payment` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`Name`, `Phone_number`, `check-in`, `Status`, `Barber`, `Type-of-shave`, `Payment`) VALUES
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('zalo', 34567, '2021-09-26', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('zalo', 34567, '2021-09-26', 0, NULL, NULL, NULL),
('zalo', 34567, '2021-09-26', 0, NULL, NULL, NULL),
('zalo', 8796543, '2021-09-22', 0, NULL, NULL, NULL),
('zalo', 8796543, '2021-09-22', 0, NULL, NULL, NULL),
('zalo', 8796543, '2021-09-22', 0, NULL, NULL, NULL),
('zalo', 8796543, '2021-09-22', 0, NULL, NULL, NULL),
('zalo', 76854, '2021-09-26', 0, NULL, NULL, NULL),
('zalo', 76854, '2021-09-26', 0, NULL, NULL, NULL),
('zalo', 76854, '2021-09-26', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-24', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL),
('gideon', 711773897, '2021-09-27', 0, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
