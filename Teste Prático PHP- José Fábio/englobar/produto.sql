-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2019 às 16:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englobar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(4) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `fornecedor` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cep` varchar(22) NOT NULL,
  `preco` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `data`, `fornecedor`, `endereco`, `cep`, `preco`) VALUES
(1, 'Lemail@ee.com', '4444-03-22', 'LenÃ§ol', 'dasdsa', '321321', 12),
(2, 'Lemail@ee.com', '4444-03-22', 'LenÃ§ol', 'dasdsa', '321321', 12),
(3, 'Relogio', '2004-03-22', 'Champion', 'Rua da VÃ¡rzea', '3213', 500),
(4, 'Relogio', '2004-03-22', 'Champion', 'Rua da VÃ¡rzea', '3213', 500),
(5, 'Tenis', '2019-12-09', 'Nike', 'Rua Capitao 3000', '3213', 900),
(6, 'Celular', '2019-12-09', 'Xiaomi', 'China', '8787878', 9000),
(7, 'Caneta', '2222-02-22', 'BIC', 'asdasdasdsa', '312321321', 10),
(8, 'Lapis', '2222-02-22', 'Faber Catel', 'Rua da VÃ¡rzea', '23213', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
