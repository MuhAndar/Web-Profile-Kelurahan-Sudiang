@extends('layout')
@section('content')
<!-- features -->
<section class="w3l-testimonials" id="testimonials">
  <div class="testimonials py-5">
      <div class="w3l-index3 pt-5" id="vmts">
          <div class="container pt-lg-3">
              <div class="header-section text-center">
                  <h3>Visi & Misi</h3>
                  <hr />
              </div>
          <div class="aboutgrids row">
            @foreach ($visimisi1 as $item1)
            @foreach ($visimisi2 as $item2)
            @foreach ($visimisi3 as $item3)
            @foreach ($visimisi4 as $item4)
            @foreach ($visimisi5 as $item5)
            <div class="col-lg-6 aboutgrid2 mt-lg-0 mt-5">
              <img src="{{ asset('uploads/'.$item5->gambar)}}" alt="vmts image" class="img-fluid" />
            </div>  
            <div class="col-lg-6 aboutgrid1">
                  <h5>{{$item5->text1}}</h5>
                  <ul class="services-list mb-5">
                  <hr>
                    <li>{{$item5->text2}}</li>
                    <li>{{$item4->text2}}</li>
                    <li>{{$item3->text2}}</li>
                    <li>{{$item2->text2}}</li>
                    <li>{{$item1->text2}}</li>          
                  </ul>
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