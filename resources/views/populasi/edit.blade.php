@extends('layouts.app')
  @section('title','Dashboard')
  @section('page-title','Edit')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Populasi</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('populasi.update' , $populasi->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Laki-Laki</label>
                    <input type="text" class="form-control" name="jl" placeholder="Jumlah Laki-Laki"  value="{{ $populasi->jl }}"">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Perempuan</label>
                    <input type="text" class="form-control" name="jp" placeholder="Jumlah Perempuan"  value="{{ $populasi->jp }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Total Laki-Laki/Perempuan</label>
                    <input type="text" class="form-control" name="jlp" placeholder="Jumlah Total Laki-Laki/Perempuan"  value="{{ $populasi->jlp }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Kepala Keluarga</label>
                    <input type="text" class="form-control" name="jkk" placeholder="Jumlah Kepala Keluarga"  value="{{ $populasi->jkk }}">
                </div>
            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Slug</label>
              <input type="text" class="form-control" name="Slug" placeholder="Categories Slug"  value="{{ $categories->slug }}">
            </div> --}}
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('populasi.index') }}" class = "btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection