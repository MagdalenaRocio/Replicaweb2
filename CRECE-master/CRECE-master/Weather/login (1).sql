-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2020 a las 17:15:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`) VALUES
(296832, 'Yesilli'),
(296860, 'Yesilhisar'),
(296885, 'Yesilalan'),
(737529, 'Yesilyurt'),
(1688072, 'Santa Magdalena'),
(2509304, 'Zufre'),
(2509369, 'Zahara de los Atunes'),
(2509374, 'Zagra'),
(2509386, 'Yeste'),
(2509465, 'Villavieja'),
(2509466, 'Villaviciosa de Cordoba'),
(2509472, 'Villavaliente'),
(2509477, 'Villasequilla de Yepes'),
(2509486, 'Villarrubia de Santiago'),
(2509495, 'Villaricos'),
(3436079, 'Belén de Escobar'),
(3638269, 'La Cruz de Belén'),
(3648365, 'Belén'),
(4161313, 'Lake Magdalene'),
(6357052, 'Santa Magdalena de Pulpis'),
(8223953, 'Santiago de Alcantara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `PASSWORD` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `EMAIL`, `PASSWORD`) VALUES
(1, 'madacastillo@hotmail.com', 'sotano'),
(2, '$EMAIL', '$password'),
(3, 'belen@hotmail.coom', '123456'),
(4, 'santi@hotmail.com', '123456'),
(5, 'yesid@gmail.com', '123456'),
(6, 'rocio', '123'),
(7, 'rocio', '1234'),
(8, 'rocio', '$2y$10$LA8e47jpWu7k1S0OoaOMuO/.WhCqjan6YA7ex2C0O.3eH9Be6EyCm'),
(9, 'isa@gmail.com', '$2y$10$ZvszFLWek1ofS.h0uAI6tOvcs/NOwFt5cUeJkPY5bf2lI.i/GMypW'),
(10, 'dayana@hotmail.com', '$2y$10$Rtn/HNSqWcx0wlUMOfZ6ceDFZAWeWCawyeZKZ17Nqd5kYMmX7ZVj.'),
(11, 'gema@gmail.com', '$2y$10$crn7BvdlGjnju1GPyxqn8OIYU2yaZmIDn87WmIeHxh3Kfpq9xoM2S'),
(12, 'gema@gmail.com', '$2y$10$EOasi.FzXlNGgujHtQhU2eMuFAVc/qXNB0pi.VWtZ0sFc2Kmz6tUO'),
(14, 'A@HOTMAIL.COM', '$2y$10$adpbiDvIkiNpY1G4ac41tOAk6pa2f9T45bnkaTEr/OSoeZ/j03go2'),
(15, 'madacastillo@hotmail.com', '$2y$10$H2wbKCo3rHZXXPlP80S8ieuhkE5TqLX/l/qfJTEzmy70xzv15IhSa'),
(16, 'madacastillo@hotmail.com', '$2y$10$LoF.yET5dHV6DJzwbQGAvezctU51Au/8P3Tfwmx.zlN0Zv3MFei9y'),
(17, 'madacastillo@hotmail.com', '$2y$10$zdH.mM14DokZIW2IPhGQj.yy/1zHopEM0wtrjqwJw4Ykh2fmMXNmS'),
(18, 'madacastillo@hotmail.com', '$2y$10$/8ANqHXgSZ3bwOTf9qbyKellyc1slZCUxYh9dv5WJUxng7o6/DA0y'),
(19, 'madacastillo@hotmail.com', '$2y$10$h6xw1mcnekhq0W7BrfU1GOooZUL32zMHUFq16mdHuqQNDXGh4tofO'),
(20, 'magda@hotmail.com', '$2y$10$ndywpjk6WMhKxayBO4yyh.xwy2AR7E.KuMecsaTiFkql7SEEtBb4i'),
(21, 'magda@hotmail.com', '$2y$10$i5UrDkzHcN77s5vd8mo86uonaCh1qGdoEOKhVFzywKeCS//8XfPGC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
