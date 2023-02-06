<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    //    
    function productList(){
        $products = Products::latest()->where('isDeleted',0)->
        simplePaginate(10);
    
        return view('dashboard.products', ["products" => $products]);
    }

    function addProduct(){
       
    
        return view('dashboard.forms.newProduct');
    }

    function removeProdeuct(){
        Products::where('id',request()->id)->update(['isDeleted'=>1]);

        return redirect()->back();
    }

    function storeNewProduct(Request $request){
        $formFields = ['name'=> $request->name,
        'price'=>$request->price ,
        'images'=>$request-> images,
        'discount'=> $request->discount,
        'description'=>$request->description,
        'category'=>$request->category,
        'quantity'=>$request->quantity
    ];

        $reviews = Products::create($formFields);

        return redirect('/dashboard_products');
    }

    function editProduct($id){
        $products = Products::find($id);
    
        return view('dashboard.forms.editProduct', ["products" => $products]);
    }

   

    function storeEditedProduct(Request $request){
        $formFields = ['name'=> $request->name,
        'price'=>$request->price ,
        'images'=>$request-> images,
        'discount'=> $request->discount,
        'description'=>$request->description,
        'category'=>$request->category,
        'quantity'=>$request->quantity
    ];

        // $reviews = Products::update($formFields);

        return redirect('/dashboard_products');
    }
}
