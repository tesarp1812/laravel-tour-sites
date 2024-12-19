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
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url('images/wisata-gibran.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col" data-aos="fade-up">
                    <h1 class="mb-3 text-white lobster-regular">Pelaku Usaha</h1>
                    <p id="umkm-description">
                        Jelajahi keberagaman Produk UMKM di Kota Samarinda melalui galeri kami. Temukan produk<br>
                         unik dan berkualitas tinggi dengan dedikasi dan kreativitas tinggi oleh pengusaha lokal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="site-section py-5">
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
</div> --}}


<div class="site-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">UMKM</span>
                    <span class="subtitle-39191">Produk UMKM</span>
                    {{-- <h3>{{ $product->name ?? ''}}</h3> --}}
                </div>
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

            <!-- Modal -->
                <div class="modal fade" id="itemDetailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <img src="{{ asset('/storage/image/' . $item->image) }}" alt="Product Image" class="img-fluid">
                        <h2>{{$item->sub_name}}</h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            {{-- end modal --}}
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- @include('components.modal') -->
<script>
    // function showItemDetails(itemId) {
    //     // Lakukan permintaan AJAX untuk mendapatkan detail produk
    //     $.ajax({
    //         url: '/products/' + itemId, // Ganti dengan URL yang sesuai untuk mendapatkan detail produk
    //         method: 'GET',
    //         success: function(data) {
    //             // Isi konten modal dengan data yang diterima
    //             $('#modalContent').html(`
    //                 <h5>${data.product.sub_name}</h5>
    //                 <p>Harga: Rp.${data.product.price}</p>
    //                 <p>Deskripsi: ${data.product.description}</p>
    //             `);
    //         },
    //         error: function() {
    //             $('#modalContent').html('<p>Detail tidak ditemukan.</p>');
    //         }
    //     });
    // }
</script>

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
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card-img-top img {
        object-fit: cover;
        height: 200px;
        width: 100%;
        border-radius: 12px 12px 0 0;
    }

    .badge {
        font-size: 0.8rem;
        padding: 0.5rem 1rem;
        border-radius: 12px;
    }

    .btn {
        border-radius: 50px;
    }
</style>

@endsection
