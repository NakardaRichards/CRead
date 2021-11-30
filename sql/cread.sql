-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2021 at 01:25 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cread`
--
CREATE DATABASE IF NOT EXISTS `cread2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `cread2`;

-- --------------------------------------------------------

--
-- Table structure for table `adv_tests`
--

DROP TABLE IF EXISTS `adv_tests`;
CREATE TABLE IF NOT EXISTS `adv_tests` (
  `qid` int(2) NOT NULL AUTO_INCREMENT,
  `test1` varchar(100) NOT NULL,
  `test2` varchar(100) NOT NULL,
  `test3` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adv_tests`
--

INSERT INTO `adv_tests` (`qid`, `test1`, `test2`, `test3`) VALUES
(1, 'play', '.', 'yes'),
(2, 'is', '.', 'no'),
(3, 'have', '?', 'no'),
(4, 'is', '.', 'yes'),
(5, 'drink', '?', 'no'),
(6, 'know', '.', 'monday'),
(7, 'eat', '?', 'feet'),
(8, 'travel', '.', 'centimetres'),
(9, 'put', '.', 'minute'),
(10, 'wear', '!', 'postscript');

-- --------------------------------------------------------

--
-- Table structure for table `beginner_tests`
--

DROP TABLE IF EXISTS `beginner_tests`;
CREATE TABLE IF NOT EXISTS `beginner_tests` (
  `qid` int(2) NOT NULL AUTO_INCREMENT,
  `test1` varchar(100) NOT NULL,
  `test2` varchar(100) NOT NULL,
  `test3` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `beginner_tests`
--

INSERT INTO `beginner_tests` (`qid`, `test1`, `test2`, `test3`) VALUES
(1, 'b', 'a', 'o'),
(2, 'o', 'y', 'i'),
(3, 'y', 'o', 'r'),
(4, 'n', 'i', 'e'),
(5, 'j', 'u', 'h'),
(6, 'x', 'u e', 'i'),
(7, 'f', 'o e y', 'c'),
(8, 'v', 'a e', 'd'),
(9, 'l', 'i a e', 'm'),
(10, 'd', 'u y', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostics`
--

DROP TABLE IF EXISTS `diagnostics`;
CREATE TABLE IF NOT EXISTS `diagnostics` (
  `qid` int(2) NOT NULL AUTO_INCREMENT,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diagnostics`
--

INSERT INTO `diagnostics` (`qid`, `ans`) VALUES
(1, 'b'),
(2, 'l'),
(3, 'i'),
(4, 'y'),
(5, 'i a e'),
(6, 'd'),
(7, 'c'),
(8, 'adverb'),
(9, 'pronoun'),
(10, 'subject'),
(11, 'predicate'),
(12, 'no'),
(13, 'yes'),
(14, 'personification'),
(15, 'simile'),
(16, 'have'),
(17, 'know'),
(18, '?'),
(19, '!'),
(20, 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `interm_tests`
--

DROP TABLE IF EXISTS `interm_tests`;
CREATE TABLE IF NOT EXISTS `interm_tests` (
  `qid` int(2) NOT NULL AUTO_INCREMENT,
  `test1` varchar(100) NOT NULL,
  `test2` varchar(100) NOT NULL,
  `test3` varchar(100) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `interm_tests`
--

INSERT INTO `interm_tests` (`qid`, `test1`, `test2`, `test3`) VALUES
(1, 'adjective', 'predicate', 'simile'),
(2, 'verb', 'subject', 'personification'),
(3, 'adverb', 'predicate', 'metaphor'),
(4, 'verb', 'subject', 'personification'),
(5, 'preposition', 'subject', 'metaphor'),
(6, 'pronoun', 'no', 'personification'),
(7, 'noun', 'yes', 'simile'),
(8, 'adjective', 'no', 'personification'),
(9, 'adverb', 'no', 'simile'),
(10, 'noun', 'yes', 'simile');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `diagDone` tinyint(1) DEFAULT NULL,
  `diagTest` tinyint(3) DEFAULT NULL,
  `beg1` tinyint(3) DEFAULT NULL,
  `beg2` tinyint(3) DEFAULT NULL,
  `beg3` tinyint(3) DEFAULT NULL,
  `interm1` tinyint(3) DEFAULT NULL,
  `interm2` tinyint(3) DEFAULT NULL,
  `interm3` tinyint(3) DEFAULT NULL,
  `adv1` tinyint(3) DEFAULT NULL,
  `adv2` tinyint(3) DEFAULT NULL,
  `adv3` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
