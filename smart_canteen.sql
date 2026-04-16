-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2026 at 02:01 PM
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
-- Database: `smart_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `food_name` varchar(100) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `food_name`, `rating`, `comment`, `created_at`) VALUES
(1, 13, 'dosa', 5, 'amazing', '2026-02-14 14:36:12'),
(2, 13, 'pastry', 4, 'The pastry was absolutely divine! 🥐 The flaky crust melted in my mouth, and the filling had just the right balance of sweet and tangy. Loved the hint of vanilla! 😋 Would definitely order again!', '2026-02-15 17:30:10'),
(3, 13, 'sev puri', 3, 'Sev puri got an average rating from you 😕! Might be worth trying a different vendor or tweaking the toppings next time 🤔. Maybe it needed a bit more crunch or a dash of extra spice? What didn\'t quite hit the spot? 🍴', '2026-02-15 17:31:13'),
(4, 18, 'vada pav', 5, 'very tasty, good quality ', '2026-04-11 14:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`item_id`, `name`, `price`, `category`, `availability`, `image`) VALUES
(1, 'samosa', 20, 'snacks', 1, 'imges/samosa.jpg'),
(3, 'vadapav', 20, 'snacks', 1, 'imges/vadapav.png'),
(6, 'Veg Sandwich', 40, 'lunch', 1, 'imges/sandwich.jpg'),
(7, 'cold coffee', 30, 'beverages', 1, 'imges/coffe.jpg'),
(8, 'poha', 25, 'breakfast', 1, 'imges/poha.jpg'),
(9, 'Aloo Paratha', 40, 'breakfast', 1, 'imges/Aloo Paratha.jpg'),
(10, 'dosa', 40, 'breakfast', 1, 'imges/dosa.jpg'),
(11, 'itli', 30, 'breakfast', 1, 'imges/itli.jpg'),
(12, 'Tea(chai)', 10, 'breakfast', 1, 'imges/chai.jpg'),
(13, 'sev puri', 35, 'snacks', 1, 'imges/sev puri.jpg'),
(14, 'burger', 100, 'lunch', 1, 'imges/burger.jpg'),
(16, 'Pastry', 80, 'dessert', 1, 'imges/pastry.png'),
(19, 'Pastry', 80, 'dessert', 0, 'Pastry.png'),
(20, 'Chocolate Puff', 20, 'dessert', 1, 'imges/ChocolatePuff.jpg'),
(21, 'Tacos', 80, 'lunch', 1, 'imges/tacos.png'),
(22, 'French Fries', 50, 'Snacks', 1, 'imges/french.jpg'),
(23, 'Fluffy French Toas', 100, 'breakfast', 1, 'imges/fluffyfrenchtoas.jpg'),
(24, 'Dhokla', 30, 'breakfast', 1, 'imges/dhokla.jpg'),
(25, 'Medu vada', 35, 'breakfast', 1, 'imges/medu vada.jpg'),
(26, 'Bhel', 25, 'snacks', 1, 'imges/bhel.jpg'),
(27, 'Chinese Bhel', 15, 'snacks', 1, 'imges/chinese bhel.jpg'),
(28, 'Misal Pav', 45, 'snacks', 1, 'imges/misal.jpg'),
(29, 'Frankie', 35, 'snacks', 1, 'imges/frankie.jpg'),
(30, 'Misal Pav', 45, 'lunch', 1, 'imges/misal.jpg'),
(31, 'Veg Noodles', 90, 'lunch', 1, 'imges/noodles.jpg'),
(32, 'Schezwan Fried Rice', 100, 'lunch', 1, 'imges/Schezwan Fried Rice.jpg'),
(33, 'Pav Bhaji', 80, 'lunch', 1, 'imges/pav bhaji.jpg'),
(34, 'Tea(chai)', 10, 'beverages', 1, 'imges/chai.jpg'),
(36, 'All Juice', 40, 'beverages', 1, 'imges/juice.jpg'),
(37, 'Lassi', 30, 'beverages', 1, 'imges/lassi.jpg\r\n'),
(38, 'All Type of Cans', 80, 'beverages', 1, 'imges/cans.jpg'),
(39, 'Normal Coffee', 20, 'beverages', 1, 'imges/coffeee.jpg'),
(40, 'Chocolate Brownie', 60, 'dessert', 1, 'imges/brownie.jpg'),
(41, 'Donut', 50, 'dessert', 1, 'imges/Donut.png'),
(42, 'Ice Cream', 30, 'dessert', 1, 'imges/icecream.jpg'),
(43, 'Cheese Pastry', 75, 'dessert', 1, 'imges/cheese cake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `token_number` varchar(10) DEFAULT NULL,
  `status` enum('pending','preparing','ready','completed','cancelled') DEFAULT 'pending',
  `timestamp` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `item_id`, `token_number`, `status`, `timestamp`, `created_at`) VALUES
(21, 3, 11, 'T5082', 'preparing', '2026-01-18 15:52:39', '2026-01-18 15:52:39'),
(22, 3, 7, 'T9814', 'cancelled', '2026-01-18 15:59:50', '2026-01-18 15:59:50'),
(23, 3, 10, 'T4558', 'cancelled', '2026-01-18 16:08:22', '2026-01-18 16:08:22'),
(24, 3, 6, 'T8558', 'ready', '2026-01-18 17:46:58', '2026-01-18 17:46:58'),
(25, 3, 12, 'T4297', 'cancelled', '2026-01-18 19:12:51', '2026-01-18 19:12:51'),
(26, 3, 3, 'T3719', 'ready', '2026-01-20 20:04:16', '2026-01-20 20:04:16'),
(27, 3, 1, 'T9726', 'cancelled', '2026-01-23 20:51:11', '2026-01-23 20:51:11'),
(28, 3, 1, 'T5508', 'cancelled', '2026-01-24 21:10:19', '2026-01-24 21:10:19'),
(29, 3, 10, 'T7897', 'ready', '2026-01-27 20:41:17', '2026-01-27 20:41:17'),
(30, 13, 10, 'T9036', 'pending', '2026-02-14 18:59:46', '2026-02-14 18:59:46'),
(31, 13, 16, 'T7165', 'preparing', '2026-02-15 15:14:31', '2026-02-15 15:14:31'),
(32, 13, 1, 'T1334', 'pending', '2026-02-16 21:06:41', '2026-02-16 21:06:41'),
(33, 13, 6, 'T2500', 'ready', '2026-02-19 19:43:31', '2026-02-19 19:43:31'),
(34, 13, 10, 'T9084', 'cancelled', '2026-03-05 15:22:37', '2026-03-05 15:22:37'),
(35, 13, 22, 'T4776', 'cancelled', '2026-03-05 20:30:47', '2026-03-05 20:30:47'),
(36, 16, 43, 'T8954', 'pending', '2026-03-06 07:23:04', '2026-03-06 07:23:04'),
(37, 16, 24, 'T7548', 'preparing', '2026-03-06 07:23:21', '2026-03-06 07:23:21'),
(38, 13, 1, 'T4670', 'preparing', '2026-03-06 12:04:11', '2026-03-06 12:04:11'),
(39, 18, 6, 'T6907', 'ready', '2026-04-11 19:36:15', '2026-04-11 19:36:15'),
(40, 18, 3, 'T5682', 'ready', '2026-04-11 19:36:36', '2026-04-11 19:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('student','staff','admin') DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`) VALUES
(3, 'darshna', 'darshna@gmail.com', '123', 'student'),
(4, 'jayesh', 'jayeshchitroda@gmail.com', '111', 'student'),
(5, 'maya', 'maya@gmail.com', '16', 'student'),
(6, 'jayeshhhh', 'jayeshchitroda77@gmail.com', '00000', 'student'),
(8, 'neha', 'neha@gmail.com', '', 'student'),
(9, 'janviii', 'janvi12@gmail.com', 'JNAVI!@#', 'student'),
(11, 'admin', 'admin@gmail.com', '$2y$10$UWWNhc5bIRxPaM9/Kz2RKOtgnRyUHVaKJGGF/zbZsVi1Pq1nPS.yS', 'admin'),
(13, 'aruna', 'aruna@gmail.com', '$2y$10$VC77MSJ5yVO2hWSacLd17ujRarYZp.lgMbNhOWaw8bzALXmAApEg2', 'student'),
(14, 'ayush', 'ayush@gmail.com', '$2y$10$Xxs5epzLf2p5SNJXI5Dn.ObfsuFFaucJmOm6NZdi/7mGl9c.ISj1i', 'student'),
(15, 'dilip', 'dilip@gmail.com', '$2y$10$aceUW38MOosEn.4xPl4v.OY9fGSLEw6vLQYeKtqf6ap9AR0.3zb6C', 'student'),
(16, 'meet', 'meet@gmail.com', '$2y$10$V4ZjNiBf5kbB33fSYDsuneDEt3h7.NPWt7n75fLFT1s.aWxRWzy6C', 'student'),
(18, 'Siddhi Chitroda', 'siddhi@gmail.com', '$2y$10$4MHTL.T0Gy3ypP5IEPFLAubqOcRRbsryYsBBpbsNJB8det3Wx8SyG', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu_items` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
