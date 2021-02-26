@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="w3l-index3 pt-5" id="sekretaris">
            <div class="container pt-lg-3">
                <div class="header-section text-center">
                    <h3>Sekretaris</h3>
                    <hr/>
                </div>
                <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-paw-tab" data-toggle="pill" href="#v-pills-paw" role="tab" aria-controls="v-pills-paw" aria-selected="true">Surat Pernyataan Ahli Waris</a>
                      <a class="nav-link" id="v-pills-pengesahan-tab" data-toggle="pill" href="#v-pills-pengesahan" role="tab" aria-controls="v-pills-pengesahan" aria-selected="false">Pengesahan</a>
                      <a class="nav-link" id="v-pills-kos-tab" data-toggle="pill" href="#v-pills-kos" role="tab" aria-controls="v-pills-kos" aria-selected="false">Surat Keterangan Orang Yang Sama</a>
                      <a class="nav-link" id="v-pills-kp-tab" data-toggle="pill" href="#v-pills-kp" role="tab" aria-controls="v-pills-kp" aria-selected="false">Keterangan Penghasilan</a>
                      <a class="nav-link" id="v-pills-bp-tab" data-toggle="pill" href="#v-pills-bp" role="tab" aria-controls="v-pills-bp" aria-selected="false">Berkas Pengadilan</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-paw" role="tabpanel" aria-labelledby="v-pills-paw-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sequi debitis sed neque, placeat consequuntur! Doloribus, earum. Assumenda, obcaecati voluptatibus?</div>
                      <div class="tab-pane fade" id="v-pills-pengesahan" role="tabpanel" aria-labelledby="v-pills-pengesahan-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea rem modi praesentium alias repellat! Odit maxime recusandae vel illum tempore.</div>
                      <div class="tab-pane fade" id="v-pills-kos" role="tabpanel" aria-labelledby="v-pills-kos-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt fugit quasi excepturi sint. Dicta culpa porro eius est voluptatibus.</div>
                      <div class="tab-pane fade" id="v-pills-kp" role="tabpanel" aria-labelledby="v-pills-kp-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-bp" role="tabpanel" aria-labelledby="v-pills-bp-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection