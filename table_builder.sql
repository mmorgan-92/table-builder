-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 09:19 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table_builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `change_log`
--

CREATE TABLE `change_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) NOT NULL,
  `change_made` varchar(255) NOT NULL,
  `change_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `change_log`
--

INSERT INTO `change_log` (`id`, `user`, `change_made`, `change_date`) VALUES
(1, '', 'added table new table', '2018-08-28 10:35:06'),
(2, '', 'deleted row  from new table', '2018-08-28 10:40:54'),
(3, '', 'added row products to new table', '2018-08-28 10:41:15'),
(4, '', 'added row products to new table', '2018-08-28 10:41:15'),
(5, '', 'deleted row  from new table', '2018-08-28 10:41:19'),
(6, '', 'changed product name New Product to birds', '2018-08-28 10:52:20'),
(7, '', 'deleted table new table', '2018-08-28 12:22:32'),
(8, '', 'added table new table', '2018-08-28 12:22:44'),
(9, '', 'deleted table new table', '2018-08-28 12:26:01'),
(10, 'user', 'added table new table', '2018-08-28 12:26:18'),
(11, 'user', 'added table new table', '2018-08-28 12:26:18'),
(12, '', 'deleted table new table', '2018-08-28 12:30:32'),
(13, 'user', 'added table new table', '2018-08-28 12:30:44'),
(14, 'user', 'added table new table', '2018-08-28 12:30:44'),
(15, '', 'deleted table new table', '2018-08-28 12:32:03'),
(16, 'user', 'added table new table', '2018-08-28 12:32:14'),
(17, 'user', 'added table new table', '2018-08-28 12:32:14'),
(18, '', 'deleted table new table', '2018-08-28 12:32:37'),
(19, 'user', 'added table new table', '2018-08-28 12:32:58'),
(20, 'user', 'added table new table', '2018-08-28 12:32:58'),
(21, 'user', 'added row products to new table', '2018-08-28 12:41:02'),
(22, 'user', 'added row products to new table', '2018-08-28 12:41:02'),
(23, 'user', 'added row products to new table', '2018-08-28 12:41:02'),
(24, '', 'deleted row  from new table', '2018-08-28 12:57:56'),
(25, 'user', 'added row products to new table', '2018-08-28 12:58:03'),
(26, 'user', 'added row products to new table', '2018-08-28 12:58:03'),
(27, 'user', 'added row products to new table', '2018-08-28 12:58:03'),
(28, 'user', 'added table second table', '2018-08-28 15:24:12'),
(29, 'user', 'added top button  from new table', '2018-08-28 15:30:38'),
(30, 'user', 'added table annabelle', '2018-08-28 21:43:58'),
(31, 'user', 'added row ella to annabelle', '2018-08-28 21:44:06'),
(32, 'user', 'added row ella to annabelle', '2018-08-28 21:44:06'),
(33, 'user', 'added row ella to annabelle', '2018-08-28 21:44:21'),
(34, 'user', 'added row ella to annabelle', '2018-08-28 21:44:21'),
(35, '', 'deleted row  from annabelle', '2018-08-28 21:44:32'),
(36, '', 'changed product name products to birds', '2018-08-28 21:44:46'),
(37, '', 'deleted table second table', '2018-08-29 14:24:48'),
(38, '', 'deleted column  from new table', '2018-08-29 14:25:02'),
(39, 'user', 'added table annabelle', '2018-08-29 14:25:30'),
(40, 'user', 'added table annabelle', '2018-08-29 14:25:30'),
(41, 'user', 'added table matt table', '2018-08-29 14:25:52'),
(42, 'user', 'added row birds to matt table', '2018-08-29 14:28:13'),
(43, 'user', 'added row birds to matt table', '2018-08-29 14:28:13'),
(44, 'user', 'added table new table', '2018-08-29 14:28:50'),
(45, 'user', 'added table new table', '2018-08-29 14:28:50'),
(46, '', 'deleted table new table', '2018-08-29 14:28:59'),
(47, 'user', 'added table matt table', '2018-08-29 14:29:08'),
(48, 'user', 'added row birds to matt table', '2018-08-29 14:29:17'),
(49, 'user', 'added row birds to matt table', '2018-08-29 14:29:17'),
(50, 'user', 'added row birds to matt table', '2018-08-29 14:29:24'),
(51, 'user', 'added row birds to matt table', '2018-08-29 14:29:24'),
(52, 'user', 'added table new table', '2018-08-29 14:32:09'),
(53, 'user', 'added table annabelle', '2018-08-29 14:32:46'),
(54, '', 'deleted table new table', '2018-08-29 14:35:16'),
(55, 'user', 'added row products to new table', '2018-08-29 14:47:05'),
(56, 'user', 'added row products to new table', '2018-08-29 14:47:05'),
(57, 'user', 'added row products to new table', '2018-08-29 14:47:05'),
(58, '', 'deleted row  from new table', '2018-08-29 14:47:20'),
(59, '', 'deleted column  from new table', '2018-08-29 14:47:43'),
(60, 'user', 'added row products to new table', '2018-08-29 14:47:48'),
(61, 'user', 'added row products to new table', '2018-08-29 14:47:48'),
(62, 'user', 'added row products to new table', '2018-08-29 14:47:48'),
(63, '', 'deleted column  from new table', '2018-08-29 14:48:34'),
(64, 'user', 'added row products to new table', '2018-08-29 14:48:39'),
(65, 'user', 'added row products to new table', '2018-08-29 14:48:39'),
(66, 'user', 'added row products to new table', '2018-08-29 14:48:39'),
(67, 'user', 'added row products to new table', '2018-08-29 14:48:46'),
(68, 'user', 'added row products to new table', '2018-08-29 14:48:46'),
(69, 'user', 'added row products to new table', '2018-08-29 14:48:46'),
(70, 'user', 'added row products to new table', '2018-08-29 14:49:08'),
(71, 'user', 'added row products to new table', '2018-08-29 14:49:08'),
(72, 'user', 'added row products to new table', '2018-08-29 14:49:08'),
(73, 'user', 'added row products to new table', '2018-08-29 14:49:08'),
(74, '', 'deleted column  from new table', '2018-08-29 14:50:06'),
(75, 'user', 'added row products to new table', '2018-08-29 14:50:40'),
(76, 'user', 'added row products to new table', '2018-08-29 14:50:40'),
(77, 'user', 'added row products to new table', '2018-08-29 14:50:40'),
(78, '', 'deleted row  from new table', '2018-08-29 14:58:57'),
(79, '', 'deleted column  from new table', '2018-08-29 14:59:01'),
(80, '', 'deleted column  from new table', '2018-08-29 15:00:20'),
(81, '', 'deleted row  from Table 1', '2018-09-12 13:01:37'),
(82, '', 'deleted table Table 1', '2018-09-12 13:04:11'),
(83, 'user', 'added table Weekly Meal Plan', '2018-09-12 13:06:27'),
(84, 'user', 'added table Weekly Meal Plan', '2018-09-12 13:06:27'),
(85, 'user', 'added table Weekly Meal Plan', '2018-09-12 13:06:27'),
(86, 'user', 'added table Weekly Meal Plan', '2018-09-12 13:06:27'),
(87, 'user', 'added table Weekly Meal Plan', '2018-09-12 13:06:27'),
(88, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:39'),
(89, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:39'),
(90, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:39'),
(91, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:39'),
(92, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:39'),
(93, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:46'),
(94, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:46'),
(95, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:46'),
(96, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:46'),
(97, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:46'),
(98, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:54'),
(99, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:54'),
(100, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:54'),
(101, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:54'),
(102, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:06:54'),
(103, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:07:20'),
(104, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:07:20'),
(105, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:07:20'),
(106, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:07:20'),
(107, 'user', 'added row Person to Weekly Meal Plan', '2018-09-12 13:07:20'),
(108, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:07:38'),
(109, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:07:47'),
(110, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:07:53'),
(111, 'user', 'added data salad to Person in Weekly Meal Plan', '2018-09-12 13:08:04'),
(112, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:08:12'),
(113, 'user', 'added data carrots to Person in Weekly Meal Plan', '2018-09-12 13:08:24'),
(114, 'user', 'added data rice to Person in Weekly Meal Plan', '2018-09-12 13:09:04'),
(115, 'user', 'added data chicken to Person in Weekly Meal Plan', '2018-09-12 13:09:10'),
(116, 'user', 'added data broccoli to Person in Weekly Meal Plan', '2018-09-12 13:09:25'),
(117, 'user', 'added data beans to Person in Weekly Meal Plan', '2018-09-12 13:09:35'),
(118, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:09:39'),
(119, 'user', 'added data left overs to Person in Weekly Meal Plan', '2018-09-12 13:09:48'),
(120, 'user', 'added data pasta to Person in Weekly Meal Plan', '2018-09-12 13:10:43'),
(121, 'user', 'added data chips to Person in Weekly Meal Plan', '2018-09-12 13:10:55'),
(122, 'user', 'added data beer to Person in Weekly Meal Plan', '2018-09-12 13:11:00'),
(123, 'user', 'added data cheese to Person in Weekly Meal Plan', '2018-09-12 13:11:11'),
(124, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:11:17'),
(125, 'user', 'added data pizza to Person in Weekly Meal Plan', '2018-09-12 13:11:21'),
(126, 'user', 'added data fasting to Person in Weekly Meal Plan', '2018-09-12 13:11:28'),
(127, 'user', 'added data fasting to Person in Weekly Meal Plan', '2018-09-12 13:11:33'),
(128, 'user', 'added data fasting to Person in Weekly Meal Plan', '2018-09-12 13:11:36'),
(129, 'user', 'added data fasting to Person in Weekly Meal Plan', '2018-09-12 13:11:41'),
(130, 'user', 'added data fasting to Person in Weekly Meal Plan', '2018-09-12 13:11:45'),
(131, 'user', 'added table to do list', '2018-09-12 13:12:34'),
(132, 'user', 'added row task to to do list', '2018-09-12 13:12:44'),
(133, 'user', 'added data monday to task in to do list', '2018-09-12 13:12:52'),
(134, 'user', 'added row task to to do list', '2018-09-12 13:13:05'),
(135, 'user', 'added data monday to task in to do list', '2018-09-12 13:13:10'),
(136, 'user', 'added row task to to do list', '2018-09-12 13:13:28'),
(137, 'user', 'added data wednesday to task in to do list', '2018-09-12 13:13:41'),
(138, 'user', 'added row task to to do list', '2018-09-12 13:13:56'),
(139, 'user', 'added data friday to task in to do list', '2018-09-12 13:14:02'),
(140, 'user', 'added data thursday to task in to do list', '2018-09-12 13:14:14'),
(141, 'user', 'added row task to to do list', '2018-09-12 13:14:32'),
(142, 'user', 'added data friday to task in to do list', '2018-09-12 13:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `loggedinusers`
--

CREATE TABLE `loggedinusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loggedinusers`
--

INSERT INTO `loggedinusers` (`id`, `number`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_data`
--

CREATE TABLE `table_data` (
  `groupname` varchar(255) NOT NULL,
  `top_button_name` varchar(255) NOT NULL,
  `top_button_link` varchar(255) NOT NULL,
  `category1` varchar(255) DEFAULT NULL,
  `category1data` varchar(255) DEFAULT NULL,
  `category2` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_data`
--

INSERT INTO `table_data` (`groupname`, `top_button_name`, `top_button_link`, `category1`, `category1data`, `category2`, `data`, `link`) VALUES
('Weekly Meal Plan', '', '', 'Person', NULL, 'monday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', NULL, 'tuesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', NULL, 'wednesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', NULL, 'thursday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', NULL, 'friday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'monday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'tuesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'wednesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'thursday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'friday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'monday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'tuesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'wednesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'thursday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'friday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'monday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'tuesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'wednesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'thursday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'friday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'monday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'tuesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'wednesday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'thursday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'friday', NULL, ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'monday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'tuesday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'wednesday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'thursday', 'salad', ''),
('Weekly Meal Plan', '', '', 'Person', 'Colin', 'friday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'monday', 'carrots', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'monday', 'baked squash', 'https://www.allrecipes.com/recipe/159433/baked-butternut-squash/'),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'tuesday', 'rice', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'tuesday', 'chicken', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'wednesday', 'broccoli', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'wednesday', 'beans', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'thursday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Demarco', 'friday', 'left overs', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'monday', 'meatballs', 'https://www.allrecipes.com/recipe/40399/the-best-meatballs/'),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'monday', 'pasta', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'wednesday', 'chips', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'wednesday', 'beer', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'thursday', 'cheese', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'friday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Jannet', 'tuesday', 'pizza', ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'monday', 'fasting', ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'tuesday', 'fasting', ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'wednesday', 'fasting', ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'thursday', 'fasting', ''),
('Weekly Meal Plan', '', '', 'Person', 'Mark', 'friday', 'fasting', ''),
('to do list', '', '', 'task', NULL, 'date', NULL, ''),
('to do list', '', '', 'task', 'mow the lawn', 'date', NULL, ''),
('to do list', '', '', 'task', 'mow the lawn', 'date', 'monday', ''),
('to do list', '', '', 'task', 'pick up trash', 'date', NULL, ''),
('to do list', '', '', 'task', 'pick up trash', 'date', 'monday', ''),
('to do list', '', '', 'task', 'plan world takeover', 'date', NULL, ''),
('to do list', '', '', 'task', 'plan world takeover', 'date', 'wednesday', ''),
('to do list', '', '', 'task', 'take over world', 'date', NULL, ''),
('to do list', '', '', 'task', 'take over world', 'date', 'thursday', ''),
('to do list', '', '', 'task', 'happy hour with the boys', 'date', NULL, ''),
('to do list', '', '', 'task', 'happy hour with the boys', 'date', 'friday', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('user', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_log`
--
ALTER TABLE `change_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loggedinusers`
--
ALTER TABLE `loggedinusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `change_log`
--
ALTER TABLE `change_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `loggedinusers`
--
ALTER TABLE `loggedinusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
