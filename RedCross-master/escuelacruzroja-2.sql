-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 25-10-2015 a las 05:32:32
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `escuelacruzroja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
`id_alumno` int(11) NOT NULL COMMENT 'id de alumno',
  `contra_alumno` varchar(255) NOT NULL COMMENT 'contraseña de alumno',
  `a_nombre` varchar(60) DEFAULT NULL COMMENT 'nombre',
  `a_apellidpaterno` varchar(60) DEFAULT NULL COMMENT 'apellido paterno',
  `a_apellidomaterno` varchar(60) DEFAULT NULL COMMENT 'apellido materno',
  `a_fechanac` date DEFAULT NULL COMMENT 'fecha de nacimiento',
  `a_lugarnac` varchar(60) DEFAULT NULL COMMENT 'lugar de nacimiento',
  `a_nacionalidad` varchar(60) DEFAULT NULL COMMENT 'nacionalidad',
  `a_sexo` varchar(1) DEFAULT NULL COMMENT 'sexo',
  `a_estadocivil` varchar(60) DEFAULT NULL COMMENT 'estado civil',
  `a_gposanguineo` varchar(16) DEFAULT NULL COMMENT 'grupo sanguineo',
  `a_rh` varchar(16) DEFAULT NULL COMMENT 'rh',
  `a_curp` varchar(20) DEFAULT NULL COMMENT 'curp',
  `a_servmedico` varchar(60) DEFAULT NULL COMMENT 'servicio médico',
  `a_trabajo` varchar(254) DEFAULT NULL COMMENT 'trabajo',
  `a_enfermedades` varchar(254) DEFAULT NULL COMMENT 'enfermedades',
  `a_alergias` varchar(254) DEFAULT NULL COMMENT 'alergias',
  `a_debilidadmotriz` varchar(254) DEFAULT NULL COMMENT 'indicar alguna debilidad motriz',
  `a_domicilio` varchar(254) DEFAULT NULL COMMENT 'domicilio',
  `a_numext` varchar(16) DEFAULT NULL COMMENT 'numero ext',
  `a_numint` varchar(16) DEFAULT NULL COMMENT 'num int',
  `a_cp` varchar(16) DEFAULT NULL COMMENT 'codigo postal',
  `a_colonia` varchar(254) DEFAULT NULL COMMENT 'colonia',
  `a_municipio` varchar(254) DEFAULT NULL COMMENT 'municipio',
  `a_numlocal` int(11) DEFAULT NULL COMMENT 'número local',
  `a_numcelular` int(11) DEFAULT NULL COMMENT 'número celular',
  `a_nompapa` varchar(60) DEFAULT NULL COMMENT 'nombre del papa',
  `a_ocupacionpapa` varchar(60) DEFAULT NULL COMMENT 'nombre de la mama',
  `a_empresapapa` varchar(60) DEFAULT NULL COMMENT 'empresa en donde labora el papa',
  `a_sueldopapa` float DEFAULT NULL COMMENT 'sueldo del papá',
  `a_nommama` varchar(60) DEFAULT NULL COMMENT 'sueldo de la mamá',
  `a_ocupacionmama` varchar(60) DEFAULT NULL COMMENT 'ocupación de la mama',
  `a_empresamama` varchar(60) DEFAULT NULL COMMENT 'empresa en donde labora la mamá',
  `a_sueldomama` float DEFAULT NULL COMMENT 'sueldo dae la mama',
  `a_otrosestudios` varchar(254) DEFAULT NULL COMMENT 'otros estudios',
  `a_suspencionestudios` varchar(254) DEFAULT NULL COMMENT 'suspenciones de estudios',
  `a_matreprobadas` varchar(254) DEFAULT NULL COMMENT 'de materias reprobadas',
  `a_aval` varchar(100) DEFAULT NULL COMMENT 'persona que apoya economicamente al alumno',
  `a_promocionesc` varchar(254) DEFAULT NULL COMMENT 'por donde se entero el alumno de la escuela',
  `a_objcruzroja` varchar(254) DEFAULT NULL COMMENT 'porque el alumno quiere estudiar en la cruz roja',
  `a_objenfermeria` varchar(254) DEFAULT NULL COMMENT 'porque quiere estudiar enfermería',
  `a_otracarrera` varchar(254) DEFAULT NULL COMMENT 'alguna otra carrera estudiada',
  `a_ceneval` float DEFAULT NULL COMMENT 'puntaje en ceneval',
  `a_regescuela` varchar(254) DEFAULT NULL COMMENT 'registro de la escuela',
  `a_psicometrico` varchar(254) DEFAULT NULL COMMENT 'resultado en examen psicometrico',
  `a_entrevista` varchar(254) DEFAULT NULL COMMENT 'entrevista realizada',
  `a_email` varchar(60) NOT NULL COMMENT 'correo electronico de alumno',
  `a_fecharegistro` date DEFAULT NULL COMMENT 'fecha en la que se registro el alumno'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Registro administrativo del alumno' AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `contra_alumno`, `a_nombre`, `a_apellidpaterno`, `a_apellidomaterno`, `a_fechanac`, `a_lugarnac`, `a_nacionalidad`, `a_sexo`, `a_estadocivil`, `a_gposanguineo`, `a_rh`, `a_curp`, `a_servmedico`, `a_trabajo`, `a_enfermedades`, `a_alergias`, `a_debilidadmotriz`, `a_domicilio`, `a_numext`, `a_numint`, `a_cp`, `a_colonia`, `a_municipio`, `a_numlocal`, `a_numcelular`, `a_nompapa`, `a_ocupacionpapa`, `a_empresapapa`, `a_sueldopapa`, `a_nommama`, `a_ocupacionmama`, `a_empresamama`, `a_sueldomama`, `a_otrosestudios`, `a_suspencionestudios`, `a_matreprobadas`, `a_aval`, `a_promocionesc`, `a_objcruzroja`, `a_objenfermeria`, `a_otracarrera`, `a_ceneval`, `a_regescuela`, `a_psicometrico`, `a_entrevista`, `a_email`, `a_fecharegistro`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'ariana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(7, '$2y$10$7ZXfcYTriTOD4wYRULG/f.bJNy3ASQBSGNpDmOaSez0ZlZaspJwB2', 'rob', 'apellidopaterno ', 'apellido materno', '2015-01-01', 'gpe', 'México', 'M', 'Soltero', 'O', 'rh', 'rimr', 'Si', 'Si', 'enfermedades', 'alergias', 'motriz', 'Uruguay 5402 Villa Olimpica', NULL, NULL, '67180', 'colonia', 'municipio', 0, NULL, 'Amado Rivera Gandarilla', 'ocupacion padre', 'empresa padre', 1000, 'nombre madre', ' ocupacion madre', ' empresa madre', 100, 'oteos estuddios', 'suspendido estudios', 'materias reporbadas', 'apoyos', 'escuela', 'porque cr', 'porque enfermeria', 'oteos estuddios', 1232, 'registro escuela', 'ex psicomentrico', 'entrevista', 'robert_rivmtz@hotmail.com', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de alumno',AUTO_INCREMENT=12;