function checkPasswords(){
	var password1 = document.getElementById('password1').value;
	var password2 = document.getElementById('password2').value;
	return password1 != "" && password2 != "" && password1 == password2;

}

function showPasswordsAlert(){
	var password2 = document.getElementById('password2');
	if(!checkPasswords()){
		alert('Las contraseñas no coinciden, favor de corregirlos');
		password2.style.backgroundColor = "red";
	}
	else{
		password2.style.backgroundColor = "";
	}

}

function isValidMatricula(matricula){
	var patt = /[admADM][0-9]+/i;
	return patt.test(matricula);
}

function isFloat(elementId){
	var number = document.getElementById(elementId);
	if(isNaN(parseFloat(number.value))){
		alert('Favor de ingresar un numero valido');
		number.style.backgroundColor = "red";
	}
	else{
		number.style.backgroundColor = "";
	}

}


function get_action(form) {

	var display = form['Display'].value;

	if(document.getElementById('inscribir').checked){
		switch(display){
			case "Alumnos":
				form.action = '../inscripcion/inscripcionAlumno.php';
				break;
			case "Maestros":
				form.action = '../inscripcion/inscripcionMaestro.php';
				break;
			case "Cursos":
				form.action = '../inscripcion/inscripcionCurso.php';
				break;
			case "Administradores":
				form.action = '../inscripcion/inscripcionAdmin.php';
				break;
		}
	}else if (document.getElementById('editar').checked) {
		switch(display){
			case "Alumnos":
				form.action = '../edicion/edicionAlumno.php';
				break;
			case "Maestros":
				form.action = '../edicion/edicionMaestro.php';
				break;
			case "Cursos":
				form.action = '../edicion/edicionCurso.php';
				break;
			case "Administradores":
				form.action = '../edicion/edicionAdmin.php';
				break;
		}
	} else if (document.getElementById('baja').checked) {
		/*

		*/
	}
}
