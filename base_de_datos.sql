-- Estructura de tabla para la tabla `prestamos_proyectores`
-- Creado por: Martinez Martinez Luis Gerardo (ID: 25)

CREATE TABLE IF NOT EXISTS `prestamos_proyectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `dato` varchar(100) NOT NULL,
  `observaciones` text DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla (Ejemplos para tus 10 registros)
INSERT INTO `prestamos_proyectores` (`nombre`, `categoria`, `dato`, `observaciones`) VALUES
('Luis Gerardo Martinez', 'Sistemas', 'Epson X41', 'Con cable HDMI'),
('Juan Perez', 'Aula 102', 'Sony VPL', 'Entregado sin control'),
('Maria Garcia', 'Auditorio', 'BenQ MX5', 'Lente sucio');
