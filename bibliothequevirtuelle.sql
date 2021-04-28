-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 avr. 2021 à 08:12
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `copie_bibli_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `id_biblio` int NOT NULL AUTO_INCREMENT,
  `date_crea` date NOT NULL,
  `nom_bibli` varchar(25) NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_biblio`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_biblio`, `date_crea`, `nom_bibli`, `id_user`) VALUES
(1, '2021-04-01', 'Bibli-1', 2);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210327104015', '2021-03-27 10:41:07', 56);

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id_livre` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `couverture` text NOT NULL,
  `parution` int NOT NULL,
  `auteur` text NOT NULL,
  `id_bibliotheque` int NOT NULL,
  PRIMARY KEY (`id_livre`),
  KEY `id_bibliotheque` (`id_bibliotheque`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id_livre`, `titre`, `edition`, `genre`, `synopsis`, `couverture`, `parution`, `auteur`, `id_bibliotheque`) VALUES
(1, 'TEST titre', 'TEST edition', 'TEST genre', 'TEST syno', 'http:\\\\placehold.it/350xx100', 1999, 'test auteur', 1),
(4, 'Bob Dylan', 'Chartwell Books', 'Biography & Autobiography', 'Bob Dylan: His Life in Pictures does exactly what the title says. In 256 pages with over 300 images it provides a timeline to this amazing career, showing highlights along with more mundane moments at home and on tour. Though this book may not help you to understand Dylan’s lyrics, it provides a brilliant photographic background to his life and music. After a contextualizing introduction, Bob Dylan breaks his life into five chapters that cover the story decade by decade from the 1960s. Each chapter has a detailed timeline and a wealth of information. Robert Allen Zimmerman (as Bob Dylan was born) has had more impact on the music world than could normally be expected of one man. The quicksilver folk hero of the early 1960s has redefined himself regularly over the decades and remains as controversial and brilliant as ever. The voice of the 1960s protest movement, he has not stagnated—over the years, his music has incorporated many styles, including pop music, folk music, gospel, rock, and even jazz. The one continuous thread is that his music is intelligent and literary; he is a poet first and a songwriter—albeit a great songwriter—second. It is Dylan’s words that have ensured his continued importance and not his aging voice. His peers rate him highly: Neil Young, himself no slouch in the music world, said of him in 2005: \"He\'s the master. If I\'d like to be anyone, it\'s him. And he\'s a great writer, true to his music and done what he feels is the right thing to do for years and years and years.\" Joe Strummer praised Dylan as having \"laid down the template for lyric, tune, seriousness, spirituality, depth of rock music.\" And if you judge a musician by his awards, Dylan has done pretty well: from a Lifetime Achievement Award at the Grammies in 1990 to induction into the Rock and Roll Hall of Fame; from France\'s highest cultural award, the \"Commandeur dans l\'Ordre des Arts et des Lettres\" to the Polar Music Prize from the Royal Swedish Academy of Music; from an honorary doctorate awarded by Princeton University (US) to an honorary degree at the University of St. Andrews (Scotland)—not to mention albums of the year, six entries in the Grammy Hall of Fame, a 2000 Academy Award, a 2001 Golden Globe and a 2008 Pulitzer Prize Special Citation. Get an intimate view of this legendary singer-songwriter, artist, and writer through this amazing photographic account of his life.', 'http://books.google.com/books/content?id=e0XnDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 2019, 'Harry Shapiro', 1),
(5, 'Harry Potter and the Cursed Child – Parts One and Two (Special Rehearsal Edition)', 'Pottermore Publishing', 'Drama', 'Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play received its world premiere in London’s West End on 30th July 2016. It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 'http://books.google.com/books/content?id=2sSMCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 2016, 'J.K. Rowling', 1),
(6, 'Bob Dylan', 'Frances Lincoln Children\'s Books', 'Rock musicians', 'Bob Dylan tells the inspiring story of one of the most influential musicians of all time.', 'http://books.google.com/books/content?id=6zbWDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 2020, 'Maria Isabel Sanchez Vegara', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(2, 'admin@mediaforce.com', '[]', '$2y$13$3uRLsI83fuOeHTS1DapbIO9MHbrQ3q.w1sXdLW7/mJwslnVZCMNMi'),
(3, 'charlesparm@gmail', '[]', '$argon2id$v=19$m=65536,t=4,p=1$BWxhPQPgJhwH3qNf1IpD1g$bA3co6TsvFhxAYqByvGmRP/SnQs08YAxcr7k+QztGIw'),
(4, 'charlesparm@gmail.com', '[]', '$2y$13$yjJ3Vn5BtBtrLCI6sq8h2.x7QC152gt1cRnRQV2OszYc7hSHl/DVe'),
(5, 'carlos', '[]', '$2y$13$wXF/Cdu/RAtLDNEyxtOkpennA56.JYGHAG4oxJTNuLjaqidfNNsg2'),
(6, 'carl', '[]', '$2y$13$Z9VjjZRHUOe/FTnjbotFBuTwXMdQNY6EvvNJwDs5siXnPTz2BaHTu'),
(7, 'carlo92', '[]', '$2y$13$ei56hkOkK3mZi/NjnI7guOAzwHGY3jtfRqRXi.W7uZPB4FGDYVYSW'),
(8, 'charlesparm@gmail.fr', '[]', '$2y$13$bodT//Y3XAe1vhI/lB7W8eQ1ASCGUhtxoLdGjupuRv/ywi1SimVvu'),
(9, 'fergegeg', '[]', '$2y$13$8XSzBIpgvB/HTHYshVKjtuovNxndnI2uBS0LhqXSAfllkjB8Os3O6'),
(10, 'edvbefkjvb', '[]', '$2y$13$KS00LCxLVNzIrj00Ew0vSeb8aG.FVd9Qakfy9eBHb8lc.CECVrhp2'),
(11, 'seb@mail.com', '[]', 'R8DKGb0vpFBRIBKHfrwujW11R1iBGuyjfrm+q+M1ZNINC6+ms/VyzdAzWMSxpNiWiyNnrSLDCFSsX2fBgAkR9w=='),
(12, 'test12@gmai.com', '[]', 'R8DKGb0vpFBRIBKHfrwujW11R1iBGuyjfrm+q+M1ZNINC6+ms/VyzdAzWMSxpNiWiyNnrSLDCFSsX2fBgAkR9w=='),
(13, 'azdzadza@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$UndYWGc4S29tVVl4RGdSLw$a8/HCDXgzZUoK5Wk8zZliIgr1sFggpNI0kkn4+ITHms'),
(14, 'azdzadzadza@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$VmJuN1ZqSmUuYWxHd2tNSw$obxCMmFeT0HXyvS6fuRtpvZvFQ8Q4t8TmJ/VBWYYJ2k'),
(15, 'test13@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$dElIYlBPb3Y5QlptNVdMTg$nvvRQbDKBIWGYfXPlYeOtUsN0+fbSBOibQilQYMVWuM'),
(16, 'test14@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$Y1hkU09MUWdodTNFNkZNZA$Yem/t48AR73nOYytXvBaTicXu8ZO3xbsCVNU7N9TIbA'),
(17, 'test15@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$aVVqeS5IdE81b3pVZ0VxNA$29L8D9Cz6WyqNqufH0VV5VRvcd9dOlROn0YpoSfWqVE');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD CONSTRAINT `bibliotheque_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_biblio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
