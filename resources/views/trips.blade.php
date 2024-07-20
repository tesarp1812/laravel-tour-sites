@extends('layout')

@section('header')
    @section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li class="active"><a href="trips" class="nav-link">Pementasan</a></li>
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
                    <h1 class="mb-3 text-white">Trips</h1>
                    <p>Pementasan Adat dari kampung KAPER</p>
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
                    <span class="backdrop">Trips</span>
                    <span class="subtitle-39191">Adat Show</span>
                    <h3>Pementasan Adat Kampung KAPER</h3>
                </div>
                <p>peserta akan diawali dengan penerimaan secara adat di Paang, di mana mereka akan disambut
                    dengan ritual tradisional yang penuh makna. Setelah itu, peserta akan ronda dari Paang
                    menuju Rumah Gendang, mengikuti tradisi yang menjadi bagian dari perjalanan menuju tempat
                    acara utama. Setibanya di Rumah Gendang, peserta akan mengikuti rangkaian acara adat yang
                    mencakup beberapa ritual khas seperti reis (sebuah upacara pembersihan dan penyucian), wae
                    lu’u (ritual minum dari tempurung kelapa), dan manuk kapu (upacara penyembelihan ayam
                    sebagai persembahan). Acara dilanjutkan dengan tarian Tiba Meka, yang merupakan tarian
                    penyambutan, diikuti oleh tarian Rangkuk Alu, sebuah tarian tradisional yang melibatkan
                    gerakan dinamis dan berirama. Selanjutnya, peserta akan menikmati pementasan tarian Caci,
                    sebuah pertunjukan tari dan permainan perang tradisional yang sarat akan nilai budaya.
                    Sebagai penutup, akan ada tarian Danding, tarian kelompok yang menampilkan kekompakan dan
                    keindahan gerak tarian khas daerah tersebut</p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/product-komodo.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-2 ml-auto">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Trips</span>
                    <span class="subtitle-39191">Discover Benefit</span>
                    <h3>ITINERARY</h3>
                </div>
                <p>
                    <li>penerimaan secara adat di paang</li>
                    <li>ronda dari paang menuju rumah gendang</li>
                    <li>mengikuti rangkaian acara adat dalam rumah gendang;reis,wae lu’u,manuk kapu</li>
                    <li>tarian tiba meka</li>
                    <li>pementasan tarian caci</li>
                    <li>tarian danding</li>
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/pentas.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Trips</span>
                    <span class="subtitle-39191">Discover Benefit</span>
                    <h3>INCLUDE</h3>
                </div>
                <p>
                    <li>mineral water</li>
                    <li>coffe and tea</li>
                    <li>pangan lokal:ubi dan pisang rebus</li>
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/product-komodo.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-2 ml-auto">
                <div class="heading-39101 mb-5">
                    <span class="backdrop">Trips</span>
                    <span class="subtitle-39191">Discover Benefit</span>
                    <h3>EXCLUDE</h3>
                </div>
                <p>
                    <li>wae lu’u (secukupnya)</li>
                    <li>manuk kapu (secukupnya)</li>
                    <li>paki reis (secukupnya)</li>
                    <li>rental songke</li>
                    <li>transportasi</li>
                    <li>asuransi</li>
                    <li>personal need</li>
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/pentas.jpg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="site-section">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="heading-39101 mb-5">
                    <span class="backdrop text-center">Trips</span>
                    <span class="subtitle-39191">Trips Kampung KAPER</span>
                    <h3>Harga Travel Pack</h3>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($travel_pack as $item)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="listing-item">
                        <div class="listing-image">
                            <img src="images/pentas.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-item-content">
                            <a class="px-3 mb-3 category bg-primary" href="#">Rp
                                {{ number_format($item->price, 0, ',', '.') }}</a>
                            <h2 class="mb-1"><a href="trip-single.html">{{ $item->min_pax }} -
                                    {{ $item->max_pax }} Pax</a></h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</div>
@endsection