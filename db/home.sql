-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2018 at 07:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `cityname` varchar(200) NOT NULL,
  `district_id` int(100) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `cityname`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'uttara', 1, '2018-02-10', ''),
(2, 'Dhanmondi', 1, '2018-02-10', ''),
(3, 'Ghulshan-1', 1, '2018-02-10', ''),
(4, 'Ghulshan-2', 1, '2018-02-10', ''),
(5, 'Natore', 2, '2018-02-10', ''),
(6, 'Bogura', 2, '2018-02-10', ''),
(7, 'Chapainowab gonj', 2, '2018-02-10', ''),
(8, 'Jossore', 3, '2018-02-10', ''),
(9, 'Feni', 4, '2018-02-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2018-02-09', ''),
(2, 'Rajshahi', '2018-02-09', ''),
(3, 'Khulna', '2018-02-09', ''),
(4, 'Chittagong', '2018-02-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `houseadpost`
--

CREATE TABLE `houseadpost` (
  `p_id` int(11) NOT NULL,
  `div_zone` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `harea` int(100) DEFAULT NULL,
  `hlocation` varchar(255) DEFAULT NULL,
  `nbedroom` int(100) DEFAULT NULL,
  `nmasterbed` int(100) DEFAULT NULL,
  `kitechen` int(100) DEFAULT NULL,
  `nstorerom` int(100) DEFAULT NULL,
  `hrent` int(255) DEFAULT NULL,
  `service_charge` int(100) DEFAULT NULL,
  `secrity_money` int(100) DEFAULT NULL,
  `neg` int(2) DEFAULT NULL,
  `avaiable_from` varchar(200) DEFAULT NULL,
  `parking_lot` int(2) DEFAULT NULL,
  `bachelor` int(2) DEFAULT NULL,
  `leave_notice` varchar(200) DEFAULT NULL,
  `generator` varchar(200) DEFAULT NULL,
  `lift` varchar(200) DEFAULT NULL,
  `gas` varchar(200) DEFAULT NULL,
  `water` varchar(200) DEFAULT NULL,
  `cctv` varchar(200) DEFAULT NULL,
  `contactable_name` varchar(200) DEFAULT NULL,
  `contactnumber` varchar(200) DEFAULT NULL,
  `termscondition` tinytext,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `agent_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houseadpost`
--

INSERT INTO `houseadpost` (`p_id`, `div_zone`, `city`, `harea`, `hlocation`, `nbedroom`, `nmasterbed`, `kitechen`, `nstorerom`, `hrent`, `service_charge`, `secrity_money`, `neg`, `avaiable_from`, `parking_lot`, `bachelor`, `leave_notice`, `generator`, `lift`, `gas`, `water`, `cctv`, `contactable_name`, `contactnumber`, `termscondition`, `created_at`, `updated_at`, `agent_user`) VALUES
(1, '1', '3', NULL, 'House #54; Road#11;sector uttara', 2, 1, 1, 1, 12000, 2000, NULL, 0, '2018-03-01', 0, 0, 'Two Months ago', 'on', 'on', 'on', NULL, '', 'atik bin hashmee', '33224,3242134', 'lkasfk jasdfjksadkfjasdfk ', '2018-02-08', NULL, '1'),
(2, '1', '2', NULL, 'Nikunja-2', 4, 2, 1, 2, 25000, 3000, NULL, 0, '2018-03-01', 0, 0, 'Two Months ago', 'on', 'on', 'on', NULL, 'on', 'Toufiqul Islam', '44433242,4543345,53534', 'sdfgdsfgdfs dfgsdfgsdfgd', '2018-02-08', NULL, '2'),
(3, '1', '2', NULL, 'feni, feni2', 3, 3, 1, 2, 12000, 2000, NULL, 0, '2018-02-10', 0, 0, 'One Month ago', 'on', 'on', 'on', NULL, '', 'Gias uddin', '01745365353,74774918234', 'hhjkaf alsjdhfjkasdfk asdjfklasd ajklsdfksad ', '2018-02-10', NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `password`, `email`, `type`) VALUES
(1, 'user', '123456', 'user@gmail.com', 1),
(2, 'owener', '123456', 'owener@mail.com', 1),
(3, 'owner1', '123456', 'owner@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `houseadpost`
--
ALTER TABLE `houseadpost`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `houseadpost`
--
ALTER TABLE `houseadpost`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
