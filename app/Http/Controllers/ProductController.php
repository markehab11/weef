<?php

namespace App\Http\Controllers;
use App\Traits\ImageTrait;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('products.create_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_name = $this->saveImage($request->image, 'images/products');
        Product::create([
            'name' => $request->name,
            'image' => $file_name,
            'pro_code' => $request->pro_code,
            'categorie_id' => $request->categorie_id,
        ]);
        return redirect()->route('Products.index');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $products = Product::findOrFail($id);
        return view('products.edit_product', compact('products', 'categories')) ;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'pro_code' => $request->pro_code,
            'categorie_id' => $request->categorie_id,
        ]);
            if (!isset($request->image)) {
                $product->update([
                    'image' => $request->old_image
                ]);
            }else{
                $file_name = $this->saveImage($request->image, 'images/products');
                $product->update([
                    'image' =>$file_name,
                ]);
            }
        return redirect()->route('Products.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('Products.index');
    }
}
