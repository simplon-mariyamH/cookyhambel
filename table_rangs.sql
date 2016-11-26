-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 21 Novembre 2016 à 15:49
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `cooky_ham`
--

-- --------------------------------------------------------

--
-- Structure de la table `rangs`
--

CREATE TABLE `rangs` (
  `id` int(11) NOT NULL,
  `droit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rangs`
--

INSERT INTO `rangs` (`id`, `droit`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'visitor');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `rangs`
--
ALTER TABLE `rangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `rangs`
--
ALTER TABLE `rangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;