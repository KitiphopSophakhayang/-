-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 08:36 PM
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
-- Database: `dbfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminName` varchar(10) NOT NULL,
  `CDate` date NOT NULL,
  `Locations` varchar(10) NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `CDate`, `Locations`, `ModDate`) VALUES
('a1001', 'Jaidee', '2022-09-07', 'Korea', '2022-09-02'),
('a1002', 'Jairak', '2022-09-07', 'Korea', '2022-09-02'),
('a1003', 'Jaimaidee', '2022-09-07', 'Korea', '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `Products` varchar(10) NOT NULL,
  `NumberOfProducts` int(10) NOT NULL,
  `ModDate` date NOT NULL,
  `CDate` date NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Price`, `Products`, `NumberOfProducts`, `ModDate`, `CDate`, `Total`) VALUES
('cc1001', 350, 'แชมพู', 1, '2022-09-02', '2022-09-07', 350),
('cc1002', 350, 'ครีมนวด', 1, '2022-09-04', '2022-09-10', 350),
('cc1003', 114, 'ผงซักฟอก', 1, '2022-09-02', '2022-09-07', 114);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Locations` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Locations`, `Email`, `DateOfBirth`, `CDate`, `ModDate`, `Postcode`) VALUES
('', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
('c2001', 'Somsak', 'Banna city', 'somsakrakna@gmail.co', '2002-10-07', '2022-09-05', '2022-09-02', 12345),
('c2002', 'Kukki', 'naijai city', 'Kukkikukkuu@gmail.co', '1999-09-06', '2022-09-10', '2022-09-04', 54321),
('c2003', 'Jisong', 'Korea', 'nctzen@gmail.com', '2002-02-05', '2022-09-07', '2022-09-02', 5020);

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
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(10) NOT NULL,
  `LocationName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `LocationName`) VALUES
('l1001', 'Banna city'),
('l1002', 'naijai cit'),
('l1003', 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(10) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Price` float NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `CDate`, `ModDate`, `Price`, `Deleted`) VALUES
('p1001', 'แชมพู', '2022-09-07', '2022-09-02', 350, 1),
('p1002', 'ครีมนวด', '2022-09-10', '2022-09-04', 350, 1),
('p1003', 'ผงซักฟอก', '2022-09-07', '2022-09-02', 114, 1);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PromotionID` varchar(10) NOT NULL,
  `PromotionName` varchar(20) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`CartId`);

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
  ADD PRIMARY KEY (`PromotionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
