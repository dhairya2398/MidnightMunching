-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2018 at 11:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grp13`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(20) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cname` varchar(20) DEFAULT NULL,
  `comp` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(20) DEFAULT NULL,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) DEFAULT NULL,
  `house_no` varchar(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `uname`, `email`, `house_no`, `street`, `area`, `mobile`) VALUES
('devansh', 'devansh', 'd@gmail.com', '8', 'smroad', 'chennai', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_menu`
--

CREATE TABLE `hotel_menu` (
  `r_id` varchar(10) DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `category` int(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_menu`
--

INSERT INTO `hotel_menu` (`r_id`, `item_name`, `category`, `price`) VALUES
('ebOIE', 'mac & cheese', 0, '400'),
('ebOIE', 'biryani', 1, '250');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(100) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `r_id` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `uname`, `item`, `r_id`, `price`, `quantity`, `status`) VALUES
(2, 'devansh', 'mac & cheese', 'ebOIE', 400, 0, 0),
(3, 'devansh', 'mac & cheese', 'ebOIE', 400, -1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `restraunt`
--

CREATE TABLE `restraunt` (
  `r_id` varchar(10) NOT NULL,
  `r_name` varchar(20) DEFAULT NULL,
  `uname` varchar(20) NOT NULL DEFAULT '',
  `mail` varchar(20) DEFAULT NULL,
  `r_street` varchar(20) DEFAULT NULL,
  `r_area` varchar(20) DEFAULT NULL,
  `status` int(5) NOT NULL,
  `ofdv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restraunt`
--

INSERT INTO `restraunt` (`r_id`, `r_name`, `uname`, `mail`, `r_street`, `r_area`, `status`, `ofdv`) VALUES
('ebOIE', 'LaPinoz', 'lapinoz', 'lp@gmail.com', 'smroad', 'ahmedabad', 1, 'N'),
('yyeR4', 'McDonalds', 'macdonald', 'm@cdonald.com', 'Panchvati', 'ahmedabad', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `type` int(5) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`type`, `username`, `password`) VALUES
(0, 'admin', 'admin'),
(2, 'devansh', 'dev'),
(1, 'lapinoz', '123'),
(1, 'macdonald', 'mcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restraunt`
--
ALTER TABLE `restraunt`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
