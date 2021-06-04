-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 03:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES
('test', 'noemail@email.com', '01234567891', 'fsd', 'fsds', 1),
('test2', 'noemail2@email.com', '012345678911', 'test', 'fsdsfd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `posted_on` date NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`posted_on`, `posted_by`, `type`, `image_name`, `title`, `text`) VALUES
('2020-11-11', 'Tessa Woodrow', 'News', 'news_image_one.jpg', 'Time to kick-start a new career in Developmen...', 'Give yourself the best chance at a new digital career by applying for one of our FREE trainin...'),
('2020-11-06', 'Netmatters Ltd', 'News', 'news_image_two.jpg', 'October 2020 Notable Employee', 'The highlight of every month here at Netmatters is the acnnouncement of the \"Notable of not...'),
('2020-11-11', 'Netmatters Ltd', 'News', 'news_image_three.jpg', 'Netmatters: Norfolk Business Awards 2020 Fina...', 'Announced today, 11th november 2020, Netmatters have made it as finalists in both the skills...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
