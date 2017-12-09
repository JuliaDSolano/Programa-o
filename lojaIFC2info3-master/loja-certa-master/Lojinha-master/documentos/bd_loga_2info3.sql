-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Dez-2017 às 16:56
-- Versão do servidor: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_loga_2info3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `estoque` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`estoque`, `id`, `nome`, `categoria`, `preco`) VALUES
(-1, 1, 'Moleton feminino Hurley ', 'Canguru Fechado', '154.99'),
(12, 2, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(6, 3, 'Moleton feminino Hurley ', 'Careca', '154.99'),
(55, 4, 'Moleton feminino Hurley ', 'Careca', '154.99'),
(4, 5, 'Moleton feminino Hurley ', 'Careca', '154.99'),
(0, 6, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(10, 7, 'Moleton feminino Hurley ', 'Canguru Fechado', '154.99'),
(5, 8, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(100, 9, 'Moleton feminino Hurley ', 'Careca', '154.99'),
(0, 16, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(5, 17, 'Moleton feminino Hurley ', 'Careca', '154.99'),
(0, 18, 'Moleton feminino Hurley ', 'Canguru Fechado', '154.99'),
(0, 19, 'Moleton feminino Hurley ', 'Canguru Fechado', '154.99'),
(3, 20, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(22, 21, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99'),
(43, 23, 'Moleton feminino Hurley ', 'Canguru Aberto', '154.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
