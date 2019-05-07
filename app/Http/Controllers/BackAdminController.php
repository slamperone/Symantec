<?php

namespace App\Http\Controllers;


use App\Asesores;
use App\Checkin;
use App\Registros;


use Illuminate\Http\Request;

class BackAdminController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Dash board  data

        #$registrados = Registros::all();

        $registrados = Registros::join('Asesores', 'Registros.asesor', '=', 'Asesores.valorAsesor')
                        ->join('Encuesta', 'Registros.encuesta', '=', 'Encuesta.valorEncuesta')
                        ->join('Tamanio', 'Registros.tamanio', '=', 'Tamanio.valorTamanio')
                        #->join('Asesores', 'Registros.asesor', '=', 'Asesores.valor');
                        
                        #->select('Asesores.nombre AS nombreAsesor')
                        #->select('Registros.nombre')
                        ->paginate(15);
                        
                        

     return view('admin.home', compact('registrados'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        $todos = Registros::join('Asesores', 'Registros.asesor', '=', 'Asesores.valorAsesor')
                        ->join('Encuesta', 'Registros.encuesta', '=', 'Encuesta.valorEncuesta')
                        ->join('Tamanio', 'Registros.tamanio', '=', 'Tamanio.valorTamanio')
                        #->join('Asesores', 'Registros.asesor', '=', 'Asesores.valor');
                        
                        #->select('Asesores.nombre AS nombreAsesor')
                        #->select('Registros.nombre')
                        ->get();
                        
                        

     return view('admin.excel', compact('todos'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
