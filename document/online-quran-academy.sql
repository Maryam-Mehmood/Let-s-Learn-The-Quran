-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 02:29 PM
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
-- Database: `online-quran-academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `Id` int(11) NOT NULL,
  `Date` varchar(225) NOT NULL,
  `Day` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Details` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`Id`, `Date`, `Day`, `Name`, `Details`) VALUES
(1, '28-Feb-2022', 'Monday', 'Shab-e-Miraj', 'Isra and Mi\'raj, also known as Al Isra\' wal Miraj, is observed on the 27th day of the month of Rajab, the seventh month in the Islamic calendar.\r\n'),
(2, '02-April-2022', 'Saturday', 'Ramadan Begins', 'Ramadan is the ninth month of the Islamic calendar, observed by Muslims worldwide as a month of fasting, prayer, reflection and community.'),
(3, '02-May-2022\r\n', 'Monday', 'Eid ul Fitr', 'Eid al-Fitr is the earlier of the two official holidays celebrated within Islam. The religious holiday is celebrated by Muslims worldwide because it marks the end of the month-long dawn-to-sunset fasting of Ramadan.'),
(4, '30-June-2022', 'Thursday', '1st Zul Hajj', 'Fasting on the first 9 days of Dhul Hijjah is highly recommended, and is an act that the Prophet (saw) partook in and encouraged others to do as well.'),
(5, '08-July-2022', 'Friday', 'Day of Arafah', 'The Day of Arafah is an Islamic holiday that falls on the 9th day of Dhu al-Hijjah of the lunar Islamic Calendar. '),
(6, '09-July-2022', 'Tuesday', 'Eid ul Adha', 'Eid al-Adha is the second and the bigger of the two main holidays celebrated in Islam. It honors the willingness of Ibrahim to sacrifice his son Ismail as an act of obedience to Allah\'s command.'),
(7, '30-July-2022', 'Saturday', 'Islamic New Year(1st Muharram)', 'Muḥarram is the first month of the Islamic calendar.'),
(8, '08-August-2022', 'Monday', 'Day of Ashura(10th Muharram)', 'The 10th of Muharram or Ashura holds great significance among Muslims because it is the date when Imam Hussain was martyred.\r\n'),
(9, '09-October-2022', 'Sunday', '12 Rabi-Ul-Awwal', 'This is the month our beloved prophet Muhammad (pbuh) was born and his light illuminated the world which continues to shine in our hearts. ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Subject` varchar(225) NOT NULL,
  `Msg` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Username`, `Email`, `Phone`, `Subject`, `Msg`) VALUES
(28, 'Ali', 'a@gmail.com', '0333344', 'Feedback', 'Thank You!'),
(31, 'Ali', 'a@gmail.com', '033345', 'Feedback', 'jguy'),
(32, 'Ali', 'a@gmail.com', '033345', 'Feedback', 'ft');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Name`) VALUES
(1, 'Quranic Course For Kids'),
(2, 'Quranic Course For Women'),
(3, 'Shariah Issue of Islam'),
(4, 'Short Courses');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`Id`, `Name`) VALUES
(1, '2 Days in a week'),
(2, '3 Days in a week'),
(3, '4 Days in a week'),
(4, '5 Days in a week'),
(5, '6 Days in a week'),
(6, 'Only weekend(Saturday & Sunday)');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Pass` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Country` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Course_Name` varchar(225) NOT NULL,
  `Course_Days` varchar(225) NOT NULL,
  `Details` varchar(225) NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Username`, `Email`, `Pass`, `Phone`, `Country`, `City`, `Course_Name`, `Course_Days`, `Details`, `Role`) VALUES
(5, 'Ali', 'a@gmail.com', '123', '033345', 'Pakistan', 'Karachi', 'Short Courses', 'Only weekend(Saturday & Sunday)', '', 1),
(6, 'Ali', 'a@gmail.com', '12', '0333', '', '', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
