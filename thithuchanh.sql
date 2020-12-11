-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 05:01 PM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuchanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `thithuchanh`
--

CREATE TABLE `thithuchanh` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `amount` int NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thithuchanh`
--

INSERT INTO `thithuchanh` (`id`, `name`, `category`, `price`, `amount`, `date`, `status`) VALUES
(3, 'admin', 'adadasasd', 10000, 3334, '2020-12-23', 'ertw4tertergff'),
(4, 'admin', 'nokia', 123455, 2424, '2020-12-31', 'ertw4tertergff'),
(5, 'tongdung ', 'adadasasd ', 100005454, 3334, '2020-12-22', 'fsfasdfasfsafs ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thithuchanh`
--
ALTER TABLE `thithuchanh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thithuchanh`
--
ALTER TABLE `thithuchanh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
