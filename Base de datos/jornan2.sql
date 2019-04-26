-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2019 a las 15:21:12
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jornan2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `idAbono` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `abonos`
--

INSERT INTO `abonos` (`idAbono`, `fecha`, `valor`) VALUES
(1, '2019-01-10', 50000),
(2, '2019-02-20', 35000),
(3, '2019-03-21', 100000),
(4, '2019-03-10', 250000),
(5, '2019-03-09', 90000),
(6, '2019-03-10', 500000),
(7, '2019-03-20', 80000),
(8, '2019-04-01', 1000000),
(9, '2019-04-05', 750000),
(10, '2019-04-20', 73850);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendacita`
--

CREATE TABLE `agendacita` (
  `idAgendaCita` int(11) NOT NULL,
  `idTipoCita` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agendacita`
--

INSERT INTO `agendacita` (`idAgendaCita`, `idTipoCita`, `idPersona`, `fecha`, `horaFin`, `horaInicio`, `direccion`, `estado`) VALUES
(1, 1, 100890657, '2018-12-24', '21:43:00', '18:31:00', 'alpes', b'1'),
(2, 2, 100890657, '2019-04-05', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(3, 2, 100890657, '2019-04-13', '16:35:00', '18:31:00', 'Calle 15-187', b'1'),
(4, 1, 100890657, '2019-04-25', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(5, 2, 100890657, '2019-04-23', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(6, 1, 100890657, '2019-04-12', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(7, 2, 100890657, '2019-04-09', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(8, 1, 100890657, '2019-04-15', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(9, 1, 100890657, '2019-04-13', '21:43:00', '18:31:00', 'Calle 15-187', b'1'),
(10, 2, 100890657, '2019-04-17', '21:43:00', '18:31:00', 'Calle 15-187', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `idCotizacion` int(11) NOT NULL,
  `idAgendaCita` int(11) NOT NULL,
  `nombreProducto` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descuento` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `subtotal` float NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`idCotizacion`, `idAgendaCita`, `nombreProducto`, `fecha`, `descuento`, `total`, `subtotal`, `estado`) VALUES
(1, 2, 'asdasd', '2019-04-22', 1, 480000, 0, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cotizacion_insumo`
--

CREATE TABLE `detalle_cotizacion_insumo` (
  `idDetalle` int(11) NOT NULL,
  `idInsumo` int(11) NOT NULL,
  `idCotizacion` int(11) NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_cotizacion_insumo`
--

INSERT INTO `detalle_cotizacion_insumo` (`idDetalle`, `idInsumo`, `idCotizacion`, `cantidad`) VALUES
(1, 2, 1, '5'),
(2, 5, 1, '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumo`
--

CREATE TABLE `insumo` (
  `idInsumo` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumo`
--

INSERT INTO `insumo` (`idInsumo`, `idProveedor`, `nombre`, `valor`) VALUES
(1, 1, 'Clavos', 100),
(2, 2, 'Colbon', 8000),
(3, 2, 'Canto', 17000),
(4, 2, 'hacha', 5000),
(5, 1, 'Bisagras', 20000),
(6, 2, 'Rieles', 18000),
(7, 2, 'MDF', 11500),
(8, 2, 'Madecor RH', 30000),
(9, 1, 'Chazos', 8300),
(10, 2, 'Macilla', 19000),
(11, 1, ' Jacobo', 12354);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenproduccion`
--

CREATE TABLE `ordenproduccion` (
  `idOrdenProduccion` int(11) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenproduccion`
--

INSERT INTO `ordenproduccion` (`idOrdenProduccion`, `fechaInicio`, `fechaFinal`, `estado`) VALUES
(1, '2019-04-02', '2019-04-02', b'1'),
(2, '2019-04-09', '2019-04-11', b'1'),
(3, '2019-04-10', '2019-04-26', b'1'),
(4, '2019-04-01', '2019-04-18', b'1'),
(5, '2019-04-17', '2019-04-20', b'1'),
(6, '2019-04-19', '2019-04-27', b'1'),
(7, '2019-04-03', '2019-04-25', b'1'),
(8, '2019-04-10', '2019-04-26', b'1'),
(9, '2019-04-05', '2019-04-27', b'1'),
(10, '2019-04-06', '2019-04-27', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL,
  `id_Cotizacion` int(11) NOT NULL,
  `direccionDomicilio` varchar(45) DEFAULT NULL,
  `recargoDomicilio` varchar(45) DEFAULT NULL,
  `monto` double NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`idPago`, `id_Cotizacion`, `direccionDomicilio`, `recargoDomicilio`, `monto`, `estado`) VALUES
(1, 1, 'belen', '40', 45000, 0),
(2, 2, 'belen', '80', 70000, 0),
(3, 3, 'belen', '850', 67000, 0),
(4, 4, 'belen', '560', 900000, 0),
(5, 5, 'belen', '90', 590000, 0),
(6, 6, 'bello', '80', 45000, 0),
(7, 7, 'bello', '80', 230000, 0),
(8, 1, 'Mordor - Orodruin', '6000', 80000, 0),
(9, 9, 'Calle 76 #91-91', '9000', 125000, 0),
(10, 10, 'robledo', '5000', 69000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `idTipoPersona` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `idTipoPersona`, `nombres`, `apellidos`, `correo`, `direccion`, `estado`, `telefono`, `password`) VALUES
(13432, 1, 'Laura', 'Sanchez', 'ppp@mail', 'alpes', b'1', 12345, 'D033E22AE348AEB5660FC2140AEC35850C4DA997'),
(79344, 2, ' Jacobo', 'Vargas', 'rocha@mail', 'Rosales', b'1', 79459, '0'),
(122343, 1, ' Cristian', 'Sanchez', 'scp@mail', 'belen', b'1', 435465768, '8cb2237d0679ca88db6464eac60da96345513964'),
(234324, 2, 'adasd', 'sadasd', 'qew', 'asdasd', b'1', 324234, '056eafe7cf52220de2df36845b8ed170c67e23e3'),
(5675677, 2, 'Davison', 'Mora Montero', 'MoraDavi@gmail.com', 'calle 90 # 12-78', b'1', 854732547, '0'),
(6789784, 1, ' Cristian', 'Sanchez', 'sss@mail', 'Rosales', b'1', 12345, '7d695548f82a9589a5b09da95040ad6930ce8b86'),
(10034586, 1, 'Johana', 'Burgos Ospina', 'Joha345@gmail.com', 'Calle 30 # 12-89', b'1', 5679034, '0'),
(86856856, 2, 'Maria', 'Cardenas Gómez', 'katalina@gmail.com', 'Calle 22 # 15-02', b'1', 9760676, '0'),
(99759324, 1, 'Julio', 'Cano Sepulveda', 'Canito.sj@gmail.com', 'Calle 67 # 89-01', b'1', 2342034, '0'),
(100890657, 1, 'Juan Carlos', 'Alzate Jaramillo', 'Juan.Alzate@gmail.com', 'Calle 73 sur # 23-14', b'1', 6789034, '0'),
(100892311, 2, 'Michelle', 'Guzmán Uran', 'M.uranG@gmail.com', 'Calle 3 # 18-95', b'1', 6709094, '0'),
(107686447, 2, 'Sara', 'Padilla Rincón', 'Sarita123@gmail.com', 'Calle 30 # 67-90', b'1', 10987457, '0'),
(344332344, 2, 'Juan', 'Cervantes Diaz', 'Jdc.6785@gmail.com', 'Calle 45 # 67-18', b'0', 3523532, '0'),
(345325255, 2, 'David', 'Marin Olarte', 'Olarte980@gmail.com', 'Calle 45 # 12-34', b'1', 53477432, 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planos`
--

CREATE TABLE `planos` (
  `idPlano` int(11) NOT NULL,
  `idCotizacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `img` mediumblob,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `razonSocial` varchar(45) DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `representanteLegal` varchar(45) DEFAULT NULL,
  `telefonoRepresentante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `nombre`, `razonSocial`, `nit`, `telefono`, `fax`, `direccion`, `representanteLegal`, `telefonoRepresentante`) VALUES
(1, 'cristian', 'SISAS', 345, '6453', '6879', 'BELEN', 'Ruben', '455'),
(2, 'Juan Bustamante Aguilar', 'Clavos y Tornillos SAS', 343436567, '2354562', '1242345', 'Calle 13 # 23-12', 'Miguel Cervantes', '134374'),
(3, 'Julio Ortiz', 'Ferreteria Ortices', 326547, '8684534', '865735', 'Calle 21 # 15-08', 'Juan Pablo Ortiz', '43647643'),
(4, ' Cristian', 'SISAS', 4657, '12345', '465786', 'Rosales', 'Rosa', '7568');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idPublicacion` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPublicacion`, `idPersona`, `fecha`, `estado`, `imagen`, `descripcion`) VALUES
(1, 99759324, '2019-04-18 05:17:23', b'0', 'documentos/img/cama1.png', 'cama individual con madera de roble, colchon comodisimos y patas de acero'),
(2, 99759324, '2019-04-19 06:28:18', b'1', 'documentos/img/closet1.png', 'closet de madera tipo cedro color negro mate con dos plataformas'),
(3, 100890657, '2019-04-18 19:23:24', b'1', 'documentos/img/clavos1.png', 'clavos de acero puro'),
(4, 99759324, '2019-04-19 16:18:19', b'0', 'documentos/img/clavos2.png', 'clavos de metal de 2 cm de largo'),
(5, 100890657, '2019-04-29 06:33:17', b'0', 'documentos/img/cama2.png', 'cama doble con madera de nogal'),
(6, 10034586, '2019-04-27 11:59:59', b'1', 'documentos/img/comedor3.png', 'comedor con madera de olmo, plataforma de vidrio y patas de acero'),
(7, 99759324, '2019-04-17 07:55:15', b'0', 'documentos/img/tornillos.png', 'tornillos negros de acero de 5 cm de largo'),
(8, 10034586, '2019-04-29 11:39:05', b'1', 'documentos/img/cocina.png', 'cajones de cocina hechos con madera de cerezo'),
(9, 99759324, '2019-04-16 15:54:59', b'0', 'documentos/img/comedor1.png', 'comedor con madera de cipres, plataforma redonda y patas de madera de roble'),
(10, 10034586, '2019-04-30 08:21:58', b'0', 'documentos/img/mesapersonal.png', 'mesa con madera de cipres, con dos cajones pequeños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocita`
--

CREATE TABLE `tipocita` (
  `idTipoCita` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocita`
--

INSERT INTO `tipocita` (`idTipoCita`, `nombre`) VALUES
(1, 'Cotización'),
(2, 'Instalación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopersona`
--

CREATE TABLE `tipopersona` (
  `idTipoPersona` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipopersona`
--

INSERT INTO `tipopersona` (`idTipoPersona`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_insumo` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`idAbono`);

--
-- Indices de la tabla `agendacita`
--
ALTER TABLE `agendacita`
  ADD PRIMARY KEY (`idAgendaCita`),
  ADD KEY `fk_AgendaCita_TipoCita` (`idTipoCita`),
  ADD KEY `fk_AgendaCita_Persona` (`idPersona`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`idCotizacion`),
  ADD KEY `fk_Cotizacion_AgendaCita` (`idAgendaCita`);

--
-- Indices de la tabla `detalle_cotizacion_insumo`
--
ALTER TABLE `detalle_cotizacion_insumo`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `fk_Detalle_Cotizacion` (`idCotizacion`),
  ADD KEY `fk_Detalle_Insumo` (`idInsumo`);

--
-- Indices de la tabla `insumo`
--
ALTER TABLE `insumo`
  ADD PRIMARY KEY (`idInsumo`),
  ADD KEY `fk_Insumo_Proveedor` (`idProveedor`);

--
-- Indices de la tabla `ordenproduccion`
--
ALTER TABLE `ordenproduccion`
  ADD PRIMARY KEY (`idOrdenProduccion`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `fk_Pago_Cotizacion` (`id_Cotizacion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `fk_Persona_TipoPersona` (`idTipoPersona`);

--
-- Indices de la tabla `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`idPlano`),
  ADD KEY `fk_Planos_Cotizacion` (`idCotizacion`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idPublicacion`),
  ADD KEY `fk_Publicaciones_Persona` (`idPersona`);

--
-- Indices de la tabla `tipocita`
--
ALTER TABLE `tipocita`
  ADD PRIMARY KEY (`idTipoCita`);

--
-- Indices de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  ADD PRIMARY KEY (`idTipoPersona`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `idAbono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `agendacita`
--
ALTER TABLE `agendacita`
  MODIFY `idAgendaCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `idCotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_cotizacion_insumo`
--
ALTER TABLE `detalle_cotizacion_insumo`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `insumo`
--
ALTER TABLE `insumo`
  MODIFY `idInsumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `planos`
--
ALTER TABLE `planos`
  MODIFY `idPlano` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipocita`
--
ALTER TABLE `tipocita`
  MODIFY `idTipoCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipopersona`
--
ALTER TABLE `tipopersona`
  MODIFY `idTipoPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `fk_Abonos_Pagos` FOREIGN KEY (`idAbono`) REFERENCES `pago` (`idPago`);

--
-- Filtros para la tabla `agendacita`
--
ALTER TABLE `agendacita`
  ADD CONSTRAINT `fk_AgendaCita_Persona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`),
  ADD CONSTRAINT `fk_AgendaCita_TipoCita` FOREIGN KEY (`idTipoCita`) REFERENCES `tipocita` (`idTipoCita`);

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `fk_Cotizacion_AgendaCita` FOREIGN KEY (`idAgendaCita`) REFERENCES `agendacita` (`idAgendaCita`);

--
-- Filtros para la tabla `detalle_cotizacion_insumo`
--
ALTER TABLE `detalle_cotizacion_insumo`
  ADD CONSTRAINT `fk_Detalle_Cotizacion` FOREIGN KEY (`idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`),
  ADD CONSTRAINT `fk_Detalle_Insumo` FOREIGN KEY (`idInsumo`) REFERENCES `insumo` (`idInsumo`);

--
-- Filtros para la tabla `insumo`
--
ALTER TABLE `insumo`
  ADD CONSTRAINT `fk_Insumo_Proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`);

--
-- Filtros para la tabla `ordenproduccion`
--
ALTER TABLE `ordenproduccion`
  ADD CONSTRAINT `fk_Orden_Cotizacion` FOREIGN KEY (`idOrdenProduccion`) REFERENCES `cotizacion` (`idCotizacion`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_Pago_Cotizacion` FOREIGN KEY (`id_Cotizacion`) REFERENCES `cotizacion` (`idCotizacion`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_Persona_TipoPersona` FOREIGN KEY (`idTipoPersona`) REFERENCES `tipopersona` (`idTipoPersona`);

--
-- Filtros para la tabla `planos`
--
ALTER TABLE `planos`
  ADD CONSTRAINT `fk_Planos_Cotizacion` FOREIGN KEY (`idCotizacion`) REFERENCES `cotizacion` (`idCotizacion`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_Publicaciones_Persona` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
