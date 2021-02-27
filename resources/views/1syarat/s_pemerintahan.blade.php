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
                  @foreach ($pemerintahan1 as $item1)
                  @foreach ($pemerintahan2 as $item2)
                  @foreach ($pemerintahan3 as $item3)
                  @foreach ($pemerintahan4 as $item4)
                  @foreach ($pemerintahan5 as $item5)
                  @foreach ($pemerintahan6 as $item6)
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-kk-tab" data-toggle="pill" href="#v-pills-kk" role="tab" aria-controls="v-pills-kk" aria-selected="true">{{$item6->text2}}</a>
                      <a class="nav-link" id="v-pills-spp-tab" data-toggle="pill" href="#v-pills-spp" role="tab" aria-controls="v-pills-spp" aria-selected="false">{{$item5->text2}}</a>
                      <a class="nav-link" id="v-pills-domisili-tab" data-toggle="pill" href="#v-pills-domisili" role="tab" aria-controls="v-pills-domisili" aria-selected="false">{{$item4->text2}}</a>
                      <a class="nav-link" id="v-pills-tidakdomisili" data-toggle="pill" href="#v-pills-tidakdomisili" role="tab" aria-controls="v-pills-tidakdomisili" aria-selected="false">{{$item3->text2}}</a>
                      <a class="nav-link" id="v-pills-akte-tab" data-toggle="pill" href="#v-pills-akte" role="tab" aria-controls="v-pills-akte" aria-selected="false">{{$item2->text2}}</a>
                      <a class="nav-link" id="v-pills-kbbk-tab" data-toggle="pill" href="#v-pills-kbbk" role="tab" aria-controls="v-pills-kbbk" aria-selected="false">{{$item1->text2}}</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-kk" role="tabpanel" aria-labelledby="v-pills-kk-tab">{{$item6->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-spp" role="tabpanel" aria-labelledby="v-pills-spp-tab">{{$item5->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-domisili" role="tabpanel" aria-labelledby="v-pills-domisili-tab">{{$item4->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-tidakdomisili" role="tabpanel" aria-labelledby="v-pills-tidakdomisili-tab">{{$item5->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-akte" role="tabpanel" aria-labelledby="v-pills-akte-tab">{{$item2->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-kbbk" role="tabpanel" aria-labelledby="v-pills-kbbk-tab">{{$item1->text23}}</div>
                    </div>
                  </div>
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
</section>
<!-- //features -->
@endsection