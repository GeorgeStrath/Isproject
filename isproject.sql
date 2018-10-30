-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 09:54 AM
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
  `idno` int(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certfile` varchar(200) NOT NULL,
  `advid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertiser`
--

INSERT INTO `advertiser` (`firstname`, `lastname`, `email`, `idno`, `password`, `certfile`, `advid`) VALUES
('George', 'Mwanix', 'gman', 121, '$2y$10$pahh8hmJ47QXUocMyRu3wOtkzVVjVWhdYF2ogOcnSj8Bo5ayPaj4a', 'advcert/individual report.pdf', 7),
('Dennis', 'Ngugi', 'dg@mail.com', 12333, '$2y$10$dea6Gccm9RMrjtMMhIsp/.MNtLAcpMepTTZ19pjhaKNDulWye2UN.', 'advcert/Draft Proposal Template.pdf', 8),
('eddy', 'orina', 'eddyorina@gmail.com', 1234, '$2y$10$gBDx3vHvb9jKG9.QSYudSOR/winN2By6Xg0tvMTVFb2SGuVw86F.S', 'advcert/', 9),
('wow', 'mow', 'wowmow@mail.wow', 134, '$2y$10$OF5aeyzUsT9ixS1dKvfwDeIrgrR/CMW3h4UwNPAEAnB.kcnYT29Qq', 'advcert/', 10),
('', '', '', 0, '$2y$10$9Qm93HT7Et0vFQlFMo2ADusAvW.L5KFV9lJ.IUV1umbkK3FaKutM.', 'advcert/', 12),
('', '', '', 0, '$2y$10$G1/.tyy.fGfA2hOxpx/dB.zX6v.9UnFp3XJxfsxaW96pwOmF7W7DG', 'advcert/', 13),
('g', 'm', 'k', 54, '$2y$10$TSHkApGuuGwdOXIYbJgb2uNVVqC8Gf/O8woJnCaWeMaH6lWQC9J2W', 'advcert/Blooms Taxonomy Action Verbs.pdf', 14),
('Dennis', 'Macharia', 'd.m@n', 20000001, '$2y$10$MVhbx9BuBP/tC4PnuOm/1OH/vhnxuQiJ2AMI5eQh9F0KwuJLbXbAG', 'advcert/djwr45ElLcZLNPy6.jpg', 15),
('Ghost', 'Worker', 'g.w@pubg.com', 1234, '$2y$10$DtMwQv7n3LzQzvrWLJYjSuvJwgLPnWLrw.i81nmRRKjZF6HOOgzDC', 'advcert/0fmCELe2ON8sjuHu.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listid` int(100) NOT NULL,
  `accommodationtype` varchar(100) NOT NULL,
  `vacancies` int(100) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `amenitiesincluded` varchar(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `Advid` int(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listid`, `accommodationtype`, `vacancies`, `amenities`, `amenitiesincluded`, `rating`, `Category`, `cost`, `Advid`, `photo`, `location`, `lat`, `lng`) VALUES
(2, 'hotel', 100, 'wifi', 'Yes', 0, 'Single', 10, 7, 'listphoto/apa1.jpg', 'Mombasa', -1.310379, 36.817619),
(3, 'hostel', 100, '            wifi,gym,food', 'No', 1, 'Double', 2000, 7, 'listphoto/apa4.jpg', 'Kisii', -1.307066, 36.808865),
(4, 'Hostel', 15, '            water only        ', 'Some', 0, 'Quadruple', 100, 7, 'listphoto/apa2.jpg', '          \r\n  Madaraka\r\n        ', -1.309126, 36.812473),
(5, 'apartment', 1234, '                    food only', 'Some', 0, 'Double', 120, 7, 'listphoto/apa5.jpg', 'Kawangware\r\n  \r\n        ', -1.309094, 36.812492),
(6, 'Hostel', 110, '  wifi,gym,kitchen,generator          ', 'No', 5, 'Double', 12000, 7, 'listphoto/apa3.jpg', '          \r\n  Githurai\r\n        ', -1.307065, 36.809792);

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
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listid`);

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
  MODIFY `advid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
