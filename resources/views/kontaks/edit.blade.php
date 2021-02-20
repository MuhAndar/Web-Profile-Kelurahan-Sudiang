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
          <h3 class="box-title">Edit Kontak</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('kontaks.update' , $kontaks->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{ $kontaks->nama }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Email"  value="{{ $kontaks->email }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat"  value="{{ $kontaks->alamat }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="text" class="form-control" name="no_telepon" placeholder="Nomor Telepon"  value="{{ $kontaks->no_telepon }}">
            </div>
            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Slug</label>
              <input type="text" class="form-control" name="Slug" placeholder="Categories Slug"  value="{{ $categories->slug }}">
            </div> --}}
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