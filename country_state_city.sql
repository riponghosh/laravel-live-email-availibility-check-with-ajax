-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 08:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_state_city`
--

CREATE TABLE `country_state_city` (
  `id` int(11) NOT NULL,
  `country` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_city`
--

INSERT INTO `country_state_city` (`id`, `country`, `state`, `city`) VALUES
(1, 'USA', 'New York', 'New York city'),
(2, 'USA', 'New York', 'Buffalo'),
(3, 'USA', 'New York', 'Albany'),
(4, 'USA', 'Alabama', 'Birmingham'),
(5, 'USA', 'Alabama', 'Montgomery'),
(6, 'USA', 'Alabama', 'Huntsville'),
(7, 'USA', 'California', 'Los Angeles'),
(8, 'USA', 'California', 'San Francisco'),
(9, 'USA', 'California', 'San Diego'),
(10, 'Canada', 'Ontario', 'Toronto'),
(11, 'Canada', 'Ontario', 'Ottawa'),
(12, 'Canada', 'British Columbia', 'Vancouver'),
(13, 'Canada', 'British Columbia', 'Victoria'),
(14, 'Australia', 'New South Wales', 'Sydney'),
(15, 'Australia', 'New South Wales', 'Newcastle'),
(16, 'Australia', 'Queensland', 'City of Brisbane'),
(17, 'Australia', 'Queensland', 'Gold Coast\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
