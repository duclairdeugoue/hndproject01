-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
(3, 'testing', 17),
(4, 'testing', 18);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id_course` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `credit` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `course_outline` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_course`, `title`, `credit`, `level`, `course_outline`) VALUES
(3, 'Testing', 2, 2, 'output'),
(4, 'Digital ELectronics', 4, 1, 'logic gates and logic circuit'),
(5, 'Engineering Mathematics', 4, 3, 'Learning further intergrations'),
(6, 'Operating System', 3, 1, 'Understanding hardware compone'),
(7, 'Computer Network', 3, 2, 'Working with computers'),
(8, 'Data Structures1', 3, 2, 'Notion of OOP..'),
(9, 'Testing', 1, 2, 'result'),
(24, 'Full Stack', 3, 1, '.....'),
(25, 'Data structures 3', 4, 3, 'Objects and structures');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `matricule` int(11) NOT NULL,
  `Portofolio` varchar(80) DEFAULT NULL,
  `id_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`matricule`, `Portofolio`, `id_person`) VALUES
(1, '', 20),
(2, '', 21),
(3, '', 22),
(4, '', 23),
(5, '', 24),
(6, '', 25),
(7, NULL, 27),
(8, NULL, 29),
(9, NULL, 32),
(10, NULL, 34);

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
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `person_type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id_person`, `name`, `surname`, `sex`, `date_of_birth`, `login`, `password`, `person_type`) VALUES
(1, ' Deugoue Wouemetcha', 'Duclair', 'Male', '2021-08-02', 'Doubled', '1234', 0),
(2, 'Ngamawe', 'Frank', 'Male', '2021-08-04', 'Frankostar', '123', 1),
(3, 'Cheusseu', 'Lazare', 'Male', '2021-08-03', 'Lazare', '0000', 2),
(14, 'Che Larry', 'Oneal', 'Male', '2021-09-04', 'LOneal', '0000', 2),
(16, 'Ngamawe ', 'Franck', 'Male', '2018-06-08', 'Ngamawe', '0000', 2),
(17, 'Cheussu', 'Lazare', 'Male', '2021-09-09', 'cheussu', '9999', 1),
(18, 'Wouemetcha ', 'Clementine', 'Female', '2021-09-10', '', '', 1),
(20, 'Feuwo', 'Clement', 'Male', '2021-09-03', 'Teacher', '7777', 3),
(21, 'Wouemetcha', 'Martin', 'Male', '2021-09-10', '', '', 3),
(22, 'Nsankong', 'Boris', 'Male', '2021-09-08', '', '', 3),
(23, 'give', 'now', 'Male', '2021-09-04', '', '', 3),
(24, 'Duc', 'einstein', 'Male', '2021-09-21', '', '', 3),
(25, 'Numbu', 'Clif', 'Male', '2021-09-18', '', '', 3),
(27, 'testing', 'tester', 'Male', '2022-01-05', NULL, NULL, 3),
(28, 'Awa', 'Donacien', 'Male', '2022-01-06', NULL, NULL, 2),
(29, 'Bangsi', 'Rene', 'Male', '2022-01-07', NULL, NULL, 3),
(30, 'Merynda', 'Joyce', 'Female', '2003-05-27', NULL, NULL, 2),
(31, 'Camilla Carver', 'Carson', 'Male', '2012-11-01', NULL, NULL, 2),
(32, 'Demetria Page', 'Oneil', 'Female', '2019-12-26', NULL, NULL, 3),
(33, 'Dilane', 'Chris', 'Male', '2022-01-05', NULL, NULL, 2),
(34, 'Djomo', 'Riky', 'Male', '2022-01-06', NULL, NULL, 3),
(35, 'Fallon Serrano', 'Pickett', 'Female', '2015-08-22', NULL, NULL, 2),
(36, 'Brenna Moon', 'Hensley', 'Female', '2013-12-17', NULL, NULL, 2),
(37, 'Nash Medina', 'Richmond', 'Female', '1992-01-04', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`speciality_id`, `speciality_name`) VALUES
(1, 'Software Engineering'),
(2, 'Hardware Maintainance'),
(3, 'Industrial and Automation'),
(4, 'Telecomunication'),
(5, 'Network and Security'),
(6, 'Civil Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `specialities_courses`
--

CREATE TABLE `specialities_courses` (
  `id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities_courses`
--

INSERT INTO `specialities_courses` (`id`, `speciality_id`, `id_course`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 2, 5),
(4, 2, 6),
(5, 3, 7),
(7, 3, 8),
(8, 4, 9),
(22, 2, 24),
(23, 1, 25);

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
  `function` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`matricule`, `level`, `speciality`, `Department`, `id_person`, `function`) VALUES
(2, 2, 'SWE', 'CE', 3, 'Anti'),
(4, 2, 'SWE', 'CE', 14, 'Delegate'),
(5, 3, 'SWE', 'CE', 16, 'Student'),
(6, 2, 'SWE', 'CE', 28, ''),
(7, 1, 'SWE', 'CE', 30, 'Good girl'),
(8, 1, 'SWE', 'ACT', 31, 'Magna fugiat aut aut'),
(9, 1, 'SWE', 'CE', 33, 'Bro of Joyce'),
(10, 2, 'NWS', 'CE', 35, 'Quo dolor inventore '),
(11, 3, 'NWS', 'CE', 36, 'Non molestiae sint i'),
(12, 3, 'TEL', 'CE', 37, 'Non omnis et labore ');

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
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_person` (`id_person`);

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
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`speciality_id`);

--
-- Indexes for table `specialities_courses`
--
ALTER TABLE `specialities_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `speciality_id` (`speciality_id`);

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
  MODIFY `code` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id_mark` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specialities_courses`
--
ALTER TABLE `specialities_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `matricule` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
