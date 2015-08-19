-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 11:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skriptprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`ID` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer1` varchar(50) NOT NULL,
  `Answer2` varchar(50) NOT NULL,
  `Answer3` varchar(50) NOT NULL,
  `Answer4` varchar(50) NOT NULL,
  `RightAnswer` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `Question`, `Answer1`, `Answer2`, `Answer3`, `Answer4`, `RightAnswer`) VALUES
(1, 'Was ist keine Kinderkrankheit?', 'Masern', 'Seepoken', 'Mumps', 'Roeteln', 'b'),
(2, 'Die meisten Touristen, die in einer Wueste umkamen, sind ...?', 'ertrunken', 'verhungert', 'verdurstet', 'erfroren', 'a'),
(3, 'Wasser ist farblos. Warum ist dann das Meer blau? ', 'blaue Badehosen faerben', 'der Meeresboden ist blau', 'der Himmel spiegelt sich im Wasser', 'Umweltverschmutzung', 'c'),
(4, 'Wo befindet sich das meiste Eis der Erde?', 'Antarktis', 'in allen Eisdielen', 'Nordpol', 'Tiefkuehltruhen', 'a'),
(5, 'Wie nennt man die versteinerten Ueberreste von Lebewesen?', 'Amphibien', 'Fossilien', 'Reptilien', 'Dinosaurier', 'b'),
(6, 'Vor 150 Jahren erfand Levi Strauss die Blue Jeans. Er faerbte sie mit ...? ', 'Tinte', 'Blausaeure', 'Indigo', 'Heidelbeersaft', 'c'),
(7, 'Was schmeckt man auf der Zungenspitze?', 'bitter', 'salzig', 'suess', 'sauer', 'c'),
(8, 'Wie heisst das internationale Kinderhilfswerk?', 'NATO', 'UNICEF', 'EWG', 'das rote Kreuz', 'b'),
(9, 'Was tun Leute, wenn sie besonders viele Vorraete kaufen?', 'baggern', 'sammeln', 'hamstern', 'einmachen', 'c'),
(10, 'Welche Zahl ist keine Quadratzahl?', '16', '25', '49', '90', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
