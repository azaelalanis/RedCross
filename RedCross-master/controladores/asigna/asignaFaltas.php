<?php
	include "../../includes/sessionMaestro.php";
	include "../../includes/conexion.php";

$idCurso = $_POST['matricula']; 
$today = date("Y-m-d");
$today =  date('Y-m-d',(strtotime ( '-1 day' , strtotime($today) ) ));
if(isset($_POST['faltas'])){
    foreach($_POST['faltas'] as $falta){
        $sql = "UPDATE INSCRITOS SET inscr_fechasFaltas = inscr_fechasFaltas + ',' + $today, inscr_asistencia=inscr_asistencia+1 where id_alumno=$falta and id_curso=$idCurso ";
        $result = mysql_query($sql);
    }
}
$sql = "UPDATE CURSO SET cu_ultimaFechaAsistencia = '$today' where id_curso=$idCurso ";
$result = mysql_query($sql);

echo "<script language=\"javascript\">
				alert(\"Faltas guardadas exitosamente\");
				window.location.href = \"../../vistas/seleccion/seleccionCursoAsistencia.php\"
			</script>";

?>