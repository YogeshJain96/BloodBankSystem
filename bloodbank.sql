-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 12:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrecords`
--

CREATE TABLE `bloodrecords` (
  `hid` int(11) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `Ap` int(11) NOT NULL,
  `An` int(11) NOT NULL,
  `Bp` int(11) NOT NULL,
  `Bn` int(11) NOT NULL,
  `ABp` int(11) NOT NULL,
  `ABn` int(11) NOT NULL,
  `Op` int(11) NOT NULL,
  `Onn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodrecords`
--

INSERT INTO `bloodrecords` (`hid`, `hname`, `Ap`, `An`, `Bp`, `Bn`, `ABp`, `ABn`, `Op`, `Onn`) VALUES
(1, 'Apollo Raipur', 7, 4, 4, 2, 2, 3, 2, 2),
(2, 'Shankara Medical', 4, 5, 1, 3, 1, 1, 1, 0),
(3, 'Jindal Hospital', 6, 4, 0, 2, 4, 8, 2, 1),
(4, 'Chandulal Hospital', 5, 2, 1, 2, 1, 4, 2, 4),
(5, 'Chanakya Hospital', 2, 1, 2, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequests`
--

CREATE TABLE `bloodrequests` (
  `sno` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `hid` varchar(55) NOT NULL,
  `rid` varchar(55) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodrequests`
--

INSERT INTO `bloodrequests` (`sno`, `bg`, `hid`, `rid`, `qty`) VALUES
(1, 'A positive', '1', 'Yogesh Jain', 0),
(2, 'O negative', '2', 'Yogesh Jain', 0),
(3, 'O positive', '1', 'Yogesh Jain', 0),
(4, 'AB negative', '1', 'Yogesh Jain', 0),
(5, 'A positive', '3', 'Yogesh Jain', 0),
(6, 'A negative', '3', 'Aditya', 0),
(7, 'O positive', '3', 'Yogesh Jain', 0),
(8, 'O negative', '4', 'Rohan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `email`, `password`, `address`, `phno`) VALUES
(1, 'Apollo Raipur', 'apollo@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Raipur', '2147483647'),
(2, 'Shankara Medical', 'shankara@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Bhilai', '9874556325'),
(3, 'Jindal Hospital', 'jindal@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Raigarh', '9876543210'),
(4, 'Chandulal Hospital', 'chandulal@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Bilaspur', '99875654235'),
(5, 'Chanakya Hospital', 'chanakya@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Raipur', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `recievers`
--

CREATE TABLE `recievers` (
  `rid` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(55) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recievers`
--

INSERT INTO `recievers` (`rid`, `name`, `phno`, `email`, `password`, `bg`, `age`, `gender`) VALUES
(1, 'Yogesh Jain', '8982696654', 'yogeshjain2096@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'A+', '21', 'Male'),
(2, 'Aditya', '9876543210', 'aditya@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'AB+', '22', 'Male'),
(3, 'Rohan', '9876543210', 'rohan@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'O-', '25', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrecords`
--
ALTER TABLE `bloodrecords`
  ADD UNIQUE KEY `unique` (`hid`);

--
-- Indexes for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD UNIQUE KEY `unique` (`sno`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD UNIQUE KEY `unique` (`id`);

--
-- Indexes for table `recievers`
--
ALTER TABLE `recievers`
  ADD UNIQUE KEY `unique` (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrecords`
--
ALTER TABLE `bloodrecords`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recievers`
--
ALTER TABLE `recievers`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
