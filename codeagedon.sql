-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 09:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeagedon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `user`, `password`) VALUES
(1, 'codeagedon', 'codeagedon', 'code@123');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sno` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sno`, `ques`, `ans`, `number`) VALUES
(18, 'hvhgfc \n fb chdcb dhcb 0dvbjfbvfjbvfjb vfbvfbvfbvf hbvfbvfsh bvfdhbv fhdvb', 'tttt', 2),
(20, 'vgvgvg', 'qqqq', 1),
(23, 'hfbhfbvhf', 'oooo', 5),
(24, 'gvgvdge', 'wwww', 3),
(26, 'fffcfc', 'yyyy', 4),
(27, 'dxfcgvhbjnk', '123', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `zealid` varchar(30) NOT NULL,
  `number` int(255) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `password`, `zealid`, `number`, `datetime`) VALUES
(16, 'ishika', 'e@gmail.com', '$2y$10$CKcUw315ZF3B1K25BCldjeIMmG3P.ca51RnRJpsrYHFgNCFy4AqEW', 'dr34', 3, 'March 12, 2018 05:39:31'),
(17, 'aditi', 'a@gmail.com', '$2y$10$j9oceqA3LyjR75Gty1lpJ.JlXrPt6ri87ri4.cgcy.0QZ9QcxxWOO', '345', 4, 'March 12, 2018 05:43:42'),
(18, 'rachit', 'rachit@gmail.com', '$2y$10$GqqtI.fSouyuMgEnw9msz.TvDJoS0DJz2ZA2l3HiWoktsr2BvGaHO', 'gh5', 3, 'March 12, 2018 05:44:31'),
(19, 'divya', 'divya@gmail.com', '$2y$10$pGZ9AgeXEUxMgG4C54wwDu18ohrawrEJsAoxe6QGh.SfBQuTENca6', '345', 5, 'March 12, 2018 05:51:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
