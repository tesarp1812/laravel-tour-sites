@extends('admin.layout')


@section('head')
@endsection

{{-- @section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li><a href="login" class="nav-link">Login</a></li>
    <li class="active"><a href="dashboard" class="nav-link">Dashboard</a></li>
@endsection
@endsection --}}



@section('main')
@section('li')
    <li><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
    </li>
    <li class="active"><a href="/admin-umkm"><i class="fa fa-tasks" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">UMKM</span></a>
    </li>
    <li><a href="/admin-trips"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Trips</span></a></li>
    <li><a href="/admin-customers"><i class="fa fa-user" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Customers</span></a></li>
@endsection
@section('dashboard-menu')
    
                <form action="/admin-umkm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="inputName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Sub Produk</label>
                            <input type="text" name="inputSubName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Varian</label>
                            <input type="number" name="inputVarians" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="inputPrice" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripsi</label>
                            <input type="text" name="inputDesc" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/admin-umkm" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
    
@endsection
@endsection
