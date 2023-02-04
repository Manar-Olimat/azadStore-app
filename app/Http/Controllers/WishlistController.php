<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
  //show all product 
  public function index(){

    $user_products=Wishlist::all()->where('user_id',Auth::user()->id)->where('isDeleted',0);
    // $user_products=Products::all()->where('user_id',Auth::user()->id);
    $products = [];
        foreach ($user_products as $value) {
            # code...
            array_push($products, Products::find($value->product_id) );
        }
        // dd($products);
        return view('orders.wishlist',['products'=>$products,'count'=>count($products)]);

        }
    
    
    
            //store new product
            public function store(Request $request){
                // dd(request()->product_id);
                $formFields = [
                    'product_id'=>request()->product_id,
                    'user_id'=> Auth::user()->id
                    
                ];
                //   
                $wishlist = Wishlist::create($formFields);
        
                return redirect()->back();
            
        
                    }
    
    //remove product
    public function delete(){
        
        Wishlist::where('product_id',request()->id)->where('user_id',Auth::user()->id)->update(['isDeleted'=>1]);

        return redirect()->back();
    

            }

    }
