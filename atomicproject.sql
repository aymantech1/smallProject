-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 02:59 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomicproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `title` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '2016-01-12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(5, '2016-03-01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(6, '2015-11-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(7, '2013-03-06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(8, '2014-02-03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(9, '2016-04-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, '2015-07-09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, '1996-03-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(13, '2008-03-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(14, '2016-04-07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(15, '2016-04-09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(16, '1993-03-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 'fff', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(17, 'Science', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(18, 'KK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(19, 'Co', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(20, 'dfsdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(21, 'dfsf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(22, 'fsafs', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(23, 'fsafas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(24, 'sdfsaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(25, 'sfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(26, 'asfsaf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(27, 'asfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(28, 'asfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(29, 'asfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(30, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, 'Bangla', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(32, 'ddd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-02 00:00:00'),
(33, 'English', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, 'Math', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, 'Computer', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(36, 'Digital Logic', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(37, 'Accounting', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(38, 'C++', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(39, 'Java', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(40, 'gggggg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(41, 'ddd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `creck`
--

CREATE TABLE `creck` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creck`
--

INSERT INTO `creck` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Array', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Array', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'Book', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'rakib@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'rakib@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'asfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'asfasf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(11, 'Ivy', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(12, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(13, 'Rakib', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(14, 'hiy@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(15, 'rakibhossaincse@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(16, 'nirjhore@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(17, 's.m.rakib@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(18, 'mahbub@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(19, 'jalil_cse@yahoo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `title` blob NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 0x4172726179, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-06 00:00:00'),
(2, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-06 00:00:00'),
(3, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(4, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(5, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `title`, `created`, `updated`, `deleted_at`) VALUES
(54, 'Rakib', '2016-03-11 23:46:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Sony', '2016-03-11 23:58:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Nir', '2016-03-12 00:08:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Walton', '2016-03-14 12:08:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Nokia', '2016-03-14 12:08:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Samphony', '2016-03-14 12:08:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`id`, `image`, `user_name`, `create_at`, `update_at`, `delete_at`) VALUES
(11, '1460032658Koala.jpg', 'Koala', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, '146003262611722474_785571304889569_3184723286593562573_o.jpg', 'Rakib Hossain', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(13, '1460032717BUBT_logo.jpg', 'BUBT', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `radios`
--

CREATE TABLE `radios` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radios`
--

INSERT INTO `radios` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(1, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'female', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'male', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `selects`
--

CREATE TABLE `selects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selects`
--

INSERT INTO `selects` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(2, 'Rajshahi', '2016-04-04 00:00:00', '2016-04-07 00:00:00', NULL),
(3, 'Natore', '2016-04-04 00:00:00', '0000-00-00 00:00:00', '2016-04-04 00:00:00'),
(4, 'Natore', '2016-04-04 00:00:00', '2016-04-04 00:00:00', '2016-04-04 00:00:00'),
(5, 'Rajshahi', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 'Naogaon', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'Pabna', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'Natore', '2016-04-04 00:00:00', '0000-00-00 00:00:00', '2016-04-14 00:00:00'),
(9, 'Natore', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 'Rajshahi', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL),
(11, 'Rajshahi', '2016-04-04 00:00:00', '2016-04-05 00:00:00', NULL),
(12, 'Pabna', '2016-04-04 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_hobby`
--

CREATE TABLE `table_hobby` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_hobby`
--

INSERT INTO `table_hobby` (`id`, `title`, `create_at`, `delete_at`) VALUES
(7, 'Gardening,Liberal Arts Pursuits', '2016-04-06 14:27:20', '2016-04-06'),
(8, 'Gardening,Liberal Arts Pursuits', '2016-04-06 14:27:20', NULL),
(10, 'Gardening,Liberal Arts Pursuits,Sports and Games,friends', '2016-04-06 14:27:20', NULL),
(11, 'friends', '2016-04-06 14:27:20', NULL),
(12, 'Gardening', '2016-04-06 14:27:20', NULL),
(14, 'Gardening,Liberal Arts Pursuits,Sports and Games,friends', '2016-04-06 14:27:20', NULL),
(15, 'Liberal Arts Pursuits', '2016-04-06 14:27:20', NULL),
(17, 'Liberal Arts Pursuits,friends', '2016-04-06 14:27:20', '2016-03-24'),
(18, 'Gardening,Liberal Arts Pursuits,Sports and Games,friends', '2016-04-06 14:27:20', NULL),
(19, 'friends', '2016-04-06 14:27:20', '2016-04-06'),
(20, 'Gardening', '2016-04-06 14:27:20', '2016-04-06'),
(21, 'Liberal Arts Pursuits,friends', '2016-04-06 14:55:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `textareas`
--

CREATE TABLE `textareas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textareas`
--

INSERT INTO `textareas` (`id`, `title`, `create_at`, `update_at`, `delete_at`) VALUES
(2, 'hi', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'aa', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(4, 'sdsdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(5, 'sdsdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-04-03 00:00:00'),
(6, 'sdsdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'sdsdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 'gggggg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 'gggggg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 'aaaaaaaaaaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creck`
--
ALTER TABLE `creck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radios`
--
ALTER TABLE `radios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selects`
--
ALTER TABLE `selects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_hobby`
--
ALTER TABLE `table_hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textareas`
--
ALTER TABLE `textareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `creck`
--
ALTER TABLE `creck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `radios`
--
ALTER TABLE `radios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `selects`
--
ALTER TABLE `selects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `table_hobby`
--
ALTER TABLE `table_hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `textareas`
--
ALTER TABLE `textareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
