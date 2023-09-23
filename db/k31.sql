-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Ago-2023 às 15:35
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `k31`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `operadores`
--

CREATE TABLE `operadores` (
  `id_operador` int(10) UNSIGNED NOT NULL,
  `nm_nome` varchar(50) NOT NULL,
  `nm_login` varchar(10) NOT NULL,
  `cd_senha` varchar(32) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nm_login` varchar(11) NOT NULL,
  `cd_senha` varchar(255) NOT NULL,
  `cd_status` char(1) NOT NULL,
  `cd_ip` varchar(15) NOT NULL,
  `dt_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nm_login`, `cd_senha`, `cd_status`, `cd_ip`, `dt_data`) VALUES
(1, '11111111111', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '2023-07-31 17:14:03'),
(2, '22222222222', 'e82c4b19b8151ddc25d4d93baf7b908f', '', '', '2023-07-31 17:14:18'),
(3, '33333333333', '8abfe8ac9ec214d68541fcb888c0b4c3', '', '', '2023-07-31 17:14:46');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id_operador`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id_operador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
