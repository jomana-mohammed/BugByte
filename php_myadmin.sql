-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 09:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(5) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `age` int(5) NOT NULL,
  `role` char(50) NOT NULL,
  `Name` char(50) NOT NULL,
  `Gender` char(1) NOT NULL,
  `phoneNumber` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `email`, `password`, `age`, `role`, `Name`, `Gender`, `phoneNumber`) VALUES
(2, 'ahmed@gmail', '1234', 20, 'customer', 'ahmed', 'm', '012354'),
(3, 'alhosein@gmail', '1234', 20, 'admin', 'hoshos', 'm', '01550371160'),
(13, 'mattar@gmail.com', '123151', 21, 'customer', 'hossam', 'm', '203030'),
(15, 'aya@gmail', '123', 17, 'customer', 'aya', 'f', '00461'),
(16, 'hoshos@hoshos', 'hoshos', 27, 'customer', 'hoshos', 'm', '018'),
(17, 's@gmail.com', '123', 5, 'customer', 'salah', 'f', '123'),
(18, 'alhosein12@gmail.caom', '123', 21, 'customer', 'hussein', 'm', '01550371160'),
(90, 'alhosein@hotmail', '12', 20, 'staff', 'mad', 'm', '12'),
(2034, 'jena@yyyy', '45454545', 33, 'staff', 'jena', 'f', '1200'),
(6666, 'hhhh@gmail', '786789', 43, 'staff', 'hhhh', 'm', '6568787'),
(7777, 'km@gmail.com', '5467587', 44, 'staff', 'km', 'f', '87567'),
(9094199, 'hemat@gmail', '1234', 32, 'customer', 'hemat', 'f', '01561816'),
(9094200, 'lastone@g', '123', 21, 'customer', 'lastone', 'm', '123'),
(9094201, 'toka@toka', '1234', 13, 'customer', 'toqa', 'f', '0156561'),
(9094202, 'jomana@j', '1234', 34, 'customer', 'jomana', 'f', '01149'),
(9094203, 'jomana@16', '12345', 20, 'customer', 'jomana', 'f', '0129898'),
(9094204, 'lolo@gmail.com', '12345', 20, 'customer', 'jomana', 'f', '0129898'),
(9094205, 'hjhp@dfgh', '6767', 20, 'customer', 'jomana', 'm', '+021217389');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(5) NOT NULL,
  `Name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE `bug` (
  `ID` int(5) NOT NULL,
  `Description` char(50) NOT NULL,
  `image` char(50) NOT NULL,
  `type` char(255) NOT NULL,
  `State` int(5) NOT NULL,
  `Solution` char(50) NOT NULL,
  `Staff_ID` int(5) NOT NULL,
  `customer_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bug`
--

INSERT INTO `bug` (`ID`, `Description`, `image`, `type`, `State`, `Solution`, `Staff_ID`, `customer_id`) VALUES
(1, 'jlfsa', 'adkjf', 'saflj', 0, '', 7777, NULL),
(5, '$dsc', '$img', '$type', 2, 'bug is cool\r\n', 7777, NULL),
(90790, 'kajfsklh', 'pesodo code recursive.docx', 'please', 2, 'fyghjknbnvfyguik;', 2034, 6),
(90796, 'ayooo', 'aa.txt', 'not', 2, 'the code is fine', 7777, 6),
(90798, 'that bad', 'background.jpg', 'me', 0, 'MOHAMED', 7777, 14),
(90799, 'alot of bad people', 'images/', 'coding', 2, 'alo', 7777, 6),
(90813, 'message doesnt show', 'lock-icon.png', 'error', 0, '', 7777, 15),
(90814, 'annoying', 'lock-icon.png', 'salah & hossam', 2, 'salah', 7777, 14),
(90815, 'the code doesnt want to run', 'user-icon.png', 'c++', 2, 'missing semi colon on line 14', 7777, 16),
(90817, 'yes', '', 'hello', 2, 'i solved it a5eren', 8877, 17),
(90818, 'hey', '', 'c++', 1, '', 7777, 17),
(90834, 'the code doesnt want to run', 'staff_control.php', 'code issue', 2, 'the bug is missing a semi colon at line 34', 7777, 18),
(90835, 'the code doesnt want to run', 'staff_control.php', 'code issue', 2, '767', 7777, 11),
(90838, 'code dont run', 'DOC-20230428-WA0158', 'c++', 2, 'MISSING } AT LINE 16', 2034, 14),
(90839, 'amr amr amr', 'mainstaff.webp', 'amr', 2, 'not right', 7777, 9094199),
(90840, 'the code doesnt want to run', 'staff.php', 'ph', 0, '', 7777, 9094200),
(90841, 'the code doesnt run', 'hhhh-1.docx', 'run errorr', 2, 'the code is fixed', 7777, 9094201),
(90842, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 0, '', 7777, 18),
(90843, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 0, '', 7777, 18),
(90844, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 2, 'yyyaaaaa', 2034, 18),
(90845, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 0, '', 7777, 18),
(90846, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 0, '', 6666, 18),
(90847, '   jbcgnbjgvnbvn hjgknjh', 'homeparis.0.0.png', 'error', 2, 'yaaaaa i solved it', 2034, 18),
(90848, '   Write a short description about your bug :\r\n', 'homeparis.0.0.png', 'error', 2, 'yaaaaa i solved it tooooooooo', 2034, 18),
(90849, '   Write a short description about your bug :\r\n', 'homeparis.0.0.png', 'error', 0, '', 7777, 18),
(90850, '   Write a short description about your bug :l;mvk', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or une', 0, '', 7777, 18),
(90851, '   Write a short description about your bug :l;mvk', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or une', 0, '', 7777, 18),
(90852, '   Write a short description about your bug :\r\n', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and preven', 0, '', 7777, 18),
(90853, '   Write a short description about your bug :\r\n', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and preven', 0, '', 7777, 18),
(90854, '   Write a short description about your bug :\r\n', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and preven', 0, '', 7777, 18),
(90855, 'kjvhjgbvfd,db nfgxnmvj\r\n', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or une', 0, '', 7777, 18),
(90856, 'hhhhhhhhhhggggggggggggggggggggffffffffff\r\n', 'homeparis.0.0.png', '', 0, '', 7777, 18),
(90857, 'hhhhhhhhhhggggggggggggggggggggffffffffff\r\n', 'homeparis.0.0.png', 'Array', 0, '', 7777, 18),
(90858, 'hhhhhhhhhhggggggggggggggggggggffffffffff\r\n', 'homeparis.0.0.png', 'Array', 0, '', 7777, 18),
(90859, 'hhhhhhhhhhggggggggggggggggggggffffffffff\r\n', 'homeparis.0.0.png', 'Array', 0, '', 7777, 18),
(90860, 'hhhhhhhhhhggggggggggggggggggggffffffffff\r\n', 'homeparis.0.0.png', 'Array', 0, '', 7777, 18),
(90861, '   Write a short description about your bug :ervdf', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and preven', 0, '', 7777, 18),
(90862, ' njnjjjjjjjjjj\r\n', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 7777, 18),
(90863, ' njnjjjjjjjjjj\r\n', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 7777, 18),
(90864, 'hhhhhhhhghgghghghghhghghg', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or unexpected result.', 0, '', 0, 6),
(90865, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 2, 'jena teteeeeeee', 2034, 6),
(90866, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90867, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90868, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90869, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90870, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90871, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90872, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90873, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90874, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90875, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90876, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90877, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90878, 'hjhjhjjhjhjhjjhjhjhjhjjh', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90879, 'tyuiuiuiuiiuii', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90880, 'tyuiuiuiuiiuii', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90881, 'rrrrrrrrrrrttttttttttttttt', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or unexpected result.', 0, '', 0, 6),
(90882, 'rrrrrrrrrrrttttttttttttttt', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or unexpected result.', 0, '', 0, 6),
(90883, 'hjhjhjjjuuuuuyiioiooi', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90884, 'hjhjhjjjuuuuuyiioiooi', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90885, 'ioiooooooooioooooooo', 'homeparis.0.0.png', 'sytaxx', 0, '', 0, 6),
(90886, 'ioiooooooooioooooooo', 'homeparis.0.0.png', 'sytaxx', 0, '', 0, 6),
(90887, 'jjjkkkkijjjjjjkkkkkkkkkiii', 'homeparis.0.0.png', 'sytaxx', 0, '', 0, 6),
(90888, 'jjjkkkkijjjjjjkkkkkkkkkiii', 'homeparis.0.0.png', 'sytaxx', 0, '', 0, 6),
(90889, 'i am beautiful', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90890, 'i am beautiful', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90891, 'new bug to test', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90892, 'new bug to test', 'homeparis.0.0.png', 'Security Bugs', 0, '', 0, 6),
(90893, 'testt againn', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90894, 'testt againn', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90895, 'testt againn', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90896, 'ttttttttttttttyyyyyyyyyyy', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 6),
(90897, 'this is a bug', 'homeparis.0.0.png', 'Logic Errors:These mistakes may cause \r\n                  the program to provide an incorrect or unexpected result.', 0, '', 0, 10),
(90898, 'uuuuuuuuuuuuoiiiiio', 'homeparis.0.0.png', 'Syntax Errors: These mistakes might make the \r\n                  program act unexpectedly and prevent it from compiling.', 0, '', 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `create_bug`
--

CREATE TABLE `create_bug` (
  `Ticket` int(5) NOT NULL,
  `Customer_ID` int(5) NOT NULL,
  `Admin_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(5) NOT NULL,
  `Name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`) VALUES
(13, 'hossam'),
(15, 'aya'),
(16, 'hoshos'),
(17, 'salah'),
(18, 'hussein'),
(9094199, 'hemat'),
(9094200, 'lastone'),
(9094201, 'toqa');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(5) NOT NULL,
  `content` char(50) NOT NULL,
  `rate` int(5) NOT NULL,
  `Customer_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `content`, `rate`, `Customer_ID`) VALUES
(34, 'i liked the log in', 5, 15),
(35, 'why', 5, 15),
(36, 'why', 5, 15),
(37, 'i liked it', 5, 15),
(38, 'i liked it', 5, 15),
(39, 'hoshos', 5, 14),
(40, 'hoshos', 5, 14),
(41, 'i liked how fast the bug solved', 5, 16),
(42, 'yes sir', 5, 17),
(43, 'yes sir', 5, 17),
(44, 'yes sir', 5, 17),
(45, 'yes sir', 5, 17),
(46, 'yes sir', 5, 17),
(47, 'yes sir', 5, 17),
(48, 'yes sir', 5, 17),
(49, 'yes sir', 5, 17),
(50, 'yes sir', 5, 17),
(51, 'the work is very fast', 5, 18),
(52, 'THE CODE RAN CORRECTLY', 5, 14),
(53, 'yes', 5, 9094199),
(54, 'blblblbllblbllblblb', 4, 6),
(55, 'hhhhhyyyyhhhh', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(5) NOT NULL,
  `content` char(50) NOT NULL,
  `date` time NOT NULL,
  `Sign` int(5) NOT NULL,
  `Customer_ID` int(5) NOT NULL,
  `Admin_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `content`, `date`, `Sign`, `Customer_ID`, `Admin_ID`) VALUES
(9, 'yes sir', '00:00:00', 1, 14, 0),
(52, 'yes', '12:55:23', 1, 14, 0),
(53, 'yes', '12:55:27', 1, 14, 0),
(54, 'yes', '12:55:49', 1, 14, 0),
(55, 'hello', '12:55:54', 1, 14, 0),
(56, 'hello', '12:56:11', 1, 14, 0),
(57, 'hello', '12:56:50', 1, 14, 0),
(58, 'hello', '12:57:06', 2, 14, 0),
(59, 'hello', '12:57:43', 2, 14, 0),
(60, 'hey', '12:57:48', 2, 14, 0),
(63, 'hey you there', '12:59:09', 1, 14, 0),
(64, 'yes', '12:59:35', 1, 14, 0),
(65, 'yes', '01:00:19', 1, 14, 0),
(66, 'hello', '01:01:00', 1, 14, 0),
(67, 'hello', '01:01:29', 1, 14, 0),
(68, 'hello\r\n', '01:09:22', 1, 14, 0),
(69, 'hello\r\n', '01:09:41', 1, 14, 0),
(70, 'hello', '01:10:08', 1, 14, 0),
(71, 'hey\r\n', '01:12:08', 1, 14, 0),
(72, 'hey\r\n', '01:13:31', 1, 14, 0),
(73, 'hello', '11:04:12', 1, 14, 0),
(74, 'dfghlmnbvcdtyuilk', '09:04:11', 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` int(5) NOT NULL,
  `State` int(5) NOT NULL DEFAULT 0,
  `Staff_ID` int(5) NOT NULL,
  `Customer_ID` int(5) NOT NULL,
  `Bug_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `State`, `Staff_ID`, `Customer_ID`, `Bug_ID`) VALUES
(4, 0, 19, 17, 90818),
(5, 1, 19, 17, 90818),
(6, 0, 21, 9094201, 90841);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(5) NOT NULL,
  `Name` char(50) NOT NULL,
  `rate` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Name`, `rate`) VALUES
(2034, 'jena', 0),
(6666, 'hhhh', 0),
(7777, 'km', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9094206;

--
-- AUTO_INCREMENT for table `bug`
--
ALTER TABLE `bug`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90899;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
