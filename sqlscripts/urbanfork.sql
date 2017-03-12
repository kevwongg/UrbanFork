-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 09:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
(22222, 'Pancake', 'Two pancakes with syrup of your choice', 6.99),
(33333, 'Steak', 'Beef steak cooked to your choice', 21.99),
(44444, 'BBQ Chicken Pizza', 'Pizza with BBQ Chicken and sauce', 11.99),
(55555, 'Mushroom Soup', 'Creamy soup with mushrooms', 5.99);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listoffavourites`
--

CREATE TABLE `listoffavourites` (
  `listid` int(11) NOT NULL,
  `listname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listoffavourites`
--

INSERT INTO `listoffavourites` (`listid`, `listname`) VALUES
(21291, 'List1'),
(2358921, 'My favourite sushi places'),
(3452346, 'Best Chinese Restaurants'),
(6762321, 'Breakfast Restaurants'),
(9628330, 'Pizza is the best');

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

-- --------------------------------------------------------

--
-- Table structure for table `publicuser`
--

CREATE TABLE `publicuser` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `verifieduser`
--

CREATE TABLE `verifieduser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vuser_edits_dishes`
--

CREATE TABLE `vuser_edits_dishes` (
  `id` int(11) NOT NULL,
  `dishid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `listoffavourites`
--
ALTER TABLE `listoffavourites`
  ADD PRIMARY KEY (`listid`);

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
  ADD KEY `id` (`id`,`location`,`rname`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`type`,`location`,`rname`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `publicuser`
--
ALTER TABLE `publicuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`location`,`rname`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `verifieduser`
--
ALTER TABLE `verifieduser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `location` (`location`,`rname`);

--
-- Indexes for table `vuser_edits_dishes`
--
ALTER TABLE `vuser_edits_dishes`
  ADD PRIMARY KEY (`id`,`dishid`),
  ADD KEY `id` (`id`),
  ADD KEY `dishid` (`dishid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loggedinuser`
--
ALTER TABLE `loggedinuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `verifieduser`
--
ALTER TABLE `verifieduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `browses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `publicuser` (`id`),
  ADD CONSTRAINT `browses_ibfk_2` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `contains_ibfk_1` FOREIGN KEY (`dishid`) REFERENCES `dishes` (`dishid`),
  ADD CONSTRAINT `contains_ibfk_2` FOREIGN KEY (`location`,`rname`,`type`) REFERENCES `menu` (`location`, `rname`, `type`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `maintains`
--
ALTER TABLE `maintains`
  ADD CONSTRAINT `maintains_ibfk_1` FOREIGN KEY (`listid`) REFERENCES `listoffavourites` (`listid`),
  ADD CONSTRAINT `maintains_ibfk_2` FOREIGN KEY (`id`,`location`,`rname`) REFERENCES `favourites` (`id`, `location`, `rname`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `verifieduser`
--
ALTER TABLE `verifieduser`
  ADD CONSTRAINT `verifieduser_ibfk_1` FOREIGN KEY (`location`,`rname`) REFERENCES `restaurant` (`location`, `rname`);

--
-- Constraints for table `vuser_edits_dishes`
--
ALTER TABLE `vuser_edits_dishes`
  ADD CONSTRAINT `vuser_edits_dishes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `verifieduser` (`id`),
  ADD CONSTRAINT `vuser_edits_dishes_ibfk_2` FOREIGN KEY (`dishid`) REFERENCES `dishes` (`dishid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
