-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2024 at 06:35 AM
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
-- Table structure for table media
--

CREATE TABLE media (
  id int(11) NOT NULL,
  project_id int(11) DEFAULT NULL,
  image_filename varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table media
--

INSERT INTO media (id, project_id, image_filename) VALUES
(1, 1, ''),
(2, 1, 'project1_image2.jpg'),
(3, 1, 'project1_image3.jpg'),
(4, 2, 'project2_image1.jpg'),
(5, 2, 'project2_image2.jpg'),
(6, 2, 'project2_image3.jpg'),
(7, 3, 'project3_image1.jpg'),
(8, 3, 'project3_image2.jpg'),
(9, 3, 'project3_image3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  description text,
  image_url varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, title, description, image_url) VALUES
(1, 'Web Development', 'Headphone Website', 'web-img-1.png'),
(2, 'Graphic Design', 'Kavorka Makeup', 'Kavorka.jpg'),
(3, 'Motion Design', '3D Earbuds', 'Jintao_Duan_Earbuds_01.jpg'),
(4, 'Photography', 'St.Tomas', 'gallary_img_photo1.jpg'),
(5, '', 'Sunset Beach', 'gallary_img_photo2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table project_detail
--

CREATE TABLE project_detail (
  id int(11) NOT NULL,
  title varchar(255) NOT NULL,
  description text,
  image_url varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table project_detail
--

INSERT INTO project_detail (id, title, description, image_url) VALUES
(1, 'Introduction', 'Kavorka is a distinctive and innovative makeup brand Our brand characteristics are defined by: 01. Kavorka is dedicated to simplifying your beauty routine. 02. We offer more than just makeup; we provide sunscreen moisturizer and soap, creating a comprehensive beauty and skincare solution in one brand.', 'Jintao_Duan_Double_Page_Magazine.jpg'),
(2, 'Problems', 'I dont know how to make this logo at the first time and it doesn\'t looks great orginally', NULL),
(3, 'Brand Idea', 'I dont know how to make this logo at the first time and it doesn\'t looks great orginally', 'Logo_idea.png'),
(4, 'Logo Size', 'I dont know how to make this logo at the first time and it doesn\'t looks great orginally', 'Logo_size.png'),
(5, 'Logo Color', 'I dont know how to make this logo at the first time and it doesn\'t looks great orginally', 'Logo_color.png'),
(6, 'Moisturizer', 'Kavorka’s Moisturizer, in its elegant purple packaging, is a skincare essential. It hydrates your skin, leaving it soft, smooth, and glowing. The purple color symbolizes luxury and sophistication. Experience enhanced radiance with Kavorka’s Moisturizer.', 'Jintao_Duan_Facebook_01.jpg'),
(7, 'Sunscreen', 'Kavorka’s Sunscreen, in its vibrant orange packaging, offers superior sun protection. It shields your skin from harmful UV rays while nourishing it. The orange color symbolizes warmth and energy. Enjoy the sun responsibly with Kavorka’s Sunscreen.', 'Jintao_Duan_Facebook_02.jpg'),
(8, 'Soap', 'Kavorka’s Soap, in green packaging, gently cleanses while maintaining skin’s moisture. It leaves your skin soft,refreshed, and revitalized. The green color symbolizes nature and purity. Experience natural health and beauty with Kavorka’s Soap.', 'Jintao_Duan_Facebook_03jpg.jpg'),
(9, 'Conclusion', 'Kavorka is a unique and forward-thinking makeup brand that goes beyond cosmetics. It is committed to streamlining beauty routines by offering a holistic solution that includes not only makeup but also essential skincare products like sunscreen, moisturizer, and soap. This comprehensive approach positions Kavorka as a one-stop brand for all beauty and skincare needs.', 'Kavorka_all_purple.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (id),
  ADD KEY project_id (project_id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- Indexes for table project_detail
--
ALTER TABLE project_detail
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table media
--
ALTER TABLE media
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table project_detail
--
ALTER TABLE project_detail
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table media
--
ALTER TABLE media
  ADD CONSTRAINT media_ibfk_1 FOREIGN KEY (project_id) REFERENCES projects (id);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
