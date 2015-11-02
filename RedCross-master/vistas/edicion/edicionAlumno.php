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
<<<<<<< HEAD
	<script>
=======
<<<<<<< HEAD
	<script>
=======
<<<<<<< HEAD
	<script>
	function selectOption(select, textOption){
	for(option in select.options){
		if(textOption == option.text){
			option.selected = true;
			break;
		}
	}
}
=======
	<script> 
>>>>>>> f08ba97b2b5490d3b07fce722aef5a45d7bd0aa6
>>>>>>> 9d99fc0d367a71f5a104ae4db0fd9fec9b206cc5
>>>>>>> 743185915d7d6b8be478723088f49076ef53e364
		function search(){
		var searchId = document.getElementById('searchId').value;
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
	  function validarMatricula(){
	  	var id = document.getElementById('matricula').value;
	  	if (!isValidMatricula(id)) {
	  		alert("Matricula no valida, favor de volver a cargar el alumno");
	  		return false;
	  	}
	  	return true;
	  }
	  function fillFields(){
	    var fields = xhr.responseText.trim();
	    var arrayFields = fields.split("|");
	    if(arrayFields[0] == "-1"){
	    	alert(arrayFields[1]);
	    	return;
	    }
	    document.getElementById('matricula').value = 'a' + arrayFields[1];
	    document.getElementById('nombres').value = arrayFields[3];
	    document.getElementById('APaterno').value = arrayFields[4];
	    document.getElementById('AMaterno').value = arrayFields[5];
	    document.getElementById('FechaNacimiento').value = arrayFields[6];
	    document.getElementById('LugarNacimiento').value = arrayFields[7];
	    document.getElementById('Nacionalidad').value = arrayFields[8];
	    selectOption(document.getElementById('Sexo'), arrayFields[9]);
	    selectOption(document.getElementById('EstadoCivil'), arrayFields[10]);
	    selectOption(document.getElementById('GrupoSanguineo'), arrayFields[11]);
	    document.getElementById('RH').value = arrayFields[12];
	    document.getElementById('CURP').value = arrayFields[13];
	    selectOption(document.getElementById('ServicioMedico'), arrayFields[14]);
	    selectOption(document.getElementById('ActualmenteLaborando'), arrayFields[15]);
	    document.getElementById('Enfermedades').value = arrayFields[16];
	    document.getElementById('Alergias').value = arrayFields[17];
	    document.getElementById('DebilidadMotriz').value = arrayFields[18];
	    document.getElementById('Direccion').value = arrayFields[19];
	    document.getElementById('CP').value = arrayFields[22];
	    document.getElementById('Colonia').value = arrayFields[23];
	    document.getElementById('Municipio').value = arrayFields[24];
	    document.getElementById('Telefono').value = arrayFields[25];
	    document.getElementById('NombrePadre').value = arrayFields[27];
	    document.getElementById('OcupacionPadre').value = arrayFields[28];
	    document.getElementById('EmpresaPadre').value = arrayFields[29];
	    document.getElementById('SueldoPadre').value = arrayFields[30];
	    document.getElementById('NombreMadre').value = arrayFields[31];
	    document.getElementById('OcupacionMadre').value = arrayFields[32];
	    document.getElementById('EmpresaMadre').value = arrayFields[33];
	    document.getElementById('SueldoMadre').value = arrayFields[34];
	    document.getElementById('OtrosEstudios').value = arrayFields[35];
	    document.getElementById('SuspendidoEstudios').value = arrayFields[36];
	    document.getElementById('MateriasReprobadas').value = arrayFields[37];
	    document.getElementById('ApoyoEconomico').value = arrayFields[38];
	    document.getElementById('EnteroEscuela').value = arrayFields[39];
	    document.getElementById('PorqueEstudiarCR').value = arrayFields[40];
	    document.getElementById('PorqueEstudiarEnfermeria').value = arrayFields[41];
	    document.getElementById('OtrasCarrerasPosibles').value = arrayFields[42];
	    document.getElementById('RegistroCeneval').value = arrayFields[43];
	    document.getElementById('RegistroEscuela').value = arrayFields[44];
	    document.getElementById('ExamenPsicometrico').value = arrayFields[45];
	    document.getElementById('Entrevisto').value = arrayFields[46];
	    document.getElementById('Email').value = arrayFields[48];


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 9d99fc0d367a71f5a104ae4db0fd9fec9b206cc5
>>>>>>> 743185915d7d6b8be478723088f49076ef53e364
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
					<input type="text" id="searchId" class="form-control" placeholder="Ingresar ID">
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
		<h2 class="thin">Edici&oacute;n de datos de Alumno</h2>
		<br>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="">
		<div class="container">
			<div class="row">
				<form method="post" onsubmit="return validarMatricula()" action="../../controladores/edicion/alumno.php">
					<input type="hidden"  id="matricula" name="matricula" value="">
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
					<label for="" class="col-lg-2 control-label">Lugar de Nacimiento</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="LugarNacimiento" name="LugarNacimiento" placeholder="Ciudad" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Nacionalidad</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" placeholder="Mexicano" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Sexo</label>
					<div class="col-lg-10">
						<select class="form-control" id="Sexo" name="Sexo" >
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Estado Civil</label>
					<div class="col-lg-10">
						<select class="form-control" id="EstadoCivil" name="EstadoCivil">
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
						<select class="form-control" id="GrupoSanguineo" name="GrupoSanguineo">
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
						<input type="text" class="form-control" id="RH" name="RH" placeholder="RH" >
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
					<label for="select" class="col-lg-2 control-label">Cuenta con servicio m&eacute;dico?</label>
					<div class="col-lg-10">
						<select class="form-control" id="ServicioMedico" name="ServicioMedico" >
							<option value="Si">S&iacute;</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Actualmente est&aacute; laborando?</label>
					<div class="col-lg-10">
						<select class="form-control" id="ActualmenteLaborando" name="ActualmenteLaborando">
							<option value="Si">S&iacute;</option>
							<option value="No">No</option>
						</select>
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
					<label for="" class="col-lg-2 control-label">Tiene alg&uacute;n tipo de debilidad motriz?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="DebilidadMotriz" name="DebilidadMotriz" placeholder="Liste alergias que padece" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Direcci&oacute;n</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Direcci&oacute;n con numero ext/int" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">C&oacute;digo postal</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="CP" name="CP" placeholder="C&oacute;digo postal" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Colonia</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Colonia" name="Colonia" placeholder="Colonia" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Municipio</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Municipio" >
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
					<label for="" class="col-lg-2 control-label">Nombre completo del padre</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="NombrePadre" name="NombrePadre" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Ocupaci&oacute;n laboral</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="OcupacionPadre" name="OcupacionPadre" placeholder="Puesto" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Empresa donde labora</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="EmpresaPadre" name="EmpresaPadre" placeholder="Empresa" >
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
						<input type="text" class="form-control" id="NombreMadre" name="NombreMadre" placeholder="Nombre" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Ocupaci&oacute;n laboral</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="OcupacionMadre" name="OcupacionMadre" placeholder="Puesto" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">Empresa donde labora</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="EmpresaMadre" name="EmpresaMadre" placeholder="Empresa" >
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
						<input type="text" class="form-control" id="OtrosEstudios" name="OtrosEstudios" placeholder="Si/No y ¿Cuales?" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Ha suspendido sus estudios?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="SuspendidoEstudios" name="SuspendidoEstudios" placeholder="Si/No y ¿Por qu&eacute; causa?" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Qu&eacute; materias ha reprobado?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="MateriasReprobadas" name="MateriasReprobadas" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Qui&eacute;n lo apoya econ&oacute;micamente en sus estudios?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="ApoyoEconomico" name="ApoyoEconomico" placeholder="" >
					</div>
				</div>
				<br><br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿C&oacute;mo se enter&oacute; de la escuela?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="EnteroEscuela" name="EnteroEscuela" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">¿Por qu&eacute; desea estudiar en la Cruz Roja?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="PorqueEstudiarCR" name="PorqueEstudiarCR"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">¿Por qu&eacute; desea estudiar enfermer&iacute;a?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="PorqueEstudiarEnfermeria" name="PorqueEstudiarEnfermeria"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">Ademas de enfermer&iacute;a, ¿qu&eacute; otras carreras le gustar&iacute;a estudiar?</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="OtrasCarrerasPosibles" name="OtrasCarrerasPosibles"></textarea>
					</div>
				</div>
				<br><br><br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Realiz&oacute; su registro ante el CENEVAL?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" onchange="isFloat('RegistroCeneval')" id="RegistroCeneval" name="RegistroCeneval" placeholder="Puntaje CENEVAL" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Realiz&oacute; su registro ante la escuela?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="RegistroEscuela" name="RegistroEscuela" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Contest&oacute; el examen psicom&eacute;trico?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="ExamenPsicometrico" name="ExamenPsicometrico" placeholder="" >
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<label for="" class="col-lg-2 control-label">¿Acudi&oacute; a la entrevista?</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="Entrevisto" name="Entrevisto" placeholder="" >
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
