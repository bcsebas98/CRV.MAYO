-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2022 a las 05:30:23
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crv`
--

CREATE TABLE `crv` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `placa` varchar(50) NOT NULL,
  `vehiculo` varchar(150) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `motivo` varchar(150) NOT NULL,
  `recibido_por` varchar(100) NOT NULL,
  `gruas` varchar(50) NOT NULL,
  `elaborar_parte` varchar(50) NOT NULL,
  `lugar_hechos` varchar(150) NOT NULL,
  `entregado_por` varchar(150) NOT NULL,
  `inventario` int(50) NOT NULL,
  `anden` varchar(50) NOT NULL,
  `observaciones` varchar(300) NOT NULL,
  `encargado_asentar` varchar(150) NOT NULL,
  `codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crv`
--

INSERT INTO `crv` (`id`, `fecha`, `placa`, `vehiculo`, `marca`, `color`, `motivo`, `recibido_por`, `gruas`, `elaborar_parte`, `lugar_hechos`, `entregado_por`, `inventario`, `anden`, `observaciones`, `encargado_asentar`, `codigo`) VALUES
(2, '2022-02-01', 'ABC', 'Aveo', 'as', 'Azul', 'Choque', 'Juan', 'aa', 'sas', 'Cuenca', 'Jose', 12312, 'asa', 'Sin parabrisa', 'Julio', 1237);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egreso`
--

CREATE TABLE `egreso` (
  `no_tramite` int(11) NOT NULL,
  `no_orden` int(11) NOT NULL,
  `propietario` varchar(50) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `motor` varchar(100) NOT NULL,
  `tonelaje` varchar(100) NOT NULL,
  `casillero` varchar(100) NOT NULL,
  `alfombras` varchar(100) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_identificacion` int(11) NOT NULL,
  `nombres_ciudadano` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `no_identificacion1` int(11) NOT NULL,
  `nombres_ciudadano1` varchar(50) NOT NULL,
  `telefono1` int(10) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `correo1` varchar(100) NOT NULL,
  `autoriza` varchar(50) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `egreso`
--

INSERT INTO `egreso` (`no_tramite`, `no_orden`, `propietario`, `placa`, `motor`, `tonelaje`, `casillero`, `alfombras`, `fecha_ingreso`, `no_identificacion`, `nombres_ciudadano`, `telefono`, `direccion`, `correo`, `no_identificacion1`, `nombres_ciudadano1`, `telefono1`, `direccion1`, `correo1`, `autoriza`, `observaciones`) VALUES
(1, 1, 'Luis', 'ABC', 'A', '12a', 'A', 'a', '2022-03-01 05:00:00', 1212123, 'Carlos', 9433243, 'Sevilla', 'jose@gmail.com', 139111313, 'Juan', 2147483647, 'Cuenca', 'juan@gmail.com', 'Jose', 'Sin parabrisa'),
(2, 2, 'Carla', 'ULB', 'VC', 'SD', 'SDS', '2', '2022-02-15 05:00:00', 18732023, 'Luis', 96374834, 'Loja', 'luis@gmail.com', 2313213, 'Eduardo', 9672323, 'Cuenca', 'eduardo@hotmail.com', 'Luis', 'as'),
(3, 2, 'Carla', 'ABC', 'VC', '12a', 'A', 'a', '2022-03-02 05:00:00', 1212123, 'Elena', 9433243, 'Sevilla', 'jose@gmail.com', 139111313, 'Juan', 2147483647, 'Cuenca', 'juan@gmail.com', 'Jose', 'Sin parabrisa'),
(4, 6, 'Luis', 'ULB', 'A', '12a', 'A', 'a', '2022-03-09 05:00:00', 1212123, 'Elena', 9433243, 'Loja', 'jose@gmail.com', 139111313, 'Juan', 2147483647, 'Cuenca', 'eduardo@hotmail.com', 'Jose', 'AJA'),
(5, 1, 'Carla', 'ULB', 'VC', '12a', 'SDS', '2', '2022-03-02 05:00:00', 1212123, 'Carlos', 9433243, 'Loja', 'luis@gmail.com', 139111313, 'Eduardo', 2147483647, 'Cuenca', 'juan@gmail.com', 'Jose', 'Sin parabrisa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_sistema`
--

CREATE TABLE `ingreso_sistema` (
  `fecha` date NOT NULL,
  `ci_conductor` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `chasis` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `articulo` varchar(100) NOT NULL,
  `letra` varchar(100) NOT NULL,
  `ley_de_transito` varchar(500) NOT NULL,
  `motivo_ingreso` varchar(450) NOT NULL,
  `citacion` varchar(450) NOT NULL,
  `medio_ingreso` varchar(100) NOT NULL,
  `observaciones` varchar(450) NOT NULL,
  `articulos_encontrados_interior` varchar(450) NOT NULL,
  `anden` varchar(100) NOT NULL,
  `sellos` varchar(100) NOT NULL,
  `fotos` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingreso_sistema`
--

INSERT INTO `ingreso_sistema` (`fecha`, `ci_conductor`, `nombres`, `placa`, `chasis`, `motor`, `tipo`, `marca`, `servicio`, `color`, `articulo`, `letra`, `ley_de_transito`, `motivo_ingreso`, `citacion`, `medio_ingreso`, `observaciones`, `articulos_encontrados_interior`, `anden`, `sellos`, `fotos`) VALUES
('2022-03-01', 243, 'Jose Luis', 'ABC', 'ad', 'A', 'ad', 'Aveo', 'ad', 'Azul', 'a', 'ad', 'da', 'aa', 'ad', 'ada', 'Sin parabrisa', 'as', 'asa', 'ad', 'ad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `total_denuncias` int(100) NOT NULL,
  `tipo_solicitud` varchar(100) NOT NULL,
  `parte_informativo` varchar(300) NOT NULL,
  `implementos` varchar(100) NOT NULL,
  `solicitudes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `nombres`, `apellidos`, `total_denuncias`, `tipo_solicitud`, `parte_informativo`, `implementos`, `solicitudes`) VALUES
(1, 'Jose Luis', 'Lopez', 2, 'A', 'sa', 'ad', 'dad'),
(2, 'Elena', 'Palma', 2, 'A', 'sa', 'ad', 'dad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `codigo_inst` int(11) NOT NULL,
  `cedula` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `codigo_inst`, `cedula`, `nombre`, `apellido`, `correo`, `telefono`, `ciudad`, `departamento`, `cargo`, `password`, `password1`, `fecha`) VALUES
(1, 1234, 104948203, 'Sebastian', 'Carmona', 'bcsebas1998@gmail.com', 984707203, 'Cuenca', 'Gerencia', 'Gerente', '1234', '1234', '2022-02-22 21:59:10'),
(3, 45, 123456789, 'Andrés', 'carmona', 'sebas@gmail.com', 4054123, 'Cuenca', 'Sistema', 'Sistema', '1234', '1234', '2022-02-22 21:59:10'),
(5, 12, 104948203, 'cristian', 'cisneros', 'cristian@gmail.com', 123456, 'cuenca', 'Gerencia', 'Gerente', '456789', '456789', '2022-02-22 21:59:10'),
(6, 1234, 104948211, 'Andrés', 'Lozano', 'andres@gmail.com', 4054123, 'Cuenca', 'Sistemas', 'Soporte técnico', '1234', '1234', '2022-02-23 02:28:23'),
(7, 2, 1063281, 'Elena', 'Palma', 'elena@gmail.com', 9433243, 'Cuenca', 'Sistemas', 'Jefe', '123', '123', '2022-03-04 20:30:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigilante`
--

CREATE TABLE `vigilante` (
  `codigo_vigilante` int(10) NOT NULL,
  `nombre_vigilante` varchar(50) NOT NULL,
  `apellido_vigilante` varchar(50) NOT NULL,
  `hora_entrada` varchar(10) NOT NULL,
  `hora_salida` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vigilante`
--

INSERT INTO `vigilante` (`codigo_vigilante`, `nombre_vigilante`, `apellido_vigilante`, `hora_entrada`, `hora_salida`, `fecha`) VALUES
(1, 'Luis', 'lopez', '09:00', '13:00', '2022-03-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crv`
--
ALTER TABLE `crv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `egreso`
--
ALTER TABLE `egreso`
  ADD PRIMARY KEY (`no_tramite`,`no_orden`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vigilante`
--
ALTER TABLE `vigilante`
  ADD PRIMARY KEY (`codigo_vigilante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crv`
--
ALTER TABLE `crv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
