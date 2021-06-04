<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function switch($language = '')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }
}
