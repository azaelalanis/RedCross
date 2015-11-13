<?php

	include "../../includes/sessionMaestro.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

	session_start();
$idMaestro = $_SESSION['matricula'];
$sql="select id_curso, cu_nombre, cu_dias, cu_aula from curso where cu_maestroresp = $idMaestro";
$result = mysql_query($sql);
$tableBody = "";
$formCont = 0;
while($row = mysql_fetch_array($result)){
	$idCurso = $row['id_curso'];
	$nombre = $row['cu_nombre'];
	$dias = $row['cu_dias'];
	$aula = $row['cu_aula'];
	$tableBody = $tableBody . "
	<tr> 
		<td>$idCurso</td>
		<td> 

			<form id='form-$formCont' method='post' action='../../vistas/asigna/asignaFaltas.php'>
				<input type='hidden'  id='idCurso' name='idCurso' value='$idCurso'>
				<a href='#' onclick=\"document.getElementById('form-$formCont').submit();\">$nombre</a>
			</form>
		</td>
		<td>$dias</td>
		<td>$aula</td>
	</tr>
	 ";
	$formCont = $formCont + 1;
}
echo $tableBody;
