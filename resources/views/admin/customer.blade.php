@extends('admin.layout')

@section('head')
@endsection

@section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    {{-- <li><a href="sejarah" class="nav-link">Sejarah</a></li> --}}
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li>
        <a href="login" class="btn-login" style="color: #fff !important;">Admin</a>
    </li>
    {{-- <li><a href="login" class="nav-link">Login</a></li>
    <li class="active"><a href="dashboard" class="nav-link">Dashboard</a></li> --}}
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

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat Email</th>
            <th scope="col">No Telp</th>
            <th scope="col">Pesan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customer as $item)
            <tr>
                <th scope="row">{{$item->name}}</th>
                <td>{{$item->email}}</td>
                <td> {{$item->number}} </td>
                <td> {{$item->message}} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
