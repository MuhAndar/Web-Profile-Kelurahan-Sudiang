@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Tambah Sambutan')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Data Sambutan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('sambutan.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label>NIK</label>
          <input type="text" class="form-control" name="nik">
        </div>
        <div class="form-group">
          <label>Salam</label>
          <input type="text" class="form-control" name="isi1">
        </div>
        <div class="form-group">
          <label>Isi</label>
          <input type="text" class="form-control" name="isi2">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          <a href="{{ route('sambutan.index') }}" class="btn btn-danger">Kembali</a>
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