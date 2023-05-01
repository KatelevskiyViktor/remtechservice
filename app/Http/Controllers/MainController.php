<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Главная страница';
        $description = 'РЕМТЕХСЕРВИС - производство специального технологического оборудования.';
        return view('index', compact('title', 'description'));
    }

    public function about(){
        $title = 'О нас';
        $description = 'Делаем: транспортеры, ванны, противня, фризеры, головорубы, телеги, производственные(технологические) столы. ';
        return view('about', compact('title', 'description'));
    }

    public function contacts(){
        $title = 'Наши контакты';
        $description = 'Если вы хотите связаться с нами по производству: противней, фризеры, головорубов, производственные(технологические) столы: Тел: ';
        return view('contacts', compact('title', 'description'));
    }

    public function reload(){
        return response()->json(['captcha' => captcha_img()]);
    }
}
