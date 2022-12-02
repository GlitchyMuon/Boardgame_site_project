-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 02, 2022 at 09:30 AM
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
  `Max_players` tinyint(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boardgame`
--

INSERT INTO `boardgame` (`id_game`, `FK_id_player`, `Name`, `Description`, `Min_players`, `Max_players`) VALUES
(1, 1, 'Takenoko', 'Takenoko, un jeu où il faut avoir la main verte\r\nDans Takenoko, vous incarnez un jardinier japonais qui a la lourde tâche d\'aménager les jardins impériaux.\r\nVous êtes à l\'époque médiévale et l\'Empereur du Japon vient de recevoir de la Chine, un grand panda. Le sort de l\'animal, symbole de paix entre ces deux grands empires, est très important. Il faut en prendre soin en lui apportant tout le confort dont il a besoin. En tant que jardinier au service de l\'Empereur, votre délicate mission est de veiller au bien-être de l\'animal en lui aménageant une bambouseraie. Mais attention, le panda est glouton et votre travail sera ardu !\r\n\r\nTakenoko, un jeu où il faut satisfaire l\'empereur\r\nPour remplir pleinement votre mission et recueillir les faveurs de l\'empereur, vous devrez cultiver des parcelles de terrain, les irriguer et y faire pousser du bambou. Chaque joueur aura le choix entre ces différentes actions tout en respectant les volontés de l\'empereur, symbolisés par les cartes objectifs. Vous devrez également garder un œil sur le charmant panda, locataire des jardins impériaux, qui ne pense qu\'à manger.\r\n\r\nTakenoko, un jeu où il faut composer avec la météo\r\nDans Takenoko, le temps a son importance. La météo jouera même un rôle majeur dans votre progression. Elle sera votre meilleur allié et vous épaulera dans votre mission. Matérialisés par un dé, les effets de la météo (soleil, pluie, vent, foudre et nuage) sont multiples et variés mais vous donneront toujours un petit coup de pouce.', 2, 4),
(2, 2, 'Azul', 'Azul est un jeu de société accessible dès l’âge de 8 ans pour des parties de 30 minutes et jouable de 2 à 4 joueurs. Il s\\\'agit d\\\'un jeu de société compétitif qui utilise pour mécaniques de jeu principales le placement de tuile, la draft et la combinaison. Pour gagner, vous devrez optimiser au mieux le placement de vos tuiles afin de compléter une ligne de 5 tuiles consécutives tout en accumulant le plus de points de victoire.', 2, 4),
(3, 3, 'Schotten totten', 'Schotten totten est un jeu de société de stratégie accessible dès l’âge de 8 ans pour des parties de 30 minutes environ et jouable en duel uniquement. \\r\\nCe jeu de société compétitif utilise comme mécaniques de jeu principales la gestion de main et la combinaison. Pour gagner, vous devrez réussir à prendre le contrôle de plus de bornes que votre adversaire en utilisant les meilleures combinaisons de cartes possibles.', 2, 2),
(4, 6, 'Dixit', 'Dixit est un jeu de société d’ambiance accessible dès l’âge de 8 ans pour des parties de 30 minutes environ avec de 3 à 8 joueurs. C\'est un jeu compétitif qui utilise comme mécaniques de jeu principales la déduction et l’observation. Pour gagner, vous devrez réussir avec un thème donné à retrouver l’image du maître du jeu parmi toutes les images des participants.\r\nDixit est le jeu qui grâce à ses magnifiques illustrations a démocratisé le jeu de déduction d’images, où pour la première fois toute la mécanique est centrée autour du matériel.', 3, 8),
(5, 5, 'Celestia', 'Celestia est un jeu de société compétitif accessible dès l’âge de 8 ans pour des parties de 30 minutes environ et jouable de 2 à 6 joueurs. \r\nLe jeu utilise pour mécaniques de jeu principales la collection et le stop ou encore. Pour gagner, vous devrez prendre le plus de risques possibles afin de découvrir les cités de Celestia et de récupérer les plus merveilleux trésors.\r\nSuperbement illustré, Celestia introduit une notion de bluff particulièrement bienvenue pour créer de nombreuses interactions entre les joueurs, tout en étant tactiques grâce aux nombreux pouvoirs des cartes.', 2, 6),
(6, 1, 'Tokaido', 'Tokaido est un jeu de société de stratégie accessible dès l’âge de 8 ans pour des parties de 30 minutes environ avec de 2 à 5 joueurs. \r\nTokaido est un jeu compétitif qui utilise comme mécanique de jeu principale la collection. Pour gagner, vous devrez arpenter le Japon d’autrefois afin de réaliser l’expérience la plus enrichissante possible.\r\nQue ce soit par son esthétique épurée, ou son gameplay volontairement léger, Tokaido est un jeu réellement à part qui mise beaucoup sur le côté très reposant de l\'expérience. Si vous aimez le Japon, vous aimerez Tokaido !', 2, 5),
(7, 2, 'Salade 2 points', 'Salade 2 Points est un jeu de société de stratégie accessible dès l’âge de 8 ans pour des parties de 20 minutes environ avec de 2 à 6 joueurs. \r\nC\'est un jeu de société compétitif qui utilise comme mécaniques de jeu principales la collection et la combinaison. Pour gagner, vous devrez réussir à collection le plus de légumes possibles correspondants à vos objectifs personnels afin de marquer plus de points que vos adversaires.\r\nSous son aspect enfantin, Salade 2 Points offre un vrai bon jeu stratégique, dans lequel vous devrez faire le bon choix d’objectifs personnels tout en gardant un œil sur les collections de vos adversaires. Il est tout aussi agréable avec des novices qu’avez des joueurs habitués.', 2, 6),
(8, 3, '7 Wonders', '7 Wonders est un jeu de société de stratégie accessible dès l’âge de 10 ans pour des parties de 30 minutes environ avec de 3 à 7 joueurs. \r\nC\'est un jeu de société compétitif qui utilise comme mécaniques de jeu principales la draft, la collection et la gestion de ressources. Pour gagner, vous devrez réussir à construire des merveilles afin de marquer plus de points que vos adversaires.\r\nOn ne présente plus 7 Wonders, classique des jeux modernes, si vous ne l’avez essayé, il faut absolument remédier à cela ! Chez Interface3, on l\'adore !', 3, 7),
(9, 4, 'Catan', 'Catan est un jeu de société compétitif accessible dès l’âge de 10 pour des parties de 60 minutes environ et jouable de 3 à 4 joueurs. \r\nCatan utilise pour mécaniques de jeu principales la gestion de ressources, le développement et l’exploration. Pour gagner, vous devrez vous lancer à la conquête d’une île afin d’exploite ses ressources et construire mieux et plus vite des nombreuses villes et colonies.\r\nSorti il y a plus de 25 maintenant, Catan a tout simplement révolutionné le jeu de société à l’époque en faisant découvrir au monde un gameplay fluide et accessible dans lequel les joueurs ne sont pas éliminés en cours de partie. Clairement indispensable à avoir en ludothèque pour tout fan de jeux de plateau qui se respecte.', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `message` text NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `nickname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `Surname`, `Firstname`, `Date_of_birth`, `Email`) VALUES
(1, 'Tanuki', 'Pompoko', '1989-02-05', 'tanu.pompoko@nikkp.com'),
(2, 'Vandeputte', 'Piper', '1989-06-20', 'pip.vandeputte@gmail.com'),
(3, 'Lamarr', 'Hedy', '1983-11-07', 'h.lamarr@interface3.be'),
(4, 'Ondra', 'Anny', '2003-05-15', 'a.ondra@interface3.be'),
(5, 'Smolova', 'Sybil', '1985-11-25', 'sybilsmo@gmail.com'),
(6, 'Pica', 'Tina', '1984-08-15', 'tinapica@hotmail.com');

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
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
