# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2019-02-06 00:04:38
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cadastro"
#

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE `cadastro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `datadenascimento` date DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `telefonec` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "cadastro"
#


#
# Structure for table "ci_sessions"
#

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ci_sessions"
#

