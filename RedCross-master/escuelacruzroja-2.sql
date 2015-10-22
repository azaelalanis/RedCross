-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2015 a las 19:22:32
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escuelacruzroja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
`id_administrador` int(11) NOT NULL COMMENT 'id del admin',
  `contra_administrador` varchar(255) DEFAULT NULL COMMENT 'contraseña de administrador',
  `d_nombre` varchar(60) DEFAULT NULL COMMENT 'nombre del admin',
  `d_apellidopaterno` varchar(60) DEFAULT NULL COMMENT 'apellido paterno del admin',
  `d_apellidomaterno` varchar(60) DEFAULT NULL COMMENT 'apellido materno del admin',
  `d_fechanac` date DEFAULT NULL COMMENT 'fecha de nacimiento',
  `d_edad` int(11) DEFAULT NULL COMMENT 'edad',
  `d_lugarnac` varchar(60) DEFAULT NULL COMMENT 'lugar de nacimiento',
  `d_nacionalidad` varchar(60) DEFAULT NULL COMMENT 'nacionalidad',
  `d_sexo` varchar(1) DEFAULT NULL COMMENT 'sexo',
  `d_estadocivil` varchar(60) DEFAULT NULL COMMENT 'estado civil',
  `d_gposanguineo` varchar(16) DEFAULT NULL COMMENT 'grupo sanguíneo',
  `d_rh` varchar(16) DEFAULT NULL COMMENT 'rh',
  `d_curp` varchar(20) DEFAULT NULL COMMENT 'curp',
  `d_servmedico` varchar(60) DEFAULT NULL COMMENT 'servicio médico',
  `d_trabajo` varchar(254) DEFAULT NULL COMMENT 'trabajo',
  `d_enfermedades` varchar(254) DEFAULT NULL COMMENT 'enlistar enfermedades',
  `d_alergias` varchar(254) DEFAULT NULL COMMENT 'alergias',
  `d_debilidadmotriz` varchar(254) DEFAULT NULL COMMENT 'alguna debilidad motriz',
  `d_domicilio` varchar(254) DEFAULT NULL COMMENT 'domicilio',
  `d_numext` varchar(16) DEFAULT NULL COMMENT 'nùmero ext',
  `d_numint` varchar(16) DEFAULT NULL COMMENT 'núm int',
  `d_cp` varchar(16) DEFAULT NULL COMMENT 'código postal',
  `d_colonia` varchar(254) DEFAULT NULL COMMENT 'colonia',
  `d_municipio` varchar(254) DEFAULT NULL COMMENT 'municipio',
  `d_numlocal` int(11) DEFAULT NULL COMMENT 'numero telefonico local',
  `d_numcelular` int(11) DEFAULT NULL COMMENT 'numero telefonico celular',
  `d_escolaridad` varchar(254) DEFAULT NULL COMMENT 'escolaridad',
  `d_otrosestudios` varchar(254) DEFAULT NULL COMMENT 'otros estudios',
  `d_email` varchar(60) NOT NULL COMMENT 'correo electronico del administrador',
  `d_fecharegistro` date DEFAULT NULL COMMENT 'fecha en el que se registro'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `contra_administrador`, `d_nombre`, `d_apellidopaterno`, `d_apellidomaterno`, `d_fechanac`, `d_edad`, `d_lugarnac`, `d_nacionalidad`, `d_sexo`, `d_estadocivil`, `d_gposanguineo`, `d_rh`, `d_curp`, `d_servmedico`, `d_trabajo`, `d_enfermedades`, `d_alergias`, `d_debilidadmotriz`, `d_domicilio`, `d_numext`, `d_numint`, `d_cp`, `d_colonia`, `d_municipio`, `d_numlocal`, `d_numcelular`, `d_escolaridad`, `d_otrosestudios`, `d_email`, `d_fecharegistro`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'rob', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(2, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL);

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
  `a_edad` int(11) DEFAULT NULL COMMENT 'edad',
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
  `a_sueldopapa` int(11) DEFAULT NULL COMMENT 'sueldo del papá',
  `a_nommama` varchar(60) DEFAULT NULL COMMENT 'sueldo de la mamá',
  `a_ocupacionmama` varchar(60) DEFAULT NULL COMMENT 'ocupación de la mama',
  `a_empresamama` varchar(60) DEFAULT NULL COMMENT 'empresa en donde labora la mamá',
  `a_sueldomama` int(11) DEFAULT NULL COMMENT 'sueldo dae la mama',
  `a_otrosestudios` varchar(254) DEFAULT NULL COMMENT 'otros estudios',
  `a_suspencionestudios` varchar(254) DEFAULT NULL COMMENT 'suspenciones de estudios',
  `a_matreprobadas` varchar(254) DEFAULT NULL COMMENT 'de materias reprobadas',
  `a_aval` varchar(100) DEFAULT NULL COMMENT 'persona que apoya economicamente al alumno',
  `a_promocionesc` varchar(254) DEFAULT NULL COMMENT 'por donde se entero el alumno de la escuela',
  `a_objcruzroja` varchar(254) DEFAULT NULL COMMENT 'porque el alumno quiere estudiar en la cruz roja',
  `a_objenfermeria` varchar(254) DEFAULT NULL COMMENT 'porque quiere estudiar enfermería',
  `a_otracarrera` varchar(254) DEFAULT NULL COMMENT 'alguna otra carrera estudiada',
  `a_ceneval` int(11) DEFAULT NULL COMMENT 'puntaje en ceneval',
  `a_regescuela` varchar(254) DEFAULT NULL COMMENT 'registro de la escuela',
  `a_psicometrico` varchar(254) DEFAULT NULL COMMENT 'resultado en examen psicometrico',
  `a_entrevista` varchar(254) DEFAULT NULL COMMENT 'entrevista realizada',
  `a_email` varchar(60) NOT NULL COMMENT 'correo electronico de alumno',
  `a_fecharegistro` date DEFAULT NULL COMMENT 'fecha en la que se registro el alumno'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Registro administrativo del alumno';

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `contra_alumno`, `a_nombre`, `a_apellidpaterno`, `a_apellidomaterno`, `a_fechanac`, `a_edad`, `a_lugarnac`, `a_nacionalidad`, `a_sexo`, `a_estadocivil`, `a_gposanguineo`, `a_rh`, `a_curp`, `a_servmedico`, `a_trabajo`, `a_enfermedades`, `a_alergias`, `a_debilidadmotriz`, `a_domicilio`, `a_numext`, `a_numint`, `a_cp`, `a_colonia`, `a_municipio`, `a_numlocal`, `a_numcelular`, `a_nompapa`, `a_ocupacionpapa`, `a_empresapapa`, `a_sueldopapa`, `a_nommama`, `a_ocupacionmama`, `a_empresamama`, `a_sueldomama`, `a_otrosestudios`, `a_suspencionestudios`, `a_matreprobadas`, `a_aval`, `a_promocionesc`, `a_objcruzroja`, `a_objenfermeria`, `a_otracarrera`, `a_ceneval`, `a_regescuela`, `a_psicometrico`, `a_entrevista`, `a_email`, `a_fecharegistro`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'ariana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL COMMENT 'id del curso',
  `id_semestre` int(11) DEFAULT NULL COMMENT 'semestre al que pertenece el curso',
  `cu_nombre` varchar(60) DEFAULT NULL COMMENT 'nombre del curso',
  `cu_objetivo` varchar(254) DEFAULT NULL COMMENT 'objetivo del curso',
  `cu_numunidades` int(11) DEFAULT NULL COMMENT 'unidades correspondientes al curso',
  `cu_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro del curso'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltaslog`
--

CREATE TABLE `faltaslog` (
`id_falta` int(11) NOT NULL COMMENT 'id de la falta',
  `id_alumno` int(11) DEFAULT NULL COMMENT 'id del alumno',
  `id_curso` int(11) DEFAULT NULL COMMENT 'id del curso',
  `f_fecharegistro` date DEFAULT NULL COMMENT 'fecha de falta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE `inscritos` (
  `id_alumno` int(11) NOT NULL COMMENT 'id del alumno',
  `id_curso` int(11) NOT NULL COMMENT 'is del curso',
  `inscr_periodo` varchar(16) DEFAULT NULL COMMENT 'periodo de inscripción',
  `inscr_hora` varchar(16) DEFAULT NULL COMMENT 'hora del curso',
  `inscr_dia` varchar(16) DEFAULT NULL COMMENT 'dia del curso',
  `inscr_asistencia` int(11) DEFAULT NULL COMMENT 'total de faltas',
  `inscr_calificacion` int(11) DEFAULT NULL COMMENT 'calificación final del curso',
  `inscr_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
`id_maestro` int(11) NOT NULL COMMENT 'id ',
  `contra_maestro` varchar(255) NOT NULL COMMENT 'contraseña del maestro',
  `m_nombre` varchar(60) DEFAULT NULL COMMENT 'nombre',
  `m_apellidopaterno` varchar(60) DEFAULT NULL COMMENT 'apellido paterno',
  `m_apellidomaterno` varchar(60) DEFAULT NULL COMMENT 'apellido materno',
  `m_fechanac` date DEFAULT NULL COMMENT 'fecha de nacimiento',
  `m_edad` int(11) DEFAULT NULL COMMENT 'edad',
  `m_lugarnac` varchar(60) DEFAULT NULL COMMENT 'lugar de nacimiento',
  `m_nacionalidad` varchar(60) DEFAULT NULL COMMENT 'nacionalidad',
  `m_sexo` varchar(1) DEFAULT NULL COMMENT 'sexo',
  `m_estadocivil` varchar(60) DEFAULT NULL COMMENT 'estado civil',
  `m_gposanguineo` varchar(16) DEFAULT NULL COMMENT 'grupo sanguíneo',
  `m_rh` varchar(16) DEFAULT NULL COMMENT 'rh',
  `m_curp` varchar(20) DEFAULT NULL COMMENT 'curp',
  `m_servmedico` varchar(60) DEFAULT NULL COMMENT 'servicio medico',
  `m_trabajo` varchar(254) DEFAULT NULL COMMENT 'trabajo',
  `m_enfermedades` varchar(254) DEFAULT NULL COMMENT 'enfermedades',
  `m_alergias` varchar(254) DEFAULT NULL COMMENT 'alergias',
  `m_debilidadmotriz` varchar(254) DEFAULT NULL COMMENT 'alguna debilidad motriz',
  `m_domicilio` varchar(254) DEFAULT NULL COMMENT 'domicilio',
  `m_numext` varchar(16) DEFAULT NULL COMMENT 'num ext',
  `m_numint` varchar(16) DEFAULT NULL COMMENT 'num int',
  `m_cp` varchar(16) DEFAULT NULL COMMENT 'codigo postal',
  `m_colonia` varchar(254) DEFAULT NULL COMMENT 'colonia',
  `m_municipio` varchar(254) DEFAULT NULL COMMENT 'municipio',
  `m_numlocal` int(11) DEFAULT NULL COMMENT 'numero local',
  `m_numcelular` int(11) DEFAULT NULL COMMENT 'numero celular',
  `m_escolaridad` varchar(254) DEFAULT NULL COMMENT 'escolaridad',
  `m_otrosestudios` varchar(254) DEFAULT NULL COMMENT 'otros estudios',
  `m_email` varchar(60) DEFAULT NULL COMMENT 'correo electronico del profesor',
  `m_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `contra_maestro`, `m_nombre`, `m_apellidopaterno`, `m_apellidomaterno`, `m_fechanac`, `m_edad`, `m_lugarnac`, `m_nacionalidad`, `m_sexo`, `m_estadocivil`, `m_gposanguineo`, `m_rh`, `m_curp`, `m_servmedico`, `m_trabajo`, `m_enfermedades`, `m_alergias`, `m_debilidadmotriz`, `m_domicilio`, `m_numext`, `m_numint`, `m_cp`, `m_colonia`, `m_municipio`, `m_numlocal`, `m_numcelular`, `m_escolaridad`, `m_otrosestudios`, `m_email`, `m_fecharegistro`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'azael', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_curso`
--

CREATE TABLE `maestro_curso` (
  `id_maestro` int(11) NOT NULL COMMENT 'id del maestro',
  `id_curso` int(11) NOT NULL COMMENT 'id del curso',
  `mc_hora` varchar(16) DEFAULT NULL COMMENT 'hora del curso que impartirá el maestro',
  `mc_dia` varchar(16) DEFAULT NULL COMMENT 'día del curso que impartirá el maestro',
  `mc_fecharegistro` date NOT NULL COMMENT 'fecha de registro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
`id_semestre` int(11) NOT NULL COMMENT 'id del semestre',
  `s_desc` varchar(60) DEFAULT NULL COMMENT 'descripción del semestre',
  `s_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `faltaslog`
--
ALTER TABLE `faltaslog`
 ADD PRIMARY KEY (`id_falta`);

--
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
 ADD UNIQUE KEY `id_alumno` (`id_alumno`), ADD UNIQUE KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
 ADD PRIMARY KEY (`id_maestro`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
 ADD PRIMARY KEY (`id_semestre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del admin',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de alumno',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `faltaslog`
--
ALTER TABLE `faltaslog`
MODIFY `id_falta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de la falta';
--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id ',AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del semestre';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
