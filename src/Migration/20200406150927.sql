SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
SET time_zone = "+00:00";


--
-- Base de données :  `site anime`
--

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
    PRIMARY KEY (id)
  )ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
  
--
-- Déchargement des données de la table `utilisateur`
--


-- Structure de la table `episode`
--


CREATE TABLE IF NOT EXISTS `episode` (
  `number_episode` int(3) NOT NULL,
  `name_episode` text NOT NULL,
  `time_episode` time NOT NULL,
  `description_episode` text NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mark_episode` float(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- KEY `unite_id` (`unite_id`)
-- Déchargement des données de la table `episode`
--


-- --------------------------------------------------------

--
-- Structure de la table `season`
--

CREATE TABLE IF NOT EXISTS `season` (
  `name_season` text NOT NULL,
  `story_arc` text NOT NULL,
  `description_arc` text NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_anime` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--  KEY `recette_id` (`recette_id`),KEY `aliment_recette_ibfk_1` (`quantite`),KEY `aliment_id` (`aliment_id`)
-- Déchargement des données de la table `aliment_recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--  
  
  
  CREATE TABLE IF NOT EXISTS `message` (
    `date_message` int(8) NOT NULL,
    `hour_message` int(6) NOT NULL,
    `content` int(5) NOT NULL,
    `id` int(5) NOT NULL,
    PRIMARY KEY (`id`)
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
    `id` int(5) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujet`
--

-- Structure de la table `anime`
--

CREATE TABLE IF NOT EXISTS `anime` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_anime` text NOT NULL,
  `name_auteur` text NOT NULL,
  `type_anime` text NOT NULL,
  `genre_anime` text NOT NULL,
  `description_anime` text NOT NULL,
  `mark_anime` float(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


