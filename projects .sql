-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2017 at 07:49 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1800) NOT NULL,
  `image` varchar(30) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `type`, `year`, `name`, `description`, `image`, `link`) VALUES
(1, 'science', 2016, 'Soil Moisture Sensor Network', 'A network of sensors that monitor soil moisture in green infrastructure', 'greenstemkarly.jpg', 'http://greenstemnetwork.org/'),
(2, 'science', 2013, 'Climate Change Denial Movement', 'A paper that tracks the funding sources of climate deniers', 'climatechangekarly.jpg', 'https://climateaccess.org/resource/institutionalizing-delay-foundation-funding-and-creation-us-climate-change-counter-movement'),
(3, 'digital media', 2016, 'Green City, Clean Waters UI Redesign', 'I recreated the UI of the Green City, Clean Waters webpage', 'greencityredesign.jpg', 'https://invis.io/NW9BDL2UH'),
(4, 'digital media', 2017, 'KarlySoldner.com', 'The creation of this website has been a difficult and enriching foray into web development and design. ', 'webdev.jpg', 'https://github.com/karlysoldner/IDM-221'),
(5, 'other', 2014, 'Bioko Study Abroad Blog', 'I attempted to keep a blog of my travels in Bioko, but unreliable internet made it a challenge. A few stories and photos did make it online! ', 'equatokarly.jpg', 'http://equatokarly.tumblr.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
