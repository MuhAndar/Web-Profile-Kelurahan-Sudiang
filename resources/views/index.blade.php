@extends('layout')
@section('content')
<!-- main-slider -->
<section class="w3l-main-slider">
    <div class="companies20-content">
        <div class="companies-wrapper">
            <div class="owl-one owl-carousel owl-theme text-center">
                @foreach ($slogan as $item)
                <div class="item">
                    <li>
                        <div class="slider-info banner-view">
                            <div class="banner-info container">
                            <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">{{$item->text1}}</h3>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1">
                            <div class="banner-info container">
                            <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">{{$item->text2}}</h3>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2">
                            <div class="banner-info container">
                            <h3 class="banner-text mb-0">{{$item->text3}}</h3>
                            </div>
                        </div>
                    </li>
                </div>                  
                @endforeach
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
                                @foreach ($sekretaris1 as $item1)
                                @foreach ($sekretaris2 as $item2)
                                @foreach ($sekretaris3 as $item3)
                                @foreach ($sekretaris4 as $item4)
                                @foreach ($sekretaris5 as $item5)
                                <h6><a href="{{ route('sekretaris') }}">Sekretaris</a></h6>
                                <br/>
                                <p>Meliputi {{$item5->text2}}, {{$item4->text2}}, {{$item3->text2}}, {{$item2->text2}}, dan {{$item1->text2}}</p>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-map-o" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                @foreach ($kebersihan1 as $item1)
                                @foreach ($kebersihan2 as $item2)
                                @foreach ($kebersihan3 as $item3)
                                @foreach ($kebersihan4 as $item4)
                                @foreach ($kebersihan5 as $item5)
                                <h6><a href="{{ route('kebersihan') }}">Kepala Seksi Kebersihan</a></h6>
                                <p>Meliputi {{$item5->text2}}, {{$item4->text2}}, {{$item3->text2}}, {{$item2->text2}}, dan {{$item1->text2}}.</p>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-group" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                @foreach ($pemerintahan1 as $item1)
                                @foreach ($pemerintahan2 as $item2)
                                @foreach ($pemerintahan3 as $item3)
                                @foreach ($pemerintahan4 as $item4)
                                @foreach ($pemerintahan5 as $item5)
                                @foreach ($pemerintahan6 as $item6)
                                <h6><a href="{{ route('pemerintahan') }}">Kepala Seksi Pemerintahan</a> </h6>
                                <p>Meliputi {{$item6->text2}}, {{$item5->text2}}, {{$item3->text2}}, K{{$item3->text2}}, {{$item2->text2}}, 
                                    dan {{$item1->text2}}.</p>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-6 col-lg-4 col-xl-3">
                        <div class="features-with-17-right-tp_sur">
                            <div class="features-with-17-left1">
                                <span class="fa fa-building" aria-hidden="true"></span>
                            </div>
                            <div class="features-with-17-left2">
                                @foreach ($perekonomian1 as $item1)
                                @foreach ($perekonomian2 as $item2)
                                @foreach ($perekonomian3 as $item3)
                                @foreach ($perekonomian4 as $item4)
                                @foreach ($perekonomian5 as $item5)
                                @foreach ($perekonomian6 as $item6)
                                @foreach ($perekonomian7 as $item7)
                                @foreach ($perekonomian8 as $item8)
                                @foreach ($perekonomian9 as $item9)
                                @foreach ($perekonomian10 as $item10)
                                @foreach ($perekonomian11 as $item11)
                                @foreach ($perekonomian12 as $item12)
                                @foreach ($perekonomian13 as $item13)
                                @foreach ($perekonomian14 as $item14)
                                <h6><a href="{{ route('perekonomian') }}">Kepala Seksi Perekonomian</a></h6>
                                <p>Meliputi {{$item14->text2}}, {{$item13->text2}}, {{$item12->text2}}, {{$item11->text2}}, {{$item10->text2}}, 
                                    {{$item9->text2}}, {{$item8->text2}}, {{$item7->text2}}, dll.</p>
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
                                @endforeach
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
        @foreach ($tengah as $item)
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('uploads/'.$item->gambar1) }}" alt=" " width="510" height="490">
            {{-- <img src="{{ asset('uploads/'.$item->gambar1) }}" alt=" " class="img-fluid"> --}}
            {{-- <img src="{{ asset('images/img4.jpg')}}" alt=" " class="img-fluid"> --}}
        </div>
        <div class="col-lg-4 col-md-6 img-one content-mid py-md-0 py-5">
            <div class="info">
                <h3>Profil Lurah</h3>
                <p class="mt-3 mb-5 white">{{$item->text2}}</p>
                <a href="{{ route('lurah') }}" class="btn btn-light theme-button">Selengkapnya</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('uploads/'.$item->gambar2)}}" alt=" " width="510" height="490">
            {{-- <img src="{{ asset('uploads/'.$item->gambar2)}}" alt=" " class="img-fluid"> --}}
            {{-- <img src="{{ asset('images/img2.jpg')}}" alt=" " class="img-fluid"> --}}
        </div>
        <div class="col-lg-4 col-md-6 img-info content-mid py-md-0 py-5">
            <div class="info">
                <h3>Profil PKK</h3>
                <p class="mt-3 mb-5">{{$item->text1}}</p>
                <a href="{{ route('pkk') }}" class="btn btn-primary theme-button">Selengkapnya</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 img-one">
            <img src="{{ asset('uploads/'.$item->gambar3) }}" alt="" width="510" height="490">
            {{-- <img src="{{ asset('images/img8.jpg')}}" alt=" " class="img-fluid"> --}}
        </div>
        <div class="col-lg-4 col-md-6 img-info content-mid py-md-0 py-5">
            <div class="info">
                <h3>Kepengurusan Berkas</h3>
                <p class="mt-3 mb-5">{{$item->text3}}</p>
                <a href="{{ route('berkas') }}" class="btn btn-primary theme-button">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- ekstra -->

<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        @foreach ($populasi as $item)
        <div class="row stats-con text-white">
            <div class="col-sm-3 col-6 stats_info counter_grid">
                <span class="fa fa-male"></span>
                <p class="counter">{{$item->jl}}</p>
                <h4>Jumlah Laki Laki</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid1">
                <span class="fa fa-female"></span>
                <p class="counter">{{$item->jp}}</p>
                <h4>Jumlah Perempuan</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid mt-sm-0 mt-5">
                <span class="fa fa-bar-chart"></span>
                <p class="counter">{{$item->jlp}}</p>
                <h4>Jumlah Total Laki-Laki & Perempuan</h4>
            </div>
            <div class="col-sm-3 col-6 stats_info counter_grid2 mt-sm-0 mt-5">
                <span class="fa fa-group"></span>
                <p class="counter">{{$item->jkk}}</p>
                <h4>Jumlah Kepala Keluarga</h4>
            </div>
        </div>
        @endforeach
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