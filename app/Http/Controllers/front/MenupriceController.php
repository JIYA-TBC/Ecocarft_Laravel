<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;



class MenupriceController extends Controller
{
    public function index(){
        $product = Product::paginate(8);
        return view('front.menu-pricing',compact('product'));
    }
}
