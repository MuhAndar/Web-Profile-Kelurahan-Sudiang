@extends('layout')
@section('content')
<!-- main-slider -->
<section class="w3l-main-slider">
    <div class="companies20-content">
        <div class="companies-wrapper">
            <div class="owl-one owl-carousel owl-theme text-center">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view">
                            <div class="banner-info container">
                            <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">{{$item->nama}}</h3>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1">
                            <div class="banner-info container">
                            <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">Bersama Kami Membuat Semuanya Mudah</h3>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2">
                            <div class="banner-info container">
                            <h3 class="banner-text mb-0">Sudiang Bangkit, Bersatu, dan Membangun</h3>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->

<!--  syarat section -->
<section class="w3l-index1" id="services">
    <div class="features-with-17_sur py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Syarat-Syarat Pengurusan Di Kelurahan</h3>
                <p class="mt-3 mb-5">Diharapkan melengkapi syarat-syaratnya agar proses pengurusan dapat berjalan dengan lancar</p>
            </div>
            <div class="features-with-17-top_sur">
                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-user-circle" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h6><a href="{{ route('sekretaris') }}">Sekretaris</a></h6>
                                {{-- <li><a href="{{ route('tengah.index') }}"><i class="fa fa-phone-square-alt"></i>Tengah</a></li> --}}
                                <br/>
                                <p>Meliputi syarat kepengurusan Surat Pernyataan Ahli Waris, Pengesahan, Surat Keterangan Orang Yang Sama, Keterangan Penghasilan, dan Berkas Pengadilan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-map-o" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h6><a href="{{ route('kebersihan') }}">Kepala Seksi Kebersihan</a></h6>
                                <p>Meliputi syarat kepengurusan Surat Belum Memiliki Rumah, Surat Keterangan Gaib, Surat Izin Keramaian, Keterangan Bukan Istri Kedua, dan SKCK.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-group" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h6><a href="{{ route('pemerintahan') }}">Kepala Seksi Pemerintahan</a> </h6>
                                <p>Meliputi syarat kepengurusan Kartu Keluarga, KTP/KTP Sementara, Surat Pindah Penduduk, Keterangan Domisili, Keterangan Tidak Berdomisili, Akte Kelahiran, dan Keterangan Belum Ber-KTP.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-building" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                <h6><a href="{{ route('perekonomian') }}">Kepala Seksi Perekonomian</a></h6>
                                <p>Meliputi syarat kepengurusan IMB, Ket. Usaha, SITU/SIUP, Domisili Usaha, Ket. Bangunan, Surat Nikah/Belum Nikah, Ket. Telah Menikah, Ket. Janda/Duda, Kelengkapan Berkas POLRI/TNI, Ket. Tidak Mampu, Pengesahan Taspen/Pensiunan, dan PBB.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //syarat section -->

<!-- ekstra -->
<section class="w3l-index2">
    <div class="row abouthy-img-grids no-gutters">
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('images/img4.jpg')}}" alt=" " class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-6 img-one content-mid py-md-0 py-5">
            <div class="info">
                <h3>Profil Lurah</h3>
                <p class="mt-3 mb-5 white">Lurah merupakan pimpinan dari Kelurahan sebagai Perangkat Daerah Kabupaten atau Kota. Seorang Lurah berada di bawah dan bertanggung jawab kepada Camat.</p>
                <a href="{{ route('lurah') }}" class="btn btn-light theme-button">Selengkapnya</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('images/img2.jpg')}}" alt=" " class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-6 img-info content-mid py-md-0 py-5">
            <div class="info">
                <h3>Profil PKK</h3>
                <p class="mt-3 mb-5">PKK atau Pemberdayaan Kesejahteraan Keluarga adalah organisasi kemasyarakatan yang memberdayakan wanita untuk turut berpartisipasi dalam pembangunan Indonesia.</p>
                <a href="{{ route('pkk') }}" class="btn btn-primary theme-button">Selengkapnya</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('images/img8.jpg')}}" alt=" " class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-6 img-info content-mid py-md-0 py-5">
            <div class="info">
                <h3>Kepengurusan Berkas</h3>
                <p class="mt-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatum, nostrum sed alias accusamus earum.</p>
                <a href="{{ route('berkas') }}" class="btn btn-primary theme-button">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- ekstra -->

<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con text-white">
            <div class="col-sm-3 col-6 stats_info counter_grid">
                <span class="fa fa-male"></span>
                <p class="counter">9217</p>
                <h4>Jumlah Laki Laki</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid1">
                <span class="fa fa-female"></span>
                <p class="counter">9601</p>
                <h4>Jumlah Perempuan</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                <span class="fa fa-bar-chart"></span>
                <p class="counter">18.818</p>
                <h4>Jumlah Total Laki-Laki & Perempuan</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                <span class="fa fa-group"></span>
                <p class="counter">5924</p>
                <h4>Jumlah Kepala Keluarga</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->

<!-- blog with slider -->
<section class="w3l-blog-slider py-5" id="blog">
    <div class="container py-lg-4">
        <div class="header-section text-center">
            <h3>Artikel</h3>
            <p class="mt-3 mb-5">Menyediakan informasi informasi terbaru mengenai kelurahan</p>
        </div>
        <div class="inner-sec-w3layouts mt-md-5 mt-4">
            <div class="owl-three owl-carousel owl-theme">
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img4.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 1</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 6th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img5.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 2</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 7th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img6.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 3</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 8th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img7.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 4</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 9th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img8.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 5</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 10th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img9.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 6</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 11th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a><p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content-left-sec">
                        <a class="blog-link d-block zoom-image" href="#blog-single.html"><img src="{{ asset('images/img1.jpg')}}" class="img-fluid scale-image" alt=""></a>
                        <div class="blog-info">
                            <a href="#blog-single.html"><h4 class="mb-0">Berita title 7</h4></a>
                            <h6 class="mt-sm-2 mt-1">Dec 12th, 2020 -</h6>
                            <a href="#blog-single.html" class="category">Industry</a>
                            <p>Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverraorci a.</p>
                            <a href="#blog-single.html" class="btn btn-primary theme-button">Selengkapnya </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog with slider -->
@endsection