-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2017 às 23:41
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargas`
--

CREATE TABLE `cargas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `cep_r` varchar(255) NOT NULL,
  `rua_r` varchar(255) NOT NULL,
  `numero_r` varchar(255) NOT NULL,
  `bairro_r` varchar(255) NOT NULL,
  `cidade_r` varchar(255) NOT NULL,
  `estado_r` varchar(255) NOT NULL,
  `cep_e` varchar(255) NOT NULL,
  `rua_e` varchar(255) NOT NULL,
  `numero_e` varchar(255) NOT NULL,
  `bairro_e` varchar(255) NOT NULL,
  `cidade_e` varchar(255) NOT NULL,
  `estado_e` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargas`
--

INSERT INTO `cargas` (`id`, `id_user`, `titulo`, `categoria`, `subcategoria`, `cep_r`, `rua_r`, `numero_r`, `bairro_r`, `cidade_r`, `estado_r`, `cep_e`, `rua_e`, `numero_e`, `bairro_e`, `cidade_e`, `estado_e`, `status`, `created_at`) VALUES
(3, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:09:45'),
(4, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:10:50'),
(5, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:11:09'),
(6, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:12:31'),
(7, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:12:56'),
(8, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:13:17'),
(9, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:14:53'),
(10, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:17:22'),
(11, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:18:16'),
(12, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:19:04'),
(13, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:20:28'),
(14, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:21:48'),
(15, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:22:23'),
(16, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:23:44'),
(17, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:25:52'),
(18, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:26:23'),
(19, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:26:46'),
(20, 1, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-14 02:30:58'),
(21, 10, 'teste', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-15 12:06:08'),
(22, 10, 'MudanÃ§a', '1', '1', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-15 12:08:28'),
(23, 1, 'Entrega de Carro', '4', '13', '06149-260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149-260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-15 12:30:58'),
(24, 1, 'Transportes de Carga', '3', '9', '06149-260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', '06149-260', 'Rua MÃ¡rio Quintana', '686', 'Santa Maria', 'Osasco', 'SP', 0, '2017-11-15 13:26:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `views`) VALUES
(1, 'Mudancas', 6),
(2, 'Artigos Domesticos', 0),
(1, 'Mudancas', 6),
(2, 'Artigos Domesticos', 0),
(3, 'Cargas', 1),
(3, 'Cargas', 1),
(4, 'Veiculos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(1, 'Alef Felix de Farias', '1135927481', 'alef.developerweb@gmail.com', 'asdfasdfasdf', '2017-11-13 21:51:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `items_cargas`
--

CREATE TABLE `items_cargas` (
  `id` int(11) NOT NULL,
  `id_cargas` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `comp` varchar(10) NOT NULL,
  `largura` varchar(10) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `medida` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `quantidade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `items_cargas`
--

INSERT INTO `items_cargas` (`id`, `id_cargas`, `nome`, `comp`, `largura`, `altura`, `medida`, `peso`, `quantidade`) VALUES
(1, 10, 'teste', '10', '10', '10', 'M', '10', '1'),
(2, 11, 'teste', '10', '10', '10', 'M', '10', '1'),
(3, 12, 'teste', '10', '10', '10', 'M', '10', '1'),
(4, 13, 'teste', '10', '10', '10', 'M', '10', '1'),
(5, 14, 'teste', '10', '10', '10', 'M', '10', '1'),
(6, 15, 'teste', '10', '10', '10', 'M', '10', '1'),
(7, 16, 'teste', '10', '10', '10', 'M', '10', '1'),
(8, 17, 'teste', '10', '10', '10', 'M', '10', '1'),
(9, 18, 'teste', '10', '10', '10', 'M', '10', '1'),
(10, 19, 'teste', '10', '10', '10', 'M', '10', '1'),
(11, 20, 'teste', '10', '10', '10', 'M', '10', '1'),
(12, 21, 'teste', '10', '10', '10', 'M', '10', '1'),
(13, 21, 'teste', '10', '10', '1', 'M', '10', '1'),
(14, 22, 'SofÃ¡', '10', '10', '10', 'M', '10', '1'),
(15, 22, 'TelevisÃ£o', '10', '10', '10', 'M', '10', '1'),
(16, 22, 'Geladeira', '10', '10', '10', 'M', '10', '1'),
(17, 22, 'FogÃ£o', '10', '10', '10', 'M', '10', '1'),
(18, 23, 'Honda Civic', '30', '32', '2', 'M', '1000', '1'),
(19, 24, 'carga', '10', '10', '1', 'M', '10', '1'),
(20, 24, '10', '10', '10', '10', 'M', '10', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `oe` varchar(2) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nregistro` varchar(12) NOT NULL,
  `cathab` varchar(3) NOT NULL,
  `validade` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id`, `id_user`, `firstname`, `lastname`, `rg`, `oe`, `cpf`, `nregistro`, `cathab`, `validade`, `created_at`) VALUES
(4, 11, 'teste', 'teste', '12.384.971-29', 'SP', '192.853.719-23', '298357193827', 'A', '2023-01-27', '2017-11-15 21:36:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `id_categoria`, `subcategoria`, `views`) VALUES
(1, 1, 'Apartamento de 3 quartos', 6),
(2, 1, 'Casa de 3 quartos', 0),
(3, 1, 'Casa de 4 quartos', 0),
(4, 1, 'Apartamento de 2 quartos', 0),
(5, 2, 'Moveis', 0),
(6, 2, 'Eletrodomesticos', 0),
(7, 2, 'Antiguidades', 0),
(8, 2, 'Frageis', 0),
(9, 3, 'Carga Fracionada', 1),
(10, 3, 'Carga Completa', 0),
(11, 4, 'Motos', 0),
(12, 4, 'Barcos', 0),
(13, 4, 'Carros', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `datanasc` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `cpf`, `rg`, `datanasc`, `sexo`, `telefone`, `celular`, `email`, `password`, `level`, `created_at`) VALUES
(1, 'Alef', 'Felix de Farias', '40137300816', '392959008', '1997-10-27', 'M', '(11)3592-4781', '(11)97760-4520', 'alef.developerweb@gmail.com', '35924781', '0', '2017-11-13 01:22:31'),
(3, 'Transportadora', 'RazÃ£o', '124812874618276', '', '', '', '1135927481', '11977604520', 'transportadora1@transportadora.com', '35924781', '1', '2017-11-13 02:01:46'),
(11, 'Transportadora', 'transportes', '12.389.123/5871-27', '', '', '', '(13)8947-5812', '(13)94857-2129', 'transportadora2@transportadora.com', '35924781', '1', '2017-11-15 14:22:31'),
(10, 'teste', 'teste', '999.999.999-99', '99.999.999-9', '1997-10-27', 'F', '(19)8127-8124', '(12)98471-2984', 'teste@teste.com', 'alef35924781', '0', '2017-11-15 11:58:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `renavam` varchar(255) NOT NULL,
  `chassi` varchar(255) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `anomodelo` varchar(4) NOT NULL,
  `anofabricacao` varchar(4) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `id_user`, `renavam`, `chassi`, `placa`, `modelo`, `marca`, `anomodelo`, `anofabricacao`, `categoria`, `comentario`, `created_at`) VALUES
(16, 11, 'teste', 'teste', 'tes-1240', 'teste', 'teste', '2010', '2011', 'vuc', 'teste', '2017-11-15 17:44:28'),
(17, 11, 'teste', 'teste', 'tes-1241', 'teste', 'teste', '2010', '2011', 'vuc', 'teste', '2017-11-15 17:44:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargas`
--
ALTER TABLE `cargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_cargas`
--
ALTER TABLE `items_cargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargas`
--
ALTER TABLE `cargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items_cargas`
--
ALTER TABLE `items_cargas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
