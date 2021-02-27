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
                  @foreach ($kebersihan1 as $item1)
                  @foreach ($kebersihan2 as $item2)
                  @foreach ($kebersihan3 as $item3)
                  @foreach ($kebersihan4 as $item4)
                  @foreach ($kebersihan5 as $item5)
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-bmr-tab" data-toggle="pill" href="#v-pills-bmr" role="tab" aria-controls="v-pills-bmr" aria-selected="true">{{$item5->text2}}</a>
                      <a class="nav-link" id="v-pills-gaib-tab" data-toggle="pill" href="#v-pills-gaib" role="tab" aria-controls="v-pills-gaib" aria-selected="false">{{$item4->text2}}</a>
                      <a class="nav-link" id="v-pills-keramaian-tab" data-toggle="pill" href="#v-pills-keramaian" role="tab" aria-controls="v-pills-keramaian" aria-selected="false">{{$item3->text2}}</a>
                      <a class="nav-link" id="v-pills-kbik-tab" data-toggle="pill" href="#v-pills-kbik" role="tab" aria-controls="v-pills-kbik" aria-selected="false">{{$item2->text2}}</a>
                      <a class="nav-link" id="v-pills-skck-tab" data-toggle="pill" href="#v-pills-skck" role="tab" aria-controls="v-pills-skck" aria-selected="false">{{$item1->text2}}</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-bmr" role="tabpanel" aria-labelledby="v-pills-bmr-tab">{{$item5->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-gaib" role="tabpanel" aria-labelledby="v-pills-gaib-tab">{{$item4->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-keramaian" role="tabpanel" aria-labelledby="v-pills-keramaian-tab">{{$item1->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-kbik" role="tabpanel" aria-labelledby="v-pills-kbik-tab">{{$item2->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-skck" role="tabpanel" aria-labelledby="v-pills-skck-tab">{{$item1->text3}}</div>
                    </div>
                  </div>
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