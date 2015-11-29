<?php

	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";
	include "../../includes/mysql_util.php";

$matricula = substr($_POST["matricula"], 1);;
$nombres = $_POST["nombres"];
$APaterno = $_POST["APaterno"];
$AMaterno = $_POST["AMaterno"];


/*Verificar si el alumno está activo*/
$sql = "SELECT count(*) from alumno where id_alumno= $matricula and a_estatus = 'Activo'";
$result = mysql_query($sql);

if (mysql_affected_rows() > 0){

	$sql = "select * from inscritos where id_alumno = $matricula and inscr_calificacion < 70 and inscr_cursado = 1";
	$result = mysql_query($sql);

	/*Si el alumno tiene 2 o más materias reprobadas.. no puede pasar de semestre y sólo llevara esas 2 materias*/
	if (mysql_affected_rows() > 1){
	$alertMsg = "El alumno sólo llevara las materias reprobadas, ya que tiene 2 ó más materias reprobadas";
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/tablas/seleccionarCursos.php?c=1&id=$matricula\"
			</script>";


  } /*Si el alumno solo tiene 1 materia reprobada.. cursa el semestre y lleva carga adicional*/
	elseif (mysql_affected_rows() > 0) {
			/*Si es de alta prioridad.. mostrar materia reprobada y las otras del siguiente semestre*/
		$alertMsg = "Alumno pasará al siguiente semestre, pero llevará 1 materia adicional";
		echo "<script language=\"javascript\">
					alert(\"$alertMsg\");
					window.location.href = \"../../vistas/tablas/seleccionarCursos.php?c=2&id=$matricula\"
				</script>";
	}
	else {
		/*No hay materias reprobadas, el alumno pasa de semestre normal*/
		$alertMsg = "Alumno pasa al siguiente semestre";
		echo "<script language=\"javascript\">
					alert(\"$alertMsg\");
					window.location.href = \"../../vistas/tablas/seleccionarCursos.php?c=3&id=$matricula\"
				</script>";
	}


}
elseif (!$result) {
	$alertMsg = "Algo salio mal: " . mysql_error();
}
else{
	$alertMsg = "No encontramos ningun alumno con la matricula a$matricula o el alumno está inactivo";
	echo "<script language=\"javascript\">
				alert(\"$alertMsg\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
}

?>
