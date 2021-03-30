-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 mars 2021 à 14:44-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 mars 2021 à 14:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliothequevirtuelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `nom_auth` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auth`),
  KEY `nom_auth` (`nom_auth`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auth`, `nom_auth`) VALUES
(1, 'Antoine de Saint-Exupéry'),
(2, 'J. K. Rowling\r\n'),
(3, 'J. R. R. Tolkien'),
(4, 'James Clear'),
(5, 'Victor Hugo');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `id_bibli` int(11) NOT NULL AUTO_INCREMENT,
  `nom_bibli` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_bibli`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibli`, `nom_bibli`, `date`, `id_user`) VALUES
(1, 'valentin-pero', '2021-03-10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `anneeParution` int(11) NOT NULL,
  `maisonEdition` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `genreLitteraire` varchar(255) NOT NULL,
  `premiereDeCouverture` varchar(255) NOT NULL,
  `id_bibli` int(11) NOT NULL,
  PRIMARY KEY (`idLivre`),
  KEY `id_bibli` (`id_bibli`),
  KEY `Auteur` (`Auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`idLivre`, `titre`, `anneeParution`, `maisonEdition`, `Auteur`, `synopsis`, `genreLitteraire`, `premiereDeCouverture`, `id_bibli`) VALUES
(1, 'Les Misérables', 1862, '', 'Victor Hugo', 'Les Misérables est un roman de Victor Hugo publié en 1862. Il a donné lieu à de nombreuses adaptations, au cinéma et sur de nombreux autres supports.\r\n\r\nDans ce roman emblématique de la littérature française qui décrit la vie de pauvres gens dans Paris et la France provinciale du xixe siècle, l\'auteur s\'attache plus particulièrement au destin du bagnard Jean Valjean. C\'est un roman historique, social et philosophique dans lequel on retrouve les idéaux du romantisme et ceux de Victor Hugo concernant la nature humaine.', 'Roman, Tragédie', 'http://localhost/projetWEB/myBibli-v1/img/lesmiserable.jpg', 1),
(2, 'Un rien peut tout changer', 2018, '', 'James Clear', 'Les gens pensent que pour modifier le cours de leur vie, ils doivent faire de grands changements.Dans ce livre, ils découvriront que les plus petits changements couplés à une bonne connaissance de la psychologie et des neurosciences peuvent avoir un effet révolutionnaire sur leur existence et leurs relations.', 'Livre d’auto-assistance', 'http://localhost/projetWEB/myBibli-v1/img/unrien.jpg', 1),
(3, 'Harry Potter à l\'école des sorciers', 1997, '', 'J. K. Rowling\r\n', 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant nommé Hagrid, vient le chercher pour l\'emmener à Poudlard, une école de sorcellerie ! Voler en balai, jeter des sorts, combattre les trolls : Harry se révèle un sorcier doué. Mais quel est le mystère qui l\'entoure ? Et qui est l\'effroyable V..., le mage dont personne n\'ose prononcer le nom ?', 'Roman, littéraire', 'http://localhost/projetWEB/myBibli-v1/img/harry1.jpg', 1),
(4, 'Le Seigneur des anneaux', 1955, '', 'J. R. R. Tolkien', 'Le Seigneur des anneaux est un roman en trois volumes de J. R. R. Tolkien paru en 1954 et 1955. Prenant place dans le monde de fiction de la Terre du Milieu, il suit la quête du hobbit Frodon Sacquet, qui doit détruire l\'Anneau unique afin que celui-ci ne tombe pas entre les mains de Sauron, le Seigneur des ténèbres.', 'Roman, Heroic Fantasy', 'http://localhost/projetWEB/myBibli-v1/img/loth1.jpg', 1),
(5, 'Le Petit Prince', 1943, '', 'Antoine de Saint-Exupéry', 'Dédié à Léon Werth, ce conte philosophique est divisé en 27 chapitres qui racontent les aventures du petit prince. À la suite d’une panne de moteur, un aviateur se retrouve dans le désert du Sahara. Il rencontre le petit prince qui lui demande de lui dessiner un mouton. Étonné de le trouver là, l’aviateur voudrait savoir qui il est et d’où il vient. Le petit prince ne répond pas aux questions mais au fil des chapitres et des jours, l’aviateur reconstitue l’histoire du petit garçon aux cheveux d’or.', '', 'http://localhost/projetWEB/myBibli-v1/img/pttprince.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(255) NOT NULL,
  `prenom_user` varchar(255) NOT NULL,
  `id_biblio` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `id_biblio`) VALUES
(1, 'Derreumaux', 'Valentin', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD CONSTRAINT `bibliotheque_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`id_bibli`) REFERENCES `bibliotheque` (`id_bibli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livres_ibfk_2` FOREIGN KEY (`Auteur`) REFERENCES `auteurs` (`nom_auth`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliothequevirtuelle`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `nom_auth` varchar(255) NOT NULL,
  PRIMARY KEY (`id_auth`),
  KEY `nom_auth` (`nom_auth`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auth`, `nom_auth`) VALUES
(1, 'Antoine de Saint-Exupéry'),
(2, 'J. K. Rowling\r\n'),
(3, 'J. R. R. Tolkien'),
(4, 'James Clear'),
(5, 'Victor Hugo');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `id_bibli` int(11) NOT NULL AUTO_INCREMENT,
  `nom_bibli` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_bibli`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibli`, `nom_bibli`, `date`, `id_user`) VALUES
(1, 'valentin-pero', '2021-03-10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `idLivre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `anneeParution` int(11) NOT NULL,
  `maisonEdition` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `genreLitteraire` varchar(255) NOT NULL,
  `premiereDeCouverture` varchar(255) NOT NULL,
  `id_bibli` int(11) NOT NULL,
  PRIMARY KEY (`idLivre`),
  KEY `id_bibli` (`id_bibli`),
  KEY `Auteur` (`Auteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`idLivre`, `titre`, `anneeParution`, `maisonEdition`, `Auteur`, `synopsis`, `genreLitteraire`, `premiereDeCouverture`, `id_bibli`) VALUES
(1, 'Les Misérables', 1862, '', 'Victor Hugo', 'Les Misérables est un roman de Victor Hugo publié en 1862. Il a donné lieu à de nombreuses adaptations, au cinéma et sur de nombreux autres supports.\r\n\r\nDans ce roman emblématique de la littérature française qui décrit la vie de pauvres gens dans Paris et la France provinciale du xixe siècle, l\'auteur s\'attache plus particulièrement au destin du bagnard Jean Valjean. C\'est un roman historique, social et philosophique dans lequel on retrouve les idéaux du romantisme et ceux de Victor Hugo concernant la nature humaine.', 'Roman, Tragédie', 'http://localhost/projetWEB/myBibli-v1/img/lesmiserable.jpg', 1),
(2, 'Un rien peut tout changer', 2018, '', 'James Clear', 'Les gens pensent que pour modifier le cours de leur vie, ils doivent faire de grands changements.Dans ce livre, ils découvriront que les plus petits changements couplés à une bonne connaissance de la psychologie et des neurosciences peuvent avoir un effet révolutionnaire sur leur existence et leurs relations.', 'Livre d’auto-assistance', 'http://localhost/projetWEB/myBibli-v1/img/unrien.jpg', 1),
(3, 'Harry Potter à l\'école des sorciers', 1997, '', 'J. K. Rowling\r\n', 'Le jour de ses onze ans, Harry Potter, un orphelin élevé par un oncle et une tante qui le détestent, voit son existence bouleversée. Un géant nommé Hagrid, vient le chercher pour l\'emmener à Poudlard, une école de sorcellerie ! Voler en balai, jeter des sorts, combattre les trolls : Harry se révèle un sorcier doué. Mais quel est le mystère qui l\'entoure ? Et qui est l\'effroyable V..., le mage dont personne n\'ose prononcer le nom ?', 'Roman, littéraire', 'http://localhost/projetWEB/myBibli-v1/img/harry1.jpg', 1),
(4, 'Le Seigneur des anneaux', 1955, '', 'J. R. R. Tolkien', 'Le Seigneur des anneaux est un roman en trois volumes de J. R. R. Tolkien paru en 1954 et 1955. Prenant place dans le monde de fiction de la Terre du Milieu, il suit la quête du hobbit Frodon Sacquet, qui doit détruire l\'Anneau unique afin que celui-ci ne tombe pas entre les mains de Sauron, le Seigneur des ténèbres.', 'Roman, Heroic Fantasy', 'http://localhost/projetWEB/myBibli-v1/img/loth1.jpg', 1),
(5, 'Le Petit Prince', 1943, '', 'Antoine de Saint-Exupéry', 'Dédié à Léon Werth, ce conte philosophique est divisé en 27 chapitres qui racontent les aventures du petit prince. À la suite d’une panne de moteur, un aviateur se retrouve dans le désert du Sahara. Il rencontre le petit prince qui lui demande de lui dessiner un mouton. Étonné de le trouver là, l’aviateur voudrait savoir qui il est et d’où il vient. Le petit prince ne répond pas aux questions mais au fil des chapitres et des jours, l’aviateur reconstitue l’histoire du petit garçon aux cheveux d’or.', '', 'http://localhost/projetWEB/myBibli-v1/img/pttprince.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(255) NOT NULL,
  `prenom_user` varchar(255) NOT NULL,
  `id_biblio` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `id_biblio`) VALUES
(1, 'Derreumaux', 'Valentin', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD CONSTRAINT `bibliotheque_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`id_bibli`) REFERENCES `bibliotheque` (`id_bibli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livres_ibfk_2` FOREIGN KEY (`Auteur`) REFERENCES `auteurs` (`nom_auth`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
