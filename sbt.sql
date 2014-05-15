-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2014 at 10:26 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=93 ;

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
(91, 2147483647, 'ChatBot', 4, 0, '2014-05-10 16:34:38', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login mimikelly'),
(92, 2147483647, 'ChatBot', 4, 0, '2014-05-15 21:23:14', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '/login amonaghan');

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
(3, 'NCI 4th Year Computing', 'BSHBSCE', '2014-02-10 23:00:33', '6794597a61ecac094c75f6ae849678ca8172fbca'),
(5, 'IBI Test Class', 'IBI', '2014-01-08 11:33:30', '6794597a61ecac094c75f6ae849678ca8172fbca');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `owner_id`, `file_type_id`, `file_name`, `file_path`, `file_size`, `description`, `subject`, `upload_date`) VALUES
(1, 2, 2, 'Personal Study Helper', '../../files/2/Personal_Study_Helper.docx', '17 kb', 'studyhelper', 'study', '2013-12-07 12:52:18'),
(2, 2, 2, 'ProjectProposal2- Studytogether.com', '../../files/2/ProjectProposal2-_Studytogether.com.docx', '674 kb', 'test', 'test', '2013-12-07 12:53:42'),
(5, 1, 12, 'BPE-07b Lean', '../../files/1/BPE-07b_Lean.pptx', '1,269 kb', '', '', '2014-02-05 14:55:30'),
(19, 1, 1, 'Timeplan1', '../../files/1/Timeplan1.doc', '42 kb', '', 'Study Skills', '2014-02-13 15:03:29'),
(20, 1, 1, 'Academic Guidence Seminar 2014', '../../files/1/Academic_Guidence_Seminar_2014.doc', '45 kb', 'AG Seminar 2014', 'AG Seminar for MA Students', '2014-02-19 09:14:10'),
(21, 1, 1, 'NTS Lecture Notes 15-16', '../../files/1/NTS_Lecture_Notes_15-16.doc', '64 kb', 'NTS Lecture Notes 15-16', 'New Testament Survey', '2014-02-19 09:21:54'),
(25, 2, 2, '4th Year Project Booklet Information-AndrewMonaghan', '../../files/2/4th_Year_Project_Booklet_Information-AndrewMonaghan.docx', '18 kb', 'This is a test', 'Test', '2014-03-19 15:29:55'),
(34, 1, 2, 'Meetings with Client', '../../files/1/Meetings_with_Client.docx', '16 kb', 'Meetings', 'These are the meetings', '2014-03-19 17:47:06'),
(37, 2, 2, 'History Notes 1', '../../files/2/History_Notes_1.docx', '10 kb', 'Notes on Section 1', 'History', '2014-04-06 15:40:44'),
(38, 2, 2, 'History Notes 2', '../../files/2/History_Notes_2.docx', '10 kb', 'Notes on section 2', 'History', '2014-04-06 15:40:58'),
(39, 2, 2, 'History Notes 3', '../../files/2/History_Notes_3.docx', '10 kb', 'Notes on section 3', 'History', '2014-04-06 15:41:13'),
(40, 9, 26, 'Koala', '../../files/9/Koala.jpg', '763 kb', 'My pet Koala!', 'Animals', '2014-04-09 12:19:31'),
(41, 10, 26, 'Lighthouse', '../../files/10/Lighthouse.jpg', '548 kb', 'My New Home!', 'Lighthouse', '2014-04-09 12:39:24'),
(42, 12, 19, 'vc-dimension', '../../files/12/vc-dimension.pdf', '1,531 kb', 'VC-D', 'Machine Learning', '2014-04-11 14:25:25'),
(43, 14, 19, 'The Scarlet Thread', '../../files/14/The_Scarlet_Thread.pdf', '488 kb', 'W.A.Criswell''s famous sermon', 'The Scarlet thread through the Bible', '2014-04-14 09:36:57'),
(44, 19, 26, 'snowboard-ragazzo-neve-01', '../../files/19/snowboard-ragazzo-neve-01.jpg', '76 kb', 'test ', '', '2014-04-18 08:30:51'),
(45, 20, 25, 'googleplay', '../../files/20/googleplay.png', '1 kb', 'Test Upload', 'Test Upload', '2014-04-18 09:18:27'),
(47, 22, 19, 'DNS Explained', '../../files/22/DNS_Explained.pdf', '116 kb', 'Never again', 'Distributed Systems', '2014-05-03 19:30:18'),
(49, 2, 19, 'phpsec_cheatsheet', '../../files/2/phpsec_cheatsheet.pdf', '174 kb', 'PHP Cheat Sheet', 'PHP', '2014-05-04 08:52:57'),
(52, 2, 19, 'SBT_UserManual', '../../files/2/SBT_UserManual.pdf', '1,988 kb', 'User Manual', '', '2014-05-10 15:56:58'),
(53, 2, 9, '9. Transaction Processing', '../../files/2/9._Transaction_Processing.ppt', '903 kb', 'Transaction Processing Lecture for BNS', 'Business Network Security', '2014-05-11 08:32:03');

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
(5, 'specific', '-2-3-'),
(19, 'public', ''),
(20, 'public', ''),
(21, 'specific', '-2-'),
(25, 'private', ''),
(34, 'specific', '-2-'),
(37, 'public', ''),
(38, 'public', ''),
(39, 'public', ''),
(40, 'private', ''),
(41, 'private', ''),
(42, 'public', ''),
(43, 'public', ''),
(44, 'specific', '-2-18-'),
(45, 'private', ''),
(47, 'public', ''),
(49, 'public', ''),
(52, 'public', ''),
(53, 'public', '');

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
(6, 0, 5, 'IBI Test Class', '', 0),
(7, 0, 3, 'NCI 4th Year Computing', '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `forum_entries`
--

INSERT INTO `forum_entries` (`id`, `pid`, `tid`, `uniqid`, `time`, `last_reply`, `edited`, `edited_by`, `user_id`, `name`, `subject`, `category`, `email`, `hp`, `location`, `ip`, `text`, `tags`, `show_signature`, `email_notification`, `marked`, `locked`, `sticky`, `views`, `spam`, `spam_check_status`, `edit_key`) VALUES
(19, 0, 19, '52b2e68319d7d', '2013-12-19 12:29:25', '2014-04-09 12:25:50', '0000-00-00 00:00:00', NULL, 1, '', 'Welcome', 1, '', '', '', '::1', '[b]Hi all[/b]\r\n\r\nWelcome to our new collaborative learning website! \r\n\r\nHope you have fun :-)', '', 0, 0, 0, 0, 0, 72, 0, 0, ''),
(20, 19, 19, '52e3e1e9a0b9b', '2014-01-25 16:10:26', '2014-04-09 12:25:50', '0000-00-00 00:00:00', NULL, 2, '', 'Welcome', 1, '', '', '', '::1', 'Thanks Mimi', '', 0, 0, 0, 0, 0, 55, 0, 0, ''),
(22, 20, 19, '52faa928b48ac', '2014-02-11 22:50:25', '2014-04-09 12:25:50', '0000-00-00 00:00:00', NULL, 1, '', 'Welcome', 1, '', '', '', '92.251.255.13', 'NP', '', 0, 0, 0, 0, 0, 26, 0, 0, ''),
(24, 0, 24, '5304cfcedb01d', '2014-02-19 15:38:22', '2014-02-19 15:38:22', '0000-00-00 00:00:00', NULL, 1, '', 'Anyone else stuck on ca1', 6, '', '', '', '92.251.255.13', 'Anyone', '', 0, 0, 0, 0, 0, 9, 0, 0, ''),
(25, 0, 25, '533c0758e819c', '2014-04-02 11:50:27', '2014-04-15 10:28:39', '0000-00-00 00:00:00', NULL, 2, '', 'What do you think of this website?', 7, '', '', '', '193.120.247.194', 'Hi all\r\n\r\nPlease let me know what you think of the website and any suggestions you have.\r\n\r\nCheers\r\nAndrew', '', 0, 0, 0, 0, 0, 16, 0, 0, ''),
(27, 0, 27, '534184200aaa2', '2014-04-06 15:44:01', '2014-04-06 15:44:01', '0000-00-00 00:00:00', NULL, 1, '', 'Any suggestions for the Study Links', 7, '', '', '', '80.111.107.217', 'Reply here with any links you have found that you want added to the Useful Resources page.', '', 0, 0, 0, 0, 0, 6, 0, 0, ''),
(28, 22, 19, '53454a071df75', '2014-04-09 12:25:50', '2014-04-09 12:25:50', '0000-00-00 00:00:00', NULL, 9, '', 'Welcome', 1, '', '', '', '86.47.90.179', 'Loving this learning website!!!!:-D [img]images/uploaded/2014040913253953454a5332980.jpg[/img]', '', 0, 0, 0, 0, 0, 6, 0, 0, ''),
(29, 0, 29, '53454a779e296', '2014-04-09 12:28:13', '2014-04-15 10:28:10', '0000-00-00 00:00:00', NULL, 9, '', 'Party at my house!!', 7, '', '', '', '86.47.90.179', 'House Party at mine,on May 9th! \r\nLet me know you if you can make it.\r\n:-P', '', 0, 0, 0, 0, 0, 15, 0, 0, ''),
(30, 29, 29, '53454dacc6a12', '2014-04-09 12:41:02', '2014-04-15 10:28:10', '0000-00-00 00:00:00', NULL, 10, '', 'Party at my house!!', 7, '', '', '', '86.47.90.179', 'I''ll be there! :-)', '', 0, 0, 0, 0, 0, 13, 0, 0, ''),
(31, 29, 29, '53465c269db14', '2014-04-10 07:54:17', '2014-04-15 10:28:10', '0000-00-00 00:00:00', NULL, 11, '', 'Party at my house!!', 7, '', '', '', '86.47.90.179', 'Cool. What do you need me to bring?', '', 0, 0, 0, 0, 0, 10, 0, 0, ''),
(32, 25, 25, '53465c59c3bd4', '2014-04-10 07:55:28', '2014-04-15 10:28:39', '0000-00-00 00:00:00', NULL, 11, '', 'What do you think of this website?', 7, '', '', '', '86.47.90.179', 'Andrew,\r\nthis is a very user friendly site.\r\nWell done on your hard work.', '', 0, 0, 0, 0, 0, 10, 0, 0, ''),
(33, 31, 29, '534d17bd8d6a4', '2014-04-15 10:28:10', '2014-04-15 10:28:10', '0000-00-00 00:00:00', NULL, 17, '', 'Party at my house!!', 7, '', '', '', '86.47.90.179', 'Noooo we''re in London that day :(', '', 0, 0, 0, 0, 0, 6, 0, 0, ''),
(34, 25, 25, '534d17d7f3a17', '2014-04-15 10:28:39', '2014-04-15 10:28:39', '0000-00-00 00:00:00', NULL, 17, '', 'What do you think of this website?', 7, '', '', '', '86.47.90.179', 'It looks great, Andrew. Well done!', '', 0, 0, 0, 0, 0, 6, 0, 0, ''),
(35, 0, 35, '5350f582de512', '2014-04-18 08:52:26', '2014-05-04 13:45:10', '0000-00-00 00:00:00', NULL, 19, '', 'I love noodels', 5, '', '', '', '109.255.63.225', 'Alex and Eoin likes boys\r\n\r\n[img=left]http://www.iwallpaper.co/wallpaper/fs/other/i_love_guys-320x480-6P2Q.jpg[/img]', '', 0, 0, 0, 0, 0, 7, 0, 0, ''),
(36, 35, 35, '536652584fdf5', '2014-05-04 13:45:10', '2014-05-04 13:45:10', '0000-00-00 00:00:00', NULL, 23, '', 'I love noodels', 5, '', '', '', '46.7.90.45', 'You always have to lower the tone Dan...', '', 0, 0, 0, 0, 0, 2, 0, 0, '');

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
(22, '<p>NP</p>\n'),
(24, '<p>Anyone</p>\n'),
(25, '<p>Hi all</p>\n<p>Please let me know what you think of the website and any suggestions you have.</p>\n<p>Cheers<br />\nAndrew</p>\n'),
(27, '<p>Reply here with any links you have found that you want added to the Useful Resources page.</p>\n'),
(28, '<p>Loving this learning website!!!!<img src="images/smilies/biggrin.png" alt=":-D" /> <img src="images/uploaded/2014040913253953454a5332980.jpg" alt="[image]" /></p>\n'),
(29, '<p>House Party at mine,on May 9th! <br />\nLet me know you if you can make it.<br />\n<img src="images/smilies/tongue.png" alt=":-P" /></p>\n'),
(30, '<p>I''ll be there! <img src="images/smilies/smile.png" alt=":-)" /></p>\n'),
(31, '<p>Cool. What do you need me to bring?</p>\n'),
(32, '<p>Andrew,<br />\nthis is a very user friendly site.<br />\nWell done on your hard work.</p>\n'),
(33, '<p>Noooo we''re in London that day :(</p>\n'),
(34, '<p>It looks great, Andrew. Well done!</p>\n'),
(35, '<p>Alex and Eoin likes boys</p>\n<p><img src="http://www.iwallpaper.co/wallpaper/fs/other/i_love_guys-320x480-6P2Q.jpg" class="left" alt="[image]" /></p>\n'),
(36, '<p>You always have to lower the tone Dan...</p>\n');

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
(3, 0, 'sarah2014', 'Sarah', 0, '0000-00-00', '6794597a61ecac094c75f6ae849678ca8172fbca', 'sarahsmith@college.ie', 0, '', '', '', '', 0, '2014-02-02 18:03:41', '0000-00-00 00:00:00', '', '2013-10-31 13:31:26', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(5, 0, 'tester', 'Tester', 0, '0000-00-00', '6794597a61ecac094c75f6ae849678ca8172fbca', 'Test@test.com', 0, '', '', '', '', 0, '2014-03-26 16:54:22', '0000-00-00 00:00:00', '', '2014-03-26 16:54:22', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(8, 0, 'tony10', 'Tony ', 0, '0000-00-00', '272cb43f7d1a5c1a8e0f344acbc58ad30b4c6c8a', 'bergin@ppg.com', 0, '', '', '', '', 0, '2014-04-07 18:45:07', '0000-00-00 00:00:00', '', '2014-04-07 18:45:07', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(9, 0, 'lisamonique7', 'Lisa', 0, '0000-00-00', '553dfc8e205c61c4146c2c7604d791c8fdc1e1a1', 'lisamonique@ibi.ie', 0, '', '', '', '', 0, '2014-04-09 12:18:02', '0000-00-00 00:00:00', '', '2014-04-09 12:18:02', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(10, 0, 'heinrich1968', 'Heinrich', 0, '0000-00-00', '553dfc8e205c61c4146c2c7604d791c8fdc1e1a1', 'hoffieshof@ymail.com', 0, '', '', '', '', 0, '2014-04-09 12:38:21', '0000-00-00 00:00:00', '', '2014-04-09 12:38:21', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(11, 0, 'louisehalpin', 'Louise', 0, '0000-00-00', '6794597a61ecac094c75f6ae849678ca8172fbca', 'louise@ibi.ie', 0, '', '', '', '', 0, '2014-04-10 07:47:59', '0000-00-00 00:00:00', '', '2014-04-10 07:47:59', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(12, 0, 'shawnxxiong', 'Xiong', 0, '0000-00-00', '92de854865ce545076bb2530a498977546a85896', 'shawnxxiong@gmail.com', 0, '', '', '', '', 0, '2014-04-11 14:21:48', '0000-00-00 00:00:00', '', '2014-04-11 14:21:48', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(13, 0, 'tinabergin6', 'Tina ', 0, '0000-00-00', '9f995500fc08287d543657e60e373d680b6e1859', 'test@gmail.cpm', 0, '', '', '', '', 0, '2014-04-11 16:13:56', '0000-00-00 00:00:00', '', '2014-04-11 16:13:56', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(14, 0, 'turkthrust', 'Ken', 0, '0000-00-00', '8e92afdd8a977879beb29e3ce0a808be802bbad8', 'k.acmck@hotmail.com', 0, '', '', '', '', 0, '2014-04-14 09:31:58', '0000-00-00 00:00:00', '', '2014-04-14 09:31:58', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(15, 0, 'ncurtis', 'Naomi', 0, '0000-00-00', 'f1b535182d5ae440fc1eebcff302a75add3eaa45', 'nadams@tcd.ie', 0, '', '', '', '', 0, '2014-04-14 15:37:07', '0000-00-00 00:00:00', '', '2014-04-14 15:37:07', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(16, 0, 'adamsjen', 'Jennifer ', 0, '0000-00-00', 'a41b0c8b726b6907d165b25dc477ecf88a8f0db1', 'adamsjen52@yahoo.com', 0, '', '', '', '', 0, '2014-04-14 16:36:28', '0000-00-00 00:00:00', '', '2014-04-14 16:36:28', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(17, 0, 'byrned17', 'Deborah', 0, '0000-00-00', 'a266c82ee0af551ee2b128cb77abc8ef310dc588', 'byrned17@tcd.ie', 0, '', '', '', '', 0, '2014-04-15 08:51:43', '0000-00-00 00:00:00', '', '2014-04-15 08:51:43', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(18, 0, 'ajqshake', 'Alex', 0, '0000-00-00', '4f52734dd6867581f039dfb231212be10f8d0a59', 'quigley.alex@gmail.com', 0, '', '', '', '', 0, '2014-04-18 08:20:53', '0000-00-00 00:00:00', '', '2014-04-18 08:20:53', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(19, 0, 'danielozac', 'Daniel ', 0, '0000-00-00', 'eac96d7c3360e94a81e5e54de26f91002d3b7e80', 'danielozac@gmail.com', 0, '', '', '', '', 0, '2014-04-18 08:21:39', '0000-00-00 00:00:00', '', '2014-04-18 08:21:39', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(20, 0, 'johann', 'Johann', 0, '0000-00-00', '5d0538d6e41df3bd9ad3464bc97301f6a4a2a71f', 'mjtaljaard@gmail.com', 0, '', '', '', '', 0, '2014-04-18 09:17:25', '0000-00-00 00:00:00', '', '2014-04-18 09:17:25', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(22, 0, 'mikef14', 'Mike', 0, '0000-00-00', '1367f1470cd7aa2ae2d872543b0d67a71294d8bc', 'notgivingyouthat@gmail.com', 0, '', '', '', '', 0, '2014-05-03 19:26:04', '0000-00-00 00:00:00', '', '2014-05-03 19:26:04', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(23, 0, 'phughes450', 'Paula', 0, '0000-00-00', 'b3154bdafe1d97895d0b017364f4f67536b52e91', 'phughes450@gmail.com', 0, '', '', '', '', 0, '2014-05-04 13:42:56', '0000-00-00 00:00:00', '', '2014-05-04 13:42:56', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(24, 0, 'johndots', 'John', 0, '0000-00-00', '783a93854923436ac31436b1f6eda791a0994a91', 'johndots@gmail.com', 0, '', '', '', '', 0, '2014-05-05 09:33:57', '0000-00-00 00:00:00', '', '2014-05-05 09:33:57', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(25, 0, 'canuinti', 'Patrick', 0, '0000-00-00', '58a556da9f6e61dd256f077aa91a1413fe93c7e7', 'saitmck@gmail.com', 0, '', '', '', '', 0, '2014-05-06 12:46:11', '0000-00-00 00:00:00', '', '2014-05-06 12:46:11', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(26, 0, 'darthvader', 'Darth', 0, '0000-00-00', 'd2503b33d21a57ad1d9e722a795359cf73595008', 'philiphamo@hotmail.com', 0, '', '', '', '', 0, '2014-05-08 15:33:52', '0000-00-00 00:00:00', '', '2014-05-08 15:33:52', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(27, 0, 'christina', 'Christina', 0, '0000-00-00', '6794597a61ecac094c75f6ae849678ca8172fbca', 'christina@ou.com', 0, '', '', '', '', 0, '2014-05-11 09:11:17', '0000-00-00 00:00:00', '', '2014-05-11 09:11:17', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', ''),
(28, 0, 'eoinmc1', 'Eoin', 0, '0000-00-00', '6794597a61ecac094c75f6ae849678ca8172fbca', 'eoinmc@gmail.com', 0, '', '', '', '', 0, '2014-05-11 20:02:13', '0000-00-00 00:00:00', '', '2014-05-11 20:02:13', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `class_assigned_to`, `first_name`, `last_name`, `username`, `email`, `account_type`, `password`, `register_date`, `last_login`, `last_activity`) VALUES
(1, 0, 'Mimi', 'Kelly', 'mimikelly', 'Mimi.Kelly@sbt.com', 'Admin', '6794597a61ecac094c75f6ae849678ca8172fbca', '2013-10-18 17:36:41', '2014-05-15 19:49:42', '2014-05-15 19:50:16'),
(2, 3, 'Andrew', 'Monaghan', 'amonaghan', 'Andrew.Monaghan@student.ie', 'Student', '6794597a61ecac094c75f6ae849678ca8172fbca', '2013-10-18 17:36:41', '2014-05-15 20:25:39', '2014-05-15 20:25:39'),
(3, 5, 'Sarah', 'Smith', 'sarah2014', 'sarahsmith@college.ie', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2013-10-31 13:31:26', '2014-04-06 15:30:57', '2014-04-06 15:31:24'),
(5, 5, 'Tester', 'Tester', 'tester', 'Test@test.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-03-26 16:54:22', '2014-05-11 18:59:31', '2014-05-10 16:06:01'),
(8, 5, 'Tony ', 'Bergin', 'tony10', 'bergin@ppg.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-07 18:45:07', NULL, '2014-04-07 18:53:41'),
(9, 5, 'Lisa', 'Hoffmann', 'lisamonique7', 'lisamonique@ibi.ie', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-09 12:18:02', NULL, '2014-04-09 12:33:54'),
(10, 5, 'Heinrich', 'Hoffmann', 'heinrich1968', 'hoffieshof@ymail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-09 12:38:21', '2014-04-10 06:29:55', '2014-04-10 06:35:50'),
(11, 5, 'Louise', 'Halpin', 'louisehalpin', 'louise@ibi.ie', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-10 07:47:59', NULL, '2014-04-10 07:58:00'),
(12, 5, 'Xiong', 'Xiong', 'shawnxxiong', 'shawnxxiong@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-11 14:21:48', NULL, '2014-04-11 14:26:52'),
(13, 5, 'Tina ', 'kelly', 'tinabergin6', 'test@gmail.cpm', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-11 16:13:56', NULL, '2014-04-11 16:14:22'),
(14, 5, 'Ken', 'McKnight', 'turkthrust', 'k.acmck@hotmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-14 09:31:58', NULL, '2014-04-14 09:39:33'),
(15, 5, 'Naomi', 'Curtis', 'ncurtis', 'nadams@tcd.ie', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-14 15:37:07', '2014-04-14 15:38:35', '2014-04-14 15:43:02'),
(16, 5, 'Jennifer ', 'Adams ', 'adamsjen', 'adamsjen52@yahoo.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-14 16:36:28', NULL, '2014-04-14 19:26:03'),
(17, 5, 'Deborah', 'Byrne', 'byrned17', 'byrned17@tcd.ie', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-15 08:51:43', '2014-04-15 10:27:25', '2014-04-15 10:28:54'),
(18, 3, 'Alex', 'Quigley', 'ajqshake', 'quigley.alex@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-18 08:20:53', NULL, '2014-04-18 08:24:26'),
(19, 3, 'Daniel ', 'Ozac', 'danielozac', 'danielozac@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-18 08:21:39', NULL, '2014-04-18 08:53:27'),
(20, 3, 'Johann', 'Taljaard', 'johann', 'mjtaljaard@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-04-18 09:17:25', NULL, '2014-04-18 09:57:27'),
(22, 3, 'Mike', 'Farkas', 'mikef14', 'notgivingyouthat@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-03 19:26:04', NULL, '2014-05-03 19:32:22'),
(23, 3, 'Paula', 'Hughes', 'phughes450', 'phughes450@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-04 13:42:56', NULL, '2014-05-04 13:46:01'),
(24, 3, 'John', 'Doherty', 'johndots', 'johndots@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-05 09:33:57', NULL, '2014-05-05 09:36:20'),
(25, 3, 'Patrick', 'Mckernan', 'canuinti', 'saitmck@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-06 12:46:11', NULL, '2014-05-06 12:48:50'),
(26, 3, 'Darth', 'Vader', 'darthvader', 'philiphamo@hotmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-08 15:33:52', NULL, '2014-05-08 15:37:45'),
(27, 5, 'Christina', 'Mulvey', 'christina', 'christina@ou.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-11 09:11:17', '2014-05-11 09:11:41', '2014-05-11 09:15:45'),
(28, 3, 'Eoin', 'Mc', 'eoinmc1', 'eoinmc@gmail.com', 'Student', 'ab8bdbb5ac8230ac725642cf0b4d387405d0a2ac', '2014-05-11 20:02:13', NULL, '2014-05-11 20:03:06');

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
