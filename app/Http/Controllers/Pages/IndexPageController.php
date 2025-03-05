<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexPageController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $categories = Category::all();
        $pageTitle  = "Страницы";

        return view('pages.index', compact('categories', 'pageTitle'));
    }
}
