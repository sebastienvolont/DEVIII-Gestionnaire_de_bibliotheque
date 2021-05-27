-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 mai 2021 à 10:09
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
-- Structure de la table `bibliotheque`
--

DROP TABLE IF EXISTS `bibliotheque`;
CREATE TABLE IF NOT EXISTS `bibliotheque` (
  `id_biblio` int(11) NOT NULL AUTO_INCREMENT,
  `date_crea` date NOT NULL,
  `nom_bibli` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_biblio`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
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
  `id_livre` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `couverture` text NOT NULL,
  `parution` varchar(255) NOT NULL,
  `auteur` text NOT NULL,
  `statut` varchar(255) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  PRIMARY KEY (`id_livre`),
  KEY `id_bibliotheque` (`id_bibliotheque`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id_livre`, `titre`, `edition`, `genre`, `synopsis`, `couverture`, `parution`, `auteur`, `statut`, `id_bibliotheque`) VALUES
(1, 'TEST titre', 'TEST edition', 'TEST genre', 'TEST syno', 'http:\\\\placehold.it/350xx100', '1999', 'test auteur', 'En cours', 1),
(4, 'Bob Dylan', 'Chartwell Books', 'Biography & Autobiography', 'Bob Dylan: His Life in Pictures does exactly what the title says. In 256 pages with over 300 images it provides a timeline to this amazing career, showing highlights along with more mundane moments at home and on tour. Though this book may not help you to understand Dylan’s lyrics, it provides a brilliant photographic background to his life and music. After a contextualizing introduction, Bob Dylan breaks his life into five chapters that cover the story decade by decade from the 1960s. Each chapter has a detailed timeline and a wealth of information. Robert Allen Zimmerman (as Bob Dylan was born) has had more impact on the music world than could normally be expected of one man. The quicksilver folk hero of the early 1960s has redefined himself regularly over the decades and remains as controversial and brilliant as ever. The voice of the 1960s protest movement, he has not stagnated—over the years, his music has incorporated many styles, including pop music, folk music, gospel, rock, and even jazz. The one continuous thread is that his music is intelligent and literary; he is a poet first and a songwriter—albeit a great songwriter—second. It is Dylan’s words that have ensured his continued importance and not his aging voice. His peers rate him highly: Neil Young, himself no slouch in the music world, said of him in 2005: \"He\'s the master. If I\'d like to be anyone, it\'s him. And he\'s a great writer, true to his music and done what he feels is the right thing to do for years and years and years.\" Joe Strummer praised Dylan as having \"laid down the template for lyric, tune, seriousness, spirituality, depth of rock music.\" And if you judge a musician by his awards, Dylan has done pretty well: from a Lifetime Achievement Award at the Grammies in 1990 to induction into the Rock and Roll Hall of Fame; from France\'s highest cultural award, the \"Commandeur dans l\'Ordre des Arts et des Lettres\" to the Polar Music Prize from the Royal Swedish Academy of Music; from an honorary doctorate awarded by Princeton University (US) to an honorary degree at the University of St. Andrews (Scotland)—not to mention albums of the year, six entries in the Grammy Hall of Fame, a 2000 Academy Award, a 2001 Golden Globe and a 2008 Pulitzer Prize Special Citation. Get an intimate view of this legendary singer-songwriter, artist, and writer through this amazing photographic account of his life.', 'http://books.google.com/books/content?id=e0XnDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2019', 'Harry Shapiro', 'Terminé', 1),
(5, 'Harry Potter and the Cursed Child – Parts One and Two (Special Rehearsal Edition)V2', 'Pottermore Publishing', 'Drama', 'Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play received its world premiere in London’s West End on 30th July 2016. It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children. While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.', 'http://books.google.com/books/content?id=2sSMCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2016', 'J.K. Rowling', 'En cours', 1),
(6, 'Surly Bob', '', '', '', 'http://books.google.com/books/content?id=xKMNAAAAQAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '1881', 'Louisa C. Silke', 'Non lu', 1),
(7, 'A Ceremony Unveiling the Portrait of the Honorable Bob Stump, a Representative in Congress from the Third District of Arizona', '', 'Legislators', '', 'http://books.google.com/books/content?id=mjY2rdRJVHYC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2000', '', 'En cours', 1),
(8, 'Surly Bob', '', '', '', 'http://books.google.com/books/content?id=xKMNAAAAQAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '1881', 'Louisa C. Silke', '', 1),
(9, 'L\'étranger', '', 'Algeria', '', 'http://books.google.com/books/content?id=MKZgvwEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '1957', 'Albert Camus', '', 1),
(10, 'Learn JavaScript By Example', 'CodeToRun', 'Computers', 'This tutorial explains JavaScript from beginning to advance topics using examples, videos, exercises, and practice codes that you can try yourself over at codetorun.com. Upon purchase of this tutorial, you need to send an email to: contact@codetorun.com, in order to receive a validation code, which you need to complete your registration at codetorun.com.', 'http://books.google.com/books/content?id=XCAREAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '', 'CodeToRun', '', 1),
(11, 'Le Petit Prince', '', 'French language', '', '', '1946', 'Antoine de Saint-Exupéry', '', 1),
(12, 'Les Misérables: Saint Denis', '', '', '', 'http://books.google.com/books/content?id=ERVEAAAAYAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '1887', 'Victor Hugo', '', 1),
(16, 'Een appartement in Parijs', 'A.W. Bruna Uitgevers', 'Fiction', 'Parijs, een studio die verstopt ligt aan het einde van een begroeid steegje. De Britse politieagente Madeline heeft dit appartement gehuurd om er tot rust te komen. Maar door een misverstand treft ze er Gaspard, een mensenschuwe schrijver, die naar Parijs is gekomen om er te werken. De twee zien zich gedwongen enkele dagen samen door te brengen. De studio was van de gerenommeerde schilder Sean Lorenz, en ademt nog altijd zijn passie voor licht en kleur. Gebroken door de moord op zijn jonge zoon, is hij het jaar ervoor overleden. Lorenz liet drie schilderijen na, maar die zijn sindsdien spoorloos. Gefascineerd door zijn talent én tragische lot, besluiten Madeline en Gaspard samen uit te zoeken wat er met de kostbare schilderijen gebeurd is. Maar om het echte geheim van Sean Lorenz te kunnen onthullen, moeten zij eerst hun eigen demonen onder ogen komen – tijdens een onderzoek dat hun levens voorgoed zal veranderen... ‘Deze pageturner zit zo goed in elkaar, het zit op minstens hetzelfde niveau als een thriller van Harlan Coben.’ – RTBF', 'http://books.google.com/books/content?id=KA1EDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2018-05-01', 'Guillaume Musso', '', 1),
(17, 'Le seigneur des anneaux', 'Pocket', 'Baggins, Frodo (Fictitious character)', 'French translation of \"The Fellowship of the ring\". Part 1 of \"The Lord of the rings\". Young Frodo and the Companions of the Ring find themselves making a perilous journey accross Middle Earth where Frodo must destroy the powerfull ring before the Dark Lord can get to it.', '', '1986', 'John Ronald Reuel Tolkien', '', 1),
(18, 'Le Seigneur des anneaux (Tome 1) - La fraternité de l\'anneau', 'Christian Bourgois', 'Fiction', 'Depuis sa publication en 1954-1955, le récit des aventures de Frodo et de ses compagnons, traversant la Terre du Milieu au péril de leur vie pour détruire l’Anneau forgé par Sauron, a enchanté des dizaines de millions de lecteurs, de tous les âges. Chef-d’œuvre de la fantasy, découverte d’un monde imaginaire, de sa géographie, de son histoire et de ses langues, mais aussi réflexion sur le pouvoir et la mort, Le Seigneur des Anneaux est sans équivalent par sa puissance d’évocation, son souffle et son ampleur. Cette nouvelle traduction prend en compte la dernière version du texte anglais, les indications laissées par Tolkien à l’intention des traducteurs et les découvertes permises par les publications posthumes proposées par Christopher Tolkien. Ce volume contient 18 illustrations d’Alan Lee, entièrement re-numérisées, d’une qualité inégalée, ainsi que deux cartes (en couleur) de la Terre du Milieu et du Comté.', 'http://books.google.com/books/content?id=np2VDAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2014-10-01T00:00:00+02:00', 'John Ronald Reuel Tolkien', '', 1),
(19, 'Le seigneur des anneaux ou la tentation du mal', 'Presses Universitaires de France', 'Literary Criticism', 'D\'où provient la fascination et la puissance poétiques exercées par \"Le Seigneur des anneaux\" ? Son succès proviendrait-il de sa capacité à légitimer en l\'universalisant, l\'attrait pour la guerre et la mort ? A l\'innocence d\'Adam et Eve voulant goûter un fruit bon et beau, Tolkien oppose un récit où le mal fascine pour ce qu\'il est et non pour le bien, que par ruse, il promet. Pourquoi ? On a souvent reproché à ce livre de véhiculer une idéologie conservatrice, misogyne et raciste. Qu\'enest-il exactement ? En créant une race si perfide qu\'elle doit être exterminée, Tolkien l\'a-t-il dotée de suffisamment d\'irréalité pour ne pas être soupçonné de racisme ? Qui se cache derrière Gollum ? D\'où vient ce regain d\'intérêt pour un ouvrage écrit il y a près d\'un demi-siècle ? S\'appuyant sur les analyses de Foucault, Levi-Strauss, Ricoeur, Jean Cohen, Luc Ferry ou Pierre Macherey, cet essai se propose de répondre à ces questions. Tolkien fait de l\'homme un être de l\'exil qui ne se constitue que lorsqu\'il est mis hors de sa demeure natale. (Sortie du deuxième épisode au cinéma en sept-octobre)', 'http://books.google.com/books/content?id=6dcJCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2002-11-01', 'Isabelle Smadja', '', 1),
(20, 'Le seigneur des anneaux : la communeauté de l\'anneau', 'FichesDeLecture.com', 'Study Aids', 'Cette fiche de lecture sur Le Seigneur des anneaux : la communauté de l\'anneau de J. R. R. Tolkien propose une analyse complète de l\'oeuvre : • un résumé du Seigneur des anneaux : la communauté de l\'anneau • une analyse des personnages • une présentation des axes d\'analyse du Seigneur des anneaux : la communauté de l\'anneau de J. R. R. Tolkien Notre fiche de lecture sur Le Seigneur des anneaux : la communauté de l\'anneau de J. R. R. Tolkien a été rédigée par un professeur de français. À propos de FichesDeLecture.com : FichesdeLecture.com propose plus 2500 analyses complètes de livres sur toute la littérature classique et contemporaine : des résumés, des analyses de livres, des questionnaires et des commentaires composés, etc. Nos analyses sont plébiscitées par les lycéens et les enseignants. Toutes nos analyses sont téléchargeables directement en ligne. FichesdeLecture est partenaire du Ministère de l\'Education.', 'http://books.google.com/books/content?id=La_UCQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2015-06-08', 'Sophie Lecomte', '', 1),
(21, 'La Seigneur des Anneaux 3. Le retour du roi.', '', 'Baggins, Frodo (Fictitious character)', 'De l\'Irlande à la Finlande, J.R.R. Tolkien savait tous les récits des peuples du Nourd-Ouest. Il en a tiré \"Le Silmarillion\",\"Bilbo le Hobbit\" et \"Le Seigneur des anneaux\"', '', '1991-01', 'John Ronald Reuel Tolkien', '', 1),
(22, 'Le seigneur des anneaux : La communauté de l\'anneau. Guide du film', '', '', 'Faites la connaissance de Frodo Baggins et pénétrez dans un monde peuplé de Hobbits, de Magiciens, de Nains et d\'Elfes. Découvrez le secret de l\'Anneau Unique et les créatures terrifiantes du Seigneur Ténébreux, Sauron. Suivez les neuf Compagnons tout au long de leur quête périlleuse. Plus de 70 photos en couleur. De nombreuses images inédites. Des citations tirées du livre. Même le plus petit des individus peut changer le cours des choses.', 'http://books.google.com/books/content?id=O6iwPQAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2001-10', 'Alison Sage', '', 1),
(23, 'Harry Potter: De Volledige Collectie (1-7)', 'Pottermore Publishing', 'Fiction', 'Alle zeven e-boeken uit de, met meerdere prijzen bekroonde Harry Potter-reeks, die meerdere bestsellers bevat, beschikbaar als een download met prachtige kaftontwerpen van Olly Moss. Geniet van de verhalen die de verbeelding van miljoenen wereldwijd prikkelde.', 'http://books.google.com/books/content?id=ibF2CwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2016-01-28', 'J.K. Rowling', '', 1),
(24, 'The Bob Dylan Scrapbook, 1956-1966', '', 'Biography & Autobiography', 'Offers insight into one of the musician\'s most eventful and formative periods, tracing his arrival in New York and providing on the accompanying CD excerpts from early interviews and his 1965 performance at the Newport Folk Festival.', 'http://books.google.com/books/content?id=ytkHAQAAMAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2005-09-13', 'Robert Santelli', 'En cours', 1),
(25, 'Replayv2', 'Suma', 'Fiction', 'Tudo que Andrew Stilman queria era uma segunda chance. Após partir o coração da mulher que amava, seu maior desejo era voltar no tempo e consertar os erros, mas isso é impossível – ou, ao menos, era o que ele pensava. Na manhã do dia 9 de julho de 2012, durante sua caminhada matinal às margens do Rio Hudson, o prestigioso repórter Andrew Stilman é violentamente atacado, sem conseguir ver o criminoso. Após sua morte, o inesperado acontece. O jornalista não vê uma luz no fim do túnel, nem muito menos abre os olhos no céu, mas acorda dois meses antes de seu assassinato. Quando acorda, Andrew está de volta ao dia 9 de maio do mesmo ano. Ele vai reviver os dois próximos meses atento a qualquer detalhe que possa ajudá-lo a descobrir quem o agrediu – ou melhor, irá agredi-lo – dois meses depois. Do coração de Nova York até as ruas de Buenos Aires, Andrew vive uma aventura repleta de reviravoltas, enquanto tenta salvar a própria pele e não decepcionar seu grande amor mais uma vez. O protagonista de\" Replay\", best-seller de Marc Levy, além de consertar os erros que cometeu, terá de correr contra o tempo para tentar evitar sua morte e encontrar seus possíveis assassinos.', 'http://books.google.com/books/content?id=4aiKAAAAQBAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2013-08-27', 'Marc Levy', 'Non lu', 1),
(27, 'Bob Marley', '', '', 'De 25 songs in dit boek zijn stuk voor stuk popklassiekers, die mensen wereldwijd blijven ontroeren en inspireren. Niemand die daar mooiere verhalen over kan schrijven dan Karel Michiels a.k.a. Jah Shakespear, wellicht de grootste reggaekenner van de Lage Landen.0Michiels heeft Bob Marley & The Wailers live gezien, en interviews gedaan met zowat al zijn zonen. In Jamaica bezocht hij de plekken waar Marley gewoond en gewerkt heeft. In zijn bibliotheek staan alle relevante boeken die ooit over Bob Marley verschenen zijn. Geen daarvan werd oorspronkelijk in het Nederlands geschreven. Dit is het eerste boek over de koning van de reggae in ons taalgebied.0Karel Michiels verweeft 25 essentiële songs van Marley met zijn persoonlijke ervaringen in de wereld van reggae en rastafari, coole weetjes en goed gefundeerde muzikale en biografische background.', '', '2020', 'Karel Michiels', 'Non lu', 1),
(28, 'Harry Potter en de steen der wijzen', '', 'Children\'s stories', 'Na de dood van zijn ouders woont Harry Potter in de bezemkast bij zijn zeer onvriendelijke tante en oom. Op zijn elfde hoort hij dat hij een tovenaar is. Dat verandert zijn hele leven. Vanaf ca. 11 jaar.', 'http://books.google.com/books/content?id=WDFWSwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2002', 'J. K. Rowling', 'Non lu', 1),
(29, 'De la mer du Nord à la mer Baltique. Identités, contacts et communications au Moyen Âge', 'Publications de l’Institut de recherches historiques du Septentrion', 'History', 'Au Moyen Âge, la mer du Nord a permis les contacts entre les populations de ses régions riveraines: les eaux séparant les îles Britanniques, le continent et la Scandinavie ne voyaient pas seulement se déplacer des missionnaires et des marchands, car c\'est également de la mer que l\'on vit arriver les vikings. La mer Baltique était en revanche beaucoup moins connue des auteurs occidentaux, qui étaient frappés par la multiplicité des peuples et des cultures qui en occupaient les rives : on mentionnait des ports de traite, des voyages de marchands, des populations aux coutumes étranges. Comparer les espaces de la mer du Nord et de la mer Baltique en tant que zones de contacts au Moyen Âge est une tâche difficile : non seulement les spécialistes ne prennent que trop rarement connaissance de leurs recherches respectives, mais l\'horizon international nécessite la prise en compte de traditions historiographiques dans une multitude de langues nationales. Ce volume présente les résultats d\'un atelier interdisciplinaire tenu à Boulogne-sur-Mer en octobre 2009, qui a réuni des chercheurs d\'Europe du Nord-Ouest (Belgique, France, Luxembourg, Royaume-Uni) et du Centre-Est (Pologne et République tchèque) en soulignant les apports d\'une nouvelle génération d\'historiens et d\'archéologues dans un domaine qui s\'est radicalement transformé depuis une quinzaine d\'années.', 'http://books.google.com/books/content?id=CYVZDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2018-05-02', 'Alban Gautier', 'Non lu', 1),
(30, 'Les Seigneurs des anneaux', '', '', '', '', '1972', 'J. R. R. Tolkien', 'Non lu', 1),
(31, 'Tactics for non military bodies. Adapted to the instruction of political associations, Police Forces, ... Odd-Fellows, and other Civic Societies', '', '', '', 'http://books.google.com/books/content?id=oSBXAAAAcAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '1870', 'Emory UPTON', 'Non lu', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(11, 'seb@mail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$Ny9LemJqQWZvdTQ4T09QaA$fPIzyFzvi5YupaJetjAR7pFyEYFMYUbwv2d8w3M/xJY'),
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
