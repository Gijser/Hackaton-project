-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mei 2021 om 14:20
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.5

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
-- Tabelstructuur voor tabel `potje`
--

CREATE TABLE `potje` (
  `pot_id` int(12) NOT NULL,
  `game_naam` varchar(24) NOT NULL,
  `DateTime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `potje`
--

INSERT INTO `potje` (`pot_id`, `game_naam`, `DateTime`) VALUES
(1, '	\r\nRocket League', '0000-00-00 00:00:00'),
(2, 'League of Legends', '2021-05-21 12:17:33');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `potje`
--
ALTER TABLE `potje`
  ADD PRIMARY KEY (`pot_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `potje`
--
ALTER TABLE `potje`
  MODIFY `pot_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
