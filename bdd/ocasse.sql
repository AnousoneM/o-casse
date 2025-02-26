-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 26 fév. 2025 à 07:23
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ocasse`
--
CREATE DATABASE IF NOT EXISTS `ocasse` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ocasse`;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int NOT NULL AUTO_INCREMENT,
  `avis_note` int NOT NULL,
  `avis_texte` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `avis_date` date NOT NULL,
  `prod_id` int NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`avis_id`),
  KEY `prod_id` (`prod_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `avis_note`, `avis_texte`, `avis_date`, `prod_id`, `u_id`) VALUES
(1, 5, 'Très bon produit, je recommande !', '2025-02-25', 1, 1),
(2, 4, 'Bonne qualité, livraison rapide.', '2025-02-25', 2, 1),
(3, 3, 'Produit correct, mais peut mieux faire.', '2025-02-25', 3, 1),
(4, 4, 'Satisfait de mon achat.', '2025-02-25', 11, 1),
(5, 5, 'Excellente expérience, produit conforme.', '2025-02-25', 5, 2),
(6, 2, 'Déçu par la qualité.', '2025-02-25', 6, 2),
(7, 3, 'Bon rapport qualité/prix.', '2025-02-25', 7, 2),
(8, 4, 'Très bon service client.', '2025-02-25', 11, 2),
(9, 5, 'Je suis ravi, parfait en tout point.', '2025-02-25', 9, 3),
(10, 1, 'Produit défectueux à la réception.', '2025-02-25', 10, 3),
(11, 4, 'Bonne qualité, satisfait.', '2025-02-25', 11, 3),
(12, 3, 'Moyen, mais correspond à la description.', '2025-02-25', 12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_nom`) VALUES
(1, 'Mécanique'),
(2, 'Carrosserie'),
(3, 'Intérieur'),
(4, 'Eclairage'),
(5, 'Pneumatique');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `com_id` int NOT NULL AUTO_INCREMENT,
  `com_date` date NOT NULL,
  `u_id` int NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`com_id`, `com_date`, `u_id`) VALUES
(1, '2025-02-25', 1),
(2, '2025-02-25', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commandes_produits`
--

CREATE TABLE IF NOT EXISTS `commandes_produits` (
  `prod_id` int NOT NULL,
  `com_id` int NOT NULL,
  `qte` int NOT NULL,
  PRIMARY KEY (`prod_id`,`com_id`),
  KEY `com_id` (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commandes_produits`
--

INSERT INTO `commandes_produits` (`prod_id`, `com_id`, `qte`) VALUES
(1, 1, 2),
(3, 1, 1),
(5, 1, 2),
(7, 2, 1),
(9, 2, 2),
(11, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `prod_id` int NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prod_desc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `prod_prix` int NOT NULL,
  `prod_ref` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `prod_qte` int NOT NULL,
  `prod_img` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cat_id` int NOT NULL,
  PRIMARY KEY (`prod_id`),
  UNIQUE KEY `prod_ref` (`prod_ref`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`prod_id`, `prod_nom`, `prod_desc`, `prod_prix`, `prod_ref`, `prod_qte`, `prod_img`, `cat_id`) VALUES
(1, 'Moteur Diesel 1.6L', 'Moteur occasion en bon état, 120 000 km', 1200, 'MECA001', 2, 'moteur_diesel.jpg', 1),
(2, 'Boîte de vitesses manuelle', 'Boîte 6 rapports pour véhicule utilitaire', 700, 'MECA002', 1, 'boite_vitesse.jpg', 1),
(3, 'Alternateur 90A', 'Alternateur pour véhicule essence 1.2L', 150, 'MECA003', 3, 'alternateur.jpg', 1),
(4, 'Démarreur 12V', 'Démarreur compatible avec plusieurs modèles', 180, 'MECA004', 2, 'demarreur.jpg', 1),
(5, 'Capot avant', 'Capot en bon état, couleur noire', 250, 'CARRO001', 2, 'capot_noir.jpg', 2),
(6, 'Aile avant gauche', 'Aile avant gauche pour berline, couleur blanche', 180, 'CARRO002', 1, 'aile_gauche.jpg', 2),
(7, 'Pare-chocs arrière', 'Pare-chocs arrière avec capteurs de recul', 300, 'CARRO003', 1, 'parechocs_arriere.jpg', 2),
(8, 'Phare avant gauche', 'Phare LED pour véhicule moderne', 200, 'ECLAIR001', 2, 'phare_av_gauche.jpg', 4),
(9, 'Feu arrière droit', 'Feu arrière avec clignotants LED', 150, 'ECLAIR002', 2, 'feu_ar_droit.jpg', 4),
(10, 'Antibrouillard avant', 'Paire de phares antibrouillard universels', 100, 'ECLAIR003', 1, 'antibrouillard.jpg', 4),
(11, 'Siège conducteur', 'Siège en cuir noir, bon état', 400, 'INTER001', 1, 'siege_cuir.jpg', 3),
(12, 'Tableau de bord', 'Tableau de bord avec affichage numérique', 350, 'INTER002', 1, 'tableau_bord.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `u_nom` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `u_mail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `u_tel` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `u_mdp` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `u_adresse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_mail` (`u_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`u_id`, `u_nom`, `u_mail`, `u_tel`, `u_mdp`, `u_adresse`) VALUES
(1, 'mat', 'mat@gmail.com', '0615995501', 'sdfghj', '3 rue du jardin 76000 le Havre'),
(2, 'joe', 'joe@gmail.com', '0702050423', 'cvbnjk', '5 rue du pont 76200 Harfleur'),
(3, 'sophie', 'sophie@gmail.com', '0145786915', 'dgetsr', '45 rue de la vallée 76150 Rouelle');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `produits` (`prod_id`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `utilisateurs` (`u_id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `utilisateurs` (`u_id`);

--
-- Contraintes pour la table `commandes_produits`
--
ALTER TABLE `commandes_produits`
  ADD CONSTRAINT `commandes_produits_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `produits` (`prod_id`),
  ADD CONSTRAINT `commandes_produits_ibfk_2` FOREIGN KEY (`com_id`) REFERENCES `commandes` (`com_id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
