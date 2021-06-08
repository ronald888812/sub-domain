<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\MultiLanguage;

class Product extends Model
{
    use HasFactory;

    use MultiLanguage;
    protected $connection = 'mysql2';
    protected $fillable =['title_id','title_en','desc_en','desc_id'];
    protected $multi_lang = [
        'title','desc'
    ];
  
}
