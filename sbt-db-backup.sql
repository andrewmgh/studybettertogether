-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2013 at 12:30 PM
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
  `owner_id` int(11) NOT NULL,
  `file_sharing_id` int(11) NOT NULL,
  `file_type_id` int(10) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_size` varchar(50) NOT NULL,
  `description` text,
  `subject` varchar(255) DEFAULT NULL,
  `upload_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`),
  UNIQUE KEY `file_sharing_id` (`file_sharing_id`),
  KEY `user_id` (`owner_id`),
  KEY `file_type_id` (`file_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `owner_id`, `file_sharing_id`, `file_type_id`, `file_name`, `file_path`, `file_size`, `description`, `subject`, `upload_date`) VALUES
(1, 2, 1, 2, 'Personal Study Helper', '../../../studybettertogether/files/amonaghan/Personal_Study_Helper.docx', '17 kb', 'studyhelper', 'study', '2013-12-07 12:52:18'),
(2, 2, 2, 2, 'ProjectProposal2- Studytogether.com', '../../../studybettertogether/files/amonaghan/ProjectProposal2-_Studytogether.com.docx', '674 kb', 'test', 'test', '2013-12-07 12:53:42'),
(5, 2, 5, 19, 'Group1_SKO_RequirementsSpecification', '../../../studybettertogether/files/public/Group1_SKO_RequirementsSpecification.pdf', '828 kb', 'desc', 'sub', '2013-12-07 13:10:47'),
(6, 15, 6, 2, 'usecases - Study Smart Mobile Website', '../../../studybettertogether/files/stuartSmith/usecases_-_Study_Smart_Mobile_Website.docx', '48 kb', '', '', '2013-12-07 16:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `file_sharing`
--

CREATE TABLE IF NOT EXISTS `file_sharing` (
  `sharing_id` int(11) NOT NULL AUTO_INCREMENT,
  `sharing_status` enum('public','private','specific') NOT NULL,
  `shared_with` mediumtext,
  PRIMARY KEY (`sharing_id`),
  FULLTEXT KEY `shared_with` (`shared_with`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `file_sharing`
--

INSERT INTO `file_sharing` (`sharing_id`, `sharing_status`, `shared_with`) VALUES
(1, 'private', ''),
(2, 'specific', 'jonoB,rachael14,Ssmith'),
(5, 'public', ''),
(6, 'specific', 'amonaghan,MimiSBT');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `account_type`, `password`, `register_date`, `register_code`) VALUES
(1, 'Mimi', 'Kelly', 'MimiSBT', 'Mimi.Kelly@sbt.com', 'Admin', 'b04fbf77b7d07f2a5c4fb13e070a9558f09576e9', '2013-10-18 18:36:41', 'a2331f024b63e5f1f9a06ec62ade80509f6ed476'),
(2, 'Andrew', 'Monaghan', 'amonaghan', 'Andrew.Monaghan@student.ie', 'Student', 'e79947c608a8ff67a064e3847a70f70f0b8f011a', '2013-10-18 18:36:41', NULL),
(8, 'Sarah', 'Smith', 'Ssmith', 'sarahsmith@college.ie', 'Student', '574e8ecda5d4f43b7cbcb1b92eb92c8bfdfe9ba0', '2013-10-31 13:31:26', NULL),
(13, 'Brian', 'Jones', 'Brian2013', 'brianjones@test.com', 'Student', 'e9f2cc0c8ed013031c5c7b054347e5facfcbbe20', '2013-11-06 23:02:20', NULL),
(14, 'Jonathan', 'Brady', 'jonoB', 'jonob@test.com', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-12-05 15:08:47', NULL),
(15, 'Stuart', 'Smith', 'stuartSmith', 'stuartSmith@test.com', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-12-05 15:09:23', NULL),
(16, 'Rachael', 'Jones', 'rachael14', 'rachael@test.com', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-12-05 15:10:16', NULL),
(17, 'Stefan', 'O'' Connor', 'stefan', 'stefan@test.com', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-12-05 15:11:03', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`file_type_id`) REFERENCES `allowed_file_types` (`file_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `files_ibfk_3` FOREIGN KEY (`file_sharing_id`) REFERENCES `file_sharing` (`sharing_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
