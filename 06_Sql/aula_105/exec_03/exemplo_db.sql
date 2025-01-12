-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 09:54 PM
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
-- Database: `exemplo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `titulo`, `texto`, `imagem`, `autor`, `created_at`) VALUES
(1, 'Rio', 'Lorem sfgsfsdf sdfsd sdfsdfs ', 'public/imagens/paisagem_1.avif', 'eu', '9/10/2024'),
(2, 'Lago', 'Lorem sdfsf sdfsd gdfhgd', 'public/imagens/paisagem_2.avif', 'antonio', '9/10/2024'),
(3, 'Cidade', 'Lreomref sfsdf sdf sdf sd', 'public/imagens/paisagem_3.avif', 'Miguel', '9/10/2024'),
(4, 'Balões', 'lorem sgfsfsd sdfsdf sfd sdfsd', 'public/imagens/paisagem_4.avif', 'Filipa', '9/10/2024'),
(5, 'Ponte', 'Lorem sfsdf sdf sdfsdf sd sdf', 'public/imagens/paisagem_5.avif', 'Ana', '9/10/2024');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `data` varchar(15) NOT NULL,
  `autor` varchar(20) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `data`, `autor`, `imagem`) VALUES
(1, 'Cidade', 'Linda Cidade', '9/10/2024', 'Ricardo', 'public/imagens/paisagem_1.avif'),
(2, 'Rochas', 'Rochas Montanha', '9/10/2024', 'João', 'public/imagens/paisagem_2.avif'),
(3, 'Anoitecer', 'Por do Sol', '9/10/2024', 'Francisco', 'public/imagens/paisagem_3.avif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
