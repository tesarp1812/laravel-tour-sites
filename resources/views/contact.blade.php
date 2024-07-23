@extends('layout')

@section('header')
    @section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li class="active"><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li><a href="login" class="nav-link">Login</a></li>
    @endsection
@endsection

@section('main')
<div class="ftco-blocks-cover-1">
  <div class="site-section-cover overlay" style="background-image: url('images/wisata-gibran.jpg')">
      <div class="container">
          <div class="row align-items-center justify-content-center text-center">
              <div class="col-md-5" data-aos="fade-up">
                  <h1 class="mb-3 text-white">Hubungi Kami</h1>
                  <p>Hubungi kami jika anda tertarik untuk mengikuti trips maupun untuk membeli produk yang ada berasal dari kampung KAPER</p>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="site-section">
  <div class="container">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-10">
        <div class="heading-39101 mb-5">
          <span class="backdrop text-center">Contact</span>
          <span class="subtitle-39191">Info Kontak </span>
          <h3>Info Kontak </h3>
        </div>
      </div>
    </div>
   
    <div class="row">
      <div class="col-lg-8 mb-5" >
        <form action="/customers" method="post">
          @csrf
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="inputName" placeholder="Nama">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="inputEmail" placeholder="Alamat Email">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="number" class="form-control" name="inputNumber" placeholder="Nomer Telpon">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <textarea id="" class="form-control" name="inputMessage" placeholder="Tulis Pesan Anda." cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Kirim Pesan">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 ml-auto">
        <div class="bg-white p-3 p-md-5">
          <h3 class="text-black mb-4">Info Kontak</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block mb-3">
              <span class="d-block text-black">Alamat:</span>
              <span>Kaper, Jl Trans Flores, Desa Golo Bilas, Kec. Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim., Indonesia</span></li>
            <li class="d-block mb-3"><span class="d-block text-black">Telepon:</span><span>+6285253922070 / 6285239987278</span></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection