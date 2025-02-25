<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    //Метод по умолчанию
    public function __invoke()
    {
        //array
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }
}
