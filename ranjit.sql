-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 08:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranjit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `name`, `phone`, `email`, `password`, `date`) VALUES
(13, 'name', '6354256425', 'prajapatiranjit444@gmail.com', '9316', '2022-03-15 06:40:54'),
(14, 'Akash', '9316789502', 'wefe@grmg.com', '9316', '2023-04-02 09:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_boby` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_boby`, `user_id`, `image_path`) VALUES
(3, 'mnrdgb', 'hgkhjj', 1, ''),
(21, 'hjk', 'hjgkjhjk', 1, ''),
(22, 'sandip', 'ranjit', 1, ''),
(67, 'mhgh', 'mnbmn', 4, ''),
(69, 'nbv', 'ghmfgjhfjhhvyjytesnjkytytrxvbtfv', 1, ''),
(70, 'jhjakj', 'hgef', 5, ''),
(71, 'nmewr', 'sjs', 1, ''),
(72, 'nwbgh', 'hgjhg', 1, ''),
(73, 'demo', 'demo', 1, ''),
(74, 'nmhj', 'jh', 1, 'http://[::1]/codeigniter/upload/'),
(75, 'mnb', 'mnjh', 1, 'http://[::1]/codeigniter/upload/'),
(76, 'mjerjg', 'mhdsf', 1, 'http://[::1]/codeigniter/upload/'),
(77, '', '', 0, 'http://[::1]/codeigniter/upload/'),
(78, 'mhbef', 'nbsd', 1, 'http://[::1]/codeigniter/upload/'),
(79, '', '', 0, 'http://[::1]/codeigniter/index.php/uploads/'),
(81, 'mndsv', 'm', 1, '2022-03-25 12:57:33'),
(82, 'mndsv', 'mn', 1, '2022-03-25 12:57:33'),
(83, 'mndsv', 'mn', 1, '2022-03-25 12:57:33'),
(84, 'fdhgsge', 'hujfmj', 1, '2022-05-09 08:28:43'),
(85, 'youtube', 'y', 12, '2023-01-22 06:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `ci3`
--

CREATE TABLE `ci3` (
  `id` int(11) NOT NULL,
  `username` varchar(140) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci3`
--

INSERT INTO `ci3` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'ranjit', '123', 'sandip', 'raj', 'ranjit@gmail.com'),
(3, 'demo', 'demo', 'demo', 'demo', 'demo@gmail.com'),
(4, 'root', 'root', 'root', 'root', 'root@gmail.com'),
(5, 'sandip', '123', 'sandip', 'sandip', 'sandip@gmail.com'),
(6, 'sandip', '123', 'sandip', 'sandip', 'sandi@gmail.com'),
(7, 'mmhsd', 'nbvs', 'nbsv', 'hv', 'mhdmv@gmail.com'),
(8, 'mmhsd', 'nbvs', 'nbsv', 'hv', 'mhdmv@gmail.co'),
(9, 'ranjit', '1234', 'admin', 'admin', 'prajapatiranjit444@gmail.com'),
(10, 'ranjit', '1234', 'Akash', 'demo', 'prajapanjit444@gmail.com'),
(11, 'admin', '12345', 'Akash', 'demo', 'prajapatiranjit4444@gmail.com'),
(12, 'ranjit', '12345', 'ak', 'ak', 'prajapatiranjit44444@gmail.com');

-- --------------------------------------------------------

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci3`
--
ALTER TABLE `ci3`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `ci3`
--
ALTER TABLE `ci3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
