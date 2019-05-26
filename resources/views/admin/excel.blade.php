<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>


<title></title>
</head>
<body>

   <table>
    <thead>
        <tr>
          <td>Nombre</td>
          <td>Apellidos</td>
          <td>Cargo</td>
          <td>Compania</td>
          <td>Direccion</td>
          <td>Colonia</td>
          <td>Codigo Postal</td>
          <td>Telefono</td>
          <td>Correo</td>
          <td>Tamano de la empresa</td>
          <td>Encuesta</td>
          <td>Asesor</td>
          <td>Registro</td>
          <td>¿Asistió?</td>
          <td>&nbsp;</td>

        </tr>
    </thead>
    <tbody>

    		@foreach($todos as $uno)
        <tr>
            <td><small>{{$uno->nombre}}</small></td>
            <td><small>{{$uno->apellidos}}</small></td>
            <td><small>{{$uno->cargo}}</small></td>
            <td><small>{{$uno->compania}}</small></td>
            <td><small>{{$uno->dir}}</small></td>
            <td><small>{{$uno->colonia}}</small></td>
            <td><small>{{$uno->cp}}</small></td>
            <td><small>{{$uno->telefono}}</small></td>
            <td><small>{{$uno->correo}}</small></td>
            <td><small>{{$uno->nombreTamanio}}</small></td>
            <td><small>{{$uno->nombreEncuesta}}</small></td>
            <td><small>{{$uno->nombreAsesor}}</small></td>
            <td><small>{{$uno->created_at}}</small></td>
            <td><small>{{$uno->asistencia}}</small></td>

            @if($uno->asistencia == 'yes')

                  <td><small>{{$uno->updated_at}}</small></td>
            @endif
        </tr>
        @endforeach

    </tbody>
  </table>

</body>
</html>