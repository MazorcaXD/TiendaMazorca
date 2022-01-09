<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        return view('contactos.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $correo = new EmailContact($request->all());     
        Mail::to('sergioinfo2018@gmail.com')->send($correo);
        return redirect()->route('contacto.index')->with('info','Correo enviado');
    }
}
