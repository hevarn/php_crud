-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 17 juin 2021 à 22:05
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_cave`
--

-- --------------------------------------------------------

--
-- Structure de la table `bottles`
--

CREATE TABLE `bottles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `grapes` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `description` varchar(550) NOT NULL,
  CONSTRAINT FK_imageID FOREIGN KEY (imageID)
  REFERENCES image(imageID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--
INSERT INTO `bottles` (`name`,`year`,`grapes`,`country`,`region`,`description`,`picture`) VALUES 
('CHATEAU DE SAINT COSME','2009','Grenache / Syrah','france','Rhone Sud Gigondas','Les arômes des fruits et épices sont légèrement suggéré et mis en avant lors de la dégustation de ce petit vin, qui fait un excellent complément aux plats de poissons.',''), 
('LAN RIOJA CRIANZA','2006','Tempranillo','spain','Rioja','Une recrudescence d intérêt pour les boutiques de vignobles a ouvert la porte à cette excellent cru dans le marché des vins de dessert. Léger et sucré, avec une touche de truffe noir, ce vin n échouera pas à nous satisfaire de plaisir.',''),
('MARGERUM SYBARITE','2010','Sauvignon Blanc','usa','California Central Cosat','L emplacement d un cabernet raffiné dans sa cave à vin peut désormais être comblé par un vin ludique et enfantin bouillonnant de goûts et alléchant par sa cerise noire et son réglisse. C est une dégustation qui est sûr de vous transporter dans le temps.',''),
('OWEN ROE "EX UMBRIS"','2009','syah','usa','Washington','Un double coup de poivre noir et de jalapeño fera vibrer vos sens, tandis que l essence d orange vous ramènera à la réalité. Ne manquez pas cette sensation gustative primée.',''),
('REX HILL','2009','pinot noir','usa','Oregon','Il n y a aucun doute que ce sera le vin servi lors des remises de prix d Hollywood, car il a un pouvoir de star indéniable. Soyez le premier à assister aux débuts dont tout le monde parlera demain.',''),
('VITICCIO CLASSICO RISERVA','2007','sangioves','italy','Tuscany','Bien que doux et arrondi dans sa texture, le corps de ce vin est plein, riche et tellement attrayant. Cette prestation est encore plus impressionnante quand on note des tanins tendres qui laissent les papilles pleinement satisfaites.',''),
('CHATEAU LE DOYENNE','2005','merlot','france','Bordeaux','Though dense and chewy, this wine does not overpower with its finely balanced depth and structure. It is a truly luxurious experience for the senses.',''),
('DOMAINE DU BOUSCAT','2006','merlot','france','Bordeaux','La couleur dorée claire de ce vin dément la saveur vive quil détient. Véritable vin d été, il invite à un pique-nique dans un vignoble ensoleillé.',''),
('BLOCK NINE','2007','pinot noir','usa','californie','Avec des notes de gingembre et d épices, ce vin est un excellent complément aux apéritifs légers et aux desserts pour une réunion des Fêtes.',''),
('DOMAINE SERENE','2010','pinot noir','usa','oregon','Bien que subtil dans ses complexités, ce vin saura plaire à un large éventail d amateurs. Des notes de grenade vous raviront tandis que la finition de noisette complète le tableau d une belle expérience de dégustation.',''),
('BODEGA LURTON','2011','pinot noir','arentina','mendoza','Des notes solides de cassis mélangées à de légers agrumes en font un vin facile à verser pour des palais variés.',''),
('LES MORIZOTTES','2009','chardonnay','france','Bordeaux','Brisant le moule des classiques, cette offre surprendra et ravivera sans aucun doute les papilles avec les notes de café et de tabac dans l alignement parfait des notes plus traditionnelles. Sûr de plaire à la foule de fin de soirée avec une légère poussée d adrénaline qu il apporte.','');

--
-- Index pour la table `bottles`
--
ALTER TABLE `bottles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bottles`
--
ALTER TABLE `bottles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

CREATE TABLE`picture` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `taille` int(11) NOT NULL,
  `type` varchar(20) NO NULL,
  `bin` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `image` (
  ADD PRIMARY KEY (`id`);
)
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
