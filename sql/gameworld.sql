-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 21 dec 2017 om 11:35
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--
CREATE DATABASE IF NOT EXISTS `gameworld` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gameworld`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gamecategory`
--

CREATE TABLE IF NOT EXISTS `gamecategory` (
  `categoryId` int(3) NOT NULL AUTO_INCREMENT,
  `categoryTitle` varchar(50) NOT NULL,
  `categoryImage` varchar(100) NOT NULL,
  `categoryDescription` text NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gamecategory`
--

INSERT INTO `gamecategory` (`categoryId`, `categoryTitle`, `categoryImage`, `categoryDescription`) VALUES
(1, 'PS4', '', ''),
(2, 'PC', '', ''),
(3, 'XBOX', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `gameId` int(5) NOT NULL AUTO_INCREMENT,
  `gameTitle` varchar(50) NOT NULL,
  `gameDescription` text NOT NULL,
  `gameImage` varchar(100) NOT NULL,
  `gamePrice` decimal(5,2) NOT NULL,
  `gameCategoryId` int(3) NOT NULL,
  PRIMARY KEY (`gameId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gameDescription`, `gameImage`, `gamePrice`, `gameCategoryId`) VALUES
(1, 'Fortnite', '', 'fortniteps4.jpg\r\n', '59.99', 1),
(2, 'Call of Duty ww2', '', 'ww2ps4.jpg', '59.99', 1),
(3, 'Fifa 18 R9 Edition', '', 'crps4.jpg', '99.99', 1),
(4, 'COD Black Ops 3', '', 'bo3ps4.jpg', '59.99', 1),
(5, 'Rocket League', '', 'rocketps4.jpg', '29.99', 1),
(6, 'Fortnite', '', 'fortnitepc.jpg', '29.99', 2),
(7, 'Doom', '', 'doom.jpg', '59.99', 2),
(8, 'Dishonored', '', 'dis.jpg', '29.99', 2),
(9, 'COD Ghosts', '', '12.png', '59.99', 2),
(10, 'Wolfstein', '', 'wolf.jpg', '39.99', 2),
(11, 'Call of Duty ww2', '', 'ww2xbox.png', '59.99', 3),
(12, 'State of Decay 2', '', 'state.jpg', '39.99', 3),
(13, 'Fifa 18', '', 'xboxfifa.jpg', '59.99', 3),
(14, 'GTA V', '', 'xboxgta.jpg', '29.99', 3),
(15, 'Fortnite', '', 'xboxfort.jpg', '0.00', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
