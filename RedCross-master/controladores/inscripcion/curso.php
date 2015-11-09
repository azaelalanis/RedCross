<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";


$semestre = $_POST["semestre"];
$nombre = $_POST["nombre"];
$objetivoCurso = $_POST["objetivoCurso"];
$unidades = $_POST["unidades"];
$dias = "";
$horaInicio = $_POST["horaInicio"];
$horaFinal = $_POST["horaTerminacion"];
if(isset($_POST['dias'])){
    foreach($_POST['dias'] as $dia){
        $dias = $dias . ",". $dia;
    }
}
$isPrioridadAlta = $_POST['isPrioridadAlta'];
$maestroResponsable = $_POST['maestroResponsable'];
$lugar = $_POST['lugar'];


$result = mysql_insert("curso", array(
	'cu_nombre' => $nombre,
	'id_semestre' => $semestre,
	'cu_objetivo' => $objetivoCurso,
	'cu_numunidades' => $unidades,
	'cu_fecharegistro' => date("Y-m-d"),
	'cu_horaInicio' => $horaInicio,
	'cu_horaFinal' => $horaFinal,
	'cu_dias' => $dias,
	'cu_isPrioridadAlta' => $isPrioridadAlta,
	'cu_aula' => $lugar,
	'cu_maestroresp' => $maestroResponsable

));
if ($result){
	$newId = mysql_insert_id();
	$alertMsg = "Nuevo curso agregado satisfactoriamente con matricula $newId";
}
else{
	$alertMsg = "Algo salio mal: " . mysql_error();
}
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>
