-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 08:49 PM
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
(1, 'Rato', 15.3, 45, 'Gamer', 5818818),
(2, 'Monitor', 65.51, 125, 'Turbo', 4566651),
(3, 'Secretária', 99.98, 5, 'Madeira', 5645588),
(4, 'Computador', 599.95, 15, 'Turbo', 5645588),
(5, 'Colunas', 298.98, 8, 'Som', 52995295),
(6, 'Caneta', 8.99, 10, 'Tintas', 52995295),
(7, 'Caneta Azul', 8.99, 15, 'Tintas', 52995295),
(8, 'Marcador Caneta', 8.99, 88, 'Tintas', 52995295),
(9, 'Caderno de Apontamentos com Lápis e Caneta', 8.99, 5, 'Tintas', 52995295),
(10, 'Rato Caneta', 19.99, 1, 'Ratinho', 52995295),
(11, 'Monitor Mágico', 999.99, 2, 'Ratinho', 52995295),
(12, 'Amplificador', 58.99, 1, 'Som', 43332355),
(16, 'Comando Coxo', 24.88, 2, 'Gamer', 42552525),
(18, 'Caneta', 89.99, 5, NULL, NULL),
(20, 'Caneca para esquerdino', 1.99, 6, NULL, NULL),
(21, 'Coluna', 9.99, 15, NULL, NULL),
(22, 'Rato Rapido', 9.99, 15, NULL, NULL),
(23, 'Caneta', 1.99, 4, NULL, NULL),
(24, 'Caneta', 1.99, 4, NULL, NULL),
(25, 'Tela ', 1.22, 5, NULL, NULL),
(31, 'teste', 1.99, 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
