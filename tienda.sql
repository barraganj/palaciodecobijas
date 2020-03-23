-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2020 a las 23:12:51
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombresPersona` varchar(50) NOT NULL,
  `apellidosPersona` varchar(50) NOT NULL,
  `direccionPersona` int(50) NOT NULL,
  `celularPersona` bigint(20) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `nombresPersona`, `apellidosPersona`, `direccionPersona`, `celularPersona`, `correoUsuario`, `ciudad`) VALUES
(11, 'yuliano', 'suta', 345678, 2345678, 'yuliano', 'bogota'),
(12, 'gfds', 'hbgvrfced', 345678, 6543, '', 'bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVenta` int(11) NOT NULL,
  `IDProducto` int(11) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVenta`, `IDProducto`, `Precio`, `Cantidad`) VALUES
(1, 41, 1, '50000', 1),
(2, 41, 2, '30000', 1),
(3, 42, 1, '50000', 1),
(4, 42, 2, '30000', 1),
(5, 43, 1, '50000', 1),
(6, 43, 2, '30000', 1),
(7, 43, 1, '50000', 1),
(8, 43, 2, '30000', 1),
(9, 44, 1, '50000', 1),
(10, 45, 1, '50000', 1),
(11, 46, 1, '50000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Cobija ', 50000, 'Cobija linda', 'https://cdn.totalcode.com.co/homesentry/product-zoom/es/cobija-pop-corn-fleece-distrihogar-azul-1.jpg'),
(2, 'Cobija', 30000, 'Cobija linda', 'https://cdn.totalcode.com.co/homesentry/product-zoom/es/cobija-romance-1.jpg'),
(3, 'Cobija', 70000, 'Cobija linda', 'https://cdn.totalcode.com.co/homesentry/product-zoom/es/cobija-shine-foil-distrihogar-pt10389cf_cafe-1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(50) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) VALUES
(1, '123456789', '', '2020-03-17 00:00:00', 'as@gmail.com', '70000', 'pendiente'),
(5, '123456789', '', '2020-03-24 00:00:00', 'cc@gmail.com', '1000', 'pendiente'),
(8, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 13:30:59', 'as@gmail.com', '50000', 'pendiente'),
(9, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 13:33:49', 'aa@gmail.com', '80000', 'pendiente'),
(10, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 13:51:57', 'dd@gmail.com', '150000', 'pendiente'),
(11, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 13:53:54', 'dd@gmail.com', '150000', 'pendiente'),
(12, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:00:32', 'dd@gmail.com', '150000', 'pendiente'),
(13, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:01:13', 'dd@gmail.com', '150000', 'pendiente'),
(14, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:15:36', 'dd@gmail.com', '150000', 'pendiente'),
(15, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:24:46', 'dd@gmail.com', '150000', 'pendiente'),
(16, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:25:18', 'dd@gmail.com', '150000', 'pendiente'),
(17, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:25:38', 'dd@gmail.com', '150000', 'pendiente'),
(18, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:25:57', 'dd@gmail.com', '150000', 'pendiente'),
(19, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:26:57', 'dd@gmail.com', '150000', 'pendiente'),
(20, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:27:47', 'dd@gmail.com', '150000', 'pendiente'),
(21, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:27:58', 'cc@gmail.com', '50000', 'pendiente'),
(22, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:29:51', 'cc@gmail.com', '50000', 'pendiente'),
(23, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:30:31', 'cc@gmail.com', '50000', 'pendiente'),
(24, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:31:42', 'cc@gmail.com', '50000', 'pendiente'),
(25, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:33:06', 'cc@gmail.com', '50000', 'pendiente'),
(26, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:53:08', 'cc@gmail.com', '50000', 'pendiente'),
(27, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:57:21', 'cc@gmail.com', '50000', 'pendiente'),
(28, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:59:19', 'cc@gmail.com', '50000', 'pendiente'),
(29, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 14:59:49', 'cc@gmail.com', '50000', 'pendiente'),
(30, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:00:22', 'cc@gmail.com', '50000', 'pendiente'),
(31, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:00:42', 'cc@gmail.com', '50000', 'pendiente'),
(32, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:14:55', 'cc@gmail.com', '50000', 'pendiente'),
(33, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:15:10', 'cc@gmail.com', '50000', 'pendiente'),
(34, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:16:03', 'cc@gmail.com', '50000', 'pendiente'),
(35, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:20:21', 'cc@gmail.com', '50000', 'pendiente'),
(36, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:21:07', 'cc@gmail.com', '50000', 'pendiente'),
(37, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:23:31', 'cc@gmail.com', '50000', 'pendiente'),
(38, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:23:45', 'cc@gmail.com', '50000', 'pendiente'),
(39, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:23:58', 'cc@gmail.com', '50000', 'pendiente'),
(40, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:26:05', 'KJAHDSKJSAH', '180000', 'pendiente'),
(41, 'drqi1k7i16d1tqm67f8mvto6p8', '', '2020-03-12 15:26:55', 'aa@gmail.com', '80000', 'pendiente'),
(42, 'f1crces1r1blr4f6vd95ja888c', '', '2020-03-14 12:13:28', 'pipe.2201@hotmail.com', '80000', 'pendiente'),
(43, 'f1crces1r1blr4f6vd95ja888c', '', '2020-03-14 12:42:57', 'pipe.2201@hotmail.com', '160000', 'pendiente'),
(44, 'f1crces1r1blr4f6vd95ja888c', '', '2020-03-14 13:17:49', 'pipe.2201@hotmail.com', '50000', 'pendiente'),
(45, '70hl13eqc3r0ke7igihoor3p3f', '', '2020-03-16 18:53:17', 'pipe.2201@hotmail.com', '50000', 'pendiente'),
(46, 'tcuk5pqbmi3kfj2umjmt4mlodr', '', '2020-03-17 13:17:16', 'pipe.2201@hotmail.com', '50000', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correoUsuario` varchar(50) NOT NULL,
  `claveUsuario` varchar(30) NOT NULL,
  `rol` enum('administrador','cliente','domiciliario') NOT NULL,
  `estado` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correoUsuario`, `claveUsuario`, `rol`, `estado`) VALUES
('j@gmail.com', '123', 'cliente', 1),
('y@gmail.com', '123456789', 'administrador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVenta` (`IDVenta`),
  ADD KEY `IDProducto` (`IDProducto`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `correoUsuario` (`correoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVenta`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDProducto`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
