-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/09/2023 às 21:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsistemacontatods`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `idContato` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `assunto` varchar(200) NOT NULL,
  `mensagem` varchar(2000) NOT NULL,
  `data_criacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nome`, `email`, `assunto`, `mensagem`, `data_criacao`) VALUES
(1, 'ludimyla', 'ludimyla@gmail.com', 'erro', 'ta td dando errado,espero dar certo', '2023-05-23'),
(8, 'Dandara', 'Dandara@gmail.com', 'temos um assunto aqui', 'Caracas q site maravilhoso', '2023-05-23'),
(9, '  JOSE ', 'jose@gmail', 'minha mulher é feia', 'Minha mina é feia mas não tem problema Porque sua beleza é interior Eu vivo bem com ela sem nenhum dilema Eu sei que ela é feia mas eu dou valor (Minha mina é feia mas não tem problema) (Porque sua beleza é interior) (Eu vivo bem com ela sem nenhum dilema) (Eu sei que ela é feia mas eu dou valor) Às vezes eu me pego observando ela Tentando encontrar o seu melhor perfil Mas ela nem se toca, ainda faz careta Se acha muito linda, tipo miss Brasil', '2023-09-03'),
(10, 'Mel', 'Martinez@gmail.com', 'Abismo', 'Amor Estou na beira do precipício Meio que sinto o gosto da solidão E a minha mente quer me controlar  Ah-ah-ah-vazio Tem coisas podres dentro de mim Injetadas pela sociedade Ninguém aqui além de mim pra me julgar', '2023-09-11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblinguagensdeprogramacao`
--

CREATE TABLE `tblinguagensdeprogramacao` (
  `idLinguagensDeProgramacao` int(11) NOT NULL,
  `nomeLinguagem` varchar(60) NOT NULL,
  `historiaLinguagem` longtext NOT NULL,
  `funcionalidadeLiguagem` longtext NOT NULL,
  `cursosLinguagem` mediumtext NOT NULL,
  `dataLinguagem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblinguagensdeprogramacao`
--

INSERT INTO `tblinguagensdeprogramacao` (`idLinguagensDeProgramacao`, `nomeLinguagem`, `historiaLinguagem`, `funcionalidadeLiguagem`, `cursosLinguagem`, `dataLinguagem`) VALUES
(3, '  Python', 'No Natal de 1989, um holandês chamado Guido van Rossum estava com muito tempo de sobra e resolveu criar uma linguagem de programação que fosse melhor do que tudo que ele tinha visto até então. Nessa época, GvR estava trabalhando no projeto de sistema operacional Amoeba. A equipe desenvolvia uma linguagem em paralelo ao S.O. Amoeba, chamada ABC [1]. Tentando suprir as deficiências de ABC, GvR propôs a adoção da recém-nascida Python em 1990. A aceitação de Python foi tão boa que em 1991 Guido lançou sua cria na Internet. O mundo agradece ;o)', 'AUTOMAÇÕES EM PYTHON  Você consegue fazer automações com Python para mover arquivos, juntar vários arquivos em um só, enviar e-mails automaticamente, fazer buscas na internet, automatizar processo de emissão de notas fiscais, gerar e enviar relatórios…  Basicamente qualquer atividade repetitiva que você faça seja apenas no computador ou na internet você consegue automatizar.  Minicurso de Automação em Python  DESENVOLVIMENTO DE PROGRAMAS  Temos também o desenvolvimento de programas para computador em Python. Você vai conseguir criar interfaces gráficas para que o usuário consiga interagir de forma mais fácil com o seu programa.  Pode criar um programa de controle de estoque, controle de vendas, programa para trazer cotações de moedas, para fazer buscas na internet e trazer as informações desejadas…  Então são diversas as possibilidades, basta verificar qual a sua necessidade para que você possa construir um programa de acordo com o que precisa.  E com a parte da interface gráfica você pode facilitar a interaç', 'https://www.bing.com/aclick?ld=e8pToIyN29bQ6nLI5RPsMSpDVUCUwH1i8f1LuwNGiHyP46Hkv64cLgfuc3aBbE-JwswPBMOzUg4ziQ_0-mrvxG0K7pp9pP0pQBujaoPo0rJOK2BLzwMVdbyEUnd7GtnvVyNoDhl0ltwrMYbUorucaLLpfZywKLJXMvQz08T5-hdFbEk0BP2MwNWUgJUHdHyAEfGrDxqQ', '2023-09-08'),
(5, ' Html', 'O HTML foi criado em 1991, por Tim Berners-Lee, no CERN (European Council for Nuclear Research) na suíça. Inicialmente o HTML foi projetado para interligar instituições de pesquisa próximas, e compartilhar documentos com facilidade. Em 1992, foi liberada a biblioteca de desenvolvimento WWW ( World Wide Web), uma rede de alcance mundial, que junto com o HTML proporcionou o uso em escala mundial da WEB.', '', 'https://www.bing.com/aclick?ld=e8x4ucNpsHD3TwcoEHIYel_jVUCUyT8EGlrVrG3JSiHP7nX33TPCCSmrZJbZ5lcXZ--wdONTA4DycEDVNI9y1vLKU3QMPgBqKhSRm6Wkri_pS7n3mZBL0yiNeifOuBQZRND8AdBazpivF-E4D-Vvq54mRiGikK9fvrYdeXU2usiSDZxWesg9Ntxk_rZpTjkECTTDiLsg&u=aHR0cHMlM2ElMmYlMmZlYmFjb25saW5lLmNvbS5iciUyZmZyb250LWVuZC1wcm9mZXNzaW9uJTNmdXRtX3NvdXJjZSUzZGJpbmclMjZ1dG1fbWVkaXVtJTNkY3BjJTI2dXRtX2NhbXBhaWduJTNkY291cnNlXzQwX3Byb2YtZnJvbnQtZW5kX2Jpbmdfc2VhcmNoX2FsbF9jb252ZXJzaW9uc19hbGwlMjZ1dG1fY29udGVudCUzZGNfNDE4NjU5MDY3JTdjYWRnXzEzMzkyMDYxNzY2MDUxMjglN2NhZF8lN2NwaF9rd2QtODM3MDE0ODI0NjE2NDglM2Fsb2MtMjAlN2NrZXlfY3Vyc28lMjUyMGRlJTI1MjBodG1sJTdjZGV2X2MlN2Nwc3RfJTdjcmduaWRfMTE2MDY4JTdjcGxhY2VtZW50XyUyNm1zY2xraWQlM2Q2MDU0NGM0ZWZkNmYxZDVjZGFhNjI4YjRlOTY2NDRlZg&rlid=60544c4efd6f1d5cdaa628b4e96644ef&ntb=1', '2023-09-07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `idLogin` int(11) NOT NULL,
  `nomeLogin` varchar(60) NOT NULL,
  `emailLogin` varchar(60) NOT NULL,
  `senhaLogin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblogin`
--

INSERT INTO `tblogin` (`idLogin`, `nomeLogin`, `emailLogin`, `senhaLogin`) VALUES
(1, 'Larissa', 'larissa@gmail.com', '****'),
(2, 'Ludimyla', 'ludi@gmail.com', 'senhamaneira');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices de tabela `tblinguagensdeprogramacao`
--
ALTER TABLE `tblinguagensdeprogramacao`
  ADD PRIMARY KEY (`idLinguagensDeProgramacao`);

--
-- Índices de tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tblinguagensdeprogramacao`
--
ALTER TABLE `tblinguagensdeprogramacao`
  MODIFY `idLinguagensDeProgramacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
