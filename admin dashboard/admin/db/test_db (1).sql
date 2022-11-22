-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 04:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--
CREATE DATABASE IF NOT EXISTS `test_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test_db`;

-- --------------------------------------------------------

--
-- Table structure for table `connect_table`
--

DROP TABLE IF EXISTS `connect_table`;
CREATE TABLE `connect_table` (
  `image_id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `con_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `c_date` date NOT NULL DEFAULT current_timestamp(),
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `category`, `title`, `date`, `description`, `image`, `c_date`, `pdf`) VALUES
(33, 'job in kuwait', 'software engineer', '0000-00-00', '     \r\n            sfrgthyjukh.l zdsgrhtrjyuki. rtrytkulio; eerykn ', '1666587570.', '2022-10-24', NULL),
(36, 'artical', '2019 cricket match', '2022-10-26', '     \r\n            wderthy fergethrytju ewehrjtukyiu fqewrgthry', '1667048272.png', '2022-10-29', NULL),
(39, 'CPD', 'xswecdr', '2022-10-17', '     qwdefwrgnh\r\n            ', '1667050949.', '2022-10-29', 'Session 1-CSCI 21023.pdf'),
(40, 'CPD', '2019 cricket match', '2022-10-23', '     \r\n            wdefregtrhytjuyku ', '1667051645.', '2022-10-29', 'Session 1-CSCI 21023.pdf'),
(41, 'other', '2019 cricket matchs', '2022-10-13', '     \r\n            DWQTW45EY6RUT7IUYLU ', '1667052195.', '2022-10-29', 'Session 1-CSCI 21023.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `message`, `email`, `subject`, `name`, `date`) VALUES
(7, 'hello there whats app?', 'indushan@gmail.com', 'test', 'chamuditha', '2022-10-28'),
(8, 'test test', 'indushangunawardene@gmail.com', 'test', 'indushan chamuditha gunawardene', '2022-10-29'),
(9, 'sadwefrgdthyjukil', 'demo.19001.demo@gmail.com', 'ttttttttttttttt', 'demo demo', '2022-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `multiple-images`
--

DROP TABLE IF EXISTS `multiple-images`;
CREATE TABLE `multiple-images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_createtime` date NOT NULL DEFAULT current_timestamp(),
  `title_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple-images`
--

INSERT INTO `multiple-images` (`image_id`, `image_name`, `image_createtime`, `title_id`) VALUES
(316, 'Screenshot 2021-08-28 at 00-21-01 Tujhe Dekha to Ye Jana Sanam - Piano Notes Chords (DDLJ).png', '2022-10-28', 28),
(317, 'WhatsApp Image 2021-08-27 at 8.58.20 AM.jpeg', '2022-10-28', 28),
(318, 'Xiaomi-Mi-11-Xiaomi-Mi-Phones-Sri-Lanka-SimplyTek-1.jpg', '2022-10-28', 28),
(319, 'Xiaomi-Mi-11-Xiaomi-Mi-Phones-Sri-Lanka-SimplyTek-2.jpg', '2022-10-28', 28),
(320, '1.jpg', '2022-10-29', 30),
(321, '2.jpg', '2022-10-29', 30),
(322, '3.png', '2022-10-29', 30),
(323, '70mai-Dash-Cam-A400-Dash-Cameras-Sri-Lanka-Simplytek-2.jpg', '2022-10-29', 30),
(324, 'Apple-Watch-Series-6.jpg', '2022-10-29', 30),
(325, 'avatar7.png', '2022-10-29', 30),
(326, 'Logo.png', '2022-10-29', 30),
(327, '01 (1).jpg', '2022-10-29', 32),
(328, '1.1.jpg', '2022-10-29', 32),
(329, '1.2.jpg', '2022-10-29', 32),
(330, '1.3.jpg', '2022-10-29', 32),
(331, '1.4.jpg', '2022-10-29', 32),
(332, '02.jpg', '2022-10-29', 32),
(333, '03.jpg', '2022-10-29', 32),
(334, '67B7C68D-5FE3-45D0-8255-84827F0E3E05 (1).jpg', '2022-10-29', 32),
(335, '67B7C68D-5FE3-45D0-8255-84827F0E3E05.jpg', '2022-10-29', 32),
(336, '1404FC39-921C-4EEB-8480-549BC5D1578E.png', '2022-10-29', 32),
(337, '201712_1046_bdgid (1).jpg', '2022-10-29', 32),
(338, '01 (1)-1667048942.jpg', '2022-10-29', 33),
(339, '1-1-1667048942.jpg', '2022-10-29', 33),
(340, '1-2-1667048942.jpg', '2022-10-29', 33),
(341, '1-3-1667048942.jpg', '2022-10-29', 33),
(342, '1-4-1667048942.jpg', '2022-10-29', 33),
(343, '02-1667048942.jpg', '2022-10-29', 33),
(344, '03-1667048942.jpg', '2022-10-29', 33),
(345, '67B7C68D-5FE3-45D0-8255-84827F0E3E05 (1)-1667048942.jpg', '2022-10-29', 33),
(346, '67B7C68D-5FE3-45D0-8255-84827F0E3E05-1667048942.jpg', '2022-10-29', 33),
(347, '1404FC39-921C-4EEB-8480-549BC5D1578E-1667048942.png', '2022-10-29', 33),
(348, 'pexels-mohi-syed-47261.jpg', '2022-10-29', 33);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE `titles` (
  `title_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stitle` varchar(255) DEFAULT NULL,
  `c_img` varchar(255) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`title_id`, `title`, `stitle`, `c_img`, `type`, `date`) VALUES
(32, '2019 cricket matchs', 'upload', 'avatar7.png', 0, NULL),
(33, 'test csr', 'csr csr', 'pexels-mohi-syed-47261.jpg', 1, '2022-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_type`, `password`, `name`, `email`) VALUES
(10, 'tharindu', 'admin', '1234', 'tharindu vinod', 'tharindu@gmail.com'),
(11, 'chamu', 'admin', '1234', 'indushan chamuditha gunawardene', 'gunawar-cs19001@stu.kln.ac.lk'),
(12, 'john', 'user', '2345', 'demo', 'demo.19001.demo@gmail.com'),
(14, 'gggg', 'admin', '1234', 'indushan chamuditha gunawardene', 'indushangunawardene@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connect_table`
--
ALTER TABLE `connect_table`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `title_id` (`title_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `multiple-images`
--
ALTER TABLE `multiple-images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connect_table`
--
ALTER TABLE `connect_table`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `multiple-images`
--
ALTER TABLE `multiple-images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connect_table`
--
ALTER TABLE `connect_table`
  ADD CONSTRAINT `connect_table_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `multiple-images` (`image_id`),
  ADD CONSTRAINT `connect_table_ibfk_2` FOREIGN KEY (`title_id`) REFERENCES `titles` (`title_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
