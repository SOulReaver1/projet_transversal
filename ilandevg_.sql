-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 24 mai 2020 à 23:35
-- Version du serveur :  10.0.38-MariaDB-0+deb8u1
-- Version de PHP : 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ilandevg_`
--

-- --------------------------------------------------------

--
-- Structure de la table `answerquestions`
--

CREATE TABLE `answerquestions` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answerquestions`
--

INSERT INTO `answerquestions` (`id`, `id_question`, `name`, `points`) VALUES
(59, 29, 'Moins de 2 fois', 10),
(60, 29, 'Entre 2 et 4 fois', 6),
(61, 29, 'Entre 4 et 6 fois', 3),
(62, 29, 'Plus de 6 fois', 0),
(63, 30, 'Jamais, je les éteins dès que j\'ai terminé de l\'utiliser', 10),
(64, 30, 'Parfois, il m\'arrive de les laisser allumés mais très peu de temps', 6),
(65, 30, 'Souvent, je n\'y porte pas d\'attention particulière', 3),
(66, 30, 'Tout le temps, je les laisse toujours allumés', 0),
(67, 31, 'Je n\'effectue pas de tri sélectif', 0),
(68, 31, 'Je trie un seul type de déchet', 3),
(69, 31, 'Je trie deux types de déchets ou plus', 6),
(70, 31, 'je trie tout type de déchets tout le temps', 10),
(75, 34, 'Je ne prends pas de bain je préfère les douches', 10),
(76, 34, '1 fois par mois', 6),
(77, 34, '2 fois par mois', 3),
(78, 34, 'Plus de 2 fois par mois', 0),
(79, 35, 'À pieds ou à vélo, un peu d\'exercice ne fait pas de mal', 10),
(80, 35, 'En trottinette électrique', 6),
(81, 35, 'En transports en communs', 3),
(82, 35, 'En voiture, en moto, en scooter ou en camion', 0),
(83, 36, 'Le prix', 0),
(84, 36, 'Le label BIO', 6),
(85, 36, 'Le rapport qualité/prix', 3),
(86, 36, 'Son type d\'emballage', 10);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `newletter`
--

CREATE TABLE `newletter` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_views` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `total_views`) VALUES
(1, 1),
(2, 2),
(3, 40);

-- --------------------------------------------------------

--
-- Structure de la table `page_views`
--

CREATE TABLE `page_views` (
  `visitor_ip` varchar(255) NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `page_views`
--

INSERT INTO `page_views` (`visitor_ip`, `page_id`) VALUES
('86.238.245.252', 1),
('86.238.245.252', 2),
('86.238.245.252', 3),
('89.159.57.202', 2),
('89.159.57.202', 3);

-- --------------------------------------------------------

--
-- Structure de la table `profilpictures`
--

CREATE TABLE `profilpictures` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profilpictures`
--

INSERT INTO `profilpictures` (`id`, `name`, `url`) VALUES
(1, 'Dory', 'https://zupimages.net/up/20/19/yvaw.png');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `name`) VALUES
(29, 'Combien de fois par an prends-tu l\'avion ?'),
(30, 'Laisses-tu tes appareils électroniques allumés quand tu ne les utilises pas ?'),
(31, 'Effectuez-vous le tri sélectif de vos déchets ?'),
(34, 'Combien de bains prends-tu par mois ?'),
(35, 'Pour tes trajets quotidiens, tu te déplaces...'),
(36, 'Quand tu fais tes courses, tu regardes en premier...');

-- --------------------------------------------------------

--
-- Structure de la table `recordquestions`
--

CREATE TABLE `recordquestions` (
  `id` int(11) NOT NULL,
  `profil_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recordquestions`
--

INSERT INTO `recordquestions` (`id`, `profil_id`, `created_at`) VALUES
(1, 3, '2020-05-24 22:32:21'),
(2, 2, '2020-05-24 23:30:12'),
(3, 2, '2020-05-24 23:30:52'),
(4, 2, '2020-05-24 23:31:07'),
(5, 2, '2020-05-24 23:31:17'),
(6, 2, '2020-05-24 23:31:22'),
(7, 3, '2020-05-24 23:31:28'),
(8, 4, '2020-05-24 23:31:36'),
(9, 1, '2020-05-24 23:31:58');

-- --------------------------------------------------------

--
-- Structure de la table `resultatecolo`
--

CREATE TABLE `resultatecolo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultatecolo`
--

INSERT INTO `resultatecolo` (`id`, `name`, `status`, `description`, `img`) VALUES
(1, 'Amiral vert', 'Ecolo', 'Tu es l’ Amiral Vert par excellence qui se soucie de son mode de consommation\r\nTu es une personne respectueuse de l’environnement, et tu fais en sorte de préserver la nature pour les générations futures.\r\n\r\nTu l’as bien compris et ce depuis des années, que d’adopter des gestes écologiques permettrait au monde qui t’entoure d’aller de l’avant.\r\n\r\nFélicitations ! Continue sur cette voie.', 'https://zupimages.net/up/20/21/u6t2.png'),
(2, 'Capitaine nature', 'Moyennement ecolo', 'Tu es un Capitaine Nature qui est conscient des problèmes écologiques dans le monde. Tu es du genre à faire ce que tu peux pour l’environnement et de manière générale tu fais attention quand tu consommes. C’est bien ! La planète se porte mieux grâce à toi, tu es un exemple pour la population !', 'https://zupimages.net/up/20/21/1ru7.png'),
(3, 'Sergent gaspillage', 'Moyennement pollueur', 'Tu es un Pollueur qui connaît les enjeux environnementaux actuels. Mais tu es du genre à ne pas trop réfléchir à l’impact environnemental de ton mode de consommation et tu fais ce que la majorité de la population semble faire. Avec quelques efforts, tu pourrais agir pour l’avenir de la planète !', 'https://zupimages.net/up/20/21/med6.png'),
(4, 'Général déchet', 'pollueur', 'Tu es un Général déchet qui consomme sans se soucier des répercussions sur ton environnement et celui des milliards d’habitants dans le monde. Tu ne te sens pas concerné et tu n\'adhères pas aux valeurs de l\'écologie car tu penses ne pas avoir d’impact. N\'oublies pas que si tout le monde fait un effort, la nature pourra être préservée.', 'https://zupimages.net/up/20/21/bmty.png');

-- --------------------------------------------------------

--
-- Structure de la table `resultatecoloconseils`
--

CREATE TABLE `resultatecoloconseils` (
  `id` int(11) NOT NULL,
  `id_result` int(11) NOT NULL,
  `conseil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultatecoloconseils`
--

INSERT INTO `resultatecoloconseils` (`id`, `id_result`, `conseil`) VALUES
(1, 1, 'Fais passer le message sur les actions que tu mènes, tu pourras sensibiliser du monde sur ton passage. \r\n\r\n'),
(2, 1, 'Sensibilise les enfants : ils sont l’avenir de notre planète alors le mieux, c’est de les informer sur les gestes écologiques à adopter !\r\n'),
(3, 2, 'Tu peux consommer maison : pleins de produits d\'entretien et de beauté sont réalisables soi-même à moindres coûts, et en plus, c\'est écolo ! '),
(4, 2, 'Un mot d\'ordre : REUTILISER. Beaucoup d\'objets du quotidien ont des alternatives réutilisables super cool, comme les gourdes par exemple !'),
(5, 3, 'Nous sommes certains que tu possèdes des appareils qui fonctionnent encore, alors ne les remplace pas maintenant et en plus tu feras des économies !'),
(6, 3, 'Fais attention au tri des déchets : en triant parfaitement tes déchets ménagers tu fais un réel geste écologique pour préserver la planète ! '),
(7, 4, ' Éteins ton ordinateur et débranche tes chargeurs après usage : cela te permettra de faire des économies sur tes factures.'),
(8, 4, 'Si tu possèdes un jardin alors lances-toi : fais du compost'),
(9, 4, 'Favorise les trajets à pieds quand tu le peux');

-- --------------------------------------------------------

--
-- Structure de la table `resultatecoloprofil`
--

CREATE TABLE `resultatecoloprofil` (
  `id` int(11) NOT NULL,
  `id_result` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultatecoloprofil`
--

INSERT INTO `resultatecoloprofil` (`id`, `id_result`, `name`, `description`, `img`) VALUES
(1, 1, 'Nicolas Hulot', 'Il est un grand écologiste reconnu de tous. Il constate à l’œil nu les dégradations que l’on fait subir à la planète et l’urgence d’agir . Il crée donc en 1990 la Fondation Nicolas Hulot pour la Nature et l’Homme, reconnue d’utilité publique ! Wow génial ! \r\n\r\n\r\n\r\nPour couronner le tout et puisque que tu sembles réellement concerné, voici nos conseils afin d’améliorer encore plus ton impact écologique au quotidien.', 'https://zupimages.net/up/20/21/3h36.png'),
(2, 2, 'Cameron Diaz', 'Elle répète souvent « La planète a besoin d’une attachée de presse ». Pour elle, la cause écologique est quelque chose est très importante. Elle n’hésite donc pas à se servir de sa notoriété pour changer les mentalités.                                                                                En 2005, elle a produit une série de documentaires sur les animaux en voie de disparition. Elle a même lancé un concours sur le thème « comment sauver la Terre en 60 secondes » et a fait gagner une voiture hybride. De belles initiatives qui contribuent à sauver la planète ! ', 'https://zupimages.net/up/20/21/ewnw.png'),
(3, 3, 'Dwayne Johnson', '  Le célèbre catcheur, acteur et producteur est plus connu pour ses rôles dans de multiples films plutôt que pour son engagement écologique ! Il n’est pas un énorme pollueur mais son mode de consommation a quand même un impact sur l’environnement. Néanmoins il a tenté de faire passer un message sur l’écologie et la défense des animaux, très mal vu aux yeux des internautes.', 'https://zupimages.net/up/20/21/4djw.png'),
(4, 4, '50 Cent', 'Il est l’un des artistes rap, hip-hop les plus emblématiques des Etats-Unis. Il occupe la 5e position du classement des célébrités qui polluent le plus au volant !\r\nEn effet, pour lui il est impossible d’associer carrière professionnel et écologie au quotidien. Il aime les voitures de luxe et ne s’en cache pas, malheureusement des modèles très polluants.\r\n\r\nRassure toi !  tu peux encore troquer tes vieilles habitudes polluantes pour d’autres plus respectueuses de l’environnement en appliquant ces conseils que nous te proposons. ', 'https://zupimages.net/up/20/21/n4c2.png');

-- --------------------------------------------------------

--
-- Structure de la table `shareresult`
--

CREATE TABLE `shareresult` (
  `id` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shareresult`
--

INSERT INTO `shareresult` (`id`, `ip`, `created_at`) VALUES
(2, '82.124.253.11', '2020-05-24 19:20:25');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_profilPic` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `id_group`, `id_profilPic`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 2, 1, 'Ilan', 'JOURNO', 'ilan.journo555@gmail.com', 'aa'),
(3, 2, 1, 'Rendu', 'Jury', 'contact@alguaia.fr', 'aa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answerquestions`
--
ALTER TABLE `answerquestions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newletter`
--
ALTER TABLE `newletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `page_views`
--
ALTER TABLE `page_views`
  ADD KEY `page_id` (`page_id`);

--
-- Index pour la table `profilpictures`
--
ALTER TABLE `profilpictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recordquestions`
--
ALTER TABLE `recordquestions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultatecolo`
--
ALTER TABLE `resultatecolo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultatecoloconseils`
--
ALTER TABLE `resultatecoloconseils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultatecoloprofil`
--
ALTER TABLE `resultatecoloprofil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shareresult`
--
ALTER TABLE `shareresult`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answerquestions`
--
ALTER TABLE `answerquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `newletter`
--
ALTER TABLE `newletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `profilpictures`
--
ALTER TABLE `profilpictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `recordquestions`
--
ALTER TABLE `recordquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `resultatecolo`
--
ALTER TABLE `resultatecolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `resultatecoloconseils`
--
ALTER TABLE `resultatecoloconseils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `resultatecoloprofil`
--
ALTER TABLE `resultatecoloprofil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `shareresult`
--
ALTER TABLE `shareresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `page_views`
--
ALTER TABLE `page_views`
  ADD CONSTRAINT `page_views_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
