<?php

namespace App\Http\Controllers;

use App\Models\product;
// use App\Models\product_details;
use App\Models\product_details;
use App\Models\travel_pack;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showProduct()
    {
        $products = product::all();
        $product_details = product_details::all();
        // dd($products, $product_details);
        return view('umkm', compact('products', 'product_details'));
    }

    public function showProductById($id)
    {
        // dd($id);
        $product = product::find($id);
        $product_details = product_details::where('m_product_id', $id)->get(); 
        // dd($product_details, $product);
        return view('detailproduk', compact('product', 'product_details'));
    }

    public function showTrips()
    {
        $travel_pack = travel_pack::all();
        // dd($travel_pack);
        return view('trips', compact('travel_pack'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Product::create($request->all());

        return redirect()->route('index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $product->update($request->all());

        return redirect()->route('index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('index')->with('success', 'Product deleted successfully.');
    }

    public function index()
    {
        // Ambil data dari database
        $products = Product::all();
        $product_details = Product_Details::all();

        // Kirim data ke view
        return view('index', compact('products', 'product_details'));
    }
}
