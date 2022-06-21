-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 16:45
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
-- Banco de dados: `db_savier`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscritos`
--

CREATE TABLE `tb_inscritos` (
  `cod_ins` int(11) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contato` varchar(16) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` char(5) NOT NULL,
  `complemento` varchar(15) NOT NULL,
  `evento` varchar(60) NOT NULL,
  `pos_evento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_inscritos`
--

INSERT INTO `tb_inscritos` (`cod_ins`, `nome`, `cpf`, `email`, `contato`, `cep`, `estado`, `cidade`, `bairro`, `endereco`, `numero`, `complemento`, `evento`, `pos_evento`) VALUES
(1, 'Gabriel Xavier da Silva', '628.852.793-97', 'xaviergabriel856@gmail.com', '(88) 9 8178-9272', '62043-073', '', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'Casa', 'A Volta do que não foi - Whindersson Nunes', 'Por um amigo'),
(5, 'Keiliane Costa Cavalcante', '627.364.403-90', 'keilianecavalcantekeiliane@gmail.com', '(88) 9 9285-2091', '62030-020', 'CE', 'Sobral', 'Campo dos Velhos', 'Rua Coronel Frederico Gomes', '1538', 'Casa', 'Smithereens - Joji', 'por ai'),
(6, '123123231', '628.852.793-97', '231321313', '(21) 3 1232-1312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'Casa', 'Glow by Fashion Week', 'Amigo'),
(7, '312313123', '628.852.793-97', '12321312312', '(12) 3 1231-2312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'Casa', 'Ultra Worldwide', 'Amigo'),
(8, '123123123123', '123.123.132-13', '3123123123123', '(12) 3 1231-2312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'Casa', 'Ultra Worldwide', 'amigo'),
(9, 'Robert Marcos', '793.786.759-30', 'robertemail@gmail.com', '(45) 4 3237-8896', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '188', 'Apartamento', 'A Volta do que não foi - Whindersson Nunes', 'Internet'),
(10, 'ahgsdahjkdjkblasdjkhjkhldsa', '009.876.739-87', 'asdkluaskljdhasd', '(12) 3 1231-2312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'Casa', 'Glow by Fashion Week', 'asdasdasd'),
(11, 'qwertyuedfghjkl', '876.544.567-88', 'esrdcfvgbhjgvybhjn', '(12) 4 5673-8976', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'casa', 'Smithereens - Joji', 'jfdasgfd'),
(12, 'yryqrtweuyiqweu', '896.754.667-89', 'sauyjdgaskljd', '(12) 3 1231-2312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'casa', 'Glow by Fashion Week', 'asdasdas'),
(13, 'asgdasd', '665.883.676-78', 'asdasdasd', '(12) 3 1232-1323', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '187', 'sdas', 'Glow by Fashion Week', 'asdasd'),
(14, 'asdasdsadasdasd', '879.467.837-87', 'sadasdsadasd', '(21) 3 1231-2312', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '123', 'qweewq', 'Smithereens - Joji', 'qweaeqweqweqwe'),
(15, 'sdadasdasd', '000.838.378-83', 'qasdasdasdas', '(12) 3 5657-8657', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '123', 'sadasd', 'Smithereens - Joji', 'sadasdasd'),
(16, 'saasdasdas', '333.654.767-75', 'sadasdas', '(13) 2 1312-3213', '62043-073', 'CE', 'Sobral', 'Coração de Jesus', 'Rua João Brasilino do Nascimento', '143', 'asdasd', 'Glow by Fashion Week', 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cod_usu` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cod_usu`, `usuario`, `email`, `senha`) VALUES
(1, 'xavier', 'xaviergabriel856@gmail.com', '123'),
(2, 'xavier', 'xaviergabriel856@gmail.com', '123'),
(3, 'xavier1', 'xaviergabriel856@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_inscritos`
--
ALTER TABLE `tb_inscritos`
  ADD PRIMARY KEY (`cod_ins`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cod_usu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_inscritos`
--
ALTER TABLE `tb_inscritos`
  MODIFY `cod_ins` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cod_usu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
