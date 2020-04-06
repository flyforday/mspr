SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `site anime`
--

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--


CREATE TABLE IF NOT EXISTS `episode` (
  `number_episode` int(3) NOT NULL,
  `name_episode` text NOT NULL,
  `temps_episode` time NOT NULL,
  `description_episode` text NOT NULL,
  `mark_episode` float(4) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--  KEY `recette_id` (`recette_id`),KEY `aliment_recette_ibfk_1` (`quantite`),KEY `aliment_id` (`aliment_id`)
-- Déchargement des données de la table `aliment_recette`
--



-- --------------------------------------------------------

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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aliment`
--
--ALTER TABLE `aliment`
--  ADD CONSTRAINT `aliment_ibfk_1` FOREIGN KEY (`unite_id`) REFERENCES `unite` (`id`);

--
-- Contraintes pour la table `aliment_recette`
--
--ALTER TABLE `aliment_recette`
--  ADD CONSTRAINT `aliment_recette_ibfk_2` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`),
--  ADD CONSTRAINT `aliment_recette_ibfk_3` FOREIGN KEY (`aliment_id`) REFERENCES `aliment` (`id`);

--
-- Contraintes pour la table `dessert`
--
--ALTER TABLE `dessert`
--  ADD CONSTRAINT `dessert_ibfk_1` FOREIGN KEY (`id`) REFERENCES `recette` (`id`);

--
-- Contraintes pour la table `entree`
--
--ALTER TABLE `entree`
--  ADD CONSTRAINT `entree_ibfk_1` FOREIGN KEY (`id`) REFERENCES `recette` (`id`);

--
-- Contraintes pour la table `etape`
--
--ALTER TABLE `etape`
--  ADD CONSTRAINT `etape_ibfk_1` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`);

--
-- Contraintes pour la table `plat`
--
--ALTER TABLE `plat`
--  ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `recette` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
