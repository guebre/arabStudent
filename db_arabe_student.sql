-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 fév. 2019 à 23:04
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_arabe_student`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL COMMENT 'account id',
  `usr_fname` varchar(125) NOT NULL,
  `usr_lname` varchar(125) NOT NULL,
  `usr_uname` varchar(50) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_hash` varchar(255) NOT NULL,
  `usr_add1` varchar(255) NOT NULL,
  `usr_add2` varchar(255) NOT NULL,
  `usr_add3` varchar(255) NOT NULL,
  `usr_town_city` varchar(255) NOT NULL,
  `usr_zip_pcode` varchar(10) NOT NULL,
  `usr_access_level` int(2) NOT NULL COMMENT 'up to 99',
  `usr_is_active` int(1) NOT NULL COMMENT '1 (active) or 0\r\n(inactive)',
  `usr_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_pwd_change_code` varchar(50) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users_diplome`
--

DROP TABLE IF EXISTS `users_diplome`;
CREATE TABLE IF NOT EXISTS `users_diplome` (
  `id_diplome` int(11) NOT NULL AUTO_INCREMENT,
  `libele_diplome` varchar(255) NOT NULL,
  `date_obtention` date NOT NULL,
  PRIMARY KEY (`id_diplome`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users_infos`
--

DROP TABLE IF EXISTS `users_infos`;
CREATE TABLE IF NOT EXISTS `users_infos` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(6) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(200) NOT NULL,
  `situation_mat` int(2) NOT NULL,
  `formation` text NOT NULL,
  `association` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `sect_activite` varchar(255) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
