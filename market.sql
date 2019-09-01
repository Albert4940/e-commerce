-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 31 août 2019 à 21:40
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `market`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idUser` int(5) NOT NULL,
  `idProduit` int(5) NOT NULL,
  `nomProd` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(10) NOT NULL,
  `prixTotal` int(10) NOT NULL,
  `qte` int(10) NOT NULL,
  `dateCommande` date NOT NULL,
  `imgUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idUser`, `idProduit`, `nomProd`, `nom`, `prix`, `prixTotal`, `qte`, `dateCommande`, `imgUrl`) VALUES
(15, 4, 'tampico tea', 'albert4940', 30, 30, 1, '2019-08-28', ''),
(15, 2, 'coca', 'albert4940', 30, 30, 1, '2019-08-28', ''),
(15, 20, 'tampico tea', 'albert4940', 60, 120, 2, '2019-08-28', ''),
(15, 20, 'tampico tea', 'albert4940', 60, 120, 2, '2019-08-28', ''),
(15, 20, 'tampico tea', 'albert4940', 60, 120, 2, '2019-08-28', ''),
(15, 16, 'limonade', 'albert4940', 50, 50, 1, '2019-08-28', ''),
(15, 18, 'limonade', 'albert4940', 50, 0, 0, '2019-08-28', ''),
(15, 20, 'tampico tea', 'albert4940', 60, 120, 2, '2019-08-28', '');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mess` text NOT NULL,
  `timePost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `mess`, `timePost`) VALUES
(1, 'al', 'hkj', '0000-00-00'),
(2, 'albert4940', 'vagabon verger', '0000-00-00'),
(3, 'albert4940', 'kjh', '2019-08-30'),
(4, 'albert4940', 'bonjour', '2019-08-30'),
(5, 'albert4940', 'sal kon', '2019-08-30'),
(6, 'albert4940', 'dexter', '2019-08-30');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(10) NOT NULL,
  `idVendeur` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `qte` int(10) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `dateAjout` date NOT NULL,
  `imgUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `idVendeur`, `code`, `nom`, `description`, `prix`, `qte`, `size`, `color`, `dateAjout`, `imgUrl`) VALUES
(1, 8, 'PO-880329', 'tampico tea', 'bon bagay       ', '30', 2, 'small', 'noir', '2019-08-26', 'twitter.png'),
(2, 8, 'PO-965300', 'coca', 'bon bagay  ', '30', 0, 'small', 'noire', '2019-08-26', 'twitter.png'),
(3, 8, 'PO-450673', 'tampico tea', 'sa se twitter  ok          ', '60', 2, 'small', 'blue', '2019-08-26', 'twitter.png'),
(4, 8, 'PO-624391', 'tampico tea', 'bay bann god la ki dil', '30', 0, 'large', 'rouge', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(5, 8, 'PO-827983', 'tampico tea', 'bay bann god la ki dil', '30', 2, 'large', 'rouge', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(6, 8, 'PO-678801', 'tampico tea', 'bay bann god la ki dil', '30', 2, 'large', 'rouge', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(7, 8, 'PO-495648', 'tampico tea', 'bay bann god la ki dil', '40', 1, 'large', 'rouge', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(8, 8, 'PO-101851', 'tampico tea', '', '50', 1, 'small', '', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(9, 8, 'PO-835513', 'tampico tea', '', '50', 1, 'small', '', '2019-08-26', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(10, 8, 'PO-755734', 'tampico tea', '', '50', 1, 'small', '', '2019-08-26', ''),
(11, 8, 'PO-215701', 'Dorce', ' ', '10', 1, 'small', 'red', '2019-08-28', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(12, 8, 'PO-866916', 'tampico tea', '', '0', 2, 'small', '', '2019-08-28', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(13, 8, 'PO-253300', 'tampico tea', '', '0', 2, 'small', '', '2019-08-28', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(14, 8, 'PO-904911', 'testImg', '', '40', 1, 'small', '', '2019-08-28', 'Espace-reserve-au-texte-_5__mockup_Front_Flat-Lifestyle_Navy-min.webp'),
(15, 8, 'PO-883777', 'limonade', 'bon', '50', 5, 'large', 'blue', '2019-08-28', '20170110_090437.jpg'),
(16, 8, 'PO-928825', 'limonade', 'bon', '50', 4, 'large', 'blue', '2019-08-28', '20170110_090437.jpg'),
(17, 8, 'PO-891484', 'limonade', 'bon', '50', 5, 'large', 'blue', '2019-08-28', '20170110_090437.jpg'),
(18, 8, 'PO-150613', 'limonade', 'bon', '50', 5, 'large', 'blue', '2019-08-28', '20170110_090437.jpg'),
(19, 8, 'PO-268092', 'limonade', 'bon', '50', 5, 'large', 'blue', '2019-08-28', '20170110_090437.jpg'),
(20, 8, 'PO-975540', 'tampico tea', 'god la di li bay bann ', '60', 4, 'small', 'noir', '2019-08-28', '20170110_090437.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) NOT NULL,
  `dateInscription` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `userName`, `pass`, `nom`, `prenom`, `tel`, `dateNaissance`, `email`, `adresse`, `dateInscription`, `type`) VALUES
(1, '', '', '', '', '', '0000-00-00', NULL, '', '0000-00-00', ''),
(2, '', '', '', '', '', '0000-00-00', NULL, '', '0000-00-00', ''),
(3, '', '', 'Albert', 'Mary', '', '0000-00-00', NULL, '', '0000-00-00', ''),
(4, '', '', 'Dorce', 'Albert-Mary', '36214947', '2019-08-05', 'do', 'dlemas', '2019-08-25', 'vendeur'),
(6, 'albert', '', 'Dorce', 'Albert-Mary', '36214947', '2019-08-05', 'do', 'dlemas', '2019-08-25', 'vendeur'),
(8, 'albert', 'wow', 'Dorce', 'Albert-Mary', '36214947', '2019-08-05', 'do', 'dlemas', '2019-08-25', 'vendeur'),
(9, '', '', '', '', '', '0000-00-00', '', '', '2019-08-25', 'vendeur'),
(10, '', '', 'Dorce', '', '', '0000-00-00', '', '', '2019-08-25', 'acheteur'),
(11, '', '', '', '', '', '0000-00-00', '', '', '2019-08-25', 'vendeur'),
(12, '', '', '', '', '', '0000-00-00', '', '', '2019-08-25', ''),
(13, '', '', '', '', '', '0000-00-00', '', '', '2019-08-25', 'vendeur'),
(14, 'OK', 'OK', 'Klass', '', '', '0000-00-00', '', '', '2019-08-25', 'vendeur'),
(15, 'albert4940', 'albert', 'Dorce', 'Albert-Mary', '', '0000-00-00', '', '', '2019-08-28', 'acheteur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
