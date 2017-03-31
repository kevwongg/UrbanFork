-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2017 at 10:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanfork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `country`) VALUES
(1, 'test', 'test@test.com', 'password', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `admin_manages_restaurant`
--

CREATE TABLE `admin_manages_restaurant` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `browses`
--

CREATE TABLE `browses` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browses`
--

INSERT INTO `browses` (`id`, `location`, `rname`) VALUES
(4, '1st Avenue', 'New Spaghetti Factory'),
(4, '2nd Avenue', 'Escargot'),
(4, '3rd Avenue', 'South Garden'),
(4, '4th Avenue', 'K-town BBQ'),
(4, '5th Avenue', 'Sushi land'),
(4, '6th Avenue', 'Kimbap World'),
(4, '7th Avenue', 'The Old Haus'),
(4, '8th Avenue', 'La Trattoria'),
(4, '9th Avenue', 'Seoul House'),
(4, 'Vancouver', 'Pizza Locale'),
(4, 'Vancouver UBC', 'Pizza Hut'),
(5, 'Vancouver', 'Pizza Locale');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `dishid` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`dishid`, `location`, `rname`, `type`) VALUES
(11111, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(11111, 'Vancouver', 'Pizza Locale', 'Dinner'),
(11111, 'Vancouver', 'Pizza Locale', 'Lunch'),
(12612, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(12612, 'Vancouver', 'Pizza Locale', 'Dinner'),
(22222, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(22222, 'Vancouver', 'Pizza Locale', 'Dinner'),
(22222, 'Vancouver', 'Pizza Locale', 'Lunch'),
(22873, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(33333, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(33333, 'Vancouver', 'Pizza Locale', 'Dinner'),
(33333, 'Vancouver', 'Pizza Locale', 'Lunch'),
(34623, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(44444, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(44444, 'Vancouver', 'Pizza Locale', 'Dinner'),
(44444, 'Vancouver', 'Pizza Locale', 'Lunch'),
(55555, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(55555, 'Vancouver', 'Pizza Locale', 'Dinner'),
(55555, 'Vancouver', 'Pizza Locale', 'Lunch');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dishid` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dishid`, `dname`, `description`, `price`) VALUES
(11111, 'Spaghetti', 'Spaghetti with tomato sauce and meatballs', 13.99),
(12612, 'Hamburger', 'It\'s really good', 7.99),
(22222, 'Pancake', 'Two pancakes with syrup of your choice', 6.99),
(22873, 'Miso Ramen', 'Miso ramen', 9.99),
(33333, 'Steak', 'Beef steak cooked to your choice', 21.99),
(34623, 'Chicken Sandwich', 'It\'s good', 4.99),
(44444, 'BBQ Chicken Pizza', 'Pizza with BBQ Chicken and sauce', 11.99),
(55555, 'Mushroom Soup', 'Creamy soup with mushrooms', 5.99),
(98712, 'Kimbap', '8 rolls', 3.99);

-- --------------------------------------------------------

--
-- Table structure for table `listoffavourites`
--

CREATE TABLE `listoffavourites` (
  `id` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `listname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listoffavourites`
--

INSERT INTO `listoffavourites` (`id`, `listid`, `listname`) VALUES
(0, 21291, 'List1'),
(0, 2358921, 'My favourite sushi places'),
(0, 3452346, 'Best Chinese Restaurants'),
(0, 6762321, 'Breakfast Restaurants'),
(0, 9628330, 'Pizza is the best'),
(4, 9628337, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `loggedinuser`
--

CREATE TABLE `loggedinuser` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loggedinuser`
--

INSERT INTO `loggedinuser` (`id`, `name`, `email`, `password`, `country`, `username`) VALUES
(4, 'Tai Lopez', 'tai@gmail.com', 'test', 'Canada', 'tailopez'),
(5, 'Kevin Wong', 'kevinw@test.com', 'password', 'Canada', 'kevinw');

-- --------------------------------------------------------

--
-- Table structure for table `maintains`
--

CREATE TABLE `maintains` (
  `listid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `type` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`type`, `location`, `rname`) VALUES
('Breakfast', 'Vancouver', 'Pizza Locale'),
('Brunch', 'Vancouver', 'Pizza Locale'),
('Dinner', 'Vancouver', 'Pizza Locale'),
('Lunch', 'Vancouver', 'Pizza Locale'),
('Menu1', '1st Avenue', 'New Spaghetti Factory'),
('Pizza', 'Vancouver', 'Pizza Locale'),
('Special Guest', 'Vancouver', 'Pizza Locale');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `location` varchar(50) NOT NULL,
  `cuisine` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`location`, `cuisine`, `description`, `phone`, `rname`) VALUES
('1st Avenue', 'Italian', 'Lots of great pasta and other Italian Food', '(111) 111-1111', 'New Spaghetti Factory'),
('2nd Avenue', 'French', 'The best French food in town', '(222) 222-2222', 'Escargot'),
('3rd Avenue', 'Chinese', 'A taste of China at an affordable price', '(333) 333-3333', 'South Garden'),
('4th Avenue', 'Korean', 'The famous Korean BBQ is proudly served here', '(444) 444-4444', 'K-town BBQ'),
('5th Avenue', 'Japanese', 'Authentic Japanese food with fresh ingredients', '(555) 555-5555', 'Sushi land'),
('6th Avenue', 'Korean', 'When you want to eat like a Kpopstar', '(666) 666-6666', 'Kimbap World'),
('7th Avenue', 'German', 'Traditional German food served with beer', '(777) 777-7777', 'The Old Haus'),
('8th Avenue', 'Italian', 'Rated 5/5 on Yalp! Come and see our famous dishes', '(888) 888-8888', 'La Trattoria'),
('9th Avenue', 'Korean', 'Great Korean food', '(999) 999-9999', 'Seoul House'),
('Vancouver', 'Italian', 'Best Pizza in Town', '6048998999', 'Pizza Locale'),
('Vancouver UBC', 'Italian', 'Pizza hut is best', '5550981234', 'Pizza Hut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin_manages_restaurant`
--
ALTER TABLE `admin_manages_restaurant`
  ADD PRIMARY KEY (`id`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `browses`
--
ALTER TABLE `browses`
  ADD PRIMARY KEY (`id`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`dishid`,`location`,`rname`,`type`),
  ADD KEY `location` (`location`,`rname`,`type`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dishid`);

--
-- Indexes for table `listoffavourites`
--
ALTER TABLE `listoffavourites`
  ADD PRIMARY KEY (`listid`,`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `loggedinuser`
--
ALTER TABLE `loggedinuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `maintains`
--
ALTER TABLE `maintains`
  ADD PRIMARY KEY (`listid`,`id`,`location`,`rname`),
  ADD KEY `id` (`id`,`location`,`rname`),
  ADD KEY `maintains_ibfk_2` (`location`,`rname`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`type`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`location`,`rname`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `listoffavourites`
--
ALTER TABLE `listoffavourites`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9628341;
--
-- AUTO_INCREMENT for table `loggedinuser`
--
ALTER TABLE `loggedinuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_manages_restaurant`
--
ALTER TABLE `admin_manages_restaurant`
  ADD CONSTRAINT `admin_manages_restaurant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `admin_manages_restaurant_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `browses`
--
ALTER TABLE `browses`
  ADD CONSTRAINT `browses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `loggedinuser` (`id`),
  ADD CONSTRAINT `browses_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `contains_ibfk_1` FOREIGN KEY (`dishid`) REFERENCES `dishes` (`dishid`),
  ADD CONSTRAINT `contains_ibfk_2` FOREIGN KEY (`location`,`rname`,`type`) REFERENCES `menu` (`location`, `rname`, `type`);

--
-- Constraints for table `listoffavourites`
--
ALTER TABLE `listoffavourites`
  ADD CONSTRAINT `listoffavourites_ibfk_1` FOREIGN KEY (`id`) REFERENCES `loggedinuser` (`id`);

--
-- Constraints for table `maintains`
--
ALTER TABLE `maintains`
  ADD CONSTRAINT `maintains_ibfk_1` FOREIGN KEY (`listid`) REFERENCES `listoffavourites` (`listid`) ON DELETE CASCADE,
  ADD CONSTRAINT `maintains_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`),
  ADD CONSTRAINT `maintains_ibfk_3` FOREIGN KEY (`id`) REFERENCES `loggedinuser` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
