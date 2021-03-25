-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 08:07 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040141`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `picture`, `name`, `description`, `price`, `category`) VALUES
(1, '1.jpg', 'Hoodie Pink', 'Made of soft cotton fleece and comfortable to wear in any condition', 150000, 'Hoodie'),
(2, '2.jpg', 'Hoodie Gray', 'Made of soft cotton fleece and comfortable to wear in any condition', 150000, 'Hoodie'),
(3, '3.jpg', 'Hoodie Black', 'Made of soft cotton fleece and comfortable to wear in any condition', 150000, 'Hoodie'),
(4, '4.jpg', 'Hoodie FILA Blue', 'Made of soft cotton fleece and comfortable to wear in any condition', 200000, 'Hoodie'),
(5, '5.jpg', 'Hoodie London Printed Yellow', 'Made of soft cotton fleece and comfortable to wear in any condition', 250000, 'Hoodie'),
(6, '6.jpg', 'Hoodie Stussy White', 'Made of soft cotton fleece and comfortable to wear in any condition', 250000, 'Hoodie'),
(7, '7.jpg', 'Hoodie Supreme Red', 'Made of soft cotton fleece and comfortable to wear in any condition', 550000, 'Hoodie'),
(8, '8.jpg', 'Hoodie Red', 'Made of soft cotton fleece and comfortable to wear in any condition', 150000, 'Hoodie'),
(9, '9.jpg', 'Denim Jacket Blue', 'Innovative designs and comfortable to wear in any condition', 600000, 'Denim'),
(10, '10.jpg', 'Hoodie Orange', 'Made of soft cotton fleece and comfortable to wear in any condition', 150000, 'Hoodie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
