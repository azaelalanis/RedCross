<?php
	include "../../includes/sessionAdmin.php";
	include "../../includes/conexion.php";

	$result = mysql_query("UPDATE inscritos SET inscr_Cursado = 1");
	echo "<script language=\"javascript\">
				alert(\"Semestre reiniciado exitosamente\");
				window.location.href = \"../../vistas/menus/menuAdmin.php\"
			</script>";
?>