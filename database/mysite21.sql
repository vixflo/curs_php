/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ mysite21 /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE mysite21;

DROP TABLE IF EXISTS utilizatori;
CREATE TABLE `utilizatori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(250) NOT NULL,
  `datanastere` date NOT NULL,
  `sex` enum('m','f','n','') NOT NULL DEFAULT 'n',
  `telefon` char(10) NOT NULL,
  `poza` varchar(50) NOT NULL,
  `data_adaugare` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;