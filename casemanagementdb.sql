-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 02:03 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casemanagementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_infomation`
--

CREATE TABLE `basic_infomation` (
  `id` int NOT NULL,
  `matterType` varchar(128) NOT NULL,
  `numberingYear` int NOT NULL,
  `registeredDate` date NOT NULL,
  `caseNo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `basic_infomation`
--

INSERT INTO `basic_infomation` (`id`, `matterType`, `numberingYear`, `registeredDate`, `caseNo`) VALUES
(1, 'lg', 2017, '2021-04-06', 'lg/2017/1'),
(2, 'lg', 2015, '2021-06-04', 'lg/2015/1'),
(3, 'gg', 2018, '2021-06-13', 'gg/2018/1'),
(4, 'Civil appeal', 2020, '2021-06-26', 'Civil appeal/2020/1'),
(5, 'criminal appeal', 2015, '2021-06-05', 'criminal appeal/2015/1'),
(6, 'Writ application', 2016, '2021-06-05', 'Writ application/2016/1'),
(7, 'criminal appeal', 2015, '2021-06-05', 'criminal appeal/2015/1'),
(8, 'Writ application', 2020, '2021-07-03', 'Writ application/2020/1'),
(9, 'criminal appeal', 2015, '2021-07-03', 'criminal appeal/2015/1');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `id` int NOT NULL,
  `caseNo` varchar(128) NOT NULL,
  `lowerCourt` varchar(128) NOT NULL,
  `lowerCourtNo` varchar(128) NOT NULL,
  `stampDuty` varchar(128) NOT NULL,
  `natureOfCase` varchar(128) NOT NULL,
  `recieptNo` varchar(128) NOT NULL,
  `prison` varchar(128) NOT NULL,
  `currentLocation` varchar(128) NOT NULL,
  `recordRoom` varchar(128) NOT NULL,
  `rackNo` varchar(128) NOT NULL,
  `counterNo` varchar(128) NOT NULL,
  `caseHistory` text NOT NULL,
  `fileActionHistory` text NOT NULL,
  `date` date NOT NULL,
  `caseState` varchar(128) NOT NULL,
  `courtRoom` varchar(128) NOT NULL,
  `nextStep` varchar(128) NOT NULL,
  `nextDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`id`, `caseNo`, `lowerCourt`, `lowerCourtNo`, `stampDuty`, `natureOfCase`, `recieptNo`, `prison`, `currentLocation`, `recordRoom`, `rackNo`, `counterNo`, `caseHistory`, `fileActionHistory`, `date`, `caseState`, `courtRoom`, `nextStep`, `nextDate`) VALUES
(1, '112abc', 'gampaha', '45', '5', 'murder', '45', 'mahara', 'record room', '1', '2', '3', 'ooo', 'ppp', '2021-04-04', 'uuu', '5', 'kkk', '2021-05-26'),
(2, '112abc', 'gampaha', '45', '5', 'murder', '45', 'mahara', 'record room', '1', '1', '1', 'ooo', 'ppp', '2021-04-05', 'uuu', '5', 'kkk', '2021-04-30'),
(3, 'lg/2017/1', 'gampaha', '45', '5', 'murder', '45', 'mahara', 'record room', '1', '1', '1', 'ooo', 'ppp', '2021-04-08', 'uuu', '5', 'kkk', '2021-04-06'),
(4, 'ccc', 'minuwangoda', '3', '5', 'murder', '34', 'mahara', 'judge2', '1', '2', '3', 'kk', 'kk', '2021-05-08', 'kk', '5', 'fail', '2021-08-18'),
(5, '456', 'minuwangoda', '3', '5', 'murder', '34', 'mahara', 'judge2', '1', '2', '2', 'kk', 'kk', '2021-07-24', 'kk', '5', 'fail', '2021-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `checkin_details`
--

CREATE TABLE `checkin_details` (
  `checkInId` int NOT NULL,
  `date` date NOT NULL,
  `fileNo` varchar(128) NOT NULL,
  `currentLocation` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkin_details`
--

INSERT INTO `checkin_details` (`checkInId`, `date`, `fileNo`, `currentLocation`) VALUES
(4, '2021-06-06', 'rt', 'judge2'),
(5, '2021-06-20', 'ccc', 'judge2'),
(6, '2021-07-23', '13', 'judge2'),
(7, '2021-07-22', 'kl456', 'secretary');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_details`
--

CREATE TABLE `checkout_details` (
  `checkoutId` int NOT NULL,
  `date` date NOT NULL,
  `fileNo` varchar(128) NOT NULL,
  `checkoutTo` varchar(128) NOT NULL,
  `reason` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout_details`
--

INSERT INTO `checkout_details` (`checkoutId`, `date`, `fileNo`, `checkoutTo`, `reason`) VALUES
(9, '2021-06-24', 'asswewd', 'gggg', 'fddgf'),
(10, '2021-07-24', '123', 'counter2', 'hhh'),
(11, '2021-07-18', 'kl456', 'record room', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `checkoutId` int NOT NULL,
  `date` date NOT NULL,
  `fileNo` varchar(128) NOT NULL,
  `checkoutTo` varchar(128) NOT NULL,
  `reason` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`checkoutId`, `date`, `fileNo`, `checkoutTo`, `reason`) VALUES
(1, '2021-03-28', 'qwe123', 'dsdad', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `difendent's`
--

CREATE TABLE `difendent's` (
  `id` int NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Address` varchar(128) NOT NULL,
  `Solicitor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `difendent's`
--

INSERT INTO `difendent's` (`id`, `Name`, `Address`, `Solicitor`) VALUES
(1, 'ooo', 'ppp', 'iii'),
(2, 'saman', 'colombo', 'Mr.pradeep'),
(3, 'saman', '65', 'Mr.pradeep');

-- --------------------------------------------------------

--
-- Table structure for table `plantiff's`
--

CREATE TABLE `plantiff's` (
  `id` int NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Address` varchar(128) NOT NULL,
  `Solicitor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plantiff's`
--

INSERT INTO `plantiff's` (`id`, `Name`, `Address`, `Solicitor`) VALUES
(1, 'abc', '456h', 'xyz'),
(5, 'qwe', '456h', 'rty'),
(6, 'qwe', '456h', 'rty'),
(7, 'abc', '456h', 'asd'),
(8, 'jkll', 'iop', 'rty'),
(9, 'wwwwwwwwwwww', 'wwwwwwwwwww', 'wwwwwwwwww'),
(10, 'aaaaaaa', 'aaaaa', 'aaaaaa'),
(11, 'qwe', '456h', 'rty'),
(12, 'wwwwwwwwwwww', 'wwwwwwwwwww', 'rty'),
(13, 'abc', 'iop', 'rty'),
(14, 'awe', '65', 'qqq'),
(15, 'nadun', 'gampaha', 'Mr.pradeep'),
(16, 'nadun', 'colombo', 'Mr.pradeep');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int NOT NULL,
  `userName` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `userName`, `password`) VALUES
(1, 'Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `witness's`
--

CREATE TABLE `witness's` (
  `id` int NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `witness's`
--

INSERT INTO `witness's` (`id`, `Name`, `Address`) VALUES
(1, 'www', 'ggg'),
(2, 'nadun', 'Moratuwa'),
(3, 'awe', 'colombo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_infomation`
--
ALTER TABLE `basic_infomation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkin_details`
--
ALTER TABLE `checkin_details`
  ADD PRIMARY KEY (`checkInId`);

--
-- Indexes for table `checkout_details`
--
ALTER TABLE `checkout_details`
  ADD PRIMARY KEY (`checkoutId`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`checkoutId`);

--
-- Indexes for table `difendent's`
--
ALTER TABLE `difendent's`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plantiff's`
--
ALTER TABLE `plantiff's`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `witness's`
--
ALTER TABLE `witness's`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_infomation`
--
ALTER TABLE `basic_infomation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkin_details`
--
ALTER TABLE `checkin_details`
  MODIFY `checkInId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkout_details`
--
ALTER TABLE `checkout_details`
  MODIFY `checkoutId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `checkoutId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `difendent's`
--
ALTER TABLE `difendent's`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plantiff's`
--
ALTER TABLE `plantiff's`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `witness's`
--
ALTER TABLE `witness's`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
