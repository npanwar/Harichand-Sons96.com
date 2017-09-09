-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 11:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tokens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `tokens`) VALUES
(1, 'Wooden_cat', 'W1701');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `email`, `password`) VALUES
('narendra', 'n@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `token`(
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tokens` varchar(255) NOT NULL,
  `Rank` int(11) NOT NULL, 
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `token` (`id`,`category`, `tokens`,`Rank`,`image_name`) VALUES
(1, 'Wooden_cat', 'W1701',10,'img1.jpg'),
(2, 'Glass_cat', 'G1702',12,'img2.jpg'),
(3, 'Glass_cat', 'G1703',11,'img3.jpg'),
(4, 'Wooden_cat', 'W1704',31,'img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `submail`
--

CREATE TABLE `submail` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `seen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submail`
--

INSERT INTO `submail` (`id`, `mail`, `date`, `seen`) VALUES
(1, 'rahul51@gmail.com', 1500051805, 'yes'),
(3, 'mahawar@cat.com', 1500053270, 'yes'),
(4, '4434@kergn.com', 1500053297, 'yes'),
(5, '4434@kergn.com', 1500054514, 'yes'),
(6, 'mahawar@gmail.com', 1500054540, 'yes'),
(10, 'mahawar@cat.com', 1500101131, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submail`
--
ALTER TABLE `submail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `submail`
--
ALTER TABLE `submail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
