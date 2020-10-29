-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 05:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_store`
--

CREATE TABLE `data_store` (
  `id` int(100) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `clint_address` varchar(100) NOT NULL,
  `clint_req` varchar(100) NOT NULL,
  `s_time` date NOT NULL,
  `delivery_target` date NOT NULL,
  `project_correction` varchar(100) NOT NULL,
  `completed_date` date NOT NULL,
  `project_drop` varchar(100) NOT NULL,
  `pro_restart` date NOT NULL,
  `drop_reason` varchar(100) NOT NULL,
  `delivery_date` date NOT NULL,
  `archi_name` varchar(100) NOT NULL,
  `engin_name` varchar(100) NOT NULL,
  `challenge_project` varchar(100) NOT NULL,
  `supervision` varchar(100) NOT NULL,
  `construction` varchar(100) NOT NULL,
  `quality_control` varchar(100) NOT NULL,
  `major_deision` varchar(100) NOT NULL,
  `project_management` varchar(100) NOT NULL,
  `one_quater` varchar(100) NOT NULL,
  `one_half` varchar(100) NOT NULL,
  `three_quarter` varchar(100) NOT NULL,
  `full` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_store`
--

INSERT INTO `data_store` (`id`, `project_name`, `clint_address`, `clint_req`, `s_time`, `delivery_target`, `project_correction`, `completed_date`, `project_drop`, `pro_restart`, `drop_reason`, `delivery_date`, `archi_name`, `engin_name`, `challenge_project`, `supervision`, `construction`, `quality_control`, `major_deision`, `project_management`, `one_quater`, `one_half`, `three_quarter`, `full`) VALUES
(6, 'jarin', 'Dhaka', 'no', '2020-07-22', '2020-07-22', 'no', '2020-07-22', 'yes', '2020-07-23', 'no', '2020-07-23', 'Tonney', 'fgjfgh', 'dfgfg', 'hi', 'hlw', 'yes me', 'no', 'np', 'no', 'yes', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_store`
--
ALTER TABLE `data_store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_store`
--
ALTER TABLE `data_store`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
