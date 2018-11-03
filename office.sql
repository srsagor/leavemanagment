-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 04:27 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE IF NOT EXISTS `accept` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `postion` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`username`, `name`, `postion`, `sdate`, `edate`) VALUES
('srsagor', 'MD. MASUD PARVEZ', 'Software Engneer', '2017-07-22', '2017-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('srs007', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `aply`
--

CREATE TABLE IF NOT EXISTS `aply` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `postion` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `offdayr` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aply`
--


-- --------------------------------------------------------

--
-- Table structure for table `emply`
--

CREATE TABLE IF NOT EXISTS `emply` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `postion` varchar(50) NOT NULL,
  `offday` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emply`
--

INSERT INTO `emply` (`username`, `name`, `email`, `password`, `postion`, `offday`) VALUES
('sagor', 'shahriar', 'srsagor007@gmail.com', '1234', 'Software Engneer', 17),
('srsagor', 'MD. MASUD PARVEZ', 'srsagor007@gmail.com', '1234', 'Software Engneer', 18);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE IF NOT EXISTS `final` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `postion` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`username`, `name`, `postion`, `sdate`, `edate`) VALUES
('srsagor', 'MD. MASUD PARVEZ', 'Software Engneer', '2017-07-22', '2017-07-23'),
('srsagor', 'MD. MASUD PARVEZ', 'Software Engneer', '2017-07-21', '2017-07-22'),
('srsagor', 'MD. MASUD PARVEZ', 'Software Engneer', '2017-07-22', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `off`
--

CREATE TABLE IF NOT EXISTS `off` (
  `username` varchar(50) NOT NULL,
  `cause` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off`
--

INSERT INTO `off` (`username`, `cause`) VALUES
('sagor', 'Not granted');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
