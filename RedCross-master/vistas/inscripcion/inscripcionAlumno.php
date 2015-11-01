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

	<title>Inscripci&oacute;n</title>

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
				<a class="navbar-brand" href="#">Inscripci&oacute;n</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../menus/menuAdmin.php">Regresar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Intro -->
	<div class="container text-center">
		<h2 class="thin">Inscripci&oacute;n de Alumno</h2>
		<br>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="">
		<div class="container">
			<div class="row">
				<form method="post" onsubmit="return checkPasswords()" action="../../controladores/inscripcion/alumno.php">
				<!-- CURP del alumno -->
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nombre(s)</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="nombres" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Apellido Paterno</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="APaterno" placeholder="Apellido Paterno" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Apellido Materno</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="AMaterno" placeholder="Apellido Materno" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Fecha Nacimiento</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" id="" name="FechaNacimiento" placeholder="dd/mm/aaaa" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Lugar de Nacimiento</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="LugarNacimiento" placeholder="Ciudad" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nacionalidad</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Nacionalidad" placeholder="Mexicano" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Sexo</label>
					<div class="col-lg-10">
						<select class="form-control" id="select" name="Sexo" >
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Estado Civil</label>
					<div class="col-lg-10">
						<select class="form-control" id="select" name="EstadoCivil">
							<option value="Soltero">Soltero</option>
							<option value="Casado">Casado</option>
							<option value="Divorciado">Divorciado</option>
							<option value="Viudo">Viudo</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Grupo Sangu&iacute;neo</label>
					<div class="col-lg-10">
						<select class="form-control" id="select" name="GrupoSanguineo">
							<option value="O">O-</option>
							<option value="O+">O+</option>
							<option value="A">A-</option>
							<option value="A+">A+</option>
							<option value="B">B-</option>
							<option value="B+">B+</option>
							<option value="AB">AB-</option>
							<option value="AB+">AB+</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">RH</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="RH" placeholder="RH" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">CURP</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="CURP" placeholder="CURP" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Cuenta con servicio m&eacute;dico?</label>
					<div class="col-lg-10">
						<select class="form-control" id="select" name="ServicioMedico" >
							<option value="Si">S&iacute;</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Actualmente est&aacute; laborando?</label>
					<div class="col-lg-10">
						<select class="form-control" id="select" name="ActualmenteLaborando">
							<option value="Si">S&iacute;</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Enfermedades</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Enfermedades" placeholder="Liste enfermedades que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Alergias</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Alergias" placeholder="Liste alergias que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Tiene alg&uacute;n tipo de debilidad motriz?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="DebilidadMotriz" placeholder="Liste alergias que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Direcci&oacute;n</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Direccion" placeholder="Direcci&oacute;n con numero ext/int" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">C&oacute;digo postal</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="CP" placeholder="C&oacute;digo postal" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Colonia</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Colonia" placeholder="Colonia" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Municipio</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Municipio" placeholder="Municipio" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Tel&eacute;fono local o celular</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Telefono" placeholder="Tel&eacute;fono" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
						<input type="email" class="form-control" id="" name="Email" placeholder="Email" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nombre completo del padre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="NombrePadre" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Ocupaci&oacute;n laboral</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="OcupacionPadre" placeholder="Puesto" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Empresa donde labora</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="EmpresaPadre" placeholder="Empresa" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Sueldo</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isFloat('SueldoPadre')" id="SueldoPadre" name="SueldoPadre" placeholder="Sueldo" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nombre completo de la madre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="NombreMadre" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Ocupaci&oacute;n laboral</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="OcupacionMadre" placeholder="Puesto" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Empresa donde labora</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="EmpresaMadre" placeholder="Empresa" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Sueldo</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isFloat('SueldoMadre')" id="SueldoMadre" name="SueldoMadre" placeholder="Sueldo" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Ha cursado otros estudios?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="OtrosEstudios" placeholder="Si/No y ¿Cuales?" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Ha suspendido sus estudios?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="SuspendidoEstudios" placeholder="Si/No y ¿Por qu&eacute; causa?" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Qu&eacute; materias ha reprobado?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="MateriasReprobadas" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Qui&eacute;n lo apoya econ&oacute;micamente en sus estudios?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="ApoyoEconomico" placeholder="" >
					</div>
				</div>
				<br><br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿C&oacute;mo se enter&oacute; de la escuela?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="EnteroEscuela" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">¿Por qu&eacute; desea estudiar en la Cruz Roja?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="textArea" name="PorqueEstudiarCR"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">¿Por qu&eacute; desea estudiar enfermer&iacute;a?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="textArea" name="PorqueEstudiarEnfermeria"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">Ademas de enfermer&iacute;a, ¿qu&eacute; otras carreras le gustar&iacute;a estudiar?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="textArea" name="OtrasCarrerasPosibles"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Realiz&oacute; su registro ante el CENEVAL?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isFloat('CENEVAL')" id="CENEVAL" name="RegistroCeneval" placeholder="Puntaje CENEVAL" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Realiz&oacute; su registro ante la escuela?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="RegistroEscuela" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Contest&oacute; el examen psicom&eacute;trico?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="ExamenPsicometrico" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Acudi&oacute; a la entrevista?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="" name="Entrevisto" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Contraseña</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="password1" name="Contrasena" placeholder="Contraseña" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Repite contraseña</label>
					<div class="col-lg-10">
						<input type="password" onchange="showPasswordsAlert()" class="form-control" id="password2" name="" placeholder="Contraseña" >
					</div>
				</div>
			</div> <!-- /row  -->
			<br><br>
			<div class="row" style="text-align:center;">
				<a href="#">
					<input style="width:50%;" align="center" class="btn btn-action" value="Guardar" type="submit"></input>
				</a>
			</div> <!-- /row  -->
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
