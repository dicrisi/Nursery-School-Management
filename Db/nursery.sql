-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2024 at 08:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE IF NOT EXISTS `admission_form` (
  `fid` int(50) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `focc` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mocc` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `mqualification` varchar(50) NOT NULL,
  `mtougue` varchar(50) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `uimg` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`fid`, `cname`, `gname`, `sex`, `dob`, `email`, `addr`, `state`, `pincode`, `fname`, `focc`, `mob`, `mname`, `mocc`, `qualification`, `mqualification`, `mtougue`, `standard`, `uimg`, `status`) VALUES
(1, 'sakshi', 'saks', 'Female', '2024-04-09', 'rindhiya@gmail.com', 'coimbatore', 'tamilnadu', '624560', 'rs', 'lawyer', '9047872534', 'mk', 'teacher', 'LLB', 'Bsc,B.ed', 'tamil', 'LKG', 'child.jpg', 'waiting'),
(2, 'akash', 'abi', 'Male', '2024-04-16', 'rk@gmail.com', 'coimbatoree', 'tamilnadu', '624567', 'pk', 'farmer', '8234567899', 'maheshwari', 'teacher', 'bsc', 'Bsc,B.ed', 'Telugu', '3rd std', 'child.jpg', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `admission_inquiries`
--

CREATE TABLE IF NOT EXISTS `admission_inquiries` (
  `aid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `fees_details` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admission_inquiries`
--

INSERT INTO `admission_inquiries` (`aid`, `name`, `email`, `phone`, `standard`, `fees_details`, `message`, `action`) VALUES
(6, 'rs', 'rs@gmail.com', '6374034622', '4th std', 'need fees details for vv5 std', 'school timing,admission fees need', 'Requested'),
(7, 'rs', 'rin@gmail.com', '9047872536', '3rd std', 'need fees details for 5 std', 'admission date 2/6/2024', 'tuesday'),
(10, 'rk', 'rk@gmail.com', '9047872536', '4th std', 'i need fees detailll', 'admission date 2/6/2024', '524145');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `standard` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `email`, `cname`, `addr`, `mob`, `standard`, `amount`) VALUES
(1, 'rindhiya@gmail.com', 'sakshi', 'coimbatore', '9047872534', 'LKG', '5000'),
(3, 'rk@gmail.com', 'akash', 'coimbatoree', '8234567899', '3rd std', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `address`, `dat`) VALUES
(1, 'rindhii', 'rindhiya@gmail.com', '1234', '9047872222', 'gandhipuram', '2024-04-17'),
(2, 'rs', 'rs@gmail.com', '1234', '9047811111', 'madurai', '2024-04-09'),
(3, 'rk', 'rk@gmail.com', '1234', '9047872536', 'gandhipuram', '2024-04-09');
