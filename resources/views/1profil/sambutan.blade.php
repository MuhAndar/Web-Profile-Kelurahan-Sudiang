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
                <div class="img-circle">
                  <img src="{{ asset('images/profil.jpg')}}" class="img-fluid testimonial-img" alt="client image">
                </div>
                <div class="message">
                  <span class="fa fa-quote-left" aria-hidden="true"></span>
                  <p>Assalamu'alaikum wr wb. <br> Alhamdulillah, puji syukur kita panjatkan kehadirat Allah SWT. yang senantiasa melimpahkan rahmat, taufik, dan Hidayah-Nya kepada kita semua sehingga website Kelurahan Sudiang ini dapat dikembangkan.
                      Shalawat serta salam marilah kita curahkan kepada junjungan kita Nabi Muhammad SAW. beserta para sahabat dan kerabatnya.
                  </p>
                  <div class="name mt-4">
                    <h4>Udin H.I Idris S.Sos M.SI</h4>
                    <p>NIK</p>
                  </div>
                </div>
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