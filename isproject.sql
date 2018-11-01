-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 12:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertiser`
--

CREATE TABLE `advertiser` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `idno` int(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certfile` varchar(200) NOT NULL,
  `advid` int(11) NOT NULL,
  `advinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertiser`
--

INSERT INTO `advertiser` (`firstname`, `lastname`, `email`, `photo`, `idno`, `password`, `certfile`, `advid`, `advinfo`) VALUES
('George', 'Mwanix', 'gman', 'images/default.png', 121, '$2y$10$pahh8hmJ47QXUocMyRu3wOtkzVVjVWhdYF2ogOcnSj8Bo5ayPaj4a', 'advcert/individual report.pdf', 7, 'Hi My name is George I am 43 years old and a property owner i various counties i am certified by the kenya property owners to own the properties i have .'),
('Dennis', 'Ngugi', 'dg@mail.com', '', 12333, '$2y$10$dea6Gccm9RMrjtMMhIsp/.MNtLAcpMepTTZ19pjhaKNDulWye2UN.', 'advcert/Draft Proposal Template.pdf', 8, ''),
('eddy', 'orina', 'eddyorina@gmail.com', '', 1234, '$2y$10$gBDx3vHvb9jKG9.QSYudSOR/winN2By6Xg0tvMTVFb2SGuVw86F.S', 'advcert/', 9, ''),
('wow', 'mow', 'wowmow@mail.wow', '', 134, '$2y$10$OF5aeyzUsT9ixS1dKvfwDeIrgrR/CMW3h4UwNPAEAnB.kcnYT29Qq', 'advcert/', 10, ''),
('', '', '', '', 0, '$2y$10$9Qm93HT7Et0vFQlFMo2ADusAvW.L5KFV9lJ.IUV1umbkK3FaKutM.', 'advcert/', 12, ''),
('', '', '', '', 0, '$2y$10$G1/.tyy.fGfA2hOxpx/dB.zX6v.9UnFp3XJxfsxaW96pwOmF7W7DG', 'advcert/', 13, ''),
('g', 'm', 'k', '', 54, '$2y$10$TSHkApGuuGwdOXIYbJgb2uNVVqC8Gf/O8woJnCaWeMaH6lWQC9J2W', 'advcert/Blooms Taxonomy Action Verbs.pdf', 14, ''),
('Dennis', 'Macharia', 'd.m@n', '', 20000001, '$2y$10$MVhbx9BuBP/tC4PnuOm/1OH/vhnxuQiJ2AMI5eQh9F0KwuJLbXbAG', 'advcert/djwr45ElLcZLNPy6.jpg', 15, ''),
('Ghost', 'Worker', 'g.w@pubg.com', '', 1234, '$2y$10$DtMwQv7n3LzQzvrWLJYjSuvJwgLPnWLrw.i81nmRRKjZF6HOOgzDC', 'advcert/0fmCELe2ON8sjuHu.jpg', 16, ''),
('George', 'Mwaniki', 'george.mwaniki@strathmore.edu', 'images/default.png', 123456, '$2y$10$ZBphlR3nHDnB6PabAOnmy.zjQvZte8J.FBmtPe0USkqPNfY4VlYk2', 'advcert/UI 0.PNG', 17, 'Hi My name is George I am 43 years old and a property owner i various counties i am certified by the kenya property owners to own the properties i have .');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookid` int(11) NOT NULL,
  `listid` int(100) NOT NULL,
  `stuid` int(100) NOT NULL,
  `advid` int(100) NOT NULL,
  `acceptance` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookid`, `listid`, `stuid`, `advid`, `acceptance`, `time`) VALUES
(6, 6, 14, 7, 'no', '2018-10-31 23:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentorid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `advid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `role` varchar(100) NOT NULL,
  `commentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `contactorid` int(11) NOT NULL,
  `contactedid` int(11) NOT NULL,
  `message` text NOT NULL,
  `timeline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listid` int(100) NOT NULL,
  `advfirstname` varchar(255) NOT NULL,
  `advlastname` varchar(255) NOT NULL,
  `accommodationtype` varchar(100) NOT NULL,
  `vacancies` int(100) NOT NULL,
  `amenities` text NOT NULL,
  `amenitiesincluded` varchar(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `Advid` int(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `locationinfo` varchar(60000) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `extrainfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listid`, `advfirstname`, `advlastname`, `accommodationtype`, `vacancies`, `amenities`, `amenitiesincluded`, `rating`, `Category`, `cost`, `Advid`, `photo`, `location`, `locationinfo`, `lat`, `lng`, `extrainfo`) VALUES
(2, 'George', 'Mwanix', 'hotel', 100, 'wifi', 'Yes', 0, 'Single', 100, 7, 'listphoto/apa1.jpg', 'Mombasa', '', -1.310379, 36.817619, ''),
(3, 'George', 'Mwanix', 'hostel', 100, '            wifi,gym,food', 'No', 1, 'Double', 2000, 7, 'listphoto/apa4.jpg', 'Kisii', '', -1.307066, 36.808865, ''),
(4, 'George', 'Mwanix', 'Hostel', 15, '            water only        ', 'Some', 2, 'Quadruple', 100, 7, 'listphoto/apa2.jpg', '          \r\n  Madaraka\r\n        ', '', -1.309126, 36.812473, ''),
(5, 'George', 'Mwanix', 'apartment', 1234, '                    food only', 'Some', 0, 'Double', 120, 7, 'listphoto/apa4.jpg', 'Kawangware\r\n  \r\n        ', '', -1.309094, 36.812492, ''),
(6, 'George', 'Mwanix', 'Hostel', 110, '  wifi,gym,kitchen,generator          ', 'No', 5, 'Double', 12000, 7, 'listphoto/apa3.jpg', '          \r\n  Githurai\r\n        ', 'Githurai is a peaceful place with lots of trees and flowers .It is a very good place study with a readily available market to buy all your food. ', -1.307065, 36.809792, ''),
(8, 'George', 'Mwanix', 'Hostel', 8, '   water,wifi       \r\n  \r\n        ', 'Some', 0, 'Double', 100, 7, 'listphoto/apa4.jpg', '          Near nairobi West Church but at ist avenue \r\n  \r\n        ', '', -1.306882, 36.819633, ''),
(9, 'George', 'Mwanix', 'Hostel', 10, 'wifi,water,lunch and supper', 'No', 0, 'Double', 10000, 7, 'listphoto/stuhomepage.jpg', 'Jogoo Road', '    \r\n  Jogoo road allows for easy access to the cbd and the various universities in the outskirts \r\n        ', -1.293639, 36.850578, '    Carry packed clothes .\r\n  \r\n        ');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Advid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `stuid` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rateid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idno` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admissionletter` varchar(200) NOT NULL,
  `stuid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `lastname`, `email`, `idno`, `password`, `admissionletter`, `stuid`) VALUES
('gman', 'mang', 'gman', 0, '$2y$10$O1PhTP/sTUlcZiku6PstauJkla2.UfZPsqcqAei6NkdXAj67GaioK', 'stuadle/djwr45ElLcZLNPy6.jpg', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertiser`
--
ALTER TABLE `advertiser`
  ADD PRIMARY KEY (`advid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rateid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertiser`
--
ALTER TABLE `advertiser`
  MODIFY `advid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rateid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
