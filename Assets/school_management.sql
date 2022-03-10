-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 04:35 PM
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
(4, 'testing', 18),
(5, 'Magna do nisi Nam cu', 40),
(6, 'Voluptates temporibu', 41),
(7, 'Provident amet quo', 42),
(8, 'Esse illo quia tota', 43),
(9, 'Ipsum dolorum volup', 44);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `attendance_detail_id` int(11) NOT NULL,
  `speclevel` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `period` varchar(30) NOT NULL,
  `id_course` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`attendance_detail_id`, `speclevel`, `date`, `period`, `id_course`, `status`) VALUES
(20, '1', '2022-03-09', '10 to 12', 4, 'completed'),
(22, '2', '2022-03-09', '10 to 12', 8, 'pending'),
(23, '2', '2022-03-09', '13 to 15', 3, 'pending'),
(24, '2', '2022-03-09', '15 to 17', 8, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `attendance_record_id` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `presence` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `attendance_detail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`attendance_record_id`, `matricule`, `presence`, `day`, `month`, `year`, `attendance_detail_id`) VALUES
(15, 7, 'absent', '09', '03', '2022', 20),
(16, 8, 'absent', '09', '03', '2022', 20),
(17, 9, 'absent', '09', '03', '2022', 20),
(18, 14, 'absent', '09', '03', '2022', 20),
(27, 2, 'absent', '09', '03', '2022', 22),
(28, 4, 'absent', '09', '03', '2022', 22),
(29, 6, 'present', '09', '03', '2022', 22),
(30, 10, 'present', '09', '03', '2022', 22),
(31, 16, 'absent', '09', '03', '2022', 22),
(32, 17, 'present', '09', '03', '2022', 22),
(33, 18, 'present', '09', '03', '2022', 22),
(34, 19, 'present', '09', '03', '2022', 22),
(35, 2, 'present', '09', '03', '2022', 23),
(36, 4, 'present', '09', '03', '2022', 23),
(37, 6, 'present', '09', '03', '2022', 23),
(38, 10, 'present', '09', '03', '2022', 23),
(39, 16, 'present', '09', '03', '2022', 23),
(40, 17, 'present', '09', '03', '2022', 23),
(41, 18, 'present', '09', '03', '2022', 23),
(42, 19, 'present', '09', '03', '2022', 23),
(43, 2, 'present', '09', '03', '2022', 24),
(44, 4, 'present', '09', '03', '2022', 24),
(45, 6, 'present', '09', '03', '2022', 24),
(46, 10, 'present', '09', '03', '2022', 24),
(47, 16, 'present', '09', '03', '2022', 24),
(48, 17, 'present', '09', '03', '2022', 24),
(49, 18, 'present', '09', '03', '2022', 24),
(50, 19, 'present', '09', '03', '2022', 24);

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
(9, 'physics', 1, 2, 'result'),
(24, 'Full Stack', 3, 1, '.....'),
(25, 'Data structures 3', 4, 3, 'Objects and structures'),
(26, 'Engineering mathematics 1', 5, 1, 'basic knowledege');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'computer engineering'),
(2, 'banking and finance'),
(3, 'medicine');

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
(10, NULL, 34),
(11, NULL, 39),
(12, NULL, 45);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`) VALUES
(1),
(2),
(3);

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
(28, 'Awa', 'Donacien', 'Male', '2022-01-06', 'AwaDonald', '12345678', 2),
(29, 'Bangsi', 'Rene', 'Male', '2022-01-07', NULL, NULL, 3),
(30, 'Merynda', 'Joyce', 'Female', '2003-05-27', NULL, NULL, 2),
(31, 'Camilla Carver', 'Carson', 'Male', '2012-11-01', NULL, NULL, 2),
(32, 'Demetria Page', 'Oneil', 'Female', '2019-12-26', NULL, NULL, 3),
(33, 'Dilane', 'Chris', 'Male', '2022-01-05', NULL, NULL, 2),
(34, 'Djomo', 'Riky', 'Male', '2022-01-06', NULL, NULL, 3),
(35, 'Fallon Serrano', 'Pickett', 'Female', '2015-08-22', NULL, NULL, 2),
(36, 'Brenna Moon', 'Hensley', 'Female', '2013-12-17', NULL, NULL, 2),
(37, 'Nash Medina', 'Richmond', 'Female', '1992-01-04', NULL, NULL, 2),
(38, 'Ainsley Duke', 'Oneil', 'Female', '1997-05-18', NULL, NULL, 2),
(39, 'Slade Griffith', 'Beasley', 'Female', '2013-08-03', NULL, NULL, 3),
(40, 'Diana Rhodes', 'Weaver', 'Female', '1987-03-25', NULL, NULL, 1),
(41, 'Shafira Wilcox', 'Parker', 'Female', '1996-04-11', NULL, NULL, 1),
(42, 'Hamish Fitzgerald', 'Buchanan', 'Male', '1990-12-04', NULL, NULL, 1),
(43, 'Scott Fuentes', 'Little', 'Male', '2007-12-05', NULL, NULL, 1),
(44, 'Carissa Brennan', 'Jimenez', 'Female', '1997-11-29', NULL, NULL, 1),
(45, 'Cathleen Glenn', 'Doyle', 'Male', '2015-02-19', NULL, NULL, 3),
(46, 'Tad Valencia', 'Eaton', 'Female', '2012-11-29', 'Tad', '9999', 2),
(47, 'Kathleen Ayala', 'Sanford', 'Male', '1993-11-21', NULL, NULL, 2),
(48, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(49, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(50, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(51, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(52, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(53, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(54, 'Kareem Donovan', 'Burris', 'Male', '1972-10-08', NULL, NULL, 2),
(55, 'Kylee Preston', 'Rivera', 'Female', '2021-04-15', NULL, NULL, 2),
(56, 'Noue', 'Ornella', 'Female', '2022-02-27', NULL, NULL, 2),
(57, 'blanc', 'WIG216', 'Male', '2004-06-08', NULL, NULL, 2),
(58, 'Atabongawung ', 'Sylvia', 'Female', '2005-01-07', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`speciality_id`, `speciality_name`, `department_id`) VALUES
(1, 'software engineering', 1),
(2, 'hardware engineering', 1),
(3, 'industrial and automation', 1),
(4, 'telecomunication', 1),
(5, 'network and security', 1),
(6, 'graphic designer', 1),
(7, 'Accounting', 2),
(8, 'nursing', 3),
(9, 'law', 2);

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
(7, 1, 8),
(8, 4, 9),
(22, 2, 24),
(23, 1, 25),
(24, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `specialities_levels`
--

CREATE TABLE `specialities_levels` (
  `speclevel` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialities_levels`
--

INSERT INTO `specialities_levels` (`speclevel`, `speciality_id`, `level_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(29, 2, 2),
(30, 2, 3),
(31, 3, 1),
(32, 3, 2),
(33, 3, 3),
(34, 4, 1),
(35, 4, 2),
(36, 4, 3),
(37, 5, 1),
(38, 5, 2),
(39, 5, 3),
(40, 6, 1),
(41, 6, 2),
(42, 6, 3),
(43, 7, 1),
(44, 7, 2),
(45, 7, 3),
(46, 8, 1),
(47, 8, 2),
(48, 8, 3),
(49, 9, 1),
(50, 9, 2),
(51, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `matricule` int(50) NOT NULL,
  `speclevel` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `function` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`matricule`, `speclevel`, `id_person`, `function`) VALUES
(2, 2, 3, 'Student'),
(4, 2, 14, 'Delegate'),
(5, 3, 16, 'Student'),
(6, 2, 28, 'Delegate'),
(7, 1, 30, 'Student'),
(8, 1, 31, 'Student'),
(9, 1, 33, 'Student'),
(10, 2, 35, 'Student'),
(11, 3, 36, 'Student'),
(12, 3, 37, 'Student'),
(13, 3, 38, 'Student'),
(14, 1, 46, 'Delegate'),
(15, 38, 47, 'Delegate'),
(16, 2, 55, 'Student'),
(17, 2, 56, 'Normal'),
(18, 2, 57, 'Normal'),
(19, 2, 58, 'Normal');

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
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`attendance_detail_id`),
  ADD KEY `speclevel` (`speclevel`),
  ADD KEY `id_course` (`id_course`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`attendance_record_id`),
  ADD KEY `matricule` (`matricule`),
  ADD KEY `attendance_detail_id` (`attendance_detail_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_person` (`id_person`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

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
  ADD PRIMARY KEY (`speciality_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `specialities_courses`
--
ALTER TABLE `specialities_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `speciality_id` (`speciality_id`);

--
-- Indexes for table `specialities_levels`
--
ALTER TABLE `specialities_levels`
  ADD PRIMARY KEY (`speclevel`),
  ADD KEY `speciality_id` (`speciality_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `id_person` (`id_person`),
  ADD KEY `speclevel` (`speclevel`);

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
  MODIFY `code` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `attendance_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `attendance_record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id_course` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id_mark` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `specialities_courses`
--
ALTER TABLE `specialities_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `specialities_levels`
--
ALTER TABLE `specialities_levels`
  MODIFY `speclevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `matricule` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
