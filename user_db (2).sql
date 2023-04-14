-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 avr. 2023 à 15:41
-- Version du serveur : 5.7.31
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprentissage`
--

DROP TABLE IF EXISTS `apprentissage`;
CREATE TABLE IF NOT EXISTS `apprentissage` (
  `id_apprentissage` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `Volonte` varchar(255) NOT NULL,
  `Apprendre` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `Controle` varchar(255) NOT NULL,
  `Autonomie` varchar(255) NOT NULL,
  `Esprit` varchar(255) NOT NULL,
  `Curiosite` varchar(255) NOT NULL,
  `Methodologie` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_apprentissage`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprentissage`
--

INSERT INTO `apprentissage` (`id_apprentissage`, `name_user`, `Volonte`, `Apprendre`, `evaluation`, `Controle`, `Autonomie`, `Esprit`, `Curiosite`, `Methodologie`, `id`) VALUES
(38, 'John Doe', '100', ' 100 ', '100', '70', ' 40', '100', '100', '70', 10);

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

DROP TABLE IF EXISTS `communication`;
CREATE TABLE IF NOT EXISTS `communication` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `orale` varchar(255) NOT NULL,
  `ecrite` varchar(255) NOT NULL,
  `nonverbale` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_comm`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `communication`
--

INSERT INTO `communication` (`id_comm`, `orale`, `ecrite`, `nonverbale`, `active`, `name_user`, `id`) VALUES
(16, '100', '100', '100', '100', 'John Doe', 10);

-- --------------------------------------------------------

--
-- Structure de la table `interpersonnelles`
--

DROP TABLE IF EXISTS `interpersonnelles`;
CREATE TABLE IF NOT EXISTS `interpersonnelles` (
  `id_inter` int(11) NOT NULL AUTO_INCREMENT,
  `travailequipe` varchar(255) NOT NULL,
  `collectif` varchar(255) NOT NULL,
  `coordination` varchar(255) NOT NULL,
  `conflit` varchar(255) NOT NULL,
  `fiabilite` varchar(255) NOT NULL,
  `flexibilite` varchar(255) NOT NULL,
  `respect` varchar(255) NOT NULL,
  `assertivite` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `politesse` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_inter`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `interpersonnelles`
--

INSERT INTO `interpersonnelles` (`id_inter`, `travailequipe`, `collectif`, `coordination`, `conflit`, `fiabilite`, `flexibilite`, `respect`, `assertivite`, `feedback`, `politesse`, `name_user`, `id`) VALUES
(16, '70', ' 70', ' 100', '70', '70', '40', '40', '20', '40', '100', 'John Doe', 10);

-- --------------------------------------------------------

--
-- Structure de la table `intrapersonnelles`
--

DROP TABLE IF EXISTS `intrapersonnelles`;
CREATE TABLE IF NOT EXISTS `intrapersonnelles` (
  `id_intra` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `positive` varchar(255) NOT NULL,
  `ethique` varchar(255) NOT NULL,
  `temps` varchar(255) NOT NULL,
  `pression` varchar(255) NOT NULL,
  `stress` varchar(255) NOT NULL,
  `presence` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `faire_confiance` varchar(255) NOT NULL,
  `confiance_soi` varchar(255) NOT NULL,
  `resilience` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_intra`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intrapersonnelles`
--

INSERT INTO `intrapersonnelles` (`id_intra`, `name_user`, `positive`, `ethique`, `temps`, `pression`, `stress`, `presence`, `motivation`, `faire_confiance`, `confiance_soi`, `resilience`, `id`) VALUES
(16, 'John Doe', ' 100', ' 100', '70', '40', '40', '40', '70', '70', '100', '70', 10);

-- --------------------------------------------------------

--
-- Structure de la table `leadership`
--

DROP TABLE IF EXISTS `leadership`;
CREATE TABLE IF NOT EXISTS `leadership` (
  `id_lead` int(11) NOT NULL AUTO_INCREMENT,
  `responsabilite` varchar(255) NOT NULL,
  `incertitude` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `strategique` varchar(255) NOT NULL,
  `decision` varchar(255) NOT NULL,
  `integrite` varchar(255) NOT NULL,
  `audace` varchar(255) NOT NULL,
  `negociation` varchar(255) NOT NULL,
  `emotionnelle` varchar(255) NOT NULL,
  `professionnalisme` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_lead`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `leadership`
--

INSERT INTO `leadership` (`id_lead`, `responsabilite`, `incertitude`, `vision`, `strategique`, `decision`, `integrite`, `audace`, `negociation`, `emotionnelle`, `professionnalisme`, `name_user`, `id`) VALUES
(16, '100', ' 40', ' 100', '40', '100', '70', '40', '100', '70', '40 ', 'John Doe', 10);

-- --------------------------------------------------------

--
-- Structure de la table `reflexion`
--

DROP TABLE IF EXISTS `reflexion`;
CREATE TABLE IF NOT EXISTS `reflexion` (
  `id_reflexion` int(11) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `analytique` varchar(255) NOT NULL,
  `critique` varchar(255) NOT NULL,
  `creativite` varchar(255) NOT NULL,
  `ouverture` varchar(255) NOT NULL,
  `intuition` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_reflexion`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reflexion`
--

INSERT INTO `reflexion` (`id_reflexion`, `resolution`, `analytique`, `critique`, `creativite`, `ouverture`, `intuition`, `name_user`, `id`) VALUES
(16, '100', '100', '  100 ', '100', ' 100', '100', 'John Doe', 10);

-- --------------------------------------------------------

--
-- Structure de la table `roue`
--

DROP TABLE IF EXISTS `roue`;
CREATE TABLE IF NOT EXISTS `roue` (
  `id_roue` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `apprentissage` varchar(50) NOT NULL,
  `competenceIntra` varchar(50) NOT NULL,
  `reflexion` varchar(50) NOT NULL,
  `communication` varchar(50) NOT NULL,
  `competenceInter` varchar(50) NOT NULL,
  `leadership` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_roue`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roue`
--

INSERT INTO `roue` (`id_roue`, `name_user`, `apprentissage`, `competenceIntra`, `reflexion`, `communication`, `competenceInter`, `leadership`, `id`) VALUES
(26, 'John Doe', '85', ' 65', '90', '100', ' 62', '70', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `phone`, `password`, `user_type`) VALUES
(7, 'Harry', 'harry@gmail.com', '06968849', '$2y$10$Dd1/HlOoe/2pMRkYGZdBJ.567lAFI2sohGGxl58Au801ArTOZ.GU.', 'user'),
(8, 'Maurice Lilian', 'maurice@gmail.com', '44553377', '$2y$10$tA8vVY7sxBlllBeH6ww4hexYqQ/.YjjmWL4eaN/QvteQX.ttsjKwS', 'user'),
(9, 'Admin', 'admin@gmail.com', '9695004', '$2y$10$8Hpu/MIIlMjfWP4YDFpmruyPVImsKnQviW21LUh/iTl7ODtW32CIy', 'admin'),
(10, 'John Doe', 'john@gmail.com', '0789435627', '$2y$10$n.w2EubF321KVjzxm6Ae5OWMdTZJcoj.tvLnIgbVt8BO5aX5oLs/a', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
