<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\MultiLanguage;

class Category extends Model
{
    use HasFactory;
    use MultiLanguage;
    protected $fillable = [
            'title_en', 'title_id',
    ];
    /**
     * This array will have the attributes which you want it to support multi languages
     */
    protected $multi_lang = [
        'title',
    ];
}
