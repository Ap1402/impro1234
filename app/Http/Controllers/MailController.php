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
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'subject' => $request->input('subject')
        ];

        Mail::to('contacto@industriasimpro.com')->send(new ContactMail($details));
        return "Email Sent";
    }
}
