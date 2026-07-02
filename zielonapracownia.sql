-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2026 at 11:04 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zielonapracownia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `numberofpeople`
--

CREATE TABLE `numberofpeople` (
  `id` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `MaxInNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `numberofpeople`
--

INSERT INTO `numberofpeople` (`id`, `text`, `MaxInNumber`) VALUES
(1, 'Solo', '1'),
(2, 'Grupa do 5 osób', '5'),
(3, 'Grupa do 10 osób', '10'),
(4, 'Grupa zorganizowana', '>10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `nick` varchar(20) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workshops`
--

CREATE TABLE `workshops` (
  `id` int(11) NOT NULL,
  `typeOfWorkshops` varchar(50) NOT NULL,
  `values_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `typeOfWorkshops`, `values_name`) VALUES
(9, 'Podstawy florystyki', 'basics'),
(10, 'Tworzenie bukietów okolicznościowych', 'bouquets'),
(11, 'Florystyka ślubna', 'wedding'),
(12, 'Kompozycje w pudełkach i flower boxy', 'flowerbox'),
(13, 'Sezonowe dekoracje kwiatowe', 'seasonal'),
(14, 'Florystyka stołowa i dekoracje wnętrz', 'interior'),
(15, 'Wieńce i dekoracje okolicznościowe', 'wreaths'),
(16, 'Zaawansowane techniki florystyczne', 'advanced');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workshops_form`
--

CREATE TABLE `workshops_form` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `peoplenumber_id` int(11) NOT NULL,
  `workshop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `workshops_form`
--

INSERT INTO `workshops_form` (`id`, `firstname`, `surname`, `email`, `peoplenumber_id`, `workshop_id`) VALUES
(12, 'sadada', 'asdsaad', 'asdasdadasd@sdfdfsdds', 1, 9);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `numberofpeople`
--
ALTER TABLE `numberofpeople`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `workshops_form`
--
ALTER TABLE `workshops_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peoplenumber_id` (`peoplenumber_id`),
  ADD KEY `workshop_id` (`workshop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numberofpeople`
--
ALTER TABLE `numberofpeople`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `workshops_form`
--
ALTER TABLE `workshops_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workshops_form`
--
ALTER TABLE `workshops_form`
  ADD CONSTRAINT `workshops_form_ibfk_1` FOREIGN KEY (`peoplenumber_id`) REFERENCES `numberofpeople` (`id`),
  ADD CONSTRAINT `workshops_form_ibfk_2` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
