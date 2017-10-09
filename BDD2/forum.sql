-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 24 Août 2015 à 14:56
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `text`) VALUES
(8, 'slimane', 'Arnaud Limbourd, membre AFUP de longue date, est aussi notre reporter-photo attitrer ! Retrouvez les photos qu''il a prises lors du Forum PHP 2003 sur son compte Flickr.\r\n\r\nSponsors, salles pleines, elePHPants a gogo, fresque Moebius du Beffroi de Montrouge... Les elements forts de ces deux jours sont à retrouver en images. Merci a lui !'),
(9, 'wafou', 'Retrouvez l''ensemble des conférences du Forum PHP 2013 sur notre chaine YouTube !\r\n\r\nElles sont désormais toutes en ligne, et ce grâce à l''énergie, l''implication et le temps de nos bénévoles qui ont patiemment dérushé, encodé, mis en ligne les captations effectuées les 21 et 22 novembre derniers. \r\n\r\nL''occasion d''assister aux conférences que vous avez pu manquer, ou de revoir celles qui vous ont le plus plu !'),
(10, 'giulia8', 'Bonjour,\r\nConcernant la rÃ©gularisation du permis de conduire, le passage devant l''inspecteur est destinÃ© Ã  savoir si la personne peut/sait utiliser les amÃ©nagements prescrits par le mÃ©decin agrÃ©Ã©/la commission mÃ©dicale, en particulier dans le cas de handicaps moteurs.\r\nSource : http://www.ceremh.org/cen/auto [...] -handicap/\r\n\r\nSauf erreur de ma part, si le vÃ©hicule ne nÃ©cessite pas d''Ãªtre amÃ©nagÃ©, il n''y a normalement pas nÃ©cessitÃ© de repasser devant l''inspecteur.\r\nCependant, je vous conseille vivement de vÃ©rifier auprÃ¨s du CEREMH (Centre d''Innovation et de Ressources MobilitÃ© Handicap), qui sont spÃ©cialisÃ©s dans la conduite avec un handicap/une maladie chronique.\r\n\r\n\r\n\r\nBien Ã  vous'),
(11, 'dbsbvljshdb', 'gements prescrits par le mÃ©decin agrÃ©Ã©/la commission mÃ©dicale, en particulier dans le cas de handicaps moteurs. Source : http://www.ceremh.org/cen/auto [...] -handicap/ Sauf erreur de ma part, si le vÃ©hicule ne nÃ©cessite pas d''Ãªtre amÃ©nagÃ©, il n''y a normalement pas nÃ©cessitÃ© de repasser devant l''inspecteur. Cependant, je vous conseille vivement de vÃ©rifier auprÃ¨s du CEREMH (Centre d''Innovation et de Ressources MobilitÃ© Handicap), qui sont spÃ©cialisÃ©s dans la conduite avec un handicap/'),
(12, 'hgfhg', 'hd\r\n'),
(13, 'dfsdjs', 'chdsjhcjsdfchds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
