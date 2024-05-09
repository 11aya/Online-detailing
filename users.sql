-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 مارس 2024 الساعة 14:34
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `Code` varchar(6) NOT NULL,
  `password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`name`, `phonenumber`, `Code`, `password`) VALUES
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', ' ', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('نرمين السيد', '01200260551', 'dc346', 27800);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
