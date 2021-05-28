<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientRequest;
class Product2Controller extends Controller
{
    public function index(Request $request)
    {
        $indexs=ClientRequest::all();
        return view("products.index",compact('indexs'));
    }
}
