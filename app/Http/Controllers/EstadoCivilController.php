<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoCivil;

class EstadoCivilController extends Controller
{

    public function index()
    {
       $estadoCivil = EstadoCivil::all();
       return $estadoCivil;
    }




    public function store(Request $request)
    {
        $estadoCivil = new EstadoCivil();
        $estadoCivil -> estado = $request -> estado;
        $estadoCivil -> save();
    }


    public function update(Request $request)
    {
        //
    }


    public function desactivate(Request $request)
    {
        //
    }



    public function activate(Request $request)
    {
        //
    }



}
