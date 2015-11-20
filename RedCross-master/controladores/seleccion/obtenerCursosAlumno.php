<?php

	include "../../includes/sessionAlumno.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

	session_start();
$idAlumno = $_SESSION['matricula'];
$sql="SELECT ins.id_alumno,cu.id_curso, cu.cu_nombre , cu.cu_dias, cu.cu_horaInicio, cu.cu_horaFinal, cu.cu_aula FROM inscritos ins, curso cu where ins.id_alumno = $idAlumno and ins.id_curso = cu.id_curso order by cu.id_curso";
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
	</tr>
	 ";
	$formCont = $formCont + 1;
}
echo $tableBody;
