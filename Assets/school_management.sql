-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2022 at 01:09 PM
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

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'computer engineering'),
(2, 'banking and finance'),
(3, 'medicine');

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
(46, 'Tad Valencia', 'Eaton', 'Female', '2012-11-29', NULL, NULL, 2),
(47, 'Kathleen Ayala', 'Sanford', 'Male', '1993-11-21', NULL, NULL, 2);

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
(23, 1, 25),
(24, 1, 26);

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`matricule`, `level`, `speciality_id`, `id_person`, `function`) VALUES
(2, 2, 1, 3, 'Anti'),
(4, 2, 1, 14, 'Delegate'),
(5, 3, 1, 16, 'Student'),
(6, 2, 1, 28, ''),
(7, 1, 1, 30, 'Good girl'),
(8, 1, 1, 31, 'Magna fugiat aut aut'),
(9, 1, 1, 33, 'Bro of Joyce'),
(10, 2, 1, 35, 'Quo dolor inventore '),
(11, 3, 1, 36, 'Non molestiae sint i'),
(12, 3, 1, 37, 'Non omnis et labore '),
(13, 3, 1, 38, 'Et a modi magnam est'),
(14, 2, 1, 46, 'Delegate'),
(15, 2, 5, 47, 'Delegate');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
