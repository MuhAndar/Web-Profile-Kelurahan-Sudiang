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
                  @foreach ($perekonomian1 as $item1)
                  @foreach ($perekonomian2 as $item2)
                  @foreach ($perekonomian3 as $item3)
                  @foreach ($perekonomian4 as $item4)
                  @foreach ($perekonomian5 as $item5)
                  @foreach ($perekonomian6 as $item6)
                  @foreach ($perekonomian7 as $item7)
                  @foreach ($perekonomian8 as $item8)
                  @foreach ($perekonomian9 as $item9)
                  @foreach ($perekonomian10 as $item10)
                  @foreach ($perekonomian11 as $item11)
                  @foreach ($perekonomian12 as $item12)
                  @foreach ($perekonomian13 as $item13)
                  @foreach ($perekonomian14 as $item14)
                  <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-imb-tab" data-toggle="pill" href="#v-pills-imb" role="tab" aria-controls="v-pills-imb" aria-selected="true">{{$item14->text2}}</a>
                      <a class="nav-link" id="v-pills-usaha-tab" data-toggle="pill" href="#v-pills-usaha" role="tab" aria-controls="v-pills-usaha" aria-selected="false">{{$item13->text2}}</a>
                      <a class="nav-link" id="v-pills-situ-tab" data-toggle="pill" href="#v-pills-situ" role="tab" aria-controls="v-pills-situ" aria-selected="false">{{$item12->text2}}</a>
                      <a class="nav-link" id="v-pills-domisiliusaha-tab" data-toggle="pill" href="#v-pills-domisiliusaha" role="tab" aria-controls="v-pills-domisiliusaha" aria-selected="false">{{$item11->text2}}</a>
                      <a class="nav-link" id="v-pills-bangunan-tab" data-toggle="pill" href="#v-pills-bangunan" role="tab" aria-controls="v-pills-bangunan" aria-selected="false">{{$item10->text2}}</a>
                      <a class="nav-link" id="v-pills-nikah-tab" data-toggle="pill" href="#v-pills-nikah" role="tab" aria-controls="v-pills-nikah" aria-selected="false">{{$item9->text2}}</a>
                      <a class="nav-link" id="v-pills-polri-tab" data-toggle="pill" href="#v-pills-polri" role="tab" aria-controls="v-pills-polri" aria-selected="false">{{$item8->text2}}</a>
                      <a class="nav-link" id="v-pills-belumnikah-tab" data-toggle="pill" href="#v-pills-belumnikah" role="tab" aria-controls="v-pills-belumnikah" aria-selected="false">{{$item7->text2}}</a>
                      <a class="nav-link" id="v-pills-sktm-tab" data-toggle="pill" href="#v-pills-sktm" role="tab" aria-controls="v-pills-sktm" aria-selected="false">{{$item6->text2}}</a>
                      <a class="nav-link" id="v-pills-skjd-tab" data-toggle="pill" href="#v-pills-skjd" role="tab" aria-controls="v-pills-skjd" aria-selected="false">{{$item5->text2}}</a>
                      <a class="nav-link" id="v-pills-kbtp-tab" data-toggle="pill" href="#v-pills-kbtp" role="tab" aria-controls="v-pills-kbtp" aria-selected="false">{{$item4->text2}}</a>
                      <a class="nav-link" id="v-pills-sktp-tab" data-toggle="pill" href="#v-pills-sktp" role="tab" aria-controls="v-pills-sktp" aria-selected="false">{{$item3->text2}}</a>
                      <a class="nav-link" id="v-pills-ktm-tab" data-toggle="pill" href="#v-pills-ktm" role="tab" aria-controls="v-pills-ktm" aria-selected="false">{{$item2->text2}}</a>
                      <a class="nav-link" id="v-pills-pbb-tab" data-toggle="pill" href="#v-pills-pbb" role="tab" aria-controls="v-pills-pbb" aria-selected="false">{{$item1->text2}}</a>
                    </div>
                  </div>
                  <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-imb" role="tabpanel" aria-labelledby="v-pills-imb-tab">{{$item14->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-usaha" role="tabpanel" aria-labelledby="v-pills-usaha-tab">{{$item13->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-situ" role="tabpanel" aria-labelledby="v-pills-situ-tab">{{$item12->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-domisiliusaha" role="tabpanel" aria-labelledby="v-pills-domisiliusaha-tab">{{$item11->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-bangunan" role="tabpanel" aria-labelledby="v-pills-bangunan-tab">{{$item10->text3}}/div>
                      <div class="tab-pane fade" id="v-pills-nikah" role="tabpanel" aria-labelledby="v-pills-nikah-tab">{{$item9->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-polri" role="tabpanel" aria-labelledby="v-pills-polri-tab">L{{$item8->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-belumnikah" role="tabpanel" aria-labelledby="v-pills-belumnikah-tab">{{$item7->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-sktm" role="tabpanel" aria-labelledby="v-pills-sktm-tab">{{$item6->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-skjd" role="tabpanel" aria-labelledby="v-pills-skjd-tab">{{$item5->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-kbtp" role="tabpanel" aria-labelledby="v-pills-kbtp-tab">{{$item4->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-sktp" role="tabpanel" aria-labelledby="v-pills-sktp-tab">{{$item3->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-ktm" role="tabpanel" aria-labelledby="v-pills-ktm-tab">{{$item2->text3}}</div>
                      <div class="tab-pane fade" id="v-pills-pbb" role="tabpanel" aria-labelledby="v-pills-pbb-tab">L{{$item1->text3}}</div>
                    </div>
                  </div>
                  @endforeach
                  @endforeach
                  @endforeach
                  @endforeach
                  @endforeach
                  @endforeach
                  @endforeach
                  @endforeach
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