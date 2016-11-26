-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 21 Novembre 2016 à 15:41
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

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `portable` varchar(255) NOT NULL,
  `raison_sociale` varchar(255) NOT NULL,
  `siret` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `numero2` varchar(255) NOT NULL,
  `portable2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `civilite`, `nom`, `prenom`, `mail`, `mdp`, `numero`, `portable`, `raison_sociale`, `siret`, `adresse2`, `numero2`, `portable2`) VALUES
(1, 'Monsieur', 'h', 'h', 'h', 'h', '0', '0', 'h', '0', 'h', '0', '0'),
(2, 'Monsieur', 'HAMDAOUI', 'Mustapha', 'a', 'a', '0', '0760129878', 'Pizzeria l\'orangé', '239650676936', '48 rue du progrès 69100 VILLEURBANNE', '0', '0'),
(3, 'Monsieur', 'a', 'a', 'a', 'a', '0', '0', 'a', '0', 'a', '0', '0'),
(4, 'Monsieur', 'b', 'b', 'b', 'b', '0', '0', 'b', '0', 'b', '0', '0'),
(5, 'Madame', 'HAMDAOUI', 'Assia', 'assia.hamdaoui80@gmail.com', 'hamdaoui69', '0778256913', '0778256913', 'J', '0999', '9 RUE', '04', '06'),
(6, 'Monsieur', 'C', 'C', 'C', 'C', '0', '0', 'C', '0', 'C', '0', '0'),
(7, 'Madame', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9'),
(8, 'Madame', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '22'),
(9, 'Monsieur', '33', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
(10, 'Mademoiselle', 'HAMDAOUI', 'MARIYAM', 'HAMDAOUI@GMAILCOM', 'KJKF', '0760129878', '0641466316', 'COOKY_HAM', '748478397', '76 RUE DE LA REPUBLIQUE', '0478680408', '060606'),
(11, 'Madame', 'BELMOKHTAR', 'NOURA', 'NOURA@GMAIL.COM', 'NOURA', '09', '09', 'COACH SPORTIF', '12345', '9 RUE JEANNE MOREL 69120 VAULX EN VELIN', '', ''),
(19, 'Mademoiselle', 'HAM', 'HAM', 'MARIYAM.HAMDAOUI@GMAIL.COM', 'A', '098', '098', '098', '098', '098', '', ''),
(20, 'Monsieur', 'a', 'a', 'ma', 'a', '', '0', 'a', '0', 'a', '', ''),
(21, 'Monsieur', 'a', 'a', 'ma', 'a', '', '0', 'a', '0', 'a', '', ''),
(22, 'Monsieur', 'a', 'a', 'ma', 'a', '', '0', 'a', '0', 'a', '', ''),
(23, 'Monsieur', 'a', 'a', 'ma', 'a', '', '0', 'a', '0', 'a', '', ''),
(24, 'Monsieur', 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'mariyam', '', '0', '0', '0', '0', '', ''),
(25, 'Monsieur', 'a', 'a', 'a', '9cf95dacd226dcf43da376cdb6cbba7035218921', '', '0', '0', '0', '0', '', ''),
(26, 'Monsieur', 'a', 'a', 'a', '179d9afbd6a5a817ca2765ab958ba9d8ec95eb7c', '', '0', '0', '0', '0', '', ''),
(27, 'Monsieur', 'a', 'a', 'a', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '', '0', '0', '0', '0', '', ''),
(28, 'Monsieur', 'a', 'a', 'a', '61741a54b120b49bfb173da03234082e9a18784f', '', '1', '1', '1', 'a', '', ''),
(29, 'Monsieur', 'a', 'a', 'a', '93ab82fb7b658028cd66533a7c386862e4cd51f4', '', '1', 'azer', '2', 'azer', '', ''),
(30, 'Monsieur', 'a', 'a', 'a', '8eeb6675c85b43ae260e96e1894c901aa2d55d28', '', '1', 'azer', '2', 'azer', '', ''),
(31, 'Monsieur', 'a', 'a', 'a', '8eeb6675c85b43ae260e96e1894c901aa2d55d28', '', '1', 'azer', '2', 'azer', '', ''),
(32, 'Monsieur', 'a', 'a', 'a', '61741a54b120b49bfb173da03234082e9a18784f', '', '1', 'azer', '2', 'azer', '', ''),
(33, 'Monsieur', 'HAMDAOUI', 'Mariyam', 'mariyam.hamdaoui@gmail.com', '61741a54b120b49bfb173da03234082e9a18784f', '', '0641466316', 'Cooky Ham', '1234567890', '76 rue de la république', '', '');

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
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `gouts`
--
ALTER TABLE `gouts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rangs`
--
ALTER TABLE `rangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT pour la table `gouts`
--
ALTER TABLE `gouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `rangs`
--
ALTER TABLE `rangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;