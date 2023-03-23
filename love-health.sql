-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2023 at 08:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `love-health`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_infos`
--

CREATE TABLE `daily_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสผู้ใช้',
  `food_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสอาหาร',
  `posture_id` bigint UNSIGNED NOT NULL COMMENT 'รหัสท่าออกกำลังกาย',
  `time_exercising` int NOT NULL COMMENT 'เวลาที่ใช้ออกกำลังกาย (นาที)',
  `emotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'อารมณ์ความรู้สึก',
  `weight` int NOT NULL COMMENT 'น้ำหนัก',
  `height` int NOT NULL COMMENT 'ส่วนสูง',
  `age` int NOT NULL COMMENT 'อายุ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_infos`
--

INSERT INTO `daily_infos` (`id`, `user_id`, `food_id`, `posture_id`, `time_exercising`, `emotion`, `weight`, `height`, `age`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 15, 'good', 75, 170, 24, '2023-03-23 20:29:19', '2023-03-23 20:29:19'),
(2, 1, 3, 4, 15, 'poor', 75, 170, 24, '2023-03-23 20:29:35', '2023-03-23 20:29:35'),
(3, 1, 3, 4, 15, 'poor', 110, 170, 24, '2023-03-23 20:29:39', '2023-03-23 20:29:39'),
(4, 1, 3, 4, 15, 'poor', 143, 170, 24, '2023-03-23 20:29:45', '2023-03-23 20:29:45'),
(5, 1, 14, 4, 15, 'poor', 58, 170, 24, '2023-03-23 20:30:55', '2023-03-23 20:30:55'),
(6, 1, 2, 9, 120, 'good', 51, 170, 23, '2023-03-23 20:33:00', '2023-03-23 20:33:00'),
(7, 1, 2, 9, 10, 'good', 51, 170, 23, '2023-03-23 20:33:06', '2023-03-23 20:33:06'),
(8, 1, 2, 9, 10, 'good', 51, 170, 23, '2023-03-23 20:33:10', '2023-03-23 20:33:10'),
(9, 1, 2, 9, 10, 'good', 51, 170, 23, '2023-03-23 20:33:12', '2023-03-23 20:33:12'),
(10, 1, 2, 9, 30, 'good', 51, 170, 23, '2023-03-23 20:33:16', '2023-03-23 20:33:16'),
(11, 1, 2, 9, 120, 'good', 51, 170, 23, '2023-03-23 20:33:19', '2023-03-23 20:33:19'),
(12, 1, 2, 9, 120, 'good', 51, 170, 23, '2023-03-23 20:33:24', '2023-03-23 20:33:24'),
(13, 1, 2, 9, 120, 'poor', 51, 170, 23, '2023-03-23 20:33:27', '2023-03-23 20:33:27'),
(14, 1, 2, 9, 120, 'good', 51, 170, 23, '2023-03-23 20:33:32', '2023-03-23 20:33:32'),
(15, 1, 2, 9, 120, 'poor', 51, 170, 23, '2023-03-23 20:33:35', '2023-03-23 20:33:35'),
(16, 1, 2, 9, 120, 'good', 35, 170, 23, '2023-03-23 20:33:40', '2023-03-23 20:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_postures`
--

CREATE TABLE `exercise_postures` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อท่าออกกำลังกาย',
  `calorie` double(7,2) NOT NULL COMMENT '1 ชม.ลดกี่แคลอรี่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercise_postures`
--

INSERT INTO `exercise_postures` (`id`, `name`, `calorie`) VALUES
(1, 'ปั่นจักรงาน', 500.00),
(2, 'เต้นแอโรบิก', 500.00),
(3, 'กายบริหาร', 220.00),
(4, 'โยคะ', 600.00),
(5, 'วิ่งจ๊อกกิ้ง', 800.00),
(6, 'กระโดดเชือก', 780.00),
(7, 'ว่ายน้ำ', 750.00),
(8, 'เล่นฮูล่าฮูป', 430.00),
(9, 'นั่งเฉยๆ', 14.00);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่ออาหาร',
  `calorie` double(7,2) NOT NULL COMMENT 'แคลอรี่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `calorie`) VALUES
(1, 'ข้าวเจียว', 445.00),
(2, 'กระเพราหมูสับ', 231.10),
(3, 'ข้าวขาหมู', 690.00),
(4, 'ข้าวยำไก่', 640.00),
(5, 'ข้าวต้มปลา', 220.00),
(6, 'ข้าวผัด', 163.00),
(7, 'ข้าวหมูทอด', 193.00),
(8, 'ข้าวเหนี่ยวหมูปิ้ง', 319.00),
(9, 'ข้าวผัดไข่', 350.00),
(10, 'ก๋วยเตี๋ยวต้มยำ', 310.00),
(11, 'ก๋วยจั่บ', 240.00),
(12, 'น้ำพริกปลาทู', 77.30),
(13, 'ผัดซีอิ้วหมู', 730.40),
(14, 'ข้าวไก่กระเทียม', 360.00),
(15, 'ข้าวหน้าหมูกระเทียม', 550.00),
(16, 'ข้าวไข่ข้น', 445.00);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2023_03_23_162431_create_food_table', 1),
(7, '2023_03_23_162458_create_exercise_postures_table', 1),
(8, '2023_03_23_170203_create_daily_infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'เบอร์โทร',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รหัสผ่าน',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `gender` enum('man','woman') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'เพศ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `password`, `name`, `gender`, `created_at`, `updated_at`) VALUES
(1, '0644185934', '$2y$10$0gLaDY.AkjklurxbxfDEL.Nb2QHWPh8l9abS.Iew2.EHN5/BZN0Ru', 'adsda', 'man', '2023-03-23 20:16:25', '2023-03-23 20:16:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_infos`
--
ALTER TABLE `daily_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_infos_user_id_foreign` (`user_id`),
  ADD KEY `daily_infos_food_id_foreign` (`food_id`),
  ADD KEY `daily_infos_posture_id_foreign` (`posture_id`);

--
-- Indexes for table `exercise_postures`
--
ALTER TABLE `exercise_postures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_infos`
--
ALTER TABLE `daily_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exercise_postures`
--
ALTER TABLE `exercise_postures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_infos`
--
ALTER TABLE `daily_infos`
  ADD CONSTRAINT `daily_infos_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_infos_posture_id_foreign` FOREIGN KEY (`posture_id`) REFERENCES `exercise_postures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
