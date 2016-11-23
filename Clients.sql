-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 15 Septembre 2016 à 17:04
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_AlgoBreizh`
--

-- --------------------------------------------------------

--
-- Structure de la table `Clients`
--

CREATE TABLE `Clients` (
  `CLI_ID` int(11) NOT NULL,
  `CLI_NOM` varchar(25) NOT NULL,
  `CLI_PRENOM` varchar(25) NOT NULL,
  `CLI_MAIL` varchar(25) NOT NULL,
  `CLI_MDP` varchar(25) NOT NULL,
  `CLI_ADRESSE` text NOT NULL,
  `CLI_TEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Clients`
--

INSERT INTO `Clients` (`CLI_ID`, `CLI_NOM`, `CLI_PRENOM`, `CLI_MAIL`, `CLI_MDP`, `CLI_ADRESSE`, `CLI_TEL`) VALUES
(1, 'FOUCHEUR', 'Alexandre', 'alex.foucheur@gogole.com', 'jesucemaelien', '7 rue de la branlette 35000 Rennes', 662119229),
(2, 'PECHAUD', 'Maelien', 'maelien.pech@jesuce.fr', 'jesuceelie', '14 rue du gigolo glacé 13000 Marseille', 234567890),
(3, 'COSNIER', 'Elie', 'elie.cosnier@porn.com', 'jesucealex', '21 rue du jus d\'homme 75000 PARIS', 345678901);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`CLI_ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `CLI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
