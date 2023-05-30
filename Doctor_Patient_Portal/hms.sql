-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 11:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_registration`
--

CREATE TABLE `d_registration` (
  `d_fname` varchar(40) NOT NULL,
  `d_lname` varchar(50) NOT NULL,
  `d_ID` int(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_designtation` varchar(50) NOT NULL,
  `d_phone` int(30) NOT NULL,
  `d_salary` int(30) NOT NULL,
  `d_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `d_registration`
--

INSERT INTO `d_registration` (`d_fname`, `d_lname`, `d_ID`, `d_email`, `d_designtation`, `d_phone`, `d_salary`, `d_gender`) VALUES
('Raiyan', 'Araf', 1, 'raiyan@gmail.com', 'Dentist', 2147483647, 50000, 'male'),
('Irin Asha', 'Sultana', 2, 'Irin@gmail.com', 'Cardiology', 2147483647, 300000, 'female'),
('Razi', 'Rahman', 3, 'razi@gmail.com', 'Anesthesiologist', 2147483647, 200000, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ID` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `ID`, `email`, `address`, `phone`, `pass`, `gender`) VALUES
('raiyan', 'araf', 1, 'raiyan@gmail.com', 'malibagh', 123456789, 'raiyan123', 'male'),
('Razi', 'Rahman', 2, 'razi@gmail.com', 'Satkhira', 1234253545, 'razi123', 'male'),
('rashni', 'rs', 1234, 'rashni@gmail.com', '213malibagh', 124000154, '12345678', 'female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
