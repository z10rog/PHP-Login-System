-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 15. Okt, 2017 09:14 AM
-- Server-versjon: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_login`
--

CREATE DATABASE IF NOT EXISTS `php_login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `php_login`;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL COMMENT 'brukerid',
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'e-post',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'brukerpassord',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'registreringstidspunkt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='tabell over brukere';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'brukerid';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
