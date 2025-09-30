-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 06:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camping`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `pitchid` int(11) NOT NULL,
  `remark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`id`, `list`, `pitchid`, `remark`) VALUES
(1, 'Cannot keep your eyes off the sea views? Pick up the South West Coast Path at the bottom end of the park, or head for favourite spots along the Jurassic Coast like West Bay (half an hours drive) and Lulworth Cove (35 minutes). The Isle of Portland (15 minutes) is also a great place for a walk, and its also got lots of watersports including windsurfing, coasteering and scuba diving.\r\nWeymouth (10 minutes) is another perennial favourite for its lovely sandy beach and attractions like the Sea Life Centre and Pirate Adventure Golf. You can also get to the town on two wheels by picking up the Weymouth Trail cycle route from the bridleway by the site (or follow the full nine-mile trail up into the hills…)', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `guests` int(100) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Mia', 'mia123@gmail.com', '0945345345', 'yangon', 'Japan', 2, '2023-04-05', '2023-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `remark`) VALUES
(1, 'Hla', 'Hla', 'hlahla1@gmail.com', '09783772838', 'fdf tr rgsfsf fsdrsdf', ''),
(8, 'Cora', 'Cora', 'cora34@gmail.com', '+65345423543', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation.', NULL),
(9, 'nay', 'nay', 'nayNay123@gmail.com', '09783772838', 'efe fererfesf eijjf se sfs', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `count` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`count`, `id`) VALUES
(3, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `username`, `fname`, `lname`, `password`, `email`, `phone`) VALUES
(1, '@vava', 'Va', 'Va', '12345', 'vava@gmail.com', '09354545353'),
(3, '@admin', 'admin', 'admin', '123456', 'admin111@gmail.com', '096624456565'),
(4, 'Dora', 'Do', 'ra', '11111', 'dodo11@gmail.com', '09756554545'),
(5, 'nana', 'Na', 'Na', '12345', 'nana11@gmail.com', '013423434'),
(6, 'bobo', 'Bo', 'Bo', 'bobo123', 'bobo111@gmail.com', '0945454534'),
(7, 'hlahla', 'Hla', 'Hla', 'hla123', 'hla323@gmail.com', '454545453254');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `list` text NOT NULL,
  `pitchid` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `list`, `pitchid`, `remark`) VALUES
(1, 'WiFi,Car Parking,Pet Allowed,Shower', 2, ''),
(2, 'Bar or club house,Restrooms,Dump station', 1, ''),
(3, 'Bar nearby,Dogs allowed all year', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `pitch_info`
--

CREATE TABLE `pitch_info` (
  `pitchid` int(11) NOT NULL,
  `pitch_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `general_info` text NOT NULL,
  `features` text NOT NULL,
  `pitch_types` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `map` text NOT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitch_info`
--

INSERT INTO `pitch_info` (`pitchid`, `pitch_name`, `country`, `location`, `general_info`, `features`, `pitch_types`, `photo`, `map`, `remark`) VALUES
(2, 'Riverside Caravan Park', 'United Kingdom', 'West Virginia', 'Hilltop campground on the edge of the Summit Bechtel Reserve 15 minutes\' drive from downtown Fayetteville', 'Pet Allowed', '', 'photo/home6.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.582080909635!2d-2.513299623519566!3d50.61630277162431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4872f67cb6769f3b%3A0x77b840b77fa2207f!2sEast%20Fleet%20Farm%20Touring%20Park!5e0!3m2!1sen!2sus!4v1687163728347!5m2!1sen!2sus', NULL),
(3, 'Northern Nights Campground and RV Park', 'United States', 'Milepost 188.7, Glenn Highway, Glennallen, Alaska', 'Just stop for a moment and take a look at those views – as the pics suggest, it’s a mighty scenic outlook at all hours for guests at Northern Nights Campground and RV Park.', 'Bar or Club House', '', 'photo/home5.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.582080909635!2d-2.513299623519566!3d50.61630277162431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4872f67cb6769f3b%3A0x77b840b77fa2207f!2sEast%20Fleet%20Farm%20Touring%20Park!5e0!3m2!1sen!2sus!4v1687163728347!5m2!1sen!2sus', NULL),
(10, 'Ben Nevis Holiday Park', 'Singapore', 'Camaghael, Fort William, Highlands and Islands', 'Peaceful holiday park with fantastic views of Ben Nevis and beyond', 'Peaceful holiday park with fantastic views of Ben Nevis and beyond', 'Non-electric grass pitch', 'photo/997703.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.582080909635!2d-2.513299623519566!3d50.61630277162431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4872f67cb6769f3b%3A0x77b840b77fa2207f!2sEast%20Fleet%20Farm%20Touring%20Park!5e0!3m2!1sen!2sus!4v1687163728347!5m2!1sen!2sus', NULL),
(11, 'Okinawa', 'Japan', 'Milepost 188.7, Glenn Highway, Glennallen, Alaska', 'Peaceful holiday park with fantastic views of Ben Nevis and beyond', 'Peaceful holiday park with fantastic views of Ben Nevis and beyond', 'Non-electric grass pitch', 'photo/home13.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.582080909635!2d-2.513299623519566!3d50.61630277162431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4872f67cb6769f3b%3A0x77b840b77fa2207f!2sEast%20Fleet%20Farm%20Touring%20Park!5e0!3m2!1sen!2sus!4v1687163728347!5m2!1sen!2sus', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `pitchid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `pitchid`, `username`) VALUES
(1, 'Good Service', 1, NULL),
(3, 'Good Wi-Fi', 2, 'nana'),
(4, 'Nice View', 2, 'Dora'),
(5, 'Noisy', 3, '@vava'),
(6, 'Free Wifi', 1, '@admin'),
(7, 'Nice Place', 2, 'bobo'),
(9, 'Nice Place', 10, ''),
(10, 'Nice View', 10, ''),
(11, 'Nice View', 2, 'Dora'),
(12, 'Nice View', 2, 'Dora'),
(13, 'xxxxx', 2, 'Dora');

-- --------------------------------------------------------

--
-- Table structure for table `rssfeed`
--

CREATE TABLE `rssfeed` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rssfeed`
--

INSERT INTO `rssfeed` (`id`, `title`, `description`, `link`) VALUES
(1, 'Camping Information Entry', 'This is the entry from for New Camping Site.', 'http://localhost/GWSC/pitchform.php'),
(2, 'Review Form', 'This is the review form.', 'http://localhost/GWSC/reviewform.php');

-- --------------------------------------------------------

--
-- Table structure for table `visitedip`
--

CREATE TABLE `visitedip` (
  `ip` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitedip`
--

INSERT INTO `visitedip` (`ip`, `id`) VALUES
('192.168.9.10', 1),
('::1', 2),
('192.168.1.63', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pitch_info`
--
ALTER TABLE `pitch_info`
  ADD PRIMARY KEY (`pitchid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rssfeed`
--
ALTER TABLE `rssfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitedip`
--
ALTER TABLE `visitedip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pitch_info`
--
ALTER TABLE `pitch_info`
  MODIFY `pitchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rssfeed`
--
ALTER TABLE `rssfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitedip`
--
ALTER TABLE `visitedip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
