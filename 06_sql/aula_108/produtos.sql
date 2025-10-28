-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2025 às 00:15
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `codemaster_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `codigo` varchar(3) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `codigo`, `fornecedor`, `stock`) VALUES
(1, 'Caneta Azul', 0.75, '001', 'FNAC', 123),
(2, 'Papel A4', 3.99, '002', 'FNAC', 14),
(3, 'Borracha', 1.25, '003', 'FNAC', 10),
(4, 'X-acto', 2.99, '004', 'FNAC', 5),
(5, 'Monitor', 79.9, '005', 'PC Diga', 35),
(6, 'Monitor 360hz', 350.99, '006', 'PC Diga', 12),
(7, 'Bicicleta de Montanha', 1280.99, '007', 'Specialized', 5),
(8, 'Cadeira Escritorio', 250.99, '008', 'NobleChair', 12),
(9, 'Volvo XC60', 26500, '009', 'StandVirtual', 0),
(10, 'Maquina Café', 60.99, '010', 'Nespresso', 7),
(11, 'Caneca Azul', 1.99, '011', 'Continente', 120),
(12, 'Teclado Mecanico', 129.99, '012', 'PC Diga', 25),
(13, 'Monitor 4k 24\"', 549.99, '013', 'PC Diga', 8),
(14, 'Nike Dunk Low SB', 129.99, '014', 'Nike Outlet', 17);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
