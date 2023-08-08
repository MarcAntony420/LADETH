function getMail(){
	let selectElement = document.getElementById("correo");
	let inputElement = document.getElementById("mail");

	let selectedValue = selectElement.value;

	inputElement.value = selectedValue;
}

function getDivision(){
	let selectElement = document.getElementById("miSelect");
	let inputElement = document.getElementById("division");

	let selectedValue = selectElement.value;

	inputElement.value = selectedValue;
}

function verify(){
	let inputElement = document.getElementById("psswd");
	let inputElement2 = document.getElementById("psswd2");
	let buttonElement = document.getElementById("btn");

	let pass1 = inputElement.value;
	let pass2 = inputElement2.value;

	if(pass1 == pass2){
		buttonElement.disabled = false;
	}else{
		buttonElement.disabled = true;
	}
}

function showOptionsFromSelect(){
	let selectElement = document.getElementById("servicios");
	let selectElement2 = document.getElementById("opciones");
	let selectedValue = selectElement.value;
	let campos = selectElement2.querySelectorAll('#opciones option');

	switch (selectedValue) {
	  	case '1':
	  		campos.forEach(o => o.remove());
	  		selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='1'>Diseño de CV</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='2'>Diseño de cartas de presentación</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='3'>Código de vestimenta para una entrevista de trabajo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='4'>Reglas de comportamiento en una entrevista de trabajo</option>");
	    	break;
	    case '2':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='5'>Diagnóstico de clima organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='6'>Plan de clima organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='7'>Diagnóstico de cultura organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='8'>Plan de cultura organizacional</option>");
	    	break;
	    case '3':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='9'>Creación de la estructura organizacional</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='10'>Análisis de puestos</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='11'>Diseño de  puestos</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='12'>Elaboración de manuales de organización</option>");
	    	break;
	    case '4':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='13'>Proceso de reclutamiento</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='14'>Proceso de assessment</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='15'>Proceso de selección de personal</option>");
	    	break;
	    case '5':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='16'>Proceso de evaluación del desempeño</option>");
	    	break;
	    case '6':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='17'>Inducción laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='18'>Alineación del personal con la filosofía de la empresa</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='19'>Indicadores de desempeño laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='20'>Planes de desarrollo y carrera</option>");
	    	break;
	    case '7':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='21'>Diagnóstico de Necesidades de Capacitación</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='22'>Plan de capacitación</option>");
	    	break;
	    case '8':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='23'>Contrato laboral</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='24'>Prestaciones básicas </option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='25'>Rescisiones de trabajo</option>");
	    	break;
	    case '9':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='26'>Cálculo de nómina</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='27'>Vacaciones</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='28'>Utilidades</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='29'>Aguinaldo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='30'>Finiquito</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='31'>Requisitos para el trámite de e-firma</option>");
	    	break;
	    case '10':
	    	campos.forEach(o => o.remove());
	    	selectElement2.insertAdjacentHTML("beforeend","<option selected>Elige una opcion</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='32'>Identificación de riesgos y enfermedades de trabajo</option>");
	    	selectElement2.insertAdjacentHTML("beforeend","<option value='33'>Tipos y cálculo de incapacidades</option>");
	    	break;
	    case '11':
	    	campos.forEach(o => o.remove());
	    	break;
	  	default:
	    	console.log(selectedValue);
	}
}

function selectedOption(){
	let selectElement = document.getElementById("opciones");
	let inputElement = document.getElementById("opcion");
	let selectedValue = selectElement.value;
	inputElement.value = selectedValue;
}

function getFecha(){
	let selectElement = document.getElementById("horarios");
	let inputElement2 = document.getElementById("hora");

	let selectedValue = selectElement.value;

	switch (selectedValue) {
	  	case '1':
	  		inputElement2.value = '10:00:00';
	    	break;
	  	case '2':
	  		inputElement2.value = '11:00:00';
	    	break;
	  	case '3':
	  		inputElement2.value = '12:00:00';
	    	break;
	  	case '4':
	  		inputElement2.value = '13:00:00';
	    	break;
	  	case '5':
	  		inputElement2.value = '14:00:00';
	    	break;
	    case '6':
	    	inputElement2.value = '15:00:00';
	    	break;
	}
}

function getModalidad()
{
	let selectElement = document.getElementById("modalidad");
	let inputElement = document.getElementById("modal");
	let selectedValue = selectElement.value;
	inputElement.value = selectedValue;
}

function convertirAMayusculas() {
    var input = document.getElementById("grupo");
    input.value = input.value.toUpperCase();
}

function selectDate(){
	let inputElement = document.getElementById('date');
	let inputElement2 = document.getElementById('fecha');

	let selectedValue = inputElement.value;

	inputElement2.value = selectedValue;
}