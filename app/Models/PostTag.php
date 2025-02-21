<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    //Явная привязка модели к имени таблицы
    protected $table   = 'post_tags';
    protected $quarded = false;
}
