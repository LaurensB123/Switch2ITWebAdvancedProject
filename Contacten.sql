-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 12 okt 2017 om 09:01
-- Serverversie: 5.7.19-0ubuntu0.16.04.1
-- PHP-versie: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ProjectWebAdvanced`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Contacten`
--

CREATE TABLE `Contacten` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Contacten`
--

INSERT INTO `Contacten` (`ID`, `email`, `name`) VALUES
(1, 'laurens@pxl.be', 'laurens'),
(2, 'hannah@pxl.be', 'hannah'),
(3, 'bart@pxl.be', 'bart'),
(4, 'jan@pxl.be', 'jan'),
(5, 'joris@pxl.be', 'joris'),
(6, 'kamiel@pxl.be', 'kamiel'),
(7, 'jaak@pxl.be', 'jaak'),
(8, 'sarah@pxl.be', 'sarah'),
(9, 'lisa@pxl.be', 'lisa');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Contacten`
--
ALTER TABLE `Contacten`
  ADD UNIQUE KEY `ID` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
