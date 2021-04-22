-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2021 at 02:06 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodEx`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `foodbank` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `foodbank`, `address`, `status`) VALUES
(1, 'Food Distribution Center \r\nSemoran Food Pantry', '1771 N Semoran Blvd, \r\nOrlando, FL 32807', 'In Review');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `foodbank` varchar(255) NOT NULL,
  `day` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `foodbank`, `day`, `time`, `address`) VALUES
(2, 'Knights Helping Knights Pantry', 'Monday, June 22', '12:00PM', '4133 Pyxis Ln, Orlando, FL 32816');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `logo_url` text,
  `banner_url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Holds database for banks basic information';

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `address`, `city`, `state`, `zipcode`, `phone`, `logo_url`, `banner_url`) VALUES
(1, 'Knights Helping Knights Pantry', '4133 Pyxis Ln', 'Orlando', 'FL', 32816, '407-823-3663', 'https://media-exp1.licdn.com/dms/image/C510BAQHlfm7KULdsBw/company-logo_200_200/0/1519889798320?e=2159024400&v=beta&t=TJS-PtLIAtwNCAA8Y799ggeWacedLqqhnWOXoWnFrrE', 'https://pbs.twimg.com/profile_images/1510198702/Logo_2.png'),
(2, 'Seeds of Paradise Food Pantry', '1460 N Goldenrod Rd\r\n', 'Orlando', 'FL', 32807, '(407) 250-5822', 'https://pbs.twimg.com/profile_images/2924896269/3219fad95ba574ed71330b3f2503ca4a.jpeg', 'https://iscf.org/wp-content/uploads/2017/04/ISCF-Logo-Hoz-768x269.pn'),
(3, 'Food Distribution Center - Semoran Food Pantry', '1771 N Semoran Blvd', 'Orlando', 'FL', 32807, '(407) 658-1818', 'https://pbs.twimg.com/profile_images/1326276919231393794/UTJ1kGRS_400x400.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `bank_id` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `times` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`bank_id`, `day`, `times`) VALUES
(1, 'Monday', '10:00AM - 11:00PM'),
(2, 'Thursday', '1:00PM - 5:00PM'),
(3, 'Friday', '3:00PM - 9:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `bank_id` int(11) NOT NULL COMMENT 'ID of the bank',
  `day` varchar(11) NOT NULL,
  `opens` time NOT NULL,
  `closes` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='The schedules for the banks';

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`bank_id`, `day`, `opens`, `closes`) VALUES
(1, 'Friday', '10:00:00', '17:00:00'),
(1, 'Monday', '10:00:00', '17:00:00'),
(1, 'Thursday', '10:00:00', '17:00:00'),
(1, 'Tuesday', '10:00:00', '17:00:00'),
(1, 'Wednesday', '10:00:00', '17:00:00'),
(2, 'Friday', '11:00:00', '15:00:00'),
(2, 'Monday', '11:00:00', '15:00:00'),
(2, 'Thursday', '11:00:00', '15:00:00'),
(2, 'Tuesday', '11:00:00', '15:00:00'),
(2, 'Wednesday', '11:00:00', '15:00:00'),
(3, 'Friday', '08:30:00', '12:30:00'),
(3, 'Monday', '08:30:00', '12:30:00'),
(3, 'Thursday', '08:30:00', '12:30:00'),
(3, 'Tuesday', '08:30:00', '12:30:00'),
(3, 'Wednesday', '08:30:00', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(95) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `password`, `email`, `created_at`, `first_name`, `last_name`, `zipcode`, `phone`, `address`, `city`, `state`) VALUES
(17, '1231231', 'josh', 'josh@josh.com', '2021-04-22 23:32:44', 'josh', 'josh', 32145, '1233332312', '123 hek dr', 'lake', 'FL'),
(18, '123', 'chose', 'a@f.com', '2021-04-22 23:32:44', 'qwen', 'jon', 12345, '1231231234', NULL, NULL, NULL),
(19, 'NtL5Z', '$2y$10$m2HGW1EhCDJj0RGa94cEjuPnx9iV83cRZH5ilY3XL54non4gQVv.u', 'matt@matt.com', '2021-04-09 23:47:21', 'matt', 'diorio', 12345, '1231231234', NULL, NULL, NULL),
(20, 'VBzcBYsHFXoE8f4oYMK68BvCZCGR7CeYMvXLbERrK2d4RsijR1Yaf', '$2y$10$fLsCkDxUcxdJ2BceCTze1elZ1vSUQRLE6etTtWVDBQO9Foe.IhDAq', 'kyle@kyle.com', '2021-04-10 00:52:51', 'kyle', 'ma', 32145, '1231231234', NULL, NULL, NULL),
(21, '3U9WzyrzH974r9Fd8gkkqrV', '$2y$10$naQ1ia8iq.F0xo2f44zPE.Xp4xTMthhCvYeUaDEASDOVHL7R3Ir8G', 'mat@s.com', '2021-04-10 00:53:50', 'matt', 'ss', 32145, '1231231234', NULL, NULL, NULL),
(22, '8o1xMwDSYvoa1PsFxqt9L2QpYMXEwkFFQRDFgMQ7qzK8gM9CmPL', '$2y$10$xiy71U/wryWFX.pykAR39u/Gc8pRbs8u7lHb67BZId3iwI4J/k58C', 's@s.com', '2021-04-10 00:56:28', 'yjang', 'wynter', 12333, '1231231234', NULL, NULL, NULL),
(23, 'OcXS', '$2y$10$OQnaTBG8lS4eiOPwSLy9ve039ZcTx2V3J0jbdahs3lJNgXFyuafx.', 'j@j.com', '2021-04-10 00:57:20', 'yjon', 'j', 32222, '1231231234', NULL, NULL, NULL),
(24, 'X736H3uJWamyb3RvwvkvX', '$2y$10$qP4EVxm3xYO.H9/dwCNRnu3v5bN3uL/hHR1LxddxbVOUN0wpqSd.W', 'a@a.com', '2021-04-10 00:58:21', 'a', 'a', 12345, '1231231233', NULL, NULL, NULL),
(25, 't8CYKF4qltzpSchsZy7VehkgpkgZwJd7FXAhrrlPw4Tfs5nm9xxJCxZJSshv', '$2y$10$bnlqOmvQwZcAe23rWqiP8OaCVzBYXaFtm2QAQr8l7.Hk01lUATKtC', 'f@f.com', '2021-04-10 00:59:06', 'f', 'f', 12345, '1231231234', NULL, NULL, NULL),
(26, 'HVrBReT0fXCIFqYwpWgmL166WERYKw5ETKcM1PN', '$2y$10$ibnG4fFXQ70y8J/Hb3UwQu17uE6JYwv1IQ96t6oQT7UO.NKVdzG1C', 'y@y.com', '2021-04-10 01:03:03', 'y', 'y', 45678, '4564564567', NULL, NULL, NULL),
(27, 'QYDpdRCcXA', '$2y$10$kkPXFYXSBjSPVudmpjncfuOxwGEGcE4XFWMU.ENaSGgfYSTqDj5iC', 'yjang@yjang.com', '2021-04-22 00:34:07', 'Matt', 'Matt', 12333, '1231231233', NULL, NULL, NULL),
(28, 'neKZM6BdHCVhWHr40TQe9T', '$2y$10$drHr3hGZN.vXpuG6YMSfLOQALdApGX2s3EehcUpaDJyN4QQ4FYl3.', 'dan@dan.com', '2021-04-22 00:58:40', 'dan', 'dan', 12345, '1231231234', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD UNIQUE KEY `bank_id` (`bank_id`,`day`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `email` (`email`),
  ADD KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `fk_bank_id` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`);
