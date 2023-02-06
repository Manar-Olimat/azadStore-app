<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    //
    public function store(Request $request){
        // dd(request()->tag);
        $formFields = [$request->validate([
            'rate'=>['required'], ]),
            'rate'=> $request->rate,
            'review'=>$request->review,
            'product_id'=> $request->product_id,
            'user_id'=>Auth::user()->id

        ];

        $reviews = Reviews::create($formFields);

        return redirect()->back();
    

            }

}
