-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 21 Novembre 2016 à 15:48
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `cooky_ham`
--

-- --------------------------------------------------------

--
-- Structure de la table `gouts`
--

CREATE TABLE `gouts` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gouts`
--

INSERT INTO `gouts` (`id`, `nom`) VALUES
(1, 'kinder bueno'),
(2, 'spéculos'),
(3, 'oréo'),
(4, 'kínder bueno white'),
(5, 'caramel beurre salé'),
(6, 'vacherin citron');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `gouts`
--
ALTER TABLE `gouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gouts`
--
ALTER TABLE `gouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;