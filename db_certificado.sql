-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 03-Set-2020 às 20:47
-- Versão do servidor: 5.7.28
-- versão do PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_certificado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) NOT NULL,
  `curso` varchar(300) NOT NULL,
  `ch` varchar(100) NOT NULL,
  `dt` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `curso`, `ch`, `dt`, `created_at`, `updated_at`) VALUES
(1, 'jose da silva', 'matematica', '20hrs', '2020-09-03 00:00:00', '2020-09-03 17:30:09', '2020-09-03 17:30:09'),
(2, 'maria da silva', 'inglês', '15hrs', '2020-09-03 00:00:00', '2020-09-03 17:30:09', '2020-09-03 17:30:09'),
(3, 'paulo', 'ciencias', '5hrs', '2020-09-15 00:00:00', '2020-09-03 18:02:25', '2020-09-03 18:02:25'),
(4, 'suzy', 'fisica', '10hrs', '2020-09-23 00:00:00', '2020-09-03 18:02:25', '2020-09-03 18:02:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
