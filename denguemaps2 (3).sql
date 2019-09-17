-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Set-2019 às 16:49
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `denguemaps2`
--
CREATE DATABASE IF NOT EXISTS `denguemaps2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `denguemaps2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_incidencia`
--

CREATE TABLE IF NOT EXISTS `ponto_incidencia` (
  `id_ponto_incidencia` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(100) NOT NULL,
  `numero` int(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_ponto_incidencia`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_usuario_2` (`cod_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `ponto_incidencia`
--

INSERT INTO `ponto_incidencia` (`id_ponto_incidencia`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `latitude`, `longitude`, `cod_usuario`) VALUES
(3, 'Avenida Raul Furquim', 1451, 'Jardim Maraja', 'Bebedouro', 'SP', '-20.9394553', '-48.4936399', 29),
(4, 'Rua Marechal Deodoro da Fonseca', 14516, 'Centro', 'Bebedouro', 'SP', '-20.9461214', '-48.485272099999996', 29),
(7, 'R. MaurÃ­cio Galli', 555, 'Vila Sedenho', 'Araraquara', 'SP', '-21.7633546', '-48.1645372', 28),
(8, 'Rua Almirante TamandarÃ©', 340, 'Vila Xavier', 'Araraquara', 'SP', '-21.7856555', '-48.1617549', 28),
(9, 'Rua ItÃ¡lia', 1820, 'Centro', 'Araraquara', 'SP', '-21.7919874', '-48.180563299999996', 29);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE IF NOT EXISTS `teste` (
  `id_teste` int(11) NOT NULL AUTO_INCREMENT,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL,
  `p5` varchar(100) NOT NULL,
  `p6` varchar(100) NOT NULL,
  `p7` varchar(100) NOT NULL,
  `p8` varchar(100) NOT NULL,
  `p9` varchar(100) NOT NULL,
  `p10` varchar(100) NOT NULL,
  `grave` varchar(100) NOT NULL,
  PRIMARY KEY (`id_teste`),
  KEY `id_teste` (`id_teste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=233 ;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id_teste`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `grave`) VALUES
(222, 'sim', 'nao', 'sim', 'nao', 'sim', 'nao', 'sim', 'nao', 'sim', 'nao', 'atencao'),
(223, 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao'),
(224, 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim'),
(225, 'sim', 'nao', 'sim', 'nao', 'nao', 'nao', 'nao', 'sim', 'nao', 'sim', 'atencao'),
(226, 'sim', 'sim', 'nao', 'nao', 'nao', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim'),
(227, 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao'),
(228, 'sim', 'nao', 'nao', 'nao', 'sim', 'sim', 'sim', 'nao', 'sim', 'nao', 'atencao'),
(229, 'nao', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim'),
(230, 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao', 'nao'),
(231, 'sim', 'nao', 'sim', 'nao', 'nao', 'sim', 'nao', 'sim', 'nao', 'sim', 'atencao'),
(232, 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `idade` int(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `permissao` int(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `sexo`, `idade`, `email`, `senha`, `permissao`) VALUES
(11, 'Admin', 'F', 18, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(12, 'Akyza', 'F', 17, 'akyza@email.com', '2f069099046cf920466a1b3a75885f11', 0),
(14, 'Giovanna', 'F', 18, 'gio@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(25, 'Bia', 'F', 19, 'bia@email.com', 'cec99284fcbf3d5e9dee04ced5a4c301', 0),
(27, 'Dalete', 'F', 19, 'dalete@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(28, 'Akyza Santos ', 'F', 17, 'akyza@gmail.com', '5e711aa9b0d587305c5a888dd40b5332', 0),
(29, 'JosÃ© Rodolfo Beluzo', 'M', 35, 'beluzo@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(30, 'Jose Beluzo', 'M', 35, 'beluzo@email.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ponto_incidencia`
--
ALTER TABLE `ponto_incidencia`
  ADD CONSTRAINT `ponto_incidencia_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
