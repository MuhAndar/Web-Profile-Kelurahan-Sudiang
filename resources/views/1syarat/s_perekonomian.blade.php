@extends('layout')
@section('content')
<!-- //features -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="w3l-index3 pt-5" id="perekonomian">
            <div class="container pt-lg-3">
                <div class="header-section text-center">
                    <h3>Kepala Seksi Perekonomian</h3>
                    <hr/>
                </div>
                <div class="row">
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-imb-tab" data-toggle="pill" href="#v-pills-imb" role="tab" aria-controls="v-pills-imb" aria-selected="true">Izin Mendirikan Bangunan</a>
                      <a class="nav-link" id="v-pills-usaha-tab" data-toggle="pill" href="#v-pills-usaha" role="tab" aria-controls="v-pills-usaha" aria-selected="false">Keterangan Usaha</a>
                      <a class="nav-link" id="v-pills-situ-tab" data-toggle="pill" href="#v-pills-situ" role="tab" aria-controls="v-pills-situ" aria-selected="false">SITU / SIUP</a>
                      <a class="nav-link" id="v-pills-domisiliusaha-tab" data-toggle="pill" href="#v-pills-domisiliusaha" role="tab" aria-controls="v-pills-domisiliusaha" aria-selected="false">Domisili Usaha</a>
                      <a class="nav-link" id="v-pills-bangunan-tab" data-toggle="pill" href="#v-pills-bangunan" role="tab" aria-controls="v-pills-bangunan" aria-selected="false">Keterangan Bangunan</a>
                      <a class="nav-link" id="v-pills-nikah-tab" data-toggle="pill" href="#v-pills-nikah" role="tab" aria-controls="v-pills-nikah" aria-selected="false">Surat Nikah</a>
                      <a class="nav-link" id="v-pills-polri-tab" data-toggle="pill" href="#v-pills-polri" role="tab" aria-controls="v-pills-polri" aria-selected="false">Kelengkapan Berkas POLRI / TNI</a>
                      <a class="nav-link" id="v-pills-belumnikah-tab" data-toggle="pill" href="#v-pills-belumnikah" role="tab" aria-controls="v-pills-belumnikah" aria-selected="false">Surat Keterangan Belum Menikah</a>
                      <a class="nav-link" id="v-pills-sktm-tab" data-toggle="pill" href="#v-pills-sktm" role="tab" aria-controls="v-pills-sktm" aria-selected="false">Surat Keterangan Tidak Mampu</a>
                      <a class="nav-link" id="v-pills-skjd-tab" data-toggle="pill" href="#v-pills-skjd" role="tab" aria-controls="v-pills-skjd" aria-selected="false">Surat Keterangan Janda / Duda</a>
                      <a class="nav-link" id="v-pills-kbtp-tab" data-toggle="pill" href="#v-pills-kbtp" role="tab" aria-controls="v-pills-kbtp" aria-selected="false">Kelengkapan Berkas Taspen / Pensiunan</a>
                      <a class="nav-link" id="v-pills-sktp-tab" data-toggle="pill" href="#v-pills-sktp" role="tab" aria-controls="v-pills-sktp" aria-selected="false">Surat Kuasa Taspen / Pensiunan</a>
                      <a class="nav-link" id="v-pills-ktm-tab" data-toggle="pill" href="#v-pills-ktm" role="tab" aria-controls="v-pills-ktm" aria-selected="false">Keterangan Telah Menikah</a>
                      <a class="nav-link" id="v-pills-pbb-tab" data-toggle="pill" href="#v-pills-pbb" role="tab" aria-controls="v-pills-pbb" aria-selected="false">PBB</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-imb" role="tabpanel" aria-labelledby="v-pills-imb-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores sequi debitis sed neque, placeat consequuntur! Doloribus, earum. Assumenda, obcaecati voluptatibus?</div>
                      <div class="tab-pane fade" id="v-pills-usaha" role="tabpanel" aria-labelledby="v-pills-usaha-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea rem modi praesentium alias repellat! Odit maxime recusandae vel illum tempore.</div>
                      <div class="tab-pane fade" id="v-pills-situ" role="tabpanel" aria-labelledby="v-pills-situ-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nesciunt fugit quasi excepturi sint. Dicta culpa porro eius est voluptatibus.</div>
                      <div class="tab-pane fade" id="v-pills-domisiliusaha" role="tabpanel" aria-labelledby="v-pills-domisiliusaha-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-bangunan" role="tabpanel" aria-labelledby="v-pills-bangunan-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-nikah" role="tabpanel" aria-labelledby="v-pills-nikah-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-polri" role="tabpanel" aria-labelledby="v-pills-polri-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-belumnikah" role="tabpanel" aria-labelledby="v-pills-belumnikah-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-sktm" role="tabpanel" aria-labelledby="v-pills-sktm-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-skjd" role="tabpanel" aria-labelledby="v-pills-skjd-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-kbtp" role="tabpanel" aria-labelledby="v-pills-kbtp-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-sktp" role="tabpanel" aria-labelledby="v-pills-sktp-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-ktm" role="tabpanel" aria-labelledby="v-pills-ktm-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                      <div class="tab-pane fade" id="v-pills-pbb" role="tabpanel" aria-labelledby="v-pills-pbb-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto beatae quasi debitis aperiam nulla sit voluptatibus atque a reprehenderit eos?</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
@endsection