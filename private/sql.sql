-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 10, 2021 at 01:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodEx`
--

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
(26, 'HVrBReT0fXCIFqYwpWgmL166WERYKw5ETKcM1PN', '$2y$10$ibnG4fFXQ70y8J/Hb3UwQu17uE6JYwv1IQ96t6oQT7UO.NKVdzG1C', 'y@y.com', '2021-04-10 01:03:03', 'y', 'y', 45678, '4564564567', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
