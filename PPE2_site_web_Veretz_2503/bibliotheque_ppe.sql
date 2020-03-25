-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 mars 2020 à 12:39
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bibliotheque_ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idCompte` int(11) NOT NULL,
  PRIMARY KEY (`idCompte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `idExemplaire` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `idCompte_1` int(11) NOT NULL,
  PRIMARY KEY (`idExemplaire`,`idCompte`,`idCompte_1`),
  KEY `idCompte` (`idCompte`,`idCompte_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classement`
--

DROP TABLE IF EXISTS `classement`;
CREATE TABLE IF NOT EXISTS `classement` (
  `idClassement` int(11) NOT NULL,
  PRIMARY KEY (`idClassement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idCompte` int(11) NOT NULL AUTO_INCREMENT,
  `nomCompte` varchar(50) DEFAULT NULL,
  `prenomCompte` varchar(50) DEFAULT NULL,
  `mdpCompte` varchar(50) DEFAULT NULL,
  `identifiantCompte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCompte`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `nomCompte`, `prenomCompte`, `mdpCompte`, `identifiantCompte`) VALUES
(1, 'test', 'test', '101214bureau', 'bibliotheque');

-- --------------------------------------------------------

--
-- Structure de la table `exemplaire`
--

DROP TABLE IF EXISTS `exemplaire`;
CREATE TABLE IF NOT EXISTS `exemplaire` (
  `idExemplaire` int(11) NOT NULL,
  `etatExemplaire` varchar(50) DEFAULT NULL,
  `nbExemplaire` varchar(50) DEFAULT NULL,
  `idLivre` int(11) NOT NULL,
  PRIMARY KEY (`idExemplaire`),
  KEY `idLivre` (`idLivre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

DROP TABLE IF EXISTS `faire`;
CREATE TABLE IF NOT EXISTS `faire` (
  `idCompte` int(11) NOT NULL,
  `idCompte_1` int(11) NOT NULL,
  `idRecherche` varchar(50) NOT NULL,
  PRIMARY KEY (`idCompte`,`idCompte_1`,`idRecherche`),
  KEY `idRecherche` (`idRecherche`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `idJeux` int(11) NOT NULL,
  `nomJeux` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idJeux`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

DROP TABLE IF EXISTS `jouer`;
CREATE TABLE IF NOT EXISTS `jouer` (
  `idCompte` int(11) NOT NULL,
  `idCompte_1` int(11) NOT NULL,
  `idJeux` int(11) NOT NULL,
  PRIMARY KEY (`idCompte`,`idCompte_1`,`idJeux`),
  KEY `idJeux` (`idJeux`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `idLivre` int(11) NOT NULL,
  `editionLivre` varchar(50) DEFAULT NULL,
  `nomLivre` varchar(50) DEFAULT NULL,
  `datePremierEditionLivre` date DEFAULT NULL,
  `genreLivre` varchar(50) DEFAULT NULL,
  `auteurLivre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idLivre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `idCompte` int(11) NOT NULL,
  `idCompte_1` int(11) NOT NULL,
  `idClassement` int(11) NOT NULL,
  PRIMARY KEY (`idCompte`,`idCompte_1`,`idClassement`),
  KEY `idClassement` (`idClassement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

DROP TABLE IF EXISTS `recherche`;
CREATE TABLE IF NOT EXISTS `recherche` (
  `idRecherche` varchar(50) NOT NULL,
  PRIMARY KEY (`idRecherche`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idCompte` int(11) NOT NULL,
  `idCompte_1` int(11) NOT NULL,
  PRIMARY KEY (`idCompte`,`idCompte_1`),
  KEY `idCompte_1` (`idCompte_1`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
