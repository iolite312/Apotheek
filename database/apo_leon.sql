-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2022 at 08:55 AM
-- Server version: 8.0.27-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apo_leon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `message` varchar(3000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `phone`, `message`) VALUES
(2, '1234', 'leon@mail.com', '0612345678910', '12345678910'),
(3, '1234', 'leon@mail.com', '061234567890', 'easd'),
(4, '.', '.@2.2', '.', '.'),
(5, 'My name', '2@3.4', '60123456789', 'INSERT INTO * VALUES (123,NULL,NULL)');

-- --------------------------------------------------------

--
-- Table structure for table `medicijnen`
--

CREATE TABLE `medicijnen` (
  `id` int NOT NULL,
  `medicijn` varchar(100) NOT NULL,
  `links` varchar(300) NOT NULL DEFAULT '#',
  `voorraad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `medicijnen`
--

INSERT INTO `medicijnen` (`id`, `medicijn`, `links`, `voorraad`) VALUES
(1, 'Paracetamol 250mg', 'https://www.apotheek.nl/medicijnen/paracetamol', 1000),
(2, 'Aspirine', 'https://www.apotheek.nl/medicijnen/acetylsalicylzuur-bij-pijn-of-ontsteking', 250),
(3, 'Metformine', 'https://www.apotheek.nl/medicijnen/metformine', 90),
(4, 'Karbasalaat Ascal', 'https://www.apotheek.nl/medicijnen/carbasalaatcalcium-bij-pijn-of-ontsteking?product=ascal', 12),
(5, 'Diclofenac', 'https://www.apotheek.nl/medicijnen/diclofenac', 45),
(6, 'Paracetamol 500mg', 'https://www.apotheek.nl/medicijnen/paracetamol', 55),
(7, 'Ibuprofen 500mg', 'https://www.apotheek.nl/medicijnen/ibuprofen', 12),
(8, 'Ibuprofen 600mg', 'https://www.apotheek.nl/medicijnen/ibuprofen', 65),
(9, 'Amoxicilline', 'https://www.apotheek.nl/medicijnen/amoxicilline', 88),
(10, 'Omeprazol', 'https://www.apotheek.nl/medicijnen/omeprazol', 77),
(11, 'Doxycycline', 'https://www.apotheek.nl/medicijnen/doxycycline', 37),
(12, 'Metoprolol', 'https://www.apotheek.nl/medicijnen/metoprolol', 9),
(13, 'Salbutamol', 'https://www.apotheek.nl/medicijnen/salbutamol-inhalatie', 12),
(14, 'Medicijn 1', '#', 54),
(15, 'Medicijn 2', '#', 23),
(16, 'Medicijn 3', '#', 56),
(17, 'Medicijn 4', '#', 8),
(18, 'Medicijn 5', '#', 9),
(19, 'Medicijn 6', '#', 5),
(20, 'Medicijn 7', '#', 21),
(21, 'Medicijn 8', '#', 12),
(22, 'Medicijn 9', '#', 55),
(23, 'Medicijn 10', '#', 43),
(24, 'Medicijn 11', '#', 51),
(25, 'Medicijn 12', '#', 7),
(26, 'Medicijn 13', '#', 9),
(27, 'Medicijn 14', '#', 12),
(28, 'Medicijn 15', '#', 1),
(29, 'Medicijn 16', '#', 12),
(30, 'Medicijn 17', '#', 0),
(31, 'Medicijn 18', '#', 9),
(32, 'Medicijn 19', '#', 6),
(33, 'Medicijn 20', '#', 3),
(34, 'Medicijn 21', '#', 0),
(35, 'Medicijn 22', '#', 1),
(36, 'Medicijn 23', '#', 1),
(37, 'Medicijn 24', '#', 2),
(38, 'Medicijn 25', '#', 4),
(39, 'Medicijn 26', '#', 5),
(40, 'Medicijn 27', '#', 6),
(41, 'Medicijn 28', '#', 7),
(42, 'Medicijn 29', '#', 8),
(43, 'Medicijn 30', '#', 13),
(44, 'Medicijn 31', '#', 12),
(45, 'Medicijn 32', '#', 66),
(46, 'Medicijn 33', '#', 7),
(47, 'Medicijn 34', '#', 5),
(48, 'Medicijn 35', '#', 2),
(49, 'Medicijn 36', '#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int NOT NULL,
  `Titel` varchar(50) NOT NULL,
  `IMG` varchar(50) NOT NULL,
  `Intro` varchar(256) NOT NULL,
  `link` varchar(300) NOT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Titel`, `IMG`, `Intro`, `link`, `datum`) VALUES
(1, 'Corona', 'placeholderimg.jpg', 'Wij hebben corona ', '', '2022-03-08 00:00:00'),
(2, 'Corona 2', 'placeholderimg.jpg', 'Wij hebben corona 2', '', '2022-03-01 00:00:00'),
(3, 'Corona 3', 'placeholderimg.jpg', 'Wij hebben corona 3', '', '2022-02-02 00:00:00'),
(4, 'Corona 4', 'placeholderimg.jpg', 'Wij hebben corona 4', '', '2022-01-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `hash` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `hash`) VALUES
(1, 'test', '$2y$10$oh4nexkF8E8iyeH0yhxNBeb6sUmi2kq40HmDWQOaLYr7v.L.HAl6q'),
(2, '1', '$2y$15$TtmFFwDTbMrNda5oWDTeVeUDGsYGLlyxPHmU/.Rcfp0wbsusDq94i'),
(3, '123', '$2y$10$KBUC/tjgFv.Qt9Kx6JjZaO84ssjUw4QVZKupgve6vCU.1pGn0nOr6'),
(4, '321', '$2y$10$Kw7ESZ5R9FZglgUpdJyfUeH4wsi7Ith5Ael1HSvlESdrRqwPHrX7.'),
(5, '132', '$2y$10$OFvSBBCZL6ihEjcHR61F/.pp5myoPVKk4Di/VYz.LeMHZccBjRzTO'),
(6, 'test12', '$2y$10$D2O.spH2ptuY0RDhoXTU5.YBbrG.IGxW3YkDuzxmAURncBgBEt0Oa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicijnen`
--
ALTER TABLE `medicijnen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicijnen`
--
ALTER TABLE `medicijnen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
