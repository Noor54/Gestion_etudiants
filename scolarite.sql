-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 24 Janvier 2016 à 16:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `Code` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `photo` varchar(40) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`Code`, `nom`, `mail`, `photo`) VALUES
(12, 'Souhaib', 'benyahiasouhaib@gmail.com', 'images (5).jpg'),
(14, 'bochra', 'bochra@gmail.com', 'images (5).jpg'),
(17, 'houda', 'houda@gmail.com', 'images (5).jpg'),
(18, 'nicole', 'nicole@gmail.com', 'images (5).jpg'),
(21, 'caroline', 'caroline@gmail.com', 'images (5).jpg'),
(22, 'djo', 'jo@gmail.com', 'images (5).jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`login`, `password`, `niveau`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
