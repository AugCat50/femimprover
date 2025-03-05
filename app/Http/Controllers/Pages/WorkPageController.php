<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;

class WorkPageController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $categories = Category::all();
        $pageTitle  = "Работа у нас";
        
        return view('pages.services', compact('categories', 'pageTitle'));
    }
}
