<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<div style="width: 600px; padding: 0 0 60px 0; border-bottom: 3px solid #F5BA27;">	
	<div style="width: 580px; height: 80px; padding: 20px 0 0 20px; background: #213C60;">
		<img src="http://symantec-cyberdefense-cloud-forum.com/img/symantec-logo.png" width="200">
	</div>
	<h2 style="margin: 20px 0 60px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-size: 20px;">Hola {{ $nombre }}, gracias por registrarte en <strong>Symantec Cyberdefense Cloud Forum</strong></h2>    
    <p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Confirmamos su registro a Symantec Cyberdefense Cloud Forum </p>
</div>
<div style="margin:0 0 0 70px;text-align: center;">
    <img src="http://symantec-cyberdefense-cloud-forum.com/img/qr/{{ $qr }}.png" alt="permite la descarga de imagenes para ver tu codigo QR" width="500">
</div>    
</body>
</html>