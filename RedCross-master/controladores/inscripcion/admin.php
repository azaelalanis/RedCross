<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

	//Variables
	$nombres = $_POST["nombres"];
	$APaterno = $_POST["APaterno"];
	$AMaterno = $_POST["AMaterno"];
	$FechaNacimiento = $_POST["FechaNacimiento"];
	$CURP = $_POST["CURP"];
	$Enfermedades = $_POST["Enfermedades"];
	$Alergias = $_POST["Alergias"];
	$Telefono = $_POST["Telefono"];
	$Email = $_POST["Email"];
	$contrasena = $_POST["Contrasena"];


$result = mysql_insert("administrador", array(
		'contra_administrador' => password_hash($contrasena, PASSWORD_DEFAULT),
		'd_nombre' => $nombres,
    'd_apellidopaterno' => $APaterno,
    'd_apellidomaterno' => $AMaterno,
		'd_fechanac' => $FechaNacimiento,
		'd_curp' => $CURP,
		'd_enfermedades' => $Enfermedades,
		'd_alergias' => $Alergias,
		'd_numlocal' => $Telefono,
		'd_email' => $Email
));


if ($result){
	$alertMsg = "Nuevo administrador agregado satisfactoriamente";
}
else{
	$alertMsg = "Algo salio mal: " . mysql_error();
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";

?>
