var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent;
var textError = document.querySelector('.error');


var rut = document.querySelector('#rut');
var nombre = document.querySelector('#nombre');
var apellido_p = document.querySelector('#apellido_p');
var apellido_m = document.querySelector('#apellido_m');
var fecha_nacimiento = document.querySelector('#fecha_nacimiento');
var direccion = document.querySelector('#direccion');
var email = document.querySelector('#email');
var telefono = document.querySelector('#telefono');
var contraseña = document.querySelector('#contrasena');
var rep_contraseña = document.querySelector('#rep_contrasena');
var region = document.querySelector('#region');




var escucha_rut = document.querySelector('#start_rut');
var escucha_nom = document.querySelector('#start_nom');
var escucha_apellido_m = document.querySelector('#start_ape_m');
var escucha_apellido_p = document.querySelector('#start_ape_p');
var escucha_fecha_nac = document.querySelector('#start_fecha_nac');
var escucha_direccion = document.querySelector('#start_direccion');
var escucha_email = document.querySelector('#start_email');
var escucha_telefono = document.querySelector('#start_telefono');
var escucha_contraseña = document.querySelector('#start_contrasena');
var escucha_rep_contraseña = document.querySelector('#start_rep_contrasena');
var escucha_region = document.querySelector('#start_region');



var activo = false;

function inicio_nom() {


	if (activo) {
		escucha_nom.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_nom.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				nombre.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_nom.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}

function inicio_rut() {


	if (activo) {
		escucha_rut.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_rut.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				rut.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_rut.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}
function inicio_ape_p() {


	if (activo) {
		escucha_apellido_p.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_apellido_p.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				apellido_p.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_apellido_p.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}

function inicio_ape_m() {


	if (activo) {
		escucha_apellido_m.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_apellido_m.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				apellido_m.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_apellido_m.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}


function inicio_direccion() {


	if (activo) {
		escucha_direccion.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_direccion.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				direccion.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_direccion.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}

function inicio_contraseña() {


	if (activo) {
		escucha_contraseña.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_contraseña.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				contraseña.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_contraseña.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}


function inicio_rep_contraseña() {


	if (activo) {
		escucha_rep_contraseña.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_rep_contraseña.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				rep_contraseña.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_rep_contraseña.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}

function inicio_telefono() {


	if (activo) {
		escucha_telefono.src = '../imagenes/mic.gif';
		activo = false;
	}
	else {
		escucha_telefono.src = '../imagenes/mic-animate.gif';
		activo = true;

		var reconocimiento = new SpeechRecognition();
		reconocimiento.lang = 'es-CO';
		reconocimiento.interimResults = false;
		reconocimiento.maxAlternatives = 1;

		reconocimiento.start();

		reconocimiento.onresult = function (event) {

			var resultadoEscucha = event.results[0][0].transcript;
			textError.textContent = resultadoEscucha;
			if (resultadoEscucha != '') {
				console.log('correcto');
				telefono.value = resultadoEscucha;
			}
			else {
				textError.textContent = "No escuchamos nada. Intentalo de nuevo!"

			}

			console.log('Confidencial: ' + event.results[0][0].confidence);
		}
	}
	reconocimiento.onspeechend = function () {
		reconocimiento.stop();
		escucha_telefono.src = '../imagenes/mic.gif';
		activo = false;
	}
	reconocimiento.onerror = function (event) {
		textError.textContent = 'Algo fallo intentalo de nuevo';
		console.log('error' + event.error);
	}
}












function llenarSelectConTexto(texto) {
	var opcionesSelect = document.getElementById('option_region');

	// Limpiar opciones existentes
	opcionesSelect.innerHTML = '';

	// Dividir el texto en palabras y agregar cada palabra como opción al select
	var palabras = texto.split(' ');
	palabras.forEach(function (palabra) {
		var opcion = document.createElement('option');
		opcion.value = palabra;
		opcion.text = palabra;
		opcionesSelect.appendChild(opcion);
	});
}

escucha_nom.addEventListener('click', inicio_nom);
escucha_rut.addEventListener('click', inicio_rut);
escucha_apellido_p.addEventListener('click', inicio_ape_p);
escucha_apellido_m.addEventListener('click', inicio_ape_m);
escucha_telefono.addEventListener('click', inicio_telefono);
escucha_direccion.addEventListener('click', inicio_direccion);
escucha_contraseña.addEventListener('click', inicio_contraseña);
escucha_rep_contraseña.addEventListener('click', inicio_rep_contraseña);

