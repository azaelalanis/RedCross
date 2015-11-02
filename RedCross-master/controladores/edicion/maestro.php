<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$matricula = $_POST["matricula"];
$nombres = $_POST["nombres"];
$APaterno = $_POST["APaterno"];
$AMaterno = $_POST["AMaterno"];
$FechaNacimiento = $_POST["FechaNacimiento"];
$CURP = $_POST["CURP"];
$Enfermedades = $_POST["Enfermedades"];
$Alergias = $_POST["Alergias"];
$Telefono = $_POST["Telefono"];
$Email = $_POST["Email"];

$result = mysql_update("maestro", array(
	'm_nombre' => $nombres,
	'm_apellidopaterno' => $APaterno,
	'm_apellidomaterno' => $AMaterno,
	'm_fechanac' => $FechaNacimiento,
	'm_curp' => $CURP,
	'm_enfermedades' => $Enfermedades,
	'm_alergias' => $Alergias,
	'm_numlocal' => $Telefono,
	'm_email' => $Email
), $matricula);
if (mysql_affected_rows() > 0){
	$alertMsg = "Maestro actualizado satisfactoriamente";
}
elseif (!$result) {
	$alertMsg = "Algo salio mal: " . mysql_error();
}
else{
	$alertMsg = "No encontramos ningun maestro con la matricula m$matricula o no hubo cambios en la informacion";
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
