-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2023 a las 18:16:18
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
-- Base de datos: `patasfelices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `imgCategoria` varchar(32) NOT NULL DEFAULT 'imgCategoria.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `categoria`, `imgCategoria`) VALUES
(1, 'Alimentación', 'cat1.jpg'),
(2, 'Cuidado', 'cat2.jpg'),
(3, 'Accesorios', 'cat3.jpg'),
(4, 'Salud', 'cat4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigoProducto` int(11) NOT NULL,
  `nombreProducto` varchar(32) NOT NULL,
  `precioProducto` float NOT NULL,
  `descripcionProducto` varchar(300) NOT NULL,
  `imgProducto` varchar(32) NOT NULL DEFAULT 'imgProducto.jpg',
  `categoriaProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoProducto`, `nombreProducto`, `precioProducto`, `descripcionProducto`, `imgProducto`, `categoriaProducto`) VALUES
(1, 'Sieger', 29000, 'Fórmula premium con ingredientes seleccionados para una nutrición equilibrada. Ideal para perros de todas las edades y razas. Contiene proteínas de alta calidad y vitaminas esenciales.', 'alimen1.jpg', 1),
(2, 'Pedigree', 21761, 'Una opción saludable y deliciosa para perros activos. Elaborado con carne magra, arroz integral y verduras frescas. Sin colorantes ni conservantes artificiales.', 'alimen2.jpg', 1),
(3, 'Purina', 29590, 'Elaborado con ingredientes que apoyan la salud de las articulaciones, la digestión y la función cerebral, este alimento está diseñado para perros mayores. Su equilibrio de nutrientes ayuda a mantener la vitalidad y la salud general de los perros mayores.', 'alimen3.jpg', 1),
(4, 'Old Prince', 27950, 'Es un alimento balanceado para perros adultos que buscan mantener un estilo de vida activo y saludable. Formulado con ingredientes de alta calidad, este alimento proporciona los nutrientes esenciales para el bienestar general de tu mascota.', 'alimen4.jpg', 1),
(5, 'Royal Canin', 25990, 'Una fórmula gourmet especialmente creada para perros de razas pequeñas con paladares exigentes. Ingredientes de primera calidad combinados de manera deliciosa para satisfacer incluso a los comensales más selectos.', 'alimen5.jpg', 1),
(6, 'Eukanuba', 35260, 'Es un alimento especialmente diseñado para perros de razas pequeñas que buscan una nutrición de calidad en un formato adaptado a sus necesidades. Este alimento proporciona un equilibrio perfecto de proteínas y nutrientes esenciales. ', 'alimen6.jpg', 1),
(7, 'Dermapet', 4500, 'Shampoo para perros. Fórmula suave que limpia profundamente sin irritar la piel sensible de tu perro. Aroma fresco y duradero', 'cuid1.jpg', 2),
(9, 'Cepillo Rast ', 5090, 'Herramienta eficaz para deshacer nudos y enredos en el pelaje de tu mascota. Ideal para razas de pelo largo.', 'cuid2.jpg', 2),
(10, 'Dogit Guillotina', 8050, 'Herramienta segura y fácil de usar para mantener las uñas de tu perro en longitud adecuada. Incluye lima para un acabado suave.', 'ciud3.jpg', 2),
(11, 'Osspret', 5250, 'Fragancia suave y duradera que elimina olores indeseados, dejando a tu perro con un aroma agradable.', 'cuid4.jpg', 2),
(12, 'Snack Mon', 1250, 'Excelente para el cuidado bucal para perros, ayuda a prevenir la acumulación de placa y mantener un aliento fresco.', 'cuid5.jpg', 2),
(13, 'Bolsas Eco', 2750, 'Bolsas resistentes y respetuosas con el medio ambiente para una limpieza fácil y responsable.', 'cuid6.jpg', 2),
(14, 'Rascals Soga', 6090, 'El Juguete Rascals Soga es una gran opción para jugar a tironear con tu mascota, divertirse y mejorar su vínculo . La soga ayuda a tu mascota a reducir estrés, además de estimular su inteligencia.', 'acces1.jpg', 3),
(15, 'Correa Flippy', 14350, 'Está fabricada con nylon resistente, cuenta con un mando único para tres funciones diferentes: marcha libre, bloqueo momentáneo y bloqueo permanente, lo que permite una máxima libertad de movimiento.', 'acces2.jpg', 3),
(16, 'Comedero', 8550, 'El Comedero Doble de acero inoxidable, cuenta con una base de goma antideslizante para una mejor alimentación perruna.', 'acces3.jpg', 3),
(17, 'Transportadora', 56190, 'Está aprobada por IATA para llevarla en avión. Para darte la seguridad que estabas buscando, cuentan con bloqueo doble comando y compartimientos múltiples para que puedas llevar lo necesario.', 'acces4.jpg', 3),
(18, 'Moisés', 27990, 'El Moisés Puppis Reversible Azul está confeccionado en suave Chenille y elegante Pana, es el lugar perfecto para que tu mascota descanse con comodidad y estilo. Su diseño versátil permite cambiar la apariencia según tu gusto o la temporada.', 'acces5.jpg', 3),
(19, 'Rascals Dispenser', 15150, 'Está pensado para que tu perro pueda divertirse y jugar en todo momento, logrando así una vida alegre y libre de estrés. Además, el juguete se puede rellenar con snacks saludables, haciendo que tu mascota utilice la curiosidad.', 'acces6.jpg', 3),
(21, 'Antipulgas', 14300, 'Antipulgas Y Garrapatas Bravecto Para Perros - 4,5 a 10 Kg. Uno de los mejores y más efectivos del mercado.', 'salud1.jpg', 4),
(22, 'Seresto Collar', 11700, 'Collar contra Pulgas y Garrapatas Perros y Gatos de hasta 8Kg. Matapulgas, garrapatas, flebótomos y piojos.', 'salud2.jpg', 4),
(23, 'Pipeta', 2400, 'FRONTLINE Spot-On (1Pipeta) - 2-10Kg. De 3 a 5 minutos de contacto para eliminar las pulgas que buscan reinfestar a tu mascota.', 'salud3.jpg', 4),
(24, 'Antiparasitario', 2150, 'Antiparasitario Externo Ecthol 5 - 70ml. Se usa para el tratamiento de infecciones ocasionadas por bacterias o parásitos. También se usa para el tratamiento del algunos cánceres. ', 'salud4.jpg', 4),
(25, 'Colotrin', 6260, 'Se usa en caninos, para el tratamiento de la osteoartritis primaria y secundaria y otros procesos inflamatorios de las articulaciones, tales como la tendinitis, sinovitis y las artritis no infecciosas.', 'salud5.jpg', 4),
(26, 'Tónico', 4560, 'Complementa y previene estados carenciales en animales con dietas deficientes o en animales que padecen estados debilitantes o carenciales de cualquier otro origen.', 'salud6.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `nivel` varchar(10) NOT NULL DEFAULT 'usuario',
  `estado` varchar(15) NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `mail`, `pass`, `nivel`, `estado`) VALUES
(7, 'Tomas', 't@t', 'e358efa489f58062f10dd7316b65649e', 'admin', 'activo'),
(8, 'David', 'd@d', '8277e0910d750195b448797616e091ad', 'usuario', 'activo'),
(9, 'Pablo', 'p@p', '83878c91171338902e0fe0fb97a8c47a', 'usuario', 'banneado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `categoriaProducto` (`categoriaProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoriaProducto`) REFERENCES `categorias` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
