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
        $sort = $request->input('sort', 'asc'); // Default to ascending order
    
        // Fetch products without applying sorting or filtering
        $products = Product::query();
    
        // Check if a category filter is specified in the request
        $category = $request->filled('category') ? $request->input('category') : null;
    
        // Add a where clause to filter products by category if not null
        if (!is_null($category)) {
            $products->where('category', $category);
        }
    
        // Fetch products based on the sorting preference
        $products = $products->orderBy('price', $sort);
    
        // Paginate the results
        $products = $products->paginate(6);
    
        return view('front.product-pricing', compact('products'));
    }
    

    public function show($id)
    {
        $product = Product::find($id);

        return view('front.show', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")
                           ->orWhere('description', 'like', "%$query%")
                           ->get();

        return view('front.search', compact('products'));
    }

}