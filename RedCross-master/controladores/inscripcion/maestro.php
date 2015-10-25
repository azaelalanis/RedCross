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
	$contrasena = $_POST["Contrasena1"];
	$tabla = "maestro";

mysql_insert($tabla, array(
		'contra_maestro' => password_hash($contrasena, PASSWORD_DEFAULT),
		'm_nombre' => $nombres,
    'm_apellidopaterno' => $APaterno,
    'm_apellidomaterno' => $AMaterno,
		'm_fechanac' => $FechaNacimiento,
		'm_curp' => $CURP,
		'm_enfermedades' => $Enfermedades,
		'm_alergias' => $Alergias,
		'm_numlocal' => $Telefono,
		'm_email' => $Email
));



	echo "<script language=\"javascript\">
			alert(\"Nuevo maestro agregado satisfactoriamente\");
			window.location.href = \"../../vistas/menus/menuAdmin.php\"
		</script>";


?>
