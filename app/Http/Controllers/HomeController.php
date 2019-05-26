<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asesores;
use App\Checkin;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $asesores = Asesores::orderBy('valorAsesor','asc')
            ->get();


        return view('home',compact('asesores'));
    }


    public function checkin($id)
    {




        $user = Checkin::where(array('hash' => $id))
            ->get();


        if (isset($user[0]) ){

            //si lo encontró

            //reviso que no haya hecho checkin antes
            $ya = Checkin::where(array('hash' => $id))
            ->whereNotNull('asistencia')
            ->get();


            if (isset($ya[0]) ){

                $datos = array(
                        'resp' => "No puedes hacer checkin mas de una vez",
                        'icon' => "no",
                    );

            }else{


                  Checkin::where(array('hash' => $id))
                        ->update(['asistencia' => 'yes']);

                    $datos = array(
                        'resp' => "Gracias por su asistencia Bienvenid@",
                        'icon' => "yes",
                    );


            }


          

                //dd($user);

            //echo $user[0]->idRegistrado;

        }else {
            //no lo encontró

            $datos = array(
                        'resp' => "Usuario no encontrado",
                        'icon' => "no",
                    );
        }


                return view('checkin',compact('datos'));



    
    }

}
