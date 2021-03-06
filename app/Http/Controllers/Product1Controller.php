<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
class Product1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subdomain)
    {
        $indexs=Product::all();
        return view("products.index",compact('indexs','subdomain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($subdomain)
    {
        return view("products.create",compact('subdomain'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index',['subdomain' => 'product1']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($subdomain, $id)
    {
        $editProduct=Product::find($id);
        return view("products.edit",compact('editProduct','subdomain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subdomain, $id)
    {
        Product::where('id',$id)->update(['nama' => $request->nama, 'qty'=>$request->qty,'harga'=>$request->harga]);
        return redirect()->route('products.index',['subdomain' => $subdomain])->with('success', "Products berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($subdomain,$id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('products.index',['subdomain' => $subdomain])->with('success', "Products berhasil dihapus!");
    }
}
