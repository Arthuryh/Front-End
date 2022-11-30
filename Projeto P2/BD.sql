-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para p2_mitsuki_db
CREATE DATABASE IF NOT EXISTS `p2_mitsuki_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `p2_mitsuki_db`;

-- Copiando estrutura para tabela p2_mitsuki_db.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `descritivo` varchar(200) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `destaque` varchar(100) DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela p2_mitsuki_db.produto: ~4 rows (aproximadamente)
INSERT INTO `produto` (`codigo`, `titulo`, `descritivo`, `valor`, `destaque`, `qtd`, `categoria`) VALUES
	(1, 'Cypher', NULL, 159, 'img/produtos/', 10, 'valorant'),
	(2, 'Cypher', NULL, 159, 'img/produtos/', 10, 'valorant'),
	(3, 'Cypher', NULL, 159, 'img/produtos/', 10, 'valorant'),
	(4, 'Cypher', NULL, 159, 'img/produtos/', 10, 'valorant');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
