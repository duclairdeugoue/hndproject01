-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 01:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `code` int(30) NOT NULL,
  `function` varchar(30) NOT NULL,
  `id_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`code`, `function`, `id_person`) VALUES
(1, 'Director', 13),
(2, 'Supervisor', 15);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `credit` int(11) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `course_outline` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id_mark` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `CA` int(11) NOT NULL,
  `exams` int(11) NOT NULL,
  `reciept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id_person` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `person_type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id_person`, `name`, `surname`, `sex`, `date_of_birth`, `login`, `password`, `person_type`) VALUES
(1, ' Deugoue Wouemetcha', 'Duclair', 'M', '2021-08-02', 'Doubled', '1234', 0),
(2, 'Ngamawe', 'Frank', 'M', '2021-08-04', 'Frankostar', '123', 1),
(3, 'Cheusseu', 'Lazare', 'M', '2021-08-03', 'Lazare', '0000', 2),
(4, 'Lary', 'oneal', 'Male', '2021-06-08', '', '', 2),
(5, 'Covid19', 'virus', 'Male', '2021-08-29', '', '', 2),
(6, 'Duclair', 'Duccccccc', 'Male', '2021-08-22', '', '', 2),
(7, 'Luc', 'tyyt', 'Male', '2021-08-21', '', '', 2),
(8, 'Tachou', 'Arthur', 'Male', '2021-08-07', '', '', 2),
(9, 'Oneal', 'dgsdjqs', 'Female', '2021-07-30', '', '', 2),
(10, 'Sadi', 'zhhz', 'Female', '2021-08-13', '', '', 2),
(11, 'Covid20', 'Virus', 'Male', '2021-08-01', 'Covid', '0000', 2),
(12, 'Cheussu', 'Lazare', 'Male', '2021-09-03', '', '', 2),
(13, 'DoubleDD', 'Ducc', 'Male', '2021-09-03', '', '', 2),
(14, 'Che Larry', 'Oneal', 'Male', '2021-09-04', 'LOneal', '0000', 2),
(15, 'Admin1', 'school', 'Male', '2021-09-03', '', '', 2),
(16, 'Ngamawe ', 'Franck', 'Male', '2018-06-08', 'Ngamawe', '0000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `matricule` int(50) NOT NULL,
  `level` int(11) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `id_person` int(11) NOT NULL,
  `function` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`matricule`, `level`, `speciality`, `Department`, `id_person`, `function`) VALUES
(1, 2, 'SWE', 'CE', 4, 'Normal'),
(2, 2, 'SWE', 'CE', 11, 'Anti'),
(3, 1, 'SWE', 'CE', 12, 'Normal'),
(4, 2, 'SWE', 'CE', 14, 'Delegate'),
(5, 3, 'SWE', 'CE', 16, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `students_courses`
--

CREATE TABLE `students_courses` (
  `matricule` varchar(50) NOT NULL,
  `id_course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id_person` (`id_person`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id_mark`),
  ADD KEY `matricule` (`matricule`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_person` (`id_person`);

--
-- Indexes for table `students_courses`
--
ALTER TABLE `students_courses`
  ADD PRIMARY KEY (`matricule`,`id_course`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `code` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id_mark` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `matricule` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
