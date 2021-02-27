@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dashboard')
  @section('page-title','Edit Kontak')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Data Kontak</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('kontaks.update', $kontaks->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{$kontaks->nama}}">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="Email"  value="{{$kontaks->email}}">
        </div>
        <div class="form-group">
          <label>Subjek</label>
          <input type="text" class="form-control" name="subjek" placeholder="Subjek pesan"  value="{{$kontaks->subjuk}}">
        </div>
        <div class="form-group">
          <label>Pesan dan Saran</label>
          <input type="text" class="form-control" name="pesan" placeholder="Pesan dan Saran yang ingin disampaikan"  value="{{$kontaks->pesan}}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
          <a href="{{ route('kontaks.index') }}" class="btn btn-danger">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
  <!-- /.box -->
  @endsection
  @push('datatables')
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
  @endpush