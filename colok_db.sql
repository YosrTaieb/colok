-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2023 at 04:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colok_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_poste` date NOT NULL,
  `note` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(10) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `colocataire_responsable` int NOT NULL,
  `statut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

CREATE TABLE `maison` (
  `id` int NOT NULL,
  `adresse` text NOT NULL,
  `ville` text NOT NULL,
  `code_postal` text NOT NULL,
  `superficie` float NOT NULL,
  `nb_colocataire` int NOT NULL,
  `loyer` float NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taches`
--

CREATE TABLE `taches` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `statut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `photo_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `mdp`, `role`, `allergies`, `photo_profil`) VALUES
(1, 'Ben attou', 'Safae', '2023-09-12', 'safae@gmail.com', '$2y$10$9yX0yP7XoSXZIWzL2Rgxz.bYeoXF250QssbWV.lh/wYlYl2GJkY3e', 'admin\r\n', 'non', 'image5.jpeg'),
(2, 'Hajjaj', 'Safae', '1995-11-10', 'zzz@zz.fer', '$2y$10$nL9oav.7VUxN2g1IhQTA1e2eteqhC.6UPJzxVKVf0i7GM0LA5n7Qe', 'colocataire', 'dcdc', 'image3.jpeg'),
(3, 'Hajjaj', 'Safae', '1995-11-10', 'zzz@zz.fer', '$2y$10$s2KGwpKBsTJWRfdmC2uir.J//x8qLWGGHTW1B7aVqpHQWGUSoMcGu', 'colocataire', 'dcdc', 'image3.jpeg'),
(4, 'aa', 'Abdeljalil', '2023-09-13', 'zerona@hoty.de', '$2y$10$Ucwi7ZdRmlaU7nIdYRWBe.hsfLhwLanWAEs1UFFtPEPbAUztV/722', 'colocataire', 'de', 'image1.jpeg'),
(5, 'aa', 'Abdeljalil', '2023-09-13', 'zerona@hoty.de', '$2y$10$ZiLPhIDrKxf5/LGh5d0Kv.UF0rx9.BzjVKMJ1sUvINJBk0r1.TvMO', 'colocataire', 'de', 'image1.jpeg'),
(6, 'aa', 'Abdeljalil', '2023-09-13', 'zerona@hoty.de', '$2y$10$o2dsBO/b7YpwHMi3MM6NievvRL7n.i4CKBkmWH1/eCtaCG.jtQVpy', 'colocataire', 'de', 'image1.jpeg'),
(7, 'aa', 'Abdeljalil', '2023-09-13', 'zerona@hoty.de', '$2y$10$QsSlNZSr46QcbTz3kSO6HOk346/7vrF8DPPOZdwFhEIBqBVspz3dK', 'colocataire', 'de', 'image1.jpeg'),
(8, 'aa', 'Abdeljalil', '2023-09-13', 'zerona@hoty.de', '$2y$10$Za.qZSY.hBWGHFo6CmypfOECvgXRXAYHxUlt0flZq.TKwSrsZNYau', 'colocataire', 'de', 'image1.jpeg'),
(9, 'Ben atto!', 'Safae', '2023-09-04', 'dzdz@h.de', '$2y$10$anHiTCL2SCSW7XHsROAshOivEOmmx072QydH36y2jCPjVKt8T9IqW', 'colocataire', 'zz', 'image4.jpeg'),
(10, 'Ahrouch', 'Ines', '2023-09-05', 'ines@hotmail.fr', '$2y$10$lsxloW0TBN0efbQA9dN95eN1xvfyPbBSvyg8gMfxY9a0yANoBU7iu', 'colocataire', 'zszz', 'image1.jpeg'),
(11, 'ben attou', 'safae', '2023-09-21', 'benattou@gmail.com', '$2y$10$2E2SydzL2L54AhNAhqVnJ.4VNfulbHWKJB5CM1jheL6SutVrbmk2q', 'colocataire', 'non ', 'image6.jpeg'),
(12, 'safae', 'BEN ', '2023-09-21', 'benattou@gmail.com', '$2y$10$Cs/.CI2r52/1DJoaFMODcejDAsQgx1KfCKyqJG7cpb3AbYpHlKlTW', 'colocataire', 'NON', 'image6.jpeg'),
(13, 'ben attou', 'safae', '2023-09-21', 'benattou@gmail.com', '$2y$10$Vphx5zgV6.5ecFT74N6PWuKARpcdMWGZodvBHzmlzAs7Ii7vmqPf6', 'colocataire', 'OUI ', 'femme.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maison`
--
ALTER TABLE `maison`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
