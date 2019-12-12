-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2019 a las 15:01:26
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `user`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fotoUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contra`, `userID`, `nombre`, `apellido`, `fotoUrl`) VALUES
('ernesto', '26c322652770620e64ac90682eb6504c', 1, '', '', ''),
('ernesto@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'asd', 'asd', ''),
('asd@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 4, 'asd', 'asd', ''),
('asd1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 5, 'asd', 'asd', ''),
('asd2@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 6, 'ernesto', 'chan', ''),
('asd4@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 7, 'ernesto', 'chan', ''),
('asd5@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 8, '123', '123', ''),
('123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 9, 'asd', 'asd', ''),
('321@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 10, '321', '321', ''),
('1234@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 11, '1234', '1234', ''),
('asd@asd.com', 'd41d8cd98f00b204e9800998ecf8427e', 12, 'asd', 'asd', ''),
('123@123.com', 'd41d8cd98f00b204e9800998ecf8427e', 13, '123', '123', ''),
('4123@gmaia.com', 'd41d8cd98f00b204e9800998ecf8427e', 14, '123', '123', ''),
('raul@raul.com', 'd41d8cd98f00b204e9800998ecf8427e', 15, '123', '123', ''),
('raul1@raykl.com', 'd41d8cd98f00b204e9800998ecf8427e', 16, '123', '123', ''),
('ernesto1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 17, '123', '123', ''),
('raul2@raul.com', 'd41d8cd98f00b204e9800998ecf8427e', 18, '123', '123', ''),
('ernesto2@gmail.com', '202cb962ac59075b964b07152d234b70', 22, '123', '123', ''),
('asd5@asd.com', '202cb962ac59075b964b07152d234b70', 26, '123', '123', ''),
('asd10@asd.com', '202cb962ac59075b964b07152d234b70', 29, '123', '123', ''),
('as9@asd.com', '202cb962ac59075b964b07152d234b70', 31, '123', '123', ''),
('raul3@raul.com', '202cb962ac59075b964b07152d234b70', 32, '123', '123', ''),
('rf@rf.com', '202cb962ac59075b964b07152d234b70', 33, '123', '123', ''),
('es@es.com', '12470fe406d44017d96eab37dd65fc14', 35, 'es', 'es', 'img/fotos/p4.jpg'),
('es2@es.com', '202cb962ac59075b964b07152d234b70', 36, 'es2', 'es', 'img/fotos/es2@es.com'),
('es3@es.com', '202cb962ac59075b964b07152d234b70', 37, 'es3', 'es', 'img/fotos/es3@es.comp1.jpg'),
('es4@es.com', '202cb962ac59075b964b07152d234b70', 38, 'es4', 'es', 'img/fotos/es4@es.comcontact-img.jpg'),
('ab@ab.com', '202cb962ac59075b964b07152d234b70', 41, 'a', 'b', 'img/fotos/ab@ab.comp6.jpg'),
('mit2599@hotmail.com', '202cb962ac59075b964b07152d234b70', 42, 'La bomba', 'Bin la Den', 'img/fotos/mit2599@hotmail.comErnesto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `nombreUnique` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
