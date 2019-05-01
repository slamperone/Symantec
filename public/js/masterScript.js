var apellido = document.registroSymantec.apellidos;
var nombre = document.registroSymantec.nombre;
var compania = document.registroSymantec.compania;
var cargo = document.registroSymantec.cargo;
var direccion = document.registroSymantec.dir;
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
cargo.onblur = function(){
	validarCargo();
}
function validarCargo() {
  if (cargo.value == null || cargo.value.length == 0 || /^\s+$/.test(cargo.value)) {
	  cargo.classList.add("error");
    return false;
  } else {
	  cargo.classList.remove("error");
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
    var currentmail = correo.value;
	var gmail = /@gmail.com\s*$/;
	var yahoomail = /@yahoo.com\s*$/;
	var outlook = /@outlook.com\s*$/;
	var hotmail = /@hotmail.com\s*$/;
	
  if (currentmail == null || currentmail.length == 0 || /^\s+$/.test(currentmail)) {
    correo.classList.add("error");
    return false;
  } else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(currentmail))){
    correo.classList.add("error");
    return false;
  } else if(gmail.test(currentmail)|| yahoomail.test(currentmail)|| outlook.test(currentmail)|| hotmail.test(currentmail)){
    correo.classList.add("error");
    window.alert("Debes ingresar un correo corporativo");
    return false;
  } else {
    correo.classList.remove("error");
  }
}


function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnÃ±opqrstuvwxyzABCDEFGHIJKLMNÃ‘OPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha

  // Seleccionar los caracteres a partir del parÃ¡metro de la funciÃ³n
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

function validarAsesor(){
	validarCheckbox2();
	var checkasesor = document.getElementById("radio2c").checked;
	if(checkasesor === true){
		document.getElementById("select-asesor").classList.add('visible');
	} else {
		document.getElementById("select-asesor").classList.remove('visible');
	}
}


function validarPrivacidad(){
	var checkprivacy = document.getElementById("privacidad").checked;
	if(checkprivacy === false){
		document.getElementById("aviso-label").classList.add('error');
		return false;
	} else {
		document.getElementById("aviso-label").classList.remove('error');
	}
}

/*function validarForma() {
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
	validarPrivacidad();
}*/

function validarForma() {

	var ape = validarApellido();
	var nom = validarNombre();
	var com = validarCompania();
	var car = validarCargo();
	var dir = validarDireccion();
	var col = validarColonia();
	var cp = validarCP();
 	var tel = validarTelefono();
	var mail = validarCorreo();
	var tam = validarCheckbox1();
	var enc = validarCheckbox2();
}

$('.msj').hide();

$("#resgistro").submit(function(e){

//  $('.formulario').fadeOut(3);
//  $('#msj').delay(3).fadeIn(3);

        $.ajax({
            data: $("#resgistro").serialize(), 
            type: "POST",
            dataType: "json",
            url: "registroNuevo",
            beforeSend: function(){
            $('.formulario').slideUp();
            $('.msj').html('enviando datos').slideDown('fast');
          }
        })
        .done(function( data, textStatus, jqXHR ) {
             //solicitud correcta
             $('.formulario').hide();
             $('.msj').html('Estado de la solicitud: '+data.guardado);
			sayGracias();

         })
         .fail(function( jqXHR, textStatus, errorThrown ) {
             if ( console && console.log ) {
                 console.log( "La solicitud a fallado: " +  textStatus);
             }
			sayGracias();
             //$('.msj').append(jqXHR).fadeIn('slow');
        });


  return false;
});


// Cache selectors
var lastId,
 topMenu = $("header"),
 topMenuHeight = topMenu.outerHeight()+1,
 // All list items
 menuItems = topMenu.find("a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

	// Set/remove active class
	console.log(id)
	menuItems.removeClass("active");
	$('#'+id+'-link').addClass('active')
});



$('.ctaportada').on('click', function(){
	$('html,body').animate({
        scrollTop: $('#registro').offset().top-topMenuHeight+2
    }, 'slow');
	return false;
});

$('.overlay').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).fadeOut();
	$('.modal:visible').fadeOut();
});

$('.close').on('click', function(){
	$('body').removeClass('no-scroll');
	$(this).parents('.modal').fadeOut();
	$('.overlay').fadeOut();
});

$('.trigger-aviso').on('click', function(){
	$('body').addClass('no-scroll');
	$('.overlay').fadeIn();
	$('#privacy-policy').fadeIn();
	return false;
});

function sayGracias(){
	$('#thankyou').fadeIn();
	$('.overlay').fadeIn();
}

//sayGracias();

