@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <h4>¡Hola {{ auth()->user()->name }}!</h4> </div>
                <div class="card-header"> Estos son los usuarios registrados para el Cloud Forum </div>

                <div class="card-body">


   <table class="table table-striped">
    <thead>
        <tr>
          <td>Nombre</td>
          <td>Apellidos</td>
          <td>Cargo</td>
          <td>Compañia</td>
          <td>Direccion</td>
          <td>Colonia</td>
          <td>Código Postal</td>
          <td>Teléfono</td>
          <td>Correo</td>
          <td>Tamaño de la empresa</td>
          <td>Como se enteró</td>
          <td>Nombre Asesor</td>
          <td>Fecha de registro</td>
        </tr>
    </thead>
    <tbody>
        @foreach($registrados as $ase)
        <tr>
            <td>{{$ase->nombre}}</td>
            <td>{{$ase->apellidos}}</td>
            <td>{{$ase->cargo}}</td>
            <td>{{$ase->comania}}</td>
            <td>{{$ase->dir}}</td>
            <td>{{$ase->colonia}}</td>
            <td>{{$ase->cp}}</td>
            <td>{{$ase->telefono}}</td>
            <td>{{$ase->correo}}</td>
            <td>{{$ase->tamanio}}</td>
            <td>{{$ase->encuesta}}</td>
            <td>{{$ase->asesor}}</td>
            <td>{{$ase->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

                </div>
                
            </div>
        </div>
    </div>            	
</div> 


@endsection
