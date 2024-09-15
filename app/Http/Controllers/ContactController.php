<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        Mail::to('vc.gerencia@sodesalogistic.com')
            ->send(new \App\Mail\ContactMail($request->all()));

        Mail::to('admin@sodesalogistic.com')
            ->send(new \App\Mail\ContactMail($request->all()));


        return redirect()->route('home')->with('info', 'Mensaje enviado correctamente');
    }
}
