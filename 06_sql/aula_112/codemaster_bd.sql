-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2025 às 22:41
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
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `morada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `idade`, `morada`) VALUES
(1, 'Ana', 'Silva', 76, 'Lisboa'),
(2, 'Eduardo', 'Santos', 18, 'Almada'),
(3, 'Marta', 'Matos', 55, 'Porto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nif` int(11) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `nif`, `morada`, `idade`) VALUES
(1, 'Francisco', 111, 'Lisboa', 33),
(2, 'Felipe', 222, 'Lisboa', 25),
(3, 'Gabriel', 333, 'Almada', 19),
(4, 'Débora', 444, 'Almada', 29),
(5, 'Salvador', 555, 'Porto', 56);

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
(14, 'Nike Dunk Low SB', 129.99, '014', 'Nike Outlet', 17),
(15, 'Rato Bluetooth HP', 19.99, '015', 'Worten', 15),
(16, 'Webcam Logitech', 29.99, '016', 'FNAC', 35),
(17, 'Kit Ferramentas iFixit', 39.99, '017', 'PC Diga', 10),
(18, 'Monitor ASUS 144hz', 119.99, '018', 'Global Data', 10),
(19, 'Monitor 2k 27\"', 200.99, '019', 'Worten', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
