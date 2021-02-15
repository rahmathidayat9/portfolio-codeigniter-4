-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 08:01 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `image`, `name`, `email`, `role`, `phone`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'About Me', 'Im student', '1613360545_b3ac88401148c3b8a494.jpg', 'darus', 'darus@example.com', 'student', '0868784734', '1', NULL, NULL),
(4, 'About Me', 'Im is stident of smk ypc', '1613360830_f54f710ee00a4ac879e9.png', 'Admin', 'echidna@gmail.com', 'witch', '085763764734', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `description`, `address`, `phone`, `email`, `copyright`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'GET IN TOUCH', 'Iam a Student Of SMK ', 'JL Lugnica', '08358485678', 'echidna@example.com', 'Rahmat Hidayat', NULL, '2021-01-16 18:58:04', '2021-01-17 00:31:27'),
(2, 'GET IN TOUCH', 'Lorem Ipsum Dolor Set', 'jl macedonia', '0198743875', 'echidna@example.com', 'Rahmat Hidayatullah', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navbar_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `down_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `navbar_title`, `up_text`, `down_text`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 'My Website', 'My Website', 'I\'M Chitanda Eru', 'I\'m a Student,watashi pengen diremas :v', '1613244964_d472b70bc8efd1454677.jpg', NULL, NULL, NULL),
(12, 'MYPORTFOLIO', 'MYPORTFOLIO', 'I\'M Rahmat Hidyatullah', 'I\'m a Student,Game Player', '1613301513_0cbfc81e915285242b49.jpg', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT curtime(),
  `updated_at` timestamp NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'My Website', 'Web Aplikasi', '1613364281_1698755683f740cc40ee.png', '2021-02-15 04:44:41', '2021-02-15 04:44:41'),
(5, 'Laravel 8 Portfolio', 'Web aplikasi portfolio laravel 8', '1613364321_932e9f9496cd21b596c2.png', '2021-02-15 04:45:21', '2021-02-15 04:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'HTML', '2021-01-16 20:57:50', '2021-01-16 20:57:50'),
(5, 'JS', '2021-01-16 20:58:47', '2021-01-16 20:59:10'),
(6, 'PHP', '2021-01-16 20:58:47', '2021-01-16 20:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Echidna', 'echidna', 'echidna@example.com', '$2y$10$eipd/.fuDr6O4UkGBb0dxeR8LQsGqZcskseMZ2FzUxuLPwyDeowsS'),
(2, 'Pandora', 'pandora', 'pandora@example.com', '$2y$10$eipd/.fuDr6O4UkGBb0dxeR8LQsGqZcskseMZ2FzUxuLPwyDeowsS'),
(3, 'Satella', 'satella', 'satella@example.com', '$2y$10$wNPCLNxLNpyXVk0lzWO8WuY.CQd8GXPCucuWLYTodH/3EV6ugA2E.'),
(4, 'Johny', 'johny', 'johny@example.com', '$2y$10$9G1SmGlWJ0qCpUaQKZh/feK66y2/Q6Hne0XzXMwbY.My0LE3WKl7u'),
(5, 'Mapple', 'mapple', 'mapple@example.com', '$2y$10$.Xe.E4pfSrTnSaUD7yoxhOG49obZ4Frgj3PvHKQDedI./n/F2YvSe'),
(6, 'Benigno', 'benigno', 'benigno', '$2y$10$iPUajce6pg7eBAdCnZCBK.GiQiIDA9AbJ6V5wFrAAfVZgHGOOzaii'),
(7, 'Yuuna', 'yuuna', 'yuuna@example.com', '$2y$10$hnkySskW6q6NVCpQJ8wQC.VyaVlVd8rDm/4mar1k8TFjKpN61Va2S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
