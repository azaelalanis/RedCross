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

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="../../includes/javascript_util.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<script>
	function selectOption(select, textOption){
	for(option in select.options){
		if(textOption == option.text){
			option.selected = true;
			break;
		}
	}
	}
		function search(){
		var searchId = document.getElementById('searchId').value;
		console.log(searchId);
		if(!isValidMatricula(searchId)){
			alert("Favor de ingresar una matricula valida");
			return;
		}
			xhr=new XMLHttpRequest();
			xhr.onload= fillFields;
			var url="../../controladores/edicion/search.php?matricula=" + searchId;
			xhr.open("GET", url, true);
			xhr.send();
		}
		function fillFields(){
			//alert(xhr.responseText);
			//console.log(xhr.responseText);
			var fields = xhr.responseText.trim();
			var arrayFields = fields.split("|");
			if(arrayFields[0] == "-1"){
				alert(arrayFields[1]);
				return;
			}


			document.getElementById('matricula').value = arrayFields[1];
			document.getElementById('nombres').value = arrayFields[3];
			document.getElementById('APaterno').value = arrayFields[4];
			document.getElementById('AMaterno').value = arrayFields[5];
			document.getElementById('FechaNacimiento').value = arrayFields[6];
			document.getElementById('CURP').value = arrayFields[14];
			document.getElementById('Enfermedades').value = arrayFields[17];
			document.getElementById('Alergias').value = arrayFields[18];
			document.getElementById('Telefono').value = arrayFields[26];
			document.getElementById('Email').value = arrayFields[30];
			document.getElementById('estudios').value = arrayFields[32];

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
			<form class="navbar-form navbar-left" role="search" onSubmit="return false;">
				<div class="form-group">
					<input type="text" id="searchId" class="form-control" placeholder="Ingresar ID">
				</div>
				<button onclick="search()" class="btn btn-default">Buscar</button>
			</form>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../menus/menuAdmin.php">Regresar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">Edici&oacute;n de datos de Maestro</h2>
		<br>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<form method="post" action="../../controladores/edicion/maestro.php">
		<input type="hidden"  id="matricula" name="matricula" value="">
	<div class="">
		<div class="container">
			<div class="row">
				<!-- CURP del alumno -->
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nombre(s)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Apellido Paterno</label>
					<div class="col-lg-10">
							<input type="text" class="form-control" id="APaterno" name="APaterno" placeholder="Apellido Paterno" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Apellido Materno</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="AMaterno" name="AMaterno" placeholder="Apellido Materno" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Fecha Nacimiento</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="dd/mm/aaaa" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">CURP</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="CURP" name="CURP" placeholder="CURP" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Enfermedades</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Enfermedades" name="Enfermedades" placeholder="Liste enfermedades que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Alergias</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Alergias" name="Alergias" placeholder="Liste alergias que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Tel&eacute;fono local o celular</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Tel&eacute;fono" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<input type="email" class="form-control" id="Email" name="Email" placeholder="Email" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Estudios y experiencia profesional</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="estudios" name="estudios" >
					</div>
				</div>
				<br><br>
			</div> <!-- /row  -->
			<br><br>
			<div class="col-lg-12 text-right">
				<a href="#">
					<button style="width:100%;" class="btn btn-action" type="submit">Guardar</button>
				</a>
				<br><br>
				<a href="#">
					<button style="width:100%;" class="btn btn-action" type="submit">Cancelar</button>
				</a>
			</div>
		</div>
	</div>
</form>
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
