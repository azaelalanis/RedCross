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

function selectOption(select, textOption){
	for(option in select.options){
		if(textOption == option.text){
			option.selected = true;
			break;
		}
	}
}

function isValidMatricula(matricula){
	var patt = /^[admADM][0-9]+$/i;
	return patt.test(matricula);
}

function isFloat(elementId){
	var number = document.getElementById(elementId);
	var regex = /^[0-9]*\.?[0-9]+$/i;
	if(!regex.test(number.value)){
		alert('Favor de ingresar un numero valido');
		number.style.backgroundColor = "red";
	}
	else{
		number.style.backgroundColor = "";
	}
}

function isInt(elementId){
	var number = document.getElementById(elementId);
	var regex = /^[0-9]+$/i;
	if(!regex.test(number.value)){
		alert('Favor de ingresar un numero valido');
		number.style.backgroundColor = "red";
		return false;
	}
	else{
		number.style.backgroundColor = "";
		return true;
	}
}

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
}


>>>>>>> 9d99fc0d367a71f5a104ae4db0fd9fec9b206cc5
>>>>>>> 743185915d7d6b8be478723088f49076ef53e364
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> f08ba97b2b5490d3b07fce722aef5a45d7bd0aa6
>>>>>>> 9d99fc0d367a71f5a104ae4db0fd9fec9b206cc5
>>>>>>> 743185915d7d6b8be478723088f49076ef53e364
