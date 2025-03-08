-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table portfolio. langage
CREATE TABLE IF NOT EXISTS `langage` (
  `id_l` int NOT NULL AUTO_INCREMENT,
  `nom_l` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_l`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table portfolio.langage : ~4 rows (environ)
INSERT INTO `langage` (`id_l`, `nom_l`) VALUES
	(1, 'php'),
	(2, 'larevel'),
	(3, 'bootstrap'),
	(4, 'js');

-- Listage de la structure de table portfolio. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT '0',
  `password` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table portfolio.user : ~0 rows (environ)

-- Listage de la structure de table portfolio. wl
CREATE TABLE IF NOT EXISTS `wl` (
  `id_l` int NOT NULL,
  `percent` int DEFAULT NULL,
  `id_w` int NOT NULL,
  KEY `FK__work` (`id_w`),
  KEY `FK_wl_langage` (`id_l`),
  CONSTRAINT `FK__work` FOREIGN KEY (`id_w`) REFERENCES `work` (`id_w`),
  CONSTRAINT `FK_wl_langage` FOREIGN KEY (`id_l`) REFERENCES `langage` (`id_l`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table portfolio.wl : ~6 rows (environ)
INSERT INTO `wl` (`id_l`, `percent`, `id_w`) VALUES
	(4, 20, 1),
	(3, 20, 1),
	(1, 60, 1),
	(1, 50, 2),
	(4, 40, 2),
	(3, 10, 2);

-- Listage de la structure de table portfolio. work
CREATE TABLE IF NOT EXISTS `work` (
  `nom_w` varchar(100) DEFAULT NULL,
  `photo1` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  `photo4` varchar(100) DEFAULT NULL,
  `moyen` varchar(100) DEFAULT NULL,
  `id_w` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_w`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table portfolio.work : ~3 rows (environ)
INSERT INTO `work` (`nom_w`, `photo1`, `photo2`, `photo3`, `photo4`, `moyen`, `id_w`) VALUES
	('ecommerce', NULL, NULL, NULL, NULL, 'large', 1),
	('portfolio', NULL, NULL, NULL, NULL, 'simple', 2),
	('qoutes', NULL, NULL, NULL, NULL, 'simple', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
