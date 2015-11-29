<?php

include "../../includes/sessionAdmin.php";
include "../../includes/conexion.php";
include "../../includes/mysql_util.php";


$matricula = $_GET['id'];
$caso = $_GET['c'];
$semestreActual = 0;


/*Si es caso 3.. se le muestran todos los cursos del siguiente semestre*/
/*Si es caso 2.. se le muestran todos los cursos del siguiente semestre y la materia reprobada*/
/*Si es caso 1.. se le muestra unicamente las 2 o más materias reprobadas..*/

/*Obtener el semestre del alumno*/
$sql = "select MAX(cu.id_semestre) from curso cu, inscritos ins
				where cu.id_curso = ins.id_curso
				and ins.id_alumno = $matricula";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
	$semestreActual = $row['id_semestre'];
}


/*Si el semestre es nulo, significa que es de nuevo ingreso*/
if ($semestreActual == ""){
	$semestreActual = 0;
}

if ($caso == '3') {
	/*Mostrar todos los cursos del siguiente semestre*/
	$sql="SELECT cu.id_curso, cu.cu_nombre , cu.cu_dias, cu.cu_horaInicio, cu.cu_horaFinal, cu.cu_aula
				FROM  curso cu
				where cu.id_semestre = $semestreActual + 1
				order by cu.id_curso";

} elseif ($caso == 2) {
	/*todos los cursos del siguiente semestre y la materia reprobada*/
	$sql="SELECT cu.id_curso, cu.cu_nombre , cu.cu_dias, cu.cu_horaInicio, cu.cu_horaFinal, cu.cu_aula
				FROM  curso cu
				where cu.id_semestre = $semestreActual + 1
				UNION ALL
				SELECT cu.id_curso, cu.cu_nombre , cu.cu_dias, cu.cu_horaInicio, cu.cu_horaFinal, cu.cu_aula
				FROM inscritos ins, curso cu
				where ins.id_curso = cu.id_curso
				and ins.id_alumno = $matricula
				and ins.inscr_calificacion < 70
				and ins.inscr_cursado = 1";

} else {
	/*Mostrar unicamente las 2 o más materias reprobadas*/
	$sql ="SELECT cu.id_curso, cu.cu_nombre , cu.cu_dias, cu.cu_horaInicio, cu.cu_horaFinal, cu.cu_aula
				FROM inscritos ins, curso cu
				where ins.id_curso = cu.id_curso
				and ins.id_alumno = $matricula
				and ins.inscr_calificacion < 70
				and ins.inscr_cursado = 1
				order by cu.id_curso";
}


$result = mysql_query($sql);
$tableBody = "";
$formCont = 0;
while($row = mysql_fetch_array($result)){
	$idCurso = $row['id_curso'];
	$nombre = $row['cu_nombre'];
	$dias = substr($row['cu_dias'],1);
	$horainicio = $row['cu_horaInicio'];
	$horafinal = $row['cu_horaFinal'];
	$horario = date('h:i A' , strtotime($row['cu_horaInicio']))." a ".date('h:i A' , strtotime($row['cu_horaFinal']));
	$aula = $row['cu_aula'];
	$tableBody = $tableBody . "
	<tr>
		<td>$idCurso</td>
		<td>$nombre</td>
		<td>$dias</td>
		<td>$horario</td>
		<td>$aula</td>
		<td> <input type=\"checkbox\"  name=\"cursos[]\" value=\"$idCurso\" checked> </td>
	</tr>
	 ";
	$formCont = $formCont + 1;
}
echo $tableBody;
