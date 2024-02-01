-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 17 déc. 2023 à 13:26
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nous editions`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_table`
--

DROP TABLE IF EXISTS `category_table`;
CREATE TABLE IF NOT EXISTS `category_table` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `category_description`) VALUES
(19, 'Romance', 'rrrrrrr'),
(20, 'Aventure', 'aaaaaaaaa'),
(22, 'horreur', 'hhh');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `stat` int NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `lastName`, `firstName`, `address`, `dob`, `password`, `email`, `telephone`, `stat`) VALUES
(11, 'Triki', 'sana', 'bizerte ', '2009-12-10', 'dxcxc', '123@gmail', 85555, 1),
(12, 'leila', 'jijou', 'bizerte ', '2023-12-08', '123', 'sonmou@gmai', 55555684, 0),
(14, 'haha', 'ramzi', '123', '2023-12-20', '123', 'ramzi@gmail.com', 5456546, 1),
(17, 'haha', 'moufid', '123', '2023-12-21', '$2y$10$GV/ReSBPtIkDp62KcY0wHO7prX3ax1NLtnQY0qu83axY3qYS4kx0S', 'moufid@gmail.com', 5456546, 1),
(18, 'matoug', 'aziz', 'tunis', '2023-12-16', '$2y$10$SrZdCQFP23wY/Wi/r/FeBuvYSu0pz0BCHtcLzJp7O5wYw1M7SMtQ.', 'khaliltriki86@gmail.com', 55555684, 0),
(19, 'BENHAMADI', 'Mahdi', '108 NAHJ AL MAGHREB', '2023-12-06', '$2y$10$C3i.uElROTNJAPy.bOY8OejV84y1cf3k9Pmpuny7nKEj0BHuu4UC2', 'benhamadi@gmail.com', 45879745, 1),
(20, 'KRAIEM', 'Sonia', '452 Nahj el romena', '2023-12-07', '$2y$10$0DcriF3KwYeiyt3XavtnyOBgivN.ZZFB8f1ZWm6C3TJdb9VsaUSya', 'soniakraiem@gmail.com', 95487654, 0),
(23, 'BenChaabene', 'Khalil', '108 NAHJ AL MAGHREB', '2009-11-12', '$2y$10$29uKa5nsy9Zlog.M.5NNE.94TPMKPRcP.ZWRlMqHdoseGfs/iugku', 'lal@gmail.com', 2147483647, 0),
(26, 'Naanaa', 'Chaima', 'Ariana Chotrana', '2003-10-28', '$2y$10$soKcrErgCSHzXKqUTtiXteez/Php62n/32LQinYaPUX/rsO7Exzv6', 'chaima@gmail.com', 954123688, 0),
(29, 'triki', 'omar', 'ariana', '2009-12-04', '$2y$10$4uvBnPmhbzR78BYBZYaYjegVGgWinqENRSo23lFAUJqBjGtWT/IMm', 'omar@gmail.com', 2147483647, 1),
(30, 'MAATOUG', 'Aziz', 'a', '2003-10-28', '$2y$10$5yhXM/ZeHj/IlbSISchEAOUtG6t1s8bDauLwuLNy1JkJAmCVALYNu', 'mohamedaziz.maatoug@esprit.tn', 93014369, 0),
(31, 'Rbii', 'Emna', 'Ariana', '2009-10-02', '$2y$10$fhQtd4a415I2cnoOTshGnuKCT7v.F3HkrFXLTNiXcZVEi3dlcS0vC', 'Emna@gmail.com', 2147483647, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

DROP TABLE IF EXISTS `commands`;
CREATE TABLE IF NOT EXISTS `commands` (
  `idcommand` int NOT NULL AUTO_INCREMENT,
  `prixtotale` decimal(10,2) DEFAULT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'non traitee',
  PRIMARY KEY (`idcommand`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`idcommand`, `prixtotale`, `etat`) VALUES
(194, '784.56', 'valide'),
(193, '413.20', 'valide'),
(192, '227.00', 'valide'),
(191, '513.20', 'valide'),
(190, '256.60', 'valide'),
(189, '1274.08', 'valide'),
(188, '313.20', 'valide'),
(187, '469.80', 'non traitee'),
(186, '313.20', 'non traitee'),
(185, '313.20', 'non traitee'),
(184, '413.20', 'non traitee'),
(183, '810.20', 'non traitee'),
(182, '1644.92', 'non traitee'),
(181, '337.60', 'non traitee'),
(180, '313.20', 'non traitee'),
(179, '469.80', 'non traitee'),
(178, '313.20', 'non traitee'),
(177, '156.60', 'non traitee'),
(176, '834.72', 'non traitee'),
(175, '340.20', 'non traitee'),
(174, '680.40', 'non traitee'),
(173, '680.40', 'non traitee'),
(172, '313.20', 'non traitee'),
(171, '256.60', 'non traitee'),
(170, '156.60', 'non traitee'),
(169, '1252.08', 'non traitee'),
(168, '723.80', 'non traitee'),
(167, '510.00', 'non traitee'),
(166, '183.00', 'non traitee'),
(165, '156.00', 'non traitee'),
(164, '312.00', 'non traitee'),
(163, '512.00', 'non traitee'),
(162, '512.00', 'non traitee'),
(161, NULL, 'non traitee'),
(160, '468.00', 'non traitee'),
(159, NULL, 'non traitee'),
(158, NULL, 'non traitee'),
(157, NULL, 'non traitee'),
(156, NULL, 'non traitee'),
(155, NULL, 'non traitee'),
(154, '468.00', 'non traitee'),
(153, NULL, 'non traitee'),
(152, NULL, 'non traitee'),
(151, NULL, 'non traitee'),
(150, '393.00', 'non traitee'),
(149, '366.00', 'non traitee'),
(148, '522.00', 'non traitee'),
(147, NULL, 'non traitee'),
(146, NULL, 'non traitee'),
(145, '1197.00', 'non traitee'),
(144, '798.00', 'non traitee'),
(143, '298.00', 'non traitee'),
(142, '750.00', 'non traitee'),
(141, '694.00', 'non traitee'),
(140, '752.00', 'non traitee'),
(195, '340.20', 'valide'),
(196, '428.36', 'non traitee'),
(197, '100.00', 'non traitee'),
(198, '340.20', 'non traitee'),
(199, '224.40', 'non traitee'),
(200, '217.60', 'valide'),
(201, '156.40', 'valide'),
(202, '170.00', 'valide'),
(203, '98.60', 'valide');

-- --------------------------------------------------------

--
-- Structure de la table `contributions`
--

DROP TABLE IF EXISTS `contributions`;
CREATE TABLE IF NOT EXISTS `contributions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` text,
  `file_path` varchar(255) DEFAULT NULL,
  `categorie` varchar(30) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `etat_contribution` enum('non traitee','valide') DEFAULT 'non traitee',
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contributions`
--

INSERT INTO `contributions` (`id`, `name`, `email`, `phone_number`, `address`, `message`, `file_path`, `categorie`, `facebook`, `etat_contribution`, `category_id`) VALUES
(170, 'hello', 'wwbenhamadi@gmail.com', '95487654', 'nnn', 'sssssssss', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'sssssssssssss', 'valide', 19),
(171, 'Oumaima SANSAsaas', 'samahnibenhamadi@gmail.com', '95487654', 'nnn', 'lalalalal', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'lalalala', 'valide', 19),
(172, 'Oumaima SANSAsaasss', 'samahnibenhamadi@gmail.com', '95487654', 'nnn', 'lalalalal', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'lalalala', 'valide', 19),
(173, 'Oumaima SANSAsaasss', 'samahnibenhamadi@gmail.com', '95487654', 'nnn', 'lalalalal', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'lalalala', 'valide', 19),
(174, 'hello', 'wwbenhamadi@gmail.com', '95487654', 'nnn', 'sssssssss', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'sssssssssssss', 'valide', 19),
(175, 'Oumaima SANSAsaasss', 'samahnibenhamadi@gmail.com', '95487654', 'nnn', 'lalalalal', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'lalalala', 'valide', 19),
(176, 'hello', 'wwbenhamadi@gmail.com', '95487654', 'nnn', 'sssssssss', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'sssssssssssss', 'valide', 19),
(177, 'hello', 'wwbenhamadi@gmail.com', '95487654', 'nnn', 'sssssssss', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'sssssssssssss', 'valide', 19),
(178, 'Khalil Ben Chaabene', 'Khalilbenchaabene@esprit.tn', '+21693014555', '108 NAHJ AL MAGHREB', 'aaaaaaaaaaaaaa', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'khalil0com', 'valide', 19),
(180, 'Siwar Chayada', 'siwar.chayada@esprit.tn', '95487654', 'ARIANA', 'Nous vous remercions sincèrement d\'avoir soumis votre manuscrit à notre maison d\'édition. Après une analyse minutieuse, nous devons malheureusement décliner sa publication pour l\'instant. Votre travail est apprécié, cependant, en raison de contraintes éditoriales actuelles, nous ne sommes pas en mesure de donner suite à cette publication. Nous vous encourageons néanmoins à explorer d\'autres maisons d\'édition pour donner vie à votre œuvre littéraire. Nous vous souhaitons plein succès dans vos démarches futures et vous remercions à nouveau pour votre intérêt envers notre maison d\'édition', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'www.siwar.com', 'valide', 19),
(182, 'Siwar Chayada', 'siwar.chayada@esprit.tn', '95487654', 'ARIANA', 'Nous vous remercions sincèrement d\'avoir soumis votre manuscrit à notre maison d\'édition. Après une analyse minutieuse, nous devons malheureusement décliner sa publication pour l\'instant. Votre travail est apprécié, cependant, en raison de contraintes éditoriales actuelles, nous ne sommes pas en mesure de donner suite à cette publication. Nous vous encourageons néanmoins à explorer d\'autres maisons d\'édition pour donner vie à votre œuvre littéraire. Nous vous souhaitons plein succès dans vos démarches futures et vous remercions à nouveau pour votre intérêt envers notre maison d\'édition', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'www.siwar.com', 'valide', 19),
(183, 'Chaima naanaa', 'chaima.naanaa@esprit.tn', '+2169848685', '108 NAHJ AL MAGHREB', 'Nous vous remercions sincèrement d\'avoir soumis votre manuscrit à notre maison d\'édition. Après une analyse minutieuse, nous devons malheureusement décliner sa publication pour l\'instant. Votre travail est apprécié, cependant, en raison de contraintes éditoriales actuelles, nous ne sommes pas en mesure de donner suite à cette publication. Nous vous encourageons néanmoins à explorer d\'autres maisons d\'édition pour donner vie à votre œuvre littéraire. Nous vous souhaitons plein succès dans vos démarches futures et vous remercions à nouveau pour votre intérêt envers notre maison d\'édition', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/372137.jpg', 'Romance', 'chaima.com', 'valide', 19),
(184, 'Mahdi BENHAMADI', 'benhamadi@gmail.com', '45879745', '108 NAHJ AL MAGHREB', 'aaaaaaaa', 'C:\\Users\\azizs\\NousEditions-website before chatbot\\Controller\\uploads/projet micro version avancée.txt', 'Romance', 'aaaaaaaaaaa', 'non traitee', 19),
(185, 'Mahdi BENHAMADI', 'benhamadi@gmail.com', '45879745', '108 NAHJ AL MAGHREB', 'aaaaaaaa', 'C:\\Users\\azizs\\NousEditions-website before chatbot\\Controller\\uploads/projet micro version avancée.txt', 'Romance', 'aaaaaaaaaaa', 'non traitee', 19),
(186, 'Mahdi BENHAMADI', 'benhamadi@gmail.com', '45879745', '108 NAHJ AL MAGHREB', 'aaaaaaaa', 'C:\\Users\\azizs\\NousEditions-website before chatbot\\Controller\\uploads/projet micro version avancée.txt', 'Romance', 'aaaaaaaaaaa', 'non traitee', 19),
(187, 'ggg', 'azizsydmamaatoug@yahoo.fr', '44', '454', 'n,n', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/projet micro version avancée.txt', 'Romance', 'b', 'non traitee', 19),
(191, 'Aziz Mtg', 'mohamedaziz.maatoug@esprit.tn', '93014555', '452 Nahj el romena', 'ABC', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/tsukihime pdf.pdf', 'Romance', 'www.facebook/aziz.com', 'non traitee', 19),
(192, 'chaima naanaa', 'chaima@gmail.com', '9503418', 'Ariana chotrana', 'livre tres bien', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/tsukihime pdf.pdf', 'Romance', 'www.facebook/chaima.com', 'non traitee', 19),
(193, 'Med Aziz MAATOUG', 'chaima@gmail.com', '93014369', 'a', 'mmmmm', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/fotor-ai-2023121524439.jpg', 'Romance', 'kkk', 'non traitee', 19),
(194, 'jjj', 'chaima@gmail.com', '88', 'ARIANA devant hafood', 'jk7', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/Livre.pdf', 'Romance', 'lk', 'non traitee', 19),
(195, 'Med Aziz MAATOUG', 'mohamedaziz.maatoug@esprit.tn', '93014369', 'a', 'ffgff', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/Applications of Generative AI.webm', 'Romance', 'www.facebook/aziz.com', 'non traitee', 19),
(196, 'Med Aziz MAATOUG', 'mohamedaziz.maatoug@esprit.tn', '93014369', 'a', 'ffgff', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/Livre (2).pdf', 'Romance', 'www.facebook/aziz.com', 'non traitee', 19),
(197, 'Chaima NAANAA', 'mohamedaziz.maatoug@esprit.tn', '+21698746875', 'ARIANA devant hafood', 'jnuy', 'C:\\Users\\azizs\\NousEditions-website\\Controller\\uploads/Livre (2).pdf', 'Romance', 'gyv', 'valide', 19);

-- --------------------------------------------------------

--
-- Structure de la table `fasil`
--

DROP TABLE IF EXISTS `fasil`;
CREATE TABLE IF NOT EXISTS `fasil` (
  `idf` int NOT NULL AUTO_INCREMENT,
  `idl` int DEFAULT NULL,
  `idc` int DEFAULT NULL,
  `quantite` int DEFAULT NULL,
  `idclient` int NOT NULL,
  PRIMARY KEY (`idf`),
  KEY `idc` (`idc`)
) ENGINE=MyISAM AUTO_INCREMENT=539 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fasil`
--

INSERT INTO `fasil` (`idf`, `idl`, `idc`, `quantite`, `idclient`) VALUES
(476, 14, 188, 1, 0),
(475, 14, 188, 1, 0),
(474, 14, 187, 1, 0),
(473, 14, 187, 1, 0),
(472, 14, 187, 1, 0),
(471, 14, 186, 1, 0),
(470, 14, 186, 1, 0),
(469, 14, 185, 1, 0),
(468, 14, 185, 1, 0),
(467, 11, 184, 1, 0),
(466, 14, 184, 1, 0),
(465, 14, 184, 1, 0),
(464, 16, 183, 1, 0),
(463, 20, 183, 1, 0),
(462, 20, 183, 1, 0),
(461, 16, 182, 1, 0),
(460, 19, 182, 1, 0),
(459, 20, 182, 1, 0),
(458, 17, 182, 1, 0),
(457, 17, 182, 1, 0),
(456, 11, 181, 1, 0),
(455, 14, 181, 1, 0),
(454, 15, 181, 1, 0),
(453, 15, 181, 1, 0),
(452, 15, 181, 1, 0),
(451, 14, 180, 1, 0),
(450, 14, 180, 1, 0),
(449, 14, 179, 1, 0),
(448, 14, 179, 1, 0),
(447, 14, 179, 1, 0),
(446, 14, 178, 1, 0),
(445, 14, 178, 1, 0),
(444, 14, 177, 1, 0),
(443, 17, 176, 1, 0),
(442, 17, 176, 1, 0),
(441, 15, 175, 1, 0),
(440, 14, 175, 1, 0),
(439, 14, 175, 1, 0),
(438, 15, 174, 1, 0),
(437, 15, 174, 1, 0),
(436, 14, 174, 1, 0),
(435, 14, 174, 1, 0),
(434, 14, 174, 1, 0),
(433, 14, 174, 1, 0),
(432, 15, 173, 1, 0),
(431, 15, 173, 1, 0),
(430, 14, 173, 1, 0),
(429, 14, 173, 1, 0),
(428, 14, 173, 1, 0),
(427, 14, 173, 1, 0),
(426, 14, 172, 1, 0),
(425, 14, 172, 1, 0),
(424, 14, 171, 1, 0),
(423, 11, 171, 1, 0),
(422, 14, 170, 1, 0),
(421, 17, 169, 3, 0),
(420, 11, 168, 1, 0),
(419, 11, 168, 1, 0),
(418, 15, 168, 1, 0),
(417, 15, 168, 1, 0),
(416, 14, 168, 1, 0),
(415, 14, 168, 1, 0),
(414, 14, 168, 1, 0),
(413, 11, 167, 1, 0),
(412, 11, 167, 1, 0),
(411, 11, 167, 1, 0),
(410, 11, 167, 1, 0),
(409, 11, 167, 1, 0),
(408, 11, 167, 1, 0),
(407, 11, 167, 1, 0),
(406, 11, 167, 1, 0),
(405, 16, 167, 1, 0),
(404, 20, 167, 1, 0),
(403, 15, 166, 1, 0),
(402, 15, 166, 1, 0),
(401, 14, 166, 1, 0),
(400, 14, 165, 1, 0),
(399, 14, 165, 1, 0),
(398, 14, 164, 1, 0),
(397, 11, 163, 1, 0),
(396, 14, 163, 1, 0),
(395, 11, 162, 1, 0),
(394, 14, 162, 1, 0),
(393, 14, 160, 1, 0),
(392, 14, 160, 1, 0),
(391, 14, 154, 1, 0),
(390, 14, 154, 1, 0),
(389, 15, 150, 1, 0),
(388, 14, 150, 1, 0),
(387, 15, 150, 1, 0),
(386, 14, 149, 1, 0),
(385, 15, 149, 1, 0),
(384, 15, 148, 1, 0),
(383, 14, 148, 1, 0),
(382, 14, 148, 1, 0),
(381, 19, 145, 1, 0),
(380, 20, 145, 1, 0),
(379, 20, 145, 1, 0),
(378, 20, 144, 1, 0),
(377, 20, 144, 1, 0),
(376, 11, 143, 1, 0),
(375, 10, 143, 1, 0),
(374, 14, 142, 1, 0),
(373, 10, 142, 1, 0),
(372, 10, 142, 1, 0),
(371, 10, 142, 1, 0),
(370, 11, 141, 1, 0),
(369, 10, 141, 1, 0),
(368, 10, 141, 1, 0),
(367, 10, 141, 1, 0),
(366, 14, 140, 1, 0),
(365, 10, 140, 1, 0),
(364, 11, 140, 1, 0),
(363, 11, 140, 1, 0),
(362, 10, 140, 1, 0),
(477, 14, 188, 1, 21),
(478, 14, 188, 1, 21),
(479, 14, 188, 1, 21),
(480, 11, 188, 1, 21),
(481, 17, 188, 1, 21),
(482, 17, 188, 1, 21),
(483, 15, 188, 1, 21),
(484, 14, 188, 1, 21),
(485, 14, 188, 1, 21),
(486, 14, 188, 1, 21),
(487, 14, 188, 1, 21),
(488, 14, 188, 1, 21),
(489, 11, 188, 1, 21),
(490, 11, 188, 1, 21),
(491, 11, 188, 1, 21),
(492, 11, 188, 1, 21),
(493, 11, 188, 1, 21),
(494, 17, 189, 1, 21),
(495, 17, 189, 1, 21),
(496, 17, 189, 1, 21),
(497, 16, 189, 1, 21),
(498, 16, 189, 1, 21),
(499, 14, 190, 1, 21),
(500, 11, 190, 1, 21),
(501, 14, 191, 1, 21),
(502, 14, 191, 1, 21),
(503, 11, 191, 1, 21),
(504, 11, 191, 1, 21),
(505, 11, 192, 1, 21),
(506, 11, 192, 1, 21),
(507, 15, 192, 1, 21),
(508, 14, 193, 1, 23),
(509, 14, 193, 1, 23),
(510, 11, 193, 1, 23),
(511, 14, 194, 1, 23),
(512, 14, 194, 1, 23),
(513, 15, 194, 1, 23),
(514, 15, 194, 1, 23),
(515, 17, 194, 1, 23),
(516, 14, 195, 1, 23),
(517, 14, 195, 1, 23),
(518, 15, 195, 1, 23),
(519, 17, 196, 1, 23),
(520, 16, 196, 1, 23),
(521, 11, 197, 1, 21),
(522, 14, 198, 1, 21),
(523, 14, 198, 1, 21),
(524, 15, 198, 1, 21),
(525, 24, 199, 1, 25),
(526, 24, 199, 1, 25),
(527, 22, 199, 1, 25),
(528, 22, 199, 1, 25),
(529, 25, 200, 1, 28),
(530, 25, 200, 1, 28),
(531, 24, 200, 2, 28),
(532, 24, 201, 1, 30),
(533, 25, 201, 2, 30),
(534, 22, 202, 1, 31),
(535, 22, 202, 1, 31),
(536, 21, 202, 1, 31),
(537, 22, 203, 1, 30),
(538, 25, 203, 1, 30);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `idL` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `prix` int NOT NULL,
  `couverture` varchar(255) NOT NULL,
  `stock` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `idP` int NOT NULL,
  PRIMARY KEY (`idL`),
  KEY `idP` (`idP`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`idL`, `nom`, `auteur`, `prix`, `couverture`, `stock`, `description`, `idP`) VALUES
(21, 'Kill Bill', 'David Karadine', 80, '2.jfif', 4, 'Kill Bill is Tarantino\'s debut novel, an extraordinary work of fiction that will speak powerfully to his many admirers. It\'s the story of The Bride, a world-class assassin and a retired member of the elite, all-female Deadly Viper Assassination Squad (DiV', 6),
(22, '1984', 'George Orwell', 60, '5.jfif', 4, '1984 (Nineteen Eighty-Four en anglais) est le plus célèbre roman de George Orwell, publié en 1949. Il décrit une Grande-Bretagne trente ans après une guerre nucléaire entre l\'Est et l\'Ouest censée avoir eu lieu dans les années 1950 et où s\'est instauré un', 6),
(23, 'Silent City', 'Sarah Davis GOFF', 65, '4.jfif', 8, 'The Silent City. Élisabeth Vonarburg. 3.63. 231 ratings26 reviews. In the midst of a war-ravaged world, the City--sealed off from the Outside for three centuries--becomes the last refuge for a handful of human beings, including a girl endowed with extraor', 6),
(24, 'With The Fire On High', 'Elizabeth Acedevo', 72, '3.jpg', 2, 'With the Fire on High is a 2019 young adult coming-of-age novel by Dominican American author Elizabeth Acevedo, who won a National Book Award for her 2018 young adult ', 6),
(25, 'عبرات', 'مُصطفى لُطفي المنفلوطي', 56, '387499420_902362651481308_2844225128152677536_n.png', 8, ' وصف الكتاب. أحد أشهر كلاسيكيات الأدب العربي، العبرات لـ مصطفى لطفي المنفلوطي، عبارة عن تجميعة لقصص مأساوية حملت العديد من المشاعر والتقلبات والعواطف. اليتيم، وقصة مارغريت، وغيرها من قصص اختار لها المنفلوطي أسلوبا عميقا وأحداثا …', 6),
(26, 'Really Good Actually', 'Monica Heiseyy', 75, 'bookbg.png', 6, 'A humorous and relatable debut novel about a woman\'s messy breakup and search for joy.', 13),
(29, 'Med Aziz MAATOUG', 'jj', 60, '387499420_902362651481308_2844225128152677536_n.png', 8, 'Former New York Times book critic Kakutani delivers an ebullient celebration of books and reading. She comes up with an eclectic list of titles that have shaped her life, ', 11);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `idP` int NOT NULL AUTO_INCREMENT,
  `tauxRemise` decimal(5,0) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`idP`, `tauxRemise`, `dateDebut`, `dateFin`) VALUES
(6, '15', '2023-11-15', '2023-11-30'),
(8, '50', '2023-11-09', '2023-11-25'),
(9, '45', '2023-01-10', '2023-12-11'),
(10, '13', '2023-12-05', '2023-12-01'),
(11, '30', '2023-12-01', '2023-12-12'),
(12, '1', '2023-12-15', '2023-12-19'),
(13, '6', '2023-12-14', '2023-12-15');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `idReclamation` int NOT NULL AUTO_INCREMENT,
  `iduser` int DEFAULT NULL,
  `date_envoie` datetime DEFAULT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `etat` varchar(20) COLLATE utf8mb4_general_ci DEFAULT 'en attente',
  PRIMARY KEY (`idReclamation`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`idReclamation`, `iduser`, `date_envoie`, `sujet`, `message`, `etat`) VALUES
(151, 21, '2023-12-14 14:43:25', 'kljklj', 'lkjkjlkjlkjl', 'traiter'),
(152, 21, '2023-12-14 14:45:03', 'kljk', 'lkk', 'traiter'),
(153, 21, '2023-12-14 14:45:16', 'knkj', 'jhkhj', 'traiter'),
(154, 21, '2023-12-14 14:45:28', 'knknkln', 'kjkljlkjlkj', 'traiter'),
(155, 25, '2023-12-15 06:43:36', 'bonjour', 'merci!', 'en attente'),
(156, 25, '2023-12-15 06:43:39', 'bonjour', 'merci!', 'en attente'),
(157, 28, '2023-12-15 06:53:30', 'Bonjour', 'Bonjour j\'aimerais reclamer !', 'en attente'),
(158, 30, '2023-12-15 14:07:42', 'bonjour', 'bonjour ', 'en attente');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `idReponse` int NOT NULL AUTO_INCREMENT,
  `idReclamation` int DEFAULT NULL,
  `Reponse` text COLLATE utf8mb4_general_ci,
  `date_envoie_r` datetime DEFAULT NULL,
  `etat_rep` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'mawjoud',
  PRIMARY KEY (`idReponse`),
  KEY `idReclamation` (`idReclamation`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idReponse`, `idReclamation`, `Reponse`, `date_envoie_r`, `etat_rep`) VALUES
(66, 150, 'kjdqfshjdshfkdsq', '2023-12-14 14:40:40', 'suppUse'),
(67, 151, 'khkjhkklh', '2023-12-14 14:45:57', 'mawjoud'),
(68, 152, 'kjj', '2023-12-14 14:46:13', 'mawjoud'),
(69, 153, 'kjhkhkjjh', '2023-12-14 14:46:32', 'mawjoud'),
(70, 154, 'kjkkjnjknk', '2023-12-14 14:46:43', 'mawjoud'),
(71, 154, 'helllloooo', '2023-12-14 14:47:39', 'mawjoud'),
(72, 154, 'klsjdkfjdslkmjflds', '2023-12-14 14:48:10', 'mawjoud');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contributions`
--
ALTER TABLE `contributions`
  ADD CONSTRAINT `contributions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_table` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livre_promotion` FOREIGN KEY (`idP`) REFERENCES `promotion` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
