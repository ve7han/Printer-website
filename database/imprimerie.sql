-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 29 mai 2021 à 15:06
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imprimerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Numerique'),
(2, 'Offset'),
(3, 'Flexographique'),
(4, 'Sérigraphique'),
(5, 'Héliogravure'),
(6, 'Typographique');

-- --------------------------------------------------------

--
-- Structure de la table `commandes_vendeur`
--

CREATE TABLE `commandes_vendeur` (
  `id` int(11) UNSIGNED NOT NULL,
  `prod_dem` varchar(200) NOT NULL,
  `Nom_client` varchar(30) NOT NULL,
  `Type_paiment` varchar(30) NOT NULL,
  `Addresse_client` varchar(100) NOT NULL,
  `Type_livraison` varchar(100) NOT NULL,
  `Date_commande` date NOT NULL,
  `Date_Livraison` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandes_vendeur`
--

INSERT INTO `commandes_vendeur` (`id`, `prod_dem`, `Nom_client`, `Type_paiment`, `Addresse_client`, `Type_livraison`, `Date_commande`, `Date_Livraison`) VALUES
(1, '', 'yasser', 'cheque', '81 jum street', 'express', '2021-04-08', '2021-04-30'),
(2, '', 'yasser', 'cheque', '81 jum street', 'express', '2021-04-08', '2021-04-30'),
(3, '', 'yasser', 'cheque', '81 jum street', 'express', '2021-04-08', '2021-04-30'),
(4, '', 'ayoub', 'cheque', '81 jum street', 'express', '2021-04-08', '2021-04-30'),
(5, '', 'ayoub', 'espèces', '21 jump street ', 'économique', '2021-04-17', '2021-04-30'),
(6, '', 'ayoub', 'cheque', 'beverlly hills', 'express', '2021-04-12', '2021-04-30'),
(7, '', 'reda', 'carte_bancaire', 'dsdss', 'express', '2021-04-11', '2021-04-27'),
(8, '', 'reda', 'carte_bancaire', 'dsdss', 'express', '2021-04-11', '2021-04-27'),
(9, '', 'reda', 'cheque', '21 jump ', 'express', '2021-04-22', '2021-04-30');

-- --------------------------------------------------------

--
-- Structure de la table `commande_admin`
--

CREATE TABLE `commande_admin` (
  `ref` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `quantite` varchar(100) NOT NULL,
  `vendeurcmd` varchar(100) NOT NULL,
  `nomclient` varchar(100) NOT NULL,
  `adresseclient` varchar(100) NOT NULL,
  `typelivraison` varchar(100) NOT NULL,
  `typepaiement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `favoris_admin`
--

CREATE TABLE `favoris_admin` (
  `num` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dateajout` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie_vendeur`
--

CREATE TABLE `messagerie_vendeur` (
  `id` int(11) UNSIGNED NOT NULL,
  `Emetteur` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Objet` varchar(30) NOT NULL,
  `Date_reception` date NOT NULL,
  `Type_emetteur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messagerie_vendeur`
--

INSERT INTO `messagerie_vendeur` (`id`, `Emetteur`, `Message`, `Objet`, `Date_reception`, `Type_emetteur`) VALUES
(1, 'reda', 'cxfvfvfd', 'ghghghg', '2021-04-22', 'gg'),
(2, 'ayoub', 'dfdgfgfhghf', 'ghghghg', '2021-04-22', 'ss'),
(3, 'yasser', 'dfdgfgfhghf', 'ghghghg', '2021-04-22', 'ss');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `product`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 'ayoub', 'Carte visites', 4, 250, 1000, '2021-05-22 18:18:46', '2021-05-22 18:18:46'),
(2, 'ayoub', 'Carte visites', 1, 250, 250, '2021-05-22 18:19:22', '2021-05-22 18:19:22');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_quantity` int(11) UNSIGNED NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_price` float DEFAULT 0,
  `old_price` float NOT NULL,
  `product_image` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_quantity`, `product_description`, `short_desc`, `product_price`, `old_price`, `product_image`, `created_at`, `updated_at`) VALUES
(5, 'Carte visites', 1, 5, 'CartevisitesCartevisitesCartevisitesCartevisitesCartevisitesCartevisitesCartevisitesCartevisites                          ', 'CartevisitesCartevisitesCartevisitesCartevisitesCartevisitesCartevisites                            ', 250, 200, 'cartesvisite-1621701657.jpeg', '2021-05-22 16:40:57', '2021-05-22 16:40:57'),
(6, 'Flayers', 2, 6, 'FlayersFlayersFlayersFlayersFlayersFlayersFlayersFlayersFlayersFlayersFlayers                            ', 'FlayersFlayersFlayersFlayersFlayersFlayersFlayersFlayers                            ', 300, 250, 'flayers-1621701698.jpeg', '2021-05-22 16:41:38', '2021-05-22 16:41:38');

-- --------------------------------------------------------

--
-- Structure de la table `tache_admin`
--

CREATE TABLE `tache_admin` (
  `num` int(11) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Ayoub Azacri', 'AyoubAzacri', 'ayoub.azacri@gmail.com', '$2y$12$UW7oRsuEdVsN4VDho0UBRe/ZBBZKuhFgwZP60sn8QUaK.goDDi4jm', 1, '2021-05-16 14:22:06', '2021-05-16 14:22:06'),
(2, 'ayoub', 'ayoub123', 'ayoub@gmail.com', '$2y$12$G5i47VxPKmWZkLjB6tribuAl785itBvOJgiZlYu54LaF4u4PGsVnu', 0, '2021-05-18 11:36:21', '2021-05-18 11:36:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `commandes_vendeur`
--
ALTER TABLE `commandes_vendeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande_admin`
--
ALTER TABLE `commande_admin`
  ADD PRIMARY KEY (`ref`);

--
-- Index pour la table `favoris_admin`
--
ALTER TABLE `favoris_admin`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `messagerie_vendeur`
--
ALTER TABLE `messagerie_vendeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `tache_admin`
--
ALTER TABLE `tache_admin`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commandes_vendeur`
--
ALTER TABLE `commandes_vendeur`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commande_admin`
--
ALTER TABLE `commande_admin`
  MODIFY `ref` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favoris_admin`
--
ALTER TABLE `favoris_admin`
  MODIFY `num` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messagerie_vendeur`
--
ALTER TABLE `messagerie_vendeur`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tache_admin`
--
ALTER TABLE `tache_admin`
  MODIFY `num` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
