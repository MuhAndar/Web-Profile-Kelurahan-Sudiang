@extends('layouts.app')
  @section('title','Dashboard')
  @section('page-title','Create')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Kontak</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('kontaks.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{ old('nama') }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat"  value="{{ old('alamat') }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="text" class="form-control" name="no_telepon" placeholder="Nomor Telepon"  value="{{ old('no_telepon') }}">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kontaks.index') }}" class = "btn btn-danger">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection