-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 18 mai 2018 à 10:27
-- Version du serveur :  10.0.34-MariaDB
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l_bd1`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `rang` int(11) NOT NULL DEFAULT '1',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `Actif` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mdp`, `rang`, `nom`, `prenom`, `email`, `telephone`, `Actif`) VALUES
(1, 'kems', '123', 2, 'badji', 'nasnas', 'kem@hotmail.com', '0621258311', 0),
(4, 'Declan', 'rutrum', 1, 'Ferguson', 'Barretta', 'vel@ametultriciessem.eda', '0611289539', 0),
(5, 'Evelyn', 'ultrices', 1, 'Vasquez', 'Aphrodite', 'posuere.enim@cubiliaCurae.ca', '0678515060', 0),
(6, 'Griffin', 'conubia', 1, 'Larsen', 'Victoria', 'lacus.Mauris@ac.co.uk', '0693511928', 0),
(7, 'Lee', 'fermentum', 1, 'Gates', 'Willa', 'ac.sem.ut@ac.ca', '0686717824', 0),
(8, 'Kadeem', 'in', 1, 'Mack', 'Audrey', 'lorem.vitae.odio@Phaselluselit.edu', '0686977542', 0),
(9, 'Kamal', 'mauris.', 1, 'Vega', 'Judah', 'eu.lacus.Quisque@Nuncsollicitudin.co.uk', '0655808072', 0),
(11, 'Cameron', 'lorem', 1, 'Foster', 'Drew', 'enim.consequat@lobortis.net', '0649805859', 0),
(12, 'Keith', 'id', 1, 'Harrell', 'Cherokee', 'Donec@consectetuer.ca', '0611392649', 0),
(13, 'Neil', 'malesuada', 1, 'Butler', 'Summer', 'Sed.congue@et.net', '0623079677', 0),
(14, 'Noble', 'magna', 1, 'Brooks', 'Finn', 'dolor.Fusce.mi@arcueu.net', '0688293820', 0),
(15, 'Timon', 'sit', 1, 'Beach', 'Jordan', 'et.malesuada@utodio.com', '0681043127', 0),
(16, 'Eagan', 'at', 1, 'Pittman', 'Kylynn', 'est@ultricesposuere.edu', '0614331669', 0),
(17, 'Jenna', 'ad', 1, 'Brock', 'Noah', 'malesuada.Integer@et.edu', '0666926432', 0),
(18, 'Cheryl', 'ante', 1, 'Kochai', 'Karleigh', 'euismod.in@ornarelectus.com', '0688731929', 0),
(21, 'Emerson', 'tincidunt', 1, 'Day', 'Eleanor', 'Pellentesque@leoin.ca', '0602602691', 0),
(22, 'Sylvester', 'nisl.', 1, 'George', 'Merrill', 'pharetra@amet.net', '0601790801', 0),
(24, 'Micah', 'scelerisque', 1, 'Becker', 'Samson', 'Sed.nunc.est@gravidaPraesent.ca', '0699873852', 0),
(25, 'Brian', 'vehicula', 1, 'Callahan', 'Troy', 'urna.et.arcu@Etiambibendumfermentum.org', '0603247439', 0),
(26, 'Callie', 'Aliquam', 1, 'Austin', 'Lareina', 'eu@lacusAliquamrutrum.ca', '0670257084', 0),
(27, 'Colton', 'placerat.', 1, 'Rutledge', 'Ali', 'libero.lacus.varius@purus.ca', '0698661859', 0),
(28, 'Brady', 'mollis', 1, 'Robinson', 'Anastasia', 'velit.egestas.lacinia@erateget.edu', '0669378996', 0),
(29, 'Lysandra', 'pretium', 1, 'Gibbs', 'Jesse', 'imperdiet@dolor.org', '0653211219', 0),
(31, 'Griffin', 'volutpat.', 1, 'Coffey', 'Amber', 'non@adipiscing.com', '0606543925', 0),
(32, 'McKenzie', 'sem', 1, 'Greer', 'Phelan', 'sit.amet@magnaSuspendissetristique.edu', '0615038917', 0),
(33, 'Blossom', 'Vestibulum', 1, 'Hammond', 'Chadwick', 'neque@aliquetdiam.net', '0668777675', 0),
(34, 'Ryder', 'Pellentesque', 1, 'Newton', 'Isaiah', 'eget.massa@pellentesque.ca', '0625409232', 0),
(35, 'Talon', 'non', 1, 'Owen', 'Aidan', 'amet.lorem.semper@lacusEtiam.net', '0691326528', 0),
(36, 'Drew', 'lobortis,', 1, 'Lara', 'Clementine', 'elit@mauris.co.uk', '0687812268', 0),
(37, 'Garth', 'a,', 1, 'Herrera', 'Fletcher', 'lorem@utnisi.com', '0675881219', 0),
(38, 'Rina', 'pede,', 1, 'Flores', 'Lunea', 'Quisque.fringilla.euismod@nisi.net', '0659507503', 0),
(39, 'Seth', 'mauris', 1, 'Gomez', 'Norman', 'sem.ut.dolor@Praesentluctus.ca', '0618046564', 0),
(40, 'Signe', 'convallis', 1, 'Underwood', 'Damian', 'eu.augue@vulputatevelit.org', '0639710309', 0),
(41, 'Illiana', 'lorem', 1, 'Gilbert', 'Carlos', 'ridiculus@Curabiturconsequatlectus.net', '0651753084', 0),
(42, 'Sopoline', 'Suspendisse', 1, 'Rowe', 'Shad', 'adipiscing.elit@magnisdis.edu', '0630543079', 0),
(43, 'Heather', 'sagittis', 1, 'Dean', 'Reese', 'pharetra.sed.hendrerit@eu.co.uk', '0682840054', 0),
(46, 'Chester', 'Donec', 1, 'Mayo', 'Isabella', 'iaculis.quis.pede@ipsum.co.uk', '0671567458', 0),
(47, 'Sandra', 'cubilia', 1, 'Holloway', 'Wylie', 'elit.dictum.eu@interdumliberodui.org', '0638921741', 0),
(48, 'Tallulah', 'pretium', 1, 'England', 'Lars', 'Donec@nislQuisque.ca', '0632701653', 0),
(49, 'Vance', 'Mauris', 1, 'Warren', 'Dean', 'auctor@convallis.net', '0640608225', 0),
(50, 'Amir', 'neque.', 1, 'Bass', 'Ira', 'ipsum.Curabitur@enimgravidasit.com', '0633873332', 0),
(51, 'Demetrius', 'malesuada', 1, 'Watkins', 'Nerea', 'venenatis.vel@sem.net', '0600193659', 0),
(52, 'Yolanda', 'Phasellus', 1, 'Shaffer', 'Zenia', 'Phasellus.ornare@Nulla.net', '0613249595', 0),
(204, 'Timon', 'sit', 1, 'Beach', 'Jordan', 'et.malesuada@utodio.com', '0681043127', 0),
(205, 't', 't', 1, 't', 't', 'kemisse@hotmail.com', 't', 0),
(206, 'a', 'a', 1, 'a', 'a', 'kemisse@hotmail.com', 'a', 0),
(207, 'a', 't', 1, 'b', 'b', 'kemisse@hotmail.com', 'b', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
