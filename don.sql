-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2020 at 05:45 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `don`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(12) NOT NULL,
  `name` varchar(88) NOT NULL,
  `user` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL,
  `addr` varchar(88) NOT NULL,
  `mob` int(22) NOT NULL,
  `job` varchar(88) NOT NULL,
  `jobaddr` varchar(88) NOT NULL,
  `type` varchar(22) NOT NULL,
  `count` int(12) NOT NULL,
  `date_reg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `user`, `pass`, `addr`, `mob`, `job`, `jobaddr`, `type`, `count`, `date_reg`) VALUES
(2, 'donor', 'don', '123', 'port', 888, 'ta', 'port', '2', 1, '0000-00-00 00:00:00.000000'),
(3, 'app', 'app', '123', 'port', 78787, 'ta', 'port', '3', 1, '0000-00-00 00:00:00.000000'),
(4, 'admin', 'admin', '123', 'port', 6767, 'ta', 'port', '1', 2, '0000-00-00 00:00:00.000000'),
(5, 'ali', 'app2', '123', 'port', 909090, 'opopop', 'opop', '3', 4, '2020-04-20 07:19:13.240417'),
(6, 'ali', 'don2', '123', 'port', 909090, 'opopop', 'opop', '2', 2, '2020-04-20 07:21:37.589362'),
(7, 'ali', 'don2', '123', 'port', 909090, 'opopop', 'opop', '2', 2, '2020-04-20 07:26:31.549913'),
(8, 'app3', 'app3', '123', 'port', 888, 'opopo', 'llklk', '3', 3, '2020-04-20 18:27:53.192735');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_id` int(22) NOT NULL,
  `id` int(12) NOT NULL,
  `serv_src` varchar(88) NOT NULL,
  `serv_dest` varchar(88) NOT NULL,
  `serv_status` varchar(44) NOT NULL,
  `serv_date` date NOT NULL,
  `serv_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `id`, `serv_src`, `serv_dest`, `serv_status`, `serv_date`, `serv_time`) VALUES
(3, 2, 'aa', 'bb', 'done', '2020-04-20', '03:05:07.132163'),
(4, 3, 'port', 'port', 'ok', '2020-04-22', '01:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serv_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id`) REFERENCES `info` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
