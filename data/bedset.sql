-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2018 at 12:31 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.1.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedset`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `subproduct_id` int(11) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `product_id`, `subproduct_id`, `text`) VALUES
(1, 4, 41, NULL, ' sdfs'),
(2, 4, 41, NULL, ' sdfs'),
(3, 4, 41, NULL, ' '),
(4, 4, 41, NULL, ' s'),
(5, 4, 42, NULL, ' sdaf'),
(6, 4, 45, NULL, ' '),
(7, 4, 43, NULL, '  '),
(8, 4, 44, NULL, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `subproduct_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `product_id`, `subproduct_id`) VALUES
(6, 'thump_1543911598.jpg', 41, NULL),
(7, 'thump_1543911627.jpg', 42, NULL),
(8, 'thump_1543911647.jpg', 43, NULL),
(9, 'thump_1543911670.jpg', 44, NULL),
(10, 'thump_1543911694.jpg', 45, NULL),
(11, 'thump_1543911744.jpg', 46, NULL),
(12, 'thump_1543911772.jpg', 47, NULL),
(13, 'thump_1543911810.jpg', 48, NULL),
(14, 'thump_1543911848.jpg', 49, NULL),
(15, 'thump_1543911872.jpg', 50, NULL),
(16, 'thump_1543911890.jpg', 51, NULL),
(17, 'thump_1543911910.jpg', 52, NULL),
(18, 'thump_1544254561.jpg', 46, 1),
(19, 'thump_1544443592.jpg', 46, 2),
(20, 'thump_1544443613.jpg', 46, 3),
(21, 'thump_1544449803.jpg', 47, 4),
(22, 'thump_1544449829.jpg', 47, 5),
(23, 'thump_1544449875.jpg', 47, 6),
(24, 'thump_1545567966.jpg', 53, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likee`
--

CREATE TABLE `likee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `subproduct_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likee`
--

INSERT INTO `likee` (`id`, `user_id`, `product_id`, `subproduct_id`) VALUES
(1, 4, 41, NULL),
(2, 4, 41, NULL),
(3, 4, 42, NULL),
(4, 4, 43, NULL),
(5, 4, 44, NULL),
(6, 4, 46, NULL),
(7, 4, 47, NULL),
(8, 4, 48, NULL),
(9, 4, 49, NULL),
(10, 4, 52, NULL),
(11, 4, 51, NULL),
(12, 4, 50, NULL),
(13, 4, 45, NULL),
(14, 5, 46, NULL),
(15, 5, 47, NULL),
(16, 5, 48, NULL),
(17, 5, 49, NULL),
(18, 3, 46, NULL),
(19, 3, 47, NULL),
(20, 3, 49, NULL),
(21, 3, 48, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1528542659),
('m130524_201442_init', 1528542661);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discription` text NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `title`, `type`, `price`, `discription`, `priority`) VALUES
(41, 4, 'باربی', 0, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 1),
(42, 4, 'بردی', 0, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 2),
(43, 4, 'کلاسیک', 0, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 3),
(44, 4, 'کینگ', 0, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 4),
(45, 4, 'کلبه', 0, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 5),
(46, 4, 'برنادو', 1, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 1),
(47, 4, 'کلاسیک ', 1, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 2),
(48, 4, 'پابلو', 1, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 3),
(49, 4, 'پاندورا', 1, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 4),
(50, 4, 'عروسک', 2, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 1),
(51, 4, 'لوکس', 2, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 2),
(52, 4, 'چیلک', 2, 3500000, 'سرویس خواب های تمام چوب متناسب برای جوانان', 4),
(53, 4, 'النا', 1, 2750000, 'سرویس نوجوان النا', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subproduct`
--

CREATE TABLE `subproduct` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `dimention` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subproduct`
--

INSERT INTO `subproduct` (`id`, `user_id`, `product_id`, `type`, `price`, `dimention`) VALUES
(1, 4, 46, 0, 800000, '2*1.8*0.7'),
(2, 4, 46, 1, 800000, '2*1.8*0.7'),
(3, 4, 46, 2, 800000, '2*1.8*0.7'),
(4, 4, 47, 2, 800000, '2*1.8*0.7'),
(5, 4, 47, 1, 800000, '2*1.8*0.7'),
(6, 4, 47, 0, 800000, '2*1.8*0.7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'sadegh', 'EIsVLPDu0Pjk1jTrMkaK0SdayjQ88dU2', '$2y$13$aSy34BYM7w9i6zt2jRmO5.IQ/XLk9Nu82oofVDvWfWnjgpMBZuJA6', NULL, 'pah@gmail.com', 10, 1537283186, 1537283186),
(3, 'mohsen', '43dXA9jUTx0N6Dt5H0Qj9bh7PM8L7uQv', '$2y$13$DzU.6H9UkPZq3d0LsAC6yOebceubtgaIMN/LpQ/K3rqcmc9yMwjPS', NULL, 'mohsen@gmail.com', 10, 1543047781, 1543047781),
(4, 'ziba', 'IaF1JhzENPw2tU_zXY2iIxywmgg-3PG7', '$2y$13$6xeo5bOg1LbBgLHLQQfOcOY1ksvgwuQpSaQ3OM0BtSkIO0VyWATvS', NULL, 'ziba@gmail.com', 10, 1543219535, 1543219535),
(5, 'ali', 'z7QlocTrFxz23lfVPQMpBfGxvHkfvdkP', '$2y$13$gLmR0DXhCZd96f9V0vJhJuN7aVkkrawKJJsf7Znq/5XruU3O8j9xW', NULL, 'ali@gmail.com', 10, 1544614239, 1544614239);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `subproduct_id` (`subproduct_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `subproduct_id` (`subproduct_id`);

--
-- Indexes for table `likee`
--
ALTER TABLE `likee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `subproduct_id` (`subproduct_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subproduct`
--
ALTER TABLE `subproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `likee`
--
ALTER TABLE `likee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subproduct`
--
ALTER TABLE `subproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`subproduct_id`) REFERENCES `subproduct` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`subproduct_id`) REFERENCES `subproduct` (`id`);

--
-- Constraints for table `likee`
--
ALTER TABLE `likee`
  ADD CONSTRAINT `likee_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `likee_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `likee_ibfk_3` FOREIGN KEY (`subproduct_id`) REFERENCES `subproduct` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `subproduct`
--
ALTER TABLE `subproduct`
  ADD CONSTRAINT `subproduct_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `subproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
