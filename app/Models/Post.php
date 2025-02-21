<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Явная привязка модели к имени таблицы
    protected $table   = 'posts';
    protected $quarded = false;
}
