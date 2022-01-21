-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 19, 2022 la 11:57 PM
-- Versiune server: 10.4.22-MariaDB
-- Versiune PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `product`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `biciclete`
--

CREATE TABLE `biciclete` (
  `id` int(10) UNSIGNED NOT NULL,
  `nume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `culoare` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pret` decimal(10,0) NOT NULL,
  `poza` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dataadaugare` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Eliminarea datelor din tabel `biciclete`
--

INSERT INTO `biciclete` (`id`, `nume`, `model`, `culoare`, `material`, `pret`, `poza`, `dataadaugare`) VALUES
(4, 'Bicicleta Cube', 'Walk Girl', 'Turcoaz', 'Aluminiu', '969', 'bicycle-cube.jpg', '2022-01-19 15:05:16'),
(5, 'Bicicleta Cross', 'Alissa 24 Junior', 'Rosie', 'Otel', '789', 'bicycle-cross.png', '2022-01-19 21:04:52'),
(7, 'Bicicleta Cannondale', 'Trail Balance 12', 'Verde', 'Aluminiu', '847', 'bicycle-cannondale.png', '2022-01-19 21:10:27'),
(8, 'Bicicleta Kross', 'Trans 2.0', 'Negru', 'Aluminiu', '1200', 'bicycle-kross.png', '2022-01-19 21:12:57'),
(9, 'Bicicleta Specialized', 'Rockhopper Sport', 'Albastru', 'Otel', '1750', 'bicycle-specialized.jpg', '2022-01-19 21:18:59'),
(10, 'Bicicleta Riese', 'Supercharger2 GT', 'Galben', 'Aluminiu', '2500', 'bicycle-riese.jpg', '2022-01-19 21:20:52');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `biciclete`
--
ALTER TABLE `biciclete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `biciclete`
--
ALTER TABLE `biciclete`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
