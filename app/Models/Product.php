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
    protected $fillable =['nama','harga','qty'];
    protected $multi_lang = ['key'];
    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\Models\Category');
    }
}
