<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Cake;

class HomeController extends Controller
{
    public function index(){
        $cakes = Product::orderBy('created_at','DESC')->get()->take(8);
        return view('front.home',compact('cakes'));
    }
}
