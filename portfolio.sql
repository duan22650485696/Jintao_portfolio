-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2024 at 03:21 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `recieve_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `project_id`, `image_filename`) VALUES
(1, 1, 'web-img-1.png'),
(2, 1, 'project1_image2.jpg'),
(3, 1, 'project1_image3.jpg'),
(4, 2, 'project2_image1.jpg'),
(5, 2, 'project2_image2.jpg'),
(6, 2, 'project2_image3.jpg'),
(7, 3, 'project3_image1.jpg'),
(8, 3, 'project3_image2.jpg'),
(9, 3, 'project3_image3.jpg'),
(10, 1, 'project1_image1.jpg'),
(11, 1, 'project1_image2.jpg'),
(12, 1, 'project1_image3.jpg'),
(13, 2, 'project2_image1.jpg'),
(14, 2, 'project2_image2.jpg'),
(15, 2, 'project2_image3.jpg'),
(16, 3, 'project3_image1.jpg'),
(17, 3, 'project3_image2.jpg'),
(18, 3, 'project3_image3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `pro_cateagory` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `pro_cateagory`, `pro_name`, `pro_image`) VALUES
(1, 'Web Development', 'Headphone Website', 'web-img-1.png'),
(2, 'Graphic Design', 'Kavorka Makeup', 'Kavorka.jpg'),
(3, 'Motion Design', '3D Earbuds Headphone', '../images/gallary/image_1712544304.jpg'),
(4, 'Photography', 'St.Tomas', 'gallary_img_photo1.jpg'),
(14, 'Web Development', 'Starwar Characters', '../images/gallary/image_1712542552.png'),
(15, 'Logo Design', 'Zima Beer', '../images/gallary/image_1712544919.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_detail`
--

CREATE TABLE `project_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `projects_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `pro_des` varchar(255) NOT NULL,
  `pro_detail_image1` varchar(255) NOT NULL,
  `pro_detail_image2` varchar(255) NOT NULL,
  `pro_detail_image3` varchar(255) NOT NULL,
  `pro_detail_image4` varchar(255) NOT NULL,
  `pro_detail_image5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_detail`
--

INSERT INTO `project_detail` (`id`, `projects_id`, `title`, `pro_des`, `pro_detail_image1`, `pro_detail_image2`, `pro_detail_image3`, `pro_detail_image4`, `pro_detail_image5`) VALUES
(1, 2, 'Kavorka Makeup', 'This is a new makeup brand', 'Jintao_Duan_Double_Page_Magazine.jpg', '\r\nJintao_Duan_Facebook_01.jpg', 'Jintao_Duan_Facebook_02.jpg', 'Jintao_Duan_Facebook_03jpg.jpg', 'Kavorka_all_purple.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jintao', 'duan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_detail`
--
ALTER TABLE `project_detail`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project_detail`
--
ALTER TABLE `project_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
