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

@section('li')
<li><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
</li>
<li><a href="admin-umkm"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">UMKM</span></a>
</li>
<li class="active"><a href="admin-trips"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
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
            <form action="admin-trips" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Min Pax</label>
                        <input type="number" name="inputMinPax" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Max Pax</label>
                        <input type="number" name="inputMaxPax" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="inputPrice" class="form-control" value="">
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
            <th scope="col">Paket Pax</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trips as $item)
            <tr>
                <th scope="row">{{ $item->min_pax }} - {{ $item->max_pax }} Pax</th>
                <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                <td>
                    <!-- Button trigger modal edit -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#editModal-{{ $item->id }}">
                        <i class="bi bi-pencil-fill"></i>
                    </button>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1"
                        aria-labelledby="editModalLabel-{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editModalLabel-{{ $item->id }}">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/admin-trips/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="min_pax" class="form-label">Min Pax</label>
                                            <input type="number" class="form-control" name="inputMinPax"
                                                value="{{ old('min_pax', $item->min_pax) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="max_pax" class="form-label">Max Pax</label>
                                            <input type="number" class="form-control"  name="inputMaxPax"
                                                value="{{ old('max_pax', $item->max_pax) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Harga</label>
                                            <input type="number" class="form-control"  name="inputPrice"
                                                value="{{ old('price', $item->price) }}" required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"
                                        data-bs-dismiss="modal">Simpan</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal Delete -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal-{{ $item->id }}">
                        <i class="bi bi-trash"></i>
                    </button>

                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel-{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $item->id }}">Hapus Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Anda yakin ingin menghapus data ini?
                                </div>
                                <div class="modal-footer">
                                    <form action="/admin-trips/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
