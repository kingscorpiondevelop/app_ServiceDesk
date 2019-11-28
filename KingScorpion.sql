--
-- Criando a Base de Dados
--

CREATE DATABASE `kingscorpion`

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE IF NOT EXISTS `chamados` (
  `protocolo` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Criando Chamados da tabela `chamados`
--

INSERT INTO `chamados` (`protocolo`, `id`, `titulo`, `categoria`, `descricao`) VALUES
(4, 1, 'teste', 'Rede', 'teste'),
(5, 1, 'teste2', 'Impressora', 'Teste2'),
(6, 1, 'eu aqui', 'Software', 'eu aqui'),
(7, 1, 'Gabriel', 'Impressora', 'Eu aqui'),
(8, 1, 'sou zika', 'Rede', 'Sou mesmo'),
(9, 1, 'ZUOU', 'Hardware', 'BRUNO TONTO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data` datetime DEFAULT NULL,
  `obs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Criando Usuario da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `email`, `data`, `obs`) VALUES
(2, 'teste@teste.com.br', '1234', 'teste@teste.com.br', '2019-05-18 13:16:28', NULL);
COMMIT;
