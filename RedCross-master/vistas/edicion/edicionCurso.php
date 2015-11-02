<?php
include "../../includes/sessionAdmin.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>Edici&oacute;n</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="../../includes/javascript_util.js"></script>
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<script>
		function search(){
		var searchId = document.getElementById('searchId').value;
		if(!isInt("searchId")){
			return;
		}
		searchId = "c" + searchId;
	    xhr=new XMLHttpRequest();
	    xhr.onload= fillFields;
	    var url="../../controladores/edicion/search.php?matricula=" + searchId;
	    xhr.open("GET", url, true);
	    xhr.send();
	  }
	  function fillFields(){
	    var fields = xhr.responseText.trim();
	    var arrayFields = fields.split("|");
	    if(arrayFields[0] == "-1"){
	    	alert(arrayFields[1]);
	    	return;
	    }
	    document.getElementById('matricula').value = arrayFields[1];
	    document.getElementById('semestre').value = arrayFields[2];
	    document.getElementById('nombre').value = arrayFields[3];
	    document.getElementById('objetivoCurso').value = arrayFields[4];
	    document.getElementById('unidades').value = arrayFields[5];


	  }
	</script>
</head>

<body class="home">

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Edici&oacute;n</a>
			</div>
			<div class="navbar-form navbar-left" >
				<div class="form-group">
					<input type="text" class="form-control" id="searchId" name="searchId" placeholder="Ingresar ID">
				</div>
				<button onclick="search()" class="btn btn-default">Buscar</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="menuAdmin.html">Regresar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">Edici&oacute;n de datos de Curso</h2>
		<br>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="">
		<div class="container">
			<div class="row">
			<form method="post" onsubmit="return isInt('searchId')" action="../../controladores/edicion/curso.php">
				<input type="hidden"  id="matricula" name="matricula" value="">
				<!-- CURP del alumno -->
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Semestre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isInt('semestre')" id="semestre" name="semestre" placeholder="Semestre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nombre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del curso" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">Objetivo del curso</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="objetivoCurso" name="objetivoCurso"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Unidades</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isInt('unidades')" id="unidades" name="unidades" placeholder="Unidades del curso" >
					</div>
				</div>
			</div> <!-- /row  -->
			<br><br>
			<div class="col-lg-12 text-right">
				<a href="#">
					<button style="width:100%;" class="btn btn-action" type="submit">Guardar</button>
				</a>
			</form>
				<br><br>
				<a href="../../vistas/menus/menuAdmin.php">
					<button style="width:100%;" class="btn btn-action" type="submit">Cancelar</button>
				</a>
			</div>
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
