-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 10:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qrup67`
--

-- --------------------------------------------------------

--
-- Table structure for table `isciler`
--

CREATE TABLE `isciler` (
  `id` int(22) UNSIGNED NOT NULL,
  `AdSoyad` varchar(50) NOT NULL,
  `Vezife` varchar(50) NOT NULL,
  `Maas` float(6,2) NOT NULL,
  `av` enum('0','1') NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `qeyd_tarixi` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `isciler`
--

INSERT INTO `isciler` (`id`, `AdSoyad`, `Vezife`, `Maas`, `av`, `email`, `tel`, `qeyd_tarixi`, `status`) VALUES
(2, 'Zarema Nuriyeva', 'Web Developer', 3500.00, '0', 'zarema.nuriyeva2198@gmail.com', '050 864 81 41', '2019-11-20 19:32:56', 1),
(3, 'Fəhmin Şamilli', 'Web Developer', 4000.00, '1', 'fehmin@gmail.com', '055 778 78 78', '2019-11-20 20:17:03', 1),
(4, 'Eynur Nəcəfzadə', 'Web Developer', 2449.00, '1', 'eynur@gmail.com', '055 222 22 25', '2019-11-20 20:17:50', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isciler`
--
ALTER TABLE `isciler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isciler`
--
ALTER TABLE `isciler`
  MODIFY `id` int(22) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
