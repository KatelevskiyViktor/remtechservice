<?php

namespace App\Http\Controllers;

use App\Mail\REMTECHSERVICE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class ContactController extends Controller
{
    public function send(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'message' => 'required|min:10|max:700',
            'captcha' => 'required|captcha',
        ]);

        if($request->method() == 'POST') {
            $body = "<p><b>НОВЫЙ КЛИЕНТ! Его данные:</b></p>";
            $body .= "<p><b>Имя: </b>{$request->input('name')}</p>";
            $body .= "<p><b>E-mail: </b>{$request->input('email')}</p>";
            $body .= "<p><b>Сообщение: </b><br>" . nl2br($request->input('message')) . "</p>";
            Mail::to('remt3chservis@yandex.ru')->send(new REMTECHSERVICE($body));

            if($request->input('contacts') == 1)return redirect()->route('contacts')->with('success', 'Письмо отправлено!');

            return redirect()->route('home')->with('success', 'Письмо отправлено!');
        }
        return redirect('/');
    }

    public function SendFromFooter(Request $request){

        $request->validate([
            'phone' => 'required|numeric|digits:11',
        ]);

        if($request->method() == 'POST') {

            $body = "<p><b>НОВЫЙ КЛИЕНТ! Просит перезвонить по этому номеру:</b></p>";
            $body .= "<p><b>{$request->input('phone')}</b></p>";
            Mail::to('remt3chservis@yandex.ru')->send(new REMTECHSERVICE($body));

            return redirect()->route(str_replace((!empty($_SERVER['HTTPS']) ? 'https' : 'http')
                .'://'.$_SERVER['HTTP_HOST'].'/', '', url()->previous()) ?: "home")->with('success_footer', 'Письмо отправлено!');

        }
        return redirect('/');
    }
}
