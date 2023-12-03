-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 09:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(24) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(24) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricno` varchar(12) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `parentno` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `level` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `matricno`, `phoneno`, `parentno`, `gender`, `address`, `department`, `level`, `password`, `date`) VALUES
('46211044526', '', 'aladesuyititilayomi10@gmail.com', 'sen/17/2492', 0, 0, '', '', '', 0, '$2y$10$jIxmVqsu5jlq2nadTBsLXe909OyuaOk8/PipvpkZWXS8tTjgCeRmO', '2023-12-02 15:22:43.596837'),
('7253142668922918834', '', 'aladesuyititilayomi10@gmail.com', 'sen/17/2492', 0, 0, '', '', '', 0, '$2y$10$bfcKzwXHj4WkyLDSR1OqcukbL0eXuj9iYMiurykCvJ82SwmE416qe', '2023-12-02 08:14:48.565599'),
('728658653873467', '', 'aladesuyititilayomi10@gmail.com', 'sen/17/2492', 0, 0, '', '', '', 0, '$2y$10$oeQG9QckASN47q3Z7PBmSuSIPM5pUy3g2nW2BKSwIlBtfvdEsAO0u', '2023-12-02 12:29:58.891264');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
