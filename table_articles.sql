-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 21 Novembre 2016 à 15:47
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `cooky_ham`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `nom_produit` varchar(255) NOT NULL DEFAULT 'Tirsamisu',
  `id_gout` int(11) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '0',
  `prix` decimal(11,0) NOT NULL DEFAULT '1',
  `price` decimal(5,0) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `nom_produit`, `id_gout`, `quantite`, `prix`, `price`) VALUES
(92, 'Tirsamisu', 1, 0, '1', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;