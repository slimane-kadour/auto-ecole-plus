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
-- Base de données: `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(150) NOT NULL,
  `membre_article` varchar(100) NOT NULL,
  `corps_article` text NOT NULL,
  `date_article` datetime NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre_article`, `membre_article`, `corps_article`, `date_article`) VALUES
(9, 'cour de perfectionnement', 'Bourakba', 'Bonjour tous le monde,\r\n je suis a la recherche dune monitrice dauto Ã©cole pour me faire des cour de perfectionnement mais avec ma propre voiture jattends vos rÃ©ponse merci', '2014-05-24 16:18:55'),
(11, 'Interrogation', 'Amina', 'salut tout le monde \r\nen fait voila,il ya ma mere en ce moment qui passe son permis il ya une trentaine d''annÃ¨es qu''elle na pas touchÃ¨ a un volant mais le problem d''apres elle c''est son prof de conduite qui n''arrete de la chambrer et de crier et tout selon elle il est trop nerveux donc elle en peut plus\r\nelle ma dit que ca aurai Ã¨tÃ¨ mieux si le prof etait une femme elle pourrait mieux se concentrer et plus a l''aize \r\nsvp ya t''il un membre dans ce forum qui connait une femme qui excerce ce metier et merci', '2014-05-24 17:09:42'),
(12, 'Quel auto Ã©cole Choisir ?', 'Yacine', 'J''ai 19 ans et je veux m''inscrire la semaine prochaine dans une auto Ã©cole pour passer mon permis.\r\nJe compte faire entre 26-30h pour avoir mon permis.\r\nC''est mieux une auto Ã©cole de quartier ? Que faut il choisir pour se prÃ©senter au bout de 3 mois maximum.\r\nJ''habite Ã  Gambetta, est ce que le temps d''attente est long pour se prÃ©senter au permis ? est ce que Ã§a dÃ©pend de l''auto Ã©cole qu''on a choisit ?\r\nMerci de me rÃ©pondre.', '2014-05-24 17:21:00'),
(13, 'fhfdhh', 'cvcv', 'cvcv', '2014-05-25 15:56:04');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `membre_commentaire` varchar(100) NOT NULL,
  `corps_commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_article`, `membre_commentaire`, `corps_commentaire`, `date_commentaire`) VALUES
(19, 9, 'boudaoud', 'Des cours de perfectionnement de conduite??\n\nLe mieux est de passer par une auto Ecole qui pourra désigner un moniteur (ice) cest mieux , il faut avoir le permis dabord', '2014-05-24 16:20:49'),
(20, 9, 'ghizlen', 'je les deja fais , tu va a nimporte quelle auto ecole il te e font avec ta propre voiture ya deux ans cétais a 700 da lheure', '2014-05-24 16:22:08'),
(21, 12, 'mohammed', 'Pour ma part je ne sais pas quelle auto école conseiller en particulier. Par contre ce qui est certain c''est que je déconseille très fortement l''Ile ô permis. C''est la pire que je connaisse et je ne suis pas la seule.', '2014-05-24 17:23:08'),
(22, 11, 'Amel', 'bonsoir\ntu ne dis pas dans quelle ville...?\nle mieux serait qu''elle change d''auto école où elle pourrait trouver une monitrice\nelle a le droit mais devra payer des frais de dossier...', '2014-05-24 17:24:20'),
(23, 11, 'Amina', 'pour la ville c''est à oran plus  mais en fait il n''ya pas de monitrices dans les auto ecoles il y''a que des moniteurs', '2014-05-24 17:25:37'),
(24, 11, 'Amel', 'Il y a une auto école à Akid lotfi, tu trouvera une monitrice dans cette auto école', '2014-05-24 17:27:19'),
(25, 13, 'knflsq', 'jnhlfisqnqs', '2014-05-25 15:56:26'),
(26, 9, ', nk,n', 'n n', '2015-04-07 09:00:52'),
(27, 9, 'nawel', 'cvdfvdf', '2015-04-20 08:47:24'),
(28, 9, 'nawel', 'cvdfvdf', '2015-04-20 08:47:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
