-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 11:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dssdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card-innercard`
--

CREATE TABLE `card-innercard` (
  `id` int(11) NOT NULL,
  `serviceCardId` int(11) NOT NULL,
  `InnerCardId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card-innercard`
--

INSERT INTO `card-innercard` (`id`, `serviceCardId`, `InnerCardId`) VALUES
(1, 3, 1),
(3, 3, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `card-points`
--

CREATE TABLE `card-points` (
  `id` int(11) NOT NULL,
  `cardId` int(11) NOT NULL,
  `pointId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactdetail`
--

CREATE TABLE `contactdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `innercard`
--

CREATE TABLE `innercard` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `shortDesc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `innercard`
--

INSERT INTO `innercard` (`id`, `title`, `image`, `shortDesc`, `description`) VALUES
(1, 'PHP', '', 'Full Stack Web Development using PHP', 'At DSS, we take pride in offering exceptional training in full-stack web development, focusing on HTML, CSS, PHP, and JavaScript. Here\'s an elaboration on what we offer and how we excel:'),
(2, 'Node.js and React', '', 'Full Stack Web Development using Node.js and React.', 'At DSS, we take pride in offering exceptional training in full stack web development with Node.js and React. Here\'s an elaboration on what we offer and how we excel'),
(3, 'Spring Boot', '', 'Full Stack Web Development using Spring Boot.', 'At DSS, we take pride in offering exceptional training in full stack web development with Spring Boot. Here\'s an elaboration on what we offer and how we excel:'),
(4, 'Data Analytics', '', 'We take pride in offering exceptional training in Data Analytics.', 'At DSS, we take pride in offering exceptional training in Data Analytics. Here\'s an elaboration on what we offer and how we excel:'),
(5, 'Automation Testing', '', 'We take great pride in offering exceptional training in Automation Testing.', 'At DSS, we take great pride in offering exceptional training in Automation Testing. Here\'s an elaboration on what we offer and why we excel:'),
(6, 'Industrial Coding', '', 'We are dedicated to providing exceptional training in Industrial Coding.', 'At DSS, we are dedicated to providing exceptional training in Industrial Coding. Here\'s an elaboration on what sets us apart and makes us the best:');

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE `logindata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`id`, `username`, `name`, `password`, `email`, `phoneNumber`) VALUES
(1, 'admin', 'AdminFrost', '21232f297a57a5a743894a0e4a801fc3', 'admin@123', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `points table`
--

CREATE TABLE `points table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicescard`
--

CREATE TABLE `servicescard` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ShortDesc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicescard`
--

INSERT INTO `servicescard` (`id`, `title`, `photo`, `ShortDesc`, `description`) VALUES
(1, 'Software Development', '', 'Elegant custom software development for unparalleled innovation and operational excellence.', 'In the realm of software development, DSS stands out as a leading provider of exceptional services. Here\'s how we demonstrate our expertise and commitment to excellence:'),
(2, 'Software Testing', '', 'Unsurpassed software testing for perfection and user-centric excellence.', 'When it comes to software testing, DSS stands out as a provider of comprehensive and high-quality services. Here\'s why we are the best in the industry:'),
(3, 'Industrial Training', '', 'Empowering IT professionals with cutting-edge\r\nindustrial training programs.', 'At DSS, we offer industry-specific training programs designed to equip individuals with the practical skills and knowledge required for success in the IT industry. Our comprehensive training modules cover a wide range of topics, including:'),
(4, 'Digital Marketing', '', 'Unrivalled digital marketing for unparalleled brand visibility and exceptional lead generation.', 'In the realm of digital marketing, DSS excels in delivering result-oriented strategies that maximize your online presence and drive business growth. Here\'s how we offer top-notch digital marketing services:'),
(5, 'Mock Tests for Class 9 to 12', '', 'Revolutionary mock tests for unparalleled exam\r\npreparation and academic excellence.', 'Preparing for exams is easier with our comprehensive mock test services at DSS. We provide students in grades 9 to 12 with a platform to assess their knowledge and boost their confidence before their actual exams.'),
(6, 'Placement & Internship Assistant', '', 'Empowering carrer with personalised placement and internship assistant.', 'We understand the significance of bridging the gap between education and employment. That\'s why, at DSS, we provide placement and internship assistance to all B-Tech, M-Tech, BCA, MCA, or any student from a computer background. We believe in empowering ou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card-innercard`
--
ALTER TABLE `card-innercard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card-points`
--
ALTER TABLE `card-points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdetail`
--
ALTER TABLE `contactdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innercard`
--
ALTER TABLE `innercard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `points table`
--
ALTER TABLE `points table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicescard`
--
ALTER TABLE `servicescard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card-innercard`
--
ALTER TABLE `card-innercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `card-points`
--
ALTER TABLE `card-points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactdetail`
--
ALTER TABLE `contactdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `innercard`
--
ALTER TABLE `innercard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logindata`
--
ALTER TABLE `logindata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `points table`
--
ALTER TABLE `points table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicescard`
--
ALTER TABLE `servicescard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
