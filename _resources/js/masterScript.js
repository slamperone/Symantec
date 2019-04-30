var apellido = document.registroSymantec.apellido;
var nombre = document.registroSymantec.nombre;
var compania = document.registroSymantec.compania;
var direccion = document.registroSymantec.direccion;
var colonia = document.registroSymantec.colonia;
var cp = document.registroSymantec.cp;
var telefono = document.registroSymantec.telefono;
var correo = document.registroSymantec.correo;

apellido.onkeypress = function(){
	return permite(event, 'car');
}
apellido.onblur = function(){
	validarApellido();
}
function validarApellido() {
  if (apellido.value == null || apellido.value.length == 0 || /^\s+$/.test(apellido.value)) {
	  apellido.classList.add("error");
    return false;
  } else {
	  apellido.classList.remove("error");
  }
}
nombre.onblur = function(){
	validarNombre();
}
nombre.onkeypress = function(){
	return permite(event, 'car');
}
function validarNombre() {
  if (nombre.value == null || nombre.value.length == 0 || /^\s+$/.test(nombre.value)) {
	  nombre.classList.add("error");
    return false;
  } else {
	  nombre.classList.remove("error");
  }
}
compania.onblur = function(){
	validarCompania();
}
compania.onkeypress = function(){
	return permite(event, 'num_car');
}
function validarCompania() {
  if (compania.value == null || compania.value.length == 0 || /^\s+$/.test(compania.value)) {
	  compania.classList.add("error");
    return false;
  } else {
	  compania.classList.remove("error");
  }
}
direccion.onblur = function(){
	validarDireccion();
}
direccion.onkeypress = function(){
	return permite(event, 'num_car');
}
function validarDireccion() {
  if (direccion.value == null || direccion.value.length == 0 || /^\s+$/.test(direccion.value)) {
	  direccion.classList.add("error");
    return false;
  } else {
	  direccion.classList.remove("error");
  }
}
colonia.onblur = function(){
	validarColonia();
}
compania.onkeypress = function(){
	return permite(event, 'num_car');
}
function validarColonia() {
  if (colonia.value == null || colonia.value.length == 0 || /^\s+$/.test(colonia.value)) {
	  colonia.classList.add("error");
    return false;
  } else {
	  colonia.classList.remove("error");
  }
}
cp.onblur = function(){
	validarCP();
}
cp.onkeypress = function(){
	return permite(event, 'num');
}
function validarCP() {
  if (cp.value == null || cp.value.length == 0 || /^\s+$/.test(cp.value)) {
	  cp.classList.add("error");
    return false;
  } else {
	  cp.classList.remove("error");
  }
}
telefono.onblur = function(){
	validarTelefono();
}
telefono.onkeypress = function(){
	return permite(event, 'num');
}
function validarTelefono() {
  if (telefono.value == null || telefono.value.length == 0 || /^\s+$/.test(telefono.value)) {
	  telefono.classList.add("error");
    return false;
  } else {
	  telefono.classList.remove("error");
  }
}
correo.onblur = function(){
	validarCorreo();
}
function validarCorreo() {
  if (correo.value == null || correo.value.length == 0 || /^\s+$/.test(correo.value)) {
	  correo.classList.add("error");
	  return false;
  } else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(correo.value))){
	  correo.classList.add("error");
	  return false;
  } else {
	  correo.classList.remove("error");
  }
}


function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha

  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }

  // Obtener la tecla pulsada
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);

  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}


function validarCheckbox1(){
	if(document.getElementById('radioA').checked || document.getElementById('radioB').checked || document.getElementById('radioC').checked || document.getElementById('radioD').checked){
		document.getElementById('checkbox-container1').classList.remove('error');
	} else {
		document.getElementById('checkbox-container1').classList.add('error');
		return false;
	}
}

function validarCheckbox2(){
	if(document.getElementById('radio2a').checked || document.getElementById('radio2b').checked || document.getElementById('radio2c').checked ){
		document.getElementById('checkbox-container2').classList.remove('error');
	} else {
		document.getElementById('checkbox-container2').classList.add('error');
		return false;
	}
}

function validarForma() {
	validarApellido();
	validarNombre();
	validarCompania();
	validarDireccion();
	validarColonia();
	validarCP();
 	validarTelefono();
	validarCorreo();
	validarCheckbox1();
	validarCheckbox2();
}






