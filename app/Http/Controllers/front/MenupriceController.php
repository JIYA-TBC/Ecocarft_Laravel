<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Cake;

class MenupriceController extends Controller
{
    public function index(){
        $cakes = Product::paginate(8);
        return view('front.menu-pricing',compact('product'));
    }
}
