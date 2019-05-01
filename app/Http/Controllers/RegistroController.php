<?php

namespace App\Http\Controllers;

use App\Registro;
use App\Checkin;
use App\Mail\Invitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros = Registro::latest()->paginate(5);

        return view('registro.index',compact('registros'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
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
            $request->validate([

            'nombre','apellidos','compania','dir','colonia','cp','telefono','correo','tamanio','encuesta','asesor','cargo'

        ]);

  
            $registro = Registro::create($request->all());

        if ($registro){
            $salida = 'Éxito al guardar';
        }else{
            $salida = 'Error al guardar';
        }

        
        //encripto su id de usuario 

        //$user = Hash::make('$registro->id');

        $user = md5($registro->id);

        $check = Checkin::create([
            'idRegistrado' => $registro->id,
            'hash' => $user,

        ]);



        

        //le genero su qr
          \QrCode::format('png')

          ->size(500)
          ->errorCorrection('H')
          ->color(33,60,96)
          ->generate('http://symantec-cyberdefense-cloud-forum.com/checkin/'.$user, public_path().'/../public_html/img/qr/'.$user.'.png');

        //return $salida;

        $datos = array(
            'sucess' => 'true',
            'guardado' => $salida,
        );

        $receptor = array(
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'qr'    => $user,
        );

        

        \Mail::send('mail.registro', $receptor , function($message) use ($receptor) {
        $message->to($receptor['correo'], $receptor['nombre'] )->subject('Gracias por Registrarte');

         });    


        echo json_encode($datos, JSON_FORCE_OBJECT);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
