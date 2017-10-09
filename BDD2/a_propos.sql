-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 24 Août 2015 à 14:55
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `a_propos`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
  `user` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administration`
--

INSERT INTO `administration` (`user`, `password`, `admin`) VALUES
('auto Ã©cole plus', '123456', 1);

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE IF NOT EXISTS `candidats` (
  `identifiant` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` text NOT NULL,
  `date_naiss` date NOT NULL,
  `num_telephone` varchar(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `num_inscription` int(10) NOT NULL,
  `type_permis` varchar(25) NOT NULL,
  `type_lecon` varchar(150) NOT NULL,
  `num_CNI` int(11) NOT NULL,
  `date_debut_cours` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `versement` float NOT NULL,
  `Date_versement` date NOT NULL,
  `Prix_total` float NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `remarque` text NOT NULL,
  `foto` varchar(30) NOT NULL DEFAULT 'icone_personnage.png',
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Contenu de la table `candidats`
--

INSERT INTO `candidats` (`identifiant`, `nom`, `prenom`, `adresse`, `date_naiss`, `num_telephone`, `date_inscription`, `num_inscription`, `type_permis`, `type_lecon`, `num_CNI`, `date_debut_cours`, `email`, `versement`, `Date_versement`, `Prix_total`, `password`, `admin`, `remarque`, `foto`) VALUES
(50, 'Boulahya', 'Yacine', '1,rue du 20 AoÃ»t â€“ Oran', '1993-03-19', '0552847527', '2014-04-26', 9709634, 'handiconduite', 'pratique', 800347, '2014-04-16', 'Yacine@hotmail.fr', 1000, '2014-04-30', 15100, 'boudaoud', 0, 'par chÃ¨que', 'icone_personnage.png'),
(55, 'falleh', 'Fatima zohra', 'CitÃ© Hosn El Djiwar, BÃ¢timent C6 - Logements 287 - USTO', '1990-11-13', '0669576909', '2014-05-04', 38257865, 'permisB', 'pratique', 200145, '2014-05-04', 'falleh@hotmail.fr', 20000, '2014-05-04', 20000, 'falleh', 0, '', 'CassieHijabMUG.jpg'),
(56, 'Hakiki', 'Lotfi', '42bis,Rue desj ardins-Oran', '1993-05-13', '0553837262', '2014-05-04', 30653111, 'permisAAC', 'pratique', 100589, '2014-05-04', 'Hakiki-lotfi@hotmail.fr', 8200, '2015-08-27', 28000, 'hakiki', 0, 'rien !', 'img2.jpg'),
(57, 'Bourakba', 'Naima', '1,rue du 20 AoÃ»t â€“ Oran', '1990-05-01', '0774586954', '2014-05-04', 84353257, 'permisE(B)', 'pratique', 200698, '2014-05-04', 'naima@hotmail.com', 8000, '2014-05-04', 20000, '4ZndGF13', 0, '', 'icone_personnage.png'),
(92, 'kaddour ahmed', 'slimane', '9 rue ibrahim djelloul', '1992-05-21', '33669579609', '2014-05-16', 21692770, 'permisE(B)', 'theorique', 547854, '2014-05-28', 'Slimane@hotmail.fr', 10000, '2014-05-16', 20000, 'tpk0D6Ex', 0, '', 'img2.jpg'),
(93, 'boudaoud', 'wafa', '9 rue des 8 metres coop el nasr poni du jour', '1993-05-22', '33669579608', '2014-05-16', 744367, 'permisE(B)', 'pratique', 500463, '2014-05-14', 'wafou31-06@hotmail.fr', 10000, '2014-05-16', 20000, 'vBYRpeoB', 0, '', 'icone_personnage.png'),
(94, 'Belabbes', 'khadidja', '43bis,Rue desj ardins-Oran', '1985-11-13', '0558965874', '2014-05-18', 56260370, 'permisB', 'permis obtenue', 700322, '2014-05-20', 'khadidija@hotmail.com', 10000, '2014-05-18', 20000, 'khadidja', 0, '', 'photo.jpg'),
(95, 'Lachachi', 'Benyounes', '2,rue du 20 AoÃ»t â€“ Oran', '1990-11-02', '0558584796', '2014-05-18', 14139219, 'permisB', 'theorique', 700323, '2014-05-20', 'Benyounes@live.fr', 15000, '2014-05-18', 20000, 'xIvVsMuX', 0, '', 'img2.jpg'),
(96, 'Benmalek', 'Amine', '74 Rue Mezouaghi Med - Maraval', '0980-01-11', '0778965863', '2014-05-18', 4591279, 'handiconduite', 'theorique', 700324, '2014-05-21', 'amine@hotmail.com', 5000, '2014-05-18', 15100, 'amine', 0, '', 'img3.jpg'),
(98, 'Boudali', 'Yamina', 'CitÃ© Hosn El Djiwar, BÃ¢timent C6 - Logements 286 - USTO', '1987-11-13', '0775486582', '2014-05-18', 50839813, 'handiconduite', 'theorique', 700326, '2014-05-21', '', 4000, '2014-05-18', 15100, 'nQ2JpVqL', 0, '', 'icone_personnage.png'),
(103, 'Benhamza', 'Bachir', 'CitÃƒÂ© Hosn El Djiwar, Batiment C7 - Logements 287 - USTO', '1992-11-13', '0552589696', '2014-05-25', 46006896, 'permisAAC', 'theorique', 700321, '2014-05-27', 'Bachir@hotmail.com', 2000, '2014-05-25', 20000, '224NnFgS', 0, '', 'icone_personnage.png'),
(104, 'Messoudi', 'Rachida', 'CitÃƒÂ© Hosn El Djiwar, Batiment C8 - Logements 287 - USTO', '1990-11-13', '0773248596', '2014-05-25', 51630858, 'permisE(B)', 'theorique', 700322, '2014-05-28', 'Rachida@hotmail.fr', 10000, '2014-05-25', 20000, 'ZGyH5hGZ', 0, '', 'icone_personnage.png'),
(105, 'Bousmaha', 'Ali', '43bis,Rue desj ardins-Oran', '1987-12-18', '0773258476', '2014-05-25', 15609257, 'permisB', 'theorique', 700323, '2014-05-28', 'ali-31@gmail.com', 20000, '2014-05-25', 20000, 'ugNaAjRR', 0, 'hvh', 'icone_personnage.png'),
(106, 'Benahmed', 'Houaria', '4bis,Rue desj ardins-Oran', '1990-02-14', '0558693652', '2014-05-25', 30580695, 'permisAAC', 'pratique', 700325, '2014-05-22', 'Houaria@hotmail.fr', 8000, '2014-05-25', 28000, 'zFbdpBwC', 0, '', 'icone_personnage.png');

-- --------------------------------------------------------

--
-- Structure de la table `examens`
--

CREATE TABLE IF NOT EXISTS `examens` (
  `codeE` int(10) NOT NULL AUTO_INCREMENT,
  `date_premier_E` date NOT NULL,
  `Date_limit_insc` date NOT NULL,
  `date_deuxieme_E` date NOT NULL,
  `date_limit_inscr2` date NOT NULL,
  `heureE` time NOT NULL,
  `lieuE` text NOT NULL,
  `nom_permis` varchar(150) NOT NULL,
  PRIMARY KEY (`codeE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `examens`
--

INSERT INTO `examens` (`codeE`, `date_premier_E`, `Date_limit_insc`, `date_deuxieme_E`, `date_limit_inscr2`, `heureE`, `lieuE`, `nom_permis`) VALUES
(15, '2014-05-15', '2014-05-15', '2014-05-16', '2014-05-14', '08:00:00', 'manÃ¨ge', 'permisB'),
(16, '2014-05-06', '2014-05-04', '2014-05-29', '2014-05-27', '00:00:00', 'Parc attraction(manÃ¨ge)', 'permisAAC'),
(17, '2014-05-21', '2014-05-19', '2014-06-19', '2014-06-17', '10:00:00', 'Parc d''attraction(manÃ¨ge)', 'permis E(B)'),
(18, '2014-05-23', '2014-05-22', '2014-06-27', '2014-06-26', '00:00:00', 'Parc attraction(manÃ¨ge)', 'handiconduite');

-- --------------------------------------------------------

--
-- Structure de la table `lecon`
--

CREATE TABLE IF NOT EXISTS `lecon` (
  `Num_lecon` int(11) NOT NULL AUTO_INCREMENT,
  `Jour_lecon` varchar(20) NOT NULL,
  `Heure_lecon` time NOT NULL,
  `idM` int(11) NOT NULL,
  PRIMARY KEY (`Num_lecon`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `lecon`
--

INSERT INTO `lecon` (`Num_lecon`, `Jour_lecon`, `Heure_lecon`, `idM`) VALUES
(36, 'Lundi', '15:00:00', 2),
(37, 'Mercredi', '17:00:00', 2),
(40, 'Merdi', '15:00:00', 3),
(41, 'Jeudi', '15:00:00', 3),
(42, 'Mercredi', '17:00:00', 4),
(43, 'Dimanche', '18:00:00', 4),
(44, 'Jeudi', '17:00:00', 5),
(45, 'Lundi', '15:00:00', 5),
(46, 'Dimanche', '09:00:00', 8),
(47, 'Merdi', '15:00:00', 8),
(48, 'Lundi', '09:00:00', 37),
(49, 'Mercredi', '18:00:00', 37),
(50, 'Merdi', '15:00:00', 39),
(51, 'Jeudi', '15:00:00', 39),
(52, 'Dimanche', '17:00:00', 40),
(53, 'Jeudi', '09:00:00', 40),
(54, 'Lundi', '18:00:00', 56),
(55, 'Lundi', '18:00:00', 56);

-- --------------------------------------------------------

--
-- Structure de la table `message_direction`
--

CREATE TABLE IF NOT EXISTS `message_direction` (
  `id_Message` int(11) NOT NULL AUTO_INCREMENT,
  `Titre_message` varchar(150) NOT NULL,
  `Contenu_message` text NOT NULL,
  `Date_message` date NOT NULL,
  `heure_message` time NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Message`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `message_direction`
--

INSERT INTO `message_direction` (`id_Message`, `Titre_message`, `Contenu_message`, `Date_message`, `heure_message`, `Nom`, `Email`) VALUES
(30, 'interogation', 'Je voudrait savoir si cest possible dannuler mon prochain examen car je ne suis pas prÃ©s', '2014-05-18', '12:16:19', 'Boulahya Yacine', 'Yacine@hotmail.fr'),
(31, 'Questions', 'A propos du prochain cours je ne peut pas venir jai des empechement \r\nCordialement', '2014-05-18', '12:18:17', 'Boucherit  aziza', 'Aziza@live.fr'),
(32, 'Questions', 'Bonjour \r\nJe voudrais savoir sil y a un moyen de minscrire au mois doctobre ?\r\nCordialement', '2014-05-18', '12:21:32', 'Nedjari Wassila', 'Wassila@hotmail.com'),
(35, 'interogation', 'jtxbhnfh', '2014-05-25', '15:55:24', 'boudaoud', 'wafaa@hotmail.fr'),
(36, 'bhjhnbb', 'b n;b', '2015-02-23', '02:37:01', 'jj', 'hj@hotmail.com'),
(37, '', '', '2015-03-09', '22:59:07', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `moniteurs`
--

CREATE TABLE IF NOT EXISTS `moniteurs` (
  `idM` int(10) NOT NULL AUTO_INCREMENT,
  `nom_M` varchar(25) NOT NULL,
  `prenom_M` varchar(25) NOT NULL,
  `adresse_M` varchar(60) NOT NULL,
  `date_naiss_M` date NOT NULL,
  `num_diplome` int(11) NOT NULL,
  `type_permis` varchar(150) NOT NULL,
  `num_CNI` int(11) NOT NULL,
  `email_M` varchar(100) NOT NULL,
  `numero_telph` varchar(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`idM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `moniteurs`
--

INSERT INTO `moniteurs` (`idM`, `nom_M`, `prenom_M`, `adresse_M`, `date_naiss_M`, `num_diplome`, `type_permis`, `num_CNI`, `email_M`, `numero_telph`, `date_inscription`, `password`, `admin`, `foto`) VALUES
(2, 'belhabri', 'rachid', 'Boulevard Front de mer', '1973-08-01', 250064, 'permisB', 2548, 'rachid@hotmail.com', '0558975478', '2014-04-21', 'moniteur', 0, 'images.jpg'),
(3, 'benkada', 'amira', 'Rue de Mostaganem', '1963-04-02', 745000, 'permisAAC', 875306, 'amira-benkada@hotmail.fr', '0558658785', '2014-04-21', 'monitrice', 0, '2012 - Copie (2).jpg'),
(4, 'Boucherit ', 'aziza', 'Rue Larbi Ben Mhidi', '1965-12-01', 111020, 'permisE(B)', 125479, 'Aziza@live.fr', '0669574854', '2014-04-21', 'kaddour', 0, 'icone_personnage.png'),
(8, 'Mouaziz', 'Faiza', '1,rue du 20 AoÃ»t â€“ Oran.', '1957-11-13', 215963, 'permisAAC', 800144, 'Faiza-Mouaziz@hotmai.com', '0669576909', '2014-05-01', 'F7O3e3cu', 0, 'icone_personnage.png'),
(37, 'Bouziane', 'Brahim', 'CitÃ© Hosn El Djiwar, BÃ¢timent C6 - Logements 287 - USTO', '1974-05-22', 500102, 'handiconduite', 700328, '', '0557485269', '2014-05-24', '72iqTKnt', 0, 'moniteur.jpg'),
(39, 'Belhoul', 'Brahim', 'CitÃ© Hosn El Djiwar, BÃ¢timent C5 - Logements 287 - USTO', '1974-11-13', 500105, 'permisB', 500467, '', '0771458596', '2014-05-24', 'sB4ELnfi', 0, 'icone_personnage.png'),
(40, 'Boudaoud', 'Fatma', '42bis,Rue desj ardins-Oran', '1954-12-18', 500106, 'permisE(B)', 700331, '', '0558596963', '2014-05-14', 'KPszDeEL', 0, 'icone_personnage.png');

-- --------------------------------------------------------

--
-- Structure de la table `permis`
--

CREATE TABLE IF NOT EXISTS `permis` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Permis` varchar(150) NOT NULL,
  `Prix_total_Permis` float NOT NULL,
  `Tarif_Examen` float NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `permis`
--

INSERT INTO `permis` (`idP`, `Nom_Permis`, `Prix_total_Permis`, `Tarif_Examen`) VALUES
(1, 'permisB', 20000, 3000),
(2, 'permisAAC', 28000, 3000),
(3, 'permis E(B)', 28000, 3000),
(4, 'handiconduite', 15000, 2000);

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE IF NOT EXISTS `presence` (
  `id_presence` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` int(11) NOT NULL,
  `remarque` varchar(150) NOT NULL,
  `marquer` varchar(20) NOT NULL,
  `nom_moniteur` varchar(150) NOT NULL,
  `date_lecon` date NOT NULL,
  PRIMARY KEY (`id_presence`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Contenu de la table `presence`
--

INSERT INTO `presence` (`id_presence`, `identifiant`, `remarque`, `marquer`, `nom_moniteur`, `date_lecon`) VALUES
(120, 55, '', 'present', 'belhabri', '2014-05-20'),
(121, 94, '', 'present', 'belhabri', '2014-05-20'),
(122, 95, '', 'present', 'belhabri', '2014-05-20'),
(123, 55, '', 'present', 'belhabri', '2014-05-27'),
(124, 94, '', 'absent', 'belhabri', '2014-05-27'),
(125, 95, '', 'present', 'belhabri', '2014-05-27'),
(126, 95, '', 'absent', 'belhabri', '2014-05-23'),
(127, 95, '', 'present', 'belhabri', '2014-05-27'),
(128, 95, '', 'present', 'belhabri', '2014-05-22'),
(129, 57, '', 'present', 'rien', '2014-05-21'),
(130, 92, '', 'absent', 'rien', '2014-05-21'),
(131, 93, '', 'present', 'rien', '2014-05-21'),
(132, 56, '', 'absent', 'benkada', '2014-05-14'),
(133, 97, '', 'present', 'benkada', '2014-05-14'),
(134, 99, '', 'present', 'benkada', '2014-05-14'),
(136, 55, '', 'present', 'Belhoul', '2014-05-15'),
(137, 94, '', 'present', 'Belhoul', '2014-05-15'),
(138, 55, '', 'present', 'Belhoul', '2014-05-22'),
(139, 94, '', 'present', 'Belhoul', '2014-05-22'),
(140, 55, '', 'present', 'belhabri', '2014-05-25'),
(141, 94, '', 'present', 'belhabri', '2014-05-25'),
(142, 55, '', 'present', 'Belhoul', '2014-05-26'),
(143, 94, '', 'present', 'Belhoul', '2014-05-26'),
(144, 55, '', 'present', 'rien', '2014-05-27'),
(145, 94, '', 'present', 'rien', '2014-05-27'),
(146, 55, '', 'present', 'belhabri', '2014-05-28'),
(147, 94, '', 'present', 'belhabri', '2014-05-28'),
(148, 55, '', 'present', 'belhabri', '2014-05-29'),
(149, 94, '', 'present', 'belhabri', '2014-05-29'),
(150, 56, '', 'present', 'benkada', '2014-05-25'),
(151, 56, '', 'present', 'benkada', '2014-05-26'),
(152, 56, '', 'present', 'benkada', '2014-05-27'),
(153, 56, '', 'present', 'benkada', '2014-05-28'),
(154, 56, '', 'present', 'benkada', '2014-05-29'),
(155, 56, '', 'present', 'Mouaziz', '2014-07-02'),
(156, 56, '', 'present', 'benkada', '2014-06-09'),
(157, 56, '', 'present', 'benkada', '2014-05-21'),
(158, 56, '', 'present', 'benkada', '2014-05-21'),
(159, 55, '', 'present', 'belhabri', '2014-06-10'),
(160, 94, '', 'present', 'belhabri', '2014-06-10'),
(161, 55, '', 'present', 'belhabri', '2014-06-11'),
(162, 94, '', 'present', 'belhabri', '2014-06-11'),
(163, 55, '', 'absent', 'rien', '2014-06-12'),
(164, 94, '', 'present', 'rien', '2014-06-12'),
(165, 55, '', 'present', 'belhabri', '2014-06-16'),
(166, 94, '', 'present', 'belhabri', '2014-06-16'),
(167, 55, '', 'present', 'belhabri', '2014-05-30'),
(168, 94, '', 'present', 'belhabri', '2014-05-30'),
(169, 55, '', 'present', 'Belhoul', '2014-05-29'),
(170, 94, '', 'present', 'Belhoul', '2014-05-29'),
(171, 55, '', 'present', 'belhabri', '2014-05-28'),
(172, 94, '', 'present', 'belhabri', '2014-05-28'),
(173, 96, '', 'present', 'Bouziane', '2014-05-21'),
(174, 98, '', 'present', 'Bouziane', '2014-05-21'),
(175, 96, '', 'present', 'Bouziane', '2014-06-02'),
(176, 98, '', 'present', 'Bouziane', '2014-06-02'),
(177, 96, '', 'present', 'Benramdane', '2014-06-04'),
(178, 98, '', 'absent', 'Benramdane', '2014-06-04'),
(179, 96, '', 'present', 'Bouziane', '2014-06-09'),
(180, 98, '', 'present', 'Bouziane', '2014-06-09'),
(181, 96, '', 'present', 'Benramdane', '2014-05-21'),
(182, 98, '', 'present', 'Benramdane', '2014-05-21'),
(183, 96, '', 'present', 'Benramdane', '2014-05-15'),
(184, 98, '', 'present', 'Benramdane', '2014-05-15'),
(185, 96, '', 'present', 'Benramdane', '2014-06-12'),
(186, 98, '', 'present', 'Benramdane', '2014-06-12'),
(187, 96, '', 'present', 'Benramdane', '2014-06-16'),
(188, 98, '', 'present', 'Benramdane', '2014-06-16'),
(189, 97, '', 'present', 'benkada', '2014-05-21'),
(190, 103, '', 'present', 'benkada', '2014-05-21'),
(191, 97, '', 'present', 'Mouaziz', '2014-05-22'),
(192, 103, '', 'present', 'Mouaziz', '2014-05-22'),
(193, 97, '', 'present', 'benkada', '2014-05-22'),
(194, 103, '', 'present', 'benkada', '2014-05-22'),
(195, 92, '', 'present', 'Boucherit ', '2014-05-22'),
(196, 104, '', 'present', 'Boucherit ', '2014-05-22'),
(197, 92, '', 'present', 'Boucherit ', '2014-05-22'),
(198, 104, '', 'present', 'Boucherit ', '2014-05-22'),
(199, 92, '', 'present', 'rien', '2014-05-15'),
(200, 104, '', 'present', 'rien', '2014-05-15'),
(201, 57, '', 'present', 'rien', '2014-05-20'),
(202, 93, '', 'present', 'rien', '2014-05-20'),
(203, 92, '', 'present', 'rien', '2014-05-08'),
(204, 104, '', 'present', 'rien', '2014-05-08'),
(205, 50, '', 'present', 'rien', '2014-05-14'),
(206, 50, '', 'present', 'rien', '2014-05-14'),
(207, 95, '', 'present', 'belhabri', '2014-05-14'),
(208, 105, '', 'present', 'belhabri', '2014-05-14'),
(209, 107, '', 'present', 'belhabri', '2014-05-14');

-- --------------------------------------------------------

--
-- Structure de la table `presence_moniteur`
--

CREATE TABLE IF NOT EXISTS `presence_moniteur` (
  `idPresence_M` int(11) NOT NULL AUTO_INCREMENT,
  `idM` int(11) NOT NULL,
  `type_lecon` varchar(150) NOT NULL,
  `date_lecon` date NOT NULL,
  `marquer_presence` varchar(150) NOT NULL,
  `remarque` varchar(200) NOT NULL,
  PRIMARY KEY (`idPresence_M`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `presence_moniteur`
--

INSERT INTO `presence_moniteur` (`idPresence_M`, `idM`, `type_lecon`, `date_lecon`, `marquer_presence`, `remarque`) VALUES
(5, 5, 'pratique', '2014-05-14', 'present', ''),
(6, 5, 'thÃ©orique', '2014-05-14', 'present', ''),
(7, 5, 'thÃ©orique', '2014-04-30', 'Absent', ''),
(8, 8, 'thÃ©orique', '2014-05-23', 'present', ''),
(9, 40, 'pratique', '2014-05-14', 'present', 'j''ai j''ai');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE IF NOT EXISTS `rendezvous` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `titre_R` text NOT NULL,
  `Date_R` date NOT NULL,
  `Heure_R` time NOT NULL,
  `Remarque` text NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `rendezvous`
--

INSERT INTO `rendezvous` (`idR`, `titre_R`, `Date_R`, `Heure_R`, `Remarque`) VALUES
(1, 'prÃ©vention', '2014-04-27', '13:30:00', 'Avec un candidat de notre Ã©tablissement'),
(2, 'rÃ©vision', '2014-04-28', '15:00:00', 'Avec un candidat de notre Ã©tablissement');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE IF NOT EXISTS `resultat` (
  `Code_resultat` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` int(11) NOT NULL,
  `epreuve` varchar(150) NOT NULL,
  `resultat_examen` varchar(150) NOT NULL,
  `examen_payer` varchar(20) NOT NULL,
  `remarque` text NOT NULL,
  `date_denvoie` date NOT NULL,
  PRIMARY KEY (`Code_resultat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `resultat`
--

INSERT INTO `resultat` (`Code_resultat`, `identifiant`, `epreuve`, `resultat_examen`, `examen_payer`, `remarque`, `date_denvoie`) VALUES
(22, 55, 'Code', 'RÃ©ussie', 'oui', 'FÃ©licitation', '2014-05-18'),
(32, 56, 'CrÃ©neaux', 'RÃ©ussie', 'oui', 'Bravo vous avez rÃ©ussie dans l''examen', '2014-05-24'),
(40, 50, 'Code', 'RÃ©ussie', 'non', '', '2014-05-21'),
(42, 57, 'Code', 'RÃ©ussie', 'non', '', '2014-05-24'),
(43, 94, 'Circuit', 'obtenue_permis', 'non', 'rÃ©glez vos frais pour obtenir votre rÃ©cÃ©pissÃ© ', '2014-05-24'),
(44, 99, 'Circuit', 'obtenue_permis', 'oui', '', '2014-05-24'),
(45, 96, 'Code', 'Ã©chouer', 'oui', 'Vous avez fait beaucoup d''erreur', '2014-05-24'),
(46, 93, 'Code', 'RÃ©ussie', 'non', '', '2014-05-24'),
(47, 102, 'Circuit', 'obtenue_permis', 'oui', '', '2014-05-24'),
(48, 106, 'Code', 'RÃ©ussie', 'oui', '', '2014-05-25'),
(49, 97, 'Code', 'RÃ©ussie', 'oui', 'bravo', '2014-05-25');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `idV` int(11) NOT NULL AUTO_INCREMENT,
  `type_voiture` varchar(100) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `matriculation` varchar(30) NOT NULL,
  `etat` varchar(150) NOT NULL,
  PRIMARY KEY (`idV`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`idV`, `type_voiture`, `modele`, `matriculation`, `etat`) VALUES
(2, 'renault', 'clio ', '10025-42012-31', 'en marche'),
(3, 'volkswagen', 'polo', '75480-0014-31', 'en marche'),
(4, 'volsagen', 'Golf', '244', 'en bonne Ã©tat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
