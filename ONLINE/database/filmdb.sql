-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 07:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `film_id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `producer` varchar(20) DEFAULT NULL,
  `theme` varchar(20) DEFAULT NULL,
  `year_of_production` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`film_id`, `title`, `producer`, `theme`, `year_of_production`, `price`) VALUES
(3, 'mandonga', 'najim', 'Drama', '2022-08-21', '670000.00'),
(4, 'through my window', 'bozart', 'Advocacy', '2022-08-21', '4356.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `usertype`) VALUES
(176, 'mlangwa', 'be57b4d3e58071cdfcf02b9e0fb4e9653f43b609', 'mlangwa@gmail.com', 'Client'),
(177, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 'Admin'),
(178, 'najim', '194cc55ef83d62ac1720c8b00113d4c769625ae3', 'najim@gmail.com', 'Employee'),
(180, 'grace', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gracepaul@gmail.com', 'Employee'),
(181, 'manyore', '25e917a72341e00959f55a0312d640ec9842c1e9', 'manyore@gmail.com', 'Client'),
(182, 'Jacob', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'jmihambo@icloud.com', 'Client'),
(187, 'jobo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'jobo@gmail.com', 'Employee'),
(188, 'mduma', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'mduma@gmail.com', 'Employee'),
(193, 'mama', '99df988b77e60a1718e9e6fecdaf22552047be28', 'mama@gmail.com', 'Client'),
(196, 'mamay', '99df988b77e60a1718e9e6fecdaf22552047be28', 'mamay@gmail.com', 'Client'),
(197, 'grace', 'fd1cf5e271fd7c5ffaefb1c95aaf79964e1b2e65', 'grace@gmail.com', 'Employee'),
(198, 'mwab', 'eae7c518efaf59e7e2775eaf159fc5b053ad4d22', 'mwab@gmail.com', 'Client'),
(199, 'ma', '1382244e1784be148fb78b24983c206ebc95928f', 'aj', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
