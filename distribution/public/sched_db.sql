-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sched_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `password`) VALUES
('admin', '@admin01'),
('admin', '@admin01'),
('newadmin', 'admin01'),
('newadmin', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yearsec` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(505) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lastname`, `firstname`, `contact`, `course`, `yearsec`, `email`, `password`, `image`) VALUES
(1, 'eduard', 'adadsad', 'dadadadadad', 'Asociated in Computer Technology', 'daddsaasdad', 'edd@gmail.com', '@student2024', 'assets/images/image-removebg-preview (8).png'),
(2, 'eduard000000000000000000000000', 'adadsad', 'dadadadadad', 'Asociated in Computer Technology', 'daddsaasdad', 'edd@gmail.com', '@student2024', 'assets/images/image-removebg-preview (8).png'),
(3, 'Dizon II', 'Eduardo', '09955562132', 'Bachelor of Science Information System', '3b', 'edd@gmail.com', '@student2024', 'assets/images/download (7).jpg'),
(4, 'Dizon III', 'Eduardo', '09955562132', 'Bachelor of Science Information System', '3b', 'edd@gmail.com', '@student2024', 'assets/images/download (7).jpg'),
(5, 'lname', 'ortiz', '12312', 'Asociated in Computer Technology', '3b', 'ortiz@gmail.com', '@student2024', 'assets/images/393988165_1455955934965512_3286181295878036142_n.png'),
(6, 'ortizzznabagpooo', 'bpc', '12312', 'Asociated in Computer Technology', '3b', 'ortiz@gmail.com', '@student2024', 'assets/images/image-removebg-preview (7).png'),
(7, 'neweww', 'new', '2e2e2ee', 'Bachelor of Science Information System', '3d', 'bpc@gmail.com', '@student2024', 'assets/images/The Wolf of Wall Street (1).jpg'),
(8, 'mommmmmm', 'dad', 'dadadsad', 'Asociated in Computer Technology', '4a', 'edd@gmail.com', '@student2024', 'assets/images/image-removebg-preview (4).png'),
(9, 'searchablee na', 'eto', '09955562132', 'Bachelor of Science Information System', '3b', 'bpc@gmail.com', '@student2024', 'assets/images/SHEEEE.png'),
(10, 'dizon II', 'eduardo', '09955562132', 'Bachelor of Science Information System', '3b', 'ortiz@gmail.com', '@student2024', 'assets/images/P5.jpg'),
(11, 'lnew', 'newww', '232242', 'Bachelor of Science Information System', '3b', 'edd@gmail.com', '@student2024', 'assets/images/image-removebg-preview (6).png'),
(12, 'dadadd', 'adadadada', 'dadadadadadadadadsadd', 'Bachelor of Science Information System', 'adasdaddada', 'daddadadadadad@gmail.com', '@student2024', 'assets/images/stonk.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
