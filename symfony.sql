-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2017 at 03:56 PM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `descripcion_bus` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nom_chofer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom_ayudante` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cooperativa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2F566B6915DF1885` (`matricula`),
  KEY `IDX_2F566B6926ECA17` (`cooperativa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cooperativa`
--

CREATE TABLE IF NOT EXISTS `cooperativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_coop` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ruc_coop` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_766A186237DE474F` (`nombre_coop`),
  UNIQUE KEY `UNIQ_766A1862D95C4142` (`ruc_coop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `destino`
--

CREATE TABLE IF NOT EXISTS `destino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_destino` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiempo_viaje` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `precio` decimal(2,0) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_81F64EFA74794532` (`nom_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hora_salida` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `destino_id` int(11) DEFAULT NULL,
  `bus_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E25853A3E4360615` (`destino_id`),
  KEY `IDX_E25853A32546731D` (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_asientos` int(11) NOT NULL,
  `fecha` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `horario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_188D2E3BDB38439E` (`usuario_id`),
  KEY `IDX_188D2E3B4959F1BA` (`horario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E553F37A02A2F00` (`descripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `discapacidad` tinyint(1) NOT NULL,
  `nom_usuario` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2265B05D7BF39BE0` (`cedula`),
  UNIQUE KEY `UNIQ_2265B05DD7EABB95` (`nom_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `FK_2F566B6926ECA17` FOREIGN KEY (`cooperativa_id`) REFERENCES `cooperativa` (`id`);

--
-- Constraints for table `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `FK_E25853A32546731D` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`),
  ADD CONSTRAINT `FK_E25853A3E4360615` FOREIGN KEY (`destino_id`) REFERENCES `destino` (`id`);

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_188D2E3B4959F1BA` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`),
  ADD CONSTRAINT `FK_188D2E3BDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
