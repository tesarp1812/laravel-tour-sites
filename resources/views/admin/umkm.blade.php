@extends('admin.layout')

@section('head')
@endsection

@section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li><a href="login" class="nav-link">Login</a></li>
    <li class="active"><a href="dashboard" class="nav-link">Dashboard</a></li>
@endsection
@endsection



@section('main')
@section('li')
    <li><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
    </li>
    <li class="active"><a href="admin-umkm"><i class="fa fa-tasks" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">UMKM</span></a>
    </li>
    <li><a href="admin-trips"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Trips</span></a></li>
    <li><a href="admin-customers"><i class="fa fa-user" aria-hidden="true"></i><span
                class="hidden-xs hidden-sm">Customers</span></a></li>
@endsection
@section('dashboard-menu')
    <div class="text-end mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAdd">
            Tambah Data
        </button>
    </div>

    <!-- Modal tambah data-->
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalAddLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalAddLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Produk</th>
                <th scope="col">Varian</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <th scope="row">{{ $item->name }} - {{ $item->sub_name }}</th>
                    <td>{{ $item->varians }}</td>
                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="/admin-umkm/{{ $item->detail_id }}">edit</a>
    
                        <!-- Button trigger modal Delete-->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->detail_id }}">
                            <i class="bi bi-trash"></i>
                        </button>
    
                        <!-- Modal Delete-->
                        <div class="modal fade" id="deleteModal{{ $item->detail_id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->detail_id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteModalLabel{{ $item->detail_id }}">Hapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/admin-umkm/{{ $item->detail_id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body">
                                            Anda yakin ingin menghapus data "{{ $item->detail_id }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
@endsection
