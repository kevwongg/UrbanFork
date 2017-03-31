-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 07:44 PM
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
-- Table structure for table `admin_adds_restaurant`
--

CREATE TABLE `admin_adds_restaurant` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_edits_restaurant`
--

CREATE TABLE `admin_edits_restaurant` (
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
(5, 'Vancouver', 'Pizza Locale'),
(6, '1st Avenue', 'New Spaghetti Factory'),
(6, '2nd Avenue', 'Escargot'),
(6, '3rd Avenue', 'South Garden'),
(6, '4th Avenue', 'K-town BBQ'),
(6, '5th Avenue', 'Sushi land'),
(6, '6th Avenue', 'Kimbap World'),
(6, '7th Avenue', 'The Old Haus'),
(6, '8th Avenue', 'La Trattoria'),
(6, '9th Avenue', 'Seoul House'),
(6, 'Vancouver', 'Pizza Locale'),
(6, 'Vancouver UBC', 'Pizza Hut');

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
(8383, '2nd Avenue', 'Escargot', 'French Menu'),
(8383, '8th Avenue', 'La Trattoria', 'Italian menu'),
(10932, '2nd Avenue', 'Escargot', 'French Menu'),
(10932, '8th Avenue', 'La Trattoria', 'Italian menu'),
(11111, '7th Avenue', 'The Old Haus', 'German Menu'),
(11111, '8th Avenue', 'La Trattoria', 'Italian menu'),
(11111, '9th Avenue', 'Seoul House', 'Korean menu'),
(11111, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(11111, 'Vancouver', 'Pizza Locale', 'Dinner'),
(11111, 'Vancouver', 'Pizza Locale', 'Lunch'),
(12612, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(12612, '7th Avenue', 'The Old Haus', 'German Menu'),
(12612, 'Vancouver', 'Pizza Locale', 'Dinner'),
(12612, 'Vancouver UBC', 'Pizza Hut', 'Pizza Hut Menu'),
(18124, '7th Avenue', 'The Old Haus', 'German Menu'),
(19326, '7th Avenue', 'The Old Haus', 'German Menu'),
(22222, '6th Avenue', 'Kimbap World', 'Kimbap Menu'),
(22222, '9th Avenue', 'Seoul House', 'Korean menu'),
(22222, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(22222, 'Vancouver', 'Pizza Locale', 'Dinner'),
(22222, 'Vancouver', 'Pizza Locale', 'Lunch'),
(22873, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(23213, '9th Avenue', 'Seoul House', 'Korean menu'),
(23213, 'Vancouver UBC', 'Pizza Hut', 'Pizza Hut Menu'),
(25081, '3rd Avenue', 'South Garden', 'Chinese Menu'),
(25081, '4th Avenue', 'K-town BBQ', 'Korean Menu'),
(25302, '3rd Avenue', 'South Garden', 'Chinese Menu'),
(25302, '5th Avenue', 'Sushi land', 'Japanese menu'),
(33333, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(33333, '4th Avenue', 'K-town BBQ', 'Korean Menu'),
(33333, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(33333, 'Vancouver', 'Pizza Locale', 'Dinner'),
(33333, 'Vancouver', 'Pizza Locale', 'Lunch'),
(34623, '1st Avenue', 'New Spaghetti Factory', 'Menu1'),
(34623, '4th Avenue', 'K-town BBQ', 'Korean Menu'),
(34623, '8th Avenue', 'La Trattoria', 'Italian menu'),
(34623, 'Vancouver UBC', 'Pizza Hut', 'Pizza Hut Menu'),
(38059, '3rd Avenue', 'South Garden', 'Chinese Menu'),
(41341, '4th Avenue', 'K-town BBQ', 'Korean Menu'),
(41341, '9th Avenue', 'Seoul House', 'Korean menu'),
(43861, '8th Avenue', 'La Trattoria', 'Italian menu'),
(43861, '9th Avenue', 'Seoul House', 'Korean menu'),
(44444, '9th Avenue', 'Seoul House', 'Korean menu'),
(44444, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(44444, 'Vancouver', 'Pizza Locale', 'Dinner'),
(44444, 'Vancouver', 'Pizza Locale', 'Lunch'),
(44444, 'Vancouver UBC', 'Pizza Hut', 'Pizza Hut Menu'),
(52371, '5th Avenue', 'Sushi land', 'Japanese menu'),
(52371, '9th Avenue', 'Seoul House', 'Korean menu'),
(55555, '2nd Avenue', 'Escargot', 'French Menu'),
(55555, '8th Avenue', 'La Trattoria', 'Italian menu'),
(55555, 'Vancouver', 'Pizza Locale', 'Breakfast'),
(55555, 'Vancouver', 'Pizza Locale', 'Dinner'),
(55555, 'Vancouver', 'Pizza Locale', 'Lunch'),
(64621, '7th Avenue', 'The Old Haus', 'German Menu'),
(72346, '2nd Avenue', 'Escargot', 'French Menu'),
(72346, 'Vancouver UBC', 'Pizza Hut', 'Pizza Hut Menu'),
(77310, '5th Avenue', 'Sushi land', 'Japanese menu'),
(77310, '6th Avenue', 'Kimbap World', 'Kimbap Menu'),
(77310, '9th Avenue', 'Seoul House', 'Korean menu'),
(91273, '5th Avenue', 'Sushi land', 'Japanese menu'),
(91273, '6th Avenue', 'Kimbap World', 'Kimbap Menu'),
(98712, '4th Avenue', 'K-town BBQ', 'Korean Menu'),
(98712, '6th Avenue', 'Kimbap World', 'Kimbap Menu');

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
(8383, 'Seafood Pasta', 'Fresh ingredients', 24.99),
(10932, 'Cream Soup', 'It\'s hot', 3.99),
(11111, 'Spaghetti', 'Spaghetti with tomato sauce and meatballs', 13.99),
(12612, 'Hamburger', 'It\'s really good', 7.99),
(18124, 'Schnitzel', 'Deep fried pork', 10.99),
(19326, 'Bratwurst', 'German sausage', 3.99),
(22222, 'Pancake', 'Two pancakes with syrup of your choice', 6.99),
(22873, 'Miso Ramen', 'Miso ramen', 9.99),
(23213, 'Krabby Patty', 'The one and only', 5.99),
(25081, 'Pork Dumplings', 'dim sum 2', 3.99),
(25302, 'Shrimp Dumplings', 'dim sum', 4.99),
(33333, 'Steak', 'Beef steak cooked to your choice', 21.99),
(34623, 'Chicken Sandwich', 'It\'s good', 4.99),
(38059, 'Rice', '1 Bowl of rice', 1.5),
(41341, 'Korean BBQ plate', 'Assorted raw meats', 15.99),
(43861, 'Ribs', 'tasty ribs', 22.99),
(44444, 'BBQ Chicken Pizza', 'Pizza with BBQ Chicken and sauce', 11.99),
(52371, 'Chirashi Don', 'Fresh ingredients only', 14.99),
(55555, 'Mushroom Soup', 'Creamy soup with mushrooms', 5.99),
(56151, 'Hotdog', 'Eat this', 2.99),
(64621, 'Prime Steak', 'Good steak', 27.99),
(72346, 'French food', 'I don\'t even know anymore', 14.99),
(77310, 'California roll', 'You know what it is', 3.99),
(91273, 'Dynamite roll', 'This is good', 4.99),
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
(5, 'Kevin Wong', 'kevinw@test.com', 'password', 'Canada', 'kevinw'),
(6, 'Kevin', 'kev@test.com', 'test', 'Canada', 'kevinw');

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

--
-- Dumping data for table `maintains`
--

INSERT INTO `maintains` (`listid`, `id`, `location`, `rname`) VALUES
(9628337, 4, '1st Avenue', 'New Spaghetti Factory');

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
('Chinese Menu', '3rd Avenue', 'South Garden'),
('Dinner', 'Vancouver', 'Pizza Locale'),
('French Menu', '2nd Avenue', 'Escargot'),
('German Menu', '7th Avenue', 'The Old Haus'),
('Italian menu', '8th Avenue', 'La Trattoria'),
('Japanese menu', '5th Avenue', 'Sushi land'),
('Kimbap Menu', '6th Avenue', 'Kimbap World'),
('Korean Menu', '4th Avenue', 'K-town BBQ'),
('Korean menu', '9th Avenue', 'Seoul House'),
('Lunch', 'Vancouver', 'Pizza Locale'),
('Menu1', '1st Avenue', 'New Spaghetti Factory'),
('Pizza', 'Vancouver', 'Pizza Locale'),
('Pizza Hut Menu', 'Vancouver UBC', 'Pizza Hut'),
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
  -- ,CHECK (CHAR_LENGTH(phone) >= 10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`location`, `cuisine`, `description`, `phone`, `rname`) VALUES
('1st Avenue', 'Italian', 'Lots of great pasta and other Italian Food', '(111) 111-1121', 'New Spaghetti Factory'),
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
-- Indexes for table `admin_adds_restaurant`
--
ALTER TABLE `admin_adds_restaurant`
  ADD PRIMARY KEY (`id`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `admin_edits_restaurant`
--
ALTER TABLE `admin_edits_restaurant`
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
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9628343;
--
-- AUTO_INCREMENT for table `loggedinuser`
--
ALTER TABLE `loggedinuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_adds_restaurant`
--
ALTER TABLE `admin_adds_restaurant`
  ADD CONSTRAINT `admin_adds_restaurant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `admin_adds_restaurant_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `admin_edits_restaurant`
--
ALTER TABLE `admin_edits_restaurant`
  ADD CONSTRAINT `admin_edits_restaurant_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `admin_edits_restaurant_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

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
