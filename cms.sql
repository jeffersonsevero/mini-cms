-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/05/2020 às 10:36
-- Versão do servidor: 5.7.30-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`) VALUES
(6, 'Sobre', 'sobre', '<p>&nbsp;</p>\r\n<p>P&aacute;gina sobre</p>\r\n<p>&nbsp;</p>'),
(7, 'Meu setup', 'meu-setup', '<p>&nbsp;</p>\r\n<p>Este &eacute; meu setup</p>\r\n<p><img src=\"http://localhost:8000/media/images/1588517385.jpeg\" alt=\"\" width=\"400\" height=\"225\" /></p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `settings`
--

INSERT INTO `settings` (`id`, `name`, `content`) VALUES
(1, 'title', 'Título novo para teste'),
(2, 'subtitle', 'Criado pelo aluno'),
(3, 'email', 'jeffersonsevero08@gmail.com'),
(4, 'bgcolor', '#21adc9'),
(5, 'textcolor', '#FFFFFF');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jefferson Severo', 'jeffersonsevero08@gmail.com', 1, '$2y$10$jbzMRqyKGHp4RgKFYnVKzewSqvMhPogG/nJlBtpWIMfc/SOPAVDL6', NULL, '2020-04-28 23:57:04', '2020-05-03 14:51:08'),
(2, 'Bruno Melo', 'bruno@gmail.com', 0, '$2y$10$aHD7N74bodcwOamF1h8s2.N8nHCxKQb3nKLi09XPuc2ebGQehEBZ.', NULL, '2020-05-03 14:05:03', '2020-05-03 14:05:03'),
(4, 'João Script', 'joao@gmail.com', 0, '$2y$10$JSXSbu7wn4tfoDwRclwh6uErzcasqkGMeKX3Ua6nWZNf/w9sFXFE.', NULL, '2020-05-03 14:06:02', '2020-05-03 14:06:02'),
(5, 'Laura', 'laura@gmail.com', 0, '$2y$10$uy4tBO.HqariNdkoi6DRFeu4LRkgZjDYJnRq/4v2MB4wO8ZajrCYa', NULL, '2020-05-03 14:07:55', '2020-05-03 14:07:55'),
(7, 'Novo usuário', 'novo@gmail.com', 0, '$2y$10$8Yoz4MEolXnchEtWIR27aOIxGzgNdP4Y0P9t5GiSgXEUJbgPE88KO', NULL, '2020-05-03 14:50:25', '2020-05-03 14:50:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date_access` datetime NOT NULL,
  `page` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date_access`, `page`) VALUES
(2, '23.23.213.21', '2020-05-21 21:02:26', 'page 2'),
(3, '23.45.322.21', '2020-05-29 21:03:17', 'page 1');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
