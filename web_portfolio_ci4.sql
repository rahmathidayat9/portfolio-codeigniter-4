-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 02:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_portfolio_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Echidna', 'echidna', 'echidna@example.com', '$2y$10$eipd/.fuDr6O4UkGBb0dxeR8LQsGqZcskseMZ2FzUxuLPwyDeowsS'),
(4, 'Satella', 'satella', 'satella@example.com', '$2y$10$ik3ByJ1s40fEXJ3wMUh8aO/MXLFoP3LA7P7ai5U584HVtGr7MpkUy'),
(5, 'Pandora', 'pandora', 'pandora@example.com', '$2y$10$nKTyb0pzcSnPPYqv7YIo/uwZ1f6yTT9sIboA6va3cY/aoyZ9zLSMa'),
(6, 'Lalatina', 'lalatina', 'lalatina@gmail.com', '$2y$10$K5QNJqQBPJmWRkFb0jpJVeMKPg9n5sgmkC9DEpgtO4e2twIRLAymG'),
(7, 'Johny', 'johny', 'johny@example.com', '$2y$10$j6cMau5Gi2MBDhjdDXuGyucuUaE7yu/AlYfuNnuixifei7g2BfH1a');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
