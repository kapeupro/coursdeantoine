-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 nov. 2021 à 16:40
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `auteur`, `created_at`, `modified_at`, `status`) VALUES
(1, 'la basse 2', 'gdfgkhj d222fslkjgh kjd ghkjl dfshgkjl hdsklfg hkjl dsfg\r\ndsfgmk jldfjsg kjhdsfg\r\nsdfgk jmdghkjdfsg 2', 'michel 3', '2021-11-05 11:02:12', '2021-11-05 12:28:11', 'draft'),
(2, 'guitare', 'dsfkdjshf kjsh dfkj dsfsd\r\nfksd jhfkjds', 'bernard', '2021-11-05 11:11:44', '2021-11-05 16:28:30', 'draft'),
(3, 'sdfsqdf', 'sdfqs', 'Batterie', '2021-11-05 14:30:55', '2021-11-05 16:28:20', 'publish');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `content` text NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `content`, `auteur`, `created_at`, `modified_at`, `status`) VALUES
(1, 2, 'dgfgkldfj gkldjfg klds', 'michel', '2021-11-05 12:38:07', NULL, 'new'),
(2, 2, 'sdqfskfh hkdhjsf kjd shfqs', 'bernard', '2021-11-05 12:44:01', NULL, 'new'),
(3, 2, 'dfsfsqdf', 'dsfsd', '2021-11-05 12:44:37', NULL, 'new'),
(4, 2, 'fsdqfsqd', 'dsfsqdfqsd', '2021-11-05 12:44:44', NULL, 'new'),
(5, 2, 'fsdqfsqd', 'dsfsqdfqsd', '2021-11-05 12:45:01', NULL, 'new'),
(6, 2, 'retezr', 'retezr', '2021-11-05 14:27:16', NULL, 'new'),
(7, 2, 'sdfqs', 'dsfds', '2021-11-05 14:30:45', NULL, 'new');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
