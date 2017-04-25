-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2017 at 05:45 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sava-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `completed` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `completed`) VALUES
(1, 'Pizza', 1),
(2, 'Palacinke', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `completed` int(1) DEFAULT NULL,
  `category_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `completed`, `category_id`) VALUES
(1, 'Kapricoza', 500, 1, 1),
(2, 'Palacinke Evrokrem', 450, NULL, 2),
(3, 'Meksikana', 500, 1, 1),
(4, 'Cheezburger Pizza', 600, NULL, 1),
(5, 'Ljutizza', 880, NULL, 1),
(6, 'New York', 880, NULL, 1),
(7, 'Pepperoni', 880, NULL, 1),
(8, 'Tuna', 770, 1, 1),
(9, 'Carbonara', 880, NULL, 1),
(10, 'Margherita', 880, NULL, 1),
(11, 'Palacinka Dzem', 500, 1, 2),
(12, 'Palacinka Keks Kokos Evrokrem', 700, NULL, 2),
(13, 'Slana Palacinka Kulen', 700, NULL, 2),
(14, 'Slana Palacinka Pecenica', 700, NULL, 2),
(15, 'Slana Palacinka Pecurke Suvi Vrat', 800, 1, 2),
(16, 'Prazna Palacinka', 100, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `completed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `profesion`, `phone`, `completed`) VALUES
(1, 'Strahinja Kurtisi', 'Manager', '0648512697', 0),
(3, 'Milos Tadic', 'Head Waiter', '0674125895', 1),
(4, 'Aljosa Dragunov', 'Shift Organizer ', '0684751238', 0),
(5, 'Minda Nugget', 'Waitress', '0654712358', 1),
(6, 'Dragana Kreca', 'Pizza Master', '0684297265', NULL),
(7, 'Vesna Marceta', 'Cashier', '0678945321', NULL),
(8, 'Rudi Aj', 'Delivery', '0684126487', NULL),
(9, 'Sava Bezanovic', 'Overlord', '0691847057', NULL),
(10, 'Radovan Marceta', 'Degustator', '0698754215', 1),
(11, 'Marko Peric', 'Interior Designer', '0698745213', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
