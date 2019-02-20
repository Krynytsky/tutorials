-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2019 at 12:47 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `st_id` int(11) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `house_nomber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`st_id`, `country`, `state`, `city`, `street`, `house_nomber`) VALUES
(1, 'Ukraine', 'Lviv', 'Sambir', 'Ivasjyka', 4),
(2, 'Ukraine', 'Lviv', 'Sambir', 'Ivasjyka', 68),
(3, 'Poland', 'Rszeshow', 'Rszeshow', 'Lumanovskego', 56),
(4, 'Poland', 'Rszeshow', 'Rszeshow', 'Lumanovskego', 57),
(5, 'Poland', 'Rszeshow', 'Krakow', 'Lumanovskego', 56),
(6, 'Poland', 'Krakow', 'Krakow', 'Lumanovskego', 56),
(7, 'Ukraine', 'Lviv', 'Sambir', 'Shevcenka', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` int(11) NOT NULL,
  `st_first_name` text NOT NULL,
  `st_last_name` text NOT NULL,
  `st_age` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_first_name`, `st_last_name`, `st_age`) VALUES
(1, 'Yurii', 'Krynytskyi', 24),
(2, 'David', 'Zybal', 27),
(3, 'Ruslan', 'Rozkvas', 38),
(4, 'Slavik', 'Kurulo', 24),
(5, 'Vasul', 'Gregorovskyi', 25),
(6, 'Vanessa', 'Paradi', 20),
(7, 'Victoria', 'Petruch', 22);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `st_id` int(11) NOT NULL,
  `un_name` text NOT NULL,
  `un_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`st_id`, `un_name`, `un_address`) VALUES
(1, 'LSAOF', 'Kopernika 3'),
(2, 'SMC', 'Shevchenka'),
(3, 'STETI', 'Shukchevicha'),
(4, 'LCA', 'Zamarstunivska'),
(5, 'STETI', 'Shukchevicha'),
(6, 'STETI', 'Shukchevicha'),
(7, 'STETI', 'Shukchevicha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `students` (`st_id`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `students` (`st_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
