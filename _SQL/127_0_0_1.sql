-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2023 às 23:22
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
-- Banco de dados: `e-book_square`
--
CREATE DATABASE IF NOT EXISTS `e-book_square` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `e-book_square`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulo`
--

CREATE TABLE `capitulo` (
  `ID_capitulo` int(11) NOT NULL,
  `obra_FK` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `restricao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `IDCat` int(11) NOT NULL,
  `categoriaCat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`IDCat`, `categoriaCat`) VALUES
(2, 'Acao'),
(3, 'Aventura'),
(4, 'Terror'),
(5, 'Fantasia'),
(6, 'Humor'),
(7, 'Ficcao'),
(8, 'Romance'),
(9, 'Conto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_da_obra`
--

CREATE TABLE `categoria_da_obra` (
  `IDCatObr` int(11) NOT NULL,
  `IDObraFK` int(11) NOT NULL,
  `IDCatFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria_da_obra`
--

INSERT INTO `categoria_da_obra` (`IDCatObr`, `IDObraFK`, `IDCatFK`) VALUES
(11, 24, 3),
(9, 24, 6),
(10, 24, 9),
(12, 25, 6),
(13, 29, 2),
(14, 29, 3),
(15, 29, 4),
(16, 29, 5),
(17, 29, 6),
(18, 29, 7),
(19, 29, 8),
(20, 29, 9),
(21, 30, 2),
(22, 30, 3),
(23, 30, 4),
(24, 30, 5),
(25, 30, 6),
(26, 30, 7),
(27, 30, 8),
(28, 30, 9),
(29, 31, 4),
(30, 31, 7),
(31, 32, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `ID_comentario` int(11) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `conteudo` varchar(500) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL,
  `spoiler` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE `likes` (
  `ID_likes` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `deslikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE `obra` (
  `ID_obra` int(11) NOT NULL,
  `nome_obra` varchar(105) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `descricao` varchar(1500) NOT NULL,
  `etaria` varchar(30) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`ID_obra`, `nome_obra`, `user_FK`, `descricao`, `etaria`, `rank`) VALUES
(9, 'The remember', 37, 'This fictional story is independent art', '', 0),
(24, 'The Strongest jaguar', 41, 'This is a Jaguar&#039;s history', 'Livre', 0),
(25, 'The Horse is traveling', 29, 'A crazy history', 'Adolescente', 0),
(26, 'bajhvdFAW', 29, 'ukryukru', 'Adolescente', 0),
(27, 'homem de ferro', 29, 'nada a declarar', 'Adolescente', 0),
(28, 'o em um milh&atilde;o', 29, 'chulapada ', 'Livre', 0),
(29, 'charlat&atilde;o utfc', 29, 'velvqkrfvqebrqlerbwe', 'Adulto', 0),
(30, 'Teste final', 29, 'testando 3,2,1', 'Adolescente', 0),
(31, 'sifudias', 29, 'aergasethsrthdrt', 'Adulto', 0),
(32, 'xcbzxbx', 29, 'fbzvxcbzcvb', 'Adolescente', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguir`
--

CREATE TABLE `seguir` (
  `ID_seguir` int(11) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `seguidor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `seguir`
--

INSERT INTO `seguir` (`ID_seguir`, `user_FK`, `seguidor`) VALUES
(1, 37, 29),
(23, 29, 37),
(31, 29, 41),
(32, 37, 41);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_user` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `banner` varchar(150) NOT NULL,
  `rank` int(11) NOT NULL,
  `descricao` varchar(1500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `senha` varchar(255) NOT NULL,
  `data_cad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_user`, `nome`, `codigo`, `email`, `foto`, `banner`, `rank`, `descricao`, `status`, `senha`, `data_cad`) VALUES
(29, 'Ratsel', '@sifudiasnaomais77', 'ratsel00h@gmail.com', 'b0119412b863f297fe9c66eff8c1f957bannergifwpp.gif', 'b9a7a82fbe64b4dad9021945ece7aa25VRChat_1920x1080_2021-12-23_05-32-33.101.png', 0, 'Quando dizem que a primeira impress&atilde;o &eacute; a que fica, est&atilde;o dizendo a mais pura verdade! O seu perfil &eacute; a sua porta de entrada nas redes sociais, ent&atilde;o cuide bem dele e deixe-o bem atrativo para os seus visitantes! Frases para perfil s&atilde;o muito &uacute;teis na hora de fazer um resumo sobre si mesmo na sua conta online.', 0, '$2y$10$t7j1OMVjwDWq04Cdf8wPkOXmKhMARj2Rr/hecp/wUV4mamuws5ERu', '2022-11-19'),
(37, 'Katsurazura', '@katsurazura170', 'ebooksquare.tcc@gmail.com', 'a72570cc71f7e91dfb77a253c11888c3profilegin.jpg', '2433b360643f09393ba0ebb426365450bannerpri.gif', 0, 'Descri&ccedil;&atilde;o &eacute; o texto que cont&eacute;m informa&ccedil;&otilde;es detalhadas sobre as caracter&iacute;sticas de algo ou algu&eacute;m. Assim, ela possibilita a pessoa que a l&ecirc; ou a ouve imaginar com facilidade o que est&aacute; sendo descrito - objetos, lugares, acontecimentos ou pessoas, por exemplo. A descri&ccedil;&atilde;o pode contemplar aquilo que vemos - que s&atilde;o as caracter&iacute;sticas f&iacute;sicas', 0, '$2y$10$0sLGvB2mphjI.6foQeUXwOaAgxxc30wJ0TSL/9yE89Sg5mb4KVGva', '2022-11-21'),
(41, 'Mohamed', '@mohamed', 'Manito@gmail.com', '73cdf2af494fc7373e8ae89ed8c36ffa5ac0f5da1e00008e0b7b048e.jpeg', '27da3da33cb23e11a1ca3cbd27bca779reading.png', 0, '', 0, '$2y$10$7uMp6lY.48ppExHc9xj4nOiAzXZ0Gekd.tVPRljjm4yrBwJmt8tAi', '2022-12-07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`ID_capitulo`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IDCat`);

--
-- Índices para tabela `categoria_da_obra`
--
ALTER TABLE `categoria_da_obra`
  ADD PRIMARY KEY (`IDCatObr`),
  ADD KEY `IDObraFK` (`IDObraFK`,`IDCatFK`),
  ADD KEY `categoria_da_obra_ibfk_1` (`IDCatFK`);

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`ID_comentario`),
  ADD KEY `user_FK` (`user_FK`);

--
-- Índices para tabela `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`ID_obra`),
  ADD KEY `user_FK` (`user_FK`);

--
-- Índices para tabela `seguir`
--
ALTER TABLE `seguir`
  ADD PRIMARY KEY (`ID_seguir`),
  ADD KEY `user_FK` (`user_FK`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `ID_capitulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IDCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `categoria_da_obra`
--
ALTER TABLE `categoria_da_obra`
  MODIFY `IDCatObr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `ID_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `seguir`
--
ALTER TABLE `seguir`
  MODIFY `ID_seguir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `categoria_da_obra`
--
ALTER TABLE `categoria_da_obra`
  ADD CONSTRAINT `categoria_da_obra_ibfk_1` FOREIGN KEY (`IDCatFK`) REFERENCES `categoria` (`IDCAT`),
  ADD CONSTRAINT `categoria_da_obra_ibfk_2` FOREIGN KEY (`IDObraFK`) REFERENCES `obra` (`ID_obra`);

--
-- Limitadores para a tabela `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_ibfk_1` FOREIGN KEY (`user_FK`) REFERENCES `usuario` (`ID_user`);

--
-- Limitadores para a tabela `seguir`
--
ALTER TABLE `seguir`
  ADD CONSTRAINT `seguir_ibfk_1` FOREIGN KEY (`user_FK`) REFERENCES `usuario` (`ID_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
