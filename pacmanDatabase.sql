-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 12:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacman`
--

-- --------------------------------------------------------

--
-- Table structure for table `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `permission` smallint(6) NOT NULL DEFAULT 1,
  `passwort` varchar(255) NOT NULL,
  `highscore` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personen`
--

INSERT INTO `personen` (`id`, `vorname`, `nachname`, `email`, `permission`, `passwort`, `highscore`) VALUES
(1, 'Joel', 'Deffner', 's4jodeff@uni-trier.de', 2, '$2y$10$4EHcFhpjv40vp9xH5F5rL.0Ez0qAdLUgRSjGjQ3IGGpkJ/U..UJCm', -1),
(2, 'Marlin', 'Zapp', 's4mazapp@uni-trier.de', 2, '$2y$10$RcMEXupbSy3HsRuasr2taeFPRvUVWdU0RnzmrhSiU.OO7POL/Lnye', 8720),
(4, 'Fabian', 'Sponholz', 's4faspon@uni-trier.de', 1, '$2y$10$wTjR3/1LOzzK7VTe9Zu.4umtsJcuoE1BS2nrOs/8J.3i8D1zgHAM2', -666),
(5, 'Michaela', 'Gilzendegen', 'micha.gilzendegen@gmail.com', 1, '$2y$10$xYzMzrSgcS15xFHb3zixP.HaQ1a1Bk4G0Kx5xmZZNnrWzVtmqKxdS', 19400),
(6, 'Nicolas', 'Romo Hölscher', 'nicolas2512@hotmail.de', 1, '$2y$10$tl6YSDYw/s7t5yVBpIt.8O3CuRYhvrSDeYdZiI3aUNu0guqXsD922', 8720),
(7, 'David', 'Negelen', 'david@negelen.de', 1, '$2y$10$NWCrAb5w1uLH3rUB1fGI7.SCff3IqFspToRycQIrsnVGG0i6uSw9.', 34190),
(8, 'Jonas', 'Tabot', 'jonas.tabot@proton.me', 1, '$2y$10$qVrsNGp7bcSNh.4GeUrxH.EieMKSIr5asQ8lj9AEtj2.lcqWdmWD6', 18930),
(9, 'Memphis', 'Raines', 'fsrinfo@fsrinfo.de', 1, '$2y$10$idT4H2qz77R.RGb/v52.CecA9tPIWbxV2G8XKPw0Lc0mSVUVzG3IW', 17190),
(10, 'Johannes', 'Gilzendegen', 'johannesgilsendegen2@gmail.com', 1, '$2y$10$svkgjPMQJW1pf.ktwHFN6.4XydqfXhibkON056ptBbKGGskkVaaSq', 50220),
(11, 'rainer', 'hohn', 'rainerhohn@gmx.de', 1, '$2y$10$08FkLkfayteuZqAFgySEK./xlYLNqTfU33LDfo0GxeSrdN3vAIfom', 14110),
(12, 'Sebastian', 'Höbbel', 's.hoebbel02@gmail.com', 1, '$2y$10$ARPwRf8Wop6u7/221TQa3uVTujGkdOf6BJ7srcXCP611kuKnsLhuS', 13960);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
