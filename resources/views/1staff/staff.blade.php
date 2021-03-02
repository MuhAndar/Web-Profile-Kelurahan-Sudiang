@extends('layout')
@section('content')
<!-- staff -->
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container py-lg-5">
            <div class="header-section text-center">
              <h3>Staff Kelurahan</h3>
              <hr>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">No. Hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $item)
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            {{-- <td>{{$item->gambar}}</td> --}}
                            <td>
                            <img src="{{ asset('uploads/'.$item->gambar)}}" class="img-fluid testimonial-img" alt="client image">
                            </td>
                            {{-- <div class="col-lg-6 aboutgrid2 mt-lg-0 mt-5">
                                <td>
                                <img src="{{ asset('uploads/'.$item->gambar)}}" alt="staff image" class="img-fluid" />
                                </td> --}}
                            </div>  
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jabatan}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->no_telepon}}</td>
                        </tr>
                        {{-- <tr>
                            <th scope="row">2</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- //staff -->
@endsection