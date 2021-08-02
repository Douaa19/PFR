-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 août 2021 à 01:36
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

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
  `id` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'STUDYOU', 'studyou@gmail.com', 'studyou123');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(15) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `occasion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `email`, `phone`, `gender`, `occasion`) VALUES
(2, 'douaa@gmail.com', 56646557, 'vidéos,', 'shooting,autre,');

-- --------------------------------------------------------

--
-- Structure de la table `folders`
--

CREATE TABLE `folders` (
  `id_folder` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `folders`
--

INSERT INTO `folders` (`id_folder`, `name`, `image`) VALUES
(13, 'Nature', 'jaanus-jagomagi-XcKog6oW1FI-unsplash.jpg'),
(14, 'Sport', 'alexander-redl-d3bYmnZ0ank-unsplash.jpg'),
(15, 'Fête', 'alexander-popov-hTv8aaPziOQ-unsplash.jpg'),
(16, 'Marriage', 'samantha-gades-N1CZNuM_Fd8-unsplash.jpg'),
(17, 'Photographie', 'markus-spiske-EfhOW3cYqD8-unsplash.jpg'),
(18, 'Technologie', 'ales-nesetril-Im7lZjxeLhg-unsplash.jpg'),
(19, 'Animale', 'ray-hennessy-xUUZcpQlqpM-unsplash.jpg'),
(21, 'Filme', 'jakob-owens-CiUR8zISX60-unsplash.jpg'),
(22, 'Histoire', 'natalia-y-f5xddISq428-unsplash.jpg'),
(23, 'Art et Culture', 'claudio-schwarz-VPT1C8b_OE8-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(15) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `description` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_folder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `description`, `tag`, `id_folder`) VALUES
(35, 'Black camera', 'header-img.jpg', 'Black camera with black backgr', '#camera, #black, #photo, #phot', 17),
(36, 'Forest', 'walter-mario-stein-kqfE9mvv7Xw-unsplash.jpg', 'Forest of the bambo', '#bambo #nature', 13),
(37, 'Les bagues d\'un', 'samantha-gades-N1CZNuM_Fd8-unsplash.jpg', 'Deux mains d\'un couple portent', '#marriage, #couple, #fête, #fa', 16),
(38, 'Voiture', 'kenny-leys-j27SKDa-vBg-unsplash.jpg', 'Une voiture du sport et un vél', '#voiture, #sport, #garrage', 14),
(39, 'Brra d\'une port', 'wolfgang-rottmann-qZN0ChmJdhg-unsplash.jpg', 'Une brra d\'une vielle porte', '#porte, #culture, #tradution', 23),
(40, 'Livres d\'histoi', 'natalia-y-f5xddISq428-unsplash.jpg', 'Des livres d\'histoire', '#histoire, #livre, #lecture', 22),
(41, 'Photographe', 'brandon-erlinger-ford-jL8QFwnuOcQ-unsplash.jpg', 'Un jeune photographe port une ', '#photo, #photographe, #smok', 17),
(42, 'Porte', 'atul-ksG_tf2pbpo-unsplash.jpg', 'Porte marocaine qu\'elle présen', '#porte, #old, #morroco, #viell', 23);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `video` text NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_folder` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id_folder`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_folder` (`id_folder`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_fk` (`id_folder`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `folders`
--
ALTER TABLE `folders`
  MODIFY `id_folder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_folder`) REFERENCES `folders` (`id_folder`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_folder`) REFERENCES `folders` (`id_folder`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
