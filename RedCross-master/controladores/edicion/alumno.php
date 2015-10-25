<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$matricula = $_POST["matricula"];
$nombres = $_POST["nombres"];
$APaterno = $_POST["APaterno"];
$AMaterno = $_POST["AMaterno"];
$FechaNacimiento = $_POST["FechaNacimiento"];
$LugarNacimiento = $_POST["LugarNacimiento"];
$Nacionalidad = $_POST["Nacionalidad"];
$Sexo = $_POST["Sexo"];
$EstadoCivil = $_POST["EstadoCivil"];
$GrupoSanguineo = $_POST["GrupoSanguineo"];
$RH = $_POST["RH"];
$CURP = $_POST["CURP"];
$ServicioMedico = $_POST["ServicioMedico"];
$ActualmenteLaborando = $_POST["ActualmenteLaborando"];
$Enfermedades = $_POST["Enfermedades"];
$Alergias = $_POST["Alergias"];
$DebilidadMotriz = $_POST["DebilidadMotriz"];
$Direccion = $_POST["Direccion"];
$CP = $_POST["CP"];
$Colonia = $_POST["Colonia"];
$Municipio = $_POST["Municipio"];
$Telefono = $_POST["Telefono"];
$Email = $_POST["Email"];
$NombrePadre = $_POST["NombrePadre"];
$OcupacionPadre = $_POST["OcupacionPadre"];
$EmpresaPadre = $_POST["EmpresaPadre"];
$SueldoPadre = $_POST["SueldoPadre"];
$NombreMadre = $_POST["NombreMadre"];
$OcupacionMadre = $_POST["OcupacionMadre"];
$EmpresaMadre = $_POST["EmpresaMadre"];
$SueldoMadre = $_POST["SueldoMadre"];
$OtrosEstudios = $_POST["OtrosEstudios"];
$SuspendidoEstudios = $_POST["SuspendidoEstudios"];
$MateriasReprobadas = $_POST["MateriasReprobadas"];
$ApoyoEconomico = $_POST["ApoyoEconomico"];
$EnteroEscuela = $_POST["EnteroEscuela"];
$PorqueEstudiarCR = $_POST["PorqueEstudiarCR"];
$PorqueEstudiarEnfermeria = $_POST["PorqueEstudiarEnfermeria"];
$OtrasCarrerasPosibles = $_POST["OtrasCarrerasPosibles"];
$RegistroCeneval = $_POST["RegistroCeneval"];
$RegistroEscuela = $_POST["RegistroEscuela"];
$ExamenPsicometrico = $_POST["ExamenPsicometrico"];
$Entrevisto = $_POST["Entrevisto"];

$result = mysql_update("alumno", array(
	'a_nombre' => $nombres,
	'a_apellidpaterno' => $APaterno,
	'a_apellidomaterno' => $AMaterno,
	'a_fechanac' => $FechaNacimiento,
	'a_lugarnac' => $LugarNacimiento,
	'a_nacionalidad' => $Nacionalidad,
	'a_sexo' => $Sexo,
	'a_estadocivil' => $EstadoCivil,
	'a_gposanguineo' => $GrupoSanguineo,
	'a_rh' => $RH,
	'a_curp' => $CURP,
	'a_servmedico' => $ServicioMedico,
	'a_trabajo' => $ActualmenteLaborando,
	'a_enfermedades' => $Enfermedades,
	'a_alergias' => $Alergias,
	'a_debilidadmotriz' => $DebilidadMotriz,
	'a_domicilio' => $Direccion,
	'a_cp' => $CP,
	'a_colonia' => $Colonia,
	'a_municipio' => $Municipio,
	'a_numlocal' => $Telefono,
	'a_email' => $Email,
	'a_nompapa' => $NombrePadre,
	'a_ocupacionpapa' => $OcupacionPadre,
	'a_empresapapa' => $EmpresaPadre,
	'a_sueldopapa' => $SueldoPadre,
	'a_nommama' => $NombreMadre,
	'a_ocupacionmama' => $OcupacionMadre,
	'a_empresamama' => $EmpresaMadre,
	'a_sueldomama' => $SueldoMadre,
	'a_otrosestudios' => $OtrosEstudios,
	'a_suspencionestudios' => $SuspendidoEstudios,
	'a_matreprobadas' => $MateriasReprobadas,
	'a_aval' => $ApoyoEconomico,
	'a_promocionesc' => $EnteroEscuela,
	'a_objcruzroja' => $PorqueEstudiarCR,
	'a_objenfermeria' => $PorqueEstudiarEnfermeria,
	'a_otracarrera' => $OtrasCarrerasPosibles,
	'a_ceneval' => $RegistroCeneval,
	'a_regescuela' => $RegistroEscuela,
	'a_psicometrico' => $ExamenPsicometrico,
	'a_entrevista' => $Entrevisto

), $matricula);
if (mysql_affected_rows() > 0){
	$alertMsg = "Alumno actualizado satisfactoriamente";
}
elseif (!$result) {
	$alertMsg = "Algo salio mal: " . mysql_error();
}
else{
	$alertMsg = "No encontramos ningun alumno con la matricula a$matricula";
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
