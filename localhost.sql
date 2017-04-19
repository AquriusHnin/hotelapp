-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 09:29 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `barservice`
--

CREATE TABLE `barservice` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(3,2) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barservice`
--

INSERT INTO `barservice` (`id`, `name`, `price`, `image`) VALUES
(1, 'soda', 2.50, 'food/soda.jpg'),
(2, 'juice', 1.50, 'food/juice.jpg'),
(3, 'beer', 2.50, 'food/beer.jpg'),
(4, 'spy', 1.50, 'food/spy.jpg'),
(5, 'wine', 7.50, 'food/wine.jpg'),
(6, 'flamingvodka', 4.50, 'food/flamevodka.jpg'),
(7, 'chickendrill', 2.00, 'food/chickendrill.jpg'),
(8, 'chilli dog', 2.00, 'food/chillidog.jpg'),
(9, 'fingerfried', 1.00, 'food/fingerfried.jpg'),
(10, 'friedrice', 2.50, 'food/friedrice.jpg'),
(11, 'hotdog', 1.00, 'food/hotdog.jpg'),
(12, 'steaksandwitch', 1.50, 'food/steaksandwitch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `roomtypes_id` int(10) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `booking_id`, `roomtypes_id`, `booking_date`) VALUES
(3, 14, 0, '2017-03-25'),
(4, 14, 0, '2017-03-26'),
(5, 15, 0, '2017-03-25'),
(6, 15, 0, '2017-03-26'),
(7, 15, 0, '2017-03-27'),
(8, 16, 0, '2017-03-28'),
(9, 16, 0, '2017-03-29'),
(10, 17, 1, '2017-04-09'),
(11, 17, 1, '2017-04-10'),
(12, 17, 1, '2017-04-11'),
(13, 17, 1, '2017-04-12'),
(14, 17, 1, '2017-04-13'),
(15, 18, 1, '2017-04-09'),
(16, 18, 1, '2017-04-10'),
(17, 18, 1, '2017-04-11'),
(18, 18, 1, '2017-04-12'),
(19, 18, 1, '2017-04-13'),
(20, 19, 1, '2017-04-09'),
(21, 19, 1, '2017-04-10'),
(22, 19, 1, '2017-04-11'),
(23, 19, 1, '2017-04-12'),
(24, 19, 1, '2017-04-13'),
(25, 20, 1, '2017-04-09'),
(26, 20, 1, '2017-04-10'),
(27, 20, 1, '2017-04-11'),
(28, 20, 1, '2017-04-12'),
(29, 20, 1, '2017-04-13'),
(30, 21, 1, '2017-04-09'),
(31, 21, 1, '2017-04-10'),
(32, 21, 1, '2017-04-11'),
(33, 21, 1, '2017-04-12'),
(34, 21, 1, '2017-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `no_days` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `roomtype_id`, `room_id`, `no_days`, `status`, `check_in`, `check_out`) VALUES
(1, 1, 1, 3, 1, 1, '2017-03-22', '2017-03-28'),
(2, 2, 1, 4, 2, 1, '2017-03-22', '2017-03-24'),
(3, 1, 1, 5, 2, 1, '2017-03-21', '2017-03-23'),
(4, 1, 1, 8, 1, 1, '2017-03-21', '2017-03-22'),
(6, 1, 1, 6, 3, 1, '2017-03-29', '2017-03-31'),
(14, 98, 1, 4, 1, 1, '2017-03-25', '2017-03-27'),
(15, 99, 1, 3, 1, 1, '2017-03-25', '2017-03-28'),
(16, 100, 1, 4, 1, 1, '2017-03-28', '2017-03-30'),
(17, 99, 1, 3, 1, 1, '2017-04-09', '2017-04-14'),
(18, 99, 1, 4, 1, 1, '2017-04-09', '2017-04-14'),
(19, 101, 1, 5, 1, 1, '2017-04-09', '2017-04-14'),
(20, 101, 1, 6, 1, 1, '2017-04-09', '2017-04-14'),
(21, 101, 1, 8, 1, 1, '2017-04-09', '2017-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2017_03_03_182246_create_roomtypes_table', 2),
(12, '2017_03_03_182259_create_rooms_table', 2),
(16, '2017_03_15_062123_aspect_setup_tables', 3),
(17, '2017_03_15_062709_create_bookings_table', 4),
(18, '2017_03_22_105944_create_bookingdetails_table', 5),
(19, '2017_04_07_095324_barservice', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2017-03-15 17:30:00', '2017-03-16 17:30:00'),
(2, 'customer', '2017-02-28 17:30:00', '2017-02-28 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `roomtypes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `roomtypes_id`) VALUES
(3, 'R-1', 1),
(4, 'R-2', 1),
(5, 'R-3', 1),
(6, 'R-4', 1),
(8, 'R-5', 1),
(9, 'R-6', 2),
(10, 'R-7', 2),
(11, 'R-8', 2),
(12, 'R-9', 2),
(13, 'R-10', 2),
(14, 'R-11', 2),
(15, 'R-12', 2),
(16, 'R-13', 2),
(17, 'R-14', 2),
(18, 'R-15', 2),
(19, 'R-16', 3),
(20, 'R-17', 3),
(21, 'R-18', 3),
(22, 'R-19', 4),
(23, 'R-20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bed_no` int(10) NOT NULL,
  `count` int(11) NOT NULL,
  `price` double(10,3) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `name`, `features`, `bed_no`, `count`, `price`, `image`) VALUES
(1, 'Single', 'Rooms measuring 15 m² equipped with all the details expected of a superior 4 star hotel. Services: Wake up call service, Customer service, Laundry service and express laundry, Concierge service, Pillow menu.', 1, 5, 30.000, 'img/frontendrooms/single.jpg'),
(2, 'Double', 'Modern and functional rooms measuring approximately 20-25 m² equipped with all the details expected of the hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres ideal for sports teams.', 2, 10, 50.000, 'img/frontendrooms/double.jpg'),
(3, 'Superior', 'Spacious rooms with exquisite decor, measuring approximately 25-30 m² and equipped with all the details expected of the hotel hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres.', 2, 3, 100.000, 'img/frontendrooms/superior.jpg'),
(4, 'Luxury', 'Spacious rooms with exquisite decor measuring approximately 25-30 m² and equipped with all the details expected of a superior 4 star Hotel. The rooms have a king or queen size bed or two single beds, and views of the streets.', 2, 2, 200.000, 'img/frontendrooms/luxury.jpg'),
(5, 'fhsh', 'fshshf', 2, 2, 222.000, '/tmp/phpsY9GXy'),
(6, 'fhsh', 'fshshf', 2, 2, 222.000, '/tmp/phpvuD9PC'),
(7, 'hdjafhkja', 'dakjalfkjdalfdj', 2, 2, 22.000, '/tmp/php62O75e'),
(8, 'dagdgj  kdj', 'daklakgdklagdj', 2, 2, 23.000, 'yyyyyyyyyyyy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hnin', 1, 'hnin@gmail.com', '$2y$10$k00JEGhx/LPUmSNsLLEwweDVVHj3AQQNbSoKJZoGhZsMiDuCVI5nC', 'aMcMrrLT0W6tjmjD6PvLja89m0h6voum35UT7xlJB85mbdiDoyPhIX5KZsZQ', '2017-03-03 11:51:17', '2017-04-06 01:54:47'),
(2, 'hein', 2, 'hein@gmail.com', '$2y$10$7keCsoPrqP6bq.tQcjpALOzi1a84MkojzdsTalPqFiJdCRJ6A0F.e', NULL, '2017-03-15 01:46:56', '2017-03-15 01:46:56'),
(98, 'ass', 2, 'ass@gmail.com', '', NULL, '2017-03-24 15:51:51', '2017-03-24 15:51:51'),
(99, 'su', 2, 'su@gmail.com', '', NULL, '2017-03-24 20:23:39', '2017-03-24 20:23:39'),
(100, 'tun', 2, 'tun@gmail.com', '', NULL, '2017-03-24 20:31:08', '2017-03-24 20:31:08'),
(101, 'kyaw', 2, 'kyaw@gmail.com', '', NULL, '2017-04-09 06:48:47', '2017-04-09 06:48:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barservice`
--
ALTER TABLE `barservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barservice`
--
ALTER TABLE `barservice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
