<?php
	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

	$tipo = strtolower(substr($_GET["matricula"], 0, 1));
	$matricula=substr($_GET["matricula"], 1);
	
	if($tipo == "a"){
		$tabla = "alumno";
	}
	elseif ($tipo == "m"){
		$tabla = "maestro";
	}
	else{
		$tabla = "administrador";
	}

	$matricula = mysql_escape_string($matricula);
	$sql="select * from " . $tabla . " where id_" . $tabla . "= $matricula";
	$result = mysql_query($sql);
	$response = "";
	$row = mysql_fetch_row($result);
	foreach ($row as $col_value) {
    	$response = $response . '|' . $col_value;
	}
	
	if($response == ""){
		echo '-1|No encontramos nada con la matricula ' . $tipo . $matricula;
	}

	echo $response;



?>