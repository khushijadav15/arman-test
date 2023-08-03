-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `image`, `description`) VALUES
(1, 'pic-1.jpg', 'Hi, i am Arman.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_number` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`id`, `name`, `mobile_number`, `password`, `username`) VALUES
(1, 'admin', '1234567890', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form_data`
--

CREATE TABLE `tbl_form_data` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_properties_cards`
--

CREATE TABLE `tbl_properties_cards` (
  `id` int(50) NOT NULL,
  `image` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` varchar(225) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_properties_cards`
--

INSERT INTO `tbl_properties_cards` (`id`, `image`, `name`, `area`, `price`) VALUES
(2, 'pic-2.jpg', 'property 2', 'vcetgc', 300000),
(3, 'pic-2.jpg', 'property 3', 'vcetgc', 300000),
(4, 'pic-2.jpg', 'property 4', 'vcetgc', 350000),
(5, 'pic-4.jpg', 'property 5', 'sindhun', 330000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(50) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `file_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `file_name`, `file_type`) VALUES
(1, 'pic-1.jpg', 'image'),
(2, 'pic-2.jpg', 'image'),
(3, 'pic-3.jpg', 'image'),
(4, 'pic-4.jpg', 'image'),
(5, 'video-1.mp4', 'video');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_form_data`
--
ALTER TABLE `tbl_form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_properties_cards`
--
ALTER TABLE `tbl_properties_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_form_data`
--
ALTER TABLE `tbl_form_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_properties_cards`
--
ALTER TABLE `tbl_properties_cards`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
