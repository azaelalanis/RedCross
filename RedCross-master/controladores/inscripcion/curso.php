<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$semestre = $_POST["semestre"];
$nombre = $_POST["nombre"];
$objetivoCurso = $_POST["objetivoCurso"];
$unidades = $_POST["unidades"];


$result = mysql_insert("curso", array(
	'cu_nombre' => $nombre,
	'id_semestre' => $semestre,
	'cu_objetivo' => $objetivoCurso,
	'cu_numunidades' => $unidades,
	'cu_fecharegistro' => date("Y-m-d")

));
if ($result){
	$alertMsg = "Nuevo curso agregado satisfactoriamente";
}
else{
	$alertMsg = "Algo salio mal: " . mysql_error();
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
