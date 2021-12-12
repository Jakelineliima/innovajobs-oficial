-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Dez-2021 às 22:01
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `innovajobs-db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolaridades`
--

DROP TABLE IF EXISTS `escolaridades`;
CREATE TABLE IF NOT EXISTS `escolaridades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escolaridade` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `escolaridades`
--

INSERT INTO `escolaridades` (`id`, `escolaridade`) VALUES
(1, 'Ensino fundamental incompleto'),
(2, 'Ensino fundamental completo'),
(3, 'Ensino médio incompleto'),
(4, 'Ensino médio completo'),
(5, 'Ensino técnico incompleto'),
(6, 'Ensino técnico completo'),
(7, 'Ensino superior incompleto'),
(8, 'Ensino superior completo'),
(9, 'Qualquer nível de escolaridade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especiais`
--

DROP TABLE IF EXISTS `especiais`;
CREATE TABLE IF NOT EXISTS `especiais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `especial` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `especiais`
--

INSERT INTO `especiais` (`id`, `especial`) VALUES
(1, 'Deficiente físico '),
(2, 'Deficiente auditivo'),
(3, 'Mudez ( não fala )'),
(4, 'Deficiente visual'),
(5, 'Autista '),
(6, 'Qualquer tipo de deficiencia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g??neros`
--

DROP TABLE IF EXISTS `g??neros`;
CREATE TABLE IF NOT EXISTS `g??neros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `g??neros`
--

INSERT INTO `g??neros` (`id`, `genero`) VALUES
(6, 'Lgbtqi+'),
(5, 'Masculino'),
(4, 'Feminino'),
(7, 'Não definido'),
(8, 'Todos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hometextos`
--

DROP TABLE IF EXISTS `hometextos`;
CREATE TABLE IF NOT EXISTS `hometextos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `hometextos`
--

INSERT INTO `hometextos` (`id`, `texto`, `image`) VALUES
(4, 'Conheça sua nova vida profissional.', ''),
(6, ' Fique por dentro das novidades do seu setor', ''),
(5, '  Na Use Jobs temos vagas para todas as áreas.', ''),
(7, ' Oferecemos vagas com experiência e sem experiência, para você que             está iniciando no mercado de trabalho, Use Jobs oferece espaço para             todos em todas as áreas.', ''),
(8, '', 'Group 148.png'),
(9, '', 'Group 146.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobretextos`
--

DROP TABLE IF EXISTS `sobretextos`;
CREATE TABLE IF NOT EXISTS `sobretextos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sobretextos`
--

INSERT INTO `sobretextos` (`id`, `texto`, `image`) VALUES
(1, 'dfghj', '1133946.jpg'),
(2, 'cc', '1124795.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `created`, `modified`) VALUES
(17, 'Jaqueline Ingrid da silva Lima', 'jaqueline.liima555@gmail.com', '$2y$10$nkQu.iTDI6zrXMI0oTU9reIq5hbh6r.OkNK65gCDF3V4ItJOhtA0m', '2021-11-09 21:59:04', '2021-11-29 09:59:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `horário` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `vaga` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `gêneros_id` int(11) NOT NULL,
  `especiais_id` int(220) NOT NULL,
  `escolaridades_id` int(11) NOT NULL,
  `mensagem` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `user_id`, `horário`, `telefone`, `email`, `vaga`, `empresa`, `gêneros_id`, `especiais_id`, `escolaridades_id`, `mensagem`) VALUES
(52, 17, '12:00:00', '(16)93262-3535', 'legumes@gmail.com', 'Operador de caixa', 'Legumes Veget', 8, 6, 9, 'Enviar currículo pelo email ou ligar e falar com Juliana'),
(56, 18, '07:30:00', '(16)99755-4665', 'tresirmao@gmail.com', 'Repositor', 'Supermercado Três Irmãos', 8, 5, 9, 'Enviar currículo no email ou whatsapp, caso ligar falar com Wellington.'),
(57, 18, '09:30:00', '(16)99712-5613', 'lycosmeticos@gmail.com', 'Atendimento ', 'Ly cosmeticos ', 6, 6, 9, 'Sua função será ficar responsável pelo whatsapp e repassar os pedidos dos clientes para as atendentes e caixa da loja.\r\nEnviar currículo no email.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
