<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRequest;
class TipesController extends Controller
{
    public function index(Request $request)
    {
        $indexs=ClientRequest::all();
        return view("tipes.index",compact('indexs'));
    }
}
