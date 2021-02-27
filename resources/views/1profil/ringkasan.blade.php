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
                    @foreach ($ringkasan as $item)
                    <h4>{{$item->nama}}</h4>
                    <p>{{$item->isi}} </p>
                    <ul class="services-list mb-5">
                    <h5>Batas Wilayah</h5>
                    <hr>
                    <li>Utara   : {{$item->bwu}}</li>
                    <li>Selatan : {{$item->bws}}</li>
                    <li>Timur   : {{$item->bwt}}</li>
                    <li>Barat   : {{$item->bwb}}</li>          
                    </ul>
                    @endforeach
                </div>
                <div class="col-lg-6 aboutgrid2 mt-lg-0 mt-5">
                    <img src="{{ asset('uploads/'.$item->gambar)}}" alt="ringkasan image" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection