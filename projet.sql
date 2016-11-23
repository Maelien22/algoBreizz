-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Novembre 2016 à 12:50
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `username`) VALUES
(1, 'st@lefty.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Patrice');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `description` text NOT NULL,
  `id_parent` int(11) NOT NULL,
  `num` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`, `id_parent`, `num`) VALUES
(1, 'test', 'retest', 0, 1),
(2, 'retest', 'retest', 1, 2),
(3, 'zergfzsbgr', 'zegtzegfr', 0, 3),
(4, 'sgh', 'test', 0, 0),
(5, 'teestvfkj', 'gdnklzelioigbnzoi', 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `adresse` text NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `valide` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`, `password`, `adresse`, `telephone`, `valide`) VALUES
(2, 'PECHAUD', 'Maelien', 'maelien.pech@jmail.fr', 'jesuceelie', '14 rue du gigo glacé 13000 Marseille', '0234567890', 1),
(3, 'COSNIER', 'Elie', 'elie.cosnier@pong.com', 'jesucealex', '21 rue du jus d\'homme 75000 PARIS', '0345678901', 1),
(6, 'AUZOULT', 'Marc-antoine', 'ma@lefty.fr', '', '8bis rue maréchal foch 22000 st brieuc', '0666666666', 1),
(9, 'FOUCHEUR', 'Alexandre', 'alex.foucheur@gogole.com', 'jesucemaelien', '7 rue de la br 35000 Rennes\r\n', '0662119229', 1);

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ssl` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `devise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `parametre`
--

INSERT INTO `parametre` (`id`, `url`, `ssl`, `theme`, `timezone`, `devise`) VALUES
(1, 'oexo.fr', '', 'blabla', '0000-00-00 00:00:00', '€');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `descrip_courte` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prix_ht` decimal(11,2) NOT NULL,
  `prix_ttc` decimal(11,2) NOT NULL,
  `tva` decimal(11,2) NOT NULL,
  `num` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `descrip_courte`, `descrip`, `cat_id`, `prix_ht`, `prix_ttc`, `tva`, `num`) VALUES
(1, 'Frosties modifié', 'Pétales de maïs glacés au sucre de la marque Frosties mdifié', 'Pétales de maïs glacés au sucre enrichis en vitamines (b1, b2, b3/pp, b6, b9, b12, d), en fer et en calcium.\r\nPays de fabrication : ALLEMAGNE\r\nKellogg\'s Produits Alimentaires S.A.S.\r\nImmeuble Neptune - 1, rue Galilée 93160 Noisy-le-Grand', 1, '2.00', '2.40', '20.00', '452512024'),
(2, 'Cini minis', 'Des délicieux pétales carrés au riz et au blé complet au goût follement cannelle, avec 32% de céréales complètes, du calcium et des vitamines.', 'Apports de référence pour les nutriments (AR)\r\nLes apports de référence pour les nutriments (AR) correspondent aux quantités en énergie et nutriments qu’il est conseillé de consommer chaque jour pour un adulte afin d’avoir un apport énergétique moyen de 2000 kcal par jour. Ils doivent donc être adaptés à l’âge, au sexe et au niveau d’activité physique de chacun.\r\n\r\nLes valeurs nutritionnelles de référence se trouvant sur le devant des emballages des céréales indiquent la quantité de kcal, sucres, lipides, acides gras saturés et sel dans une portion.', 1, '1.00', '1.25', '25.00', '14464');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `parametre`
--
ALTER TABLE `parametre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
