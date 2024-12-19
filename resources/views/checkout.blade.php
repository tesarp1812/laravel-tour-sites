@extends('layout')


@section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li class="active"><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li><a href="login" class="nav-link">Login</a></li>
@endsection
@endsection

@section('main')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('images/wisata-gibran.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5" data-aos="fade-up">
                    <h1 class="mb-3 text-white">UMKM</h1>
                    <p>Kampung KAPER mempunyai produk umkm berupa Sari Toga Komodo</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">UMKM</span>
                    <span class="subtitle-39191">Product UMKM</span>
                    <h3>Sari Toga Komodo</h3>
                </div>
                <p>Sari Toga Komodo Merupakan produk herbal diolah dari tanaman obat keluarga dan rempah-rempah
                    menjadi bubuk siap di minum dengan cara di seduh dengan air panas. Bahan dasarnya Jahe
                    Merah, temulawak, kunyit, daun sereh, daun pandan,kayu manis,gula aren dan gula pasir. Sari
                    Toga Komodo memiliki 2 Varian yaitu Sari Campur dan Sari Jahe Merah.kedua Varian ini
                    mempunyai banyak manfaat bagi kesehatan.</p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/product-komodo.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">UMKM</span>
                    <span class="subtitle-39191">Produk UMKM</span>
                    <h3>{{ $products->name ?? ''}}</h3>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($product_details as $item)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/sari-toga.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a class="px-3 mb-3 category bg-primary" href="#">Rp.{{ $item->price }}</a>
                            <h2 class="mb-1"><a href="trip-single.html">{{ $item->sub_name ?? ''}}</a></h2>
                            <button class="btn btn-primary">detail</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
