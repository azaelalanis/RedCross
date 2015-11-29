<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$numCaso = $_POST['caso'];
$matricula = $_POST['idMatricula'];

if(isset($_POST['cursos'])){
    foreach($_POST['cursos'] as $curso){

				/*Checar si el curso ya existe, con la matricula y id del curso*/
				$sql = "select * from inscritos where id_alumno=$matricula and id_curso=$curso";
				$result = mysql_query($sql);

				/*Si trae más de 0, significa que ya estaba en inscritos.. entonces hacer update a la tabla con todo nullo..*/
				if (mysql_affected_rows() > 1){
				 	$sql = "UPDATE INSCRITOS
				 				 SET inscr_periodo = '',
								 		 inscr_hora = '',
										 inscr_dia = '',
										 inscr_asistencia = '',
										 inscr_calificacion = '',
										 inscr_calificacion1 = 0,
										 inscr_calificacion2 = 0,
										 inscr_calificacion3 = 0,
										 inscr_fecharegistro = '',
										 inscr_fechasFaltas = '',
										 inscr_cursado = 0
									WHERE id_alumno =$matricula
									AND   id_curso = $curso
										";
				 	$result = mysql_query($sql);
			  } else {
					/*inscribir el curso al alumno*/
					$sql = "INSERT INTO INSCRITOS (id_alumno,id_curso,inscr_calificacion, inscr_calificacion1, inscr_calificacion2, inscr_calificacion3,inscr_fechasFaltas, inscr_cursado)
									VALUES ($matricula,$curso,'',0,0,0,'',0)";
					$result = mysql_query($sql);

				}
    }
}


echo "<script language=\"javascript\">
				alert(\"Cursos inscritos al alumno exitosamente\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";

?>
