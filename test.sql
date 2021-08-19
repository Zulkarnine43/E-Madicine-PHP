-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `id` int(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `categoryDescription` varchar(200) NOT NULL,
  `longDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`id`, `file`, `categoryName`, `price`, `categoryDescription`, `longDescription`) VALUES
(58, 'uploads/1.jpg', 'Angivent', 280, '1 tablet at mealtimes in the morning and evening.', 'Angivent® MR tablet: Each box contains 30 tablets in blister pack.'),
(60, 'uploads/4.jpg', 'Flexi', 170, 'Flexi: 100 mg twice daily; Flexi SR: 200 mg once daily.', 'Flexi Tablet: Box containing 10 x 10 tablets in Alu-Alu blister pack; \r\n'),
(61, 'uploads/2.jpg', 'Ambrox', 220, 'Average daily dose (preferably after meal) : Paediatric Drops : 0 - 6 months old - 0.5 ml, 2 times a', '6 mg/ml Paediatric Drops, 15 mg/5 ml Syrup, 75 mg SR Capsule.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `confirmpassword`) VALUES
(4, 'faruqe', 'hasan', 'faruqe@gmail.com', '12345678', '12345678'),
(5, 'Zulkar ', 'Nine', 'zns601@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategory`
--
ALTER TABLE `addcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategory`
--
ALTER TABLE `addcategory`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
