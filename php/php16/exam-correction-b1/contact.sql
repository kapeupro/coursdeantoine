-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 01:08 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactbci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`, `created_at`) VALUES
(1, 'quidelantoine@gmail.com', 'sqdqdsfsdkfhkjsdfhjsfhsd', '2019-12-03 17:23:38'),
(2, 'quidelantoine@gmail.com', 'sqfqdfdsfjdfhkjshfdkjsdf\r\nsdfhskjdhfsdf\r\nsdfjhskdf', '2019-12-03 18:00:58'),
(3, 'quidel@gmail.com', 'Votre messagedsfsdfsfsd', '2019-12-09 07:21:03'),
(4, 'quidelantoine@gmail.com', 'dfgdfsgdsfg', '2019-12-09 07:43:04'),
(5, 'quidelantoine@gmail.com', 'dqgdfsgdfsgdfsf', '2019-12-09 07:51:06'),
(6, 'dsfsfds@cdn.fr', 'dsfsdfs', '2019-12-09 07:57:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
