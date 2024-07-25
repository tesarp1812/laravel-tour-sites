<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\product;
use App\Models\product_details;
use App\Models\travel_pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function umkm()
    {
        $product = DB::table('m_product_details')
            ->leftJoin('m_products', 'm_product_details.m_product_id', '=', 'm_products.id')
            ->select(
                'm_product_details.id as detail_id',
                'm_product_details.sub_name',
                'm_product_details.varians',
                'm_product_details.price',
                'm_product_details.image',
                'm_products.id',
                'm_products.name',
                'm_products.description',
            )
            ->get();
        // dd($product);
        return view('admin.umkm', compact('product'));
    }

    public function storeUmkm(Request $request)
    {
        // dd($request->all());

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());

        $product = product::create([
            'name' => $request->inputName,
            'description' => $request->inputDesc
        ]);

        product_details::create([
            'sub_name' => $request->inputSubName,
            'm_product_id' => $product->id,
            'varians' => $request->inputVarians,
            'price' => $request->inputPrice,
            'image' => $image->hashName(),
        ]);

        return redirect('/admin-umkm')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function addUmkm()
    {
        return view('admin.form_tambah_umkm');
    }

    public function formEditUmkm($id)
    {
        $product = product_details::findOrFail($id);
        // dd($product);
        return view('admin.form_umkm', compact('product'));
    }

    public function editUmkm(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $productDetail = product_details::find($id);

            // dd($request->all(), $productDetail);

            // Handle the image upload
            if ($request->hasFile('image')) {
                // Delete the old image file if it exists
                if ($productDetail->image) {
                    Storage::disk('public')->delete($productDetail->image);
                }

                // Upload the new image file
                $imagePath = $request->file('image')->store('images', 'public');
                $productDetail->image = $imagePath;
            }

            // Update other fields
            $productDetail->sub_name = $request->input('sub_name');
            $productDetail->varians = $request->input('varians');
            $productDetail->price = $request->input('price');
            $productDetail->description = $request->input('description');  // Added to include description

            $productDetail->save();

            DB::commit();

            DB::commit();
            return redirect('/admin-umkm')->with('success', 'Product detail updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/admin-umkm')->with('error', 'Failed to update product detail');
        }
    }

    public function destroyUmkm($id)
    {
        $product = product_details::find($id);

        Storage::delete('public/image' . $product->image);

        $product->delete();

        return redirect('/admin-umkm')->with('success', 'Product berhasil di hapus');
    }

    public function trips()
    {
        $trips = travel_pack::orderBy('min_pax', 'asc')
            ->orderBy('max_pax', 'asc')
            ->get();
        // dd($trips);
        return view('admin.trips', compact('trips'));
    }

    public function storeTrips(Request $request)
    {

        // dd($request->all());

        $trips = travel_pack::create([
            'min_pax' => $request->inputMinPax,
            'max_pax' => $request->inputMaxPax,
            'price' => $request->inputPrice
        ]);
        return redirect('/admin-trips');
    }

    public function editTrips(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $trips = travel_pack::find($id);

            // dd($request->all(), $trips);

            // Update other fields
            $trips->min_pax = $request->inputMinPax;
            $trips->max_pax = $request->inputMaxPax;
            $trips->price = $request->inputPrice;
            $trips->save();

            DB::commit();
            return redirect('/admin-trips')->with('success', 'Updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/admin-trips')->with('error', 'Failed to update ');
        }
    }

    public function destroyTrips($id)
    {
        $trips = travel_pack::find($id);
        $trips->delete();
        return redirect('admin-trips')->with('delete', 'trips berhasil di hapus');
    }

    public function customer()
    {
        $customer = customers::all();
        return view('admin.customer', compact('customer'));
    }

    public function storeCustomer(Request $request)
    {
        // dd($request->all());

        $customer = customers::create([
            'name' =>$request->inputName,
            'email'=>$request->inputEmail,
            'number'=>$request->inputNumber,
            'message'=>$request->inputMessage
        ]);
        return redirect('/customers')->with('success','data telah dikirim');
    }
}
