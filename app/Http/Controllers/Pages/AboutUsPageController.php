<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;

class AboutUsPageController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $categories = Category::all();
        $pageTitle  = "О нас";
        
        return view('pages.aboutus', compact('categories', 'pageTitle'));
    }
}
