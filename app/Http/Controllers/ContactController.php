<?php

namespace App\Http\Controllers;

use App\Mail\REMTECHSERVICE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10|max:700',
            'captcha' => 'required|captcha',
        ]);

        if($request->method() == 'POST') {

            $body = "<p><b>Имя: </b>{$request->input('name')}</p>";
            $body .= "<p><b>E-mail: </b>{$request->input('email')}</p>";
            $body .= "<p><b>Сообщение: </b><br>" . nl2br($request->input('message')) . "</p>";
            Mail::to('empirikk@gmail.com')->send(new REMTECHSERVICE($body));
            return redirect()->route('home')->with('success', 'Письмо отправлено!');
        }
        return redirect('/');
    }
}
