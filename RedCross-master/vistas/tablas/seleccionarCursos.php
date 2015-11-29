<?php
include "../../includes/sessionAdmin.php";
include "../../includes/conexion.php";
include "../../includes/mysql_util.php";
$numCaso = $_GET['c'];
$idMatricula = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Horario</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script>
		function loadCourses(){
				xhr=new XMLHttpRequest();
				xhr.onload= fillFields;
				var c = document.getElementById("caso").value;
    		var id = document.getElementById("idMatricula").value;
				var url="../../controladores/reinscripcion/obtenerCursosAlumno.php?c="+c+"&id="+id;
				xhr.open("GET", url, true);
				xhr.send();

			}

		function fillFields(){

			document.getElementById('tbodyCursos').innerHTML = xhr.responseText.trim();

		}
	</script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="loadCourses()">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Horario</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="menuAlumno.html">Regresar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">Seleccionar cursos del alumno</h2>
		<br>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="">
		<div class="container">
			<div class="row">
				<form method="POST" action="../../controladores/reinscripcion/inscribirCursos.php">
				<?php echo '<input type="hidden"  id="caso" name="caso" value="'.$numCaso.'">' ?>
				<?php echo '<input type="hidden"  id="idMatricula" name="idMatricula" value="'.$idMatricula.'">' ?>
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>#ID</th>
							<th>Curso</th>
							<th>Día</th>
							<th>Horario</th>
							<th>Sal&oacute;n</th>
							<th>Seleccionar</th>
						</tr>
					</thead>
					<tbody id="tbodyCursos">
					</tbody>
				</table>
			</div> <!-- /row  -->

			<a href="#">
				<button style="width:80%;" class="btn btn-action" type="submit">Inscribir</button>
			</a>
		</form>
		</div>
	</div>
	<!-- /Highlights -->
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Informaci&oacute;n</h3>
						<div class="widget-body">
							<p> Avenida Alfonso Reyes Norte #2503 Norte, Del Prado, 64410 Monterrey, N.L. <br>
								<a href="mailto:#">cruz.roja@cr.com</a><br>
								81-1477-1477
							</p>
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Redes Sociales</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Información</h3>
						<div class="widget-body">
							<p>Sitio web de la Cruz Roja Mexicana.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> |
								<a href="#">Contacto</a> |
								<b><a href="#">Iniciar sesi&oacute;n</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015, Cruz Roja.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
