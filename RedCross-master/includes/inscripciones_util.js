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
	if(isNaN(parseFloat(number.value))){
		alert('Favor de ingresar un numero valido');
		number.style.backgroundColor = "red";
	}
	else{
		number.style.backgroundColor = "";
	}

}