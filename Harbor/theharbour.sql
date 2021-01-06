-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theharbour`
--

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `AnalystID` int(11) NOT NULL,
  `ImporterID` int(11) NOT NULL,
  `CaseDate` date NOT NULL,
  `PaymentMethod` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`ID`, `Name`, `EmployeeID`, `AnalystID`, `ImporterID`, `CaseDate`, `PaymentMethod`) VALUES
(27, 'shampoo shipment', 19, 18, 24, '2020-11-30', 'paypal'),
(28, 'Jojo', 19, 18, 24, '2020-11-30', 'paypal'),
(29, 'milk shipment', 23, 18, 24, '2020-11-29', 'cash'),
(30, 'Ahmed', 19, 18, 24, '2020-11-30', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `case_details`
--

CREATE TABLE `case_details` (
  `CaseID` int(11) NOT NULL,
  `EstimatedDate` date NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_details`
--

INSERT INTO `case_details` (`CaseID`, `EstimatedDate`, `ProductID`) VALUES
(30, '0000-00-00', 8),
(28, '2021-01-21', 7),
(27, '2021-01-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `central_lab`
--

CREATE TABLE `central_lab` (
  `ID` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `AnalystID` int(11) NOT NULL,
  `lab_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `harbor`
--

CREATE TABLE `harbor` (
  `ID` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_types`
--

CREATE TABLE `lab_types` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_types`
--

INSERT INTO `lab_types` (`ID`, `Name`) VALUES
(1, 'Temperature'),
(2, 'Pressure');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ParentKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `ImportedCountry` text NOT NULL,
  `Description` text NOT NULL,
  `EnteranceDate` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `ProductType` int(11) NOT NULL,
  `deliverFlag` int(11) NOT NULL,
  `driverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `ImportedCountry`, `Description`, `EnteranceDate`, `Quantity`, `Weight`, `ProductType`, `deliverFlag`, `driverID`) VALUES
(1, 'shampoo', 'egypt', 'shampoo msh gamed', '2020-12-15', 234, 23, 0, 2, 36),
(7, 'Ananas', 'Indonisia', 'ananas mostawrad ', '2020-12-03', 30, 30, 0, 2, 36),
(8, 'Bate5', 'America', 'bate5 taza we zy el fol', '2020-12-03', 60, 30, 0, 2, 36),
(9, 'Car', 'Germany', 'BMW Cars', '2020-12-02', 3, 6345, 0, 3, 36),
(11, 'PineApple', 'istanbul', 'pineapple apple apple pen', '2020-12-04', 30, 20, 0, 3, 36),
(12, 'Manga', 'Saudia', 'manga nice', '2020-12-30', 50, 30, 0, 1, 0),
(13, 'pen', 'Germany', 'e2laam 7ebr', '2020-12-03', 50, 30, 0, 3, 36),
(14, 'makarona', 'italy', 'spaghetti', '2020-12-01', 40, 20, 0, 3, 36),
(15, '3enab', 'Sweed', '3enab gamed', '2020-12-28', 50, 25, 0, 2, 36);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Task_Name` varchar(125) NOT NULL,
  `AnalystID` int(11) DEFAULT NULL,
  `Description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `Product_ID`, `Task_Name`, `AnalystID`, `Description`) VALUES
(3, 1, 'lol', 18, 'very daaaaaaaaaaamn'),
(6, 9, 'Tofa7', 35, 'l3ba'),
(7, 8, 'Bate5 Mesteweeee2354234', 33, 'bate5 taza we zy el fol');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `ID` int(11) NOT NULL,
  `DriverID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE `trip_details` (
  `TripID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Password` int(100) NOT NULL,
  `Address` text NOT NULL,
  `UserType` int(5) NOT NULL,
  `Telephone` text NOT NULL,
  `Email` text NOT NULL,
  `NationalID` int(11) NOT NULL,
  `Salary` int(244) NOT NULL,
  `WorkingHours` int(244) NOT NULL,
  `Description` text NOT NULL,
  `ParentKey` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Password`, `Address`, `UserType`, `Telephone`, `Email`, `NationalID`, `Salary`, `WorkingHours`, `Description`, `ParentKey`) VALUES
(18, 'Jojo', 0, 'Giza', 3, '1058362770', 'spiderman@gmail.com', 2147483647, 6000, 5, ' Analyst', NULL),
(19, 'Ahmed', 0, 'Giza', 1, '7543425678', 'ahmed@gmail.com', 2155636, 7000, 15, ' Harbor Employee', NULL),
(23, 'Yusuf', 0, 'hna', 1, '01846628', 'sahkgbi@hfba.com', 17541910, 5000, 7, ' Harbor Employee', NULL),
(24, 'ImporterMAn', 0, 'Egypt', 5, '78975654', 'aa@agha.com', 5248896, 0, 0, 'importer', NULL),
(26, 'omar', 1234, 'wvrvwe', 4, '235436512', 'omafwec@gmial.com', 21534123, 8000, 8, 'Manager', NULL),
(32, 'sofy', 1234, 'fiza', 6, '124574', 'wqfewf@gmail.com', 2147483647, 4000, 6, 'Scheduler', NULL),
(33, 'abdo', 1234, 'October', 3, '2354234', 'loleta@gmail.com', 345234234, 6000, 5, ' Analyst', NULL),
(35, 'gomaa', 1234, 'Paris', 3, '345345', '432134@gmail.com', 346234, 6000, 5, ' Analyst', NULL),
(36, 'sofyDriver', 1234, 'Haram', 2, '8234122323', 'mero@gmail.com', 2147483647, 4000, 9, ' Driver', NULL),
(37, 'Mohsen', 1234, 'Haram', 3, '23523', '2342@gmail.com', 67456234, 6000, 5, ' Analyst', NULL),
(39, 'AhmedDriver', 1234, 'Alex', 2, '0124234232', 'Ahmed@gmail.com', 2147483647, 3000, 8, ' Driver', NULL),
(40, 'omarEmp', 1234, 'Ma3ade', 1, '043546232', 'omarEmp@gmail.com', 346345234, 5000, 7, ' Harbor Employee', NULL),
(41, 'SofyAnalyst', 1234, 'Haram', 3, '01142345234', 'mezo@gmailc.om', 2147483647, 6000, 5, ' Analyst', NULL),
(42, 'SofyManager', 1234, 'Haram', 4, '0235234123', 'sofyMan@gmail.com', 326456234, 8000, 8, ' Manager', NULL),
(43, 'SofyImporter', 1234, 'Haram', 5, '01142345234', 'SofyImporter@gmail.com', 2147483647, 0, 0, 'importer', NULL),
(44, 'SofyScheduler', 1234, 'Haram', 6, '011123423', 'sofyImporter@gmail.com', 342312, 4000, 6, ' Scheduler', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`ID`, `Name`) VALUES
(1, 'employee'),
(2, 'driver'),
(3, 'analyst'),
(4, 'manager'),
(5, 'importer'),
(6, 'scheduler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AnaID` (`EmployeeID`),
  ADD KEY `ImpID` (`ImporterID`),
  ADD KEY `AnalID` (`AnalystID`);

--
-- Indexes for table `case_details`
--
ALTER TABLE `case_details`
  ADD KEY `CsID` (`CaseID`),
  ADD KEY `ProID` (`ProductID`);

--
-- Indexes for table `central_lab`
--
ALTER TABLE `central_lab`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `anaID` (`AnalystID`),
  ADD KEY `labtID` (`lab_type`);

--
-- Indexes for table `harbor`
--
ALTER TABLE `harbor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EmID` (`EmployeeID`);

--
-- Indexes for table `lab_types`
--
ALTER TABLE `lab_types`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ProdID` (`ProductID`),
  ADD KEY `pr_fk` (`ParentKey`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `F_AnalystID` (`AnalystID`),
  ADD KEY `F_ProductID` (`Product_ID`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dvID` (`DriverID`);

--
-- Indexes for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD KEY `trID` (`TripID`),
  ADD KEY `orID` (`OrderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ustID` (`UserType`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `central_lab`
--
ALTER TABLE `central_lab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harbor`
--
ALTER TABLE `harbor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_types`
--
ALTER TABLE `lab_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case`
--
ALTER TABLE `case`
  ADD CONSTRAINT `AnalID` FOREIGN KEY (`AnalystID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `EmpID` FOREIGN KEY (`EmployeeID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `ImpID` FOREIGN KEY (`ImporterID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `case_details`
--
ALTER TABLE `case_details`
  ADD CONSTRAINT `CsID` FOREIGN KEY (`CaseID`) REFERENCES `case` (`ID`),
  ADD CONSTRAINT `ProID` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `central_lab`
--
ALTER TABLE `central_lab`
  ADD CONSTRAINT `anaID` FOREIGN KEY (`AnalystID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `labtID` FOREIGN KEY (`lab_type`) REFERENCES `lab_types` (`ID`);

--
-- Constraints for table `harbor`
--
ALTER TABLE `harbor`
  ADD CONSTRAINT `EmID` FOREIGN KEY (`EmployeeID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `ProdID` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `pr_fk` FOREIGN KEY (`ParentKey`) REFERENCES `order` (`ID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `F_AnalystID` FOREIGN KEY (`AnalystID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `F_ProductID` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `dvID` FOREIGN KEY (`DriverID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `trip_details`
--
ALTER TABLE `trip_details`
  ADD CONSTRAINT `orID` FOREIGN KEY (`OrderID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `trID` FOREIGN KEY (`TripID`) REFERENCES `trip` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `ustID` FOREIGN KEY (`UserType`) REFERENCES `user_types` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
