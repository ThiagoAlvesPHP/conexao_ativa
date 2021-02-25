-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Fev-2021 às 15:04
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albicod_conexao_ativa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_carousel`
--

CREATE TABLE `cad_carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_carousel`
--

INSERT INTO `cad_carousel` (`id`, `imagem`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png'),
(6, '6.png'),
(7, '7.png'),
(8, '8.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_duvidas`
--

CREATE TABLE `cad_duvidas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_duvidas`
--

INSERT INTO `cad_duvidas` (`id`, `titulo`, `texto`) VALUES
(1, 'Minha internet esta lenta, o que devo fazer?', 'Sua internet anda meio lenta? Confira algumas dicas de como deixá-la mais rápida de maneira simples:<br>\r\n1. Desligue o roteador da tomada espere 30 segundos, e religue.<br>\r\n2. Reinicie o seu equipamento (notebook, tablet, desktop ou smartphone).<br>\r\n3. Verifique se todos os cabos estão conectados.<br>\r\n4. Persistindo o problema entre em contato com a central de suporte.<br>'),
(2, 'Como posso emitir 2ª via de minha fatura?', 'É só acessar a Central do Assinante utilizando o seu usuário e senha (O usuário padrão é o seu CPF e a senha os 6 primeiros digitos) ou baixar nosso app na Google Play para fazer a emissão quando e onde quiser.'),
(3, 'Eu pago algum valor pelo suporte e atendimento?', 'Não! O atendimento onde o problema é classificado como externo em nossa rede, não haverá custo. Porém, caso o problema seja dentro da casa do cliente (Exemplo: Conector interno quebrado por mau uso, Roteador desconfigurado pelo cliente...) e classificado como interno, haverá custo de R$ 50,00 por visita improdutiva.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_noticias`
--

CREATE TABLE `cad_noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `dt_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_planos`
--

CREATE TABLE `cad_planos` (
  `id` int(11) NOT NULL,
  `plano` varchar(30) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `definicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_planos`
--

INSERT INTO `cad_planos` (`id`, `plano`, `valor`, `cor`, `definicao`) VALUES
(1, '10', '44.90', 'info', 1),
(2, '20', '52.00', 'danger', 1),
(3, '40', '58.99', 'warning', 1),
(4, '55', '65.90', 'info', 1),
(5, '80', '71.99', 'danger', 1),
(6, '100', '87.99', 'warning', 1),
(7, '150', '94.99', 'info', 1),
(8, '225', '99.90', 'danger', 1),
(9, '300', '128.99', 'warning', 1),
(10, '350', '146.99', 'info', 1),
(11, '450', '177.99', 'danger', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuarios`
--

CREATE TABLE `cad_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_carousel`
--
ALTER TABLE `cad_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_duvidas`
--
ALTER TABLE `cad_duvidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_noticias`
--
ALTER TABLE `cad_noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_planos`
--
ALTER TABLE `cad_planos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_usuarios`
--
ALTER TABLE `cad_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_carousel`
--
ALTER TABLE `cad_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cad_duvidas`
--
ALTER TABLE `cad_duvidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cad_noticias`
--
ALTER TABLE `cad_noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cad_planos`
--
ALTER TABLE `cad_planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cad_usuarios`
--
ALTER TABLE `cad_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
