-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 11:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golf-booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `userId` int(11) NOT NULL,
  `selectedDay` varchar(20) NOT NULL,
  `selectedTeeTime` varchar(20) NOT NULL,
  `selectedPlayer` int(11) NOT NULL,
  `selectedPrice` decimal(10,2) NOT NULL,
  `selectedPaymentMethod` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `title`, `userId`, `selectedDay`, `selectedTeeTime`, `selectedPlayer`, `selectedPrice`, `selectedPaymentMethod`, `created_at`) VALUES
(1, '', 1, 'thursday', '10:00', 2, 1000000.00, 'virtual_account', '2024-05-11 17:29:44'),
(2, 'DAZN shooting range', 1, 'friday', '10:00', 2, 500000.00, 'virtual_account', '2024-05-11 17:31:38'),
(3, 'ASTRO shooting range', 1, 'friday', '16:00', 2, 1000000.00, 'visa', '2024-05-11 17:32:12'),
(4, 'DAZN shooting range', 1, 'wednesday', '10:00', 2, 1000000.00, 'visa', '2024-05-11 17:45:58'),
(5, 'ASTRO shooting range', 1, 'thursday', '10:00', 2, 1000000.00, 'visa', '2024-05-11 17:48:49'),
(6, 'Concordia shooting range', 2, 'tuesday', '08:00', 2, 1000000.00, 'visa', '2024-05-11 17:58:31'),
(7, 'ASTRO shooting range', 2, 'friday', '16:00', 2, 1000000.00, 'visa', '2024-05-12 02:13:29');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `password`) VALUES
(1, 'testing', '089812398219', '$2y$10$I5YKC.GYo5pPLHZNakMBR.4CNvzYEIxQeBxp2iRicotZKqgVO.w.K'),
(2, 'admin', '08982312312', '$2y$10$ngrr9StukXJYXcyXih5BpukhEiLQQMKFXvDPZABLyHRQ5QmkfCt5y'),
(3, 'mamat', '08982139898', '$2y$10$UEbDxaOAbqcaJ5MDBMIZwuhyYkBvs.Bnoxutrk5w2Jk9EG5bV1fN2'),
(4, 'admin2', '0898912312', '$2y$10$OVt4LhRc2Wu4BS8dbrt2/ezvLIfZnjqhyc95mf8VEpOV6wytg8D8u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
