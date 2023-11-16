-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 23:56
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_larafood`
--
CREATE DATABASE IF NOT EXISTS `db_larafood` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_larafood`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_restaurante`
--

CREATE TABLE `tb_restaurante` (
  `cd_restaurante` int(11) NOT NULL,
  `nm_restaurante` varchar(25) NOT NULL,
  `qt_nota_restaurante` float NOT NULL,
  `ds_tipo_restaurante` varchar(20) NOT NULL,
  `qt_distancia_restaurante` varchar(20) NOT NULL,
  `ds_espera_restaurante` varchar(20) NOT NULL,
  `vl_media_restaurante` float NOT NULL,
  `ds_imagem_restaurante` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_restaurante`
--

INSERT INTO `tb_restaurante` (`cd_restaurante`, `nm_restaurante`, `qt_nota_restaurante`, `ds_tipo_restaurante`, `qt_distancia_restaurante`, `ds_espera_restaurante`, `vl_media_restaurante`, `ds_imagem_restaurante`) VALUES
(1, 'Mc Donald\'s', 4.5, 'Lanches', '1.5 Km', '10 - 15 min.', 9, 'images/mcdonalds.jpg'),
(2, 'China in Box', 4.8, 'Comida Chinesa', '3.2 Km', '30 - 45 min.', 15, 'images/chinainbox.png'),
(3, 'Coco Bambu', 4.9, 'Doces', '500 metros', '5 - 10 min.', 25, 'images/cocobambu.jpg'),
(4, 'Eataly', 4.7, 'Comida Italiana', '800 metros', '5 - 15 min.', 12, 'images/eataly.png'),
(5, 'Habib\'s', 5, 'Lanches', '100 metros', '5 min.', 3, 'images/habibs.jpg'),
(6, 'Outback', 5, 'Churrascaria', '5.0 Km', '1 hora.', 50, 'images/outback.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_restaurante`
--
ALTER TABLE `tb_restaurante`
  ADD PRIMARY KEY (`cd_restaurante`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_restaurante`
--
ALTER TABLE `tb_restaurante`
  MODIFY `cd_restaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
