-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2025 às 23:58
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
-- Banco de dados: `codemaster_15_bd`
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
  `morada` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telemovel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `idade`, `morada`, `email`, `telemovel`) VALUES
(3, 'Marta', 'Matos Silva', 55, 'Porto', 'marta@email.pt', '333 333 444'),
(5, 'Vitor', 'Silva', 54, 'Lisboa', 'vitor@email.pt', '555 555 555');

--
-- Acionadores `clientes`
--
DELIMITER $$
CREATE TRIGGER `teste` BEFORE DELETE ON `clientes` FOR EACH ROW DELETE FROM pets WHERE cliente_id=OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `senha_cript` varchar(100) DEFAULT NULL,
  `data_ultimo_acesso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `apelido`, `nif`, `morada`, `idade`, `login`, `senha`, `senha_cript`, `data_ultimo_acesso`) VALUES
(1, 'Fabrício', 'Vidal', '111', 'Lisboa', 33, 'fabricio', 'code', NULL, NULL),
(2, 'Felipa', 'Rodrigues', '222', 'Lisboa', 25, 'felipa', 'teste', NULL, NULL),
(3, 'Gabriel', 'Matos', '333', 'Almada', 19, 'gabriel', 'praia', NULL, NULL),
(4, 'Débora', 'Sousa', '444', 'Amadora', 29, 'debora', 'cubo', NULL, NULL),
(5, 'Salvador', 'Silva', '555', 'Porto', 56, 'salvador', 'aviao', NULL, NULL),
(6, 'Carlos', 'Castro', '999', 'Porto', 28, 'carlos', 'password', NULL, '22:05:09 - 12/11/2025'),
(7, 'Joana', 'Campos', '666', 'Fradelos', 25, 'joana', 'pass', NULL, '22:13:29 - 12/11/2025'),
(8, 'Ruben', 'Neves', '785', 'Rihad', 29, 'rubenn', NULL, '$2y$10$dELgd6v0HsPbIP4Pn0WDhuycfBJnjUCbRn36NBcDqlYhjXAVOJ7JC', '22:37:48 - 12/11/2025'),
(9, 'Cristiano', 'Ronaldo', '985', 'Saudi Arabia', 41, 'cristianor', NULL, '$2y$10$VhHRI/y23Ta9ci7QRXKczuIY8QjjJhJnrPCYih/g7eMoh3.dz7Ica', '22:35:20 - 12/11/2025'),
(10, 'João', 'Neves', '444', 'Paris', 22, 'joaon', NULL, '$2y$10$YulT/mGeojeqM54MeqfRe.EZ2bHI1Egc2DyGxEyvcaQ1zqennKDFy', '22:42:08 - 12/11/2025');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motas`
--

CREATE TABLE `motas` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `dono` varchar(100) NOT NULL,
  `telemovel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `motas`
--

INSERT INTO `motas` (`id`, `marca`, `modelo`, `cor`, `matricula`, `dono`, `telemovel`, `email`) VALUES
(1, 'honda', 'PCX', 'Vermelha', 'AAA-111', 'Ana Silva', '111 111 111', 'ana@email.pt'),
(2, 'Ducati', 'Monster', 'Verde', 'BBB-222', 'Marta Matos', '333 333 333', 'marta@email.pt'),
(3, 'Yamaha', 'NMax', 'Azul', 'CCC-333', 'Eduardo Santos', '222 222 222', 'eduardo@email.pt'),
(4, 'Kawasaki', 'Ninja', 'Verde', 'DDD-444', 'Marta Matos', '333 333 333', 'marta@email.pt'),
(5, 'Keeway', 'Superlight', 'Rosa', 'EEE-555', 'Marta Matos', '333 333 333', 'marta@email.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motas_2`
--

CREATE TABLE `motas_2` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `motas_2`
--

INSERT INTO `motas_2` (`id`, `marca`, `modelo`, `cor`, `matricula`, `cliente_id`) VALUES
(1, 'honda', 'PCX', 'Vermelha', 'AAA-111', 1),
(2, 'Ducati', 'Monster', 'Verde', 'BBB-222', 3),
(3, 'Yamaha', 'NMax', 'Azul', 'CCC-333', 2),
(4, 'Kawasaki', 'Ninja', 'Verde', 'DDD-444', 3),
(5, 'Keeway', 'Superlight', 'Rosa', 'EEE-555', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `especie` enum('Cão','Gato') NOT NULL,
  `raca` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `stock` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `codigo`, `fornecedor`, `stock`, `descricao`) VALUES
(2, 'Papel A4', 6.75, '002', 'FNAC', 14, 'Olá'),
(3, 'Borracha', 6.75, '003', 'FNAC', 10, NULL),
(4, 'X-Acto Preto', 6.75, '004', 'FNAC', 5, NULL),
(5, 'X-Acto Branco', 6.75, '005', 'FNAC', 10, NULL),
(6, 'X-Acto Rosa', 6.75, '006', 'FNAC', 12, NULL),
(7, 'X-Acto Vermelho', 6.75, '007', 'Worten', 0, NULL),
(10, 'Caneta Vermelha', 6.75, '010', 'Worten', 15, NULL),
(11, 'Caneta Verde', 6.75, '011', 'Pingo Doce', 33, 'Adeus'),
(12, 'Bloco de Notas Branco', 6.75, '012', 'Pingo Doce', 3, NULL),
(16, 'Caderno Preto', 6.75, '015', 'Worten', 60, NULL),
(17, 'Caderno Vermelho', 6.75, '016', 'Worten', 60, NULL),
(18, 'O Papel A3 Especial', 6.75, '017', 'Continente', 1, NULL),
(21, 'Caneta Roxa', 6.75, '19', 'FNAC', 42, NULL),
(22, 'Caneta Rosa', 1.5, '019', 'Worten', 42, NULL),
(27, 'Papel A4 Amarelo', 5, '022', 'Continente', 50, NULL),
(37, 'Caneta Roxa', 3.99, '035', 'Worten', 32, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_lixo`
--

CREATE TABLE `produtos_lixo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `codigo` varchar(3) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `descricao` text DEFAULT NULL,
  `data_apagado` varchar(50) DEFAULT NULL,
  `data_apagado_2` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `motas`
--
ALTER TABLE `motas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Índices para tabela `motas_2`
--
ALTER TABLE `motas_2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Índices para tabela `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `produtos_lixo`
--
ALTER TABLE `produtos_lixo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `motas`
--
ALTER TABLE `motas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `motas_2`
--
ALTER TABLE `motas_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `produtos_lixo`
--
ALTER TABLE `produtos_lixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
