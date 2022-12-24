<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //show all product
    public function index(){
        // dd(request()->tag);
        
        $products = Products::all();

        return view('shop.all_products', ["products" => $products]);
    
            }
}
