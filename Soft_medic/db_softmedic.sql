-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2024 a las 03:37:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_softmedic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID` int(3) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `idPaciente` bigint(20) UNSIGNED NOT NULL,
  `idConsultorio` int(3) UNSIGNED NOT NULL,
  `idEmpleado` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `ID` int(3) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` bigint(12) NOT NULL,
  `Mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`ID`, `Nombre`, `Direccion`, `Telefono`, `Mail`) VALUES
(5, 'Pediatría', 'calle 9 2 55 El triunfo', 3205632524, 'pediatria@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `Telefono` bigint(12) NOT NULL,
  `Cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Direccion`, `Mail`, `Telefono`, `Cargo`) VALUES
(37612458, 'Alba Luz', 'Barajas García', '1975-02-05', 'av 6 12-24 Pueblo Nuevo', 'albaluz@gmail.com', 3112548623, 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `ID` int(5) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Registro Sanitario` varchar(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Fecha Vencimiento` date NOT NULL,
  `Inventario` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `Telefono` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`ID`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Direccion`, `Mail`, `Telefono`) VALUES
(0, '', '', '0000-00-00', '', '', 0),
(37340569, 'Ramon ', 'Arenas Ortega', '1981-03-13', 'calle 4 3-22 Pueblo Nuevo', 'monros@hotmail.com', 3145689565),
(1084653212, 'Sergio Esteban', 'Castro Castañeda', '2010-06-27', 'Carrera 28 10-39 Las Acacias', 'sergioesteban@gmail.com', 3214567854),
(1094161053, 'Sergio', 'Castro Rincón', '1986-12-18', 'Carrera 28 10-39 Las Acacias', 'castrosergio1008@gmail.com', 3214379911),
(1094161056, 'Sergio', 'Castro Rincón', '1986-12-18', 'Carrera 28 10-39 Las Acacias', 'castrosergio1008@gmail.com', 3214379911),
(1094164393, 'Ana Yerardine', 'Castañeda Barajas', '1991-10-09', 'Carrera 28 10-39 Las Acacias', 'ayerarcast@gmail.com', 3132360946),
(1094562313, 'sergio Enrique', 'castro', '2024-09-05', 'calle 9 2 55', 'Armandocasas@gmail.com', 3214379911),
(1094562315, '', '', '0000-00-00', '', '', 0),
(1094562316, 'Armando', 'Casas de Bareque', '2024-09-05', '', 'Armandocasas@gmail.com', 3124586932),
(1094562317, 'Armando', 'Casas de Bareque', '2024-09-05', '', 'Armandocasas@gmail.com', 3124586932),
(1094562874, 'Pablo', 'Escobar Gaviria', '1974-03-06', 'Hacienda Nápoles', 'escobar@gmail.com', 3124356897);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `ID` int(20) NOT NULL,
  `Posologia` varchar(255) NOT NULL,
  `IdMedicamento` int(5) UNSIGNED NOT NULL,
  `IdPaciente` bigint(20) UNSIGNED NOT NULL,
  `IdMedico` bigint(20) UNSIGNED NOT NULL,
  `IdCita` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idPaciente` (`idPaciente`),
  ADD KEY `idConsultorio` (`idConsultorio`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Medicamento` (`IdMedicamento`,`IdPaciente`,`IdMedico`,`IdCita`),
  ADD KEY `IdPaciente` (`IdPaciente`),
  ADD KEY `IdCita` (`IdCita`),
  ADD KEY `IdMedico` (`IdMedico`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`idConsultorio`) REFERENCES `consultorios` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`IdPaciente`) REFERENCES `pacientes` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tratamiento_ibfk_2` FOREIGN KEY (`IdCita`) REFERENCES `citas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tratamiento_ibfk_3` FOREIGN KEY (`IdMedico`) REFERENCES `empleados` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tratamiento_ibfk_4` FOREIGN KEY (`IdMedicamento`) REFERENCES `medicamentos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
