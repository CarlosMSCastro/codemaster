-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13-Nov-2025 às 00:24
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
(1, 'Ana', 'Silva Sousa', 76, 'Lisboa', 'ana@email.pt', '111 111 222'),
(2, 'Eduardo', 'Santos', 18, 'Almada', 'eduardo@email.pt', '222 222 222'),
(3, 'Marta', 'Matos Silva', 55, 'Porto', 'marta@email.pt', '333 333 444'),
(4, 'Fabrício', 'Vidal', 30, 'Covilhã', 'fabricio@email.pt', '444 444 445'),
(5, 'Vitor', 'Silva', 54, 'Lisboa', 'vitor@email.pt', '555 555 555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `nif` varchar(9) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `senha_cript` varchar(100) DEFAULT NULL,
  `data_ultimo_acesso` varchar(50) DEFAULT NULL,
  `data_ultimo_acesso_melhorado` datetime DEFAULT NULL,
  `criador` int(11) DEFAULT NULL,
  `data_criacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `admin`, `nome`, `apelido`, `nif`, `morada`, `idade`, `login`, `senha`, `senha_cript`, `data_ultimo_acesso`, `data_ultimo_acesso_melhorado`, `criador`, `data_criacao`) VALUES
(1, 1, 'Fabrício', 'Vidal', '111', 'Lisboa', 33, 'fabricio', 'code', '$2y$10$2Ra9KGrIuT6N8z/WnDA3e.dhpngGFafEtexjh7U0tlLPgxCoKkn6u', '22:01:19 - 11/11/2025', '2025-11-12 23:14:59', NULL, NULL),
(2, 0, 'Felipa', 'Rodrigues', '222', 'Lisboa', 25, 'felipa', 'teste', '$2y$10$Pv9VWrXKUBN2wHXQ4cqiEOAdKEAU2SQ3d97cCGDN.IrRL0Kq5qLAy', NULL, '2025-11-12 23:12:21', NULL, NULL),
(3, 0, 'Gabriel', 'Matos', '333', 'Almada', 19, 'gabriel', 'praia', '$2y$10$GS7MMn/1haBMn010fE5.s.d68B.mFqii/.dUC/dRHPIxxzcgb6JJC', NULL, '2025-11-11 22:05:45', NULL, NULL),
(4, 0, 'Débora', 'Sousa', '444', 'Amadora', 29, 'debora', 'cubo', '$2y$10$ozmCszttGDNMMm3uLW3XIuBiFXp3.PY/WMdchwZG6dQx96LXnpKLS', NULL, '2025-11-11 22:05:02', NULL, NULL),
(5, 0, 'Salvador', 'Silva', '555', 'Porto', 56, 'salvador', 'aviao', '$2y$10$U.04hy.0UqDYPqajtqMvr.hhEO1gv5bc43QHilpoAZCHIy20MpzW2', NULL, NULL, NULL, NULL),
(6, 1, 'Alice', 'Matos', '666', 'Lisboa', 35, 'alice', 'teste', '$2y$10$Rl1l8lCTMdVJM82Nbfx9.euHrYChAlzhHBznXJ6YKSIuCiL.zQ/Ha', NULL, '2025-11-12 23:23:40', NULL, NULL),
(7, 0, 'José', 'Moura', '777', 'Almada', 75, 'jose', NULL, '$2y$10$c3.U4xrrxK1Dgu0fZJGqD.MONMBPuDscel91oxVqSx0w1Oa9TK7HW', NULL, NULL, NULL, NULL),
(8, 0, 'Eduardo', 'Campos', '888', 'Porto', 45, 'eduardo', NULL, '$2y$10$vHiW.XpQRPBkNY8tLPGLq.e0MU0DD6o8rXvYgrDGLFDCfOCcE04Ha', NULL, '2025-11-12 23:12:03', NULL, NULL),
(10, 0, 'Eduardo', 'Mota', '999', 'Almada', 56, 'eduardo_2', NULL, '$2y$10$Pz0wCU/CLXUkvEnPBioWG.PS/KAhVdSCIAnlnL6e0rRDDnXa7InTu', NULL, NULL, NULL, NULL),
(11, 0, 'Fábio', 'Costa', '0001', 'Lisboa', 88, 'fabio', NULL, '$2y$10$5vCVgMscTKLdUap0StK/6e2hntatjTcrWT.Ft.XwE0OsGoKHlXdFO', NULL, '2025-11-12 22:56:42', NULL, NULL),
(12, 0, 'Clayton', 'Teste', '0002', 'Lisboa', 66, 'clayton', NULL, '$2y$10$i04RKqM/SG8BbTCm4eHtjuFMRe2r3/BOsD9CmCyoliaQrExDqN8Bq', NULL, NULL, 1, '2025-11-12 23:23:12'),
(13, 0, 'Marta', 'Sousa', '0003', 'Almada', 45, 'marta', NULL, '$2y$10$pf.HWToke1HK8nSO2RccE.mOT5uG8MqLQfjUWdrUGvJbbYw4mcTom', NULL, NULL, 6, '2025-11-12 23:24:00');

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

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `nome`, `especie`, `raca`, `cor`, `idade`, `cliente_id`) VALUES
(1, 'Spike', 'Cão', 'Cocker Spaniel', 'Castanho', 12, 4),
(2, 'Max', 'Cão', 'Rottweiler', 'Preta', 2, 1),
(3, 'Chloe', 'Gato', 'Siamês', 'Branco', 4, 1),
(4, 'Mikey', 'Gato', 'Persa', 'Castanho Claro', 6, 4),
(5, 'Minnie', 'Gato', 'Scottish Fold', 'Cinza', 1, 4),
(6, 'Beethoven', 'Cão', 'Buldogue', 'Branco', 3, 2),
(7, 'Teste', 'Gato', 'Siamês', 'Rosa', 3, 2);

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
(1, 'Papel A4', 6.75, '002', 'FNAC', 14, 'Olá'),
(2, 'Borracha', 6.75, '003', 'FNAC', 10, NULL),
(3, 'X-Acto Preto', 6.75, '004', 'FNAC', 5, NULL),
(4, 'X-Acto Branco', 6.75, '005', 'FNAC', 10, NULL),
(5, 'X-Acto Rosa', 6.75, '006', 'FNAC', 12, NULL),
(6, 'X-Acto Vermelho', 6.75, '007', 'Worten', 0, NULL),
(7, 'Caneta Vermelha', 6.75, '010', 'Worten', 15, NULL),
(8, 'Caneta Verde', 6.75, '011', 'Pingo Doce', 33, 'Adeus'),
(9, 'Bloco de Notas Branco', 6.75, '012', 'Pingo Doce', 3, NULL),
(10, 'Caderno Preto', 6.75, '015', 'Worten', 60, NULL),
(11, 'Caderno Vermelho', 6.75, '016', 'Worten', 60, NULL),
(12, 'O Papel A3 Especial', 6.75, '017', 'Continente', 1, NULL),
(13, 'Caneta Roxa', 6.75, '19', 'FNAC', 42, NULL),
(14, 'Caneta Rosa', 1.5, '019', 'Worten', 42, NULL),
(15, 'Papel A4 Amarelo', 5, '022', 'Continente', 50, NULL),
(16, 'Caneta Roxa', 3.99, '023', 'Worten', 32, NULL),
(17, 'teste', 34, '024', 'Pingo Doce', 1, NULL),
(19, 'Caneta Roxa', 3.99, '025', 'Worten', 32, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos_lixo`
--
ALTER TABLE `produtos_lixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
