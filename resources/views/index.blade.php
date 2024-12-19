@extends('layout')

@section('header')
    @section('ul')
    <li class="active"><a href="/" class="nav-link">Home</a></li>
    {{-- <li><a href="sejarah" class="nav-link">Sejarah</a></li> --}}
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li>
        <a href="login" class="btn-login" style="color: #fff !important;">Login</a>
    </li>
    @endsection
@endsection

@section('main')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('images/polsek-malinau-kota-.jpg'); ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7" data-aos="fade-right">
                    <h1 class="mb-3 text-white lobster-regular" style="max-width: 100%; overflow-wrap: break-word;">
                        Portal Utama <br> Umkm Kerajinan Tangan <br> Kabupaten Malinau
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-image overlay" style="background-image: url('images/kamper.jpg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center" style="color: #4CAF50;">MALINAU</span>
                    <span class="subtitle-39191" >MALINAU</span>
                    <h3 style="color: white;">Layanan Kami di MALINAU</h3>
                </div>
                <h4 class="font-weight-bold text-white mb-3">
                    Dinas Perdagangan Kota Samarinda senantiasa mendukung perkembangan UMKM sebagai<br> 
                    tulang punggung ekonomi lokal. Dengan berbagai program dan inisiatif, kami <br>
                    bertujuan memberikan peluang dan dukungan yang dibutuhkan untuk memajukan <br>
                    UMKM di Kabupaten Malinau.
                </h4>
                <h4 class="font-weight-bold text-white">
                    Kami berkomitmen untuk mendukung dan memajukan Usaha Mikro, Kecil, dan Menengah <br>
                    (UMKM) di wilayah ini. Bersama-sama, mari kita bangun bisnis lokal yang <br>
                    tangguh dan berdaya saing!
                </h4>
                

                {{-- <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Hubungi Kami
                </button> --}}


            </div>
        </div>
    </div>
</div>

{{-- <div class="site-section py-5">
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
</div> --}}

<div class="mt-5">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-9 mb-4 text-center">
                <h1 class="mb-3 lobster-regular1">
                    Galery Produk
                </h1>
                <p >
                    Jelajahi keberagaman Produk UMKM di Kabupaten Malinau melalui galeri kami. Temukan produk <br>
                    unik dan berkualitas tinggi dengan dedikasi dan kreativitas tinggi oleh pengusaha lokal.
                </p>
            </div>
        </div>
        
        <div class="row">
            @foreach ($product_details as $item)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-img-top position-relative">
                            <img src="{{ asset('/storage/image/' . $item->image) }}" alt="{{ $item->sub_name }}" class="img-fluid rounded-top">
                            <span class="badge bg-primary position-absolute top-0 start-0 m-2">Rp.{{ number_format($item->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-dark fw-bold">{{ $item->sub_name ?? 'Produk Tanpa Nama' }}</h5>
                            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($item->description, 100, '...') }}</p>
                            <a href="{{ route('products.show', ['id' => $item->m_product_id]) }}" class="btn btn-primary btn-block w-100">
                                Lihat Detail
                            </a>
                            <!-- modal trigger -->
                            {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#itemDetailModal">Detail</button> --}}
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        {{-- <div class="row justify-content-center text-center">
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

        </div> --}}

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

<style>
    .lobster-regular {
        font-family: "Lobster", serif !important;
        font-size: 6vw;
        font-weight: 400;
        font-style: normal;
        word-wrap: normal !important;
        word-break: keep-all !important;
        white-space: normal !important;
    }
    .lobster-regular1 {
        color: black !important; /* Pastikan font berwarna hitam */
        font-family: "Lobster", serif !important;
        font-size: 4vw;
        font-weight: 400;
        font-style: normal;
        word-wrap: break-word !important; /* Memungkinkan teks terpotong dan dibungkus */
        word-break: break-word !important; /* Memastikan teks mematuhi pembatas lebar */
        white-space: normal !important;
    }

    p {
        color: black; /* Pastikan paragraf memiliki warna hitam */
        font-size: 1rem; /* Atur ukuran font agar tetap nyaman dibaca */
        line-height: 1.6; /* Menjaga spasi antar baris agar tidak terlalu rapat */
        width: 100%; /* Paragraf mengikuti lebar layar */
        word-wrap: break-word; /* Menghindari teks yang terlalu panjang tidak terbungkus */
        margin-top: 10px; /* Memberi jarak atas agar tidak terlalu rapat dengan elemen di atasnya */
    }

</style>
@endsection