<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipe;
class TipesController extends Controller
{
    public function index(Request $request)
    {
        $indexs=Tipe::all();
        return view("tipes.index",compact('indexs'));
    }
}
