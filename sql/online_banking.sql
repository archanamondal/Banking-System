- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 03:09 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` INT(255) NOT NULL , 
  `sender` VARCHAR(255) NOT NULL ,
  `receiver` VARCHAR(255) NOT NULL ,
  `balance` VARCHAR(255) NOT NULL ,
  ) ENGINE = InnoDB;



​

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Rashmika Kumari', 'Preeti Khanna', 100, '2021-08-17 11:50:03'),
(2, 'Jeetu kumar', 'Akhash Sinha', 50, '2021-08-17 11:52:06'),
(3, 'Rashmika Kumari', 'Preeti Khanna', 100, '2021-08-17 11:54:02'),
(4, 'Jeetu kumar', 'Akhash Sinha', 50, '2021-08-17 11:55:25'),
(5, 'Avinash Kumar', 'Archana Mondal', 250, '2021-08-17 11:59:43');



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
 `id` INT(255) NOT NULL , 
  `name` VARCHAR(255) NOT NULL , 
  `email` VARCHAR(255) NOT NULL ,
  `balance` VARCHAR(255) NOT NULL ,
  ) ENGINE = InnoDB;


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Archana Mondal', 'archanamondal@gmail.com', 149950),
(2, 'Subham Reddy', 'subhamreddy@gmail.com', 39180),
(3, 'Lakshmi Roy', 'lakshmiroy@gmail.com', 40720),
(4, 'Preeti Khanna', 'preetikhanna@gmail.com', 58590),
(5, 'Rashmika Kumari', 'rashmikakumari@gmail.com', 39900),
(6, 'Jeetu kumar', 'alijeetu@gmail.com', 35605),
(7, 'Pardeep Kumar', 'kumarpardeep@gmail.com', 49890),
(8, 'Akhash Sinha', 'akashyahoo@gmail.com', 52000),
(9, 'Avinash Kumar', 'kumaravinash@gmail.com', 25622),
(10, 'Sumon Saha', 'sumonsaha2000@gmail.com', 42400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT ;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;