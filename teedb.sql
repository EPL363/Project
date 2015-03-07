-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 02:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `Company_Name` varchar(100) NOT NULL,
  `Lequl_State` varchar(50) DEFAULT NULL,
  `Address` varchar(100)  NOT NULL,
  `PostCode` int(6) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Telephone` int(10) NOT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  `Type` int(1) DEFAULT NULL,
  `Person` int(10) NOT NULL,
  `Commersial_Name` varchar(100)  DEFAULT NULL,
  `Other_Name` varchar(100) DEFAULT NULL,
  `CEO` varchar(100)  NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comperson`
--

CREATE TABLE IF NOT EXISTS `comperson` (
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Address` varchar(30)  NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Fax` int(10) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `PostCode` int(6) NOT NULL,
  `City` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `containschemical`
--

CREATE TABLE IF NOT EXISTS `containschemical` (
  `Name` varchar(30) NOT NULL,
  `Cas` varchar(12) NOT NULL,
  `Quantity` float(8,4) NOT NULL,
  `Saving_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Chemical_Name` varchar(30) NOT NULL,
  `Commercial_Name` varchar(30) NOT NULL,
  `Uses` varchar(255) DEFAULT NULL,
  `State` varchar(10) DEFAULT NULL,
  `Sort` varchar(255) DEFAULT NULL,
  `Volume` varchar(30) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `Pdf_ID` int(11) NOT NULL,
  `Image_ID` int(11) NOT NULL,
  `Constructor` varchar(100) NOT NULL,
  `SavingDate` date NOT NULL,
  `Temp` bit(1) NOT NULL,
  `Final` bit(1) NOT NULL,
  `Append` bit(1) NOT NULL,
  `Valid` bit(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `substance`
--

CREATE TABLE IF NOT EXISTS `substance` (
  `Name` varchar(150) NOT NULL,
  `Cas` varchar(12) NOT NULL,
  `Ec` varchar(9) DEFAULT NULL,
  `Iupac` varchar(255) DEFAULT NULL,
  `Other_Name` varchar(50) DEFAULT NULL,
  `Clp` varchar(100) DEFAULT NULL,
  `Sort` bit(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE IF NOT EXISTS `supply` (
  `Supplier` varchar(100)  NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Saving_Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(8)  NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Company` varchar(100)  NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`Company_Name`), ADD FULLTEXT KEY `Company_Name` (`Company_Name`);

--
-- Indexes for table `comperson`
--
ALTER TABLE `comperson`
 ADD PRIMARY KEY (`Telephone`);

--
-- Indexes for table `containschemical`
--
ALTER TABLE `containschemical`
 ADD PRIMARY KEY (`Name`,`Cas`,`Saving_Date`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`Commercial_Name`,`SavingDate`), ADD KEY `Pdf_ID` (`Pdf_ID`), ADD KEY `Image_ID` (`Image_ID`), ADD KEY `Constructor` (`Constructor`);

--
-- Indexes for table `substance`
--
ALTER TABLE `substance`
 ADD PRIMARY KEY (`Cas`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
 ADD PRIMARY KEY (`Supplier`,`Product`,`Saving_Date`), ADD KEY `Product` (`Product`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`Username`), ADD KEY `Company` (`Company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
