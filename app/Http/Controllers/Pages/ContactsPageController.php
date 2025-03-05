<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ContactsPageController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $categories = Category::all();
        $pageTitle  = "Контакты";
        
        return view('pages.contacts', compact('categories', 'pageTitle'));
    }
}
