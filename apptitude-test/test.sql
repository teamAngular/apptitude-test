-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 12:12 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Numerical Reasoning'),
(2, 'Verbal Reasoning'),
(3, 'Cognitive Reasoning'),
(4, 'Situational Judgement');

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choice_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `choice_A` varchar(255) NOT NULL,
  `choice_B` varchar(255) NOT NULL,
  `choice_C` varchar(255) NOT NULL,
  `choice_D` varchar(225) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choice_id`, `question_id`, `choice_A`, `choice_B`, `choice_C`, `choice_D`, `answer`) VALUES
(1, 1, '2', '3', '7', '4', '4'),
(2, 2, '5', '3', '4', '3', '3'),
(3, 3, 'were', 'was', 'is', 'are', 'are'),
(4, 4, 'is', 'was', 'were', 'are', 'are'),
(5, 5, 'books', 'eat', 'read', 'run', 'run'),
(6, 6, 'call the police', 'call an ambulance', 'call a neighbour', 'get first aid', 'get first aid'),
(7, 7, '1/10', '5/20', '2/10', '3/5', '1/10');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `category_id`, `question`) VALUES
(1, 1, 'if 1+1=2 then 2+2=?'),
(2, 1, 'if x+y=5 , where x=2 .find y'),
(3, 2, 'where ---you going'),
(4, 2, 'how many eggs ----- in the basket'),
(5, 4, 'if you see a lion chasing you ? what should you do?'),
(6, 4, 'when you get a cut what should you do'),
(7, 1, 'what is the probability of picking a ball from 10 balls');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `user_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, '', '', '', ''),
(2, 'chel', 'quao', 'chellie', '12august87'),
(3, 'yaw', 'sam', 'chellie', '12august97'),
(4, 'josy', 'ohenewaa', 'josylove', 'qwerty'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, 'Emmanuel', 'Oppong', 'Eoppong', 'oppong'),
(10, 'Emmanuel', 'Oppong', 'Eoppong', ''),
(11, 'Emmanuel', 'Oppong', 'Eoppong', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
