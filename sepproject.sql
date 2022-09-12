-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `cord_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cord_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cord_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cord_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cord_officeno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cord_exp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`cord_id`, `cord_name`, `cord_email`, `cord_hp`, `cord_officeno`, `cord_exp`) VALUES
('CO0001', 'Muhammad Azwan', 'azwan@gmail.com', '01273747838', '097383737', 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crs_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crs_id`, `crs_name`, `crs_desc`) VALUES
('BCC3012', 'PSM1', 'Undergraduate Project 1'),
('BCC3024', 'PSM2', 'Undergraduate Project 2'),
('DCC3024', 'PTA', 'Final Year Diploma Project');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE `evaluations` (
  `ev_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marksev1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marksev2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marksev3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `markstotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`ev_id`, `std_id`, `marksev1`, `marksev2`, `marksev3`, `markstotal`) VALUES
('E01', 'CB19083', '', '', '', ''),
('E02', 'CB19015', '23', '22', '24', ''),
('E03', 'CB19016', '', '', '', ''),
('E04', 'CB18085', '', '', '', ''),
('E05', 'CB18026', '', '', '', ''),
('E06', 'CB19025', '', '', '', ''),
('E07', 'CC18024', '22', '34', '30', ''),
('E08', 'CC18011', '', '', '', ''),
('E09', 'CA19023', '', '', '', ''),
('E10', 'CD19045', '', '', '', ''),
('E11', 'CC18067', '', '', '', ''),
('E12', 'CC18076', '', '', '', ''),
('E13', 'CC18093', '', '', '', ''),
('E14', 'CA18039', '', '', '', ''),
('E15', 'CD18039', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `lect_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_officeno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_exp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lect_id`, `lect_name`, `lect_email`, `lect_position`, `lect_hp`, `lect_officeno`, `lect_faculty`, `lect_exp`) VALUES
('SE18015', 'Prabhu A/L Muthu', 'prabu@gmail.com', 'Supervisor', '1067736363', '063838383', 'FKOM', 'Web'),
('SE19015', 'Narresh Naidu A/L Subramaniam', 'narresh@gmail.com', 'Supervisor/Evaluator', '01124092575', '038848483', 'FKOM', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_05_25_143123_create_students_table', 1),
(4, '2022_05_25_143200_create_schedules_table', 1),
(5, '2022_05_25_143236_create_rubrics_table', 1),
(6, '2022_05_25_143303_create_lecturers_table', 1),
(7, '2022_05_25_143317_create_evaluations_table', 1),
(8, '2022_05_25_143354_create_courses_table', 1),
(9, '2022_05_25_143409_create_coordinators_table', 1),
(10, '2022_06_02_143238_create_progress_table', 1),
(11, '2022_06_04_140147_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress_perc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`std_id`, `progress_perc`, `comments`, `updated_at`) VALUES
('CA18039', '63', 'Need improvement', NULL),
('CA19023', '63', 'Need improvement', NULL),
('CB18026', '72', 'Excellent', NULL),
('CB18085', '65', 'Need improvement', NULL),
('CB19015', '68', 'Good', NULL),
('CB19016', '64', 'Need improvement', NULL),
('CB19025', '57', 'Speed up your progress', NULL),
('CB19083', '70', 'Excellent', NULL),
('CC18011', '70', 'Excellent', NULL),
('CC18024', '62', 'Need improvement', NULL),
('CC18067', '67', 'Good', NULL),
('CC18076', '68', 'Good', NULL),
('CC18093', '69', 'Good', NULL),
('CD18039', '58', 'Speed up your progress', NULL),
('CD19045', '75', 'Excellent', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rubrics`
--

CREATE TABLE `rubrics` (
  `rubricid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubrictype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark0` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rubrics`
--

INSERT INTO `rubrics` (`rubricid`, `crs_id`, `rubrictype`, `co`, `criteria`, `weight`, `score`, `mark0`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`) VALUES
('1', 'BCC3012', 'PSM1 -1', '1', 'INTRODUCTION\r\n            - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('10', 'BCC3012', 'PSM1 -1', '1', 'PROBLEM STATEMENT\r\n            - explanation of problem should be related to the domain / knowledge or solution gap ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('11', 'BCC3012', 'PSM1 -1', '1', 'OBJECTIVE\r\n            - MUST be 3 Objectives (reflecting SMART concept)\r\n            ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('12', 'BCC3012', 'PSM1 -1', '1', 'SCOPE\r\n            - must be related to the project', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('13', 'BCC3012', 'PSM1 -1', '1', 'LITERATURE REVIEW (WORK RELEVANCY)\r\n            - Minimum 3 related work relevant to the project must be compared.\r\n            - Comparison on existing systems / proposed techniques must be relevant.', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('14', 'BCC3012', 'PSM1 -1', '1', 'LITERATURE REVIEW (WORK DESCRIPTION)\r\n            - Description should be clear for THREE system/method/ techniques/ algorithm. ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('15', 'BCC3012', 'PSM1 -1', '1', 'LITERATURE REVIEW (WORK ANALYSIS) \r\n            - Analysis of comparison on previous system/method\r\n            - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('16', 'BCC3012', 'PSM1 -1', '1', 'PROJECT MANAGEMENT FRAMEWORK\r\n            - should describe on applied / used project management framework in the project.\r\n            Project Based: SDLC (Agile,RAD etc)\r\n            Research Based: Research Framework/Model', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('17', 'BCC3012', 'PSM1 -1', '1', 'PROJECT REQUIREMENT\r\n            - should describe the requirement related to the project.\r\n            Project Based: Functional and Non-Functional Requirement, Constraints and limitations', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('18', 'BCC3012', 'PSM1 -1', '1', 'REFERENCE \r\n            -Minimum 5 references related to the project must be stated. \r\n            - Facts are properly cited with correct reference in the proposal content\r\n            - Must follow the proposal format', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('19', 'BCC3012', 'PSM1 -2', '1', 'POTENTIAL USE OF PROPOSED SOLUTION\r\n            - explanation of potential use of proposed solution in real time situation', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('20', 'BCC3012', 'PSM1 -2', '2', 'PROPOSED DESIGN\r\n            - should describe the proposed design related to project requirement.\r\n            Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('21', 'BCC3012', 'PSM1 -2', '2', 'DATA DESIGN\r\n            - should describe the data related to the project\r\n             Project Based: ERD, Database Design (PK, FK) / Data Model', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('22', 'BCC3012', 'PSM1 -2', '2', 'PROOF OF CONCEPT/PROTOTYPE\r\n            - demonstrate evidence of early work\r\n            Project Based: Design Prototype', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('23', 'BCC3012', 'PSM1 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE\r\n            -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('24', 'BCC3012', 'PSM1 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design\r\n            PROJECT- the design of the prototype should be up to the standard.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('25', 'BCC3012', 'PSM1 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability\r\n            PROJECT: Should be easy to use and understand\r\n            - natural interaction style ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('26', 'BCC3012', 'PSM1 -2', '2', 'TESTING PLAN/VALIDATION PLAN\r\n            - should describe the testing strategy/approach\r\n            - cover the simple set of input, processess and output and comparison of result ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('27', 'BCC3012', 'PSM1 -2', '3', 'Oral Communication\r\n            The ability to deliver ideas clearly and effectively through verbal.', '0.2', '5', 'No oral communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('28', 'BCC3012', 'PSM1 -2', '3', 'Written Communication \r\n            The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', '0.2', '5', 'No written communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('29', 'BCC3012', 'PSM1 -2', '3', 'Responding to Question\r\n            The ability to respond to questions using appropriate language ', '0.4', '5', 'No respond to question', 'Insufficiently responded', '<in between>', 'Partially responded', '<in between', 'Clearly responded'),
('30', 'BCC3012', 'PSM1 -2', '3', 'Expression\r\n            The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', '0.2', '5', 'No expression', 'Insufficiently expressed', '<in between>', 'Partially expressed', '<in between', 'Clearly expressed'),
('31', 'BCC3012', 'PSM1 -3', '4', 'ACADEMIC INTERGRITY\r\n            - ability to sustain academic integrity (no plagiarism)\r\n            - below 25%', '0.2', '5', 'No academic integrity sustained', 'Total violation on academic integrity', '<in between>', 'Partially violating academic integrity', '<in between', 'Academic integrity sustained'),
('32', 'BCC3012', 'PSM1 -3', '4', 'QUALITY OF SUPERVISOR and STUDENT PROGRESS \r\n            - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', '0.4', '5', 'No meeting', 'Insufficiently meets the quality', '<in between>', 'Partially meets the quality', '<in between', 'Clearly meets the quality'),
('33', 'BCC3012', 'PSM1 -3', '4', 'ATTITUDE\r\n            - Treats supervisors with respect, courtesy, and tact. \r\n            - Shows enthusiasm and optimism', '0.4', '5', 'Attitude insufficiently complied.', 'Attitude insufficiently complied.', '<in between>', 'Attitude partially complied', '<in between', 'Attitude fully complie'),
('34', 'BCC3024', 'PSM2 -1', '1', 'INTRODUCTION\r\n             - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('35', 'BCC3024', 'PSM2 -1', '1', 'PROBLEM STATEMENT\r\n             - explanation of problem should be related to the domain / knowledge or solution gap ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('36', 'BCC3024', 'PSM2 -1', '1', 'OBJECTIVE\r\n             - MUST be 3 Objectives (reflecting SMART concept)\r\n             ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('37', 'BCC3024', 'PSM2 -1', '1', 'SCOPE\r\n             - must be related to the project', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('38', 'BCC3024', 'PSM2 -1', '1', 'LITERATURE REVIEW (WORK RELEVANCY)\r\n             - Minimum 3 related work relevant to the project must be compared.\r\n             - Comparison on existing systems / proposed techniques must be relevant.', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('39', 'BCC3024', 'PSM2 -1', '1', 'LITERATURE REVIEW (WORK DESCRIPTION)\r\n             - Description should be clear for THREE system/method/ techniques/ algorithm. ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('40', 'BCC3024', 'PSM2 -1', '1', 'LITERATURE REVIEW (WORK ANALYSIS) \r\n             - Analysis of comparison on previous system/method\r\n             - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('41', 'BCC3024', 'PSM2 -1', '1', 'PROJECT MANAGEMENT FRAMEWORK\r\n             - should describe on applied / used project management framework in the project.\r\n             Project Based: SDLC (Agile,RAD etc)\r\n             Research Based: Research Framework/Model', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('42', 'BCC3024', 'PSM2 -1', '1', 'PROJECT REQUIREMENT\r\n             - should describe the requirement related to the project.\r\n             Project Based: Functional and Non-Functional Requirement, Constraints and limitations', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('43', 'BCC3024', 'PSM2 -1', '1', 'REFERENCE \r\n             -Minimum 5 references related to the project must be stated. \r\n             - Facts are properly cited with correct reference in the proposal content\r\n             - Must follow the proposal format', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('44', 'BCC3024', 'PSM2 -2', '1', 'POTENTIAL USE OF PROPOSED SOLUTION\r\n             - explanation of potential use of proposed solution in real time situation', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('45', 'BCC3024', 'PSM2 -2', '2', 'PROPOSED DESIGN\r\n             - should describe the proposed design related to project requirement.\r\n             Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('46', 'BCC3024', 'PSM2 -2', '2', 'DATA DESIGN\r\n             - should describe the data related to the project\r\n              Project Based: ERD, Database Design (PK, FK) / Data Model', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('47', 'BCC3024', 'PSM2 -2', '2', 'PROOF OF CONCEPT/PROTOTYPE\r\n             - demonstrate evidence of early work\r\n             Project Based: Design Prototype', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('48', 'BCC3024', 'PSM2 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE\r\n             -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('49', 'BCC3024', 'PSM2 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design\r\n             PROJECT- the design of the prototype should be up to the standard.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('50', 'BCC3024', 'PSM2 -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability\r\n             PROJECT: Should be easy to use and understand\r\n             - natural interaction style ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('51', 'BCC3024', 'PSM2 -2', '2', 'TESTING PLAN/VALIDATION PLAN\r\n             - should describe the testing strategy/approach\r\n             - cover the simple set of input, processess and output and comparison of result ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('52', 'BCC3024', 'PSM2 -2', '3', 'Oral Communication\r\n             The ability to deliver ideas clearly and effectively through verbal.', '0.2', '5', 'No oral communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('53', 'BCC3024', 'PSM2 -2', '3', 'Written Communication \r\n             The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', '0.2', '5', 'No written communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('54', 'BCC3024', 'PSM2 -2', '3', 'Responding to Question\r\n             The ability to respond to questions using appropriate language ', '0.4', '5', 'No respond to question', 'Insufficiently responded', '<in between>', 'Partially responded', '<in between', 'Clearly responded'),
('55', 'BCC3024', 'PSM2 -2', '3', 'Expression\r\n             The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', '0.2', '5', 'No expression', 'Insufficiently expressed', '<in between>', 'Partially expressed', '<in between', 'Clearly expressed'),
('56', 'BCC3024', 'PSM2 -3', '4', 'ACADEMIC INTERGRITY\r\n             - ability to sustain academic integrity (no plagiarism)\r\n             - below 25%', '0.2', '5', 'No academic integrity sustained', 'Total violation on academic integrity', '<in between>', 'Partially violating academic integrity', '<in between', 'Academic integrity sustained'),
('57', 'BCC3024', 'PSM2 -3', '4', 'QUALITY OF SUPERVISOR and STUDENT PROGRESS \r\n             - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', '0.4', '5', 'No meeting', 'Insufficiently meets the quality', '<in between>', 'Partially meets the quality', '<in between', 'Clearly meets the quality'),
('58', 'BCC3024', 'PSM2 -3', '4', 'ATTITUDE\r\n             - Treats supervisors with respect, courtesy, and tact. \r\n             - Shows enthusiasm and optimism', '0.4', '5', 'Attitude insufficiently complied.', 'Attitude insufficiently complied.', '<in between>', 'Attitude partially complied', '<in between', 'Attitude fully complie'),
('59', 'DCC3024', 'PTA -1', '1', 'INTRODUCTION\r\n             - explanation should consist of domain background, importance of the subject and current issues according to proposed topic', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('60', 'DCC3024', 'PTA -1', '1', 'PROBLEM STATEMENT\r\n             - explanation of problem should be related to the domain / knowledge or solution gap ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('61', 'DCC3024', 'PTA -1', '1', 'OBJECTIVE\r\n             - MUST be 3 Objectives (reflecting SMART concept)\r\n             ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('62', 'DCC3024', 'PTA -1', '1', 'SCOPE\r\n             - must be related to the project', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('63', 'DCC3024', 'PTA -1', '1', 'LITERATURE REVIEW (WORK RELEVANCY)\r\n             - Minimum 3 related work relevant to the project must be compared.\r\n             - Comparison on existing systems / proposed techniques must be relevant.', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('64', 'DCC3024', 'PTA -1', '1', 'LITERATURE REVIEW (WORK DESCRIPTION)\r\n             - Description should be clear for THREE system/method/ techniques/ algorithm. ', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('65', 'DCC3024', 'PTA -1', '1', 'LITERATURE REVIEW (WORK ANALYSIS) \r\n             - Analysis of comparison on previous system/method\r\n             - Should highlight on features/strength/ weakness/ advantage/ disadvantage ', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('66', 'DCC3024', 'PTA -1', '1', 'PROJECT MANAGEMENT FRAMEWORK\r\n             - should describe on applied / used project management framework in the project.\r\n             Project Based: SDLC (Agile,RAD etc)\r\n             Research Based: Research Framework/Model', '0.6', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('67', 'DCC3024', 'PTA -1', '1', 'PROJECT REQUIREMENT\r\n             - should describe the requirement related to the project.\r\n             Project Based: Functional and Non-Functional Requirement, Constraints and limitations', '0.8', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('68', 'DCC3024', 'PTA -1', '1', 'REFERENCE \r\n             -Minimum 5 references related to the project must be stated. \r\n             - Facts are properly cited with correct reference in the proposal content\r\n             - Must follow the proposal format', '0.4', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('69', 'DCC3024', 'PTA -2', '1', 'POTENTIAL USE OF PROPOSED SOLUTION\r\n             - explanation of potential use of proposed solution in real time situation', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('70', 'DCC3024', 'PTA -2', '2', 'PROPOSED DESIGN\r\n             - should describe the proposed design related to project requirement.\r\n             Project Based: Context Diagram, Use Case Diagram & description, Activity diagram', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('71', 'DCC3024', 'PTA -2', '2', 'DATA DESIGN\r\n             - should describe the data related to the project\r\n              Project Based: ERD, Database Design (PK, FK) / Data Model', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('72', 'DCC3024', 'PTA -2', '2', 'PROOF OF CONCEPT/PROTOTYPE\r\n             - demonstrate evidence of early work\r\n             Project Based: Design Prototype', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('73', 'DCC3024', 'PTA -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE\r\n             -Functionality: the set of features/criteria/parameter/ must deliver clear value to the user.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('74', 'DCC3024', 'PTA -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Design\r\n             PROJECT- the design of the prototype should be up to the standard.', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('75', 'DCC3024', 'PTA -2', '2', 'PROOF OF INITIAL CONCEPT/PROTOTYPE: Usability\r\n             PROJECT: Should be easy to use and understand\r\n             - natural interaction style ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('76', 'DCC3024', 'PTA -2', '2', 'TESTING PLAN/VALIDATION PLAN\r\n             - should describe the testing strategy/approach\r\n             - cover the simple set of input, processess and output and comparison of result ', '0.2', '5', 'No explanation', 'Insufficiently explained', '<in between>', 'Partially explained', '<in between', 'Clearly explained'),
('77', 'DCC3024', 'PTA -2', '3', 'Oral Communication\r\n             The ability to deliver ideas clearly and effectively through verbal.', '0.2', '5', 'No oral communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('78', 'DCC3024', 'PTA -2', '3', 'Written Communication \r\n             The ability to write an academic discourse (project proposal) which has a coherent flow that is clear and easy to comprehend', '0.2', '5', 'No written communication', 'Insufficiently delivered', '<in between>', 'Partially delivered', '<in between', 'Clearly delivered'),
('79', 'DCC3024', 'PTA -2', '3', 'Responding to Question\r\n             The ability to respond to questions using appropriate language ', '0.4', '5', 'No respond to question', 'Insufficiently responded', '<in between>', 'Partially responded', '<in between', 'Clearly responded'),
('80', 'DCC3024', 'PTA -2', '3', 'Expression\r\n             The ability to express nonverbal cues such as facial expressions, eye contact or tone of voice', '0.2', '5', 'No expression', 'Insufficiently expressed', '<in between>', 'Partially expressed', '<in between', 'Clearly expressed'),
('81', 'DCC3024', 'PTA -3', '4', 'ACADEMIC INTERGRITY\r\n             - ability to sustain academic integrity (no plagiarism)\r\n             - below 25%', '0.2', '5', 'No academic integrity sustained', 'Total violation on academic integrity', '<in between>', 'Partially violating academic integrity', '<in between', 'Academic integrity sustained'),
('82', 'DCC3024', 'PTA -3', '4', 'QUALITY OF SUPERVISOR and STUDENT PROGRESS \r\n             - Consistently record all meeting in Logbook. Punctual for all commitments. Prepares by reading and completing project task as necessary', '0.4', '5', 'No meeting', 'Insufficiently meets the quality', '<in between>', 'Partially meets the quality', '<in between', 'Clearly meets the quality'),
('83', 'DCC3024', 'PTA -3', '4', 'ATTITUDE\r\n             - Treats supervisors with respect, courtesy, and tact. \r\n             - Shows enthusiasm and optimism', '0.4', '5', 'Attitude insufficiently complied.', 'Attitude insufficiently complied.', '<in between>', 'Attitude partially complied', '<in between', 'Attitude fully complie');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Schedule_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Schedule_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `std_id`, `lect_id`, `Schedule_date`, `Schedule_time`) VALUES
('01', 'CB19025', 'SE18015', '2022-06-15', '10:00'),
('02', 'CB18085', 'SE19015', '2022-06-15', '10:30'),
('03', 'CC18076', 'SE19016', '2022-06-15', '11:00'),
('04', 'CB18026', 'SE19017', '2022-06-15', '11:30'),
('05', 'CA19023', 'SE19015', '2022-06-15', '14:00'),
('06', 'CD18039', 'SE19018', '2022-06-15', '14:30'),
('07', 'CB19016', 'SE19019', '2022-06-15', '15:00'),
('08', 'CB19083', 'SE19015', '2022-06-16', '11:00'),
('09', 'CB19083', 'SE18015', '2022-06-16', '11:30');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crs_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lect_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_fac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `crs_id`, `lect_id`, `title`, `std_name`, `std_email`, `std_hp`, `std_fac`) VALUES
('CA18039', 'BCC3024', 'SE19015', 'Software piracy protection system', 'Navin', 'navin@gmail.com', '0156323255', 'FKOM'),
('CA19023', 'BCC3012', 'SE18015', 'Weather forecasting system', 'Chee Kin', 'ck@gmail.com', '0173246574', 'FKOM'),
('CB18026', 'BCC3024', 'SE18015', 'Fingerprint-based ATM system', 'Aqilah', 'aqilah@gmail.com', '0193324536', 'FKOM'),
('CB18085', 'BCC3024', 'SE18015', 'Anti-Virus', 'Aisyah', 'aisyah@gmail.com', '0138384838', 'FKOM'),
('CB19015', 'BCC3012', 'SE19015', 'Attendance System', 'Narresh', 'narresh@gmail.com', '01124092575', 'FKOM'),
('CB19016', 'BCC3012', 'SE18015', 'Android task monitoring', 'Loga', 'loga@gmail.com', '0123342345', 'FKOM'),
('CB19025', 'BCC3012', 'SE19015', 'Advanced employee management system', 'Ronald', 'ronald@gmail.com', '0181123213', 'FKOM'),
('CB19083', 'BCC3012', 'SE19015', 'Food Waste Application', 'Moga', 'moga@gmail.com', '018383939', 'FKOM'),
('CC18011', 'DCC3024', 'SE18015', 'Fingerprint voting system', 'Nadia', 'nadia@gmail.com', '0181233214', 'FKOM'),
('CC18024', 'DCC3024', 'SE19015', 'Image encryption using AES algorithm', 'Alia', 'alia@gmail.com', '0192230574', 'FKOM'),
('CC18039', 'DCC3024', 'SE19015', 'Smart health prediction system', 'Nabila', 'nabila@gmail.com', '0156373892', 'FKOM'),
('CC18067', 'DCC3024', 'SE19015', 'Railway tracking and arrival time prediction system', 'Muthu', 'muthu@gmail.com', '0172315423', 'FKOM'),
('CC18076', 'DCC3024', 'SE18015', 'Automated payroll system with GPS tracking and image capture', 'Ali', 'ali@gmail.com', '0134457784', 'FKOM'),
('CC18093', 'DCC3024', 'SE18015', 'e-Learning platform', 'Pravin', 'pravin@gmail.com', '0145457784', 'FKOM'),
('CD18039', 'BCC3024', 'SE18015', 'FYP Evaluation System', 'Kavin', 'kavin@gmail.com', '0167558999', 'FKOM'),
('CD19045', 'BCC3012', 'SE19015', 'Android local train ticketing system', 'Rani', 'rani@gmail.com', '01132456789', 'FKOM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `password`, `u_type`, `email`, `updated_at`, `remember_token`) VALUES
('CB19052', 'Ronald Lim Sheng Wei', '$2y$10$7XHTLyG0ufGBmKCV9atVVeby0fJyD215gvfBJhugY02ehb5AC7rme', 'Student', 'ronald@gmail.com', NULL, NULL),
('CO0001', 'Muhammad Azwan', '$2y$10$AK1FBzdCAq8xr01GWokP5eyZV9qDjUJIVrsJJwqy.Gc/RfX8itMn.', 'Coordinator', 'azwan@gmail.com', NULL, NULL),
('SE18015', 'Prabhu A/L Muthu', '$2y$10$vEYDkCvmII9W9KgNud9rHu40PuvaXguMT5cUl3LB.iOxSRpDtFBpK', 'Supervisor', 'prabu@gmail.com', NULL, NULL),
('SE19015', 'Narresh Naidu A/L Subramaniam', '$2y$10$IPtOkCcSKh.89D49WD9Kmu8aDn92O.yap7dU8l/wEQjpshe16/wdm', 'Supervisor/Evaluator', 'narresh@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD UNIQUE KEY `coordinators_cord_id_unique` (`cord_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `courses_crs_id_unique` (`crs_id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD UNIQUE KEY `evaluations_ev_id_unique` (`ev_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD UNIQUE KEY `lecturers_lect_id_unique` (`lect_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD UNIQUE KEY `progress_std_id_unique` (`std_id`);

--
-- Indexes for table `rubrics`
--
ALTER TABLE `rubrics`
  ADD UNIQUE KEY `rubrics_rubricid_unique` (`rubricid`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD UNIQUE KEY `schedules_schedule_id_unique` (`schedule_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `students_std_id_unique` (`std_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `users_u_id_unique` (`u_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
