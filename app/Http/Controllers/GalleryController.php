<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $title = 'Галерея';
        $just_cat = Gallery::select('category', 'ru_name_cat', 'subcategories')->get();
        $description = 'Мы производим специального технологического оборудования производимого. Наши работы можно посмотреть здесь';
        return view('gallery', compact('just_cat','title', 'description'));
    }
    public function gallery_category($category){
        $description = 'Мы производим специального технологического оборудования производимого. Наши работы можно посмотреть здесь';
        $subcat = Gallery::select('category', 'ru_name_cat', 'ru_subcategories', 'subcategories', 'photo_count')
            ->where('category', '=', $category)->get();
        $subcategories = explode(':', $subcat[0]->subcategories);
        $ru_subcategories = explode(':', $subcat[0]->ru_subcategories);
        $title = 'Галерея :: '. $subcat[0]->ru_name_cat;
        if($subcat[0]->subcategories != '0'){
            return view('gallery', compact('subcategories', 'ru_subcategories','title', 'description', 'category'));
        }else{
            $photoss = $subcat[0]->photo_count;
            $ru_name_cat = $subcat[0]->ru_name_cat;
            return view('gallery', compact('photoss','title', 'description', 'category', 'ru_name_cat'));
        }

    }

    public function gallery_subcat_photos($category, $subcat){
        $description = 'Мы производим специального технологического оборудования производимого. Наши работы можно посмотреть здесь';
        $db = Gallery::select('photo_count', 'ru_name_cat', 'ru_subcategories', 'subcategories')
            ->where('category', '=', $category)->get();
        $subcategories = explode(':', $db[0]->subcategories);
        $ru_subcategories = explode(':', $db[0]->ru_subcategories);
        $photo_count = explode(':', $db[0]->photo_count);
        $photos = 0;
        $ru_subcat = '';
        for ($i = 0; $i < count($subcategories); $i++){
            if($subcategories[$i] == $subcat){
                $photos = $photo_count[$i];
                $ru_subcat = $ru_subcategories[$i];
            }
        }
        $title = 'Галерея :: '. $db[0]->ru_name_cat . ' :: ' . $ru_subcat;
        return view('gallery', compact('photos','title', 'description', 'category', 'subcat', 'ru_subcat'));
    }
}
