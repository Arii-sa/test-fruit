<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Models\Product_season;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('move'))
        {
            return redirect('/products/register')->withInput();
        }
        $products = Product::all();
        return view('index',['products'=> $products]);
    }

    public function add()
    {
        $products = Product::all();
        return view('register',['products'=> $products]);
    }
    
    
    public function create(ProductRequest $request)
    {
        if ($request->has('back'))
        {
            return redirect('/products')->withInput();
        }
        $product=$request->only(['name', 'price', 'image','season', 'description']);
        Product::create($product);
        return redirect('/products');
    }

    
}
