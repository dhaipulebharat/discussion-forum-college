-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 10:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ans_id` int(100) NOT NULL,
  `qid` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ans` longtext NOT NULL,
  `votes` int(100) NOT NULL,
  `date_time_ans` timestamp NOT NULL DEFAULT current_timestamp(),
  `votes_mails` text NOT NULL,
  `vote_active` int(11) NOT NULL,
  `report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ans_id`, `qid`, `email`, `ans`, `votes`, `date_time_ans`, `votes_mails`, `vote_active`, `report`) VALUES
(1, 1, 'abc@gmail.com', 'This is my first answer.', 5, '2023-02-08 12:34:33', ',four@gmail.com,seven@gmail.com,eight@gmail.com,ten@gmail.com,three@gmail.com', 0, 0),
(2, 1, 'abc@gmail.com', 'This is an updated answer.', 6, '2023-02-08 12:53:17', ',four@gmail.com,eight@gmail.com,one@gmail.com,nine@gmail.com,three@gmail.com,six@gmail.com', 0, 0),
(3, 1, 'five@gmail.com', 'Hello.', 8, '2023-02-08 13:00:40', ',four@gmail.com,seven@gmail.com,ten@gmail.com,one@gmail.com,three@gmail.com,five@gmail.com,199X1A0547@gprec.ac.in,six@gmail.com', 0, 0),
(4, 1, 'five@gmail.com', 'Hi world.', 11, '2023-02-08 13:01:24', ',four@gmail.com,seven@gmail.com,eight@gmail.com,nine@gmail.com,ten@gmail.com,one@gmail.com,three@gmail.com,199X1A0547@gprec.ac.in,two@gmail.com,six@gmail.com,five@gmail.com', 0, 0),
(5, 2, 'three@gmail.com', 'My name is :)', 9, '2023-02-08 12:58:16', ',four@gmail.com,seven@gmail.com,nine@gmail.com,ten@gmail.com,five@gmail.com,three@gmail.com,eight@gmail.com,two@gmail.com,six@gmail.com', 1, 0),
(7, 10, 'three@gmail.com', 'My eighth answer is </>', 4, '2023-02-08 12:23:25', 'Array,four@gmail.com,seven@gmail.com,eight@gmail.com,nine@gmail.com', 0, 0),
(8, 2, 'three@gmail.com', 'Welcome to my answer.', 7, '2023-02-08 12:24:21', ',four@gmail.com,ten@gmail.com,five@gmail.com,three@gmail.com,one@gmail.com,199X1A0547@gprec.ac.in,six@gmail.com', 0, 0),
(9, 6, 'three@gmail.com', 'Since 2012, Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working.Hi Since 2012.', 4, '2023-02-08 12:35:50', ',four@gmail.com,eight@gmail.com,five@gmail.com,three@gmail.com', 0, 0),
(10, 5, 'four@gmail.com', 'Welcome to my answer section.\r\nIn the common law, an answer is the first pleading by a defendant, usually filed and served upon the plaintiff within a certain strict time limit after a civil complaint or criminal information or indictment has been served upon the defendant.', 4, '2023-02-09 07:17:28', ',four@gmail.com,eight@gmail.com,one@gmail.com,nine@gmail.com', 0, 0),
(11, 4, 'four@gmail.com', 'Answer\r\n', 4, '2023-02-08 13:11:46', ',four@gmail.com,three@gmail.com,199X1A0547@gprec.ac.in,seven@gmail.com', 0, 0),
(12, 11, 'four@gmail.com', 'H', 2, '2023-02-08 13:13:23', ',four@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(13, 12, 'four@gmail.com', 'Great answer.', 3, '2023-02-08 13:35:16', ',four@gmail.com,seven@gmail.com,five@gmail.com', 0, 0),
(14, 12, 'four@gmail.com', 'Hello.', 5, '2023-02-08 13:38:38', ',four@gmail.com,eight@gmail.com,ten@gmail.com,two@gmail.com,six@gmail.com', 0, 0),
(15, 12, 'four@gmail.com', 'My answer is.', 9, '2023-02-08 13:42:39', ',four@gmail.com,seven@gmail.com,eight@gmail.com,one@gmail.com,ten@gmail.com,five@gmail.com,nine@gmail.com,six@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(16, 9, 'four@gmail.com', 'Hiiiii', 6, '2023-02-08 14:27:20', ',four@gmail.com,seven@gmail.com,ten@gmail.com,five@gmail.com,six@gmail.com,nine@gmail.com', 0, 0),
(17, 5, 'four@gmail.com', 'kiljnl', 8, '2023-02-09 07:23:41', ',four@gmail.com,seven@gmail.com,eight@gmail.com,ten@gmail.com,nine@gmail.com,five@gmail.com,one@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(18, 8, 'four@gmail.com', 'This is updated answer.', 6, '2023-02-09 07:20:35', ',four@gmail.com,seven@gmail.com,one@gmail.com,nine@gmail.com,ten@gmail.com,two@gmail.com', 0, 0),
(20, 7, 'four@gmail.com', 'Awesome has spanned 6 major versions and grown to make thousands.', 2, '2023-02-08 14:52:23', ',four@gmail.com,seven@gmail.com', 0, 0),
(21, 7, 'four@gmail.com', 'Awesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.', 3, '2023-02-08 14:50:55', ',four@gmail.com,nine@gmail.com,ten@gmail.com', 0, 0),
(22, 8, 'four@gmail.com', 'abcdef.', 4, '2023-02-09 07:20:51', ',four@gmail.com,seven@gmail.com,nine@gmail.com,ten@gmail.com', 0, 0),
(24, 8, 'four@gmail.com', 'a.', 2, '2023-02-08 14:29:01', ',four@gmail.com,five@gmail.com', 0, 0),
(141, 9, 'four@gmail.com', 'Hello and Hi.', 4, '2023-02-08 14:27:19', ',four@gmail.com,ten@gmail.com,five@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(142, 9, 'four@gmail.com', 'Yes it is.', 3, '2023-02-08 14:27:16', ',four@gmail.com,eight@gmail.com,one@gmail.com', 0, 0),
(143, 12, 'four@gmail.com', ':)', 4, '2023-02-08 14:27:00', ',four@gmail.com,ten@gmail.com,five@gmail.com,eight@gmail.com', 0, 0),
(144, 7, 'four@gmail.com', 'iejcbkjds', 10, '2023-02-08 14:52:42', ',four@gmail.com,seven@gmail.com,eight@gmail.com,one@gmail.com,ten@gmail.com,nine@gmail.com,five@gmail.com,199X1A0547@gprec.ac.in,six@gmail.com,three@gmail.com', 0, 0),
(145, 7, 'four@gmail.com', 'duifgeri.', 4, '2023-02-08 14:53:39', ',four@gmail.com,seven@gmail.com,eight@gmail.com,five@gmail.com', 0, 0),
(146, 8, 'four@gmail.com', 'dskJCi dueJKF pgeimndc.', 2, '2023-02-09 07:17:40', ',four@gmail.com,one@gmail.com', 0, 0),
(147, 8, 'four@gmail.com', 'hkhd ac hj.', 4, '2023-02-09 07:17:32', ',four@gmail.com,ten@gmail.com,five@gmail.com,two@gmail.com', 0, 0),
(148, 5, 'four@gmail.com', 'jhs.', 2, '2023-02-09 07:23:44', ',four@gmail.com,ten@gmail.com', 0, 2),
(150, 6, 'one@gmail.com', 'Welcome.', 5, '2023-02-10 13:31:14', ',one@gmail.com,nine@gmail.com,ten@gmail.com,five@gmail.com,three@gmail.com', 0, 0),
(151, 9, 'one@gmail.com', 'This can be here.', 2, '2023-02-10 13:34:21', ',one@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(152, 13, 'one@gmail.com', 'My next answer.', 4, '2023-02-10 13:44:12', ',one@gmail.com,ten@gmail.com,five@gmail.com,eight@gmail.com', 0, 0),
(153, 11, 'one@gmail.com', 'ouefu dsbli ydc.', 4, '2023-02-10 13:47:59', ',one@gmail.com,ten@gmail.com,199X1A0547@gprec.ac.in,nine@gmail.com', 0, 0),
(154, 1, 'one@gmail.com', 'Home', 4, '2023-02-10 15:23:17', ',nine@gmail.com,two@gmail.com,one@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(155, 6, 'nine@gmail.com', 'Awesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.\r\nAwesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.\r\nAwesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.\r\nAwesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.\r\nAwesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.\r\nAwesome has spanned 6 major versions and grown to make thousands.Awesome has spanned 6 major versions and grown to make thousands.', 2, '2023-02-11 08:23:22', ',nine@gmail.com,ten@gmail.com', 0, 0),
(157, 4, 'nine@gmail.com', 'My name is.', 4, '2023-02-13 15:13:00', ',nine@gmail.com,eight@gmail.com,three@gmail.com,199X1A0547@gprec.ac.in', 0, 1),
(158, 14, 'one@gmail.com', 'rev', 6, '2023-02-14 12:27:19', ',one@gmail.com,eight@gmail.com,199X1A0547@gprec.ac.in,two@gmail.com,seven@gmail.com,three@gmail.com', 0, 0),
(159, 15, 'six@gmail.com', 'Hello', 2, '2023-02-27 05:27:19', ',six@gmail.com,seven@gmail.com', 0, 0),
(160, 14, 'six@gmail.com', 'I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.', 2, '2023-02-27 05:30:01', ',six@gmail.com,199X1A0547@gprec.ac.in', 0, 0),
(161, 15, 'six@gmail.com', 'I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.I am making a web gallery. I have function that rotates the image when user press R or click rotate button. But i am having difficulty maintaining aspect ratio and rotating image.', 4, '2023-02-27 05:30:26', ',six@gmail.com,seven@gmail.com,eight@gmail.com,nine@gmail.com', 0, 0),
(162, 14, 'six@gmail.com', 'Besides CHAR and VARCHAR character types, MySQL provides us with TEXT type that has more features which CHAR and VARCHAR cannot cover.\r\n\r\nThe TEXT is useful for storing long-form text strings that can take from 1 byte to 4 GB. We often find the TEXT data type for storing article body in news sites, product description in e-commerce sites.\r\n\r\nDifferent from CHAR and VARCHAR, you don’t have to specify a storage length when you use a TEXT type for a column. Also, MySQL does not remove or pad spaces when retrieve or insert text data like CHAR and VARCHAR.\r\n\r\nNote that the TEXT data is not stored in the database server’s memory, therefore, whenever you query TEXT data, MySQL has to read from it from the disk, which is much slower in comparison with CHAR and VARCHAR.\r\n\r\nMySQL provides four TEXT types: TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT.\r\n\r\nThe following shows the size of each TEXT type with the assumption that we are using a character set that takes 1 byte to store a character', 2, '2023-02-27 05:34:09', ',six@gmail.com,three@gmail.com', 0, 0),
(163, 17, '199X1A0547@gprec.ac.in', 'Yes nuvvu anukunnade.', 1, '2023-04-15 10:13:18', ',199X1A0547@gprec.ac.in', 0, 0),
(164, 15, '199X1A0547@gprec.ac.in', 'Yes', 0, '2023-04-15 10:48:48', '', 0, 0),
(165, 1, 'one@gmail.com', 'iuyghjkmn', 0, '2023-05-09 07:36:45', '', 0, 0),
(166, 26, 'three@gmail.com', 'poiutydfgh', 1, '2023-05-09 13:21:03', ',three@gmail.com', 0, 0),
(167, 8, 'five@gmail.com', 'First answer', 0, '2023-05-10 12:35:04', '', 0, 0),
(168, 7, '199X1A0547@gprec.ac.in', 'scbhakj', 0, '2023-06-05 13:15:58', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qno` int(100) NOT NULL,
  `que` longtext NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tags` varchar(1000) NOT NULL,
  `active` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qno`, `que`, `email`, `date_time`, `tags`, `active`) VALUES
(1, 'What is college name?', 'abc@gmail.com', '2023-06-05 13:15:54', '', 0),
(2, 'name?', 'cad@gmail.com', '2023-05-10 06:20:59', '', 0),
(4, 'This is my first question? Please give answer?', 'five@gmail.com', '2023-05-10 06:22:21', 'CSE,SPORTS,COLLEGE,', 0),
(5, 'Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working. Since 2012, Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working.Hi Since 2012?', 'six@gmail.com', '2023-05-09 06:40:00', 'SPORTS,COLLEGE,', 0),
(6, 'Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working. Since 2012, Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working.Hi Since 2012?', 'six@gmail.com', '2023-05-09 06:31:51', 'SPORTS,COLLEGE,', 0),
(7, 'Font Awesome has spanned 6 major versions and grown to make thousands of icons easy to use - wherever and however you are working.Hi Since 2012, Font Awesome has spanned 6 major versions and grown to make thousands?', 'six@gmail.com', '2023-06-05 13:15:54', 'CSE,CSE-RELATED,SPORTS,COLLEGE,', 1),
(8, 'This is an updated question?', 'six@gmail.com', '2023-05-14 14:22:33', 'CSE,CSE-RELATED,COLLEGE,', 0),
(9, 'This is an interesting question?', 'six@gmail.com', '2023-02-10 13:35:13', 'CSE,ECE,EEE,ME,CIV,CSE-RELATED,COLLEGE,', 0),
(10, 'This is eighth question?', 'eight@gmail.com', '2023-05-09 06:38:09', 'CSE,CSE-RELATED,COLLEGE,', 0),
(11, 'Hi this is a question?', 'five@gmail.com', '2023-02-10 13:51:07', 'ECE,EVENTS,COLLEGE,', 0),
(12, 'Happiest question?', 'four@gmail.com', '2023-02-27 05:29:59', 'EVENTS,SPORTS,COLLEGE,', 0),
(13, 'My next question?', 'seven@gmail.com', '2023-02-17 06:35:05', 'COLLEGE,', 0),
(14, 'New question here?', 'one@gmail.com', '2023-04-23 06:40:25', 'CSE,ECE,EEE,ME,CIV,CSE-RELATED,COLLEGE,', 0),
(15, 'How was that ?', 'two@gmail.com', '2023-04-23 06:26:19', 'EVENTS,COLLEGE,', 0),
(16, 'What is course', '199X1A0547@gprec.ac.in', '2023-04-23 06:40:34', 'CSE,', 0),
(17, 'Something is fishy ?', '199X1A0547@gprec.ac.in', '2023-04-15 10:48:37', 'CSE,COLLEGE,', 0),
(18, 'IPL is ?', '199X1A0547@gprec.ac.in', '2023-04-15 10:48:42', 'CSE,COLLEGE,', 0),
(19, 'When is our project review ?', '199X1A0547@gprec.ac.in', '2023-05-09 07:05:01', 'CSE,ECE,COLLEGE,', 0),
(20, 'Question', '199X1A0547@gprec.ac.in', '2023-05-09 06:19:00', 'CSE,COLLEGE,', 0),
(21, 'hgzxdfcghj', 'two@gmail.com', '2023-05-09 06:29:17', 'CSE,', 0),
(22, ' ', 'two@gmail.com', '2023-05-09 06:44:07', '', 0),
(23, ' somklsdc', 'two@gmail.com', '2023-05-09 06:54:26', 'EVENTS,', 0),
(24, 'rgejyhgf', 'two@gmail.com', '2023-05-09 06:56:44', 'ME,', 0),
(25, '09876tresdfghjkl,mn', 'one@gmail.com', '2023-05-09 07:36:08', '', 0),
(26, 'jwgsdn bcxm,', 'three@gmail.com', '2023-05-10 06:18:07', 'PLACEMENTS,', 0),
(27, 'Ask something ?', 'five@gmail.com', '2023-05-10 12:34:47', 'CSE,COLLEGE,', 0),
(28, 'bvds', '199X1A0547@gprec.ac.in', '2023-06-05 13:15:44', 'CSE,COLLEGE,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwords` varchar(20) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `otp` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`first`, `last`, `gender`, `email`, `passwords`, `login_time`, `otp`) VALUES
('Bharat', 'Dhaipule', 'male', 'cad@gmail.com', '12345678', '2023-01-25 07:01:52', 0),
('one', 'number', 'male', 'one@gmail.com', '1111111111', '2023-05-10 12:12:23', 618575),
('two', 'number', 'male', 'two@gmail.com', '2222222222', '2023-05-09 06:21:18', 192845),
('three', 'number', 'male', 'three@gmail.com', '3333333333', '2023-05-09 08:32:54', 205798),
('four', 'number', 'male', 'four@gmail.com', '4444444444', '2023-05-10 06:53:12', 108691),
('number', 'five', 'male', 'five@gmail.com', '55555555', '2023-05-10 12:34:11', 871671),
('six', 'number', 'male', 'six@gmail.com', '66666666', '2023-04-27 14:24:58', 124053),
('seven', 'number', 'male', 'seven@gmail.com', '77777777', '2023-02-28 05:52:04', 0),
('eight', 'number', 'male', 'eight@gmail.com', '88888888', '2023-02-28 14:02:32', 0),
('nine', 'number', 'male', 'nine@gmail.com', '99999999', '2023-03-01 06:21:36', 0),
('ten', 'number', 'male', 'ten@gmail.com', '00000000', '2023-03-01 12:05:44', 0),
('Bharat', 'Dhaipule', 'male', '199X1A0547@gprec.ac.in', '11111111', '2023-06-05 13:20:31', 676506),
('Major', 'Project', 'male', 'bharat.dhaipule@gmail.com', 'majorproject', '2023-05-09 08:30:09', 0),
('raghava', 'va', 'male', 'are@gmail.com', '1234567890', '2023-05-10 12:43:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `qid_fk` (`qid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ans_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `question` (`qno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
