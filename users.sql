-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `country`, `phone`, `dob`, `address`) VALUES
(1, 'Laiba Mubeen', 'laibamubeen678@gmail.com', '09875', 'female', 'Pakistan', '032407434317', '0000-00-00', 'qadirabad'),
(2, 'Rida saleem', 'misskizzie31@gmail.com', 'newpassword123', 'female', 'Pakistan', '0345789993', '0000-00-00', 'qadirabad'),
(3, 'Fakhra inayat', 'makhtar2842@gmail.com', '785765', 'female', 'Pakistan', '032407434317', '0000-00-00', 'qadirabad'),
(5, 'attiqa', 'misskizzie31@gmail.com', '3424', 'female', 'Pakistan', '0345789993', '0000-00-00', 'Malvi'),
(6, 'esha', 'makhtar2842@gmail.com', '395794857', 'female', 'USA', '032407434317', '0000-00-00', 'Mandhi'),
(8, 'Asma arooj', 'wewjeh@ekj232', '87857646345', 'female', 'Pakistan', '0345789993', '0000-00-00', 'qadirabad'),
(9, 'areeba', 'misskizzie31@gmail.com', '345345', 'female', 'Pakistan', '0345789993', '0000-00-00', 'murala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
