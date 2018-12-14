-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Dez-2018 às 01:08
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `cod_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cod_turma` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pai` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mae` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` int(12) UNSIGNED NOT NULL,
  `naturalidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(10) UNSIGNED NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cod_aluno`),
  KEY `aluno_cod_turma_foreign` (`cod_turma`)
) ENGINE=MyISAM AUTO_INCREMENT=302 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cod_aluno`, `cod_turma`, `nome`, `pai`, `mae`, `sexo`, `data_nasc`, `telefone`, `naturalidade`, `bairro`, `rua`, `numero`, `estado`, `created_at`, `updated_at`) VALUES
(301, 3, 'Daniel', 'José', 'Janice', 'Masculino', '1997-05-23', 123456789, 'Rio Pira', 'Bairro', 'Rua', 1, 'MG', '2018-12-14 03:06:01', '2018-12-14 03:06:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ano`
--

DROP TABLE IF EXISTS `ano`;
CREATE TABLE IF NOT EXISTS `ano` (
  `ano` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `anoex` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciclo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ano`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ano`
--

INSERT INTO `ano` (`ano`, `anoex`, `ciclo`, `created_at`, `updated_at`) VALUES
(1, '1º(Primeiro)', 'Ciclo da Alfabetização', '2018-12-12 20:07:58', '2018-12-12 20:07:58'),
(2, '2º(Segundo)', 'Ciclo da Alfabetização', '2018-12-11 18:54:04', '2018-12-11 18:54:04'),
(3, '3º(Terceiro)', 'Ciclo da Alfabetização', '2018-12-11 18:54:49', '2018-12-11 18:54:49'),
(4, '4º(Quarto)', 'Ciclo Complementar', '2018-12-12 18:55:39', '2018-12-12 18:55:39'),
(5, '5º(Quinto)', 'Ciclo Complementar', '2018-12-12 18:56:00', '2018-12-12 18:56:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_08_224108_create_ano_table', 1),
(4, '2018_12_08_224122_create_turma_table', 1),
(5, '2018_12_08_224139_create_aluno_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `cod_turma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ano` int(10) UNSIGNED NOT NULL,
  `nome_turma` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professora` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cod_turma`),
  KEY `turma_ano_foreign` (`ano`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `ano`, `nome_turma`, `professora`, `created_at`, `updated_at`) VALUES
(3, 1, 'Pitágoras', 'Rita de Cássia', '2018-12-11 02:36:21', '2018-12-12 20:10:51'),
(1, 1, 'Tales de Mileto', 'Anely', NULL, '2018-12-12 19:28:06'),
(2, 1, 'Sócrates', 'Adriana', '2018-12-11 18:59:53', '2018-12-12 18:56:28'),
(4, 2, 'Aristoteles', 'Elizângela', NULL, NULL),
(5, 2, 'Platão', 'Janice', NULL, NULL),
(6, 3, 'Thomas Hobbes', 'Arethusa', NULL, NULL),
(7, 3, 'Thomas de Aquino', 'Lídia', NULL, NULL),
(8, 3, 'Marco Aurélio', 'Edna', NULL, NULL),
(9, 4, 'Agostinho de Hipona', 'Lílian', NULL, NULL),
(10, 4, 'Imanuel Kant', 'Telma', NULL, NULL),
(11, 4, 'João Paulo', 'Kátia', NULL, NULL),
(12, 5, 'René Descartes', 'Antônia', NULL, NULL),
(13, 5, 'Maquiavel', 'Luzimar', NULL, NULL),
(14, 5, 'Filosofo', 'Irene', NULL, NULL),
(15, 6, 'Giovanni', 'Daniel', '2018-12-13 01:33:12', '2018-12-13 01:33:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daniel', 'daniel@daniel.com', NULL, '$2y$10$KXcMO7q2H8hL0wTyT4w6Fe7lbr.3BXSbk5joAXr39rMih8SCkOZNS', NULL, '2018-12-10 19:17:45', '2018-12-10 19:17:45'),
(2, 'daniel', 'danielaraujo@daniel.com', NULL, '$2y$10$jRzST1WL1LMYDsCaf3PMS.3ZSmbB0dyB5m3tgIj/BEPtLVBnuOEvS', '77fmbwlJxSHdvPbLAEkc2uAZ8lpLOrq4TDQ3dLOJRxrPLVWIhzlhXAFWEPn8', '2018-12-11 18:00:51', '2018-12-11 18:00:51'),
(3, 'giovane', 'giovane@email.com', NULL, '$2y$10$VvKCvNzFy.EhzAjY3g3c3O7zBRDwrMwpsHcwGHyCQ2RMUmoKCA8KS', '4FxxQBqaR4RaMDTvxN0R9NJUlOMRwiWs5SRsXhW0ETPtNCB29wwI0O8AiSXp', '2018-12-11 20:08:20', '2018-12-11 20:08:20'),
(4, 'admin', 'admin@admin.com', NULL, '$2y$10$wRfXMZXXQQ8I9BqH1o1O..4oE.H6xZaqs94CzN57.jvMKPny/YzHq', 'Ue13eeSdmSbqjmt16vASTEuxkSB0y0DnSwScvpsBZRQPpdYdlCI8ZdDXUPXg', '2018-12-11 20:14:10', '2018-12-11 20:14:10'),
(5, 'Giovanni', 'giovannipeixoto64@gmail.com', NULL, '$2y$10$yIeOY8Vypqlce5G8sBCooutGqt4dEa6UsbgwekoUtKesvHt0VHxfe', '0OO8UPNZLY9ipggTB5wxiZniNKfcjhIHfq3tAOvBJ2I2r4dSUNMDXwYGa7Up', '2018-12-13 01:37:50', '2018-12-13 01:37:50'),
(6, 'Daniel Eugênio Martins da Costa Pena Araújo', 'daniel@admin.com', NULL, '$2y$10$l/zPhNdCXr6ciFy0KrRHYeHidHwkAY/4jZkWD2VDxuX8uGBhoWaJW', 'mDvKy4UROx0zObGGezovpsYONi5H8cK9LDCfZZVqWrbIpxZ4AbPRmFqiBi6F', '2018-12-14 02:23:51', '2018-12-14 02:23:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
