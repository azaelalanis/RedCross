<?php
	Session_start();
	
	if(!isset($_SESSION['tipo'])){
			echo "<script language=\"javascript\">
					alert(\"Inicie sesion primero\");
					window.location.href = \"../vistas/index.php\"
				</script>";
		}
	elseif($_SESSION['tipo'] != 'm'){
		echo "<script language=\"javascript\">
					alert(\"No tiene permisos!\");
					window.location.href = \"../vistas/index.php\"
				</script>";
	}
	
?>