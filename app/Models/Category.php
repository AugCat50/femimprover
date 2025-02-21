<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Явная привязка модели к имени таблицы
    protected $table   = 'categories';
    protected $quarded = false;
}
