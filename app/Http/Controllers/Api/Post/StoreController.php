<?php

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    //Метод по умолчанию.
    public function __invoke()
    {
        dump (\request()->all());

        return response(['message' => 'ok']);

    }
}
