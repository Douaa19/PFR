-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 13 juin 2021 à 02:24
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `studyou`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8 NOT NULL,
  `genre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `occasion` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id_photo` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id_photo`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
