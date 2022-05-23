-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 mai 2022 à 17:28
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfa`
--

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `file`
--

INSERT INTO `file` (`id`, `nom`, `url`) VALUES
(8, 'HOBRY2.pdf', 'files/HOBRY2.pdf'),
(9, 'boutique en ligne.pdf', 'files/boutique en ligne.pdf'),
(10, 'creation proxy Squid sÃ©curisÃ©.pdf', 'files/creation proxy Squid sÃ©curisÃ©.pdf'),
(11, 'creation proxy Squid sÃ©curisÃ©.pdf', 'files/creation proxy Squid sÃ©curisÃ©.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `nom_enseignant` varchar(255) NOT NULL,
  `nom_etudiant` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `nom_enseignant`, `nom_etudiant`) VALUES
(13, 'securite serveur web', 'Mohamed Nasr', 'Fatma chandoul'),
(14, 'boutique en ligne', 'Mohamed chaker', 'Ashley Boukoye-Ngadi'),
(15, 'creation proxy Squid sÃ©curisÃ©', 'Mohamed Nasr', 'marwa falhed');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `login`, `password`) VALUES
(1, 'Ashley BOUKOYE', 'boukoyenashley@essat.com', 'essat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
