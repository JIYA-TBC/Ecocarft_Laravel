<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(9);
        return response()->view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return response()->view('admin.products.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $products = new Product;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->category = $request->category;
        $imageName = Carbon::now()->timestamp . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $products->image = $imageName;
        $products->save();
        return redirect()->route('products.index')
            ->with('success products created successfully.');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $products = Product::where('name', 'LIKE', '%' . $search_text . '%')
            ->orWhere('description', 'LIKE', '%' . $search_text . '%')
            ->orWhere('category', 'LIKE', '%' . $search_text . '%')
            ->get();

        return view('admin.products.search', compact('products'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);

        $products = Product::find($id);
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->category = $request->category;
        $imageName = Carbon::now()->timestamp . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $products->image = $imageName;
        $products->save();
        return redirect()->route('products.index')
            ->with('success', 'product Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->route('products.index')
            ->with('success', 'Products Deleted successfully.');
    }
}
