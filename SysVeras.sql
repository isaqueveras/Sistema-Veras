-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Set-2018 às 02:39
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elchamado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abril`
--

CREATE TABLE `abril` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agosto`
--

CREATE TABLE `agosto` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `pre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `audio`
--

INSERT INTO `audio` (`id`, `arquivo`, `data`, `nome`, `cor`, `pre`) VALUES
(1, '5d851a3368b5f9d49f0a4872eac499b4.3gp', '2018-08-26 14:44:15', 'InformÃ¡tica 1Â° Ano', '#00b271', 'Info 1'),
(2, 'ab9d1d7d7bd48133c8b1bdc21e3fd2dd.3gp', '2018-08-26 14:44:35', 'InformÃ¡tica 2Â° Ano', '#00b271', 'Info 2'),
(3, '210770ffefea47f21df9cd640f8a9efc.3gp', '2018-08-26 14:44:53', 'InformÃ¡tica 3Â° Ano', '#00b271', 'Info 3'),
(4, '39879886da26227a079fd7a7399c9843.3gp', '2018-08-26 22:16:40', 'AdministraÃ§Ã£o 1Â° Ano', '#7400e8', 'Adm 1'),
(5, 'b243c871af6279c58ede80169f677b8a.3gp', '2018-08-26 22:17:00', 'AdministraÃ§Ã£o 2Â° Ano ', '#7a00f4', 'Adm 2'),
(6, '225a02aaaf8ab5f392377e60f3da83c9.3gp', '2018-08-26 22:17:14', 'AdministraÃ§Ã£o 3Â° Ano', '#7a00f4', 'Adm 3'),
(7, '93d48e772347106d8ee72b935d489651.3gp', '2018-08-26 22:21:02', 'AgroindÃºstria 2Â° Ano', '#ffcd2b', 'Agro 2'),
(8, 'aa5d355f982683a7c8d5593d01a23ab4.3gp', '2018-08-26 22:21:27', 'AgroindÃºstria 3Â° Ano', '#ffcd2b', 'Agro 3'),
(9, 'b4380d7b14b26c00370510a966a63fd3.3gp', '2018-08-26 22:22:10', 'NutriÃ§Ã£o 1Â° Ano', '#ec0076', 'Nutri 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `pre` varchar(20) NOT NULL,
  `audio` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dezembro`
--

CREATE TABLE `dezembro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fevereiro`
--

CREATE TABLE `fevereiro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `criado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `janeiro`
--

CREATE TABLE `janeiro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `julho`
--

CREATE TABLE `julho` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `criado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `junho`
--

CREATE TABLE `junho` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `criado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `maio`
--

CREATE TABLE `maio` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `criado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marco`
--

CREATE TABLE `marco` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `texto` varchar(200) NOT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `autor`, `texto`, `data`) VALUES
(1, 'Isaque Veras', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI', '2018-07-18 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meses`
--

CREATE TABLE `meses` (
  `id` int(11) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `meses`
--

INSERT INTO `meses` (`id`, `mes`, `created`, `modified`) VALUES
(1, 'Janeiro', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(2, 'Fevereiro', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(3, 'Marco', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(4, 'Abril', '2018-07-13 22:53:23', NULL),
(5, 'Maio', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(6, 'Junho', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(7, 'Julho', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(8, 'Agosto', '2018-07-13 22:53:23', '0000-00-00 00:00:00'),
(9, 'Setembro', '2018-07-13 22:53:23', NULL),
(10, 'Outubro', '2018-07-13 22:53:23', NULL),
(11, 'Novembro', '2018-07-13 22:53:23', NULL),
(12, 'Dezembro', '2018-07-13 22:53:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `novembro`
--

CREATE TABLE `novembro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `outubro`
--

CREATE TABLE `outubro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setembro`
--

CREATE TABLE `setembro` (
  `id` int(11) NOT NULL,
  `dia` varchar(220) NOT NULL,
  `turma_1` varchar(220) NOT NULL,
  `turma_2` varchar(220) NOT NULL,
  `turma_3` varchar(220) NOT NULL,
  `turma_4` varchar(220) NOT NULL,
  `turma_5` varchar(220) NOT NULL,
  `turma_6` varchar(220) NOT NULL,
  `turma_7` varchar(220) NOT NULL,
  `turma_8` varchar(220) NOT NULL,
  `turma_9` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `cargo` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `img` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel_acesso_id`, `created`, `modified`, `cargo`, `cidade`, `img`) VALUES
(6, 'Isaque Veras', 'isaque@sysveras.tech', 'isaque', 'ADM', '2018-06-30 18:08:00', '2018-09-01 13:48:22', 'Estudante de TI', 'MombaÃ§a-CE', '08c91f2db625feaa0062910bc5f17ea8.jpg'),
(22, 'Jose Bonifacio', 'jose@bonifacio.com', '0', 'ADM', '2018-09-01 17:03:45', '2018-09-05 15:07:13', 'Mentor', 'Rio de Janeiro - RJ', '323539306dd6d7d4724aafb08c7bb7aa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abril`
--
ALTER TABLE `abril`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agosto`
--
ALTER TABLE `agosto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dezembro`
--
ALTER TABLE `dezembro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fevereiro`
--
ALTER TABLE `fevereiro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `janeiro`
--
ALTER TABLE `janeiro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `julho`
--
ALTER TABLE `julho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junho`
--
ALTER TABLE `junho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maio`
--
ALTER TABLE `maio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marco`
--
ALTER TABLE `marco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meses`
--
ALTER TABLE `meses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novembro`
--
ALTER TABLE `novembro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outubro`
--
ALTER TABLE `outubro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setembro`
--
ALTER TABLE `setembro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abril`
--
ALTER TABLE `abril`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agosto`
--
ALTER TABLE `agosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dezembro`
--
ALTER TABLE `dezembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fevereiro`
--
ALTER TABLE `fevereiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `janeiro`
--
ALTER TABLE `janeiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `julho`
--
ALTER TABLE `julho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `junho`
--
ALTER TABLE `junho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maio`
--
ALTER TABLE `maio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marco`
--
ALTER TABLE `marco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meses`
--
ALTER TABLE `meses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `novembro`
--
ALTER TABLE `novembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outubro`
--
ALTER TABLE `outubro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setembro`
--
ALTER TABLE `setembro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
