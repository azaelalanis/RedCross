-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 24-11-2015 a las 00:05:12
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `a_numlocal` varchar(30) DEFAULT NULL COMMENT 'número local',
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
  `a_fecharegistro` date DEFAULT NULL COMMENT 'fecha en la que se registro el alumno',
  `a_estatus` varchar(50) NOT NULL DEFAULT 'Activo',
  `a_celPadre` varchar(50) NOT NULL,
  `a_celMadre` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Registro administrativo del alumno' AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `contra_alumno`, `a_nombre`, `a_apellidpaterno`, `a_apellidomaterno`, `a_fechanac`, `a_lugarnac`, `a_nacionalidad`, `a_sexo`, `a_estadocivil`, `a_gposanguineo`, `a_rh`, `a_curp`, `a_servmedico`, `a_trabajo`, `a_enfermedades`, `a_alergias`, `a_debilidadmotriz`, `a_domicilio`, `a_numext`, `a_numint`, `a_cp`, `a_colonia`, `a_municipio`, `a_numlocal`, `a_numcelular`, `a_nompapa`, `a_ocupacionpapa`, `a_empresapapa`, `a_sueldopapa`, `a_nommama`, `a_ocupacionmama`, `a_empresamama`, `a_sueldomama`, `a_otrosestudios`, `a_suspencionestudios`, `a_matreprobadas`, `a_aval`, `a_promocionesc`, `a_objcruzroja`, `a_objenfermeria`, `a_otracarrera`, `a_ceneval`, `a_regescuela`, `a_psicometrico`, `a_entrevista`, `a_email`, `a_fecharegistro`, `a_estatus`, `a_celPadre`, `a_celMadre`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'ariana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', ''),
(7, '$2y$10$7ZXfcYTriTOD4wYRULG/f.bJNy3ASQBSGNpDmOaSez0ZlZaspJwB2', 'roberto carlos', 'rivera', 'martinez', '2015-02-02', 'gpe', 'MÃ©xico', 'M', 'Divorciado', 'O', 'rh', 'rimr', 'Si', 'Si', 'enfermedades', 'alergias', 'motriz', 'Uruguay 5402 Villa Olimpica', NULL, NULL, '67180', 'colonia', 'municipio', '8181167707', NULL, 'Amado Rivera Gandarilla', 'ocupacion padre', 'empresa padre', 1111, 'nombre madre', ' ocupacion madre', ' empresa madre', 100, 'oteos estuddios', 'suspendido estudios', 'materias reporbadas', 'apoyos', 'escuela', 'porque cr', 'porque enfermeria', 'oteos estuddios', 1232, 'registro escuela', 'ex psicomentrico', '0', 'robert_rivmtz@hotmail.comasdsd', NULL, 'Baja definitiva', 'celPadre', 'celMadre'),
(8, '$2y$10$hoBA7bStal8ouWspyseOlO8m68uNQGC9V/0k6566ZUlVZUd2Hpafa', 'carlos', 'laknds', 'alksnd', '2015-01-01', '', '', 'M', 'Soltero', 'O', '', '', 'Si', 'Si', '', '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '2015-10-27', '', '', ''),
(9, '$2y$10$Qa.euWZVHDF3MOZFEfSGne/k579ROOEP.4TBXKCLEvNyEr9kvyX4i', 'carlos', 'laknds', 'alksnd', '2015-01-01', '', '', 'M', 'Soltero', 'O', '', '', 'Si', 'Si', '', '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '2015-10-27', '', '', ''),
(10, '$2y$10$L6hM8imRNDu1iIt1pKhbRezNV4r12niosemQVBoP7.ZCSUE4HEjXm', 'prueba celular', '', '', '0000-00-00', '', '', 'M', 'Soltero', 'O', '', '', 'no', 'soy nini', '', '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '', '', '', '2015-11-05', 'Activo', 'celular padre', 'celular madre');

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
  `cu_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro del curso',
  `cu_aula` varchar(50) NOT NULL,
  `cu_dias` varchar(60) NOT NULL,
  `cu_horaInicio` time NOT NULL,
  `cu_isPrioridadAlta` varchar(2) NOT NULL,
  `cu_horaFinal` time NOT NULL,
  `cu_maestroresp` varchar(100) DEFAULT NULL COMMENT 'maestro resp del curso',
  `cu_ultimaFechaAsistencia` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `id_semestre`, `cu_nombre`, `cu_objetivo`, `cu_numunidades`, `cu_fecharegistro`, `cu_aula`, `cu_dias`, `cu_horaInicio`, `cu_isPrioridadAlta`, `cu_horaFinal`, `cu_maestroresp`, `cu_ultimaFechaAsistencia`) VALUES
(1, 8, 'compiladores', 'kjansdkjas', 123, '2015-10-26', '', '', '00:00:00', '0', '00:00:00', NULL, '0000-00-00'),
(2, 9, 'integrador', 'alksdlanl', 0, '2015-11-05', 'aulas3', ',Lunes,Martes,Miercoles,Jueves,Viernes,Sabado', '15:59:00', 'Si', '00:00:00', NULL, '0000-00-00'),
(3, 23, 'curso', 'objetivo', 0, '2015-11-05', 'aulas4', ',Lunes,Miercoles,Viernes', '14:00:00', 'Si', '13:00:00', NULL, '0000-00-00'),
(4, 0, '', '', 0, '2015-11-08', '', '', '00:00:00', 'No', '00:00:00', 'azael', '0000-00-00'),
(5, 3, 'Base de datos', 'Enseñar', 8, '2015-11-09', 'edificio 2', ',Lunes,Miercoles,Viernes', '09:30:00', 'No', '13:00:00', 'azael', '0000-00-00'),
(6, 5, 'Base de datos avanzadas', 'Aprender UML', 2, '2015-11-09', 'edificio 1, salon 424', ',Lunes,Martes,Miercoles', '08:00:00', 'No', '12:00:00', 'azael', '0000-00-00'),
(7, 0, '', '', 0, '2015-11-09', '', '', '00:00:00', 'No', '00:00:00', 'azael', '0000-00-00'),
(8, 0, '', '', 0, '2015-11-09', '', '', '00:00:00', 'No', '00:00:00', 'azael', '0000-00-00'),
(9, 0, 'compi', '', 0, '2015-11-09', 'aulas 5', ',Lunes,Miercoles,Viernes', '00:00:00', 'No', '05:00:00', '1', '2015-11-10'),
(10, 0, '', '', 0, '2015-11-09', '', '', '00:00:00', 'No', '00:00:00', '2', '0000-00-00');

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
  `inscr_asistencia` smallint(6) DEFAULT NULL COMMENT 'total de faltas',
  `inscr_calificacion` float DEFAULT NULL COMMENT 'calificación final del curso',
  `inscr_calificacion1` float NOT NULL COMMENT 'calificación primer parcial',
  `inscr_calificacion2` float NOT NULL COMMENT 'calificación segundo parcial',
  `inscr_calificacion3` float NOT NULL COMMENT 'calificación tercer parcial',
  `inscr_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro ',
  `inscr_fechasFaltas` text NOT NULL,
  `inscr_Cursado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`id_alumno`, `id_curso`, `inscr_periodo`, `inscr_hora`, `inscr_dia`, `inscr_asistencia`, `inscr_calificacion`, `inscr_calificacion1`, `inscr_calificacion2`, `inscr_calificacion3`, `inscr_fecharegistro`, `inscr_fechasFaltas`, `inscr_Cursado`) VALUES
(1, 9, NULL, NULL, NULL, 3, NULL, 0, 0, 0, NULL, '5999', 1),
(7, 9, NULL, NULL, NULL, 4, NULL, 0, 0, 0, NULL, '4007', 1);

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
  `m_fecharegistro` date DEFAULT NULL COMMENT 'fecha de registro',
  `m_estudios` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `contra_maestro`, `m_nombre`, `m_apellidopaterno`, `m_apellidomaterno`, `m_fechanac`, `m_edad`, `m_lugarnac`, `m_nacionalidad`, `m_sexo`, `m_estadocivil`, `m_gposanguineo`, `m_rh`, `m_curp`, `m_servmedico`, `m_trabajo`, `m_enfermedades`, `m_alergias`, `m_debilidadmotriz`, `m_domicilio`, `m_numext`, `m_numint`, `m_cp`, `m_colonia`, `m_municipio`, `m_numlocal`, `m_numcelular`, `m_escolaridad`, `m_otrosestudios`, `m_email`, `m_fecharegistro`, `m_estudios`) VALUES
(1, '$2y$10$FDJb0nY5XBrqdE3Yg96lR.c58RnsEpzCjOW75zTnRBnTZGki0rMmi', 'azael', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, '$2y$10$dmA7nJeN4QCraCMZPILh3uYWMQsfiWEEIqwlE9ADvABHK9qJszNL.', 'nombre', 'paterno', 'materno', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '', NULL, 'estudios232');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Indices de la tabla `inscritos`
--
ALTER TABLE `inscritos`
 ADD PRIMARY KEY (`id_alumno`,`id_curso`);

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
MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de alumno',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del curso',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id ',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del semestre';