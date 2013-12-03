-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2013 at 02:11 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sbt`
--
CREATE DATABASE IF NOT EXISTS `sbt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sbt`;

-- --------------------------------------------------------

--
-- Table structure for table `allowed_file_types`
--

CREATE TABLE IF NOT EXISTS `allowed_file_types` (
  `file_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_ext` varchar(10) NOT NULL,
  `file_short_name` varchar(255) NOT NULL,
  `file_description` varchar(255) NOT NULL,
  PRIMARY KEY (`file_type_id`),
  KEY `file_id` (`file_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `allowed_file_types`
--

INSERT INTO `allowed_file_types` (`file_type_id`, `file_ext`, `file_short_name`, `file_description`) VALUES
(1, 'doc', 'Word Doc (.doc)', 'Microsoft Word document'),
(2, 'docx', 'Word Doc (.docx)', 'Microsoft Word document (post 2007)'),
(3, 'dot', 'Word Template (.dot)', 'Microsoft Word template'),
(4, 'dotx', 'Word Template (.dotx)', 'Microsoft Word template (post 2007)'),
(5, 'xls', 'Excel File (.xls)', 'Microsoft Excel workbook'),
(6, 'xlt', 'Excel Template (.xlt)', 'Microsoft Excel template'),
(7, 'xlsx', 'Excel File (.xlsx)', 'Microsoft Excel workbook (post 2007)'),
(8, 'xltx', 'Excel Template (.xltx)', 'Microsoft Excel template (post 2007)'),
(9, 'ppt', 'PowerPoint (.ppt)', 'Microsoft PowerPoint presentation'),
(10, 'pps', 'PowerPoint Slideshow (.pps)', 'Microsoft PowerPoint slideshow'),
(11, 'pot', 'PowerPoint Template (.pot)', 'Microsoft PowerPoint template'),
(12, 'pptx', 'PowerPoint (.pptx)', 'Microsoft PowerPoint presentation (post 2007)'),
(13, 'ppsx', 'PowerPoint Slideshow (.ppsx)', 'Microsoft PowerPoint slideshow (post 2007)'),
(14, 'potx', 'PowerPoint Template (.potx)', 'Microsoft PowerPoint template (post 2007)'),
(15, 'mdb', 'Access Database (.mdb)', 'Microsoft Access database file'),
(16, 'accdb', 'Access Database (.accdb)', 'Microsoft Access database file (post 2007)'),
(17, 'pub', 'Publisher File', 'Microsoft Publisher document file'),
(18, 'gif', 'GIF Picture', 'Graphics Interchange Format'),
(19, 'pdf', 'PDF File', 'Portable Document Format'),
(20, 'csv', 'Comma Seperated File', 'Comma Seperated File');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sharing_status` varchar(20) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type_id` int(10) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `description` text,
  `subject` varchar(255) DEFAULT NULL,
  `upload_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`),
  KEY `user_id` (`user_id`),
  KEY `file_type_id` (`file_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `user_id`, `sharing_status`, `file_name`, `file_type_id`, `file_path`, `file_size`, `description`, `subject`, `upload_date`) VALUES
(17, 1, 'public', 'Computer Architecture Exam Prac', 2, '..//studybettertogether/files/public/Computer_Architecture_Exam_Prac.docx', '33 kb', '', '', '2013-11-13 13:08:42'),
(19, 1, 'public', 'Semester One Timetable by Programme - Jan 2014', 19, '..//studybettertogether/files/public/Semester_One_Timetable_by_Programme_-_Jan_2014.pdf', '323 kb', '', '', '2013-11-13 15:53:34'),
(21, 2, 'public', 'example1_lecture5 _thur', 5, '..//studybettertogether/files/public/example1_lecture5__thur.xls', '31 kb', '', '', '2013-11-13 22:10:29'),
(23, 2, 'public', 'BDA_01_Statistics, Data, and Statistical Thinking', 9, '..//studybettertogether/files/public/BDA_01_Statistics,_Data,_and_Statistical_Thinking.ppt', '1,997 kb', '', '', '2013-11-13 22:19:59'),
(24, 2, 'public', 'DCU - Testing the difference between two means, two variances and two populations', 19, '..//studybettertogether/files/public/DCU_-_Testing_the_difference_between_two_means,_two_variances_and_two_populations.pdf', '397 kb', '', '', '2013-11-13 22:51:00'),
(27, 1, 'public', 'Andrew Final Year Project - Proposed Idea', 2, '..//studybettertogether/files/public/Andrew_Final_Year_Project_-_Proposed_Idea.docx', '20 kb', '', '', '2013-11-13 22:53:40'),
(28, 1, 'public', 'ProjectProposal- StudySmart - A web based collaborative study platform', 2, '..//studybettertogether/files/public/ProjectProposal-_StudySmart_-_A_web_based_collaborative_study_platform.docx', '72 kb', '', '', '2013-11-13 22:58:17'),
(29, 1, 'public', 'CompleteEveningProjectSupervisorList14102013', 7, '..//studybettertogether/files/public/CompleteEveningProjectSupervisorList14102013.xlsx', '10 kb', '', '', '2013-11-13 22:58:58'),
(32, 2, 'private', 'BDA_03_Core Concepts', 12, '..//studybettertogether/files/amonaghan/BDA_03_Core_Concepts.pptx', '496 kb', '', '', '2013-11-13 23:26:06'),
(33, 2, 'private', 'BDA-07-Student-t-test', 12, '..//studybettertogether/files/amonaghan/BDA-07-Student-t-test.pptx', '903 kb', '', '', '2013-11-13 23:30:00'),
(34, 1, 'private', 'Lab Master Sem1', 19, '..//studybettertogether/files/MimiSBT/Lab_Master_Sem1.pdf', '48 kb', '', '', '2013-11-13 23:40:44'),
(35, 13, 'private', 'Semester One Timetable by Programme - Jan 2014', 19, '..//studybettertogether/files/Brian2013/Semester_One_Timetable_by_Programme_-_Jan_2014.pdf', '323 kb', '', '', '2013-11-14 10:32:56'),
(36, 2, 'private', 'StudyBetterTogether- Requirement Questionnaire', 2, '..//studybettertogether/files/amonaghan/StudyBetterTogether-_Requirement_Questionnaire.docx', '72 kb', 'terst', 'test', '2013-12-02 23:12:51'),
(49, 2, 'private', 'Questionnaire Results', 2, '../../../studybettertogether/files/amonaghan/Questionnaire_Results.docx', '37 kb', '', '', '2013-12-03 09:47:10'),
(50, 2, 'private', 'Questionnaire Results Screenshots', 2, '../../../studybettertogether/files/amonaghan/Questionnaire_Results_Screenshots.docx', '375 kb', '', '', '2013-12-03 09:48:13'),
(51, 2, 'public', 'Questionnaire Results Screenshots', 2, '../../../studybettertogether/files/public/Questionnaire_Results_Screenshots.docx', '375 kb', '', '', '2013-12-03 09:48:34'),
(52, 2, 'private', 'Project RS - StudyBetterTogether', 19, '../../../studybettertogether/files/amonaghan/Project_RS_-_StudyBetterTogether.pdf', '1,595 kb', '', '', '2013-12-03 09:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_type` varchar(8) NOT NULL DEFAULT 'Student',
  `password` varchar(100) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `register_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `account_type`, `password`, `register_date`, `register_code`) VALUES
(1, 'Mimi', 'Kelly', 'MimiSBT', 'Mimi.Kelly@sbt.com', 'Admin', 'b04fbf77b7d07f2a5c4fb13e070a9558f09576e9', '2013-10-18 18:36:41', 'a2331f024b63e5f1f9a06ec62ade80509f6ed476'),
(2, 'Andrew', 'Monagahn', 'amonaghan', 'Andrew.Monaghan@student.ie', 'Student', 'e79947c608a8ff67a064e3847a70f70f0b8f011a', '2013-10-18 18:36:41', NULL),
(8, 'Sarah', 'Smith', 'Ssmith', 'sarahsmith@college.ie', 'Student', '574e8ecda5d4f43b7cbcb1b92eb92c8bfdfe9ba0', '2013-10-31 13:31:26', NULL),
(13, 'Brian', 'Jones', 'Brian2013', 'brianjones@test.com', 'Student', 'e9f2cc0c8ed013031c5c7b054347e5facfcbbe20', '2013-11-06 23:02:20', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`file_type_id`) REFERENCES `allowed_file_types` (`file_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
