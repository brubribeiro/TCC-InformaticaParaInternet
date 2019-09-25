-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2018 às 00:36
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdaquarium`
--
CREATE DATABASE IF NOT EXISTS `bdaquarium` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdaquarium`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aplicativo`
--

CREATE TABLE `aplicativo` (
  `codapp` int(11) NOT NULL,
  `nomeapp` varchar(30) NOT NULL,
  `imgapp` varchar(100) NOT NULL,
  `descricaoapp` text NOT NULL,
  `plataforma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aplicativo`
--

INSERT INTO `aplicativo` (`codapp`, `nomeapp`, `imgapp`, `descricaoapp`, `plataforma`) VALUES
(2, '7 Minute Workout ', 'sevenapp.jpg', 'Tem como principal caracterÃ­stica oferecer sequÃªncias de exercÃ­cios diÃ¡rios para serem executados em sete minutos. SÃ£o mais de 200 atividades alocadas em sequÃªncias que visam potencializar os resultados, com contagem regressiva e indicaÃ§Ã£o do tempo de descanso entre cada um deles.', 'DisponÃ­vel para celulares com iOS, Android e Windows Phone.'),
(3, 'Nike Run Club', 'nikerun app.jpg', 'Um dos mais famosos entre os aplicativos para malhar, tendo um foco maior em corridas. Com ele Ã© possÃ­vel estipular metas para melhorar o desempenho, alÃ©m de fazer um mapeamento completo de cada atividade.', 'DisponÃ­vel para celulares com iOS, Android e Windows Phone.'),
(4, 'Pilates', 'pilates app.png', 'Auxilia na prÃ¡tica do Pilates, seja em casa ou durante uma viagem, por meio da indicaÃ§Ã£o de exercÃ­cios. Oferece ainda uma aula de aquecimento, o que Ã© essencial antes de iniciar a atividade.', 'DisponÃ­vel para celulares com iOS, Android e Windows Phone, mas somente em inglÃªs.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE `aulas` (
  `codaula` int(11) NOT NULL,
  `nomeaula` varchar(30) NOT NULL,
  `diasemana` varchar(30) NOT NULL,
  `horario` text NOT NULL,
  `professor` varchar(30) NOT NULL,
  `imgaula` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`codaula`, `nomeaula`, `diasemana`, `horario`, `professor`, `imgaula`) VALUES
(14, 'MusculaÃ§Ã£o', 'Segunda-feira', '07:00 Ã¡s 22:00', 'Professor', 'musculacao.png'),
(11, 'MusculaÃ§Ã£o', 'TerÃ§a-feira', '07:00 Ã¡s 22:00', 'Professor', 'musculacao.png'),
(12, 'MusculaÃ§Ã£o', 'Quinta-feira', '07:00 Ã¡s 22:00', 'Professor', 'musculacao.png'),
(13, 'MusculaÃ§Ã£o', 'Quarta-feira', '07:00 Ã¡s 22:00', 'Professor', 'musculacao.png'),
(15, 'MusculaÃ§Ã£o', 'Sexta-feira', '07:00 Ã¡s 22:00', 'Professor', 'musculacao.png'),
(16, 'MusculaÃ§Ã£o', 'Sabado', '08:00 Ã¡ 12:00', 'Professor', 'musculacao.png'),
(17, 'HidroginÃ¡stica', 'Segunda-feira', '07:10 Ã¡s 10:30 / 16:30 Ã¡s 21:30', 'Professor', 'fit_natacao-min.png'),
(18, 'HidroginÃ¡stica', 'TerÃ§a-feira', '07:10 Ã¡s 08:00 / 17:20 Ã¡s 20:40 ', 'Professor', 'fit_natacao-min.png'),
(19, 'HidroginÃ¡stica', 'Quarta-feira', '07:10 Ã¡s 10:30 / 16:30 Ã¡s 21:30', 'Professor', 'fit_natacao.png'),
(20, 'HidroginÃ¡stica', 'Quinta-feira', '17:20 Ã¡s 20:40', 'Professor', 'fit_natacao-min.png'),
(21, 'HidroginÃ¡stica', 'Sexta-feira', '07:10 Ã¡s 10:30 / 16:30 Ã¡s 21:30', 'Professor', 'fit_natacao-min.png'),
(22, 'HidroginÃ¡stica', 'Sabado', '08:00 Ã¡ 12:10', 'Professor', 'fit_natacao-min.png'),
(23, 'Ciclismo', 'Segunda-feira', '07:00 Ã¡s 22:00', 'Professor', 'fit-cycling-min.png'),
(24, 'Ciclismo', 'TerÃ§a-feira', '07:00 Ã¡s 22:00', 'Professor', 'fit-cycling-min.png'),
(25, 'Ciclismo', 'Quarta-feira', '07:00 Ã¡s 22:00', 'Professor', 'fit-cycling-min.png'),
(26, 'Ciclismo', 'Quinta-feira', '07:00 Ã¡s 22:00', 'Professor', 'fit-cycling-min.png'),
(27, 'Ciclismo', 'Sexta-feira', '07:00 Ã¡s 22:00', 'Professor', 'fit-cycling-min.png'),
(28, 'Ciclismo', 'Sabado', '08:00 Ã¡ 12:00', 'Professor', 'fit-cycling-min.png'),
(29, 'Yoga', 'Segunda-feira', '07:00 Ã¡ 12:00', 'Professor', 'fit-yoga-min.png'),
(30, 'Yoga', 'TerÃ§a-feira', '14:00 Ã¡s 17:00', 'Professor', 'fit-yoga-min.png'),
(31, 'Yoga', 'Quarta-feira', '17:00 Ã¡s 22:00', 'Professor', 'fit-yoga-min.png'),
(32, 'Yoga', 'Quinta-feira', '07:00 Ã¡ 12:00', 'Professor', 'fit-yoga-min.png'),
(33, 'Yoga', 'Sexta-feira', '07:00 Ã¡ 12:00', 'Professor', 'fit-yoga-min.png'),
(34, 'Yoga', 'Sabado', '08:00 Ã¡s 09:00', 'Professor', 'fit-yoga-min.png'),
(35, 'DanÃ§a', 'Segunda-feira', '17:00 Ã¡s 22:00', 'Professor', 'danca-min.png'),
(36, 'Luta', 'Segunda-feira', '14:00 Ã¡s 17:00', 'Professor', 'fit-boxing-min.png'),
(37, 'DanÃ§a', 'TerÃ§a-feira', '07:00 Ã¡ 12:00', 'Professor', 'danca-min.png'),
(38, 'Luta', 'TerÃ§a-feira', '17:00 Ã¡s 22:00', 'Professor', 'fit-boxing-min.png'),
(39, 'DanÃ§a', 'Quarta-feira', '14:00 Ã¡s 17:00', 'Professor', 'danca-min.png'),
(40, 'Luta', 'Quarta-feira', '07:00 Ã¡ 12:00', 'Professor', 'fit-boxing-min.png'),
(41, 'DanÃ§a', 'Quinta-feira', '17:00 Ã¡s 22:00', 'Professor', 'danca-min.png'),
(42, 'Luta', 'Quinta-feira', '14:00 Ã¡s 17:00', 'Professor', 'fit-boxing-min.png'),
(43, 'DanÃ§a', 'Sexta-feira', '07:00 Ã¡ 12:00', 'Professor', 'danca-min.png'),
(44, 'Luta', 'Sexta-feira', '17:00 Ã¡s 22:00', 'Professor', 'fit-boxing.png'),
(45, 'DanÃ§a', 'Sabado', '09:00 Ã¡s 10:00', 'Professor', 'danca-min.png'),
(46, 'Luta', 'Sabado', '10:00 Ã¡s 11:00', 'Professor', 'fit-boxing-min.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcli` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `codcontato` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `descricaoaula`
--

CREATE TABLE `descricaoaula` (
  `coddescricao` int(11) NOT NULL,
  `tituloaula` varchar(50) NOT NULL,
  `descricaoaula` text NOT NULL,
  `imagemaula` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `descricaoaula`
--

INSERT INTO `descricaoaula` (`coddescricao`, `tituloaula`, `descricaoaula`, `imagemaula`) VALUES
(18, 'MusculaÃ§Ã£o', 'A musculaÃ§Ã£o Ã© uma modalidade que estÃ¡ em alta no mercado fitness, com seus inÃºmeros benefÃ­cios para a saÃºde e qualidade de vida. Auxilia na condiÃ§Ã£o cardiorrespiratÃ³ria, resistÃªncia, aumento de massa magra, queima de calorias, bem estar fÃ­sico e mental.', 'musculacao-min.png'),
(19, 'HidroginÃ¡stica', 'Os exercÃ­cios praticados na aula de hidroginÃ¡stica melhoram os nÃ­veis de forÃ§a, desenvolvendo a musculatura do tronco e dos membros superiores e inferiores. Por ser uma atividade fÃ­sica praticada dentro da Ã¡gua, reduz os impactos musculares e articulares.', 'fit_natacao-min.png'),
(20, 'DanÃ§a', 'Para quem acha um tÃ©dio fazer sempre a mesma sequÃªncia de exercÃ­cios nos aparelhos da academia, uma boa opÃ§Ã£o para definir o corpo e ainda perder peso Ã© praticar a danÃ§a. AlÃ©m de tonificar o corpo, ajuda a reduzir o estresse e a ansiedade, melhora a autoestima e aumenta a capacidade sanguÃ­nea.', 'danca-min.png'),
(21, 'Luta', 'Por ser uma modalidade que exige disciplina tÃ¡tica, deve ser praticada em tatame para melhorar o condicionamento fÃ­sico, a forÃ§a e obter o melhor rendimento de acordo com o objetivo do seu treino. Ã‰ tambÃ©m excelente para o condicionamento cardiovascular, coordenaÃ§Ã£o motora, auxilia no emagrecimento e tambÃ©m aprimora a coragem e a perseveranÃ§a.', 'fit-boxing.jpg'),
(22, 'Yoga', 'Ã‰ uma prÃ¡tica que procura trabalhar o ser humano como um todo. Pela sua forma holÃ­stica de encarar a pessoa, o Yoga, Ã© uma prÃ¡tica com efeitos marcantes ao nÃ­vel do corpo, mas tambÃ©m da mente, das emoÃ§Ãµes, sendo uma prÃ¡tica que pode ter um efeito transformador em todos os aspectos da vida fÃ­sica e psicolÃ³gica.', 'fit-yoga-min.png'),
(23, 'Ciclismo', 'As aulas de ciclismo sÃ£o realizadas em uma bicicleta especializada para o uso. Sua principal fonte de energia vem do metabolismo aerÃ³bico, portanto Ã© excelente para melhorar o condicionamento cardiovascular e tambÃ©m auxilia no emagrecimento.', 'fit-cycling-min.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `codgaleria` int(11) NOT NULL,
  `nomeimg` varchar(100) NOT NULL,
  `imgaleria` varchar(100) NOT NULL,
  `dataimg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`codgaleria`, `nomeimg`, `imgaleria`, `dataimg`) VALUES
(15, 'foto1', 'FOTO1.jpg', '2018-06-30'),
(16, 'foto2', 'FOTO2.jpg', '2018-06-30'),
(17, 'foto3', 'foto3.jpg', '2018-06-30'),
(18, 'foto4', 'foto4.jpeg', '2018-06-30'),
(19, 'foto5', 'foto5.jpeg', '2018-06-30'),
(20, 'foto6', 'foto6.jpeg', '2018-06-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `codmatricula` int(11) NOT NULL,
  `codaula` int(11) NOT NULL,
  `codcli` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `codnoticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`codnoticia`, `titulo`, `data`, `texto`) VALUES
(2, 'dddddddddsfadsfads', '2018-04-20', 'teste'),
(5, 'teste', '2018-04-26', 'dafas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `imgficha` varchar(100) NOT NULL,
  `nomeusuario` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `telefone`, `celular`, `imgficha`, `nomeusuario`, `senha`, `tipo`) VALUES
(10, 'teste', 'teste', '3333-3333', '91234-4321', 'ficha010.png', 'teste', '2e6f9b0d5885b6010f9167787445617f553a735f', 'UsuÃ¡rio'),
(5, 'Anderson', 'anderson@gmail.com', '', '', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador'),
(17, 'aluno', 'aluno@', '9876-6787', '98765-3546', 'naodisponivel.jpg', 'aluno', '2e6f9b0d5885b6010f9167787445617f553a735f', 'UsuÃ¡rio'),
(18, 'Camila', 'camila@gmail.com', '4312-1233', '98473-1234', 'naodisponivel.jpg', 'camila', '2e6f9b0d5885b6010f9167787445617f553a735f', 'UsuÃ¡rio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplicativo`
--
ALTER TABLE `aplicativo`
  ADD PRIMARY KEY (`codapp`);

--
-- Indexes for table `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`codaula`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcli`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`codcontato`);

--
-- Indexes for table `descricaoaula`
--
ALTER TABLE `descricaoaula`
  ADD PRIMARY KEY (`coddescricao`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`codgaleria`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codmatricula`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codnoticia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplicativo`
--
ALTER TABLE `aplicativo`
  MODIFY `codapp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aulas`
--
ALTER TABLE `aulas`
  MODIFY `codaula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `codcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `descricaoaula`
--
ALTER TABLE `descricaoaula`
  MODIFY `coddescricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `codgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `codmatricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `codnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
