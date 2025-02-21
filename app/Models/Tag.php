<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Явная привязка модели к имени таблицы
    protected $table   = 'tags';
    protected $quarded = false;
}
