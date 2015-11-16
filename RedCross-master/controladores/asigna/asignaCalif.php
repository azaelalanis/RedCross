<?php
	include "../../includes/sessionMaestro.php";
	include "../../includes/conexion.php";

$idCurso = $_POST['matricula'];
$arrIDalumnos = $_POST['idAlumnos'];
$arrCalificaciones1 = $_POST['calificaciones1'];
$arrCalificaciones2 = $_POST['calificaciones2'];
$arrCalificaciones3 = $_POST['calificaciones3'];
$arrCalificacionesF = $_POST['calificacionesFinal'];

if(isset($arrIDalumnos)){
    foreach($arrIDalumnos as $key => $idAlumno ){
				$sql = "UPDATE INSCRITOS
								SET inscr_calificacion1 = $arrCalificaciones1[$key],
								 		inscr_calificacion2 = $arrCalificaciones2[$key],
										inscr_calificacion3 = $arrCalificaciones3[$key],
										inscr_calificacion = $arrCalificacionesF[$key]
								where id_alumno=$idAlumno
								and id_curso=$idCurso ";
        $result = mysql_query($sql);
    }
}

echo "<script language=\"javascript\">
				alert(\"Calificaciones guardadas exitosamente\");
				window.location.href = \"../../vistas/seleccion/seleccionCursoCalif.php\"
			</script>";

?>
