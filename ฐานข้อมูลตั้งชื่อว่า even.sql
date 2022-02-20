-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 04:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `even`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_db`
--

CREATE TABLE `department_db` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_db`
--

INSERT INTO `department_db` (`dep_id`, `dep_name`) VALUES
(1, 'เทคโนโลยีสารสนเทศ(IT)'),
(2, 'คอมพิวเตอร์ธุระกิจ');

-- --------------------------------------------------------

--
-- Table structure for table `person_user`
--

CREATE TABLE `person_user` (
  `id` int(10) NOT NULL,
  `num_id` varchar(255) NOT NULL,
  `ct_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL,
  `depart_id` int(11) NOT NULL,
  `place_db` varchar(255) NOT NULL,
  `name_place` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `user_level` varchar(255) NOT NULL,
  `CREATE_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person_user`
--

INSERT INTO `person_user` (`id`, `num_id`, `ct_id`, `firstname`, `lastname`, `room_id`, `depart_id`, `place_db`, `name_place`, `dob`, `user_level`, `CREATE_at`) VALUES
(1, '62209010018', '1141101118412', 'thanapong', 'boonnao', 1, 1, '91/1 ข ถ.บรรณาการ จ.ชัยภูมิ', 'เสริมการไฟฟ้า', '2022-02-18', 'user', '2022-02-13 13:30:21'),
(2, '62209010014', '1212341234123', 'กิตติพง', 'ครยก', 2, 2, '55/3 ถ.ห้าแยกโนนไห อ.เมือง ต.ในเมือง จ.ชัยภูมิ', 'นัดดีไซย์', '2022-02-12', 'user', '2022-02-13 13:30:21'),
(3, 'admin', 'admin', 'admin', 'admin', 0, 0, 'admin', 'admin', '2022-02-18', 'admin', '2022-02-13 14:15:45'),
(5, '1', '1', '1', '1', 1, 1, '1', '1', '0000-00-00', 'user', '2022-02-13 20:21:50'),
(6, '62209010019', '1141101118413', 'deewewe', 'cacarrrr', 1, 1, 'asdasdsadsad', 'sadsadsadasd', '1998-12-12', 'user', '2022-02-13 21:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `room_db`
--

CREATE TABLE `room_db` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_db`
--

INSERT INTO `room_db` (`room_id`, `room_name`) VALUES
(1, 'a1'),
(2, 'a2'),
(3, 'b1'),
(4, 'b2'),
(5, 'c1'),
(6, 'c2'),
(7, 'd1'),
(8, 'd2'),
(9, 'e1'),
(10, 'e2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_db`
--
ALTER TABLE `department_db`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `person_user`
--
ALTER TABLE `person_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_db`
--
ALTER TABLE `room_db`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_db`
--
ALTER TABLE `department_db`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `person_user`
--
ALTER TABLE `person_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_db`
--
ALTER TABLE `room_db`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
