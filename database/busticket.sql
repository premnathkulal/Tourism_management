-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 07:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `busName` varchar(255) NOT NULL,
  `busDate` varchar(255) NOT NULL,
  `busTime` varchar(255) NOT NULL,
  `busDesA` varchar(255) DEFAULT NULL,
  `busDesB` varchar(255) DEFAULT NULL,
  `busType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `busName`, `busDate`, `busTime`, `busDesA`, `busDesB`, `busType`) VALUES
(21, 'Airavatha', '2018-12-01', '7.00 AM', 'Banglore', 'Manglore', 'AC'),
(32, 'Raja Hamsa', '2020-01-01', '7.00 AM', 'Hassan', 'Udupi', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `txnId` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `busId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `phone`, `ticket`, `amount`, `txnId`, `email`, `busId`) VALUES
(9, '78945612', 'b3, b4, c4, ', 1350, '2', '1@gmail.com', 21),
(10, '123456789', 'b1, c1, d1, ', 1350, '2', '1@gmail.com', 21),
(11, '8722275074', 'a1, a2, ', 900, '2', '1@gmail.com', 26),
(12, '8722275074', 'e1, e2, e3, ', 1350, '2', '1@gmail.com', 21),
(13, '8722275074', 'e4, ', 450, '2', '1@gmail.com', 21),
(14, '8722275074', '', 0, '2', '1@gmail.com', 21),
(15, '8722275074', '', 0, '2', '1@gmail.com', 21),
(16, '8722275074', '', 0, '2', '1@gmail.com', 21),
(17, '8722275074', '', 0, '2', '1@gmail.com', 21),
(18, '548795', 'f3, f4, ', 900, '2', '1@gmail.com', 21),
(19, '2', '', 0, '2', '1@gmail.com', 28),
(20, '5465', '', 0, '2', '1@gmail.com', 28),
(21, '123', '', 0, '2', '1@gmail.com', 28),
(22, '2', 'b1, b2, ', 900, '2', '1@gmail.com', 26),
(23, '2', '', 0, '2', '1@gmail.com', 28),
(24, '2020', '', 0, '2', '1@gmail.com', 21),
(25, '123', 'a2, a3, ', 900, '2', '1@gmail.com', 21),
(26, '789789', 'a4, j1, j4, ', 600, '2', '1@gmail.com', 32),
(27, '2015', 'b2, b3, ', 900, '2', '1@gmail.com', 21),
(28, '2020', 'e3, e4, ', 400, '2', '1@gmail.com', 32),
(29, '8722275074', 'd3, e3, ', 900, '2', '1@gmail.com', 21),
(30, '2', 'a1, d1, ', 400, '2', '1@gmail.com', 32);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `location`, `email`, `password`) VALUES
(1, 'Dhaka', 'counter@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `counteradmin`
--

CREATE TABLE `counteradmin` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counteradmin`
--

INSERT INTO `counteradmin` (`id`, `location`, `email`, `password`) VALUES
(1, 'Dhaka', 'cadmin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `disAmount` int(11) NOT NULL DEFAULT 0,
  `disStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `code`, `disAmount`, `disStatus`) VALUES
(1, 'diu100', 100, 'Currenly you are enjoying 100 taka discount'),
(3, 'cse75', 75, 'Enjoy 75 taka discount');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `txnId` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `busId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `phone`, `ticket`, `amount`, `txnId`, `email`, `busId`) VALUES
(39, '78945612', 'b3, b4, c4, ', '1350', '2', '1@gmail.com', '21'),
(40, '123456789', 'b1, c1, d1, ', '1350', '2', '1@gmail.com', '21'),
(41, '8722275074', 'a1, a2, ', '900', '2', '1@gmail.com', '26'),
(42, '8722275074', 'e1, e2, e3, ', '1350', '2', '1@gmail.com', '21'),
(43, '8722275074', 'e4, ', '450', '2', '1@gmail.com', '21'),
(44, '8722275074', '', '0', '2', '1@gmail.com', '21'),
(45, '8722275074', '', '0', '2', '1@gmail.com', '21'),
(46, '8722275074', '', '0', '2', '1@gmail.com', '21'),
(47, '8722275074', '', '0', '2', '1@gmail.com', '21'),
(48, '548795', 'f3, f4, ', '900', '2', '1@gmail.com', '21'),
(49, '2', '', '0', '2', '1@gmail.com', '28'),
(50, '5465', '', '0', '2', '1@gmail.com', '28'),
(51, '123', '', '0', '2', '1@gmail.com', '28'),
(52, '2', 'b1, b2, ', '900', '2', '1@gmail.com', '26'),
(53, '2', '', '0', '2', '1@gmail.com', '28'),
(54, '2020', '', '0', '2', '1@gmail.com', '21'),
(55, '123', 'a2, a3, ', '900', '2', '1@gmail.com', '21'),
(56, '789789', 'a4, j1, j4, ', '600', '2', '1@gmail.com', '32'),
(57, '2015', 'b2, b3, ', '900', '2', '1@gmail.com', '21'),
(58, '2020', 'e3, e4, ', '400', '2', '1@gmail.com', '32'),
(59, '8722275074', 'd3, e3, ', '900', '2', '1@gmail.com', '21'),
(60, '2', 'a1, d1, ', '400', '2', '1@gmail.com', '32');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `cityF` varchar(255) NOT NULL,
  `cityT` varchar(255) NOT NULL,
  `fare` int(11) DEFAULT NULL,
  `busType` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `cityF`, `cityT`, `fare`, `busType`) VALUES
(5, 'Banglore', 'Manglore', 450, 'AC'),
(20, 'Hassan', 'Udupi', 200, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `busDate` varchar(255) NOT NULL,
  `busTime` varchar(255) NOT NULL,
  `busDesA` varchar(255) NOT NULL,
  `busDesB` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `email`, `ticket`, `busDate`, `busTime`, `busDesA`, `busDesB`, `status`) VALUES
(78, '1@gmail.com', 'a1, d1, ', '2020-01-01', '7.00 AM', 'Hassan', 'Udupi', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `val` int(11) NOT NULL DEFAULT 0,
  `txnId` varchar(255) DEFAULT NULL,
  `busId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `state`, `val`, `txnId`, `busId`) VALUES
(1492, 'A1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '24', '21'),
(1493, 'A2.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1494, 'A3.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1495, 'A4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '24', '21'),
(1496, 'B1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1497, 'B2.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1498, 'B3.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1499, 'B4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1500, 'C1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1501, 'C2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '1', '21'),
(1502, 'C3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1503, 'C4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1504, 'D1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1505, 'D2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1506, 'D3.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1507, 'D4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '1', '21'),
(1508, 'E1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1509, 'E2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1510, 'E3.2018-12-01.7.00 AM.Banglore.Manglore.21', 1, '2', '21'),
(1511, 'E4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1512, 'F1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1513, 'F2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1514, 'F3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1515, 'F4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1516, 'G1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1517, 'G2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1518, 'G3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1519, 'G4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '2', '21'),
(1520, 'H1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '27', '21'),
(1521, 'H2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '27', '21'),
(1522, 'H3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '321321', '21'),
(1523, 'H4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '321321', '21'),
(1524, 'I1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1525, 'I2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '30', '21'),
(1526, 'I3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '33', '21'),
(1527, 'I4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '33', '21'),
(1528, 'J1.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '888654', '21'),
(1529, 'J2.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '888654', '21'),
(1530, 'J3.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '28', '21'),
(1531, 'J4.2018-12-01.7.00 AM.Banglore.Manglore.21', 0, '28', '21'),
(2732, 'A1.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2733, 'A2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2734, 'A3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2735, 'A4.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2736, 'B1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2737, 'B2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2738, 'B3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2739, 'B4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2740, 'C1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2741, 'C2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2742, 'C3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2743, 'C4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2744, 'D1.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2745, 'D2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2746, 'D3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2747, 'D4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2748, 'E1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2749, 'E2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2750, 'E3.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2751, 'E4.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2752, 'F1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2753, 'F2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2754, 'F3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2755, 'F4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2756, 'G1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2757, 'G2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2758, 'G3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2759, 'G4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2760, 'H1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2761, 'h2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2762, 'H3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2763, 'H4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2764, 'I1.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2765, 'I2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2766, 'I3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2767, 'I4.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2768, 'J1.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32'),
(2769, 'J2.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2770, 'J3.2020-01-01.7.00 AM.Hassan.Udupi.32', 0, NULL, '32'),
(2771, 'J4.2020-01-01.7.00 AM.Hassan.Udupi.32', 1, '2', '32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` int(11) DEFAULT NULL,
  `disAmount` int(11) DEFAULT 0,
  `disStatus` varchar(255) DEFAULT NULL,
  `tAmount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `address`, `password`, `nid`, `disAmount`, `disStatus`, `tAmount`) VALUES
(5, '1', '1@gmail.com', '1', '1', '1', NULL, 0, NULL, 0),
(6, '2', '2@gmail.com', '2', '2', '2', NULL, 0, NULL, 0),
(8, '9', '9@gmail.com', '9', '9', '9', NULL, 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counteradmin`
--
ALTER TABLE `counteradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counteradmin`
--
ALTER TABLE `counteradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2772;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
