-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 07:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Hyper Text Markup Language', 1),
(2, 'Hyper Tool Markup Language', 1),
(3, 'Home Tool Markup Language', 1),
(4, 'Hyper Text Making Language', 1),
(5, 'The first div element', 2),
(6, 'All div elements', 2),
(7, 'The last div element', 2),
(8, 'None of the above', 2),
(9, 'The head section', 3),
(10, 'The body section', 3),
(11, 'Both the body section and the head section', 3),
(12, 'none of the above', 3),
(13, 'function myFunction()', 4),
(14, 'function:myFunction()', 4),
(15, 'function=myFunction()', 4),
(16, 'function&&myFunction()', 4),
(17, '.container', 5),
(18, '.container-fixed', 5),
(19, '.container-fluid', 5),
(20, 'none of the above', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'What does HTML stands for? ', 1),
(2, 'Look at the following Selector : $(div). What does it select?', 5),
(3, 'Where is the correct place to insert a Javascript ?', 9),
(4, 'How do you create a function in Javascript ?', 13),
(5, 'Which class provides a responsive fixed width container? ', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'riya', NULL, NULL),
(2, 'riya', 5, 3),
(3, 'riya', 5, 3),
(4, 'riya', 5, 3),
(5, 'riya', 5, 3),
(6, 'riya', 5, 3),
(7, 'riya', 5, 3),
(8, 'riya', 5, 3),
(9, 'riya', 5, 3),
(10, 'riya', 5, 3),
(11, 'ankita', 5, 0),
(12, 'ankita', 5, 0),
(13, 'ankita', 5, 0),
(14, 'ankita', 5, 0),
(15, 'ankita', 5, 0),
(16, 'ankita', 5, 3),
(17, 'ankita', 5, 3),
(18, 'vidya', 5, 4),
(19, 'vidya', 5, 0),
(20, 'vidya', 5, 4),
(21, 'vidya', 5, 0),
(22, 'vidya', 5, 1),
(23, 'vidya', 5, 1),
(24, 'vidya', 5, 1),
(25, 'riya', 5, 5),
(26, 'deepak', 5, 2),
(27, 'deepak', 5, 2),
(28, 'deepak', 5, 2),
(29, 'aftabh4004', 5, 2),
(30, 'riya', 5, 0),
(31, 'aftabh4004', 5, 0),
(32, 'aftabh4004', 5, 0),
(33, 'aftabh4004', 5, 0),
(34, 'aftabh4004', 5, 0),
(35, 'ambika', 5, 1),
(36, 'riya', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
