-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 09:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infokendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `ISBN` varchar(15) COLLATE utf8_unicode_520_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `language` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `totalCopies` int(11) NOT NULL,
  `rented` int(11) NOT NULL,
  `numPages` int(11) NOT NULL,
  `price` double NOT NULL,
  `coverImg` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `ISBN`, `title`, `author`, `category`, `language`, `totalCopies`, `rented`, `numPages`, `price`, `coverImg`) VALUES
(1, 'myISBN', 'Book0', 'Alemu', 'Philosophy', 'Other', 2, 0, 10, 100, ''),
(2, 'myISBN', 'Mybook', 'Habtemariyam', 'Fiction', 'Oromifa', 3, 0, 12, 124.5, ''),
(3, 'myISBN', 'my title', 'b', 'Psychology', 'Oromifa', 3, 0, 10, 157, ''),
(4, 'myISBN', 'my title', 'b', 'Psychology', 'Oromifa', 3, 0, 10, 157, ''),
(5, 'myISBN', 'Dertogada', 'Efrem', 'Fiction', 'Amharic', 3, 0, 78, 125, ''),
(6, 'myISBN', 'Secret', 'Lynda', 'Novel', 'Amharic', 4, 0, 160, 124.25, ''),
(7, 'myISBN', 'bookThree', 'Lynda', 'Novel', 'Amharic', 4, 0, 160, 124.25, ''),
(8, 'myISBN', 'WhatTheHeel', 'Mygod', 'Weg', 'Amharic', 3, 0, 11, 120, ''),
(10, 'myISBN', 'updatethis', 'Please', 'Novel', 'English', 1, 0, 11, 124, 'upload/bookcover.png'),
(11, 'myISBN', 'updatethis', 'Please', 'Novel', 'English', 1, 0, 11, 124, ''),
(12, 'myISBN', 'rrrr', 'yyyy', 'Weg', 'Oromifa', 1, 0, 10, 23, ''),
(13, 'myISBN', 'rrrr', 'yyyy', 'Weg', 'Oromifa', 1, 0, 10, 23, ''),
(14, 'myISBN', 'rrrr', 'yyyy', 'Weg', 'Oromifa', 1, 0, 10, 23, ''),
(15, 'myISBN', 'rerwe', 'wrrewr', 'Novel', 'Oromifa', 3, 0, 13, 124.25, ''),
(17, 'myISBN', 'iiii', 'wrrewr', 'Novel', 'Oromifa', 3, 0, 13, 124.25, 'upload/images1_1583826147.jpg'),
(18, 'myISBN', 'yyuyuu', 'wrrewr', 'Novel', 'Oromifa', 3, 0, 13, 124.25, ''),
(19, 'myISBN', 'uuuu', 'llll', 'Poem', 'English', 6, 0, 14, 123, 'upload/uuuu_cover.jpg'),
(20, 'myISBN', 'Thanks', 'Love', 'Poem', 'Other', 5, 0, 12, 124, 'upload/Thanks_cover.jpg'),
(21, 'myISBN', 'Whynot', 'ynot', 'Psychology', 'English', 3, 0, 11, 107, 'upload/Whynot_cover.jpg'),
(22, 'myISBN', 'miya mi', 'try', 'Fiction', 'Amharic', 2, 0, 10, 144, 'upload/miya mi_cover.png'),
(23, 'myISBN', 'abebe', 'bekele', 'History', 'Oromifa', 4, 0, 13, 145, ''),
(24, 'myISBN', 'abebe', 'bekele', 'History', 'Oromifa', 4, 0, 13, 145, ''),
(25, 'myISBN', 'abebe', 'bekele', 'History', 'Oromifa', 4, 0, 13, 145, ''),
(26, 'myISBN', 'Alemu', 'Ayele', 'History', 'English', 3, 3, 12, 124.25, 'upload/Alemu_cover.png'),
(27, 'myISBN', 'Hryetyytyt', 'itttiiuui', 'History', 'Amharic', 2, 1, 12, 147, 'upload/Hryetyytyt_cover.jpg'),
(28, 'myISBN', 'Fikir', 'Anty', 'Fiction', 'Amharic', 2, 0, 11, 120, 'upload/Fikir_cover.jpg'),
(29, 'myISBN', 'Arif', 'Yohonal', 'Novel', 'Oromifa', 4, 0, 11, 124, 'upload/Arif_cover.jpg'),
(30, 'myISBN', 'Auns', 'mmmmm', 'History', 'Oromifa', 4, 0, 15, 120, 'upload/Auns_cover.png'),
(31, 'myISBN', 'FinalBook', 'Anteny', 'Other', 'Other', 4, 0, 12, 134, ''),
(32, 'myISBN', 'Now', 'should work', 'History', 'English', 1, 0, 11, 124, '../images/bookcover.png'),
(33, 'myISBN', 'Now', 'should work', 'History', 'English', 1, 0, 11, 124, '../images/bookcover.png'),
(34, 'myISBN', 'Dekemegn', 'Enenja', 'Novel', 'Oromifa', 1, 0, 11, 124, '../images/bookcover.png'),
(35, 'myISBN', 'Dekemegn', 'Enenja', 'Novel', 'Oromifa', 1, 0, 11, 124, 'upload/Dekemegn_cover.jpg'),
(44, 'myISBN', 'What about now', 'Anteneh', 'History', 'Oromifa', 2, 0, 24, 100, '../images/bookcover.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `STID` varchar(13) NOT NULL,
  `fName` varchar(100) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `blockNum` varchar(50) NOT NULL,
  `dormNum` int(11) NOT NULL,
  `phoneNum` varchar(15) NOT NULL,
  `profilePic` varchar(200) NOT NULL,
  `rented` tinyint(1) NOT NULL,
  `numRent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `STID`, `fName`, `lName`, `sex`, `dept`, `blockNum`, `dormNum`, `phoneNum`, `profilePic`, `rented`, `numRent`) VALUES
(1, 'RAMIT/1234/05', 'Anty', 'Man', 'Male', 'civil', '329', 3, '0978456123', 'upload/RAMIT_1234_05_proPic.png', 0, 0),
(2, 'RAMIT/125/07', 'Anty', 'classic', 'Male', 'computer science', 'Mother', 1, '0912457896', 'upload/RAMIT-125-07_proPic.jpg', 0, 0),
(3, 'RAMIT/1478/01', 'Mire', 'Anbesaw', 'Male', 'computer science', 'Lante', 4, '1214545847', 'upload/RAMIT-1478-01_proPic.jpeg', 0, 0),
(4, 'RAMIT/159/07', 'Abebe', 'Bekele', 'Female', 'computer science', 'Mother', 4, '0921345698', '../images/femaleAvater.png', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `STID` (`STID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
