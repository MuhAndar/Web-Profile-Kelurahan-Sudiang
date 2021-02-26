@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="w3l-index3 pt-5" id="kebersihan">
            <div class="container pt-lg-3">
                <div class="header-section text-center">
                    <h3>Kepala Seksi Kebersihan</h3>
                    <hr/>
                </div>
                <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-bmr-tab" data-toggle="pill" href="#v-pills-bmr" role="tab" aria-controls="v-pills-bmr" aria-selected="true">Keterangan Belum Memiliki Rumah</a>
                      <a class="nav-link" id="v-pills-gaib-tab" data-toggle="pill" href="#v-pills-gaib" role="tab" aria-controls="v-pills-gaib" aria-selected="false">Keterangan Gaib</a>
                      <a class="nav-link" id="v-pills-keramaian-tab" data-toggle="pill" href="#v-pills-keramaian" role="tab" aria-controls="v-pills-keramaian" aria-selected="false">Izin Keramaian</a>
                      <a class="nav-link" id="v-pills-kbik-tab" data-toggle="pill" href="#v-pills-kbik" role="tab" aria-controls="v-pills-kbik" aria-selected="false">Keterangan Bukan Istri Kedua</a>
                      <a class="nav-link" id="v-pills-skck-tab" data-toggle="pill" href="#v-pills-skck" role="tab" aria-controls="v-pills-skck" aria-selected="false">Surat Keterangan Catatan Kepolisian</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-bmr" role="tabpanel" aria-labelledby="v-pills-bmr-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sequi debitis sed neque, placeat consequuntur! Doloribus, earum. Assumenda, obcaecati voluptatibus?</div>
                      <div class="tab-pane fade" id="v-pills-gaib" role="tabpanel" aria-labelledby="v-pills-gaib-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea rem modi praesentium alias repellat! Odit maxime recusandae vel illum tempore.</div>
                      <div class="tab-pane fade" id="v-pills-keramaian" role="tabpanel" aria-labelledby="v-pills-keramaian-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt fugit quasi excepturi sint. Dicta culpa porro eius est voluptatibus.</div>
                      <div class="tab-pane fade" id="v-pills-kbik" role="tabpanel" aria-labelledby="v-pills-kbik-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-skck" role="tabpanel" aria-labelledby="v-pills-skck-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection