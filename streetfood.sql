-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2026 at 05:10 PM
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
-- Database: `streetfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Aloo Chaat', 60, 'assets/images/Aloo chaat.png', 'Delicious spicy aloo chaat'),
(2, 'Bhel Puri', 50, 'assets/images/Bhel puri.png', 'Mumbai street style bhel puri'),
(3, 'Burger', 90, 'assets/images/Burger.png', 'Crispy street style burger'),
(4, 'Butter Naan', 40, 'assets/images/Butter Naan.png', 'Soft butter naan'),
(5, 'Chicken Biryani', 180, 'assets/images/Chicken Biryani.png', 'Hyderabadi chicken biryani'),
(6, 'Chicken Roll', 120, 'assets/images/chicken roll.png', 'Spicy chicken roll'),
(7, 'Chowmein', 100, 'assets/images/chowmein.png', 'Street style chowmein'),
(8, 'Cold Drink', 40, 'assets/images/Colddrink.png', 'Refreshing cold drink'),
(9, 'Dabeli', 70, 'assets/images/dabeli.png', 'Gujarati famous dabeli'),
(10, 'Dahi Puri', 60, 'assets/images/Dahi puri.png', 'Crispy dahi puri'),
(11, 'Dal Tadka', 120, 'assets/images/Dal Tadka.png', 'Punjabi dal tadka'),
(12, 'Dosa', 80, 'assets/images/Dosa.png', 'South Indian dosa'),
(13, 'Egg Roll', 90, 'assets/images/egg roll.png', 'Street egg roll'),
(14, 'Falooda', 110, 'assets/images/Falooda.png', 'Sweet falooda dessert'),
(15, 'Franky', 90, 'assets/images/franky.png', 'Tasty street franky'),
(16, 'Gulab Jamun', 70, 'assets/images/Gulab Jamun.png', 'Sweet gulab jamun'),
(17, 'Idli', 60, 'assets/images/idli.png', 'Soft south indian idli'),
(18, 'Kachori', 50, 'assets/images/Kachori.png', 'Rajasthani kachori'),
(19, 'Lassi', 70, 'assets/images/Lassi.png', 'Punjabi sweet lassi'),
(20, 'Manchurian', 120, 'assets/images/manchurian.png', 'Chinese manchurian'),
(21, 'Misal Pav', 90, 'assets/images/Misal Pav.png', 'Spicy misal pav'),
(22, 'Momos', 100, 'assets/images/momos.png', 'Hot steamed momos'),
(23, 'Pakora', 70, 'assets/images/pakora.png', 'Crispy pakoras'),
(24, 'Paneer Masala', 150, 'assets/images/Paneer masala.png', 'Paneer masala gravy'),
(25, 'Pani Puri', 50, 'assets/images/pani_puri.png', ' pani puri'),
(26, 'Pav Bhaji', 90, 'assets/images/pav_bhaji.png', 'Mumbai pav bhaji'),
(27, 'Pizza', 150, 'assets/images/Pizza.png', 'Cheesy pizza'),
(28, 'Poha', 50, 'assets/images/Poha.png', 'Breakfast poha'),
(29, 'Puran Poli', 80, 'assets/images/Puran Poli.png', 'Sweet puran poli'),
(30, 'Rajma Chawal', 120, 'assets/images/Rajma chawal.png', 'North indian rajma'),
(31, 'Rasgulla', 80, 'assets/images/Rasgulla.png', 'Sweet rasgulla'),
(32, 'Samosa', 30, 'assets/images/Samosa.png', 'Hot crispy samosa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `food_ids` text DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `food_ids`, `name`, `phone`, `address`, `payment`, `total`, `order_date`, `status`) VALUES
(1, '2,', 'hitesh patil', '02341567890', 'cggg', 'Card', 50, '2026-03-13 09:08:06', 'Pending'),
(2, '2,', 'hitesh patil', '02341567890', 'chopda', 'qr', 50, '2026-03-13 16:50:34', 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'hitesh patil', 'test@gmail.com', '123', '02341567890', 'cggg'),
(2, 'hitesh patil', 'test@gmail.com', '123', '02341567890', 'cggg'),
(3, 'hitesh patil', 'test@gmail.com', '123', '02341567890', 'cggg'),
(4, 'harsh', 'harsh@gmail.com', '123', '09809786754', 'gfgf'),
(5, 'swapnil', 'swapnilgp2004@gmail.com', '123', '9012346578', 'chopda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
