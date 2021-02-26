@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="w3l-index3 pt-5" id="ringkasan">
            <div class="container pt-lg-3">
                <div class="header-section text-center">
                    <h3>Ringkasan</h3>
                    <hr/>
                </div>
            <div class="aboutgrids row">
                <div class="col-lg-6 aboutgrid1">
                    <h4>Kelurahan Sudiang</h4>
                    <p>Sudiang adalah kelurahan yang berada di Biringkanaya, Makassar, Sulawesi Selatan, Indonesia. Kelurahan ini berdiri pada tanggal 9 November 1972. Sudiang memiliki 61 RT dan 21 RW dengan luas wilayah 805 Ha. </p>
                    <ul class="services-list mb-5">
                    <h5>Batas Wilayah</h5>
                    <hr>
                    <li>Utara   : Kabupaten Maros</li>
                    <li>Selatan : Kelurahan Pai</li>
                    <li>Timur   : Kelurahan Bakung</li>
                    <li>Barat   : Kelurahan Bulurokeng dan Kabupaten Maros</li>          
                    </ul>
                </div>
                <div class="col-lg-6 aboutgrid2 mt-lg-0 mt-5">
                    <img src="{{ asset('images/ringkasan.jpg')}}" alt="ringkasan image" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection