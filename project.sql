-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `value`) VALUES
(1, 'User', 1),
(2, 'Editor', 2),
(3, 'Admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `photo` varchar(255) DEFAULT NULL,
  `suspended` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `role_id`, `photo`, `suspended`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Dell Bailey Sr.', 'okuneva.morton@luettgen.biz', '351.245.5902', '30312 Karine Junction\nAdolphshire, VT 32281', 'password', 3, NULL, 0, '2023-02-05 12:31:11', NULL),
(2, 'Dr. Lillie Gutmann DVM', 'altenwerth.wilfrid@gmail.com', '410-589-3357', '2487 Lavern Trace\nRunolfssonfurt, WA 86361-4064', 'password', 1, NULL, 0, '2023-02-05 12:31:11', NULL),
(3, 'Greyson Littel', 'hamill.hettie@beahan.com', '+1 (630) 598-5307', '5323 Conner Lights\nRaleighmouth, KY 45124', 'password', 1, NULL, 0, '2023-02-05 12:31:11', NULL),
(4, 'Miss Daniella McDermott III', 'matteo.dietrich@mclaughlin.com', '682.873.8460', '476 Parker Run\nEast Davonteport, SC 26146', 'password', 1, NULL, 0, '2023-02-05 12:31:11', NULL),
(5, 'Mr. Joshuah Grant', 'sreilly@hotmail.com', '+12153722102', '66840 Phyllis Dam Apt. 966\nEast Jensen, VT 40298-0993', 'password', 1, NULL, 0, '2023-02-05 12:31:11', NULL),
(6, 'Khunn Satt Ko Ko', 'k@gmail.com', '98743626222', 'Ygn', 'qwer', 1, NULL, 0, '2023-02-05 12:31:42', NULL),
(7, 'Bob', 'b@gmail.com', '09123456789', 'Mdy', '$2y$10$mbDFG5N9sH3Te3pnY57xw.vjar01jBPepD0c.1aTU.304BK8cMva.', 1, NULL, 0, '2023-02-05 12:33:04', NULL),
(8, 'Mary', 'mary@gmail.com', '98743626222', 'YGN', '$2y$10$N0.arM.ik4hlGgNqCzSd2Ot5sxhuObN8D3SRGyLyhUWR5pBcXWy62', 1, NULL, 0, '2023-02-05 12:33:51', NULL),
(9, 'Alice', 'a@gmail.com', '09123456789', 'mgy', '$2y$10$JpB3qL4ehlR3nM3rdpEBouAmHjUW1DyRRg1ELve68QNmvNxUlZrdO', 1, NULL, 0, '2023-02-07 09:57:42', NULL),
(10, 'bobo', 'bobo@gmail.com', '09735462722', 'YGN', '$2y$10$AZ8uLmyyRRl/OVZQCMc14u5dgLh82xMOtHSzzPiowIc2ofyIvCUpO', 3, NULL, 0, '2023-02-17 16:50:07', NULL),
(11, 'Khunn Satt Ko Ko', 'jovany38@yahoo.com', '09735462722', 'MDY', '$2y$10$vNNjTez0dYGi/iWKTcSISOow9c6M6XEmZidA4C89OhgzFyluwHjGK', 1, NULL, 0, '2023-02-21 09:55:15', NULL),
(12, 'Khunn Satt', 'k@gmail.com', '09957397422', 'Yangon', '$2y$10$p00yjsaI5ogEnILu1/4xbuolLRc8fhquZ8MzwB9rBQzpMe7Gjda8.', 1, NULL, 0, '2023-05-26 09:25:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
