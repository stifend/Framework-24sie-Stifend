<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataProduct'] = Product::all();
        return view('admin.Product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.Product.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['price']  = $request->price;
        $data['description']  = $request->description;
       

        Product::create($data);

        return redirect()->route('Product.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataProduct'] = Product::findOrFail($id);
        return view('admin.Product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product    = Product::findOrFail($id);

        $product ->name = $request->name;
        $product ->price  = $request->price;
        $product ->description   = $request->description;

        $product ->save();
        return redirect()->route('Product.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $product = Product::findOrFail($id);

    $product->delete();
    return redirect()->route('Product.index')->with('success', 'Data berhasil dihapus');
    }
}
