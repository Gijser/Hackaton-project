-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 03:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(12) NOT NULL,
  `game_naam` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_naam`) VALUES
(1, 'Rocket League'),
(2, 'League of Legends');

-- --------------------------------------------------------

--
-- Table structure for table `potje`
--

CREATE TABLE `potje` (
  `pot_id` int(12) NOT NULL,
  `game_naam` varchar(24) NOT NULL,
  `DateTime` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potje`
--

INSERT INTO `potje` (`pot_id`, `game_naam`, `DateTime`) VALUES
(1, '	\r\nRocket League', '2021-05-11'),
(2, 'League of Legends', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `speler`
--

CREATE TABLE `speler` (
  `speler_id` int(12) NOT NULL,
  `speler_naam` varchar(50) NOT NULL,
  `speler_aantal_punten` int(240) NOT NULL,
  `speler_aantal_jaar` int(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speler`
--

INSERT INTO `speler` (`speler_id`, `speler_naam`, `speler_aantal_punten`, `speler_aantal_jaar`) VALUES
(5, 'Gijs Heetebrij', 21, 1),
(7, 'Malbam Clearhorn', 44, 1),
(8, 'Job Mekkelholt', 54, 5),
(9, 'Neimul Zana', 2, 1),
(10, 'Lie Cheiy', 132, 6),
(11, 'Gidran Musk', 23, 1),
(12, 'Blenneth Covenhorn', 55, 2),
(13, 'Tendas Chumumya', 43, 2),
(14, 'Jesd Ostundas', 21, 1),
(15, 'Ega Wolftail', 43, 1),
(16, 'Ferry doe', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `speler_pot`
--

CREATE TABLE `speler_pot` (
  `pot_id` int(12) NOT NULL,
  `speler_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speler_pot`
--

INSERT INTO `speler_pot` (`pot_id`, `speler_id`) VALUES
(5, 2),
(8, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `potje`
--
ALTER TABLE `potje`
  ADD PRIMARY KEY (`pot_id`);

--
-- Indexes for table `speler`
--
ALTER TABLE `speler`
  ADD PRIMARY KEY (`speler_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `potje`
--
ALTER TABLE `potje`
  MODIFY `pot_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speler`
--
ALTER TABLE `speler`
  MODIFY `speler_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
