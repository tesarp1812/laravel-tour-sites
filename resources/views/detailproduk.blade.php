@extends('layout')


@section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    {{-- <li><a href="sejarah" class="nav-link">Sejarah</a></li> --}}
    <li class="active"><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li>
        <a href="login" class="btn-login" style="color: #fff !important;">Login</a>
    </li>
@endsection
@endsection

@section('main')
{{-- <div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('{{ asset('images/polsek-malinau-kota-.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-5" data-aos="fade-up">
                    <h1 class="mb-3 text-white lobster-regular">Detail Produk</h1>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach ($product_details as $item)
                <div class="col-md-12" data-aos="fade-up">
                    <div class="row align-items-center">
        
                        <!-- Gambar Produk -->
                        <div class="col-md-6">
                            <div class="product-image text-center">
                                <img src="{{ asset('/storage/image/' . $item->image) }}" alt="{{ $item->sub_name }}" class="img-fluid img-thumbnail">
                            </div>
                        </div>
        
                        <!-- Detail Produk -->
                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title">{{ $product->name ?? 'Nama Produk Tidak Tersedia' }}</h1>
                                <h3 class="product-subtitle">{{ $item->sub_name ?? 'Nama Produk Tidak Tersedia' }}</h3>
                                <p class="product-price"><strong>Harga:</strong> Rp.{{ number_format($item->price, 0, ',', '.') }}</p>

                                <!-- Garis Pembatas -->
                                <hr class="divider">

                                <div class="product-description">
                                    <p>Hubungi Kontak di bawah ini untuk <br>melakukan Pemesanan :</p>
                                </div>
        
                                <!-- Tombol Aksi -->
                                <div class="action-buttons mt-4">
                                    <button class="btn btn-primary btn-lg">KLIK DISINI UNTUK CHAT VIA WHATSAPP</button>
                                    {{-- <button class="btn btn-secondary btn-lg">Beli Sekarang</button> --}}
                                </div>
                            </div>
                        </div>
        
                    </div>

                    <!-- Garis Pembatas -->
                    <hr class="divider">

                    <!-- Deskripsi Produk (Keluar dari Struktur Row) -->
                    <div class="product-description">
                        <p><strong>Deskripsi :</strong></p>
                        <p>{{ $product->description ?? 'Deskripsi tidak tersedia' }}</p>
                    </div>
                </div>
            @endforeach
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
    .product-image img {
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-details {
        padding: 20px;
    }

    .product-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 15px;
    }
    
    .product-subtitle {
        font-size: 2rem;
        font-weight: 500px;
        margin-bottom: 15px;
    }

    .product-price {
        font-size: 1.5rem;
        color: #28a745;
        margin-bottom: 15px;
    }

    .product-description {
        font-size: 1rem;
        margin-bottom: 20px;
        word-wrap: break-word; /* Agar kata yang panjang terpotong dan pindah baris */
        overflow-wrap: break-word; /* Untuk memastikan kata tidak keluar dari kontainer */
        white-space: normal; /* Memastikan teks dalam deskripsi dapat dipisahkan menjadi baris baru */
        word-break: break-word; /* Untuk memotong kata yang panjang */
    }

    .action-buttons button {
        margin-right: 10px;
    }

    .divider {
        border-top: 2px solid #ddd; /* Garis tipis abu-abu */
        margin-top: 20px; /* Jarak atas sebelum garis */
        margin-bottom: 20px; /* Jarak bawah setelah garis */
    }

    .action-buttons {
        margin-top: 20px; /* Menambahkan jarak antara deskripsi dan tombol */
    }

</style>

@endsection
