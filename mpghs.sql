-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2015 at 07:02 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mpghs`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE IF NOT EXISTS `achivements` (
  `year` varchar(6) NOT NULL DEFAULT '',
  `examinee` int(11) DEFAULT NULL,
  `passed` int(11) DEFAULT NULL,
  `aplus` int(11) DEFAULT NULL,
  `gplus` int(11) DEFAULT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achivements`
--

INSERT INTO `achivements` (`year`, `examinee`, `passed`, `aplus`, `gplus`) VALUES
('2009', 153, 142, 40, 10),
('2010', 141, 120, 33, 8),
('2011', 115, 110, 32, 11),
('2012', 163, 122, 60, 17),
('2013', 143, 132, 29, 7),
('2014', 143, 112, 40, 12),
('2015', 153, 148, 78, 34);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `speciality` varchar(100) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL DEFAULT '',
  `fbook` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mobile`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `age`, `speciality`, `description`, `mobile`, `fbook`, `email`, `twitter`, `image`) VALUES
('Sujon Mia', 66, 'Management', 'He is a commerce background student from 2000, He passed from several reputed institutions and competed his graduation from reputed university.', '01752996602', 'salimul.islam', 'sasalimul.islam@gmail.com', 'vudai.mul', 'accounting.jpg'),
('Kanai master', 54, 'Mathematics', 'Joined high school at 2004 in Mohangonj Pilot Govt. High School and finish his high school at 1968. Joined at BAUC at 2009 and finished at 2011. Then he admitted into Jagannath University Dhaka at Dep', '01778123456', 'kanai.master', 'kanai@master.com', 'mastar-kanai', 'math_teacher.jpg'),
('Sajeeb Ahamed', 21, 'computer,physics,chemistry', 'Joined high school at 2004 in Mohangonj Pilot Govt. High School and finish his high school at 1968. Joined at BAUC at 2009 and finished at 2011. Then he admitted into Jagannath University Dhaka at Dep', '01778919803', 'sisylana07', 'sajeeb07ahamed@gmail.com', 'janina', 'computer.jpg'),
('sakib ali', 76, 'talkativeness', 'He started his talkativeness career at the very beginning time of his life. He Joined at school at 1960 and got champion trophy at world talkativeness compitition. He finished his graduate degree from talk university with first class at the department of talkativeness and global simulation.', '01912420440', 'talk.sakib', 'sakib@takativeness.com', 'sakib.talk', 'talkative.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`) VALUES
('sajeeb ahamed', 'ahamed_sajeeb', 'root'),
('titan nil', 'titan2', 'lumas');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
