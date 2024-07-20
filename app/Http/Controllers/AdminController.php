<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\travel_pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function umkm()
    {
        $product = DB::table('m_products')
        ->join('m_product_details', 'm_products.id', '=', 'm_product_details.m_product_id')
        ->select(
            'm_products.name',
            'm_product_details.sub_name',
            'm_product_details.varians',
            'm_product_details.price',
            'm_product_details.path'
        )
        ->get();
        // dd($product);
        return view('admin.umkm', compact('product'));
    }

    public function trips()
    {
        $trips = travel_pack::orderBy('min_pax', 'asc')
        ->orderBy('max_pax', 'asc')
        ->get();
        // dd($trips);
        return view('admin.trips', compact('trips'));
    }
}
