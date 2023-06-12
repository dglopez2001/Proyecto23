-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2023 a las 01:29:44
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
-- Base de datos: `carta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` text DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `rol` varchar(25) NOT NULL DEFAULT 'cliente',
  `salario` int(10) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `contraseña`, `correo`, `telefono`, `direccion`, `status`, `rol`, `salario`, `imagen`) VALUES
(1, 'Usuario Demo', '', 'demo@gmail.com', '900099900', 'Getafe', '1', 'cliente', NULL, './imagenes/anonimo.png'),
(2, 'cezary', 'cezary', 'cezary@gmail.es', '', NULL, '1', 'cliente', NULL, './imagenes/nosotros.jpg'),
(10, 'cezary2', 'cezary2', 'cezary2@gmail.es', '', NULL, '1', 'cliente', NULL, './imagenes/anonimo.png'),
(11, 'cezary3', 'cezary3', 'cezary3@cezary3.cezary3', '', NULL, '1', 'cliente', NULL, './imagenes/anonimo.png'),
(12, 'cezary5', 'cezary5', 'cezary5@cezary5.com', '', NULL, '1', 'cliente', NULL, './imagenes/anonimo.png'),
(13, 'cezary6', 'cezary6', 'cezary6@cezary6.cezary6', '', NULL, '1', 'cliente', NULL, './imagenes/anonimo.png'),
(14, 'cezary7', 'cezary7', 'cezary7@cezary7', '', NULL, '1', 'cliente', NULL, './imagenes/anonimo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `discount` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `categoria` varchar(25) DEFAULT NULL,
  `talla` varchar(25) DEFAULT 'S M L XL',
  `imagen` varchar(500) DEFAULT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `price`, `discount`, `created`, `modified`, `status`, `categoria`, `talla`, `imagen`, `stock`) VALUES
(1, 'Abrigo 1', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/1.png', 720),
(2, 'Abrigo 2', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/2.png', 1000),
(3, 'Abrigo 3', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/3.png', 1000),
(4, 'Abrigo 4', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/4.png', 1000),
(5, 'Abrigo 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/5.png', 100),
(6, 'Abrigo 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/6.png', 100),
(7, 'Abrigo 7', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/7.png', 50),
(8, 'Abrigo 8', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/8.png', 80),
(9, 'Abrigo 9', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/9.png', 90),
(10, 'Abrigo 10', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/10.png', 40),
(11, 'Abrigo 11', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/11.png', 1000),
(12, 'Abrigo 12', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/12.png', 1000),
(13, 'Abrigo 13', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L', 'abrigos/13.png', 1000),
(14, 'Abrigo 14', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/14.png', 100),
(15, 'Abrigo 15', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/15.png', 100),
(16, 'Abrigo 16', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/16.png', 100),
(17, 'Abrigo 17', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/17.png', 1000),
(18, 'Abrigo 18', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-plumas', 'S M L XL', 'abrigos/18.png', 1000),
(19, 'Abrigo 19', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/19.png', 1000),
(20, 'Abrigo 20', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/20.png', 1000),
(21, 'Abrigo 21', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/21.png', 1000),
(22, 'Abrigo 22', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/22.png', 100),
(23, 'Abrigo 23', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/23.png', 1000),
(24, 'Abrigo 24', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/24.png', 1000),
(25, 'Abrigo 25', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/25.png', 75),
(26, 'Abrigo 26', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/26.png', 100),
(27, 'Abrigo 27', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/27.png', 1000),
(28, 'Abrigo 28', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/28.png', 60),
(29, 'Abrigo 29', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/29.png', 55),
(30, 'Abrigo 30', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/30.png', 1000),
(31, 'Abrigo 31', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/31.png', 1000),
(32, 'Abrigo 32', 'Lorem ipsum', 20.00, 10, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/32.png', 100),
(33, 'Abrigo 33', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/33.png', 1000),
(34, 'Abrigo 34', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/34.png', 1000),
(35, 'Abrigo 35', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-anorak', 'S M L', 'abrigos/35.png', 1000),
(36, 'Abrigo 36', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-anorak', 'S M L XL', 'abrigos/36.png', 100),
(37, 'Abrigo 37', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/37.png', 1000),
(38, 'Abrigo 38', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/38.png', 1000),
(39, 'Abrigo 39', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/39.png', 1000),
(40, 'Abrigo 40', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/40.png', 1000),
(41, 'Abrigo 41', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/41.png', 1000),
(42, 'Abrigo 42', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/42.png', 1000),
(43, 'Abrigo 43', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/43.png', 1000),
(44, 'Abrigo 44', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/44.png', 100),
(45, 'Abrigo 45', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/45.png', 100),
(46, 'Abrigo 46', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/46.png', 100),
(47, 'Abrigo 47', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/47.png', 1000),
(48, 'Abrigo 48', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/48.png', 1000),
(49, 'Abrigo 49', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/49.png', 1000),
(50, 'Abrigo 50', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/50.png', 1000),
(51, 'Abrigo 51', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L', 'abrigos/51.png', 1000),
(52, 'Abrigo 52', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/52.png', 100),
(53, 'Abrigo 53', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/53.png', 1000),
(54, 'Abrigo 54', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'abrigos-hardshell', 'S M L XL', 'abrigos/54.png', 1000),


(109, 'Chaqueta 1', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/1.png', 1000),
(110, 'Chaqueta 2', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/2.png', 1000),
(111, 'Chaqueta 3', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/3.png', 1000),
(112, 'Chaqueta 4', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/4.png', 1000),
(113, 'Chaqueta 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/5.png', 100),
(114, 'Chaqueta 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/6.png', 100),
(115, 'Chaqueta 7', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/7.png', 50),
(116, 'Chaqueta 8', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/8.png', 80),
(117, 'Chaqueta 9', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/9.png', 90),
(118, 'Chaqueta 10', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/10.png', 40),
(119, 'Chaqueta 11', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/11.png', 1000),
(120, 'Chaqueta 12', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/12.png', 1000),
(121, 'Chaqueta 13', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L', 'chaquetas/13.png', 1000),
(122, 'Chaqueta 14', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/14.png', 100),
(123, 'Chaqueta 15', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/15.png', 100),
(124, 'Chaqueta 16', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/16.png', 100),
(125, 'Chaqueta 17', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/17.png', 1000),
(126, 'Chaqueta 18', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-softshell', 'S M L XL', 'chaquetas/18.png', 1000),
(127, 'Chaqueta 19', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/19.png', 1000),
(128, 'Chaqueta 20', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/20.png', 1000),
(129, 'Chaqueta 21', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/21.png', 1000),
(130, 'Chaqueta 22', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/22.png', 100),
(131, 'Chaqueta 23', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/23.png', 1000),
(132, 'Chaqueta 24', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/24.png', 1000),
(133, 'Chaqueta 25', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/25.png', 75),
(134, 'Chaqueta 26', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/26.png', 100),
(135, 'Chaqueta 27', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/27.png', 1000),
(136, 'Chaqueta 28', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/28.png', 60),
(137, 'Chaqueta 29', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/29.png', 55),
(138, 'Chaqueta 30', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/30.png', 1000),
(139, 'Chaqueta 31', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/31.png', 1000),
(140, 'Chaqueta 32', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/32.png', 100),
(141, 'Chaqueta 33', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/33.png', 1000),
(142, 'Chaqueta 34', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/34.png', 1000),
(143, 'Chaqueta 35', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-cortavientos', 'S M L', 'chaquetas/35.png', 1000),
(144, 'Chaqueta 36', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-cortavientos', 'S M L XL', 'chaquetas/36.png', 100),
(145, 'Chaqueta 37', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/37.png', 1000),
(146, 'Chaqueta 38', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/38.png', 1000),
(147, 'Chaqueta 39', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/39.png', 1000),
(148, 'Chaqueta 40', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/40.png', 1000),
(149, 'Chaqueta 41', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/41.png', 1000),
(150, 'Chaqueta 42', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/42.png', 1000),
(151, 'Chaqueta 43', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/43.png', 1000),
(152, 'Chaqueta 44', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/44.png', 100),
(153, 'Chaqueta 45', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/45.png', 100),
(154, 'Chaqueta 46', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/46.png', 100),
(155, 'Chaqueta 47', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/47.png', 1000),
(156, 'Chaqueta 48', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/48.png', 1000),
(157, 'Chaqueta 49', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/49.png', 1000),
(158, 'Chaqueta 50', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/50.png', 1000),
(159, 'Chaqueta 51', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L', 'chaquetas/51.png', 1000),
(160, 'Chaqueta 52', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/52.png', 100),
(161, 'Chaqueta 53', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/53.png', 1000),
(162, 'Chaqueta 54', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'chaquetas-impermeable', 'S M L XL', 'chaquetas/54.png', 1000),




(163, 'Camiseta 1', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/1.png', 1000),
(164, 'Camiseta 2', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/2.png', 1000),
(165, 'Camiseta 3', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/3.png', 1000),
(166, 'Camiseta 4', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/4.png', 1000),
(167, 'Camiseta 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/5.png', 100),
(168, 'Camiseta 6', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/6.png', 100),
(169, 'Camiseta 7', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/7.png', 50),
(170, 'Camiseta 8', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/8.png', 80),
(171, 'Camiseta 9', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/9.png', 90),
(172, 'Camiseta 10', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/10.png', 40),
(173, 'Camiseta 11', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/11.png', 1000),
(174, 'Camiseta 12', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/12.png', 1000),
(175, 'Camiseta 13', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L', 'camisetas/13.png', 1000),
(176, 'Camiseta 14', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/14.png', 100),
(177, 'Camiseta 15', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/15.png', 100),
(178, 'Camiseta 16', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/16.png', 100),
(179, 'Camiseta 17', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/17.png', 1000),
(180, 'Camiseta 18', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-termicas', 'S M L XL', 'camisetas/18.png', 1000),
(181, 'Camiseta 19', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/19.png', 1000),
(182, 'Camiseta 20', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/20.png', 1000),
(183, 'Camiseta 21', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/21.png', 1000),
(184, 'Camiseta 22', 'Lorem ipsum', 20.00, 10, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/22.png', 100),
(185, 'Camiseta 23', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/23.png', 1000),
(186, 'Camiseta 24', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/24.png', 1000),
(187, 'Camiseta 25', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/25.png', 75),
(188, 'Camiseta 26', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/26.png', 100),
(189, 'Camiseta 27', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/27.png', 1000),
(190, 'Camiseta 28', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/28.png', 60),
(191, 'Camiseta 29', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/29.png', 55),
(192, 'Camiseta 30', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/30.png', 1000),
(193, 'Camiseta 31', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/31.png', 1000),
(194, 'Camiseta 32', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/32.png', 100),
(195, 'Camiseta 33', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/33.png', 1000),
(196, 'Camiseta 34', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/34.png', 1000),
(197, 'Camiseta 35', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-compresion', 'S M L', 'camisetas/35.png', 1000),
(198, 'Camiseta 36', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-compresion', 'S M L XL', 'camisetas/36.png', 100),
(199, 'Camiseta 37', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/37.png', 1000),
(200, 'Camiseta 38', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/38.png', 1000),
(201, 'Camiseta 39', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/39.png', 1000),
(202, 'Camiseta 40', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/40.png', 1000),
(203, 'Camiseta 41', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/41.png', 1000),
(204, 'Camiseta 42', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/42.png', 1000),
(205, 'Camiseta 43', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/43.png', 1000),
(206, 'Camiseta 44', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-corta', 'S M L XL', 'camisetas/44.png', 100),
(207, 'Camiseta 45', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'camisetas-corta', 'S M L XL', 'camisetas/45.png', 100),
(208, 'Camiseta 46', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-corta', 'S M L XL', 'camisetas/46.png', 100),
(209, 'Camiseta 47', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/47.png', 1000),
(210, 'Camiseta 48', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/48.png', 1000),
(211, 'Camiseta 49', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/49.png', 1000),
(212, 'Camiseta 50', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/50.png', 1000),
(213, 'Camiseta 51', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L', 'camisetas/51.png', 1000),
(214, 'Camiseta 52', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'camisetas-corta', 'S M L XL', 'camisetas/52.png', 100),
(215, 'Camiseta 53', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/53.png', 1000),
(216, 'Camiseta 54', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'camisetas-corta', 'S M L XL', 'camisetas/54.png', 1000),



(217, 'Calzado 1', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41 42', 'calzado/1.png', 1000),
(218, 'Calzado 2', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/2.png', 1000),
(219, 'Calzado 3', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/3.png', 1000),
(220, 'Calzado 4', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '36 37 38 39 40 41 42', 'calzado/4.png', 1000),
(221, 'Calzado 5', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/5.png', 100),
(222, 'Calzado 6', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/6.png', 100),
(223, 'Calzado 7', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-bota', '36 37 38 39 40 41 42', 'calzado/7.png', 50),
(224, 'Calzado 8', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/8.png', 80),
(225, 'Calzado 9', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/9.png', 90),
(226, 'Calzado 10', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41 42', 'calzado/10.png', 40),
(227, 'Calzado 11', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/11.png', 1000),
(228, 'Calzado 12', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41 42', 'calzado/12.png', 1000),
(229, 'Calzado 13', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/13.png', 1000),
(230, 'Calzado 14', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/14.png', 100),
(231, 'Calzado 15', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/15.png', 100),
(232, 'Calzado 16', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-bota', '36 37 38 39 40 41', 'calzado/16.png', 100),
(233, 'Calzado 17', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '37 38 39 40 41', 'calzado/17.png', 1000),
(234, 'Calzado 18', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-bota', '36 37 38 39 40 41 42', 'calzado/18.png', 1000),
(235, 'Calzado 19', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/19.png', 1000),
(236, 'Calzado 20', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/20.png', 1000),
(237, 'Calzado 21', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/21.png', 1000),
(238, 'Calzado 22', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-sandalia', '36 37 38 39 40 41', 'calzado/22.png', 100),
(239, 'Calzado 23', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/23.png', 1000),
(240, 'Calzado 24', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '36 37 38 39 40 41 42', 'calzado/24.png', 1000),
(241, 'Calzado 25', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/25.png', 75),
(242, 'Calzado 26', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/26.png', 100),
(243, 'Calzado 27', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '36 37 38 39 40 41', 'calzado/27.png', 1000),
(244, 'Calzado 28', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/28.png', 60),
(245, 'Calzado 29', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '36 37 38 39 40 41 42', 'calzado/29.png', 55),
(246, 'Calzado 30', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/30.png', 1000),
(247, 'Calzado 31', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/31.png', 1000),
(248, 'Calzado 32', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-sandalia', '36 37 38 39 40 41 42', 'calzado/32.png', 100),
(249, 'Calzado 33', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41 42', 'calzado/33.png', 1000),
(250, 'Calzado 34', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/34.png', 1000),
(251, 'Calzado 35', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-sandalia', '36 37 38 39 40 41', 'calzado/35.png', 1000),
(252, 'Calzado 36', 'Lorem ipsum', 20.00, 10, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-sandalia', '37 38 39 40 41', 'calzado/36.png', 100),
(253, 'Calzado 37', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '36 37 38 39 40 41 42', 'calzado/37.png', 1000),
(254, 'Calzado 38', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41', 'calzado/38.png', 1000),
(255, 'Calzado 39', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '36 37 38 39 40 41 42', 'calzado/39.png', 1000),
(256, 'Calzado 40', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41', 'calzado/40.png', 1000),
(257, 'Calzado 41', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41 42', 'calzado/41.png', 1000),
(258, 'Calzado 42', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '36 37 38 39 40 41', 'calzado/42.png', 1000),
(259, 'Calzado 43', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41 42', 'calzado/43.png', 1000),
(260, 'Calzado 44', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-running', '36 37 38 39 40 41', 'calzado/44.png', 100),
(261, 'Calzado 45', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'calzado-running', '37 38 39 40 41', 'calzado/45.png', 100),
(262, 'Calzado 46', 'Lorem ipsum', 20.00, 10, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-running', '36 37 38 39 40 41', 'calzado/46.png', 100),
(263, 'Calzado 47', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '36 37 38 39 40 41 42', 'calzado/47.png', 1000),
(264, 'Calzado 48', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41', 'calzado/48.png', 1000),
(265, 'Calzado 49', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41 42', 'calzado/49.png', 1000),
(266, 'Calzado 50', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '36 37 38 39 40 41', 'calzado/50.png', 1000),
(267, 'Calzado 51', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41 42', 'calzado/51.png', 1000),
(268, 'Calzado 52', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'calzado-running', '36 37 38 39 40 41', 'calzado/52.png', 100),
(269, 'Calzado 53', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41 42', 'calzado/53.png', 1000),
(270, 'Calzado 54', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'calzado-running', '37 38 39 40 41', 'calzado/54.png', 1000), 





(271, 'Mochila 1', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/1.png', 90),
(272, 'Mochila 2', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/2.png', 40),
(273, 'Mochila 3', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/3.png', 1000),
(274, 'Mochila 4', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/4.png', 1000),
(275, 'Mochila 5', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/5.png', 1000),
(276, 'Mochila 6', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-mochila', '50L 60L', 'otros/6.png', 100),
(276, 'Mochila 6', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-mochila', '50L 60L', 'otros/6.png', 100),
(277, 'Mochila 7', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-mochila', '50L', 'otros/7.png', 100),
(278, 'Mochila 8', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-mochila', '50L', 'otros/8.png', 100),
(279, 'Mochila 9', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/9.png', 1000),
(280, 'Mochila 10', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/10.png', 1000),
(281, 'Mochila 11', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/11.png', 1000),
(282, 'Mochila 12', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/12.png', 1000),
(283, 'Mochila 13', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/13.png', 1000),
(284, 'Mochila 14', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-mochila', '50L', 'otros/14.png', 100),
(285, 'Mochila 15', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L 60L', 'otros/15.png', 1000),
(286, 'Mochila 16', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/16.png', 1000),
(287, 'Mochila 17', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-mochila', '50L', 'otros/17.png', 75),
(288, 'Mochila 18', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-mochila', '50L', 'otros/18.png', 100),
(289, 'Gorro 19', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/19.png', 1000),
(290, 'Gorro 20', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/20.png', 60),
(291, 'Gorro 21', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/21.png', 55),
(292, 'Gorro 22', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/22.png', 1000),
(293, 'Gorro 23', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/23.png', 1000),
(294, 'Gorro 24', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-gorro', 'S M L XL', 'otros/24.png', 100),
(295, 'Gorro 25', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/25.png', 1000),
(296, 'Gorro 26', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/26.png', 1000),
(297, 'Gorro 27', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/27.png', 1000),
(298, 'Gorro 28', 'Lorem ipsum', 20.00, 10, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-gorro', 'S M L XL', 'otros/28.png', 100),
(299, 'Gorro 29', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/29.png', 1000),
(300, 'Gorro 30', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/30.png', 1000),
(301, 'Gorro 31', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L XL', 'otros/31.png', 1000),
(302, 'Gorro 32', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/32.png', 1000),
(303, 'Gorro 33', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/33.png', 1000),
(304, 'Gorro 33', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/34.png', 1000),
(305, 'Gorro 35', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-gorro', 'S M L', 'otros/35.png', 1000),
(306, 'Gorro 36', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-gorro', 'S M L XL', 'otros/36.png', 100),
(307, 'Guantes 37', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-guantes', 'S M L XL', 'otros/37.png', 100),
(308, 'Guantes 38', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-guantes', 'S M L XL', 'otros/38.png', 100),
(309, 'Guantes 39', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L XL', 'otros/39.png', 1000),
(310, 'Guantes 40', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L XL', 'otros/40.png', 1000),
(311, 'Guantes 41', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/41.png', 1000),
(312, 'Guantes 42', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/42.png', 1000),
(313, 'Guantes 43', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/43.png', 1000),
(314, 'Guantes 44', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-guantes', 'S M L XL', 'otros/44.png', 100),
(315, 'Guantes 45', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L XL', 'otros/45.png', 1000),
(316, 'Guantes 46', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L XL', 'otros/46.png', 1000),
(317, 'Guantes 47', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/47.png', 1000),
(318, 'Guantes 48', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/48.png', 1000),
(319, 'Guantes 49', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/49.png', 1000),
(320, 'Guantes 50', 'Lorem ipsum', 15.00, 7.5, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L', 'otros/50.png', 1000),
(321, 'Guantes 51', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-guantes', 'S M L XL', 'otros/51.png', 100),
(322, 'Guantes 52', 'Lorem ipsum', 15.00, 0, '2023-05-04 23:45:00', '2023-05-04 23:45:00', '1', 'otros-guantes', 'S M L XL', 'otros/52.png', 100),
(323, 'Guantes 53', 'Lorem ipsum', 20.00, 0, '2023-05-04 23:46:18', '2023-05-04 23:46:18', '1', 'otros-guantes', 'S M L XL', 'otros/53.png', 50),
(324, 'Guantes 54', 'Lorem ipsum', 30.00, 15, '2023-05-04 23:47:13', '2023-05-04 23:47:13', '1', 'otros-guantes', 'S M L XL', 'otros/54.png', 80);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(6, 1, 40.00, '2023-04-15 15:03:14', '2023-04-15 15:03:14', '1'),
(7, 1, 210.00, '2023-04-15 19:29:04', '2023-04-15 19:29:04', '1'),
(8, 1, 150.00, '2023-04-15 19:42:52', '2023-04-15 19:42:52', '1'),
(9, 1, 15.00, '2023-04-15 21:48:29', '2023-04-15 21:48:29', '1'),
(10, 1, 40.00, '2023-04-16 11:46:19', '2023-04-16 11:46:19', '1'),
(11, 1, 50.00, '2023-04-23 13:00:13', '2023-04-23 13:00:13', '1'),
(12, 1, 7.50, '2023-04-24 10:38:59', '2023-04-24 10:38:59', '1'),
(13, 1, 20.00, '2023-04-26 00:07:51', '2023-04-26 00:07:51', '1'),
(14, 1, 32.50, '2023-04-26 00:08:50', '2023-04-26 00:08:50', '1'),
(15, 1, 20.00, '2023-04-26 00:09:30', '2023-04-26 00:09:30', '1'),
(16, 2, 32.50, '2023-04-26 00:27:44', '2023-04-26 00:27:44', '1'),
(17, 1, 12.50, '2023-04-26 23:27:48', '2023-04-26 23:27:48', '1'),
(18, 1, 37.50, '2023-04-26 23:30:49', '2023-04-26 23:30:49', '1'),
(19, 1, 12.50, '2023-04-27 09:53:20', '2023-04-27 09:53:20', '1'),
(20, 1, 55.00, '2023-04-29 16:18:15', '2023-04-29 16:18:15', '1'),
(21, 1, 20.00, '2023-05-03 00:02:11', '2023-05-03 00:02:11', '1'),
(22, 1, 20.00, '2023-05-03 00:23:29', '2023-05-03 00:23:29', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(5, 7, 1, 4),
(7, 9, 1, 1),
(10, 11, 1, 1),
(13, 12, 1, 1),
(23, 18, 1, 1),
(29, 21, 1, 1),
(30, 22, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `mis_productos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
