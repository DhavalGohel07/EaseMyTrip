-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 07:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easemytrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__destinations`
--

CREATE TABLE `admin__destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dname` varchar(255) NOT NULL,
  `ddays` varchar(255) NOT NULL,
  `ddesc` varchar(255) NOT NULL,
  `dplace` varchar(255) NOT NULL,
  `dprice` int(11) NOT NULL,
  `dest_image` varchar(255) NOT NULL,
  `dcat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin__destinations`
--

INSERT INTO `admin__destinations` (`id`, `dname`, `ddays`, `ddesc`, `dplace`, `dprice`, `dest_image`, `dcat`, `created_at`, `updated_at`) VALUES
(1, 'Goa', '5 Day - 4 Night', 'Goa is a land that redefines holidays, with its exquisite mix of sun, surf, and beaches; Goa has become the ultimate tourist destination', 'Beaches, culture, climate, and historical places.', 3999, 'Goa.jpg', 'Summer', '2024-03-27 23:18:30', '2024-03-28 00:17:14'),
(2, 'Kashmir', '4 Days 3 Nights', 'Kashmir is the beauty of India, referred to as India\'s Switzerland it is a place worth watching. The mighty ranges of the Great Himalayas which you can\'t afford to miss.', 'Srinagar Houseboat, Pahalgam, Gulmarg, Srinagar', 4999, 'Kashmir.jpg', 'Winter', '2024-03-28 00:11:31', '2024-03-28 00:11:31'),
(3, 'Sikkim & Darjeeling', '4 Days 3 Nights', 'Sikkim and Darjeeling, located in the northeastern part of India, are two picturesque destinations that offer a blend of natural beauty, cultural richness, and adventure. Here\'s an overview that a travel company might find useful', 'Darjeeling, Pelling, Gangtok,  Lachung', 3999, 'darjiling.jpg', 'Winter', '2024-03-28 00:33:41', '2024-03-28 00:36:59'),
(4, 'Assam & Meghalaya', '3 Day - 2 Night', 'Welcome to Assam, the enchanting land nestled in the northeastern corner of India. Rich in cultural heritage, biodiversity, and scenic landscapes, Assam offers a captivating experience for travelers seeking adventure.', 'Guwahati, Shillong, Dirang , Tawang', 3699, 'sikkim.jpg', 'Winter', '2024-03-28 00:36:29', '2024-03-28 00:37:16'),
(6, 'Dazzling in Jodhpur & Udaipur', '4 Days 3 Nights', 'Get great discounts on stays during summer with pleasantly warm days and cool nights. Indulge in a desert safari and enjoy camel rides in Jodhpur. Unwind by the scenic lakes of Udaipur during summer.', 'Jodhpur, Udaipur', 3599, 'udaipur.jpg', 'Summer', '2024-03-28 00:41:26', '2024-03-28 00:41:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__destinations`
--
ALTER TABLE `admin__destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin__destinations`
--
ALTER TABLE `admin__destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
