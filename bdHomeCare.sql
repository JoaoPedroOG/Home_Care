-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2020 às 02:14
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
-- Database: `bd_empresa`
--
CREATE DATABASE IF NOT EXISTS `bd_empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_empresa`;

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
(1, 'Comércio de Papéis Yuki Ltda.', 'Yuki Papéis', '03.847.655/0001-98', 'Rua das Ameixeiras', '21', 'Penha', 'São Paulo', '(11)2695-6398', 'Sr.Pedro', 'yuiki@provedor.com.br', 'www.yukipapeis.com.br'),
(2, 'Comércio de Papéis Ltda.', 'Papelaria ABC', '14.218.835/0001-27', 'Av. Iguapé', '1698', 'Tatuapé', 'São Paulo', '(11)2369-9685', 'Sra. Bete', 'p_ABC@provedor.com.br', 'www.ABCpapeis.com.br'),
(3, 'Distribuidora Kalunga S.A.', 'Kalunga', '23.222.835/0001-07', 'Av. Rio das Pedras', '1752', 'Itaquera', 'São Paulo', '(11)2696-9586', 'Sr. Marcos', 'kalunga@provedor.com.br', 'www.kalunga.com.br'),
(4, 'Indústria e Comércio Nobel S.A', 'Nobel', '07-256.898/0001-10', 'Rua das Bolhas', '900', 'Itaquera', 'São Paulo', '(11)2475-5598', 'Sr. Paulo', 'nobel@provedor.com.br', 'www.comercionobel.com.br'),
(5, 'Papelaria Americanas Ltda.', 'Americanas', '01.659.427/0001-04', 'Rua das Ovelhas', '21', 'Pari', 'São Paulo', '(11)2456-9874', 'Sr. Antonio', 'americanas@provedor.com.br', 'www.americanas.com.br'),
(6, 'Distribuidora Brasileiras S.A', 'Brasileiras', '01.326.265/0001-04', 'Av. Brasil', '12', 'Brás', 'São Paulo', '(11)6698-6958', 'Sra. Paula', 'brasileiras@provedor.com.br', 'www.brasileiras.com.br'),
(7, 'Ind e Comercio de Papeis OI Ltda', 'Papéis OI\r\n', '01.362.126/0001-04', 'Av. dos Trilhos', '1362', 'Pari', 'São Paulo', '(11)2365-2154', 'Sra. Ana', 'oi@provedor.com.br', 'www.oipapelarias.com.br'),
(8, 'Armarinhos Fernando Ltda', 'Fernando', '01.956.236/0001-04', 'Alameda Santos', '362', 'Centro', 'São Paulo', '(11)2362-3659', 'Sr. Matheus', 'fernando@provedor.com.br', 'www.armarinhosfernando.com.br'),
(9, 'Armarinhos Alegria S.A', 'Alegria', '14.632.326/0001-14', 'Rua das Fagulhas', '12', 'Cambuci', 'São Paulo', '(11)2362-5487', 'Sr. Alegrete', 'alegria@provedor.com.br', 'www.armarinhosalegria.com.br'),
(10, 'Comércio de Papéis Tchau Ltda', 'Tchau', '11.659.652/0001-04', 'Alameda dos Anhambiguaras', '326', 'Moroumbi', 'São Paulo', '(11)3265-6958', 'Sr. Bento', 'tchau@provedor.com.br', 'www.tchauprovedor.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Cod_Produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtde_Estoque` double NOT NULL,
  `Carcterísticas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Cod_Produto`, `Descricao`, `Unidade`, `Qtde_Estoque`, `Carcterísticas`, `Cod_Fornecedor`) VALUES
(1, 'Caneta', 'un', 100, 'cor azul', 2),
(2, 'Caneta', 'un', 85, 'cor vermelho', 2),
(3, 'Caneta', 'un', 60, 'cor preta', 2),
(4, 'Lápis', 'un', 150, 'sem borracha', 3),
(5, 'Lápis', 'un', 100, 'com borracha', 4),
(6, 'Lápis de cor', 'cx', 25, '12 cores', 4),
(7, 'Lápis de cor', 'cx', 50, '24 cores', 4),
(8, 'Lápis de cor', 'cx', 35, '36 cores', 5),
(9, 'Borracha', 'dz', 35, 'Azul/Vermelha', 6),
(10, 'Borracha', 'dz', 25, 'Branca', 7),
(11, 'Papel Sulfite', 'pc', 100, 'Colorido', 8),
(12, 'Caderno Universitário', 'pc', 25, '1 matéria', 9),
(13, 'Caderno Universitário', 'pc', 150, '10 matérias', 9),
(14, 'Régua', 'un', 250, 'Acrílica - 30 cm', 10),
(15, 'Lapiseira', 'pc', 86, 'Grafite 0.5', 10);

--
-- Indexes for dumped tables
--

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
  MODIFY `Cod_Fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Cod_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;--
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
(2, 'Ginecologista'),
(3, 'Clínico Geral'),
(4, 'Otorrinolaringologista'),
(5, 'Pediatra'),
(6, 'Alergologista'),
(7, 'Imunologista'),
(8, 'Anestesiologia'),
(9, 'Cardiologista'),
(10, 'Cirurgião Geral'),
(11, 'Dermatologista'),
(12, 'Endocrinologista'),
(13, 'Gastroenterologista'),
(14, 'Geriatra'),
(15, 'Hematologista'),
(16, 'Infectologista'),
(17, 'Médico de família'),
(18, 'Médico do trabalho'),
(19, 'Médico intensivista'),
(20, 'Perito médico'),
(21, 'Nefrologista'),
(22, 'Neurocirurgião'),
(23, 'Neurologista'),
(24, 'Nutrólogo'),
(25, 'Oftalmologista'),
(26, 'Oncologista'),
(27, 'Ortopedista'),
(28, 'Patologista'),
(29, 'Pneumologista'),
(30, 'Psiquiatra'),
(31, 'Reumatologista'),
(32, 'Urologista');

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
(1, '60.247.052/0001-99', 'Hospital Santo Amaro', '11 92549-7494', '03804-010', 'Rua 3', '1111111', 405, '123'),
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

--
-- Extraindo dados da tabela `hospital_medico`
--

INSERT INTO `hospital_medico` (`cod_hospital`, `cod_medico`) VALUES
(1, 1),
(1, 1),
(1, 12),
(1, 13),
(1, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `cod_medico` int(11) NOT NULL,
  `crm` varchar(13) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
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
(1, '11111111-1', 'BR', 'Joao Pedro D', '2020-08-11', '22.050.224-9', '537.861.778-21', 'São Paulo', 'SP', '123'),
(9, '44444444-4', 'SA', 'Bugão', '2020-11-05', '22.222.222-2', '222.222.222-22', 'São Paulo', 'SP', '123'),
(10, '55555555-5', 'PA', 'Buguinho', '2020-11-05', '33.333.333-3', '333.333.333-33', 'Belenzinho', 'PA', '123'),
(13, '66666666-6', 'RJ', 'Luis BR', '2003-03-07', '77.777.777-9', '777.777.777-88', 'Sampa', 'SP', '123'),
(12, '00000000-0', 'SP', 'Luis PHp', '2003-03-07', '77.777.777-8', '777.777.777-78', 'Rio Branco', 'SP', '123'),
(14, '01234567-8', 'PA', 'Lucas Rodrigues', '2000-03-07', '53.786.177-8', '220.502.249-99', 'São Paulo', 'SP', '123');

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
(1, 2),
(12, 4),
(13, 2),
(14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `cod_paciente` int(11) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
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
(2, '11.111.111-1', 'Bugão Brimos', '2011-11-11', '11 95649-6214', '111.111.111-11', 'São Paulo', 'SP', 'AA', '11111-111', 444, '123'),
(3, '22.222.222-2', 'Buguinho', '2011-11-11', '', '222.222.222-22', 'Sampa', 'ss', 'aa', '22222-222', 2222, '123'),
(4, '33.333.333-3', 'Discord travou ', '2011-11-11', '', '333.333.333-33', 'Samp', 'sa', 'Aa', '33333-333', 3333, '123'),
(5, '39.580.508-9', 'lUig Gusdta', '2011-11-11', '', '505.760.138-54', 'Rio Branco', 'SP', 'Rua Guirá', '03805-010', 405, '123'),
(6, '22.050.224-9', 'Joao Pedro', '2011-11-11', '', '537.861.778-21', 'São Paulo', 'SP', 'Rua 1', '03804-010', 405, '123'),
(8, '53.680.120-4', 'Luigi Gusta', '2011-11-11', '', '257.547.388-89', 'Bahia', 'SP', 'Rua Guirá', '03805-010', 405, '123'),
(9, '44.548.963-2', 'Dráuzio Variola', '2011-11-11', '1195649-6214', '985.142.627-77', 'Rio Branco', 'SP', 'Rua Guirá', '03805-010', 405, '123');

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
  MODIFY `cod_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `cod_esp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `cod_hospital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `cod_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `cod_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;--
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
  MODIFY `Cod_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;--
-- Database: `leitura`
--
CREATE DATABASE IF NOT EXISTS `leitura` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `leitura`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `Etiqueta` int(11) NOT NULL,
  `Cor` varchar(12) NOT NULL,
  `Numero` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`Etiqueta`, `Cor`, `Numero`) VALUES
(1, 'Vermelho', 1),
(2, 'Azul', 2),
(3, 'Verde', 3),
(4, 'Preto', 4),
(5, 'Roxo', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `crianca`
--

CREATE TABLE `crianca` (
  `Cod_Crianca` int(11) NOT NULL,
  `Nome_Crianca` varchar(30) NOT NULL,
  `Nome_Responsavel` varchar(30) NOT NULL,
  `Telefone` varchar(13) NOT NULL,
  `Origem_Amigo` varchar(20) NOT NULL,
  `RG` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `crianca`
--

INSERT INTO `crianca` (`Cod_Crianca`, `Nome_Crianca`, `Nome_Responsavel`, `Telefone`, `Origem_Amigo`, `RG`) VALUES
(1, 'Alexandre Gameiro', 'Felipe Fernandes', '(11)2778-4122', 'Escola', '21.268.498-6'),
(2, 'Giovana Rodrigues', 'Rosélia Amado', '(12)2549-8874', 'Vizinho', '54.874.965-2'),
(3, 'Julia Gonçalves', 'Fabio Americo', '(15)2488-4122', 'Escola', '22.266.258-8'),
(4, 'Luna Marquesina', 'Sibele Oliveira', '(11)3359-8874', 'Vizinho', '74.987.965-2'),
(5, 'Lorena Pereira', 'Stefany Pereira', '(79)2709-5510', 'Escola', '49.724.126-2'),
(6, 'Gustavo Veiga', 'Emanuel Aragão', '(98)2642-6790', 'Vizinho', '26.940.853-8'),
(7, 'Pedro Duarte', 'Anthony Duarte', '(84)2799-0174', 'Escola', '34.622.347-7'),
(8, 'Manuel Assis', 'Ryan Assis', '(84)9582-3941', 'Curso', '49.742.607-9'),
(9, 'Alana Drumond', 'Sônia Drumond', '(83)3832-0843', 'Escola', '21.065.148-9'),
(10, 'Mário Lopes', 'Rodrigo Lopes', '(83)9475-5714', 'Escola', '39.676.715-1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `Cod_Emprestimo` int(11) NOT NULL,
  `Cod_Revista` int(11) NOT NULL,
  `Cod_Amigo` int(11) NOT NULL,
  `Data_Emprestimo` varchar(10) NOT NULL,
  `Data_Entrega` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`Cod_Emprestimo`, `Cod_Revista`, `Cod_Amigo`, `Data_Emprestimo`, `Data_Entrega`) VALUES
(1, 8, 6, '14/03/2019', '21/03/2019'),
(2, 7, 1, '05/11/2019', '12/11/2019'),
(3, 1, 2, '14/03/2019', '21/03/2019'),
(4, 3, 3, '05/11/2019', '12/11/2019'),
(5, 4, 4, '14/03/2019', '21/03/2019'),
(6, 5, 5, '05/11/2019', '12/11/2019'),
(7, 6, 7, '14/03/2019', '21/03/2019'),
(8, 9, 8, '05/11/2019', '12/11/2019'),
(9, 2, 9, '04/04/2018', '11/04/2018'),
(10, 10, 10, '22/05/2019', '27/05/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `revista`
--

CREATE TABLE `revista` (
  `Cod_Revista` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Data_Pub` varchar(10) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Caixa_Guardada` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `revista`
--

INSERT INTO `revista` (`Cod_Revista`, `Nome`, `Data_Pub`, `Genero`, `Tipo`, `Caixa_Guardada`) VALUES
(2, 'Homem de Ferro', '14/03/2016', 'Aï¿½ï¿½o', 'HQ', 2),
(1, 'Batman', '13/03/2016', 'Ação', 'HQ', 1),
(3, 'Super Homem', '15/03/2016', 'Ação', 'HQ', 3),
(4, 'Deadpool', '16/03/2016', 'Ação', 'HQ', 4),
(5, 'Joker', '17/03/2016', 'Ação', 'HQ', 1),
(6, 'Attack on Titan', '18/03/2016', 'Suspense', 'Mangá', 2),
(7, 'Highscore DxD', '19/03/2016', 'Ação', 'Mangá', 3),
(8, 'Emergence', '20/03/2016', 'Drama', 'Mangá', 4),
(9, 'A Menina que Roubava Livros', '21/03/2016', 'Drama', 'Livro', 1),
(10, 'Manifesto Comunista', '22/03/2016', 'História', 'Livro', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`Etiqueta`);

--
-- Indexes for table `crianca`
--
ALTER TABLE `crianca`
  ADD PRIMARY KEY (`Cod_Crianca`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`Cod_Emprestimo`);

--
-- Indexes for table `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`Cod_Revista`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `Etiqueta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `crianca`
--
ALTER TABLE `crianca`
  MODIFY `Cod_Crianca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `Cod_Emprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `revista`
--
ALTER TABLE `revista`
  MODIFY `Cod_Revista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;--
-- Database: `rank_ft`
--
CREATE DATABASE IF NOT EXISTS `rank_ft` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rank_ft`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id_alternativa` int(11) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `id_pergunta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id_alternativa`, `a`, `b`, `c`, `d`, `id_pergunta`) VALUES
(1, 'Vênus', 'Lua', 'Sol', 'Marte', 1),
(2, 'Marte', 'Saturno', 'Lua', 'Vênus', 2),
(3, 'Plutão', 'Lua', 'Mercúrio', 'Marte', 3),
(4, 'Vênus', 'Saturno', 'Júpiter', 'Sol', 4),
(5, 'O Sol é a maior estrela do sistema solar', 'Mercúrio é o planeta mais quente do sistema solar', 'Netuno é o planeta mais frio do sistema solar', 'O planeta Terra fica na terceira posição do sistema solar', 5),
(6, 'Júpiter, Saturno, Urano e Netuno', 'Mercúrio, Saturno, Terra e Marte', 'Júpiter, Saturno, Mercúrio e Vênus', 'Urano, Netuno, Vênus e Terra', 6),
(7, 'Por causa do gás metano', 'Por causa do calor', 'Por causa do frio', 'Por causa do gás hidrogênio', 7),
(8, 'Titã e Io', 'Umbriel e Deimos', 'Fobos e Deimos', 'Proteu e Galateia', 8),
(9, 'Vênus', 'Júpiter', 'Netuno', 'Urano', 9),
(10, 'Júpiter', 'Urano', 'Saturno', 'Vênus', 10),
(11, 'Romana e Asteca', 'Romana e Grega', 'Grega e Nórdica', 'Romana e Nórdica', 11),
(12, 'Sete planetas e um planeta anão', 'Oito planetas e cinco planetas anões', 'Oito planetas ', 'Cinco planetas e cinco planetas anões', 12),
(13, 'Quatro luas', 'Cinco luas', 'Uma lua', 'Nenhuma lua', 13),
(14, 'Júpiter e Vênus', 'Júpiter e Mercúrio', 'Marte e Saturno', 'Terra e Urano', 14),
(15, 'Desgaste da Lua', 'A Lua sempre foi assim', 'Os foguetes enviados dos EUA causaram isso', 'Colisão com meteoros', 15),
(16, 'Por que eles possuem mais energia', 'Por questões naturais', 'Por que elas têm muita massa e são formadas por gases de hidrogênio e hélio', 'Por que a Terra não emite luz', 16),
(17, 'Órbitas elípticas', 'Órbitas circular', 'Órbita solar', 'Órbita polar', 17),
(18, 'Metano e Hélio', 'Carbônico e Metano', 'Oxigênio e Carbônico', 'Hidrogênio e Hélio', 18),
(19, 'Mercúrio', 'Cometa Halley', 'Sol', 'Lua', 19),
(20, 'Urano', 'Netuno', 'Saturno', 'Júpiter', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id_jogador` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id_pergunta` int(11) NOT NULL,
  `enunciado` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id_pergunta`, `enunciado`) VALUES
(1, 'Qual o planeta conhecido como estrela D’alva?'),
(2, 'Qual é o planeta que os cientistas estão vasculhando se há ou já teve vida?'),
(3, 'Qual o planeta considerado o menor do sistema solar?'),
(4, 'Qual o maior planeta do sistema solar?'),
(5, 'Assinale a alternativa INCORRETA:'),
(6, 'Quais são os principais planetas gasosos do Sistema Solar?'),
(7, 'Por que o planeta Urano tem seu tom azulado?'),
(8, 'Quais são os nomes de ambas as luas conhecidas de marte?'),
(9, 'Os satélites naturais Oberon e Titania fazem parte de qual planeta?'),
(10, 'Que planeta tem um nome que faz referência a deusa romana do amor?'),
(11, 'Os nomes dos planetas do sistema solar foram baseados em duas mitologias. Quais são elas?'),
(12, 'Quantos planetas e planetas anões existem no nosso sistema solar atualmente?'),
(13, 'Quantas luas tem Júpiter?'),
(14, 'Qual é o maior e o menor planeta do Sistema Solar respectivamente?'),
(15, 'Como as crateras da Lua surgiram?'),
(16, 'Por que as estrelas e o Sol são maiores do que a Terra?'),
(17, 'A forma que os planetas giram ao redor do sol, formam que espécie de órbita?'),
(18, 'Quais são os gases que formam essencialmente o sol?'),
(19, 'Qual o astro mais próximo da terra?'),
(20, 'Qual o planeta mais distante do sol?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontuacao`
--

CREATE TABLE `pontuacao` (
  `id_pontuacao` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `id_jogador` int(11) NOT NULL,
  `tempo_quiz` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id_alternativa`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id_jogador`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD PRIMARY KEY (`id_pontuacao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id_alternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pontuacao`
--
ALTER TABLE `pontuacao`
  MODIFY `id_pontuacao` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
