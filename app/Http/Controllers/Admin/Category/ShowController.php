<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    //Метод по умолчанию
    //Переменная должна называться так же как в роуте, чтобы laravel автоматически загружал модель по id
    public function __invoke(Category $category)
    {      
        return view('admin.category.show', compact('category'));
    }
}
