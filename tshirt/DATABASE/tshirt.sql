-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 07:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `password`) VALUES
('msp', '123');

-- --------------------------------------------------------

--
-- Table structure for table `normalproduct`
--

CREATE TABLE `normalproduct` (
  `model` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `normaltshirt`
--

CREATE TABLE `normaltshirt` (
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normaltshirt`
--

INSERT INTO `normaltshirt` (`name`, `image`) VALUES
('white', '1.png'),
('black', 'b1.webp'),
('yellow', 'y2.jpg'),
('v-neck', 'bb.jpg'),
('double-neck', 'demoo.jpg'),
('cotton', 'demo3.png'),
('ringer', 'demo2.jpg'),
('pocket', 'demo1.jpg'),
('name', ''),
('name', ''),
('name', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `colour` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `customiseimage` varchar(100) NOT NULL,
  `customiseside` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `sts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`colour`, `model`, `customiseimage`, `customiseside`, `size`, `quantity`, `price`, `gmail`, `sts`) VALUES
('blue', 'double color', 'y3.jpg', 'center', 'large', '2', '750', 'ms@gmail.com', 'no payment'),
('blue', 'double color', 'b2.webp', 'center', 'large', '2', '750', 'ms@gmail.com', 'no payment');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `totalprice` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `hand` varchar(100) NOT NULL,
  `logoside` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `gender`, `password`, `gmail`, `phonenumber`) VALUES
('msp', 'male', '123', 'ms@gmail.com', '1234567890'),
('priya', 'female', '123', 'priya.vebbox@gmail.com', '7502489147');

-- --------------------------------------------------------

--
-- Table structure for table `totalproduct`
--

CREATE TABLE `totalproduct` (
  `totaltshirt` varchar(100) NOT NULL,
  `tshirt` varchar(100) NOT NULL,
  `remaining` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalproduct`
--

INSERT INTO `totalproduct` (`totaltshirt`, `tshirt`, `remaining`) VALUES
('2000', 'normal', '2000'),
('1000', 'custome', '996');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
