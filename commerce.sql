-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 05:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_account`
--

CREATE TABLE `com_account` (
  `id_data` int(255) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'block/allow',
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'user/admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `com_admin`
--

CREATE TABLE `com_admin` (
  `id_data` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `com_pelanggan`
--

CREATE TABLE `com_pelanggan` (
  `id_data` int(255) NOT NULL,
  `id_akun` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `com_preference`
--

CREATE TABLE `com_preference` (
  `id_data` int(255) NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_ver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_account`
--
ALTER TABLE `com_account`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `com_admin`
--
ALTER TABLE `com_admin`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `com_pelanggan`
--
ALTER TABLE `com_pelanggan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `com_preference`
--
ALTER TABLE `com_preference`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_account`
--
ALTER TABLE `com_account`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_admin`
--
ALTER TABLE `com_admin`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_pelanggan`
--
ALTER TABLE `com_pelanggan`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com_preference`
--
ALTER TABLE `com_preference`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `com_admin`
--
ALTER TABLE `com_admin`
  ADD CONSTRAINT `com_admin_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `com_account` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `com_pelanggan`
--
ALTER TABLE `com_pelanggan`
  ADD CONSTRAINT `com_pelanggan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `com_account` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
