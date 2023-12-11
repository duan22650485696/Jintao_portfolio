-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 11, 2023 at 03:06 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table contacts
--

CREATE TABLE contacts (
  id int(8) UNSIGNED NOT NULL,
  name varchar(200) NOT NULL,
  subject varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  recieve_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  message varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table contacts
--

INSERT INTO contacts (id, name, subject, email, recieve_date, message) VALUES
(1, 'Taylor Swift', 'Design Logo', 'TaylorS@gmail.com', '2023-11-17 03:00:06', 'I want a very unique LOGO'),
(2, 'Cody Johnson', 'Design', 'Codyj@gmail.com', '2023-11-08 14:04:47', 'I want a new album cover and make a concert poster'),
(3, 'Justin Trudeau', 'Web Developent', 'Justin_T@gmail.com', '2023-11-18 03:04:47', 'I need to a new website to show my thinking'),
(4, 'Jax', 'Web design', 'Jax@gmail.com', '2023-12-01 03:04:47', 'I want to update my business web page , I need a better UI and UX design'),
(5, 'hah', 'fdf', 'gooddf@gmail.com', '2023-12-11 02:59:25', 'dfdfdf'),
(6, 'Jintao', 'Logo Design', 'taotaoright@gmail.com', '2023-12-11 03:05:11', 'For a shoe store logo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contacts
--
ALTER TABLE contacts
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contacts
--
ALTER TABLE contacts
  MODIFY id int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
