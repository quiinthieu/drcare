<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->get('filter');
        if(isset($filter)){
            if($filter = $request->get('filter') =='Select All'){
                $categories = Category::all();
                $products = Product::paginate(8);
                return view('admin.products', ['products' => $products,'categories' => $categories]);
            }
            else{
                $filter = $request->get('filter');
                $products = DB::table('products')->where('category_id', $filter)->paginate(8);    
                $categories = Category::all();
                return view('admin.products', ['products' => $products,'categories' => $categories,'filter'=> $filter]);
            }
        }

        $categories = Category::all();
        $products = Product::paginate(8);
        return view('admin.products', ['products' => $products,'categories' => $categories]);
    }

    
   /*  public function filter(Request $request)
    {
        if($filter = $request->get('filter') =='Select All'){
            $categories = Category::all();
            $products = Product::paginate(8);
            return view('admin.products', ['products' => $products,'categories' => $categories]);
        }
        else{
            $filter = $request->get('filter');
            $products = DB::table('products')->where('category_id', $filter)->paginate(8);    
            $categories = Category::all();
            return view('admin.products', ['products' => $products,'categories' => $categories,'filter'=> $filter]);
        }
    } */

    public function create()
    {
        return view('admin.products-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:50',
            'price'=>'required|numeric',
            'description'=>'required|max:200',
            'photos'=>'required',
            'photos.*'=>'required|image|mimes:jpeg,jpg,png'
        ],[
            'photos.*.image'=>'The photo must be image.',
            'photos.*.mimes'=>'The photo must be a file of type: jpeg, jpg, png.'
           ]); 
        $product = new Product();
        ($request->status)  ?  $product->status = 1 : $product->status = 0 ;
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
        return Redirect::route('admin-products-index')->with('message', 'Create Successfull !');
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
        $request->validate([
            'name'=>'required|max:50',
            'price'=>'required|numeric',
            'description'=>'required|max:200',
            'photos.*'=>'image|mimes:jpeg,jpg,png'
        ],[
            'photos.*.image'=>'The photo must be image.',
            'photos.*.mimes'=>'The photo must be a file of type: jpeg, jpg, png.'
           ]); 

        $product = Product::find($id);
        ($request->status)  ?  $product->status = 1 : $product->status = 0 ;
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
        return Redirect::route('admin-products-index')->with('message', 'Update Successfull !');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return Redirect::route('admin-products-index')->with('message', 'Delete Successfull !');
    }
}
