-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 09:48 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

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
  `percent` float DEFAULT NULL,
  PRIMARY KEY (`year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achivements`
--

INSERT INTO `achivements` (`year`, `examinee`, `passed`, `aplus`, `gplus`, `percent`) VALUES
('2009', 153, 142, 40, 10, NULL),
('2010', 141, 120, 33, 8, NULL),
('2011', 115, 110, 32, 11, NULL),
('2012', 163, 122, 60, 17, NULL),
('2013', 143, 132, 29, 7, NULL),
('2014', 143, 112, 40, 12, NULL),
('2015', 153, 148, 78, 34, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE IF NOT EXISTS `childrens` (
  `roll` varchar(40) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `guardian_mobile` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL,
  PRIMARY KEY (`roll`,`guardian_mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noti343323`
--

CREATE TABLE IF NOT EXISTS `noti343323` (
  `whosends` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`whosends`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noti343323`
--

INSERT INTO `noti343323` (`whosends`) VALUES
('343323');

-- --------------------------------------------------------

--
-- Table structure for table `noti1234567890`
--

CREATE TABLE IF NOT EXISTS `noti1234567890` (
  `whosends` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`whosends`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `noti1738297102`
--

CREATE TABLE IF NOT EXISTS `noti1738297102` (
  `whosends` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`whosends`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noti1738297102`
--

INSERT INTO `noti1738297102` (`whosends`) VALUES
('1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `noti1778919803`
--

CREATE TABLE IF NOT EXISTS `noti1778919803` (
  `whosends` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `image`) VALUES
('1234567890', '../student_images/12966518_1143716139001723_757826421_n.png.jpeg'),
('1738297102', '../images/common.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `passing_year` varchar(10) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `varification` int(11) NOT NULL,
  PRIMARY KEY (`mobile`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`fname`, `lname`, `bdate`, `sex`, `blood`, `mobile`, `email`, `password`, `passing_year`, `university`, `job`, `varification`) VALUES
('x', 'y', '0000-00-00', 'male', 'B+', '1234567890', 'a@b.c', '11111111', '2009', 'kdj', 'dkjf', 4),
('shibir', 'hossen', '1994-10-10', 'male', 'O+', '1738297102', 'shibbir.hossen@live.com', 'asdfghjkl', '2009', 'Jagannath University', 'student', 5),
('Sajeeb', 'Ahamed', '0000-00-00', 'male', 'AB+', '1778919803', 'sajeeb07ahamed@gmail.com', '12345678', '2009', 'Jagannath University', 'Student', 7);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `speciality` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL DEFAULT '',
  `fbook` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mobile`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
