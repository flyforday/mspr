-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 mars 2020 à 09:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
    `name_user` varchar(500) NOT NULL,
    `surname_user` varchar(500) NOT NULL,
    `pseudo` varchar(50) NOT NULL,
    `date_of_birth` int(8) NOT NULL,
    `mail` varchar(50) NOT NULL,
    `tel` int(10) NOT NULL,
    `avatar`  varchar(500) NOT NULL,
    `pass` varchar(30) NOT NULL,
    id int(5) NOT NULL,
    PRIMARY KEY (id),
  )ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
  
--
-- Déchargement des données de la table `utilisateur`
--


-- --------------------------------------------------------

--
-- Structure de la table `message`
--  
  
  
  CREATE TABLE IF NOT EXISTS `message` (
    `date_message` int(8) NOT NULL,
    `hour_message` int(6) NOT NULL,
    `content` int(5) NOT NULL,
    id int(5) NOT NULL,
    PRIMARY KEY (id),
  ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
  

--
-- Déchargement des données de la table `message`
--


-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--
  
  CREATE TABLE IF NOT EXISTS `sujet` (
    `date_sujet` int(8) NOT NULL,
    `hour_sujet` int(6) NOT NULL,
    `name_sujet` varchar(30) NOT NULL,
    id int(5) NOT NULL,
    PRIMARY KEY (id),
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujet`
--


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;