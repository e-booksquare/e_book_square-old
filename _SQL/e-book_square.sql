-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2023 às 15:54
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulo`
--

CREATE TABLE `capitulo` (
  `ID_capitulo` int(11) NOT NULL,
  `obra_FK` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `restricao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE `likes` (
  `ID_likes` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `deslikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

CREATE TABLE `obra` (
  `ID_obra` int(11) NOT NULL,
  `nome_obra` varchar(105) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `descricao` varchar(1500) NOT NULL,
  `rank` int(11) NOT NULL,
  `generos` enum('Terror','Ação','Aventura','Suspense','Humor','Romance','Mistério','Fantasia','Fanfic','Drama','Clássicos','Conto','Crime','Pós-apocalíptico','Poesia','Infantil','Erótico','Sobre mim','Paranormal','Aliens','LGBT+','Auto-ajuda') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `obra`
--

INSERT INTO `obra` (`ID_obra`, `nome_obra`, `user_FK`, `descricao`, `rank`, `generos`) VALUES
(9, 'The remember', 37, 'This fictional story is independent art', 0, 'Pós-apocalíptico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguir`
--

CREATE TABLE `seguir` (
  `ID_seguir` int(11) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `seguidor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `data_cad` date NOT NULL,
  `discord` varchar(100) NOT NULL,
  `codigo_discord` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `pix` varchar(250) NOT NULL,
  `tel_contato_what` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_user`, `nome`, `codigo`, `email`, `foto`, `banner`, `rank`, `descricao`, `status`, `senha`, `data_cad`, `discord`, `codigo_discord`, `facebook`, `pix`, `tel_contato_what`) VALUES
(29, 'Ratsel', '@sifudiasnaomais77', 'ratsel00h@gmail.com', 'b0119412b863f297fe9c66eff8c1f957bannergifwpp.gif', 'b9a7a82fbe64b4dad9021945ece7aa25VRChat_1920x1080_2021-12-23_05-32-33.101.png', 0, 'Quando dizem que a primeira impress&atilde;o &eacute; a que fica, est&atilde;o dizendo a mais pura verdade! O seu perfil &eacute; a sua porta de entrada nas redes sociais, ent&atilde;o cuide bem dele e deixe-o bem atrativo para os seus visitantes! Frases para perfil s&atilde;o muito &uacute;teis na hora de fazer um resumo sobre si mesmo na sua conta online.', 0, '$2y$10$t7j1OMVjwDWq04Cdf8wPkOXmKhMARj2Rr/hecp/wUV4mamuws5ERu', '2022-11-19', '', 0, '', '', 0),
(37, 'Katsurazura', '@katsurazura170', 'ebooksquare.tcc@gmail.com', 'a72570cc71f7e91dfb77a253c11888c3profilegin.jpg', '2433b360643f09393ba0ebb426365450bannerpri.gif', 0, 'Descri&ccedil;&atilde;o &eacute; o texto que cont&eacute;m informa&ccedil;&otilde;es detalhadas sobre as caracter&iacute;sticas de algo ou algu&eacute;m. Assim, ela possibilita a pessoa que a l&ecirc; ou a ouve imaginar com facilidade o que est&aacute; sendo descrito - objetos, lugares, acontecimentos ou pessoas, por exemplo. A descri&ccedil;&atilde;o pode contemplar aquilo que vemos - que s&atilde;o as caracter&iacute;sticas f&iacute;sicas', 0, '$2y$10$0sLGvB2mphjI.6foQeUXwOaAgxxc30wJ0TSL/9yE89Sg5mb4KVGva', '2022-11-21', '', 0, '', '', 0),
(41, 'Mohamed', '@mohamed', 'Manito@gmail.com', '73cdf2af494fc7373e8ae89ed8c36ffa5ac0f5da1e00008e0b7b048e.jpeg', '27da3da33cb23e11a1ca3cbd27bca779reading.png', 0, '', 0, '$2y$10$7uMp6lY.48ppExHc9xj4nOiAzXZ0Gekd.tVPRljjm4yrBwJmt8tAi', '2022-12-07', '', 0, '', '', 0),
(42, 'Maicon Junior', '@maiconjunior', 'maicon997476957@gmail.com', '8e91ba1d40321ecf82bd964fbf0227bdAct-2-4K-6-1.jpg', '25ce0f47247ba319f3ade971af1f87d8sarah-childs-kindred-repaint3.jpg', 0, 'hello boys, my name is Maicon Junior, i like potatos and books', 0, '$2y$10$EKIj8l9M2pajIKwK71bDquFOzg0fkpMpWHc4R2JFPOhYeWT06FBYC', '2022-12-17', 'Maicon Junior', 7941, 'Maicon Junior', '+55 18 997476957', 18997476957);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`ID_capitulo`);

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
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `obra`
--
ALTER TABLE `obra`
  MODIFY `ID_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `seguir`
--
ALTER TABLE `seguir`
  MODIFY `ID_seguir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restrições para despejos de tabelas
--

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
