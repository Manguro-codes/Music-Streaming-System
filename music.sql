-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 05:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `music_name` text NOT NULL,
  `artist` text NOT NULL,
  `genre` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `music_name`, `artist`, `genre`, `file`, `date`, `time`, `email`) VALUES
(3, 'Amaka', '2Baba', 'sfs', '2Baba - Amaka [Official Video] ft. Peruzzi.mp3', '2020-03-17', 22, 'moto@gmail.com'),
(4, 'dsf', 'sdf', 'sfs', '2Baba - Amaka [Official Video] ft. Peruzzi.mp3', '2020-03-17', 22, 'moto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `role` text NOT NULL,
  `id_no` int(10) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role`, `id_no`, `name`, `dob`, `gender`, `phone_no`, `email`, `password`, `date`, `time`, `pic`) VALUES
(6, 'supervisor', 111, 'eliiud ds', '0000-00-00', 'Male', '07324', 'supervisor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-08-31', '10:41:02', ''),
(8, 'police', 55555555, 'Papa', '2019-10-21', 'Male', '0755555555', 'police@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-10-21', '03:59:43', ''),
(9, 'motorist', 4444, 'moto', '2019-10-21', 'Male', '0723', 'moto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-10-21', '04:16:28', ''),
(10, 'motorist', 333333333, '43543', '2222-02-22', 'Male', '07232313', 'shop@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-08', '11:07:00', ''),
(11, 'student', 7675, 'hgtjhgj', '2020-03-16', 'Male', '0765546', 'popo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-03-16', '08:38:23', '55 INCH OLED 1.jpg'),
(12, 'admin', 12, 'student', '2020-03-23', 'Male', '0734543', 'loko@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-04-04', '12:18:27', 'bc4.jpg'),
(13, 'student', 453535, 'gdfdgdg', '4444-04-04', 'Male', '0745453', 'kiki@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-03-23', '01:46:35', ''),
(14, 'student', 543435, 'fdgfddf', '4443-04-04', 'Female', '074353', 'rter@hjg.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '2020-03-23', '01:48:03', '55 INCH OLED 1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
