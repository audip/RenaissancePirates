-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2014 at 06:21 AM
-- Server version: 5.1.63-rel13.4-log
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eclecbja_eclectika2014`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizuser`
--

CREATE TABLE IF NOT EXISTS `quizuser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `score` int(50) NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` varchar(11) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `quizuser`
--

INSERT INTO `quizuser` (`id`, `username`, `score`, `q1`, `q2`) VALUES
(1, 'khowal', 0, '2', '2'),
(2, 'milind', 1000, '2', '2'),
(3, 'mansi', 999, '2', '2'),
(4, 'krishna', 999, '2', '2'),
(5, 'el_cid', 100, '2', '2'),
(6, 'aditya', 0, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `college` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `year` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `otp` varchar(15) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `name`, `username`, `password`, `college`, `mobile`, `email`, `gender`, `branch`, `year`, `pic`, `otp`) VALUES
(3, 'Krishna Khowal', 'khowal', 'f59f689b2aa939976c1f65c307b9489b', 'National Institute of Technology, Raipur', '1234567890', 'khowal@eclectika.org', 'Male', 'Computer Science & Engineering', 'Third', 'images/khowal.jpg', ''),
(4, 'Milind Bais', 'milind', 'ea16f6597913ed751d4bd8f503ec4ff1', 'National Institute of Technology, Raipur', '7697545867', 'milind_bias@yahoo.com', 'Male', 'Civil Engineering', 'Second', 'images/milind.jpg', ''),
(5, 'Mansi Jain', 'mansi', '8e183f28f7ac8aaebf5650f728f79a37', 'National Institute of Technology, Raipur', '9181037591', 'mansijain.nitrr@gmail.com', 'Female', 'Information Technology', 'Third', '', ''),
(2, 'Krishna Mohan Shrivastava', 'krishna', '243bd1ce0387f18005abfc43b001646a', 'National Institute of Technology, Raipur', '8817099703', 'krishna.sri23@hotmail.com', 'Male', 'Information Technology', 'Third', '', ''),
(7, 'Siddhant Singh', 'el_cid', '827ccb0eea8a706c4c34a16891f84e7b', 'National Institute of Technology, Raipur', '9685048070', 'siddhantsingh742@gmail.com', 'Male', 'Biotechnology', 'Second', '', ''),
(1, 'Aditya Purandare', 'aditya', '057829fa5a65fc1ace408f490be486ac', 'National Institute of Technology, Raipur', '9301522144', 'aditya.p1993@hotmail.com', 'Male', 'Information Technology', 'Third', 'images/aditya.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
