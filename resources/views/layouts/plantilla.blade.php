<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <nav>
        <a href="#" class="active">Inicio</a>
        <a href="#" class="inactive">Registro</a>
        <a href="#" class="inactive">Agenda</a>
        <a href="#" class="inactive">Lugar</a>
    </nav>
</header>


<section class="seccion" id="portada">
    <div class="texto-portada">
        <h1><b><span>Symantec</span> Cyberdefense</b> Cloud Forum</h1>
        <p class="portada-fecha">29 de mayo de 2019</p>
        <p class="portada-hora">08:00 hrs, Espacio Virreyes</p>
        <p>Symantec lo invita a descubrir las tendencias que impactarán el futuro de la seguridad holística, protección de la privacidad, inteligencia artificial, redes no confiables (Zero Trust Networks), seguridad en la nube, entre muchas más.</p>
        <a href="#">Regístrese aquí</a>
    </div>
</section>

<section class="seccion" id="registro">
    <div class="form">
        <div class="cabeza-form">
            <h2>Registro</h2>
        </div>


                    @yield('content')


    </div>
    <div class="img-form"></div>
</section>
<section class="seccion" id="agenda">
    <div class="agenda-white">
        <div class="liston-agenda clearfix">
            <h2>Agenda</h2>
            <div>
                <h4>Symantec Cyberdefense</h4>
                <h5>Cloud Forum</h5>
            </div>
        </div>
        <ul>
            <li>Registro</li>
            <li>La Disrupción de la Ciberdefensa Integrada<p>La ciberdefensa integrada unifica la nube y la seguridad local para brindar protección contra amenazas, protección de la información y cumplimiento en todos los puntos finales, redes, correo electrónico y aplicaciones en la nube.</p></li>
            <li>Resultados del Reporte Anual a las Amenazas de Seguridad en Internet<p>Visión general del panorama de amenazas, incluyendo información sobre la actividad global de amenazas, tendencias en ciber delitos y motivaciones de ataque.</p></li>
            <li>La Defensa Holística del Endpoint<p>¿Cuál es el significado real de una visión holística del endpoint? Es importante en esta vista incluir Prevención , Hardening, Administración Inteligente, Detección y respuesta a incidencias, Analisis basado en inteligencia artificial, compliance en ambientes on premise, cloud o equipos legacy?</p></li>
            <li>Protección de la Información, Indicadores de Seguridad y Privacidad<p>Mejores prácticas para cumplir y orientar una defensa de protección de datos, no importando su ubicación, uso, movimiento o flujo en una red Zero Trust .</p></li>
            <li>Modelo "Zero Trust" para Protección de Redes<p>La protección y el control son principios de seguridad que requieren un marco de seguridad para datos y amenazas de acceso a la identidad en la red, de manera integrada y coherente.</p></li>
            <li>Democratizando la Protección de Nube<p>Comprenda las implicaciones y los desafíos al migrar hacia la nube y cómo crear un entorno de arquitectura seguro con operaciones de seguridad descentralizadas.</p></li>
        </ul>
    </div>
</section>
<section class="seccion" id="lugar">
    <div class="infomapa">
        <div class="mapa-gris">
            <h3>Espacio Virreyes</h3>
            <p>Pedregal 24, Lomas– Virreyes, Molino del Rey.</p>
            <p>Ciudad de México, CDMX</p>
        </div>
        <div class="mapa-azul">
            <p>Este espacio se destaca por su diseño atractivo y único siendo un lugar ideal para Symantec Cyberdefense Cloud Forum.</p>
            <h4>Estacionamiento:</h4>
            <p>La entrada al estacionamiento es por la calle Teapa a un costado del edificio. El costo del estacionamiento es de $30 pesos por hora. El evento tendrá una duración de 8 horas. Symantec dará las 5 primeras horas en cortesía, las horas restantes correrán por cuenta del invitado.</p>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.706221001212!2d-99.20550544900121!3d19.425095286824224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f721205de1%3A0xce30b4fda6fa7ca3!2sPedregal+24%2C+Lomas+-+Virreyes%2C+Lomas+de+Chapultepec%2C+11040+Ciudad+de+M%C3%A9xico%2C+CDMX%2C+M%C3%A9xico!5e0!3m2!1ses-419!2sus!4v1555485080438!5m2!1ses-419!2sus" width="100%" height="900" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<footer>
    <a href="#">Aviso de privacidad</a>
</footer>
    
<div id="contenedor_general">

</div><!--FIN DE CONTENEDOR GENERAL-->


    
<!--NÚCLEO JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
MODERNIZR
<script type="text/javascript" src="js/modernizr.js"></script>-->
<!--SCRIPTS-->
<script type="text/javascript" src="js/masterScript.js"></script>
</body>
</html>
