-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 09:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automart`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Invoice_Code` varchar(8) NOT NULL,
  `Member_ID` varchar(8) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(15) NOT NULL DEFAULT 'Pending',
  `Payment_Status` varchar(10) NOT NULL DEFAULT 'Not Paid',
  `Payment_Method` varchar(100) NOT NULL,
  `Shipping_Address` varchar(10000) NOT NULL,
  `Billing_Address` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` varchar(8) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type` int(1) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Active',
  `Member_Since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Last_Logged_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Total_Purchase` int(8) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `Password`, `Name`, `Email`, `Type`, `Status`, `Member_Since`, `Last_Logged_in`, `Total_Purchase`) VALUES
('1', '123456', 'Ryhan Hosain', 'ryhan@gmail.com', 1, 'Active', '2017-12-27 22:54:56', '2017-12-27 22:54:56', 0),
('2', '123456', 'ryhan sohan', 'ry@mail.com', 0, 'Active', '2017-12-27 22:59:37', '2017-12-27 22:59:37', 0),
('3', '123456', 'r hossain', 'ray@mail.com', 1, 'Active', '2017-12-27 22:59:37', '2017-12-27 22:59:37', 0),
('4', '123654', 'R Hossain', 'rh@mail.com', 0, '', '2017-12-27 23:14:08', '2017-12-27 23:14:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `Order_Code` varchar(8) NOT NULL,
  `Product_Code` varchar(8) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Invoice_Code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Code` varchar(8) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Quantity` int(8) NOT NULL,
  `Total_Sells` int(8) NOT NULL DEFAULT '0',
  `Price` float NOT NULL,
  `Last_Sold` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Catagory` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Code`, `Name`, `Quantity`, `Total_Sells`, `Price`, `Last_Sold`, `Catagory`, `Brand`, `Description`) VALUES
('1', 'red_sports_seat', 10, 2, 25001, '0000-00-00 00:00:00', 'Interior', 'Cybex', 'Leather seat red color'),
('2', 'Tire 1', 20, 0, 2500, '0000-00-00 00:00:00', 'Exterior', 'Firestone', 'Black Tire'),
('3', 'airfilter', 12, 2, 1200, '0000-00-00 00:00:00', 'Interior', 'AJ', 'Multi Directional Air Filter'),
('4', 'brake_speed_sensor', 14, 0, 2130, '0000-00-00 00:00:00', 'Exterior', 'CG', 'Break Speed Scensor'),
('5', 'bulb_socket', 213, 0, 1230, '0000-00-00 00:00:00', 'Interior', 'CG', 'Bulb Socket'),
('6', 'bumper1', 213, 0, 12300, '0000-00-00 00:00:00', 'Exterior', 'ASD', 'Black Bumper'),
('7', 'bumper3', 76, 0, 7768, '0000-00-00 00:00:00', 'Exterior', 'ADA', 'Red Bumper'),
('8', 'carburator1', 325, 0, 4590, '0000-00-00 00:00:00', 'Interior', 'ANAB', 'Carburator'),
('9', 'cardvd', 765, 0, 8680, '0000-00-00 00:00:00', 'Interior', 'FSF', 'DVD Player');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Invoice_Code`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`Order_Code`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
