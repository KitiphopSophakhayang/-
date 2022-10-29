-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 12:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(20) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Location`, `C-Date`, `Mod-Date`) VALUES
('a2001', 'Toon', 'Phathumthani', '2015-09-11', '2018-09-24'),
('a2002', 'keng', 'Phathumthani', '2018-09-15', '2022-09-12'),
('a2003', 'win', ' ChiangMai', '2015-09-18', '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(20) NOT NULL,
  `Number of Prodcuts` int(20) NOT NULL,
  `ProdcutsName` int(20) NOT NULL,
  `Price` float NOT NULL,
  `C-Date` date DEFAULT NULL,
  `Mod-Date` date DEFAULT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Locations` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Locations`, `Email`, `DateOfBirth`, `CDate`, `ModDate`, `Postcode`) VALUES
('c2001', 'Kitiphop555', 'Phathumthani', 'Kitiphop.shophakayan', '2012-09-26', '2015-09-10', '2018-09-20', 12120),
('c2002', 'Kimkeehee55', 'Phathumthani', 'keehee@gmail.com', '2013-09-19', '2018-09-14', '2019-09-20', 12120),
('c2003', 'Sompong', ' ChiangMai', 'Sompong@gmail.com', '2014-09-18', '2015-09-18', '2018-09-29', 50160),
('c2004', 'io555', 'Bankkok', 'ํho555h11kkkoho@gmail.com', '2022-09-09', '2022-09-23', '2022-09-24', 10150),
('c2005', 'oooppp555', 'Bankkok', 'ํhohoho@gmail.com', '2022-09-24', '2022-09-14', '2022-09-11', 11520);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL,
  `CartId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerId`, `CartId`) VALUES
('333555', '3366', '005225'),
('414', '141ff', '114411'),
('44', '55', '555'),
('9991112', '9999991', '999998877'),
('hhh777', '777', 'hhjjj88'),
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003'),
('v1004', 'c2004', 'cc1004'),
('v1005', 'c2005', 'cc100555');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(20) NOT NULL,
  `LocationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `LocationName`) VALUES
('l1001', 'Pathumthani'),
('l1002', 'ฺBangkok'),
('l1003', 'Phuket');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(20) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `Deleted` tinyint(1) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Price`, `Deleted`, `CDate`, `ModDate`) VALUES
('p2001', 'champoo', 200, 50, '2020-09-10', '2021-09-11'),
('p2002', 'condisionhhhh', 250, 50, '2022-09-15', '2022-09-30'),
('p2003', 'detegent', 300, 50, '2021-09-16', '2023-09-21'),
('p2004', 'yoooyoooo', 500, 0, '2022-09-07', '2022-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotionId` varchar(50) NOT NULL,
  `promotionName` varchar(50) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotionId`, `promotionName`, `CDate`, `ModDate`) VALUES
('p1001', 'โปรโมชั่น8.8', '2022-09-20', '2022-09-30'),
('p1002', 'โปรโมชั่น12.12', '2022-09-23', '2023-09-14'),
('p1003', 'โปรโมชั่นส่งฟรี', '2022-09-21', '2023-09-29'),
('p1004', 'oopoopoop5555', '2022-09-01', '2022-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
