-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2017 às 02:44
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estetica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaofacial`
--

CREATE TABLE `avaliacaofacial` (
  `codAv` int(11) NOT NULL,
  `av1` tinyint(4) NOT NULL,
  `av2` tinyint(4) NOT NULL,
  `av3` tinyint(3) NOT NULL,
  `av4` tinyint(4) NOT NULL,
  `av5` tinyint(3) NOT NULL,
  `av6` tinyint(5) NOT NULL,
  `av7` tinyint(1) DEFAULT NULL,
  `av8` varchar(30) DEFAULT NULL,
  `av9` tinyint(1) DEFAULT NULL,
  `av10` varchar(30) DEFAULT NULL,
  `av11` tinyint(1) DEFAULT NULL,
  `av12` varchar(30) DEFAULT NULL,
  `av13` tinyint(1) DEFAULT NULL,
  `av14` varchar(30) DEFAULT NULL,
  `av15` tinyint(1) DEFAULT NULL,
  `av16` varchar(30) DEFAULT NULL,
  `av17` tinyint(5) DEFAULT NULL,
  `av18` tinyint(5) NOT NULL,
  `av19` tinyint(1) DEFAULT NULL,
  `av20` tinyint(1) DEFAULT NULL,
  `av21` tinyint(1) DEFAULT NULL,
  `av22` tinyint(1) DEFAULT NULL,
  `av23` tinyint(1) DEFAULT NULL,
  `av24` varchar(30) DEFAULT NULL,
  `av25` tinyint(1) DEFAULT NULL,
  `av26` tinyint(1) DEFAULT NULL,
  `av27` tinyint(1) DEFAULT NULL,
  `av28` tinyint(1) DEFAULT NULL,
  `av29` tinyint(1) DEFAULT NULL,
  `av30` tinyint(1) DEFAULT NULL,
  `av31` tinyint(1) DEFAULT NULL,
  `av32` tinyint(1) DEFAULT NULL,
  `av33` tinyint(1) DEFAULT NULL,
  `av34` tinyint(1) DEFAULT NULL,
  `av35` tinyint(1) DEFAULT NULL,
  `av36` tinyint(1) DEFAULT NULL,
  `av37` tinyint(1) DEFAULT NULL,
  `av38` tinyint(1) DEFAULT NULL,
  `av39` tinyint(1) DEFAULT NULL,
  `av40` tinyint(1) DEFAULT NULL,
  `av41` tinyint(1) DEFAULT NULL,
  `av42` tinyint(1) DEFAULT NULL,
  `av43` tinyint(1) DEFAULT NULL,
  `av44` tinyint(1) DEFAULT NULL,
  `av45` tinyint(1) DEFAULT NULL,
  `av46` tinyint(1) DEFAULT NULL,
  `av47` tinyint(1) DEFAULT NULL,
  `av48` tinyint(1) DEFAULT NULL,
  `av49` tinyint(1) DEFAULT NULL,
  `av50` tinyint(1) DEFAULT NULL,
  `av51` tinyint(1) DEFAULT NULL,
  `av52` tinyint(1) DEFAULT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacaofacial`
--

INSERT INTO `avaliacaofacial` (`codAv`, `av1`, `av2`, `av3`, `av4`, `av5`, `av6`, `av7`, `av8`, `av9`, `av10`, `av11`, `av12`, `av13`, `av14`, `av15`, `av16`, `av17`, `av18`, `av19`, `av20`, `av21`, `av22`, `av23`, `av24`, `av25`, `av26`, `av27`, `av28`, `av29`, `av30`, `av31`, `av32`, `av33`, `av34`, `av35`, `av36`, `av37`, `av38`, `av39`, `av40`, `av41`, `av42`, `av43`, `av44`, `av45`, `av46`, `av47`, `av48`, `av49`, `av50`, `av51`, `av52`, `codCliente`) VALUES
(3, 1, 3, 2, 1, 1, 1, 1, 'área x', 1, 'área y', 1, 'área z', 1, 'área w', 1, 'área m', 2, 1, 1, 1, 1, 1, 1, 'melanose tipo x', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 29),
(5, 0, 2, 1, 3, 1, 0, 1, 'local a ', 1, 'localb', 1, 'localc', 1, 'local d', NULL, '', 2, 0, 1, 1, 1, 1, 1, 'melanose tipo x', 1, 1, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, 1, 1, NULL, NULL, 1, NULL, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, 3, 1, 2, 31),
(6, 0, 2, 1, 3, 1, 1, NULL, 'ffffffff', 1, 'ddddddd', 1, 'hhhhhh', 1, 'jjjjjjjj', 1, 'eeeeeee', 3, 1, 1, 1, 1, NULL, 1, 'ttttttttt', 1, NULL, 1, 1, 1, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, 1, NULL, NULL, NULL, 1, 2, NULL, 0, 32),
(7, 0, 3, 2, 0, 0, 2, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 1, NULL, 1, NULL, NULL, NULL, 1, 1, NULL, 1, NULL, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 3, 33),
(8, 0, 2, 1, 3, 0, 4, 1, 'fffffff', 1, 'ggggg', NULL, NULL, NULL, NULL, NULL, NULL, 2, 4, 1, NULL, 1, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, 1, 1, NULL, NULL, 34),
(9, 0, 2, 1, 1, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, 1, NULL, 1, 1, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, 1, NULL, 1, NULL, 1, NULL, 1, 1, 1, NULL, 1, 1, NULL, 1, NULL, 1, 3, 1, 1, 35),
(10, 0, 2, 0, 1, 0, 2, 1, 'safdsf', 1, 'refdgfd', 1, 'fssd', 1, 'fssd', NULL, NULL, 2, 2, NULL, 1, 1, NULL, NULL, NULL, 1, 1, NULL, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, NULL, NULL, 1, 1, NULL, 1, NULL, 1, NULL, NULL, 1, NULL, 1, 2, 1, 2, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `nome` varchar(50) NOT NULL,
  `codCidade` int(11) NOT NULL,
  `cep` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`nome`, `codCidade`, `cep`) VALUES
('Passo Fundo', 5, 99010001),
('Protásio Alves', 6, 95345000),
('Casca', 7, 99999999),
('Marau', 8, 11111111),
('Caxias', 9, 22222222),
('Bento Gonçalves', 10, 33333333),
('Veranopolis', 11, 44444444),
('Vila Flores', 12, 55555555),
('André da Roxa', 13, 66666666),
('Guaporé', 15, 99999988);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codCliente` int(11) NOT NULL,
  `dataNasc` date NOT NULL,
  `fone` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codCidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codCliente`, `dataNasc`, `fone`, `nome`, `dataCadastro`, `codCidade`) VALUES
(29, '1997-09-24', '(54)999173035', 'Rafael Ramos', '2017-11-18 17:03:26', 5),
(31, '2000-02-02', '88888888', 'Rita Salette', '2017-11-19 23:41:41', 6),
(32, '1999-01-01', '99999999', 'Cassiele', '2017-11-20 01:23:23', 11),
(33, '1993-03-03', '999999988', 'Cassiano', '2017-11-20 01:27:37', 15),
(34, '1991-01-01', '9999999', 'Joel', '2017-11-20 01:30:46', 8),
(35, '1777-07-07', '77777777', 'Giceli', '2017-11-20 01:33:20', 10),
(36, '1333-03-31', '666666666', 'Clesio', '2017-11-20 01:36:20', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `codConsulta` int(11) NOT NULL,
  `dataConsulta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` tinyint(1) NOT NULL,
  `descricao` text NOT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`codConsulta`, `dataConsulta`, `tipo`, `descricao`, `codCliente`) VALUES
(28, '2017-11-18 16:05:16', 0, 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 29),
(29, '2017-11-18 16:06:37', 0, 'É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de \"Conteúdo aqui, conteúdo aqui\", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por \'lorem ipsum\' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).\r\n\r\n', 29),
(30, '2017-11-19 21:46:53', 0, 'Quisque a massa nisl. Etiam laoreet at metus eleifend laoreet. Ut fringilla placerat lacinia. Nulla ac finibus nulla, venenatis sollicitudin ipsum. Quisque lobortis neque eu erat cursus, et mollis libero euismod. Mauris vestibulum mi odio, non iaculis neque dignissim in. Nunc sit amet turpis sit amet enim scelerisque ultricies quis ac justo.', 31),
(31, '2017-11-19 21:47:11', 0, 'Donec ut dui sed dui rutrum ultricies vitae iaculis dui. Etiam quis diam nec risus porta euismod. Aenean vel neque sit amet lorem vestibulum consectetur. Suspendisse velit neque, gravida in tempus eget, faucibus quis libero. Vivamus dictum sodales magna ut rhoncus. Vestibulum vel mauris et ligula pellentesque dictum venenatis vel enim. Suspendisse vel mi facilisis nulla ornare ultrices a eget eros. Quisque cursus auctor sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean bibendum id est nec lacinia. Suspendisse et condimentum risus, quis bibendum sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 31),
(32, '2017-11-19 23:38:53', 0, 'Donec ac sodales elit, vel scelerisque turpis. Integer elementum purus ac consequat congue. Ut facilisis velit ut nisl venenatis, vitae elementum leo porttitor. Suspendisse tempor mauris ante, a volutpat dui ornare quis. Sed non luctus risus. Vivamus elit neque, molestie quis rhoncus sit amet, scelerisque vitae elit. Etiam semper massa nibh, a tempus odio volutpat nec. Maecenas ullamcorper enim ac nisl feugiat sodales ut nec risus. Integer eu dui nibh. Quisque vitae placerat nisi. Donec consequat, sapien eget ornare pulvinar, metus dolor mattis mauris, et tristique massa elit et odio. Maecenas commodo, nisl sed lacinia malesuada, ex lectus finibus quam, a posuere libero risus porta nisl. Nulla metus nunc, fermentum quis quam ac, vehicula convallis ligula. Aenean et tellus varius, ultrices odio ac, commodo urna. Nulla facilisi.', 33),
(33, '2017-11-19 23:39:11', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum et orci vel iaculis. Maecenas arcu nibh, congue quis blandit in, vehicula at quam. Sed vehicula mattis ligula posuere varius. Praesent semper tincidunt urna eu blandit. Pellentesque at venenatis lectus, non vestibulum ante. Integer ultrices at lectus eget porta. Praesent massa velit, congue id hendrerit sit amet, pharetra ut lorem. Cras nec turpis auctor, dignissim ipsum nec, porttitor tellus. Fusce feugiat fermentum pellentesque. Praesent non laoreet nulla, eu mattis purus. Sed lobortis dolor ex, eget ultrices massa venenatis at. Maecenas laoreet scelerisque diam eu pretium. Duis tempus urna urna, at laoreet leo malesuada id. Etiam ultrices pulvinar elit a mattis.', 35),
(34, '2017-11-19 23:39:21', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum et orci vel iaculis. Maecenas arcu nibh, congue quis blandit in, vehicula at quam. Sed vehicula mattis ligula posuere varius. Praesent semper tincidunt urna eu blandit. Pellentesque at venenatis lectus, non vestibulum ante. Integer ultrices at lectus eget porta. Praesent massa velit, congue id hendrerit sit amet, pharetra ut lorem. Cras nec turpis auctor, dignissim ipsum nec, porttitor tellus. Fusce feugiat fermentum pellentesque. Praesent non laoreet nulla, eu mattis purus. Sed lobortis dolor ex, eget ultrices massa venenatis at. Maecenas laoreet scelerisque diam eu pretium. Duis tempus urna urna, at laoreet leo malesuada id. Etiam ultrices pulvinar elit a mattis.', 34),
(35, '2017-11-19 23:39:43', 0, 'Quisque a massa nisl. Etiam laoreet at metus eleifend laoreet. Ut fringilla placerat lacinia. Nulla ac finibus nulla, venenatis sollicitudin ipsum. Quisque lobortis neque eu erat cursus, et mollis libero euismod. Mauris vestibulum mi odio, non iaculis neque dignissim in. Nunc sit amet turpis sit amet enim scelerisque ultricies quis ac justo.', 35),
(36, '2017-11-19 23:40:02', 0, 'Quisque a massa nisl. Etiam laoreet at metus eleifend laoreet. Ut fringilla placerat lacinia. Nulla ac finibus nulla, venenatis sollicitudin ipsum. Quisque lobortis neque eu erat cursus, et mollis libero euismod. Mauris vestibulum mi odio, non iaculis neque dignissim in. Nunc sit amet turpis sit amet enim scelerisque ultricies quis ac justo.', 31),
(37, '2017-11-19 23:40:27', 0, 'Quisque a massa nisl. Etiam laoreet at metus eleifend laoreet. Ut fringilla placerat lacinia. Nulla ac finibus nulla, venenatis sollicitudin ipsum. Quisque lobortis neque eu erat cursus, et mollis libero euismod. Mauris vestibulum mi odio, non iaculis neque dignissim in. Nunc sit amet turpis sit amet enim scelerisque ultricies quis ac justo.', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitosdiarios`
--

CREATE TABLE `habitosdiarios` (
  `codHa` int(11) NOT NULL,
  `ha1` tinyint(1) NOT NULL,
  `ha2` varchar(50) DEFAULT NULL,
  `ha3` tinyint(1) NOT NULL,
  `ha4` varchar(50) DEFAULT NULL,
  `ha5` tinyint(1) NOT NULL,
  `ha6` tinyint(1) NOT NULL,
  `ha7` int(30) DEFAULT NULL,
  `ha8` tinyint(1) NOT NULL,
  `ha9` tinyint(1) NOT NULL,
  `ha10` tinyint(1) NOT NULL,
  `ha11` varchar(50) DEFAULT NULL,
  `ha12` tinyint(1) NOT NULL,
  `ha13` tinyint(1) NOT NULL,
  `ha14` varchar(50) DEFAULT NULL,
  `ha15` tinyint(1) NOT NULL,
  `ha16` time DEFAULT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `habitosdiarios`
--

INSERT INTO `habitosdiarios` (`codHa`, `ha1`, `ha2`, `ha3`, `ha4`, `ha5`, `ha6`, `ha7`, `ha8`, `ha9`, `ha10`, `ha11`, `ha12`, `ha13`, `ha14`, `ha15`, `ha16`, `codCliente`) VALUES
(1, 1, 'alergia x', 1, 'tratamento x', 0, 1, 20000, 0, 0, 1, 'cosmético x', 0, 1, 'exercício x ', 2, '08:00:00', 29),
(3, 1, 'alergia tibo x', 1, 'tratamento tipo y', 0, 1, 2000, 0, 0, 0, NULL, 1, 1, 'atividade y x e z', 1, '08:00:00', 31),
(4, 1, 'alergia 11', 0, NULL, 1, 1, 3000, 0, 1, 1, 'cosmetico zzz', 1, 0, NULL, 1, '07:00:00', 32),
(5, 0, NULL, 0, NULL, 0, 0, NULL, 0, 1, 0, NULL, 0, 0, NULL, 2, '07:07:00', 33),
(6, 0, NULL, 0, NULL, 0, 0, NULL, 0, 0, 0, NULL, 0, 0, NULL, 2, '08:00:00', 34),
(7, 0, NULL, 0, NULL, 1, 0, NULL, 1, 0, 0, NULL, 1, 1, 'ttttttttttt', 2, '08:08:00', 35),
(8, 0, NULL, 1, 'ddddd', 0, 1, 2222, 1, 0, 1, 'dddddd', 0, 0, NULL, 1, '06:00:00', 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicoclinico`
--

CREATE TABLE `historicoclinico` (
  `codHi` int(11) NOT NULL,
  `hi1` tinyint(1) NOT NULL,
  `hi2` tinyint(1) NOT NULL,
  `hi3` tinyint(1) NOT NULL,
  `hi4` tinyint(1) NOT NULL,
  `hi5` tinyint(1) NOT NULL,
  `hi6` tinyint(1) NOT NULL,
  `hi7` tinyint(1) NOT NULL,
  `hi8` tinyint(1) NOT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historicoclinico`
--

INSERT INTO `historicoclinico` (`codHi`, `hi1`, `hi2`, `hi3`, `hi4`, `hi5`, `hi6`, `hi7`, `hi8`, `codCliente`) VALUES
(12, 1, 0, 1, 0, 1, 0, 1, 0, 29),
(14, 1, 0, 1, 0, 1, 0, 1, 0, 31),
(15, 1, 0, 1, 0, 0, 0, 1, 0, 32),
(16, 0, 1, 1, 0, 0, 1, 1, 0, 33),
(17, 0, 1, 0, 1, 0, 1, 0, 1, 34),
(18, 1, 1, 1, 1, 0, 0, 0, 0, 35),
(19, 1, 1, 0, 1, 0, 1, 0, 1, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tmedicinaestetica`
--

CREATE TABLE `tmedicinaestetica` (
  `codMe` int(11) NOT NULL,
  `me1` tinyint(1) NOT NULL,
  `me2` tinyint(1) NOT NULL,
  `me3` tinyint(1) NOT NULL,
  `me4` varchar(30) DEFAULT NULL,
  `me5` tinyint(1) NOT NULL,
  `me6` varchar(30) DEFAULT NULL,
  `codCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tmedicinaestetica`
--

INSERT INTO `tmedicinaestetica` (`codMe`, `me1`, `me2`, `me3`, `me4`, `me5`, `me6`, `codCliente`) VALUES
(4, 1, 0, 1, 'tratamento x', 1, 'cirurgia x', 29),
(6, 0, 1, 1, 'tratamento x', 1, 'cirurgia x', 31),
(7, 1, 0, 0, NULL, 0, NULL, 32),
(8, 1, 1, 0, NULL, 0, NULL, 33),
(9, 1, 1, 1, 'ddsd', 1, 'dddd', 34),
(10, 1, 1, 0, NULL, 1, 'hhhhhhhh', 35),
(11, 0, 1, 0, NULL, 0, NULL, 36);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codUsuario` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codUsuario`, `login`, `senha`) VALUES
(3, 'admin', '$2y$10$LgT3msljBgUQ0KSETGQFFO0ipQm8dFwsDEO7qnfeFqQMVtsv42HO6'),
(4, 'admin2', '$2y$10$xp55zP8WyT.JC3RGdyskGejq1Qcale2btGJdF/mfZcrT1uLsPLLUK'),
(5, 'admin3', '$2y$10$buVEj7Rhe6EZqzKjKWca7..hgUBrW/rEpb3k70wh4AU8RGMnxJ7hG'),
(6, 'admin4', '$2y$10$VCpQLyOgdnQlm0nR5LAAMOYxhGR.S0/QoUY01ZCHJfkm.LxkDyqqS'),
(7, 'admin5', '$2y$10$bApeYfj3J520PwWcy6y5s.6j/smf7IlD44QE0eEOKOAGum.Jr8N/u'),
(8, 'admin6', '$2y$10$pCJlFsBLyEO8KIjM3YaH1O1tTRkDseUyPAzxiobpxcfuOfU1sbdw6'),
(9, 'admin7', '$2y$10$XiCFYh0pV0adDkIN/pepaueWxGS5jMeTEdITKW4QJDZH6sXWQzdm6'),
(10, 'admin8', '$2y$10$EwLYLfaVmXZgHfqriFUsE.sN1edjGLKKlqdgv7M.GiUC6x0XJFXdq'),
(11, 'admin9', '$2y$10$iEPNzwsaME5vqo2Rzmne6OonJHUJDClHuQldWbTwG2E3TTisFSgRm'),
(12, 'admin10', '$2y$10$hYmKqLwevPftBmD8A/xZdOZnxrS/Q4WAUnqTnqzmDLMJmg3rKHJ7u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacaofacial`
--
ALTER TABLE `avaliacaofacial`
  ADD PRIMARY KEY (`codAv`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`codCidade`),
  ADD UNIQUE KEY `cep` (`cep`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codCliente`),
  ADD KEY `codCidade` (`codCidade`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`codConsulta`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `habitosdiarios`
--
ALTER TABLE `habitosdiarios`
  ADD PRIMARY KEY (`codHa`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `historicoclinico`
--
ALTER TABLE `historicoclinico`
  ADD PRIMARY KEY (`codHi`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `tmedicinaestetica`
--
ALTER TABLE `tmedicinaestetica`
  ADD PRIMARY KEY (`codMe`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacaofacial`
--
ALTER TABLE `avaliacaofacial`
  MODIFY `codAv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `codCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `codConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `habitosdiarios`
--
ALTER TABLE `habitosdiarios`
  MODIFY `codHa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `historicoclinico`
--
ALTER TABLE `historicoclinico`
  MODIFY `codHi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tmedicinaestetica`
--
ALTER TABLE `tmedicinaestetica`
  MODIFY `codMe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacaofacial`
--
ALTER TABLE `avaliacaofacial`
  ADD CONSTRAINT `avaliacaofacial_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codCliente`);

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`codCidade`) REFERENCES `cidade` (`codCidade`);

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codCliente`);

--
-- Limitadores para a tabela `habitosdiarios`
--
ALTER TABLE `habitosdiarios`
  ADD CONSTRAINT `habitosdiarios_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codCliente`);

--
-- Limitadores para a tabela `historicoclinico`
--
ALTER TABLE `historicoclinico`
  ADD CONSTRAINT `historicoclinico_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codCliente`);

--
-- Limitadores para a tabela `tmedicinaestetica`
--
ALTER TABLE `tmedicinaestetica`
  ADD CONSTRAINT `tmedicinaestetica_ibfk_1` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
