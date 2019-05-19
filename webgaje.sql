-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 12:00 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgaje`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

CREATE TABLE `course_detail` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `rating_avg` float NOT NULL,
  `rating_total` int(11) NOT NULL,
  `author` varchar(200) NOT NULL,
  `student` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `content_detail` varchar(700) NOT NULL,
  `video_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`id`, `title`, `rating_avg`, `rating_total`, `author`, `student`, `price`, `content`, `content_detail`, `video_link`) VALUES
(1, 'Kursus Lengkap Dasar Robotika Arduino UNO 2019', 4.5, 500, 'Muhammad Irshoot', 96, 250000, '- Video Pembelajaran selama 15 jam<br>- Kuis Interaktif<br>- Simulasi Program', '- Dasar-dasar dari Arduino UNO<br>- System Requirement dari Arduino UNO<br>- Membuat program dasar Arduino UNO dengan Arduino IDE<br>- Source Code Arduino UNO untuk melakukan fungsi lain<br>- Penjelasan tentang fungsi mikrokontroler dalam robotika khususnya arduino', 'https://drive.google.com/file/d/1wNrfD1-b2v_6cgm5WK3aXz41-L7FaM6G/preview');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `id` int(11) NOT NULL,
  `course_image_link` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `course_image_link`, `title`, `price`, `review`) VALUES
(1, 'img/user_image/download1.jpg', 'Learn Arduino', 250000, 12),
(2, 'img/user_image/download2.jpg', 'Learn STM32F4', 500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `image_database`
--

CREATE TABLE `image_database` (
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_database`
--

INSERT INTO `image_database` (`name`, `link`) VALUES
('pic1', 'pic1.jpg'),
('pic1', 'pic1.jpg'),
('pic2', 'pic2.jpg'),
('pic3', 'pic3.png'),
('pic4', 'pic4.jpg'),
('pic_another_folder', 'img/pic1.jpg'),
('pic_another_folder', 'img/pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `text_database`
--

CREATE TABLE `text_database` (
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_database`
--

INSERT INTO `text_database` (`name`, `link`) VALUES
('text', 'material.txt'),
('text', 'material.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `username` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`username`, `id`) VALUES
('test4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`id`, `link`) VALUES
(1, 'img/user_image/download1.jpg'),
(2, 'img/user_image/download2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`username`, `password`, `email`) VALUES
('user', 'pass', 'email'),
('dandan', 'willybee', 'willybee@gmail.com'),
('test4', '12456', 'rrr@gmail.com'),
('test5', '124567', 'rrraaw@gmail.com'),
('yolo', 'yolo', 'yolo@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
