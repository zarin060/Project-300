-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:51 PM
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
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `student_id` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `batch` varchar(20) DEFAULT NULL,
  `exam_type` varchar(20) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `course_code` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `student_id`, `department`, `batch`, `exam_type`, `course_name`, `course_code`, `email`, `phone`) VALUES
(6, 'DADA', '1213', 'cse', '56', 'Supplement', 'sadf ', '123', 'asd@gmail.com', '123-456-7894'),
(7, 'zarin', '1213', 'cse', '56', 'Retake', 'sadf ', '123', 'asd@gmail.com', '123-456-7894'),
(8, 'z', '1', 'c', '5', 'Supplement', 'cn', '123', 'arnobdas000@gmail.com', '`121569876686'),
(9, 'drtge', '1', 'c', '5', 'Retake', 'cn', '123', 'arnobdas0@gmail.com', '`121569876686'),
(10, 'drtge', '1', 'c', '5', 'Retake', 'cn', '123', 'arnobdas0@gmail.com', '`121569876686'),
(11, 'z', '22', 'cse', '56', 'Retake', 'cn', '123', 'zhystgsty@gmail.com', '`121569876686'),
(17, 'rejuwana', '213-115-028', 'CSE', '55', 'Supplement', 'DBMS', '114', 'rejuwana@gmail.com', '016667363692'),
(18, 'h', 'n', 'g', 'g', 'Supplement', 'j', 'j', 'h@ih', 'i'),
(19, 'j', 'k', 'j', 'g', 'Supplement', 'j', 'h', 'j@j', 'g'),
(20, 'j', 'k', 'j', 'g', 'Supplement', 'j', 'h', 'j@j', 'g'),
(21, 'j', 'k', 'j', 'g', 'Supplement', 'j', 'h', 'j@j', 'g'),
(22, 'j', 'k', 'j', 'g', 'Supplement', 'j', 'h', 'j@j', 'g'),
(23, 'zarin', '1213', 'cse', '56', 'Supplement', 'sadf ', '123', 'naskib@gmail.com', '123-456-7891'),
(24, 'DADA', '1213', 'cse', '56', 'Retake', 'sadf ', '123', 'anikabotboti@gmail.com', '123-456-7891'),
(25, 'DADA', '1213', 'cse', '56', 'retake', 'sadf ', '123', 'mahfuz@gmail.com', '01794706371'),
(26, 'DADA', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7894'),
(27, 'DADA', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7823'),
(28, 'DADA', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7823'),
(29, 'DADA', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7823'),
(30, 'DADA', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7823'),
(31, 'zarin', '1213', 'cse', '56', 'Suppliment', 'sadf ', '123', 'asd@gmail.com', '123-456-7894'),
(32, 'DADA', '12134', 'bba', '56', 'Suppliment', 'sadf ', '123', 'naskib@gmail.com', '123-456-7894'),
(33, 'zarin', '1213', 'llb', '56', 'Retake', 'cn', '123', 'naskib@gmail.com', '123-456-7894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
