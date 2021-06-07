<?php
/**
 * Created by PhpStorm.
 * User: abed
 * Date: 2/11/19
 * Time: 4:04 PM
 */
namespace App\Traits;
use Illuminate\Support\Facades\App;
trait MultiLanguage
{
    /**
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->multi_lang) && in_array($key, $this->multi_lang)) {
            $key = $key . '_' . App::getLocale();
        }
        return parent::__get($key);     
    }
}