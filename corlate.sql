-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 12:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corlate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_banner`
--

CREATE TABLE `cs_banner` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(100) NOT NULL,
  `ban_subtitle` varchar(250) NOT NULL,
  `ban_button` varchar(20) NOT NULL,
  `ban_url` varchar(250) NOT NULL,
  `ban_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_banner`
--

INSERT INTO `cs_banner` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_url`, `ban_image`) VALUES
(1, 'Creative System Limited', 'International Software Company.', 'Read More', '#csl', 'user_1612957765_970206.jpg'),
(2, 'Creative Shaper', 'IT Training Center', 'View More', '#', 'user_1612957781_121476.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cs_contact`
--

CREATE TABLE `cs_contact` (
  `conus_id` int(11) NOT NULL,
  `conus_name` varchar(50) NOT NULL,
  `conus_email` varchar(50) NOT NULL,
  `conus_phone` varchar(20) NOT NULL,
  `conus_sub` varchar(250) NOT NULL,
  `conus_mess` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_contact`
--

INSERT INTO `cs_contact` (`conus_id`, `conus_name`, `conus_email`, `conus_phone`, `conus_sub`, `conus_mess`) VALUES
(1, 'Saidul Islam Uzzal', 'uzzalbd.creative@gmail.com', '01710726035', ' Every day besides so many people joining this community.', 'All users on MySpace will know that there are millions of people out there. Every day\r\nbesides so many people joining this community.'),
(2, '&lt;script&gt;alert(&quot;Creative&quot;)&lt;/scri', 'motin@gmail.com', '01977232341', 'Test  Message', 'adasd sadsada '),
(3, 'Rafi', 'rafi@gmail.com', '01988232343', 'Test  Message', 'I love bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `cs_content`
--

CREATE TABLE `cs_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) NOT NULL,
  `content_subtitle` varchar(255) NOT NULL,
  `content_details` text NOT NULL,
  `content_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_content`
--

INSERT INTO `cs_content` (`content_id`, `content_title`, `content_subtitle`, `content_details`, `content_image`) VALUES
(1, 'Features', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br> incididunt ut\r\net dolore magna aliqua. Ut enim ad minim veniam', '', ''),
(2, 'Who we are', '', 'Photographs are a way of preserving a moment in our lives for the rest of our lives. Many of us have at least been tempted at the flashy array of photo printers which seemingly leap off the shelves at even the least tech-savvy. It surely seems old fashioned to talk about 35mm film and non-digital cameras in today’s day and age.', 'about-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `cs_feature`
--

CREATE TABLE `cs_feature` (
  `feature_id` int(11) NOT NULL,
  `feature_title` varchar(100) NOT NULL,
  `feature_details` varchar(200) NOT NULL,
  `feature_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_feature`
--

INSERT INTO `cs_feature` (`feature_id`, `feature_title`, `feature_details`, `feature_image`) VALUES
(1, 'Fast', 'Having a baby can be a nerve wracking experience for new', 'fa-rocket'),
(2, 'Easy', 'If you are looking for a new way to promote your business that', 'fa-check'),
(3, 'Cheap', 'Okay, you’ve decided you want to make money with Affiliate', 'fa-bullhorn'),
(4, 'Editable', 'A Pocket PC is a handheld computer, which features many', 'fa-arrows');

-- --------------------------------------------------------

--
-- Table structure for table `cs_role`
--

CREATE TABLE `cs_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_role`
--

INSERT INTO `cs_role` (`role_id`, `role_name`) VALUES
(2, 'Admin'),
(3, 'Author'),
(4, 'Editor'),
(5, 'Subscriber'),
(1, 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `cs_user`
--

CREATE TABLE `cs_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_reg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_user`
--

INSERT INTO `cs_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `role_id`, `user_photo`, `user_reg_time`) VALUES
(1, 'Saidul Islam Uzzal', '01710726035', 'uzzalbd.creative@gmail.com', 'uzzalbd', '6512bd43d9caa6e02c990b0a82652dca', 1, '', '2021-01-20 05:21:55'),
(2, 'Rafi Khan', '01654491921', 'rafi@gmail.com', 'rafi', '6512bd43d9caa6e02c990b0a82652dca', 3, '', '2021-01-20 05:22:21'),
(3, 'Abdul Motin', '01988232343', 'motin@gmail.com', 'motin', '6512bd43d9caa6e02c990b0a82652dca', 2, '', '2021-01-20 05:22:45'),
(4, 'Rezvi Ahamed', '01812312355', 'rezvi@gmail.com', 'rezvi', '6512bd43d9caa6e02c990b0a82652dca', 5, '', '2021-01-20 05:23:08'),
(5, 'Raihan Gazi', '01977232341', 'raihan@gmail.com', 'raihan', '6512bd43d9caa6e02c990b0a82652dca', 4, '', '2021-01-20 05:23:35'),
(6, 'Creative Shaper', '01966999777', 'creative@gmail.com', 'creative', '6512bd43d9caa6e02c990b0a82652dca', 1, '', '2021-01-20 05:24:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_banner`
--
ALTER TABLE `cs_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `cs_contact`
--
ALTER TABLE `cs_contact`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `cs_content`
--
ALTER TABLE `cs_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `cs_feature`
--
ALTER TABLE `cs_feature`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `cs_role`
--
ALTER TABLE `cs_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_banner`
--
ALTER TABLE `cs_banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cs_contact`
--
ALTER TABLE `cs_contact`
  MODIFY `conus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cs_content`
--
ALTER TABLE `cs_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cs_feature`
--
ALTER TABLE `cs_feature`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cs_role`
--
ALTER TABLE `cs_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cs_user`
--
ALTER TABLE `cs_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cs_user`
--
ALTER TABLE `cs_user`
  ADD CONSTRAINT `cs_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `cs_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
