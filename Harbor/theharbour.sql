-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 06:10 AM
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
-- Table structure for table `analyzedproducts`
--

CREATE TABLE `analyzedproducts` (
  `ID` int(244) NOT NULL,
  `ProductID` int(244) NOT NULL,
  `Name` text NOT NULL,
  `AnalyzeType` text NOT NULL,
  `Status` text NOT NULL,
  `Comment` text NOT NULL,
  `Createdat` date NOT NULL DEFAULT current_timestamp(),
  `Updatedat` date NOT NULL DEFAULT current_timestamp(),
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analyzedproducts`
--

INSERT INTO `analyzedproducts` (`ID`, `ProductID`, `Name`, `AnalyzeType`, `Status`, `Comment`, `Createdat`, `Updatedat`, `isDeleted`) VALUES
(11, 7, 'Ananas', ' -  - LevelOfEnergy - Temperature - BallPressureTest', ' -  - Approved - Pending - Refuse', ' \n  LevelOfEnergy \r\n btede Energy kter gdan. \r\n Temperature \r\n mesh btst7mel el 7rara el 3alya \n BallPressureTest \n bazet mn el da8t', '2021-01-12', '2021-01-12', 0),
(12, 14, 'makarona', ' - Temperature - Pressure', ' - Approved - Refuse', ' Temperature \r\n Makarona Estawet \r\n Pressure \r\n b2et 3agena we we7sha', '2021-01-12', '2021-01-12', 0),
(13, 8, 'Bate5', ' -  - Temperature - isolationTest - Temperature', ' -  - Approved - Refuse - Refuse', 'Temperature\r\nbazet mn el 7arr. \r\n\r\n isolationTest \r\n ba2ett motwa7eda kman \r\n Temperature \r\n et7ra2et we eswadet.', '2021-01-12', '2021-01-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `Name` text NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `AnalystID` int(11) NOT NULL,
  `ImporterID` int(11) NOT NULL,
  `PaymentMethod` int(11) NOT NULL,
  `Createdat` date NOT NULL DEFAULT current_timestamp(),
  `Updatedat` date NOT NULL DEFAULT current_timestamp(),
  `isDeleted` int(11) NOT NULL DEFAULT 0,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`Name`, `EmployeeID`, `AnalystID`, `ImporterID`, `PaymentMethod`, `Createdat`, `Updatedat`, `isDeleted`, `ID`) VALUES
('shampoo', 19, 18, 24, 1, '2021-01-03', '2021-01-12', 0, 1),
('Jojo', 19, 18, 24, 3, '2021-01-03', '2021-01-12', 0, 2),
('milk shipment', 23, 18, 24, 3, '2021-01-03', '2021-01-12', 0, 3),
('Ahmed', 19, 18, 24, 4, '2021-01-03', '2021-01-12', 0, 4),
('Mo5adaraty', 19, 18, 24, 5, '2021-01-09', '2021-01-13', 0, 5),
('laban', 23, 34, 43, 5, '2021-01-12', '2021-01-12', 1, 6),
('tester', 19, 18, 24, 2, '2021-01-12', '2021-01-12', 1, 8),
('kika', 19, 18, 24, 2, '2021-01-12', '2021-01-12', 1, 9),
('test1', 19, 18, 24, 2, '2021-01-13', '2021-01-13', 1, 15),
('test2', 19, 18, 24, 2, '2021-01-13', '2021-01-13', 1, 16),
('test', 19, 18, 24, 2, '2021-01-13', '2021-01-13', 1, 17),
('testpaypal', 40, 41, 43, 1, '2021-01-13', '2021-01-13', 0, 18),
('testFawry', 19, 18, 24, 4, '2021-01-13', '2021-01-13', 0, 19),
('testMeeza', 30, 18, 43, 3, '2021-01-13', '2021-01-13', 0, 20),
('testVisa', 19, 18, 24, 2, '2021-01-13', '2021-01-13', 0, 21);

-- --------------------------------------------------------

--
-- Table structure for table `case_details`
--

CREATE TABLE `case_details` (
  `ProductID` int(11) NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` timestamp NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) NOT NULL,
  `CaseID` int(11) NOT NULL DEFAULT 1,
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_details`
--

INSERT INTO `case_details` (`ProductID`, `Createdat`, `Updatedat`, `ID`, `CaseID`, `isDeleted`) VALUES
(8, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 1, 1, 0),
(7, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 2, 2, 0),
(9, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 3, 3, 0),
(1, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 4, 4, 0),
(21, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 5, 5, 0),
(7, '2021-01-03 16:44:54', '2021-01-03 16:44:54', 6, 6, 1),
(15, '2021-01-09 17:55:45', '2021-01-09 17:55:45', 7, 1, 1),
(9, '2021-01-09 17:56:02', '2021-01-09 17:56:02', 8, 1, 1),
(14, '2021-01-13 04:23:39', '2021-01-13 04:23:39', 9, 20, 0),
(9, '2021-01-13 04:31:11', '2021-01-13 04:31:11', 10, 21, 0),
(12, '2021-01-13 04:37:00', '2021-01-13 04:37:00', 11, 18, 0),
(12, '2021-01-13 05:09:23', '2021-01-13 05:09:23', 20, 19, 0);

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
(2, 'Pressure'),
(3, 'GlowWireTest'),
(4, 'BallPressureTest\r\n'),
(5, 'isolationTest\r\n'),
(6, 'FireTest\r\n'),
(7, 'LifeTest\r\n'),
(8, 'LevelOfEnergy\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`ID`, `Name`, `Type`) VALUES
(1, 'CardName', 'text'),
(2, 'ExpireDate', 'DateTime'),
(3, 'CardNumber', 'varchar'),
(4, 'CVV', 'int'),
(5, 'PhoneNumber', 'int'),
(6, 'ServiceCode', 'int'),
(7, 'Email', 'text'),
(8, 'Password', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `paymentoptionvalue`
--

CREATE TABLE `paymentoptionvalue` (
  `ID` int(11) NOT NULL,
  `PaymentOptionID` int(11) NOT NULL,
  `caseID` int(11) NOT NULL,
  `Value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentoptionvalue`
--

INSERT INTO `paymentoptionvalue` (`ID`, `PaymentOptionID`, `caseID`, `Value`) VALUES
(1, 1, 3, 'ImporterMAn'),
(2, 2, 3, '2023-03-01'),
(3, 3, 3, '357670476597654'),
(4, 4, 3, '543'),
(9, 1, 16, 'johnathan'),
(10, 2, 16, '2023-03-03'),
(11, 3, 16, '143523421'),
(12, 4, 16, '132'),
(13, 7, 17, 'paypal@gmail.com'),
(14, 8, 17, '1243241232'),
(15, 5, 18, '01284398432'),
(16, 6, 18, '912317372132173687'),
(17, 1, 19, 'meezaCostumer'),
(18, 2, 19, '2022-06-14'),
(19, 3, 19, '3255767634534125'),
(20, 4, 19, '432'),
(21, 1, 20, 'visaCostumer'),
(22, 2, 20, '2021-02-02'),
(23, 3, 20, '323243423431'),
(24, 4, 20, '324');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `ID` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`ID`, `Name`) VALUES
(1, 'Paypal'),
(2, 'Visa'),
(3, 'Meeza'),
(4, 'Fawry'),
(5, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `payment_options`
--

CREATE TABLE `payment_options` (
  `ID` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `optionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_options`
--

INSERT INTO `payment_options` (`ID`, `paymentID`, `optionID`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 1),
(6, 3, 2),
(7, 3, 3),
(8, 3, 4),
(9, 4, 5),
(10, 4, 6),
(11, 1, 7),
(12, 1, 8);

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
  `driverID` int(11) NOT NULL,
  `Createdat` date NOT NULL DEFAULT current_timestamp(),
  `Updatedat` date NOT NULL DEFAULT current_timestamp(),
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `ImportedCountry`, `Description`, `EnteranceDate`, `Quantity`, `Weight`, `ProductType`, `deliverFlag`, `driverID`, `Createdat`, `Updatedat`, `isDeleted`) VALUES
(1, 'shampoo', 'egypt', 'shampoo msh gamed', '2020-12-15', 235, 24, 0, 2, 36, '2021-01-12', '2021-01-12', 0),
(7, 'Ananas', 'Indonisia', 'ananas mostawrad ', '2020-12-03', 30, 30, 0, 3, 36, '2021-01-12', '2021-01-12', 0),
(8, 'Bate5', 'America', 'bate5 taza we zy el fol', '2020-12-03', 60, 30, 0, 3, 36, '2021-01-12', '2021-01-12', 0),
(9, 'Car', 'Germany', 'BMW Cars', '2020-12-02', 3, 15, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(11, 'PineApple', 'istanbul', 'pineapple apple apple pen', '2020-12-04', 30, 20, 0, 3, 36, '2021-01-12', '2021-01-12', 0),
(12, 'Manga', 'Saudia', 'manga nice', '2020-12-30', 50, 30, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(13, 'pen', 'Germany', 'e2laam 7ebr', '2020-12-03', 50, 30, 0, 2, 36, '2021-01-12', '2021-01-12', 0),
(14, 'makarona', 'italy', 'spaghetti', '2020-12-01', 40, 20, 0, 3, 36, '2021-01-12', '2021-01-12', 0),
(15, '3enab', 'Sweed', '3enab gamed', '2020-12-28', 50, 25, 0, 2, 36, '2021-01-12', '2021-01-12', 0),
(17, 'Molo5ya', 'Sodan', 'Molo5ya 5adra', '2021-01-22', 20, 60, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(18, 'Ananas', 'Germany', 'ay7aga', '2021-01-08', 51, 20, 0, 2, 36, '2021-01-12', '2021-01-12', 0),
(19, 'dogs', 'german', 'sdghjhgfdsdfgfdsadf', '2020-12-11', 45, 121, 0, 1, 0, '2021-01-12', '2021-01-12', 1),
(20, 'koshary', 'Egypt', 'Very tasty koshary from toum w basal hehe', '2021-01-12', 3, 100, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(21, 'product1', 'Egypt', 'somthing', '2021-01-12', 1, 232, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(22, 't2', 'Egypt', 'nice', '2021-01-12', 234, 23, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(23, 'seggada', 'Turkey', 'very nice quality silk segada from turkey', '2021-01-12', 100, 20, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(24, 'joseph', 'Egypt', 'Very nice guy just a little bit addicted to lol', '2021-01-19', 1, 98, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(25, 'patatoes', 'Nigeria', 'nice tasty potatoes', '2021-01-12', 132, 23, 0, 1, 0, '2021-01-12', '2021-01-12', 0),
(26, 'lemons', 'America', 'tasty lemons', '2021-01-12', 300, 100, 0, 1, 0, '2021-01-12', '2021-01-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Task_Name` varchar(125) NOT NULL,
  `AnalystID` int(11) DEFAULT NULL,
  `Description` varchar(225) DEFAULT NULL,
  `Createdat` date NOT NULL DEFAULT current_timestamp(),
  `Updatedat` date NOT NULL DEFAULT current_timestamp(),
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `Product_ID`, `Task_Name`, `AnalystID`, `Description`, `Createdat`, `Updatedat`, `isDeleted`) VALUES
(3, 1, 'lol', 18, 'very daaaaaaaaaaamn', '2021-01-12', '2021-01-12', 0),
(6, 9, 'Tofa7', 35, 'l3ba', '2021-01-12', '2021-01-12', 0),
(7, 8, 'Bate5 Mesteweeee2354234', 33, 'bate5 taza we zy el fol', '2021-01-12', '2021-01-12', 0),
(10, 1, 'hiLOLO', 18, 'dsfsdffdsdsf', '2021-01-12', '2021-01-12', 1);

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
  `ParentKey` int(11) NOT NULL DEFAULT 0,
  `Createdat` date NOT NULL DEFAULT current_timestamp(),
  `Updatedat` date NOT NULL DEFAULT current_timestamp(),
  `isDeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Password`, `Address`, `UserType`, `Telephone`, `Email`, `NationalID`, `Salary`, `WorkingHours`, `Description`, `ParentKey`, `Createdat`, `Updatedat`, `isDeleted`) VALUES
(18, 'Jojo123', 0, 'Giza', 3, '1058362770', 'spiderman@gmail.com', 2147483647, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(19, 'Ahmed', 0, 'Giza', 1, '7543425678', 'ahmed@gmail.com', 2155636, 5000, 7, ' Harbor Employee', 0, '2021-01-12', '2021-01-12', 0),
(24, 'ImporterMAn', 0, 'Egypt', 5, '78975654', 'aa@agha.com', 5248896, 0, 0, 'importer', 0, '2021-01-12', '2021-01-12', 0),
(26, 'omar', 1234, 'wvrvwe', 4, '235436512', 'omafwec@gmial.com', 21534123, 8000, 8, 'Manager', 0, '2021-01-12', '2021-01-12', 0),
(30, 'Ahmed', 4321, '2020-12-02', 1, '124574', 'ahed.wef@gmail.com', 2147483647, 5000, 7, ' Harbor Employee', 0, '2021-01-12', '2021-01-12', 0),
(32, 'sofy', 1234, 'fiza', 6, '124574', 'wqfewf@gmail.com', 2147483647, 4000, 6, 'Scheduler', 0, '2021-01-12', '2021-01-12', 0),
(33, 'abdo', 1234, 'October', 3, '2354234', 'loleta@gmail.com', 345234234, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(34, 'Seif', 1234, 'fesal', 3, '5345234', 'glsdf@gmail.com', 34234256, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(35, 'gomaa', 1234, 'Paris', 3, '345345', '432134@gmail.com', 346234, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(36, 'sofyDriver', 1234, 'Haram', 2, '8234122323', 'mohamed.osama36@msa.edu.eg', 2147483647, 4000, 9, ' Driver', 0, '2021-01-12', '2021-01-12', 0),
(37, 'Mohsen', 1234, 'Haram', 3, '23523', '2342@gmail.com', 67456234, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(38, 'SeifDriver', 1234, 'Obtober', 2, '0124234232', 'Seif@gmail.com', 2147483647, 3000, 8, ' Driver', 0, '2021-01-12', '2021-01-12', 0),
(39, 'AhmedDriver', 1234, 'Alex', 2, '0124234232', 'ahmed.mohamed304@msa.edu.eg', 2147483647, 3000, 8, ' Driver', 0, '2021-01-12', '2021-01-12', 0),
(40, 'omarEmp', 1234, 'Ma3ade', 1, '043546232', 'omarEmp@gmail.com', 346345234, 5000, 7, ' Harbor Employee', 0, '2021-01-12', '2021-01-12', 0),
(41, 'SofyAnalyst', 1234, 'Haram', 3, '01142345234', 'mezo@gmailc.om', 2147483647, 6000, 5, ' Analyst', 0, '2021-01-12', '2021-01-12', 0),
(42, 'SofyManager', 1234, 'Haram', 4, '0235234123', 'sofyMan@gmail.com', 326456234, 8000, 8, ' Manager', 0, '2021-01-12', '2021-01-12', 0),
(43, 'SofyImporter', 1234, 'Haram', 5, '01142345234', 'SofyImporter@gmail.com', 2147483647, 0, 0, 'importer', 0, '2021-01-12', '2021-01-12', 0),
(44, 'SofyScheduler', 1234, 'Haram', 6, '011123423', 'sofyImporter@gmail.com', 342312, 4000, 6, ' Scheduler', 0, '2021-01-12', '2021-01-12', 0),
(45, '7amada', 123, 'Maddi', 1, '112311', '7amada@gaml.com', 3162, 0, 0, '', 0, '2021-01-12', '2021-01-12', 1),
(46, 'zoz nooob fe valorant', 0, '6 october', 1, '001122', 'iamnooob@zoz.com', 0, 0, 0, '', 0, '2021-01-12', '2021-01-12', 1),
(47, 'omarDriver', 1234, '6th of October', 2, '01039423442', 'omar.soliman2k@gmail.com', 1243523, 3000, 5, 'Driver', 0, '2021-01-12', '2021-01-12', 0),
(48, 'jojoDriver', 1234, 'Maadi', 2, '012237437324', 'joseph.medhat@msa.edu.eg', 1243523, 10, 2, 'Driver', 0, '2021-01-12', '2021-01-12', 0),
(49, 'drAyman', 1234, 'Masr', 2, '012938893', 'aezzat@msa.eun.eg', 384798364, 300000, 1, 'Dr Ayman', 0, '2021-01-13', '2021-01-13', 0);

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
-- Indexes for table `analyzedproducts`
--
ALTER TABLE `analyzedproducts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `case_details`
--
ALTER TABLE `case_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CsIDFK` (`CaseID`);

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
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paymentoptionvalue`
--
ALTER TABLE `paymentoptionvalue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_options`
--
ALTER TABLE `payment_options`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `analyzedproducts`
--
ALTER TABLE `analyzedproducts`
  MODIFY `ID` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `case_details`
--
ALTER TABLE `case_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `harbor`
--
ALTER TABLE `harbor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_types`
--
ALTER TABLE `lab_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paymentoptionvalue`
--
ALTER TABLE `paymentoptionvalue`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_options`
--
ALTER TABLE `payment_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_details`
--
ALTER TABLE `case_details`
  ADD CONSTRAINT `CsIDFK` FOREIGN KEY (`CaseID`) REFERENCES `case` (`ID`);

--
-- Constraints for table `harbor`
--
ALTER TABLE `harbor`
  ADD CONSTRAINT `EmID` FOREIGN KEY (`EmployeeID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `F_AnalystID` FOREIGN KEY (`AnalystID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `F_ProductID` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `ustID` FOREIGN KEY (`UserType`) REFERENCES `user_types` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
