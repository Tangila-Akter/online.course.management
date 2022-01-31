-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 01:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(50) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(10, 'aa', 'aa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(3, 'sun', '222222', 'www'),
(4, 'Tangila Akter', 'tangilalopa', 'ttt'),
(5, 'sunzo', 'sun@gmail.c', 'sun is good girl'),
(6, 'maruf', 'maruf@gmail', 'hi there'),
(7, 'maruf', 'maruf@gmail', 'hi there'),
(10, 'rich', 'eich@gmail.', 'sss'),
(11, 'rich', 'eich@gmail.', 'sss'),
(12, 'leo', 'eich@gmail.', 'eeee'),
(13, 'leo', 'sun@gmail.c', 'welcome'),
(14, 'leo', 'sun@gmail.c', 'welcome'),
(15, 'how are you', 'eich@gmail.', 'fast'),
(16, 'aa', 'eich@gmail.', 'fast'),
(17, 'Tangila Akter', 'tangilalopa', 'class in morning'),
(2370, '', '', ''),
(2371, '', '', ''),
(2372, '', '', ''),
(2373, '', '', ''),
(2374, '', '', ''),
(2375, '', '', ''),
(2376, '', '', ''),
(2377, '', '', ''),
(2378, '', '', ''),
(2379, '', '', ''),
(2380, '', '', ''),
(2381, '', '', ''),
(2382, '', '', ''),
(2383, '', '', ''),
(2384, '', '', ''),
(2385, '', '', ''),
(2386, '', '', ''),
(2387, '', '', ''),
(2388, '', '', ''),
(2389, '', '', ''),
(2390, '', '', ''),
(2391, '', '', ''),
(2392, '', '', ''),
(2393, '', '', ''),
(2394, '', '', ''),
(2395, '', '', ''),
(2396, '', '', ''),
(2397, '', '', ''),
(2398, '', '', ''),
(2399, '', '', ''),
(2400, '', '', ''),
(2401, '', '', ''),
(2402, '', '', ''),
(2403, '', '', ''),
(2404, '', '', ''),
(2405, '', '', ''),
(2406, '', '', ''),
(2407, '', '', ''),
(2408, '', '', ''),
(2409, '', '', ''),
(2410, '', '', ''),
(2411, '', '', ''),
(2412, '', '', ''),
(2413, '', '', ''),
(2414, '', '', ''),
(2415, '', '', ''),
(2416, '', '', ''),
(2417, '', '', ''),
(2418, '', '', ''),
(2419, '', '', ''),
(2420, '', '', ''),
(2421, '', '', ''),
(2422, '', '', ''),
(2423, '', '', ''),
(2424, '', '', ''),
(2425, '', '', ''),
(2426, '', '', ''),
(2427, '', '', ''),
(2428, '', '', ''),
(2429, '', '', ''),
(2430, '', '', ''),
(2431, '', '', ''),
(2432, '', '', ''),
(2433, '', '', ''),
(2434, '', '', ''),
(2435, '', '', ''),
(2436, '', '', ''),
(2437, '', '', ''),
(2438, '', '', ''),
(2439, '', '', ''),
(2440, '', '', ''),
(2441, '', '', ''),
(2442, '', '', ''),
(2443, '', '', ''),
(2444, '', '', ''),
(2445, '', '', ''),
(2446, '', '', ''),
(2447, '', '', ''),
(2448, '', '', ''),
(2449, '', '', ''),
(2450, '', '', ''),
(2451, '', '', ''),
(2452, '', '', ''),
(2453, '', '', ''),
(2454, '', '', ''),
(2455, '', '', ''),
(2456, '', '', ''),
(2457, '', '', ''),
(2458, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `course` varchar(30) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `price` int(50) NOT NULL,
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `email`, `course`, `batch`, `price`, `user_id`) VALUES
(33, 'tangilalopa2000@gmail.com', 'WordPress', 'Evening', 30, 0),
(34, 'tangilalopa2000@gmail.com', 'PHP', 'Evening', 30, 0),
(54, 'tangilalopa2000@gmail.com', 'CSS3', 'Evening', 3500, NULL),
(56, 'aa@gmail.com', 'CSS3', 'Day', 3500, NULL),
(57, 'aa@gmail.com', 'CSS3', 'Day', 3500, NULL),
(58, 'aa@gmail.com', 'CSS3', 'Day', 3500, NULL),
(59, 'bb@gmail.com', 'WordPress', 'Day', 3500, NULL),
(60, 'bb@gmail.com', 'WordPress', 'Day', 3500, NULL),
(61, 'tangilalopa2000@gmail.com', 'HTML5', 'Day', 3500, NULL),
(62, '', 'HTML5', 'Day', 3500, NULL),
(63, '', 'HTML5', 'Day', 3500, NULL),
(64, '', 'HTML5', 'Day', 3500, NULL),
(65, 'sun@gmail.com', 'PHP', 'Day', 3500, NULL),
(66, 'sun@gmail.com', 'PHP', 'Day', 3500, NULL),
(67, 'sun@gmail.com', 'PHP', 'Day', 3500, NULL),
(68, 'sun@gmail.com', 'PHP', 'Day', 3500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `course` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `course`) VALUES
(1, 'tangila', 'tangilalopa2000@gmail.com', 'www', ''),
(12, 'aa', 'aa@gmail.com', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2459;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
