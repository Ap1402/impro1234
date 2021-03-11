<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'from' => 'Email enviado desde formulario de contacto',
            'email' => $request['email'],
            'name' => $request['name'],
            'message' => $request['message'],
            'subject' => $request['subject']
        ];
        Mail::to(env('MAIL_TO', 'contacto@industriasimpro.com'),)->send(new ContactMail($details));
        return "Correo enviado";
    }
}
