-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 24/10/2014 às 13:54
-- Versão do servidor: 5.5.37-MariaDB-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `sgga2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `fantasia` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `fone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Fazendo dump de dados para tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `fantasia`, `cnpj`, `uf`, `cidade`, `bairro`, `rua`, `complemento`, `fone`, `email`) VALUES
(1, 'F. DE A. SOUSA E COMERCIO', 'UNIÃƒO MAKER DESENVOLVIMENTOS', '09.233.280/0001-52', 'CE', 'Crateus', 'Centro', 'Rua A 17', 'Centro', '8896870606', ''),
(27, 'well', 're', '123', 'sp', 'ib', 's', 'sss', 'sdsd', 'dds', 'wellington@infomaxweb.com.br'),
(28, 'Almir Munhoz', 'Provedor AMJ ServiÃ§os Online', '11279738000156', 'SP', 'SÃ£o Paulo', 'Jardim Santa FÃ©', 'Rua Floriano Alves da Costa, 63', 'casa', '1130421005', 'almir@amjservicos.com.br'),
(29, 'edmar santos', 'speedmax', '02579056504', 'ba', 'salvador', 'Engenho Velho da   Federacao', 'Vila pedra', 'casa', '7186227550', 'jna.edmar@hotmail.com'),
(30, 'GBCOM COM E SER TELECON LTDA', 'GBCOM', '11535870000181', 'RJ', 'RIO DE JANEIRO', 'GUARATIBA', 'ISALTIO TINOCO 25', 'FRENTE ESPETÃƒO', '2177000788', 'brunocemeru@gmail.com'),
(31, 'Diego Aparecido', 'adnetworks', '999999999-099', 'Ms', 'Mundo Novo', 'SÃ£o Jorge', 'Filinto Mulher', 'nenhum', '6792022473', 'diegoinfoserve@gmail.com'),
(32, 'eguinaldo ailva', 'rede banda larga', '15679341883', 'sp', 'carapicuiba', 'jardim maria beatriz', 'egilio vitorrelo 210', 'sede', '41675176', 'naldo864@hotmail.com'),
(33, 'Angelino Monteiro', 'localtec.net', '0', 'rs', 'Alegrete', 'centro', 'andradas, 001', '-', '5596620458', 'a-s-m@bol.com.br'),
(34, 'Angelino Monteiro', 'localtec.net', '0', 'rs', 'Alegrete', 'centro', 'andradas, 001', '-', '5596620458', 'a-s-m@bol.com.br'),
(35, 'multinet informatica ltda', 'bazar sempre util', '12646700000137', 'RS', 'NOVO HAMBURGO', 'diehl', 'arthur momberger 477', 'predio', '51-84242487', 'ronaldochavesdocanto@hotmail.com'),
(36, 'Jarbas Angonese', 'JtechNet', '05517110000149', 'RS', 'Nova EsperanÃ§a do Sul', 'Centro', 'Valentim Vielmo, 1645', 'Loja', '(55)4052-9212', 'suporte@jtechnet.com.br'),
(37, 'Pedro Alves de Almeida Junior', '.', '19294441000171', 'ba', 'SimÃµes Filho', 'Centro', 'jubia', 'b', '7130451234', 'pedroalves34@yahoo.com.br'),
(38, 'PEDRO ALVES', 'GPT', '19294441000171', 'BA', 'SIMOES FILHO', 'CENTRO', 'JUBIABA', 'CENTRO', '7130451234', 'pedroalves34@yahoo.com.br'),
(40, 'a', 'a', '45619522091', 'rs', 'rs', 'rs', 'rs', 'rs', '555555555', 'a@hotmail.com'),
(41, 'CONNECTY TELECOMUNICAÃ‡Ã•ES', 'Connecty', '15723235000189', 'Al', 'MaceiÃ³', 'Serraria', 'Conjunto JosÃ© TenÃ³rio de A. Lins', 'Bl. 89, Apto. 204', '8233281291', 'duda.tavares@live.com'),
(42, 'Rafael Fabris dos Santos', 'RF', '099587447758000', 'MS', 'CG', 'IJOIJOIJ', 'OJOIJO', 'IJOIJO', 'JOJOIJ', 'OJOIJOI'),
(43, 'CONNECTY TELECOMUNICAÃ‡Ã•ES', 'Connecty', '15723235000189', 'Al', 'MaceiÃ³', 'Serraria', 'Conjunto JosÃ© TenÃ³rio de A. Lins', 'Bl. 89, Apto. 204', '(82)3328-1291', 'duda.tavares@live.com'),
(44, 'Gabriele', 'Floresta', '01255322535', 'BA', 'Marau', 'Barra-Grande', 'n', 'loja', 's', 'gabrielest@gmail.com'),
(45, 'Emerson Antonio Ferreira Santos', 'netsshow', '747.101.874-79', 'Al', 'maceiÃ³', 'centro', 'Wernades lima', 'casa 5', '82 9954-9878', 'emersonantoniofs2011@gmail.com'),
(46, 'antonio f. santos', 'fatalnet', '747.101.874-79', 'al', 'arapiraca', 'centro', 'rua brasilia', 'lote 5', '82 9954-9878', 'emersonantoniofs2011@gmail.com'),
(47, 'SATCOM', 'SATCOM', '0908736600114', 'MA', 'ANAJATUBA', 'CENTRO', 'RUA HUMBETTO DE CAMPOS', 'casa', '9884125631', 'antonio.rafael@hotmail.com'),
(48, 'Gilson rodrigues de sousa carvalho', 'brtnet', '1303271000177', 'ma', 'lago da pedra', 'VILA ROCHA', 'avenida roseana sarney', 'casa', '9981717016', 'gilson.carvalho@msn.com'),
(49, 'Gilson rodrigues de sousa carvalho', 'brtnet', '1303271000177', 'ma', 'lago da pedra', 'CENTRO', 'avenida roseana sarney', 'CASA', '9981717016', 'gilson.carvalho@msn.com'),
(50, 'Ricardo', 'Ricardo', '111', 'rj', 'rj', 'SÃ£o Pedro', 'rua a', '1', '78362776', 'ricardo.felix.oliveira@gmail.com'),
(51, 'jefferson', 'Jefferson', '17841041000103', 'MG', 'Barbacena', 'Centro', 'Bias Fortes', 'a', 'a', 'a'),
(52, 'jefferson', 'Jefferson', '17841041000103', 'MG', 'Carandai', 'Centro', 'Bias Fortes', 'a', 'a', 'jefferson@devster.com.br'),
(53, 'carlos da matta', 'atho', '14776931000139', 'ms', 'campo grande', 'vl bandeirantes', 'brilhante', 'centro', '67 81216848', 'carlos@atho.inf.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `icones`
--

CREATE TABLE IF NOT EXISTS `icones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Fazendo dump de dados para tabela `icones`
--

INSERT INTO `icones` (`id`, `icone`) VALUES
(1, 'fa fa-angellist'),
(2, 'fa fa-bell-slash-o'),
(3, 'fa fa-list-alt'),
(4, 'fa fa-align-justify'),
(5, 'fa fa-money'),
(6, 'fa fa-plus-square'),
(7, 'fa fa-users'),
(8, 'fa fa-wrench'),
(9, 'fa fa-shopping-cart'),
(10, 'fa fa-print'),
(11, 'fa fa-line-chart'),
(12, 'fa fa-desktop'),
(13, 'fa fa-cubes'),
(14, 'fa fa-download'),
(15, 'fa fa-cube'),
(16, 'fa fa-cogs'),
(17, 'fa fa-check'),
(18, 'fa fa-building-o'),
(19, 'fa fa-birthday-cake'),
(20, 'fa fa-university'),
(21, 'fa fa-bar-chart'),
(22, 'fa fa-barcode'),
(23, 'fa fa-car'),
(24, 'fa fa-bus'),
(25, 'fa fa-cc-visa'),
(26, 'fa fa-twitch'),
(27, 'fa fa-tty'),
(28, 'fa fa-pie-chart'),
(29, 'fa fa-line-chart'),
(30, 'fa fa-cc-mastercard'),
(31, 'fa fa-user'),
(32, 'fa fa-sitemap'),
(33, 'fa fa-users');

-- --------------------------------------------------------

--
-- Estrutura para tabela `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Fazendo dump de dados para tabela `level`
--

INSERT INTO `level` (`id`, `level`) VALUES
(1, 'Loja de roupas'),
(26, 'fasdfas'),
(27, 'ertwer'),
(28, 'iii'),
(29, 'ttt');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_level` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `login`
--

INSERT INTO `login` (`id`, `id_level`, `id_emp`, `nome`, `login`, `senha`, `status`) VALUES
(1, 1, 1, 'fsadfasdfasdffff', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ramo` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Fazendo dump de dados para tabela `menu`
--

INSERT INTO `menu` (`id`, `id_ramo`, `id_level`, `icon`, `nome`, `status`) VALUES
(2, 0, 1, 'fa fa-user', 'Cadastros', 0),
(5, 0, 1, 'fa fa-align-justify', 'MovimentaÃ§Ã£o', 0),
(6, 0, 1, 'fa fa-list-alt', 'Relatorios', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `menu_sub`
--

CREATE TABLE IF NOT EXISTS `menu_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Fazendo dump de dados para tabela `menu_sub`
--

INSERT INTO `menu_sub` (`id`, `id_menu`, `icone`, `nome`, `link`) VALUES
(3, 2, 'fa fa-cubes', 'Produtos', 'modulos/items/list_items'),
(4, 2, 'fa fa-users', 'Funcionarios', 'modulos/items/list_items'),
(5, 2, 'fa fa-cube', 'Categorias', 'modulos/items/list_items'),
(6, 2, 'fa fa-university', 'Mesas', 'modulos/items/list_items'),
(7, 5, 'fa fa-line-chart', 'Vendas', 'modulos/items/list_items'),
(8, 5, 'fa fa-money', 'Caixa', 'modulos/items/list_items');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Alexandre Sousa', 'admin', 'admin'),
(2, 'lfkasÃ§k', 'flakÃ§l', 'safkaÃ§s'),
(3, 'dsfkjaslk', 'skdjfal', 'sdakfjalks');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
