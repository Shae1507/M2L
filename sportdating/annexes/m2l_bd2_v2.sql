-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 mai 2018 à 22:07
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l_bd2`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `descrip` text NOT NULL,
  `avatar` text NOT NULL,
  `actif` int(11) DEFAULT NULL,
  `catdata` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `email`, `mdp`, `telephone`, `sexe`, `age`, `ville`, `niveau`, `sport`, `jour`, `heure`, `descrip`, `avatar`, `actif`, `catdata`) VALUES
(1, 'BADJI', 'Yassine', 'k@1.com', '1', '123', 'Homme', 18, 'Alfortville', 'Niveau', 'Sport', 'Jour', 'Tranche horraire', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know extremely painful.', '', NULL, NULL),
(2, 'Bouret', 'Lou', 'lou.bouret@hotmail.fr', 'toto', '0607449878', 'femme', 22, 'Tomblaine', 'confirmé', 'Equitation', 'Indéfini', 'Indéfini', 'Le cheval, le cheval c est trop génial', 'https://image.noelshack.com/fichiers/2018/20/7/1526851867-bla.jpg', 0, NULL),
(3, 'Artichaud', 'Etienne', 'e@orange.fr', 'titeuf', '0674895741', 'homme', 45, 'Baccarat', 'Débutant', 'Volley', 'Indéfini', 'Indéfini', 'blabla', '', 0, NULL),
(4, 'Patate', 'Toto', 'aze@toto.fr', 'azerty', '0609080701', 'homme', 33, 'Baccarat', 'Moyen', 'Equitation', 'Indéfini', 'Indéfini', 'azerlk,k,lk,qsd', 'https://image.noelshack.com/fichiers/2018/20/7/1526852188-tab.jpg', 0, NULL),
(5, 'Loupe', 'Ella', 'aze.rty@hotmail.fr', 'Rate', '0608050402', 'Femme', 13, 'Algrange', 'Debutant', 'Rugby', 'Jour', 'Tranche horraire', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `sports` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sports`
--

INSERT INTO `sports` (`sports`) VALUES
('Tennis'),
('Football'),
('Basketball'),
('Rugby'),
('Baseball'),
('Equitation'),
('Aïkido'),
('Danse'),
('Boxe'),
('Canoë'),
('Gymnastique'),
('Natation'),
('Athlétisme'),
('Judo'),
('Volley'),
('Badmington'),
('Escrime'),
('Karaté'),
('Cyclisme'),
('Handball'),
('Lutte'),
('Taekwondo'),
('Tennis de table'),
('Triathlon'),
('Yoga'),
('Echecs'),
('Escalade'),
('Course'),
('Ultimate');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `villes` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`villes`) VALUES
('Indéfini'),
('Algrange'),
('Amnéville'),
('Ars-sur-Moselle'),
('Audun-le-Tiche'),
('Baccarat'),
('Bar-le-Duc'),
('Behren-les-Forbach'),
('Bitche'),
('Blénod-les-Pont-à-Mousson'),
('Boulay-Moselle'),
('Bouxières-aux-Dames'),
('Bouzonville'),
('Capavenir Vosges'),
('Champigneulles'),
('Charmes'),
('Commercy'),
('Creutzwald'),
('Dieulouard'),
('Dombasle-sur-Meurthe'),
('Ecrouves'),
('Epinal'),
('Essey-les-Nancy'),
('Fameck'),
('Farébersviller'),
('Faulquemont'),
('Florange'),
('Folschviller'),
('Forbach'),
('Freyming-Merlebach'),
('Frouard'),
('Gérardmer'),
('Golbey'),
('Guenange'),
('Hagondange'),
('Hayange'),
('Heillecourt'),
('Herserange'),
('Hettange-Grande'),
('Hombourg-Haut'),
('Homécourt'),
('Jarny'),
('Jarville-la-Malgrange'),
('Joeuf'),
('La Bresse'),
('Laxou'),
('Le Ban-Saint-Martin'),
('Le Val-d Ajol'),
('L Hôpital'),
('Ligny-en-Barrois'),
('Liverdun'),
('Longuyon'),
('Longwy'),
('Ludres'),
('Lunéville'),
('Maizières-les-Metz'),
('Malzéville'),
('Marange-Silvange'),
('Marly'),
('Maxéville'),
('Metz'),
('Mirecourt'),
('Mondelange'),
('Montigny-les-Metz'),
('Mont-Saint-Martin'),
('Moulin-les-Metz'),
('Moyeuvre-Grande'),
('Nancy'),
('Neufchâteau'),
('Neuves-Maisons'),
('Nilvange'),
('Pagny-sur-Moselle'),
('Petite-Rosselle'),
('Phalsbourg'),
('Pompey'),
('Pont-à-Mousson'),
('Pulnoy'),
('Rambervillers'),
('Raon-l Etape'),
('Remiremont'),
('Rombas'),
('Saint-Avold'),
('Saint-Dié-des-Vosges'),
('Saint-Max'),
('Saint-Mihiel'),
('Saint-Nabord'),
('Saint-Nicolas-de-Port'),
('Sarralbe'),
('Sarrebourg'),
('Sarreguemines'),
('Seichamps'),
('Seremange-Erzange'),
('Stiring-Wendel'),
('Talange'),
('Terville'),
('Thionville'),
('Tomblaine'),
('Toul'),
('Uckange'),
('Val-de-Briey'),
('Vandoeuvre-les-Nancy'),
('Verdun'),
('Villers-les-Nancy'),
('Villerupt'),
('Vittel'),
('Woippy'),
('Yutz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
