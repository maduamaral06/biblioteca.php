-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23/05/2025 às 23:42
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_livro`
--

DROP TABLE IF EXISTS `tb_livro`;
CREATE TABLE IF NOT EXISTS `tb_livro` (
  `id_livro` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `ano_publicacao` year NOT NULL,
  `vl_livro` decimal(10,2) NOT NULL,
  `nm_autor` varchar(120) NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tb_livro`
--

INSERT INTO `tb_livro` (`id_livro`, `titulo`, `categoria`, `ano_publicacao`, `vl_livro`, `nm_autor`) VALUES
(1, 'É assim que acaba', 'Drama', '2018', 30.87, 'Colen Hoover'),
(2, 'A maldição do tigre', 'fantasia romântica', '2011', 28.65, 'Coleen Hook'),
(3, 'A Rainha Vermelha', 'Fantasia', '2015', 39.25, 'Victoria Aveyard');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
