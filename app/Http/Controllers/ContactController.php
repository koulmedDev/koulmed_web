<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();

        Mail::to('koulmeddevservice@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
