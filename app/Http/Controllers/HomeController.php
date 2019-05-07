<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asesores;


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
}
