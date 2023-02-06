<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function index(){
        $user_products=Cart::all()->where('user_id',Auth::user()->id)->where('isDeleted',0);
    // $user_products=Products::all()->where('user_id',Auth::user()->id);
    $products = [];
        foreach ($user_products as $value) {
            # code...
            array_push($products, ['products'=>Products::find($value->product_id),
            'quantity'=>Cart::where('product_id',$value->product_id)->where('isDeleted',0)->get('quantity')] );
        }
        // dd($products[0]['quantity'][0]->quantity);
        return view('orders.cart',['products'=>$products,'count'=>count($products)]);
    }

    public function store(Request $request){
        // dd(request()->product_id);
        $formFields = [
            'product_id'=>request()->product_id,
            'quantity'=>request()->quantity,
            'user_id'=> Auth::user()->id
            
        ];
        //   
        $wishlist = Cart::create($formFields);

        return redirect()->back();

    }
    public function delete(){
        Cart::where('product_id',request()->id)->where('user_id',Auth::user()->id)->update(['isDeleted'=>1]);

        return redirect()->back();
    }

    public function checkout(){
        $user_products=Cart::all()->where('user_id',Auth::user()->id)->where('isDeleted',0);
    // $user_products=Products::all()->where('user_id',Auth::user()->id);
    $products = [];
        $total = 0;
        foreach ($user_products as $value) {
            # code...
            // $total += Products::find($value->product_id)->price *Products::find($value->product_id)->price;
            // dd($user_products);
            array_push($products, ['products'=>Products::find($value->product_id),
            'quantity'=>Cart::where('product_id',$value->product_id)->where('isDeleted',0)->get('quantity')] );
        }
        

        return view('orders.checkout',['products'=>$products,'count'=>count($products),'total'=>$total]);

    }

    function payment(){
        // Cart::latest()->update(['isDeleted'=>1]);

        redirect('/');
    }

}
