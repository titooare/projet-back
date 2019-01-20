-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Janvier 2019 à 15:40
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `jacket` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `jacket`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 'img/supermario1.jpg', 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 'img/sonic-mania-2.jpg', 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 'img/the_legend_zelda_15.jpg', 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 'img/MarioKart64-25.jpg', 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 'img/Super_Smash_Bros-55.png', 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 'img/dead-or-alive-60.jpg', 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 'img/Dead or Alive Xtreme Beach Volley Ball-60.jpg', 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 'img/Enter the Matrix-45.jpg', 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 'img/Max Payne 2-50.jpg', 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 'img/Yoshi\'s Island-6.jpg', 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 'img/Commandos 3-44.jpg', 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 'img/Final_Fantasy_X-40.jpg', 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 'img/Pokemon_Rubis-44.png', 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 'img/Starcraft-19.jpg', 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 'img/Grand Theft Auto 3-30.jpg', 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 'img/Homeworld 2-45.jpg', 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 'img/Aladin-10.jpg', 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 'img/Super Mario Bros 3-10.jpeg', 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 'img/SSX 3-56.jpg', 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', '', 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 'img/Actua Soccer 3-30.jpg', 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 'img/Time Crisis 3-40.jpg', 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 'img/X-FILES-25.jpg', 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 'img/Soul Calibur 2-54.jpg', 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 'img/', 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 'img/Street Fighter 2-26.jpg', 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 'img/Gundam Battle Assault 2-29.jpg', 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 'img/Spider-Man-15.jpg', 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 'img/Midtown Madness 3-59.jpg', 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 'img/Tetris-5.png', 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 'img/The Rocketeer-2.jpg', 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 'img/Pro Evolution Soccer 3-59.jpg', 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 'img/Ice Hockey-7.jpg', 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 'img/Sydney 2000-15.jpg', 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 'img/nba19.jpg', 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 'img/Aliens Versus Predator : Extinction.jpg', 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 'img/Crazy Taxi-11.jpg', 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 'img/Le Maillon Faible-10.jpg', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 'img/FIFA 64-25.jpg', 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 'img/Qui Veut Gagner Des Millions-10.jpg', 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 'img/Nintendo 64-21.jpeg', 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 'img/Taxi 3-22.jpg', 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 'img/Indiana Jones Et Le Tombeau De L\'Empereur-25.jpg', 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 'img/F-ZERO-25.jpg', 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 'img/Harry Potter Et La Chambre Des Secrets-30.jpg', 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 'img/Half-Life.jpg', 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 'img/Myst III Exile-49.jpg', 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 'img/Wario World.jpeg', 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 'img/rs2.jpg', 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 'img/Splinter Cell.jpeg', 'Xbox', 53, 1, 'Jeu magnifique !'),
(51, 'Battlefield 1942', 'img/battlefield5.jpg', 'PC', 45, 50, '2nde guerre mondiale');

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video_occasion`
--

CREATE TABLE `jeux_video_occasion` (
  `ID` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL,
  `jacket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jeux_video_occasion`
--

INSERT INTO `jeux_video_occasion` (`ID`, `nom`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`, `jacket`) VALUES
(4, 'JEU BB', 'ps2', 15, 13, 'le jeu qu\'il est bien ', 'img/Aladin-10.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `pass`, `email`, `date_inscription`) VALUES
(11, 'thibault', '$2y$10$NFvRCj9gLzVQjDWMD.nDOu9zDOrieDN/F6lghapPYjbKCJXQqZN.C', 'thibault.vacheron@etu.univ-st-etienne.fr', '2019-01-08'),
(12, 'Thibault Vacheron', '$2y$10$yb5jzitTYHLejV35n4apyOuw11W9JxdjNbzQrzjJomOFWPMM2L0Kq', 'thibault.vacheron@etu.univ-st-etienne.fr', '2019-01-08'),
(13, 'titooare', '$2y$10$zHsjOlH5EkTXVU1LPSmm..fy9zlqb60Q0yfOS4oKxWFKg68Gk53j2', 'thib.du-42@hotmail.fr', '2019-01-08'),
(14, 'antoine', '$2y$10$ZuwHYuvYMgsxZDa3io4NAOuIHWog2CzT7foy1HKA/ImXUEZVpUgGy', 'thib.du-42@hotmail.com', '2019-01-08'),
(15, 'pablo', '$2y$10$5yOflWiz6RjQX8J9I9mPr.xjWPB7R0EHT1prjlLA9G.Zace13V6GO', 'thib.du-42@hotmail.fr', '2019-01-08'),
(16, 'pablo', '$2y$10$5I1T8feiKax2bfRMpomw/uFaLNEVAwuA4f2Szp.9jW9OhlEdb/.DK', 'pablo@oioi.fr', '2019-01-08'),
(17, 'pabli', '$2y$10$LrdAz4Zggm.lqOpxJje3meM6WyZGv0QOIR9HS0IyfHrbqKu/tqkR2', 'pablo@oioi.fr', '2019-01-08'),
(18, 'arthure', '$2y$10$2BuUA1TZpBVGVdI1/mN2OOaN6A8sddqn7hAj8W/5MQ7XK03BtS/Qq', 'pablo@oioi.fr', '2019-01-08'),
(19, 'tibo', '$2y$10$Qu22r05ocIRKnfNZ551f..hkYAXL/qmRUsEzbGB5XocGvNlUrgXvW', 'thib.du-42@hotmail.fr', '2019-01-08'),
(20, '', '$2y$10$ItmiREOkNH8qekiYTIiS6OB04a.fSBKh4VK7lWo0Zz94ciKYj33Ky', '', '2019-01-08'),
(21, 'claude', '$2y$10$M4DHEFwF1NuvLcdJFU/gD.JC3cZLmYZ7zlXp2hEdv4HPAETb9IzVO', 'claude@gmail.com', '2019-01-08'),
(22, 'tibo', '$2y$10$lfMtEPCSkO1HYGZqynmAV.JPcIhtyk4GcySE.WhuUvVatMAbI84wa', 'thib.du-42@hotmail.com', '2019-01-08'),
(23, 'antoine', '$2y$10$.9A86n8JG6tjuS0hPgb38O2FhFtOaZVgK4Jy1ceyJ3oHyRDH1L8xS', 'antoine@hotmaik.fr', '2019-01-08'),
(24, 'arthure', '$2y$10$wS36O.vt.cG2qUHzqxgd9uoWw/ei2ydindOQ/jl4olV/d.MIMfVyW', 'pablo@oioi.fr', '2019-01-08'),
(25, 'vincent', '$2y$10$SVIYdB0y/tlzRu8.pJhzx.9UBzAdk1J5ejNzwU/oEmy88Wh20ZlhC', 'vincent@gmail.com', '2019-01-08'),
(26, 'boso', '$2y$10$JfOLqvLVBvSp.f0kdeUsJeHvE06JSnmHlfne.eQnYN5jZmQnJ15X2', 'boso@hotmail.fr', '2019-01-08'),
(27, 'tibo', '$2y$10$AHx/wLeGkACskQjmmXr.0uTwMbpofYc/FkTKihw/17Qr2Nkqa8VAK', 'thib.du-42@hotmail.fr', '2019-01-08'),
(28, 'Array', '$2y$10$yAFqGeHv4NIchuNIX6LlZ.8yOtEQaoAcblFUXLk7GoikoX6cciwme', 'Array', '2019-01-08'),
(29, 'Array', '$2y$10$sqgkqclrF6m2kT9aWoXPPeoIJptSOjGFuiYKd9QhR4f1JpI9y7tve', 'Array', '2019-01-08'),
(30, 'Array', '$2y$10$VNANwmBgL40S7Bi28oUrXuKKuXDZI.GC1iAEy5ZW1ea3jcc80by4.', 'Array', '2019-01-08'),
(31, 'Array', '$2y$10$opo993zr/aA5S2B/sR3kIOTQILE4gnojnbzJx/ddMAo0Z5A3w4HQ2', 'Array', '2019-01-08'),
(32, 'Array', '$2y$10$Cusi.dK1NkWKO9n9YZ.fx.agdVKyO.KsjdUp9Mbslg.f/JLparJ1G', 'Array', '2019-01-08'),
(33, 'Array', '$2y$10$eT5V5svSm4QXQ5UEKl16oevHZe5hzdc6hf/3SOemuLyQPX7xiespS', 'Array', '2019-01-08'),
(34, 'tibo', '$2y$10$okoeSHxEYJcLuUq/DMPkF.SqfVANtboFw75Ed7BJ6xA6AiWeIm9bW', 'thib.du-42@hotmail.fr', '2019-01-09'),
(35, 'tibo', '$2y$10$m.j2rPC0nSi3Fqr7A3N0vO0E5XqrvoltSvezI.zZTc5DNJXKeifla', 'thib.du-42@hotmail.fr', '2019-01-09'),
(36, 'tibo', '$2y$10$6NDibKBBb47Fc..5g5XN9ulxAKm2SYkAltnCZlKOY0cxR.L1dM2kG', 'thib.du-42@hotmail.fr', '2019-01-09'),
(37, 'tibo', '$2y$10$ETmAnkmqwaJ32aJ32racaOJ8rjbhBLQp2w1NRcXNc0XV9h4nKLf0.', 'thib.du-42@hotmail.fr', '2019-01-09'),
(38, 'tibo', '$2y$10$AwYw/XhafcLkg9GADS9H7.Q07VgZi50CQushGa9/HorGCuhzTlG5q', 'thib.du-42@hotmail.fr', '2019-01-09'),
(39, 'tibo', '$2y$10$yXtP87PMf/7BG05cQTquzeAQwu4X0/utPU2u6u8sYvnu.N697ERCq', 'thib.du-42@hotmail.fr', '2019-01-09'),
(40, 'tibo', '$2y$10$Z6PbMwoS2we2XkD6O578/eYJsiTA7/cYTTBbtM8iOChqF5Ok0WpMK', 'thib.du-42@hotmail.fr', '2019-01-09'),
(41, 'tibo', '$2y$10$BkYiLXji3E4ad.1M.sHGY.lP0MhyVaTA0g0MbVjYkeGp.1gUsHECm', 'thib.du-42@hotmail.fr', '2019-01-09'),
(42, 'tibo', '$2y$10$s6bjdnLsVzEgmL5PxYl4CuEjd1NeIlwy3847HuX7N0KW.FTQuEYtK', 'thib.du-42@hotmail.fr', '2019-01-09'),
(43, 'tibo', '$2y$10$AciWmxBgg/kw0kJ.A.xehe0eyCcOAyCvPzWhL77pDE4nKfY3i5C26', 'thib.du-42@hotmail.fr', '2019-01-09'),
(44, 'tibo', '$2y$10$x5DeNQwtwDXwf5NsD6k33eni6sKFUpABp7AxiTTm10jTmUuW5K6L.', 'thib.du-42@hotmail.fr', '2019-01-09'),
(45, 'tibo', '$2y$10$Gh2z0LcREpdC7/nXXD6zLe.XtpWGWbnMW4fhrynpR6pLzsOrZZsoS', 'thib.du-42@hotmail.fr', '2019-01-09'),
(46, 'tibo', '$2y$10$gI/YnJvOAEUCeYAi0ooMEOPM5GW6CddMIa/6KRK2j9.29smZvd5gW', 'thib.du-42@hotmail.fr', '2019-01-09'),
(47, 'tibo', '$2y$10$h3hO0vKwqONerCDuXwuyhu5YaN/cCvNsb6V/FN.kgwS/hcxgVpDFu', 'thib.du-42@hotmail.fr', '2019-01-09'),
(48, 'christine', '$2y$10$zlmexGWy3kNbMEHWQoo8HuTKrxBk4B4He9uRSg87mcSgOnvNzCQ3a', 'christine@gmail.com', '2019-01-09'),
(49, 'achille', '$2y$10$2HxRY1VUR7IhiOkYlmNbau1fsdvzCsdNFrEr0nj0iD7S.sbyOqcLm', 'antoine@hotmaik.fr', '2019-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `type_Console`
--

CREATE TABLE `type_Console` (
  `PS2` int(11) NOT NULL,
  `NESS` int(11) NOT NULL,
  `Xbox` int(11) NOT NULL,
  `Dreamcast` int(11) NOT NULL,
  `PC` int(11) NOT NULL,
  `Nintendo 64` int(11) NOT NULL,
  `SuperNES` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `Megadrive` int(11) NOT NULL,
  `GBA` int(11) NOT NULL,
  `GameCube` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `jeux_video_occasion`
--
ALTER TABLE `jeux_video_occasion`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT pour la table `jeux_video_occasion`
--
ALTER TABLE `jeux_video_occasion`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
