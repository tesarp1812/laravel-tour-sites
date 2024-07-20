@extends('layout')

@section('header')
    @section('ul')
    <li class="active"><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    @endsection
@endsection

@section('main')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('images/beranda.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5" data-aos="fade-right">
                    <h1 class="mb-3 text-white">BEO KAPER</h1>
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
                    <span class="backdrop">Sejarah</span>
                    <span class="subtitle-39191">Tentang Sejarah</span>
                    <h3>Sejarah Kampung Kaper</h3>
                </div>
                <p>Kami Datang Ke Kaper Tahun 1989 Yang Memberi Nama Dari Kaper Adalah Salah Satu Tokoh Adat Bpk
                    Alm.Stefanus Jurung Dari Thn 1989 Yang Menghuni Kampung Kaper tujuh Kepala keluarga</p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/nari.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">KAPER</span>
                    <span class="subtitle-39191">KAPER</span>
                    <h3>Layanan Kami di Kaper</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                    <div class="listing-image">
                        <img src="images/pentas.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-item-content">
                        <a class="px-3 mb-3 category bg-primary" href="trips">Pementasan Seni Budaya</a>
                        <h2 class="mb-1"><a href="trip-single.html">Detail tentang pementasan dan
                                biayanya</a>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                    <div class="listing-image">
                        <img src="images/umkm.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-item-content">
                        <a class="px-3 mb-3 category bg-primary" href="umkm">UMKM</a>
                        <h2 class="mb-1"><a href="trip-single.html">Produk lokal yang mempunyai banyak
                                manfaat bagi kesehatan</a></h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                    <div class="listing-image">
                        <img src="images/sejarah.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-item-content">
                        <a class="px-3 mb-3 category bg-primary" href="sejarah">Sejarah Kampung Kaper</a>
                        <h2 class="mb-1"><a href="trip-single.html">Awal mula sejarah kampung kaper</a></h2>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<div class="site-section bg-image overlay" style="background-image: url('images/kamper.jpg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
                <p class="text-white">Kami adalah Beo Kaper, sebuah kampung dengan sejarah yang kaya sejak
                    tahun 1989. Silakan hubungi kami untuk informasi lebih lanjut.</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Hubungi Kami
                </button>


            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak Kami</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Alexander">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan & Pertanyaan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection