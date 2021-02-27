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
                  @foreach ($sekretaris1 as $item1)
                  @foreach ($sekretaris2 as $item2)
                  @foreach ($sekretaris3 as $item3)
                  @foreach ($sekretaris4 as $item4)
                  @foreach ($sekretaris5 as $item5)
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-paw-tab" data-toggle="pill" href="#v-pills-paw" role="tab" aria-controls="v-pills-paw" aria-selected="true">{{$item5->text2}}</a>
                      <a class="nav-link" id="v-pills-pengesahan-tab" data-toggle="pill" href="#v-pills-pengesahan" role="tab" aria-controls="v-pills-pengesahan" aria-selected="false">{{$item4->text2}}</a>
                      <a class="nav-link" id="v-pills-kos-tab" data-toggle="pill" href="#v-pills-kos" role="tab" aria-controls="v-pills-kos" aria-selected="false">{{$item3->text2}}</a>
                      <a class="nav-link" id="v-pills-kp-tab" data-toggle="pill" href="#v-pills-kp" role="tab" aria-controls="v-pills-kp" aria-selected="false">{{$item2->text2}}</a>
                      <a class="nav-link" id="v-pills-bp-tab" data-toggle="pill" href="#v-pills-bp" role="tab" aria-controls="v-pills-bp" aria-selected="false">{{$item1->text2}}</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-paw" role="tabpanel" aria-labelledby="v-pills-paw-tab">{{$item5->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-pengesahan" role="tabpanel" aria-labelledby="v-pills-pengesahan-tab">{{$item4->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-kos" role="tabpanel" aria-labelledby="v-pills-kos-tab">{{$item3->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-kp" role="tabpanel" aria-labelledby="v-pills-kp-tab">{{$item2->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-bp" role="tabpanel" aria-labelledby="v-pills-bp-tab">{{$item1->text3}}</div>
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