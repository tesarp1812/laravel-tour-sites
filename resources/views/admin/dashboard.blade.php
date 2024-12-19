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
    {{-- <li class="active"><a href="dashboard" class="nav-link">Dashboard</a></li> --}}
@endsection
@endsection

@section('li')
<li class="active"><a href="dashboard"><i class="fa fa-home" aria-hidden="true"></i><span
            class="hidden-xs hidden-sm">Home</span></a></li>
<li><a href="admin-umkm"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">UMKM</span></a>
</li>
<li><a href="admin-trips"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
            class="hidden-xs hidden-sm">Trips</span></a></li>
<li><a href="admin-customers"><i class="fa fa-user" aria-hidden="true"></i><span
            class="hidden-xs hidden-sm">Customers</span></a></li>
@endsection

@section('dashboard-menu')
<h1>Hello, {{ auth()->user()->name }}</h1>
<form action="/logout" method="POST">
    @csrf
    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">
            Logout</i></button>
</form>
{{-- <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

        <div class="sales">
            <h2>Your Sale</h2>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Period:</span> Last Year
                </button>
                <div class="dropdown-menu">
                    <a href="#">2012</a>
                    <a href="#">2014</a>
                    <a href="#">2015</a>
                    <a href="#">2016</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

        <div class="sales report">
            <h2>Report</h2>
            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span>Period:</span> Last Year
                </button>
                <div class="dropdown-menu">
                    <a href="#">2012</a>
                    <a href="#">2014</a>
                    <a href="#">2015</a>
                    <a href="#">2016</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
