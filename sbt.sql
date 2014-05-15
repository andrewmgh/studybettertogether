-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2014 at 10:03 PM
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
-- Table structure for table `ajax_chat_bans`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userName` (`userName`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_invitations`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  PRIMARY KEY (`userID`,`channel`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_messages`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `message_condition` (`id`,`channel`,`dateTime`),
  KEY `dateTime` (`dateTime`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=92 ;

--
-- Dumping data for table `ajax_chat_messages`
--

INSERT INTO `ajax_chat_messages` (`id`, `userID`, `userName`, `userRole`, `channel`, `dateTime`, `ip`, `text`) VALUES
(1, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:09:04', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(2, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:10:27', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(3, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:10:30', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(4, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:10:31', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(5, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:11:15', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(6, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:04', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(7, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:07', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(8, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:09', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(9, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:27', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/roll MimiSBT 1d6 1'),
(10, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:29', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(11, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:31', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(12, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:33', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(13, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:13:34', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(14, 2147483647, 'ChatBot', 4, 0, '2014-02-23 17:16:03', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(15, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:20:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(16, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:21:40', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(17, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:21:49', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(18, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:21:50', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(19, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:21:54', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/roll MimiSBT 1d6 1'),
(21, 2147483647, 'ChatBot', 4, 1000000001, '2014-03-15 15:22:01', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/delete 20'),
(22, 2147483647, 'ChatBot', 4, 0, '2014-03-15 15:22:02', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(23, 2147483647, 'ChatBot', 4, 0, '2014-03-19 12:29:30', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(24, 2147483647, 'ChatBot', 4, 0, '2014-03-19 13:01:08', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(25, 2147483647, 'ChatBot', 4, 0, '2014-03-19 13:01:12', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(26, 2147483647, 'ChatBot', 4, 0, '2014-03-19 18:06:49', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(27, 2147483647, 'ChatBot', 4, 0, '2014-03-19 20:20:06', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(28, 2147483647, 'ChatBot', 4, 0, '2014-03-19 20:20:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(29, 2147483647, 'ChatBot', 4, 0, '2014-03-20 22:31:14', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(30, 2147483647, 'ChatBot', 4, 0, '2014-03-20 22:31:15', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(31, 2147483647, 'ChatBot', 4, 0, '2014-03-20 22:31:16', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(32, 2, 'amonaghan', 1, 0, '2014-03-20 22:39:46', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Hey Mimi'),
(33, 2147483647, 'ChatBot', 4, 0, '2014-03-20 22:41:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(34, 2147483647, 'ChatBot', 4, 0, '2014-03-23 11:19:32', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(35, 2147483647, 'ChatBot', 4, 0, '2014-03-23 11:31:03', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(36, 2147483647, 'ChatBot', 4, 0, '2014-03-23 11:32:05', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(37, 2147483647, 'ChatBot', 4, 0, '2014-03-23 11:32:38', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(38, 2147483647, 'ChatBot', 4, 0, '2014-03-23 15:47:02', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(39, 2147483647, 'ChatBot', 4, 0, '2014-03-23 15:47:03', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(40, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:07:44', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(41, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:11:04', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(42, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:11:09', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(43, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:11:12', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(44, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:11:47', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(45, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:12:20', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(46, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:13:22', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(47, 2147483647, 'ChatBot', 4, 0, '2014-03-23 16:13:23', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(48, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:33:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(49, 1, 'MimiSBT', 3, 0, '2014-03-29 13:33:25', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'gi'),
(50, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:48:30', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(51, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:48:33', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(52, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:00', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(53, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:02', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(54, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:03', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login MimiSBT'),
(55, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:04', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout MimiSBT'),
(56, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:18', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(57, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:23', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(58, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:24', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(59, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:26', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(60, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:49:28', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(61, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:51:18', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(62, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:51:19', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(63, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:51:20', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(64, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:51:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(65, 2147483647, 'ChatBot', 4, 0, '2014-03-29 13:51:22', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(66, 2147483647, 'ChatBot', 4, 0, '2014-03-29 15:42:20', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(67, 2147483647, 'ChatBot', 4, 0, '2014-03-29 15:42:21', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(68, 2147483647, 'ChatBot', 4, 0, '2014-03-29 15:43:45', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(69, 2147483647, 'ChatBot', 4, 0, '2014-03-29 15:43:46', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout amonaghan'),
(70, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:41:38', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan'),
(71, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:42:31', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(72, 1, 'mimikelly', 3, 0, '2014-04-02 19:46:28', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Hey'),
(73, 1, 'mimikelly', 3, 0, '2014-04-02 19:46:34', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'How are you?'),
(76, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:46:55', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/delete 74'),
(77, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:46:57', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/delete 75'),
(78, 2, 'amonaghan', 1, 0, '2014-04-02 19:47:05', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'I''m great. How are you?'),
(79, 1, 'mimikelly', 3, 0, '2014-04-02 19:47:15', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'Great :)'),
(80, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:47:51', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly'),
(81, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:47:53', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(82, 2147483647, 'ChatBot', 4, 0, '2014-04-02 19:51:44', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly Timeout'),
(83, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:19:09', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(84, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:19:38', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly'),
(85, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:19:39', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(86, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:19:53', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly'),
(87, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:19:54', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(88, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:21:08', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly'),
(89, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:21:09', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(90, 2147483647, 'ChatBot', 4, 0, '2014-05-03 17:21:10', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/logout mimikelly'),
(91, 2147483647, 'ChatBot', 4, 0, '2014-05-10 16:34:38', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly');

-- --------------------------------------------------------

--
-- Table structure for table `ajax_chat_online`
--

CREATE TABLE IF NOT EXISTS `ajax_chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `allowed_file_types`
--

CREATE TABLE IF NOT EXISTS `allowed_file_types` (
  `file_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `file_ext` varchar(10) CHARACTER SET latin1 NOT NULL,
  `file_short_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `file_description` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`file_type_id`),
  KEY `file_id` (`file_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

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
(20, 'csv', 'Comma Seperated File', 'Comma Seperated File'),
(21, 'rtf', 'Rich Text Doc', 'Rich Text Format File'),
(22, 'txt', 'Text File', 'Plain Text File'),
(23, 'xml', 'XML File', 'Extensible Markup Language'),
(24, 'sql', 'SQL File', 'Structured Query Language Data File'),
(25, 'png', 'PNG Picture', 'Portable Network Graphic'),
(26, 'jpg', 'JPG Picture', 'JPEG Image'),
(27, 'bmp', 'BMP Picture', 'Bitmap Image File');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  `class_code` varchar(15) NOT NULL,
  `class_register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `register_code` varchar(100) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_name` (`class_name`),
  KEY `class_name_2` (`class_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_code`, `class_register_date`, `register_code`) VALUES
(1, 'IBI Test Class', 'IBI', '2014-01-08 11:33:30', '6794597a61ecac094c75f6ae849678ca8172fbca'),
(2, 'NCI 4th Year Computing', 'BSHBSCE', '2014-02-10 23:00:33', '6794597a61ecac094c75f6ae849678ca8172fbca');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `file_type_id` int(10) NOT NULL,
  `file_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `file_path` varchar(255) CHARACTER SET latin1 NOT NULL,
  `file_size` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1,
  `subject` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`),
  KEY `user_id` (`owner_id`),
  KEY `file_type_id` (`file_type_id`),
  FULLTEXT KEY `file_name` (`file_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `owner_id`, `file_type_id`, `file_name`, `file_path`, `file_size`, `description`, `subject`, `upload_date`) VALUES
(1, 2, 2, 'Personal Study Helper', '../../../studybettertogether/files/2/Personal_Study_Helper.docx', '17 kb', 'studyhelper', 'study', '2013-12-07 12:52:18'),
(2, 2, 2, 'ProjectProposal2- Studytogether.com', '../../../studybettertogether/files/2/ProjectProposal2-_Studytogether.com.docx', '674 kb', 'test', 'test', '2013-12-07 12:53:42'),
(5, 2, 19, 'Group1_SKO_RequirementsSpecification', '../../../studybettertogether/files/2/Group1_SKO_RequirementsSpecification.pdf', '828 kb', 'desc', 'sub', '2013-12-07 13:10:47'),
(12, 1, 1, 'CA BPE(1)', '../../../studybettertogether/files/1/CA_BPE(1).doc', '26 kb', 'CA for Business Process Engineering', 'BPE', '2014-02-03 23:42:17'),
(17, 1, 12, 'BPE-07b Lean', '../../../studybettertogether/files/1/BPE-07b_Lean.pptx', '1,269 kb', '', '', '2014-02-05 14:55:30'),
(18, 1, 12, 'BPE-07a-TQM', '../../../studybettertogether/files/1/BPE-07a-TQM.pptx', '1,342 kb', '', '', '2014-02-05 14:56:23'),
(27, 2, 2, 'test - Copy (5) - Copy', '../../../studybettertogether/files/2/test_-_Copy_(5)_-_Copy.docx', '13 kb', '', '', '2014-03-19 17:11:30'),
(28, 2, 2, 'test - Copy (3) - Copy', '../../../studybettertogether/files/2/test_-_Copy_(3)_-_Copy.docx', '13 kb', '', '', '2014-03-19 17:12:55'),
(29, 2, 2, 'test - Copy (4) - Copy', '../../../studybettertogether/files/2/test_-_Copy_(4)_-_Copy.docx', '13 kb', '', '', '2014-03-19 17:20:02'),
(30, 2, 5, 'bmi_group_calculator_english', '../../../studybettertogether/files/2/bmi_group_calculator_english.xls', '3,989 kb', '', '', '2014-03-19 17:20:44'),
(34, 1, 25, 'image2', '../../../studybettertogether/files/1/image2.png', '47 kb', '', '', '2014-05-15 19:14:36'),
(35, 2, 22, 'tesdt', '../../../studybettertogether/files/2/tesdt.txt', '0 kb', '', '', '2014-05-15 19:22:11'),
(44, 2, 25, 'image2', '../../../studybettertogether/files/2/image2.png', '47 kb', '', '', '2014-05-15 19:49:34'),
(45, 1, 2, 'ProjectProposal-StudyBetterTogether', '../../../studybettertogether/files/1/ProjectProposal-StudyBetterTogether.docx', '674 kb', '', '', '2014-05-15 19:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `file_sharing`
--

CREATE TABLE IF NOT EXISTS `file_sharing` (
  `sharing_id` int(11) NOT NULL,
  `sharing_status` enum('public','private','specific') CHARACTER SET latin1 NOT NULL,
  `shared_with` mediumtext CHARACTER SET latin1,
  PRIMARY KEY (`sharing_id`),
  FULLTEXT KEY `shared_with` (`shared_with`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_sharing`
--

INSERT INTO `file_sharing` (`sharing_id`, `sharing_status`, `shared_with`) VALUES
(1, 'private', ''),
(2, 'specific', '-3-'),
(5, 'public', ''),
(12, 'specific', '-2-3-'),
(17, 'specific', '-2-3-'),
(18, 'specific', '-2-3-'),
(27, 'specific', '-1-3-'),
(28, 'specific', '-1-3-'),
(29, 'specific', '-1-3-'),
(30, 'specific', '-1-3-'),
(34, 'specific', '-2-4-3-'),
(35, 'public', ''),
(44, 'specific', '-1-4-'),
(45, 'specific', '-2-');

-- --------------------------------------------------------

--
-- Table structure for table `forum_banlists`
--

CREATE TABLE IF NOT EXISTS `forum_banlists` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_banlists`
--

INSERT INTO `forum_banlists` (`name`, `list`) VALUES
('user_agents', ''),
('ips', ''),
('words', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE IF NOT EXISTS `forum_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `class_id` int(11) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `accession` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `order_id`, `class_id`, `category`, `description`, `accession`) VALUES
(1, 1, 0, 'General', '', 0),
(2, 2, 0, 'Social', '', 0),
(6, 0, 1, 'IBI Test Class', '', 0),
(7, 0, 2, 'NCI 4th Year Computing', '', 0),
(8, 0, 3, 'testt', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_entries`
--

CREATE TABLE IF NOT EXISTS `forum_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tid` int(11) NOT NULL DEFAULT '0',
  `uniqid` varchar(255) NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_reply` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_by` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `category` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `hp` varchar(255) NOT NULL DEFAULT '',
  `location` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(128) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `tags` varchar(255) NOT NULL DEFAULT '',
  `show_signature` tinyint(4) DEFAULT '0',
  `email_notification` tinyint(4) DEFAULT '0',
  `marked` tinyint(4) DEFAULT '0',
  `locked` tinyint(4) DEFAULT '0',
  `sticky` tinyint(4) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `spam` tinyint(4) DEFAULT '0',
  `spam_check_status` tinyint(4) DEFAULT '0',
  `edit_key` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `tid` (`tid`),
  KEY `category` (`category`),
  KEY `pid` (`pid`),
  KEY `sticky` (`sticky`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `forum_entries`
--

INSERT INTO `forum_entries` (`id`, `pid`, `tid`, `uniqid`, `time`, `last_reply`, `edited`, `edited_by`, `user_id`, `name`, `subject`, `category`, `email`, `hp`, `location`, `ip`, `text`, `tags`, `show_signature`, `email_notification`, `marked`, `locked`, `sticky`, `views`, `spam`, `spam_check_status`, `edit_key`) VALUES
(19, 0, 19, '52b2e68319d7d', '2013-12-19 12:29:25', '2014-01-31 13:18:41', '0000-00-00 00:00:00', NULL, 1, '', 'Welcome', 1, '', '', '', '::1', '[b]Hi all[/b]\r\n\r\nWelcome to our new collaborative learning website! \r\n\r\nHope you have fun :-)', '', 0, 0, 0, 0, 0, 35, 0, 0, ''),
(20, 19, 19, '52e3e1e9a0b9b', '2014-01-25 16:10:26', '2014-01-31 13:18:41', '0000-00-00 00:00:00', NULL, 2, '', 'Welcome', 1, '', '', '', '::1', 'Thanks Mimi', '', 0, 0, 0, 0, 0, 24, 0, 0, ''),
(21, 20, 19, '52eba2a710f1b', '2014-01-31 13:18:41', '2014-01-31 13:18:41', '0000-00-00 00:00:00', NULL, 1, '', 'Welcome', 1, '', '', '', '::1', 'No Prob', '', 0, 0, 0, 0, 0, 19, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_entries_cache`
--

CREATE TABLE IF NOT EXISTS `forum_entries_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_text` mediumtext NOT NULL,
  PRIMARY KEY (`cache_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_entries_cache`
--

INSERT INTO `forum_entries_cache` (`cache_id`, `cache_text`) VALUES
(19, '<p><strong>Hi all</strong></p>\n<p>Welcome to our new collaborative learning website! </p>\n<p>Hope you have fun <img src="images/smilies/smile.png" alt=":-)" /></p>\n'),
(20, '<p>Thanks Mimi</p>\n'),
(21, '<p>No Prob</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `forum_logincontrol`
--

CREATE TABLE IF NOT EXISTS `forum_logincontrol` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `logins` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_pages`
--

CREATE TABLE IF NOT EXISTS `forum_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `menu_linkname` varchar(255) NOT NULL DEFAULT '',
  `access` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_settings`
--

CREATE TABLE IF NOT EXISTS `forum_settings` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_settings`
--

INSERT INTO `forum_settings` (`name`, `value`) VALUES
('forum_name', 'Study Forum'),
('forum_description', 'A collaborative learning forum'),
('forum_email', 'admin@studybettertogether.com'),
('forum_address', 'http://localhost/studybettertogether/studyforum.php'),
('home_linkaddress', '../'),
('home_linkname', ''),
('language_file', 'english.lang'),
('theme', 'default'),
('access_for_users_only', '1'),
('entries_by_users_only', '1'),
('register_mode', '2'),
('default_email_contact', '0'),
('user_area_public', '0'),
('rss_feed', '0'),
('rss_feed_max_items', '0'),
('session_prefix', 'forum_'),
('default_view', '1'),
('remember_userdata', '0'),
('remember_last_visit', '0'),
('empty_postings_possible', '2'),
('email_notification_unregistered', '2'),
('user_edit', '2'),
('user_edit_if_no_replies', '0'),
('show_if_edited', '0'),
('dont_reg_edit_by_admin', '0'),
('dont_reg_edit_by_mod', '0'),
('edit_min_time_period', '0'),
('edit_max_time_period', '0'),
('edit_delay', '0'),
('bbcode', '1'),
('bbcode_img', '1'),
('bbcode_color', '0'),
('bbcode_size', '0'),
('bbcode_code', '0'),
('bbcode_tex', '0'),
('bbcode_flash', '0'),
('flash_default_width', '425'),
('flash_default_height', '344'),
('upload_images', '3'),
('smilies', '1'),
('autolink', '1'),
('count_views', '1'),
('autologin', '1'),
('threads_per_page', '30'),
('search_results_per_page', '20'),
('name_maxlength', '100'),
('name_word_maxlength', '30'),
('email_maxlength', '100'),
('hp_maxlength', '70'),
('location_maxlength', '40'),
('location_word_maxlength', '30'),
('subject_maxlength', '60'),
('subject_word_maxlength', '30'),
('text_maxlength', '5000'),
('profile_maxlength', '5000'),
('signature_maxlength', '255'),
('text_word_maxlength', '90'),
('email_subject_maxlength', '0'),
('email_text_maxlength', '0'),
('quote_symbol', '>'),
('count_users_online', '0'),
('last_reply_link', '0'),
('time_difference', '0'),
('time_zone', ''),
('auto_lock_old_threads', '0'),
('upload_max_img_size', '200'),
('upload_max_img_width', '600'),
('upload_max_img_height', '600'),
('mail_parameter', ''),
('forum_enabled', '1'),
('forum_readonly', '0'),
('forum_disabled_message', ''),
('page_browse_range', '10'),
('page_browse_show_last', '0'),
('deep_reply', '15'),
('very_deep_reply', '30'),
('users_per_page', '20'),
('username_maxlength', '40'),
('bad_behavior', '0'),
('akismet_entry_check', '0'),
('akismet_mail_check', '0'),
('akismet_key', ''),
('akismet_check_registered', '0'),
('stop_forum_spam', '0'),
('tags', '0'),
('tag_cloud', '0'),
('tag_cloud_day_period', '30'),
('tag_cloud_scale_min', '0'),
('tag_cloud_scale_max', '6'),
('latest_postings', '10'),
('terms_of_use_agreement', '1'),
('terms_of_use_url', 'http://localhost/studybettertogether/studyforum_terms.php'),
('syntax_highlighter', '0'),
('save_spam', '0'),
('auto_delete_spam', '168'),
('auto_lock', '0'),
('temp_block_ip_after_repeated_failed_logins', '0'),
('flood_prevention_minutes', '2'),
('fold_threads', '1'),
('avatars', '0'),
('avatar_max_filesize', '20'),
('avatar_max_width', '80'),
('avatar_max_height', '80'),
('captcha_posting', '0'),
('captcha_email', '0'),
('captcha_register', '0'),
('min_pw_length', '1'),
('cookie_validity_days', '30'),
('access_permission_checks', '0'),
('daily_actions_time', '3:30'),
('next_daily_actions', '1400211000'),
('auto_lock_old_threads', '0'),
('max_read_items', '0'),
('delete_ips', '0'),
('last_changes', '1387453797'),
('ajax_preview', '1'),
('version', '2.3.2');

-- --------------------------------------------------------

--
-- Table structure for table `forum_smilies`
--

CREATE TABLE IF NOT EXISTS `forum_smilies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `file` varchar(100) NOT NULL DEFAULT '',
  `code_1` varchar(50) NOT NULL DEFAULT '',
  `code_2` varchar(50) NOT NULL DEFAULT '',
  `code_3` varchar(50) NOT NULL DEFAULT '',
  `code_4` varchar(50) NOT NULL DEFAULT '',
  `code_5` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `forum_smilies`
--

INSERT INTO `forum_smilies` (`id`, `order_id`, `file`, `code_1`, `code_2`, `code_3`, `code_4`, `code_5`, `title`) VALUES
(1, 1, 'smile.png', ':-)', '', '', '', '', ''),
(2, 2, 'wink.png', ';-)', '', '', '', '', ''),
(3, 3, 'tongue.png', ':-P', '', '', '', '', ''),
(4, 4, 'biggrin.png', ':-D', '', '', '', '', ''),
(5, 5, 'neutral.png', ':-|', '', '', '', '', ''),
(6, 6, 'frown.png', ':-(', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_userdata`
--

CREATE TABLE IF NOT EXISTS `forum_userdata` (
  `user_id` int(11) NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_name` varchar(255) NOT NULL DEFAULT '',
  `user_real_name` varchar(255) NOT NULL DEFAULT '',
  `gender` tinyint(4) NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_pw` varchar(255) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `email_contact` tinyint(4) DEFAULT '0',
  `user_hp` varchar(255) NOT NULL DEFAULT '',
  `user_location` varchar(255) NOT NULL DEFAULT '',
  `signature` varchar(255) NOT NULL DEFAULT '',
  `profile` text NOT NULL,
  `logins` int(11) NOT NULL DEFAULT '0',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_ip` varchar(128) NOT NULL DEFAULT '',
  `registered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_selection` varchar(255) DEFAULT NULL,
  `thread_order` tinyint(4) NOT NULL DEFAULT '0',
  `user_view` tinyint(4) NOT NULL DEFAULT '0',
  `sidebar` tinyint(4) NOT NULL DEFAULT '1',
  `fold_threads` tinyint(4) NOT NULL DEFAULT '0',
  `thread_display` tinyint(4) NOT NULL DEFAULT '0',
  `new_posting_notification` tinyint(4) DEFAULT '0',
  `new_user_notification` tinyint(4) DEFAULT '0',
  `user_lock` tinyint(4) DEFAULT '0',
  `auto_login_code` varchar(50) NOT NULL DEFAULT '',
  `pwf_code` varchar(50) NOT NULL,
  `activate_code` varchar(50) NOT NULL DEFAULT '',
  `language` varchar(255) NOT NULL DEFAULT '',
  `time_zone` varchar(255) NOT NULL DEFAULT '',
  `time_difference` smallint(4) DEFAULT '0',
  `theme` varchar(255) NOT NULL DEFAULT '',
  `entries_read` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_userdata`
--

INSERT INTO `forum_userdata` (`user_id`, `user_type`, `user_name`, `user_real_name`, `gender`, `birthday`, `user_pw`, `user_email`, `email_contact`, `user_hp`, `user_location`, `signature`, `profile`, `logins`, `last_login`, `last_logout`, `user_ip`, `registered`, `category_selection`, `thread_order`, `user_view`, `sidebar`, `fold_threads`, `thread_display`, `new_posting_notification`, `new_user_notification`, `user_lock`, `auto_login_code`, `pwf_code`, `activate_code`, `language`, `time_zone`, `time_difference`, `theme`, `entries_read`) VALUES
(1, 2, 'MimiSBT', 'Mimi', 0, '0000-00-00', 'b04fbf77b7d07f2a5c4fb13e070a9558f09576e9', 'Mimi.Kelly@sbt.com', 0, '', '', '', '', 14, '2013-12-19 10:50:16', '2014-01-31 13:09:13', '::1', '2013-10-18 17:36:41', NULL, 1, 1, 1, 1, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(2, 0, 'amonaghan', 'Andrew', 0, '0000-00-00', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', 'Andrew.Monaghan@student.ie', 0, '', '', '', '', 4, '2013-12-19 10:51:36', '2013-12-19 10:53:53', '::1', '2013-10-18 17:36:41', NULL, 0, 0, 1, 1, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(3, 0, 'sarahsmith', 'Sarah', 0, '0000-00-00', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', 'sarahsmith@college.ie', 0, '', '', '', '', 0, '2014-02-02 18:03:41', '0000-00-00 00:00:00', '', '2013-10-31 13:31:26', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(4, 0, 'brianjones', 'Brian', 0, '0000-00-00', '391317357d8f3148c2e04b1e7a78462fa96f242b', 'brian@test.com', 0, '', '', '', '', 0, '2014-03-31 18:27:29', '0000-00-00 00:00:00', '', '2014-03-31 19:27:29', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_userdata_cache`
--

CREATE TABLE IF NOT EXISTS `forum_userdata_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_signature` text NOT NULL,
  `cache_profile` text NOT NULL,
  PRIMARY KEY (`cache_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_useronline`
--

CREATE TABLE IF NOT EXISTS `forum_useronline` (
  `ip` char(15) NOT NULL DEFAULT '',
  `time` int(14) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_assigned_to` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `account_type` varchar(8) CHARACTER SET latin1 NOT NULL DEFAULT 'Student',
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `class_assigned_to`, `first_name`, `last_name`, `username`, `email`, `account_type`, `password`, `register_date`, `last_login`, `last_activity`) VALUES
(1, 0, 'Mimi', 'Kelly', 'mimikelly', 'Mimi.Kelly@sbt.com', 'Admin', '6794597a61ecac094c75f6ae849678ca8172fbca', '2013-10-18 17:36:41', '2014-05-15 19:49:42', '2014-05-15 19:50:16'),
(2, 1, 'Andrew', 'Monaghan', 'amonaghan', 'Andrew.Monaghan@student.ie', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-10-18 17:36:41', '2014-05-15 19:21:59', '2014-05-15 19:49:38'),
(3, 2, 'Sarah', 'Smith', 'sarahsmith', 'sarahsmith@college.ie', 'Student', '0c8e67d4df37e989aefb2cb92a6b8961e5c32e70', '2013-10-31 13:31:26', NULL, NULL),
(4, 1, 'Brian', 'Jones', 'brianjones', 'brian@test.com', 'Student', '391317357d8f3148c2e04b1e7a78462fa96f242b', '2014-03-31 18:27:29', NULL, '2014-03-31 18:28:09');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`file_type_id`) REFERENCES `allowed_file_types` (`file_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `file_sharing`
--
ALTER TABLE `file_sharing`
  ADD CONSTRAINT `file_sharing_ibfk_1` FOREIGN KEY (`sharing_id`) REFERENCES `files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum_userdata`
--
ALTER TABLE `forum_userdata`
  ADD CONSTRAINT `forum_userdata_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
