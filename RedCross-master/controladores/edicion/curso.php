<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$matricula = $_POST["matricula"];
$semestre = $_POST["semestre"];
$nombre = $_POST["nombre"];
$objetivoCurso = $_POST["objetivoCurso"];
$unidades = $_POST["unidades"];

$result = mysql_update("curso", array(
	'cu_nombre' => $nombre,
	'id_semestre' => $semestre,
	'cu_objetivo' => $objetivoCurso,
	'cu_numunidades' => $unidades

), $matricula);
if (mysql_affected_rows() > 0){
	$alertMsg = "Curso actualizado satisfactoriamente";
}
elseif (!$result) {
	$alertMsg = "Algo salio mal: " . mysql_error();
}
else{
	$alertMsg = "No encontramos ningun curso con la matricula $matricula";
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
