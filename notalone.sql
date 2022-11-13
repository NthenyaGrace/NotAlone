-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
CREATE DATABASE notalone; 
--

-- --------------------------------------------------------

--


--
-- Table structure for table `user`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  'dob' date (100) NOT NULL
  'gender' char (100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
CREATE TABLE `login_doc` (
  `duser_id` int(11) NOT NULL,
  `dusername` varchar(100) NOT NULL,
  `dpassword` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------
--
CREATE TABLE `chat_message` (
  'user_id' int(100) NOT NULL,
  `from_user_id` varchar(100) NOT NULL,
  `to_user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
CREATE TABLE `diagnostics` (
  `d_id` int(11) NOT NULL,
  `depression` varchar(100) NULL,
  'stress' date (100) NULL
  'sleep' char (100) NULL,
  `anger` varchar(100)  NULL,
  `anxiety` int(40) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;