-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2018 a las 18:01:13
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_vacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores_actrices`
--

CREATE TABLE `actores_actrices` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `codigo` int(11) NOT NULL,
  `pelicula` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `valoracion` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_peliculas`
--

CREATE TABLE `listas_peliculas` (
  `imagen` text NOT NULL,
  `privacidad` int(11) NOT NULL DEFAULT '0',
  `nombreListas` varchar(535) NOT NULL DEFAULT 'Sin Nombre',
  `nombreCreador` varchar(20) NOT NULL,
  `numeroPeliculas` int(11) NOT NULL,
  `codigoListas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_y_peliculas`
--

CREATE TABLE `listas_y_peliculas` (
  `listaPeliculas` int(255) NOT NULL,
  `codigoPelicula` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas_y_usuarios`
--

CREATE TABLE `listas_y_usuarios` (
  `nombreUsu` varchar(20) NOT NULL,
  `listasPelis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `Portada` text NOT NULL,
  `Titulo` varchar(535) NOT NULL DEFAULT 'Sin título',
  `Codigo` int(255) NOT NULL,
  `Genero` text NOT NULL,
  `AnioEstreno` text NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas_vistas`
--

CREATE TABLE `peliculas_vistas` (
  `Nombre_Usuario` varchar(25) NOT NULL,
  `Codigo_Peliculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_actores`
--

CREATE TABLE `pelicula_actores` (
  `id_pelicula` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos`
--

CREATE TABLE `retos` (
  `NombreReto` varchar(50) NOT NULL,
  `NumeroPeliculas` int(11) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos_y_peliculas`
--

CREATE TABLE `retos_y_peliculas` (
  `NombreReto` varchar(50) NOT NULL,
  `CodigoPelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombreusu` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fotoPerfil` text NOT NULL,
  `email` varchar(25) CHARACTER SET latin1 NOT NULL,
  `user_type` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Contador_Peliculas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombreusu`, `fotoPerfil`, `email`, `user_type`, `password`, `Contador_Peliculas`) VALUES
('alex', 'admin.png', 'alex@gmail.com', 1, 'a4dc47cc7bb059da6dd2d9ce63bbbd7e11747df7', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores_actrices`
--
ALTER TABLE `actores_actrices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `listas_peliculas`
--
ALTER TABLE `listas_peliculas`
  ADD PRIMARY KEY (`codigoListas`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `retos`
--
ALTER TABLE `retos`
  ADD PRIMARY KEY (`NombreReto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nombreusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores_actrices`
--
ALTER TABLE `actores_actrices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `listas_peliculas`
--
ALTER TABLE `listas_peliculas`
  MODIFY `codigoListas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `Codigo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
