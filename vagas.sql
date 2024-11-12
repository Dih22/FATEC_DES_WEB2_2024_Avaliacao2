-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/11/2024 às 06:32
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
-- Banco de dados: `vagas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `nome_empresa` varchar(100) NOT NULL,
  `numero_whatsapp` varchar(20) DEFAULT NULL,
  `email_contato` varchar(30) DEFAULT NULL,
  `descritivo_vaga` varchar(255) DEFAULT NULL,
  `curso` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `vagas`
--

INSERT INTO `vagas` (`id`, `nome_empresa`, `numero_whatsapp`, `email_contato`, `descritivo_vaga`, `curso`) VALUES
(1, 'Empresa XYZ', '19987654321', 'rh@xyz.com', 'Estágio de suporte no período da manhã', '1'),
(2, 'Empresa XYZ', '19987654321', 'rh@xyz.com', 'Estágio de suporte no período da tarde', '2'),
(3, 'Loja dos PCS', '19989987323', 'rh@lojadospcs.com.br', 'Desenvolvedor PHP', '1'),
(4, 'lojas cem', '12345678990', 'rh@cem.com', 'vendedor de produtos tecnicos', '1'),
(6, 'web_tec', '12123123412', 'web_tec@gmail.com', 'tecnico de informatica', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
