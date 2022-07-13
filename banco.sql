-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for adega
DROP DATABASE IF EXISTS `adega`;
CREATE DATABASE IF NOT EXISTS `adega` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `adega`;

-- Dumping structure for table adega.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table adega.categoria: ~2 rows (approximately)
INSERT INTO `categoria` (`id`, `nome`) VALUES
	(4, 'cerveja'),
	(5, 'whisky');

-- Dumping structure for table adega.produtos
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `produtos_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(20,2) NOT NULL,
  `qnt` int(11) NOT NULL,
  PRIMARY KEY (`produtos_id`) USING BTREE,
  KEY `FK_produtos_categoria` (`categoria_id`),
  CONSTRAINT `FK_produtos_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table adega.produtos: ~5 rows (approximately)
INSERT INTO `produtos` (`produtos_id`, `categoria_id`, `nome`, `preco`, `qnt`) VALUES
	(10, 4, 'stela', 5.00, 56),
	(11, 4, 'original', 6.00, 34),
	(12, 5, 'red label', 150.00, 2),
	(142, 5, '1', 1.00, 12),
	(143, 4, '1', 1.00, 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
