-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 04:47 PM
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
-- Database: `queens2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `count`) VALUES
(3, 13, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `titles` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `image` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `titles`, `description`, `price`, `image`) VALUES
(1, 'Timeless Elegance', 'A Classic Companion for Every Occasion', 'Indulge in the allure of timelessness with  watches made in Oystersteel, white gold, and  other exquisite materials. These timepieces  exude a perfect balance of sophistication and  durability, embodying the essence of timeless  elegance in every detail', 55000, 0x75706c6f6164732f6974656d31486f6d652e6a7067),
(2, 'Golden Aurora', 'Illuminate Your Wrist with Golden Radiance', 'The Golden Aurora Watch is a luxurious timepiece crafted with rose gold and adorned with sparkling diamonds. Its exquisite design exudes elegance and sophistication, making it a stunning accessory for any occasion. With its precision movement and intricate detailing, this watch not only keeps time impeccably but also adds a touch of opulence to your style.', 89000, 0x75706c6f6164732f4974656d32486f6d652e6a7067),
(3, 'Luxe Horizon', 'Radiate Glamour with Every Tick ', 'The Luxe Horizon watch is a sleek timepiece featuring a glossy black finish that exudes sophistication. Enhanced with innovative features like a dual-time zone display and a scratch-resistant sapphire crystal, this watch seamlessly blends style and functionality. Elevate your look with this modern accessory that combines elegance with practicality.', 68000, 0x75706c6f6164732f4974656d33486f6d652e6a7067),
(4, 'Serenity Sky', 'Embrace Tranquility in Style', 'The Serenity Sky watch is a regal timepiece designed in a royal golden hue with hints of brown, exuding a sense of opulence and warmth. This luxurious watch boasts unique features like a moon phase complication and a genuine leather strap, combining timeless elegance with modern functionality for a truly exquisite accessory.', 76000, 0x75706c6f6164732f4974656d35486f6d652e6a7067),
(5, 'Opulent Odayssey', 'Embark on a Journey with Every and Precision', 'The Opulent Odyssey watch shines in a stunning silver color, radiating a sense of sophistication and modernity. Featuring a date complication and innovative details like a luminous dial for easy reading in the dark, this timepiece blends style with practicality, making it a standout accessory for any occasion.', 80000, 0x75706c6f6164732f4974656d36486f6d652e6a7067),
(6, 'Celestial Splendor', 'Adorn Your Wrist with Stellar Beauty', 'The Celestial Splendor watch combines elegance with functionality, boasting water resistance and dazzling diamonds. With unique features like a rotating bezel for tracking elapsed time and a mother-of-pearl dial for a touch of luxury, this timepiece is a true masterpiece that elevates your style effortlessly.', 55000, 0x75706c6f6164732f4974656d37486f6d652e6a7067),
(7, 'Midnight Majesty', 'Unveil the Majesty of Midnight', 'Midnight Majesty watch shines in a beautiful black color, displaying both date and month. Enhance it with extra features like a chronograph function for precise timekeeping and a moon phase complication for a touch of celestial elegance. This timepiece will truly captivate with its blend of style and sophistication.', 67000, 0x75706c6f6164732f4974656d36486f6d652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `count` int(11) NOT NULL DEFAULT 1,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `productid`, `date`, `count`, `price`) VALUES
(0, 6, 1, '2024-09-25 16:35:30', 1, 55000),
(0, 6, 1, '2024-09-25 16:35:42', 1, 55000),
(0, 6, 6, '2024-09-25 16:39:57', 1, 55000),
(0, 9, 7, '2024-09-25 16:41:15', 1, 67000),
(0, 6, 5, '2024-09-25 16:47:56', 1, 80000),
(0, 6, 5, '2024-09-25 19:56:54', 1, 80000),
(0, 5, 1, '2024-09-25 20:12:27', 6, 330000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `address`, `contact`, `role`) VALUES
(5, 'asha', 'yasuru', 'ashasubashini@gmail.com', '$2y$10$pPOh93N9ZTomSg.Jr.bjg.Ni9gkDavEXIWwccr40ukcxkY4yE5lHS', '', 0, 'admin'),
(6, 'dilanka', 'yasuru', 'dilankayasuru@gamil.com', '$2y$10$YBSWK5Ap8YA3T2gvqkRxtOGViGpgdynGR67X6MPTQwLjky0G5fcEu', '', 0, ''),
(9, 'alex', 'chamara', 'alexchamara@gmail.com', '$2y$10$9rSomeY6R9aXsWyxGdajXuZwZ5XT.rxxWoyeqgQxATPTBL24DP7ES', '', 0, ''),
(11, 'cart', 'test', 'testcart@gmail.com', '$2y$10$NZjnNAxpfVxu7iQy67DhOu9LC31ttG15ORcokBPvjsWJA2JCh/D1m', '', 0, ''),
(13, 'shalika', 'harshamali', 'shalika2000@gmail.com', '$2y$10$Nfr45hqQni3jTS0Pkg1rYuYgnceN0labIu7BsEUU8iAdolks6WwAC', '', 0, ''),
(15, 'chathushi', 'mallawa', 'chathu@gmail.com', '$2y$10$8qOAU62gdSGWgY2gNiOVw.Pqr.w134a9/d3u4O3E4GA2ABM8gYTsK', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id_fk` (`product_id`),
  ADD KEY `user_id_cart` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key for userid` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_cart` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `foreign key for userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
