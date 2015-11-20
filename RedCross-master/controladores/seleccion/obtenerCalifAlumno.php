<?php

	include "../../includes/sessionAlumno.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

	session_start();
$idAlumno = $_SESSION['matricula'];
$sql="SELECT ins.id_alumno, ins.inscr_calificacion, ins.inscr_calificacion1, ins.inscr_calificacion2, ins.inscr_calificacion3 ,cu.id_curso, cu.cu_nombre FROM inscritos ins, curso cu where ins.id_alumno = $idAlumno and ins.id_curso = cu.id_curso order by cu.id_curso";
$result = mysql_query($sql);
$tableBody = "";
$formCont = 0;
while($row = mysql_fetch_array($result)){
	$idCurso = $row['id_curso'];
	$nombre = $row['cu_nombre'];
	$calif1 = substr($row['inscr_calificacion1'],1);
	$calif2 = $row['inscr_calificacion2'];
	$calif3 = $row['inscr_calificacion3'];
	$califFinal = $row['inscr_calificacion'];
	$tableBody = $tableBody . "
	<tr>
		<td>$idCurso</td>
		<td>$nombre</td>
		<td>$calif1</td>
		<td>$calif2</td>
		<td>$calif3</td>
		<td>$califFinal</td>
	</tr>
	 ";
	$formCont = $formCont + 1;
}
echo $tableBody;
