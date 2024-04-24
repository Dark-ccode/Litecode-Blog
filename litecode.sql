-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 01:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litecode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'ukonu', 'georgechuks@gmail.com', '09036343095', '111');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `head` varchar(225) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `file` varchar(225) DEFAULT NULL,
  `postlike` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `head`, `body`, `file`, `postlike`, `time`) VALUES
(1, 'Code Facts', 'The basics of Web development.', 'How to go about web development using modern days technologies', 'img/fullstack.jpg', 161, '2020-11-21 18:42:10'),
(2, 'Code Facts', 'Best language to get started with as a beginner', 'today am going to show you top 5 languages that will speed up you learning speed as a beginner.', 'img/editor.jpg', 18, '2020-11-19 04:40:43'),
(13, 'Code Facts', 'php developer', 'My 5 years journey as a full stack developer , Technologies i had to learn', 'img/php.jpg', 5, '2020-11-19 19:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `tutorialpost`
--

CREATE TABLE `tutorialpost` (
  `tid` int(11) NOT NULL,
  `manualid` int(11) DEFAULT NULL,
  `tcategory` varchar(255) DEFAULT NULL,
  `tutorialname` varchar(255) DEFAULT NULL,
  `thead` varchar(225) DEFAULT NULL,
  `tbody` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorialpost`
--

INSERT INTO `tutorialpost` (`tid`, `manualid`, `tcategory`, `tutorialname`, `thead`, `tbody`) VALUES
(1, 1, 'Tutorial', 'HTML', 'basic of HTML', 'HTML stands for hhypertext markup language\r\n\r\n<h1>This is a code snippet for html</h1>\r\n<img src=\"img/s1.jpg\" class=\"codeimg\">\r\n\r\n<style type=\"text/css\">\r\n  .codeimg{width: 80%;margin-left: 0%;height: 200px;margin-top: 10px;margin-bottom: 10px}  \r\n</style>\r\n'),
(2, 1, 'Tutorial', 'CSS', 'Basics of CSS', 'CSS stands for Cascading style sheet'),
(3, 3, 'Tutorial', 'HTML', 'html tags', 'this tells more about HTML tags'),
(4, 2, 'Tutorial', 'HTML', 'HTML file stucture', 'HTml structure goes like this');

-- --------------------------------------------------------

--
-- Table structure for table `usercomment`
--

CREATE TABLE `usercomment` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `commentid` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercomment`
--

INSERT INTO `usercomment` (`id`, `name`, `email`, `commentid`, `comment`, `time`) VALUES
(1, 'George', 'georgechukwuebuka17@gmail.com', 1, 'This is a very nice piece kudos bro', '2020-11-03 08:40:20'),
(2, 'George', 'georgechukwuebuka17@gmail.com', 1, 'wow can love this article less', '2020-11-03 08:42:03'),
(3, 'peace akachukwu', 'peaceaka@gmail.com', 1, 'wow this is the future of programming ', '2020-11-03 08:44:02'),
(4, 'emy11@gmail.com', 'georgechukwuebuka17@gmail.com', 1, 'etaet', '2020-11-03 09:20:23'),
(5, 'ukonu george', 'georgechukwuebuka17@gmail.com', 1, 'well written sir', '2020-11-04 06:22:06'),
(6, 'amaka', 'ama@gmaill.com', 2, 'sir i really need your personal contact', '2020-11-04 06:23:03'),
(7, 'George', 'kelechi@email.com', 1, 'very nice one', '2020-11-04 07:09:30'),
(8, 'kenneth eke', 'kate@email.com', 1, 'i love this article', '2020-11-04 08:28:51'),
(9, 'king', 'kan@gmail.com', 13, 'wow this is a great article', '2020-11-05 02:18:30'),
(10, 'george', 'georgechukwuebuka17@gmail.com', 1, 'woooooooooooooooooo', '2020-11-05 03:15:19'),
(11, 'michael', 'mjb1@email.com', 1, 'comment', '2020-11-07 06:37:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file` (`file`);

--
-- Indexes for table `tutorialpost`
--
ALTER TABLE `tutorialpost`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `usercomment`
--
ALTER TABLE `usercomment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tutorialpost`
--
ALTER TABLE `tutorialpost`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usercomment`
--
ALTER TABLE `usercomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
