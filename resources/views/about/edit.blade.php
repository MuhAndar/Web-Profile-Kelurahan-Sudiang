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
          <h3 class="box-title">Edit Data Kepala Tentang Kami</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('about.update' , $about->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kelurahan</label>
              <input type="text" class="form-control" name="text1" placeholder="Contoh = Kelurahan Sudiang"  value="{{ $about->text1 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ulasan Singkat</label>
              <input type="text" class="form-control" name="text2" placeholder="Contoh = Kelurahan Sudiang adalah kelurahan yang berada di Biringkanaya"  value="{{ $about->text2 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Text</label>
              <input type="text" class="form-control" name="text3" placeholder="Text"  value="{{ $about->text3 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Kemendagri</label>
              <input type="text" class="form-control" name="text4" placeholder="Contoh = 73.71.11.1005"  value="{{ $about->text4 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Pos</label>
              <input type="text" class="form-control" name="text5" placeholder="Contoh = 90242"  value="{{ $about->text5 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Luas</label>
              <input type="text" class="form-control" name="text6" placeholder="Contoh = 805 Ha"  value="{{ $about->text6 }}">
            </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('about.index') }}" class = "btn btn-danger">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection