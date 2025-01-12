-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 09:39 PM
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
-- Database: `construcao_e_habitacao`
--

-- --------------------------------------------------------

--
-- Table structure for table `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_ultimo_acesso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `email`, `login`, `senha`, `data_ultimo_acesso`) VALUES
(3, 'Ricardo', 'sdfdsfsd@gmail.com', 'admin', 'codemaster', '2024-11-24 20:27:21'),
(4, 'Ana', 'dsadfsf@hotmail.com', 'ricardo', 'teste', '2024-11-24 17:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `pagina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `imagem`, `pagina`) VALUES
(1, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerContactos.png', 'contactos'),
(2, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerQuemSomos.png', 'quem_somos'),
(3, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerFerias.png', 'centro_ferias'),
(5, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerSocios.png', 'socios'),
(6, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerNoticias.png', 'noticias'),
(7, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerDestaques.png', 'destaques'),
(8, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerEmpreendimentos.png', 'empreendimento'),
(9, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerDestaque1.png', 'destaque_unico');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`) VALUES
(1, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerHome.png'),
(2, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerContactos.png'),
(3, 'http://localhost/construcao_e_habitacao/public/images/desktop/BannerDestaques.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `fax` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `facebook` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `telefone`, `fax`, `email`, `facebook`) VALUES
(1, 'Rua Passos Manuel, 59-1.º 4000-384 Porto       ', '(+351) 222 088 761', '(+351) 222 088 761', 'cooptripeira@mail.telepac.pt', 'https://www.google.pt');

-- --------------------------------------------------------

--
-- Table structure for table `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `home_page` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destaques`
--

INSERT INTO `destaques` (`id`, `titulo`, `texto`, `imagem`, `home_page`) VALUES
(2, 'Canidelo - Vila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum\r\n          \r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome1.png', 1),
(3, 'Barranha -\r\nSª da Hora Matosinhos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum\r\n          \r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome2.png', 1),
(4, 'Contumil - Porto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum \r\n          \r\n            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome3.png', 1),
(5, 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum \r\n          \r\n            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome4.png', 1),
(6, 'Famalicão', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum \r\n          \r\n            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome5.png', 1),
(7, 'Madalena -\r\nVila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum \r\n          \r\n            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome6.png', 1),
(8, 'Madalena\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.  \r\n          \r\n            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum \r\n          \r\n            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/destaqueHome6.png', 0),
(14, 'Teste 1', '<p>sdfds<strong> dsfsdfsdfs</strong></p>', 'https://upload.wikimedia.org/wikipedia/commons/4/4a/SpaceX_Starship_ignition_during_IFT-5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_1` varchar(500) DEFAULT NULL,
  `imagem_2` varchar(500) DEFAULT NULL,
  `imagem_3` varchar(500) DEFAULT NULL,
  `imagem_4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empreendimentos`
--

INSERT INTO `empreendimentos` (`id`, `titulo`, `texto`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`) VALUES
(1, 'Canidelo - Vila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend4.png'),
(2, 'Barranha - Sª da Hora Matosinhos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend3.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend4.png'),
(3, 'Contumil - Porto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend1.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend2.png', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend3.png', ''),
(4, 'Vila do Conde', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend1.png', '', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend3.png', ''),
(5, 'Famalicão', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', 'http://localhost/construcao_e_habitacao/public/images/desktop/empreend1.png', '', '', ''),
(6, 'Madalena - Vila Nova de Gaia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit. \r\n          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. ', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_simples`
--

CREATE TABLE `menu_simples` (
  `id` int(11) NOT NULL,
  `nome_pagina` varchar(100) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_simples`
--

INSERT INTO `menu_simples` (`id`, `nome_pagina`, `titulo`, `texto`) VALUES
(1, 'quem_somos', 'Quem Somos', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. <strong>Cum rerum, adipisci quasi odit eos inventore eum fuga </strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>\r\n<p><em>Minus itaque inventore</em> blanditiis corporis sit sunt, numquam voluptates sequi accusamus. Ullam eveniet delectus adipisci quos deleniti qui vitae aut harum doloribus. Possimus consequatur earum tenetur perferendis beatae odit dolor inventore facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat minus eaque maiores repudiandae quae quam perferendis. Voluptate, cum exercitationem assumenda quod dolor saepe eum? Magni mollitia voluptatibus minus, atque tenetur assumenda quaerat itaque rem corporis enim. Culpa aut eius doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. Inventore omnis doloremque quae quam in. Laudantium, consequatur officia aliquam ut odit aut recusandae quis vel dolor temporibus hic id, vitae itaque suscipit ratione explicabo repudiandae? Nemo, libero praesentium!</p>'),
(2, 'socios', 'Sócios', 'xx Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere.\r\n\r\n'),
(3, 'centro_ferias', 'Centro de Férias', '434 orem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem molestiae accusamus facere saepe sint voluptates dolorem iure praesentium, quasi illum cumque architecto consequuntur nostrum et numquam aliquam quidem quibusdam minus quas obcaecati placeat maiores. Inventore quae itaque veritatis, error velit minima totam ex. Cum rerum, adipisci quasi odit eos inventore eum fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus itaque inventore blanditiis corporis sit sunt, numquam voluptates sequi accusamus. Ullam eveniet delectus adipisci quos deleniti qui vitae aut harum doloribus. Possimus consequatur earum tenetur perferendis beatae odit dolor inventore facere.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nemo facere perferendis saepe delectus commodi unde possimus fuga. Repellat porro voluptatibus quidem nisi distinctio voluptatum qui ipsum assumenda enim voluptas. Perspiciatis est doloribus reiciendis velit, quasi enim ducimus inventore ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat minus eaque maiores repudiandae quae quam perferendis. Voluptate, cum exercitationem assumenda quod dolor saepe eum? Magni mollitia voluptatibus minus, atque tenetur assumenda quaerat itaque rem corporis enim. Culpa aut eius doloribus!\r\n\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Ut inventore modi, officia rem, debitis quibusdam id recusandae nulla deleniti optio mollitia dolores illum, corporis dolore quasi quos voluptatibus? Iste tempore illo assumenda, minima odit voluptates odio? Nemo beatae impedit deserunt cupiditate voluptate velit ab eum nulla? Corporis, illum reprehenderit! Reprehenderit dicta ullam, amet obcaecati labore quod voluptate saepe eveniet quisquam doloribus corrupti sunt dolores magni enim placeat ab deserunt minima facere. Inventore omnis doloremque quae quam in. Laudantium, consequatur officia aliquam ut odit aut recusandae quis vel dolor temporibus hic id, vitae itaque suscipit ratione explicabo repudiandae? Nemo, libero praesentium!');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `imagem`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia1.png'),
(2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia2.png'),
(3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia3.png'),
(4, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia4.png'),
(5, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia5.png'),
(6, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia6.png'),
(7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia6.png'),
(8, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis voluptatibus blanditiis minima natus quibusdam autem officiis animi quisquam consectetur nihil libero esse tempore non voluptates perspiciatis magnam ab error aliquam, dignissimos, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quae.', 'http://localhost/construcao_e_habitacao/public/images/desktop/Noticia5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_simples`
--
ALTER TABLE `menu_simples`
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
-- AUTO_INCREMENT for table `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_simples`
--
ALTER TABLE `menu_simples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
