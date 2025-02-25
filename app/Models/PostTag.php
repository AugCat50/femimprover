<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $table   = 'post_tags';
    
    //Аналог fillable, просто отключает защиту на запись всех полей
    protected $guarded = false; 
}
