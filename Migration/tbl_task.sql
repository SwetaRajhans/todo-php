-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 05:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(20) NOT NULL,
  `task_details` varchar(30) NOT NULL,
  `created_on` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`task_id`, `task_details`, `created_on`) VALUES
(6, 'sweta', '2019-04-07 21:39:21.389257'),
(7, 'sadsfgt', '2019-04-07 21:39:29.033331'),
(8, 'cldkldjd', '2019-04-08 01:43:28.721508'),
(9, 'kdsnksfndsk', '2019-04-08 01:43:38.416999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
