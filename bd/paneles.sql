-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2023 a las 00:35:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paneles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `emailAdmin` varchar(50) NOT NULL,
  `passwordAdmin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `emailAdmin`, `passwordAdmin`) VALUES
(1, 'admin@gmail.com', '8810');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `idCliente` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `idCliente`, `fecha`, `descripcion`) VALUES
(1, 'paulis@gmail.com', '2023-02-15 23:46:00', 'Mantenimiento del panel'),
(2, 'andrea@gmail.com', '2023-03-08 00:02:00', 'Revisión del panel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

CREATE TABLE `comprador` (
  `id` int(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `apellidoCliente` varchar(50) NOT NULL,
  `telefonoCliente` varchar(50) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `NoDocumentoCliente` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `comprador`
--

INSERT INTO `comprador` (`id`, `nombreCliente`, `apellidoCliente`, `telefonoCliente`, `direccion`, `NoDocumentoCliente`, `email`, `password`, `nivel`) VALUES
(1, 'Carlos', 'Perez', '323453245', '', '13452345', 'carlos@gmail.com', 'HwnctaM=', 5),
(2, 'Paco', 'carreras', '3103106767', '', '10023786', 'paco@gmail.com', '12345', 5),
(3, 'pol', 'moreno', '1234512', '', '1002437939', 'pol@gmail.com', '1212', 5),
(4, 'brayan', 'Santos', '638373', '', '135799363', 'brayan@gmail.com', '0987', 5),
(5, 'ivon', 'Tristancho', '25567866', '', '2345678', 'ivon@gmail.com', '1231', 5),
(6, 'paula', 'foreo', '86544609', '', '19866567', 'paulis@gmail.com', '2233', 5),
(7, 'Salome', 'Lemus', '323456543', '', '1345609542', 'salo@gmail.com', '9988', 5),
(8, 'Diana', 'Chaparro', '132262', '', '1833030', 'diana@gmail.com', '3322', 5),
(9, 'Juan', 'Moreno', '79929228', '', '102992837', 'pab@gmail.com', '0987', 5),
(12, 'Andrea', 'Guzman', '3002589898', '', '46123123', 'andrea@gmail.com', '1234', 5),
(14, 'Mary', 'Cuadrado', '3002589898', '', '46123123', 'mara@gmail.com', '123', 5),
(15, 'Alejandra', 'Cubides', '3002589898', '', '46123123', 'aleja@gmail.com', '123', 5),
(16, 'Catalina', 'Guzman', '3002589898', '', '46123123', 'catar@gmail.com', '123', 5),
(17, 'Lucia', 'Vargas', '3002589898', '', '46123123', 'luc@gmail.com', '123', 5),
(18, 'Tatiana', 'Cuadrado', '3002589898', '', '46123123', 'tatis@gmail.com', '123', 5),
(19, 'Andres', 'Vargas', '3112589898', '', '89123100', 'andres@gmail.com', '123', 5),
(20, 'Maria', 'Pepita', '3245678909', 'Calle 24 N 78-98', '879876', 'mariape@gmail.com', '123', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `NoDocumento` varchar(25) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `NoDocumento`, `direccion`, `telefono`, `email`, `password`, `nivel`) VALUES
(1, 'Jessica ', 'Guzman', '1057582412', 'carrera 99 n 25 88', 2147483647, 'admin@gmail.com', '8810', 1),
(2, 'Pepa', 'Vega', '987455', 'Carrera 16 11A 62', 2147483647, 'pepita@gmail.com', '123', 2),
(3, 'Maria', 'Moreno', '1057549632', 'carrera 99 n 25 88', 4545151, 'maria@gmail.com', '123', 3),
(4, 'Mario', 'Alba', '987455', 'Calle 16 11A 62 P3', 2147483647, 'mariop@gmail.com', '123', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`);

--
-- Indices de la tabla `comprador`
--
ALTER TABLE `comprador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comprador`
--
ALTER TABLE `comprador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
