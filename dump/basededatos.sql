-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 12-06-2021 a las 23:36:09
-- Versión del servidor: 10.5.10-MariaDB-1:10.5.10+maria~focal
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--
CREATE DATABASE IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ventas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `imagen` text DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `categoria`) VALUES
(1, 'Samsung Galaxy Tab A', 420.99, 'https://images.samsung.com/is/image/samsung/latin-feature-the-tablet-that-goes-where-you-go-177556900?$FB_TYPE_A_MO_JPG$', 'Telefonos'),
(2, 'Motorola G9 Plus', 548.29, 'https://i.blogs.es/92134a/moto-g9-plus-01/840_560.jpg', 'Telefonos'),
(3, 'Samsung A10', 685.99, 'https://jet-web.s3.us-west-1.amazonaws.com/images/catalog/CELULARES/SAMSUNG%20A10%20TRASERA%20Y%20FRONTAL%20BLUE%202.jpg', 'Telefonos'),
(4, 'Lenovo Yoga', 1220.99, 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2019/09/lenovo-yoga.jpg?itok=wq1mVQ9o', 'Laptops'),
(5, 'HP Suface Laptop Go', 725.89, 'https://www.muycomputerpro.com/wp-content/uploads/2020/12/Surface-Laptop-Go.jpg', 'Laptops'),
(6, 'Asus ZenBook DUO', 1449.99, 'https://images-na.ssl-images-amazon.com/images/I/81deSneMCOL._AC_SL1500_.jpg', 'Laptops'),
(7, 'Audiculares nuraphone full color', 120.99, 'https://assets-global.website-files.com/5b2c8a9fa49e8e2d4604e60b/5eb34dd704ebab344d095278_nuraphone-desktop.png', 'Accesorios'),
(8, 'Havit I92 TWS', 125.89, 'https://i.ytimg.com/vi/JyKfsO2LqPI/maxresdefault.jpg', 'Accesorios'),
(9, 'Xiami Watch Color', 149.99, 'https://i.blogs.es/c10713/xiaomiwatchcolorz/1366_2000.jpg', 'Accesorios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
