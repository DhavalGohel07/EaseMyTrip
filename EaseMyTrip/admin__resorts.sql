-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 07:37 AM
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
-- Table structure for table `admin__resorts`
--

CREATE TABLE `admin__resorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rname` varchar(255) NOT NULL,
  `rdays` varchar(255) NOT NULL,
  `rdesc` varchar(255) NOT NULL,
  `rprice` int(11) NOT NULL,
  `rfacilities` varchar(255) NOT NULL,
  `rimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin__resorts`
--

INSERT INTO `admin__resorts` (`id`, `rname`, `rdays`, `rdesc`, `rprice`, `rfacilities`, `rimage`, `created_at`, `updated_at`) VALUES
(4, 'Hotel North Villa', '2 Night', 'Located in Manāli, 7.9 km from Hidimba Devi Temple, Hotel North Villa provides accommodation with a garden, free private parking, a terrace and a restaurant.', 2599, 'Free WiFi, Room service, Fitness centre', 'northvilla.webp', '2024-03-28 00:46:27', '2024-03-28 00:46:27'),
(5, 'Dolkhar Resort', '3 Night', 'Situated in Leh, 3.7 km from Shanti Stupa, Dolkhar Resort features accommodation with a garden, free private parking, a terrace and a restaurant. Featuring a bar, the property is located within 1.5 km of Soma Gompa.', 2499, 'Room service, Spa and wellness centre, Bar, Breakfast', 'dholkar.webp', '2024-03-28 00:48:40', '2024-03-28 00:48:40'),
(7, 'Bakor', '2 Night', 'Major attraction for toutrist is Waterfall of Adadri river situated around 8kms from farm house in dense forest. Another major attraction for photographer is kaleshwari historical place, known for its’ architecture from 13th & 15th century.', 1299, 'Adventure Zone,All Meals, Swimming Pool,Trekking', 'bakor.jpg', '2024-03-28 00:53:26', '2024-03-28 00:53:26'),
(8, 'Palm Green', '2 Night`', 'Palm Green Club Resort Ahmedabad is a 3-star accommodation placed a 10-minute ride from Vikram Sarabhai Space Exhibition Museum.', 2199, 'Sports ,Swimming Pool, Restaurant, Indoor Games,Bonfire', 'palgreen.webp', '2024-03-28 00:56:24', '2024-03-28 00:56:24'),
(10, 'The Leela Gandhinagar', '1 Night', 'The Leela Gandhinagar This elegant hotel, India’s first-ever luxury hotel built over a railway station, is a true architectural novelty. It stands in the heart of Gandhinagar, Gujarat’s administrative capital on the banks of the Sabarmati river', 3199, 'Sport Club, Swimming Pool ,Bar, Bonfire, Theater', 'lilavati.jpg', '2024-03-28 01:03:50', '2024-03-28 01:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__resorts`
--
ALTER TABLE `admin__resorts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin__resorts`
--
ALTER TABLE `admin__resorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
