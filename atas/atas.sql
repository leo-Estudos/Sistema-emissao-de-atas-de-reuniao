-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/09/2024 às 20:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ata`
--

CREATE TABLE `ata` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `dataEmissao` date NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `pauta` varchar(500) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `palavraChave` varchar(200) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `setor` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ata`
--

INSERT INTO `ata` (`id`, `titulo`, `dataEmissao`, `inicio`, `termino`, `pauta`, `descricao`, `palavraChave`, `tipo`, `status`, `setor`) VALUES
(1, '123', '2024-09-04', '0000-00-00', '0000-00-00', '123', '123', '123', 'Pública', 'Em processo de emissão', 'Setor 4'),
(2, '234', '2024-09-04', '0000-00-00', '0000-00-00', '234', '234', '234', 'Pública', 'Em processo de emissão', 'Setor 1'),
(4, '123asd', '2024-09-04', '2024-09-05', '2024-09-16', '123asd', '', '123asd', 'Pública', 'Em processo de emissão', 'Setor 1'),
(5, '23499asd', '2024-09-04', '0000-00-00', '0000-00-00', '23499asd', 'asd', '23499asd', 'Privada', 'Em processo de emissão', 'Setor 1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ata`
--
ALTER TABLE `ata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ata`
--
ALTER TABLE `ata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
