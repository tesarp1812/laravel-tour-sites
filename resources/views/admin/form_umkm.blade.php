

@extends('admin.layout')

@section('main')
@section('li')
    <li><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
    </li>
    <li class="active"><a href="/admin-umkm"><i class="fa fa-tasks" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">UMKM</span></a>
    </li>
    <li><a href="admin-trips"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Trips</span></a></li>
    <li><a href="admin-customers"><i class="fa fa-user" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Customers</span></a></li>
@endsection
@section('dashboard-menu')
<form action="/admin-umkm/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="mb-3">
            <input type="text" value="{{$product->m_product_id}}" name="id">
            <input type="text" value="{{$product->id}}" name="id">
        </div>
        <div class="mb-3">
            <label class="form-label">Sub Produk</label>
            <input type="text" name="sub_name" class="form-control" value="{{ $product->sub_name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Varians</label>
            <input type="text" name="varians" class="form-control" value="{{ $product->varians }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="image" class="form-control">
            @if ($product->image)
                <img src="{{ asset('/storage/image/' . $product->image) }}" alt="{{ $product->sub_name }}" width="100" class="mt-2">
            @endif
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>
@endsection
