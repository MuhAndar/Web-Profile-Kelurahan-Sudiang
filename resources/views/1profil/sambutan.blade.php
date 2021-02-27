@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
  <div class="testimonials py-5">
    <div class="container py-lg-5">
      <div class="header-section text-center">
        <h3>Sambutan Lurah</h3>
      </div>
      <div class="row mt-4">
        <div class="col-md-10 mx-auto">
          <div class="owl-two owl-carousel owl-theme">
            <div class="item">
              <div class="slider-info mt-lg-4 mt-3">
                @foreach ($sambutan as $item)
                <div class="img-circle">
                  <img src="{{ asset('uploads/'.$item->gambar)}}" class="img-fluid testimonial-img" alt="client image">
                </div>
                <div class="message">
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  <p>{{$item->isi1}}<br> {{$item->isi2}} 
                  </p>
                  <div class="name mt-4">
                    <h4>{{$item->nama}}</h4>
                    <p>{{$item->nik}}</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //features -->
@endsection