-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2022 at 02:54 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_site_jeux_de_societe`
--

-- --------------------------------------------------------

--
-- Table structure for table `boardgame`
--

CREATE TABLE `boardgame` (
  `id_game` int(11) NOT NULL,
  `FK_id_player` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Min_players` tinyint(4) NOT NULL DEFAULT '1',
  `Max_players` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boardgame`
--

INSERT INTO `boardgame` (`id_game`, `FK_id_player`, `Name`, `Description`, `Min_players`, `Max_players`) VALUES
(1, 1, 'Takenoko', 'Takenoko, un jeu où il faut avoir la main verte\r\nDans Takenoko, vous incarnez un jardinier japonais qui a la lourde tâche d\'aménager les jardins impériaux.\r\n\r\nVous êtes à l\'époque médiévale et l\'Empereur du Japon vient de recevoir de la Chine, un grand panda. Le sort de l\'animal, symbole de paix entre ces deux grands empires, est très important. Il faut en prendre soin en lui apportant tout le confort dont il a besoin. En tant que jardinier au service de l\'Empereur, votre délicate mission est de veiller au bien-être de l\'animal en lui aménageant une bambouseraie. Mais attention, le panda est glouton et votre travail sera ardu !\r\n\r\nTakenoko, un jeu où il faut satisfaire l\'empereur\r\nPour remplir pleinement votre mission et recueillir les faveurs de l\'empereur, vous devrez cultiver des parcelles de terrain, les irriguer et y faire pousser du bambou. Chaque joueur aura le choix entre ces différentes actions tout en respectant les volontés de l\'empereur, symbolisés par les cartes objectifs. Vous devrez également garder un œil sur le charmant panda, locataire des jardins impériaux, qui ne pense qu\'à manger.\r\n\r\nTakenoko, un jeu où il faut composer avec la météo\r\nDans Takenoko, le temps a son importance. La météo jouera même un rôle majeur dans votre progression. Elle sera votre meilleur allié et vous épaulera dans votre mission. Matérialisés par un dé, les effets de la météo (soleil, pluie, vent, foudre et nuage) sont multiples et variés mais vous donneront toujours un petit coup de pouce.\r\n\r\n---------------------------------------\r\n\r\nThème(s)		Asie\r\nLangue(s)		Français\r\nMécanisme(s)		Placement\r\nAuteur(s)		Antoine Bauza\r\nÉditeur		        Bombyx\r\n++ Contenu ++		\r\n28 parcelles\r\n28 sections de bambou vert\r\n26 sections de bambou jaune\r\n24 sections de bambou rose\r\n20 irrigations\r\n9 aménagements\r\n46 cartes objectifs\r\n4 plateaux individuels\r\n2 jetons action\r\n1 dé météo\r\n1 figurine panda\r\n1 figurine jardinier\r\n1 livret de règles', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `Surname`, `Firstname`, `Age`, `Email`) VALUES
(1, 'Vandeputte', 'Piper', 33, 'pip.vandeputte@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boardgame`
--
ALTER TABLE `boardgame`
  ADD PRIMARY KEY (`id_game`),
  ADD KEY `FK_id_player` (`FK_id_player`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boardgame`
--
ALTER TABLE `boardgame`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boardgame`
--
ALTER TABLE `boardgame`
  ADD CONSTRAINT `FK_id_player` FOREIGN KEY (`FK_id_player`) REFERENCES `player` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
