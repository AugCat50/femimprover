<?php

namespace App\Http\Controllers\BlogCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        return redirect()->route('blog.post.index');
    }
}
