<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        return view('admin.products', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.products-create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $photos = array();
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $fileName = $photo->getClientOriginalName();
                $path = $photo->storeAs('drcare/products', $fileName, 'public');
                $photos[] = 'storage/' . $path;
            }
            $product->photos = json_encode($photos, JSON_THROW_ON_ERROR);
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->save();
        return Redirect::route('admin-products-index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products-edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $photos = array();
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $fileName = $photo->getClientOriginalName();
                $path = $photo->storeAs('drcare/products', $fileName, 'public');
                $photos[] = 'storage/' . $path;
            }
            $product->update(['photos' => json_encode($photos, JSON_THROW_ON_ERROR)]);
        }
        $product->update($request->except('_token', 'photos'));
        return Redirect::route('admin-products-index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return Redirect::route('admin-products-index');
    }
}
