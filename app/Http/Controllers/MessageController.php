<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function store()
    {
       $message = request()->validate([
           'name'   =>  'required',
           'email'  =>  'required|email',
           'subject'=>  'required',
           'content'=>  'required|min:3'
       ], [
           'name.required'  =>  'Necesito tu nombre'
       ]
    );

        Mail::to('ivolado@gmail.com')->send(new MessageRecived($message));

       return view('MensajeEnviado');
    }
}
