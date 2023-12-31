<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductpriceController extends Controller
{
    public function index(Request $request)
    {
        // Check if a sorting preference is specified in the request
        if ($request->has('sort')) {
            // Get the sorting preference from the request
            $sort = $request->input('sort');
            // Validate the sorting preference (optional)
            $validSorts = ['asc', 'desc'];
            $sort = in_array($sort, $validSorts) ? $sort : 'asc';
        } else {
            // Default to ascending order if no sorting preference is specified
            $sort = 'asc';
        }

        // Fetch products based on the sorting preference
        $products = Product::orderBy('price', $sort)->paginate(6);

        return view('front.product-pricing', compact('products'));
    }
}