-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 08:11 PM
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
-- Table structure for table `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
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

INSERT INTO `colaboradores` (`id`, `nome`, `apelido`, `nif`, `login`, `pw`, `last_acess_date`) VALUES
(1, 'Gabriel', 'Ramos', '444', 'gabriel', 'code', '20:08:42 - 23/10/24'),
(2, 'Marcos', 'Sousa', '555', 'sousa_123', 'teste', NULL),
(3, 'Cláudio', 'Matos', '598', 'c_matos', 'praia', NULL),
(4, 'Ana', 'Teresa', '456', 'ana_t', 'neve', '20:02:57 - 23/10/24'),
(11, 'francisco', 'cruz', '23432432', 'cruz', 'code', NULL),
(12, 'Ricardo', 'António', '65659669', 'ant', 'ant', NULL),
(13, 'Filipa', 'Ramos', '616161616', 'filipa', 'code', '18:56:11 - 24/10/24'),
(14, 'dfgdf', 'gddfg', 'dgdf', 'code', 'teste', '19:09:06 - 24/10/24');

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
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
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
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
