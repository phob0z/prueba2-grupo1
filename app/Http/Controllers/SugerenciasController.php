<?php

namespace App\Http\Controllers;

use App\Mail\Sugerencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SugerenciasController extends Controller
{
    public function sendMails()
    {
        return view('sugerencias.sugerencias');
    }

    public function sendMailsProcessing ()
    {

        $mensaje = request()->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required | email',
            'asunto'=>'required',
            'mensaje'=>'required | min:5',
        ],[
            'required'=>'El campo :attribute es obligatorio',
            'mensaje.min' =>'El :attribute debe tener mas de 5 caracteres'
        ]);
        Mail::to('leonel.molina@epn.edu.ec')->queue(new Sugerencias($mensaje));
        Mail::to('byron.loarteb@epn.edu.ec')->queue(new Sugerencias($mensaje));
        Mail::to('by_tosh20@hotmail.com')->queue(new Sugerencias($mensaje));
        Mail::to('bloarte@entodositio.com')->queue(new Sugerencias($mensaje));
        return view('sugerencias.mensajeEnviado');
    }
}
