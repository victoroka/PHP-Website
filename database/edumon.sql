-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12-Nov-2015 às 02:01
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edumon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd`
--

CREATE TABLE IF NOT EXISTS `bd` (
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `bd`
--

INSERT INTO `bd` (`nome`, `email`, `senha`, `cidade`, `estado`, `foto`) VALUES
('Lucas Portella', 'lucas@yahoo', '698dc19d489c4e4db73e28a713eab07b', 'SÃ£o Paulo', 'SP', ''),
('Jesus Cristo', 'lucas@sim', '110d46fcd978c24f306cd7fa23464d73', 'CÃ©u', 'CE', ''),
('Lucas P', 'lucas@lucas', '912ec803b2ce49e4a541068d495ab570', 'Sao Paulo', 'SP', 'aluno.JPG'),
('shaun carneiro', 'shaun@carn', 'a2bb892f7d3d0e9e81f56035b4467ebbc2c5d2cd', 'SP', 'SP', '12088379_752766414869164_7087143810384448776_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
