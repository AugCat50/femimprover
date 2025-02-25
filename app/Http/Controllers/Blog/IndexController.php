<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        $pageTitle  = "Блог";
        $posts      = Post::paginate(7);
        $categories = Category::all();
        // dd($posts);
        // likedUsers - название метода отношения в модели post
        //Посчитает количество лайков у постов в таблице и добавит модели post новый атрибут "liked_users_count"
        //сортировка происходит на стороне БД, запрашивается в запросе.
        // DESC - в порядке убывания, ASC - в порядке возрастания
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(5);
        
        return view('blog.index', compact('posts', 'likedPosts', 'pageTitle', 'categories'));
    }
}
