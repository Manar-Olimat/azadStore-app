<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    //show all product
    public function index(){
        //  dd(Products::latest()->filter
        //  (request(['search','filter_drawer','drop_filter']))->
        //  simplePaginate(10));
        // return view('listings.index',[
        //     'Listings'=> Listings::latest()->filter
        //     (request(['tag','search']))->
        //     simplePaginate(10)// next & previous insted of page numbers
            //paginate(2) with page numbers

        $products = Products::latest()->filter
            (request(['search','filter_drawer','drop_filter']))->
            simplePaginate(10);

        return view('shop.all_products', ["products" => $products]);
    
            }
public function index_landing(){
    // $products=Products::all();
    // get limited product number for landing page
    $products=Products::limit(20)->get();
// get products where there is a discount
        $discountPeoducts = Products::all()->where('discount', !null);
        // dd($discountPeoducts );
        return view('index', ['products' => $products, 'discountProducts' => $discountPeoducts]);
}


            //store new product
    public function store(Request $request){
        // dd(request()->tag);
        $formFields = $request->validate([
            'name'=>['required', 'min:3'],
            'price'=>['required'],
            'color'=>['required', 'min:3'],
            'images'=>['required'],
            'tags'=>['required', 'min:3'],
            'quantity'=>['required'],
            'description'=>['required', 'min:3'],
            'category'=>['required', 'min:3'],
            
        ]);

        $products = Products::create($formFields);

        return redirect()->back();
    

            }


public function show($id){
        $product = Products::find($id);
        return view('shop.product_details', ['product' => $product]);
}

}


