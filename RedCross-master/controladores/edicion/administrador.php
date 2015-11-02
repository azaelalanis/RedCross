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

$result = mysql_update("administrador", array(
	'd_nombre' => $nombres,
	'd_apellidopaterno' => $APaterno,
	'd_apellidomaterno' => $AMaterno,
	'd_fechanac' => $FechaNacimiento,
	'd_curp' => $CURP,
	'd_enfermedades' => $Enfermedades,
	'd_alergias' => $Alergias,
	'd_numlocal' => $Telefono,
	'd_email' => $Email
), $matricula);
if (mysql_affected_rows() > 0){
	$alertMsg = "Administrador actualizado satisfactoriamente";
}
elseif (!$result) {
	$alertMsg = "Algo salio mal: " . mysql_error();
}
else{
	$alertMsg = "No encontramos ningun Administrador con la matricula d$matricula o no hubo cambios en la informacion";
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
