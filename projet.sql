-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 août 2024 à 10:35
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_info`
--

CREATE TABLE `admin_info` (
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin_info`
--

INSERT INTO `admin_info` (`UserName`, `Password`) VALUES
('Admin', 'asdf'),
('root', 'root'),
('wassim', 'wassim');

-- --------------------------------------------------------

--
-- Structure de la table `ans`
--

CREATE TABLE `ans` (
  `ExpertID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `QueID` int(10) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `Answer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `ans`
--

INSERT INTO `ans` (`ExpertID`, `UserID`, `QueID`, `Question`, `Answer`) VALUES
(1, 13, 1, 'What is HTML?', 'Hypertext Markup Language'),
(3, 13, 3, 'What is CSS?', 'language de prog web'),
(3, 15, 15, 'helooooo', 'hello'),
(3, 15, 14, 'helooooo', 'heloo'),
(6, 0, 16, 'helooooo', 'hello');

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `Subject` varchar(10) NOT NULL,
  `ChapID` int(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Info` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `expertsugg`
--

CREATE TABLE `expertsugg` (
  `ExpertID` int(5) NOT NULL DEFAULT 0,
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(500) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `expertsugg`
--

INSERT INTO `expertsugg` (`ExpertID`, `Name`, `Email_id`, `Subject`, `Description`) VALUES
(2, 'si wassim', '', '', 'jjjjjjjjjjjjjjjjjj'),
(3, 'wassim', 'daouthi7@gmail.com', 'css', 'hhhhhhhhh');

-- --------------------------------------------------------

--
-- Structure de la table `expert_info`
--

CREATE TABLE `expert_info` (
  `Expert_id` int(2) NOT NULL,
  `FirstName` varchar(20) NOT NULL DEFAULT '',
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `expert_info`
--

INSERT INTO `expert_info` (`Expert_id`, `FirstName`, `MiddleName`, `LastName`, `Email_id`, `Gender`, `UserName`, `Password`) VALUES
(2, 'daouthi', '', 'wassim', 'daouthi7@gmail.com', 'male', 'wassim', 'w123'),
(3, 'daouthi', '', 'daouthi', 'daouthi7@gmail.com', 'male', 'Daouthi', 'daouthi'),
(7, 'Wassim', '', 'Daouthi', 'daouthi7@gmail.com', 'male', 'Daouthi', 'jhkj'),
(8, 'Wassim', '', 'Daouthi', 'daouthi7@gmail.com', 'male', 'Daouthi', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`Description`, `name`, `email`) VALUES
('xxxxxxxxxxxxxxxxxx', '', ''),
('hello hello', 'taha Br', 'taha@gmailcom');

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

CREATE TABLE `purchase` (
  `Book` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OrderNo` int(10) NOT NULL,
  `Full` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Addr` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `City` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PinCode` int(20) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Mobile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `purchase`
--

INSERT INTO `purchase` (`Book`, `OrderNo`, `Full`, `Addr`, `City`, `PinCode`, `State`, `Email`, `Mobile`) VALUES
('Html edition 2', 5, 'Wassim Daouthi', '3142 Kairouan3142', 'Kairouan', 3142, 'sahloul', 'daouthi7@gmail.com', '95441293');

-- --------------------------------------------------------

--
-- Structure de la table `que`
--

CREATE TABLE `que` (
  `QueID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `que`
--

INSERT INTO `que` (`QueID`, `UserID`, `UserName`, `Description`) VALUES
(1, 13, 'parth', 'What is HTML?'),
(3, 13, 'parth', 'What is CSS?'),
(14, 15, 'si wassim', 'helooooo'),
(15, 15, 'si wassim', 'helooooo'),
(16, 0, 'si wassim', 'helooooo');

-- --------------------------------------------------------

--
-- Structure de la table `responsesugg`
--

CREATE TABLE `responsesugg` (
  `ExpertID` int(5) NOT NULL DEFAULT 0,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subject`
--

CREATE TABLE `subject` (
  `Title` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Info` varchar(153) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Dinfo` varchar(850) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `subject`
--

INSERT INTO `subject` (`Title`, `Info`, `Dinfo`) VALUES
('erchitecture', 'helooooooooooooooooooooo', 'yessssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `User_id` int(12) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`User_id`, `FirstName`, `LastName`, `Gender`, `Email_id`, `UserName`, `Password`) VALUES
(17, 'taha', 'Br', 'male', 'taha@gmailcom', 'taha', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`UserName`);

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ChapID`);

--
-- Index pour la table `expertsugg`
--
ALTER TABLE `expertsugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Index pour la table `expert_info`
--
ALTER TABLE `expert_info`
  ADD PRIMARY KEY (`Expert_id`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Index pour la table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`QueID`);

--
-- Index pour la table `responsesugg`
--
ALTER TABLE `responsesugg`
  ADD PRIMARY KEY (`ExpertID`);

--
-- Index pour la table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `Title` (`Title`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ChapID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `expert_info`
--
ALTER TABLE `expert_info`
  MODIFY `Expert_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `que`
--
ALTER TABLE `que`
  MODIFY `QueID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
