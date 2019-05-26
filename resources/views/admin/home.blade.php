@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <h4>¡Hola {{ auth()->user()->name }}!</h4> 
                	<a href="{{ route('reporte') }}">
                	<div class="float-right"><img src="{{ asset('img/excel.png') }}" width="32">
                	</a>
                </div>
            </div>

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
    <tbody class="table-hover">

    		        @foreach($registrados as $ase)
        <tr>
            <td><small>{{$ase->nombre}}</small></td>
            <td><small>{{$ase->apellidos}}</small></td>
            <td><small>{{$ase->cargo}}</small></td>
            <td><small>{{$ase->compania}}</small></td>
            <td><small>{{$ase->dir}}</small></td>
            <td><small>{{$ase->colonia}}</small></td>
            <td><small>{{$ase->cp}}</small></td>
            <td><small>{{$ase->telefono}}</small></td>
            <td><small>{{$ase->correo}}</small></td>
            <td><small>{{$ase->nombreTamanio}}</small></td>
            <td><small>{{$ase->nombreEncuesta}}</small></td>
            <td><small>{{$ase->nombreAsesor}}</small></td>
            <td><small>{{$ase->created_at}}</small></td>
        </tr>
        @endforeach

    </tbody>
  </table>

                </div>
                
            </div>
        </div>

        {{ $registrados->links() }}

        </div>
            </div>


@endsection
