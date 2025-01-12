-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 08:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codemaster_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `id_colaborador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acessos`
--

INSERT INTO `acessos` (`id`, `data`, `id_colaborador`) VALUES
(1, '20:55:03 - 24/10/24', 4),
(2, '20:55:27 - 24/10/24', 4),
(3, '21:28:26 - 24/10/24', 1),
(4, '21:28:34 - 24/10/24', 1),
(5, '21:30:30 - 24/10/24', 1),
(6, '21:42:12 - 24/10/24', 1),
(7, '21:45:11 - 24/10/24', 1),
(8, '18:43:31 - 25/10/24', 4),
(9, '18:45:23 - 25/10/24', 4),
(10, '19:18:10 - 25/10/24', 16),
(11, '19:21:30 - 25/10/24', 16),
(12, '19:22:54 - 25/10/24', 15),
(13, '19:24:58 - 25/10/24', 16),
(14, '19:28:11 - 25/10/24', 17),
(15, '19:28:22 - 25/10/24', 17),
(16, '19:35:40 - 25/10/24', 16),
(17, '19:59:28 - 25/10/24', 16),
(18, '20:00:23 - 25/10/24', 4),
(19, '20:02:40 - 25/10/24', 1),
(20, '20:08:17 - 25/10/24', 1),
(21, '20:19:42 - 25/10/24', 4),
(22, '20:29:17 - 25/10/24', 1),
(23, '20:29:32 - 25/10/24', 4),
(24, '20:31:12 - 25/10/24', 4),
(25, '20:31:23 - 25/10/24', 1),
(26, '20:34:41 - 25/10/24', 1),
(27, '20:35:09 - 25/10/24', 1),
(28, '20:36:57 - 25/10/24', 1),
(29, '20:43:42 - 25/10/24', 1),
(30, '20:45:50 - 25/10/24', 1),
(31, '19:08:38 - 28/10/24', 4),
(32, '19:08:45 - 28/10/24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acessos_com_data`
--

CREATE TABLE `acessos_com_data` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_colaborador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acessos_com_data`
--

INSERT INTO `acessos_com_data` (`id`, `data`, `id_colaborador`) VALUES
(2, '2024-10-28 19:18:25', 4),
(4, '2024-10-28 20:07:37', 2),
(5, '2024-10-28 20:18:53', 2),
(6, '2024-10-29 18:54:02', 2),
(7, '2024-10-29 19:17:20', 3),
(8, '2024-10-29 19:17:34', 4),
(9, '2024-10-29 19:20:13', 5),
(10, '2024-10-29 19:22:18', 4);

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `altura` double NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `morada`, `idade`, `altura`, `created_at`) VALUES
(1, 'Ricardo', 'Lisboa', 25, 1.59, '10/8/2022'),
(2, 'Filipa', 'Almada', 43, 1.32, '10/8/2022'),
(3, 'Francisco', 'Faro', 55, 1.66, '10/8/2022');

-- --------------------------------------------------------

--
-- Table structure for table `animais`
--

CREATE TABLE `animais` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `raca` varchar(20) NOT NULL,
  `idade` int(11) NOT NULL,
  `id_dono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animais`
--

INSERT INTO `animais` (`id`, `nome`, `tipo`, `raca`, `idade`, `id_dono`) VALUES
(1, 'Boby', 'Cão', 'Azul', 11, 2),
(2, 'Miau', 'Gato', 'Laranja', 15, 3),
(3, 'Pretinho', 'Gato', 'Preto', 15, 1),
(4, 'Camalião', 'Lagarto', 'Verde', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `idade` int(11) NOT NULL,
  `contacto` int(15) NOT NULL,
  `morada` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `apelido`, `idade`, `contacto`, `morada`) VALUES
(1, 'Gabriel', 'Cruz', 23, 99625251, 'Lisboa'),
(2, 'Marcos', 'Sousa', 45, 61565656, 'Almada'),
(3, 'António', 'José', 36, 6465464, 'Porto'),
(4, 'Ricardo', 'Tiago', 33, 6469649, 'Faro');

-- --------------------------------------------------------

--
-- Table structure for table `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `nif` varchar(10) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `last_acess_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `admin`, `nome`, `apelido`, `nif`, `login`, `pw`, `last_acess_date`) VALUES
(1, 1, 'Gabriel', 'Ramos', '444', 'gabriel', 'code', '20:05:58 - 24/10/24'),
(2, 0, 'Marcos', 'Sousa', '555', 'sousa_123', 'teste', NULL),
(3, 0, 'Cláudio', 'Matos', '598', 'c_matos', 'praia', NULL),
(4, 0, 'Ana', 'Teresa', '456', 'ana_t', 'neve', '20:05:45 - 24/10/24'),
(11, 0, 'francisco', 'cruz', '23432432', 'cruz', 'code', NULL),
(12, 0, 'Ricardo', 'António', '65659669', 'ant', 'ant', NULL),
(13, 0, 'Filipa', 'Ramos', '616161616', 'filipa', 'code', '18:56:11 - 24/10/24'),
(14, 0, 'dfgdf', 'gddfg', 'dgdf', 'code', 'teste', '19:09:06 - 24/10/24'),
(15, 0, 'caneta', 'ola', '4332424', 'caneta', 'code', NULL),
(16, 0, 'Ricardo', 'António', '2423432', 'admin', 'admin', NULL),
(17, 0, 'dfgdfg', 'dfgdfg', '4534543', 'teste1', 'teste1', NULL),
(18, 0, 'ffsdfsd', 'sdfsdf', '242342343', 'aaaa', 'aaaa', NULL),
(19, 0, 'sdfsdf', 'sdfsdf', 'sdfsdfsd', 'bbbb', 'bbbb', NULL),
(22, 0, 'Ricardo', 'Valente', '3432423423', 'ricardo', '$2y$10$IaKHft0ZtAdLu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colaboradores_cripto`
--

CREATE TABLE `colaboradores_cripto` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colaboradores_cripto`
--

INSERT INTO `colaboradores_cripto` (`id`, `admin`, `nome`, `apelido`, `nif`, `login`, `senha`) VALUES
(2, 0, 'Ana', 'fsdfsd', '324324324', 'ana_t', '$2y$10$dmLJFzwKVqg9QBrSISBg9uhIrcNzGR2kcnmS7vosCIVL76bO8K5xO'),
(3, 0, 'Grabriel', 'Ramos', '3423423', 'gabriel', '$2y$10$FVucCFMVU2IsKLwk.V1kGuRd8tRtUirD/eIwmeiWwUeit9wcMGg.C'),
(4, 1, 'Ricardo', 'Teste', '23423423', 'admin', '$2y$10$F3aJeSdKh23bHMRQhqudjueSvICJ45SrL9igZoEMmvRwAHrH1QUfe'),
(5, 0, 'teste', 'fsdfsdf', '4343', 'teste', '$2y$10$GY/Kv/iRZBwlMC54Kjhx6u/VOMQN7fAfFuobtM/QaMSPOFpbH0xm6');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `quantidade`, `marca`, `codigo`) VALUES
(2, 'Monitor', 65.51, 125, 'Turbo', 4566651),
(3, 'Secretária', 1.99, 25, 'Madeira', 5645588),
(5, 'Colunas', 298.98, 8, 'Som', 52995295),
(6, 'Caneta', 8.99, 5, 'Tintas', 52995295),
(7, 'Caneta Azul', 8.99, 15, 'Tintas', 52995295),
(9, 'Caderno de Apontamentos com Lápis e Caneta', 8.99, 5, 'Tintas', 52995295),
(11, 'Monitor Mágico', 1.58, 2, 'Ratinho', 52995295),
(16, 'Comando Coxo', 24.88, 2, 'Gamer', 42552525),
(33, 'Rato Remoto', 99.99, 5, 'Gamer', 5285282),
(34, 'Amplificador', 58.99, 5, 'Som', 58959298),
(35, 'Rato', 9.99, 5, 'Conforto', 6516565);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acessos_com_data`
--
ALTER TABLE `acessos_com_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `colaboradores_cripto`
--
ALTER TABLE `colaboradores_cripto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `acessos_com_data`
--
ALTER TABLE `acessos_com_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `colaboradores_cripto`
--
ALTER TABLE `colaboradores_cripto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
