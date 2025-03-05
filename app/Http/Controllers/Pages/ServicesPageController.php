<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ServicesPageController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $categories = Category::all();
        $pageTitle  = "Услуги";

        return view('pages.services', compact('categories', 'pageTitle'));
    }
}
