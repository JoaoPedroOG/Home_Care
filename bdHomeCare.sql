-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2020 às 19:37
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdhomecare`
--
CREATE DATABASE IF NOT EXISTS `bdhomecare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdhomecare`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `cod_consulta` int(11) NOT NULL,
  `cod_medico` int(11) NOT NULL,
  `cod_paciente` int(11) NOT NULL,
  `endereco_consulta` varchar(50) NOT NULL,
  `diagnostico` varchar(50) NOT NULL,
  `horario_consulta` varchar(5) NOT NULL,
  `data_consulta` varchar(10) NOT NULL,
  `Status` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`cod_consulta`, `cod_medico`, `cod_paciente`, `endereco_consulta`, `diagnostico`, `horario_consulta`, `data_consulta`, `Status`) VALUES
(1, 10, 2, 'Rua Bugas, 504', '', '14:00', '26/11/2020', 'Fechado'),
(2, 6, 2, 'Rua Bugastes, 650', '', '16:00', '25/11/2020', 'Aberto'),
(3, 9, 2, 'Rua buas, 405', 'Tosse forte e vômitos', '12:00', '27/11/2020', 'Aberto'),
(4, 1, 2, 'Rua buas, 405', 'Morte', '20:00', '30/11/2020', 'Fechado'),
(5, 10, 2, 'Rua buas, 405', 'A', '03:00', '31/10/2020', 'Aberto'),
(6, 10, 2, 'Rua buas, 405', 'A', '03:00', '31/12/2020', 'Fechado'),
(7, 9, 2, 'Rua teste, 222', 'Teste', '14:00', '12/02/2012', 'Fechado'),
(8, 9, 2, 'Rua teste, 222', 'Teste', '14:00', '12/02/2012', 'Aberto'),
(9, 9, 2, 'Rua teste, 222', 'Teste', '14:00', '12/02/2012', 'Fechado'),
(10, 9, 2, 'Rua teste, 222', 'aa', '14:00', '12/02/2012', 'Aberto'),
(11, 1, 2, 'Rua buas, 405', 'A', '14:00', '12/02/2012', 'Fechado'),
(12, 10, 2, 'Rua teste, 222', 'Teste', '15:00', '29/12/2000', 'Aberto'),
(13, 10, 4, 'Rua rubéns, 405', 'Dor', '15:00', '26/11/2120', 'Aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `cod_esp` int(11) NOT NULL,
  `nome_esp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`cod_esp`, `nome_esp`) VALUES
(1, 'Sorologista'),
(2, 'Ginecologista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE `hospital` (
  `cod_hospital` int(11) NOT NULL,
  `cnpj` varchar(19) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cnes` varchar(8) NOT NULL,
  `numero` int(11) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hospital`
--

INSERT INTO `hospital` (`cod_hospital`, `cnpj`, `nome`, `telefone`, `cep`, `endereco`, `cnes`, `numero`, `senha`) VALUES
(1, '60.247.052/0001-99', 'Hospital Lucas', '(11)2549-7494', '03804-010', 'Rua 3', '1111111', 405, '123'),
(2, '11.111.111/1111-11', 'Lucas Vençedors', ' (11)1111-1111 ', '11111-111', 'Rua Vitoria', '2222222', 1111, '123'),
(3, '33.333.333/3333-33', 'Lucas Vençedors', '(11)1111-1111', '11111-111', 'Rua Vitoria', '3333333', 1111, '123'),
(4, '22.222.222/2222-22', 'Buguinho', '12)3456-7890(', '22222-222', 'AAAA', '4444444', 3333, '123'),
(5, '88.888.888/8888-88', 'Shelly Companhia Limitada', ' (88)8888-8888 ', '03804-010', 'Rua 2', '8888888', 406, '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital_medico`
--

CREATE TABLE `hospital_medico` (
  `cod_hospital` int(11) NOT NULL,
  `cod_medico` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cod_medico` int(11) NOT NULL,
  `crm` varchar(13) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`cod_medico`, `crm`, `uf`, `nome`, `data_nasc`, `rg`, `cpf`, `cidade`, `estado`, `senha`) VALUES
(1, '11111111-1', 'BR', 'Joao Pedro A', '2020-08-11', '22.050.224-9', '537.861.778-21', 'São Paulo', 'SP', '123'),
(2, '22222222-2', 'BR', 'Joao Pedro A', '2020-08-11', '22.050.224-0', '537.861.778-00', 'São Paulo', 'SP', '123'),
(3, '123456', 'aa', 'aa', '2020-11-05', '123', '123', 'ss', 'ss', '123'),
(4, '456', 'SS', 'aa', '2020-11-05', '456', '456', 'aaa', 'aa', '123'),
(5, '789', 'aa', 'aaa', '2020-11-05', '789', '789', 'aa', 'aa', '123'),
(6, '12345678-9', 'aa', 'aa', '2020-11-05', '22.050.224-1', '537.861.778-11', 'AAAA', 'aa', '123'),
(7, '1', 'aa', 'aa', '2020-11-05', '000', '000', 'aaa', 'aa', '123'),
(8, '33333333-3', 'aa', 'aa', '2020-11-05', '00.000.000-0', '000.000.000-00', 'aa', 'aa', '123'),
(9, '44444444-4', 'SA', 'Bugão', '11/11/1111', '22.222.222-2', '222.222.222-22', 'São Paulo', 'SP', '123'),
(10, '55555555-5', 'PA', 'Buguinho', '11/11/1111', '33.333.333-3', '333.333.333-33', 'Belenzinho', 'PA', '123'),
(11, '99999999-9', 'A', 'A', '99/99/9999', '99.999.999-9', '999.999.999-99', 'A', 'a', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico_especialidade`
--

CREATE TABLE `medico_especialidade` (
  `cod_medico` int(11) NOT NULL,
  `cod_esp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico_especialidade`
--

INSERT INTO `medico_especialidade` (`cod_medico`, `cod_esp`) VALUES
(9, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `cod_paciente` int(11) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` int(11) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `rg`, `nome`, `data_nasc`, `fone`, `cpf`, `cidade`, `estado`, `endereco`, `cep`, `numero`, `senha`) VALUES
(2, '11.111.111-1', 'Bugão', '11/11/1111', ' 11 11111-1111 ', '111.111.111-11', 'São Paulo', 'SP', 'AA', '11111-111', 1111, '123'),
(3, '22.222.222-2', 'Buguinho', '22/22/2222', ' 22 22222-2222 ', '222.222.222-22', 'Sampa', 'ss', 'aa', '22222-222', 2222, '123'),
(4, '33.333.333-3', 'Discord travou ', '33/33/3333', ' 33 33333-3333 ', '333.333.333-33', 'Samp', 'sa', 'Aa', '33333-333', 3333, '123'),
(5, '39.580.508-9', 'lUig Gusdta', '22/08/2003', ' 11 94562-0297', '505.760.138-54', 'Rio Branco', 'SP', 'Rua Guirá', '03805-010', 405, '123'),
(6, '22.050.224-9', 'Joao Pedro', '07/03/2003', ' 11 95649-6214', '537.861.778-21', 'São Paulo', 'SP', 'Rua 1', '03804-010', 405, '123'),
(8, '53.680.120-4', 'lUig Gusdta', '05/08/2003', ' 11 94562-0297', '257.547.388-89', 'Rio Branco', 'SP', 'Rua Guirá', '03805-010', 405, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`cod_consulta`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`cod_esp`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`cod_hospital`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `cnes` (`cnes`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`cod_medico`),
  ADD UNIQUE KEY `crm` (`crm`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cod_paciente`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `cod_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `cod_esp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `cod_hospital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `cod_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `cod_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;--
-- Database: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `login` varchar(10) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`login`, `senha`) VALUES
('adm', 123),
('comum', 456);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `Cod_Fornecedor` int(11) NOT NULL,
  `Razao_Social` varchar(70) NOT NULL,
  `Nome_Fantasia` varchar(70) NOT NULL,
  `CNPJ` varchar(20) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Num` varchar(7) NOT NULL,
  `Bairro` varchar(25) NOT NULL,
  `Cidade` varchar(25) NOT NULL,
  `Fone` varchar(18) NOT NULL,
  `Nome_Contato` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Site` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`Cod_Fornecedor`, `Razao_Social`, `Nome_Fantasia`, `CNPJ`, `Endereco`, `Num`, `Bairro`, `Cidade`, `Fone`, `Nome_Contato`, `Email`, `Site`) VALUES
(1, 'Comercio de Papeis Yuki Ltda.', 'Yuki Papeis ', '03.847.655/0001-98', 'Rua das Ameixeiras', '21', 'Penha', 'Sao Paulo', '(11) 2695-6398', 'Sr. Pedro', 'yuki@provador.com.br', 'comerciopapeis.com.br'),
(2, 'Comercio de Papeis ABC Ltda.', 'Papelaria ABC', '14.218.835/0001-27', 'Av. Iguape', '1698', 'Tatuape', 'Sao Paulo', '(11) 2369-9685', 'Sra. Nete', 'p_ABC@provedor.com.br', 'abcpapeis.com.br'),
(3, 'Distribuidora Kalunga S.A.', 'Kalunga', '23.222.835/0001-07', 'Av. Rio das Pedras', '1752', 'Itaquera', 'Sao Paulo', '(11) 2596-9586', 'Sr. Marcos', 'kalunga@provedor.com.br', 'kalunga.com.br'),
(4, 'Industria e Comercio Nobel S.A. ', 'Nobel', '07.256.898/0001-10', 'Rua das Bolhas', '900', 'Itaquera', 'Sao Paulo', '(11) 2475-6598', 'Sr. Paulo', 'nobel@provedor.com.br', 'nobel.com.br'),
(5, 'Papelaria Americanas Ltda.', 'Americanas', '01.659.427/0001-04', 'Rua das Ovelhas', '21', 'Pari', 'Sao Paulo', '(11) 2456-9874', 'Sr. Antonio', 'americanas@provedor.com.br', 'americanas.com.br'),
(6, 'Distribuidoras Brasileiras S.A.', 'Brasileiras', '01.326.265/0001-04', 'Av. Brasil ', '12', 'Bras', 'Sao Paulo', '(11) 2362-3659', 'Sra. Paula', 'brasileiras@provedor.com.br', 'brasileiras.com.br'),
(7, 'Ind e Comercio de Papeis OI Ltda.', ' Papeis Oi', '01.362.126/0001-04', 'Av. dos Trilhos', '1362', 'Pari', 'Sao Paulo', '(11) 2365-2154', 'Sra. Ana', 'oi@provedor.com.br', 'oi.com.br'),
(8, 'Armarinhos Fernando Ltda', 'Fernando', '01.956.236/0001-04', 'Alameda Santos', '362', 'Centro', 'Sao Paulo', '(11) 2362-3659', 'Sr. Matheus', 'fernando@provedor.com.br', 'armarinhosfernando.com.br'),
(9, 'Armarinhos Alegria', 'Alegria', '14.632.326/0001-14', 'Rua das Fagulhas', '12', 'Cambuci', 'Sao Paulo', '(11) 2362-5487', 'Sr. Alegrete', 'alegria@provedor.com.br', 'armarinhosalegria.com.br'),
(10, 'Comercio de Papeis Tchau Ltda', 'Tchau', '11.659.652/0001-04', 'Alameda dos Anhambiguaras', '326', 'Morumbi', 'Sao Paulo', '(11) 3265-6958', 'Sr. Bento', 'tchau@provedor.com.br', 'tchau.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Cod_Produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtde_Estoque` double NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Cod_Produto`, `Descricao`, `Unidade`, `Qtde_Estoque`, `Caracteristicas`, `Cod_Fornecedor`) VALUES
(1, 'Caneta', 'un', 100, 'cor azul', 2),
(2, 'Caneta', 'un', 85, 'cor vermelha', 2),
(3, 'Caneta', 'un', 60, 'cor preta', 2),
(4, 'Lapis ', 'un', 150, 'sem borracha', 3),
(5, 'Lapis ', 'un', 100, 'com borracha', 4),
(6, 'Lapis de cor ', 'cx', 25, '12 cores', 4),
(7, 'Lapis de cor', 'cx', 50, '24 cores', 4),
(8, 'Lapis de cor ', 'cx', 35, '36 cores', 5),
(9, 'Borracha', 'dz', 35, 'Azul/Vermelha', 6),
(10, 'Borracha', 'dz', 25, 'Branca', 7),
(11, 'Papel Sulfite', 'pc', 100, 'Colorido', 8),
(12, 'Caderno Universitario', 'pc', 25, '1 materia', 9),
(13, 'Caderno Universitario', 'pc', 150, '10 materias', 9),
(14, 'Regua', 'un', 250, 'Acrilica - 30 cm', 10),
(15, 'Lapiseira', 'pc', 86, 'Grafite 0.5', 10),
(25, 'A', 'A', 11, 'Aa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`Cod_Fornecedor`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Cod_Produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `Cod_Fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Cod_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
