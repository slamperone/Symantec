@extends('layouts.plantilla')
@section('content')
        <form name="registroSymantec" onSubmit="return validarForma()" id="resgistro">
                @csrf
            <div class="msj"></div>

            <div class="formulario">
                <label>
                    <input type="text" required name="apellidos" id="apellidos" maxlength="30" />
                    <div class="label-text">Apellido</div>
                </label>
                <label>
                    <input type="text" required name="nombre" maxlength="30" />
                    <div class="label-text">Nombre</div>
                </label>
                <label>
                    <input type="text" required name="compania" maxlength="30" />
                    <div class="label-text">Compañía</div>
                </label>
                <label>
                    <input type="text" required name="dir" maxlength="50" />
                    <div class="label-text">Dirección</div>
                </label>
                <label>
                    <input type="text" required name="colonia" maxlength="30" />
                    <div class="label-text">Colonia</div>
                </label>
                
                <div class="doscolumnas clearfix">
                    <label>
                        <input type="text" required name="cp" maxlength="6" />
                        <div class="label-text">CP</div>
                    </label>
                    <label>
                        <input type="text" required name="telefono"  maxlength="13" />
                        <div class="label-text">Teléfono</div>
                    </label>
                </div>
                
                <label>
                    <input type="text" required name="correo" maxlength="30" />
                    <div class="label-text">E-mail</div>
                </label>
                <div id="checkbox-container1" class="checkbox-container clearfix">
                    <p>Tamaño de la compañía:</p>
                    <label class="container">a) Menos de 250 empleados  
                        <input type="radio" id="radioA" name="tamanio" value="A">
                        <span class="checkmark"></span>
                    </label>
                        <label class="container">b) De 251 a 500 empleados
                        <input type="radio" id="radioB" name="tamanio" value="B">
                    <span class="checkmark"></span>
                    </label>
                        <label class="container">c) De 501 a 1,000 empleados 
                        <input type="radio" id="radioC" name="tamanio" value="C">
                    <span class="checkmark"></span>
                    </label>
                    <label class="container">d) Más de 1,000 empleados
                        <input type="radio" id="radioD" name="tamanio" value="D">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div id="checkbox-container2" class="checkbox-container clearfix">
                    <p>¿Cómo se enteró del evento?</p>
                    <label class="container">a) Call Center  
                        <input type="radio" id="radio2a" name="encuesta" value="A">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">b) Redes Sociales   
                        <input type="radio" id="radio2b" name="encuesta" value="B">
                    <span class="checkmark"></span>
                    </label>
                        <label class="container">c) Account Manager 
                        <input type="radio" id="radio2c" name="encuesta" value="C">
                    <span class="checkmark"></span>
                    </label>
                </div>
                <div class="disclaimersForm">
                    <label class="aviso-privacidad"><input type="checkbox" name="privacidad" />Autorizo utilizar mis datos personales para fines de este evento. <a href="#">Aviso de privacidad.</a></label>
                    <p class="disclaimer">Los datos son proporcionados a Weil&Co. Agencia organizadora de eventos corporativos, únicamente se usarán
    para fines del evento de Symantec Cyberdefense Cloud Forum.</p>
                    <p class="invitaciones">*Favor de llevar tarjetas de presentación para el registro <br />*Invitación personal e intransferible. Fecha limite de registro 24 de mayo.</p>
                </div>
            </div>
            <button value="registrarse" onClick="validarForma()">Registrarse</button>
        </form>

@endsection
