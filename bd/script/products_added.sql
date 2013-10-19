-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 06/10/2013 às 21h05min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `clubedamulher`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products_added`
--

CREATE TABLE IF NOT EXISTS `products_added` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_sess` varchar(200) NOT NULL,
  `item_cod` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Extraindo dados da tabela `products_added`
--

INSERT INTO `products_added` (`id`, `id_sess`, `item_cod`, `description`, `price`, `quantity`, `image`) VALUES
(61, 'qebugbbhf0rj7otgedvbhs7646', '6', 'Creme Hidratante Nivea', '7,99', '1', 'c7b20a848e4faeb14d89534595efceed.jpg'),
(62, 'qebugbbhf0rj7otgedvbhs7646', '10', 'Teste5', '12,22', '1', '372d3d89e0ecda5b62556e71a0d6499f.jpg'),
(63, 'qebugbbhf0rj7otgedvbhs7646', '9', 'Teste3', '129,00', '1', 'ecddd5364ae89755a2697b500e6daa5d.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
