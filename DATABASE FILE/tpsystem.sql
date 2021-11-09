-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2021 at 07:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

DROP TABLE IF EXISTS `admintb`;
CREATE TABLE IF NOT EXISTS `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `letter` varchar(30) NOT NULL,
  `g12` varchar(30) NOT NULL,
  `nrc` varchar(30) NOT NULL,
  `license` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `tp_number` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `letter`, `g12`, `nrc`, `license`, `school`, `s_email`, `tp_number`, `date`, `status`) VALUES
(1, 'intro letter.docx', 'g12 certificate.pdf', 'nrc.pdf', 'sandbox.docx', 'Northrise Basic School', 'mimi@gmail.com', 'First ', '2021-10-22 07:48:19', 'Rejected'),
(2, 'Question 2.docx', 'OOSAD Assignemt.docx', 'OO Sad Assignment2.docx', 'BIT250.docx', 'Northrise Basic School', 'mimi@gmail.com', 'Second ', '2021-10-22 08:24:58', 'Rejected'),
(4, 'cba.jpg', 'cba.jpg', 'sr.jpg', 'velinda chambatu.jpg', 'Northrise Basic School', 'pamela@gmail.com', 'First', '2021-11-09 15:47:11', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

DROP TABLE IF EXISTS `appointmenttb`;
CREATE TABLE IF NOT EXISTS `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(12, 14, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'WillWilliams', 435, '2021-07-06', '10:00:00', 1, 1),
(1, 15, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '14:00:00', 0, 1),
(1, 16, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '10:00:00', 0, 1),
(11, 17, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'lewis', 280, '2021-07-05', '10:00:00', 1, 0),
(13, 18, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'Ralph', 450, '2021-07-06', '08:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Demo', 'demo@demail.com', '7014500000', 'this is a demo test');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

DROP TABLE IF EXISTS `doctb`;
CREATE TABLE IF NOT EXISTS `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `doctorname`, `email`, `spec`, `docFees`) VALUES
('WillWilliams', 'password', 'Will Williams', 'williams@gmail.com', 'Cardiologist', 435),
('Ralph', 'password', 'Ralphn Bh', 'ralph@gmail.com', 'Neurologist', 450),
('ryan', 'password', 'Ryan Chandler', 'ryanc@gmail.com', 'Pediatrician', 440),
('lewis', 'password', 'Lou Lewis', 'lewis@gmail.com', 'Gynecologist', 280),
('chris', 'password', 'Chris Olivas', 'chris@gmail.com', 'Oncologist', 580),
('danial', 'password', 'Danial Rivera', 'danial@gmail.com', 'Neurologist', 210);

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

DROP TABLE IF EXISTS `prestb`;
CREATE TABLE IF NOT EXISTS `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('WillWilliams', 12, 14, 'Liam', 'Moore', '2021-07-06', '10:00:00', 'Congenital heart disease', 'rhinoconjunctivitis', 'trandolapril (Mavik)'),
('ryan', 1, 16, 'Curtis', 'Hicks', '2021-07-05', '10:00:00', 'Tuberculosis', 'lumpy rash on the legs - or lupus vulgaris which gives lumps or ulcers', 'Isoniazid, Ethambutol (Myambutol), Linezolid (Zyvox)'),
('lewis', 11, 17, 'Kathryn', 'Anderson', '2021-07-05', '10:00:00', 'Ovarian cysts', '00000000', 'Narcotic analgesics and nonsteroidal anti-inflammatory drugs'),
('Ralph', 13, 18, 'Brian', 'Rowe', '2021-07-06', '08:00:00', 'Cerebral Aneurysm', '0000000', 'Nimodipine - empty stomach, at least 1 hour before a meal or 2 hours after a meal');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `school_number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_number`, `name`, `status`, `email`) VALUES
(1, 101, 'Chifubu Secondary', 'Vacant', 'chifubu@gmail.com'),
(6, 102, 'St Andrews High School', 'Vacant', 'standrews@gmail.com'),
(7, 103, 'Northrise Basic School', 'vacant', 'northrise@gmail.com'),
(8, 104, 'Masala Secondary', 'Vacant', 'masala@gmail.com'),
(9, 106, 'Kansenshi Secondary', 'Vacant', 'kansenshi@gmail.com'),
(10, 107, 'Kansenshi Primary', 'vacant', 'kansenshiprimary@gmail.com'),
(11, 109, 'Temweni Secondary School', 'vacant', 'temweni@gmail.com'),
(12, 108, 'Lubuto High School', 'Vacant', 'lubuto@gmail.com'),
(13, 110, 'Northrise Basic School', 'vacant', 'northrisebasic@gmail.com'),
(14, 111, 'test high school', 'vacant', 'test@gmail.com'),
(15, 112, 'Bethel Basic School', 'Vacant', 'bethel@gmail.com'),
(16, 113, 'Ndola Girls Technical School', 'vacant', 'ndolagirls@gmail.com'),
(17, 113, 'Caritas High School', 'vacant', 'caritas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `college` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `college`, `password`, `cpassword`) VALUES
(1, 'Dumisani', 'Lesley', 'Male', 'zulu@gmail.com', '0978646664', 'Zambia ICT College', 'zulu', 'zulu'),
(2, 'Pamela', 'Mbobela', 'Female', 'pamela@gmail.com', '0978646664', 'Zambia ICT College', 'pam', 'pam'),
(3, 'Robert', 'Ray', 'Male', 'robert@gmail.com', '7014744444', 'Zambia ICT College', 'pass', 'pass'),
(4, 'Michael', 'Foster', 'Male', 'michael@gmail.com', '7023696969', 'Kitwe College of Education', 'pass', 'pass'),
(5, 'Victor', 'Owen', 'Male', 'victor@gmail.com', '7897895500', 'NorthRise University', 'pass', 'pass'),
(6, 'Johnny', 'Collins', 'Male', 'johnny@gmail.com', '7530001250', 'Nkana College', 'pass', 'pass'),
(7, 'Elsie', 'Meads', 'Female', 'elsie@gmail.com', '7850001250', 'Zambia ICT College', 'pass', 'pass'),
(8, 'David', 'Fburn', 'Male', 'david@gmail.com', '7301450000', 'Kitwe College of Education', 'pass', 'pass'),
(9, 'Brandon', 'Mckinnon', 'Male', 'brandon@gmail.com', '7026969500', 'Nkana College', 'pass', 'pass'),
(10, 'Tyler', 'Smith', 'Male', 'tyler@gmail.com', '7900145300', 'TVTC', 'pass', 'pass'),
(11, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'TVTC', 'pass', 'pass'),
(12, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'Zambia ICT College', 'password', 'password'),
(13, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'Zambia ICT College', 'password', 'password'),
(14, 'mimi', 'mimi', 'Female', 'mimi@gmail.com', '0978646664', 'Zambia ICT College', 'mimi', 'mimi'),
(15, 'sami', 'smith', 'Male', 'sami@gmail.com', '0978646664', 'Zambia ICT College', 'sami', 'sami'),
(16, 'test', 'test', 'Female', 'test@gmail.com', '1234567890', 'test', 'test', 'test'),
(17, 'Lesley', 'Jr', 'Female', 'lesley@gmail.com', '0978646664', 'Zambia ICT College', 'test', 'test'),
(18, 'Grace', 'Mint', 'Female', 'grace@gmail.com', '0978646664', 'Nkana College of Eduaction', 'grace', 'grace'),
(19, 'Big', 'Marty', 'Male', 'big@gmail.com', '0978646664', 'Nkana College of Eduaction', 'big', 'big'),
(20, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'Zambia ICT College', 'pass', 'pass'),
(21, 'Emily', 'Smith', 'Female', 'emily@gmail.com', '7896541222', 'Zambia ICT College', 'pass', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
