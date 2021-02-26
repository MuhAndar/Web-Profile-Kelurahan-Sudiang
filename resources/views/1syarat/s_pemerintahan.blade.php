@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="w3l-index3 pt-5" id="pemerintahan">
            <div class="container pt-lg-3">
                <div class="header-section text-center">
                    <h3>Kepala Seksi Pemerintahan</h3>
                    <hr/>
                </div>
                <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-kk-tab" data-toggle="pill" href="#v-pills-kk" role="tab" aria-controls="v-pills-kk" aria-selected="true">KK / KTP</a>
                      <a class="nav-link" id="v-pills-spp-tab" data-toggle="pill" href="#v-pills-spp" role="tab" aria-controls="v-pills-spp" aria-selected="false">Surat Pindah Penduduk</a>
                      <a class="nav-link" id="v-pills-domisili-tab" data-toggle="pill" href="#v-pills-domisili" role="tab" aria-controls="v-pills-domisili" aria-selected="false">Keterangan Domisili</a>
                      <a class="nav-link" id="v-pills-tidakdomisili" data-toggle="pill" href="#v-pills-tidakdomisili" role="tab" aria-controls="v-pills-tidakdomisili" aria-selected="false">Keterangan Tidak Berdomisili</a>
                      <a class="nav-link" id="v-pills-akte-tab" data-toggle="pill" href="#v-pills-akte" role="tab" aria-controls="v-pills-akte" aria-selected="false">Akte Kelahiran</a>
                      <a class="nav-link" id="v-pills-kbbk-tab" data-toggle="pill" href="#v-pills-kbbk" role="tab" aria-controls="v-pills-kbbk" aria-selected="false">Keterangan Belum Ber-KTP</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-kk" role="tabpanel" aria-labelledby="v-pills-kk-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sequi debitis sed neque, placeat consequuntur! Doloribus, earum. Assumenda, obcaecati voluptatibus?</div>
                      <div class="tab-pane fade" id="v-pills-spp" role="tabpanel" aria-labelledby="v-pills-spp-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea rem modi praesentium alias repellat! Odit maxime recusandae vel illum tempore.</div>
                      <div class="tab-pane fade" id="v-pills-domisili" role="tabpanel" aria-labelledby="v-pills-domisili-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt fugit quasi excepturi sint. Dicta culpa porro eius est voluptatibus.</div>
                      <div class="tab-pane fade" id="v-pills-tidakdomisili" role="tabpanel" aria-labelledby="v-pills-tidakdomisili-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-akte" role="tabpanel" aria-labelledby="v-pills-akte-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-kbbk" role="tabpanel" aria-labelledby="v-pills-kbbk-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection