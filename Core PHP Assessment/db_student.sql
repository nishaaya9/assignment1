-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 05:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `coun_login_mst`
--

CREATE TABLE `coun_login_mst` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coun_login_mst`
--

INSERT INTO `coun_login_mst` (`id`, `username`, `password`) VALUES
(1, 'Admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `facu_login_mst`
--

CREATE TABLE `facu_login_mst` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facu_login_mst`
--

INSERT INTO `facu_login_mst` (`id`, `username`, `password`) VALUES
(1, 'Shradha Khapra', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Aman Dhattarwal', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Harry', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `roll_no` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `fees` int(11) NOT NULL,
  `marks` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `f_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`roll_no`, `first_name`, `last_name`, `contact_number`, `subject`, `fees`, `marks`, `password`, `f_username`) VALUES
(2, 'Ronak', 'Aya', 2147483647, 'Java', 40000, 99, '12345', 'Shradha Khapra'),
(3, 'Mohit', 'Aya', 2147483647, 'Python', 50000, 0, '12345', 'Aman Dhattarwal'),
(4, 'Nisha', 'Aya', 2147483647, 'php', 60000, 100, '12345', 'Harry'),
(6, 'Deni', 'Patel', 2147483647, 'php', 50000, 0, '12345', 'Harry'),
(7, 'Hima', 'Patel', 2147483647, 'php', 40000, 0, '12345', 'Harry'),
(8, 'Khushbu', 'Aya', 2147483647, 'Python', 40000, 0, '12345', 'Aman Dhattarwal'),
(9, 'Krishna', 'Aya', 1478523690, 'Python', 60000, 80, '12345', 'Aman Dhattarwal'),
(10, 'Rence', 'Vithalani', 2147483647, 'Java', 50000, 0, '12345', 'Shradha Khapra'),
(11, 'Taksh', 'Vithalani', 2147483647, 'Java', 50000, 0, '12345', 'Shradha Khapra'),
(12, 'Jeel', 'Modi', 1478936520, 'Python', 30000, 0, '12345', 'Aman Dhattarwal'),
(13, 'Naitik', 'Aya', 2094561230, 'Python', 50000, 0, '12345', 'Aman Dhattarwal'),
(16, 'Avani', 'Aya', 2147483647, 'php', 40000, 0, '12345', 'Harry'),
(18, 'Vanshika', 'Vithalani', 2147483647, 'Java', 50000, 0, '12345', 'Shradha Khapra'),
(19, 'Tanishka', 'Aya', 2147483647, 'Python', 50000, 0, '12345', 'Aman Dhattarwal'),
(20, 'Anushka', 'Sharma', 2147483647, 'Python', 50000, 0, '12345', 'Aman Dhattarwal'),
(21, 'Goldi', 'Singh', 2147483647, 'php', 30000, 0, '12345', 'Harry'),
(22, 'Rahul', 'Vithalani', 2147483647, 'Java', 50000, 0, '12345', 'Shradha Khapra'),
(23, 'Nihar', 'Vithalani', 2147483647, 'Python', 40000, 0, '12345', 'Aman Dhattarwal'),
(24, 'Meera', 'Shah', 2147483647, 'php', 40000, 0, '12345', 'Harry'),
(25, 'Virat', 'Kohli', 2147483647, 'Java', 70000, 99, '12345', 'Shradha Khapra'),
(26, 'Shimpi', 'Singh', 2147483647, 'php', 50000, 0, '12345', 'Harry'),
(27, 'Dhruvi', 'Kanabar', 2147483647, 'Python', 40000, 0, '', ''),
(28, 'Diya', 'Kanabar', 2147483647, 'Python', 40000, 0, '', ''),
(29, 'Shruti', 'Aya', 2147483647, 'Java', 50000, 0, '', ''),
(30, 'Madhav', 'Aya', 2147483647, 'php', 60000, 0, '', ''),
(31, 'Mittal', 'Gohil', 2147483647, 'Python', 80000, 0, '', ''),
(32, 'Mittal', 'Gohil', 2147483647, 'Python', 80000, 0, '', ''),
(33, 'Mittal', 'Gohil', 2147483647, 'Python', 80000, 0, '', ''),
(34, 'Mittal', 'Gohil', 2147483647, 'Python', 80000, 0, '', ''),
(35, 'Mittal', 'Gohil', 2147483647, 'Python', 80000, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coun_login_mst`
--
ALTER TABLE `coun_login_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facu_login_mst`
--
ALTER TABLE `facu_login_mst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coun_login_mst`
--
ALTER TABLE `coun_login_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facu_login_mst`
--
ALTER TABLE `facu_login_mst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `roll_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
