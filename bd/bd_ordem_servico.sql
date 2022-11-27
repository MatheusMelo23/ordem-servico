-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2022 às 19:39
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_ordem_servico`
--
CREATE DATABASE IF NOT EXISTS `bd_ordem_servico` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_ordem_servico`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico` (
  `cod_servico` int(11) NOT NULL,
  `nome_cliente` varchar(80) NOT NULL,
  `data_pedido` date NOT NULL,
  `data_entrega` date NOT NULL,
  `valor_servico` varchar(15) NOT NULL,
  `descricao_servico` varchar(200) NOT NULL,
  `status_servico` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`cod_servico`, `nome_cliente`, `data_pedido`, `data_entrega`, `valor_servico`, `descricao_servico`, `status_servico`) VALUES
(2, 'admin', '2022-12-08', '2022-12-22', '41', 'um serviço pequeno', 0),
(3, 'admin2412515456', '2022-11-12', '2022-11-30', '34125415', 'um serviço pequeno', 0),
(4, 'qqqqqqqqqqqqqqqqqqqq', '2022-11-29', '2022-11-23', '1', '222aaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaa', 0),
(5, 'Daniel de Melo Melo', '2022-11-18', '2022-11-21', '25.00', 'é só teste', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `cod_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
