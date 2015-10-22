<?php

	include "../../includes/conexion.php";

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
	$tabla = "maestro";

function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);

    return mysql_query('INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES (\''.implode('\',\'', $values).'\')');
}

mysql_insert($tabla, array(
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
