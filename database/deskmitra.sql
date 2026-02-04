-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2025 at 04:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deskmitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `category` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `application_type` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(80) NOT NULL DEFAULT 'received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `name`, `phone_number`, `email`, `gender`, `date_of_birth`, `category`, `address`, `application_type`, `created_at`, `status`) VALUES
(1, 'test', '7893783937', 'example@gmail.com', 'male', '2004-12-04', 'sc', 'testing ug database connection', 'ug admission', '2025-03-28 13:44:02', 'rejected'),
(2, 'test', '7893783937', 'example@gmail.com', 'male', '2004-12-04', 'sc', 'testing ug database connection', 'ug admission', '2025-03-28 13:44:24', 'completed'),
(3, 'testing ug form', '9874983768', 'testing@gmail.com', 'male', '2005-12-04', 'sc', 'dsfjfbsdusdfhbdsjfnbs', 'ug admission', '2025-03-29 13:06:44', 'under process'),
(4, 'testing rejected', '9876545677', 'reject@gmail.com', 'male', '2005-12-04', 'general', 'vhvkhgy    ', 'ug admission', '2025-03-29 14:18:44', 'under process'),
(5, 'Blaze Dsa', '9988776655', 'blaze@gmail.com', 'male', '2005-09-27', 'general', 'h. no 65/d 3rd lane navelim goa', 'ug admission', '2025-03-30 14:01:21', 'completed'),
(6, 'max', '9828673981', 'qmevin@gmail.com', 'other', '2005-10-10', 'general', 'suraj is gay z', 'ug admission', '2025-04-01 02:37:40', 'under process'),
(7, 'Daniel Fernandes', '6789090909', 'abc@gmail.com', 'other', '2000-02-03', 'general', 'H.No 1065/u, Raia, Goa, India', 'ug admission', '2025-04-01 03:00:16', 'completed'),
(8, 'suraj chavan', '9730606904', 'suraj@gmail.com', 'male', '2006-01-01', 'general', 'Rawanfond Navelim', 'ug admission', '2025-04-01 04:03:53', 'received'),
(9, 'Sheghen Fernandes', '9937846357', 'sheghen@gmail.com', 'male', '2005-12-09', 'general', 'ffneuern hreu f', 'ug admission', '2025-04-01 14:42:32', 'received'),
(10, 'Sheghen Fernandes', '9937846357', 'sheghen@gmail.com', 'male', '2005-12-09', 'general', 'ffneuern hreu f', 'ug admission', '2025-04-01 14:45:39', 'received'),
(11, 'Joshua Crasto', '7788542345', 'joshua@gmail.com', 'male', '2005-07-06', 'general', 'Navelim saoalcete g', 'ug admission', '2025-04-01 14:46:40', 'received'),
(12, 'Sean Dsilva', '6578876576', 'sean@gmail.com', 'male', '2002-02-27', 'general', 'Verna salcete goa', 'ug admission', '2025-04-01 14:51:47', 'received'),
(13, 'Aman Gupta', '8976865798', 'aman@gmail.com', 'male', '1978-11-19', 'general', 'Bora margao', 'ug admission', '2025-04-01 14:53:59', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(80) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `created_at`, `status`) VALUES
(41, 'testing  user reg', 'test@gmail.com', 'fdgfdg444', '2025-03-30 06:14:53', 'verified'),
(42, 'Blaze Dsa', 'blaze@gmail.com', 'Blaze@2020', '2025-03-30 14:00:13', 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `user_contact_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `query` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`user_contact_id`, `name`, `phone_number`, `email`, `subject`, `query`, `timestamp`, `status`) VALUES
(9, 'Test', '9730606904', 'surajchavan4124@gmail.com', 'Testing from mobile', 'This is a demo test from mobile to test website from localhost host through ip address. Hdhhdjdjddbddhddhd', '2025-03-26 13:05:11', 'resolved'),
(10, 'Milroy fernandes', '9876543456', 'milroy@gmail.com', 'bhdsdssfdsjb', 'ngud gdslukfsdbl usdyghsdib sdugifdsbs dutghvbb ucixchvjcxxh  uiydsufd eru fdgrtuebejhgfd fgvfhdfdddf\r\n', '2025-04-01 03:04:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`user_contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `user_contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
