-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 05:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbtutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 0, 'john'),
(2, 1, 0, 'harry'),
(3, 1, 0, 'nick'),
(4, 1, 1, 'fury'),
(5, 2, 0, 'one'),
(6, 2, 0, 'second'),
(7, 2, 0, 'third'),
(8, 2, 1, 'four'),
(9, 3, 0, 'one'),
(10, 3, 0, 'second'),
(11, 3, 0, 'third'),
(12, 3, 1, 'four'),
(13, 4, 0, '11'),
(14, 4, 1, '12'),
(15, 4, 0, '13'),
(16, 4, 0, '14'),
(17, 5, 1, 'a'),
(18, 5, 0, 'b'),
(19, 5, 0, 'c'),
(20, 5, 0, 'd'),
(21, 6, 0, 'a'),
(22, 6, 1, 'b'),
(23, 6, 0, 'c'),
(24, 6, 0, 'd'),
(25, 7, 0, 'a'),
(26, 7, 0, 'b'),
(27, 7, 1, 'c'),
(28, 7, 0, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `desciption` varchar(50) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `title`, `subject`, `desciption`, `file`) VALUES
(1, 'Variables in C', 2, 'A very good E book', '../../assets/docs/1563725492_library rules.docx'),
(2, 'An Ebook', 2, 'a very good ebook. An awesome e book', '../../assets/docs/1563725915_Get the full version here.pdf'),
(3, 'abcdefgh', 2, 'a very good book', '../../assets/docs/1563729077_library rules.docx');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `subject`, `link`, `description`) VALUES
(1, 'Variables in C', '1', 'https://www.youtube.com/watch?v=92J9p0VplTo&pbjreload=10', 'A video that gives info about some random topics in language C.'),
(2, 'Objects in Comp.', '1', 'https://www.youtube.com/watch?v=cF2yqyiJACk&pbjreload=10', 'A very informative video on computer organisation and design'),
(3, 'abcd efhg hi', '1', 'http://localhost:8080/tuto-website/pages/admin/Docs.php#', 'abcd efgh ijkl mnop');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `test_number` int(2) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `test_number`, `question`) VALUES
(1, 1, 'wha is my name'),
(2, 2, 'wha is my name 2'),
(3, 1, 'test 1'),
(4, 2, 'What is your age'),
(5, 3, 'sub 1 second question'),
(6, 3, 'any random question?'),
(7, 4, 'wha is my name');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`id`, `username`, `password`, `phone`, `email`) VALUES
(1, 'admin', '123456789', '9869079500', 'admin123@gmail.com'),
(2, 'user1', '123456789', '9869079500', 'user1@gmail.com'),
(3, 'tanvi', '123456789', '9869079500', 'tanvi123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
